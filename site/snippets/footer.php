  </div>

  <footer class="footer">
    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <?php snippet('navigation',[
      'collection' => $site->children()->unlisted()
    ]); ?>

    <?php if ($about = page('about')): ?>
    <nav class="social">
      <?php foreach ($about->social()->toStructure() as $link): ?>
        <a href="<?= $link->url() ?>"><?= $link->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <?php endif ?>

    <?php snippet('languageSwitch'); ?>

  </footer>

  <?php echo js('assets/js/site.js'); ?>

</body>
</html>
