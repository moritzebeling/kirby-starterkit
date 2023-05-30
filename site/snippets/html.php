<?php

/** @var Kirby\Cms\Page $page
 *  @var Kirby\Cms\Site $site
 *  @var Kirby\Cms\App $kirby */

use Kirby\Filesystem\F;

?>
<!DOCTYPE html>
<html lang="<?= $kirby->language()?->code() ?? $site->lang() ?>">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $page->title() ?> | <?= $site->title() ?></title>

    <?php foreach ($kirby->languages() as $language) :
        if ($language->code() !== $kirby->language()->code()) : ?>
            <link rel="alternate" hreflang="' . $language->code() . '" href="' . $page->url($language->code()) . '" />
        <?php endif;
    endforeach ?>

    <?php snippet('favicon') ?>

    <?php if ($host = F::read('assets/dist/hot')) : ?>
        <?= js( $host . '/index.js') ?>
        <?= css( $host . '/global.css') ?>
    <?php else : ?>
        <?= js('assets/dist/index.js') ?>
        <?= css('assets/dist/global.css') ?>
    <?php endif ?>
            
</head>
        
<body>
    »<?= $host ?>«
    <?= $slot ?>
</body>

</html>