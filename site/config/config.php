<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => false,
    'whoops' => false,
    
    'smartypants' => true,

    'thumbs' => [
		'srcsets' => [
			'mini' => [ 40, 80, 120],
			'small' =>    [ 80, 120, 240, 360],
			'medium' =>                  [360, 480, 640, 880, 1200],
			'large' =>                             [640, 880, 1200, 1600, 2000],
			'full' =>                              [640, 880, 1200, 1600, 2000, 2500, 3000, 3500],
			'all' =>      [ 80, 120, 240, 360, 480, 640, 880, 1200, 1600, 2000, 2500, 3000, 3500],
		]
	],
];
