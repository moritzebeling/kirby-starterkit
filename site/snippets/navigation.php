<?php

if( !isset($collection) ){
  $collection = $site->children()->listed();
}

?>
<nav class="menu">
  <?php foreach($collection as $item): ?>
    <a <?php e( $item->is( $page ) ,'class="active"'); ?> href="<?= $item->url() ?>">
      <?= $item->title()->html() ?>
    </a>
  <?php endforeach ?>
</nav>
