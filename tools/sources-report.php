<?php
/**
 * Read-only inventory of sources[] across the content arrays. Changes nothing.
 *
 *     php tools/sources-report.php [site-root] [--list]
 *
 * Prints, per record kind: citations with and without a URL, self-citations
 * (publisher "Mi Bebé" or this site's own domain), and records whose every
 * citation lacks a URL. --list adds one line per record that still has a
 * citation without a URL, so a reviewer can work through them.
 *
 * Why it exists: a URL is the cheapest trust signal for readers, but adding one
 * is a human/networked task (AGENTS.md: never invent a source URL). This report
 * only measures the gap; it never fills it.
 */
declare(strict_types=1);

$srArgs = array_slice($argv, 1);
$srList = in_array('--list', $srArgs, true);
$srRoot = array_values(array_filter($srArgs, static fn (string $a): bool => !str_starts_with($a, '--')))[0] ?? dirname(__DIR__);
require rtrim($srRoot, '/\\') . '/lib/bootstrap.php';

$srCollections = ['pages', 'semanas', 'trimestres', 'meses', 'clusters', 'articulos', 'blog', 'tools', 'comer-hub'];
$srTotals = [];
$srSelf = 0;
$srPending = [];

$srIsSelf = static function (array $source): bool {
    $publisher = mb_strtolower((string) ($source['publisher'] ?? ''));
    $host = (string) parse_url((string) ($source['url'] ?? ''), PHP_URL_HOST);
    return str_contains($publisher, 'mi bebé') || str_contains($publisher, 'mi bebe')
        || str_ends_with($host, 'embarazo.com.py');
};

foreach ($srCollections as $srName) {
    $srCollection = content($srName);
    $srRecords = isset($srCollection['sources']) ? [$srName => $srCollection] : $srCollection;
    foreach ($srRecords as $srKey => $srRecord) {
        if (!is_array($srRecord) || empty($srRecord['sources']) || !is_array($srRecord['sources'])) {
            continue;
        }
        $srKind = (string) ($srRecord['kind'] ?? ($srName === 'semanas' ? 'medical' : 'other'));
        $srTotals[$srKind] ??= ['records' => 0, 'citations' => 0, 'withUrl' => 0, 'noUrlRecords' => 0];
        $srTotals[$srKind]['records']++;
        $srMissing = 0;
        foreach ($srRecord['sources'] as $srSource) {
            $srTotals[$srKind]['citations']++;
            if (!empty($srSource['url'])) {
                $srTotals[$srKind]['withUrl']++;
            } else {
                $srMissing++;
            }
            if ($srIsSelf($srSource)) {
                $srSelf++;
            }
        }
        if ($srMissing === count($srRecord['sources'])) {
            $srTotals[$srKind]['noUrlRecords']++;
        }
        if ($srMissing > 0) {
            $srPending[] = sprintf('%s:%s  %d/%d without URL  (%s)', $srName, (string) ($srRecord['path'] ?? $srKey), $srMissing, count($srRecord['sources']), $srKind);
        }
    }
}

ksort($srTotals);
$srAll = ['records' => 0, 'citations' => 0, 'withUrl' => 0, 'noUrlRecords' => 0];
echo "Sources inventory (read-only)\n";
printf("%-11s %8s %10s %9s %12s %22s\n", 'kind', 'records', 'citations', 'with URL', 'without URL', 'records with no URL');
foreach ($srTotals as $srKind => $srRow) {
    printf("%-11s %8d %10d %9d %12d %22d\n", $srKind, $srRow['records'], $srRow['citations'], $srRow['withUrl'], $srRow['citations'] - $srRow['withUrl'], $srRow['noUrlRecords']);
    foreach ($srAll as $srField => $srValue) {
        $srAll[$srField] = $srValue + $srRow[$srField];
    }
}
printf("%-11s %8d %10d %9d %12d %22d\n", 'total', $srAll['records'], $srAll['citations'], $srAll['withUrl'], $srAll['citations'] - $srAll['withUrl'], $srAll['noUrlRecords']);
printf("Self-citations (publisher Mi Bebé or this domain): %d\n", $srSelf);
if ($srList) {
    echo "\nRecords with at least one citation without a URL:\n", implode("\n", $srPending), "\n";
}
