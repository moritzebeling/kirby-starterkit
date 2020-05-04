<?php
// https://getkirby.com/docs/reference/system/options

date_default_timezone_set('Europe/Berlin');

return [
  'locale' => 'en_GB.utf-8',

  'debug' => false,
  'whoops' => false,

  'cache' => [
    'pages' => [
      'active' => true
    ],
  ],

  'home' => 'work',

  'languages' => true,
  'languages.detect' => true,

  'smartypants' => true,

  'thumbs' => [
    'autoOrient' => false,
    'quality' => 80,
    'presets' => [
      'small' =>  ['width' => 640, 'quality' => 80],
			'medium' => ['width' => 1920, 'quality' => 80],
			'large' =>  ['width' => 2560, 'quality' => 75],
			'background' => ['width' => 3840, 'quality' => 70],
    ],
    // https://getkirby.com/docs/reference/objects/file/srcset
		'srcsets' => [
      // 16:9 ratios
			'small' =>  [320, 426, 640],
			'medium' => [426, 640, 854, 1280, 1920],
			'large' =>  [640, 854, 1280, 1920, 2560],
			'background' => [854, 1280, 1920, 2560, 3840],
      'all' =>    [320, 426, 640, 854, 1280, 1920, 2560, 3840],
		]
	],
];
