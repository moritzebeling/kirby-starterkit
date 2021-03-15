<?php
/*

Resources:

https://gist.github.com/lancejpollard/1978404
https://htmlhead.dev/#recommended-minimum

https://ogp.me
https://dev.twitter.com/cards/overview

https://css-tricks.com/prefetching-preloading-prebrowsing/

*/

$title = $page->isHomePage() ? $site->title() : $page->title() .' • '. $site->title();

?>
<title><?= $title ?></title>

<link rel="canonical" href="<?= $page->url() ?>" />
<meta name="description" content="<?= $page->metaDescription() ?>">
<meta name="keywords" content="<?= implode(',',$page->metaKeywords()) ?>">
<meta name="subject" content="<?= $site->metaDescription() ?>">

<meta name="generator" content="Moritz Ebeling (https://moritzebeling.com)">

<meta property="og:title" content="<?= $title ?>">
<meta property="og:description" content="<?= $page->metaDescription() ?>">
<meta property="og:url" content="<?= $page->url() ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site->title() ?>">
<meta property="og:locale" content="de_DE">

<?php if( $image = $page->ogImage() ): ?>
	<meta name="twitter:image" content="<?= $image->thumb('ogimage')->url() ?>">
	<meta property="og:image" content="<?= $image->thumb('ogimage')->url() ?>">
	<meta property="og:image:alt" content="<?= $site->title() ?>">
<?php endif ?>
