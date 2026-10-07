<?php
/** Visible UI copy in es-PY voseo, grouped by component; clusters maps ids to labels. */
declare(strict_types=1);
return [
    'foundation' => [
        'faq' => 'Preguntas frecuentes', 'sources' => 'Fuentes', 'updated' => 'Actualizado el',
        'valid' => 'Vigente a', 'reviewer' => 'Revisado por',
        'pending' => 'Pendiente de revisión profesional.',
        'medicalReviewed' => 'Información general, no es un diagnóstico ni reemplaza tu consulta.',
        'share' => 'Compartí por WhatsApp', 'shareHint' => 'Para conversar en familia',
        // Growth plan item 6: the WhatsApp message on a week page; {n} is the week.
        'shareWeek' => 'Estoy en la semana {n} de mi embarazo. Mirá qué pasa esta semana:',
        // Alt text of the shared social card (assets/img/og-default.jpg), read by screen readers on X and Facebook.
        'ogImageAlt' => 'Mi Bebé: la app de embarazo hecha para Paraguay.',
        // Printed next to the trimester on a week page; {m} is week_month().
        'month' => 'mes {m} aproximadamente',
        'dismiss' => 'Ocultá la barra de la app', 'week' => 'Semana', 'weeks' => 'Semana a semana',
        'previous' => '← Anterior', 'next' => 'Siguiente →', 'weekNav' => 'Navegación entre semanas',
        'bebe' => 'Tu bebé esta semana', 'vos' => 'Vos esta semana', 'paraguay' => 'En Paraguay esta semana',
        'control' => 'Control y estudios', 'vaccine' => 'Vacunas', 'rightsMilestone' => 'Tus derechos', 'season' => 'Esta temporada',
        'completed' => 'La semana {n} es la que transcurre: {completed} semanas completas más 0 a 6 días.',
        'size' => 'Del tamaño de {size}', 'measure' => '{length} cm · {weight} g, aproximadamente',
        'alarm' => 'Consultá las señales de alarma', 'related' => 'Seguí leyendo', 'steps' => 'Paso a paso',
        // Heading of the week grid on an article (templates/article.php), built from its weeks[].
        'articleWeeks' => 'Las semanas de este tema',
        'handoff' => 'Qué hace la app con esto', 'primaryTitle' => 'Llevá Mi Bebé con vos',
        'weekTitle' => 'Seguí tu semana', 'weekText' => 'Abrí el seguimiento semanal de Mi Bebé.',
        'toolTitle' => 'Continuá en la app', 'stickyText' => 'Hecha para Paraguay',
        'features' => 'Conocé la app', 'phone' => 'Vista ilustrativa del seguimiento semanal de Mi Bebé',
        'phoneChips' => ['Pataditas', 'Síntomas', 'Carné', 'Comer'],
        'phoneTabs' => ['Semana', 'Herramientas', 'Familia'],
        'brandMark' => 'MB', 'blog' => 'Blog', 'timeline' => 'Tu recorrido',
        'guarani' => 'También en guaraní', 'legalLinks' => 'Mi Bebé',
    ],
    // Growth plan item 3 — /mes/ and /mes/<n>/ (templates/month.php).
    'month' => [
        'hub' => 'Meses de embarazo', 'changes' => 'Cambios clave de este mes',
        'weeks' => 'Las semanas de este mes', 'range' => 'Semanas {a} a {b}',
        'partOf' => 'Este mes es parte del', 'calc' => 'Calculá tu semana exacta',
        'nav' => 'Navegación entre meses', 'label' => 'Mes {m}',
        'colMonth' => 'Mes', 'colWeeks' => 'Semanas', 'colTrimester' => 'Trimestre',
        'tableCaption' => 'Meses y semanas de embarazo',
    ],
    // Growth plan item 1 — templates/food.php.
    'food' => [
        'title' => '¿Puedo comer {food} embarazada?', 'filter' => 'Filtrar por respuesta',
        'synonyms' => 'También se busca como:', 'all' => 'Ver todos los alimentos',
        'ctaTitle' => 'Buscalo en la app', 'ctaText' => 'En Mi Bebé tenés esta lista a mano, también sin conexión.',
    ],
    // Growth plan item 2 — templates/names.php.
    'names' => [
        'filter' => 'Ir a', 'others' => 'Más nombres', 'count' => '{n} nombres',
        'ctaTitle' => 'Guardá tus favoritos en la app', 'ctaText' => 'En Mi Bebé podés buscar nombres por su significado y guardar los que te gustan.',
        'back' => 'Ver {origin}',
    ],
    'nav' => [
    'home' => 'Inicio',
    'skip' => 'Saltá al contenido',
    'menu' => 'Menú',
    'close' => 'Cerrá el menú',
    'guides' => 'Guías',
    'contact' => 'Contacto',
    'privacy' => 'Privacidad',
    'breadcrumb' => 'Ruta de navegación'
],
    'clusters' => [
    'salud' => 'Salud',
    'alimentacion' => 'Alimentación',
    'tramites' => 'Trámites',
    'derechos' => 'Derechos',
    'parto' => 'Parto',
    'planear' => 'Planear'
],
    'cta' => [
    'open' => 'Abrí Mi Bebé',
    'home' => 'Volvé al inicio',
    'whatsapp_long' => 'Escribinos por WhatsApp'
],
    'placeholder' => [
    'notice' => 'Estamos preparando esta página.',
    'action' => 'Mientras tanto, abrí la app desde tu teléfono.'
],
    'error404' => [
    'title' => 'No encontramos esta página',
    'lead' => 'Puede que el enlace haya cambiado. Volvé al inicio para seguir.'
],
    'footer' => [
    'blurb' => 'Mi Bebé, la app de embarazo hecha para Paraguay.',
    'rights' => 'Todos los derechos reservados.'
],
    // Shown on /contacto/ only once a channel exists in content/site.php (see contact_channels()).
    'contactPage' => [
    'heading' => 'Escribinos',
    'intro' => 'Tocá el número y se abre el chat con un mensaje ya empezado. Respondemos de lunes a viernes, en horario de Paraguay.',
    'whatsapp' => 'WhatsApp',
    'email' => 'Correo',
    'phone' => 'Teléfono',
    // Prefills the WhatsApp chat so the person does not have to open with a blank screen.
    'waPrefill' => 'Hola, tengo una consulta sobre la app Mi Bebé.',
    'note' => 'Esta vía no atiende urgencias de salud: si tenés una señal de alarma, llamá al [141 SEME](tel:141) o al [911](tel:911).'
]
];

