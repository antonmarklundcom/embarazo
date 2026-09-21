<?php
declare(strict_types=1);
require __DIR__ . '/lib/bootstrap.php';
$home = page_meta('/');
$page = ['title' => $home['title'], 'description' => $home['description'], 'path' => '/', 'faq' => $home['faq'], 'trust' => $home['trust'], 'sticky' => false];
require ROOT_DIR . '/partials/head.php';
require ROOT_DIR . '/partials/header.php';
?>
<main id="main">
<section class="hero wrap"><div class="hero__inner"><div class="hero__copy">
<p class="eyebrow"><?= e($home['eyebrow']) ?></p><h1><?= e($home['h1']) ?></h1><p class="lead"><?= rich($home['lead']) ?></p>
<div class="hero__actions"><a class="btn btn--primary btn--lg" href="<?= e(app_link('home', 'hero')) ?>"><?= e($home['primary']) ?></a><a class="btn btn--secondary" href="/app/"><?= e($home['secondary']) ?></a></div>
<?php require ROOT_DIR . '/partials/trust-strip.php'; ?></div><div class="hero__art"><?php $phoneNumber = $home['phoneWeek']; $phoneWeek = content('semanas')[$phoneNumber]; require ROOT_DIR . '/partials/phone-frame.php'; ?></div></div></section>
<?php $homePic = picture($home['heroImage'] ?? [], '(min-width: 1200px) 1152px, calc(100vw - 32px)'); if ($homePic !== ''): ?><section class="wrap home-band"><?= $homePic ?></section><?php endif; unset($homePic); ?>
<section class="section section--surface"><div class="wrap"><h2><?= e($home['proofTitle']) ?></h2><p class="lead"><?= rich($home['proofLead']) ?></p><div class="grid grid--3">
<?php foreach ($home['proofs'] as $proof): ?><div class="card"><h3><?= e($proof['title']) ?></h3><p><?= rich($proof['text']) ?></p></div><?php endforeach; ?></div></div></section>
<section class="section section--arena"><div class="wrap grid grid--2"><div><h2><?= e($home['weekTitle']) ?></h2><p><?= rich($home['weekText']) ?></p><a class="link-arrow" href="/semana/"><?= e($home['weekLink']) ?></a></div><div class="card"><?php $gridWeeks = $home['weeks']; require ROOT_DIR . '/partials/week-grid.php'; ?></div></div></section>
<section class="section wrap"><h2><?= e($home['featuresTitle']) ?></h2><p class="lead"><?= rich($home['featuresLead']) ?></p><div class="bento">
<?php foreach ($home['features'] as $i => $feature): ?><a class="bento__tile <?= e('bento__tile--' . $feature['tone'] . ($i === 0 ? ' bento__tile--wide' : '')) ?>" href="<?= e(app_link('home', 'bento-' . $feature['key'], $feature['extra'] ?? [])) ?>"><span class="bento__icon" aria-hidden="true"><?= e($feature['icon']) ?></span><h3><?= e($feature['title']) ?></h3><p><?= e($feature['text']) ?></p><span class="link-arrow"><?= e($feature['label']) ?></span></a><?php endforeach; ?></div></section>
<section class="section wrap wrap--text"><?php $faqItems = $home['faq']; $faqTitle = $home['faqTitle']; require ROOT_DIR . '/partials/faq.php'; ?></section>
<section class="section section--tight wrap wrap--text"><div class="cta-primary"><h2><?= e($home['closingTitle']) ?></h2><p><?= rich($home['closingText']) ?></p><a class="btn btn--primary btn--lg" href="<?= e(app_link('home', 'cierre')) ?>"><?= e($home['primary']) ?></a><?php require ROOT_DIR . '/partials/trust-strip.php'; ?></div></section>
</main><?php require ROOT_DIR . '/partials/footer.php'; ?>
