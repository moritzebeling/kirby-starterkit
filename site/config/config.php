<?php

use Kirby\Toolkit\Str;

Str::$language = [
	'ä' => 'ae',
	'ö' => 'oe',
	'ü' => 'ue',
	'ß' => 'ss',
	't’s' => 'ts',
	'n’t' => 'nt',
	't\'s' => 'ts',
	'n\'t' => 'nt',
];

return [

	'debug' => false,
	'whoops' => false,

	'locale' => 'en_GB.utf-8',
    'date.handler' => 'intl',
    'smartypants' => true,

	'cache' => [
		'pages' => [
			'active' => false
		],
	],

    'panel' => [
        'favicon' => 'assets/favicon/favicon.png',
    ],

    'languages.detect' => true,

	'thumbs' => [
        // 'format' => 'webp',
        'autoOrient' => true,
        'quality' => 80,
        'presets' => [
            'xl' => ['width' => 2600],
            'l' =>  ['width' => 2000],
            'm' =>  ['width' => 1200],
            's' =>  ['width' =>  640],
            'xs' => ['width' =>  480],
        ],
        'srcsets' => [
            'default' => [
                '480w' =>  ['width' =>  480],
                '640w' =>  ['width' =>  640],
                '1200w' => ['width' => 1200],
                '2000w' => ['width' => 2000],
                '2600w' => ['width' => 2600],
            ]
        ]
    ],

];
