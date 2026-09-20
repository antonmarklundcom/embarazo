<?php
/**
 * Trimesters keyed 1..3: title,seoTitle,metaDescription,lead:string;
 * timeline:[{week:int,what:string}] (editorial prompts, not a clinical schedule);
 * weeks:int[] DERIVED via week_trimester(), never maintain another range table;
 * faq:[{q,a}]. Additive sources:[{title,publisher,url,accessed}], reviewedBy:null,
 * updated:ISO-date. Text is plain; escape with e(). Load after lib/bootstrap.php.
 */
declare(strict_types=1);

$_trimestres = [
    1 => [
        'title' => 'Primer trimestre de embarazo', 'seoTitle' => 'Primer trimestre de embarazo: semanas 1 a 13',
        'metaDescription' => 'Primer trimestre de embarazo en Paraguay: recorré las semanas 1 a 13, ordená tus preguntas y consultá el seguimiento indicado para tu situación.',
        'lead' => 'Las semanas 1 a 13 forman el primer trimestre en Mi Bebé. Podés recorrerlas para conocer la referencia de cada etapa y preparar tus preguntas.',
        'timeline' => [['week' => 4, 'what' => 'Para organizar el primer control, consultá el dato vigente sobre turnos y requisitos; esta semana es una referencia editorial, no una fecha indicada.']],
        'faq' => [['q' => '¿Cómo se cuentan las semanas?', 'a' => 'Mi Bebé muestra la semana que transcurre: las semanas completas más una. El seguimiento toma la última menstruación como referencia de cálculo.']],
    ],
    2 => [
        'title' => 'Segundo trimestre de embarazo', 'seoTitle' => 'Segundo trimestre de embarazo: semanas 14 a 27',
        'metaDescription' => 'Segundo trimestre de embarazo en Paraguay: explorá las semanas 14 a 27 y prepará tus dudas sobre estudios, controles y permisos en el trabajo.',
        'lead' => 'Las semanas 14 a 27 forman el segundo trimestre. Revisá la semana que transcurre y separá tus preguntas de salud de las gestiones para el control.',
        'timeline' => [['week' => 20, 'what' => 'Consultá el dato vigente sobre ecografías, vacunas y control prenatal para tu caso; no es un calendario de estudios obligatorio.']],
        'faq' => [['q' => '¿Todos los estudios corresponden a la misma semana?', 'a' => 'Esta línea de tiempo orienta preguntas. Consultá la indicación de tu equipo y los requisitos vigentes del servicio.']],
    ],
    3 => [
        'title' => 'Tercer trimestre de embarazo', 'seoTitle' => 'Tercer trimestre de embarazo: semanas 28 a 42',
        'metaDescription' => 'Tercer trimestre de embarazo en Paraguay: recorré las semanas 28 a 42 y ordená preguntas sobre el nacimiento, tu seguimiento y la licencia laboral.',
        'lead' => 'Desde la semana 28, Mi Bebé agrupa el seguimiento en el tercer trimestre. La fecha probable de parto orienta el cálculo; no promete el día del nacimiento.',
        'timeline' => [['week' => 38, 'what' => 'La referencia documentada de IPS sitúa el reposo desde la semana 38. Consultá el dato vigente y la fecha que corresponde a tu trámite.']],
        'faq' => [['q' => '¿La fecha probable de parto es exacta?', 'a' => 'Es una estimación de cálculo. Conversá sobre tu seguimiento y las fechas de tus trámites con quienes te atienden.']],
    ],
];
foreach ($_trimestres as $_trimestre => &$_record) {
    $_record['weeks'] = array_values(array_filter(range(1, 42), static fn(int $_n): bool => week_trimester($_n) === $_trimestre));
    $_record['sources'] = [['title' => 'Mi Bebé: seguimiento semanal y derechos de maternidad', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null]];
    $_record['reviewedBy'] = null;
    $_record['updated'] = '2026-09-20';
}
unset($_trimestre, $_record);
return $_trimestres;
