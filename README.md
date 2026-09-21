# Manual de embarazo.com.py

## Qué es este sitio

Es el sitio de información y presentación de Mi Bebé para Paraguay. Publica semanas,
guías, herramientas y novedades, y lleva a la app en `app.embarazo.com.py`.
Usa HTML y PHP, sin base de datos ni compilación para servir páginas. El texto vive en
`content/`; las rutas cargan plantillas. La especificación es `plan.md` y los hechos del
producto vienen de `docs/app-facts.md`. El repositorio de la app es independiente.

## Cómo correrlo localmente

Necesitás PHP 8.3. Desde la raíz:

```sh
php -S localhost:8080 router.php
```

Abrí `http://localhost:8080/`. Detené el servidor con Ctrl+C. Las pruebas usan Node 24,
Bash (Git Bash en Windows), curl y las utilidades de los scripts; el paquete requiere zip.
El auditor de enlaces y las pruebas de cálculo no necesitan paquetes de Node.

## Cómo agregar o completar una semana

Las 42 semanas ya existen: editá el registro numérico en `content/semanas.php`; no
agregues una semana 43. Este es el esquema completo; los puntos suspensivos son
marcadores para redactar, nunca contenido publicable:

```php
20 => [
    'title' => '...', 'seoTitle' => '...', 'metaDescription' => '...',
    'size' => ['name' => '...', 'lengthCm' => null, 'weightG' => null],
    'milestone' => '...',
    'sections' => ['bebe' => ['...'], 'vos' => ['...'], 'paraguay' => ['...']],
    'control' => null, 'vaccine' => null, 'rightsMilestone' => null, 'season' => null,
    'faq' => [['q' => '...', 'a' => '...']],
    'related' => ['senales-de-alarma', 'carne-perinatal'],
    'image' => null, 'reviewedBy' => null,
    'sources' => [['title' => '...', 'publisher' => '...', 'url' => null, 'accessed' => null]],
    'updated' => 'AAAA-MM-DD',
],
```

Completá las tres secciones, al menos dos fuentes y 3–5 preguntas. Las medidas necesitan
respaldo; no inventes datos para llenar campos. El trimestre se calcula, no se guarda.
La ruta `semana/20/index.php` tiene exactamente tres líneas:

```php
<?php
$n = 20;
require __DIR__ . '/../../templates/week.php';
```

## Cómo agregar un artículo

Elegí uno de los seis clusters: derechos, tramites, salud, alimentacion, parto o planear.
Agregá un slug único en `content/articulos.php` con este esquema:

```php
'nuevo-articulo' => [
    'cluster' => 'salud', 'path' => '/salud/nuevo-articulo/',
    'title' => '...', 'seoTitle' => '...', 'metaDescription' => '...',
    'kind' => 'medical', 'lead' => '...',
    'sections' => [[
        'h2' => '...', 'body' => ['...'],
        'items' => [['title' => '...', 'text' => '...']],
        'table' => ['head' => ['...'], 'rows' => [['...']]],
    ]],
    'steps' => [['title' => '...', 'body' => ['...']]],
    'appHandoff' => ['text' => '...', 'medium' => 'article', 'extra' => []],
    'faq' => [['q' => '...', 'a' => '...']],
    'related' => ['senales-de-alarma', 'vacunas-en-el-embarazo'],
    'weeks' => [20], 'appGuideSlug' => null, 'guarani' => [],
    'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => null,
    'sources' => [['title' => '...', 'publisher' => '...', 'url' => null, 'accessed' => null]],
    'updated' => 'AAAA-MM-DD', 'image' => null,
],
```

`kind` admite medical, legal, procedural o product. Usá `items => []`, `table => null`
y `steps => []` si no corresponden. En contenido legal completá `validAsOf` como fecha
editorial, sin presentarla como consulta reciente. Solo tras revisión real completá
`reviewedBy` con `['name' => '...', 'credentials' => '...', 'registration' => '...']`.
Creá `salud/nuevo-articulo/index.php`:

```php
<?php
$slug = 'nuevo-articulo';
require __DIR__ . '/../../templates/article.php';
```

El hub agrega la tarjeta automáticamente por cluster y el artículo enlaza su hub.
Poné al menos dos artículos existentes en related, sin enlazarse a sí mismo.

