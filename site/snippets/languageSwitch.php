<?php

$languages = $page->kirby()->languages();
if( $languages->count() < 2 ){ return; }
$current = $page->kirby()->language()->code();

?>
<nav class="languages">
  <?php foreach( $languages as $lang ): ?>
    <a <?php e($lang->code() === $current, 'class="active"') ?> href="<?= $page->url( $lang->code() ) ?>">
      <?= $lang->name() ?>
    </a>
  <?php endforeach; ?>
</nav>
