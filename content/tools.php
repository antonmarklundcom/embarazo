<?php
/**
 * The tool pages under /herramientas/, keyed by slug — same shape discipline as
 * content/pages.php: fill every key, never rename or remove one.
 *
 *   path             string   URL, trailing slash
 *   title            string   the tool's concept, used as the title fallback
 *   navLabel         string   short label for the hub, the nav and the footer
 *   seoTitle         string   <title> without the site suffix, <= 41 chars
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   hero             array    eyebrow, h1, lead
 *   intro            string[] 200–300 words of copy, readable without JS
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   related          string[] related site paths
 *   ctaWhatsapp      string   legacy key, kept empty (no lead capture)
 *   formNeed         string   legacy key, kept empty (no forms)
 *   analyticsTool    string   legacy key, kept empty (no event tracking)
 *   example          bool     seed record only — see content/pages.php
 *   handoff          array    ['medium' => 'tool']; app_link() uses record slug
 *   math             string   'pregnancy'; arithmetic shared by both tools
 *
 * The calculator markup itself lives in each tool's own route file, which builds
 * it into $toolCalcHtml and requires templates/tool.php; the arithmetic lives in
 * assets/js/tools/<slug>.js and reads its rules from window.Market.
 *
 * Mi Bebé routes are /calculadora/ and /calendario-de-ovulacion/.
 * Legacy ctaWhatsapp/formNeed/analyticsTool keys stay empty strings; no leads,
 * forms or analytics events are used. related holds site paths. No lead-values
 * record is required. Records intentionally stay empty until S4.
 */

declare(strict_types=1);

return [];
