<?php

/** @var Kirby\Cms\Page $page
 *  @var Kirby\Cms\Site $site
 *  @var Kirby\Cms\App $kirby */

use Kirby\Filesystem\F;

?>
<!DOCTYPE html>
<html lang="<?= $kirby->language()?->code() ?? $site->lang() ?>">

<head>
    <?php snippet('meta') ?>
    <?php snippet('favicon') ?>

    <?php if ($host = F::read('assets/dist/hot')) : ?>
        <?= js( $host . '/index.js') ?>
        <?= css( $host . '/global.css') ?>
    <?php else : ?>
        <?= js('assets/dist/index.js') ?>
        <?= css('assets/dist/global.css') ?>
    <?php endif ?>
            
</head>

<!-- Website by Moritz Ebeling https://moritzebeling.com -->

<body data-template="<?= $page->template() ?>">
    <?= $slot ?>
</body>

</html>