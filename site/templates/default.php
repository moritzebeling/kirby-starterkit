<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div>
    <?= $page->text()->kirbytext() ?>
  </div>
</main>

<?php snippet('footer') ?>
