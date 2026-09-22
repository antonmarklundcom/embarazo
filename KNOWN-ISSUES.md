# Pendientes conocidos al cerrar fase L

Consolidado de T0/T1, A1–A6, W1–W8, P1–P3 y decisiones D0. Detalle operativo en
`docs/human-todo.md`; cola factual en `docs/facts-to-verify.md`. Fallos históricos ya
corregidos no son pendientes.

## Bloqueos antes del lanzamiento

- Revisión humana médica/legal: diferida por decisión de Anton (2026-09-22). Se publica sin
  revisor externo los primeros meses, con el aviso de alcance visible en cada página de salud
  y `validAsOf` editorial en lo legal. Gates técnicos verdes siguen sin equivaler a aprobación
  editorial: la cola por página sigue viva en docs/facts-to-verify.md.
- Verificado el 2026-09-20 contra los textos oficiales (Ley 5508, Ley 7383 vía MTESS, Ley 5099, Código del
  Trabajo arts. 261-262 y la página del IPS): los artículos licencia de maternidad, permiso para controles,
  hora de lactancia, licencia de paternidad, fuero, subsidio IPS y asignación familiar se reescribieron con
  esas cifras y enlaces oficiales. Sigue faltando la revisión de un abogado o abogada laboralista y de un
  profesional de salud; ver docs/facts-to-verify.md (secciones VERIFIED y Still NOT verified).
- Canal de contacto resuelto (2026-09-22): WhatsApp +595 992 279 599 en content/site.php;
  /contacto/ quedó indexable, en el sitemap y enlazada desde el pie, con cuerpo propio. No hay
  correo ni teléfono cargados, y el sitio no promete horarios fuera de "lunes a viernes".
- Respaldo recuperable de WordPress, docroot y deploy por Anton pendientes; el reemplazo
  elimina WordPress. PR/merge y eventual watcher pertenecen al manager.
- Aceptación visual en dispositivos reales sin completar. Lighthouse móvil corrido el 2026-09-21 contra el servidor de desarrollo (rendimiento 98-100, accesibilidad, buenas prácticas y SEO 100); ver HANDOFF. Falta mirar en un teléfono real.

## Contenido que necesita revisión humana

- Semanas 1–42, hubs/trimestres, tools, seis clusters y posts clínicos/legales: revisar
  fuentes, crecimiento importado, conteo, controles, PAI, alarmas, nutrición, yuyos/pescado
  local, parto y posparto. Ver cola por página.
- Leyes 5508/2015, 7383/2024, 5099/2013, CT art. 261+, IPS, Tekoporã, MTESS, documentos,
  oficinas, costos/plazos y cobertura necesitan revalidación; validAsOf es editorial.
- D0 F2–F11 siguen abiertos para Anton en decisions-needed: umbrales, lectura, medidas,
  instalación, offline y permisos. No trasladar cifras del preview sin evidencia.
  P1 ya retiró la promesa offline del trust; no es una corrección pendiente.
- Instalación real, visibilidad familiar, revocación, exportación y comportamiento
  offline requieren comprobación. Guaraní está oculto hasta revisión nativa.
- Comparación nominal Flo/Preggers/BabyCenter pendiente de fuentes actuales; la página
  existente es una guía de elección, no una comparación de prestaciones (P1).

## Deuda técnica

- Nunito Sans instalada (2026-09-20, OFL, subsets latin y latin-ext); ẽ y g̃ del guaraní salen de una fuente de reserva hasta agregar el subset vietnamese (ver assets/fonts/README.md). Las 59 imágenes (hero, 6 hubs, OG, 9 tarjetas, 42 semanas) están hechas y cableadas (2026-09-21); capturas reales de la app siguen opcionales.
- Analítica apagada por decisión (2026-09-22), sin Google Analytics: los UTM de los CTA solo
  se leen del lado de la app. Para medir desde el sitio, Cloudflare Web Analytics ya está
  integrado (token en content/site.php, un script, sin cookies).
  Contacto tiene campos duplicados (superiores y contact) que deben mantenerse coherentes;
  hoy ambos llevan el mismo número.
- Las URLs de contenido del WordPress anterior no están mapeadas: .htaccess cubre los endpoints
  genéricos (wp-sitemap, sitemap_index, feeds, wp-admin, wp-login) y falta la lista real, que
  sale de Search Console antes del cambio.
- Producto: related[] se valida pero no produce tarjetas (P1). La comparación tiene
  acceso real por footer; la navegación completa queda a dos clics.
- Semana 12: H2 de ecografía requiere ampliar plantilla/contrato; el contenido existe
  en párrafos (W2). Semana 20 conserva menos de dos enlaces contextuales en prosa (W3),
  aunque related, hub y navegación pasan. Su cuerpo no se reescribió.
- Derechos: “Si tu empleador no cumple” es la última sección de contenido, pero pasos,
  CTA/FAQ/related agregan H2 después; decidir si se exige último H2 literal (A1).
- Metadatos remedidos el 2026-09-22 con mb_strlen sobre los registros (las auditorías viejas
  contaban bytes y por eso inflaban los acentos): ningún título pasa de 60 ni ninguna
  descripción indexable se sale de 120–155. Se corrigieron los dos únicos casos reales,
  licencia-de-maternidad (título 68) y licencia-de-paternidad (descripción 156). El 404 queda
  corto a propósito: es noindex.
- Comentario heredado de blog ubica cuerpo en la ruta; implementación y README usan
  registros. CI/workflow sin aprobación; activar hook corresponde al manager.
  No se descargaron herramientas visuales.

## Fuera de alcance

- PR de la app en la semana de lanzamiento: canonicals de semanas/guías, retirarlas del
  sitemap de app, 301 /conoce, NEXT_PUBLIC_SITE_URL y contador agregado con decisión.
  Checklist en app-facts; no se cambia ese repositorio aquí.
- Search Console después de deploy; producción, credenciales y comparación nominal
  necesitan intervención humana con acceso apropiado.
- Backlog §10: precios/directorios/profesionales con datos reales, eventos, nombres,
  posparto como cluster, videos, rutas guaraní, patrocinio y mensajes semanales. Sin
  forms, captura de email, pop-ups ni tracking adicional.

Resueltos por fases anteriores o L: comentario CSS roto, stubs de contenido completados,
hub children, rutas planificadas, entrega del dataset del calculador y auditoría de paths.
L comprobó 112 indexables una vez en sitemap, cero enlaces HTTP rotos y cero huérfanas;
la huérfana inicial /app/comparacion/ ya está enlazada.
