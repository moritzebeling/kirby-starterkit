<?php snippet('header') ?>

<h1>Welcome to <?= $site->title() ?></h1>

<script>
  window.siteData = <?= json_encode( $site->json() ) ?>;
</script>

<?php snippet('footer') ?>
