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
            return Html::img(
                $this->thumb('xl')->url(),
                [
                    'alt' => $alt->esc(),
                    'class' => 'lazyload',
                    'data-sizes' => 'auto',
                    'data-src' => $this->thumb('xl')->url(),
                    'data-srcset' => $this->srcset(),
                    'width' => $this->width(),
                    'height' => $this->height(),
                ]
            );
        }
    ]

]);
