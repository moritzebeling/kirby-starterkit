<?php

/** 
 * @var Kirby\Cms\App $kirby
 * @var Kirby\Cms\Page $page
 * @var Kirby\Cms\Site $site 
 */

snippet('html', slots: true); ?>
    
    <div class="blocks">
        <?= $page->blocks()->toBlocks() ?>
    </div>
    
<?php endsnippet() ?>