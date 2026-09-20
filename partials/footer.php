<?php declare(strict_types=1); ?>
<footer class="site-footer"><div class="container">
<p><?= e(ui('footer.blurb')) ?></p>
<ul><?php foreach (array_merge(nav('guides'), nav('legal')) as $footLink): ?><li><a href="<?= e($footLink['path']) ?>"><?= e($footLink['label']) ?></a></li><?php endforeach; ?></ul>
<p>&copy; <?= date('Y') ?> <?= e(site('name')) ?>. <?= e(ui('footer.rights')) ?></p>
</div></footer>
<?php unset($footLink); require ROOT_DIR . '/partials/whatsapp-fab.php'; ?>
</body></html>
