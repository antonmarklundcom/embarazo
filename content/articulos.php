<?php
/**
 * Articles keyed by globally unique slug. Plain text throughout; render with e().
 * cluster:string (cluster key); path:string (/<cluster>/<slug>/); title,seoTitle,
 * metaDescription:string; kind:medical|legal|procedural|product; lead:string <=100 words.
 * sections:[{h2:string,body:string[],items:[{title,text}],table:null|{head:string[],rows:string[][]}}].
 * steps:[{title:string,body:string[]}] (empty if not procedural).
 * appHandoff:{text:string,medium:string,extra:array}; campaign = article slug.
 * faq:[{q,a}]; related:string[] (article slugs; hub derives from cluster);
 * weeks:int[]; appGuideSlug:?string; guarani:[{es,gn}] (empty until reviewed).
 * reviewedBy:null|{name,credentials,registration}; reviewedAt:?ISO-date;
 * validAsOf:?ISO-date (legal only, editorial reference, not fresh verification);
 * sources:[{title,publisher,url:?string,accessed:?ISO-date}]; updated:ISO-date;
 * image:?string (site-relative path). Empty optional arrays retain their keys.
 */
declare(strict_types=1);

return [
    'licencia-de-maternidad' => [
        'cluster' => 'derechos',
        'path' => '/derechos/licencia-de-maternidad/',
        'title' => 'Licencia de maternidad en Paraguay: duración, inicio y pago',
        'seoTitle' => 'Licencia de maternidad en Paraguay: semanas, inicio y pago',
        'metaDescription' => 'Licencia de maternidad en Paraguay: 18 semanas según la Ley 5508, fechas orientativas y preguntas sobre el subsidio IPS. Confirmá requisitos vigentes.',
        'kind' => 'legal',
        'lead' => 'En Paraguay, la licencia de maternidad es de 18 semanas, equivalentes a 126 días, según la Ley 5508/2015. Puede extenderse a 24 semanas en los casos previstos por la ley. El inicio más temprano se calcula 14 días antes de la fecha probable de parto. IPS contempla un subsidio del 100 %, sujeto a sus requisitos, entre ellos al menos cuatro meses de aportes.',
        'sections' => [
            [
                'h2' => 'Cuánto dura la licencia de maternidad',
                'body' => [
                    'Las 18 semanas son el período general de licencia: multiplicar 18 por siete da los 126 días que vas a ver en el cálculo de fechas. Si te corresponde una extensión a 24 semanas, cambia la duración y también la organización de tu regreso. Confirmá con quien gestione tu licencia cuáles son las condiciones de extensión aplicables a tu caso.',
                    'Para planificar en casa y en el trabajo, empezá por estas tres fechas: la probable de parto, el inicio de la licencia y el final calculado. Podés anotarlas juntas en un calendario y compartirlas con quien vaya a acompañarte. Si después recibís una fecha distinta en la documentación del trámite, actualizá también ese calendario para que todos trabajen con la misma información.',
                ],
                'items' => [], 'table' => null,
            ],
            [
                'h2' => 'Cómo se calculan las fechas orientativas',
                'body' => [
                    'Para calcular el inicio más temprano, restá 14 días a tu fecha probable de parto, también llamada FPP. Desde ese inicio, sumá 126 días para obtener el final orientativo de una licencia de 18 semanas. Por separado, la referencia del reposo de IPS se calcula restando 21 días a la FPP y corresponde a la semana 38 del seguimiento.',
                    'Por ejemplo, con FPP el 7 de diciembre de 2026, el inicio más temprano es el 23 de noviembre y el final calculado es el 29 de marzo de 2027. La referencia de reposo de IPS cae el 16 de noviembre. La diferencia aparece porque las fórmulas parten de márgenes distintos respecto del parto. Confirmá las fechas de tu trámite y de reincorporación con IPS y tu empleador.',
                    'La tabla toma como inicio el más temprano permitido. Si usás otra fecha de inicio, la suma de 126 días parte de esa nueva fecha. La FPP es una estimación del nacimiento: anotá cualquier actualización que te comunique tu equipo para volver a calcular y conversar los cambios con tiempo.',
                ],
                'items' => [],
                'table' => [
                    'head' => ['Referencia', 'Regla documentada', 'Ejemplo orientativo'],
                    'rows' => [
                        ['Fecha probable de parto', 'Dato de partida', '7 de diciembre de 2026'],
                        ['Inicio más temprano', 'FPP menos 14 días', '23 de noviembre de 2026'],
                        ['Fin calculado', 'Inicio más 126 días', '29 de marzo de 2027'],
                        ['Reposo IPS', 'FPP menos 21 días', '16 de noviembre de 2026'],
                    ],
                ],
            ],
            [
                'h2' => 'Licencia y subsidio de IPS: qué significa cada uno',
                'body' => [
                    'La licencia es el período de ausencia del trabajo por maternidad; el subsidio es la prestación económica. IPS contempla un subsidio del 100 % y al menos cuatro meses de aportes como requisito. Consultá en IPS la base de cálculo, los requisitos de tu régimen y el calendario de pago antes de cerrar tu presupuesto.',
                    'Podés preparar una hoja con dos columnas: en una, las fechas de licencia; en la otra, las preguntas sobre el subsidio. Para la segunda, anotá si conocés tu situación de aportes, qué documentación te pidieron y si ya recibiste una respuesta sobre el importe. Tener un inicio de licencia anotado no equivale a tener un pago confirmado; separar ambas cosas evita confusiones cuando hablás con el trabajo y con IPS.',
                    'Si trabajás por tu cuenta, cambiaste de empleo o tenés dudas sobre tu cobertura, empezá por identificar bajo qué régimen estás. Llevá esa pregunta concreta a IPS. Para organizar los gastos de los primeros meses, te puede servir distinguir el importe que esperás cobrar de una fecha de cobro ya comunicada, y dejar anotada la respuesta que falta.',
                ],
                'items' => [], 'table' => null,
            ],
            [
                'h2' => 'Permisos para controles y otros derechos',
                'body' => [
                    'La Ley 7383/2024 contempla hasta cuatro horas remuneradas para controles prenatales. Es el permiso para asistir a una consulta durante el embarazo. Confirmá alcance, frecuencia y constancias con tu empleador. Cuando tengas un turno, podés comunicar el horario y preguntar cómo dejar registrada la solicitud para que quede claro a qué consulta corresponde.',
                    'La Ley 5508/2015 también contempla descansos de lactancia de 90 o 60 minutos, según corresponda, dos semanas de licencia de paternidad y fuero maternal hasta un año. Confirmá las condiciones de aplicación de cada derecho para tu situación. Para preparar la vuelta al trabajo, podés conversar sobre los descansos de lactancia y tu horario; para organizar el acompañamiento después del nacimiento, sobre la licencia de paternidad.',
                    'El Código del Trabajo, artículo 261 y siguientes, contempla la bonificación familiar del 5 %. Confirmá la base de cálculo y los requisitos antes de estimar un importe. Anotá este tema por separado del subsidio de maternidad: aunque ambos se relacionan con ingresos de la familia, son conceptos distintos y conviene identificarlos por su nombre al preguntar.',
                ],
                'items' => [], 'table' => null,
            ],
            [
                'h2' => 'Si recibís respuestas distintas',
                'body' => [
                    'Si una fecha o un requisito no coincide con una respuesta anterior, juntá ambos mensajes y pedí que aclaren la diferencia. Una pregunta útil es: “¿Esta fecha corresponde al reposo, a la licencia o al pago del subsidio?”. También podés pedir que identifiquen la norma o el requisito que están usando. Conservá las respuestas junto con la fecha en que las recibiste.',
                    'Como organización personal, guardá copias de lo que entregás y de las constancias que recibís. Podés armar una carpeta con fechas, comunicaciones con el trabajo y respuestas sobre aportes o subsidio. Si surge un conflicto sobre la licencia o la continuidad laboral, buscá asesoramiento jurídico con esa información a mano. Tener los hechos ordenados ayuda a explicar qué pasó y qué necesitás resolver.',
                ],
                'items' => [], 'table' => null,
            ],
        ],
        'steps' => [
            ['title' => 'Ordená tus fechas', 'body' => ['Anotá tu fecha probable de parto y las fechas que te comunicaron. Marcá cuáles son cálculos orientativos y cuáles fueron confirmadas para tu trámite.']],
            ['title' => 'Prepará las preguntas', 'body' => ['Separá los temas para tu empleador de los temas para IPS: fechas y comunicación de la ausencia, por un lado; cobertura, aportes, documentación y pago, por otro.']],
            ['title' => 'Revisá las respuestas', 'body' => ['Conservá la información recibida, anotá qué gestión sigue pendiente y actualizá tu calendario cuando te confirmen una fecha.']],
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye un apartado de derechos con cálculo de fechas de licencia. Podés usarlo para preparar tus preguntas y después confirmar las fechas de tu trámite. Sin cuenta, todo queda en tu teléfono; con cuenta, el servidor guarda un sobre que no puede leer.',
            'medium' => 'article', 'extra' => [],
        ],
        'faq' => [
            ['q' => '¿Cuántos días son 18 semanas de licencia?', 'a' => 'Son 126 días: 18 multiplicado por siete. La Ley 5508/2015 prevé una extensión a 24 semanas en determinados casos.'],
            ['q' => '¿La fecha del reposo de IPS es la misma que el inicio calculado?', 'a' => 'Son cálculos diferentes: FPP menos 21 días para la referencia de reposo IPS y FPP menos 14 días para el inicio más temprano de la licencia.'],
            ['q' => '¿Cuánto paga IPS por maternidad?', 'a' => 'El subsidio previsto es del 100 %, sujeto a los requisitos de IPS. Para conocer la suma en guaraníes, pedí el cálculo correspondiente a tu régimen y aportes.'],
            ['q' => '¿Hay permiso pagado para controles prenatales?', 'a' => 'Sí. La Ley 7383/2024 contempla hasta cuatro horas remuneradas para controles prenatales; el alcance y las constancias se coordinan con tu empleador.'],
        ],
        'related' => ['subsidio-de-maternidad-ips', 'permiso-para-controles', 'derechos-de-la-embarazada-que-trabaja'],
        'weeks' => [20, 30, 38], 'appGuideSlug' => null, 'guarani' => [],
        'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => '2026-09-20',
        'sources' => [
            ['title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna', 'publisher' => 'Congreso de la Nación Paraguaya', 'url' => null, 'accessed' => null],
            ['title' => 'Ley 7383/2024 — permiso remunerado para controles prenatales', 'publisher' => 'Congreso de la Nación Paraguaya', 'url' => null, 'accessed' => null],
            ['title' => 'Código del Trabajo — artículo 261 y siguientes, bonificación familiar', 'publisher' => 'Congreso de la Nación Paraguaya', 'url' => null, 'accessed' => null],
            ['title' => 'Subsidio por reposo de maternidad: requisitos y trámite', 'publisher' => 'Instituto de Previsión Social (IPS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20', 'image' => null,
    ],
];
