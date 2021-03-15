<link rel="shortcut icon" type="image/x-icon" href="/assets/favicon/favicon.ico">
<link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg" sizes="any">
<?php foreach( [64,128,256,512,1024] as $size ): ?>
	<link rel="icon" type="image/png" href="/assets/favicon/favicon-<?= $size ?>.png" sizes="<?= $size.'x'.$size ?>">
<?php endforeach; ?>
