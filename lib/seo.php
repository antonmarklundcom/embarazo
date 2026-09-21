<?php
/**
 * Head metadata and JSON-LD. partials/head.php renders whatever these return;
 * pages only ever populate the $page array.
 *
 * $page keys (all optional except title and path):
 *   title        string  page title without the site suffix, <= 42 chars
 *   description  string  meta description, 120-155 chars
 *   path         string  '/servicios/x/' — canonical path, always trailing slash
 *   ogImage      string  path or absolute URL; defaults to the site OG image
 *   ogType       string  'website' (default) or 'article'
 *   noindex      bool    emit robots noindex
 *   breadcrumbs  array   [['label' => 'Services', 'path' => '/servicios/'], ...]
 *                        without the home crumb — jsonld_breadcrumbs() prepends it
 *   faq          array   [['q' => ..., 'a' => ...], ...] → FAQPage
 *   article      array   ['headline','datePublished','dateModified','image']
 *   jsonld       array   extra raw JSON-LD blocks
 */

declare(strict_types=1);

/**
 * The title suffix every page carries: ' | <site name>', from content/site.php.
 * Nothing in this repository hardcodes a business name.
 */
function seo_title_suffix(): string
{
    $name = trim((string) (site('name') ?? ''));

    return $name === '' ? '' : ' | ' . $name;
}

/**
 * The full <title>: the page's own title plus the site suffix, unless the page
 * already carries the site name.
 */
function seo_title(array $page): string
{
    $title  = trim((string) ($page['title'] ?? ''));
    $name   = trim((string) (site('name') ?? ''));
    $suffix = seo_title_suffix();

    if ($title === '') {
        return $name;
    }

    // Keep an authored title intact when branding would exceed its SEO budget.
    $withSuffix = $title . $suffix;
    return ($name !== '' && str_contains($title, $name)) || preg_match_all('/./us', $withSuffix) > 60 ? $title : $withSuffix;
}

/**
 * Canonical URL for the page.
 */
function seo_canonical(array $page): string
{
    return url($page['path'] ?? '/');
}

/**
 * Absolute URL of the social preview image.
 */
function seo_og_image(array $page): string
{
    $image = $page['ogImage'] ?? '/assets/img/og-default.jpg';

    return str_starts_with($image, 'http') ? $image : url($image);
}

/**
 * Encode a JSON-LD block for a <script> tag. Slashes and unicode stay readable;
 * `<` is escaped so the payload can never close the script element early.
 */
function json_ld(array $data): string
{
    return (string) json_encode(
        $data,
        JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_HEX_TAG | JSON_PRETTY_PRINT
    );
}

/**
 * The business itself, from content/site.php. Fields the site has not supplied are
 * omitted rather than guessed, so the block stays truthful as it fills in.
 */
function jsonld_organization(): array
{
    /* The schema.org type is a site fact, not a code fact: a law firm is a
       LegalService, a plumber a Plumber. content/site.php names it. */
    $types = array_values(array_filter((array) site('schemaType')));

    $data = [
        '@context'   => 'https://schema.org',
        '@type'      => $types !== [] ? $types : ['LocalBusiness'],
        '@id'        => url('/') . '#organization',
        'name'       => (string) site('name'),
        'url'        => url('/'),
        'image'      => url('/assets/img/og-default.jpg'),
        'areaServed' => ['@type' => 'Country', 'name' => site('country') ?? market_country()],
    ];

    if (site('description')) {
        $data['description'] = site('description');
    }
    if (site('phone')) {
        $data['telephone'] = site('phone');
    }
    if (site('email')) {
        $data['email'] = site('email');
    }
    if (site('foundedYear')) {
        $data['foundingDate'] = (string) site('foundedYear');
    }

    $address = array_filter([
        'streetAddress'   => site('street'),
        'addressLocality' => site('city'),
        'addressCountry'  => site('country'),
    ]);
    if ($address !== []) {
        $data['address'] = ['@type' => 'PostalAddress'] + $address;
    }

    $socials = array_values(array_filter((array) site('socials')));
    if ($socials !== []) {
        $data['sameAs'] = $socials;
    }

    $hours = site('openingHours');
    if (is_array($hours) && $hours !== []) {
        $data['openingHoursSpecification'] = $hours;
    }

    return $data;
}

/**
 * BreadcrumbList, always rooted at the home page. Returns null when there are no crumbs.
 */
