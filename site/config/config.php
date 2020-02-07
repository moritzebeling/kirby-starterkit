<?php

return [
  'debug' => false,
  'whoops' => false,

  'cache' => [
    'pages' => [
      'active' => true
    ],
  ],

  'languages' => true,
  'languages.detect' => true,

  'smartypants' => true,

  'thumbs' => [
		'srcsets' => [
			'small' => [ 80, 120, 240, 360],
			'medium' => [360, 480, 640, 880, 1200],
			'large' => [640, 880, 1200, 1600, 2000],
		]
	],
];
