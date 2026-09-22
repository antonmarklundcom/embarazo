<?php
/**
 * sitemap.xml, generated from the content arrays. Served at /sitemap.xml by the
 * rewrite in .htaccess (and by router.php locally).
 *
 * Pages still marked 'stub' in content/pages.php are excluded: they are noindex
 * until the phase that owns them writes the content, and a sitemap should not
 * advertise a placeholder. Blog articles, tools, guides and segment
 * pages appear automatically as they are added to their content arrays.
 */

declare(strict_types=1);

require __DIR__ . '/lib/bootstrap.php';

$today = date('Y-m-d');
$urls  = [];

/* lastmod has to be a fact, not the date of the last deploy: a sitemap that
   claims every page changed today teaches Google to ignore the field. Hubs and
   indexes have no date of their own, so they inherit the newest date among the
   entries they list; a page with nothing to inherit falls back to today. */
$newest = static function (array $dates): ?string {
    $dates = array_values(array_filter($dates));
    if ($dates === []) {
        return null;
    }
    sort($dates);
    return (string) end($dates);
};
$weekDates = array_map(static fn (array $week): ?string => $week['updated'] ?? null, content('semanas'));
$articleDates = [];
$clusterDates = [];
foreach (content('articulos') as $record) {
    $articleDates[] = $record['updated'] ?? null;
    $clusterDates[$record['cluster']][] = $record['updated'] ?? null;
}
$blogDates = array_map(static fn (array $post): ?string => $post['updated'] ?? $post['date'] ?? null, content('blog'));
$toolDates = [];
foreach (content('tools') as $tool) {
    if (!empty($tool['path'])) {
        $toolDates[$tool['path']] = $tool['updated'] ?? null;
    }
}
$derived = [
    '/'        => $newest(array_merge($weekDates, $articleDates, $blogDates)),
    '/semana/' => $newest($weekDates),
    '/blog/'   => $newest($blogDates),
] + $toolDates;
foreach (content('clusters') as $clusterKey => $cluster) {
    $derived['/' . $clusterKey . '/'] = $newest($clusterDates[$clusterKey] ?? []);
}
foreach (content('trimestres') as $trimesterNumber => $trimester) {
    $derived['/trimestre/' . $trimesterNumber . '/'] = $newest(
        array_intersect_key($weekDates, array_flip($trimester['weeks'] ?? []))
    );
}

foreach (content('pages') as $path => $meta) {
    /* Stubs are noindex until the phase that owns them writes the content, and
       '/404' is not a URL of its own — neither belongs in a sitemap. */
    if (!empty($meta['stub']) || !empty($meta['noindex'])) {
        continue;
    }
    $urls[] = [
        'loc'        => url($path),
        'lastmod'    => $meta['updated'] ?? $derived[$path] ?? null,
        'changefreq' => $meta['changefreq'] ?? 'monthly',
        'priority'   => $meta['priority'] ?? '0.5',
    ];
}

foreach (content('blog') as $article) {
    $article += page_meta('/blog/' . $article['slug'] . '/');
    if (!empty($article['stub']) || !empty($article['noindex'])) { continue; }
    $urls[] = [
        'loc'        => url('/blog/' . $article['slug'] . '/'),
        'lastmod'    => $article['updated'] ?? $article['date'] ?? null,
        'changefreq' => 'yearly',
        'priority'   => '0.6',
    ];
}


// Foundation exemplars and later authored routes; seed-only weeks stay excluded.
foreach (content('semanas') as $weekNumber => $weekRecord) {
    $weekPath = '/semana/' . $weekNumber . '/';
    $weekRecord += page_meta($weekPath);
    if (array_filter($weekRecord['sections'] ?? []) && empty($weekRecord['stub']) && empty($weekRecord['noindex']) && is_file(ROOT_DIR . $weekPath . 'index.php')) {
        $urls[] = ['loc' => url($weekPath), 'lastmod' => $weekRecord['updated'], 'changefreq' => 'monthly', 'priority' => '0.7'];
    }
}
foreach (content('articulos') as $articleRecord) {
    $articleRecord += page_meta($articleRecord['path']);
    if (!empty($articleRecord['stub']) || !empty($articleRecord['noindex'])) { continue; }
    if (is_file(ROOT_DIR . $articleRecord['path'] . 'index.php')) {
        $urls[] = ['loc' => url($articleRecord['path']), 'lastmod' => $articleRecord['updated'], 'changefreq' => 'monthly', 'priority' => '0.6'];
    }
}

header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?>
  <url>
    <loc><?= e($url['loc']) ?></loc>
    <lastmod><?= e($url['lastmod'] ?? $today) ?></lastmod>
    <changefreq><?= e($url['changefreq']) ?></changefreq>
    <priority><?= e($url['priority']) ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