## Cómo agregar un post del blog

Agregá un elemento a la lista de `content/blog.php`, sin clave por slug:

```php
[
    'slug' => 'nuevo-post', 'title' => '...', 'seoTitle' => '...', 'description' => '...',
    'date' => 'AAAA-MM-DD', 'datePublished' => 'AAAA-MM-DD', 'updated' => 'AAAA-MM-DD',
    'tags' => ['...'], 'service' => null, 'example' => false,
    'kind' => 'product', 'reviewedBy' => null, 'image' => null,
    'lead' => '...',
    'sections' => [['h2' => '...', 'body' => ['...']]],
    'faq' => [['q' => '...', 'a' => '...']],
    'related' => ['senales-de-alarma', 'carne-perinatal'],
    'sources' => [['title' => '...', 'publisher' => '...', 'url' => null, 'accessed' => null]],
],
```

Para un post legal agregá `validAsOf`; elegí el kind real. El campo es description,
no metaDescription. Sections admite los mismos bloques del artículo. El comentario
heredado del archivo ubica el cuerpo en la ruta, pero la implementación usa el registro.
Creá `blog/nuevo-post/index.php`:

```php
<?php
$slug = 'nuevo-post';
require __DIR__ . '/../../templates/article.php';
```

El índice y sitemap se actualizan desde los registros. Comprobá el orden por fecha
y agregá un enlace contextual desde un post o guía afín.

## Reglas editoriales y enlaces

Escribí en español paraguayo con voseo; respondé en las primeras 100 palabras.
Guía de extensión: semanas cerca de 900 palabras, artículos 800–1500, posts 500–900.
Títulos hasta 60 caracteres y descripciones de 120–155, sin duplicados. Los comentarios
de cada archivo documentan el contrato. No pongas copy en las rutas ni plantillas.

Los párrafos aceptan `[texto](/ruta/)`, renderizado por rich(). Usá la barra final:
un 301 falla. Los fragmentos como `/instalar/#android` deben existir. Títulos, etiquetas
y celdas de tablas son texto plano. No escribas HTML. Related de artículos, semanas y
posts contiene slugs de artículos; pages.php también admite paths. No dejes planned:
al cerrar una entrega. La plantilla de producto todavía no muestra tarjetas related:
para acceso real usá prosa o navegación. Las CTA se arman con app_link() y su contrato
documentado, sin prometer destinos internos automáticos que no admite.

**Todo contenido médico y legal necesita revisión humana antes del lanzamiento.**
Registrá cada página y comprobación en `docs/facts-to-verify.md`. Fuentes nombradas no
equivalen a fuentes consultadas. No inventes URLs ni fechas de acceso: dejalas null
hasta verificar. No inventes precios, oficinas, teléfonos, dosis ni diagnósticos.
Las señales de alarma llevan a `/salud/senales-de-alarma/`.

## Cómo funcionan los chequeos

```sh
bash ./verify.sh
bash ./verify.sh --final
node --test tests/pregnancy.test.mjs
SKIP_CSS_MINIFY=1 bash ./deploy/make-zip.sh
bash ./verify.sh --root dist/embarazo-AAAA-MM-DD
```

Verify inicia y detiene su servidor; elegí otro puerto con `--port 8744`. Comprueba
PHP, CSS, mercado, rutas, errores PHP, metadatos, fuentes, HTML, JSON-LD, enlaces y
tamaño. --final convierte advertencias de completitud en fallos y exige las 42 semanas
completas. No certifica revisión médica ni todas las metas editoriales de extensión.
No hay workflow de GitHub aprobado.

`tests/links.mjs` siempre hace fallar verify ante destinos internos distintos de 200,
incluso redirecciones, fragmentos de la misma página ausentes, huérfanas o más de tres
clics desde inicio. Compara sitemap e inventario: cada indexable una vez, ningún stub.
No consulta hosts externos, teléfono, correo ni app; no valida fragmentos entre páginas
diferentes. Para correrlo solo, iniciá `php -S 127.0.0.1:8744 router.php` en otra terminal
y ejecutá `node tests/links.mjs http://127.0.0.1:8744`; luego detené ese servidor.

