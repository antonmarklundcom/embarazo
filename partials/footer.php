<?php declare(strict_types=1); ?>
<footer class="footer"><div class="wrap"><div class="footer__cols"><div class="footer__brand"><a class="brand" href="/"><?= e(site('name')) ?></a><p><?= e(ui('footer.blurb')) ?></p></div>
<div><h2><?= e(ui('nav.guides')) ?></h2><ul><?php foreach (nav('guides') as $ftLink): ?><li><a href="<?= e($ftLink['path']) ?>"><?= e($ftLink['label']) ?></a></li><?php endforeach; ?></ul></div>
<div><h2><?= e(ui('foundation.legalLinks')) ?></h2><ul><?php foreach (nav('legal') as $ftLink): ?><li><a href="<?= e($ftLink['path']) ?>"><?= e($ftLink['label']) ?></a></li><?php endforeach; ?></ul></div></div>
<p class="footer__legal">© <?= e(date('Y')) ?> <?= e(site('name')) ?> · <?= e(ui('footer.rights')) ?></p></div></footer>
<?php if (!empty($page['sticky'])) { require ROOT_DIR . '/partials/sticky-cta.php'; } ?>
<script src="<?= e(asset('/assets/js/site.js')) ?>" defer></script>
</body></html>
<?php unset($ftLink); ?>
