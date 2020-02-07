  </div>

  <footer class="footer">
    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <nav class="menu">
      <?php foreach ($site->children()->unlisted() as $item): ?>
        <?= $item->title()->link() ?>
      <?php endforeach ?>
    </nav>

    <?php if ($about = page('about')): ?>
    <nav class="social">
      <?php foreach ($about->social()->toStructure() as $social): ?>
      <a href="<?= $social->url() ?>"><?= $social->platform() ?></a>
      <?php endforeach ?>
    </nav>
    <?php endif ?>

  </footer>

  <?php echo js('assets/js/global.js'); ?>

</body>
</html>
