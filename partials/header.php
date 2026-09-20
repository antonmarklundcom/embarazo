<?php declare(strict_types=1); ?>
<header class="site-header"><div class="container site-header__bar">
<a class="wordmark" href="/"><?= e(site('name')) ?></a>
<nav aria-label="<?= e(ui('nav.menu')) ?>"><ul class="site-nav">
<?php foreach (nav('primary') as $navItem): ?>
<li><?php if (isset($navItem['items'])): ?>
<details><summary><?= e($navItem['label']) ?></summary><ul>
<?php foreach ($navItem['items'] as $navChild): ?><li><a href="<?= e($navChild['path']) ?>"><?= e($navChild['label']) ?></a></li><?php endforeach; ?>
</ul></details>
<?php else: ?><a href="<?= e($navItem['path']) ?>"<?= is_current($navItem['path'], $page['path']) ? ' aria-current="page"' : '' ?>><?= e($navItem['label']) ?></a><?php endif; ?></li>
<?php endforeach; ?>
</ul></nav></div></header>
<?php unset($navItem, $navChild); ?>
