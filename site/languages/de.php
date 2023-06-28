<?php

use Kirby\Data\Yaml;
use Kirby\Filesystem\F;

$code = 'de';

return [
    'code' => $code,
    'name' => 'Deutsch',
    'default' => true,
    'url' => '/',
    'direction' => 'ltr',
    'locale' => [
        'LC_ALL' => 'de_DE'
    ],
    'translations' => Yaml::decode(F::read(dirname(__DIR__) . "/translations/$code.yml")),
];