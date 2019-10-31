<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> • <?= $page->title() ?></title>

  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="Generator" content="Kirby 3 (https://getkirby.com), Moritz Ebeling (https://moritzebeling.com)">

  <?= css([
    'assets/css/normalize.css',
    'assets/css/global.css',
    '@auto'
  ]) ?>

  <?php
  /**
   * https://realfavicongenerator.net
   * https://ogp.me
   * https://jsonld.com/json-ld-generator/
   * <link rel="prefetch" href="...">
   */
  ?>

</head>
<!-- This website was made by Moritz Ebeling (https://moritzebeling.com) -->
<body>

  <div class="page">
    <header class="header">

      <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a>

      <nav id="menu" class="menu">
        <?php foreach ($site->children()->listed() as $item): ?>
          <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>

    </header>