function jsonld_breadcrumbs(array $crumbs): ?array
{
    if ($crumbs === []) {
        return null;
    }

    $items = [];
    $all   = array_merge([['label' => ui('nav.home', 'Inicio'), 'path' => '/']], $crumbs);

    foreach ($all as $i => $crumb) {
        $items[] = [
            '@type'    => 'ListItem',
            'position' => $i + 1,
            'name'     => $crumb['label'],
            'item'     => url($crumb['path']),
        ];
    }

    return [
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $items,
    ];
}

/**
 * FAQPage from [['q' => ..., 'a' => ...], ...].
 */
function jsonld_faq(array $faq): ?array
{
    if ($faq === []) {
        return null;
    }

    $items = [];
    foreach ($faq as $entry) {
        if (empty($entry['q']) || empty($entry['a'])) {
            continue;
        }
        $items[] = [
            '@type'          => 'Question',
            'name'           => $entry['q'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $entry['a']],
        ];
    }

    if ($items === []) {
        return null;
    }

    return [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];
}

/**
 * Article, for blog posts.
 */
function jsonld_article(array $article, array $page): ?array
{
    if ($article === []) {
        return null;
    }

    $data = [
        '@context'         => 'https://schema.org',
        '@type'            => 'Article',
        'headline'         => $article['headline'] ?? ($page['title'] ?? ''),
        'mainEntityOfPage' => seo_canonical($page),
        'author'           => ['@type' => 'Organization', 'name' => (string) site('name')],
        'publisher'        => ['@id' => url('/') . '#organization'],
        'image'            => seo_og_image($page),
    ];

    foreach (['datePublished', 'dateModified', 'description'] as $key) {
        if (!empty($article[$key])) {
            $data[$key] = $article[$key];
        }
    }

    return $data;
}

/**
 * Every JSON-LD block this page should emit, in order.
 */
function seo_jsonld(array $page): array
{
    $blocks = [jsonld_organization()];

    foreach ([
        jsonld_breadcrumbs($page['breadcrumbs'] ?? []),
        jsonld_faq($page['faq'] ?? []),
        jsonld_article($page['article'] ?? [], $page),
    ] as $block) {
        if ($block !== null) {
            $blocks[] = $block;
        }
    }

    foreach ($page['jsonld'] ?? [] as $extra) {
        $blocks[] = $extra;
    }

    return $blocks;
}

/**
 * Stage-A builders below are pure: callers supply canonical absolute URLs and
 * content, no globals/request/clock reads. Stage B wires them into templates.
 * Keep strings raw (not HTML escaped); json_ld() is the ONLY script encoder.
 * Existing template builders above remain backward-compatible.
 */

/** Identity: name, optional description/logo (absolute URL). No invented contacts. */
function jsonld_site_organization(array $identity, string $origin): array
{
    $root = rtrim($origin, '/') . '/';
    $data = ['@context' => 'https://schema.org', '@type' => 'Organization',
        '@id' => $root . '#organization', 'name' => $identity['name'], 'url' => $root];
    foreach (['description', 'logo'] as $key) {
        if (!empty($identity[$key])) {
            $data[$key] = $identity[$key];
        }
    }
    return $data;
}

function jsonld_website(array $identity, string $origin): array
{
    $root = rtrim($origin, '/') . '/';
    return ['@context' => 'https://schema.org', '@type' => 'WebSite',
        '@id' => $root . '#website', 'url' => $root, 'name' => $identity['name'],
        'inLanguage' => 'es-PY', 'publisher' => ['@id' => $root . '#organization']];
}

/** Sitewide pair, to replace rather than duplicate the legacy Organization block. */
function jsonld_sitewide(array $identity, string $origin): array
{
    return [jsonld_site_organization($identity, $origin), jsonld_website($identity, $origin)];
}

/** App data: name,url,description; optional applicationCategory,operatingSystem.
 * Free PWA per docs/app-facts; no rating, fabricated reviews or store listing.
 */
