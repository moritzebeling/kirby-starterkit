<?php
/*

Resources:

https://gist.github.com/lancejpollard/1978404
https://htmlhead.dev/#recommended-minimum

https://ogp.me
https://dev.twitter.com/cards/overview

https://css-tricks.com/prefetching-preloading-prebrowsing/

*/
?>

<link rel="canonical" href="<?= $page->url() ?>" />
<meta name="description" content="<?= $page->metaDescription() ?>">
<meta name="keywords" content="<?= $page->metaKeywords() ?>">

<meta name="Generator" content="Moritz Ebeling (https://moritzebeling.com)">

<meta name="subject" content="<?= $site->description()->value() ?>">
<meta name="geo.region" content="de">

<meta property="og:locale" content="de_DE">
<meta property="og:description" content="<?= $page->metaDescription() ?>">
<meta property="og:url" content="<?= $page->url() ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site->title() ?>">

<?php if( $image = $page->ogImage() ): ?>
  <meta name="twitter:image" content="<?= $image->thumb('ogimage')->url() ?>">
  <meta property="og:image" content="<?= $image->thumb('ogimage')->url() ?>">
  <meta property="og:image:alt" content="<?= $site->title() ?>">
<?php endif ?>
