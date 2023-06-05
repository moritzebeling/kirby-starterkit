<nav class="languages">
    <?php foreach( $kirby->languages() as $language ): ?>
        <a title="<?= $language->name() ?>" href="<?= $page->url($language->code()) ?>" hreflang="<?= $language->code() ?>" <?= r( $kirby->language() == $language, 'aria-current="true"' ) ?>>
            <?= html($language->code()) ?>
        </a>
    <?php endforeach ?>
</nav>