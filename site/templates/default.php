<!doctype html>
<html lang="<?= $page->kirby()->language()->code() ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <?php snippet('meta/html'); ?>

  <?= css('assets/build/bundle.css') ?>

  <?php foreach( $page->kirby()->languages() as $lang ): ?>
    <link rel="alternate" href="<?= $page->url($lang->code()) ?>" hreflang="<?= $lang->code() ?>">
  <?php endforeach; ?>

  <?php snippet('meta/favicon'); ?>
  <?php snippet('meta/jsonld'); ?>

  <script>
    window.siteData = <?= json_encode( $site->json() ) ?>;
  </script>

</head>
<!-- This website was made by Moritz Ebeling (https://moritzebeling.com) -->
<body>
  <?= js('assets/build/bundle.js') ?>
</body>
</html>