Make-zip crea `dist/embarazo-AAAA-MM-DD.zip` y su carpeta verificable. SKIP_CSS_MINIFY=1
omite regeneración; si existe site.min.css, el paquete la usa como site.css. --root usa
las pruebas del repo contra esa carpeta, que no incluye tests, docs ni scripts de deploy.
Comprobá fuente y paquete antes de subir.

## Cómo desplegar en Hostinger

1. **Respaldá/exportá WordPress primero**, incluidos archivos, base de datos y una copia
   recuperable fuera del docroot. El reemplazo elimina el WordPress actual.
2. En hPanel elegí el hosting de embarazo.com.py → Git → conectar el repo GitHub
   `antonmarklundcom/embarazo`, rama `main`, destino docroot del dominio (normalmente
   public_html; verificá el directorio real). No cambies el hosting de app.
3. Confirmá PHP 8.3, HTTPS, permisos y dominio. Si Git exige destino vacío, vacialo solo
   después de confirmar respaldo y ubicación. Desplegá sin carpeta envolvente.
4. Creá la configuración del servidor desde config.example.php si necesitás fijar el
   origen de producción. No subas config.php, credenciales ni claves al repo.
5. Comprobá inicio, tools, instalación, semana, guía, 404, sitemap, canonicals y bloqueo
   de archivos internos. Si falla, recuperá desde el respaldo.

Alternativa manual: subir el ZIP comprobado por File Manager y extraerlo en docroot.
Es plano y excluye archivos de desarrollo. Elegí Git o ZIP sin superponer versiones.
Los nombres de menús se confirman al operar; este manual no afirma un deploy realizado.

## Cómo cambiar analítica y contacto

**Contacto.** En `content/site.php` completá los campos superiores `whatsapp` (formato internacional,
por ejemplo `+595 981 123 456`), `email` y/o `phone`. No hace falta tocar nada más: `/contacto/` se
activa sola. Sin ningún canal es una página noindex fuera del sitemap; con al menos un canal válido pasa a
ser indexable, entra al sitemap y lista los canales (WhatsApp, correo, teléfono) con el aviso de que no
atiende urgencias. Un número o correo mal formado se ignora, nunca se inventa. Después corré
`bash ./verify.sh --final`. No uses ejemplos como contactos reales.

**Analítica.** Por defecto no hay analítica ni pedidos a terceros (`'analytics' => null`). Para activar
Cloudflare Web Analytics (sin cookies, sin banner) poné en `content/site.php`:
`'analytics' => ['cloudflare' => '<token de 32 caracteres del panel de Cloudflare>']`. `partials/analytics.php`
agrega un solo script solo si el token tiene el formato correcto; cualquier otro valor no renderiza nada.
No publiques tokens en documentación o logs. Google Analytics, Meta, formularios, captura de correo y
pop-ups quedan fuera.

## Fuentes e imágenes

**Fuentes.** Nunito Sans (OFL) ya está instalada: seis WOFF2 en `assets/fonts/` y `assets/css/fonts.css`; `partials/head.php` las carga
solo si existe `nunito-sans-400-latin.woff2`. Falta el subset vietnamese (ẽ y g̃ del guaraní): ver `assets/fonts/README.md`.

**Imágenes.** Las 59 imágenes (home, 6 hubs, tarjeta OG, 9 artículos, 42 semanas) están en `assets/img/` como AVIF + WebP y se muestran con
`picture()` (`lib/helpers.php`) a partir de un registro `image` => [slug, alt, w, h, widths] en `content/`. Si falta el archivo, la página
muestra su diseño sin imagen (no queda ningún recuadro roto). Para reemplazar una imagen: generá la nueva (Higgsfield, modelo Sunburst; ver
`docs/imagery-brief.md` y `docs/imagery-manifest.json`), convertila con `npx --yes github:antonmarklundcom/webimg convert <archivo> --name <mismo-slug> --alt "..." --out assets/img`
usando el MISMO slug, y borrá `assets/img/manifest.json` (lo genera la herramienta y no debe subirse). Los PNG originales viven en `deploy/imagery-src/` (fuera de git).

Anton tiene una lista priorizada en `docs/human-todo.md`, problemas en KNOWN-ISSUES.md,
decisiones abiertas en `docs/decisions-needed.md` y evidencia por fase en `docs/log/`.
