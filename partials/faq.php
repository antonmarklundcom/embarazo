<?php
/** $faqItems:[{q,a}], optional $faqTitle; inputs consumed. */
declare(strict_types=1);
?>
<?php if (!empty($faqItems)): ?><section><h2><?= e($faqTitle ?? ui('foundation.faq')) ?></h2><div class="faq">
<?php foreach ($faqItems as $fqItem): ?><details class="faq__item"><summary><?= e($fqItem['q']) ?></summary><div class="faq__answer"><p><?= rich($fqItem['a']) ?></p></div></details><?php endforeach; ?>
</div></section><?php endif; unset($fqItem, $faqItems, $faqTitle); ?>
