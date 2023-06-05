<?php

$menu = $menu ?? $site->menu()->toPages();

?>
<nav>
    <?php foreach ($menu as $item) : ?>
        <a href="<?= $item->url() ?>" <?= r( $item->isActive(), 'aria-current="page"' ) ?>>
            <?= $item->title() ?>
        </a>
    <?php endforeach ?>
</nav>