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
        'seoTitle' => 'Licencia de maternidad en Paraguay: semanas y pago',
        'metaDescription' => 'Licencia de maternidad en Paraguay: 18 semanas (24 si hay prematurez o bajo peso), inicio hasta 2 semanas antes del parto y subsidio del IPS del 100 %.',
        'kind' => 'legal',
        'lead' => 'La licencia de maternidad en Paraguay dura 18 semanas seguidas y podés empezarla hasta 2 semanas antes del parto (Ley 5508/2015). Son 24 semanas si el bebé nace antes de la semana 35, pesa menos de 2.000 gramos o tiene una enfermedad congénita que requiere incubadora o cuidados especiales, y suma un mes por cada bebé desde el segundo en embarazos múltiples. Durante la licencia, el IPS paga el 100 % de tu remuneración. Para pedirla necesitás un certificado médico que indique el embarazo y la fecha probable de parto.',
        'sections' => [
            [
                'h2' => 'Cuánto dura la licencia de maternidad',
                'body' => [
                    'El artículo 11 de la Ley 5508/2015 da a toda trabajadora, sea cual sea su tipo de contrato o de prestación de servicio, un permiso de maternidad de 18 semanas ininterrumpidas. En interés del bebé, podés tomar hasta 2 semanas antes del parto. Las 18 semanas equivalen a 126 días.',
                    'El permiso es de 24 semanas cuando el parto ocurre antes de iniciada la semana 35 de gestación, cuando el bebé pesa menos de 2.000 gramos al nacer o cuando nace con una enfermedad congénita que requiere incubadora o cuidados especiales, siempre con certificación médica. En embarazos múltiples, el permiso aumenta un mes por cada bebé a partir del segundo. Si se dan a la vez una de las situaciones de 24 semanas y un embarazo múltiple, rige la duración más larga.',
                    'Si adoptás o sos madre de acogimiento con sentencia judicial, tenés 18 semanas cuando el niño o la niña tiene menos de 6 meses y 12 semanas cuando tiene más de 6 meses (artículo 13). La Ley 6453/2019 modificó los artículos 1, 2, 16, 17 y 19 de la Ley 5508 y la amplió.'
                ],
                'items' => [
                    [
                        'title' => 'Duración general',
                        'text' => '18 semanas seguidas (126 días)'
                    ],
                    [
                        'title' => 'Inicio',
                        'text' => 'Hasta 2 semanas antes del parto'
                    ],
                    [
                        'title' => 'Nacimiento antes de la semana 35, bebé de menos de 2.000 g o con cuidados especiales',
                        'text' => '24 semanas, con certificación médica'
                    ],
                    [
                        'title' => 'Embarazo múltiple',
                        'text' => 'Un mes más por cada bebé desde el segundo'
                    ]
                ]
            ],
            [
                'h2' => 'Cómo se calculan las fechas orientativas',
                'body' => [
                    'Para calcular el inicio más temprano, restá 14 días a tu fecha probable de parto (FPP). Desde ese inicio, sumá 126 días para obtener el final de una licencia de 18 semanas. Por separado, el IPS solo emite el reposo de maternidad a partir de la semana 38 de gestación, es decir, 21 días antes de la FPP.',
                    'Por ejemplo, con FPP el 7 de diciembre de 2026, el inicio más temprano es el 23 de noviembre y el final calculado es el 29 de marzo de 2027; el reposo del IPS se puede emitir desde el 16 de noviembre. Si empezás en otra fecha, sumá los 126 días desde esa fecha. La FPP es una estimación: si tu equipo de salud la corrige, volvé a calcular.'
                ],
                'table' => [
                    'head' => [
                        'Referencia',
                        'Regla',
                        'Ejemplo orientativo'
                    ],
                    'rows' => [
                        [
                            'Fecha probable de parto',
                            'Dato de partida',
                            '7 de diciembre de 2026'
                        ],
                        [
                            'Inicio más temprano',
                            'FPP menos 14 días',
                            '23 de noviembre de 2026'
                        ],
                        [
                            'Fin calculado',
                            'Inicio más 126 días',
                            '29 de marzo de 2027'
                        ],
                        [
                            'Reposo del IPS',
                            'Desde la semana 38 (FPP menos 21 días)',
                            '16 de noviembre de 2026'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cómo pedirla',
                'body' => [
                    'La ley pide un certificado médico expedido o visado por el IPS o por el Ministerio de Salud Pública y Bienestar Social (MSPBS), que indique tu embarazo y la fecha probable de parto. Con ese certificado avisás a tu empleador cuándo vas a empezar la licencia.',
                    'Desde el momento en que el empleador sabe de tu embarazo, el preaviso y el despido son nulos mientras uses la licencia o cualquiera de estos permisos, y tenés protección laboral hasta 1 año después del nacimiento (mirá [fuero maternal y despido](/derechos/fuero-maternal-y-despido/)).'
                ]
            ],
            [
                'h2' => 'Quién paga la licencia',
                'body' => [
                    'Durante el permiso, la trabajadora recibe un subsidio del régimen de seguridad social del IPS equivalente al 100 % de su remuneración al momento del parto (artículo 12). Si tu empleador no te inscribió en el IPS o está en mora con sus obligaciones, debe pagar él el 100 % del subsidio, sin perjuicio de otras sanciones administrativas.',
                    'El IPS pide, entre otros requisitos, estar al día con los aportes y tener al menos cuatro meses de aportes anteriores y seis semanas de cuotas de trabajo efectivo en esos meses. El detalle está en [subsidio de maternidad del IPS](/derechos/subsidio-de-maternidad-ips/).'
                ]
            ],
            [
                'h2' => 'Otros derechos que se suman',
                'body' => [
                    'Al volver al trabajo tenés descansos para amamantar: [hora de lactancia](/derechos/hora-de-lactancia/). Para tus controles durante el embarazo tenés permiso pago: [permiso para controles prenatales](/derechos/permiso-para-controles/). Y el padre tiene 2 semanas de permiso después del parto: [licencia de paternidad](/derechos/licencia-de-paternidad/).'
                ]
            ]
        ],
        'steps' => [
            [
                'title' => 'Conseguí el certificado',
                'body' => [
                    'Pedí en el IPS o en el MSPBS el certificado médico que indica tu embarazo y la fecha probable de parto.'
                ]
            ],
            [
                'title' => 'Avisá a tu empleador',
                'body' => [
                    'Comunicá el embarazo y la fecha en que pensás empezar la licencia. Guardá una copia de lo que entregues.'
                ]
            ],
            [
                'title' => 'Tramitá el subsidio',
                'body' => [
                    'Reunís los documentos que pide el IPS y pedís el pago del subsidio; te conviene empezar cerca de la semana 38, cuando se puede emitir el reposo.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye un apartado de derechos con cálculo de fechas de licencia. Podés usarlo para preparar tus preguntas y después confirmar las fechas de tu trámite. Sin cuenta, todo queda en tu teléfono; con cuenta, el servidor guarda un sobre que no puede leer.',
            'medium' => 'article', 'extra' => [],
        ],
        'faq' => [
            [
                'q' => '¿Cuántas semanas dura la licencia de maternidad en Paraguay?',
                'a' => '18 semanas ininterrumpidas, o 24 si el bebé nace antes de la semana 35, pesa menos de 2.000 gramos o nace con una enfermedad congénita que requiere cuidados especiales. En embarazos múltiples se suma un mes por bebé desde el segundo.'
            ],
            [
                'q' => '¿Cuándo puedo empezar la licencia?',
                'a' => 'Hasta 2 semanas antes del parto. Con una FPP del 7 de diciembre de 2026, el inicio más temprano sería el 23 de noviembre.'
            ],
            [
                'q' => '¿Cuánto cobro durante la licencia?',
                'a' => 'El IPS paga el 100 % de tu remuneración al momento del parto. Si tu empleador no te inscribió o está en mora con el IPS, tiene que pagarlo él.'
            ],
            [
                'q' => '¿Qué papel necesito para pedir la licencia?',
                'a' => 'Un certificado médico expedido o visado por el IPS o por el MSPBS que indique el embarazo y la fecha probable de parto.'
            ]
        ],
        'related' => ['subsidio-de-maternidad-ips', 'permiso-para-controles', 'derechos-de-la-embarazada-que-trabaja'],
        'weeks' => [20, 30, 38], 'appGuideSlug' => null, 'guarani' => [],
        'reviewedBy' => null, 'reviewedAt' => null, 'validAsOf' => '2026-09-20',
        'sources' => [
            [
                'title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna',
                'accessed' => '2026-09-20'
            ],
            [
                'title' => 'Ley 6453/2019 — modifica y amplía la Ley 5508/2015',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/9184/ley-n-6453-modifica-y-amplia-la-ley-n-55082015-promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna',
                'accessed' => '2026-09-20'
            ],
            [
                'title' => '¿Qué saber del pago del subsidio por reposo de maternidad?',
                'publisher' => 'Instituto de Previsión Social (IPS)',
                'url' => 'https://portal.ips.gov.py/sistemas/ipsportal/noticia.php?cod=685',
                'accessed' => '2026-09-20'
            ]
        ],
        'updated' => '2026-09-20',
        'image' => [
            'slug' => 'licencia-maternidad-formulario-sellado-paraguay',
            'alt' => 'Un formulario con sello sobre un escritorio de madera, con un calendario y una lapicera, ilustración del artículo sobre licencia de maternidad.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
    ],
    'subsidio-de-maternidad-ips' => [
        'cluster' => 'derechos',
        'path' => '/derechos/subsidio-de-maternidad-ips/',
        'title' => 'Subsidio de maternidad IPS: aportes, trámite y pago',
        'seoTitle' => 'Subsidio de maternidad IPS: trámite y pago',
        'metaDescription' => 'Subsidio de maternidad del IPS: 100 % de tu remuneración durante la licencia, requisitos de aportes, reposo desde la semana 38 y documentos para cobrar.',
        'kind' => 'legal',
        'lead' => 'Durante la licencia de maternidad, el IPS paga a la trabajadora un subsidio equivalente al 100 % de su remuneración al momento del parto (Ley 5508/2015, artículo 12). Para cobrarlo tenés que estar al día con tus aportes, tener al menos cuatro meses de aportes anteriores y seis semanas de cuotas de trabajo efectivo en esos meses. El reposo de maternidad se emite recién desde la semana 38 de gestación. Si tu empleador no te inscribió en el IPS o está en mora, el 100 % lo paga él.',
        'sections' => [
            [
                'h2' => 'Cuánto paga el IPS y por cuánto tiempo',
                'body' => [
                    'El subsidio cubre el período de licencia de maternidad: 18 semanas (126 días), o más en los casos de la ley. Es el 100 % de la remuneración que tenías al momento del parto. El IPS llegó al 100 % de forma gradual: para los nacimientos desde el 30 de octubre de 2018 se paga el 100 %.',
                    'Si tu empleador no te inscribió en el IPS o estaba en mora con sus obligaciones, la ley lo obliga a pagarte el 100 % del subsidio, sin perjuicio de otras sanciones administrativas.'
                ],
                'items' => [
                    [
                        'title' => 'Monto',
                        'text' => '100 % de tu remuneración al momento del parto'
                    ],
                    [
                        'title' => 'Período',
                        'text' => '18 semanas (126 días), o más en los casos que fija la ley'
                    ],
                    [
                        'title' => 'Si el empleador está en mora con el IPS',
                        'text' => 'Debe pagar él el 100 % del subsidio'
                    ]
                ]
            ],
            [
                'h2' => 'Requisitos para cobrarlo',
                'body' => [
                    'Según el IPS, la asegurada tiene que estar al día con sus aportes y tener como mínimo cuatro meses de aportes anteriores y seis semanas de cuotas correspondientes a trabajo efectivo en el transcurso de esos meses.',
                    'El reposo de maternidad solo puede emitirse a partir de la semana 38 de gestación. El certificado de reposo debe incluir la fecha de la última menstruación (FUM), por eso llevá ese dato a la consulta.'
                ]
            ],
            [
                'h2' => 'Documentos y trámite',
                'body' => [
                    'Para el pago, el IPS pide el certificado de reposo, el formulario de solicitud de pago del subsidio y tu cédula de identidad, entre otros documentos que indica en su portal. Antes de ir, revisá el detalle vigente en el sitio del IPS o preguntalo en la sucursal.',
                    'Si el pago llega con una diferencia, pedí en el IPS el detalle del cálculo y compará con tu recibo del mes del parto. Para las fechas de tu licencia, usá las reglas de [licencia de maternidad](/derechos/licencia-de-maternidad/).'
                ],
                'table' => [
                    'head' => [
                        'Paso',
                        'Cuándo',
                        'Qué llevar'
                    ],
                    'rows' => [
                        [
                            'Reposo de maternidad',
                            'Desde la semana 38',
                            'Consulta con la fecha de la última menstruación'
                        ],
                        [
                            'Solicitud del subsidio',
                            'Con el reposo emitido',
                            'Certificado de reposo, formulario de solicitud y cédula, entre otros'
                        ],
                        [
                            'Seguimiento del pago',
                            'Durante la licencia',
                            'Recibo del mes del parto y comprobantes'
                        ]
                    ]
                ]
            ]
        ],
        'steps' => [
            [
                'title' => 'Verificá tus aportes',
                'body' => [
                    'Confirmá en el IPS que estás al día, con cuatro meses de aportes y seis semanas de cuotas de trabajo efectivo.'
                ]
            ],
            [
                'title' => 'Pedí el reposo',
                'body' => [
                    'Desde la semana 38, tu equipo de salud puede emitir el reposo con la fecha de la última menstruación.'
                ]
            ],
            [
                'title' => 'Solicitá el pago',
                'body' => [
                    'Presentá el certificado de reposo, el formulario y tu cédula, y seguí el trámite en el IPS.'
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
                'q' => '¿Cuánto paga el IPS en la licencia de maternidad?',
                'a' => 'El 100 % de tu remuneración al momento del parto, durante la licencia.'
            ],
            [
                'q' => '¿Qué aportes necesito?',
                'a' => 'Estar al día con los aportes, tener al menos cuatro meses de aportes anteriores y seis semanas de cuotas de trabajo efectivo en esos meses.'
            ],
            [
                'q' => '¿Desde cuándo se emite el reposo de maternidad?',
                'a' => 'Desde la semana 38 de gestación.'
            ],
            [
                'q' => '¿Y si mi empleador no me inscribió en el IPS?',
                'a' => 'Según la ley, si no te inscribió o está en mora con el IPS, debe pagar él el 100 % del subsidio.'
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
                'title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna',
                'accessed' => '2026-09-20'
            ],
            [
                'title' => '¿Qué saber del pago del subsidio por reposo de maternidad?',
                'publisher' => 'Instituto de Previsión Social (IPS)',
                'url' => 'https://portal.ips.gov.py/sistemas/ipsportal/noticia.php?cod=685',
                'accessed' => '2026-09-20'
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
        'metaDescription' => 'Ley 7383/2024: hasta cuatro horas pagas por cada control prenatal, con aviso de 48 horas y constancia. Qué cubre, cómo pedirlo y qué hacer si te lo niegan.',
        'kind' => 'legal',
        'lead' => 'La Ley 7383/2024 da a las trabajadoras embarazadas, del sector público y del privado, permiso de hasta cuatro horas por cada control prenatal. Esas horas se cuentan como trabajadas: no pueden descontarse de tu salario. Tenés que avisar con al menos 48 horas de anticipación y presentar después la constancia de la consulta, salvo en una urgencia. Si necesitás más tiempo, el permiso puede ampliarse con el aval de tu médico o médica tratante, y el empleador no puede negarlo.',
        'sections' => [
            [
                'h2' => 'Qué establece la ley',
                'body' => [
                    'La Ley 7383/2024 regula los permisos laborales para consultas, controles y estudios prenatales de las trabajadoras embarazadas. Alcanza al sector público y al privado, sin importar la modalidad de trabajo. El Ministerio de Trabajo, Empleo y Seguridad Social (MTESS) la difundió el 27 de diciembre de 2024.',
                    'El límite es de hasta cuatro horas por cada control. No es un total mensual ni anual: cada consulta, control o estudio prenatal tiene su propio permiso. Esas horas se computan como tiempo efectivamente trabajado, así que no pueden descontarse de tu salario ni de tu remuneración.',
                    'Si por la distancia, la espera o el tipo de estudio necesitás más de cuatro horas, el permiso puede ampliarse con el aval de tu médico o médica tratante. La ley establece que estos permisos no pueden ser negados.'
                ]
            ],
            [
                'h2' => 'Cómo pedirlo',
                'body' => [
                    'Avisá con al menos 48 horas de anticipación. Conviene hacerlo por escrito, con un mensaje o un correo a tu jefatura o al área de personal: así queda registrada la fecha, el horario del control y que lo pediste a tiempo. Si el turno te lo dan con menos anticipación, o se trata de una urgencia, la ley prevé una excepción: avisá apenas puedas.',
                    'Después del control, presentá la constancia de la consulta que te entrega el servicio de salud, y guardá una copia para vos. La ley pide esa constancia; si en el trabajo te reclaman más información clínica, preguntá qué norma lo exige antes de entregarla.',
                    'Si te cambian el turno después de avisar, avisá de nuevo con el dato actualizado y guardá el mensaje. Para cada control siguiente repetís el aviso y la constancia, porque el permiso es por control.'
                ],
                'table' => [
                    'head' => [
                        'Qué',
                        'Cuánto o cuándo',
                        'Qué guardar'
                    ],
                    'rows' => [
                        [
                            'Permiso por control',
                            'Hasta 4 horas por cada control, consulta o estudio prenatal',
                            'El turno o comprobante de la reserva'
                        ],
                        [
                            'Aviso al empleador',
                            'Con al menos 48 horas de anticipación, salvo urgencia',
                            'El mensaje o correo enviado y la respuesta'
                        ],
                        [
                            'Constancia',
                            'Después de la consulta',
                            'Una copia de la constancia entregada'
                        ],
                        [
                            'Más tiempo del previsto',
                            'Se puede ampliar con el aval del médico tratante',
                            'La indicación o constancia del médico'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Permiso, reposo y licencia: no son lo mismo',
                'body' => [
                    'El permiso para controles cubre las horas de una consulta, un control o un estudio. No es un reposo médico ni la [licencia de maternidad](/derechos/licencia-de-maternidad/), que son otro derecho, con otro trámite y otro pago. Si en algún momento te indican reposo, presentá el certificado como reposo, no como aviso de control.',
                    'Para ordenar todos tus derechos laborales durante el embarazo, mirá el [mapa de derechos de la embarazada que trabaja](/derechos/derechos-de-la-embarazada-que-trabaja/).'
                ]
            ],
            [
                'h2' => 'Si te niegan el permiso o te descuentan las horas',
                'body' => [
                    'La ley dice que el permiso no puede negarse y que las horas no se descuentan. Si igual te lo niegan, o aparece un descuento en el recibo, juntá el turno, tu aviso, la respuesta del empleador y el recibo, y consultá en el Ministerio de Trabajo, Empleo y Seguridad Social (MTESS), que difundió la ley. Los empleadores que incumplen pueden ser sancionados.',
                    'Si te presionan para dejar de ir a tus controles, no lo hagas: el seguimiento prenatal es parte de cuidar tu salud. Ante una señal de alarma, no esperes ningún permiso: revisá las [señales de alarma](/salud/senales-de-alarma/) y buscá atención.'
                ]
            ]
        ],
        'steps' => [
            [
                'title' => 'Avisá con 48 horas',
                'body' => [
                    'Escribí a tu jefatura o a personal con la fecha y el horario del control. Guardá el mensaje.'
                ]
            ],
            [
                'title' => 'Andá al control',
                'body' => [
                    'Pedí en el servicio de salud la constancia de la consulta.'
                ]
            ],
            [
                'title' => 'Presentá la constancia',
                'body' => [
                    'Entregá la constancia en el trabajo y guardá una copia. Repetí el proceso en cada control.'
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
                'a' => 'No. La ley fija hasta cuatro horas por cada control, consulta o estudio prenatal, no un total mensual: cada control tiene su propio permiso.'
            ],
            [
                'q' => '¿Me pueden descontar esas horas del sueldo?',
                'a' => 'No. Las horas del permiso se computan como tiempo efectivamente trabajado y no pueden descontarse del salario ni de la remuneración.'
            ],
            [
                'q' => '¿Con cuánta anticipación tengo que avisar?',
                'a' => 'Al menos 48 horas antes, salvo situaciones de urgencia. Después del control presentás la constancia de la consulta.'
            ],
            [
                'q' => '¿Puede mi empleador negarme el permiso?',
                'a' => 'La ley establece que estos permisos no pueden ser negados. Si lo hace, guardá tu aviso y su respuesta y consultá en el MTESS.'
            ],
            [
                'q' => '¿Y si necesito más de cuatro horas?',
                'a' => 'El permiso puede ampliarse con el aval de tu médico o médica tratante. Pedile una indicación por escrito.'
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
                'title' => 'Ley 7383/2024 — permisos para controles prenatales (nota oficial del MTESS)',
                'publisher' => 'Ministerio de Trabajo, Empleo y Seguridad Social (MTESS)',
                'url' => 'https://www.mtess.gov.py/?p=30138',
                'accessed' => '2026-09-20'
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
        'metaDescription' => 'Hora de lactancia en Paraguay: 90 minutos por día los primeros 6 meses y 60 minutos hasta los 24 meses con indicación médica. Es tiempo trabajado y pago.',
        'kind' => 'legal',
        'lead' => 'En Paraguay, las madres trabajadoras tienen un permiso de 90 minutos por día para amamantar durante los primeros 6 meses de vida del bebé (Ley 5508/2015, artículo 14). Podés usarlo como te convenga según las necesidades de tu hijo o hija, desde el primer día de tu regreso al trabajo. Con indicación médica, puede extenderse desde los 7 meses hasta los 24 meses, a razón de 60 minutos por día. Ese tiempo cuenta como trabajado y se paga.',
        'sections' => [
            [
                'h2' => 'Qué dice la ley',
                'body' => [
                    'El artículo 14 de la Ley 5508/2015 concede a las madres trabajadoras un permiso de 90 minutos por día para amamantar durante los primeros 6 meses del bebé. Los minutos se cuentan desde el primer día de reintegro al trabajo, después de la licencia de maternidad.',
                    'Lo podés usar de la forma que estimes conveniente según las necesidades de tu hijo o hija: por ejemplo, en dos momentos, o al empezar o terminar la jornada. Ese permiso se considera período trabajado, con goce de salario, es decir que no te pueden descontar el sueldo.',
                    'Desde los 7 meses y hasta los 24 meses de edad, el permiso puede extenderse por indicación médica, y en ese caso es de 60 minutos por día.'
                ],
                'items' => [
                    [
                        'title' => 'Primeros 6 meses',
                        'text' => '90 minutos por día, pagos'
                    ],
                    [
                        'title' => 'Desde los 7 hasta los 24 meses',
                        'text' => '60 minutos por día, con indicación médica, pagos'
                    ],
                    [
                        'title' => 'Cómo se cuenta',
                        'text' => 'Desde el primer día de regreso al trabajo, y se considera tiempo trabajado'
                    ]
                ]
            ],
            [
                'h2' => 'Cómo organizarlo con tu empleador',
                'body' => [
                    'Antes de volver, conversá cómo vas a usar los minutos: todo junto, en dos pausas, al inicio o al final del día. La ley te deja elegir la forma según las necesidades del bebé; lo práctico es acordarlo con anticipación y dejarlo por escrito.',
                    'Para la extensión desde los 7 meses, pedile a tu médico o médica pediatra una indicación por escrito y entregala en el trabajo.'
                ],
                'table' => [
                    'head' => [
                        'Etapa del bebé',
                        'Tiempo por día',
                        'Qué necesitás'
                    ],
                    'rows' => [
                        [
                            '0 a 6 meses',
                            '90 minutos',
                            'Avisar tu regreso y cómo vas a usarlos'
                        ],
                        [
                            '7 a 24 meses',
                            '60 minutos',
                            'Indicación médica para extender el permiso'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Salas de lactancia y protección laboral',
                'body' => [
                    'La Ley 6453/2019 reforzó la obligación de garantizar espacios adecuados para la lactancia en los lugares de trabajo. Además, la lactancia nunca puede ser causa justificada de despido, y el despido comunicado mientras usás estos permisos es nulo (artículo 15). Más en [fuero maternal y despido](/derechos/fuero-maternal-y-despido/).',
                    'Si te ponen trabas o te descuentan estos minutos, guardá tu aviso, la indicación médica y tus recibos, y consultá en el Ministerio de Trabajo, Empleo y Seguridad Social (MTESS). Para el resto de tus derechos, volvé a la [licencia de maternidad](/derechos/licencia-de-maternidad/).'
                ]
            ]
        ],
        'steps' => [
            [
                'title' => 'Antes de volver',
                'body' => [
                    'Avisá que vas a usar el permiso de lactancia y proponé cómo repartir los 90 minutos.'
                ]
            ],
            [
                'title' => 'Desde los 7 meses',
                'body' => [
                    'Si querés seguir, pedí una indicación médica por escrito y entregala para pasar a 60 minutos por día.'
                ]
            ],
            [
                'title' => 'Guardá todo',
                'body' => [
                    'Conservá el acuerdo, la indicación médica y tus recibos, por si hay una diferencia.'
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
                'q' => '¿Cuántos minutos por día tengo para amamantar?',
                'a' => '90 minutos por día durante los primeros 6 meses del bebé. Con indicación médica se puede extender desde los 7 hasta los 24 meses, a razón de 60 minutos por día.'
            ],
            [
                'q' => '¿Me descuentan esos minutos del sueldo?',
                'a' => 'No. La ley dice que el permiso se considera período trabajado, con goce de salario.'
            ],
            [
                'q' => '¿Puedo usar los 90 minutos todos juntos?',
                'a' => 'Sí. La ley deja que la madre los use de la forma que estime conveniente según las necesidades del niño o la niña.'
            ],
            [
                'q' => '¿Desde cuándo se cuentan los 6 meses?',
                'a' => 'Los minutos se cuentan desde el primer día de reintegro al trabajo, después de la licencia de maternidad.'
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
                'title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna',
                'accessed' => '2026-09-20'
            ],
            [
                'title' => 'Ley 6453/2019 — modifica y amplía la Ley 5508/2015',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/9184/ley-n-6453-modifica-y-amplia-la-ley-n-55082015-promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna',
                'accessed' => '2026-09-20'
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
        'metaDescription' => 'Fuero maternal en Paraguay: el despido es nulo desde que tu empleador sabe del embarazo y tenés protección laboral hasta 1 año después del nacimiento.',
        'kind' => 'legal',
        'lead' => 'En Paraguay, desde el momento en que tu empleador sabe que estás embarazada y mientras usás la licencia de maternidad u otros permisos de la ley, el preaviso y el despido son nulos. Además, tenés inamovilidad laboral hasta 1 año después del nacimiento o la adopción, y el embarazo, el nacimiento o la lactancia nunca pueden ser causa justificada de despido (Ley 5508/2015, artículo 15). Por eso conviene avisar el embarazo por escrito y guardar una copia.',
        'sections' => [
            [
                'h2' => 'Qué protege el fuero maternal',
                'body' => [
                    'El artículo 15 de la Ley 5508/2015 dice que, desde que el empleador es notificado del embarazo y mientras la trabajadora usufructúa el permiso de maternidad y los demás permisos de la ley, incluidos los de lactancia, son nulos el preaviso y el despido que se le comuniquen.',
                    'La misma norma reconoce inamovilidad laboral hasta 1 año después del nacimiento o de la adopción, y aclara que en ningún caso el embarazo, la adopción, el nacimiento o la lactancia pueden ser, directa o indirectamente, causa justificada de despido.'
                ],
                'items' => [
                    [
                        'title' => 'Desde cuándo',
                        'text' => 'Desde que el empleador es notificado del embarazo'
                    ],
                    [
                        'title' => 'Hasta cuándo',
                        'text' => 'Hasta 1 año después del nacimiento o la adopción'
                    ],
                    [
                        'title' => 'Qué es nulo',
                        'text' => 'El preaviso y el despido comunicados durante la protección'
                    ]
                ]
            ],
            [
                'h2' => 'Cómo avisar el embarazo',
                'body' => [
                    'La protección corre desde que tu empleador está notificado, así que te conviene avisar por escrito, con la fecha, y guardar una copia. Podés acompañar el aviso con el certificado médico de tu embarazo.',
                    'No hace falta esperar a la licencia para avisar: la protección corre desde que el empleador es notificado del embarazo. Para tus controles durante el embarazo, mirá el [permiso para controles prenatales](/derechos/permiso-para-controles/).'
                ]
            ],
            [
                'h2' => 'Qué hacer si te despiden o te presionan',
                'body' => [
                    'Si te comunican un despido, o te piden firmar una renuncia o un acuerdo mientras estás embarazada o dentro del año posterior al nacimiento, no firmes sin asesoramiento. Guardá la comunicación original, los mensajes, tus recibos y la fecha en que avisaste el embarazo.',
                    'Consultá en el Ministerio de Trabajo, Empleo y Seguridad Social (MTESS) o con un abogado o abogada laboralista. Para un caso concreto, la evaluación necesita tus documentos; esta guía explica lo que dice la ley, no reemplaza el asesoramiento legal.'
                ],
                'table' => [
                    'head' => [
                        'Qué guardar',
                        'Para qué sirve'
                    ],
                    'rows' => [
                        [
                            'Aviso del embarazo con fecha y certificado médico',
                            'Muestra desde cuándo el empleador estaba notificado'
                        ],
                        [
                            'Comunicación de despido o propuesta de renuncia',
                            'Es la prueba de lo que te comunicaron'
                        ],
                        [
                            'Recibos de sueldo y contrato',
                            'Permiten revisar tu situación laboral'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Otros derechos ligados',
                'body' => [
                    'La protección cubre también la [licencia de maternidad](/derechos/licencia-de-maternidad/) y la [hora de lactancia](/derechos/hora-de-lactancia/). Para ver todos tus derechos juntos, mirá el [mapa de derechos de la embarazada que trabaja](/derechos/derechos-de-la-embarazada-que-trabaja/).'
                ]
            ]
        ],
        'steps' => [
            [
                'title' => 'Avisá por escrito',
                'body' => [
                    'Comunicá el embarazo a tu empleador con fecha y, si podés, con el certificado médico.'
                ]
            ],
            [
                'title' => 'Guardá las pruebas',
                'body' => [
                    'Conservá el aviso, los mensajes, el contrato y los recibos.'
                ]
            ],
            [
                'title' => 'Buscá asesoramiento',
                'body' => [
                    'Ante un despido o una propuesta de renuncia, consultá en el MTESS o con un abogado o abogada laboralista antes de firmar.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé reúne derechos relacionados con embarazo y maternidad. Puede ayudarte a identificar el tema de tu consulta; la evaluación de un despido necesita asesoramiento sobre tus documentos.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Hasta cuándo estoy protegida contra el despido?',
                'a' => 'Hasta 1 año después del nacimiento o la adopción, desde que el empleador es notificado del embarazo.'
            ],
            [
                'q' => '¿Qué pasa si me despiden estando embarazada?',
                'a' => 'Según la ley, el preaviso y el despido comunicados durante la protección son nulos. Consultá en el MTESS o con un abogado o abogada laboralista.'
            ],
            [
                'q' => '¿Tengo que avisar mi embarazo para estar protegida?',
                'a' => 'La protección corre desde que el empleador es notificado, por eso conviene avisar por escrito y guardar una copia.'
            ],
            [
                'q' => '¿La lactancia puede ser motivo de despido?',
                'a' => 'No. La ley dice que la lactancia nunca puede ser causa justificada de despido, directa ni indirectamente.'
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
                'title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna',
                'accessed' => '2026-09-20'
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
        'metaDescription' => 'Licencia de paternidad en Paraguay: 2 semanas después del parto, con goce de sueldo a cargo del empleador e irrenunciable, según la Ley 5508.',
        'kind' => 'legal',
        'lead' => 'En Paraguay, todo trabajador padre de un recién nacido tiene 2 semanas de permiso posteriores al parto, con goce de sueldo a cargo del empleador y de carácter irrenunciable (Ley 5508/2015, artículo 13). Durante ese período, el padre debe inscribir al niño o niña en el Registro del Estado Civil y empezar el trámite de la cédula de identidad. Avisale a tu empleador con anticipación y guardá una copia de lo que entregues.',
        'sections' => [
            [
                'h2' => 'Qué te corresponde',
                'body' => [
                    'El artículo 13 de la Ley 5508/2015 concede a todo trabajador padre de un recién nacido 2 semanas de permiso posteriores al parto, con goce de sueldo, a cargo del empleador. Es irrenunciable: no se puede firmar un acuerdo para renunciar a él.',
                    'Es un permiso distinto de la [licencia de maternidad](/derechos/licencia-de-maternidad/), que corresponde a la madre y la paga el IPS. En la licencia de paternidad quien paga el sueldo es el empleador.'
                ],
                'items' => [
                    [
                        'title' => 'Duración',
                        'text' => '2 semanas posteriores al parto'
                    ],
                    [
                        'title' => 'Pago',
                        'text' => 'Con goce de sueldo, a cargo del empleador'
                    ],
                    [
                        'title' => 'Carácter',
                        'text' => 'Irrenunciable'
                    ]
                ]
            ],
            [
                'h2' => 'Qué tenés que hacer durante esas dos semanas',
                'body' => [
                    'La ley pone una obligación concreta: durante el permiso, el padre debe inscribir al niño o niña ante la Dirección General del Registro del Estado Civil de las Personas y tramitar los documentos necesarios para pedir la cédula de identidad en el Departamento de Identificaciones de la Policía Nacional.',
                    'Podés adelantar la información con estas guías: [inscripción en el Registro Civil](/tramites/inscripcion-en-el-registro-civil/) y [cédula del bebé](/tramites/cedula-del-bebe/). Para todo lo que sigue, mirá [después del nacimiento](/tramites/despues-del-nacimiento/).'
                ]
            ],
            [
                'h2' => 'Cómo avisar en el trabajo',
                'body' => [
                    'Avisale a tu empleador con anticipación, por escrito, la fecha probable de parto y que vas a usar el permiso desde el nacimiento. Como el parto puede adelantarse, dejá dicho que la fecha es estimada y que la confirmás apenas nazca el bebé.',
                    'Guardá el mensaje y, después del nacimiento, una copia de lo que te pidan. Si el empleador se niega o te descuenta esos días, juntá los mensajes y los recibos y consultá en el Ministerio de Trabajo, Empleo y Seguridad Social (MTESS).'
                ]
            ]
        ],
        'steps' => [
            [
                'title' => 'Avisá antes del parto',
                'body' => [
                    'Comunicá por escrito la fecha probable de parto y que vas a usar las 2 semanas.'
                ]
            ],
            [
                'title' => 'Confirmá el nacimiento',
                'body' => [
                    'Apenas nazca el bebé, avisá la fecha real y entregá lo que te pidan.'
                ]
            ],
            [
                'title' => 'Hacé los trámites del bebé',
                'body' => [
                    'Durante el permiso, inscribí al niño o niña en el Registro Civil y empezá el trámite de la cédula.'
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
                'q' => '¿Cuántos días de licencia tiene el padre en Paraguay?',
                'a' => '2 semanas posteriores al parto, con goce de sueldo. Las paga el empleador, no el IPS.'
            ],
            [
                'q' => '¿Se puede renunciar a la licencia de paternidad?',
                'a' => 'No. La ley la establece con carácter irrenunciable.'
            ],
            [
                'q' => '¿Qué tengo que hacer durante esas dos semanas?',
                'a' => 'Inscribir al niño o niña en el Registro del Estado Civil y tramitar los documentos para pedir la cédula de identidad.'
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
                'title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna',
                'accessed' => '2026-09-20'
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
            ['title' => 'Ley 5099/2013 — gratuidad de aranceles de las prestaciones de salud del Ministerio de Salud Pública', 'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)', 'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4706/de-la-gratuidad-de-aranceles-de-las-prestaciones-de-salud-de-los-establecimientos-del-ministerio-de-salud-publica-y-bienestar-social', 'accessed' => '2026-09-20'],
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
            ['title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna', 'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)', 'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna', 'accessed' => '2026-09-20'],
            ['title' => 'Ley 7383/2024 — permisos para controles prenatales (nota oficial del MTESS)', 'publisher' => 'Ministerio de Trabajo, Empleo y Seguridad Social (MTESS)', 'url' => 'https://www.mtess.gov.py/?p=30138', 'accessed' => '2026-09-20'],
            ['title' => '¿Qué saber del pago del subsidio por reposo de maternidad?', 'publisher' => 'Instituto de Previsión Social (IPS)', 'url' => 'https://portal.ips.gov.py/sistemas/ipsportal/noticia.php?cod=685', 'accessed' => '2026-09-20'],
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
        'image' => [
            'slug' => 'embarazada-que-trabaja-derechos-oficina-paraguay',
            'alt' => 'Una embarazada sentada en su escritorio de trabajo con una carpeta y un termo de tereré, ilustración del artículo sobre derechos de la embarazada que trabaja.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
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
        'image' => [
            'slug' => 'carne-perinatal-embarazo-paraguay',
            'alt' => 'Una mano sostiene abierto un carné perinatal con un lápiz al lado, ilustración del artículo sobre el carné perinatal.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
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
        'image' => [
            'slug' => 'control-prenatal-ips-o-sanatorio-privado',
            'alt' => 'Dos edificios de salud, uno público con techo de chapa y otro privado con puerta verde, ilustración del artículo sobre control prenatal en IPS o privado.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
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
        'title' => 'Asignación familiar en Paraguay: monto y condiciones',
        'seoTitle' => 'Asignación familiar: monto y requisitos',
        'metaDescription' => 'Asignación familiar en Paraguay: el Código del Trabajo reconoce el 5 % del salario mínimo por cada hijo menor de 17 años. Condiciones y cómo consultarla.',
        'kind' => 'procedural',
        'lead' => 'El Código del Trabajo (artículo 261) reconoce a todo trabajador una asignación familiar equivalente al 5 % del salario mínimo por cada hijo, matrimonial, extramatrimonial o adoptivo. Para cobrarla, el hijo o la hija debe ser menor de 17 años cumplidos (sin límite de edad si tiene una discapacidad física o mental total), estar bajo tu patria potestad, criarse y educarse a tus expensas y residir en el país (artículo 262). Preguntá en el área de personal cómo se liquida y qué documentos piden.',
        'sections' => [
            [
                'h2' => 'Qué es y cuánto es',
                'body' => [
                    'La asignación familiar es un beneficio del Código del Trabajo (Ley 213/93, artículo 261): todo trabajador tiene derecho a percibir una asignación equivalente al 5 % del salario mínimo por cada hijo, sea matrimonial, extramatrimonial o adoptivo. La ley la prevé hasta que se implante un sistema legal de compensación de asignaciones familiares basado en el seguro social.',
                    'El monto exacto depende del salario mínimo vigente, que cambia. Consultá el valor actual en el Ministerio de Trabajo, Empleo y Seguridad Social (MTESS) y aplicá el 5 % por cada hijo o hija.'
                ]
            ],
            [
                'h2' => 'Condiciones para cobrarla',
                'body' => [
                    'El artículo 262 pide que el hijo o la hija cumpla estas condiciones a la vez: que sea menor de diecisiete años cumplidos (sin límite de edad si tiene una discapacidad física o mental total), que esté bajo tu patria potestad, que su crianza y educación corran por tu cuenta y que resida en el territorio nacional.'
                ],
                'table' => [
                    'head' => [
                        'Condición',
                        'Qué dice el artículo 262'
                    ],
                    'rows' => [
                        [
                            'Edad',
                            'Menor de 17 años cumplidos; sin límite de edad si tiene una discapacidad física o mental total'
                        ],
                        [
                            'Patria potestad',
                            'El hijo o la hija está bajo tu patria potestad'
                        ],
                        [
                            'Crianza y educación',
                            'Corren a tus expensas'
                        ],
                        [
                            'Residencia',
                            'Reside en el territorio nacional'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Cómo pedirla y cómo revisar el pago',
                'body' => [
                    'Después del nacimiento, tendrás que acreditar el vínculo con el hijo o la hija. Preguntá en el área de personal de tu trabajo cómo se liquida la asignación y qué documentos piden; suelen pedir la partida de nacimiento, que se obtiene al inscribir al bebé (mirá [inscripción en el Registro Civil](/tramites/inscripcion-en-el-registro-civil/)).',
                    'Para revisar el recibo, calculá el 5 % del salario mínimo vigente por cada hijo o hija que cumple las condiciones y compará con el concepto que figura en tu recibo. Si hay una diferencia, pedí que te expliquen cómo la calcularon. Más trámites del nacimiento en [después del nacimiento](/tramites/despues-del-nacimiento/) y [cédula del bebé](/tramites/cedula-del-bebe/).'
                ]
            ]
        ],
        'steps' => [
            [
                'title' => 'Inscribí al bebé',
                'body' => [
                    'Con la inscripción en el Registro Civil obtenés la partida de nacimiento.'
                ]
            ],
            [
                'title' => 'Preguntá en personal',
                'body' => [
                    'Consultá cómo se liquida la asignación en tu trabajo y qué documentos piden.'
                ]
            ],
            [
                'title' => 'Revisá tu recibo',
                'body' => [
                    'Calculá el 5 % del salario mínimo vigente por hijo y compará con el concepto del recibo.'
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
                'q' => '¿De cuánto es la asignación familiar?',
                'a' => 'El 5 % del salario mínimo por cada hijo, matrimonial, extramatrimonial o adoptivo (Código del Trabajo, artículo 261).'
            ],
            [
                'q' => '¿Hasta qué edad se cobra?',
                'a' => 'Hasta que el hijo o la hija cumple 17 años; no hay límite de edad si tiene una discapacidad física o mental total.'
            ],
            [
                'q' => '¿Qué condiciones tiene que cumplir el hijo o la hija?',
                'a' => 'Estar bajo tu patria potestad, criarse y educarse a tus expensas y residir en el territorio nacional, además de la edad.'
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
                'title' => 'Código del Trabajo (Ley 213/93) — artículos 261 y 262, asignación familiar',
                'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)',
                'url' => 'https://www.bacn.gov.py/leyes-paraguayas/2608/ley-n-213establece-el-',
                'accessed' => '2026-09-20'
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
        'image' => [
            'slug' => 'tramites-despues-del-nacimiento-partida-paraguay',
            'alt' => 'Una carpeta con documentos junto a un gorrito tejido de bebé, ilustración del artículo sobre trámites después del nacimiento.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
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
        'image' => [
            'slug' => 'vacunas-embarazo-carne-vacunacion-paraguay',
            'alt' => 'Un carné de vacunación abierto junto a un algodón y una curita sobre una mesa, ilustración del artículo sobre vacunas en el embarazo.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
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
        'image' => [
            'slug' => 'dengue-embarazo-mosquitero-ventana-paraguay',
            'alt' => 'Una ventana con mosquitero y un ventilador, y una mano que vacía un balde con agua, ilustración del artículo sobre dengue en el embarazo.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
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
        'image' => [
            'slug' => 'senales-de-alarma-embarazo-llamada-celular',
            'alt' => 'Un celular sobre una mesa de luz con una llamada en curso, junto a un vaso de agua, ilustración del artículo sobre señales de alarma en el embarazo.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ]
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
        'image' => [
            'slug' => 'terere-embarazo-guampa-termo-paraguay',
            'alt' => 'Un termo, una guampa con bombilla y un manojo de yuyos sobre una mesa de madera, ilustración del artículo sobre tereré en el embarazo.',
            'w' => 768,
            'h' => 432,
            'widths' => [
                160,
                480,
                768
            ]
        ],
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
    'que-llevar-al-sanatorio' => [
        'cluster' => 'parto',
        'path' => '/parto/que-llevar-al-sanatorio/',
        'title' => 'Qué llevar al sanatorio para el parto',
        'seoTitle' => 'Qué llevar al sanatorio para el parto',
        'metaDescription' => 'Prepará el bolso para el parto con una lista de ropa, higiene y documentos habituales. Organizá lo tuyo y lo del bebé sin compras innecesarias.',
        'kind' => 'medical',
        'lead' => 'Llevá ropa cómoda, artículos de higiene, toallas higiénicas para el posparto y una carpeta con tu cédula, carné perinatal y estudios disponibles. Separá las cosas del bebé para encontrarlas rápido. La lista del sanatorio puede variar; armá un bolso liviano y accesible. Si aparecen señales de alarma, salí a buscar atención aunque falte terminarlo.',
        'sections' => [
            [
                'h2' => 'Un bolso que puedas usar sin desarmarlo',
                'body' => [
                    'Empezá por lo que ya tenés en casa. Una prenda amplia que abre adelante puede servir tanto para descansar como para facilitar el contacto con el bebé. Probá sentarte, levantarte y caminar con ella: una costura que aprieta o un cierre difícil se vuelven más incómodos cuando estás cansada. Elegí ropa que se lave fácilmente y que no te preocupe manchar.',
                    'Dividí el equipaje en ropa, higiene, documentos y cosas del bebé. Usá bolsas limpias o separadores que permitan reconocer cada grupo sin volcar todo sobre la cama. Si alguien te acompaña, mostrale dónde está cada cosa antes de salir. Dejá el carné y la identificación en un bolsillo accesible, no debajo de las mudas.',
                    'Podés imprimir esta página y marcar lo que ya guardaste. Al lado de cada pendiente, anotá si falta lavarlo, conseguirlo o simplemente ponerlo a último momento. No hace falta comprar un bolso especial ni duplicar productos que usás habitualmente. El objetivo es poder alcanzar lo necesario con poca ayuda.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Checklist de ropa y cuidado personal',
                'body' => [
                    'Prepará una muda para la llegada y otras de recambio según lo que hayan conversado para tu internación. El sangrado posparto puede manchar la ropa interior; buscá prendas cómodas que sostengan la toalla sin comprimir la panza. Si el nacimiento es por cesárea, una cintura que roce la herida puede molestar: elegí una alternativa holgada.',
                    'Los artículos de higiene de uso personal van juntos y cerrados para evitar derrames. Para la zona genital, evitá perfumes, duchas vaginales y productos que puedan irritar. Llevá tus elementos habituales, sin sumar desinfectantes ni preparados para aplicar sobre heridas por tu cuenta.'
                ],
                'items' => [
                    [
                        'title' => 'Ropa cómoda',
                        'text' => 'Camisón o pijama amplio, ropa interior de recambio y una muda para volver a casa. Elegí aberturas sencillas si querés amamantar; no necesitás comprar prendas especiales.'
                    ],
                    [
                        'title' => 'Calzado estable',
                        'text' => 'Un par fácil de poner, con suela que no resbale y buen apoyo. Probalo antes; caminar con calzado flojo puede resultar difícil si estás dolorida o mareada.'
                    ],
                    [
                        'title' => 'Higiene personal',
                        'text' => 'Cepillo y pasta dental, jabón suave, peine, toalla y otros artículos personales. Guardá cada envase cerrado y separado de los documentos.'
                    ],
                    [
                        'title' => 'Toallas higiénicas',
                        'text' => 'Prepará protección externa para el sangrado posparto y ropa interior que la sostenga. No uses tampones ni copa en esta etapa sin orientación de tu equipo.'
                    ],
                    [
                        'title' => 'Anteojos y objetos cotidianos',
                        'text' => 'Si usás anteojos, llevá su estuche. Sumá cargador y una bolsa para ropa usada; dejá joyas y objetos valiosos en casa para reducir pendientes.'
                    ]
                ],
                'table' => null
            ],
            [
                'h2' => 'Documentos a mano: qué suele servir',
                'body' => [
                    'El personal de admisión suele solicitar identificación y antecedentes de la atención. El equipo de salud habitualmente revisa el carné perinatal y los informes disponibles para conocer cómo fue el embarazo. Guardalos en una carpeta que proteja del agua y permita retirar cada hoja sin romperla. Si tenés varios estudios, ordenalos por fecha.',
                    'Confirmá con el establecimiento los requisitos, costos y plazos vigentes.',
                    'Una foto puede servir para ubicar información si se pierde un papel, pero no presupongas que reemplaza el formato solicitado. Si te falta un documento, explicalo al llegar; no demores una consulta urgente para buscarlo. Podés ampliar la organización de tus antecedentes en la guía de [carné perinatal](/tramites/carne-perinatal/).'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Documento habitual',
                        'Para qué ayuda',
                        'Cómo prepararlo'
                    ],
                    'rows' => [
                        [
                            'Cédula',
                            'Identificación al consultar',
                            'Dejala accesible con los datos legibles'
                        ],
                        [
                            'Carné perinatal',
                            'Resumen del seguimiento',
                            'Guardá el que usaste en tus controles'
                        ],
                        [
                            'Estudios e informes',
                            'Antecedentes para el equipo',
                            'Agrupalos por fecha, sin descartar resultados'
                        ],
                        [
                            'Órdenes o referencias disponibles',
                            'Información del ingreso previsto',
                            'Llevá lo que te haya entregado tu equipo'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Lo del bebé y lo de tu acompañante',
                'body' => [
                    'Armá un paquete separado con las prendas del bebé, pañales y elementos de cambio. La guía de [bolso del bebé](/parto/bolso-del-bebe/) explica cómo elegir ropa fácil de poner y organizar recambios sin llenar la valija. No hace falta llevar juguetes, almohadas ni accesorios decorativos para que el bebé esté cuidado.',
                    'Quien te acompañe puede hacerse cargo del teléfono, del traslado y de ubicar tus pertenencias. Conversá de antemano qué ayuda querés durante la atención y qué información puede compartir con familiares. Si preferís pocas llamadas, dejalo dicho: no tendrías que responder mensajes mientras tratás de descansar o entender una indicación.',
                    'Preguntá qué elementos aporta el lugar y qué objetos permite ingresar. Esa respuesta te ayuda a ajustar el equipaje sin asumir que una lista de otra familia sigue vigente. Para alimentos y bebidas durante el trabajo de parto o una cirugía prevista, seguí la indicación de tu equipo; no deduzcas un ayuno por lo que te contó otra persona.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Medicamentos, salida y prioridades',
                'body' => [
                    'Anotá los medicamentos que usás, tus alergias y cualquier reacción que hayas tenido a anestesia o tratamientos. Si llevás envases, mantenelos identificados y mostráselos al personal antes de tomar algo durante la internación. No agregues analgésicos, yuyos o suplementos para usarlos por tu cuenta. Una lista clara ayuda incluso si no recordás todos los nombres en ese momento.',
                    'Dejá previsto quién puede llevarte y una alternativa si esa persona no está disponible. La salida no depende de tener una valija perfecta. Sangrado, pérdida de líquido, menos movimientos del bebé o dolor intenso requieren atención sin esperar a terminar compras o lavar ropa. Revisá [las señales de alarma](/salud/senales-de-alarma/) y compartilas con quien vaya a acompañarte.',
                    'Antes de volver a casa, reuní las indicaciones que te entreguen y separalas de los papeles de ingreso. Pedí que te expliquen los cuidados, los controles y dónde consultar por un problema. Esa carpeta va a seguir siendo útil después del nacimiento, cuando el bolso ya esté desarmado.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Separá por uso',
                'body' => [
                    'Agrupá documentos, ropa, higiene y pertenencias del bebé en compartimentos reconocibles.'
                ]
            ],
            [
                'title' => 'Revisá con tu acompañante',
                'body' => [
                    'Mostrale dónde está lo esencial y dejá una nota con lo que usás hasta el último momento.'
                ]
            ],
            [
                'title' => 'Priorizá la atención',
                'body' => [
                    'Ante un síntoma de alarma, pedí ayuda y salí; otra persona puede acercar lo que falte.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye la guía Qué llevar al sanatorio. Podés abrirla como apoyo para preparar el bolso y conversar los pendientes con quien te acompañe.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Tengo que comprar un bolso maternal?',
                'a' => 'No. Podés usar un bolso que ya tengas, limpio y fácil de abrir. Separar los elementos por uso suele resultar más práctico que llevar muchos compartimentos vacíos.'
            ],
            [
                'q' => '¿Qué pasa si no encuentro el carné?',
                'a' => 'Llevá los antecedentes que tengas y explicá que falta el carné. Ante síntomas urgentes, buscá atención sin demorar la salida para encontrarlo.'
            ],
            [
                'q' => '¿La ropa para volver debe ser de antes del embarazo?',
                'a' => 'Elegí ropa amplia que te resulte cómoda ahora. La panza y la sensibilidad abdominal cambian gradualmente después del nacimiento.'
            ]
        ],
        'related' => [
            'bolso-del-bebe',
            'contracciones-y-cuando-ir',
            'cesarea-que-esperar'
        ],
        'weeks' => [
            32,
            35,
            36,
            37
        ],
        'appGuideSlug' => 'que-llevar-al-sanatorio',
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS para los cuidados durante el parto, para una experiencia de parto positiva',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención materna y del recién nacido',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Qué llevar al sanatorio',
                'publisher' => 'Mi Bebé',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'bolso-del-bebe' => [
        'cluster' => 'parto',
        'path' => '/parto/bolso-del-bebe/',
        'title' => 'Bolso del bebé: qué llevar para el nacimiento',
        'seoTitle' => 'Bolso del bebé: ropa, pañales y cambios',
        'metaDescription' => 'Armá el bolso del bebé con ropa fácil de poner, pañales y elementos de higiene. Una checklist para ordenar los cambios y preparar la vuelta a casa.',
        'kind' => 'medical',
        'lead' => 'Para el bolso del bebé, prepará ropa limpia y cómoda, pañales, elementos suaves para la higiene y una muda accesible para la salida. Organizá los conjuntos por cambio y adaptá el abrigo al ambiente. No necesitás perfumes, talco, almohadas ni juguetes para la internación. Separá estas cosas de tus documentos y de tu ropa para encontrarlas con facilidad.',
        'sections' => [
            [
                'h2' => 'Elegí prendas que faciliten el cambio',
                'body' => [
                    'Buscá ropa suave, con costuras cómodas y aberturas amplias. Al cambiar a un recién nacido, es más sencillo abrir una prenda por delante o por debajo que pasar algo ajustado por la cabeza. Revisá broches, elásticos e hilos sueltos antes de guardarla. La ropa prestada puede servir si está limpia, entera y en buenas condiciones.',
                    'Los talles varían entre marcas y no predicen exactamente cómo le va a quedar una prenda a tu bebé. En lugar de comprar muchos conjuntos iguales, dejá opciones con distinto espacio para el cuerpo y el pañal. Las mangas muy largas o los puños apretados dificultan ver las manos y comprobar que nada esté comprimiendo.',
                    'Lavá la ropa antes de usarla con un producto suave y enjuagala bien. Dejala secar por completo antes de embolsarla: guardar telas húmedas favorece malos olores y obliga a rehacer el bolso. No hace falta perfumar las prendas ni plancharlas como condición para poder usarlas. Priorizá limpieza, secado y comodidad.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Checklist para cada cambio',
                'body' => [
                    'Agrupá las prendas que se usan juntas. Podés poner una etiqueta sencilla, como ropa de recambio o salida, sin depender del color de la bolsa. Dejá los pañales aparte para poder alcanzarlos sin abrir un conjunto limpio. Si otra persona va a buscar algo, podrá reconocer el paquete sin preguntarte cada detalle.',
                    'La cantidad depende de la duración de la internación y de la posibilidad de reponer lo que se ensucie. Prepará recambios y acordá quién puede acercar más si hacen falta. Tener un plan de reposición evita cargar toda la ropa disponible desde el primer día.'
                ],
                'items' => [
                    [
                        'title' => 'Prendas de base',
                        'text' => 'Body o camiseta suave y un enterito o pantalón cómodo. Probá los broches antes de guardarlos y evitá cordones cerca del cuello.'
                    ],
                    [
                        'title' => 'Abrigo liviano',
                        'text' => 'Una prenda adicional que puedas quitar si el ambiente está caluroso. Una manta puede servir mientras un adulto sostiene al bebé despierto y supervisado, con la cara despejada.'
                    ],
                    [
                        'title' => 'Pañales',
                        'text' => 'Elegí un tamaño adecuado para recién nacido y dejá margen para ajustar según su cuerpo. Un pañal demasiado apretado puede rozar la piel; uno flojo puede perder.'
                    ],
                    [
                        'title' => 'Elementos de limpieza',
                        'text' => 'Prepará material suave para limpiar y secar sin frotar. Si usás toallitas, elegí una opción sin perfume y suspendela si irrita.'
                    ],
                    [
                        'title' => 'Bolsa para ropa usada',
                        'text' => 'Separá lo húmedo o manchado de las prendas limpias. Cerrá y guardá la bolsa lejos del alcance del bebé, sin apoyarla en su lugar de descanso.'
                    ]
                ],
                'table' => null
            ],
            [
                'h2' => 'Higiene y piel: menos productos, más cuidado',
                'body' => [
                    'La piel del recién nacido puede irritarse con perfumes y fricción. Para el cambio de pañal, limpiá suavemente los pliegues y secá sin raspar. En niñas, limpiá de adelante hacia atrás. No hace falta llevar una colección de cremas: si aparece una lesión o un enrojecimiento que preocupa, pedí que lo evalúen antes de probar varios productos.',
                    'Dejá fuera del bolso talcos y aerosoles. Las partículas o el producto pulverizado pueden inhalarse, y no son necesarios para que el bebé huela limpio. Tampoco pongas aceites esenciales ni remedios caseros sobre su piel. Si el equipo indica un producto específico, pedí que te muestren dónde y cómo usarlo.',
                    'El cordón necesita cuidados sencillos, con manos limpias y la zona limpia y seca. No lleves fajas, monedas ni sustancias caseras para cubrirlo. Preguntá por la indicación para tu bebé y avisá si aparece enrojecimiento que se extiende, pus, mal olor acompañado de cambios locales o mal estado general. La higiene del ombligo no se resuelve apretándolo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo adaptar el abrigo al calor',
                'body' => [
                    'El clima de afuera y la temperatura de la habitación pueden ser distintos. Es más fácil ajustar varias prendas livianas que una muy gruesa. Tocá el pecho o la espalda para orientarte sobre el calor corporal; las manos o los pies frescos, por sí solos, no significan que necesite muchas capas. Si está sudado o muy caliente, revisá el abrigo y el ambiente.',
                    'No cubras la cara para protegerlo del aire ni tapes por completo el cochecito con una manta. Eso puede dificultar la ventilación y aumentar el calor. Mantené visibles nariz y boca cuando lo sostengas o lo traslades. Si respira con dificultad, cambia de color o cuesta despertarlo, buscá atención urgente; no lo atribuyas solamente al clima.',
                    'Para dormir, prepará una superficie firme, plana y despejada, con el bebé boca arriba. Almohadas, nidos acolchados, peluches y mantas sueltas no van dentro del espacio de sueño. Por eso no forman parte de esta lista. La guía de [primeros días en casa](/parto/primeros-dias-en-casa/) amplía el descanso seguro y las señales que requieren consulta.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Alimentación y regreso: prepará ayuda, no accesorios de más',
                'body' => [
                    'Si querés amamantar, el apoyo para encontrar una posición cómoda y observar el agarre suele ser más útil que comprar muchos accesorios antes del nacimiento. Podés pedir ayuda desde las primeras tomas. Dolor persistente, dificultad para prenderse o un bebé que no logra alimentarse merecen valoración; no hace falta aguantar para demostrar que podés hacerlo sola.',
                    'Si la alimentación requiere leche de fórmula, conversá la preparación y la higiene con el equipo que atiende al bebé. No guardes mezclas caseras ni asumas que cualquier envase o proporción sirve. Los utensilios y el modo de alimentación deben responder a una necesidad concreta, no a la presión de completar una lista comercial.',
                    'Para volver en auto, prepará un sistema de retención adecuado para recién nacido, orientado hacia atrás e instalado según sus instrucciones. Llevarlo en brazos no reemplaza esa protección. Practicá el ajuste antes del nacimiento, sin abrigos voluminosos bajo el arnés. Conservá las indicaciones de alta en una carpeta distinta de la ropa usada.',
                    'Podés coordinar ambos bolsos con la lista de [qué llevar al sanatorio](/parto/que-llevar-al-sanatorio/). Si antes de salir aparecen [señales de alarma](/salud/senales-de-alarma/), la prioridad es recibir atención: las compras y los paquetes pueden quedar a cargo de otra persona.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Revisá y lavá',
                'body' => [
                    'Separá prendas sanas, lavalas y dejalas secar completamente antes de guardarlas.'
                ]
            ],
            [
                'title' => 'Armá paquetes de cambio',
                'body' => [
                    'Juntá prendas compatibles y dejá pañales e higiene en un compartimento accesible.'
                ]
            ],
            [
                'title' => 'Organizá reposición y traslado',
                'body' => [
                    'Definí quién puede acercar ropa limpia y prepará el modo seguro de volver a casa.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye una guía sobre qué llevar al sanatorio. Podés consultarla para reunir tus pertenencias y las del bebé sin mezclar los pendientes de cada bolso.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Necesito llevar zapatos?',
                'a' => 'Para un recién nacido, priorizá prendas cómodas y abrigo según el ambiente. Los zapatos no son necesarios para caminar en esta etapa.'
            ],
            [
                'q' => '¿Conviene perfumar la ropa?',
                'a' => 'No hace falta. Lavala, enjuagala bien y guardala seca; evitá perfumes que puedan irritar la piel.'
            ],
            [
                'q' => '¿Una manta reemplaza la ropa de abrigo para dormir?',
                'a' => 'Evitá mantas sueltas en el espacio de sueño. Elegí ropa adecuada al ambiente y mantené la superficie firme, plana y despejada.'
            ]
        ],
        'related' => [
            'que-llevar-al-sanatorio',
            'primeros-dias-en-casa'
        ],
        'weeks' => [
            32,
            35,
            36
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS para los cuidados durante el parto, para una experiencia de parto positiva',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención materna y del recién nacido',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'contracciones-y-cuando-ir' => [
        'cluster' => 'parto',
        'path' => '/parto/contracciones-y-cuando-ir/',
        'title' => 'Contracciones: cuándo ir al hospital sin esperar',
        'seoTitle' => 'Contracciones: cuándo ir al hospital',
        'metaDescription' => 'Conocé cómo observar las contracciones y cuándo buscar atención sin esperar. Pérdida de líquido, sangrado y menos movimientos requieren consulta.',
        'kind' => 'medical',
        'lead' => 'Consultá cuando las contracciones se vuelvan regulares, más intensas o difíciles de sobrellevar, siguiendo el plan de tu equipo. Buscá atención sin esperar un patrón si perdés líquido, sangrás, sentís menos movimientos del bebé o tenés dolor intenso continuo. Antes de las 37 semanas, las contracciones repetidas también requieren valoración inmediata. No necesitás completar un cronómetro para pedir ayuda.',
        'sections' => [
            [
                'h2' => 'Qué podés sentir durante una contracción',
                'body' => [
                    'Durante una contracción, el útero se endurece y luego se relaja. Podés sentir que la panza se pone firme, presión en la pelvis o dolor que llega a la espalda. Algunas se perciben como molestias parecidas a las menstruales; otras interrumpen lo que estabas haciendo. La intensidad que sentís importa, aunque otra persona haya descrito su parto de una manera diferente.',
                    'Las contracciones de preparación suelen ser irregulares y no aumentar de forma sostenida. En el trabajo de parto pueden volverse más largas, intensas y cercanas entre sí. Esa descripción orienta, pero no permite confirmar en casa qué está pasando con el cuello del útero. Tampoco una contracción poco dolorosa descarta un problema si aparece junto con otros síntomas.',
                    'Prestá atención a lo que cambia respecto de cómo venías sintiéndote. Podés explicar desde cuándo ocurre, si la panza afloja entre episodios y si hay dolor constante. Si algo te preocupa, llamá a tu equipo o acudí a valoración. No necesitás distinguir por tu cuenta una contracción de preparación de una de parto antes de consultar.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cuándo buscar atención sin medir intervalos',
                'body' => [
                    'Si sentís menos movimientos del bebé que de costumbre o un cambio claro en su patrón, buscá valoración de inmediato. No esperes a terminar un conteo, tomar algo frío o lograr que se mueva para decidir. El bebé debe seguir moviéndose al final del embarazo; tener menos espacio no justifica ignorar una disminución.',
                    'El sangrado vaginal, un dolor abdominal intenso que no cede entre episodios, la dificultad para respirar, una convulsión o un desmayo requieren atención urgente. También importan dolor de cabeza fuerte con visión alterada, fiebre o un malestar marcado. Si estás muy dolorida, mareada o débil, pedí ayuda para trasladarte y no conduzcas.',
                    'Antes de las 37 semanas, contracciones repetidas, presión pélvica nueva, dolor lumbar persistente o pérdida de líquido pueden ser señales de un parto que se adelanta. Consultá de inmediato aunque las molestias sean tolerables. Encontrás una guía más amplia en [las señales de alarma](/salud/senales-de-alarma/). No esperes a que todos los síntomas aparezcan juntos.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Si pensás que rompiste bolsa',
                'body' => [
                    'La pérdida de líquido puede ser un chorro o un goteo que sigue mojando la ropa. A veces cuesta distinguirla de orina o flujo. Si sospechás que es líquido de la bolsa, buscá valoración sin esperar a que comiencen contracciones. No hace falta estar segura de su origen para consultar y no podés descartarlo solo por el olor.',
                    'Si podés hacerlo sin demorar la salida, anotá cuándo empezó y observá el color. Podés usar una toalla higiénica externa limpia para mostrar cómo es la pérdida; no introduzcas tampones ni hagas un tacto por tu cuenta. Evitá relaciones sexuales hasta recibir orientación. Informá si además hay fiebre, sangrado, dolor o menos movimientos.',
                    'Un líquido verdoso, amarronado o con mal olor merece comunicación inmediata al personal, pero que sea claro no significa que puedas postergar la consulta. Mientras organizás el traslado, dejá el teléfono disponible para recibir indicaciones. No te quedes en casa para comprobar si se moja una cantidad determinada de ropa.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Cómo registrar lo que pasa sin convertirlo en una regla',
                'body' => [
                    'Si no hay señales de alarma y estás registrando mientras contactás al equipo, marcá el comienzo y el final de cada contracción. La duración va desde que empieza hasta que termina; el intervalo se cuenta desde el comienzo de una hasta el comienzo de la siguiente. Son medidas distintas, y confundirlas dificulta explicar el patrón.',
                    'Además de los tiempos, contá cómo te encontrás: si podés hablar, caminar o descansar entre episodios, si el dolor aumenta y si sentís presión hacia abajo. Una anotación incompleta sigue siendo útil. No te obligues a mirar una pantalla durante cada contracción ni pidas que alguien te haga esperar para completar una serie.',
                    'No hay una frecuencia universal que sirva para todas. Influyen los antecedentes, la distancia hasta el lugar de atención, las indicaciones del embarazo y si ya tuviste un parto rápido. Si te dieron un plan individual, tenelo accesible. Si no lo tenés o no entendés cuándo salir, pedí orientación ahora, antes de depender de una cifra compartida por otra familia.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Dato',
                        'Cómo describirlo'
                    ],
                    'rows' => [
                        [
                            'Inicio',
                            'Desde cuándo notás las contracciones'
                        ],
                        [
                            'Duración',
                            'Cuánto dura cada episodio, si pudiste observarlo'
                        ],
                        [
                            'Intervalo',
                            'Tiempo entre el inicio de una y la siguiente'
                        ],
                        [
                            'Otros cambios',
                            'Líquido, sangrado, movimientos, presión y dolor continuo'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Mientras pedís ayuda y organizás la salida',
                'body' => [
                    'Buscá una posición que te resulte cómoda y soltá el aire sin forzar la respiración. Podés apoyarte en alguien o cambiar de postura si eso te alivia. Estas medidas acompañan el momento; no sirven para comprobar que sea seguro quedarse en casa. No tomes medicamentos ni preparados para frenar o acelerar las contracciones por tu cuenta.',
                    'Dejá que otra persona reúna los documentos y lo básico del bolso. Si estás sola, avisá a alguien de confianza y explicá dónde estás y qué necesitás. Si aparece una sensación fuerte de pujo o parece que el nacimiento es inminente, pedí asistencia urgente y seguí las indicaciones del servicio de emergencia. No intentes conducir hasta el hospital.',
                    'Al llegar, describí primero el síntoma que motivó la consulta y tu tiempo de embarazo. Después podés mostrar tus anotaciones y antecedentes. Para preparar lo práctico con anticipación, usá [qué llevar al sanatorio](/parto/que-llevar-al-sanatorio/); el [hub de parto](/parto/) reúne las otras lecturas para organizar el nacimiento sin convertir la preparación en una demora.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Reconocé la prioridad',
                'body' => [
                    'Ante sangrado, líquido, menos movimientos o dolor intenso continuo, buscá atención inmediata sin esperar un patrón.'
                ]
            ],
            [
                'title' => 'Comunicá síntomas y antecedentes',
                'body' => [
                    'Decí tu tiempo de embarazo, desde cuándo ocurre y qué cambios acompañan las contracciones.'
                ]
            ],
            [
                'title' => 'Trasladate con ayuda',
                'body' => [
                    'Llevá lo que esté a mano y pedí acompañamiento; el bolso completo y el cronómetro pueden esperar.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé tiene una herramienta de contracciones. Podés usarla como apoyo para registrar lo que observás y comunicarlo al equipo; no confirma el trabajo de parto ni decide cuándo es seguro esperar. Ante alarmas, buscá atención sin abrir la herramienta.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Tengo que esperar una frecuencia exacta para ir?',
                'a' => 'No. Las señales de alarma requieren atención sin esperar intervalos. Para contracciones sin alarmas, seguí tu plan individual y consultá si aumentan, se regularizan o te preocupan.'
            ],
            [
                'q' => '¿Si se me pasa el dolor ya no necesito consultar?',
                'a' => 'Que disminuya el dolor no descarta un problema si hubo pérdida de líquido, sangrado o menos movimientos. Esos cambios requieren valoración.'
            ],
            [
                'q' => '¿Puedo estar de parto sin romper bolsa?',
                'a' => 'Sí. La bolsa puede permanecer íntegra durante parte del trabajo de parto. No esperes a perder líquido para pedir orientación por contracciones que progresan.'
            ],
            [
                'q' => '¿La app puede decirme si estoy dilatando?',
                'a' => 'No. Un registro de contracciones no mide la dilatación ni reemplaza una valoración presencial.'
            ]
        ],
        'related' => [
            'que-llevar-al-sanatorio',
            'parto-en-ips-paso-a-paso',
            'cesarea-que-esperar'
        ],
        'weeks' => [
            28,
            34,
            36,
            37,
            38,
            39,
            40
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS para los cuidados durante el parto, para una experiencia de parto positiva',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención materna y del recién nacido',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'parto-en-ips-paso-a-paso' => [
        'cluster' => 'parto',
        'path' => '/parto/parto-en-ips-paso-a-paso/',
        'title' => 'Parto en IPS: cómo preparar la llegada y la atención',
        'seoTitle' => 'Parto en IPS: preparación paso a paso',
        'metaDescription' => 'Prepará tu llegada para el parto en IPS: documentos habituales, valoración, acompañamiento y alta. Confirmá la admisión exacta con el establecimiento.',
        'kind' => 'medical',
        'lead' => 'Para preparar un parto en IPS, reuní tus antecedentes prenatales y consultá dónde acudir cuando empiecen los síntomas. La llegada suele incluir recepción, valoración del equipo y definición de los cuidados necesarios. El recorrido general se parece al de una maternidad de hospital público, pero la admisión exacta se confirma con el establecimiento. Ante una alarma, buscá atención sin esperar a completar papeles.',
        'sections' => [
            [
                'h2' => 'Antes del nacimiento: ubicá el lugar de atención',
                'body' => [
                    'En un control prenatal, preguntá dónde acudir por contracciones, pérdida de líquido o un problema urgente. Tener esa indicación por escrito puede facilitar la salida si el profesional que te sigue no está disponible. Explicá desde dónde te trasladás y si dependés de otra persona para llegar, para que el plan considere tu situación real.',
                    'Habitualmente, el equipo que lleva el embarazo orienta sobre la atención prevista y los antecedentes que conviene acercar. La recepción o admisión suele informar sobre documentación y circulación dentro del establecimiento. Son consultas distintas: una respuesta sobre papeles no reemplaza una indicación clínica sobre síntomas o traslado.',
                    'Confirmá con el establecimiento los requisitos, costos y plazos vigentes.',
                    'Si vas a cambiar de lugar de atención, llevá los informes disponibles para que el nuevo equipo conozca tu historia. No des por hecho que puede consultar automáticamente todos los registros de otro servicio. La guía de [control prenatal en IPS y privado](/tramites/control-prenatal-ips-vs-privado/) ayuda a organizar esa continuidad.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Qué documentos suelen pedir y por qué',
                'body' => [
                    'La identificación y el carné perinatal suelen formar parte de la documentación que se revisa al llegar. También pueden resultar útiles los estudios, indicaciones y referencias que recibiste durante el embarazo. Prepará una carpeta legible, ordenada por fecha y fácil de abrir. Si un resultado está en el teléfono, tenelo localizable sin tener que buscarlo entre muchas conversaciones.',
                    'Habitualmente se consulta además por los antecedentes de cobertura cuando corresponde. Si tenés una duda sobre tu situación en IPS, planteala durante la preparación y separala de la evaluación del parto. No supongas que un trámite de subsidio confirma por sí solo todas las condiciones de atención. Ante urgencia, explicá el síntoma y cualquier documento faltante sin demorar la búsqueda de ayuda.',
                    'Una persona de confianza puede ayudarte a ubicar papeles mientras vos hablás con el equipo. Evitá entregar originales sin saber para qué los necesitan y preguntá cómo recuperarlos si quedan temporalmente en el servicio. Guardá aparte las indicaciones nuevas para no confundirlas con órdenes anteriores.'
                ],
                'items' => [],
                'table' => [
                    'head' => [
                        'Antecedente habitual',
                        'Utilidad al llegar',
                        'Preparación práctica'
                    ],
                    'rows' => [
                        [
                            'Cédula',
                            'Relacionar la atención con tu identidad',
                            'Dejala accesible'
                        ],
                        [
                            'Carné perinatal',
                            'Conocer el seguimiento del embarazo',
                            'Llevá las anotaciones disponibles'
                        ],
                        [
                            'Estudios y referencias',
                            'Completar antecedentes clínicos',
                            'Ordenalos por fecha'
                        ],
                        [
                            'Información de cobertura disponible',
                            'Aclarar consultas de admisión',
                            'Identificá qué dato falta confirmar'
                        ]
                    ]
                ]
            ],
            [
                'h2' => 'Llegada y valoración: contá primero lo que te pasa',
                'body' => [
                    'Al llegar a una maternidad, habitualmente te preguntan el motivo de consulta y el tiempo de embarazo. Decí de entrada si sangrás, perdés líquido, sentís menos movimientos o tenés un dolor intenso. No esperes a terminar una explicación administrativa para mencionar algo urgente. Si los síntomas cambian mientras estás esperando, avisá de nuevo al personal.',
                    'El equipo suele valorar cómo estás vos y cómo está el bebé. Según la situación, puede revisar signos vitales, escuchar los latidos del bebé y conversar sobre las contracciones y otros síntomas. Un examen vaginal puede aportar información cuando está indicado; pedí que te expliquen su finalidad, cómo se realizará y cualquier duda antes del procedimiento.',
                    'La evaluación orienta si necesitás ingreso, observación, otra intervención o un plan de seguimiento. No se puede anticipar esa decisión por el solo hecho de tener contracciones. Si te indican volver a casa después de valorarte, pedí instrucciones claras de retorno y consultá nuevamente ante cambios o alarmas, aunque la revisión anterior haya sido tranquilizadora.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Durante la atención: acompañamiento y decisiones',
                'body' => [
                    'Una vez definido el ingreso, habitualmente se organiza el espacio de atención y se revisan tus antecedentes con el equipo que continúa los cuidados. Contá alergias, medicamentos y experiencias previas que puedan ser relevantes. Si te preocupa un examen, el dolor o una situación que viviste antes, decirlo puede ayudar a adaptar la comunicación y el apoyo.',
                    'Preguntá cómo se organiza el acompañamiento y quién puede orientarte si la persona que vino con vos debe esperar en otro lugar. No presupongas que las condiciones son iguales en todas las salas. Elegí qué información querés compartir con familiares y quién puede transmitirla; eso reduce interrupciones mientras estás concentrada en el trabajo de parto.',
                    'Podés pedir que te expliquen los motivos de una propuesta, sus alternativas y qué podría pasar si la situación cambia. Si se plantea una cesárea, la guía de [qué esperar de una cesárea](/parto/cesarea-que-esperar/) te ayuda a reconocer las etapas generales. Las decisiones se adaptan a la evaluación, no a un recorrido obligatorio igual para todas.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Después del nacimiento y antes del alta',
                'body' => [
                    'Tras el nacimiento, el equipo observa la recuperación de la madre y la adaptación del bebé. Podés pedir ayuda para sostenerlo, alimentarlo y reconocer cuándo necesita valoración. Si estás dolorida, mareada o muy cansada, avisá antes de levantarte o caminar con él en brazos. Tener un acompañante no reemplaza la ayuda clínica cuando algo te preocupa.',
                    'Habitualmente el alta incluye indicaciones de cuidado y seguimiento para ambos. Pedí que distingan qué recomendación corresponde a vos y cuál al bebé, y dónde consultar si aparece un problema. Revisá que entendiste el uso de cualquier medicamento indicado sin modificarlo por tu cuenta. El alta de uno no significa automáticamente que el otro esté listo para salir.',
                    'Los papeles sobre el nacimiento y las gestiones posteriores suelen orientarse con el personal del establecimiento. Identificá qué documento te entregan y qué queda pendiente, sin confundirlo con una inscripción ya completada. Para organizar esas consultas podés leer [después del nacimiento](/tramites/despues-del-nacimiento/). Si aparecen [señales de alarma](/salud/senales-de-alarma/), priorizá la atención sobre cualquier trámite o retiro de documentos.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Prepará antecedentes y destino',
                'body' => [
                    'Consultá dónde acudir y reuní los documentos que ya tenés, sin asumir una lista única para todos los establecimientos.'
                ]
            ],
            [
                'title' => 'Explicá el motivo de llegada',
                'body' => [
                    'Habitualmente la recepción orienta el ingreso; comunicá de inmediato cualquier síntoma urgente al personal.'
                ]
            ],
            [
                'title' => 'Conversá el plan de cuidados',
                'body' => [
                    'Después de la valoración, pedí que te expliquen la decisión y las indicaciones que siguen.'
                ]
            ],
            [
                'title' => 'Revisá el alta de ambos',
                'body' => [
                    'Antes de salir, identificá cuidados, controles, señales de consulta y documentación pendiente de la madre y del bebé.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé reúne la guía Qué llevar al sanatorio y el resumen prenatal. Podés usarlos para preparar tus preguntas; la admisión y el plan de atención se coordinan con el establecimiento.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Es el mismo proceso en IPS y en cualquier hospital público?',
                'a' => 'La secuencia general de llegada, valoración y cuidados puede ser similar. Los circuitos de admisión y las condiciones de cada servicio se consultan con el establecimiento.'
            ],
            [
                'q' => '¿Tengo que terminar un trámite si estoy sangrando?',
                'a' => 'Buscá atención inmediata y explicá el sangrado al llegar. Los papeles pendientes no deben retrasar tu decisión de pedir ayuda.'
            ],
            [
                'q' => '¿Pueden indicarme volver a casa?',
                'a' => 'La decisión depende de la evaluación. Si te dan esa indicación, pedí un plan claro de retorno y volvé a consultar ante síntomas nuevos o señales de alarma.'
            ],
            [
                'q' => '¿El alta incluye todos los trámites del bebé?',
                'a' => 'Pedí que identifiquen cada documento entregado y cada gestión pendiente. Una indicación de alta médica no equivale a completar la inscripción del nacimiento.'
            ]
        ],
        'related' => [
            'que-llevar-al-sanatorio',
            'contracciones-y-cuando-ir',
            'cesarea-que-esperar'
        ],
        'weeks' => [
            32,
            36,
            38,
            39
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS para los cuidados durante el parto, para una experiencia de parto positiva',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención materna y del recién nacido',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientación sobre atención de maternidad y admisión',
                'publisher' => 'Instituto de Previsión Social (IPS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'cesarea-que-esperar' => [
        'cluster' => 'parto',
        'path' => '/parto/cesarea-que-esperar/',
        'title' => 'Cesárea: qué esperar antes, durante y después',
        'seoTitle' => 'Cesárea: qué esperar y cómo recuperarte',
        'metaDescription' => 'Conocé las etapas de una cesárea, las preguntas sobre anestesia y los cuidados al volver a casa. Señales para consultar y apoyo durante la recuperación.',
        'kind' => 'medical',
        'lead' => 'Una cesárea es una cirugía para que el bebé nazca a través de incisiones en el abdomen y el útero. Puede estar planificada o decidirse durante la atención. Incluye preparación, anestesia, nacimiento y vigilancia de la recuperación. Después vas a necesitar ayuda para moverte y cuidar al bebé; el dolor que aumenta, el sangrado abundante o la dificultad para respirar requieren atención.',
        'sections' => [
            [
                'h2' => 'Por qué se propone una cesárea',
                'body' => [
                    'El equipo puede recomendar una cesárea cuando considera que es la vía de nacimiento más adecuada para la situación de la madre o del bebé. Entre los motivos posibles están ciertos problemas de la placenta, algunas posiciones del bebé o cambios durante el trabajo de parto. El nombre de un antecedente por sí solo no permite decidir la vía: importa cómo se presenta en tu embarazo.',
                    'Si está planificada, aprovechá la consulta para preguntar qué motivo la indica y cómo se evaluaron las alternativas. Si se decide durante el parto, pedí una explicación breve de lo que cambió y de los pasos inmediatos. La urgencia puede reducir el tiempo para conversar, pero después también podés solicitar que te ayuden a entender lo ocurrido.',
                    'Haber tenido una cesárea antes no responde automáticamente todas las preguntas sobre un próximo nacimiento. El tipo de cirugía previa, tus antecedentes y las condiciones de atención forman parte de una evaluación individual. Llevá los informes que conserves y evitá sacar conclusiones solamente por la apariencia de la cicatriz de la piel.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'La preparación antes de entrar',
                'body' => [
                    'Contá qué medicamentos tomás, si tenés alergias y si alguna vez hubo dificultades con una anestesia. Incluí suplementos y preparados de yuyos en esa conversación. No suspendas ni agregues tratamientos por tu cuenta. El equipo necesita saber también si comiste o bebiste recientemente para adaptar el cuidado; informarlo no es motivo para ocultar síntomas o demorar una consulta urgente.',
                    'Para una cirugía programada, pedí instrucciones individuales sobre comida, bebida y medicación. No copies un tiempo de ayuno de otra persona ni prolongues restricciones sin indicación. La preparación puede incluir una vía venosa, controles y otras medidas que el personal te explicará. Si hay algo que no entendés, preguntá para qué sirve antes de hacerlo.',
                    'Organizá una muda amplia y ayuda para el regreso. No hace falta depilarte o rasurarte la zona por iniciativa propia: podés lastimar la piel. Si se necesita alguna preparación local, seguí lo que indique el servicio. En [qué llevar al sanatorio](/parto/que-llevar-al-sanatorio/) tenés una lista de pertenencias y documentos para resolver esa parte con anticipación.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Anestesia y sensaciones durante el nacimiento',
                'body' => [
                    'Con frecuencia se utiliza anestesia regional, que adormece la parte inferior del cuerpo y permite permanecer despierta. En algunas situaciones se necesita anestesia general. La elección depende de la evaluación y del contexto. Conversá tus experiencias previas, temores y cualquier problema de espalda o salud que te hayan diagnosticado, sin suponer que necesariamente impide una opción.',
                    'Con anestesia regional podés notar presión, movimiento o tironeo, pero no deberías tener que soportar dolor cortante. Si sentís dolor, náuseas, falta de aire o mucho malestar, avisá inmediatamente al personal de anestesia. No te quedes callada por miedo a interrumpir. Tu descripción de lo que sentís es parte de la información que necesitan para cuidarte.',
                    'El bebé recibe una valoración al nacer. El contacto piel con piel y el inicio de la alimentación se organizan según cómo estén ambos y las condiciones de atención. Podés expresar que querés ese contacto y preguntar cómo facilitarlo con apoyo. Si deben separarse por cuidados, pedí que te expliquen el motivo y cómo vas a recibir información.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Primeras horas: pedir ayuda para moverte',
                'body' => [
                    'Después de la cirugía se vigilan, entre otras cosas, tu estado general, el sangrado y la recuperación de la anestesia. Avisá si el dolor no está controlado, si te mareás o si sentís escalofríos intensos o dificultad para respirar. El objetivo de aliviar el dolor es que puedas descansar, respirar y moverte con mayor comodidad; no tenés que aguantar en silencio.',
                    'Cuando te indiquen levantarte, hacelo con ayuda al principio. Podés girar de costado, apoyar los brazos y sentarte de manera gradual, siguiendo la orientación del personal. No camines sola si todavía tenés las piernas adormecidas o te sentís inestable. El movimiento suave, cuando está autorizado, forma parte de la recuperación y se adapta a cómo estás.',
                    'Para sostener al bebé o amamantar, buscá una posición que evite presión directa sobre la herida. Un apoyo para tus brazos puede aliviar esfuerzo, siempre manteniendo libre la cara del bebé y supervisándolo. Pedí que alguien te lo acerque y lo retire si levantarte o girar te duele. Antes de dormir, pasalo a su espacio seguro de descanso.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'La herida y las actividades en casa',
                'body' => [
                    'Antes del alta, pedí que te muestren cómo cuidar la herida y qué hacer con el apósito, si lo tenés. Lavate las manos antes de tocar la zona y mantenela limpia y seca según las indicaciones recibidas. No apliques alcohol, hierbas, polvos ni cremas para acelerar el cierre por tu cuenta. Si hay puntos o grapas que requieren una revisión, dejá identificado el plan.',
                    'La recuperación suele extenderse durante varias semanas y no avanza igual cada día. Organizá ayuda para cargar compras, limpiar y otras tareas que demandan esfuerzo abdominal. Alterná descanso con movimiento suave autorizado y aumentá la actividad gradualmente. Para conducir, hacer ejercicio intenso o retomar relaciones sexuales, conversá tu evolución y las restricciones específicas con el equipo.',
                    'Puede haber sensibilidad o sensación extraña cerca de la cicatriz, pero dolor que aumenta, enrojecimiento que se extiende, secreción o apertura de la herida requieren valoración. La fiebre o el mal estado general también son motivos para consultar. No uses una faja para tapar una molestia creciente ni consideres que una cicatriz pequeña significa una recuperación interna completa.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Alarmas y emociones después de una cirugía',
                'body' => [
                    'Buscá atención urgente por sangrado abundante, desmayo, dolor en el pecho, dificultad para respirar o dolor e hinchazón de una sola pierna. Dolor de cabeza intenso con cambios en la visión también necesita valoración después del nacimiento. Las [señales de alarma](/salud/senales-de-alarma/) siguen siendo importantes en el posparto, aunque ya estés en casa y el bebé esté bien.',
                    'Podés sentir alivio, tristeza, enojo o una mezcla de emociones por cómo fue el nacimiento. Si querés reconstruir lo sucedido, pedí una conversación con el equipo cuando te sientas preparada. No hay una forma obligatoria de vivir una cesárea. Si la angustia te impide descansar o cuidarte, buscá apoyo profesional; ante ideas de hacerte daño o dañar al bebé, pedí ayuda urgente y quedate acompañada.',
                    'La guía de [primeros días en casa](/parto/primeros-dias-en-casa/) completa los cuidados de alimentación, descanso y apoyo cotidiano. Repartir tareas concretas permite que tu recuperación también tenga lugar, en vez de quedar al final de todas las necesidades del hogar.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Conversá la indicación',
                'body' => [
                    'Preguntá por el motivo de la cirugía, las alternativas y las instrucciones personales de preparación.'
                ]
            ],
            [
                'title' => 'Comunicá lo que sentís',
                'body' => [
                    'Durante y después del procedimiento, avisá sobre dolor o malestar para que puedan evaluarte.'
                ]
            ],
            [
                'title' => 'Prepará el cuidado en casa',
                'body' => [
                    'Acordá ayuda para tareas físicas y revisá indicaciones de herida, actividad, controles y alarmas antes del alta.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye herramientas de diario y resumen prenatal. Podés usarlas como apoyo para ordenar preguntas y antecedentes que quieras conversar con el equipo; las indicaciones de recuperación las recibís de quienes te atienden.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Voy a estar despierta durante la cesárea?',
                'a' => 'Con anestesia regional habitualmente permanecés despierta. En algunas situaciones se usa anestesia general; conversá qué está previsto para tu caso.'
            ],
            [
                'q' => '¿Es normal sentir dolor durante la cirugía?',
                'a' => 'Podés notar presión o tironeo, pero avisá inmediatamente si sentís dolor. No tenés que soportarlo sin decirlo.'
            ],
            [
                'q' => '¿Puedo amamantar después de una cesárea?',
                'a' => 'Sí, puede ser posible. Pedí ayuda con la posición y el agarre según cómo estén vos y el bebé; la cirugía no obliga por sí sola a renunciar a la lactancia.'
            ],
            [
                'q' => '¿Cuándo vuelvo a hacer todas mis actividades?',
                'a' => 'La recuperación lleva varias semanas y varía. Revisá con tu equipo cómo retomar esfuerzos, ejercicio, conducción y relaciones según tu evolución.'
            ]
        ],
        'related' => [
            'que-llevar-al-sanatorio',
            'parto-en-ips-paso-a-paso',
            'primeros-dias-en-casa'
        ],
        'weeks' => [
            32,
            36,
            38,
            39
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS para los cuidados durante el parto, para una experiencia de parto positiva',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención materna y del recién nacido',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
    'primeros-dias-en-casa' => [
        'cluster' => 'parto',
        'path' => '/parto/primeros-dias-en-casa/',
        'title' => 'Primeros días en casa con el bebé: cuidados y apoyo',
        'seoTitle' => 'Primeros días en casa con el bebé',
        'metaDescription' => 'Organizá los primeros días con tu bebé: alimentación, sueño seguro, higiene y recuperación posparto. Cuándo consultar y cómo repartir la ayuda en casa.',
        'kind' => 'medical',
        'lead' => 'Los primeros días en casa se organizan alrededor de alimentar al bebé, ofrecerle un lugar seguro para dormir y cuidar tu recuperación. Repartí las tareas domésticas y seguí los controles indicados para ambos. Buscá atención inmediata si el bebé respira con dificultad, está muy decaído o no logra alimentarse, o si vos tenés sangrado abundante, dolor intenso o falta de aire.',
        'sections' => [
            [
                'h2' => 'Prepará una rutina pequeña y posible',
                'body' => [
                    'Dejá a mano agua, comida sencilla, ropa de recambio y los elementos para cambiar al bebé. Un lugar cómodo para sentarte y una superficie segura para acostarlo valen más que tener toda la casa ordenada. Podés agrupar lo necesario cerca de donde pasás más tiempo, sin dejar bolsas, cables o recipientes al alcance del bebé.',
                    'Pedí ayuda con tareas concretas: cocinar, lavar ropa, hacer una compra o acompañarte a un control. Una visita puede colaborar sin cargar al bebé todo el tiempo ni darte nuevas obligaciones de anfitriona. Si preferís recibir pocas personas, comunicalo. El descanso se protege también reduciendo mensajes, ruido y decisiones que otra persona puede resolver.',
                    'Conservá juntas las indicaciones de alta de ambos y anotá las consultas pendientes. Si una instrucción no quedó clara, pedí que la expliquen antes de improvisar. Los controles siguen siendo necesarios aunque parezca que todo va bien: permiten revisar la recuperación, la alimentación y el crecimiento, además de resolver dudas que aparecen al estar en casa.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Alimentación: observá al bebé y pedí apoyo',
                'body' => [
                    'El recién nacido suele necesitar alimentarse con frecuencia, también durante la noche. Buscá señales tempranas como mover la boca, llevar las manos hacia ella o buscar el pecho; el llanto puede ser una señal tardía de hambre. Si amamantás, acercalo con el cuerpo alineado y pedí ayuda si el agarre duele de manera persistente o la toma resulta difícil.',
                    'Observá si se prende, succiona y traga, y cómo queda después. La cantidad de orina y deposiciones, junto con la evolución del peso y la valoración clínica, ayuda a saber si recibe suficiente alimento. Pedí en el control una orientación para su edad y situación, especialmente si nació antes de término, tuvo bajo peso o necesita ser despertado para comer.',
                    'Si usás fórmula, seguí la preparación indicada y las instrucciones del producto, con higiene de manos y utensilios. No cambies la proporción de agua y polvo ni agregues cereales o preparados caseros. Un bebé que no consigue alimentarse, está demasiado dormido para hacerlo o moja claramente menos pañales necesita valoración pronta; si está muy decaído, buscá atención inmediata.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Sueño seguro, incluso cuando todos están cansados',
                'body' => [
                    'Acostá al bebé boca arriba para cada sueño, en una superficie firme, plana y despejada. Dejá fuera almohadas, peluches, protectores acolchados y mantas sueltas. Compartir la habitación permite tenerlo cerca sin compartir la superficie de sueño. No uses una posición de costado como sustituto habitual de acostarlo boca arriba.',
                    'El cansancio aumenta el riesgo de quedarse dormida mientras lo sostenés. Si sentís que te vencés, pasalo a su espacio seguro o pedí que otra persona despierta te ayude. Evitá dormir con él en un sillón o sofá. Cuando lo alimentes de noche, pensá antes dónde lo vas a acostar al terminar para no improvisar agotada.',
                    'Un bebé puede despertarse muchas veces y todavía no distinguir el día de la noche. La rutina al comienzo es flexible: luz y actividad tranquila de día, ambiente más calmo de noche y respuesta a sus necesidades. No uses medicamentos, infusiones ni productos para hacerlo dormir. Para el abrigo, elegí ropa adecuada al ambiente y evitá sobrecalentarlo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Pañal, cordón y cuidado cotidiano',
                'body' => [
                    'Lavate las manos antes de atender el cordón y después de cambiar pañales. Limpiá la zona del pañal con suavidad y secá los pliegues sin frotar. Cambiá lo mojado o sucio para reducir el contacto prolongado con la piel. Si una irritación empeora, tiene heridas o se acompaña de fiebre o mal estado, pedí valoración.',
                    'Mantené el cordón limpio y seco según la orientación recibida. No tires de él ni lo cubras con monedas, vendas ajustadas o preparados caseros. Si se ensucia, consultá la forma de limpiarlo que te indicaron al alta. Enrojecimiento que se extiende, pus, mal olor con cambios en la piel o decaimiento requieren consulta.',
                    'Al bañarlo o cambiarlo, prepará todo antes y mantené una mano sobre él si está en una superficie elevada. Nunca lo dejes solo en el agua, ni un momento. Pedí a las visitas que se laven las manos y que posterguen el contacto si están enfermas. Evitá humo de tabaco y aerosoles cerca del bebé.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Tu recuperación también necesita cuidados',
                'body' => [
                    'El sangrado posparto suele cambiar gradualmente, pero un aumento importante, sangre que empapa rápidamente la protección, mareo o desmayo requieren atención urgente. No atribuyas todo malestar a dormir poco. Fiebre, dolor que empeora, secreción de una herida, dolor al orinar o una mama roja y dolorosa con mal estado también necesitan evaluación.',
                    'Usá los medicamentos tal como fueron indicados y consultá antes de agregar otros, incluidos yuyos y suplementos. Si tenés puntos o una herida, seguí el cuidado explicado por tu equipo. Después de una [cesárea](/parto/cesarea-que-esperar/), organizá ayuda para esfuerzos y movimientos que todavía duelen. Después de un parto vaginal también puede hacer falta apoyo para sentarte, caminar o cuidar una lesión.',
                    'La tristeza, la sensibilidad y la ansiedad pueden aparecer, pero no tenés que sostenerlas sola. Si persisten, aumentan o interfieren con comer, descansar o cuidar de vos y del bebé, pedí ayuda profesional. Ideas de hacerte daño o dañar al bebé, confusión marcada o escuchar o ver cosas que otros no perciben requieren atención urgente y acompañamiento continuo.'
                ],
                'items' => [],
                'table' => null
            ],
            [
                'h2' => 'Señales por las que no conviene esperar al control',
                'body' => [
                    'En un recién nacido, la fiebre o una temperatura anormalmente baja requieren valoración urgente. También la respiración trabajosa, color azulado, convulsiones, dificultad para despertarlo o rechazo del alimento. Si vomita verde o tiene un deterioro claro, buscá atención inmediata. No esperes a juntar varios síntomas ni a que llegue la fecha del control programado.',
                    'Si la piel o los ojos se ponen amarillos, consultá para valorar la ictericia, especialmente si aumenta, aparece muy temprano o el bebé come mal o está somnoliento. Ponerlo al sol no reemplaza la evaluación ni un tratamiento indicado. Explicá cuándo empezó, cómo se alimenta y qué cambios notaste en pañales o comportamiento.',
                    'Para vos, dolor en el pecho, falta de aire, dolor e hinchazón de una pierna o dolor de cabeza intenso con visión alterada son urgencias. La guía de [señales de alarma](/salud/senales-de-alarma/) reúne motivos de consulta. Los [trámites después del nacimiento](/tramites/despues-del-nacimiento/) se pueden organizar con ayuda; nunca deberían ocupar el lugar de una atención necesaria.'
                ],
                'items' => [],
                'table' => null
            ]
        ],
        'steps' => [
            [
                'title' => 'Ubicá cuidados y contactos',
                'body' => [
                    'Dejá accesibles las indicaciones y el destino de consulta que te informó el equipo.'
                ]
            ],
            [
                'title' => 'Repartí tareas concretas',
                'body' => [
                    'Asigná comida, lavado, compras y acompañamiento para que también puedas descansar y recuperarte.'
                ]
            ],
            [
                'title' => 'Revisá cómo están ambos',
                'body' => [
                    'Observá alimentación y estado del bebé, tu recuperación y cualquier cambio preocupante; ante alarmas, buscá atención sin esperar al control.'
                ]
            ]
        ],
        'appHandoff' => [
            'text' => 'Mi Bebé incluye la guía de trámites después del nacimiento y herramientas de diario. Podés apoyarte en ellas para ordenar preguntas y pendientes, manteniendo a mano las indicaciones de alta de vos y del bebé.',
            'medium' => 'article',
            'extra' => []
        ],
        'faq' => [
            [
                'q' => '¿Tengo que imponer horarios de sueño desde el primer día?',
                'a' => 'Al comienzo los despertares son frecuentes y la organización es flexible. Priorizá alimentación, respuesta a sus necesidades y un espacio de sueño seguro.'
            ],
            [
                'q' => '¿Qué ayuda puedo pedir a las visitas?',
                'a' => 'Comida lista, lavado de ropa, compras o acompañamiento a un control son ayudas concretas. También podés pedir menos visitas para descansar.'
            ],
            [
                'q' => '¿Puedo tratar la piel amarilla con sol?',
                'a' => 'No reemplaces la consulta por exposición al sol. La ictericia necesita valoración según la edad, la alimentación y el estado del bebé.'
            ],
            [
                'q' => '¿Las señales de alarma terminan con el parto?',
                'a' => 'No. Algunas complicaciones aparecen después del nacimiento. Sangrado abundante, falta de aire, dolor intenso o cambios neurológicos requieren atención urgente.'
            ]
        ],
        'related' => [
            'cesarea-que-esperar',
            'bolso-del-bebe',
            'que-llevar-al-sanatorio'
        ],
        'weeks' => [
            37,
            38,
            39,
            40
        ],
        'appGuideSlug' => null,
        'guarani' => [],
        'reviewedBy' => null,
        'reviewedAt' => null,
        'validAsOf' => null,
        'sources' => [
            [
                'title' => 'Recomendaciones de la OMS para los cuidados durante el parto, para una experiencia de parto positiva',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Orientaciones sobre atención materna y del recién nacido',
                'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)',
                'url' => null,
                'accessed' => null
            ],
            [
                'title' => 'Recomendaciones de la OMS sobre cuidados maternos y neonatales para una experiencia posnatal positiva',
                'publisher' => 'Organización Mundial de la Salud (OMS)',
                'url' => null,
                'accessed' => null
            ]
        ],
        'updated' => '2026-09-20',
        'image' => null
    ],
];
