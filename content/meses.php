<?php
/**
 * Months of pregnancy keyed 1..9 (growth plan item 3, /mes/<n>/).
 * title,seoTitle(<=60),metaDescription(120..155, unique),lead:string (answers "N meses de
 * embarazo" in its first 100 words; markdown links allowed, render with rich());
 * highlights:int[] 3..5 week numbers whose `milestone` (content/semanas.php) is shown as the
 * month's key changes, never retyped here; faq:[{q,a}]; sources:[{title,publisher,url,accessed}].
 * DERIVED at load, never maintained by hand: weeks:int[] via week_month(), trimester:int via
 * week_trimester() of the first week, reviewedBy:null, updated:ISO-date.
 * Text is plain; escape with e(). Load after lib/bootstrap.php.
 */
declare(strict_types=1);

$_mesesSources = [
    ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
        'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
    ['title' => 'Orientaciones vigentes sobre control prenatal y vacunación durante el embarazo',
        'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
];

$_meses = [
1 => ['title' => 'Primer mes de embarazo: semanas 1 a 4',
'seoTitle' => '1 mes de embarazo: semanas 1 a 4',
'metaDescription' => 'El primer mes de embarazo va de la semana 1 a la 4: el conteo empieza con tu última menstruación, la implantación y el primer test positivo.',
'lead' => 'El primer mes de embarazo abarca, aproximadamente, las semanas 1 a 4, contadas desde el primer día de tu última menstruación. En las semanas 1 y 2 todavía no hay embrión: el conteo empieza antes de la concepción. Si hubo fecundación, en la semana 3 se forma un grupito de células que se implanta en el útero hacia la semana 4, cuando muchas notan el atraso y un test puede dar positivo. Es el momento de conversar sobre ácido fólico y pedir tu primer control.',
'highlights' => [2, 3, 4],
'faq' => [
    ['q' => '¿Cuántas semanas tiene un mes de embarazo?', 'a' => 'Entre cuatro y cinco. El embarazo se cuenta en semanas desde la última menstruación; los meses son una forma aproximada de agruparlas. Para tus controles y estudios, usá siempre las semanas y días de tu carné perinatal.'],
    ['q' => '¿Un test puede dar positivo en el primer mes?', 'a' => 'Un test de orina suele detectar el embarazo a partir del atraso menstrual, hacia el final de la semana 4. Si da negativo y el atraso sigue, repetilo unos días después o consultá. Mirá [cuándo hacer el test de embarazo](/planear/test-de-embarazo-cuando/).'],
]],
2 => ['title' => 'Segundo mes de embarazo: semanas 5 a 8',
'seoTitle' => '2 meses de embarazo: semanas 5 a 8',
'metaDescription' => 'El segundo mes de embarazo va de la semana 5 a la 8: se forman el tubo neural y el corazón, y aparecen náuseas y sueño. Qué consultar en el control.',
'lead' => 'El segundo mes de embarazo va, aproximadamente, de la semana 5 a la 8, dentro del primer trimestre. Es una etapa de formación rápida: empieza el tubo neural, que dará origen al cerebro y la médula, y el corazón comienza a latir. Hacia la semana 8 ya se esbozan párpados, nariz y dedos. Podés sentir náuseas, sueño, sensibilidad en los pechos o ganas frecuentes de orinar, aunque tener pocos síntomas también es posible. Si todavía no tuviste tu primer control, pedilo.',
'highlights' => [5, 6, 7, 8],
'faq' => [
    ['q' => '¿Es normal tener náuseas en el segundo mes?', 'a' => 'Sí, son frecuentes en esta etapa, y no tenerlas también es posible. Probá porciones pequeñas y sorbos frecuentes de agua. Si vomitás todo, orinás poco o te sentís muy débil, buscá atención pronta.'],
    ['q' => '¿Ya se puede ver el corazón en una ecografía?', 'a' => 'El corazón empieza a latir en estas semanas, pero que se vea en una ecografía depende de la edad gestacional real y del tipo de estudio. Si se hace muy temprano puede no mostrarse todavía; el equipo interpreta la imagen junto con tus fechas.'],
]],
3 => ['title' => 'Tercer mes de embarazo: semanas 9 a 13',
'seoTitle' => '3 meses de embarazo: semanas 9 a 13',
'metaDescription' => 'El tercer mes de embarazo va de la semana 9 a la 13 y cierra el primer trimestre: el embrión pasa a ser feto y llega la primera ecografía.',
'lead' => 'El tercer mes de embarazo va, aproximadamente, de la semana 9 a la 13 y cierra el primer trimestre. En la semana 9 el embrión pasa a llamarse feto: tiene esbozados los órganos principales, y en las semanas siguientes se forman las uñas, aparecen reflejos y las huellas digitales. Las náuseas suelen empezar a ceder hacia el final del trimestre, aunque no en todas. Alrededor de las 11 a 14 semanas completas se ofrecen algunos estudios, como la ecografía del primer trimestre.',
'highlights' => [9, 10, 12, 13],
'faq' => [
    ['q' => '¿Cuándo termina el primer trimestre?', 'a' => 'En este recorrido, el primer trimestre agrupa las semanas 1 a 13. Para una indicación clínica importa la edad gestacional en semanas completas y días, que figura en tu carné.'],
    ['q' => '¿Qué estudios se hacen en el tercer mes?', 'a' => 'La ecografía del primer trimestre permite valorar la edad gestacional y el número de bebés. Algunos estudios de tamizaje se ofrecen alrededor de las 11 a 14 semanas completas, según el servicio. Un resultado de tamizaje estima probabilidades, no confirma un diagnóstico.'],
]],
4 => ['title' => 'Cuarto mes de embarazo: semanas 14 a 17',
'seoTitle' => '4 meses de embarazo: semanas 14 a 17',
'metaDescription' => 'El cuarto mes de embarazo va de la semana 14 a la 17 y abre el segundo trimestre: menos náuseas, la panza empieza a notarse y el bebé oye.',
'lead' => 'El cuarto mes de embarazo va, aproximadamente, de la semana 14 a la 17 y abre el segundo trimestre. Para muchas es una etapa más llevadera: las náuseas suelen disminuir y vuelve algo de energía. El bebé hace muecas, percibe la luz y empieza a oír sonidos de tu cuerpo; su esqueleto, antes blando, se va volviendo hueso. La panza puede empezar a notarse. Algunas mujeres intuyen los primeros movimientos hacia el final de este mes, aunque en el primer embarazo suele llevar más tiempo.',
'highlights' => [14, 15, 16, 17],
'faq' => [
    ['q' => '¿Con 4 meses ya se nota la panza?', 'a' => 'Depende de tu contextura, de embarazos anteriores y de la posición del útero. El tamaño de la panza no permite saber por sí solo cómo crece el bebé: eso se valora en los controles.'],
    ['q' => '¿Cuándo voy a sentir al bebé?', 'a' => 'Las pataditas suelen reconocerse entre las 16 y 24 semanas completas. Al principio pueden parecer burbujas. Si a las 24 semanas no sentiste movimientos, avisá a tu equipo.'],
]],
5 => ['title' => 'Quinto mes de embarazo: semanas 18 a 22',
'seoTitle' => '5 meses de embarazo: semanas 18 a 22',
'metaDescription' => 'El quinto mes de embarazo va de la semana 18 a la 22: llegás a la mitad, se sienten las pataditas y se hace la ecografía morfológica.',
'lead' => 'El quinto mes de embarazo va, aproximadamente, de la semana 18 a la 22, en el segundo trimestre. En la semana 20 llegás a la mitad del camino. El bebé se mueve bastante, oye mejor y sus rasgos se parecen cada vez más a los que tendrá al nacer. Muchas mujeres empiezan a reconocer las pataditas en este tramo. También suele hacerse la ecografía morfológica, que revisa la anatomía del bebé, la placenta y el líquido amniótico.',
'highlights' => [18, 20, 21, 22],
'faq' => [
    ['q' => '¿5 meses de embarazo son 20 semanas?', 'a' => 'Aproximadamente: el quinto mes va de la semana 18 a la 22, y la semana 20 es la mitad del recorrido. Como los meses son un agrupamiento aproximado, para tus estudios usá las semanas y días de tu carné.'],
    ['q' => '¿Qué revisa la ecografía morfológica?', 'a' => 'Revisa las estructuras del bebé, la placenta y el líquido amniótico, y suele hacerse entre las 18 y 24 semanas completas. A veces la posición del bebé obliga a completarla otro día. Ninguna ecografía detecta todas las alteraciones.'],
]],
6 => ['title' => 'Sexto mes de embarazo: semanas 23 a 27',
'seoTitle' => '6 meses de embarazo: semanas 23 a 27',
'metaDescription' => 'El sexto mes de embarazo va de la semana 23 a la 27 y cierra el segundo trimestre: el bebé te escucha, abre los ojos y llega el estudio de glucosa.',
'lead' => 'El sexto mes de embarazo va, aproximadamente, de la semana 23 a la 27 y cierra el segundo trimestre. El bebé escucha tu voz y los ruidos de afuera, sus pulmones desarrollan las ramitas por donde después entrará el aire y abre los ojos por primera vez. Los movimientos se vuelven más claros; a veces se siente hipo. Entre las 24 y 28 semanas completas suele plantearse el estudio de glucosa para detectar diabetes gestacional, que puede no dar síntomas.',
'highlights' => [23, 24, 26, 27],
'faq' => [
    ['q' => '¿Para qué es el estudio de glucosa?', 'a' => 'Busca diabetes gestacional, una alteración que puede no dar síntomas. Suele plantearse entre las 24 y 28 semanas completas, o antes si hay motivos. Seguí la preparación que te indique el servicio. Más en [diabetes gestacional](/salud/diabetes-gestacional/).'],
    ['q' => '¿Es normal sentir hipo del bebé?', 'a' => 'Sí. Muchas mujeres sienten saltitos rítmicos en esta etapa y son frecuentes. Si en cambio notás que el bebé se mueve claramente menos que de costumbre, consultá ese mismo día.'],
]],
7 => ['title' => 'Séptimo mes de embarazo: semanas 28 a 31',
'seoTitle' => '7 meses de embarazo: semanas 28 a 31',
'metaDescription' => 'El séptimo mes de embarazo va de la semana 28 a la 31 y abre el tercer trimestre: pataditas más firmes, acidez y cómo seguir los movimientos.',
'lead' => 'El séptimo mes de embarazo va, aproximadamente, de la semana 28 a la 31 y abre el tercer trimestre. El bebé parpadea, su cerebro forma pliegues y conexiones, y gana grasa bajo la piel. Sus pataditas son más firmes y ocupa cada vez más espacio. Podés notar acidez, falta de aire al subir escaleras o dificultad para dormir. Conocer el patrón habitual de movimientos de tu bebé te ayuda a notar un cambio a tiempo.',
'highlights' => [28, 29, 30, 31],
'faq' => [
    ['q' => '¿Cuánto se tiene que mover el bebé?', 'a' => 'No hay un número que sirva para todas. Lo importante es el patrón habitual de tu bebé: si notás que se mueve claramente menos que de costumbre, consultá ese mismo día, sin esperar al próximo control.'],
    ['q' => '¿Es normal que me falte el aire?', 'a' => 'El útero crece y puede costar respirar al subir escaleras o al acostarte. Si la falta de aire aparece de golpe, en reposo o con dolor en el pecho, buscá atención inmediata. Repasá las [señales de alarma](/salud/senales-de-alarma/).'],
]],
8 => ['title' => 'Octavo mes de embarazo: semanas 32 a 35',
'seoTitle' => '8 meses de embarazo: semanas 32 a 35',
'metaDescription' => 'El octavo mes de embarazo va de la semana 32 a la 35: el bebé se acomoda cabeza abajo, sus pulmones maduran y llega el momento de preparar el bolso.',
'lead' => 'El octavo mes de embarazo va, aproximadamente, de la semana 32 a la 35, en el tercer trimestre. El bebé practica movimientos de respiración, los huesos de su cráneo siguen blandos para poder pasar por el parto y muchos se acomodan cabeza abajo. Sus pulmones y su sistema nervioso siguen madurando: nacer en esta etapa todavía es prematuro. Es un buen momento para preparar el bolso, los documentos y el camino al hospital o sanatorio donde pensás tener a tu bebé.',
'highlights' => [32, 33, 34, 35],
'faq' => [
    ['q' => '¿Nacer en el octavo mes es prematuro?', 'a' => 'Sí: un nacimiento antes de las 37 semanas completas es prematuro. Si tenés contracciones regulares antes de esa fecha, pérdida de líquido o sangrado, consultá enseguida.'],
    ['q' => '¿Qué conviene llevar al hospital o sanatorio?', 'a' => 'Tu carné perinatal, tu documento, los estudios que tengas y ropa para vos y el bebé. Preguntá en el lugar donde pensás tener a tu bebé qué te piden, porque cada servicio tiene su lista. Te ayuda la guía de [qué llevar al sanatorio](/parto/que-llevar-al-sanatorio/).'],
]],
9 => ['title' => 'Noveno mes de embarazo: semanas 36 a 40',
'seoTitle' => '9 meses de embarazo: semanas 36 a 40',
'metaDescription' => 'El noveno mes de embarazo va de la semana 36 a la 40: el término, la fecha probable de parto y las señales para saber cuándo ir al hospital.',
'lead' => 'El noveno mes de embarazo va, aproximadamente, de la semana 36 a la 40 y es el final del tercer trimestre. El término comienza a las 37 semanas completas, y el bebé sigue acumulando reservas y madurando hasta el nacimiento. En los controles se revisa su presentación y se conversa el plan de parto. Conocer las señales de trabajo de parto y las [señales de alarma](/salud/senales-de-alarma/) te ayuda a saber cuándo ir. Si pasás la fecha probable, el seguimiento se acuerda con tu equipo.',
'highlights' => [36, 37, 39, 40],
'faq' => [
    ['q' => '¿Cuándo tengo que ir al hospital?', 'a' => 'Ante contracciones regulares que se vuelven más seguidas e intensas, pérdida de líquido, sangrado, fiebre o si el bebé se mueve menos, consultá o andá. Acordá antes con tu equipo cuándo y adónde ir; repasá [contracciones y cuándo ir](/parto/contracciones-y-cuando-ir/).'],
    ['q' => '¿Qué pasa si paso la fecha probable de parto?', 'a' => 'La fecha probable es una referencia, no un día exacto. Si la superás, el equipo define la vigilancia y el momento del nacimiento según tus semanas completas, tus antecedentes y el bienestar del bebé.'],
]],
];
foreach ($_meses as $_mes => &$_record) {
    $_record['weeks'] = array_values(array_filter(range(1, 42), static fn(int $_n): bool => week_month($_n) === $_mes));
    $_record['trimester'] = week_trimester($_record['weeks'][0]);
    $_record['sources'] = $_mesesSources;
    $_record['reviewedBy'] = null;
    $_record['updated'] = '2026-09-27';
}
unset($_mes, $_record, $_mesesSources);
return $_meses;
