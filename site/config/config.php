<?php

return [
	'locale' => 'en_US.utf-8',

	'debug' => true,
	'whoops' => true,

	'cache' => [
		'pages' => [
			'active' => false
		],
	],

	'languages' => true,
	'languages.detect' => true,

	'smartypants' => true,

	'thumbs' => [
		'autoOrient' => false,
		'quality' => 80,
		'presets' => [
			'mini' => ['width' => 64],
			's' => ['width' => 426],
			'm' => ['width' => 1280],
			'l' => ['width' => 1920],
			'xl' => ['width' => 2560],
		],
		'srcsets' => [
			's' => [320, 426, 640],
			'm' => [426, 640, 854, 1280],
			'l' => [640, 854, 1280, 1920],
			'xl' => [640, 854, 1280, 1920, 2560],
		]
	],
];
