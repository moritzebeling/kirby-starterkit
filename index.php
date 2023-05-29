<?php

require __DIR__.'/vendor/autoload.php';

$kirby = new Kirby(
    [
        'roots' => [
            'index'    => __DIR__,
            'base'     => $base    = __DIR__,
            'content'  => $base . '/content',
            'site'     => $base . '/site',
            'assets'   => $base . '/assets',
            'storage'  => $storage = $base . '/storage',
            'accounts' => $storage . '/accounts',
            'cache'    => $storage . '/cache',
            'sessions' => $storage . '/sessions',
        ]
    ]
);

echo $kirby->render();