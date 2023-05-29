<?php

namespace Kirby\Cdn;

use Kirby\Cms\App;
use Kirby\Cms\App as Kirby;
use Kirby\Toolkit\Str;

class Cachebuster {
    
    /*
    https://github.com/getkirby/getkirby.com/blob/main/site/plugins/cdn/src/Cachebuster.php
    */

    protected static function version(string $root, string $path): string
    {
        return dechex(filemtime($root));
    }

    public static function path(string $path): string
    {
        if (strpos($path, url()) === 0) {
            $path = ltrim(substr($path, strlen(url())), '/');
        }

        $kirby = App::instance();
        $root  = $kirby->root('index') . '/' . $path;

        if (file_exists($root)) {
            $version = static::version($root, $path);
            $path = $path . '?v=' . $version;
        }

        return $path;
    }

}

Kirby::plugin('moritzebeling/kirby-cachebusting', [
    
    /*
    https://getkirby.com/docs/cookbook/extensions/kirby-loves-cdn#cache-busting
    */

    'options' => [
        'host' => false
    ],
    'components' => [
        'url' => function ($kirby, $path, $options) {
            if (Str::startsWith($path, 'assets') && option('moritzebeling.kirby-cachebusting', true) !== false) {
                $path = Cachebuster::path($path);

                if ( $host = option('moritzebeling.kirby-cachebusting.host', false) ){
                    return trim($host,'/') . '/' . $path;
                }
            }
            $original = $kirby->nativeComponent('url');
            return $original($kirby, $path, $options);
        },
    ]
]);