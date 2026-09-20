# Pendientes de Anton — orden de prioridad

1. **Antes de lanzar: revisión médica y legal.** Asignar revisores y comprobar fuentes
   oficiales actuales de `docs/facts-to-verify.md`. Cerrar D0 F2–F11 de
   `docs/decisions-needed.md` sin usar previews como evidencia. Completar identidad,
   credenciales, registro y fechas solo tras revisión real. Guaraní requiere revisión nativa.
2. **Canal de contacto/correcciones.** Confirmar correo y WhatsApp; configurar los campos
   superiores y contact en site.php. Encargar enlaces públicos y actualización de
   `/contacto/`, hoy único stub noindex; cambiar valores no activa esa página.
3. **Analítica o ninguna.** Mantener analytics=null si no se usará; si se elige Cloudflare
   Web Analytics o Umami sin cookies, encargar el consumidor y un único script. Hoy no
   hay integración. No registrar credenciales ni tokens en documentación.
4. **Nunito Sans y aceptación visual.** Aportar los seis WOFF2 y licencia indicados en
   `assets/fonts/README.md`: 400/500/700, latin/latin-ext, guaraní y ₲. Verificar 360 px,
   escritorio, accesibilidad, tools y Lighthouse móvil; capturas históricas fallaron por
   falta de Playwright. No se ha certificado diseño ni rendimiento.
5. **Producto en dispositivos.** Validar instalación Android/iPhone, alcance offline,
   permisos, exportación/desinstalación, respaldo y campos visibles al compartir en
   familia, requisitos de cuenta y revocación. No convertir supuestos en promesas.
6. **Imágenes S9 manual.** Confirmar allowlist *.cloudfront.net y skill de imagen
   actualizada en el entorno autorizado; seguir brief, manifiesto y presupuesto del
   plan. Obtener capturas reales con npm run gen:screenshots en la app o dispositivos
   y entregarlas en assets/img/app/. Completar hero, seis hubs, 42 semanas, nueve tarjetas
   y OG según el brief. El OG PNG 1200×630 y favicon de T0 ya existen; no son faltantes.
7. **Comparación nominal.** Verificar Flo, Preggers y BabyCenter con fuentes actuales y
   fechadas antes de redactarla. La página actual da siete preguntas de elección,
   sin afirmar prestaciones de esos competidores.
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
