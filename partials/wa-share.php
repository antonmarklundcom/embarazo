<?php declare(strict_types=1); ?>
<div class="wa-share"><span class="wa-share__label"><?= e(ui('foundation.shareHint')) ?></span><a class="btn btn--wa" data-share data-share-title="<?= e($page['title']) ?>" data-share-url="<?= e(seo_canonical($page)) ?>" href="<?= e(wa_share($page['title'], seo_canonical($page))) ?>"><?= e(ui('foundation.share')) ?></a></div>
