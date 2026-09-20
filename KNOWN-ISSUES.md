# Pendientes conocidos al cerrar fase L

Consolidado de T0/T1, A1–A6, W1–W8, P1–P3 y decisiones D0. Detalle operativo en
`docs/human-todo.md`; cola factual en `docs/facts-to-verify.md`. Fallos históricos ya
corregidos no son pendientes.

## Bloqueos antes del lanzamiento

- Revisión humana médica/legal y fuentes oficiales vigentes pendientes. Gates técnicos
  verdes no equivalen a aprobación editorial (todos los lotes).
- No hay canal público de contacto/correcciones: /contacto/ permanece 200/noindex;
  configurar valores no publica enlaces automáticamente (T0/P1).
- Respaldo recuperable de WordPress, docroot y deploy por Anton pendientes; el reemplazo
  elimina WordPress. PR/merge y eventual watcher pertenecen al manager.
- Aceptación visual y rendimiento móvil sin completar: capturas históricas fallaron por
  Playwright ausente o acceso del navegador; no se afirma Lighthouse ni QA visual.

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

- Nunito Sans/licencia e imágenes S9/capturas reales pendientes; fallbacks activos.
- Analytics existe pero no se consume: elegir ninguna o integrar un script sin cookies.
  Contacto tiene campos duplicados que deben mantenerse coherentes.
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
