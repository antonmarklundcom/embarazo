# Pendientes conocidos al cerrar fase L

Consolidado de T0/T1, A1–A6, W1–W8, P1–P3 y decisiones D0. Detalle operativo en
`docs/human-todo.md`; cola factual en `docs/facts-to-verify.md`. Fallos históricos ya
corregidos no son pendientes.

## Bloqueos antes del lanzamiento

- Revisión humana médica/legal y fuentes oficiales vigentes pendientes. Gates técnicos
  verdes no equivalen a aprobación editorial (todos los lotes).
- Verificado el 2026-09-20 contra los textos oficiales (Ley 5508, Ley 7383 vía MTESS, Ley 5099, Código del
  Trabajo arts. 261-262 y la página del IPS): los artículos licencia de maternidad, permiso para controles,
  hora de lactancia, licencia de paternidad, fuero, subsidio IPS y asignación familiar se reescribieron con
  esas cifras y enlaces oficiales. Sigue faltando la revisión de un abogado o abogada laboralista y de un
  profesional de salud; ver docs/facts-to-verify.md (secciones VERIFIED y Still NOT verified).
- No hay canal público de contacto/correcciones: /contacto/ permanece 200/noindex hasta que se
  cargue WhatsApp, correo o teléfono en content/site.php; entonces se activa sola (indexable, en
  el sitemap, con los canales listados).
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
- Analítica apagada por defecto: para Cloudflare Web Analytics cargar el token en
  content/site.php (partials/analytics.php agrega un solo script sin cookies); si no, dejar null.
  Contacto tiene campos duplicados (superiores y contact) que deben mantenerse coherentes.
- Producto: related[] se valida pero no produce tarjetas (P1). La comparación tiene
  acceso real por footer; la navegación completa queda a dos clics.
- Semana 12: H2 de ecografía requiere ampliar plantilla/contrato; el contenido existe
  en párrafos (W2). Semana 20 conserva menos de dos enlaces contextuales en prosa (W3),
  aunque related, hub y navegación pasan. Su cuerpo no se reescribió.
- Derechos: “Si tu empleador no cumple” es la última sección de contenido, pero pasos,
  CTA/FAQ/related agregan H2 después; decidir si se exige último H2 literal (A1).
- Auditorías históricas marcaron títulos licencia=58 y home=49 sobre un límite de 48;
  el gate vigente admite 60. Descripciones heredadas en pages: FAQ=156, calculadora y
  calendario=159, 404=55 frente a 120–155. No corregidas: copy fuera del alcance L;
  tools tiene metadata propia renderizada. No hay duplicados.
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
