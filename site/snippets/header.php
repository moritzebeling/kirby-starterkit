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
    'assets/css/site.css',
    '@auto'
  ]) ?>

  <?php snippet('meta/favicon'); ?>

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

  <?php snippet('meta/jsonld'); ?>

</head>
<!-- This website was made by Moritz Ebeling (https://moritzebeling.com) -->
<body class="<?= $page->intendedTemplate()->name() ?>">

  <div class="page">
    <header class="header">

      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <?php snippet('navigation'); ?>

    </header>
