<?php declare(strict_types=1); ?>
<header class="header"><div class="wrap header__bar">
<a class="brand" href="/"><span class="brand__mark" aria-hidden="true"><?= e(ui('foundation.brandMark')) ?></span><?= e(site('name')) ?></a>
<details class="nav"><summary><span class="nav__burger" aria-hidden="true"></span><span class="nav__open"><?= e(ui('nav.menu')) ?></span><span class="nav__close"><?= e(ui('nav.close')) ?></span></summary>
<nav class="nav__sheet" aria-label="<?= e(ui('nav.menu')) ?>"><ul class="nav__list">
<?php foreach (nav('primary') as $hdItem): ?><li><?php if (isset($hdItem['items'])): ?><details class="nav__guides"><summary><?= e($hdItem['label']) ?></summary><ul><?php foreach ($hdItem['items'] as $hdChild): ?><li><a href="<?= e($hdChild['path']) ?>"><?= e($hdChild['label']) ?></a></li><?php endforeach; ?></ul></details>
<?php else: ?><a href="<?= e($hdItem['path']) ?>"<?= is_current($hdItem['path'], $page['path'] ?? '/') ? ' aria-current="page"' : '' ?>><?= e($hdItem['label']) ?></a><?php endif; ?></li><?php endforeach; ?>
</ul></nav></details></div></header>
<?php unset($hdItem, $hdChild); ?>
