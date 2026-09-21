<?php
/** $relatedSlugs:string[], optional $relatedHub cluster. Only existing records render. Inputs consumed. */
declare(strict_types=1);
$rlRecords = array_intersect_key(content('articulos'), array_flip($relatedSlugs ?? []));
?>
<?php if ($rlRecords !== [] || !empty($relatedHub)): ?><section class="section--tight"><h2><?= e(ui('foundation.related')) ?></h2>
<?php if (!empty($relatedHub)): ?><a class="link-arrow" href="<?= e('/' . $relatedHub . '/') ?>"><?= e(content('clusters')[$relatedHub]['title'] ?? ui('foundation.blog')) ?></a><?php endif; ?>
<div class="stack"><?php foreach ($rlRecords as $rlRecord): ?><a class="article-card" href="<?= e($rlRecord['path']) ?>"><span class="article-card__thumb" aria-hidden="true"><?php $rlThumb = is_array($rlRecord['image'] ?? null) ? picture($rlRecord['image'], '72px', 'lazy', 'article-card__img') : ''; echo $rlThumb !== '' ? $rlThumb : '↗'; unset($rlThumb); ?></span><div class="article-card__body"><h3><?= e($rlRecord['title']) ?></h3><p><?= e($rlRecord['metaDescription']) ?></p></div></a><?php endforeach; ?></div></section><?php endif; ?>
<?php unset($relatedSlugs, $relatedHub, $rlRecords, $rlRecord); ?>
