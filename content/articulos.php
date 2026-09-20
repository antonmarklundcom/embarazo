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
    'subsidio-de-maternidad-ips' => [
        'cluster' => 'derechos',
        'path' => '/derechos/subsidio-de-maternidad-ips/',
        'title' => 'Subsidio de maternidad IPS: aportes, trámite y pago',
        'seoTitle' => 'Subsidio de maternidad IPS: trámite y pago',
        'metaDescription' => 'Conocé el subsidio de maternidad IPS: aportes, documentos habituales y preguntas sobre el cálculo y el pago para organizar tu licencia.',
        'kind' => 'legal',
        'lead' => 'El subsidio de maternidad de IPS es una prestación económica vinculada al reposo por maternidad. La referencia disponible contempla el 100 % y al menos cuatro meses de aportes, sujetos al régimen aplicable. Para saber cuánto vas a cobrar, necesitás la base de cálculo de tu caso. La licencia laboral y el pago del subsidio se gestionan como asuntos distintos.',
        'sections' => [
            [
                'h2' => 'Qué cubre el subsidio y qué tenés que separar',
                'body' => [
                    'El subsidio responde a una pregunta económica: qué ingreso corresponde durante el reposo por maternidad. La [licencia de maternidad](/derechos/licencia-de-maternidad/) responde a otra: cómo se organiza la ausencia del trabajo. Podés tener una conversación avanzada sobre tu reemplazo y todavía no conocer el estado de la prestación. Por eso, al hablar con quien lleva personal, identificá si están tratando el permiso laboral o la documentación para IPS.',
                    'El porcentaje del 100 % no alcanza, por sí solo, para calcular una suma en guaraníes. Falta saber sobre qué base se aplica y qué conceptos forman parte de ella. Si comparás una estimación con tu recibo, separá salario, descuentos y otros conceptos para poder preguntar por la diferencia concreta. Evitá armar el presupuesto familiar suponiendo que cualquier depósito tendrá el mismo importe que tu último cobro.',
                    'Confirmá con IPS y tu empleador los requisitos, eventuales costos y plazos vigentes para tu situación.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Aportes y cobertura: por dónde empezar',
                'body' => [
                    'La referencia de al menos cuatro meses de aportes sirve para abrir la consulta, pero no permite resolver todas las historias laborales. Un cambio de empleo, períodos sin aportes o un régimen distinto son datos que conviene explicar desde el comienzo. Habitualmente, la consulta sobre cobertura y aportes se dirige a IPS; el área que liquida salarios suele ayudar a identificar lo declarado por el empleador.',
                    'Prepará una cronología sencilla de tus empleos y conservá los comprobantes que ya tengas. Si hay una diferencia entre lo que figura descontado y lo que te informan sobre tus aportes, señalá el período concreto. Pedí que te expliquen qué dato necesita corrección y quién puede presentarla. No completes una solicitud con fechas aproximadas solamente para llenar un casillero: marcá esa información como pendiente.',
                    'Si trabajás por cuenta propia o no sabés bajo qué modalidad estás inscripta, empezá por esa pregunta. La experiencia de una compañera puede ayudarte a formular dudas, pero no confirma que ambas tengan la misma cobertura.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentos que suelen entrar en la consulta',
                'body' => [
                    'Habitualmente se consulta por la identificación de la solicitante, la constancia médica del reposo y los antecedentes de aportes. La lista siguiente te ayuda a revisar lo que ya tenés y a preguntar por el resto; no implica que debas conseguir todos los documentos antes de hacer una primera consulta. Revisá que nombres y datos coincidan entre los papeles disponibles.',
                    'Guardá los originales y prepará copias cuando te las soliciten. Si entregás documentación, pedí una constancia que permita reconocer qué presentaste y cuándo. Un archivo guardado en tu teléfono puede ayudarte a ubicar un dato, pero preguntá qué formato acepta el trámite antes de depender únicamente de una foto.',
                    'Si otra persona va a acompañarte o consultar por vos, averiguá qué autorización necesita. No compartas contraseñas ni códigos de acceso para resolver una gestión. Anotá el nombre del documento faltante tal como te lo indiquen, para no confundir un certificado médico con una constancia laboral.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual',
                        'Para qué puede servir',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Identificación',
                            'Relacionar la solicitud con tus datos',
                            'Nombre y documento legibles'
                        ],
                        [
                            'Constancia de reposo',
                            'Identificar el período informado',
                            'Fechas y datos profesionales'
                        ],
                        [
                            'Antecedentes de aportes',
                            'Consultar cobertura',
                            'Períodos que figuran registrados'
                        ],
                        [
                            'Constancia de presentación',
                            'Seguir la gestión',
                            'Referencia y fecha de entrega'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Reposo, licencia y fecha de cobro',
                'body' => [
                    'La referencia documentada de reposo IPS parte de la semana 38 del seguimiento. Ese dato no es una fecha de depósito. En tu carpeta, mantené separados el período médico informado, las fechas laborales y cualquier comunicación sobre pago. Si recibís una fecha sin explicación, preguntá a cuál de esas tres cosas corresponde antes de comunicarla como definitiva en casa.',
                    'El seguimiento suele resultar más claro cuando usás la referencia de tu presentación y describís qué respuesta falta. Por ejemplo: si ya recibieron los documentos, si hay una observación o si todavía deben informar el cálculo. Una solicitud recibida no equivale a un importe aprobado. Pedí que distingan esos estados cuando te expliquen cómo sigue la gestión.',
                    'Para organizar los gastos, anotá ingresos confirmados y gastos próximos por separado. No hace falta compartir todo tu presupuesto con el trabajo: la pregunta laboral puede limitarse al dato que falta para el trámite. Si te informan una corrección, guardá también la versión anterior para reconstruir lo ocurrido.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo revisar una diferencia en el pago',
                'body' => [
                    'Si el importe comunicado no coincide con tu expectativa, empezá por pedir el detalle de la base utilizada y el período reconocido. Compará conceptos equivalentes: un total esperado para todo el reposo no se puede comparar directamente con un movimiento cuyo alcance todavía desconocés. Anotá qué parte de la explicación entendiste y cuál necesita una respuesta adicional.',
                    'También puede haber diferencias entre una respuesta verbal y una comunicación posterior. En ese caso, presentá ambas de forma ordenada, sin atribuir una causa que todavía no conocés. Una consulta útil identifica la solicitud, resume la diferencia y pide la aclaración específica. Conservá cualquier respuesta que modifique el estado o el importe informado.',
                    'Si además necesitás ordenar los permisos de consulta durante el embarazo, revisá [permiso para controles](/derechos/permiso-para-controles/). Son ausencias distintas del reposo por maternidad y conviene llevarlas en un registro separado. El [hub de derechos](/derechos/) reúne las guías para ubicar cada tema.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si tu empleador no cumple',
                'body' => [
                    'Si el problema está en información laboral que no te entregan o en una negativa relacionada con tu maternidad, podés preguntar al ministerio MTESS qué orientación corresponde. Llevá el pedido que hiciste, la respuesta recibida y la documentación disponible sobre tu relación laboral. Describí el obstáculo concreto, por ejemplo un dato de aportes que necesitás aclarar, sin suponer que todas las demoras de IPS dependen del empleador.',
                    'Cuando el desacuerdo sea sobre la prestación, mantené también identificada la consulta dirigida a IPS. Diferenciar ambas cuestiones ayuda a explicar qué solución buscás. Si aparecen descuentos, amenazas o una propuesta de renuncia, buscá asesoramiento jurídico individual con los mensajes y recibos a mano. No necesitás resolver por tu cuenta qué norma fue vulnerada para pedir orientación.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Consultá tu situación de aportes',
                'body' => [
                    'Habitualmente el primer intercambio con IPS permite identificar el régimen y los antecedentes que deben revisarse.'
                ]
            ],
            [
                'title' => 'Reuní lo solicitado',
                'body' => [
                    'La constancia de reposo y los datos laborales suelen formar parte de la preparación; anotá cualquier observación.'
                ]
            ],
            [
                'title' => 'Seguí la presentación',
                'body' => [
                    'Usá la referencia recibida para preguntar por documentos pendientes, cálculo y comunicación del pago.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé tiene un apartado de derechos con cálculo de fechas de licencia. Usalo para preparar el calendario de tu consulta sobre reposo; el estado y el importe del subsidio se consultan con IPS.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿El 100 % es mi último sueldo en mano?',
                'a' => 'No permite concluir eso por sí solo. Pedí la base de cálculo y el período reconocido para entender el importe.'
            ],
            [
                'q' => '¿Cuatro meses de aportes garantizan el pago?',
                'a' => 'Es un requisito documentado, pero la cobertura y los demás requisitos dependen del régimen y de tu situación.'
            ],
            [
                'q' => '¿El comienzo del reposo indica cuándo cobro?',
                'a' => 'No. El período de reposo y la comunicación del pago son datos diferentes.'
            ]
        ],
        'related' => [
            'licencia-de-maternidad',
            'permiso-para-controles',
            'derechos-de-la-embarazada-que-trabaja'
        ],
        'weeks' => [
            30,
            38
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5508/2015 — protección de la maternidad y apoyo a la lactancia',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Subsidio por reposo de maternidad: requisitos y trámite',
                'publisher' => 'Instituto de Previsión Social (IPS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre derechos laborales y maternidad — referencia para consulta',
                'publisher' => 'MTESS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'permiso-para-controles' => [
        'cluster' => 'derechos',
        'path' => '/derechos/permiso-para-controles/',
        'title' => 'Permiso para controles prenatales en Paraguay',
        'seoTitle' => 'Permiso para controles prenatales en Paraguay',
        'metaDescription' => 'Permiso para controles prenatales: conocé la referencia de cuatro horas pagadas y cómo preparar el aviso, la constancia y tus preguntas laborales.',
        'kind' => 'legal',
        'lead' => 'La Ley 7383/2024 contempla hasta cuatro horas remuneradas para controles prenatales. Para organizar el permiso, comunicá el turno y preguntá cómo registrar la ausencia y su constancia. La frecuencia, el alcance y el tratamiento de situaciones particulares necesitan una respuesta para tu caso; no supongas que las cuatro horas se renuevan con cada consulta.',
        'sections' => [
            [
                'h2' => 'Qué permiso estás solicitando',
                'body' => [
                    'El permiso para controles prenatales permite plantear una ausencia laboral vinculada a tu seguimiento durante el embarazo. Es útil nombrarlo de esa manera al solicitarlo: si solamente decís que necesitás salir, puede quedar sin aclarar la razón administrativa de la ausencia. No hace falta contar conversaciones íntimas de la consulta para explicar que tenés un control y necesitás coordinar el horario.',
                    'La referencia legal es de hasta cuatro horas remuneradas. Ese dato no define por sí solo cuántas solicitudes podés hacer ni cómo se acredita cada una. Tampoco resuelve automáticamente el tiempo de traslado o una espera prolongada. Separá esas preguntas al hablar con quien registra la asistencia, para que una respuesta sobre el horario no se confunda con una respuesta sobre el alcance del permiso.',
                    'Confirmá con el empleador o el organismo competente los requisitos, eventuales costos de constancias y plazos vigentes.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo avisar cuando ya tenés turno',
                'body' => [
                    'Habitualmente la coordinación empieza con la persona que organiza tu jornada o con el área de personal, si existe. Prepará un aviso breve con la fecha, el horario informado por el servicio de salud y la consulta sobre cómo justificar la ausencia. Pedí que te indiquen quién debe recibirlo, especialmente si tu jefatura y quien controla la asistencia son personas distintas.',
                    'Podés escribir: “Tengo un control prenatal en el horario indicado. Solicito coordinar el permiso correspondiente y que me indiquen qué constancia presentar”. Adaptá el mensaje a tu situación real; no agregues una duración que todavía no conocés. Guardá la respuesta junto al turno para poder revisar lo acordado si luego aparece una diferencia en el registro.',
                    'Si tu trabajo tiene tareas que deben cubrirse mientras salís, podés identificar qué queda pendiente y quién necesita conocerlo. Esa organización práctica ayuda a evitar confusiones, pero no reemplaza la solicitud del permiso. Mantené separados el aviso de ausencia y el traspaso de tareas.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué comprobantes suelen servir',
                'body' => [
                    'Habitualmente se pide alguna constancia del turno o de la asistencia, según el momento de la gestión. Un comprobante de reserva muestra que había una consulta prevista; una constancia posterior puede ayudar a registrar que asististe. Preguntá cuál necesitan y qué información debe incluir, sin asumir que ambos documentos cumplen la misma función.',
                    'Antes de salir del servicio, revisá que cualquier constancia entregada sea legible y corresponda a tus datos. Si encontrás un error, pedí que te indiquen cómo corregirlo. Conservá una copia para vos cuando presentes el documento en el trabajo. Podés anotar aparte la hora en que saliste y regresaste, como registro personal de la jornada.',
                    'Evitá entregar estudios completos o antecedentes que nadie te haya explicado por qué necesita. Si te solicitan información clínica adicional, preguntá cuál es el propósito del pedido y buscá orientación sobre su alcance. La carpeta del trabajo y la carpeta de seguimiento médico pueden permanecer separadas.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Referencia habitual',
                        'Momento de uso',
                        'Pregunta útil'
                    ],
                    'rows' => [
                        [
                            'Turno asignado',
                            'Antes del control',
                            '¿Sirve para iniciar el aviso?'
                        ],
                        [
                            'Constancia de asistencia',
                            'Después de la consulta',
                            '¿Qué datos debe contener?'
                        ],
                        [
                            'Aviso y respuesta',
                            'Al registrar la ausencia',
                            '¿Quién deja asentado el permiso?'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Si el horario cambia o la consulta se demora',
                'body' => [
                    'Un turno puede cambiar después de que ya avisaste. Cuando tengas la nueva información, actualizá el pedido e identificá qué dato cambió. No envíes una segunda solicitud sin explicar su relación con la anterior: podría parecer que se trata de otra ausencia. Guardá el aviso de reprogramación si el servicio te lo proporciona.',
                    'Si la atención se extiende más de lo previsto, comunicá la situación por el canal que acordaron cuando te sea posible. Después, consultá cómo registrar la diferencia y qué respaldo necesitan. La referencia de cuatro horas no permite afirmar desde esta guía cómo se resolverá todo exceso de tiempo. Evitá prometer que vas a regresar a una hora que depende de una atención todavía en curso.',
                    'Si tenés una preocupación urgente de salud, buscá atención y usá la guía de [señales de alarma](/salud/senales-de-alarma/) para reconocer cuándo pedir ayuda. La coordinación administrativa no debe convertirse en una razón para postergar la atención que necesitás.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Permiso, reposo y licencia: cómo distinguirlos',
                'body' => [
                    'Una consulta prenatal programada no es lo mismo que una indicación de reposo ni que la [licencia de maternidad](/derechos/licencia-de-maternidad/). Al comunicar un documento nuevo, indicó qué situación acredita. Así evitás usar el aviso de un control para intentar resolver una ausencia distinta, que puede necesitar otra conversación y otra documentación.',
                    'Si en el recibo aparece un descuento que vinculás con el control, compará la fecha de la ausencia, el aviso enviado y el concepto registrado. Pedí que te expliquen qué motivo usaron y qué falta para revisar el asiento. Esa pregunta concreta suele ser más útil que discutir un total sin saber a qué corresponde.',
                    'Para controles sucesivos, conservá cada turno con su propia constancia y respuesta. No des por hecho que una autorización anterior cubre cualquier cita futura. Si cambia tu jornada, informá ese cambio al consultar cómo coordinar el siguiente control. Podés volver al [mapa de derechos laborales](/derechos/derechos-de-la-embarazada-que-trabaja/) para ordenar los demás temas del embarazo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si tu empleador no cumple',
                'body' => [
                    'Si te niegan el permiso o aparece un descuento que no lográs aclarar, consultá al ministerio MTESS sobre la orientación aplicable. Prepará una descripción del turno, del aviso que diste y de la respuesta del trabajo. Adjuntá solamente la documentación pertinente al problema y conservá tus originales. Explicá si necesitás resolver una próxima ausencia o revisar algo que ya ocurrió.',
                    'Una negativa verbal también puede anotarse en tu registro personal, con fecha y contexto, diferenciándola de una respuesta escrita. Si te presionan para abandonar los controles o cambiar tu relación laboral, buscá asesoramiento individual. La consulta puede centrarse en cómo proceder y preservar la información sin que tengas que interpretar sola el alcance de la ley.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Presentá el aviso',
                'body' => [
                    'La coordinación suele comenzar con personal o con quien organiza la jornada, usando los datos del turno.'
                ]
            ],
            [
                'title' => 'Preguntá por la constancia',
                'body' => [
                    'Habitualmente se aclara qué comprobante necesitan y dónde se entrega.'
                ]
            ],
            [
                'title' => 'Revisá la asistencia',
                'body' => [
                    'Después del control, comprobá que la ausencia registrada coincida con lo comunicado.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'En Mi Bebé podés seguir tu semana y consultar la sección de derechos. Ese contexto te ayuda a preparar preguntas para el control y para coordinar tu ausencia del trabajo.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Las cuatro horas son por mes?',
                'a' => 'La frecuencia requiere verificación; la referencia disponible solo establece hasta cuatro horas remuneradas.'
            ],
            [
                'q' => '¿Puedo usar el aviso de turno como constancia de asistencia?',
                'a' => 'Son documentos distintos. Preguntá cuál corresponde en cada etapa del registro.'
            ],
            [
                'q' => '¿Qué hago si reprograman el control?',
                'a' => 'Actualizá el aviso y señalá que reemplaza al turno anterior, conservando la comunicación del cambio.'
            ]
        ],
        'related' => [
            'licencia-de-maternidad',
            'fuero-maternal-y-despido',
            'derechos-de-la-embarazada-que-trabaja'
        ],
        'weeks' => [
            12,
            20,
            30
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5508/2015 — protección de la maternidad y apoyo a la lactancia',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Ley 7383/2024 — permiso remunerado para controles prenatales',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre derechos laborales y maternidad — referencia para consulta',
                'publisher' => 'MTESS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'hora-de-lactancia' => [
        'cluster' => 'derechos',
        'path' => '/derechos/hora-de-lactancia/',
        'title' => 'Hora de lactancia en Paraguay: descansos y trabajo',
        'seoTitle' => 'Hora de lactancia en Paraguay: descansos',
        'metaDescription' => 'Descansos de lactancia en Paraguay: referencias de 90 y 60 minutos, preguntas para coordinar la jornada y documentos habituales para el regreso.',
        'kind' => 'legal',
        'lead' => 'La llamada hora de lactancia no siempre equivale a una hora: la Ley 5508/2015 contempla descansos de 90 o 60 minutos, según corresponda. Para organizar la vuelta al trabajo, necesitás aclarar qué duración y modalidad se aplican a tu situación. Conversá el horario y dejá registrado cómo se coordinará el descanso dentro de tu jornada.',
        'sections' => [
            [
                'h2' => 'Por qué se habla de 90 o 60 minutos',
                'body' => [
                    'El nombre cotidiano “hora de lactancia” puede llevar a pensar que hay una única duración para todas las trabajadoras. La referencia legal disponible distingue descansos de 90 y 60 minutos. Para elegir cuál corresponde, hacen falta las condiciones aplicables a tu caso; no conviene resolverlo comparando solamente lo que hace una compañera o lo que figuraba en un horario anterior.',
                    'Prepará la consulta con los datos de tu jornada, la fecha prevista de regreso y la documentación que ya tengas sobre el nacimiento. Si recibís una respuesta que menciona una duración, pedí también que te expliquen desde cuándo y bajo qué condiciones la están aplicando. Así podés identificar si la conversación trata del derecho al descanso o de la forma de distribuirlo.',
                    'Confirmá con personal o el organismo competente los requisitos, eventuales costos de documentación y plazos vigentes.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo preparar el regreso al trabajo',
                'body' => [
                    'Antes de retomar, revisá tu horario real: entrada, salida, traslados y tareas que exigen continuidad. Sobre ese esquema, anotá en qué momentos necesitás conversar la organización del descanso. Llevar una propuesta concreta ayuda a que la respuesta no quede en un “después vemos”, especialmente cuando hay turnos variables o personas diferentes a cargo de la asistencia.',
                    'Habitualmente esta coordinación se conversa con el empleador o el área de personal. Si quien autoriza el horario no es quien organiza las tareas, preguntá cómo se comunicará el acuerdo. Podés pedir una confirmación escrita del esquema previsto y guardar cualquier modificación posterior. Una conversación sobre la cobertura de tus tareas no aclara necesariamente cómo se registrará el descanso.',
                    'La [licencia de maternidad](/derechos/licencia-de-maternidad/) y los descansos de lactancia corresponden a momentos distintos de esa organización. No sumes minutos al final de la licencia ni cambies la fecha de regreso por tu cuenta: llevá ambas preguntas por separado a quien gestione la reincorporación.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué conviene preguntar sobre la modalidad',
                'body' => [
                    'Preguntá si el esquema aplicable contempla pausas dentro de la jornada y cómo se acuerda su distribución. Si querés consultar por una entrada posterior o una salida anterior, plantealo expresamente, sin presentarlo como una opción ya autorizada. La existencia del descanso no permite deducir todas las modalidades posibles ni decidir unilateralmente cómo se acumula.',
                    'También sirve describir obstáculos concretos del puesto. Por ejemplo, si atendés público sin reemplazo, si cambiás de sector durante el día o si tu turno se modifica con frecuencia. No necesitás proponer una solución definitiva para señalar que el esquema comunicado resulta difícil de cumplir. Pedí que la conversación incluya cómo avisar y a quién acudir si una tarea coincide con la pausa acordada.',
                    'Si necesitás un espacio para extraerte leche, podés preguntar por privacidad, condiciones de higiene y disponibilidad real en tu lugar de trabajo. Las necesidades prácticas merecen una respuesta específica. Esta consulta no supone afirmar que todos los establecimientos tienen las mismas instalaciones ni los mismos requisitos legales.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentación y registro del acuerdo',
                'body' => [
                    'La información que suele pedirse para conversar el descanso incluye datos del nacimiento, antecedentes de la licencia y, según la situación, alguna constancia adicional. Pedí la lista aplicable antes de gestionar certificados que tal vez no necesites. Si un documento contiene información clínica amplia, preguntá qué dato se requiere para el asunto laboral.',
                    'Guardá el horario acordado en un lugar donde puedas encontrarlo al cambiar de turno o de responsable. Podés registrar cuándo se comunicá, qué distribución se explicá y qué pregunta quedó pendiente. Si recibís instrucciones distintas, mostrales la última versión disponible y pedí que identifiquen qué cambio están haciendo.',
                    'Un registro personal también puede mostrar dificultades repetidas: pausas interrumpidas, reuniones superpuestas o falta de aviso al equipo. Describí hechos concretos y sus fechas, sin convertir cada anotación en una conclusión jurídica. Eso facilita una conversación sobre la organización y, si hace falta, una consulta posterior.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Información habitual',
                        'Utilidad para la coordinación',
                        'Qué aclarar'
                    ],
                    'rows' => [
                        [
                            'Datos del nacimiento',
                            'Ubicar la situación familiar',
                            'Qué constancia solicitan'
                        ],
                        [
                            'Fecha de regreso',
                            'Preparar la reincorporación',
                            'Qué horario se tomará como referencia'
                        ],
                        [
                            'Jornada y turnos',
                            'Organizar el descanso',
                            'Cómo se comunican cambios'
                        ],
                        [
                            'Acuerdo recibido',
                            'Revisar la aplicación',
                            'Quién responde por el registro'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cuando cambia tu jornada o tu situación',
                'body' => [
                    'Si te proponen otro turno, revisá qué pasa con el descanso antes de dar por resuelto el nuevo horario. Un acuerdo pensado para la mañana puede necesitar otra organización si pasás a trabajar en un horario diferente. Pedí una respuesta que abarque el cambio completo, incluidas las tareas que se superponen y la forma de registrar la pausa.',
                    'Si tu situación de lactancia cambia, llevá esa información a una consulta sobre las condiciones aplicables. No supongas que un comentario informal de alguien del equipo modifica automáticamente el acuerdo. Tampoco uses esta guía para decidir cuestiones clínicas de alimentación del bebé: esa orientación corresponde al equipo de salud que los acompaña.',
                    'Para distinguir los descansos de otros asuntos laborales, consultá [derechos de la embarazada que trabaja](/derechos/derechos-de-la-embarazada-que-trabaja/) y la guía sobre [fuero maternal](/derechos/fuero-maternal-y-despido/). El descanso, la continuidad del empleo y la fecha de regreso pueden aparecer en una misma reunión, pero conviene que cada punto tenga una respuesta identificable.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si tu empleador no cumple',
                'body' => [
                    'Si el descanso se niega, se interrumpe de forma reiterada o no coincide con lo comunicado, podés pedir orientación al ministerio MTESS. Llevá la descripción de tu jornada y el acuerdo disponible, junto con ejemplos concretos de lo que ocurrió. Explicá si el problema está en la duración informada, en la distribución o en que no podés usar las pausas previstas.',
                    'Si además aparecen amenazas o cambios que te preocupan sobre tu continuidad laboral, buscá asesoramiento jurídico sobre el conjunto de la situación. Conservá las comunicaciones tal como las recibiste. No necesitás discutir detalles íntimos de tu lactancia con todo el equipo: centrá el relato en el horario, las solicitudes y las respuestas que recibiste.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Prepará tu propuesta de jornada',
                'body' => [
                    'Habitualmente la conversación parte del horario de regreso y de las necesidades de coordinación.'
                ]
            ],
            [
                'title' => 'Pedí la modalidad aplicable',
                'body' => [
                    'El empleador suele indicar cómo tramitar el pedido y qué respaldo presentar.'
                ]
            ],
            [
                'title' => 'Registrá lo conversado',
                'body' => [
                    'Anotá duración, distribución y persona de contacto para revisar cómo funciona al retomar.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'El apartado de derechos de Mi Bebé puede acompañar la preparación de tu regreso. Usá la guía para identificar qué querés conversar sobre la licencia y los descansos de lactancia.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿La hora de lactancia siempre dura sesenta minutos?',
                'a' => 'No. La referencia de la Ley 5508/2015 contempla 90 o 60 minutos según las condiciones aplicables.'
            ],
            [
                'q' => '¿Puedo salir antes en vez de hacer pausas?',
                'a' => 'Consultá la modalidad aplicable y su coordinación; no lo des por autorizado por el solo hecho de tener un descanso.'
            ],
            [
                'q' => '¿Qué pasa si cambian mi turno?',
                'a' => 'Pedí que aclaren cómo quedará el descanso dentro del nuevo horario y conservá la respuesta.'
            ]
        ],
        'related' => [
            'licencia-de-maternidad',
            'fuero-maternal-y-despido',
            'derechos-de-la-embarazada-que-trabaja'
        ],
        'weeks' => [
            30,
            38
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5508/2015 — protección de la maternidad y apoyo a la lactancia',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre derechos laborales y maternidad — referencia para consulta',
                'publisher' => 'MTESS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'fuero-maternal-y-despido' => [
        'cluster' => 'derechos',
        'path' => '/derechos/fuero-maternal-y-despido/',
        'title' => 'Fuero maternal y despido en Paraguay',
        'seoTitle' => 'Fuero maternal y despido en Paraguay',
        'metaDescription' => 'Fuero maternal en Paraguay: qué preparar ante un despido, cómo ordenar comunicaciones y qué preguntar sobre la protección laboral por maternidad.',
        'kind' => 'legal',
        'lead' => 'El fuero maternal es la protección laboral vinculada a la maternidad. La Ley 5508/2015 contempla una referencia de protección hasta un año, cuyo alcance en tu caso requiere asesoramiento. Si recibís un aviso de despido o presión para renunciar, conservá la comunicación y buscá orientación jurídica cuanto antes. La respuesta depende de tu relación laboral y de lo que efectivamente ocurrió.',
        'sections' => [
            [
                'h2' => 'Qué significa tener protección por maternidad',
                'body' => [
                    'La protección por maternidad pone el foco en la continuidad laboral durante una etapa que también implica controles, licencia y organización del cuidado. La referencia de hasta un año no permite decidir, sin conocer el caso, cómo se computa el período ni qué procedimiento corresponde ante un conflicto. Esas preguntas son especialmente importantes si hay cambios de contrato, de empleador o de modalidad de trabajo.',
                    'Para una primera consulta, explicá cómo trabajás y qué situación te preocupa. Puede ser una comunicación de desvinculación, una propuesta para que firmes una renuncia o una modificación de tareas que no entendés. Nombrar el hecho con precisión ayuda a que la orientación no se limite a una explicación general de la ley.',
                    'Confirmá con el organismo competente los requisitos, eventuales costos y plazos vigentes para consultar o presentar tu caso.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo ordenar lo que pasó',
                'body' => [
                    'Armá una cronología con el comienzo de la relación laboral, la comunicación del embarazo si la hubo y los hechos posteriores que considerás relevantes. Usá las fechas que puedas respaldar. Si recordás una conversación pero no su fecha exacta, señalá esa duda en lugar de completar el dato como si fuera seguro. Separá lo que viste o recibiste de lo que otra persona te contá.',
                    'Guardá contratos, recibos, avisos y mensajes relacionados con el conflicto en su formato original cuando sea posible. Una captura aislada puede perder contexto; conservá también la conversación completa que explique a qué estaban respondiendo. No alteres documentos para destacar tu versión. Podés hacer un resumen aparte con las preguntas que querés plantear.',
                    'Si el aviso fue verbal, anotá quién habló, en qué contexto y qué palabras recordás. Ese registro personal no equivale a una constancia emitida por el empleador, pero te ayuda a relatar los hechos sin mezclar episodios. Evitá publicar documentación privada en grupos para conseguir opiniones sobre el caso.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentos útiles para una consulta individual',
                'body' => [
                    'Habitualmente, quien brinda orientación necesita conocer la relación laboral y la comunicación que originó la preocupación. Puede pedirte documentación del embarazo o del nacimiento para ubicar la situación, además de los antecedentes del trabajo. La siguiente tabla sirve para preparar lo disponible; no es una lista que debas completar antes de pedir ayuda.',
                    'Llevá una copia ordenada y conservá tus originales. Si falta el contrato, explicá cómo acordaron el trabajo y qué comprobantes tenés de pagos o tareas. La ausencia de un papel no es motivo para abandonar la consulta: es un dato que la persona que te asesore necesita conocer para evaluar cómo seguir.',
                    'Prepará también una lista breve de lo que querés resolver: entender el aviso, saber cómo responder, consultar sobre tu continuidad o revisar una propuesta escrita. Esa lista evita que una conversación sobre cifras deje sin tratar la pregunta principal que te llevá a buscar orientación.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Antecedente',
                        'Qué ayuda a explicar',
                        'Cómo prepararlo'
                    ],
                    'rows' => [
                        [
                            'Contrato o comunicaciones de ingreso',
                            'La relación laboral',
                            'Versión completa disponible'
                        ],
                        [
                            'Recibos o comprobantes',
                            'La situación de pagos',
                            'Ordenados por período'
                        ],
                        [
                            'Aviso cuestionado',
                            'La decisión comunicada',
                            'Mensaje completo y fecha'
                        ],
                        [
                            'Constancia del embarazo o nacimiento',
                            'El contexto de maternidad',
                            'Documento que ya tengas'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Si te piden firmar una renuncia o un acuerdo',
                'body' => [
                    'Una propuesta para firmar puede contener asuntos diferentes: recepción de un documento, terminación de la relación, pagos o compromisos futuros. Pedí leer el texto completo y obtener una copia para consultar su alcance. Si hay expresiones que no entendés, marcá cuáles son y pedí una explicación antes de tomar una decisión. No confundas el título del documento con todo lo que dice su contenido.',
                    'Si te presentan una cifra, pedí el detalle de los conceptos que la componen. Esta guía no puede calcular lo que corresponde ni valorar una oferta con información parcial. Una consulta jurídica puede revisar el documento junto con tu historia laboral y explicar las alternativas. Contá también si hubo presión para responder de inmediato.',
                    'Conservá las distintas versiones si la propuesta cambia. Si ya firmaste, llevá lo firmado y relatá las circunstancias en que ocurrió; no supongas que ya no tiene sentido consultar. El paso útil es obtener una evaluación de tus documentos, sin promesas sobre un resultado ni conclusiones tomadas de otro caso.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cambios de tareas, permisos y regreso',
                'body' => [
                    'No toda preocupación aparece como un aviso de despido. También podés necesitar orientación si después de comunicar el embarazo cambian tus tareas, tu horario o el trato que recibís. Describí qué cambió respecto de la organización anterior y qué explicación te dieron. Evitá atribuir automáticamente un motivo, pero incluí la secuencia que te hace pensar que los hechos están relacionados.',
                    'Los [permisos para controles](/derechos/permiso-para-controles/) y la [licencia de maternidad](/derechos/licencia-de-maternidad/) deben identificarse por separado en tu relato. Por ejemplo, una ausencia autorizada y una comunicación posterior sobre continuidad laboral son dos hechos distintos, aunque formen parte del mismo problema. Adjuntar el aviso y su respuesta permite comprender esa relación.',
                    'Si el conflicto surge al regresar, sumá el horario comunicado y cualquier acuerdo sobre [descansos de lactancia](/derechos/hora-de-lactancia/). Antes de responder a nuevas instrucciones que te generan dudas, buscá orientación sobre cómo dejar constancia de la situación. No resuelvas una controversia laboral mediante consejos anónimos que desconozcan tus documentos.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si tu empleador no cumple',
                'body' => [
                    'El ministerio MTESS es un lugar al que podés preguntar qué orientación corresponde ante un posible incumplimiento laboral por maternidad. Explicá desde el inicio si recibiste un despido, una presión para renunciar o una negativa relacionada con el embarazo. Pedí que te indiquen el canal adecuado para tu situación y qué información necesitan para escucharte.',
                    'Buscá también asesoramiento jurídico individual cuanto antes si hay una decisión sobre tu empleo. Anotá cualquier plazo que te informen en esa consulta, quién lo indicó y a qué actuación corresponde. No uses el período de protección como si fuera un plazo para esperar antes de pedir ayuda: son cuestiones diferentes. Conservá el registro de tus consultas y de cualquier nueva comunicación del empleador.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé reúne derechos relacionados con embarazo y maternidad. Puede ayudarte a identificar el tema de tu consulta; la evaluación de un despido necesita asesoramiento sobre tus documentos.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿El fuero garantiza que nunca puede haber un despido?',
                'a' => 'No permite hacer esa afirmación general. El alcance de la protección y el procedimiento requieren revisar tu caso.'
            ],
            [
                'q' => '¿Puedo consultar si no tengo contrato escrito?',
                'a' => 'Sí, podés pedir orientación explicando cómo trabajás y qué comprobantes o comunicaciones tenés disponibles.'
            ],
            [
                'q' => '¿Sirve consultar si ya firmé un documento?',
                'a' => 'Llevá una copia y explicá las circunstancias para que un profesional evalúe su alcance.'
            ]
        ],
        'related' => [
            'licencia-de-maternidad',
            'permiso-para-controles',
            'hora-de-lactancia'
        ],
        'weeks' => [
            12,
            30
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5508/2015 — protección de la maternidad y apoyo a la lactancia',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre derechos laborales y maternidad — referencia para consulta',
                'publisher' => 'MTESS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'licencia-de-paternidad' => [
        'cluster' => 'derechos',
        'path' => '/derechos/licencia-de-paternidad/',
        'title' => 'Licencia de paternidad en Paraguay: cómo organizarla',
        'seoTitle' => 'Licencia de paternidad en Paraguay',
        'metaDescription' => 'Licencia de paternidad en Paraguay: referencia de dos semanas, aviso al trabajo, documentos habituales y organización del acompañamiento familiar.',
        'kind' => 'legal',
        'lead' => 'La Ley 5508/2015 contempla dos semanas de licencia de paternidad. Para organizarla, el papá necesita conversar con su empleador cómo comunicar el nacimiento, qué constancia presentar y cómo se definirán las fechas de ausencia y regreso. El nacimiento puede no coincidir con la fecha prevista, por eso conviene separar la planificación previa de las fechas que se registren finalmente.',
        'sections' => [
            [
                'h2' => 'Qué tiempo estás organizando',
                'body' => [
                    'La referencia de dos semanas permite empezar a conversar sobre el acompañamiento después del nacimiento. No alcanza por sí sola para resolver cómo se inicia el período en cada situación, qué documentación se acepta o cómo se registra en el trabajo. Si sos el papá, llevá esas preguntas a quien gestiona tus ausencias, en lugar de asumir que se tramita igual que una vacación.',
                    'La fecha probable de parto es una estimación para organizarse, no una confirmación del día del nacimiento. Podés usarla para anticipar tareas y conversar un reemplazo, dejando claro que el aviso definitivo dependerá de lo que ocurra. En casa, esa diferencia también ayuda a no cerrar un plan de apoyo que solo funcione si todo sucede en una fecha exacta.',
                    'Confirmá con tu empleador o el organismo competente los requisitos, eventuales costos de constancias y plazos vigentes.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'A quién avisar y qué dejar conversado',
                'body' => [
                    'Habitualmente el aviso se coordina con el empleador o el área de personal, mientras la organización de tareas se conversa con la persona responsable del equipo. Si son interlocutores distintos, preguntá cómo se compartirán las novedades. Elegí un canal que puedas usar cuando ocurra el nacimiento y guardá la respuesta sobre qué información necesitan recibir.',
                    'Antes de la ausencia, podés preparar un listado de tareas abiertas con su estado y la persona que seguirá cada asunto. Compartí la información laboral necesaria mediante los canales del trabajo; no entregues contraseñas personales para facilitar un reemplazo. Una entrega clara puede reducir llamadas evitables durante el tiempo que querés dedicar al cuidado familiar.',
                    'También conviene preguntar cómo se comunicará la fecha de regreso y qué hacer si aparece una diferencia entre lo previsto y lo registrado. Si recibís una indicación verbal, podés resumirla por escrito y pedir que aclaren cualquier error. El objetivo es que todas las personas involucradas trabajen con los mismos datos.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentación habitual después del nacimiento',
                'body' => [
                    'Para acreditar el motivo de la ausencia suele solicitarse una constancia vinculada al nacimiento y los datos de quien pide la licencia. El documento concreto y el momento de presentación necesitan una indicación del empleador. No confundas una constancia disponible al salir del servicio de salud con todos los documentos que se gestionarán después para el bebé.',
                    'Si todavía no tenés el documento que te pidieron, explicá qué constancia está disponible y preguntá cómo continuar. Conservá una copia de lo que entregues y de la respuesta. Evitá mandar documentación familiar a grupos amplios del trabajo: usá el destinatario indicado para la gestión y preguntá qué datos necesita.',
                    'La tabla ordena preguntas frecuentes al preparar la consulta. No obliga a tramitar documentos adicionales ni reemplaza una lista oficial. Si alguien más va a entregar papeles mientras acompañás a la familia, averiguá primero cómo se admite esa presentación y qué respaldo necesita esa persona.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Dato o documento habitual',
                        'Para qué se consulta',
                        'Qué preguntar'
                    ],
                    'rows' => [
                        [
                            'Identificación del trabajador',
                            'Vincular el pedido laboral',
                            'Qué datos necesitan'
                        ],
                        [
                            'Constancia del nacimiento',
                            'Respaldar el motivo de la ausencia',
                            'Qué documento aceptan'
                        ],
                        [
                            'Aviso enviado',
                            'Ubicar la comunicación',
                            'Quién confirma recepción'
                        ],
                        [
                            'Fechas registradas',
                            'Organizar el regreso',
                            'Cómo se informa una corrección'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cómo repartir el acompañamiento en casa',
                'body' => [
                    'La licencia puede servir para participar en tareas concretas: organizar comidas, atender pendientes de la casa, acompañar traslados y facilitar que la madre descanse. Preguntale qué ayuda necesita y revisen el plan según cómo están. No conviertas la lista en una agenda rígida ni supongas que todas las familias tienen otra persona disponible para colaborar.',
                    'Pueden separar las tareas que necesitan tu presencia de las que otra persona podría hacer con indicaciones sencillas. Por ejemplo, una compra puede delegarse, mientras una conversación sobre cómo se sienten requiere tiempo compartido. Hablar de esas prioridades antes del nacimiento permite pedir apoyos concretos cuando lleguen días más demandantes.',
                    'Coordiná también qué información quieren compartir con familiares y visitas. Ser el contacto para mensajes puede aliviar esa carga si ambos lo acuerdan. La [licencia de maternidad](/derechos/licencia-de-maternidad/) tiene su propia duración y gestión: no asuman que los permisos de ambos terminan juntos ni que una solicitud resuelve la otra.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si el nacimiento cambia el plan inicial',
                'body' => [
                    'Si el bebé nace antes o después de lo previsto, actualizá el aviso al trabajo con la información disponible y pedí que te indiquen cómo quedarán las fechas. Conservá la primera comunicación y la corrección. Si la familia atraviesa una situación que requiere más acompañamiento, planteá esa necesidad y consultá las opciones aplicables sin asumir una extensión automática de la licencia.',
                    'Cuando tengas más de una relación laboral, consultá por separado cómo se gestiona la ausencia en cada una. No copies una autorización de un empleo como si resolviera la organización del otro. Si trabajás por cuenta propia, la planificación de tareas e ingresos necesita otro enfoque; la referencia laboral de dos semanas no confirma por sí sola una prestación económica.',
                    'Para preparar el regreso, revisen quién queda a cargo de los pendientes que venías resolviendo. El [hub de derechos](/derechos/) y la [guía de la embarazada que trabaja](/derechos/derechos-de-la-embarazada-que-trabaja/) pueden ayudar a distinguir el calendario de cada integrante de la familia. La coordinación se vuelve más clara cuando cada ausencia tiene una fecha y un responsable de confirmarla.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si tu empleador no cumple',
                'body' => [
                    'Si te niegan la licencia o las fechas registradas no coinciden con la respuesta que recibiste, podés consultar al ministerio MTESS. Llevá el aviso del nacimiento, la solicitud y las comunicaciones laborales relevantes. Describí si la dificultad está en obtener una respuesta, acreditar el nacimiento o revisar una decisión ya comunicada.',
                    'Si aparecen consecuencias sobre tu salario o tu continuidad, pedí orientación individual con los recibos y documentos disponibles. Una conversación familiar puede ayudarte a ordenar lo ocurrido, pero no reemplaza la evaluación del caso. Anotá las preguntas que no se resolvieron para que la consulta no termine únicamente en repetir que existe una licencia de dos semanas.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Anticipá la coordinación',
                'body' => [
                    'Habitualmente se avisa al empleador que se aproxima el nacimiento y se pregunta por el canal de comunicación.'
                ]
            ],
            [
                'title' => 'Comunicá el nacimiento',
                'body' => [
                    'La gestión suele continuar con la constancia solicitada y la revisión de las fechas de ausencia.'
                ]
            ],
            [
                'title' => 'Revisá el regreso',
                'body' => [
                    'Pedí que la fecha comunicada quede identificada y actualizá tu organización familiar.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé permite compartir el seguimiento familiar mediante un link de WhatsApp cuando usás una cuenta. Podés usar ese seguimiento para conversar el acompañamiento y preparar tus preguntas sobre la licencia.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Cuánto dura la licencia de paternidad?',
                'a' => 'La referencia de la Ley 5508/2015 es de dos semanas; la aplicación se consulta según la relación laboral.'
            ],
            [
                'q' => '¿La fecha probable de parto fija mi ausencia definitiva?',
                'a' => 'No confirma el día del nacimiento. Usala para anticipar la organización y consultá cómo se fijan las fechas reales.'
            ],
            [
                'q' => '¿La licencia de la madre tramita también la del padre?',
                'a' => 'Cada trabajador necesita identificar cómo se gestiona su propia ausencia con su empleador.'
            ]
        ],
        'related' => [
            'licencia-de-maternidad',
            'derechos-de-la-embarazada-que-trabaja',
            'hora-de-lactancia'
        ],
        'weeks' => [
            30,
            38
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5508/2015 — protección de la maternidad y apoyo a la lactancia',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre derechos laborales y maternidad — referencia para consulta',
                'publisher' => 'MTESS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'gratuidad-mspbs-y-tekopora' => [
        'cluster' => 'derechos',
        'path' => '/derechos/gratuidad-mspbs-y-tekopora/',
        'title' => 'Gratuidad MSPBS y Tekoporã durante el embarazo',
        'seoTitle' => 'Gratuidad MSPBS y Tekoporã durante el embarazo',
        'metaDescription' => 'Gratuidad MSPBS y Tekoporã: distinguí la atención de salud del apoyo social y prepará preguntas sobre cobertura, documentos y acceso durante el embarazo.',
        'kind' => 'legal',
        'lead' => 'La Ley 5099/2013 establece la referencia de gratuidad del MSPBS. Eso no confirma que cada estudio esté disponible donde consultás. Si buscás apoyo mediante Tekoporã, necesitás consultar por separado sus condiciones actuales de acceso: el embarazo no debe tomarse como una confirmación de ingreso al programa. Organizá la consulta de salud y la de apoyo social como gestiones diferentes.',
        'sections' => [
            [
                'h2' => 'Gratuidad y disponibilidad son preguntas distintas',
                'body' => [
                    'La gratuidad del MSPBS es la referencia legal para conversar sobre la atención en sus servicios. La disponibilidad es una pregunta concreta sobre el lugar: si realiza el estudio que necesitás, cómo se consigue turno y qué recorrido indican cuando allí no se puede resolver. Una respuesta sobre falta de cupos no explica por sí sola todo el alcance de la gratuidad.',
                    'Llevá la indicación que recibiste y preguntá dónde se realiza esa atención dentro de la red que te indiquen. Anotá si la respuesta se refiere al turno, a un insumo o a una prestación distinta. Eso ayuda a evitar un viaje sin saber qué vas a poder gestionar y a pedir una aclaración cuando te ofrecen alternativas que no entendés.',
                    'Confirmá con el servicio y el programa los requisitos, eventuales costos y plazos vigentes de cada gestión.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué preguntar antes de pagar algo',
                'body' => [
                    'Si te mencionan un cobro, pedí que identifiquen el concepto y quién lo solicita. No es lo mismo recibir una indicación médica que una explicación administrativa del pago. Consultá cómo se relaciona ese concepto con la atención solicitada y pedí información sobre las alternativas disponibles. Guardá cualquier presupuesto o comprobante que te entreguen sin atribuirle un alcance que todavía no está aclarado.',
                    'La referencia del MSPBS no se traslada automáticamente a un prestador privado ni define todas las condiciones de IPS. Si alguien te deriva a otro lugar, preguntá qué parte de la gestión corresponde al servicio de origen y qué tenés que consultar al destino. Una derivación puede requerir aclaraciones sobre turnos y documentación; no asumas que significa una reserva ya hecha.',
                    'Cuando compares opciones, incluí el traslado y la posibilidad real de asistir, además de cualquier importe que te hayan informado. No suspendas una atención necesaria por una discusión administrativa: pedí ayuda al equipo para resolver cómo acceder y mantené separada la consulta sobre cobros.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Tekoporã: cómo preparar la consulta de apoyo social',
                'body' => [
                    'Si tu pregunta es por Tekoporã, empezá por describir la situación de tu hogar y preguntar por las condiciones actuales del programa. No cuentes un ingreso esperado como si ya estuviera aprobado. Una consulta inicial, una entrega de documentos y una respuesta sobre acceso son momentos que conviene distinguir para entender qué gestión está efectivamente en curso.',
                    'Habitualmente, una consulta de apoyo social busca aclarar la composición del hogar, su situación y los datos necesarios para evaluar el pedido. Podés preparar esa información sin convertir una lista general en un requisito confirmado. Preguntá quién recibe la solicitud, cómo se identifica el canal oficial y qué constancia te permite reconocer una presentación realizada.',
                    'Si otra familia te contó cómo accedió, usá esa experiencia para formular preguntas, no para copiar una condición o un monto. Las circunstancias del hogar y la información vigente pueden ser diferentes. Si ya realizaste una consulta, explicá cuándo y qué respuesta obtuviste para que no parezca un pedido completamente nuevo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentos habituales para ordenar ambas consultas',
                'body' => [
                    'En salud suele ser útil llevar tu identificación y la indicación o constancia que explica la atención solicitada. Para una consulta social, habitualmente se pregunta por datos del hogar y documentación que permita respaldarlos. Antes de tramitar certificados nuevos, pedí una lista concreta y averiguá en qué formato deben presentarse. La tabla sirve para ordenar lo disponible, sin afirmar requisitos del programa.',
                    'Separá los papeles de salud de los antecedentes del hogar. Así podés mostrar lo que corresponde a cada conversación sin entregar información que no te solicitaron. Revisá que los nombres sean legibles y que las copias coincidan con los originales. Si falta algún dato, preguntá cómo continuar la consulta mientras lo conseguís.',
                    'Si una persona te ayuda con la gestión, acordá qué información necesitás compartir y para qué. Verificá el destinatario antes de enviar documentos por mensaje. No entregues claves ni códigos de acceso a alguien que prometa resolver la inscripción; pedí orientación por el canal oficial que logres identificar.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Consulta',
                        'Información que suele ayudar',
                        'Pregunta pendiente'
                    ],
                    'rows' => [
                        [
                            'Atención de salud',
                            'Identificación e indicación recibida',
                            'Dónde y cómo acceder'
                        ],
                        [
                            'Apoyo social',
                            'Datos del hogar disponibles',
                            'Qué requisitos se aplican'
                        ],
                        [
                            'Seguimiento',
                            'Constancia de una presentación previa',
                            'Qué estado tiene la gestión'
                        ],
                        [
                            'Cobro informado',
                            'Concepto y comprobante disponible',
                            'A qué prestación corresponde'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cómo seguir una respuesta pendiente',
                'body' => [
                    'Al terminar una consulta, anotá qué te dijeron que hagas después y quién debe responder. Si te derivan, pedí que expliquen el motivo y el dato que necesitás llevar. En el siguiente contacto, mencioná esa derivación para no volver a contar toda la historia desde cero. Una referencia clara también ayuda si distintas personas te dan instrucciones que parecen incompatibles.',
                    'Para una gestión social pendiente, distinguí entre falta de documentación y falta de una decisión. Preguntá cuál de esas situaciones corresponde, sin suponer que el silencio significa aprobación o rechazo. Si cambia un dato del hogar mientras esperás, consultá cómo informarlo y guardá la respuesta sobre esa actualización.',
                    'Si tu dificultad es salir del trabajo para asistir a un control, leé [permiso para controles prenatales](/derechos/permiso-para-controles/). Si lo que necesitás es entender ingresos durante el reposo, revisá [subsidio de maternidad IPS](/derechos/subsidio-de-maternidad-ips/). El [hub de derechos](/derechos/) te ayuda a distinguir esas cuestiones laborales de la atención de salud y de la consulta social.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si tu empleador no cumple',
                'body' => [
                    'Cuando el obstáculo involucre al trabajo, por ejemplo una negativa a coordinar un permiso prenatal, podés preguntar al ministerio MTESS qué orientación corresponde. Llevá la solicitud y la respuesta laboral, explicando por qué necesitabas ausentarte. La consulta debe describir el problema con el empleador sin mezclarlo con una decisión sobre acceso a un programa social.',
                    'Si la dificultad está en la atención del MSPBS o en una gestión de Tekoporã, preguntá por el canal de consulta del servicio o programa respectivo. Identificá qué respuesta falta y conservá cualquier constancia. No presentes al MTESS como quien decide la cobertura de salud o el ingreso al programa: la orientación laboral y esas gestiones tienen objetos diferentes.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Ubicá tu necesidad',
                'body' => [
                    'La consulta suele empezar por distinguir atención de salud, cobro informado o apoyo social.'
                ]
            ],
            [
                'title' => 'Preguntá por el canal y la documentación',
                'body' => [
                    'Habitualmente el servicio o programa indica qué datos necesita para orientar la gestión.'
                ]
            ],
            [
                'title' => 'Conservá la respuesta',
                'body' => [
                    'Anotá el siguiente paso y la referencia de presentación, si te la entregan.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé reúne guías de embarazo y un apartado de derechos. Podés usar esas lecturas para separar tus preguntas sobre atención, trabajo y organización familiar antes de consultar.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Gratuidad significa que siempre hay turno disponible?',
                'a' => 'No confirma disponibilidad. Preguntá dónde se realiza la atención y cómo se accede al turno.'
            ],
            [
                'q' => '¿Estar embarazada confirma el acceso a Tekoporã?',
                'a' => 'No debe tomarse como una confirmación. Las condiciones actuales de acceso necesitan una consulta específica.'
            ],
            [
                'q' => '¿La gratuidad del MSPBS cubre cualquier estudio privado?',
                'a' => 'No se puede extender esa referencia automáticamente a prestadores privados. Consultá la cobertura del servicio concreto.'
            ]
        ],
        'related' => [
            'permiso-para-controles',
            'subsidio-de-maternidad-ips',
            'derechos-de-la-embarazada-que-trabaja'
        ],
        'weeks' => [
            12,
            20
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5099/2013 — gratuidad de la atención en servicios del MSPBS',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Información institucional sobre gratuidad y acceso a servicios de salud — referencia para consulta',
                'publisher' => 'MSPBS',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Tekoporã: información pública del programa — requisitos pendientes de consulta',
                'publisher' => 'Programa Tekoporã',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre permisos laborales — referencia para consulta',
                'publisher' => 'MTESS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'derechos-de-la-embarazada-que-trabaja' => [
        'cluster' => 'derechos',
        'path' => '/derechos/derechos-de-la-embarazada-que-trabaja/',
        'title' => 'Derechos de la embarazada que trabaja en Paraguay',
        'seoTitle' => 'Derechos de la embarazada que trabaja',
        'metaDescription' => 'Derechos de la embarazada que trabaja: permisos prenatales, licencia, subsidio IPS, lactancia y protección laboral para preparar tus consultas.',
        'kind' => 'legal',
        'lead' => 'Si estás embarazada y trabajás en Paraguay, los temas principales son el permiso para controles, la licencia de maternidad, el subsidio según tu cobertura, los descansos de lactancia y la protección laboral. La Ley 5508/2015 contempla 18 semanas de licencia y la Ley 7383/2024 hasta cuatro horas remuneradas para controles. Organizá cada consulta por separado: una autorización de ausencia no confirma un pago.',
        'sections' => [
            [
                'h2' => 'Empezá por tu situación laboral',
                'body' => [
                    'Para entender cómo se gestionan tus derechos, identificá con quién tenés la relación laboral, quién registra tus ausencias y qué información conocés sobre tus aportes. Si no tenés todos esos datos, podés empezar por pedirlos. Una trabajadora con varios empleos, alguien que trabaja por cuenta propia y una persona con un único empleador pueden necesitar consultas diferentes aunque estén en la misma semana de embarazo.',
                    'Habitualmente la organización de permisos y licencia se conversa con el empleador o personal, mientras las dudas sobre prestaciones se consultan con la entidad correspondiente. Evitá dar por resuelto un asunto porque otra persona contestó uno parecido. Anotá quién puede aclarar cada tema y cuál fue la última respuesta que recibiste.',
                    'Confirmá con el empleador y los organismos correspondientes los requisitos, eventuales costos y plazos vigentes para tu caso.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Durante el embarazo: aviso y controles',
                'body' => [
                    'Si vas a comunicar el embarazo al trabajo, prepará qué necesitás coordinar y preguntá por la constancia que corresponde presentar. Podés mantener el mensaje centrado en lo laboral: los próximos controles, la persona que recibirá tus avisos y cualquier documentación solicitada. La forma y los efectos de esa comunicación necesitan orientación según tu situación; no supongas un procedimiento único para todos los empleos.',
                    'El [permiso para controles prenatales](/derechos/permiso-para-controles/) tiene una referencia de hasta cuatro horas remuneradas. La frecuencia y la forma de acreditar la ausencia deben aclararse en la consulta. Conservá el turno, el aviso y la constancia que te entreguen, de modo que después puedas relacionar cada ausencia con su respuesta.',
                    'Si tu equipo de salud indica reposo o plantea una necesidad relacionada con tus tareas, pedí que te expliquen qué documentación laboral corresponde. Esa situación es distinta de un permiso para asistir a un control. Describirla con precisión ayuda a evitar que una ausencia termine registrada bajo un motivo que no coincide con lo ocurrido.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Al acercarse el nacimiento: licencia y subsidio',
                'body' => [
                    'La [licencia de maternidad](/derechos/licencia-de-maternidad/) tiene una duración general documentada de 18 semanas, con extensión a 24 en los casos previstos. Para organizarla, separá la fecha probable de parto de las fechas comunicadas para tu trámite. La primera ayuda a planificar; las demás necesitan identificarse como inicio de la ausencia, reposo o regreso, según corresponda.',
                    'El [subsidio de maternidad IPS](/derechos/subsidio-de-maternidad-ips/) es la pregunta económica. La referencia disponible contempla el 100 % y al menos cuatro meses de aportes, sujetos a requisitos. El porcentaje no permite deducir por sí solo el importe final: necesitás conocer la base de cálculo y el período reconocido. Tampoco una licencia coordinada confirma cuándo recibirás el pago.',
                    'Podés armar una carpeta laboral y otra de consultas sobre la prestación. En la primera, guardá avisos y fechas; en la segunda, antecedentes de aportes y respuestas sobre el trámite. Si recibís instrucciones contradictorias, presentá ambas y pedí que aclaren qué dato debe usarse y para qué gestión.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Después del nacimiento: lactancia y acompañamiento',
                'body' => [
                    'Antes de volver al trabajo, conversá sobre los [descansos de lactancia](/derechos/hora-de-lactancia/). La Ley 5508/2015 contempla referencias de 90 o 60 minutos según las condiciones aplicables. Para organizar la jornada hace falta aclarar duración y modalidad: no alcanza con acordar informalmente que habrá una pausa si nadie sabe cómo se cubrirán las tareas mientras tanto.',
                    'La [licencia de paternidad](/derechos/licencia-de-paternidad/) tiene una referencia de dos semanas. Si otra persona de la familia va a solicitarla, necesita coordinar su propia ausencia con su empleador. En casa pueden repartir acompañamiento, compras y pendientes sin asumir que los permisos de ambos empiezan o terminan juntos.',
                    'Para dudas sobre acceso a atención o apoyo social, revisá [gratuidad MSPBS y Tekoporã](/derechos/gratuidad-mspbs-y-tekopora/). Esas consultas son distintas de la licencia y el subsidio laboral. Separarlas permite identificar si falta una respuesta sobre el trabajo, sobre una prestación o sobre el servicio donde querés atenderte.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Una tabla para llevar a la próxima conversación',
                'body' => [
                    'Elegí el asunto que necesitás resolver ahora y prepará sus antecedentes. No hace falta plantear todo el embarazo en una única reunión. Si ya tenés un turno próximo, podés empezar por su permiso; si estás organizando el regreso, el horario y la lactancia pueden ser el centro de la consulta. La tabla sirve como agenda, sin reemplazar los requisitos particulares.',
                    'Al recibir una respuesta, marcá qué quedó resuelto y qué necesita otra persona o documento. Una frase como “está todo en trámite” puede dejar dudas sobre asuntos muy diferentes. Pedí que distingan la ausencia laboral, los datos enviados y cualquier respuesta sobre pago. Ese detalle ayuda a hacer el seguimiento sin repetir una solicitud que ya presentaste.',
                    'Revisá tu registro cuando cambien fechas o condiciones del trabajo. Conservá las versiones anteriores, porque explican por qué habías organizado algo de otra manera. El [hub de derechos](/derechos/) reúne las guías para volver al tema concreto cuando aparezca una nueva pregunta.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Tema',
                        'Qué preparar',
                        'Qué respuesta buscar'
                    ],
                    'rows' => [
                        [
                            'Controles',
                            'Turno y jornada',
                            'Cómo registrar la ausencia'
                        ],
                        [
                            'Licencia',
                            'Fecha probable de parto y constancias',
                            'Fechas del trámite laboral'
                        ],
                        [
                            'Subsidio',
                            'Antecedentes de aportes',
                            'Requisitos y cálculo aplicable'
                        ],
                        [
                            'Lactancia',
                            'Horario de regreso',
                            'Duración y modalidad'
                        ],
                        [
                            'Continuidad laboral',
                            'Contrato y comunicaciones',
                            'Orientación sobre el caso'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Si tu empleador no cumple',
                'body' => [
                    'Si recibís una negativa, un descuento que no entendés o una comunicación que afecta tu continuidad laboral, podés pedir orientación al ministerio MTESS. Llevá un resumen del problema y los documentos relacionados, sin mezclar preguntas resueltas con la decisión que querés revisar. Pedí que te indiquen el canal adecuado y qué información adicional necesitan.',
                    'La guía de [fuero maternal y despido](/derechos/fuero-maternal-y-despido/) explica cómo ordenar los antecedentes para una consulta individual. Si te presionan para renunciar o firmar un acuerdo, buscá asesoramiento jurídico cuanto antes y pedí una copia del texto. La protección por maternidad tiene una referencia de hasta un año, pero su alcance y los pasos ante un conflicto requieren revisar tu situación concreta.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Identificá la pregunta actual',
                'body' => [
                    'La coordinación suele empezar por un tema concreto: control, licencia, prestación o regreso.'
                ]
            ],
            [
                'title' => 'Reuní los antecedentes pertinentes',
                'body' => [
                    'Habitualmente se consulta con constancias, fechas y comunicaciones vinculadas a ese tema.'
                ]
            ],
            [
                'title' => 'Separá las respuestas pendientes',
                'body' => [
                    'Registrá quién debe aclarar cada asunto y qué documentación te solicitaron.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye una guía para la embarazada que trabaja y un apartado de derechos con cálculo de fechas de licencia. Podés pasar de esta lectura al seguimiento de tu embarazo para preparar las preguntas que siguen pendientes.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Licencia y subsidio son lo mismo?',
                'a' => 'No. La licencia es la ausencia laboral; el subsidio es la prestación económica, con sus propios requisitos.'
            ],
            [
                'q' => '¿Qué derecho conviene consultar primero?',
                'a' => 'Empezá por la necesidad más próxima y tu situación laboral: un control, la preparación de la licencia o el regreso.'
            ],
            [
                'q' => '¿Puedo usar el trámite de una compañera como referencia?',
                'a' => 'Puede ayudarte a formular preguntas, pero no confirma tu régimen, requisitos ni fechas.'
            ],
            [
                'q' => '¿Dónde puedo preguntar si recibo una negativa laboral?',
                'a' => 'Podés consultar al MTESS sobre el canal de orientación para tu caso, con el pedido y la respuesta a mano.'
            ]
        ],
        'related' => [
            'licencia-de-maternidad',
            'subsidio-de-maternidad-ips',
            'permiso-para-controles',
            'hora-de-lactancia',
            'fuero-maternal-y-despido',
            'licencia-de-paternidad',
            'gratuidad-mspbs-y-tekopora'
        ],
        'weeks' => [
            12,
            20,
            30,
            38
        ],
        'appGuideSlug' => 'derechos-embarazada-que-trabaja',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5508/2015 — protección de la maternidad y apoyo a la lactancia',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Ley 7383/2024 — permiso remunerado para controles prenatales',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Subsidio por reposo de maternidad: requisitos y trámite',
                'publisher' => 'Instituto de Previsión Social (IPS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre derechos laborales y maternidad — referencia para consulta',
                'publisher' => 'MTESS',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Derechos de la embarazada que trabaja: guía de Mi Bebé',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
];
