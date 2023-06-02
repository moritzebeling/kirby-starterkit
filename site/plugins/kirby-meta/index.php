<?php

use Kirby\Cms\App as Kirby;
use Kirby\Cms\Response;
use Kirby\Cms\Html;
use Kirby\Cms\Content;
use Kirby\Toolkit\Str;

function jsonld( array $data ){
    return Html::tag(
        'script',
        json_encode($data, JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ),
        ['type' => 'application/ld+json']
    );
}

Kirby::plugin('moritzebeling/kirby-meta', [

    'options' => [
        'title_schema' => '{page} | {site}',
        'preview_image.resize' => [
            'width' => 1200,
            'height' => 630,
            'crop' => true,
        ],
        // page-id
        // /^page-id$/
        // /parent\/.*/
        'ignore' => ['error','panel']
    ],

    'blueprints' => [
        'fields/meta/image' => __DIR__ . '/blueprints/field-image.yml',
        'tabs/meta/page' => __DIR__ . '/blueprints/tab-page.yml',
        'tabs/meta/site' => __DIR__ . '/blueprints/tab-site.yml',
    ],

    'snippets' => [
        'meta' => __DIR__ . '/snippets/meta.php',
        'meta/sitemap' => __DIR__ . '/snippets/sitemap.php',
        'meta/robots' => __DIR__ . '/snippets/robots.php',
    ],

    'siteMethods' => [
        'meta' => function (): Content {
            return new Content([
                'title' => (string)$this->title(),
                'description' => (string)$this->meta_description(),
                'keywords' => (string)$this->meta_tags(),
                'image' => (string)$this->preview_image(),
            ], $this);
        },
        'schema' => function (): array {
            $meta = $this->meta();
            $thumbnail = asset( option('moritzebeling.kirby-favicon.favicon.png') );
            if( $image = $meta->image()->toFile() ){
                $image = $image->thumb(option('moritzebeling.kirby-meta.preview_image.resize'))->url();
            }
            return [
                '@context' => 'https://schema.org',
                '@type' => 'WebSite',
                '@id' => $this->url(),
                'copyrightYear' => date('Y'),
                'description' => (string)$meta->description()->escape(),
                'image' => $image,
                'inLanguage' => $this->kirby()->languages()->pluck('code'),
                'keywords' => $meta->keywords()->split(),
                'name' => (string)$this->title(),
                'sameAs' => array_map(function($field){
                    return (string)$field;
                },$this->links()->toStructure()->pluck('url')),
                'thumbnailUrl' => $thumbnail->exists() ? $thumbnail->url() : null,
                'url' => $this->url(),
            ];
        },
    ],
    'pageMethods' => [
        'meta' => function (): Content {
            
            $title = $this->site()->meta_title_schema()->or( option('moritzebeling.kirby-meta.title_schema','{page} | {site}') );
            $title = str_replace( '{site}', $this->site()->title(), $title );
            $title = str_replace( '{page}', $this->meta_title()->or( $this->title() ), $title );

            $description = (string)$this->meta_description()->or( $this->site()->meta_description() );

            $keywords = array_slice(array_unique( array_merge(
                $this->meta_tags()->split(),
                $this->site()->meta_tags()->split()
            )),0,20);

            $image = $this->preview_image()->or( $this->site()->preview_image() );

            return new Content([
                'title' => (string)$title,
                'description' => (string)$description,
                'keywords' => implode(',',$keywords),
                'image' => (string)$image,   
            ], $this);

        },
        'schema' => function (): array {
            $meta = $this->meta();

            $blocks = $this->blocks()->toBlocks();
            
            if( $about = $blocks->filterBy('type','text')->first() ){
                $about = Str::unhtml((string)$about->text()->short(1000));
            } else {
                $about = null;
            }
            
            if( $primaryImageOfPage = $blocks->filterBy('type','image')->first() ){
                $primaryImageOfPage = $primaryImageOfPage->image()->toFile()->thumb(['width' => 1200])->url();
            }

            if( $image = $meta->image()->toFile() ){
                $image = $image->thumb(option('moritzebeling.kirby-meta.preview_image.resize'))->url();
            }

            return [
                '@context' => 'https://schema.org',
                '@type' => 'WebPage',
                '@id' => $this->site()->url() . '/' . $this->id(),
                'about' => $about,
                'alternateName' => (string)$meta->title(),
                'copyrightYear' => date('Y'),
                'dateModified' => $this->modified('c', 'date'),
                'description' => (string)$meta->description()->escape(),
                'image' => $image,
                'inLanguage' => $this->kirby()->languages()->pluck('code'),
                'keywords' => $meta->keywords()->split(),
                'mainEntityOfPage' => [
                    '@type' => 'WebSite',
                    '@id' => $this->site()->url(),
                ],
                'name' => (string)$this->title(),
                'primaryImageOfPage' => $primaryImageOfPage,
                'url' => $this->url(),
            ];
        }
    ],

    'routes' => [
        [
            'pattern' => 'sitemap.xml',
            'action'  => function() {

                $kirby = kirby();
                $ignore = $kirby->option('moritzebeling.kirby-meta.ignore');

                $pages = $kirby->site()->index()->listed()->filter(function($page) use($ignore){
                    if( $page->isHomePage() ){
                        return true;
                    }
                    if( $page->noindex()->isTrue() ){
                        return false;
                    }
                    foreach( $ignore as $pattern ){
                        if( preg_match("/^\/.+\/[a-z]*$/i",$pattern) ){
                            // regex
                            if( preg_match($pattern, $page->id()) ){
                                return false;
                            }
                        } else {
                            // page id
                            if( $pattern == $page->id() ){
                                return false;
                            }
                        }
                    }
                    return true;
                })->limit(50000);

                $content = snippet('meta/sitemap', compact('pages'), true);
                return new Response($content, 'application/xml');
            }
        ],
        [
            'pattern' => 'sitemap',
            'action'  => function() {
                return go('sitemap.xml', 301);
            }
        ],
        [
            'pattern' => 'robots.txt',
            'action'  => function() {
                $rules = [[
                    'User-agent' => '*',
                    'Allow' => '/',
                    'Disallow' => '/panel'
                ],[
                    'Sitemap' => url('sitemap.xml')
                ]];
                $content = snippet('meta/robots', compact('rules'), true);
                return new Response($content, 'text/plain');
            }
        ]
    ],

]);