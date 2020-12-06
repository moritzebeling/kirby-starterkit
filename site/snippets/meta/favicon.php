<?php

$dir = '/assets/favicon';

$sizes = [16,32,64,128,256,512,1024];

?>
<link rel="shortcut icon" type="image/x-icon" href="<?= $dir; ?>/favicon.ico">

<?php foreach( $sizes as $size ): ?>
  <link rel="icon" type="image/png" href="<?= $dir; ?>/favicon-<?= $size ?>.png" sizes="<?= $size.'x'.$size ?>">
<?php endforeach; ?>

<link rel="icon" type="image/svg+xml" href="<?= $dir; ?>/favicon.svg" sizes="any">

<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?= $dir; ?>/apple-touch-icon.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?= $dir; ?>/mstile-144x144.png">
