  </div>

  <footer class="footer">

    <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>

    <?php snippet('navigation',[
      'collection' => $site->children()->unlisted()
    ]); ?>

  </footer>

</body>
</html>
