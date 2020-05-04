<?php

return function ( $site ) {

	$posts = $site->children()->listed();

	return [
	  'posts' => $posts
	];
};