function jsonld_software_application(array $app): array
{
    $data = ['@context' => 'https://schema.org', '@type' => 'SoftwareApplication',
        '@id' => rtrim($app['url'], '/') . '/#application',
        'name' => $app['name'], 'url' => $app['url'], 'description' => $app['description'],
        'inLanguage' => 'es-PY', 'applicationCategory' => 'HealthApplication', 'operatingSystem' => 'Web',
        'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'PYG']];
    foreach (['applicationCategory', 'operatingSystem'] as $key) {
        if (!empty($app[$key])) {
            $data[$key] = $app[$key];
        }
    }
    return $data;
}

/** One OS per HowTo: pass the displayed os label in name, never mix alternatives.
 * steps are strings or {title,body:string[]}; no invented timings or supplies.
 */
function jsonld_howto(string $name, string $canonical, array $steps): array
{
    $items = [];
    foreach ($steps as $step) {
        $item = ['@type' => 'HowToStep', 'position' => count($items) + 1];
        if (is_string($step)) {
            $item['text'] = $step;
        } else {
            $item['name'] = $step['title'];
            $item['text'] = implode("\n\n", $step['body']);
        }
        $items[] = $item;
    }
    return ['@context' => 'https://schema.org', '@type' => 'HowTo',
        'name' => $name, 'url' => $canonical, 'inLanguage' => 'es-PY', 'step' => $items];
}

/** Citation titles remain useful when a verified official URL is not yet available. */
function jsonld_citations(array $sources): array
{
    return array_map(static function (array $source): array {
        $citation = ['@type' => 'CreativeWork', 'name' => $source['title'],
            'publisher' => ['@type' => 'Organization', 'name' => $source['publisher']]];
        if (!empty($source['url'])) {
            $citation['url'] = $source['url'];
        }
        return $citation;
    }, $sources);
}

/** Article for all editorial kinds, including legal/procedural. image must be absolute. */
function jsonld_content_article(array $record, string $canonical, string $organizationId, ?string $image = null): array
{
    $data = ['@context' => 'https://schema.org', '@type' => 'Article',
        '@id' => $canonical . '#article', 'headline' => $record['title'],
        'description' => $record['metaDescription'], 'inLanguage' => 'es-PY',
        'mainEntityOfPage' => $canonical,
        'url' => $canonical, 'publisher' => ['@id' => $organizationId],
        'author' => ['@id' => $organizationId], 'dateModified' => $record['updated']];
    if (!empty($record['datePublished'])) {
        $data['datePublished'] = $record['datePublished'];
    }
    if ($image !== null) {
        $data['image'] = $image;
    }
    if (!empty($record['sources'])) {
        $data['citation'] = jsonld_citations($record['sources']);
    }
    return $data;
}

/** MedicalWebPage accompanies an Article; reviewer is omitted until actually signed. */
function jsonld_medical_webpage(array $record, string $canonical, string $organizationId): array
{
    $data = ['@context' => 'https://schema.org', '@type' => 'MedicalWebPage',
        '@id' => $canonical . '#webpage', 'url' => $canonical,
        'name' => $record['title'], 'headline' => $record['title'], 'description' => $record['metaDescription'],
        'inLanguage' => 'es-PY', 'dateModified' => $record['updated'],
        'publisher' => ['@id' => $organizationId], 'mainEntity' => ['@id' => $canonical . '#article']];
    if (!empty($record['reviewedBy']['name'])) {
        $data['reviewedBy'] = ['@type' => 'Person', 'name' => $record['reviewedBy']['name']];
        if (!empty($record['reviewedBy']['credentials'])) {
            $data['reviewedBy']['hasCredential'] = $record['reviewedBy']['credentials'];
        }
        if (!empty($record['reviewedAt'])) {
            $data['lastReviewed'] = $record['reviewedAt'];
        }
    }
    if (!empty($record['sources'])) {
        $data['citation'] = jsonld_citations($record['sources']);
    }
    return $data;
}

/** Medical set; legal/procedural/product receive Article only, plus non-empty FAQ. */
function jsonld_editorial(array $record, string $kind, string $canonical, string $organizationId, ?string $image = null): array
{
    $blocks = [jsonld_content_article($record, $canonical, $organizationId, $image)];
    if ($kind === 'medical') {
        array_unshift($blocks, jsonld_medical_webpage($record, $canonical, $organizationId));
    }
    $faq = jsonld_faq($record['faq'] ?? []);
    if ($faq !== null) {
        $blocks[] = $faq;
    }
    return $blocks;
}

/** Complete trail, including home, as [{label,url:absolute}]. Works on home too. */
function jsonld_breadcrumb_list(array $crumbs): array
{
    $items = [];
    foreach ($crumbs as $crumb) {
        $items[] = ['@type' => 'ListItem', 'position' => count($items) + 1,
            'name' => $crumb['label'], 'item' => $crumb['url']];
    }
    return ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => $items];
}

/** Tool record: title,metaDescription; explicit URL, no invented browser requirements. */
function jsonld_web_application(array $tool, string $canonical): array
{
    return ['@context' => 'https://schema.org', '@type' => 'WebApplication',
        '@id' => $canonical . '#application', 'url' => $canonical, 'name' => $tool['title'],
        'description' => $tool['metaDescription'], 'inLanguage' => 'es-PY'];
}
