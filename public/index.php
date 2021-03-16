<?php

require '../kirby/vendor/autoload.php';

$kirby = new Kirby(
    [
        'roots' => [
            'index'    => __DIR__,
            'base'     => $base    = dirname(__DIR__),
            'content'  => $base . '/content',
            'site'     => $base . '/site',
            'assets'   => $base . '/public/assets',
            'storage'  => $storage = $base . '/storage',
            'accounts' => $storage . '/accounts',
            'cache'    => $storage . '/cache',
            'sessions' => $storage . '/sessions',
        ]
    ]
);

echo $kirby->render();
