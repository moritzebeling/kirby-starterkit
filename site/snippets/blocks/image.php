<?php

use Kirby\Toolkit\Html;

/** @var \Kirby\Cms\Block $block */
$image = $block->image()->toFile();

if (!$image) {
    return;
}

$sizes = option('thumbs.sizes',[ 480, 640, 1200, 2000, 2600 ]);
$resize = [ 'width' => end( $sizes ) ];
$srcset = $sizes;

if( $block->crop()->isTrue() && $block->ratio()->or('auto') != 'auto' ){
    $ratio = explode('/', $block->ratio());
    $ratio = $ratio[1] / $ratio[0];
    if( option('thumbs.hardCropImagesInBlocks', false) ){

        /* crop with kirby */

        $srcset = [];
        foreach( $sizes as $size ){
            $srcset[$size . 'w'] = [
                'width' => $size,
                'height' => round($size * $ratio),
                'crop' => true,
            ];
        }

        $resize = $srcset[ end($sizes).'w' ];

    } else {

        /* crop with css */

        $attr = Html::attr([
            'data-crop' => true,
            'style' => '--ratio:' . ( $ratio * 100 ) . '%;',
        ]);

    }
}

$thumb = $image->thumb($resize);

$caption = $block->caption()->or( $image->caption() );

?>
<figure class="block image" <?= $attr ?? '' ?>>
    
    <?= Html::img(
        $thumb->url(),
        [
            'alt' => $block->alt()->or( $image->alt() )->esc(),
            'class' => 'lazyload',
            'data-sizes' => 'auto',
            'data-src' => $thumb->url(),
            'data-srcset' => $image->srcset($srcset),
            'width' => $thumb->width(),
            'height' => $thumb->height(),
        ]
    ); ?>

    <?php if ($caption->isNotEmpty()) : ?>
        <figcaption>
            <?= $caption->caption() ?>
        </figcaption>
    <?php endif ?>

</figure>