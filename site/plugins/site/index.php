<?php

use Kirby\Cms\App as Kirby;
use Kirby\Toolkit\Html;

Kirby::plugin('moritzebeling/site', [

    'fileMethods' => [
        'alt' => function () {
            return $this->content()->alt()->or( $this->parent() . ' ' . $this->filename() );
        },
        'img' => function ( $options = [] ) {

            $alt = in_array('alt', $options) ? $options['alt']->or( $this->alt() ) : $this->alt();
            $sizes = option('thumbs.sizes',[ 480, 640, 1200, 2000, 2600 ]);
            $thumb = $this->thumb([ 'width' => end( $sizes ) ]);

            return Html::img(
                $thumb->url(),
                [
                    'alt' => $alt->esc(),
                    'class' => 'lazyload',
                    'data-sizes' => 'auto',
                    'data-src' => $thumb->url(),
                    'data-srcset' => $this->srcset($sizes),
                    'width' => $thumb->width(),
                    'height' => $thumb->height(),
                ]
            );
        }
    ]

]);
