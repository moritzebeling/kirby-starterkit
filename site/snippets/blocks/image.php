<?php

use Kirby\Toolkit\Html;

/** @var \Kirby\Cms\Block $block */
$image = $block->image()->toFile();

if (!$image) {
    return;
}

$attr = Html::attr([
    'data-ratio' => $block->ratio()->or('auto'),
    'data-crop' => $block->crop()->isTrue()
], null, ' ');

?>
<figure<?= $attr ?>>

    <?= $image->img(['alt' => $block->alt()]) ?>

    <?php if ($block->caption()->isNotEmpty()) : ?>
        <figcaption>
            <?= $block->caption() ?>
        </figcaption>
    <?php endif ?>

</figure>