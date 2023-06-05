<?= '<?xml version="1.0" encoding="utf-8"?>'; ?>
<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xhtml="http://www.w3.org/1999/xhtml"
    >
    <?php foreach ($pages as $page): ?>
        <url>
            <loc><?= html($page->url()) ?></loc>
            <lastmod><?= $page->modified('c', 'date') ?></lastmod>
            <priority><?= $page->meta()->priority()->toInt() / 100 ?></priority>
            
            <?php foreach ($page->kirby()->languages() as $language): ?>
                <xhtml:link rel="alternate" hreflang="<?= $language->code() ?>" href="<?= $page->url($language->code()) ?>" />
            <?php endforeach ?>

        </url>
    <?php endforeach ?>
</urlset>