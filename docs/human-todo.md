# Pendientes de Anton — orden de prioridad

1. **Revisión médica y legal: diferida por decisión de Anton (2026-09-22).** Se lanza sin
   revisor externo durante los primeros meses; el aviso visible de alcance en cada página de
   salud y las fechas `validAsOf` en lo legal sostienen la postura mientras tanto. Sigue
   pendiente, no cancelado: `docs/facts-to-verify.md` mantiene la cola por página y D0 F2–F11
   de `docs/decisions-needed.md` siguen abiertos. No completar `reviewedBy`, credenciales ni
   registro sin revisión real. Guaraní sigue oculto hasta revisión nativa.
2. **Canal de contacto: hecho (2026-09-22).** WhatsApp +595 992 279 599 cargado en
   `content/site.php`; `/contacto/` quedó indexable, en el sitemap y enlazada desde el pie.
   Falta del lado humano: contestar. Si el número cambia, se edita ese campo y listo.
3. **Analítica: apagada por decisión de Anton (2026-09-22).** Sin Google Analytics. Queda
   `analytics => null`, sin pedidos a terceros. Nota: los CTA llevan UTM (`utm_source=site`,
   `utm_medium`, `utm_campaign`), así que hoy esas etiquetas solo se pueden leer del lado de
   la app. Si más adelante querés ver qué página trae instalaciones desde el sitio mismo,
   Cloudflare Web Analytics (sin cookies, sin banner) ya está integrado: cargar
   `'analytics' => ['cloudflare' => '<token>']`. No registrar tokens en documentación.
4. **Aceptación visual en un teléfono real.** Nunito Sans ya está instalada (2026-09-20; falta el subset vietnamese para ẽ y g̃, ver `assets/fonts/README.md`, opcional, requiere tu OK). Lighthouse móvil se corrió el 2026-09-21 en el servidor de desarrollo con 98-100 en todo; mirá la home, 3-4 semanas y un artículo en tu teléfono.
5. **Producto en dispositivos.** Validar instalación Android/iPhone, alcance offline,
   permisos, exportación/desinstalación, respaldo y campos visibles al compartir en
   familia, requisitos de cuenta y revocación. No convertir supuestos en promesas.
6. **Imágenes: hechas (2026-09-21).** Las 59 imágenes (hero, 6 hubs, OG, 9 tarjetas, 42 semanas) se generaron con Higgsfield Sunburst (64,5 créditos, ledger verificado) y están cableadas; detalle en `docs/imagery-manifest.json`. Las capturas reales de la app (`npm run gen:screenshots`) son opcionales para más adelante.
7. **Comparación.** Decisión de Anton (2026-09-20): se queda como guía de elección neutral, sin afirmaciones sobre competidores con nombre.
8. **Gestión de entrega.** Activar `bash tools/install-hooks.sh` si falta; el manager
   maneja commit, PR, merge de L y cierre del watcher si existe. T1 no creó Routine.
   CI requiere el sí explícito de Anton; no hay workflow aprobado.
9. **Despliegue.** Respaldar/exportar WordPress y comprobar recuperación antes del cambio
   que lo elimina. hPanel → Git → repo del sitio, rama main, docroot del dominio raíz;
   PHP 8.3, HTTPS, configuración privada y comprobaciones del README.
10. **Semana del lanzamiento: PR de la app, fuera de este repo.** Según
    `docs/app-facts.md`: alternates.canonical de /semana/[n] y /guias/[slug] al sitio;
    retirar ambos de app/sitemap.ts; /conoce → 301 https://embarazo.com.py/;
    NEXT_PUBLIC_SITE_URL; contador agregado arrivals_from_site{page_type} con entrada
    en DECISIONS.md. No adelantar estos cambios al sitio vivo.
11. **Antes del deploy: exportar las URLs del WordPress viejo.** Desde Search Console, la
    lista de páginas indexadas del sitio actual. `.htaccess` ya cubre los endpoints genéricos
    de WordPress, pero cada URL de contenido con tráfico necesita su propio 301 al equivalente
    nuevo (bloque legacy de `.htaccess` + rama en `router.php`). Es la única parte del cambio
    que no se puede reconstruir después.
12. **Después del deploy: Search Console.** Verificar embarazo.com.py, enviar sitemap.xml,
    comprobar indexación y retirar URLs de semanas/guías de la app después del PR anterior.
    Revisar tráfico y CTA únicamente si se habilitó analítica.

Las correcciones técnicas menores están agrupadas en `KNOWN-ISSUES.md`.
