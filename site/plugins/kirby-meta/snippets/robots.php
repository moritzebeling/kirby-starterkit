<?php foreach( $rules as $rule ):
foreach( $rule as $directive => $value ): ?>
<?= $directive ?>: <?= $value ?>

<?php endforeach ?>

<?php endforeach ?>