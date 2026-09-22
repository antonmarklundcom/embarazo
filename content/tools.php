<?php
/**
 * The two tool pages, keyed by slug — same shape discipline as
 * content/pages.php: fill every key, never rename or remove one.
 *
 *   path             string   URL, trailing slash
 *   title            string   the tool's concept, used as the title fallback
 *   navLabel         string   short label for the hub, the nav and the footer
 *   seoTitle         string   <title> without the site suffix, <= 48 chars
 *   metaDescription  string   120–155 chars, unique across the whole site
 *   hero             array    eyebrow, h1, lead
 *   intro            string[] 200–300 words of copy, readable without JS
 *   faq              array    [['q' => ..., 'a' => ...], ...] → FAQPage JSON-LD
 *   related          string[] related site paths
 *   relatedArticles  string[] article slugs shown as reading cards (optional)
 *   ctaWhatsapp      string   legacy key, kept empty (no lead capture)
 *   formNeed         string   legacy key, kept empty (no forms)
 *   analyticsTool    string   legacy key, kept empty (no event tracking)
 *   example          bool     seed record only — see content/pages.php
 *   handoff          array    ['medium' => 'tool']; app_link() uses record slug
 *   math             string   'pregnancy'; arithmetic shared by both tools
 *   kind             string   'medical'; selects the visible disclaimer
 *   reviewedBy       null|{name,credentials,registration}; null until signed review
 *   sources          [{title:string,publisher:string,url:?string,accessed:?ISO-date}]
 *   updated          string   ISO editorial update date, not source access date
 *   ui               array    raw copy, escaped in island/template or textContent in JS:
 *     calculate,noScript,handoffTitle,handoffText,handoffButton,weeksLink,dateError:string
 *     rows            map<string,string> result element suffix => label
 *     introHeadings   map<int,string> intro paragraph index => preceding H2
 *     pregnancy only: modeLabel,weekLabel,weekLink (with {n}),sizeUnavailable,
 *       dueReached,day,days,futureError,oldFumError,futureFppError,oldFppError:string;
 *       modes:{fum:{tab,label,hint},fpp:{tab,label,hint}}; trimesters:string[3]
 *     ovulation only: dateLabel,dateHint,cycleLabel,cycleHint,cycleError,notice:string
 *
 * Three-line routes select templates/tool.php, which loads assets/js/tools/island.php
 * to build escaped $toolCalcHtml. pregnancy.js owns arithmetic; slug.js enhances the UI.
 * tools-shared.js supplies date formatting through window.Market using its locale.
 *
 * Mi Bebé routes are /calculadora/ and /calendario-de-ovulacion/.
 * Legacy ctaWhatsapp/formNeed/analyticsTool keys stay empty strings; no leads,
 * forms or analytics events are used. related holds site paths. No lead-values
 * record is required. Indexability inherits the two matching content/pages.php entries.
 */

declare(strict_types=1);

