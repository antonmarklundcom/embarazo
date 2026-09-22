<?php
/**
 * Opens the document: <head> metadata, JSON-LD, font preloads and the skip
 * link. Every page requires this after setting $page (see lib/seo.php for the
 * keys it understands), then partials/header.php.
 *
 * Shared chrome: a page parameterises it through $page, it does not edit it.
 * Two optional keys exist for a second-language section: $page['lang']
 * (default: the market module's locale) and $page['hreflang'] => [locale =>
 * path, ...], which emits one <link rel="alternate" hreflang="..."> per entry.
 * A page that sets neither renders exactly as before they existed.
 */

declare(strict_types=1);

/** @var array $page */
$page        = $page ?? [];
$currentPath = $page['path'] ?? '/';
$headLang = $page['lang'] ?? 'es-PY';
$headBlocks = jsonld_sitewide(content('site'), site_origin());
$headTrail = [['label' => ui('nav.home'), 'url' => url('/')]];
foreach ($page['breadcrumbs'] ?? [] as $headCrumb) {
    $headTrail[] = ['label' => $headCrumb['label'], 'url' => url($headCrumb['path'])];
}
$headBlocks[] = jsonld_breadcrumb_list($headTrail);
if (!empty($page['record'])) {
    $headBlocks = array_merge($headBlocks, jsonld_editorial($page['record'], $page['kind'] ?? 'product', seo_canonical($page), url('/') . '#organization', seo_og_image($page)));
} else {
    $headFaq = jsonld_faq($page['faq'] ?? []);
    if ($headFaq !== null) { $headBlocks[] = $headFaq; }
    $headArticle = jsonld_article($page['article'] ?? [], $page);
    if ($headArticle !== null) { $headBlocks[] = $headArticle; }
}
if (in_array($page['path'] ?? '/', ['/', '/app/'], true)) {
    $headBlocks[] = jsonld_software_application(['name' => site('name'), 'url' => app_link('product', 'schema'), 'description' => site('description')]);
}
if (($page['path'] ?? '') === '/instalar/') {
    foreach ($page['howto'] ?? [] as $headOs) {
        $headBlocks[] = jsonld_howto($headOs['os'], seo_canonical($page), $headOs['steps']);
    }
}
if (!empty($page['tool'])) { $headBlocks[] = jsonld_web_application($page['tool'], seo_canonical($page)); }
if (($page['path'] ?? '') === '/contacto/' && contact_channels() !== []) {
    $headBlocks[] = jsonld_contact_page(seo_canonical($page), url('/') . '#organization', $page['title'] ?? ui('contactPage.heading'));
}
$headBlocks = array_merge($headBlocks, $page['jsonld'] ?? []);
?>
<!doctype html>
<html lang="<?= e($headLang) ?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e(seo_title($page)) ?></title>
<?php if (!empty($page['description'])): ?>
<meta name="description" content="<?= e($page['description']) ?>">
<?php endif; ?>
<link rel="canonical" href="<?= e(seo_canonical($page)) ?>">
<?php foreach ($page['hreflang'] ?? [] as $headLocale => $headPath): ?>
<link rel="alternate" hreflang="<?= e($headLocale) ?>" href="<?= e(url($headPath)) ?>">
<?php endforeach; ?>
<?php if (!empty($page['noindex'])): ?>
<meta name="robots" content="noindex, follow">
<?php else: ?>
<?php /* Large previews are what Google Discover and image results show; the default is a thumbnail. */ ?>
<meta name="robots" content="max-image-preview:large">
<?php endif; ?>

<meta property="og:type" content="<?= e($page['ogType'] ?? 'website') ?>">
<meta property="og:site_name" content="<?= e(site('name')) ?>">
<meta property="og:locale" content="<?= e(str_replace('-', '_', $headLang)) ?>">
<meta property="og:title" content="<?= e(seo_title($page)) ?>">
<?php if (!empty($page['description'])): ?>
<meta property="og:description" content="<?= e($page['description']) ?>">
<?php endif; ?>
<meta property="og:url" content="<?= e(seo_canonical($page)) ?>">
<meta property="og:image" content="<?= e(seo_og_image($page)) ?>">
<?php /* Declared dimensions let WhatsApp, Facebook and X lay the card out before the file arrives —
   the share preview is the first thing most Paraguayan traffic sees. The default card is 1200x630;
   a page that sets its own ogImage may declare ogImageSize => [w, h]. */ ?>
<?php [$headOgW, $headOgH] = $page['ogImageSize'] ?? [1200, 630]; ?>
<meta property="og:image:width" content="<?= e((string) $headOgW) ?>">
<meta property="og:image:height" content="<?= e((string) $headOgH) ?>">
<meta property="og:image:alt" content="<?= e($page['ogImageAlt'] ?? ui('foundation.ogImageAlt')) ?>">
<meta name="twitter:card" content="summary_large_image">
<?php if (($page['ogType'] ?? '') === 'article' && !empty($page['record']['updated'])): ?>
<meta property="article:modified_time" content="<?= e($page['record']['updated']) ?>">
<?php endif; ?>

<!-- Keep in step with --ink in assets/css/site.css. -->
<meta name="theme-color" content="#2F5D50">
<link rel="icon" href="<?= e(asset('/assets/img/favicon.svg')) ?>" type="image/svg+xml">

<?php /* Every page's primary action leaves for the app origin; warming the connection here shaves the
   handshake off that hop, which is the one click the whole site is built to earn. */ ?>
<link rel="preconnect" href="https://app.embarazo.com.py" crossorigin>
<link rel="dns-prefetch" href="https://app.embarazo.com.py">

<?php /* Nunito Sans: the @font-face rules (assets/css/fonts.css) and the two critical preloads are emitted only once the
   woff2 files exist, so the site makes no failing font requests until they are added (assets/fonts/README.md). */ ?>
<?php if (is_file(ROOT_DIR . '/assets/fonts/nunito-sans-400-latin.woff2')): ?>
<link rel="stylesheet" href="<?= e(asset('/assets/css/fonts.css')) ?>">
<?php endif; ?>
<?php foreach (['nunito-sans-400-latin', 'nunito-sans-700-latin'] as $headFont): ?>
<?php if (is_file(ROOT_DIR . '/assets/fonts/' . $headFont . '.woff2')): ?>
<link rel="preload" href="<?= e(asset('/assets/fonts/' . $headFont . '.woff2')) ?>" as="font" type="font/woff2" crossorigin>
<?php endif; ?>
<?php endforeach; ?>
<link rel="stylesheet" href="<?= e(asset('/assets/css/site.css')) ?>">

<?php foreach ($headBlocks as $headBlock): ?>
<script type="application/ld+json"><?= json_ld($headBlock) ?></script>
<?php endforeach; ?>

</head>
<body>
<a class="skip-link" href="#main"><?= e(ui('nav.skip')) ?></a>

<?php unset($headLang, $headBlocks, $headTrail, $headCrumb, $headFaq, $headArticle, $headOs, $headBlock, $headOgW, $headOgH, $headLocale, $headPath, $headFont); ?>
