<?php

$fav = 'assets/favicon/';

?>
<link rel="shortcut icon" href="<?= $fav; ?>favicon.ico">
<?php foreach([16,32,48,64,96,128,180,256,512,1024] as $s ): ?>
  <link rel="icon" type="image/png" href="<?= $fav; ?>favicon.png" sizes="<?= $s.'x'.$s ?>">
<?php endforeach; ?>
<link rel="icon" type="image/svg+xml" href="<?= $fav; ?>favicon.svg" sizes="any">
<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?= $fav; ?>apple-touch-icon.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?= $fav; ?>mstile-144x144.png">
