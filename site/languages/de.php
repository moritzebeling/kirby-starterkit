<?php

use Kirby\Data\Yaml;
use Kirby\Filesystem\F;

return [
    'code' => 'de',
    'name' => 'Deutsch',
    'default' => true,
    'url' => '/',
    'direction' => 'ltr',
    'locale' => [
        'LC_ALL' => 'de_DE'
    ],
    'translations' => Yaml::decode(F::read(dirname(__DIR__) . '/translations/de.yml')),
];