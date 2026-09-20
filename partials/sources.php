<?php
/** $sourcesRecord:{sources,updated}; input consumed. Null URL/accessed never fabricated. */
declare(strict_types=1);
$soRecord = $sourcesRecord ?? [];
?>
<?php if (!empty($soRecord['sources'])): ?><section class="sources"><h2><?= e(ui('foundation.sources')) ?></h2><ol>
<?php foreach ($soRecord['sources'] as $soSource): ?><li><cite><?php if (!empty($soSource['url'])): ?><a href="<?= e($soSource['url']) ?>" rel="noopener"><?= e($soSource['title']) ?></a><?php else: ?><?= e($soSource['title']) ?><?php endif; ?></cite> · <?= e($soSource['publisher']) ?><?php if (!empty($soSource['accessed'])): ?> · <time datetime="<?= e($soSource['accessed']) ?>"><?= e(fmt_date_long($soSource['accessed'])) ?></time><?php endif; ?></li><?php endforeach; ?>
</ol></section><?php endif; ?>
<?php if (!empty($soRecord['updated'])): ?><p class="updated"><?= e(ui('foundation.updated')) ?> <time datetime="<?= e($soRecord['updated']) ?>"><?= e(fmt_date_long($soRecord['updated'])) ?></time></p><?php endif; ?>
<?php unset($soRecord, $soSource, $sourcesRecord); ?>
