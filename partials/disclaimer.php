<?php
/** Requires $disclaimerRecord; kind defaults medical. Input consumed. */
declare(strict_types=1);
$dsRecord = $disclaimerRecord ?? [];
$dsKind = $dsRecord['kind'] ?? 'medical';
$dsReviewed = !empty($dsRecord['reviewedBy']['name']);
?>
<?php if ($dsKind !== 'product'): ?>
<aside class="disclaimer <?= e($dsKind === 'medical' ? 'disclaimer--medical' : 'disclaimer--legal') ?>" data-kind="<?= e($dsKind) ?>">
<span class="disclaimer__icon" aria-hidden="true">ⓘ</span><div>
<?php if (!empty($dsRecord['validAsOf'])): ?><p><?= e(ui('foundation.valid')) ?> <time datetime="<?= e($dsRecord['validAsOf']) ?>"><?= e(fmt_date_long($dsRecord['validAsOf'])) ?></time></p><?php endif; ?>
<p><?= e($dsKind === 'medical' && $dsReviewed ? ui('foundation.medicalReviewed') : disclaimer_kind($dsKind)) ?></p>
<?php if ($dsReviewed): ?><p class="disclaimer__reviewer"><?= e(ui('foundation.reviewer')) ?> <?= e(implode(' · ', array_filter($dsRecord['reviewedBy']))) ?></p>
<?php else: ?><p class="disclaimer__pending"><?= e(ui('foundation.pending')) ?></p><?php endif; ?>
</div></aside>
<?php endif; unset($dsRecord, $dsKind, $dsReviewed, $disclaimerRecord); ?>
