<!doctype html>
<html lang="<?= $page->kirby()->language()->code() ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?= $site->title() ?> • <?= $page->title() ?></title>

  <?php snippet('meta/favicon'); ?>

  <?= css([
    'assets/css/reset.css',
    'assets/css/site.css',
    '@auto'
  ]) ?>

  <?php snippet('meta/favicon'); ?>

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
