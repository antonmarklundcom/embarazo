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
    'carne-perinatal' => [
        'cluster' => 'tramites',
        'path' => '/tramites/carne-perinatal/',
        'title' => 'Carné perinatal: para qué sirve y cómo organizarlo',
        'seoTitle' => 'Carné perinatal: uso y documentos',
        'metaDescription' => 'Conocé para qué sirve el carné perinatal, qué datos suele reunir y cómo llevarlo a tus controles o preparar un cambio de lugar de atención.',
        'kind' => 'procedural',
        'lead' => 'El carné perinatal reúne información del embarazo para acompañar tus controles y facilitar que el equipo de salud conozca tus antecedentes. Suele iniciarse en la atención prenatal y actualizarse durante las consultas. Llevá el carné que ya tengas, junto con estudios e informes, cuando cambies de profesional o vayas al lugar del parto. Pedí que te expliquen los datos que no entendés.',
        'sections' => [
            [
                'h2' => 'Qué información reúne y por qué llevarlo',
                'body' => [
                    'El carné permite seguir el embarazo a lo largo de distintas consultas. Habitualmente reúne antecedentes de salud, información del embarazo actual y registros de controles. Su utilidad está en poder leer esa historia en conjunto: un resultado aislado dice menos que un resultado acompañado por su fecha y por lo que el equipo observá en la consulta. No necesitás aprender abreviaturas médicas para usarlo bien; sí saber dónde está y llevarlo cuando te atiendas.',
                    'Puede contener datos como la fecha probable de parto, mediciones realizadas y estudios solicitados. Que una casilla está vacía no permite concluir que falta una atención: preguntá si ese apartado corresponde a tu situación. Tampoco interpretes colores o marcas como un diagnóstico. Si algo te preocupa, señalá el dato concreto para que el profesional lo explique con tu historia clínica a mano.',
                    'Confirmá con el lugar de atención los requisitos, costos y plazos vigentes para la entrega o reposición del carné.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo pedirlo en el control prenatal',
                'body' => [
                    'Cuando consultes por un turno, comentá si es tu primer control de este embarazo o si ya empezaste el seguimiento en otro lugar. Si todavía no tenés carné, podés preguntar cómo se inicia allí el registro. Habitualmente el equipo que hace el control completa la información clínica; vos podés aportar tus antecedentes y los documentos que conservás. Explicá también si recordás un estudio pero no tenés el informe.',
                    'Prepará preguntas sobre alergias, tratamientos actuales, embarazos anteriores y problemas de salud que te hayan diagnosticado. Llevá anotados los nombres de los medicamentos que usás para poder conversarlos sin depender de la memoria. Esa lista sirve para la consulta, no para cambiar un tratamiento por tu cuenta. Al terminar, ubicá con el equipo las indicaciones y el próximo paso del seguimiento.',
                    'Si aún estás definiendo dónde atenderte, revisá la [comparación de control prenatal con IPS o privado](/tramites/control-prenatal-ips-vs-privado/). El lugar elegido puede cambiar, pero conservar la información ayuda a darle continuidad al cuidado.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Papeles que suelen acompañar al carné',
                'body' => [
                    'Para preparar la carpeta, separá identificación, registro del embarazo y resultados. Habitualmente se solicita algún documento para identificar a la paciente y se revisan antecedentes disponibles. No hace falta producir una historia perfecta antes de pedir atención: indicá qué información tenés y cuál falta. La tabla reúne documentos habituales por confirmar, para que puedas preguntar por cada uno sin asumir que todos son obligatorios.',
                    'Guardá los informes completos, con el nombre de la paciente y la fecha visibles. Si conservás imágenes de una ecografía, buscá también el informe escrito. Una foto borrosa de una hoja puede dificultar la lectura de un resultado, así que revisá que se vea entero antes de depender de ella. Mantené juntos los estudios relacionados, sin recortar ni separar su identificación.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Identificación de la paciente',
                            'Vincular el registro con tus datos',
                            'Nombre y datos legibles'
                        ],
                        [
                            'Carné anterior, si existe',
                            'Continuar el seguimiento',
                            'Anotaciones completas'
                        ],
                        [
                            'Informes de estudios',
                            'Revisar antecedentes clínicos',
                            'Fecha e identificación'
                        ],
                        [
                            'Indicaciones previas',
                            'Reconocer asuntos pendientes',
                            'Profesional y consulta de origen'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cómo revisar el registro después de cada consulta',
                'body' => [
                    'Antes de guardar el carné, verificá tus datos personales y preguntá dónde quedaron anotadas las indicaciones. Si detectás un nombre o una fecha que no coincide con lo que te dijeron, mostralo al equipo para que revise el registro. Evitá corregir resultados o fechas clínicas por tu cuenta: una modificación sin explicación puede confundir a quien te atienda después.',
                    'Podés llevar una hoja aparte con preguntas que surjan entre controles. Por ejemplo: qué estudio está pendiente, dónde se interpreta el resultado o qué hacer si no conseguís el turno indicado. Esa hoja personal puede acompañar al carné sin mezclarse con las anotaciones profesionales. Al recibir un resultado, no asumas que ya fue revisado solo porque lo agregaste a la carpeta; consultá cómo hacerlo llegar al equipo.',
                    'Ante [señales de alarma](/salud/senales-de-alarma/), buscá atención sin esperar a completar papeles. El carné ayuda a comunicar información, pero no debe convertirse en una razón para postergar una consulta urgente.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué hacer si cambiás de centro o perdés el carné',
                'body' => [
                    'Para un cambio de atención, reuní el carné, los informes y las indicaciones que ya recibiste. Contá cuándo fue tu último control y qué quedó pendiente. Habitualmente el nuevo equipo revisa esos antecedentes para organizar la continuidad. Pedí que te expliquen qué información necesitan recuperar del lugar anterior y cómo solicitarla; no des por hecho que los registros se comparten automáticamente entre servicios.',
                    'Si lo perdiste, anotá dónde hiciste los controles y qué estudios recordás. Contactá al lugar que llevaba el seguimiento para preguntar cómo recuperar antecedentes o iniciar un registro de reemplazo. Distinguí lo que recordás de lo que está documentado: una fecha aproximada puede orientar una búsqueda, pero conviene identificarla como aproximada. Si aparecen luego los papeles originales, llevalos para que el equipo pueda compararlos.',
                    'Para preparar la llegada del bebé, dejá la carpeta en un lugar fácil de encontrar y avisale a quien te acompaña. En el [hub de trámites](/tramites/) podés revisar las gestiones de cobertura y nacimiento sin mezclarlas con el registro clínico.',
                    'Para leer una indicación, ubicá primero a qué consulta pertenece y si describe algo ya realizado o algo que falta hacer. Podés pedir al profesional que te muestre esa diferencia en el propio registro. Por ejemplo, una solicitud de análisis y el resultado de ese análisis son momentos distintos. Mantenerlos identificados evita que al cambiar de equipo parezca pendiente un estudio que ya hiciste, o realizado uno que solo fue indicado.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Ubicá el registro',
                'body' => [
                    'Buscá el carné o preguntá en tu lugar de control cómo iniciarlo.'
                ]
            ],
            [
                'title' => 'Reuní antecedentes',
                'body' => [
                    'Agrupá informes e indicaciones y señalá qué información falta recuperar.'
                ]
            ],
            [
                'title' => 'Revisalo con el equipo',
                'body' => [
                    'Consultá las anotaciones que no entendés y el siguiente paso del seguimiento.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye herramientas de carné y resumen prenatal. Podés explorar esas opciones para acompañar tu organización y llevar tus preguntas al control.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿El carné reemplaza los informes de estudios?',
                'a' => 'Conviene llevar también los informes disponibles: pueden contener detalles que no figuran en el resumen del carné.'
            ],
            [
                'q' => '¿Puedo llevarlo si me atiendo en otro lugar?',
                'a' => 'Sí, llevá tus antecedentes para que el nuevo equipo pueda revisarlos y organizar el seguimiento.'
            ],
            [
                'q' => '¿Qué hago si una anotación está equivocada?',
                'a' => 'Mostrala al equipo que te atiende para que revise el dato; evitá modificar información clínica por tu cuenta.'
            ]
        ],
        'related' => [
            'control-prenatal-ips-vs-privado',
            'inscribirse-en-ips-embarazada'
        ],
        'weeks' => [
            8,
            20,
            32
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Guía vigente de control prenatal del MSPBS',
                'publisher' => 'MSPBS',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'inscribirse-en-ips-embarazada' => [
        'cluster' => 'tramites',
        'path' => '/tramites/inscribirse-en-ips-embarazada/',
        'title' => 'Inscribirse en IPS embarazada: cómo empezar',
        'seoTitle' => 'Inscribirse en IPS durante el embarazo',
        'metaDescription' => 'Organizá tu consulta sobre inscripción en IPS durante el embarazo: cobertura, documentos habituales y pasos para revisar tu situación de aportes.',
        'kind' => 'procedural',
        'lead' => 'Para consultar una inscripción en IPS durante el embarazo, empezá por identificar tu situación de afiliación y bajo qué régimen podrías tener cobertura. Estar embarazada no permite deducir por sí solo cuál es el trámite que te corresponde. Habitualmente necesitás distinguir una inscripción inicial, una actualización de datos y una consulta de cobertura. Con esa respuesta, podés preparar los documentos y preguntar cómo acceder al control prenatal.',
        'sections' => [
            [
                'h2' => 'Identificá qué gestión necesitás',
                'body' => [
                    'La palabra inscripción puede usarse para situaciones distintas. Quizás empezaste un empleo y querés saber si figurás registrada; tal vez ya tenés antecedentes de aportes o estás consultando por una modalidad de cobertura familiar. Describí tu situación con tus propias palabras antes de pedir una lista de papeles. Habitualmente, identificar el régimen y el estado del registro permite orientar la consulta hacia la gestión adecuada.',
                    'Preguntá qué dato necesitan para localizarte y cómo podés conocer el estado de tu afiliación. Si te responden que ya aparecés en el sistema, averiguá qué significa ese estado para la atención que buscás. Un registro encontrado y una prestación habilitada son preguntas diferentes. Anotá la respuesta con el nombre exacto de la gestión, para que una próxima consulta no vuelva a empezar desde cero.',
                    'Confirmá con IPS los requisitos, costos y plazos vigentes para tu modalidad de inscripción y atención.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si trabajás, prepará tu historia de aportes',
                'body' => [
                    'Podés reunir los comprobantes laborales que ya tengas y ordenar los cambios de empleo que sean relevantes. Habitualmente, quien lleva personal o liquidación de salarios ayuda a identificar la información comunicada por el empleador. Pedí que distingan lo que ya presentaron de lo que todavía está pendiente. Si hubo un error en tus datos, señalá cuál es y preguntá quién debe gestionar la corrección.',
                    'Una constancia de descuento puede servirte para formular una consulta, pero no resuelve por sí sola todas las condiciones de cobertura. Si lo que te informa el trabajo no coincide con la respuesta de IPS, conservá ambas referencias y explicá la diferencia concreta. Por ejemplo, si se refieren a períodos distintos o si tu nombre figura de otra manera. Evitá completar formularios con datos supuestos para acelerar una presentación.',
                    'Si no tenés empleador, explicá esa situación desde el inicio. La experiencia de una amiga con otro tipo de afiliación no determina qué modalidad existe para vos ni qué prestaciones incluye.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentación habitual para preparar la consulta',
                'body' => [
                    'Suelen revisarse documentos de identidad y antecedentes que permitan ubicar la relación laboral o el vínculo invocado para la cobertura. La documentación concreta depende de la modalidad. Antes de conseguir certificados nuevos, armá una lista de lo que ya tenés y anotá qué papel te pidieron expresamente. La tabla es una preparación de documentos habituales por confirmar, no una orden de reunir todo lo que aparece.',
                    'Revisá nombres, apellidos y datos de identificación entre los documentos. Si hay una diferencia, llevá la pregunta escrita y conservá las versiones disponibles. Cuando entregues algo, pedí una referencia de la presentación y anotá qué queda pendiente. Guardá los originales de manera que puedas ubicarlos sin mezclar esta gestión con la carpeta médica del embarazo.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Identificación',
                            'Localizar tus datos',
                            'Coincidencia de nombres'
                        ],
                        [
                            'Antecedentes laborales disponibles',
                            'Consultar registro y aportes',
                            'Períodos y empleador'
                        ],
                        [
                            'Constancias del vínculo invocado',
                            'Consultar una modalidad familiar',
                            'Qué vínculo debe acreditarse'
                        ],
                        [
                            'Referencia de una gestión previa',
                            'Retomar una consulta',
                            'Observación pendiente'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'De la afiliación al primer control',
                'body' => [
                    'Una vez que te expliquen tu situación, preguntá cómo se organiza el acceso a la consulta prenatal en tu caso. Habitualmente el trámite administrativo y la asignación de atención tienen pasos propios. Averiguá qué constancia presentar al solicitar el turno y qué hacer si todavía falta resolver un dato. Contá si ya venís haciendo controles para que puedan orientarte sobre la continuidad.',
                    'Para la consulta clínica, llevá el [carné perinatal](/tramites/carne-perinatal/) y los estudios que tengas. El equipo de salud puede revisar esos antecedentes y explicarte el seguimiento. No suspendas por tu cuenta una atención ya indicada mientras organizás la cobertura. Si aparecen [señales de alarma](/salud/senales-de-alarma/), buscá atención de inmediato; la organización de papeles no debe retrasarla.',
                    'También podés preparar preguntas sobre cómo recibir resultados y dónde consultar indicaciones. Saber que existe una posibilidad de cobertura no responde todavía cómo vas a trasladarte, qué turno podés usar o quién dará continuidad a los estudios.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Separá atención médica y subsidio de maternidad',
                'body' => [
                    'Consultar por inscripción durante el embarazo no equivale a solicitar un pago. La atención prenatal y el [subsidio de maternidad](/derechos/subsidio-de-maternidad-ips/) son asuntos diferentes. Si te interesa conocer ambos, prepará preguntas separadas: una sobre acceso a prestaciones de salud y otra sobre condiciones del beneficio económico. Así evitás interpretar una respuesta sobre aportes como confirmación de cualquier prestación.',
                    'Para dar seguimiento, anotá el estado que te comunicaron: consulta realizada, documentación presentada, observación pendiente o respuesta recibida. Esas palabras son una forma personal de ordenar el proceso, no estados oficiales que deban aparecer en un sistema. Si falta una corrección, identificá el dato observado, quién puede aportarlo y por qué canal se entrega. No hace falta volver a presentar todo sin saber qué problema intentás resolver.',
                    'Si una respuesta sigue siendo confusa, resumí tu caso en un párrafo: situación laboral, gestión solicitada, documentos entregados y pregunta pendiente. Esa síntesis permite explicar el problema sin reenviar información sensible innecesaria. El [hub de trámites](/tramites/) reúne las guías para seguir organizando controles y documentos del nacimiento.',
                    'Si te piden volver con información del empleador, solicitá una descripción concreta del dato faltante. Puede ser más útil preguntar qué período deben revisar que llevar otra vez todos los recibos. Al retomar la consulta, mencioná la referencia anterior y explicá qué información nueva aportás. Guardá también la respuesta sobre el siguiente paso, para distinguir una corrección del registro de la posterior coordinación del turno prenatal que necesitás.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Describí tu situación',
                'body' => [
                    'Explicá si consultás por primera inscripción, cambio de datos o cobertura.'
                ]
            ],
            [
                'title' => 'Separá lo presentado de lo pendiente',
                'body' => [
                    'Pedí al trabajo, si corresponde, la referencia de la gestión que ya hizo.'
                ]
            ],
            [
                'title' => 'Consultá el acceso al control',
                'body' => [
                    'Preguntá cómo continuar con la atención prenatal según la respuesta sobre afiliación.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé reúne seguimiento por semanas y una guía de control prenatal con IPS o atención privada. Podés usar esa información para preparar tus preguntas sobre el seguimiento.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿El embarazo confirma que tengo cobertura?',
                'a' => 'No alcanza para determinar tu modalidad ni las prestaciones. Empezá por consultar tu situación de afiliación.'
            ],
            [
                'q' => '¿La inscripción y el subsidio son el mismo trámite?',
                'a' => 'Son asuntos distintos: separá tus preguntas sobre atención médica de las relacionadas con una prestación económica.'
            ],
            [
                'q' => '¿Qué pasa si cambié de empleo?',
                'a' => 'Prepará los antecedentes disponibles y explicá el cambio para consultar qué actualización corresponde.'
            ]
        ],
        'related' => [
            'carne-perinatal',
            'control-prenatal-ips-vs-privado'
        ],
        'weeks' => [
            8,
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
                'title' => 'Orientación vigente sobre afiliación y prestaciones',
                'publisher' => 'Instituto de Previsión Social (IPS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Guía vigente de control prenatal del MSPBS',
                'publisher' => 'MSPBS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'control-prenatal-ips-vs-privado' => [
        'cluster' => 'tramites',
        'path' => '/tramites/control-prenatal-ips-vs-privado/',
        'title' => 'Control prenatal IPS o privado: cómo comparar',
        'seoTitle' => 'Control prenatal: IPS o privado',
        'metaDescription' => 'Compará IPS y atención privada para el control prenatal según cobertura, continuidad, traslados y estudios, con preguntas para decidir informada.',
        'kind' => 'procedural',
        'lead' => 'Para elegir entre control prenatal con IPS o atención privada, compará tu cobertura concreta, la continuidad del equipo, los traslados y cómo se coordinan consultas y estudios. Ninguna opción puede evaluarse solo por el precio o por una experiencia ajena. Pedí información sobre lo que incluye cada alternativa y pensá cómo sostener el seguimiento durante el embarazo y al acercarse el parto.',
        'sections' => [
            [
                'h2' => 'Compará el recorrido completo de atención',
                'body' => [
                    'Empezá por describir lo que necesitás: iniciar controles, continuar con un embarazo ya seguido o cambiar de lugar de atención. Después mirá el recorrido completo, desde pedir un turno hasta recibir la interpretación de los estudios. Una consulta disponible puede ser útil, pero también necesitás saber cómo continúa el seguimiento. La distancia, los horarios y quién puede acompañarte influyen en una elección que puedas sostener.',
                    'En IPS, la conversación suele empezar por tu situación de cobertura. En el ámbito privado, suele incluir honorarios o condiciones de un plan, si lo tenés. En ambos casos, preguntá cómo se coordinan las consultas y qué pasa cuando el profesional habitual no está disponible. No deduzcas la calidad del cuidado a partir del nombre del servicio, de la decoración o del precio informado.',
                    'Confirmá con cada prestador los requisitos, costos y plazos vigentes de las prestaciones que estás comparando.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué preguntar sobre cobertura y presupuesto',
                'body' => [
                    'Pedí que separen consulta, estudios, revisión de resultados y atención del nacimiento. Habitualmente una respuesta general sobre cobertura necesita aclararse para cada prestación. Si te ofrecen un presupuesto o un plan, revisá qué incluye y qué queda aparte. Guardá la respuesta para comparar conceptos equivalentes; un importe de consulta aislada no puede compararse directamente con una propuesta que reúne varios servicios.',
                    'Podés hacer una hoja con los gastos que ya conocés y dejar en blanco los que faltan. Sumá traslados, acompañamiento y tiempo fuera del trabajo como aspectos de tu organización, sin convertir estimaciones en cargos del prestador. Si vas a combinar lugares, preguntá cómo reciben órdenes e informes emitidos por otro equipo. No supongas que una indicación será aceptada automáticamente en cualquier servicio.',
                    'Si todavía necesitás aclarar tu afiliación, empezá por [inscribirse en IPS durante el embarazo](/tramites/inscribirse-en-ips-embarazada/). Resolver esa pregunta te permite comparar una posibilidad concreta de atención, en lugar de una cobertura que todavía no sabés si te corresponde.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Aspecto',
                        'IPS: pregunta para tu caso',
                        'Atención privada: pregunta para tu caso'
                    ],
                    'rows' => [
                        [
                            'Acceso',
                            '¿Qué cobertura tengo habilitada?',
                            '¿Cómo se abona o qué plan se acepta?'
                        ],
                        [
                            'Consultas y estudios',
                            '¿Cómo se coordinan las prestaciones?',
                            '¿Qué incluye cada presupuesto?'
                        ],
                        [
                            'Resultados',
                            '¿Quién revisa los informes?',
                            '¿Cómo se organiza su revisión?'
                        ],
                        [
                            'Continuidad',
                            '¿Cómo sigue el control si cambia el equipo?',
                            '¿Quién continúa la atención si falta el profesional?'
                        ],
                        [
                            'Nacimiento',
                            '¿Cómo se orienta la atención del parto?',
                            '¿Qué condiciones se informan para el parto?'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Documentos para iniciar o trasladar el seguimiento',
                'body' => [
                    'Habitualmente se revisan la identificación, los antecedentes del embarazo y, según la modalidad, una constancia de cobertura. La tabla enumera documentos usuales por confirmar. Al pasar de un servicio a otro, llevá el [carné perinatal](/tramites/carne-perinatal/) y los informes completos para que el nuevo equipo conozca lo realizado. Explicá qué estudios están pedidos, cuáles ya hiciste y cuáles esperan interpretación.',
                    'Ordená la información por consulta o por tipo de estudio, de la forma que te resulte fácil encontrarla. Si tenés solamente una imagen en el teléfono, revisá que se pueda leer el informe y su fecha. Preguntá al nuevo profesional qué antecedentes necesita recuperar antes de repetir una prueba; la necesidad clínica de un estudio debe conversarse con quien te atiende.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Identificación personal',
                            'Abrir o localizar el registro',
                            'Datos coincidentes'
                        ],
                        [
                            'Constancia de cobertura, si corresponde',
                            'Consultar prestaciones',
                            'Modalidad informada'
                        ],
                        [
                            'Carné e informes previos',
                            'Continuar el cuidado',
                            'Resultados e indicaciones'
                        ],
                        [
                            'órdenes pendientes',
                            'Revisar próximos estudios',
                            'Qué falta realizar'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Qué tiene que sostener el control prenatal',
                'body' => [
                    'El control prenatal permite conversar sobre tu salud, seguir la evolución del embarazo y detectar situaciones que necesitan evaluación. Suele incluir revisión de antecedentes, síntomas, mediciones y estudios según el momento del embarazo y tu situación. También es un espacio para preguntar sobre alimentación, actividad, vacunas y preparación para el nacimiento. El contenido del cuidado importa tanto como la posibilidad de conseguir una consulta.',
                    'Durante la visita, contá cambios que te preocupan y preguntá qué significa cada indicación. Al salir, debería quedarte claro qué sigue: un estudio, una nueva consulta o una evaluación por otro equipo. Si recibís una orden sin entender su propósito, pedí una explicación. Más pruebas no significan por sí solas mejor seguimiento, y una lista de estudios no reemplaza una conversación clínica.',
                    'Revisá las [señales de alarma](/salud/senales-de-alarma/) para reconocer cuándo buscar atención urgente. Ante síntomas de alarma, no esperes una comparación de presupuestos ni el próximo turno habitual para consultar.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo decidir sin perder continuidad',
                'body' => [
                    'Podés comparar cada opción con las mismas preguntas: dónde serán los controles, cómo se reciben resultados, qué ocurre si necesitás una derivación y cómo se prepara la atención del parto. Habitualmente esos detalles se coordinan con el equipo o el servicio de atención. Anotá lo que te respondieron y lo que sigue sin resolver. Una respuesta pendiente merece una nueva pregunta, no una suposición favorable o desfavorable.',
                    'Si decidís cambiar, buscá dejar claro quién continuará el seguimiento y qué información necesita. Si usás más de un servicio, contales a los profesionales qué atención recibís en el otro. Eso ayuda a revisar indicaciones en conjunto y a evitar que cada consulta parta de una historia incompleta. Conservá las órdenes y aclaraciones sin modificar tratamientos por tu cuenta.',
                    'La decisión puede cambiar si se modifica tu cobertura, tu lugar de residencia o una necesidad de salud. Volvé a revisar los mismos criterios cuando eso ocurra. No hace falta defender una elección pasada si dejá de servirte: lo importante es organizar el siguiente control y llevar la información necesaria. En el [hub de trámites](/tramites/) encontrás las guías de documentos para acompañar ese cambio.',
                    'Para comparar disponibilidad, describí tu necesidad con el mismo detalle en ambos lugares: si es una primera consulta, si llevás estudios o si necesitás continuar una indicación. Preguntá también quién recibe dudas entre visitas y cómo se comunican cambios de turno. Esas respuestas permiten planificar el cuidado cotidiano sin atribuir ventajas generales a un sistema. Una alternativa puede ajustarse a tus horarios y otra requerir apoyo para los traslados.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Definí tus necesidades',
                'body' => [
                    'Anotá dónde vivís, qué seguimiento ya tenés y qué cobertura conocés.'
                ]
            ],
            [
                'title' => 'Pedí información comparable',
                'body' => [
                    'Separá consultas, estudios, revisión de resultados y atención del nacimiento.'
                ]
            ],
            [
                'title' => 'Coordiná la continuidad',
                'body' => [
                    'Llevá los antecedentes y preguntá quién revisará las indicaciones pendientes.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye una guía de control prenatal con IPS o atención privada y seguimiento por semanas. Podés volver a esos temas mientras preparás preguntas para tu equipo.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿IPS o privado es siempre mejor?',
                'a' => 'La comparación depende de tu cobertura, necesidades y acceso concreto. Evaluá continuidad, coordinación y condiciones de cada alternativa.'
            ],
            [
                'q' => '¿Puedo consultar en más de un lugar?',
                'a' => 'Si recibís atención en distintos servicios, informales a los equipos y llevá tus antecedentes para coordinar indicaciones.'
            ],
            [
                'q' => '¿Una consulta incluye todos los estudios?',
                'a' => 'No lo deduzcas de un precio o una respuesta general. Pedí el detalle de cada prestación.'
            ]
        ],
        'related' => [
            'carne-perinatal',
            'inscribirse-en-ips-embarazada'
        ],
        'weeks' => [
            8,
            20,
            32
        ],
        'appGuideSlug' => 'control-prenatal-ips-vs-privado',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Orientación vigente sobre prestaciones de salud',
                'publisher' => 'Instituto de Previsión Social (IPS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Guía de control prenatal IPS o privado',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'certificado-de-nacido-vivo' => [
        'cluster' => 'tramites',
        'path' => '/tramites/certificado-de-nacido-vivo/',
        'title' => 'Certificado de nacido vivo: cómo prepararlo',
        'seoTitle' => 'Certificado de nacido vivo: qué revisar',
        'metaDescription' => 'Conocé para qué sirve el certificado de nacido vivo, qué datos revisar al recibirlo y cómo preparar los documentos para la inscripción del bebé.',
        'kind' => 'procedural',
        'lead' => 'El certificado de nacido vivo documenta el nacimiento y suele servir como antecedente para la inscripción del bebé. Habitualmente la familia consulta por su emisión en el lugar donde ocurrió el parto. Antes de guardarlo, revisá los datos de identificación y del nacimiento con quien lo entrega. Es distinto del documento que recibís al inscribir el nacimiento y de la cédula del bebé.',
        'sections' => [
            [
                'h2' => 'Qué documento estás pidiendo',
                'body' => [
                    'Después del parto podés recibir varios papeles con información parecida: indicaciones de alta, resultados, constancias y documentación para trámites. Pedí que te indiquen cuál corresponde al certificado de nacido vivo y cuál es la función de cada hoja. Habitualmente ese certificado permite llevar información del nacimiento a la gestión de inscripción. Identificarlo por su nombre evita presentar un resumen clínico como si fuera el documento solicitado.',
                    'La persona que acompaña puede ayudarte a ubicar los papeles, pero conviene acordar quién los conservará al volver a casa. Separá la documentación administrativa de las indicaciones de cuidado, manteniendo ambas accesibles. Si un documento todavía no está disponible al momento de salir, anotá exactamente qué falta y a quién se consulta por su entrega.',
                    'Confirmá con el servicio emisor y la oficina receptora los requisitos, costos y plazos vigentes para tu caso.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo consultar por la emisión',
                'body' => [
                    'Habitualmente se empieza preguntando en el establecimiento donde se atendió el nacimiento. Explicá si necesitás la primera entrega, corregir un dato o recuperar un documento que no encontrás. Son situaciones distintas y pueden requerir una orientación diferente. Si alguien más va a retirar documentación, preguntá qué identificación o autorización suele solicitarse para esa persona antes de organizar el viaje.',
                    'Si el nacimiento ocurrió fuera de un establecimiento, describí esa circunstancia al servicio de salud y a la oficina que recibe la inscripción. Preguntá qué antecedentes necesitan y quién puede emitir la constancia correspondiente. No adaptes por tu cuenta un procedimiento pensado para otra situación ni completes información clínica de memoria. Conservá los papeles disponibles para que te expliquen cuáles sirven como antecedentes.',
                    'Para ver cómo encaja este documento en el conjunto, leé la guía de [trámites después del nacimiento](/tramites/despues-del-nacimiento/). La idea es saber qué gestión depende de qué papel, sin confundir emisión, inscripción e identificación.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentos habituales y datos para localizarlo',
                'body' => [
                    'Suelen pedirse datos que permitan identificar a la madre y ubicar la atención del nacimiento. Podés preparar la documentación personal disponible y las referencias de la atención recibida. La tabla reúne antecedentes habituales por confirmar: no significa que todos deban presentarse ni que un papel clínico reemplace el certificado. Si falta un documento de identidad, explicalo para recibir una indicación aplicable a esa situación.',
                    'Al consultar, usá los datos tal como figuran en los documentos que tenés. Si existen diferencias de apellidos o de identificación entre registros, mostrálas juntas. Eso permite preguntar dónde se originó la diferencia y quién puede revisarla. Evitá entregar el único original de un antecedente sin entender para qué lo necesitan y cómo queda registrada su recepción.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Identificación de la madre',
                            'Relacionar la emisión con la atención',
                            'Datos legibles'
                        ],
                        [
                            'Referencia de la atención del parto',
                            'Localizar antecedentes',
                            'Lugar y datos disponibles'
                        ],
                        [
                            'Identificación de quien retira',
                            'Consultar entrega a otra persona',
                            'Autorización que soliciten'
                        ],
                        [
                            'Documento con el dato observado',
                            'Pedir revisión de una diferencia',
                            'Conservar la versión recibida'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Qué revisar cuando te lo entregan',
                'body' => [
                    'Leé los datos personales y del nacimiento antes de usar el certificado para otra gestión. Revisá que corresponda a tu familia y que la información se pueda leer completa. Si algo no coincide con lo ocurrido o con la documentación personal, señalalo en el momento y preguntá cómo se revisa. No taches, sobrescribas ni agregues datos por tu cuenta: una corrección informal puede crear nuevas dudas en la inscripción.',
                    'Si no entendés una casilla, preguntá qué representa antes de asumir que está equivocada. También podés pedir que te indiquen cómo reconocer que el documento está completo para su uso previsto. Las firmas, validaciones o formatos aceptados dependen del procedimiento; llevá esa pregunta al emisor cuando te expliquen la entrega.',
                    'Guardá una copia legible como referencia personal y conservá el documento recibido protegido de humedad y roturas. Una foto puede ayudarte a encontrar un dato durante una llamada, pero no demuestra que ese formato sea aceptado para hacer el trámite. Preguntá qué debés presentar antes de salir.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo sigue la inscripción y qué hacer ante un problema',
                'body' => [
                    'Con el certificado identificado, podés preparar la [inscripción en el Registro Civil](/tramites/inscripcion-en-el-registro-civil/). Habitualmente la oficina receptora orienta sobre la documentación del nacimiento y de las personas que deben intervenir. No des por terminada la inscripción por haber recibido el certificado: pedí que te expliquen qué presentación sigue y qué documento obtendrás al completarla.',
                    'Si el certificado se perdió, empezá por informar la pérdida al lugar que lo emitió y preguntá cómo se gestiona una nueva constancia o recuperación. Evitá hacer varias solicitudes sin mencionar las anteriores. Si hay un error, guardá una descripción breve del dato observado y de la respuesta recibida. El objetivo es resolver la diferencia antes de trasladarla a otros documentos del bebé.',
                    'Si todavía no te entregaron nada, separá la pregunta sobre emisión de la pregunta sobre atención médica. Las indicaciones de cuidado de la madre y del bebé deben quedar claras aunque haya un papel administrativo pendiente. Podés pedir ayuda para seguir la gestión mientras vos te concentrás en la recuperación. El [hub de trámites](/tramites/) permite ubicar las siguientes guías sin mezclar sus documentos.',
                    'Si recibís el certificado dentro de un sobre con otros papeles, identificá su contenido antes de archivarlo. Podés dejar una nota por fuera que diga qué documento contiene y dónde se usará. Si te indican conservar el sobre cerrado para una presentación, seguí esa indicación y preguntá cómo revisar los datos por otra vía. La organización debe facilitar la entrega sin alterar las condiciones en que te pidieron conservar el documento.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Preguntá cuál es el certificado',
                'body' => [
                    'Identificá el documento destinado a acreditar el nacimiento entre los papeles de alta.'
                ]
            ],
            [
                'title' => 'Revisá lo recibido',
                'body' => [
                    'Compará los datos con la documentación familiar y señalá diferencias al emisor.'
                ]
            ],
            [
                'title' => 'Prepará la inscripción',
                'body' => [
                    'Consultá qué presentar junto con el certificado para registrar el nacimiento.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye una guía de trámites después del nacimiento. Podés consultarla para ubicar las gestiones que siguen al parto y preparar preguntas sobre tus documentos.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Es lo mismo que la inscripción del nacimiento?',
                'a' => 'No. El certificado suele ser un antecedente para gestionar la inscripción; identificá qué documento corresponde a cada etapa.'
            ],
            [
                'q' => '¿Puedo corregir un apellido a mano?',
                'a' => 'Pedí que el emisor revise el dato y te indique el procedimiento de corrección. No lo modifiques por tu cuenta.'
            ],
            [
                'q' => '¿Qué hago si el parto fue fuera de un establecimiento?',
                'a' => 'Explicá esa circunstancia al servicio de salud y a la oficina receptora para preguntar qué antecedentes y constancia corresponden.'
            ]
        ],
        'related' => [
            'inscripcion-en-el-registro-civil',
            'despues-del-nacimiento'
        ],
        'weeks' => [],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Orientación vigente del MSPBS sobre documentación del nacimiento',
                'publisher' => 'MSPBS',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Guía de trámites después del nacimiento',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'inscripcion-en-el-registro-civil' => [
        'cluster' => 'tramites',
        'path' => '/tramites/inscripcion-en-el-registro-civil/',
        'title' => 'Inscripción del nacimiento en el Registro Civil',
        'seoTitle' => 'Inscripción del nacimiento: Registro Civil',
        'metaDescription' => 'Prepará la inscripción del nacimiento: documentos habituales, datos del bebé y preguntas sobre quién debe presentarse y cómo revisar la constancia.',
        'kind' => 'procedural',
        'lead' => 'La inscripción del nacimiento permite registrar los datos del bebé y obtener la documentación correspondiente a ese registro. Habitualmente se prepara con el certificado de nacido vivo y la identificación de quienes intervienen. Antes de organizar la visita, consultá qué oficina recibe tu caso y quién debe presentarse. Revisá nombres y apellidos con atención: recibir el certificado del parto no equivale a haber inscripto el nacimiento.',
        'sections' => [
            [
                'h2' => 'Qué resuelve la inscripción',
                'body' => [
                    'Registrar el nacimiento es una gestión distinta de documentar la atención del parto. El [certificado de nacido vivo](/tramites/certificado-de-nacido-vivo/) suele aportar el antecedente del nacimiento; la inscripción deja asentados los datos en el registro correspondiente. Cuando consultes, usá el nombre de la gestión completa y explicá si se trata de una primera inscripción o de corregir un registro que ya existe.',
                    'Habitualmente una persona de la familia organiza los documentos y consulta cómo hacer la presentación. Eso no determina quién está habilitado para declarar o firmar en tu situación. Preguntá por la intervención que corresponde a cada persona antes de organizar permisos laborales o traslados. Si alguien no puede asistir, describí el motivo y pedí orientación sobre el procedimiento aplicable.',
                    'Confirmá con la oficina receptora los requisitos, costos y plazos vigentes para la inscripción de tu bebé.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Prepará los datos antes de la visita',
                'body' => [
                    'Revisá cómo están escritos los nombres y apellidos en la documentación disponible. Podés hacer una hoja personal con los datos que querés preguntar, sin convertirla en un formulario oficial. Prestá atención a letras, orden de apellidos y diferencias entre documentos. Si encontrás una discrepancia, señalala con claridad; copiar un error para que todos los papeles coincidan puede dificultar su corrección posterior.',
                    'La situación familiar también puede modificar qué información necesita revisar la oficina. Si hay documentos emitidos en otro país, falta de identificación o dudas sobre filiación, explicalo desde el primer contacto. Habitualmente esos casos requieren una orientación específica. No uses una experiencia ajena como confirmación de quién puede presentarse, qué apellido corresponde o qué documento reemplaza a otro.',
                    'Para preparar la conversación, formulá preguntas separadas: qué documentos presentar, quién debe intervenir y qué información necesita aclaración. Así podés reconocer si una respuesta resuelve todo el caso o solo una parte de la consulta.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentos que suelen pedirse',
                'body' => [
                    'El certificado del nacimiento y los documentos de identidad de quienes intervienen suelen formar parte de la preparación. Según la situación, pueden pedir antecedentes adicionales sobre vínculos o datos registrales. La tabla enumera documentos habituales por confirmar; no presupone una composición familiar ni obliga a conseguir papeles que no corresponden a tu caso. Anotá el nombre exacto de cualquier documento adicional que te indiquen.',
                    'Mantené los originales separados de las copias para evitar entregas por confusión. Si un documento presenta una diferencia, llevá también el antecedente que permite explicarla. Preguntá si primero debe revisarse en su lugar de emisión. Cuando te indiquen un formato o una validación particular, registrá a qué documento se refiere, porque una instrucción para una hoja puede no aplicarse a todas.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Certificado de nacido vivo',
                            'Aportar el antecedente del nacimiento',
                            'Datos y formato recibido'
                        ],
                        [
                            'Identificación de quienes intervienen',
                            'Acreditar datos personales',
                            'Nombre y documento'
                        ],
                        [
                            'Antecedentes familiares, si corresponden',
                            'Aclarar vínculos o datos registrales',
                            'Cuáles solicitan para tu caso'
                        ],
                        [
                            'Referencia de una consulta previa',
                            'Retomar una observación',
                            'Qué quedó pendiente'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Durante la presentación y al recibir la constancia',
                'body' => [
                    'Habitualmente la presentación incluye revisar documentación y declarar o confirmar datos del nacimiento. Escuchá qué información te piden y pedí que te expliquen cualquier término que no entendés. Si te muestran un texto para revisar, comparalo con los antecedentes disponibles antes de darlo por correcto. No completes un dato incierto por presión de terminar la visita; explicá qué falta aclarar.',
                    'Al recibir el documento resultante, verificá que corresponda a tu bebé y revisá sus datos personales. Preguntá qué acredita esa constancia y para qué gestiones suele utilizarse. Guardá una referencia de la inscripción que te permita identificarla después. Si detectás una diferencia, consultá cómo se solicita la revisión y conservá lo recibido sin tachaduras ni enmiendas propias.',
                    'Puede ser útil que otra persona lea los datos con vos, si participa de la gestión. Esa segunda lectura ayuda a detectar errores de transcripción sencillos. Compartí solo la información necesaria para esa ayuda y mantené los documentos personales fuera de conversaciones o grupos que no intervienen en el trámite.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si falta un papel o la inscripción tiene una observación',
                'body' => [
                    'Una observación suele requerir entender qué dato o antecedente necesita revisión. Pedí una explicación concreta: cuál es el documento observado, qué diferencia encontraron y dónde se puede resolver. Anotá si la indicación se refiere al certificado del nacimiento, a la identidad de una persona o a la declaración que se presenta. Con esa distinción evitás consultar en varios lugares sin saber qué estás buscando.',
                    'Si pasó tiempo desde el nacimiento y todavía no se hizo la inscripción, explicalo tal como ocurrió. Preguntá qué procedimiento corresponde a esa situación; no supongas que dejá de ser posible ni que basta con seguir una lista pensada para otro momento. Si el caso involucra una controversia sobre filiación o representación, buscá orientación jurídica individual con los antecedentes ordenados.',
                    'Una vez aclarado el registro, podés preparar la [cédula del bebé](/tramites/cedula-del-bebe/). También te sirve revisar [después del nacimiento](/tramites/despues-del-nacimiento/) para coordinar cobertura y comunicaciones laborales. Conservá el documento de inscripción identificado por su nombre, de modo que puedas ubicarlo cuando otra gestión lo pida y distinguirlo del certificado emitido por el lugar del parto.',
                    'Antes de retirarte, preguntá cómo se solicita otra constancia de la inscripción si más adelante una gestión la necesita. Anotá la referencia que te indiquen y guardala junto al documento recibido. Eso no implica pedir copias adicionales sin necesidad: te permite saber dónde empezar una consulta futura. También conviene distinguir una solicitud de copia de una corrección del registro, porque obtener otra impresión no resuelve por sí solo un dato equivocado.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Consultá quién interviene',
                'body' => [
                    'Describí tu situación familiar y preguntá quién debe presentarse.'
                ]
            ],
            [
                'title' => 'Compará los datos',
                'body' => [
                    'Revisá el certificado y los documentos personales antes de la visita.'
                ]
            ],
            [
                'title' => 'Revisá el resultado',
                'body' => [
                    'Leé la constancia entregada y preguntá cómo resolver cualquier diferencia.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'La guía de Mi Bebé sobre trámites después del nacimiento permite repasar las gestiones de esta etapa. Usala para preparar las preguntas que vas a llevar a la oficina.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿El certificado de nacido vivo ya inscribe al bebé?',
                'a' => 'No equivale a la inscripción. Preguntá qué presentación corresponde para registrar el nacimiento.'
            ],
            [
                'q' => '¿Puede ir cualquier familiar?',
                'a' => 'La organización familiar no determina quién puede declarar o firmar. Consultá la intervención que corresponde a tu caso.'
            ],
            [
                'q' => '¿Qué hago si un apellido no coincide?',
                'a' => 'Mostrá ambos documentos y preguntá dónde debe revisarse la diferencia antes de copiarla en otra gestión.'
            ]
        ],
        'related' => [
            'certificado-de-nacido-vivo',
            'cedula-del-bebe',
            'despues-del-nacimiento'
        ],
        'weeks' => [],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Convención sobre los Derechos del Niño',
                'publisher' => 'Naciones Unidas',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Guía de trámites después del nacimiento',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'cedula-del-bebe' => [
        'cluster' => 'tramites',
        'path' => '/tramites/cedula-del-bebe/',
        'title' => 'Cédula del bebé: documentos y preparación',
        'seoTitle' => 'Cédula del bebé: cómo preparar el trámite',
        'metaDescription' => 'Prepará la primera cédula del bebé con documentos habituales, preguntas sobre su presencia y una revisión de datos para organizar la presentación.',
        'kind' => 'procedural',
        'lead' => 'Para preparar la primera cédula del bebé, empezá por tener identificada la documentación de su inscripción de nacimiento y consultá qué requiere la oficina de identificación para tu caso. Habitualmente se revisan datos del bebé y de la persona que interviene en la solicitud. Preguntá por la presencia del bebé, la modalidad de atención y la entrega antes de organizar la salida.',
        'sections' => [
            [
                'h2' => 'Antes de pedir la cédula',
                'body' => [
                    'La cédula es un documento de identificación; su solicitud es diferente de la [inscripción del nacimiento](/tramites/inscripcion-en-el-registro-civil/). Si todavía no sabés qué constancia recibiste, buscá su nombre y preguntá qué acredita. Habitualmente la preparación de la primera identificación parte de los antecedentes del nacimiento y de los datos de la persona que realiza la gestión. Separar esas etapas ayuda a pedir orientación con precisión.',
                    'Revisá si la documentación del bebé tiene alguna diferencia pendiente. Un apellido escrito de otra forma o un dato incompleto merece una consulta antes de trasladarse a otra solicitud. Conservá el antecedente que recibiste y anotá la duda sin modificarlo. La oficina que tramita la identificación puede orientarte sobre qué documento necesita, mientras que una corrección puede corresponder a quien emitió el registro original.',
                    'Confirmá con la oficina de identificación los requisitos, costos y plazos vigentes de solicitud y entrega.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Organizá la presencia del bebé y de quien lo acompaña',
                'body' => [
                    'Antes de salir, preguntá si el bebé debe estar presente, quién puede intervenir por él y cómo se organiza la atención. Habitualmente estas consultas permiten preparar una visita con la documentación adecuada. No des por hecho que puede ir cualquier familiar ni que una autorización informal sirve para todas las actuaciones. Si hay una situación de representación particular, describila y pedí que te indiquen qué antecedente corresponde presentar.',
                    'Organizá el traslado pensando en las necesidades del bebé y en la recuperación de quien lo cuida. Podés prever alimentación, cambio de pañal y una persona de apoyo, según lo que resulte posible para tu familia. Si la modalidad informada exige volver, diferenciá la visita de solicitud de la de retiro para repartir mejor el acompañamiento. Evitá planificar ambas como si siempre fueran una sola salida.',
                    'Si recibís consejos sobre llevar una fotografía o preparar algún requisito especial, preguntá si eso corresponde al procedimiento actual antes de pagarlo. La forma de obtener la imagen y los datos de identificación es un punto que conviene aclarar directamente con la oficina.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentación habitual para consultar',
                'body' => [
                    'Suele revisarse la documentación del nacimiento, la identificación de quien interviene y, cuando corresponde, antecedentes de representación. Prepará lo disponible y señalá lo que todavía no tenés. La tabla recoge documentos habituales por confirmar; no establece que una constancia particular sea suficiente ni que todas las familias necesiten la misma combinación. Pedí que identifiquen el documento por su nombre para no confundirlo con otro papel del bebé.',
                    'Si un documento está deteriorado o no se puede leer, consultá qué alternativa corresponde. Una copia personal puede servir para encontrar datos, pero no confirma el formato aceptado en la presentación. Guardá en una carpeta los originales que te indiquen y ubicá aparte las copias, así podés reconocer qué entregaste y qué debe volver con vos al terminar.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Documento de inscripción del nacimiento',
                            'Revisar identidad del bebé',
                            'Datos completos'
                        ],
                        [
                            'Identificación de quien solicita',
                            'Identificar a la persona interviniente',
                            'Coincidencia con antecedentes'
                        ],
                        [
                            'Antecedentes de representación, si corresponden',
                            'Consultar quién puede intervenir',
                            'Documento requerido para el caso'
                        ],
                        [
                            'Constancia de solicitud, al retirarla',
                            'Seguir la entrega',
                            'Referencia legible'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cómo revisar la solicitud y seguir la entrega',
                'body' => [
                    'Durante la solicitud, prestá atención a los datos que se registran. Habitualmente se revisa la identidad a partir de los antecedentes presentados; si te piden confirmar un dato, comparalo con esos documentos. Preguntá qué hacer si aparece una diferencia antes de dar por terminada esa etapa. No aceptes una transcripción que sabés equivocada solo para evitar una nueva consulta.',
                    'Cuando te den una referencia de la gestión, guardala en un lugar fácil de encontrar. Anotá qué te dijeron sobre el seguimiento y cómo conocer si el documento está disponible. Una solicitud iniciada no equivale a una entrega lista. Si otra persona va a retirarlo, averiguá qué necesita para hacerlo y compartí con ella solo la información requerida para esa gestión.',
                    'Al recibir la cédula, revisá que los datos correspondan al bebé. Si observás un error, mostralo y preguntá cuál es el procedimiento de revisión. Conservá también la referencia de la solicitud: puede ayudarte a explicar dónde se produjo la diferencia sin depender únicamente de una descripción de memoria.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Usos, cuidados y situaciones especiales',
                'body' => [
                    'Guardá el documento en un lugar protegido y acordá quién lo lleva cuando hace falta. Evitá compartir imágenes completas en grupos familiares amplios o publicaciones: contiene información personal del bebé. Si una institución solicita una copia, identificá para qué gestión la necesita y cuál es el canal de entrega. Tener una foto como respaldo personal no significa que reemplace el documento ante cualquier trámite.',
                    'Si se pierde después de emitido, consultá por reposición y explicá que ya existía una cédula. Eso distingue la situación de una primera solicitud. Si necesitás el documento para otra gestión próxima, contá cuál es, sin suponer que habrá una entrega especial o inmediata. Tampoco des por hecho que la cédula resuelve por sí sola requisitos de viaje o autorizaciones para salir con el bebé.',
                    'Para la cobertura de salud y las comunicaciones al trabajo, preguntá qué constancias aceptan mientras organizás los documentos. Podés revisar [asignación familiar](/tramites/asignacion-familiar/) para separar el beneficio laboral de la identificación. La guía de [trámites después del nacimiento](/tramites/despues-del-nacimiento/) te ayuda a ver qué consultas pueden organizarse juntas y cuáles dependen de un documento anterior.',
                    'Cuando coordinás el retiro con alguien, transmití el nombre de la gestión y la referencia de solicitud tal como te la entregaron. Evitá mandar toda la carpeta de salud para resolver una entrega de identificación. Al regresar, comprobá que el documento recibido y los originales que prestaste vuelvan al lugar acordado.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Consultá la modalidad',
                'body' => [
                    'Preguntá por la presencia del bebé, la persona interviniente y la atención.'
                ]
            ],
            [
                'title' => 'Reuní los antecedentes',
                'body' => [
                    'Prepará la documentación indicada y revisá los datos de inscripción.'
                ]
            ],
            [
                'title' => 'Guardá la referencia',
                'body' => [
                    'Conservá la constancia de solicitud para seguir la entrega y revisar el documento recibido.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé ofrece una guía de trámites después del nacimiento. Podés repasar allí los temas que acompañan la llegada del bebé y preparar tu próxima consulta administrativa.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿La cédula reemplaza la inscripción del nacimiento?',
                'a' => 'Son gestiones distintas. Identificá primero la documentación de inscripción que te pedirán para la solicitud.'
            ],
            [
                'q' => '¿Tengo que llevar una foto?',
                'a' => 'Preguntá cómo se obtiene la imagen en el procedimiento actual antes de encargar fotografías.'
            ],
            [
                'q' => '¿Puede retirar el documento otra persona?',
                'a' => 'Consultá quién puede retirarlo y qué identificación o autorización requiere esa entrega.'
            ]
        ],
        'related' => [
            'inscripcion-en-el-registro-civil',
            'despues-del-nacimiento',
            'asignacion-familiar'
        ],
        'weeks' => [],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Convención sobre los Derechos del Niño',
                'publisher' => 'Naciones Unidas',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Guía de trámites después del nacimiento',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'asignacion-familiar' => [
        'cluster' => 'tramites',
        'path' => '/tramites/asignacion-familiar/',
        'title' => 'Asignación familiar: cómo consultar la bonificación',
        'seoTitle' => 'Asignación familiar: requisitos y consulta',
        'metaDescription' => 'Conocé cómo consultar la bonificación familiar: documentos habituales, base de cálculo y preguntas para revisar la solicitud y el recibo de salario.',
        'kind' => 'procedural',
        'lead' => 'Si buscás información sobre asignación familiar en el trabajo, preguntá por la bonificación familiar y por las condiciones aplicables a tu relación laboral. El Código del Trabajo, artículo 261 y siguientes, contempla una referencia del 5 %. Ese porcentaje solo no permite calcular tu importe: necesitás conocer la base y los requisitos de tu caso. Habitualmente la consulta empieza con quien gestiona personal o salarios.',
        'sections' => [
            [
                'h2' => 'Identificá el beneficio que estás consultando',
                'body' => [
                    'La expresión asignación familiar puede usarse para hablar de ayudas distintas. Si tu consulta nace de un recibo de salario o de una conversación con el empleador, pedí que identifiquen el concepto exacto. La referencia disponible para la bonificación familiar es el Código del Trabajo, artículo 261 y siguientes. Nombrar el concepto permite separar esa consulta de un subsidio por maternidad o de otra prestación para la familia.',
                    'Empezá por explicar tu relación laboral y si ya recibís algún concepto con ese nombre. Si tenés más de una actividad o cambiaste de empleo, contalo antes de calcular un monto esperado. Habitualmente quien liquida salarios puede explicar qué información tiene registrada y qué antecedentes necesita para revisar el caso. No supongas que la situación de una compañera se aplica automáticamente a la tuya.',
                    'Confirmá con quien tramita el beneficio los requisitos, costos y plazos vigentes, y consultá el monto vigente para tu caso.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué significa la referencia del porcentaje',
                'body' => [
                    'El dato del 5 % necesita una base de cálculo para convertirse en una suma de dinero. Pedí que te expliquen qué base utilizan, qué condiciones revisan y cómo aparece el resultado en la liquidación. No lo multipliques por una cantidad de hijos ni por un salario elegido por intuición. Esas condiciones necesitan una respuesta específica antes de armar una expectativa de cobro.',
                    'Podés preparar una hoja con el nombre del concepto, la base informada y el importe comunicado. Si todavía falta un dato, dejalo identificado como pendiente. Eso te permite revisar una explicación sin confundir una estimación personal con una liquidación del empleador. Si la respuesta usa términos que no conocés, preguntá qué significa cada uno y qué documento respalda la información aplicada a tu situación.',
                    'Para el presupuesto familiar, separá los ingresos ya confirmados de los que estás consultando. Un documento entregado no demuestra por sí solo que el beneficio está reconocido ni que vaya a aparecer en el siguiente pago. Preguntá cómo te comunicarán el resultado de la revisión y por qué medio podés seguirla.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Documentos habituales para la solicitud',
                'body' => [
                    'Habitualmente la consulta incluye identificación, documentación que permita acreditar el vínculo familiar y antecedentes laborales. La lista depende de las condiciones que deban revisarse. La tabla muestra documentos usuales por confirmar; usala para preguntar qué corresponde presentar, no para reunir certificados sin una indicación concreta. La [inscripción del nacimiento](/tramites/inscripcion-en-el-registro-civil/) puede ayudarte a ubicar la documentación del bebé que te soliciten.',
                    'Si el documento pedido todavía está en trámite, explicá cuál tenés disponible y preguntá cómo continuar. No afirmes que una foto o el certificado del parto reemplaza cualquier constancia de inscripción. Conservá una referencia de lo que entregaste y de la respuesta sobre documentos pendientes. Si hay datos que no coinciden, describí la diferencia antes de presentar nuevas copias del mismo papel.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Identificación de quien solicita',
                            'Relacionar la consulta con el empleo',
                            'Datos del registro laboral'
                        ],
                        [
                            'Documento del vínculo familiar',
                            'Revisar la condición invocada',
                            'Constancia aceptada'
                        ],
                        [
                            'Recibo de salario disponible',
                            'Identificar concepto y período',
                            'Base e importe informados'
                        ],
                        [
                            'Referencia de presentación',
                            'Seguir la revisión',
                            'Documentos pendientes'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cómo revisar el recibo y una diferencia de importe',
                'body' => [
                    'Cuando recibas una explicación o una liquidación, buscá el nombre del concepto y el período al que corresponde. Compará esa información con lo que te comunicaron al iniciar la consulta. Si aparece un importe distinto del esperado, preguntá primero por la base, las condiciones consideradas y el período reconocido. Así podés identificar una diferencia concreta en lugar de reclamar sobre una suma calculada con supuestos.',
                    'Guardá el recibo y la respuesta que usaste como referencia. Si el beneficio no figura, consultá si falta documentación, si la revisión está pendiente o si te comunicaron que no corresponde. Son explicaciones diferentes y requieren preguntas distintas. Pedí que indiquen el motivo cuando la respuesta sea negativa, para poder entender qué condición están aplicando.',
                    'Si persiste un desacuerdo, reuní contrato o antecedentes laborales disponibles, recibos, documentos presentados y comunicaciones. Con esa información podés buscar orientación jurídica sobre tu caso. Evitá firmar una explicación que no comprendés sin pedir que te aclaren su alcance; ordenar los hechos ayuda a formular una consulta más precisa.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo se relaciona con los demás trámites del nacimiento',
                'body' => [
                    'La bonificación familiar no es lo mismo que la [licencia de maternidad](/derechos/licencia-de-maternidad/) ni que el subsidio durante el reposo. Si gestionás esos temas al mismo tiempo, armá consultas separadas aunque hables con la misma persona del trabajo. Una puede tratar fechas de ausencia, otra condiciones de un pago por maternidad y otra la documentación familiar. Esa separación evita considerar una respuesta general como aprobación de todo.',
                    'También puede ser útil coordinar con quien te acompaña qué documento está disponible y quién guarda cada constancia. No compartas recibos completos con personas que solo necesitan ayudarte a retirar un papel. Para pedir una copia o consultar una entrega, comunicá únicamente los datos necesarios. Conservá en tu carpeta laboral la referencia del documento familiar presentado, de modo que puedas localizarlo después.',
                    'Si cambia una circunstancia que declaraste, preguntá cómo se informa y qué revisión corresponde. No deduzcas por tu cuenta que el importe seguirá igual o que un cambio obliga a devolver una suma. En el [hub de trámites](/tramites/) y en la guía [después del nacimiento](/tramites/despues-del-nacimiento/) podés ordenar las otras gestiones sin mezclarlas con esta consulta laboral.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Nombrá el beneficio',
                'body' => [
                    'Preguntá por bonificación familiar y explicá tu situación laboral.'
                ]
            ],
            [
                'title' => 'Pedí la base de cálculo',
                'body' => [
                    'Revisá condiciones e importe antes de incorporarlo al presupuesto.'
                ]
            ],
            [
                'title' => 'Presentá lo solicitado',
                'body' => [
                    'Guardá constancia de la entrega y preguntá cómo conocer el resultado.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye un apartado de derechos y una guía para la embarazada que trabaja. Podés revisar esos temas para separar preguntas sobre licencia, subsidio y organización familiar.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿El 5 % me dice cuánto voy a cobrar?',
                'a' => 'No por sí solo. Necesitás conocer la base y las condiciones aplicables antes de calcular una suma.'
            ],
            [
                'q' => '¿Es el mismo pago que el subsidio por maternidad?',
                'a' => 'Son conceptos distintos. Consultá por separado el beneficio familiar y el subsidio vinculado al reposo.'
            ],
            [
                'q' => '¿Qué hago si no aparece en el recibo?',
                'a' => 'Preguntá por el estado de la revisión y por el motivo: documentación pendiente, evaluación sin concluir o una respuesta sobre su aplicación.'
            ]
        ],
        'related' => [
            'inscripcion-en-el-registro-civil',
            'despues-del-nacimiento',
            'cedula-del-bebe'
        ],
        'weeks' => [],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Código del Trabajo ¿? artículo 261 y siguientes, bonificación familiar',
                'publisher' => 'Congreso de la Nación Paraguaya',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Guía de derechos de la embarazada que trabaja',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'despues-del-nacimiento' => [
        'cluster' => 'tramites',
        'path' => '/tramites/despues-del-nacimiento/',
        'title' => 'Trámites después del nacimiento: por dónde empezar',
        'seoTitle' => 'Trámites después del nacimiento del bebé',
        'metaDescription' => 'Organizá los trámites después del nacimiento: certificado, inscripción, cédula, cobertura y consultas laborales, con documentos y pasos habituales.',
        'kind' => 'procedural',
        'lead' => 'Después del nacimiento, empezá por identificar los papeles entregados en el lugar del parto y preparar la inscripción del bebé. Habitualmente el certificado de nacido vivo sirve como antecedente para esa inscripción; luego se organiza la identificación. En paralelo, podés consultar la cobertura de salud y comunicar el nacimiento al trabajo. Repartí las gestiones sin confundir documentos administrativos con indicaciones de cuidado.',
        'sections' => [
            [
                'h2' => 'Antes de salir del lugar del parto',
                'body' => [
                    'Pedí que te expliquen cuáles son las indicaciones para la madre y el bebé y cuáles son los documentos destinados a trámites. Habitualmente la familia recibe papeles con funciones diferentes. Separarlos desde el principio ayuda a encontrar una indicación clínica sin revisar toda la carpeta administrativa. Si una persona te acompaña, puede ayudarte a ordenar lo recibido mientras vos repasás las dudas sobre los cuidados y las consultas que siguen.',
                    'Identificá el [certificado de nacido vivo](/tramites/certificado-de-nacido-vivo/) y revisá si hay algún documento pendiente de entrega. Anotá dónde se consulta por ese pendiente y quién puede retirarlo. No asumas que un resumen de alta cumple la misma función que el certificado del nacimiento. Si te entregan información que no entendés, preguntá por el nombre y el uso de cada documento.',
                    'Confirmá con cada oficina o servicio los requisitos, costos y plazos vigentes de la gestión que le corresponde.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'El orden habitual y lo que puede avanzar en paralelo',
                'body' => [
                    'La [inscripción en el Registro Civil](/tramites/inscripcion-en-el-registro-civil/) suele prepararse con la documentación del nacimiento y de las personas que intervienen. Después podés organizar la [cédula del bebé](/tramites/cedula-del-bebe/) según lo que solicite la oficina de identificación. Ese orden orienta la preparación de papeles, pero no indica que debas esperar a tener todos los documentos para hacer consultas sobre las otras gestiones.',
                    'La cobertura de salud y las comunicaciones laborales pueden consultarse en paralelo. Preguntá qué constancia aceptan en cada etapa y explicá si otra documentación todavía está en trámite. Si alguien del trabajo solicita un papel, anotá para qué gestión lo necesita: licencia, actualización de datos familiares o revisión de un beneficio. El mismo nacimiento puede motivar consultas diferentes sin que una presentación resuelva todas.',
                    'Podés dibujar una lista con cada gestión y una flecha hacia el documento que necesita. Si una no avanza, mirá qué antecedente le falta antes de repetir visitas. Esa organización permite pedir ayuda concreta, como consultar una entrega o reunir una copia, en lugar de encargar vagamente todos los trámites.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Armá una carpeta que se pueda usar',
                'body' => [
                    'Prepará separadores para documentos del nacimiento, identificación familiar, cobertura y trabajo. Los papeles clínicos pueden quedar en otra carpeta cercana, con las indicaciones de controles y resultados. La tabla reúne documentos habituales por confirmar en cada gestión; no significa que debas entregar la carpeta completa en todas partes. Llevá lo que te pidieron y mantené accesible lo que permite explicar una diferencia de datos.',
                    'Elegí una forma sencilla de registrar qué salió de la carpeta: documento, destinatario y referencia de entrega. Si hacés copias personales, revisá que están completas y legibles. Guardá los originales protegidos y distinguí una copia para consulta de una constancia aceptada por la oficina. Tener archivos en el teléfono ayuda a ubicar información, pero el formato válido debe quedar claro en cada presentación.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual, a confirmar',
                        'Para qué sirve',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Certificado de nacido vivo',
                            'Preparar la inscripción',
                            'Identificación y datos del nacimiento'
                        ],
                        [
                            'Documentación de inscripción',
                            'Consultar identificación y otras gestiones',
                            'Nombre y apellidos del bebé'
                        ],
                        [
                            'Identificación de personas intervinientes',
                            'Preparar presentaciones',
                            'Quién debe asistir'
                        ],
                        [
                            'Antecedentes de cobertura',
                            'Consultar atención del bebé',
                            'Régimen y titular'
                        ],
                        [
                            'Constancias laborales y de entrega',
                            'Seguir solicitudes al trabajo',
                            'Concepto y respuesta pendiente'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cobertura del bebé y comunicación al trabajo',
                'body' => [
                    'Consultá con el prestador de salud cómo se organiza la atención del bebé y qué gestión administrativa corresponde. Si tu referencia es IPS, la guía de [inscripción y cobertura](/tramites/inscribirse-en-ips-embarazada/) ayuda a preparar preguntas sobre el régimen y los datos registrados; no resuelve por sí sola la incorporación del bebé. Explicá quién tiene cobertura y qué documentación del nacimiento ya está disponible.',
                    'En el trabajo, separá el aviso del nacimiento de una consulta por [asignación familiar](/tramites/asignacion-familiar/). Habitualmente quien gestiona personal orienta sobre las constancias que recibe y el seguimiento de cada solicitud. Si ya tenías una licencia organizada, preguntá cómo comunicar el nacimiento y cualquier diferencia respecto de las fechas previstas. Conservá la respuesta junto a tus antecedentes laborales, sin mezclarla con la información clínica del bebé.',
                    'Para los cuidados y controles, seguí las indicaciones del equipo de salud y preguntá lo que no entendiste antes de irte. Ante [señales de alarma](/salud/senales-de-alarma/), buscá atención urgente. Una inscripción, una constancia o una consulta de cobertura pendiente no debe hacerte postergar esa atención.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Repartí tareas y resolvé pendientes concretos',
                'body' => [
                    'Acordá quién hará las consultas, quién conservará los originales y quién puede acompañar una visita. Esa distribución personal no reemplaza los requisitos sobre quién debe presentarse o firmar. Antes de encargar un retiro, preguntá si la persona elegida puede hacerlo y qué documentación necesita. Así evitás que alguien viaje con una carpeta completa y vuelva sin poder realizar la gestión.',
                    'Usá una lista breve con tres estados personales: por consultar, presentado y respuesta recibida. Anotá también qué falta para el siguiente paso. Una presentación no está necesariamente concluida por haber entregado papeles, y una respuesta puede contener una observación que requiere resolver algo más. Revisá el contenido de la comunicación antes de marcar la gestión como terminada.',
                    'Si encontrás un error en nombres o datos del nacimiento, identificá en qué documento aparece primero y consultá al emisor correspondiente. No copies el dato dudoso en solicitudes nuevas para que coincidan entre sí. Si una situación familiar requiere orientación particular, explicala desde el inicio. Volvé al [hub de trámites](/tramites/) para consultar cada guía por separado: esta lista sirve para coordinar el conjunto, mientras cada artículo desarrolla las preguntas de una etapa.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Identificá lo recibido',
                'body' => [
                    'Separá indicaciones clínicas, certificado del nacimiento y otros documentos.'
                ]
            ],
            [
                'title' => 'Consultá la inscripción',
                'body' => [
                    'Revisá quién debe intervenir y qué antecedentes presentar.'
                ]
            ],
            [
                'title' => 'Coordiná gestiones paralelas',
                'body' => [
                    'Preguntá por cobertura y comunicaciones laborales mientras preparás la identificación.'
                ]
            ],
            [
                'title' => 'Revisá las respuestas',
                'body' => [
                    'Marcá qué quedó concluido y qué observación necesita otra consulta.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye la guía de trámites después del nacimiento. Podés volver a ella para repasar los temas y preparar las preguntas de cada gestión junto con tu familia.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Tengo que terminar todos los trámites antes de consultar por cobertura?',
                'a' => 'Podés preguntar por cobertura mientras preparás otros documentos. Explicá qué tenés disponible y qué está en trámite.'
            ],
            [
                'q' => '¿El certificado y la cédula son el mismo documento?',
                'a' => 'No. El certificado documenta el nacimiento; la inscripción y la identificación son gestiones distintas.'
            ],
            [
                'q' => '¿Puede otra persona encargarse de todo?',
                'a' => 'Puede ayudarte a organizar, pero cada gestión define quién debe intervenir. Consultá antes de delegar una firma o un retiro.'
            ],
            [
                'q' => '¿Qué hago si hay un error en varios papeles?',
                'a' => 'Identificá dónde aparece el dato dudoso y pedí orientación al emisor antes de repetirlo en otra solicitud.'
            ]
        ],
        'related' => [
            'certificado-de-nacido-vivo',
            'inscripcion-en-el-registro-civil',
            'cedula-del-bebe',
            'asignacion-familiar',
            'inscribirse-en-ips-embarazada'
        ],
        'weeks' => [
            36,
            38,
            40
        ],
        'appGuideSlug' => 'despues-del-nacimiento-tramites',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Guía de trámites después del nacimiento',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación vigente del MSPBS sobre atención y documentación del nacimiento',
                'publisher' => 'MSPBS',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Convención sobre los Derechos del Niño',
                'publisher' => 'Naciones Unidas',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'vacunas-en-el-embarazo' => [
        'cluster' => 'salud',
        'path' => '/salud/vacunas-en-el-embarazo/',
        'title' => 'Vacunas en el embarazo: guía para Paraguay',
        'seoTitle' => 'Vacunas en el embarazo: guía para Paraguay',
        'metaDescription' => 'Vacunas en el embarazo en Paraguay: conocé qué protección ofrecen, cómo revisar tu carné y qué preguntar sobre el calendario PAI vigente.',
        'kind' => 'medical',
        'lead' => 'Durante el embarazo se revisan las vacunas contra influenza, tos convulsa, tétanos, difteria y COVID-19 según tus antecedentes y las indicaciones vigentes. Algunas protegen también al bebé mediante anticuerpos que pasan por la placenta. Llevá tu carné y confirmá el esquema actual del PAI con el equipo de salud: el momento y las vacunas que te corresponden dependen de tu historia y de la recomendación local.',
        'sections' => [
            [
                'h2' => 'Por qué revisar las vacunas en el control prenatal',
                'body' => [
                    'El embarazo cambia la respuesta del cuerpo a algunas infecciones. Vacunarte cuando corresponde ayuda a reducir enfermedades que pueden complicar tu salud y el seguimiento del bebé. La protección no es inmediata ni completa para todas las personas, pero puede disminuir el riesgo de cuadros graves. Los anticuerpos maternos también pueden ofrecer protección al recién nacido mientras empieza su propio calendario.',
                    'La revisión parte de lo que ya recibiste, no solamente de la semana en que estás. Llevá registros de otros embarazos, de campañas y de vacunas aplicadas fuera del país si los tenés. Si falta un comprobante, contalo: el equipo puede reconstruir antecedentes y decidir cómo continuar. No hace falta adivinar fechas ni copiar el esquema de una familiar.',
                    'En el [hub de salud](/salud/) encontrás otras preguntas para el control. Vacunas, estudios y medición de presión cumplen funciones distintas; recibir una vacuna no reemplaza el seguimiento prenatal ni evita consultar por un síntoma nuevo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Influenza: protección frente a la gripe',
                'body' => [
                    'La gripe puede causar fiebre, tos, dolores musculares y complicaciones respiratorias durante el embarazo. La vacuna inyectable inactivada contra influenza se utiliza en embarazadas y puede indicarse en cualquier trimestre. Su composición se actualiza para responder a los virus esperados; por eso haber recibido una vacuna en otro momento no resuelve por sí solo la consulta actual.',
                    'Preguntá cuál es la vacuna correspondiente a la campaña vigente y cómo registrarla en tu carné. Si tenés una enfermedad aguda o antecedentes de reacción importante, explicalos antes de la aplicación para que evalúen tu situación. Un resfrío previo no demuestra que ya estés protegida contra influenza, porque distintas infecciones pueden producir molestias parecidas.',
                    'Además de la vacunación, ventilar ambientes y evitar el contacto cercano con personas enfermas ayuda a reducir exposiciones. Si aparece dificultad para respirar, dolor de pecho o decaimiento marcado, buscá atención; no atribuyas automáticamente esos síntomas a una reacción de la vacuna.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Tos convulsa, tétanos y difteria: qué significa dTpa',
                'body' => [
                    'La dTpa reúne componentes contra tétanos, difteria y tos convulsa. La protección frente a tos convulsa interesa especialmente al comienzo de la vida, cuando el bebé todavía está completando sus propias vacunas. La vacunación materna busca favorecer el paso de anticuerpos antes del nacimiento. Por ese motivo, la oportunidad de aplicación dentro del embarazo importa además del antecedente de vacunas anteriores.',
                    'Habitualmente se conversa esta vacuna en la segunda mitad del embarazo. La ventana concreta corresponde al esquema PAI vigente y a la evaluación de tu equipo; pedí que te indiquen la semana en tu registro prenatal. Haber recibido una vacuna antitetánica no confirma que esa aplicación haya incluido el componente contra tos convulsa: revisá el nombre completo.',
                    'La doble bacteriana contra tétanos y difteria puede entrar en la revisión cuando falta completar antecedentes. No es intercambiable sin más con la dTpa para la protección frente a tos convulsa. Si tu carné dice solamente una abreviatura, pedí que la identifiquen antes de dar por resuelto el esquema.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'COVID-19: antecedentes y recomendación vigente',
                'body' => [
                    'Las recomendaciones de vacunación contra COVID-19 consideran la protección frente a enfermedad grave, las aplicaciones previas y las vacunas disponibles. El embarazo es un dato relevante al evaluar riesgos. Contá si tuviste una infección reciente y llevá las fechas de vacunación: ambas cosas pueden influir en la organización del esquema, sin que una infección anterior garantice protección permanente.',
                    'No hay una fecha única que puedas deducir solamente del trimestre. Confirmá con el equipo la indicación vigente para embarazadas y qué presentación corresponde. Si encontrás información de campañas anteriores, revisá su fecha antes de usarla para planificar. Un cambio de recomendación puede responder a nueva evidencia o a cambios en los productos disponibles.',
                    'Si estás con síntomas respiratorios, avisá al servicio antes de concurrir para recibir indicaciones de atención. La consulta por síntomas y la decisión sobre vacunación son conversaciones relacionadas, pero una no sustituye a la otra.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Otras vacunas y situaciones particulares',
                'body' => [
                    'La revisión también puede incluir hepatitis B según antecedentes y riesgo de exposición. Otras vacunas, como la protección materna frente al virus respiratorio sincitial, dependen de indicaciones, incorporación local y ventanas específicas. Preguntá si corresponde evaluarlas en tu caso; su existencia no demuestra que formen parte del calendario disponible en Paraguay para todas las embarazadas.',
                    'Las vacunas vivas atenuadas, como algunas utilizadas contra sarampión, rubéola o varicela, generalmente se planifican fuera del embarazo. Si recibiste una antes de saber que estabas embarazada, comunicá cuál fue y cuándo, para una evaluación individual. Ese antecedente por sí solo no permite sacar conclusiones sobre el bebé.',
                    'Un viaje, una exposición laboral o una enfermedad previa pueden requerir una conversación adicional. Llevá destino, fechas y antecedentes al control. La tabla te ayuda a separar las preguntas sin convertir una orientación general en un calendario personal.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Vacuna o grupo',
                        'Qué revisar con el equipo'
                    ],
                    'rows' => [
                        [
                            'Influenza',
                            'Campaña actual y vacuna inactivada; puede indicarse en cualquier trimestre'
                        ],
                        [
                            'dTpa',
                            'Ventana gestacional vigente y protección frente a tos convulsa'
                        ],
                        [
                            'Tétanos y difteria',
                            'Antecedentes completos y necesidad de completar esquema'
                        ],
                        [
                            'COVID-19',
                            'Aplicaciones previas, infección reciente e indicación actual'
                        ],
                        [
                            'Otras vacunas',
                            'Riesgos individuales e incorporación al esquema local'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Después de la aplicación y registro',
                'body' => [
                    'Podés notar dolor en el brazo o malestar transitorio después de algunas vacunas. Antes de salir, preguntá qué reacciones se esperan, cómo comunicar una molestia y dónde consultar. Dificultad para respirar, desmayo o hinchazón de labios y cara requieren atención inmediata. Revisá [las señales de alarma](/salud/senales-de-alarma/) para reconocer otras situaciones que necesitan evaluación durante el embarazo.',
                    'Guardá la constancia con nombre de vacuna y fecha, y pedí que el registro prenatal quede actualizado. Si cambiás de servicio, llevá esa información. Una anotación clara evita confundir una aplicación realizada con una indicación pendiente y ayuda a coordinar los próximos controles.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Reuní los antecedentes',
                'body' => [
                    'Llevá tu carné de vacunas y registro prenatal, y anotá reacciones previas que quieras conversar.'
                ]
            ],
            [
                'title' => 'Confirmá el calendario personal',
                'body' => [
                    'Pedí que te indiquen qué corresponde ahora y qué queda para otro momento del embarazo o después del nacimiento.'
                ]
            ],
            [
                'title' => 'Conservá la constancia',
                'body' => [
                    'Revisá que la aplicación figure con su nombre y fecha para el próximo control.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé tiene una guía de vacunas y un resumen prenatal. Usalos para preparar tus preguntas y llevá el carné al equipo que confirma tu esquema.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Puedo vacunarme en el primer trimestre?',
                'a' => 'Algunas vacunas, como la influenza inactivada, pueden indicarse en cualquier trimestre. Otras tienen una ventana específica; revisá cada una con tu equipo.'
            ],
            [
                'q' => '¿La antitetánica siempre incluye tos convulsa?',
                'a' => 'No. El nombre y los componentes importan: la dTpa incluye tos convulsa, mientras que otras formulaciones contra tétanos y difteria no.'
            ],
            [
                'q' => '¿Qué hago si perdí mi carné?',
                'a' => 'Contá qué recordás y dónde te vacunaste. El equipo evaluará cómo recuperar antecedentes y organizar el esquema sin inventar fechas.'
            ]
        ],
        'related' => [
            'senales-de-alarma',
            'dengue-en-el-embarazo'
        ],
        'weeks' => [
            12,
            20,
            28,
            32
        ],
        'appGuideSlug' => 'vacunas-en-el-embarazo-pai',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre vacunación durante el embarazo',
                'publisher' => 'Programa Ampliado de Inmunizaciones (PAI), MSPBS',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'dengue-en-el-embarazo' => [
        'cluster' => 'salud',
        'path' => '/salud/dengue-en-el-embarazo/',
        'title' => 'Dengue, zika y chikungunya en el embarazo',
        'seoTitle' => 'Dengue, zika y chikungunya en el embarazo',
        'metaDescription' => 'Dengue, zika y chikungunya en el embarazo: cómo prevenir picaduras, eliminar criaderos y reconocer síntomas que necesitan atención médica.',
        'kind' => 'medical',
        'lead' => 'Si estás embarazada y tenés fiebre, dolor de cuerpo o una erupción, consultá sin demora e informá tu embarazo. Dengue, zika y chikungunya pueden parecerse y necesitan evaluación. Para prevenirlos, combiná repelente usado según su etiqueta, ropa que cubra la piel, mosquiteros y eliminación de agua acumulada. Dolor abdominal fuerte, sangrado, vómitos persistentes o dificultad para respirar requieren atención urgente.',
        'sections' => [
            [
                'h2' => 'Tres infecciones que pueden parecerse',
                'body' => [
                    'Dengue, zika y chikungunya se transmiten principalmente por mosquitos Aedes. La fiebre, los dolores y las manchas en la piel pueden aparecer en más de una de estas infecciones. No es posible distinguirlas con seguridad por una foto de la erupción o por el relato de alguien del barrio. La evaluación toma en cuenta tus síntomas, su comienzo y la circulación local.',
                    'Durante el embarazo, el dengue puede requerir vigilancia estrecha porque puede complicar la salud materna. El zika merece atención por su posible efecto sobre el desarrollo del bebé. El chikungunya suele provocar dolor articular importante y tiene consideraciones especiales cerca del nacimiento. Tener síntomas compatibles no significa que alguna de estas complicaciones vaya a ocurrir, pero sí justifica una consulta oportuna.',
                    'Al comunicarte, explicá de cuántas semanas estás, desde cuándo te sentís mal y si hubo viajes o personas enfermas en tu entorno. Si ya te evaluaron, llevá los resultados y las indicaciones recibidas. La información del [hub de salud](/salud/) puede ayudarte con otras dudas del seguimiento prenatal.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Repelente: usarlo de manera que proteja',
                'body' => [
                    'Los repelentes con principios activos como DEET o icaridina pueden utilizarse durante el embarazo siguiendo las indicaciones del producto. Revisá que la etiqueta identifique el principio activo y la forma de aplicación. La duración de protección varía entre formulaciones; repetirlo a una hora fija para todos los productos puede dejar intervalos sin protección o llevar a usos innecesarios.',
                    'Aplicalo en la piel expuesta según la etiqueta, evitando ojos, boca, heridas y zonas irritadas. Para la cara, primero ponelo en las manos y después distribuí con cuidado. No lo apliques debajo de la ropa. Si también usás protector solar, colocá primero el protector y luego el repelente, respetando las instrucciones de ambos.',
                    'Una pulsera, un perfume o un preparado casero no ofrecen la misma protección demostrada que un repelente adecuado. Tampoco conviene asumir que un producto es seguro y eficaz por llevar la palabra natural. Si una aplicación causa irritación, lavá la zona y consultá por una alternativa. Compartí la etiqueta con el equipo si tenés dudas sobre el producto que conseguís.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Barreras en casa, en el trabajo y durante la siesta',
                'body' => [
                    'El mosquito puede picar durante el día; protegerte solamente de noche deja parte de la exposición sin cubrir. Usá prendas livianas que cubran brazos y piernas cuando sea posible, sin aumentar demasiado el calor. Las telas mosquiteras en puertas y ventanas y el mosquitero al descansar ayudan a reducir el contacto, también durante la siesta.',
                    'Revisá que el mosquitero esté cerrado y sin roturas, y que no queden espacios por donde entren mosquitos. En el trabajo, identificá si hay recipientes con agua cerca del lugar donde pasás varias horas. La prevención funciona mejor cuando incluye los ambientes de todos los días, no solo el dormitorio.',
                    'Si alguien en casa está enfermo, evitar nuevas picaduras también importa. El mosquito puede adquirir el virus al picar a una persona infectada y transmitirlo después. Organizar las barreras y el control de criaderos es una tarea compartida: no hace falta que la embarazada haga sola el trabajo del patio.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Dónde buscar agua acumulada',
                'body' => [
                    'Los criaderos pueden ser pequeños: un plato de maceta, una botella cortada o el pliegue de una lona alcanza para retener agua. Revisá el patio y los espacios interiores con recipientes. Después de la lluvia, recorré los lugares donde suele juntarse agua. Los huevos pueden quedar adheridos a las paredes, por eso vaciar sin limpiar no siempre resuelve el problema.',
                    'Cepillá los recipientes que se usan de nuevo y mantené tapados los depósitos de agua. Los bebederos de animales necesitan recambio de agua y limpieza. Eliminá o guardá bajo techo los objetos que no se usan; una cubierta o un balde dado vuelta puede volver a juntar agua si queda mal apoyado.',
                    'Para canaletas altas, tanques pesados o acumulaciones difíciles de mover, pedí ayuda. No te expongas a una caída ni cargues objetos incómodos para completar la limpieza. Una revisión regular y después de lluvias es más útil que una limpieza grande aislada.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Lugar',
                        'Acción práctica'
                    ],
                    'rows' => [
                        [
                            'Platos de macetas y floreros',
                            'Evitar agua estancada y limpiar las paredes'
                        ],
                        [
                            'Bebederos',
                            'Cambiar el agua y cepillar el recipiente'
                        ],
                        [
                            'Baldes, botellas y cubiertas',
                            'Vaciar, limpiar y guardar protegidos de la lluvia'
                        ],
                        [
                            'Tanques y depósitos',
                            'Mantener bien tapados'
                        ],
                        [
                            'Canaletas y lonas',
                            'Revisar acumulaciones con ayuda si hay altura o peso'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cuándo consultar y qué cambios comunicar',
                'body' => [
                    'La fiebre durante el embarazo necesita evaluación. También consultá por erupción, dolor detrás de los ojos, dolores musculares o articulares importantes, aunque no aparezcan todos juntos. Contá si podés beber, si orinás menos de lo habitual y si sentís mareos. El equipo decidirá qué estudios corresponden según el momento de la enfermedad; un resultado aislado no se interpreta sin ese contexto.',
                    'El descenso de la fiebre no siempre significa que el dengue terminó. Si después aparecen dolor abdominal intenso, vómitos persistentes, sangrado, somnolencia marcada, debilidad importante o dificultad para respirar, buscá atención urgente. No esperes un nuevo pico de fiebre para volver a consultar. Estas situaciones están entre [las señales de alarma](/salud/senales-de-alarma/).',
                    'Si recibís atención ambulatoria, pedí instrucciones claras sobre el próximo control y cómo consultar ante cambios. Si no podés retener líquidos, eso también requiere atención. Evitá que una dificultad para conseguir un estudio retrase la evaluación de un síntoma de alarma.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Zika, contactos y seguimiento del embarazo',
                'body' => [
                    'El zika también puede transmitirse por vía sexual. Si vos o tu pareja tuvieron síntomas, una exposición posible o un viaje a una zona con transmisión, conversá sobre prevención sexual y seguimiento durante el embarazo. El uso de preservativo reduce la exposición por esa vía; la orientación concreta depende de los antecedentes y del contexto.',
                    'Si se sospecha alguna de estas infecciones, el equipo puede ajustar los controles maternos y del bebé. Una ecografía o un análisis responden preguntas diferentes y pueden necesitar seguimiento. Llevá una cronología sencilla de síntomas y consultas para que los profesionales puedan relacionar los resultados con la evolución.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Recorré los recipientes',
                'body' => [
                    'Revisá dónde se acumula agua y pedí ayuda con objetos pesados o lugares altos.'
                ]
            ],
            [
                'title' => 'Combiná protección',
                'body' => [
                    'Prepará ropa liviana que cubra la piel, repelente según etiqueta y mosquitero para descansar.'
                ]
            ],
            [
                'title' => 'Comunicá síntomas',
                'body' => [
                    'Ante fiebre o síntomas compatibles, consultá sin demora e informá las semanas de embarazo.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'La guía de dengue, zika y chikungunya de Mi Bebé acompaña estas medidas de prevención. El resumen prenatal puede ayudarte a ordenar antecedentes para la consulta.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Solo tengo que cuidarme de noche?',
                'a' => 'No. Los mosquitos Aedes también pican durante el día. Repelente, ropa, mosquiteros y control de criaderos se complementan.'
            ],
            [
                'q' => '¿Que baje la fiebre significa que ya pasó?',
                'a' => 'No siempre. En dengue pueden aparecer signos de alarma cuando la fiebre baja; dolor fuerte, sangrado o vómitos persistentes requieren atención urgente.'
            ],
            [
                'q' => '¿Puedo saber cuál infección tengo por las manchas?',
                'a' => 'No. Las erupciones y otros síntomas se superponen; la evaluación clínica y los estudios indicados ayudan a aclararlo.'
            ]
        ],
        'related' => [
            'senales-de-alarma',
            'vacunas-en-el-embarazo'
        ],
        'weeks' => [
            12,
            20,
            30
        ],
        'appGuideSlug' => 'dengue-zika-chikungunya-embarazo',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre dengue, zika y chikungunya',
                'publisher' => 'Organización Panamericana de la Salud (OPS/OMS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'senales-de-alarma' => [
        'cluster' => 'salud',
        'path' => '/salud/senales-de-alarma/',
        'title' => 'Señales de alarma en el embarazo',
        'seoTitle' => 'Señales de alarma en el embarazo',
        'metaDescription' => 'Reconocé señales de alarma en el embarazo: sangrado, pérdida de líquido, dolor intenso y menos movimientos. Qué informar al buscar atención.',
        'kind' => 'medical',
        'lead' => 'Buscá atención inmediata ante sangrado vaginal, pérdida de líquido, dolor abdominal fuerte, dolor de cabeza intenso con cambios de visión, dificultad para respirar, convulsiones o menos movimientos del bebé de lo habitual. La fiebre y los vómitos que impiden retener líquidos también necesitan atención sin demora. En una emergencia, llamá al [141 SEME](tel:141) o al [911](tel:911). No esperes al próximo control prenatal para consultar.',
        'sections' => [
            [
                'h2' => 'Síntomas por los que hay que pedir ayuda',
                'body' => [
                    'Sangrado vaginal, salida de líquido por la vagina, dolor fuerte en la panza y contracciones dolorosas antes de término necesitan evaluación. También son señales de alarma un dolor de cabeza intenso o persistente, visión borrosa o luces, hinchazón brusca de cara o manos, dolor de pecho, falta de aire importante, desmayo o convulsiones. Si los movimientos del bebé disminuyen respecto de su patrón habitual, contactá a tu servicio de inmediato.',
                    'La fiebre, los vómitos repetidos que no te dejan beber, una debilidad marcada o sentirte muy enferma son otros motivos para consultar sin demora. Ardor al orinar, especialmente acompañado de fiebre o dolor en la espalda, requiere evaluación. No hace falta presentar varios síntomas a la vez ni alcanzar una intensidad insoportable para pedir ayuda.',
                    'En una emergencia llamá al [141 SEME](tel:141) o al [911](tel:911) y explicá que estás embarazada. Si estás acompañando a alguien, describí lo que observás con palabras sencillas. Seguí las indicaciones del servicio de emergencia. La prioridad es acceder a atención, no terminar de leer esta página ni reunir todos los documentos.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Sangrado o pérdida de líquido',
                'body' => [
                    'El sangrado puede tener distintas causas según el momento del embarazo. Su cantidad visible no alcanza para saber qué está pasando. Si aparece, buscá evaluación y contá cuándo empezó, si hay dolor, mareo o debilidad, y si continúa. Sangrado abundante, desmayo o dolor intenso son una emergencia; pedí ayuda para trasladarte y no conduzcas si te sentís mal.',
                    'La pérdida de líquido puede sentirse como un chorro o como humedad que vuelve una y otra vez. No siempre es fácil distinguirla de orina o flujo en casa. Consultá de inmediato para que evalúen si corresponde a líquido amniótico. Podés usar una toalla higiénica externa para observar el color mientras vas a la atención; evitá introducir objetos en la vagina.',
                    'Si recordás la hora de inicio, el color o el olor, comunicalos. No intentes comprobar en casa la causa mediante pruebas improvisadas. Que no haya dolor no descarta que la pérdida necesite revisión. Llevá tu registro prenatal si está a mano, sin demorar la salida para buscarlo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Dolor de cabeza, visión y dolor en la parte alta de la panza',
                'body' => [
                    'Un dolor de cabeza fuerte que no es habitual, visión borrosa, destellos o dolor intenso en la parte superior del abdomen pueden acompañar problemas de presión. La hinchazón brusca de cara o manos también merece atención, especialmente si aparece junto con otros síntomas. Consultá de inmediato aunque nunca antes te hayan dicho que tenés presión alta.',
                    'La [presión alta y preeclampsia](/salud/presion-alta-y-preeclampsia/) pueden aparecer sin molestias claras; por eso la medición en los controles sigue siendo importante. Una lectura de presión que parezca normal en casa no debe usarse para descartar un síntoma de alarma. Tampoco hace falta esperar a encontrar un tensiómetro antes de pedir ayuda.',
                    'Si hay una convulsión, quien te acompañe debe llamar a emergencias, apartar objetos peligrosos y seguir las instrucciones recibidas. No debe sujetarte con fuerza ni introducir nada en tu boca. La asistencia profesional es urgente; informar el embarazo ayuda a orientar la respuesta.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cambios en los movimientos del bebé',
                'body' => [
                    'A medida que reconocés los movimientos, vas conociendo un patrón propio de tu bebé. No todos se mueven de la misma forma ni a las mismas horas. Lo importante es notar un cambio respecto de lo habitual para ese embarazo. Una reducción clara, ausencia de movimientos que antes sentías o una preocupación por ese cambio requieren contacto inmediato con tu servicio.',
                    'No esperes hasta el día siguiente ni retrases la consulta para probar comidas, bebidas frías o una sesión de conteo. Un dispositivo casero que parece detectar latidos tampoco permite confirmar que todo esté bien. Si te preocupa un cambio, la evaluación corresponde al equipo que puede revisar tu embarazo.',
                    'Hacia el final, el tipo de movimiento puede sentirse distinto por el espacio, pero no se considera normal dejar de sentir al bebé porque se acerca el parto. Si ya consultaste y vuelve a ocurrir una disminución, volvé a comunicarte. Haber tenido una evaluación tranquilizadora antes no invalida una preocupación nueva.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Fiebre, vómitos, respiración y dolor al orinar',
                'body' => [
                    'La fiebre puede acompañar infecciones que requieren atención durante el embarazo. Informá si además tenés tos, dolor al orinar, erupción o dolor de cuerpo. En Paraguay, una consulta por fiebre también puede necesitar valorar [dengue y otras infecciones transmitidas por mosquitos](/salud/dengue-en-el-embarazo/). No esperes a identificar la causa por tu cuenta.',
                    'Si vomitás repetidamente y no retenés líquidos, orinás muy poco o estás muy mareada, buscá atención. Las náuseas comunes no explican automáticamente cualquier episodio de vómitos. Dolor abdominal fuerte, sangre o decaimiento marcado junto con vómitos refuerzan la necesidad de evaluación urgente.',
                    'La falta de aire súbita, el dolor de pecho o una dificultad importante para respirar son una emergencia. También necesita evaluación urgente una pierna que se hincha de forma llamativa y duele, especialmente de un solo lado. No atribuyas estos cambios solamente al peso de la panza o al cansancio.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué decir al pedir atención y cómo acompañarte',
                'body' => [
                    'Empezá por el síntoma principal y las semanas de embarazo: “Estoy embarazada y tengo sangrado desde hace un rato”. Después agregá si estás sola, dónde estás y si hay dificultad para moverte o respirar. Una dirección clara y una referencia del lugar ayudan cuando pedís asistencia. Si no sabés un dato, decilo sin intentar adivinarlo.',
                    'Tené a mano el carné, resultados y lista de indicaciones si podés acceder a ellos fácilmente. Pedí a una persona de confianza que te acompañe o ayude con otras personas a cargo. Si el primer contacto no responde y hay una alarma, buscá otra vía de atención de urgencia. Los síntomas también pueden necesitar atención después del parto; informá si el nacimiento fue reciente.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Pedí ayuda ahora',
                'body' => [
                    'Contactá al servicio de urgencias. Ante una emergencia, llamá al 141 SEME o al 911.'
                ]
            ],
            [
                'title' => 'Explicá lo principal',
                'body' => [
                    'Decí dónde estás, el síntoma que comenzó y las semanas de embarazo que conocés.'
                ]
            ],
            [
                'title' => 'Organizá compañía',
                'body' => [
                    'Si te sentís mal, pedí ayuda para llegar a la atención y seguí las instrucciones del servicio.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé reúne señales de alarma y los números de emergencia en su sección de emergencia. Tené además los contactos de tu equipo guardados en el teléfono para ubicarlos rápidamente.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Tengo que esperar al próximo control?',
                'a' => 'No. Ante una señal de alarma buscá atención en el momento, aunque tu control programado sea pronto.'
            ],
            [
                'q' => '¿Espero a que el bebé se mueva después de tomar algo?',
                'a' => 'No retrases la consulta con pruebas caseras. Si se mueve menos de lo habitual, contactá a tu servicio inmediatamente.'
            ],
            [
                'q' => '¿Puedo consultar aunque ya me hayan revisado?',
                'a' => 'Sí. Un síntoma nuevo, persistente o que empeora merece una nueva comunicación, aunque una evaluación anterior haya sido tranquilizadora.'
            ],
            [
                'q' => '¿A qué número llamo en una emergencia?',
                'a' => 'En Paraguay, 141 SEME o 911. Explicá el síntoma, que estás embarazada y dónde estás.'
            ]
        ],
        'related' => [
            'presion-alta-y-preeclampsia',
            'dengue-en-el-embarazo',
            'diabetes-gestacional'
        ],
        'weeks' => [
            8,
            20,
            28,
            36
        ],
        'appGuideSlug' => 'senales-de-alarma-embarazo',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Mi Bebé: sección pública de emergencia, 141 SEME y 911',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'presion-alta-y-preeclampsia' => [
        'cluster' => 'salud',
        'path' => '/salud/presion-alta-y-preeclampsia/',
        'title' => 'Presión alta y preeclampsia en el embarazo',
        'seoTitle' => 'Presión alta y preeclampsia en el embarazo',
        'metaDescription' => 'Presión alta y preeclampsia en el embarazo: entendé para qué sirven los controles, qué síntomas requieren atención y cómo llevar tus registros.',
        'kind' => 'medical',
        'lead' => 'La presión alta en el embarazo puede no dar síntomas y se detecta con mediciones en los controles. La preeclampsia es una complicación que puede afectar distintos órganos y necesita seguimiento médico. Dolor de cabeza fuerte, cambios de visión, dolor intenso en la parte alta de la panza o falta de aire requieren atención inmediata. No esperes a medir tu presión para consultar por estas señales.',
        'sections' => [
            [
                'h2' => 'Presión alta no significa siempre lo mismo',
                'body' => [
                    'La presión arterial expresa la fuerza con que la sangre circula por las arterias. Durante el control prenatal se mide para identificar cambios que pueden necesitar seguimiento. Algunas personas ya tenían hipertensión antes del embarazo; otras presentan valores elevados durante la gestación. Conocer esa diferencia ayuda al equipo a interpretar las mediciones y planificar controles.',
                    'La preeclampsia suele aparecer a partir de la segunda mitad del embarazo y puede afectar órganos como riñones o hígado, además de la circulación de la placenta. No se define solamente por tener hinchados los pies. La evaluación combina presión, síntomas, análisis y el estado del bebé. También puede manifestarse después del nacimiento, por lo que las molestias nuevas en el posparto merecen atención.',
                    'Sentirte bien no confirma que la presión esté dentro de lo esperado. Por eso los controles siguen siendo útiles cuando no tenés molestias. Si necesitás organizar el seguimiento, podés revisar las preguntas sobre [control prenatal](/tramites/control-prenatal-ips-vs-privado/) y llevar tus resultados al servicio donde te atendés.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué antecedentes conviene contar',
                'body' => [
                    'Informá si tuviste presión alta, preeclampsia o problemas renales en otro embarazo, si ya recibías tratamiento antes de quedar embarazada o si hay enfermedades crónicas que el equipo todavía no conoce. Los antecedentes familiares también pueden aportar información. No tener antecedentes no elimina la posibilidad de presentar un problema durante este embarazo.',
                    'Si el embarazo es múltiple o hay otras condiciones que requieren seguimiento, preguntá cómo cambia tu plan de controles. El equipo puede indicar medidas preventivas o estudios según el conjunto de factores. No copies tratamientos ni recomendaciones de otra embarazada: la prevención se decide con tu historia clínica y necesita supervisión.',
                    'Contá también qué medicamentos y suplementos usás, incluso si vienen de una indicación anterior o los comprás sin receta. El propósito es revisar su adecuación al embarazo y coordinar a quienes te atienden. No cambies por tu cuenta una indicación al leer un resultado o al sentirte mejor.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo se obtiene una medición útil',
                'body' => [
                    'Una medición de presión puede variar con la actividad reciente, la postura, el tamaño del brazalete y la técnica. En consulta suelen pedirte que descanses sentada, con la espalda apoyada y el brazo sostenido. El brazalete se coloca sobre el brazo descubierto y debe tener un tamaño adecuado. Hablar durante la medición puede interferir con el registro.',
                    'Si te indicaron medir en casa, pedí que revisen el aparato y te enseñen a usarlo. Anotá fecha, hora, ambos valores y cualquier síntoma, tal como aparecen. No selecciones solamente el valor más bajo de varias mediciones para mostrarlo después. El patrón completo ayuda a interpretar lo que está ocurriendo.',
                    'Antes de salir del control, acordá qué hacer con un resultado fuera del rango que te hayan indicado y a qué contacto avisar. Si aparece una señal de alarma, la conducta es buscar atención inmediata, aunque una medición doméstica parezca habitual. Repetir muchas veces el registro no reemplaza esa evaluación.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Para qué sirven la orina, la sangre y las ecografías',
                'body' => [
                    'Si hay sospecha de un trastorno hipertensivo, pueden solicitar estudios de orina y sangre. La orina ayuda a evaluar pérdida de proteínas; los análisis pueden aportar información sobre riñones, hígado y plaquetas. Ningún papel aislado resume toda la situación. Es importante que alguien del equipo integre los resultados con las mediciones y los síntomas.',
                    'El seguimiento del bebé puede incluir evaluación del crecimiento, del líquido amniótico y, cuando corresponde, de la circulación. Que te indiquen más controles no significa por sí solo que haya ocurrido un daño. Significa que necesitan observar aspectos concretos para tomar decisiones con información actualizada.',
                    'Pedí que te expliquen qué busca cada estudio, cuándo revisarán el resultado y cómo lo recibirás. Si te atendés en más de un lugar, llevá los informes completos. Un cambio en el seguimiento puede requerir coordinación entre servicios; conservar una cronología ayuda a evitar que una indicación importante quede sin revisar.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Control',
                        'Qué aporta'
                    ],
                    'rows' => [
                        [
                            'Presión arterial',
                            'Valores y evolución en el tiempo'
                        ],
                        [
                            'Orina',
                            'Información sobre pérdida de proteínas cuando se investiga'
                        ],
                        [
                            'Sangre',
                            'Evaluación de órganos y plaquetas según indicación'
                        ],
                        [
                            'Control del bebé',
                            'Crecimiento y bienestar según la situación clínica'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Señales que requieren evaluación inmediata',
                'body' => [
                    'Dolor de cabeza intenso o persistente, luces o visión borrosa, dolor fuerte en la parte alta del abdomen, falta de aire y una hinchazón brusca de cara o manos necesitan consulta urgente. Una convulsión es una emergencia. No esperes que aparezcan todos los síntomas ni que alguien confirme una presión alta antes de pedir ayuda.',
                    'Si el bebé se mueve menos de lo habitual, contactá al servicio inmediatamente. Esto merece evaluación aunque estés haciendo controles por presión y el último haya resultado tranquilizador. En [las señales de alarma](/salud/senales-de-alarma/) encontrás cómo comunicar el síntoma y pedir atención.',
                    'Después del parto, avisá que el nacimiento fue reciente si consultás por dolor de cabeza fuerte, alteraciones visuales, dolor abdominal o falta de aire. El final del embarazo no elimina de inmediato todos los riesgos relacionados con la presión. Conservá el plan de seguimiento que te hayan indicado al alta.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo organizar el seguimiento cotidiano',
                'body' => [
                    'Si el equipo indica controles más frecuentes, acordá cómo vas a llegar y quién puede acompañarte. Separá en tu registro las mediciones, los síntomas y las preguntas para la próxima consulta. Anotá también cambios de indicación para no mezclar un plan anterior con el actual. Si algo resulta difícil de cumplir, comunicalo para buscar una alternativa concreta.',
                    'La necesidad de internación o de adelantar el nacimiento depende de la gravedad, las semanas y la evaluación materna y fetal. No hay una decisión universal que se pueda anticipar desde un único valor. Pedí una explicación del motivo de cada cambio y de qué se va a vigilar. Entender el plan ayuda a participar sin cargar con la tarea de interpretar sola los resultados.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye un resumen prenatal para acompañar tus controles. Usalo junto con los registros que te haya pedido el equipo; una app no interpreta ni reemplaza la medición clínica.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿La presión alta siempre da dolor de cabeza?',
                'a' => 'No. Puede no provocar síntomas; por eso se mide durante el control prenatal.'
            ],
            [
                'q' => '¿Los pies hinchados confirman preeclampsia?',
                'a' => 'No. La hinchazón aislada no establece el diagnóstico. La aparición brusca, especialmente en cara o manos o junto con otros síntomas, necesita evaluación.'
            ],
            [
                'q' => '¿Puede aparecer después del parto?',
                'a' => 'Sí. Ante síntomas de alarma después del nacimiento, buscá atención e informá que tuviste un parto reciente.'
            ]
        ],
        'related' => [
            'senales-de-alarma',
            'diabetes-gestacional'
        ],
        'weeks' => [
            20,
            28,
            36
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'diabetes-gestacional' => [
        'cluster' => 'salud',
        'path' => '/salud/diabetes-gestacional/',
        'title' => 'Diabetes gestacional: estudios y cuidados',
        'seoTitle' => 'Diabetes gestacional: estudios y cuidados',
        'metaDescription' => 'Diabetes gestacional: para qué se estudia la glucosa, cómo preparar la consulta y qué cambios de alimentación, movimiento y seguimiento se evalúan.',
        'kind' => 'medical',
        'lead' => 'La diabetes gestacional es una alteración de la glucosa que se detecta durante el embarazo y muchas veces no da síntomas. Se busca con estudios porque tratarla ayuda a reducir complicaciones para vos y tu bebé. El seguimiento puede incluir cambios de alimentación, actividad adaptada, mediciones y tratamiento indicado por el equipo. No es una culpa personal ni se confirma por haber comido algo dulce.',
        'sections' => [
            [
                'h2' => 'Por qué puede cambiar la glucosa en el embarazo',
                'body' => [
                    'La glucosa es una fuente de energía para el cuerpo. La insulina ayuda a que pase de la sangre a las células. Durante el embarazo, los cambios hormonales pueden hacer que la insulina actúe con menos eficacia. Si el organismo no compensa esa mayor necesidad, la glucosa puede elevarse. Esto explica por qué puede aparecer diabetes gestacional en alguien que antes no tenía diabetes conocida.',
                    'La alimentación importa en el seguimiento, pero el diagnóstico no se reduce a cuánto azúcar comiste. Los antecedentes personales y familiares, entre otros factores, ayudan al equipo a decidir cómo evaluar. También puede presentarse sin factores de riesgo evidentes. Compararte con otra embarazada o culparte por una comida no ayuda a interpretar el resultado.',
                    'Controlar la glucosa busca reducir problemas como crecimiento excesivo del bebé y dificultades alrededor del nacimiento. El diagnóstico no significa que esas complicaciones vayan a ocurrir. Un plan acordado y revisado según la evolución permite responder a las necesidades de tu embarazo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cuándo y cómo se buscan alteraciones',
                'body' => [
                    'Muchos esquemas de control incluyen la evaluación de diabetes gestacional aproximadamente entre las semanas 24 y 28. Según los antecedentes, pueden estudiar la glucosa antes. El tipo de prueba y la interpretación corresponden al protocolo del servicio y a tu situación. Tener una medición normal al comienzo no siempre reemplaza el estudio indicado más adelante.',
                    'Una prueba de tolerancia oral evalúa cómo responde el cuerpo a una bebida con glucosa mediante extracciones de sangre en momentos definidos. La preparación varía según la prueba: confirmá si necesitás ayuno, cuánto dura la visita y qué hacer con tus indicaciones habituales. No cambies por tu cuenta tu alimentación durante varios días para intentar modificar el resultado.',
                    'Avisá si estás enferma, si no pudiste cumplir la preparación o si vomitás durante la prueba. Esos datos pueden afectar cómo se realiza o interpreta. Al recibir el informe, coordiná su revisión; no compares números de pruebas diferentes como si fueran equivalentes. Las [guías de salud](/salud/) reúnen otros temas para acompañar ese control.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Alimentación: distribuir y combinar',
                'body' => [
                    'Un plan de alimentación busca aportar lo que vos y el bebé necesitan, con una distribución de carbohidratos que ayude a manejar la glucosa. Suele ser útil ordenar comidas y evitar largos períodos sin comer seguidos de una comida muy abundante. La cantidad y los horarios se adaptan a tus resultados, apetito, trabajo y posibilidades de acceso a alimentos.',
                    'Pan, arroz, fideos, mandioca, frutas y leche contienen carbohidratos en distintas proporciones. No se trata de eliminar todos esos alimentos ni de dejar de comer fruta. Combinar porciones acordadas con verduras, proteínas y fuentes de fibra puede ayudar. Una chipa o una porción de sopa paraguaya se evalúan dentro del conjunto de la comida y del plan, sin clasificar un alimento como una falta personal.',
                    'Las bebidas azucaradas aportan azúcar de rápida absorción y pueden elevar la glucosa con facilidad. El agua es una opción habitual para acompañar las comidas. Si te cuesta organizar un menú por náuseas, horarios o presupuesto, llevá ejemplos de un día real a la consulta nutricional. Eso permite proponer cambios que puedas sostener.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Movimiento y mediciones en casa',
                'body' => [
                    'La actividad física adaptada puede ayudar al manejo de la glucosa cuando no hay una contraindicación obstétrica. Caminar a un ritmo cómodo es una opción frecuente, pero el tipo y la duración se ajustan a tu experiencia y al seguimiento. No hace falta empezar una rutina intensa. La guía de [ejercicio y Kegel](/salud/ejercicio-y-kegel/) explica cómo conversar una actividad segura.',
                    'Si te indican un glucómetro, pedí una demostración: cómo preparar las manos, obtener la muestra, usar las tiras y registrar el resultado. El horario respecto de las comidas importa. Anotá lo que te pidan, sin cambiar el momento de medición para conseguir una cifra que parezca más conveniente. Llevá el registro completo a la revisión.',
                    'Si una cifra sale fuera del rango acordado, seguí el plan de contacto que te dieron. Una medición no es una nota sobre tu esfuerzo. Permite ajustar el seguimiento. Si hay mareos, sudoración, temblor o malestar importante, especialmente con tratamiento, aplicá las instrucciones personales recibidas y pedí atención según ese plan; ante pérdida de conciencia, la ayuda es urgente.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué pasa si hace falta tratamiento',
                'body' => [
                    'Algunas personas necesitan tratamiento además de alimentación y movimiento. Eso no significa que hayan fallado. Los cambios propios del embarazo pueden aumentar las necesidades a medida que avanzan las semanas. El equipo revisa los registros y decide qué alternativa corresponde, cómo usarla y qué controles requiere.',
                    'Pedí que te expliquen qué hacer si no podés comer, si estás enferma o si una indicación resulta difícil de seguir. No uses el esquema de otra persona ni cambies cantidades por un resultado aislado. La educación para reconocer y responder a una glucosa baja forma parte del plan cuando el tratamiento puede producirla.',
                    'La evaluación puede incluir controles del crecimiento del bebé y planificación del nacimiento según la evolución. Tener diabetes gestacional no determina por sí solo una vía de parto. Las decisiones consideran distintos factores maternos y fetales, y se conversan durante el seguimiento.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Parte del plan',
                        'Pregunta útil'
                    ],
                    'rows' => [
                        [
                            'Comidas',
                            '¿Cómo distribuyo porciones con mis horarios?'
                        ],
                        [
                            'Actividad',
                            '¿Qué movimiento puedo hacer en mi situación?'
                        ],
                        [
                            'Mediciones',
                            '¿Cuándo mido y a quién aviso un resultado fuera de rango?'
                        ],
                        [
                            'Tratamiento',
                            '¿Qué hago si estoy enferma o no puedo comer?'
                        ],
                        [
                            'Después del nacimiento',
                            '¿Qué estudio y control quedan programados?'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Después del nacimiento también hay seguimiento',
                'body' => [
                    'La glucosa puede volver a valores habituales después del parto, pero hace falta comprobarlo con el estudio que te indiquen. Haber tenido diabetes gestacional aumenta la posibilidad de desarrollar diabetes en el futuro. Por eso conviene conservar el antecedente y comunicarlo en consultas posteriores y antes de otro embarazo.',
                    'Antes del alta, preguntá cuándo realizar el control y cómo revisar el resultado. Si estás amamantando, contalo al conversar alimentación y cualquier tratamiento. Ante vómitos persistentes, dificultad para respirar, confusión o disminución de movimientos durante el embarazo, buscá atención inmediata y revisá [las señales de alarma](/salud/senales-de-alarma/). Esos síntomas no se resuelven esperando la siguiente medición de rutina.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé tiene herramientas de alimentación y un resumen prenatal. Pueden acompañar tus preguntas; el registro de glucosa y sus objetivos se acuerdan con el equipo que te atiende.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Puedo tener diabetes gestacional sin síntomas?',
                'a' => 'Sí. Muchas veces se detecta con estudios del control prenatal, aunque te sientas bien.'
            ],
            [
                'q' => '¿Tengo que dejar todos los carbohidratos?',
                'a' => 'No. El equipo adapta cantidades, combinaciones y distribución; eliminar grupos enteros por tu cuenta puede dificultar una alimentación suficiente.'
            ],
            [
                'q' => '¿Necesitar tratamiento significa que hice algo mal?',
                'a' => 'No. Las necesidades cambian con el embarazo y algunas personas requieren tratamiento aunque sigan las medidas acordadas.'
            ],
            [
                'q' => '¿Se termina el seguimiento al nacer el bebé?',
                'a' => 'No. Hace falta un control posterior y conservar el antecedente para la atención futura.'
            ]
        ],
        'related' => [
            'ejercicio-y-kegel',
            'presion-alta-y-preeclampsia',
            'senales-de-alarma'
        ],
        'weeks' => [
            24,
            28,
            32
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'salud-dental' => [
        'cluster' => 'salud',
        'path' => '/salud/salud-dental/',
        'title' => 'Salud dental durante el embarazo',
        'seoTitle' => 'Salud dental durante el embarazo',
        'metaDescription' => 'Salud dental en el embarazo: cuidados de encías y dientes, qué hacer con las náuseas y cuándo consultar por dolor, sangrado o hinchazón.',
        'kind' => 'medical',
        'lead' => 'Durante el embarazo podés y conviene recibir atención odontológica. Las encías pueden inflamarse y sangrar con más facilidad, pero el dolor o una infección no se dejan para después del parto. Cepillado suave con pasta fluorada, limpieza entre los dientes y revisión odontológica ayudan a cuidar la boca. Informá que estás embarazada y de cuántas semanas antes de cualquier procedimiento.',
        'sections' => [
            [
                'h2' => 'Por qué pueden sangrar las encías',
                'body' => [
                    'Los cambios hormonales del embarazo pueden aumentar la respuesta de las encías a la placa dental. Podés notar enrojecimiento, hinchazón o sangrado al cepillarte. Eso no significa que tengas que dejar de limpiar la zona. Cuando la placa permanece, la inflamación puede sostenerse o empeorar. Una limpieza cuidadosa y una evaluación odontológica ayudan a identificar qué está ocurriendo.',
                    'El sangrado repetido merece una consulta, especialmente si hay dolor, mal aliento persistente o una zona que cambió de aspecto. La revisión permite diferenciar inflamación de encías de otros problemas que necesitan tratamiento. No se puede saber la profundidad de una lesión mirando solamente el color de la encía en una foto.',
                    'El embarazo no implica que necesariamente vayas a perder dientes. La idea de que el bebé toma calcio directamente de los dientes confunde cómo funciona el cuerpo. Las caries y los problemas de encías tienen causas que se pueden evaluar y tratar. En las [guías de salud](/salud/) también encontrás información para preparar otros controles.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cepillado y limpieza entre los dientes',
                'body' => [
                    'Usá un cepillo de cerdas suaves y pasta con flúor, y cepillá todas las caras de los dientes con movimientos suaves. Prestá atención al borde donde se encuentran diente y encía, sin frotar con fuerza. Cepillarte de forma habitual por la mañana y antes de dormir ayuda a controlar la placa. Escupí el exceso de pasta al terminar.',
                    'El hilo dental o los elementos de limpieza interdental que te recomienden llegan a espacios donde el cepillo no entra bien. Si no sabés cómo usarlos, pedí una demostración. Una técnica brusca puede lastimar; encontrar una forma cómoda facilita mantenerla. Un enjuague no reemplaza el cepillado ni la limpieza entre dientes.',
                    'Si una encía sangra al empezar a mejorar la higiene, no abandones toda la limpieza. Consultá para revisar la técnica y la causa. Si el sangrado es abundante, espontáneo o se acompaña de otras molestias importantes, buscá atención. No uses productos concentrados o mezclas caseras para intentar desinfectar una zona dolorida.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Náuseas, vómitos y sensibilidad',
                'body' => [
                    'Las náuseas pueden hacer difícil acercar el cepillo a la parte posterior de la boca. Podés probar un cabezal pequeño, movimientos lentos y un momento del día en que toleres mejor la higiene. Evitá forzarte hasta provocar arcadas repetidas. Si una pasta te resulta muy desagradable, consultá una alternativa fluorada que puedas usar de manera constante.',
                    'Después de vomitar, enjuagate con agua para retirar parte del ácido de la boca. Evitá cepillarte inmediatamente con fuerza sobre los dientes recién expuestos al ácido; comentá los episodios frecuentes en la consulta para adaptar el cuidado. El reflujo también puede contribuir a sensibilidad o desgaste, aunque no siempre sea visible al principio.',
                    'Si los vómitos no te permiten retener líquidos, necesitás evaluación médica sin demora. No es solamente un problema dental. Podés revisar [las señales de alarma](/salud/senales-de-alarma/) para reconocer cuándo buscar atención. Para molestias nocturnas relacionadas con reflujo, la guía sobre [dormir en el embarazo](/salud/dormir-en-el-embarazo/) reúne ajustes de comodidad.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Comidas y bebidas que tocan los dientes muchas veces',
                'body' => [
                    'La frecuencia de exposición al azúcar importa para las caries. Tomar sorbitos de una bebida azucarada durante horas mantiene exposiciones repetidas, aunque el recipiente parezca pequeño. El agua puede acompañar el día sin agregar esa exposición. Las bebidas ácidas también pueden contribuir al desgaste; no conviene mantenerlas en la boca o usarlas para enjuagarte.',
                    'Si necesitás comer más seguido por náuseas, no se trata de pasar hambre para cuidar los dientes. Buscá opciones que puedas tolerar y conversá cómo combinarlas con higiene. Un registro sencillo de bebidas y picoteos ayuda al odontólogo a detectar momentos en que podés hacer un cambio útil sin complicar toda la alimentación.',
                    'La sensibilidad al frío o al dulce puede tener distintas causas. No la tapes durante meses evitando masticar de ese lado. Una revisión permite ver si hay caries, desgaste u otro problema. Cuanto antes se evalúe una molestia persistente, más claro será qué cuidado necesita.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué contar antes de una consulta odontológica',
                'body' => [
                    'Informá las semanas de embarazo, condiciones del seguimiento prenatal, alergias y todos los medicamentos que usás. Si tenés informes o indicaciones que puedan influir en la atención, llevalos. El odontólogo puede coordinar con tu equipo obstétrico cuando haga falta. Una limpieza o el tratamiento de un problema no se posponen automáticamente por estar embarazada.',
                    'Si se necesita una radiografía para responder una pregunta clínica, el profesional evalúa su justificación y las medidas de protección correspondientes. Del mismo modo, la anestesia y cualquier otra indicación se eligen considerando el embarazo. Pedí que te expliquen el procedimiento y su propósito; no hace falta asumir que todo estudio o tratamiento está prohibido.',
                    'En etapas avanzadas, estar mucho tiempo completamente acostada puede resultar incómodo. Avisá si sentís mareo, náusea o falta de aire en el sillón para que ajusten la posición y hagan pausas. La comodidad se puede conversar antes de empezar, junto con la duración prevista de la atención.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Dato para contar',
                        'Por qué ayuda'
                    ],
                    'rows' => [
                        [
                            'Semanas y seguimiento obstétrico',
                            'Adaptar la atención y coordinar cuando corresponda'
                        ],
                        [
                            'Dolor, sangrado o hinchazón',
                            'Identificar el problema principal y su evolución'
                        ],
                        [
                            'Alergias e indicaciones actuales',
                            'Elegir procedimientos y cuidados adecuados'
                        ],
                        [
                            'Náuseas o mareos al recostarte',
                            'Ajustar postura y pausas durante la consulta'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Dolor, hinchazón o infección: cuándo pedir atención',
                'body' => [
                    'Dolor fuerte, una zona hinchada, pus, fiebre o dificultad para abrir la boca necesitan consulta rápida. Si la hinchazón se extiende hacia la cara o el cuello, o tenés dificultad para tragar o respirar, buscá atención de urgencia. Una infección dental no se resuelve esperando al nacimiento ni poniendo sustancias irritantes sobre la encía.',
                    'Después de un procedimiento, pedí instrucciones claras de higiene y seguimiento. Si el dolor empeora, aparece fiebre o no podés alimentarte o beber, volvé a comunicarte. Conservá el contacto del servicio y la información de lo realizado para que otro profesional pueda continuar la atención si lo necesitás.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Identificá la molestia',
                'body' => [
                    'Anotá dónde duele, desde cuándo y si hay hinchazón, fiebre o dificultad para comer.'
                ]
            ],
            [
                'title' => 'Prepará tus antecedentes',
                'body' => [
                    'Informá semanas, alergias e indicaciones actuales antes del procedimiento.'
                ]
            ],
            [
                'title' => 'Acordá el seguimiento',
                'body' => [
                    'Pedí las instrucciones posteriores y cómo contactar al servicio si aparece un cambio.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye una herramienta de salud dental. Usala para acompañar el cuidado cotidiano y llevá tus molestias y preguntas a la consulta odontológica.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Puedo ir al odontólogo embarazada?',
                'a' => 'Sí. Informá el embarazo y tus antecedentes para adaptar la atención. El dolor y las infecciones necesitan evaluación, sin esperar al parto.'
            ],
            [
                'q' => '¿Dejo de cepillar si sangran las encías?',
                'a' => 'No abandones la higiene. Usá una técnica suave y consultá para revisar por qué sangran y cómo limpiar sin lastimar.'
            ],
            [
                'q' => '¿El bebé me quita calcio de los dientes?',
                'a' => 'No toma calcio directamente de los dientes. Las molestias dentales requieren revisar caries, encías y otros factores concretos.'
            ]
        ],
        'related' => [
            'dormir-en-el-embarazo',
            'senales-de-alarma'
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
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre salud bucodental',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'dormir-en-el-embarazo' => [
        'cluster' => 'salud',
        'path' => '/salud/dormir-en-el-embarazo/',
        'title' => 'Dormir en el embarazo: postura y descanso',
        'seoTitle' => 'Dormir en el embarazo: postura y descanso',
        'metaDescription' => 'Dormir en el embarazo: posiciones cómodas, ideas para el reflujo y los despertares, y señales que conviene conversar con tu equipo de salud.',
        'kind' => 'medical',
        'lead' => 'Para dormir mejor en el embarazo, probá acostarte de costado, apoyar la panza y las rodillas con almohadas y mantener horarios regulares. En la segunda mitad suele ser más cómodo evitar permanecer boca arriba. Si te despertás en esa posición, girate de lado sin alarmarte. El insomnio persistente, los ronquidos con pausas al respirar o un cansancio que impide tu actividad necesitan consulta.',
        'sections' => [
            [
                'h2' => 'Por qué cambia el sueño',
                'body' => [
                    'Al comienzo del embarazo podés tener más sueño durante el día y, al mismo tiempo, despertarte por náuseas o ganas de orinar. Más adelante, el tamaño de la panza, el reflujo y la dificultad para encontrar postura pueden interrumpir el descanso. Las preocupaciones por el nacimiento o por asuntos cotidianos también pueden mantenerte despierta aunque estés cansada.',
                    'Una noche mala no describe todo tu descanso. Mirá cómo te sentís durante varios días: si podés concentrarte, si te dormís sin querer o si el cansancio te impide trabajar o moverte con seguridad. Contarle al equipo esos efectos concretos ayuda más que decir solamente que dormís poco. Si conducís y estás somnolienta, evitá hacerlo y buscá otra forma de traslado.',
                    'Las necesidades de sueño varían entre personas. La meta es encontrar una rutina que favorezca el descanso y reconocer molestias que necesitan atención. No hace falta convertir cada noche en una evaluación de cuánto deberías haber dormido. El [hub de salud](/salud/) reúne otras dudas que pueden aparecer junto con el cansancio.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'De costado y con apoyos cómodos',
                'body' => [
                    'Dormir de costado suele facilitar la comodidad a medida que crece la panza. Una almohada entre las rodillas puede reducir la tensión en caderas y espalda, y otra debajo de la panza puede ofrecer apoyo. No necesitás una almohada especial si con las que tenés conseguís una postura estable. Probá cambios pequeños para reconocer qué te resulta cómodo.',
                    'En la segunda mitad del embarazo, permanecer boca arriba puede comprimir grandes vasos y provocar malestar en algunas personas. Acostarte de lado evita esa presión. Podés alternar costados según comodidad; no hace falta pasar toda la noche inmóvil. Si te despertás boca arriba, simplemente acomodate de lado y continuá descansando.',
                    'Para salir de la cama, girá primero hacia un costado y ayudate con los brazos al incorporarte. Hacelo despacio si tendés a marearte. Si aparece falta de aire importante, dolor de pecho o un desmayo, buscá atención inmediata; no lo atribuyas solamente a una mala postura. Consultá [las señales de alarma](/salud/senales-de-alarma/) para otras situaciones urgentes.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Reflujo y ganas de orinar durante la noche',
                'body' => [
                    'El reflujo puede sentirse como ardor que sube desde la parte alta del abdomen hacia el pecho o la garganta, especialmente al recostarte. Una cena menos abundante y dejar un tiempo entre comer y acostarte pueden mejorar la comodidad. Si reconocés alimentos que te provocan ardor, comentá ese patrón y probá evitarlos en la comida nocturna sin eliminar grupos enteros de alimentos.',
                    'Elevar de forma cómoda la parte superior del cuerpo puede ayudar a algunas personas. Buscá un apoyo que sostenga el torso, sin doblar solamente el cuello con muchas almohadas. Si el dolor es intenso, diferente de tu ardor habitual o se acompaña de otros síntomas, necesitás evaluación. El dolor fuerte en la parte alta de la panza no se da por hecho como reflujo.',
                    'Orinar más seguido es frecuente, pero no conviene pasar el día sin beber para evitar levantarte. Distribuí los líquidos y observá si tomar mucho justo antes de acostarte aumenta los despertares. Ardor al orinar, fiebre o dolor en la espalda requieren consulta; levantarte de noche no explica por sí solo esos síntomas.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Una rutina que ayude a bajar el ritmo',
                'body' => [
                    'Intentá mantener una hora parecida para levantarte y reservá un rato tranquilo antes de dormir. Una luz tenue, una lectura breve o una actividad relajante pueden marcar el cierre del día. Si el teléfono te mantiene pendiente de mensajes o noticias, dejalo fuera del alcance de la mano durante ese rato. Lo importante es reducir lo que te activa, no cumplir una lista perfecta.',
                    'La cafeína de café, mate, tereré y otras bebidas puede dificultar el sueño, especialmente cerca de la noche. Observá cómo se relacionan tus horarios de consumo y tus despertares. Si hacés siesta y después te cuesta dormir, probá que sea más breve o más temprano. No hace falta suprimir un descanso que te ayuda sin mirar el conjunto del día.',
                    'El movimiento adaptado durante el día también puede favorecer el bienestar. En [ejercicio y Kegel](/salud/ejercicio-y-kegel/) encontrás ideas para conversar una rutina. Evitá usar el ejercicio intenso al final del día como forma de agotarte para dormir. Si una actividad te deja acelerada, buscá otro horario.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cuando la cabeza sigue trabajando',
                'body' => [
                    'Las preocupaciones pueden hacerse más presentes cuando la casa se queda en silencio. Anotar una duda y una acción concreta para el día siguiente puede ayudarte a no repasarla toda la noche. También podés conversar con alguien de confianza sobre qué ayuda necesitás, como repartir tareas o acompañarte a un control. Tener dificultades para dormir no significa que estés llevando mal el embarazo.',
                    'Si te quedás despierta y frustrada mucho tiempo, una actividad tranquila con poca luz puede ayudar a salir de esa lucha con el reloj; volvé a acostarte cuando aparezca sueño. Buscá una opción segura y cómoda para vos. Mirar la hora repetidamente suele aumentar la sensación de presión.',
                    'Si la ansiedad, tristeza o miedo ocupan gran parte del día, pedí apoyo profesional. El sueño y la salud emocional se influyen mutuamente. No uses preparados para dormir, yuyos o suplementos por recomendación de otra persona sin revisar su seguridad con el equipo. Natural no describe su efecto ni su adecuación al embarazo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Ronquidos, piernas inquietas y cansancio persistente',
                'body' => [
                    'Los ronquidos fuertes con pausas observadas en la respiración, despertares con sensación de ahogo o somnolencia marcada durante el día merecen evaluación. Contá si alguien notó esos episodios y desde cuándo. No es necesario grabarte toda la noche para que la consulta sea válida. El equipo puede valorar si hace falta estudiar la respiración durante el sueño.',
                    'Una necesidad intensa de mover las piernas al descansar, calambres frecuentes o dolor pueden tener causas diferentes. Describí qué sentís y si mejora al moverte; esa diferencia orienta la conversación. El cansancio persistente también puede requerir revisar anemia u otras condiciones. Pedí una evaluación cuando el descanso no te permite recuperar tu actividad habitual, en lugar de asumir que todo se explica por estar embarazada.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Lo que notás',
                        'Qué conversar'
                    ],
                    'rows' => [
                        [
                            'Despertares con ardor',
                            'Comidas, postura y características del dolor'
                        ],
                        [
                            'Ronquidos con pausas',
                            'Respiración durante el sueño y cansancio diurno'
                        ],
                        [
                            'Piernas inquietas',
                            'Momento, sensación y relación con el movimiento'
                        ],
                        [
                            'Insomnio persistente',
                            'Rutina, ánimo e impacto en tu día'
                        ]
                    ]
                ]
            ]
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye una herramienta de sueño y un diario. Podés usarlos para acompañar tu rutina y preparar ejemplos concretos de cómo descansás para el próximo control.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Qué pasa si me despierto boca arriba?',
                'a' => 'Girate de costado sin alarmarte. No necesitás mantener una postura inmóvil toda la noche.'
            ],
            [
                'q' => '¿Tengo que dormir siempre sobre el lado izquierdo?',
                'a' => 'Podés alternar costados según comodidad, salvo una indicación particular de tu equipo. Los apoyos pueden ayudarte a encontrar una postura estable.'
            ],
            [
                'q' => '¿Los yuyos para dormir son seguros?',
                'a' => 'No se puede asumir seguridad por ser naturales. Consultá el producto y sus ingredientes antes de usarlo durante el embarazo.'
            ]
        ],
        'related' => [
            'ejercicio-y-kegel',
            'salud-dental',
            'senales-de-alarma'
        ],
        'weeks' => [
            12,
            28,
            34
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'ejercicio-y-kegel' => [
        'cluster' => 'salud',
        'path' => '/salud/ejercicio-y-kegel/',
        'title' => 'Ejercicio y Kegel durante el embarazo',
        'seoTitle' => 'Ejercicio y Kegel durante el embarazo',
        'metaDescription' => 'Ejercicio y Kegel en el embarazo: cómo empezar de a poco, adaptar el movimiento, reconocer molestias y practicar el suelo pélvico sin forzarlo.',
        'kind' => 'medical',
        'lead' => 'En un embarazo sin contraindicaciones, moverte de forma regular y moderada suele ser beneficioso. Podés empezar con caminatas cómodas y adaptar la actividad a tu experiencia y síntomas. Los ejercicios de Kegel trabajan el suelo pélvico: consisten en contraer y después relajar esos músculos, sin contener la respiración. Si hay dolor, presión pélvica o dudas sobre la técnica, pedí evaluación antes de insistir.',
        'sections' => [
            [
                'h2' => 'Qué actividad se adapta a tu punto de partida',
                'body' => [
                    'Caminar, nadar o hacer ejercicios adaptados pueden ayudarte a mantener movilidad, bienestar y capacidad para las tareas cotidianas. La elección depende de lo que hacías antes, de tu comodidad y de la evolución del embarazo. No hace falta empezar con una rutina larga ni buscar una marca nueva. Un comienzo gradual permite reconocer cómo responde tu cuerpo.',
                    'Si antes eras sedentaria, probá períodos cortos de movimiento y aumentá de a poco según tolerancia y orientación. Si ya entrenabas, conversá qué ajustes necesita tu actividad, especialmente si incluye impacto, cargas importantes o competencia. Estar acostumbrada a un deporte no elimina todos los cambios de equilibrio, respiración y comodidad del embarazo.',
                    'Antes de comenzar o continuar una rutina, comentá tus antecedentes y cualquier indicación obstétrica. Sangrado, pérdida de líquido, problemas de presión u otras complicaciones pueden requerir una evaluación específica. La guía de [presión alta y preeclampsia](/salud/presion-alta-y-preeclampsia/) explica por qué algunos embarazos necesitan controles diferentes.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Intensidad, calor y pausas',
                'body' => [
                    'Una intensidad moderada suele permitirte hablar mientras te movés, aunque respires más rápido. Si no podés sostener una conversación, bajá el ritmo y evaluá cómo te sentís. Esa referencia ayuda a ajustar el esfuerzo sin depender de comparaciones con otra persona. El objetivo es una actividad tolerable, no terminar exhausta.',
                    'En días calurosos, elegí un lugar ventilado o un horario más fresco, llevá agua y hacé pausas. La ropa cómoda y un calzado estable facilitan el movimiento. Si el piso está mojado o irregular, cambiá de recorrido para reducir el riesgo de caída. Pedí ayuda para adaptar el entorno cuando una barrera hace difícil moverte con seguridad.',
                    'Empezá y terminá de manera progresiva. Mareos, sensación de desmayo o malestar importante son motivos para detenerte y buscar orientación. No uses el sudor como medida de cuánto te sirvió la actividad. En Paraguay, el calor puede hacer que un esfuerzo habitual se sienta más intenso, incluso en una caminata corta.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Movimientos y situaciones que necesitan adaptación',
                'body' => [
                    'A medida que crece la panza, cambia el centro de gravedad y algunas posturas dejan de resultar cómodas. Evitá actividades con alto riesgo de caídas, golpes en el abdomen o contacto físico intenso. El buceo con equipo no se recomienda durante el embarazo. Para cualquier actividad que no conozcas, preguntá antes de asumir que una clase general se adapta a vos.',
                    'Si una postura boca arriba te provoca mareo o falta de aire, girate de lado e incorporáte con cuidado. Los ejercicios pueden adaptarse sentada, de costado o con apoyos según el caso. No hace falta atravesar dolor para conseguir un beneficio. El dolor en pelvis, espalda o articulaciones indica que conviene revisar el movimiento y la carga.',
                    'Al trabajar fuerza, una técnica controlada y respirar durante el esfuerzo ayudan a evitar tensiones innecesarias. No contengas la respiración para empujar una carga. Si no sabés cómo adaptar un ejercicio, pedí supervisión de alguien capacitado en actividad durante el embarazo. La experiencia previa y los síntomas orientan las modificaciones.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué es el suelo pélvico y qué hace un Kegel',
                'body' => [
                    'El suelo pélvico es un conjunto de músculos y tejidos que sostiene órganos de la pelvis y participa en la continencia y otras funciones. Durante el embarazo soporta cambios de carga y presión. Los ejercicios de contracción pueden ayudar a reconocer y trabajar esos músculos, pero la capacidad de relajarlos también es importante.',
                    'Para identificar la sensación, imaginá que cerrás suavemente alrededor de la uretra, la vagina y el ano, con un pequeño movimiento hacia adentro y arriba. Después soltá por completo. Mantené el resto del cuerpo lo más relajado posible y seguí respirando. Apretar fuerte las nalgas, juntar las rodillas o empujar hacia abajo no es el mismo movimiento.',
                    'No uses cortar el chorro de orina como entrenamiento habitual. Practicá fuera del baño, en una posición cómoda. Si no distinguís contracción de empuje, una evaluación de suelo pélvico puede ayudarte. No hace falta aumentar repeticiones para compensar una técnica que todavía no sentís clara.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Relajar también forma parte del ejercicio',
                'body' => [
                    'Entre contracciones, dejá que los músculos vuelvan al descanso. Una sensación de tensión que no cede, dolor durante la práctica o dificultad para relajar son razones para consultar. Más fuerza no siempre es la respuesta a cualquier molestia pélvica. Algunas personas necesitan trabajar coordinación o relajación antes de seguir un programa de fortalecimiento.',
                    'Las pérdidas de orina, sensación de peso vaginal o dolor con ciertas actividades merecen conversación clínica. Aunque sean frecuentes, no tenés que resignarte a convivir con ellas ni aumentar Kegel sin evaluación. Explicá cuándo aparecen: al toser, al caminar, durante una relación sexual o después de estar mucho tiempo de pie.',
                    'Un profesional puede ayudarte a ajustar la duración y cantidad de contracciones y comprobar si la técnica corresponde a tu situación. Una app o un temporizador organizan el momento, pero no comprueban qué músculos estás usando. El progreso se valora por función y comodidad, no solamente por completar una serie.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Durante la práctica',
                        'Qué revisar'
                    ],
                    'rows' => [
                        [
                            'Contracción suave hacia adentro y arriba',
                            'Respirar y evitar apretar todo el cuerpo'
                        ],
                        [
                            'Pausa entre contracciones',
                            'Soltar por completo antes de repetir'
                        ],
                        [
                            'Dolor o peso pélvico',
                            'Pedir evaluación y adaptar la rutina'
                        ],
                        [
                            'Duda sobre qué músculo trabaja',
                            'Buscar demostración y revisión de técnica'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cuándo parar y pedir atención',
                'body' => [
                    'Detené la actividad y buscá atención ante sangrado, salida de líquido, dolor abdominal importante, contracciones dolorosas persistentes, dolor de pecho, falta de aire intensa o desmayo. Si el bebé se mueve menos de lo habitual, consultá inmediatamente. Revisá [las señales de alarma](/salud/senales-de-alarma/); no esperes a terminar una clase para comunicar estos cambios.',
                    'Para molestias leves que se repiten con un movimiento, suspendé ese ejercicio y conversá una adaptación antes de retomarlo. Registrar qué estabas haciendo ayuda a identificar la dificultad. También importan la recuperación y el descanso: en [dormir en el embarazo](/salud/dormir-en-el-embarazo/) encontrás ideas de postura y rutina. Una actividad sostenible deja lugar a las variaciones de energía y a las indicaciones de cada etapa.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Elegí una posición cómoda',
                'body' => [
                    'Empezá sin dolor, con el cuerpo apoyado y respiración tranquila.'
                ]
            ],
            [
                'title' => 'Reconocé el movimiento',
                'body' => [
                    'Buscá una contracción suave hacia adentro y arriba, sin empujar ni contener el aire.'
                ]
            ],
            [
                'title' => 'Soltá y evaluá',
                'body' => [
                    'Relajá por completo. Si no podés soltar o sentís dolor, pedí una revisión antes de continuar.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye herramientas de ejercicios y Kegel. Pueden acompañar una rutina acordada con tu equipo, sin reemplazar la revisión de técnica ni las indicaciones de tu embarazo.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Puedo empezar si antes no hacía ejercicio?',
                'a' => 'En ausencia de contraindicaciones, suele ser posible comenzar de forma gradual. Conversá tu situación y elegí una actividad cómoda con pausas.'
            ],
            [
                'q' => '¿Kegel se practica mientras hago pis?',
                'a' => 'No como rutina. Practicá fuera del baño y pedí ayuda si no reconocés la contracción y la relajación.'
            ],
            [
                'q' => '¿Si me duele sigo para fortalecer?',
                'a' => 'No. El dolor o la presión pélvica requieren revisar la técnica y el plan; insistir con más repeticiones puede no ser adecuado.'
            ],
            [
                'q' => '¿La app puede comprobar mi técnica?',
                'a' => 'No. Una guía o un temporizador no evalúan qué músculos usás; esa revisión necesita un profesional.'
            ]
        ],
        'related' => [
            'dormir-en-el-embarazo',
            'diabetes-gestacional',
            'senales-de-alarma'
        ],
        'weeks' => [
            12,
            20,
            28,
            34
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención prenatal y salud materna',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Directrices de la OMS sobre actividad física y hábitos sedentarios',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
];
