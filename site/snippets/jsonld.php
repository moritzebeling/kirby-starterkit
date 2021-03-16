<script type="application/ld+json"><?= json_encode( $site->jsonLd() ) ?></script>
<?php if( method_exists( $page, 'jsonLd') ): ?>
	<script type="application/ld+json"><?= json_encode( $page->jsonLd() ) ?></script>
<?php endif ?>
