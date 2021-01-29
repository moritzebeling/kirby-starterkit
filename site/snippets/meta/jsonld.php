<?php

$jsonld = [
	'@context' => 'https://schema.org/',
	'@type' => 'WebSite',
	'copyrightYear' => date('Y'),
	'name' => $site->title()->value(),
	'url' => $site->url(),
	'inLanguage' => []
];

foreach( $site->kirby()->languages() as $lang ){
	$jsonld['inLanguage'] = [
		'@type' => 'Language',
		'name' => $lang->name(),
	];
}

?>

<script type="application/ld+json"><?= json_encode($jsonld) ?></script>
