<!doctype html>
<html lang="<?= $page->kirby()->language()->code() ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> • <?= $page->title() ?></title>

  <link rel="canonical" href="<?= $page->url() ?>" />

  <meta name="description" content="<?= $page->description()->html() ?>">
  <meta name="keywords" content="<?= $page->tags()->html() ?>">
  <meta name="Generator" content="Kirby 3 (https://getkirby.com), Moritz Ebeling (https://moritzebeling.com)">

  <?= css([
    'assets/css/reset.css',
    'assets/css/global.css',
    '@auto'
  ]) ?>

  <?php $fav = 'assets/favicon/'; ?>
  <link rel="shortcut icon" href="<?= $fav; ?>favicon.ico">
  <?php foreach([16,32,48,64,96,128,180,256,512,1024] as $s ): ?>
    <link rel="icon" type="image/png" href="<?= $fav; ?>favicon.png" sizes="<?= $s.'x'.$s ?>">
  <?php endforeach; ?>
  <link rel="icon" type="image/svg+xml" href="<?= $fav; ?>favicon.svg" sizes="any">
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?= $fav; ?>apple-touch-icon.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?= $fav; ?>mstile-144x144.png">

  <?php
  /**
   * Resources:
   * https://gist.github.com/lancejpollard/1978404
   * https://htmlhead.dev/#recommended-minimum
   *
   * https://ogp.me
   * https://dev.twitter.com/cards/overview
   *
   * https://css-tricks.com/prefetching-preloading-prebrowsing/
   *
   */
  ?>

  <?php foreach( $page->kirby()->languages() as $lang ): ?>
    <link rel="alternate" href="<?= $page->url($lang->code()) ?>" hreflang="<?= $lang->code() ?>">
  <?php endforeach; ?>

  <?php
  // https://jsonld.com/json-ld-generator/
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
  } ?>
  <script type="application/ld+json"><?= json_encode($jsonld) ?></script>

</head>
<!-- This website was made by Moritz Ebeling (https://moritzebeling.com) -->
<body>

  <div class="page">
    <header class="header">

      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <?php snippet('navigation'); ?>

    </header>
