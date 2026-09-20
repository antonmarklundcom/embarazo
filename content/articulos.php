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
    'terere-en-el-embarazo' => [
        'cluster' => 'alimentacion',
        'path' => '/alimentacion/terere-en-el-embarazo/',
        'title' => 'Tereré en el embarazo: cafeína, agua y cuidados',
        'seoTitle' => 'Tereré en el embarazo: cuidados y cafeína',
        'metaDescription' => 'Tereré en el embarazo: cómo moderar la cafeína, cuidar el agua y el hielo, limpiar la bombilla y consultar por los yuyos que usás.',
        'kind' => 'medical',
        'lead' => 'El tereré aporta cafeína y puede formar parte de tus costumbres con moderación, según tus indicaciones prenatales. Tomalo con agua e hielo seguros, mantené limpios el termo y la bombilla y evitá agregar yuyos sin consultar por la planta concreta. Para el calor, alterná con agua sola: una ronda larga no permite saber cuánta cafeína tomaste.',
        'sections' => [
            [
                'h2' => '¿El agua fría cambia la cafeína?',
                'body' => [
                    'La cafeína está en la yerba. Prepararla con agua fría no la elimina ni convierte al tereré en una bebida libre de estimulantes. La cantidad que llega a tu guampa depende de la yerba, cuánto usás, cómo cebás y cuánto dura la ronda. Por eso, contar solamente termos o comparar con una taza de café puede dar una impresión equivocada de lo que consumiste.',
                    'La palabra mateína suele usarse para hablar de la cafeína de la yerba mate; no significa que sea una sustancia distinta o que deje de contar durante el embarazo. Si además tomás café, té, cocido o gaseosas con cafeína, todos esos aportes se suman. El agua que agregás después cambia la preparación, pero no borra lo que ya tomaste al principio de la ronda.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Cómo moderar una costumbre que acompaña toda la tarde',
                'body' => [
                    'Un cambio práctico es separar el momento del tereré del hábito de tener siempre la bombilla a mano. Prepará una ronda más breve y dejá cerca una botella de agua. Si en tu trabajo el termo se rellena muchas veces, prestá atención a cuánto participás vos, no solamente a cuánta agua pasa por el grupo. La frecuencia también importa aunque cada cebada parezca pequeña.',
                    'Para conversar en el control, describí un día habitual: si tomás mate al levantarte, cocido en el desayuno y tereré después del almuerzo. Contá también las bebidas que usás cuando dormís poco. Esa descripción ayuda más que decir “tomo poco”. Podés revisar las diferencias entre [mate y cocido](/alimentacion/mate-y-cocido/) y elegir qué momento querés conservar, evitando acumular varias bebidas con cafeína en el mismo día.',
                    'Si notás que el tereré te produce palpitaciones, acidez o dificultad para dormir, reducí el consumo y conversalo con tu equipo. Esos síntomas merecen atención aunque otra persona tome lo mismo sin molestias. No uses tu tolerancia al sabor o al estímulo para estimar seguridad: una bebida puede no sentirse fuerte y aun así aportar cafeína.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Agua, hielo y jugo: qué entra en el termo',
                'body' => [
                    'Usá agua apta para beber y hielo elaborado con esa misma calidad de agua. El frío no desinfecta. Cuando comprás hielo o preparás el termo fuera de casa, importa conocer su procedencia y cómo se manipulá. Si no tenés seguridad sobre el agua disponible, elegí una alternativa segura para beber en vez de confiar en que la yerba o el limón la van a limpiar.',
                    'Un jugo agregado al agua puede sumar azúcar y necesita cuidados de conservación. Lavá la fruta antes de cortarla, usá utensilios limpios y prepará una cantidad que puedas mantener fría y consumir sin dejarla durante horas al calor. No mezcles una preparación vieja con agua nueva para prolongarla. La base más sencilla para la hidratación cotidiana sigue siendo el agua segura, sin necesidad de saborizantes.',
                    'El tereré aporta líquido, pero no conviene que sea tu única bebida. En días calurosos, tomá agua regularmente y buscá sombra y pausas. El cansancio de una tarde húmeda no se resuelve aumentando la cafeína. En [hidratación con el calor](/alimentacion/hidratacion-con-el-calor/) tenés ideas para organizar salidas, viajes y momentos de descanso sin depender de una ronda.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Bombilla, guampa y manos limpias',
                'body' => [
                    'La bombilla pasa saliva de una persona a otra. Usar tu propio equipo evita ese intercambio, especialmente si alguien tiene tos, dolor de garganta, lesiones en la boca o se siente enfermo. Compartir el mismo termo para servir en recipientes individuales requiere igualmente manos limpias y cuidado de no tocar las bocas de los recipientes. El embarazo no cambia esas reglas básicas de higiene.',
                    'Al terminar, descartá la yerba húmeda y lavá guampa, bombilla y termo según el material y las instrucciones del fabricante. Las partes estrechas necesitan limpieza: enjuagar por fuera no retira necesariamente los restos que quedan adentro. Dejá secar las piezas antes de guardarlas. Si llevás el equipo en una bolsa, evitá encerrar todo mojado junto con alimentos u objetos sucios.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Yuyos: el nombre y la preparación importan',
                'body' => [
                    'Agregar una planta fresca no vuelve al tereré más seguro ni más hidratante. Un nombre popular puede identificar plantas diferentes, y un manojo puede mezclar varias especies. Si querés consultar por menta, cedrón u otro yuyo, llevá el envase o una descripción de dónde lo compraste y cómo lo preparás. La foto ayuda a iniciar la conversación, pero no garantiza identificarlo correctamente.',
                    'Hasta aclarar si corresponde para vos, prepará el tereré sin ese agregado. Los extractos, aceites esenciales y preparados concentrados no equivalen a unas hojas usadas por su sabor. Tampoco uses mezclas para “limpiar”, bajar la presión o tratar una infección. La guía de [yuyos en el embarazo](/alimentacion/yuyos/) organiza las preguntas por tipo de producto y explica por qué lavar una planta no resuelve la duda sobre sus efectos.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Si te sentís mal durante una ronda',
                'body' => [
                    'Dejá de tomar la preparación que te causa molestias y explicá qué contenía cuando consultes. Si aparece dolor de pecho, falta de aire, desmayo o palpitaciones intensas con malestar, buscá atención urgente; no atribuyas todo a la yerba o al calor. También requieren atención los vómitos que no te permiten retener líquidos. Revisá [las señales de alarma](/salud/senales-de-alarma/) para reconocer otras situaciones que necesitan ayuda.',
                    'Si ya tomaste un tereré con una mezcla desconocida, no intentes compensarlo con otra infusión ni provocar el vómito. Conservá la información del producto y consultá por esa exposición. Una conversación concreta sobre ingredientes y síntomas permite orientar la atención sin convertir una costumbre familiar en motivo de culpa.',
                ],
                'items' => [],
                'table' => null,
            ],
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye una guía de tereré, mate, cocido y cafeína, además del seguimiento por semanas. Podés usarla como punto de partida para conversar sobre tus bebidas habituales en el control.',
            'medium' => 'article',
            'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿El tereré sin azúcar no tiene cafeína?',
                'a' => 'La cafeína viene de la yerba, no del azúcar. Prepararlo sin azúcar evita ese agregado, pero el aporte de cafeína sigue existiendo.',
            ],
            [
                'q' => '¿Puedo contar un termo como una taza de café?',
                'a' => 'No hay una equivalencia fija útil para todas las preparaciones. Cambian la yerba, las cebadas y cuánto toma cada persona.',
            ],
            [
                'q' => '¿El hielo mata los microbios del agua?',
                'a' => 'No. Prepará el hielo con agua segura y manipulalo con utensilios limpios.',
            ],
            [
                'q' => '¿Puedo tomar tereré sin yuyos?',
                'a' => 'Sí, no necesitás agregar plantas para prepararlo. Igual conviene moderar la yerba y alternar con agua sola.',
            ],
        ],
        'related' => [
            'mate-y-cocido',
            'yuyos',
            'hidratacion-con-el-calor',
        ],
        'weeks' => [
            8,
            20,
            28,
        ],
        'appGuideSlug' => 'terere-mate-cocido-cafeina-embarazo',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre alimentación saludable y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
            ['title' => 'Manual sobre las cinco claves para la inocuidad de los alimentos', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20',
        'image' => null,
    ],
    'mate-y-cocido' => [
        'cluster' => 'alimentacion',
        'path' => '/alimentacion/mate-y-cocido/',
        'title' => 'Mate y cocido en el embarazo: qué conviene limitar',
        'seoTitle' => 'Mate y cocido en el embarazo',
        'metaDescription' => 'Mate y cocido en el embarazo: revisá la cafeína del día, el azúcar del cocido quemado y la temperatura para adaptar el desayuno y la merienda.',
        'kind' => 'medical',
        'lead' => 'El mate y el cocido de yerba aportan cafeína. Durante el embarazo conviene moderarlos y sumar lo que tomás de café, té y otras bebidas con cafeína. El cocido quemado también puede llevar bastante azúcar. Elegí porciones moderadas, evitá beberlos muy calientes y usá leche pasteurizada si la agregás; la leche no elimina la cafeína.',
        'sections' => [
            [
                'h2' => 'Mate cebado y cocido no son preparaciones idénticas',
                'body' => [
                    'En el mate cebado, la misma yerba recibe agua varias veces y la ronda puede extenderse mientras trabajás o conversás. En el cocido, suele prepararse una infusión que se sirve en una taza. Ninguna de esas formas permite afirmar que siempre tendrá poca cafeína. La cantidad de yerba, el tiempo de contacto con el agua y el volumen que tomás cambian de una casa a otra.',
                    'Un cocido de saquito tampoco es automáticamente libre de cafeína. Leé qué contiene: puede ser yerba mate, té u otra mezcla. El color claro o el sabor suave no son una medida confiable del estimulante. Si el envase ofrece información sobre cafeína, guardala para tu consulta; cuando no la ofrece, describir la preparación ayuda a reconocer el hábito sin inventar una equivalencia numérica.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Mirar el día completo, desde el desayuno hasta la noche',
                'body' => [
                    'Pensá en todas las bebidas, no solamente en la que te preocupa ahora. A veces el mate de la mañana se suma al cocido de la merienda, una gaseosa cola con la comida y un café para seguir despierta. Elegir agua en algunos de esos momentos reduce la acumulación. Si también tomás [tereré](/alimentacion/terere-en-el-embarazo/), incluilo en la misma conversación porque la yerba sigue aportando cafeína.',
                    'Podés empezar registrando en papel qué tomaste un día habitual y a qué hora. Incluí el tamaño de la taza, los rellenos y si compartiste la ronda. No hace falta pesar cada hoja ni calcular miligramos sin datos. El objetivo es descubrir momentos en que tomás por costumbre, aunque no tengas sed, y encontrar un reemplazo sencillo que puedas sostener.',
                    'Las bebidas energizantes no son una opción para sostener el ritmo durante el embarazo. Pueden combinar cafeína con otros estimulantes y mucho azúcar. Si estás muy cansada, revisar descanso, comidas y controles ofrece una respuesta más útil que cambiar el café por una lata. El cansancio intenso o persistente merece comentarse con tu equipo, especialmente si limita tus actividades habituales.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Cocido quemado: sabor, azúcar y acompañamiento',
                'body' => [
                    'En el cocido quemado se carameliza azúcar como parte de la preparación. Ese azúcar cuenta aunque después no agregues otra cucharada a la taza. Preguntá cómo está hecho cuando lo comprás o te lo sirven. Para una versión cotidiana, podés preparar la infusión con menos azúcar y acostumbrarte gradualmente a un sabor menos dulce, sin necesidad de reemplazarla por productos caros.',
                    'Agregar leche puede aportar nutrientes y volverlo parte de una merienda, pero no neutraliza la cafeína ni el azúcar. Elegí leche pasteurizada o tratada de forma segura, respetá su conservación y evitá dejar la mezcla tibia durante horas. Si no tolerás leche, conversá opciones de alimentación según lo que conseguís; no necesitás forzarte a tomarla dentro del cocido para cumplir con el desayuno.',
                    'El acompañamiento cambia la comida completa. Un cocido con varias chipas puede dejar poco lugar para fruta u otros alimentos a lo largo del día. Probá servir lo que vas a comer en un plato, sentarte y reconocer hambre y saciedad. La guía de [chipa, sopa paraguaya y asado](/alimentacion/chipa-sopa-paraguaya-y-asado/) propone combinaciones para conservar comidas conocidas con más variedad.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Qué limitar y qué cambio podés probar',
                'body' => [
                    'La tabla reúne decisiones sobre bebidas habituales, sin convertirlas en un menú obligatorio. Si tenés una indicación específica por diabetes gestacional, reflujo u otro problema, adaptá estas ideas con tu equipo. El tamaño de las porciones y el resto de tu alimentación importan más que clasificar una taza aislada como buena o mala.',
                    'Una alternativa sin cafeína necesita identificación clara. Cambiar el mate por una mezcla de yuyos desconocida no resuelve el cuidado del embarazo. El agua y, cuando forma parte de tu alimentación, la leche segura permiten variar sin sumar una planta medicinal. Revisá los ingredientes de los productos que se anuncian como relajantes o digestivos antes de incorporarlos.',
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Qué limitar',
                        'Por qué revisarlo',
                        'Cambio posible',
                    ],
                    'rows' => [
                        [
                            'Rondas prolongadas de mate',
                            'La cafeína se acumula con otras bebidas',
                            'Acortá la ronda y alterná con agua',
                        ],
                        [
                            'Cocido con mucho azúcar',
                            'El azúcar de la receta también cuenta',
                            'Prepará menos dulce y evitá agregar más',
                        ],
                        [
                            'Bebidas energizantes',
                            'Pueden combinar estimulantes',
                            'Elegí agua y consultá por el cansancio',
                        ],
                        [
                            'Bebidas que queman la boca',
                            'La temperatura puede lastimar',
                            'Dejalas enfriar antes de beber',
                        ],
                        [
                            'Infusiones medicinales desconocidas',
                            'No se conoce bien su composición',
                            'Consultá por cada ingrediente antes de usarlas',
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Temperatura, acidez y sueño',
                'body' => [
                    'Dejá enfriar la bebida hasta que puedas tomarla sin quemarte. Soplar entre sorbos no compensa una temperatura que sigue lastimando la boca. El termo conserva el calor durante bastante tiempo: comprobá la temperatura al servirte, sobre todo si alguien lo cargó por vos. Una bebida templada permite disfrutar el ritual sin buscar que el agua está cada vez más caliente.',
                    'Si el mate te da acidez, probá reducir la cantidad y evitá acostarte inmediatamente después. Una preparación fuerte con el estómago vacío puede resultar molesta para algunas personas. Observá tu respuesta sin atribuir cualquier dolor al desayuno. La cafeína cerca de la hora de dormir también puede dificultar el descanso, incluso si sentís sueño; cambiar esa taza por agua es un ajuste posible.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Cuando una molestia necesita consulta',
                'body' => [
                    'La falta de aire, el dolor de pecho, el desmayo o las palpitaciones acompañadas de malestar intenso requieren atención inmediata. No tomes otra bebida para contrarrestar el efecto y no esperes a terminar la ronda. Tené presente [las señales de alarma](/salud/senales-de-alarma/) y explicá al equipo qué consumiste, cuánto aproximadamente y cuándo empezaron los síntomas.',
                    'Si te indicaron hierro, preguntá cómo separar su toma del mate, el té o el cocido; estas infusiones pueden dificultar la absorción de hierro. No cambies la dosis ni suspendas el suplemento para mantener la merienda. También podés consultar cómo organizar las bebidas alrededor de tus comidas, especialmente si te diagnosticaron anemia. Llevar los horarios habituales permite encontrar una organización realista.',
                ],
                'items' => [],
                'table' => null,
            ],
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'En Mi Bebé podés encontrar la guía sobre tereré, mate, cocido y cafeína. Usala junto con el seguimiento de tu semana para preparar preguntas sobre tus desayunos, meriendas y descanso.',
            'medium' => 'article',
            'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿La leche corta la cafeína del cocido?',
                'a' => 'No. La mezcla conserva la cafeína de la yerba. Elegí leche segura y considerá también el azúcar de la preparación.',
            ],
            [
                'q' => '¿El cocido quemado cuenta como bebida azucarada?',
                'a' => 'Si se prepara con azúcar, ese aporte cuenta aunque no endulces la taza después. Preguntá por la receta y moderá la cantidad.',
            ],
            [
                'q' => '¿Qué tomo si quiero descansar de la yerba?',
                'a' => 'El agua es una alternativa sencilla. No reemplaces automáticamente la yerba por una mezcla medicinal de ingredientes desconocidos.',
            ],
        ],
        'related' => [
            'terere-en-el-embarazo',
            'chipa-sopa-paraguaya-y-asado',
            'antojos-y-anemia',
        ],
        'weeks' => [
            12,
            24,
            32,
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre alimentación saludable y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20',
        'image' => null,
    ],
    'yuyos' => [
        'cluster' => 'alimentacion',
        'path' => '/alimentacion/yuyos/',
        'title' => 'Yuyos en el embarazo: qué consultar antes de usarlos',
        'seoTitle' => 'Yuyos en el embarazo: cuidados y consultas',
        'metaDescription' => 'Yuyos en el embarazo: cómo identificar una mezcla, qué preguntar sobre menta o cedrón y por qué los extractos no equivalen a hojas en el tereré.',
        'kind' => 'medical',
        'lead' => 'Antes de agregar un yuyo al tereré o tomarlo como remedio, consultá por la planta y la preparación concretas. Que sea natural o de uso familiar no garantiza seguridad durante el embarazo. Evitá mezclas sin identificar, preparados concentrados y aceites esenciales por vía oral. Si buscás aliviar un síntoma, explicalo al equipo para elegir una opción adecuada.',
        'sections' => [
            [
                'h2' => 'Un mismo nombre puede esconder plantas diferentes',
                'body' => [
                    'En la casa, la feria o el puesto de remedios yuyos se usan nombres populares que cambian según la zona. Dos manojos con el mismo nombre pueden no ser la misma especie. También se venden mezclas en las que una parte de las hojas o raíces queda sin identificar. Esa incertidumbre importa cuando la intención es tomar el preparado todos los días o usarlo para tratar una molestia.',
                    'Para consultar, conservá el envase original y anotá el nombre con que te lo vendieron, dónde lo conseguiste y qué partes usás. Si está rotulado, llevá la lista completa de ingredientes. Una foto del manojo puede ayudar, pero no reemplaza una identificación confiable. Evitá probar una planta para reconocerla por el gusto; tampoco es seguro decidir solamente por el olor o el parecido con otra.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Hojas, infusiones y extractos no son intercambiables',
                'body' => [
                    'Usar una pequeña cantidad de una hierba como condimento culinario no es lo mismo que hervir un puñado, repetir la infusión varias veces o tomar gotas de un extracto. Cambian la concentración y la exposición. Una recomendación que recibiste para una forma de uso no se traslada automáticamente a otra. Contá si la preparación queda en agua fría, se hierve o viene lista para beber.',
                    'Los aceites esenciales son productos concentrados y no conviene ingerirlos por cuenta propia durante el embarazo. Tampoco agregues gotas al termo porque un video las describa como naturales. Las tinturas pueden incluir alcohol u otros componentes. Si el envase no permite conocer qué contiene, elegir no consumirlo hasta aclararlo es una decisión práctica, sin necesidad de experimentar con cantidades menores.',
                    'En el [tereré](/alimentacion/terere-en-el-embarazo/) no hace falta añadir una planta medicinal para disfrutar la bebida. La yerba ya aporta cafeína y debe moderarse por separado. Quitar los yuyos no elimina ese aporte; son dos preguntas distintas que podés llevar al control: cuánto y cómo tomás yerba, y qué otros ingredientes pensabas agregar.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Preguntas para cada tipo de yuyo o producto',
                'body' => [
                    'La tabla organiza situaciones frecuentes y las referencias generales para revisarlas. No asigna una planta a una lista de autorizadas: para eso hacen falta identificación y evaluación de tu caso. Las orientaciones de atención prenatal de la OMS y las del MSPBS ayudan a encuadrar la consulta; no prueban por sí solas la seguridad de cada especie local.',
                    'Si alguien te ofrece una mezcla para “limpiar la sangre”, eliminar líquidos o preparar el parto, preguntá primero qué contiene y no la uses como tratamiento por tu cuenta. Una promesa amplia no explica qué efecto tendrá ni cómo puede interactuar con medicamentos. La presión alta, la infección urinaria o el sangrado necesitan evaluación clínica, aunque el preparado sea una receta conocida en la familia.',
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Producto o uso',
                        'Qué llevar a la consulta',
                        'Referencia general',
                    ],
                    'rows' => [
                        [
                            'Menta o cedrón por nombre popular',
                            'Identificación, hojas usadas y preparación; no asumir seguridad',
                            'OMS: recomendaciones de atención prenatal; evaluación individual',
                        ],
                        [
                            'Mezcla de raíces para el tereré',
                            'Lista completa y procedencia; evitarla si no se identifica',
                            'MSPBS: orientación de control prenatal y uso de productos medicinales',
                        ],
                        [
                            'Infusión para estreñimiento o para orinar',
                            'Síntoma, frecuencia y otros medicamentos; no automedicarse',
                            'OMS: recomendaciones de atención prenatal; MSPBS: control prenatal',
                        ],
                        [
                            'Gotas, tinturas o aceites esenciales',
                            'Envase y concentración; no ingerir por cuenta propia',
                            'MSPBS: orientación sobre uso seguro de medicamentos y productos medicinales',
                        ],
                        [
                            'Preparado para adelantar el parto',
                            'Ingredientes si ya se consumió; consultar sin usarlo para inducir',
                            'OMS: recomendaciones de atención prenatal y atención del parto',
                        ],
                    ],
                ],
            ],
            [
                'h2' => 'Lavar el manojo resuelve solo una parte del problema',
                'body' => [
                    'Las hojas, raíces y recipientes pueden traer tierra y microbios. Lavarse las manos y usar agua segura son cuidados básicos, pero no convierten una especie desconocida en una opción segura. Hervir tampoco elimina necesariamente las sustancias activas de una planta. Evitá pensar que una preparación es inocua porque quedó clara, porque se coló o porque se tomá fría.',
                    'No recolectes plantas en lugares expuestos a residuos, aguas contaminadas o productos químicos para preparar una bebida. Si comprás alimentos frescos, cuidá su limpieza y conservación; si se trata de un preparado medicinal, además necesitás saber qué es. Esas dos condiciones se complementan. Una bolsa prolija, una etiqueta artesanal o una recomendación entusiasta no sustituyen la información sobre composición.',
                    'Las mezclas húmedas que quedan durante horas al calor agregan un problema de conservación. Descartar restos y limpiar recipientes evita prolongar ese uso. Para organizar qué llevar en días calurosos, revisá [hidratación con el calor](/alimentacion/hidratacion-con-el-calor/): agua segura, sombra y pausas ofrecen medidas concretas sin recurrir a bebidas supuestamente depurativas.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Si buscás calmar náuseas, estreñimiento o nervios',
                'body' => [
                    'Empezá por contar el síntoma: desde cuándo aparece, cuánto interfiere con comer o dormir y qué probaste. Para náuseas leves, comer porciones pequeñas y evitar olores que te molestan puede ayudar. Para estreñimiento, los alimentos con fibra, el agua y el movimiento tolerado suelen formar parte del cuidado. Si no alcanza, tu equipo puede evaluar opciones sin que tengas que ensayar una mezcla laxante.',
                    'Para dificultad para dormir, revisá los horarios de cafeína y una rutina de descanso. Los productos “para los nervios” pueden combinar varias sustancias y no son equivalentes a una bebida común. Si la ansiedad te desborda o te impide funcionar, pedí apoyo. Describir lo que necesitás aliviar permite elegir una respuesta al problema real, en lugar de cambiar de yuyo cada vez que alguien recomienda uno.',
                    'Informá también qué medicamentos y suplementos usás. Las plantas pueden modificar sus efectos o sumar molestias, y dejar de tomar un medicamento indicado para reemplazarlo por un remedio casero puede perjudicarte. No suspendas tratamientos por una recomendación del vendedor. Llevá la duda a quien controla tu embarazo y, si corresponde, al profesional que indicó ese tratamiento.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Ya lo tomá: qué información ayuda',
                'body' => [
                    'Si consumiste un preparado que no conocés, guardá el envase o los datos de la mezcla, anotá cuándo lo tomaste y una cantidad aproximada, y consultá. No provoques el vómito ni tomes otra planta para neutralizarlo. Una exposición aislada no permite anticipar por sí sola qué va a pasar; la orientación depende de identificar el producto y de cómo te encontrás.',
                    'Ante dificultad para respirar, hinchazón de labios o lengua, desmayo, dolor intenso o sangrado, buscá atención urgente. No esperes a que el preparado “termine de hacer efecto”. Podés reconocer otras situaciones en [las señales de alarma](/salud/senales-de-alarma/). Si otra persona te acompaña, pedile que lleve la información del producto sin retrasar la salida para reunirla.',
                ],
                'items' => [],
                'table' => null,
            ],
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé reúne guías de embarazo y una guía sobre tereré, mate, cocido y cafeína. Podés leerla para preparar la conversación con tu equipo sobre las bebidas y plantas que usás.',
            'medium' => 'article',
            'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿La menta o el cedrón están permitidos para todas?',
                'a' => 'No se puede responder solo con el nombre popular. Consultá por la especie, la forma de preparación y la frecuencia de uso.',
            ],
            [
                'q' => '¿Hervir un yuyo lo vuelve seguro?',
                'a' => 'Hervir puede cambiar la preparación, pero no garantiza eliminar sustancias activas ni vuelve segura una planta desconocida.',
            ],
            [
                'q' => '¿Puedo usar una mezcla para la infección urinaria?',
                'a' => 'No la uses para reemplazar la consulta o un tratamiento indicado. Los síntomas urinarios durante el embarazo necesitan evaluación.',
            ],
            [
                'q' => '¿Una foto alcanza para identificarlo?',
                'a' => 'Puede orientar la conversación, pero no asegura una identificación correcta. Llevá también envase, ingredientes y procedencia.',
            ],
        ],
        'related' => [
            'terere-en-el-embarazo',
            'mate-y-cocido',
            'hidratacion-con-el-calor',
        ],
        'weeks' => [
            6,
            12,
            28,
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre alimentación saludable y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre uso seguro de medicamentos y productos medicinales', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20',
        'image' => null,
    ],
    'pescado-de-rio-y-mercurio' => [
        'cluster' => 'alimentacion',
        'path' => '/alimentacion/pescado-de-rio-y-mercurio/',
        'title' => 'Pescado de río en el embarazo: mercurio y cocción',
        'seoTitle' => 'Pescado de río y mercurio en el embarazo',
        'metaDescription' => 'Pescado de río en el embarazo: elegí con información sobre especie y procedencia, cuidá el frío y la cocción, y entendé qué cambia con el mercurio.',
        'kind' => 'medical',
        'lead' => 'El pescado bien cocido puede aportar nutrientes durante el embarazo, pero la especie y la procedencia importan por el mercurio y otros contaminantes. No todos los peces de río tienen el mismo riesgo. Elegí proveedores que puedan identificar lo que venden, variá tus alimentos y consultá la orientación local para el pescado que conseguís. Cocinarlo no elimina el mercurio.',
        'sections' => [
            [
                'h2' => 'Nutrientes y contaminantes: dos preguntas diferentes',
                'body' => [
                    'El pescado aporta proteínas y, según la especie, grasas que forman parte de una alimentación variada. Eso no significa que cualquier pescado sea adecuado en cualquier cantidad. El mercurio puede acumularse en los peces y llegar a quien los consume. Durante el embarazo interesa reducir esa exposición porque puede afectar al desarrollo del sistema nervioso del bebé. La elección requiere mirar más allá de si el pescado es fresco.',
                    'Los peces grandes y depredadores tienden a acumular más mercurio a lo largo de su vida. Es una orientación general, no una medición del pescado que tenés delante. El río, la zona de captura y el tamaño también pueden influir. Una foto o un nombre de venta no bastan para asegurar que una pieza tiene poco mercurio, y el olor normal tampoco informa sobre ese contaminante.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Surubí, dorado, pacú y tilapia: no armar una lista por intuición',
                'body' => [
                    'En Paraguay podés encontrar pescado vendido como surubí, dorado, pacú o tilapia. Preguntá por la especie concreta, si proviene de captura o de cría y cuál es su procedencia. No conviene convertir esos nombres en una tabla de “permitidos” sin orientación confiable sobre la especie y el origen. Un pescado de criadero tampoco queda automáticamente libre de contaminantes o problemas de conservación.',
                    'Si alguien pescó una pieza para la familia, averiguá dónde y cuándo la obtuvo y cómo la mantuvo fría. Antes de consumir pescado de una zona con avisos de contaminación, consultá las recomendaciones locales aplicables. Si no podés aclarar la procedencia o hay una advertencia vigente que no entendés, elegí otra fuente de proteína mientras resolvés esa elección; no necesitás comer esa pieza para completar el día.',
                    'Para tu consulta prenatal, llevá el nombre con que lo comprás y cuántas veces suele aparecer en tu semana. El equipo puede orientar la variedad y frecuencia según la información disponible. Evitá comer repetidamente un mismo pescado grande como única proteína. Alternar con legumbres, huevo bien cocido y otras carnes bien cocidas permite diversificar sin depender de un producto cuya procedencia no conocés.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Qué cambia al cocinar y qué no',
                'body' => [
                    'La cocción completa reduce riesgos por microbios y parásitos. El limón del ceviche, la sal o el ahumado no equivalen a cocinar completamente una pieza. Durante el embarazo elegí preparaciones cocidas y evitá pescado crudo o poco hecho. Si comés fuera de casa, podés pedir que lo cocinen bien y preguntar cómo se conserva antes de llegar al plato.',
                    'El mercurio está dentro del tejido del pescado. Lavar, freír, hervir, sacar la piel o agregar limón no lo elimina de forma confiable. Tampoco congelar corrige ese problema. Por eso hay dos cuidados separados: elegir el pescado con información sobre contaminantes y prepararlo de forma higiénica. Resolver la cocción no compensa una procedencia preocupante; una procedencia conocida tampoco permite comerlo crudo.',
                    'La carne del pescado cocido suele volverse opaca y separarse con facilidad, pero el aspecto por sí solo no garantiza que toda la pieza alcanzó una cocción segura. Las partes gruesas requieren especial atención y un termómetro de cocina usado según las indicaciones de seguridad alimentaria ayuda a comprobarla. Evitá servir porciones con centro crudo, aunque la superficie está dorada.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'De la compra a la heladera',
                'body' => [
                    'Comprá pescado que se mantenga refrigerado o sobre hielo en condiciones limpias, y llevá una conservadora si el traslado lo necesita. Hacé esa compra cerca del final del recorrido para reducir el tiempo fuera del frío. Si está congelado, cuidá que siga congelado durante el traslado. Un envase roto, pérdidas de líquido o dudas sobre cuánto tiempo estuvo expuesto son motivos para elegir otra opción.',
                    'En casa, guardalo protegido y separado de alimentos listos para comer, de modo que sus jugos no caigan sobre ensaladas o frutas. Descongelá en la heladera, en un recipiente, en vez de dejar la pieza sobre la mesada al calor. Lavá manos, cuchillos y superficies después de tocar pescado crudo. No uses el mismo plato sucio para recibir las porciones cocidas.',
                    'Si preparás caldo o pescado al horno para varias personas, serví lo que van a comer y refrigerá las sobras pronto en recipientes adecuados. No dejes la olla toda la tarde esperando la cena. Recalentá completamente la porción que vas a usar y evitá repetir ciclos de calentamiento y enfriado. Las mismas ideas se aplican a otras [comidas paraguayas](/alimentacion/chipa-sopa-paraguaya-y-asado/) que llevan carne, huevo o queso.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Un plato completo sin convertirlo en obligación',
                'body' => [
                    'Podés acompañar el pescado con mandioca bien cocida, arroz o verduras, según lo que tengas. Lavá con agua segura las verduras que comerás crudas y preparalas aparte del pescado sin cocinar. Para una comida familiar, una porción de pescado con acompañamientos variados permite compartir la mesa sin concentrar todo el plato en una pieza muy grande.',
                    'Si el olor te da náuseas o no conseguís una opción confiable, no hace falta forzarte. Conversá cómo cubrir tus necesidades con otros alimentos disponibles. Tampoco reemplaces automáticamente el pescado por suplementos de aceite de pescado: el tipo de producto y su indicación necesitan revisión. En el hub de [alimentación](/alimentacion/) encontrás otras formas de pensar variedad, seguridad y costumbres durante el embarazo.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Después de comer: cuándo pedir ayuda',
                'body' => [
                    'Si aparecen fiebre, vómitos persistentes, diarrea con mal estado general o dolor abdominal importante después de comer, consultá sin atribuirlo simplemente a una comida pesada. Buscá atención urgente ante dificultad respiratoria, desmayo o una reacción intensa. Contá qué comiste y si otras personas también se enfermaron; esos datos ayudan a orientar la evaluación.',
                    'Una comida aislada no permite calcular tu exposición al mercurio ni diagnosticar un problema. Si te preocupa haber comido frecuentemente un pescado de origen dudoso, describí el consumo al equipo y no uses productos “desintoxicantes”. Para reconocer síntomas que requieren atención inmediata, revisá [las señales de alarma](/salud/senales-de-alarma/). El seguimiento se decide con tu historia, no mediante una prueba casera.',
                ],
                'items' => [],
                'table' => null,
            ],
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye seguimiento semanal y guías de embarazo. Podés usarlos para acompañar tus preguntas sobre alimentación, llevando al control los nombres y la procedencia de los pescados que consumís.',
            'medium' => 'article',
            'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿Freír elimina el mercurio?',
                'a' => 'No. La cocción ayuda a controlar riesgos biológicos, pero no elimina de forma confiable el mercurio del tejido.',
            ],
            [
                'q' => '¿El pescado de criadero siempre es seguro?',
                'a' => 'No es una garantía por sí sola. También importan especie, procedencia, controles, conservación y preparación.',
            ],
            [
                'q' => '¿Puedo comer ceviche con mucho limón?',
                'a' => 'El limón no reemplaza la cocción completa. Durante el embarazo elegí pescado bien cocido.',
            ],
            [
                'q' => '¿Tengo que dejar todo pescado de río?',
                'a' => 'No se puede decidir por la palabra “río” solamente. Consultá la orientación sobre especie y origen y elegí opciones identificables.',
            ],
        ],
        'related' => [
            'chipa-sopa-paraguaya-y-asado',
            'antojos-y-anemia',
        ],
        'weeks' => [
            12,
            20,
            28,
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre alimentación saludable y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
            ['title' => 'Manual sobre las cinco claves para la inocuidad de los alimentos', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Mercurio y salud', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20',
        'image' => null,
    ],
    'chipa-sopa-paraguaya-y-asado' => [
        'cluster' => 'alimentacion',
        'path' => '/alimentacion/chipa-sopa-paraguaya-y-asado/',
        'title' => 'Chipa, sopa paraguaya y asado durante el embarazo',
        'seoTitle' => 'Chipa, sopa paraguaya y asado en el embarazo',
        'metaDescription' => 'Chipa, sopa paraguaya y asado en el embarazo: combiná tus comidas de siempre con variedad y cuidá el queso, la cocción y las sobras en días de calor.',
        'kind' => 'medical',
        'lead' => 'Podés incluir chipa, sopa paraguaya y asado durante el embarazo con porciones que te resulten cómodas y una alimentación variada. Importan el queso y la leche seguros, la cocción completa del huevo y la carne, y conservar las sobras en frío. No hace falta dejar la comida paraguaya: elegí cómo prepararla y con qué acompañarla.',
        'sections' => [
            [
                'h2' => 'Chipa: una comida conocida dentro de un día variado',
                'body' => [
                    'La chipa suele combinar almidón, queso, huevo y grasa; las recetas y los tamaños varían mucho. Por eso una unidad no representa siempre la misma porción. Podés servir una cantidad que te deje satisfecha y acompañarla con fruta lavada o con otro alimento que toleres. Comer directamente de una bolsa grande mientras viajás hace más difícil reconocer cuánto comiste y si seguís teniendo hambre.',
                    'La chipa puede formar parte del desayuno o de la merienda, pero comer solo chipa durante gran parte del día deja menos espacio para verduras, legumbres y otras fuentes de nutrientes. Si estás con náuseas y es de lo poco que tolerás, probá sumar variedad en otros momentos, sin obligarte a un plato grande. Consultá si las náuseas te impiden comer o beber adecuadamente.',
                    'Cuando la comprás, elegí un lugar que cuide manipulación y conservación. Para prepararla en casa, usá ingredientes seguros y cociná bien la masa; evitá probarla cruda porque lleva huevo y otros ingredientes que necesitan cocción. Que una pieza está dorada por fuera no siempre indica que el centro quedó hecho, especialmente si es grande o el horno calienta de manera despareja.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Sopa paraguaya: porción, queso y cocción del centro',
                'body' => [
                    'La sopa paraguaya es una preparación sólida de harina de maíz, habitualmente con queso, leche, huevo y cebolla. Puede acompañar una comida con verduras y una fuente de proteína, según la receta y lo que ya haya en el plato. Si la combinás con mandioca, pan y arroz al mismo tiempo, podés elegir cuáles te apetecen y servir menos de cada uno para dejar lugar a otros alimentos.',
                    'Para el queso Paraguay y la leche, buscá procedencia confiable y productos pasteurizados o tratados de forma segura. El aspecto artesanal no permite saber si la leche recibió tratamiento. Preguntá al comprar y respetá el frío que necesita el producto. Evitá usar queso de origen desconocido suponiendo que cualquier horneado corregirá todos los problemas de elaboración o conservación.',
                    'Cociná la preparación hasta que el interior está firme y bien hecho, sin masa cruda. Si hacés una fuente grande para una reunión, pensá desde el principio cómo vas a guardar lo que sobre. Cortar porciones y usar recipientes poco profundos facilita enfriarlas y refrigerarlas pronto. Una fuente tapada en la mesa sigue fuera del frío aunque no entren moscas.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Asado: bien cocido también por dentro',
                'body' => [
                    'La carne puede aportar proteínas y hierro, pero durante el embarazo conviene comerla completamente cocida. Pedí una porción bien hecha, sin centro crudo. La superficie tostada no alcanza para evaluar el interior de un corte grueso. Un termómetro de cocina, usado con las indicaciones de seguridad alimentaria para ese tipo de carne, permite comprobar mejor la cocción que mirar solamente el color.',
                    'Prestá especial atención a hamburguesas y otras carnes picadas, porque la manipulación distribuye microbios dentro de la preparación. Los chorizos también necesitan cocción completa; ahumado o curado no significa necesariamente listo para comer. Moderá los embutidos como parte habitual de la dieta por su sal y composición, sin convertirlos en la única proteína disponible en la parrilla.',
                    'Usá una pinza o utensilio limpio para retirar la carne cocida. El plato donde esperó cruda no sirve para recibirla sin lavar. Mantené separados jugos crudos, tablas y ensaladas. Si ayudás a preparar, lavate las manos después de manipular carne y antes de tocar pan o verduras. Los cuidados de [pescado de río](/alimentacion/pescado-de-rio-y-mercurio/) comparten esta separación entre alimentos crudos y listos para comer.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Ensalada, mandioca y bebidas para acompañar',
                'body' => [
                    'Una ensalada de tomate, zanahoria u hojas bien lavadas aporta variedad al asado. Usá agua segura y preparala lejos de la tabla de carne. Si lleva mayonesa, preferí un producto elaborado con huevo pasteurizado y mantené la preparación refrigerada; evitá mayonesa casera con huevo crudo. Sacá a la mesa lo que se va a servir y reponé desde el frío cuando haga falta.',
                    'La mandioca se come correctamente pelada y bien cocida, nunca cruda. Puede acompañar el plato sin necesidad de que todos los acompañamientos sean harinas o almidones. La combinación no tiene que ser perfecta en cada comida: buscá variedad a lo largo del día. Si tenés diabetes gestacional, conversá cómo distribuir las porciones según tu indicación en vez de eliminar grupos enteros por tu cuenta.',
                    'Para beber, el agua es una opción sencilla. Las gaseosas y jugos azucarados pueden sumar bastante azúcar si se repiten durante toda la reunión. Evitá alcohol durante el embarazo. Si elegís cocido o mate en otro momento del día, considerá su cafeína; la guía de [mate y cocido](/alimentacion/mate-y-cocido/) ayuda a revisar esos acompañamientos sin perder el ritual de la merienda.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Sobras y calor: planificar antes de sentarse a comer',
                'body' => [
                    'En un almuerzo largo, la comida puede quedar expuesta al calor mientras la familia sigue conversando. Conservá caliente lo que corresponde servir caliente y refrigerá pronto lo que vas a guardar, sin esperar a que termine toda la reunión. Si no hay manera de mantener una preparación perecedera a temperatura segura, prepará o serví menos cantidad de una vez.',
                    'No guardes una sobra dudosa pensando que el recalentado arregla cualquier problema. Algunos riesgos persisten aunque vuelvas a calentar. Si desconocés cuánto tiempo estuvo una ensalada con huevo, queso o carne fuera del frío, lo prudente es descartarla. Para llevar comida de visita, usá recipientes limpios y una conservadora cuando se necesite frío; el trayecto también cuenta como parte de la conservación.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Disfrutar la mesa y reconocer un malestar importante',
                'body' => [
                    'Comer despacio, elegir porciones cómodas y evitar acostarte enseguida puede ayudar si las comidas abundantes te provocan reflujo. No necesitás compensar una reunión salteando las comidas del día siguiente. Retomá tus horarios y la variedad habitual. Si alguien insiste en que comas por dos, podés explicar que preferís servirte según tu hambre y las indicaciones que recibiste.',
                    'Fiebre, vómitos que impiden tomar agua, diarrea con decaimiento importante o dolor intenso merecen consulta. No supongas que todo es “empacho” ni uses un yuyo para postergar la atención. Ante síntomas graves, buscá ayuda urgente y revisá [las señales de alarma](/salud/senales-de-alarma/). Contar qué comiste y cómo se conservá ayuda a evaluar lo ocurrido.',
                ],
                'items' => [],
                'table' => null,
            ],
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé ofrece seguimiento semanal y guías para acompañar el embarazo. Podés abrir tu semana y preparar preguntas sobre las comidas que tolerás y las adaptaciones que te indicó tu equipo.',
            'medium' => 'article',
            'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿La chipa está prohibida si estoy embarazada?',
                'a' => 'No por el embarazo en sí. Importan la preparación segura, la porción y la variedad del resto de tu alimentación; adaptala si tenés una indicación específica.',
            ],
            [
                'q' => '¿Puedo comer asado jugoso?',
                'a' => 'Elegí carne completamente cocida, sin centro crudo. La superficie dorada por sí sola no garantiza la cocción del interior.',
            ],
            [
                'q' => '¿Cualquier queso Paraguay sirve para la sopa?',
                'a' => 'Buscá queso de procedencia confiable y leche pasteurizada o tratada de forma segura. El horneado no sustituye una buena elaboración y conservación.',
            ],
            [
                'q' => '¿Puedo guardar la ensalada que quedó toda la tarde afuera?',
                'a' => 'Si perdió el frío y no sabés si se mantuvo segura, descartala. Volver a refrigerarla no revierte lo que ocurrió durante la exposición.',
            ],
        ],
        'related' => [
            'pescado-de-rio-y-mercurio',
            'mate-y-cocido',
            'antojos-y-anemia',
        ],
        'weeks' => [
            12,
            24,
            32,
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre alimentación saludable y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
            ['title' => 'Manual sobre las cinco claves para la inocuidad de los alimentos', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20',
        'image' => null,
    ],
    'antojos-y-anemia' => [
        'cluster' => 'alimentacion',
        'path' => '/alimentacion/antojos-y-anemia/',
        'title' => 'Antojos y anemia en el embarazo: cómo distinguirlos',
        'seoTitle' => 'Antojos y anemia en el embarazo',
        'metaDescription' => 'Antojos y anemia en el embarazo: qué significa querer comer hielo o tierra, cómo combinar alimentos con hierro y cuándo llevar tus síntomas al control.',
        'kind' => 'medical',
        'lead' => 'Un antojo de comida no demuestra que te falte hierro. Las ganas persistentes de comer tierra, tiza u otras sustancias no alimentarias, o de masticar hielo, necesitan consulta porque pueden relacionarse con anemia u otros problemas. La anemia se evalúa con tu historia y análisis, no por el antojo solamente. No comas esas sustancias ni te automediques con hierro.',
        'sections' => [
            [
                'h2' => 'Un deseo de comida no es un análisis de sangre',
                'body' => [
                    'Durante el embarazo pueden cambiar el apetito, el gusto y la sensibilidad a los olores. Tener ganas de mango, chipa o algo ácido no permite identificar una carencia concreta. Si el alimento es seguro para vos, podés incluirlo dentro de una alimentación variada. No hace falta satisfacer cada antojo de inmediato ni comer algo que te cae mal por miedo a perjudicar al bebé.',
                    'Los antojos tampoco obligan a compensar después con ayunos. Si comiste una porción más grande de lo habitual, retomá tus comidas regulares y reconocé cómo te sentís. Cuando un deseo ocupa casi todas tus comidas y desplaza otros alimentos, vale la pena conversar sobre variedad y apetito. Puede ayudar describir un día real de alimentación, con horarios y lo que conseguís, sin juzgarlo como bueno o malo.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Hielo, tierra o tiza: una consulta que merece escucharse',
                'body' => [
                    'El deseo persistente de ingerir sustancias que no son alimentos se conoce como pica. Masticar hielo de manera repetida también merece comentarse, aunque el hielo parezca inocuo. Estas conductas pueden asociarse con falta de hierro, pero no la confirman ni explican todos los casos. Contalo con claridad: qué deseás, desde cuándo, si llegaste a ingerirlo y con qué frecuencia aparece.',
                    'Comer tierra, arcilla, tiza, jabón o cenizas puede exponerte a contaminantes, parásitos o lesiones. Evitá consumirlos y mantenelos fuera de tu alcance inmediato si el impulso es fuerte. Pedí apoyo a alguien de confianza y a tu equipo. Cambiar tierra por una versión vendida como “comestible” no garantiza seguridad; tampoco se resuelve el problema eligiendo una sustancia de aspecto más limpio.',
                    'Si ya ingeriste un producto de limpieza u otra sustancia potencialmente tóxica, buscá orientación urgente y llevá el envase si está disponible. No provoques el vómito ni intentes neutralizarlo con otra bebida. Para las ganas frecuentes de hielo, evitá masticar trozos duros que puedan dañar los dientes y consultá por el impulso. No es un motivo de vergüenza ni algo que tengas que ocultar en el control.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Qué es la anemia y por qué no alcanza con mirar síntomas',
                'body' => [
                    'La anemia significa que la sangre tiene una capacidad reducida de transportar oxígeno, habitualmente evaluada a través de la hemoglobina y otros datos. La falta de hierro es una causa frecuente, pero existen otras. En el embarazo aumentan las necesidades y cambian los componentes de la sangre; tu equipo interpreta el resultado según la etapa y tus antecedentes, sin depender de una cifra aislada que encontraste en internet.',
                    'Podés sentir cansancio, debilidad, palpitaciones o falta de aire con el esfuerzo, pero esos síntomas también aparecen por otras razones. A veces no hay molestias evidentes. El control prenatal permite pedir e interpretar los análisis que correspondan. Si ya tenés un resultado, llevá el informe completo y cualquier estudio previo; comparar datos útiles requiere conocer fechas y contexto, no solamente una foto de un valor marcado.',
                    'La falta de aire en reposo, el dolor de pecho, el desmayo o el deterioro rápido requieren atención urgente. No los atribuyas a anemia sin evaluación ni esperes a mejorar con una comida rica en hierro. Revisá [las señales de alarma](/salud/senales-de-alarma/) para otras situaciones importantes. Un cambio intenso en cómo te sentís merece ayuda aunque todavía no tengas los análisis.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Alimentos con hierro que podés combinar en casa',
                'body' => [
                    'Las carnes bien cocidas aportan hierro que el cuerpo suele aprovechar con mayor facilidad. Las legumbres, como porotos y lentejas, también aportan hierro junto con otros nutrientes. Podés incluirlas en guisos, ensaladas seguras o acompañamientos, según tus gustos. No hace falta comprar un producto especial para empezar a variar; un plato casero puede combinar legumbres, cereal o mandioca y verduras.',
                    'La vitamina C de alimentos como cítricos, guayaba, tomate o locote ayuda a aprovechar el hierro de origen vegetal cuando se consumen en la misma comida. Por ejemplo, podés acompañar un guiso de lentejas con tomate lavado o una fruta. Ese apoyo no convierte la comida en tratamiento suficiente para una anemia ya diagnosticada, pero sí forma parte de hábitos útiles.',
                    'El mate, el té y el cocido pueden dificultar la absorción del hierro de los alimentos. En vez de acompañar todas las comidas con esas infusiones, elegí agua y conversá cómo distribuirlas, especialmente si recibiste diagnóstico de anemia. El artículo de [mate y cocido](/alimentacion/mate-y-cocido/) explica también cómo considerar la cafeína. No reemplaces una comida por varias rondas de yerba para calmar el hambre.',
                    'No recurras al hígado como tratamiento casero habitual: puede aportar mucha vitamina A preformada, cuyo exceso es perjudicial durante el embarazo. Evitá suplementos de vitamina A o mezclas de vitaminas sin indicación. Para opciones cotidianas de carne y acompañamientos, revisá [chipa, sopa paraguaya y asado](/alimentacion/chipa-sopa-paraguaya-y-asado/), con atención a la cocción y la variedad.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Si te indicaron un suplemento',
                'body' => [
                    'Los suplementos de hierro pueden formar parte de la prevención o del tratamiento prenatal según la indicación que recibiste. Tomalos como te explicaron, sin aumentar por tu cuenta la cantidad por sentirte cansada o tener antojos. Revisá si otros productos que tomás también contienen hierro para evitar duplicaciones. Llevá los envases al control cuando no tengas claro qué incluye cada uno.',
                    'El hierro puede causar molestias digestivas o estreñimiento. Si te pasa, avisá para que el equipo revise cómo tomarlo o qué alternativa corresponde; no lo abandones en silencio ni lo mezcles con yuyos laxantes. Preguntá qué separación necesita respecto de infusiones, lácteos y otros medicamentos. Conservá el producto fuera del alcance de niñas y niños, porque una ingestión accidental puede ser peligrosa.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Preparar el seguimiento sin exigir resultados inmediatos',
                'body' => [
                    'Anotá qué síntomas tenés, cómo afectan tus actividades y qué indicación estás siguiendo. La respuesta al tratamiento se controla con la evolución y, cuando corresponde, nuevos análisis; no se confirma porque un antojo desapareció después de una comida. Preguntá cuándo revisar resultados y qué hacer si las molestias dificultan continuar. Tener esas respuestas permite sostener el cuidado con menos incertidumbre.',
                    'En casa, pedir ayuda para cocinar o comprar puede ser más útil que recibir comentarios sobre lo que “deberías” comer. Si el presupuesto o las náuseas limitan la variedad, contalo en el control para buscar opciones posibles. El objetivo es alimentarte y seguir el tratamiento indicado, sin convertir cada deseo de comida en una prueba de que estás haciendo algo mal.',
                ],
                'items' => [],
                'table' => null,
            ],
        ],
        'steps' => [],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye herramientas de diario y resumen prenatal. Podés usar esos espacios para acompañar tus preguntas sobre síntomas y controles, junto con los informes e indicaciones de tu equipo.',
            'medium' => 'article',
            'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿Antojo de carne significa falta de hierro?',
                'a' => 'No. Un deseo de comida no diagnostica una deficiencia. La evaluación considera antecedentes, síntomas y análisis.',
            ],
            [
                'q' => '¿Masticar hielo puede relacionarse con anemia?',
                'a' => 'Puede asociarse con falta de hierro y merece consulta si es persistente. No confirma el diagnóstico por sí solo.',
            ],
            [
                'q' => '¿Con lentejas alcanza para tratar la anemia?',
                'a' => 'Las lentejas ayudan a una dieta variada, pero una anemia diagnosticada puede requerir tratamiento y seguimiento. Seguí la indicación del equipo.',
            ],
            [
                'q' => '¿Dejo el hierro si me estriñe?',
                'a' => 'Consultá para adaptar la toma o revisar alternativas. No cambies la cantidad ni lo suspendas por tu cuenta.',
            ],
        ],
        'related' => [
            'mate-y-cocido',
            'chipa-sopa-paraguaya-y-asado',
            'pescado-de-rio-y-mercurio',
        ],
        'weeks' => [
            12,
            24,
            28,
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre alimentación saludable y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20',
        'image' => null,
    ],
    'hidratacion-con-el-calor' => [
        'cluster' => 'alimentacion',
        'path' => '/alimentacion/hidratacion-con-el-calor/',
        'title' => 'Hidratación en el embarazo cuando hace calor',
        'seoTitle' => 'Hidratación con el calor en el embarazo',
        'metaDescription' => 'Hidratación en el embarazo con calor: organizá el agua para salir, reconocé señales de deshidratación y elegí bebidas sin depender del tereré.',
        'kind' => 'medical',
        'lead' => 'Cuando hace calor, tomá agua segura regularmente, buscá sombra y hacé pausas para refrescarte. Las necesidades cambian con la actividad, la transpiración y tu situación de salud; no hay una cantidad idéntica para todas. No dependas solo del tereré. Si no podés retener líquidos, te desmayás o estás confusa, necesitás atención urgente.',
        'sections' => [
            [
                'h2' => 'Agua a mano antes de que la salida se complique',
                'body' => [
                    'El calor aumenta la pérdida de agua a través del sudor. Durante el embarazo puede costarte más tolerar una espera al sol, un colectivo lleno o una caminata larga. Preparar agua antes de salir evita depender de encontrar un puesto o llegar a destino. Elegí una botella limpia, fácil de llevar y que puedas rellenar con agua de procedencia segura.',
                    'Tomá a intervalos regulares y respondé a la sed, sin esperar a estar muy incómoda. Si un vaso grande te provoca náuseas, probá sorbos pequeños y frecuentes. La cantidad que necesitás cambia con el clima y lo que hacés durante el día. Si tu equipo te indicó restringir líquidos por un problema de salud, consultá cómo adaptar esa indicación al calor en vez de aumentarlos por tu cuenta.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'La orina orienta, pero no cuenta toda la historia',
                'body' => [
                    'Orinar menos de lo habitual o tener orina muy oscura puede indicar que necesitás revisar tu hidratación, especialmente si además tenés sed o boca seca. Una orina de color claro suele acompañar una hidratación adecuada, pero vitaminas, alimentos y medicamentos también pueden cambiar el color. No uses una comparación de colores como única prueba de que todo está bien.',
                    'Prestá atención al conjunto: cómo te sentís, cuánto estás pudiendo beber, si transpiraste mucho y si hubo vómitos o diarrea. No hace falta forzar agua hasta que la orina sea transparente ni beber grandes cantidades de golpe. El objetivo es reponer de manera regular y tolerable. Si seguís orinando muy poco pese a beber, o el malestar aumenta, buscá evaluación.',
                    'La hinchazón de pies puede aparecer en el embarazo y no se resuelve dejando de tomar agua. Tampoco uses tés diuréticos para “sacar líquido”. Una hinchazón repentina, especialmente de cara o manos, junto con dolor de cabeza o cambios visuales necesita atención. Las recomendaciones de [yuyos](/alimentacion/yuyos/) explican por qué una mezcla para orinar no reemplaza esa evaluación.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Tereré, jugos y otras bebidas en días pesados',
                'body' => [
                    'El agua sola es una base práctica porque no agrega cafeína ni azúcar. Puede estar fresca o a la temperatura que toleres; no necesitás que está helada para que hidrate. Si agregás rodajas de fruta, lavalas antes de cortar, usá un recipiente limpio y cuidá la conservación. El hielo también tiene que hacerse con agua segura: el frío no elimina los microbios.',
                    'El tereré aporta líquido y cafeína. Una ronda que dura toda la tarde puede aumentar el consumo de yerba sin que lo notes, sobre todo si ya tomaste mate o café. Alterná con agua y reservá el tereré para un momento acotado. En [tereré en el embarazo](/alimentacion/terere-en-el-embarazo/) podés revisar limpieza del equipo, procedencia del hielo y cuidados con los agregados.',
                    'Los jugos y gaseosas azucaradas pueden sumar bastante azúcar si reemplazan cada vaso de agua. La fruta entera ofrece fibra y puede acompañar una colación, aunque no sustituye toda la bebida que necesitás. Evitá energizantes para enfrentar el cansancio del calor y evitá alcohol. Las bebidas deportivas no son necesarias por rutina para pasar una tarde calurosa.',
                    'Cuando hay vómitos o diarrea, puede hacer falta reponer sales además de agua. Consultá si corresponde una solución de rehidratación oral y cómo usar el producto indicado. Una gaseosa o bebida deportiva no es equivalente. No improvises mezclas concentradas de sal o azúcar: una preparación incorrecta puede empeorar el problema. Si no retenés líquidos, necesitás atención y no seguir probando bebidas en casa.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'El cuerpo también necesita enfriarse',
                'body' => [
                    'Beber agua ayuda, pero no compensa permanecer bajo sol intenso sin descanso. Buscá lugares con sombra o ventilación, elegí ropa liviana y planificá tareas físicas para los momentos menos calurosos cuando sea posible. Si estás haciendo actividad, bajá el ritmo y hacé pausas. No uses el sudor como objetivo de ejercicio ni intentes “aguantar” hasta completar una tarea.',
                    'En viajes o esperas, ubicá dónde podés sentarte y conseguir agua segura. Si trabajás cerca de hornos, en un local muy caluroso o al aire libre, conversá cómo incorporar descansos y acceso a agua durante la jornada. Un acompañante puede ayudarte a cargar bolsas o adelantar una gestión. Esas adaptaciones reducen la exposición y pueden ser más útiles que llevar una botella cada vez más grande.',
                    'En casa, buscá el ambiente más fresco disponible y refrescá la piel con agua si te resulta agradable. Si un ventilador no alcanza y te sentís mal, trasladate a un lugar más fresco y pedí ayuda. No permanezcas en un vehículo cerrado esperando que la incomodidad pase. La hidratación y el enfriamiento trabajan juntos; uno no reemplaza al otro.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Comidas livianas y agua segura fuera de casa',
                'body' => [
                    'Una fruta lavada, verduras y preparaciones que toleres pueden acompañar el día sin que tengas que saltear comidas por el calor. Si comés menos cantidad en una sentada, podés distribuir las comidas. Conservá en frío lo que lo requiera, como yogur, queso y platos cocidos. Llevar una colación en una bolsa al sol durante horas puede crear un problema de seguridad alimentaria.',
                    'No rellenes una botella con agua cuyo origen desconocés solamente porque está fría. Si el abastecimiento de tu casa no es seguro, seguí las indicaciones locales para obtener agua apta para beber y preparar alimentos. Lavá la botella y su tapa con regularidad, y dejalas secar cuando no las uses. Compartir recipientes para beber también comparte saliva; llevar uno propio facilita el cuidado.',
                ],
                'items' => [],
                'table' => null,
            ],
            [
                'h2' => 'Cuándo el calor deja de ser una molestia común',
                'body' => [
                    'Si sentís mareo, debilidad o náuseas mientras estás expuesta al calor, interrumpí la actividad, andá a un lugar fresco y pedí compañía. Podés beber sorbos si estás plenamente despierta y tragás con normalidad. Si el malestar persiste, consultá; si hay desmayo, confusión, convulsiones o dificultad respiratoria, buscá atención urgente. No des líquidos por boca a alguien confuso o inconsciente.',
                    'La fiebre durante el embarazo, los vómitos que impiden retener agua y una disminución importante de la orina también necesitan evaluación. Si ya reconocés movimientos del bebé y notás que disminuyen, consultá de inmediato: no esperes a que una bebida fría los reactive. Encontrás otras situaciones en [las señales de alarma](/salud/senales-de-alarma/). El calor no explica automáticamente cualquier síntoma nuevo.',
                ],
                'items' => [],
                'table' => null,
            ],
        ],
        'steps' => [
            [
                'title' => 'Prepará la salida',
                'body' => [
                    'Cargá agua segura en una botella limpia y ubicá lugares donde puedas descansar, ir al baño y rellenarla de forma segura.',
                ],
            ],
            [
                'title' => 'Repartí agua y pausas',
                'body' => [
                    'Bebé regularmente y buscá sombra. Ajustá el esfuerzo y el horario si el calor se vuelve difícil de tolerar.',
                ],
            ],
            [
                'title' => 'Actuá si aparece malestar',
                'body' => [
                    'Dejá la actividad y pedí ayuda. Ante confusión, desmayo o dificultad para respirar, buscá atención urgente.',
                ],
            ],
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé ofrece seguimiento por semanas y un apartado de emergencia. Podés conocer esos recursos y tener presente con quién consultar si el calor se acompaña de síntomas que te preocupan.',
            'medium' => 'article',
            'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿Cuántos litros tengo que tomar?',
                'a' => 'Las necesidades varían con actividad, calor y salud. Tomá regularmente y pedí una orientación individual si tenés restricciones o pérdidas por vómitos y diarrea.',
            ],
            [
                'q' => '¿El agua tiene que estar helada?',
                'a' => 'No. Elegí una temperatura agradable. La seguridad del agua y tomarla regularmente importan más que el frío.',
            ],
            [
                'q' => '¿Dejo de tomar agua si se me hinchan los pies?',
                'a' => 'No reduzcas líquidos ni tomes diuréticos por tu cuenta. Consultá por la hinchazón, especialmente si aparece de golpe o con dolor de cabeza y cambios visuales.',
            ],
            [
                'q' => '¿Una bebida fría sirve para comprobar que el bebé está bien?',
                'a' => 'No es una prueba de bienestar. Si notás menos movimientos de los habituales, consultá de inmediato sin esperar a que una bebida los cambie.',
            ],
        ],
        'related' => [
            'terere-en-el-embarazo',
            'yuyos',
            'mate-y-cocido',
        ],
        'weeks' => [
            20,
            28,
            32,
            36,
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre alimentación saludable y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
        ],
        'updated' => '2026-09-20',
        'image' => null,
    ],
    'dias-fertiles' => [
        'cluster' => 'planear', 'path' => '/planear/dias-fertiles/',
        'title' => 'Días fértiles: cómo estimar la ventana fértil',
        'seoTitle' => 'Días fértiles: cómo estimarlos',
        'metaDescription' => 'Entendé cómo estimar tus días fértiles, qué cambia con ciclos irregulares y por qué el calendario orienta la búsqueda pero no sirve como anticonceptivo.',
        'kind' => 'medical',
        'lead' => 'Los días fértiles abarcan aproximadamente los cinco días anteriores a la ovulación y el día en que ocurre. La fecha cambia entre personas y entre ciclos: no siempre es el día 14. Un calendario ayuda a estimar esa ventana, pero no confirma la ovulación. Las estimaciones de ventana fértil no son un método anticonceptivo. Si buscás un embarazo, conocer el ciclo puede orientar las relaciones sin convertirlas en una obligación.',
        'sections' => [
            ['h2' => 'Por qué hay varios días fértiles', 'body' => [
                'La ovulación es la liberación de un óvulo desde el ovario. Después de salir, el óvulo suele poder fecundarse durante unas 12 a 24 horas. Los espermatozoides pueden sobrevivir varios días dentro del aparato reproductor cuando las condiciones son favorables. Por eso una relación anterior a la ovulación puede dar lugar a un embarazo: ambos no necesitan llegar al mismo tiempo. Esa diferencia explica por qué hablamos de una ventana y no de una única fecha.',
                'Los días cercanos y anteriores a la ovulación suelen concentrar las mayores posibilidades, pero ningún día marcado garantiza un embarazo. Tampoco un día que aparece fuera de la ventana permite descartar esa posibilidad. El calendario trabaja con fechas pasadas y una predicción del ciclo actual; una ovulación que se adelanta o se atrasa cambia el cálculo. Si querés evitar un embarazo, conversá sobre anticoncepción y no uses estas estimaciones para decidir cuándo prescindir de protección.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Cómo contar tu ciclo sin confundir las fechas', 'body' => [
                'El día uno es el primer día de la menstruación. La duración del ciclo se cuenta desde ese inicio hasta el día anterior a la siguiente menstruación. No es la cantidad de días que sangrás. Por ejemplo, si una regla empieza el 1 y la siguiente el 29 del mismo mes, el ciclo anterior duró 28 días. Anotar ambos inicios resulta más útil que recordar solamente cuándo terminó el sangrado.',
                'Registrá varios ciclos si tenés esos datos y mirá cuánto varían, además del promedio. Un promedio de 28 días puede esconder ciclos bastante distintos. Si no recordás una fecha, dejala como desconocida en vez de completarla de memoria. Podés conocer el [calendario de ovulación](/calendario-de-ovulacion/) para orientar el cálculo, manteniendo presente que el resultado expresa una estimación. La regularidad ayuda a predecir, pero no demuestra que todos los meses haya ocurrido ovulación.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Qué significa restar días a la próxima regla', 'body' => [
                'Muchos cálculos ubican la ovulación aproximadamente dos semanas antes de la siguiente menstruación. Es una referencia: el intervalo también varía. Además, cuando todavía no llegó la próxima regla, su fecha es una predicción. Restar catorce días a una fecha incierta no transforma el resultado en un dato confirmado. Un ciclo más largo suele desplazar la estimación hacia adelante; uno más corto, hacia atrás.',
                'Esta tabla muestra ejemplos didácticos contando desde el primer día de sangrado. No es una indicación de relaciones ni una clasificación de días seguros. La ventana real puede quedar fuera de los días mostrados, incluso si los meses anteriores fueron parecidos. Si tu ciclo cambia mucho, es preferible llevar el registro a una consulta que seguir ajustando una fórmula hasta obtener una fecha que parezca exacta.'
            ], 'items' => [], 'table' => ['head' => ['Duración supuesta', 'Ovulación estimada', 'Ventana aproximada'], 'rows' => [
                ['26 días', 'Día 12', 'Días 7 a 12'], ['28 días', 'Día 14', 'Días 9 a 14'], ['32 días', 'Día 18', 'Días 13 a 18']
            ]]],
            ['h2' => 'Moco cervical, temperatura y tests de ovulación', 'body' => [
                'Cerca de la ovulación, algunas personas notan secreción más transparente, elástica y resbaladiza. Es una observación posible, no una prueba por sí sola. El semen, algunos productos vaginales y las infecciones pueden cambiar el aspecto de la secreción. Si aparece picazón, olor fuerte o dolor, explicalo al equipo de salud; no lo interpretes como una señal de fertilidad. No necesitás hacer exploraciones internas para usar un calendario.',
                'La temperatura basal puede subir ligeramente después de la ovulación, pero el sueño interrumpido, una enfermedad y distintos horarios dificultan interpretarla. Los tests de ovulación detectan cambios hormonales que pueden precederla; no son tests de embarazo ni certifican que el óvulo haya sido liberado. Si usás uno, seguí las instrucciones del producto y consultá resultados difíciles de interpretar. Combinar registros puede aportar contexto, aunque también aumentar la carga si terminás vigilando el cuerpo todo el día.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Buscar sin depender de un único día', 'body' => [
                'Si llevás tus registros a una consulta, señalá qué fechas corresponden a menstruaciones observadas y cuáles eran predicciones. Podés agregar si ese mes estuviste enferma, viajaste o cambiaste horarios, sin asumir que eso explica cualquier variación. Mostrá también el rango de duraciones, no solo el promedio. Así el equipo puede interpretar la incertidumbre del calendario y decidir si necesita más información. Una captura con un día coloreado, por sí sola, no cuenta toda la historia del ciclo.',
                'Si tienen relaciones vaginales para buscar un embarazo, una frecuencia regular a lo largo del ciclo puede evitar depender de acertar una fecha. Algunas parejas eligen relaciones cada dos o tres días; otras prefieren orientarse por la ventana estimada. Busquen una frecuencia que ambos quieran y puedan sostener. No hace falta cumplir horarios ni continuar si hay dolor, cansancio o falta de deseo. El consentimiento y el bienestar siguen siendo parte de la búsqueda.',
                'Después de suspender anticonceptivos, durante la lactancia o con ciclos muy variables, las predicciones pueden ser menos útiles. La ausencia de menstruación tampoco asegura ausencia de ovulación. Consultá si las reglas desaparecen, el dolor interfiere con tu vida o la irregularidad te preocupa. En [cuándo consultar si no llega el embarazo](/planear/si-no-llega-el-embarazo/) encontrás cómo influyen el tiempo de búsqueda y los antecedentes. La consulta puede hacerse antes de cumplir un plazo si necesitás orientación.',
                'Un atraso se evalúa con una prueba, no repasando el calendario para decidir si era posible concebir. Leé [cuándo hacer un test de embarazo](/planear/test-de-embarazo-cuando/). Si hay dolor abdominal intenso, desmayo o sangrado abundante, buscá atención urgente aunque una prueba haya salido negativa; revisá [las señales de alarma](/salud/senales-de-alarma/). Llevar las fechas ayuda a explicar lo ocurrido, pero no debe demorar la atención.'
            ], 'items' => [], 'table' => null]
        ],
        'steps' => [
            ['title' => 'Anotá el inicio de cada menstruación', 'body' => ['Diferenciá el primer día de regla de un manchado aislado y marcá cualquier fecha dudosa.']],
            ['title' => 'Observá la variación entre ciclos', 'body' => ['Compará las duraciones sin asumir que el promedio será idéntico al próximo ciclo.']],
            ['title' => 'Usá la estimación como orientación', 'body' => ['Elegí cómo organizar la búsqueda y llevá tus dudas sobre irregularidad o dolor a la consulta.']]
        ],
        'appHandoff' => ['text' => 'El modo de planificación de Mi Bebé incluye calendario menstrual y estimación de la ventana fértil. Podés reunir tus fechas para conversar sobre el ciclo; la estimación no confirma ovulación ni sirve como anticoncepción.', 'medium' => 'article', 'extra' => ['modo' => 'planeando']],
        'faq' => [
            ['q' => '¿Siempre se ovula el día 14?', 'a' => 'No. Es un ejemplo frecuente para un ciclo supuesto de 28 días. La ovulación puede cambiar incluso con menstruaciones regulares.'],
            ['q' => '¿Puedo quedar embarazada fuera de lo que marca el calendario?', 'a' => 'Sí. La fecha estimada puede no coincidir con la real. No uses el calendario como anticonceptivo.'],
            ['q' => '¿El test de ovulación confirma un embarazo?', 'a' => 'No. Detecta un cambio hormonal distinto. Para evaluar un posible embarazo necesitás una prueba de embarazo.'],
            ['q' => '¿Necesito registrar todos los signos?', 'a' => 'No. Un registro simple puede alcanzar para preparar la consulta. Si observar cada señal te genera angustia, podés simplificarlo.']
        ],
        'related' => ['test-de-embarazo-cuando', 'checklist-preconcepcion', 'si-no-llega-el-embarazo'],
        'weeks' => [1, 2, 3], 'appGuideSlug' => null, 'guarani' => [], 'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => null,
        'sources' => [
            ['title' => 'Orientaciones sobre salud sexual y reproductiva y fertilidad', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre planificación familiar y atención preconcepcional', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null]
        ], 'updated' => '2026-09-20', 'image' => null
    ],
    'test-de-embarazo-cuando' => [
        'cluster' => 'planear', 'path' => '/planear/test-de-embarazo-cuando/',
        'title' => 'Test de embarazo: cuándo hacerlo y cómo leerlo', 'seoTitle' => 'Test de embarazo: cuándo hacerlo',
        'metaDescription' => 'Conocé cuándo hacer un test de embarazo, cómo leer un resultado negativo o dudoso y qué pasos seguir si hay atraso, síntomas o una prueba positiva.',
        'kind' => 'medical',
        'lead' => 'Podés hacer un test de embarazo en orina desde el primer día de atraso menstrual. Si no sabés cuándo tendría que venirte, una referencia útil es hacerlo al menos tres semanas después de la relación sin protección que querés evaluar. Una prueba demasiado temprana puede dar negativa aunque exista embarazo. Seguí las instrucciones del envase: el tiempo de lectura y la forma de usarlo cambian entre productos.',
        'sections' => [
            ['h2' => 'Qué detecta la prueba y por qué importa el momento', 'body' => [
                'Los tests buscan una hormona llamada gonadotropina coriónica humana, o hCG, que empieza a aumentar después de la implantación. No detectan la relación sexual, la fecundación en ese mismo momento ni los síntomas que sentís. Hace falta que la cantidad de hormona alcance lo que la prueba puede reconocer. Por eso hacerla al día siguiente de una relación no permite saber si de esa relación resultó un embarazo.',
                'La fecha de ovulación puede moverse y hacer que un atraso calculado con el calendario sea menos claro. Aunque un envase anuncie detección temprana, un resultado negativo antes de la fecha esperada de menstruación es menos concluyente. Si no tenés una fecha confiable, la referencia de tres semanas desde la relación ayuda a ordenar la decisión. Si hubo otras relaciones posteriores, el resultado no descarta un embarazo originado en esas fechas más recientes.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Cuándo hacerlo según tu situación', 'body' => [
                'Elegí la fila que más se parece a tu situación y revisá también las instrucciones del producto. Tener náuseas o sensibilidad en los pechos no obliga a adelantar la prueba: esos cambios tienen otras causas. Si hay molestias importantes, la consulta puede ser necesaria independientemente del calendario. El test responde una pregunta concreta sobre la detección de hormona; no evalúa por sí solo tu estado de salud.',
                'Con un resultado negativo y sin menstruación, puede ser razonable repetir la prueba unos días después, de acuerdo con sus instrucciones, o consultar para definir el siguiente paso. No conviertas esa repetición en una condición para pedir ayuda. Si el atraso persiste o los ciclos suelen ser difíciles de interpretar, el equipo puede evaluar otras causas y decidir si corresponde una prueba en sangre u otro estudio.'
            ], 'items' => [], 'table' => ['head' => ['Situación', 'Referencia práctica'], 'rows' => [
                ['Ciclo habitual y menstruación atrasada', 'Desde el primer día de atraso.'],
                ['No conocés la fecha esperada', 'Al menos tres semanas desde la relación a evaluar.'],
                ['Negativo antes del atraso', 'Puede ser temprano; repetí según las instrucciones.'],
                ['Negativo y atraso persistente', 'Consultá para revisar fechas y próximos pasos.'],
                ['Dolor intenso, desmayo o sangrado abundante', 'Atención urgente, sin esperar otra prueba.']
            ]]],
            ['h2' => 'Prepará la prueba para evitar errores de uso', 'body' => [
                'Antes de abrirla, mirá el vencimiento, el estado del envoltorio y cómo se conservó. Leé si se usa directamente con el chorro de orina o con una muestra en un recipiente. Usá un recipiente limpio si el producto lo pide. No improvises una cantidad de gotas o un tiempo de inmersión: son detalles que dependen del diseño. Tené a mano un reloj para respetar la ventana de lectura.',
                'La primera orina de la mañana puede ayudar cuando estás cerca del momento mínimo de detección, porque suele estar más concentrada. Evitá tomar mucha agua solamente para conseguir orinar antes del test; puede diluir la muestra. Esto no significa que debas pasar sed. Una vez hecho, dejalo como indica el envase y leelo en el intervalo indicado. Guardar una foto puede servir para comentar una duda, pero no reemplaza la lectura a tiempo.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Positivo, negativo o inválido no significan lo mismo', 'body' => [
                'El indicador de control muestra si la prueba funcionó. Si no aparece como corresponde, el resultado es inválido aunque veas otra marca. Necesitás una prueba nueva o una evaluación en el servicio de salud. En los tests de líneas, una segunda línea tenue dentro del tiempo indicado suele interpretarse según el esquema de positivo del fabricante. Una marca que aparece mucho después no se debe reinterpretar como un resultado válido.',
                'Un positivo suele indicar embarazo y es motivo para organizar la atención prenatal. No permite establecer cuántas semanas tenés, dónde está ubicado el embarazo ni cómo evoluciona. La intensidad de la línea no es una herramienta para seguir el crecimiento. Si recibís tratamiento de fertilidad, hubo un embarazo reciente o tomás medicación que podría afectar el resultado, comentá esos antecedentes. El equipo puede ayudarte a interpretar el test sin sacar conclusiones de una fotografía aislada.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Qué hacer después del resultado', 'body' => [
                'Para explicar una prueba dudosa, anotá la fecha y la hora en que la hiciste, si apareció el indicador de control y dentro de cuánto tiempo viste el resultado. Conservá las instrucciones para saber qué significaba cada símbolo. Si consultás por teléfono, describí esos datos en vez de decir solamente que salió raro. Una prueba vencida o leída fuera del intervalo necesita resolverse con una nueva evaluación, no comparando su aspecto con imágenes de otros tests en internet.',
                'Con una prueba positiva, anotá el inicio de tu última menstruación si lo sabés y solicitá una consulta. Llevá la lista de medicamentos y suplementos que usás; no suspendas tratamientos por tu cuenta. Podés leer sobre [ácido fólico y planificación](/planear/acido-folico/) para preparar esa conversación. Si las fechas son inciertas, decilo: no hace falta inventar una última regla para que el equipo empiece a orientarte.',
                'Con una prueba negativa, separá la decepción de lo que ese resultado puede decir. Quizás no haya embarazo o quizás todavía sea temprano. Hacer varias pruebas el mismo día suele agregar gasto y ansiedad sin aclarar esa diferencia. Anotá cuándo la hiciste y qué relación o atraso estabas evaluando. La guía de [primeros síntomas](/planear/primeros-sintomas/) explica por qué las sensaciones del cuerpo no resuelven por sí solas la duda.',
                'Si aparece dolor abdominal fuerte, especialmente de un lado, desmayo, dolor en el hombro asociado a malestar o sangrado abundante, buscá atención urgente aunque el resultado sea negativo. Un test casero no descarta todas las causas de esos síntomas. Tené presentes [las señales de alarma](/salud/senales-de-alarma/). Si estás sola y te sentís débil, pedí acompañamiento; no esperes a que otra prueba te dé permiso para consultar.'
            ], 'items' => [], 'table' => null]
        ],
        'steps' => [
            ['title' => 'Ubicá la fecha', 'body' => ['Anotá el atraso o la fecha de la relación que querés evaluar.']],
            ['title' => 'Seguí el envase', 'body' => ['Revisá vencimiento, forma de aplicación, indicador de control y tiempo de lectura.']],
            ['title' => 'Decidí el próximo paso', 'body' => ['Organizá consulta ante un positivo o dudas persistentes; ante alarmas, buscá atención urgente.']]
        ],
        'appHandoff' => ['text' => 'El calendario menstrual del modo planeando de Mi Bebé puede ayudarte a ordenar las fechas que vas a llevar a la consulta. Para interpretar una prueba necesitás sus instrucciones y, si quedan dudas, orientación del equipo de salud.', 'medium' => 'article', 'extra' => ['modo' => 'planeando']],
        'faq' => [
            ['q' => '¿Un negativo antes del atraso descarta embarazo?', 'a' => 'No. Puede faltar hormona detectable. Repetí según el momento del ciclo y las instrucciones, o consultá si tenés dudas.'],
            ['q' => '¿Una línea muy clarita cuenta?', 'a' => 'Si aparece dentro del tiempo de lectura y el control es válido, interpretala con el esquema del fabricante. Una marca tardía no sirve para confirmar.'],
            ['q' => '¿Siempre necesito un análisis de sangre?', 'a' => 'No siempre. Su necesidad depende del resultado, las fechas y los síntomas; lo decide el equipo que te atiende.'],
            ['q' => '¿Puedo saber las semanas por la intensidad de la línea?', 'a' => 'No. La intensidad no permite fechar ni evaluar la evolución del embarazo.']
        ],
        'related' => ['primeros-sintomas', 'acido-folico', 'dias-fertiles'], 'weeks' => [4, 5, 6],
        'appGuideSlug' => null, 'guarani' => [], 'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre atención preconcepcional y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
            ['title' => 'Doing a pregnancy test', 'publisher' => 'National Health Service (NHS)', 'url' => null, 'accessed' => null]
        ], 'updated' => '2026-09-20', 'image' => null
    ],
    'primeros-sintomas' => [
        'cluster' => 'planear', 'path' => '/planear/primeros-sintomas/',
        'title' => 'Primeros síntomas de embarazo: qué podés notar', 'seoTitle' => 'Primeros síntomas de embarazo',
        'metaDescription' => 'Atraso, cansancio, náuseas o pechos sensibles: conocé qué pueden significar los primeros síntomas de embarazo y cuándo hacer un test o consultar.',
        'kind' => 'medical',
        'lead' => 'El atraso menstrual, el cansancio, las náuseas y la sensibilidad en los pechos pueden aparecer al inicio del embarazo, pero también tienen otras causas. Algunas personas no notan cambios. Los síntomas no confirman ni descartan un embarazo: para salir de la duda, hacé un test en el momento adecuado. Si hay dolor intenso, desmayo o sangrado abundante, buscá atención urgente sin esperar un resultado.',
        'sections' => [
            ['h2' => 'El atraso es una pista, no una confirmación', 'body' => [
                'Si tus ciclos suelen ser regulares, que no llegue la menstruación en la fecha habitual puede ser el primer cambio que te llame la atención. Aun así, el estrés, una enfermedad, cambios de rutina y variaciones de la ovulación pueden modificar esa fecha. Con ciclos irregulares, la comparación es más difícil. Lo útil es anotar el inicio de la última regla y distinguir una fecha recordada de una fecha calculada por una aplicación.',
                'Un sangrado más corto o leve de lo habitual tampoco confirma qué pasó. A veces se llama sangrado de implantación a cualquier manchado durante la búsqueda, pero el color, la cantidad o el día no permiten atribuirle esa causa. Si existe posibilidad de embarazo, considerá una prueba según las fechas. Si el sangrado se acompaña de dolor o te preocupa, consultá; no lo des por esperado solamente porque leíste una descripción parecida.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Cansancio y cambios en los pechos', 'body' => [
                'Podés sentir más sueño, menos energía o necesidad de hacer pausas en actividades que antes resultaban fáciles. Los cambios hormonales del embarazo pueden contribuir, pero dormir poco, una infección y otros problemas también causan cansancio. Observá cuánto afecta tu día: no es lo mismo querer acostarte antes que no poder realizar tareas habituales por falta de aire o debilidad. Explicar esa diferencia ayuda más en la consulta que decir solamente que estás cansada.',
                'Los pechos pueden sentirse sensibles, más llenos o incómodos con el roce. Es una sensación que también aparece antes de la menstruación, así que no sirve para diferenciar ambas situaciones. Un sostén cómodo y evitar presión pueden aliviar la molestia. Un bulto nuevo, una zona roja y caliente o dolor localizado persistente merecen evaluación. No necesitás apretar los pechos ni revisar el tamaño varias veces al día para comprobar si hay embarazo.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Náuseas, olores y cambios digestivos', 'body' => [
                'Las náuseas pueden empezar en las primeras semanas después del atraso, aunque el momento varía bastante. Pueden ocurrir a cualquier hora y no todas las personas las tienen. Olores que antes tolerabas pueden resultar desagradables, y algunas comidas pueden dejar de apetecerte. Esto no permite saber el sexo del bebé ni medir cómo evoluciona un embarazo. Tampoco la ausencia de náuseas significa que algo esté mal.',
                'Si las molestias son leves, puede ayudarte comer porciones pequeñas, elegir preparaciones que toleres y tomar líquidos en sorbos. No te fuerces a comer un alimento porque alguien dice que evita las náuseas. Si vomitás repetidamente, no conseguís retener líquidos, orinás muy poco o sentís mareos importantes, necesitás atención. Evitá automedicarte o probar yuyos para cortar el vómito; comentá qué tomaste si ya usaste algún producto.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Síntomas parecidos pueden tener explicaciones distintas', 'body' => [
                'La hinchazón abdominal, los cambios de apetito y las variaciones de ánimo pueden aparecer tanto antes de la regla como durante un embarazo temprano. Buscar diferencias muy pequeñas entre este mes y el anterior suele dejar más dudas. La tabla ayuda a separar una observación de una conclusión: sentir algo es real, pero no demuestra una causa. La pregunta siguiente es qué fecha tenés y si hay una molestia que necesita evaluación.',
                'Orinar más seguido puede ocurrir durante el embarazo. Si además hay ardor, dolor, fiebre o malestar, no lo atribuyas al embarazo: puede requerir evaluación por una infección urinaria u otra causa. Del mismo modo, una molestia abdominal leve no explica un dolor que aumenta o se concentra en un lado. Describí dónde duele, cuándo empezó y si te impide moverte o descansar.'
            ], 'items' => [], 'table' => ['head' => ['Cambio que notás', 'Qué conviene recordar'], 'rows' => [
                ['Pechos sensibles', 'También ocurre antes de la menstruación.'],
                ['Náuseas', 'Pueden faltar; no confirman embarazo.'],
                ['Hinchazón o apetito distinto', 'Se superpone con cambios del ciclo y digestivos.'],
                ['Más ganas de orinar', 'Ardor o fiebre requieren consulta.'],
                ['Ningún síntoma', 'No descarta embarazo; importan las fechas y el test.']
            ]]],
            ['h2' => 'Cómo salir de la duda sin vigilarte todo el día', 'body' => [
                'Si vas a consultar por una molestia, registrá cuándo empezó, si es continua o aparece por momentos y qué actividades te impide hacer. Para los vómitos, puede ser útil contar si conseguís beber y orinar; para el dolor, señalar la zona y si aumenta. Esa descripción orienta mejor que una lista de supuestos síntomas de embarazo. Incluí también fiebre, medicamentos recientes y enfermedades de estos días, porque el equipo necesita considerar otras explicaciones además de un posible embarazo.',
                'Si ya hay atraso, revisá [cuándo hacer un test de embarazo](/planear/test-de-embarazo-cuando/). Si no conocés la fecha esperada de la regla, esa guía también explica cómo orientarte desde la relación sin protección. La prueba aporta información que una lista de síntomas no puede dar. Podés elegir un momento tranquilo y decidir antes con quién querés hablar del resultado, sin obligación de compartirlo con otras personas.',
                'Si todavía no es momento de hacer la prueba, seguí con cuidados de preconcepción y consultá sobre medicamentos que uses. La [lista para preparar un embarazo](/planear/checklist-preconcepcion/) ayuda a priorizar temas concretos. Un registro breve de síntomas puede servir si necesitás consulta; no hace falta puntuar cada sensación. Si la búsqueda ocupa todo tu día o altera el sueño, pedir apoyo emocional también es una forma de cuidarte.',
                'Una prueba positiva sin síntomas puede corresponder a un embarazo temprano, y una prueba negativa con muchas molestias necesita interpretarse según su fecha y tu situación. Ninguna de esas combinaciones permite hacer un diagnóstico por internet. Ante dolor fuerte, desmayo, dificultad para respirar o sangrado abundante, buscá atención inmediata. Leé [las señales de alarma](/salud/senales-de-alarma/) para reconocer cuándo la prioridad es que te evalúen, no reunir más señales.'
            ], 'items' => [], 'table' => null]
        ],
        'steps' => [],
        'appHandoff' => ['text' => 'En el modo planeando de Mi Bebé tenés un calendario menstrual y una lista de preconcepción. Usalos para ordenar fechas y preguntas mientras buscás; las sensaciones del cuerpo necesitan contexto y una prueba cuando corresponde.', 'medium' => 'article', 'extra' => ['modo' => 'planeando']],
        'faq' => [
            ['q' => '¿Puedo estar embarazada sin síntomas?', 'a' => 'Sí. Algunas personas notan pocos cambios al principio. La ausencia de síntomas no reemplaza un test.'],
            ['q' => '¿Se sienten síntomas al día siguiente de una relación?', 'a' => 'Las sensaciones de ese momento no permiten reconocer un embarazo originado en esa relación. La detección requiere tiempo.'],
            ['q' => '¿Las náuseas solo aparecen de mañana?', 'a' => 'No. Pueden aparecer en distintos momentos del día, y también pueden faltar.'],
            ['q' => '¿Un manchado rosado confirma implantación?', 'a' => 'No. Su aspecto no identifica la causa. Considerá las fechas para el test y consultá si hay dolor, sangrado que aumenta o preocupación.']
        ],
        'related' => ['test-de-embarazo-cuando', 'checklist-preconcepcion', 'acido-folico'], 'weeks' => [4, 5, 6, 7, 8],
        'appGuideSlug' => null, 'guarani' => [], 'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => null,
        'sources' => [
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre síntomas y cuidados en el control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null]
        ], 'updated' => '2026-09-20', 'image' => null
    ],
    'acido-folico' => [
        'cluster' => 'planear', 'path' => '/planear/acido-folico/',
        'title' => 'Ácido fólico antes del embarazo: qué consultar', 'seoTitle' => 'Ácido fólico antes del embarazo',
        'metaDescription' => 'Entendé para qué sirve el ácido fólico antes del embarazo y qué conversar con tu equipo sobre suplementos, alimentación, antecedentes y continuidad.',
        'kind' => 'medical',
        'lead' => 'El ácido fólico se recomienda al planear un embarazo porque ayuda a reducir el riesgo de defectos del tubo neural, que se forma muy temprano. Conviene conversar sobre la suplementación antes de empezar la búsqueda, sin esperar un test positivo. El equipo de salud define la indicación según tus antecedentes y lo que ya tomás. Comer variado aporta folatos, pero no sustituye esa conversación sobre el suplemento.',
        'sections' => [
            ['h2' => 'Para qué sirve y por qué se habla de empezar antes', 'body' => [
                'El folato es una vitamina del grupo B que participa en la formación de células y material genético. El ácido fólico es una forma utilizada en suplementos y alimentos fortificados. Durante el desarrollo inicial, el tubo neural dará origen al cerebro y la médula espinal. Su formación ocurre tan temprano que puede coincidir con un momento en que todavía no sabés que estás embarazada. Por eso la preparación empieza antes del atraso.',
                'La suplementación recomendada busca reducir un riesgo; no puede asegurar por sí sola que no haya ningún problema del desarrollo. Tampoco es un tratamiento para lograr ovular o conseguir embarazo más rápido. Separar esos objetivos evita cargar al suplemento con promesas que no tiene. Si estás organizando la búsqueda, sumá este tema a la [consulta de preconcepción](/planear/checklist-preconcepcion/) junto con medicamentos, vacunas y antecedentes.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Qué necesita saber el equipo para orientarte', 'body' => [
                'Contá si hubo un embarazo previo con un defecto del tubo neural, si tenés enfermedades crónicas, una cirugía digestiva o dificultades de absorción. Mencioná también tratamientos para epilepsia u otras condiciones, aunque lleves años usándolos sin cambios. Esos antecedentes pueden modificar la indicación y el seguimiento. No suspendas una medicación para reemplazarla por ácido fólico: el control de tu enfermedad también forma parte de preparar un embarazo.',
                'Llevá los envases o fotos legibles de todos los suplementos que tomás. Un producto para el pelo, un multivitamínico y uno prenatal pueden compartir ingredientes aunque tengan nombres distintos. La información útil es la etiqueta completa, no solamente la marca. Si no conocés un producto, anotá dónde lo obtuviste y cómo lo venís usando. Eso permite revisar duplicaciones e interacciones sin suponer que todo lo vendido como natural es apropiado.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Cómo conversar sobre el producto y la continuidad', 'body' => [
                'Al revisar una etiqueta, distinguí el nombre comercial de la lista de ingredientes. Dos cajas que dicen prenatal no necesariamente contienen lo mismo, y una presentación nueva puede diferir de la que ya conocías. Si te ofrecen una sustitución, preguntá si coincide con lo indicado antes de comprarla. Podés llevar una foto a la consulta o a la farmacia para aclararlo. El precio, el tamaño del envase o una publicidad de fertilidad no permiten decidir cuál corresponde a tu situación.',
                'Preguntá qué suplemento corresponde, cuándo empezarlo, durante cuánto tiempo mantenerlo y cómo combinarlo con otros tratamientos. La recomendación individual puede cambiar según el riesgo y el momento del embarazo. Si recibís indicaciones de dos profesionales, llevá ambas para que se coordinen. No sumes productos por tu cuenta pensando que una cantidad mayor necesariamente protege más. El objetivo es tener una pauta entendida y posible de sostener.',
                'Si el producto indicado te produce molestias, tenés dificultad para tragarlo o no podés conseguirlo, explicalo. El equipo o el profesional farmacéutico puede ayudarte a revisar opciones dentro de la indicación. No hace falta ocultar que una pauta no se está pudiendo cumplir. Preguntá también qué hacer ante un olvido y dónde consultar dudas. Evitá compensarlo duplicando la toma por tu cuenta o copiando las instrucciones de otra persona.'
            ], 'items' => [
                ['title' => 'Indicación clara', 'text' => 'Anotá el nombre del producto que te indiquen y verificá que entendiste cómo usarlo.'],
                ['title' => 'Revisión de lo que ya tomás', 'text' => 'Mostrá multivitamínicos, suplementos, medicamentos y preparados herbales.'],
                ['title' => 'Próxima revisión', 'text' => 'Preguntá cuándo volver a conversar la continuidad si hay embarazo o cambia tu tratamiento.']
            ], 'table' => null],
            ['h2' => 'Los folatos en la alimentación cotidiana', 'body' => [
                'Las verduras de hoja, las legumbres y algunas frutas aportan folatos. Podés incorporarlos en comidas habituales: porotos con verduras, lentejas, ensaladas bien lavadas y frutas disponibles según la estación. Variar ayuda a sumar otros nutrientes importantes. Si un alimento te cae mal o no es accesible, no necesitás forzarlo como si fuera la única fuente. La alimentación se organiza con alternativas, preferencias y posibilidades reales.',
                'Lavá los vegetales con agua segura, separá alimentos crudos de los listos para comer y conservá las preparaciones de manera adecuada. Estas medidas importan tanto durante la búsqueda como después de un positivo. No necesitás jugos especiales, limpiezas ni combinaciones costosas para preparar el cuerpo. La [guía de alimentación](/alimentacion/) reúne temas cotidianos. El aporte de la comida acompaña la suplementación indicada; no permite calcular por tu cuenta que ya está cubierta una necesidad individual.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Si el embarazo llegó antes de esta conversación', 'body' => [
                'Si recién supiste que estás embarazada y no habías tomado ácido fólico, pedí orientación para empezar el cuidado prenatal. Esa situación es frecuente y no permite concluir que haya ocurrido un problema. Contá cuándo fue tu última menstruación y qué suplementos o medicamentos usaste. El equipo podrá indicar qué corresponde ahora y organizar los controles. La consulta sirve para actuar desde el presente, no para reconstruir cada comida con culpa.',
                'Si el test todavía no es claro, revisá [cuándo hacer la prueba de embarazo](/planear/test-de-embarazo-cuando/) y mantené la conversación de preconcepción. No necesitás una confirmación para preguntar por suplementación. También podés consultar si la búsqueda se prolonga: el seguimiento permite revisar que el producto siga siendo adecuado y que no se hayan agregado otros ingredientes por recomendaciones informales. Una pauta antigua merece revisión cuando cambia tu salud.',
                'El ácido fólico no trata un dolor abdominal, una hemorragia ni vómitos persistentes. Si aparece una molestia nueva, explicá cuándo empezó y qué productos tomaste, sin atribuirla automáticamente al suplemento. Ante desmayo, sangrado abundante o dolor intenso, buscá atención urgente y consultá [las señales de alarma](/salud/senales-de-alarma/). Llevar el envase puede ayudar al equipo; no retrases la salida para encontrarlo si necesitás atención.'
            ], 'items' => [], 'table' => null]
        ],
        'steps' => [
            ['title' => 'Reuní tus antecedentes y envases', 'body' => ['Incluí suplementos que no considerabas medicamentos y tratamientos de uso ocasional.']],
            ['title' => 'Pedí una indicación individual', 'body' => ['Conversá sobre inicio, producto, continuidad y qué hacer si no lo tolerás.']],
            ['title' => 'Revisá la pauta cuando cambie tu situación', 'body' => ['Avisá si confirmás embarazo, empezás otra medicación o aparecen dificultades para seguir la indicación.']]
        ],
        'appHandoff' => ['text' => 'La lista de preconcepción de Mi Bebé te ayuda a tener presente la conversación sobre ácido fólico. Abrí el modo planeando para organizar la preparación; la indicación del suplemento la define tu equipo.', 'medium' => 'article', 'extra' => ['modo' => 'planeando']],
        'faq' => [
            ['q' => '¿Tengo que esperar un positivo para preguntar?', 'a' => 'No. Conviene conversar antes de buscar, porque el desarrollo del tubo neural ocurre muy temprano.'],
            ['q' => '¿Sirve para quedar embarazada más rápido?', 'a' => 'No es un tratamiento de fertilidad. Su recomendación se relaciona con reducir el riesgo de defectos del tubo neural.'],
            ['q' => '¿Comer verduras reemplaza el suplemento?', 'a' => 'La alimentación aporta folatos, pero no reemplaza la recomendación de suplementación que corresponde conversar con el equipo.'],
            ['q' => '¿Puedo combinar dos vitaminas prenatales?', 'a' => 'No las combines por tu cuenta. Pueden repetir ingredientes; llevá las etiquetas para revisar qué necesitás.']
        ],
        'related' => ['checklist-preconcepcion', 'test-de-embarazo-cuando', 'si-no-llega-el-embarazo'], 'weeks' => [1, 2, 3, 4, 5, 6],
        'appGuideSlug' => null, 'guarani' => [], 'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => null,
        'sources' => [
            ['title' => 'Orientaciones sobre suplementación con ácido fólico antes y durante el embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre atención preconcepcional, nutrición y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null]
        ], 'updated' => '2026-09-20', 'image' => null
    ],
    'checklist-preconcepcion' => [
        'cluster' => 'planear', 'path' => '/planear/checklist-preconcepcion/',
        'title' => 'Checklist de preconcepción: cómo preparar la consulta', 'seoTitle' => 'Checklist para preparar un embarazo',
        'metaDescription' => 'Prepará tu consulta antes del embarazo: antecedentes, medicamentos, vacunas, ácido fólico y hábitos, con una lista práctica para ordenar tus preguntas.',
        'kind' => 'medical',
        'lead' => 'Para preparar un embarazo, empezá por una consulta de preconcepción: revisá antecedentes, medicamentos, vacunas, ácido fólico y hábitos con tu equipo de salud. Llevá lo que ya tengas, sin esperar a completar una carpeta perfecta. Una lista ayuda a priorizar cambios y preguntas; no es un examen que debas aprobar antes de buscar. Si ya hay posibilidad de embarazo, avisalo desde el comienzo.',
        'sections' => [
            ['h2' => 'Primero, contá tu historia de salud', 'body' => [
                'La consulta puede empezar con una pregunta sencilla: qué necesitás revisar antes de buscar un embarazo. Comentá enfermedades crónicas, cirugías, alergias, internaciones y problemas de salud mental, aunque ahora estén controlados. Si tuviste embarazos previos, explicá cómo transcurrieron y si hubo pérdidas, parto antes de término o complicaciones. No necesitás recordar cada nombre técnico: llevá informes disponibles o describí lo que pasó con tus palabras.',
                'También importan los antecedentes familiares que conozcas y las preocupaciones de tu pareja, si la hay. Algunas situaciones pueden justificar orientación genética o evaluaciones específicas; no todas las personas necesitan los mismos estudios. Pedí que te expliquen qué pregunta respondería cada análisis y cómo cambiaría la atención. Comprar un paquete de estudios sin consulta puede producir resultados difíciles de interpretar y dejar afuera asuntos importantes de tu historia.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Qué llevar o tener anotado', 'body' => [
                'Esta lista es una ayuda para conversar, no un conjunto de requisitos de un servicio. Si te falta el carné de vacunas o un informe viejo, igual podés consultar. Señalá qué información no tenés y preguntá cómo reconstruirla. Un resumen de una página suele ser más fácil de revisar que muchas capturas mezcladas. Separá los resultados propios de los de otra persona y dejá visibles las fechas.',
                'Elegí tus dos o tres preguntas más importantes para el comienzo de la consulta. Puede ser cómo seguir un tratamiento, cuándo retirar un anticonceptivo o qué hacer si los ciclos son irregulares. Anotá las respuestas con palabras que entiendas y pedí aclaración cuando aparezca un término nuevo. Si querés ir acompañada, acordá qué información deseás compartir y reservá un momento a solas si lo necesitás.'
            ], 'items' => [
                ['title' => 'Antecedentes', 'text' => 'Enfermedades, cirugías, embarazos anteriores y datos familiares que conozcas.'],
                ['title' => 'Productos que usás', 'text' => 'Medicamentos habituales u ocasionales, vitaminas, suplementos y yuyos, con sus envases o etiquetas.'],
                ['title' => 'Vacunas y estudios disponibles', 'text' => 'Carné, informes relevantes y fechas, sin pedir nuevos análisis por tu cuenta.'],
                ['title' => 'Ciclo y anticoncepción', 'text' => 'Inicio de reglas recientes, variaciones, método actual y dudas sobre dejarlo.'],
                ['title' => 'Preguntas personales', 'text' => 'Dolor, sexualidad, trabajo, apoyo en casa y cualquier preocupación sobre la búsqueda.']
            ], 'table' => null],
            ['h2' => 'Medicamentos, suplementos y vacunas', 'body' => [
                'No suspendas tratamientos por miedo a un futuro embarazo. Algunas enfermedades necesitan un buen control previo y ciertos medicamentos requieren ajustes planificados. Avisá a los profesionales que te atienden que querés concebir para coordinar decisiones. Incluí cremas medicinales, productos para adelgazar y preparados herbales: que se compren sin receta no significa que sean adecuados para esta etapa. Consultá antes de empezar algo recomendado por redes sociales.',
                'Preguntá por [ácido fólico antes del embarazo](/planear/acido-folico/) y por la revisión de tu esquema de vacunas. Algunas vacunas pueden requerir planificación antes de la búsqueda; el equipo indica cuáles corresponden y si existe un intervalo que respetar. No copies un calendario ajeno ni supongas que todas se aplican durante el embarazo. Llevá el registro que tengas para decidir sobre información concreta, sin repetir dosis por falta de memoria.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Hábitos que podés revisar sin cambiar todo de golpe', 'body' => [
                'Armá comidas variadas con alimentos disponibles, agua segura y una rutina que puedas sostener. Prepararte no requiere una dieta de fertilidad ni bajar de peso a toda velocidad. Si hay dificultades con la alimentación, cambios importantes de peso o una enfermedad que condiciona lo que comés, pedí orientación individual. El movimiento habitual y el descanso también cuentan; empezá con cambios posibles y adaptados a tu estado de salud.',
                'Si buscás embarazo, evitá el alcohol y pedí ayuda para dejar tabaco u otras sustancias si lo necesitás. La exposición al humo de otras personas también merece una conversación en casa. Contá cuánto y qué consumís sin minimizarlo por vergüenza: esa información permite ofrecer apoyo. Revisá la cafeína de distintas bebidas y los yuyos del tereré con el equipo, en vez de considerar inocuo cualquier preparado porque sea habitual.',
                'La salud bucal, la prevención de infecciones de transmisión sexual y las condiciones del trabajo forman parte de la preparación. Comentá exposición a sustancias químicas, esfuerzo físico difícil de tolerar o falta de protección en tareas concretas. Si hay riesgo de infección, consultá sobre pruebas y protección para ambos. Buscar un embarazo no elimina la necesidad de cuidar la salud sexual ni obliga a aceptar relaciones que no querés.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Salí con prioridades y un próximo paso claro', 'body' => [
                'Si todavía usás anticoncepción, preguntá cómo coordinar su suspensión o retiro con el resto del plan. No todos los métodos se manejan igual y no corresponde intentar retirar un dispositivo por tu cuenta. Si el equipo recomienda resolver primero un asunto de salud, pedí que aclare el motivo, el próximo control y cómo cuidarte mientras tanto. También podés decir que todavía estás decidiendo si querés un embarazo: la consulta sirve para informarte, sin comprometerte a empezar la búsqueda ese mes.',
                'Al terminar, separá lo que podés iniciar ahora de lo que necesita una indicación o resultado. Por ejemplo: conseguir un informe anterior, conversar una medicación con quien la prescribe y revisar una vacuna son acciones distintas. Preguntá cuándo volver y qué cambios requieren avisar antes. Si el plan resulta difícil por horarios, dinero o traslados, decilo para buscar una alternativa realista; una indicación imposible de cumplir necesita adaptación.',
                'La búsqueda también tiene una parte emocional y de organización compartida. Conversen sobre tareas, límites con preguntas familiares y acompañamiento a consultas. Si los meses pasan, [cuándo consultar por fertilidad](/planear/si-no-llega-el-embarazo/) orienta cómo influyen edad y antecedentes. No necesitás terminar esta lista para pedir ayuda. Si aparece dolor intenso, sangrado abundante o desmayo ante un posible embarazo, buscá atención urgente y revisá [las señales de alarma](/salud/senales-de-alarma/).'
            ], 'items' => [], 'table' => null]
        ],
        'steps' => [
            ['title' => 'Elegí tus prioridades', 'body' => ['Anotá las dudas que más afectan la decisión de buscar embarazo.']],
            ['title' => 'Reuní lo que ya tenés', 'body' => ['Prepará antecedentes, envases y registros disponibles; marcá lo que falta.']],
            ['title' => 'Conversá y acordá un plan', 'body' => ['Revisá cada indicación y preguntá cómo se coordina con tus tratamientos actuales.']],
            ['title' => 'Dejá definido el seguimiento', 'body' => ['Anotá el próximo paso y cuándo comunicar cambios o pedir otra consulta.']]
        ],
        'appHandoff' => ['text' => 'Mi Bebé incluye un checklist de preconcepción en el modo planeando. Podés usarlo como apoyo para preparar los temas de consulta y ordenar la búsqueda junto con el calendario menstrual.', 'medium' => 'article', 'extra' => ['modo' => 'planeando']],
        'faq' => [
            ['q' => '¿Puedo consultar aunque todavía no empecé a buscar?', 'a' => 'Sí. Ese es un buen momento para revisar tratamientos, vacunas y suplementación con tiempo.'],
            ['q' => '¿Necesito todos mis informes para ir?', 'a' => 'No. Llevá lo disponible y explicá lo que falta. La consulta puede comenzar con tu historia.'],
            ['q' => '¿Hay un análisis obligatorio para todas?', 'a' => 'Los estudios dependen de antecedentes, síntomas y evaluación. Pedí que te expliquen para qué sirve cada uno.'],
            ['q' => '¿Tengo que suspender mis medicamentos?', 'a' => 'No por tu cuenta. Avisá que planeás un embarazo para acordar cómo continuar o ajustar el tratamiento.']
        ],
        'related' => ['acido-folico', 'dias-fertiles', 'si-no-llega-el-embarazo'], 'weeks' => [1, 2],
        'appGuideSlug' => null, 'guarani' => [], 'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => null,
        'sources' => [
            ['title' => 'Orientaciones sobre atención preconcepcional y salud reproductiva', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre atención preconcepcional y vacunación', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null]
        ], 'updated' => '2026-09-20', 'image' => null
    ],
    'si-no-llega-el-embarazo' => [
        'cluster' => 'planear', 'path' => '/planear/si-no-llega-el-embarazo/',
        'title' => 'Si no llega el embarazo: cuándo consultar', 'seoTitle' => 'Si no llega el embarazo: cuándo consultar',
        'metaDescription' => 'Si el embarazo no llega, conocé cuándo suele iniciarse una evaluación, qué antecedentes adelantan la consulta y cómo prepararla sin culpas ni presiones.',
        'kind' => 'medical',
        'lead' => 'La evaluación por una búsqueda sin embarazo suele plantearse entre los 6 y 12 meses de relaciones regulares sin anticoncepción: alrededor de 12 meses si tenés menos de 35 años y de 6 meses desde los 35. Con más de 40 años, antecedentes relevantes o ciclos ausentes o muy irregulares, conviene consultar desde el inicio. Son referencias para orientar la evaluación, no plazos que debas cumplir para pedir ayuda.',
        'sections' => [
            ['h2' => 'Por qué no todas las búsquedas tienen el mismo plazo', 'body' => [
                'Conseguir un embarazo puede llevar varios ciclos incluso cuando no hay un problema identificado. Un mes sin positivo no permite concluir que alguna persona sea infértil. La edad, la regularidad de las relaciones, los antecedentes y el funcionamiento reproductivo de ambos influyen en cuándo conviene evaluar. La consulta busca entender esa historia y proponer pasos útiles, sin atribuir la responsabilidad automáticamente a quien tiene el ciclo menstrual.',
                'Las referencias de seis a doce meses se usan para búsquedas con relaciones vaginales regulares sin anticoncepción. Si hubo meses de separación, uso intermitente de protección o dificultades para tener relaciones, contalo: cambia cómo se interpreta el tiempo. Si necesitás donación de gametos o ayuda reproductiva por tu situación personal o de pareja, podés consultar desde el comienzo. No tenés que intentar un tipo de relación que no corresponde a tu proyecto para acceder a orientación.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Cuándo pedir una evaluación', 'body' => [
                'Esta tabla organiza referencias habituales según la edad de la persona que busca gestar con sus óvulos. La evaluación individual puede empezar antes. Cumplir un plazo tampoco significa que necesariamente vayas a necesitar un tratamiento complejo: primero se revisa qué está pasando. Si tenés una inquietud concreta, una consulta inicial puede ayudarte a decidir cómo seguir aun antes de llegar a esos tiempos.',
                'La edad no produce un cambio brusco el día de un cumpleaños, pero importa al decidir cuánto tiempo dedicar a cada paso. Desde los 35 suele abreviarse la búsqueda previa a la evaluación; por encima de los 40 conviene conversar sin postergarla. Si recibiste una indicación diferente por tus antecedentes, llevá esa información. El objetivo es coordinar un plan que tenga sentido para vos, sin comparar tu calendario con el de otra pareja.'
            ], 'items' => [], 'table' => ['head' => ['Situación general', 'Momento orientativo para evaluar'], 'rows' => [
                ['Menos de 35 años, sin antecedentes relevantes', 'Alrededor de 12 meses de búsqueda regular.'],
                ['Entre 35 y 40 años', 'Alrededor de 6 meses.'],
                ['Más de 40 años', 'Consulta desde el inicio de la búsqueda.'],
                ['Ciclos ausentes o muy irregulares, antecedentes conocidos', 'Consulta temprana, sin esperar esos plazos.']
            ]]],
            ['h2' => 'Antecedentes que conviene conversar antes', 'body' => [
                'La ausencia de menstruación, los ciclos muy variables o el dolor menstrual que limita tu vida merecen una consulta. También importan antecedentes de endometriosis, infecciones pélvicas, cirugía en el aparato reproductor o un embarazo fuera del útero. Contá si hubo pérdidas repetidas: necesitan una evaluación propia y no se resuelven contando de nuevo meses de búsqueda. No hace falta que tengas un diagnóstico confirmado para explicar una molestia que se repite.',
                'Si alguno recibió quimioterapia u otro tratamiento que puede afectar la fertilidad, conviene hablar pronto con su equipo. Del lado de quien aporta espermatozoides, importan cirugías, lesiones o enfermedades testiculares y problemas de erección o eyaculación. Mencioná uso de testosterona, anabólicos y otros medicamentos. Son datos de salud, no motivos de vergüenza. No suspendan tratamientos ni empiecen suplementos para fertilidad sin revisar su situación con un profesional.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Qué suele pasar en una primera consulta', 'body' => [
                'El equipo pregunta por el tiempo de búsqueda, el ciclo, las relaciones, los embarazos anteriores y la salud de ambos. Según la historia puede proponer estudios de ovulación, del útero y las trompas o del semen. No todas las evaluaciones empiezan igual ni requieren hacer todo a la vez. Pedí una explicación de qué busca cada estudio, cómo prepararte y qué decisiones podrían cambiar con su resultado.',
                'Un resultado aislado no resume toda la fertilidad ni permite prometer cuánto vas a tardar. Algunos estudios dependen del momento del ciclo o necesitan repetirse en determinadas condiciones. Guardá el informe completo con su fecha y llevá la indicación que recibiste. Si ya tenés estudios de otro servicio, mostrarlos puede evitar repeticiones innecesarias. No compres una interpretación por redes basada únicamente en un número fuera de contexto.'
            ], 'items' => [], 'table' => null],
            ['h2' => 'Cómo prepararse en pareja y cuidar el proceso', 'body' => [
                'Antes de aceptar un estudio, preguntá si requiere un día concreto del ciclo, alguna preparación o la participación de tu pareja. Pedí que te indiquen dónde consultar si no podés cumplir esa preparación, en lugar de improvisar. Si el resultado llega sin explicación, acordá quién va a interpretarlo junto con los demás antecedentes. Tener un informe en la mano no equivale a tener una conclusión; conocer el próximo contacto evita quedar sola frente a términos o valores que asustan.',
                'Armen una cronología simple: cuándo dejaron la anticoncepción, si hubo pausas, fechas aproximadas de reglas y consultas previas. No necesitan reconstruir cada relación sexual. La guía de [días fértiles](/planear/dias-fertiles/) puede aclarar cómo se calcula una ventana, pero no hace falta demostrar que acertaron un día exacto para pedir evaluación. Si registrar todo genera discusiones, reduzcan el registro a lo que les pidan para la consulta.',
                'Repartir tareas ayuda a que la búsqueda no recaiga en una sola persona. Uno puede reunir informes y otro anotar preguntas, si ambos están de acuerdo. Conversen sobre cuánto quieren compartir con familiares y qué respuestas dar a preguntas insistentes. Frases como “estamos ocupándonos y preferimos no hablar del tema hoy” pueden marcar un límite. Decirle a alguien que se relaje no explica una dificultad reproductiva y puede aumentar la culpa.',
                'Si la tristeza, la ansiedad o los conflictos afectan la vida cotidiana, podés pedir apoyo psicológico durante la evaluación. También podés revisar los cuidados de la [lista de preconcepción](/planear/checklist-preconcepcion/) sin transformarlos en obligaciones perfectas. Si aparece un atraso, orientate con [cuándo hacer un test](/planear/test-de-embarazo-cuando/). Ante dolor intenso, desmayo o sangrado abundante, buscá atención urgente: [las señales de alarma](/salud/senales-de-alarma/) tienen prioridad sobre cualquier turno de fertilidad.'
            ], 'items' => [], 'table' => null]
        ],
        'steps' => [
            ['title' => 'Identificá tus motivos de consulta', 'body' => ['Considerá el tiempo de búsqueda junto con edad, ciclos, síntomas y antecedentes de ambos.']],
            ['title' => 'Reuní información disponible', 'body' => ['Llevá una cronología sencilla, medicación y estudios previos, sin retrasar la consulta para completar datos.']],
            ['title' => 'Acordá cómo sigue la evaluación', 'body' => ['Preguntá qué estudio responde cada duda, quién revisará el resultado y cuándo volver.']]
        ],
        'appHandoff' => ['text' => 'El modo planeando de Mi Bebé ofrece calendario menstrual y checklist de preconcepción. Podés usarlos para organizar fechas y temas que quieras conversar durante la evaluación de la búsqueda.', 'medium' => 'article', 'extra' => ['modo' => 'planeando']],
        'faq' => [
            ['q' => '¿Tengo que esperar un año aunque mi regla no venga?', 'a' => 'No. La ausencia de menstruación o una irregularidad marcada justifican consultar antes. Los plazos generales no son una barrera para pedir ayuda.'],
            ['q' => '¿La evaluación es solo para la mujer?', 'a' => 'No. Cuando la búsqueda es en pareja, la historia y la salud reproductiva de ambos importan.'],
            ['q' => '¿Haber tenido un hijo descarta dificultades actuales?', 'a' => 'No. Puede haber dificultades después de un embarazo previo. Contá esa historia y cuánto tiempo llevan buscando ahora.'],
            ['q' => '¿Consultar significa empezar un tratamiento de inmediato?', 'a' => 'No. Primero se revisa la situación y se acuerdan los pasos. Podés preguntar por opciones y tiempos antes de decidir.']
        ],
        'related' => ['dias-fertiles', 'checklist-preconcepcion', 'test-de-embarazo-cuando'], 'weeks' => [],
        'appGuideSlug' => null, 'guarani' => [], 'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => null,
        'sources' => [
            ['title' => 'Orientaciones sobre infertilidad y salud reproductiva', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre atención preconcepcional y salud sexual y reproductiva', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
            ['title' => 'Fertility evaluation of infertile women: a committee opinion', 'publisher' => 'American Society for Reproductive Medicine (ASRM)', 'url' => null, 'accessed' => null]
        ], 'updated' => '2026-09-20', 'image' => null
    ],
];
