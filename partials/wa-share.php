<?php
/** Optional $shareText replaces the page title in the WhatsApp message (growth plan item 6); consumed. Plain wa.me link, no SDK, no tracking. */
declare(strict_types=1);
$wsText = $shareText ?? $page['title']; ?>
<div class="wa-share"><span class="wa-share__label"><?= e(ui('foundation.shareHint')) ?></span><a class="btn btn--wa" data-share data-share-title="<?= e($wsText) ?>" data-share-url="<?= e(seo_canonical($page)) ?>" href="<?= e(wa_share($wsText, seo_canonical($page))) ?>"><?= e(ui('foundation.share')) ?></a></div>
<?php unset($wsText, $shareText); ?>