return [
    'calculadora' => [
        'path' => '/calculadora/',
        'title' => 'Calculadora de embarazo',
        'navLabel' => 'Calculadora de embarazo',
        'seoTitle' => 'Calculadora de embarazo: semanas y FPP',
        'metaDescription' => 'Calculá tus semanas de embarazo y la fecha probable de parto con tu FUM o FPP. Entendé las semanas completas sin enviar tus fechas a este sitio.',
        'hero' => [
            'eyebrow' => 'Tu embarazo, en fechas',
            'h1' => 'Calculadora de embarazo',
            'lead' => 'Para saber de cuántas semanas estás, contá los días desde el primer día de tu última menstruación y dividilos entre siete. Ingresá tu FUM o la fecha probable de parto (FPP): vas a ver las semanas completas, los días y la semana en curso. El cálculo se hace en tu navegador; no se guarda ni se envía nada.',
        ],
        'intro' => [
            'Cómo se calcula: la cuenta suma 280 días —40 semanas— al primer día de tu última menstruación. Es la estimación de la fecha probable de parto basada en la regla de Naegele. Si ingresás una FPP, se restan esos mismos 280 días para obtener una FUM equivalente; no significa que hayas menstruado en esa fecha.',
            'La cuenta supone un ciclo de 28 días. Si tus ciclos cambian mucho o no recordás cuándo empezó el sangrado, la estimación puede alejarse de tu edad gestacional. En el control prenatal, el equipo compara tu historia con la ecografía, especialmente la temprana, y define la fecha que conviene usar para el seguimiento.',
            'Semanas completas y semana en curso son dos maneras de ubicarte. A los 202 días desde la FUM, completaste 28 semanas y 6 días: estás transitando la semana 29. Anotá las semanas completas más los días al hablar de tus estudios; para leer sobre esta etapa, entrá a [embarazo semana a semana](/semana/).',
            'La comparación de tamaño es orientativa: representa esa semana y no una medición de tu bebé. Tampoco la FPP predice el día exacto del nacimiento. Si todavía estás buscando un embarazo, el [calendario de ovulación](/calendario-de-ovulacion/) hace otra cuenta, basada en la duración de tu ciclo.',
            'Cambiar la fecha borra el resultado anterior. Solo si tocás el botón del resultado, el enlace lleva tu FPP y tu semana a Mi Bebé para completar el inicio. Podés leer [cómo se manejan los datos](/privacidad/) antes de continuar.',
        ],
        'faq' => [
            [
                'q' => '¿Qué fecha pongo si no recuerdo mi última menstruación?',
                'a' => 'Usá la pestaña Mi FPP si el equipo de salud ya te dio una fecha probable de parto. Si solo recordás una FUM aproximada, el resultado también será aproximado: llevá esa duda al control prenatal.',
            ],
            [
                'q' => '¿Por qué cuenta desde la menstruación y no desde la concepción?',
                'a' => 'La edad gestacional se cuenta por convención desde el inicio de la última menstruación. La concepción suele ocurrir después y su fecha exacta muchas veces no se conoce; por eso las dos cuentas no coinciden.',
            ],
            [
                'q' => '¿La fecha probable de parto asegura cuándo va a nacer?',
                'a' => 'No. Sirve como referencia para organizar el seguimiento. El nacimiento puede ocurrir antes o después; usá la fecha acordada con tu obstetra o partera, aunque difiera de esta cuenta.',
            ],
            [
                'q' => '¿Sirve después de una fertilización in vitro?',
                'a' => 'En un embarazo por tratamiento, usá la FPP que te indicó el equipo que conoce las fechas del procedimiento. No reemplaces esa datación por una menstruación aproximada. Desde el resultado podés abrir la página de tu semana.',
            ],
        ],
        'relatedArticles' => ['control-prenatal-ips-vs-privado', 'carne-perinatal', 'senales-de-alarma'],
        'related' => [
            '/semana/',
            '/calendario-de-ovulacion/',
            '/privacidad/',
        ],
        'ctaWhatsapp' => '',
        'formNeed' => '',
        'analyticsTool' => '',
        'example' => false,
        'handoff' => [
            'medium' => 'tool',
        ],
        'math' => 'pregnancy',
        'kind' => 'medical',
        'reviewedBy' => null,
        'updated' => '2026-09-20',
        'sources' => [
            ['title' => 'WHO recommendations on antenatal care for a positive pregnancy experience', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Guía vigente de atención prenatal del MSPBS', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
        ],
        'ui' => [
            'modeLabel' => 'Con qué dato querés calcular',
            'modes' => [
                'fum' => ['tab' => 'Mi FUM', 'label' => '¿Cuándo empezó tu última menstruación?', 'hint' => 'El primer día del sangrado, no el último. Si no te acordás con exactitud, poné el día más probable y confirmá la fecha en tu control.'],
                'fpp' => ['tab' => 'Mi FPP', 'label' => '¿Qué fecha probable de parto te dieron?', 'hint' => 'La que figura en tu carné perinatal o en el informe de la ecografía. Con ese dato calculamos hacia atrás.'],
            ],
            'calculate' => 'Calcular',
            'noScript' => 'Para obtener un resultado automático, activá JavaScript. También podés seguir la explicación de abajo: sumá 280 días a tu FUM para estimar la FPP.',
            'weekLabel' => 'estás en la semana',
            'rows' => ['completed' => 'Gestación', 'fpp' => 'Fecha probable de parto', 'tri' => 'Trimestre', 'size' => 'Tamaño orientativo del bebé', 'left' => 'Faltan'],
            'handoffTitle' => 'Continuá con tu fecha en Mi Bebé',
            'handoffText' => 'Al tocar el botón, el enlace lleva tu FPP y tu semana a la app para completar el inicio. Podés seguir sin cuenta.',
            'handoffButton' => 'Abrir Mi Bebé con mi fecha',
            'weeksLink' => 'Ver las 42 semanas de embarazo',
            'weekLink' => 'Leer la página de la semana {n}',
            'trimesters' => ['Primer trimestre', 'Segundo trimestre', 'Tercer trimestre'],
            'sizeUnavailable' => 'Consultá la página de tu semana',
            'dueReached' => 'ya llegaste a la FPP', 'day' => 'día', 'days' => 'días',
            'dateError' => 'Elegí una fecha para poder calcular.',
            'futureError' => 'Esa fecha es futura. La FUM no puede ser posterior a hoy.',
            'oldFumError' => 'Esa fecha da más de 42 semanas. Revisá el año, o usá la pestaña Mi FPP.',
            'futureFppError' => 'Esa FPP está demasiado lejos: daría un embarazo que todavía no empezó.',
            'oldFppError' => 'Esa FPP da más de 42 semanas. Revisá la fecha.',
            'introHeadings' => [0 => 'Cómo se calcula', 2 => 'Qué significa semanas completas', 4 => 'Lo que pasa con tu fecha'],
        ],
    ],
    'calendario-de-ovulacion' => [
        'path' => '/calendario-de-ovulacion/',
        'title' => 'Calendario de ovulación',
        'navLabel' => 'Calendario de ovulación',
        'seoTitle' => 'Calendario de ovulación y días fértiles',
        'metaDescription' => 'Estimá tu ventana fértil con la última menstruación y la duración del ciclo. Conocé cómo se hace la cuenta y sus límites: no es un anticonceptivo.',
        'hero' => [
            'eyebrow' => 'Cuando estás buscando',
            'h1' => 'Calendario de ovulación',
            'lead' => 'Este calendario estima la ovulación restando 14 a la duración de tu ciclo y muestra un margen de cinco días antes y después. Elegí el primer día de tu última menstruación y cuántos días suele durar tu ciclo. No es un método anticonceptivo: las fechas no confirman cuándo ovulás ni señalan días seguros.',
        ],
        'intro' => [
            'Cómo se calcula: el día estimado de ovulación es la duración del ciclo menos 14. En un ciclo de 28 días, sería el día 14; en uno de 30, el día 16. El primer día de sangrado es el día 1, así que el día 14 cae trece días después de la fecha que ingresaste.',
            'La ventana que muestra esta herramienta abarca cinco días antes y cinco después de esa fecha estimada. Es un margen de calendario, no una confirmación de fertilidad durante todos esos días. La ovulación puede adelantarse o atrasarse incluso cuando tus ciclos suelen parecer regulares; quedar embarazada fuera del intervalo mostrado es posible.',
            'Para contar la duración del ciclo, medí desde el primer día de una menstruación hasta el primer día de la siguiente. Por ejemplo, del 1 al 29 del mismo mes hay 28 días. No ingreses solamente los días que sangrás. Revisar varias fechas anteriores ayuda a reconocer cuánto varía tu patrón.',
            'Si tus ciclos son irregulares, estás amamantando o acabás de dejar un anticonceptivo hormonal, esta cuenta puede orientar poco. Conversá con tu equipo de salud sobre tu situación y sobre cómo reconocer la ovulación. Para evitar un embarazo, necesitás asesoramiento sobre anticoncepción; no uses este resultado para elegir días sin protección.',
            'Las fechas se procesan en este navegador y no se guardan ni se envían. El botón del resultado abre Mi Bebé en modo planeando, sin llevar tu fecha menstrual. Si ya tenés un embarazo confirmado, usá la [calculadora de embarazo](/calculadora/) y recorré la guía [semana a semana](/semana/).',
        ],
        'faq' => [
            [
                'q' => '¿Puedo usar este calendario para evitar un embarazo?',
                'a' => 'No. La ovulación no se puede predecir con certeza a partir de un promedio. Tanto dentro como fuera de la ventana mostrada puede haber posibilidad de embarazo; consultá sobre un método anticonceptivo adecuado para vos.',
            ],
            [
                'q' => '¿Qué hago si cada ciclo dura una cantidad distinta de días?',
                'a' => 'Un solo número no representa bien esa variación. Anotá el inicio de tus menstruaciones y comentá el patrón en una consulta. Cambiar la duración acá muestra cómo cambia la estimación, pero no identifica el día real de ovulación.',
            ],
            [
                'q' => '¿Por qué no acepta cualquier duración de ciclo?',
                'a' => 'Esta herramienta está acotada a ciclos de 21 a 35 días para no extender una estimación simple a situaciones que necesitan otra valoración. Ese límite de la calculadora no es un diagnóstico sobre tu ciclo.',
            ],
            [
                'q' => '¿La ventana fértil confirma que puedo quedar embarazada?',
                'a' => 'No confirma ovulación, fertilidad ni embarazo. Si tenés un atraso, un test de embarazo y la orientación de tu equipo de salud son más útiles que mover fechas en el calendario. La cuenta tampoco evalúa las causas de una dificultad para concebir.',
            ],
        ],
        'relatedArticles' => ['dias-fertiles', 'acido-folico', 'checklist-preconcepcion'],
        'related' => [
            '/calculadora/',
            '/semana/',
        ],
        'ctaWhatsapp' => '',
        'formNeed' => '',
        'analyticsTool' => '',
        'example' => false,
        'handoff' => [
            'medium' => 'tool',
        ],
        'math' => 'pregnancy',
        'kind' => 'medical',
        'reviewedBy' => null,
        'updated' => '2026-09-20',
        'sources' => [
            ['title' => 'Orientaciones sobre planificación familiar de la OMS', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Guía vigente de salud sexual y reproductiva del MSPBS', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
        ],
        'ui' => [
            'dateLabel' => '¿Cuándo empezó tu última menstruación?',
            'dateHint' => 'Elegí el primer día del sangrado del ciclo que querés estimar.',
            'cycleLabel' => '¿Cuántos días suele durar tu ciclo?',
            'cycleHint' => 'Desde el inicio de una menstruación hasta el inicio de la siguiente. Esta herramienta acepta entre 21 y 35 días.',
            'calculate' => 'Estimar mis fechas',
            'noScript' => 'La estimación automática necesita JavaScript. Abajo podés leer cómo hacer la cuenta con un calendario: restá 14 a la duración del ciclo.',
            'notice' => 'No es un método anticonceptivo. No uses estas fechas para elegir días sin protección.',
            'rows' => ['ovulation' => 'Ovulación estimada', 'start' => 'Inicio del margen estimado', 'end' => 'Fin del margen estimado'],
            'handoffTitle' => 'Seguí planeando en Mi Bebé',
            'handoffText' => 'Abrí la app en modo planeando para usar su calendario menstrual y su checklist preconcepcional. Este enlace no incluye tu fecha menstrual.',
            'handoffButton' => 'Abrir Mi Bebé en modo planeando',
            'weeksLink' => 'Conocé el embarazo semana a semana',
            'dateError' => 'Elegí una fecha válida de inicio de menstruación que no sea posterior a hoy.',
            'cycleError' => 'Ingresá una duración de ciclo en días enteros, entre 21 y 35.',
            'introHeadings' => [0 => 'Cómo se calcula', 2 => 'Cómo contar tu ciclo', 4 => 'Tu calendario y tus datos'],
        ],
    ],
];
