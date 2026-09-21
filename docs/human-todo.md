# Pendientes de Anton — orden de prioridad

1. **Antes de lanzar: revisión médica y legal.** Asignar revisores y comprobar fuentes
   oficiales actuales de `docs/facts-to-verify.md`. Cerrar D0 F2–F11 de
   `docs/decisions-needed.md` sin usar previews como evidencia. Completar identidad,
   credenciales, registro y fechas solo tras revisión real. Guaraní requiere revisión nativa.
2. **Canal de contacto/correcciones.** Confirmar correo y WhatsApp y cargarlos en los campos
   superiores de `content/site.php` (formato internacional). `/contacto/`, hoy stub noindex,
   se activa sola con el primer canal válido; después correr `bash ./verify.sh --final`.
3. **Analítica o ninguna.** Mantener analytics=null si no se usará. Para Cloudflare Web
   Analytics (sin cookies) cargar `'analytics' => ['cloudflare' => '<token>']` en
   `content/site.php`; ya está integrado (un solo script). No registrar tokens en documentación.
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
11. **Después del deploy: Search Console.** Verificar embarazo.com.py, enviar sitemap.xml,
    comprobar indexación y retirar URLs de semanas/guías de la app después del PR anterior.
    Revisar tráfico y CTA únicamente si se habilitó analítica.

Las correcciones técnicas menores están agrupadas en `KNOWN-ISSUES.md`.
