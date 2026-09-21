<?php
/**
 * Article index. The body of each article lives in its own
 * /blog/<slug>/index.php, rendered through templates/article.php; this file is
 * the index that the blog listing, the sitemap and the route contract read.
 *
 *   slug         string   directory name under /blog/
 *   title        string   H1 and card title — may run longer than the <title>
 *   seoTitle     string   <title>, <= 41 chars so it fits the 60-char budget
 *                         with the ' | <site name>' suffix; '' falls back to title
 *   description  string   meta description, 120–155 chars, unique site-wide
 *   date         string   YYYY-MM-DD, publication date
 *   updated      ?string  YYYY-MM-DD, when meaningfully revised
 *   tags         string[] free-form
 *   service      ?string  slug of the service this article links to — it also
 *                         decides the article's WhatsApp prefill and tier
 *   example      bool     seed record only — see content/pages.php
 */

declare(strict_types=1);

return [
    [
        'slug' => 'mi-bebe-ya-se-puede-instalar',
        'title' => 'Mi Bebé, la app de embarazo hecha en Paraguay, ya se puede instalar',
        'seoTitle' => 'Mi Bebé ya se puede instalar en Paraguay',
        'description' => 'Mi Bebé ya se puede instalar desde un link, sin tienda. Conocé sus modos, la cuenta opcional y cómo empezar a seguir tu embarazo en Paraguay.',
        'date' => '2026-09-20', 'datePublished' => '2026-09-20', 'updated' => '2026-09-20',
        'tags' => ['Mi Bebé', 'Lanzamiento'], 'service' => null, 'example' => false,
        'kind' => 'product', 'reviewedBy' => null, 'image' => null,
        'lead' => 'Mi Bebé ya se puede instalar desde un link, sin pasar por una tienda de aplicaciones. La app gratuita, hecha para Paraguay, reúne seguimiento del embarazo, herramientas y guías en español paraguayo. Si estás embarazada o estás buscando un embarazo, podés elegir el modo que corresponde a tu momento y empezar con una cuenta opcional.',
        'sections' => [
            ['h2' => 'Una entrada según el momento que estás viviendo', 'body' => [
                'El lanzamiento acerca una opción local para consultar información y organizar preguntas desde el teléfono. El modo Estoy embarazada reúne el recorrido semana a semana, herramientas y un resumen prenatal. El modo Estoy planeando / buscando ofrece un calendario menstrual, una estimación de la ventana fértil y una lista de preparación para el embarazo. No hace falta estar esperando un bebé para encontrar una entrada que tenga sentido para vos.',
                'Elegir el modo es también una manera de ordenar lo que querés consultar. Si ya tenés un control programado, podés empezar por el resumen prenatal y las dudas que querés llevar. Si estás buscando, el calendario puede ayudarte a observar tus fechas; una estimación no confirma que haya ocurrido la ovulación ni asegura un embarazo. La consulta de preparación sigue teniendo su propio lugar.',
            ]],
            ['h2' => 'El contexto paraguayo entra en la conversación', 'body' => [
                'Entre las guías de Mi Bebé están el dengue, el tereré y la cafeína, los controles prenatales y los derechos de la embarazada que trabaja. También hay contenidos sobre qué llevar al sanatorio y los trámites posteriores al nacimiento. Son temas que suelen aparecer junto a la pregunta por la semana de embarazo: cómo organizar el día, qué preguntar y dónde ampliar una explicación.',
                'Podés conocer el conjunto en [la presentación de la app](/app/). Para leer con más calma sobre trabajo y embarazo, guardá la guía de [derechos de la embarazada que trabaja](/derechos/derechos-de-la-embarazada-que-trabaja/). La información legal necesita contrastarse con tu situación; tener el tema identificado ayuda a preparar la conversación, pero una pantalla no decide cómo se aplica un derecho a tu caso.',
            ]],
            ['h2' => 'La cuenta es una elección con consecuencias concretas', 'body' => [
                'Podés seguir sin cuenta: en ese caso, todo queda en tu teléfono. Con cuenta, el servidor guarda un sobre que no puede leer. El ingreso con Google permite respaldo, sincronización y compartir en familia mediante un enlace de WhatsApp. Las fotos nunca se suben. Esta distinción importa cuando decidís cómo usar la app, especialmente si el teléfono también lo usan otras personas.',
                'Antes de ingresar información personal, pensá qué necesitás conservar y con quién querés compartir el embarazo. No es lo mismo usar una herramienta para vos que invitar a alguien a acompañarte. En [privacidad](/privacidad/) podés ampliar la explicación del modelo de datos y encontrar el camino hacia las condiciones de la app. Elegí con esa información a mano, sin apurarte por completar todo al comenzar.',
            ]],
            ['h2' => 'Qué hacer para empezar', 'body' => [
                'Abrí la [guía para instalar Mi Bebé](/instalar/) y seguí las indicaciones correspondientes a tu teléfono. Ahí está el recorrido de instalación; no necesitás buscar la app en una tienda. Después elegí el modo y empezá por una necesidad concreta: ubicar tu semana, revisar una guía o preparar las preguntas del próximo encuentro con tu equipo de salud.',
                'No hace falta recorrer todas las herramientas en la primera visita. Una buena prueba es abrir el tema que hoy te preocupa y comprobar si la explicación te ayuda a formular mejor tu pregunta. Si algo no coincide con lo que te indicaron en consulta, llevá esa diferencia al equipo que te atiende. Mi Bebé suma un espacio para organizar el embarazo; las decisiones sobre tu atención se toman con profesionales que conocen tu historia.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Tengo que crear una cuenta para empezar?', 'a' => 'No. Podés seguir sin cuenta y mantener todo en tu teléfono. La cuenta con Google habilita respaldo, sincronización y compartir en familia.'],
            ['q' => '¿Sirve si todavía estoy buscando un embarazo?', 'a' => 'Sí. El modo Estoy planeando / buscando incluye calendario menstrual, estimación de ventana fértil y una lista de preparación.'],
        ],
        'related' => ['derechos-de-la-embarazada-que-trabaja', 'control-prenatal-ips-vs-privado'],
        'sources' => [
            ['title' => 'Mi Bebé: presentación de la aplicación', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null],
            ['title' => 'Mi Bebé: privacidad', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null],
        ],
    ],
    [
        'slug' => 'temporada-dengue-embarazo-paraguay',
        'title' => 'Temporada de dengue en Paraguay: qué cambia si estás embarazada',
        'seoTitle' => 'Dengue en Paraguay: cuidados en el embarazo',
        'description' => 'Ante el dengue en Paraguay, revisá cómo evitar picaduras durante el embarazo, qué hacer si tenés fiebre y cómo organizar la prevención en casa.',
        'date' => '2026-09-20', 'datePublished' => '2026-09-20', 'updated' => '2026-09-20',
        'tags' => ['Salud', 'Dengue'], 'service' => null, 'example' => false,
        'kind' => 'medical', 'reviewedBy' => null, 'image' => null,
        'lead' => 'Cuando el dengue vuelve a ser una preocupación en Paraguay, el embarazo cambia la respuesta ante la fiebre: necesitás consultar sin demora y avisar que estás embarazada. La prevención sigue pasando por evitar picaduras y eliminar agua acumulada. En esta edición del blog repasamos cómo llevar esas medidas a la casa y al trabajo, sin esperar a que alguien cercano se enferme.',
        'sections' => [
            ['h2' => 'La prevención también se hace durante el día', 'body' => [
                'El mosquito que transmite el dengue puede picar de día. Por eso, reservar el repelente para la noche deja parte de la rutina sin protección: el viaje al trabajo, el patio, una sala de espera o una siesta también cuentan. Usá ropa que cubra la piel cuando sea posible y buscá espacios con mosquiteros o barreras que dificulten la entrada de mosquitos.',
                'Elegí un repelente autorizado y seguí las indicaciones de su etiqueta, incluida la reaplicación. Consultá al equipo de salud o en la farmacia si tenés dudas sobre el producto durante el embarazo. No lo apliques sobre piel lastimada ni cerca de ojos y boca. Los preparados caseros y las mezclas de aceites no ofrecen una protección que puedas dar por segura; el olor fuerte no demuestra eficacia.',
            ]],
            ['h2' => 'Una recorrida de la casa con tareas repartidas', 'body' => [
                'Después de una lluvia, revisá los recipientes que pueden retener agua: baldes, platos de macetas, juguetes y objetos en desuso. Vaciá y limpiá los que se usan, guardalos boca abajo cuando corresponda y mantené tapados los depósitos de agua. El objetivo es cortar lugares de cría, no solamente matar los mosquitos que ya ves volando dentro de una habitación.',
                'Pedí que otras personas se ocupen de mover objetos pesados, subir a lugares altos o revisar canaletas. Estar embarazada no significa que la prevención de toda la casa sea tu tarea. En el trabajo, podés señalar recipientes abandonados o mosquiteros rotos y acordar quién puede resolverlos. Una acción compartida suele ser más realizable que una lista que queda a cargo de una sola persona.',
            ]],
            ['h2' => 'Si aparece fiebre, la prioridad cambia', 'body' => [
                'La fiebre, el dolor de cabeza o los dolores del cuerpo pueden tener distintas causas. No alcanza con reconocer síntomas en una publicación para saber si es dengue. Durante el embarazo, buscá evaluación sin demora y contá desde cuándo te sentís así, qué síntomas aparecieron y qué medicamentos tomaste. No te automediques con antiinflamatorios como ibuprofeno o aspirina ante una sospecha de dengue; si tenés un tratamiento indicado, consultá cómo proceder sin modificarlo por tu cuenta.',
                'El dolor abdominal intenso, los vómitos persistentes, el sangrado, la dificultad para respirar o un decaimiento marcado requieren atención urgente. Que baje la fiebre no basta para concluir que el problema terminó. Tené a mano la guía de [señales de alarma](/salud/senales-de-alarma/) y buscá atención ante esas señales, aunque todavía no tengas un resultado de laboratorio o un diagnóstico confirmado.',
            ]],
            ['h2' => 'Qué podés resolver hoy', 'body' => [
                'Revisá el repelente que tenés, prepará agua segura para beber y coordiná con alguien cómo llegar a una consulta si te sentís mal. Si hay náuseas, probá sorbos pequeños mientras buscás atención; no poder retener líquidos es un motivo para avisar enseguida. La hidratación acompaña el cuidado, pero no reemplaza la evaluación de la fiebre ni de los síntomas de alarma.',
                'Para mantener la prevención después de leer esta noticia de servicio, seguí con el artículo sobre [dengue en el embarazo](/salud/dengue-en-el-embarazo/). Ahí se desarrolla el tema como guía de consulta. También podés reunir tus preguntas en el próximo control: qué repelente usar, cómo actuar si aparece fiebre y cómo organizar el cuidado cuando otro integrante de la familia está enfermo. Salir con esas respuestas facilita actuar sin improvisar.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Solo necesito protección contra mosquitos a la noche?', 'a' => 'No. La prevención de picaduras también importa durante el día, tanto en casa como en los traslados y el trabajo.'],
            ['q' => '¿Espero a tener manchas para consultar por fiebre?', 'a' => 'No. Si estás embarazada y tenés fiebre, consultá sin demora. Las manchas no son un requisito para necesitar evaluación.'],
        ],
        'related' => ['dengue-en-el-embarazo', 'senales-de-alarma'],
        'sources' => [
            ['title' => 'Orientaciones sobre dengue y prevención de criaderos', 'publisher' => 'MSPBS', 'url' => null, 'accessed' => null],
            ['title' => 'Dengue y dengue grave', 'publisher' => 'Organización Mundial de la Salud', 'url' => null, 'accessed' => null],
        ],
    ],
    [
        'slug' => 'ley-7383-permisos-controles-prenatales',
        'title' => 'Ley 7383: permisos para controles prenatales, qué dice y cómo pedirlos',
        'seoTitle' => 'Ley 7383: permiso para controles prenatales',
        'description' => 'La Ley 7383 contempla hasta cuatro horas remuneradas para controles prenatales. Prepará tu pedido y las preguntas sobre requisitos y aplicación.',
        'date' => '2026-09-20', 'datePublished' => '2026-09-20', 'updated' => '2026-09-20', 'validAsOf' => '2026-09-20',
        'tags' => ['Derechos', 'Trabajo'], 'service' => null, 'example' => false,
        'kind' => 'legal', 'reviewedBy' => null, 'image' => null,
        'lead' => 'La Ley 7383/2024 contempla hasta cuatro horas remuneradas para controles prenatales. Si estás organizando una consulta dentro de tu jornada laboral, ese permiso es el punto de partida para hablar con tu empleador. Esta nota retoma el derecho para preparar tu pedido: confirmá la frecuencia, los beneficiarios y los requisitos aplicables a tu situación antes de dar por resuelto el trámite.',
        'sections' => [
            ['h2' => 'El cambio que importa al organizar un control', 'body' => [
                'Contar con un permiso remunerado pone los controles prenatales dentro de la conversación sobre el tiempo de trabajo. La referencia de hasta cuatro horas ayuda a formular un pedido concreto, pero no conviene convertirla por cuenta propia en una bolsa de horas acumulables o en una frecuencia mensual. El traslado, la espera y el horario del turno son datos que necesitás explicar para organizar tu ausencia.',
                'Tampoco confundas este permiso con la licencia de maternidad. Uno se relaciona con asistir a controles; la otra tiene un propósito y una organización distintos. Podés ampliar esa diferencia en la guía de [licencia de maternidad](/derechos/licencia-de-maternidad/). Separar los temas evita que el pedido de una consulta termine mezclado con la planificación del nacimiento o con otras ausencias del trabajo.',
            ]],
            ['h2' => 'Prepará un pedido que se pueda responder', 'body' => [
                'Cuando tengas el turno, anotá la fecha, el horario y el tiempo que estimás necesitar para llegar y volver. Es una preparación práctica, no una lista oficial de documentos. Si el sanatorio cambia el horario, guardá también ese aviso: te ayuda a explicar por qué necesitás ajustar lo conversado. Compartí la información necesaria para organizar la ausencia sin adjuntar por costumbre toda tu historia clínica.',
                'Podés escribir un mensaje sencillo: tengo un control prenatal en el horario indicado y quiero coordinar el permiso remunerado previsto en la Ley 7383. Necesito saber cómo presentar el pedido y qué constancia corresponde entregar después. Adaptá el texto a tu forma de comunicarte en el trabajo; no es un formulario legal ni una garantía de que ese canal sea el que utiliza tu empleador.',
            ]],
            ['h2' => 'Dejá claras las preguntas pendientes', 'body' => [
                'En la conversación, preguntá quién recibe la solicitud, cómo se confirma su recepción y cómo se registra la ausencia. Si te piden una constancia, averiguá qué información debe contener para poder solicitarla al acudir al control. Tener la respuesta por escrito sirve para ordenar lo acordado y detectar diferencias antes del turno; no hace falta convertir el intercambio en una discusión para pedir claridad.',
                'Si la respuesta es negativa o no coincide con lo que entendés del permiso, guardá el pedido y la respuesta, y buscá orientación laboral con esos antecedentes. Describí tu modalidad de trabajo y la situación concreta. No publiques datos médicos en grupos de trabajo para intentar justificarte. La información que permite revisar un desacuerdo puede reunirse de manera ordenada y compartirse solamente con quien corresponda.',
            ]],
            ['h2' => 'Qué hacer antes y después de la consulta', 'body' => [
                'Antes de salir, revisá qué quedó acordado y avisá si hubo un cambio del turno. Durante la consulta, concentrá tus preguntas de salud en el equipo que te atiende y pedí la constancia que hayas coordinado. Después, conservá una copia de lo entregado y verificá que la ausencia haya quedado registrada como se conversó. Estas acciones ayudan a seguir el pedido, sin prometer un resultado administrativo.',
                'Para ubicar este permiso dentro de otros temas laborales, leé [derechos de la embarazada que trabaja](/derechos/derechos-de-la-embarazada-que-trabaja/). Llevá a esa lectura las dudas que quedaron abiertas, en vez de asumir que todos los derechos tienen los mismos requisitos. Si aparece una necesidad de atención urgente, priorizá la atención y comunicá la situación en cuanto puedas; organizar el permiso no debe convertirse en una razón para postergar un problema de salud.',
            ]],
        ],
        'faq' => [
            ['q' => '¿El permiso equivale a la licencia de maternidad?', 'a' => 'No. El permiso tratado aquí corresponde a controles prenatales. La licencia de maternidad se organiza por separado.'],
            ['q' => '¿Este mensaje modelo es un formulario obligatorio?', 'a' => 'No. Es una ayuda para explicar el turno y pedir indicaciones sobre el procedimiento que corresponde en tu trabajo.'],
        ],
        'related' => ['licencia-de-maternidad', 'derechos-de-la-embarazada-que-trabaja'],
        'sources' => [
            ['title' => 'Ley 7383/2024 — permisos para controles prenatales (nota oficial del MTESS)', 'publisher' => 'Ministerio de Trabajo, Empleo y Seguridad Social (MTESS)', 'url' => 'https://www.mtess.gov.py/?p=30138', 'accessed' => '2026-09-20'],
            ['title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna', 'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)', 'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna', 'accessed' => '2026-09-20'],
        ],
    ],
    [
        'slug' => 'calor-asuncion-hidratacion-terere',
        'title' => 'Calor en Asunción: hidratación y tereré durante el embarazo',
        'seoTitle' => 'Calor en Asunción: hidratación y tereré',
        'description' => 'En días de calor en Asunción, organizá el agua, las pausas y el tereré durante el embarazo. Conocé qué cuidados ayudan y cuándo buscar atención.',
        'date' => '2026-09-20', 'datePublished' => '2026-09-20', 'updated' => '2026-09-20',
        'tags' => ['Alimentación', 'Calor'], 'service' => null, 'example' => false,
        'kind' => 'medical', 'reviewedBy' => null, 'image' => null,
        'lead' => 'Cuando el calor pesa en Asunción, estar embarazada puede volver más incómodos los traslados y las esperas. El ajuste práctico es tener agua segura a mano, buscar sombra y hacer pausas. El tereré no reemplaza toda el agua del día: la yerba aporta cafeína y los yuyos necesitan una consulta aparte. Esta edición reúne cuidados para reorganizar la rutina en jornadas calurosas.',
        'sections' => [
            ['h2' => 'Prepará el recorrido, además de la botella', 'body' => [
                'Antes de salir, pensá dónde vas a poder tomar agua y descansar. Una botella limpia ayuda, pero también importa reducir el tiempo al sol, usar ropa liviana y buscar un lugar ventilado mientras esperás. Si podés elegir el horario de una compra o un trámite, aprovechá los momentos menos calurosos. Pedir un asiento o una pausa es una forma concreta de cuidar cómo atravesás el día.',
                'En casa, dejá el agua al alcance y tomá con regularidad, sin esperar a sentir una sed intensa. Si las náuseas dificultan beber, probá sorbos pequeños. No hay una cantidad única que resuelva todas las situaciones: influyen el calor, la actividad y tu estado de salud. Si tu equipo te indicó una restricción de líquidos por una condición particular, seguí ese plan y consultá cómo adaptarlo.',
            ]],
            ['h2' => 'El tereré suma decisiones, no solo frescura', 'body' => [
                'La temperatura fría del tereré no elimina la cafeína de la yerba. También aportan cafeína otras bebidas, como el café, el mate y el cocido, por lo que conviene mirar el conjunto de lo que tomás. La preparación y la cantidad de yerba cambian lo que consumís; contar termos sin considerar esa diferencia puede dar una sensación de precisión que no tenés.',
                'Si el tereré forma parte de tu rutina, alterná con agua y hablá en el control sobre tu consumo habitual. Contá cómo lo preparás y qué otras bebidas tomás, en lugar de preguntar solamente si está permitido. La guía de [tereré en el embarazo](/alimentacion/terere-en-el-embarazo/) desarrolla esa conversación. No hace falta cambiar una costumbre por una bebida energética: esta también puede aportar cafeína y otros estimulantes.',
            ]],
            ['h2' => 'Agua, hielo y yuyos merecen su propia revisión', 'body' => [
                'Usá agua segura y hielo elaborado con agua segura. Lavá el termo, la guampa y la bombilla, y dejá que los utensilios se sequen después de limpiarlos. Si alguien está enfermo, evitá compartir la bombilla. La frescura de una bebida no dice si está bien preparada: la higiene de lo que usás para servirla sigue siendo parte del cuidado.',
                'Que un yuyo sea conocido en tu familia no demuestra que sea seguro durante el embarazo. Antes de agregar plantas o mezclas medicinales, consultá con el equipo de salud e indicá cuáles son. Si no conocés los ingredientes de una mezcla, es difícil evaluar su uso. Para refrescarte no necesitás sumar hierbas; podés elegir agua segura y una pausa a la sombra mientras resolvés esa duda.',
            ]],
            ['h2' => 'Qué hacer si el calor te hace sentir mal', 'body' => [
                'Si te mareás, dejá la actividad y ubicáte en un lugar fresco y seguro, acompañada si es posible. Si estás consciente y podés beber, tomá agua en sorbos. El desmayo, la confusión, la dificultad para respirar o la imposibilidad de retener líquidos requieren atención urgente. No supongas que todo se debe al calor: durante el embarazo hay síntomas que necesitan evaluación por otras causas.',
                'Revisá las [señales de alarma](/salud/senales-de-alarma/) y organizá ayuda para trasladarte si aparecen. Para mañana, dejá preparados el agua y un plan de pausas, y conversá en casa o en el trabajo sobre las tareas que podés reorganizar. El objetivo es que hidratarte y descansar sean parte posible de la jornada, sin depender de aguantar hasta volver a casa ni de terminar cada obligación antes de cuidarte.',
            ]],
        ],
        'faq' => [
            ['q' => '¿La yerba pierde la cafeína porque el agua está fría?', 'a' => 'No. El tereré aporta cafeína aunque se prepare con agua fría. Considerá también el café, el mate y el cocido que tomás.'],
            ['q' => '¿Puedo agregar cualquier yuyo para refrescarme?', 'a' => 'Consultá antes de usar plantas medicinales durante el embarazo. El uso tradicional no alcanza para asegurar que una mezcla sea adecuada.'],
        ],
        'related' => ['terere-en-el-embarazo', 'senales-de-alarma'],
        'sources' => [
            ['title' => 'Orientaciones para el cuidado de la salud ante altas temperaturas', 'publisher' => 'MSPBS', 'url' => null, 'accessed' => null],
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud', 'url' => null, 'accessed' => null],
        ],
    ],
    [
        'slug' => 'seguir-embarazo-pareja-whatsapp',
        'title' => 'Cómo seguir el embarazo de tu pareja por WhatsApp con Mi Bebé',
        'seoTitle' => 'Seguir el embarazo de tu pareja por WhatsApp',
        'description' => 'Mi Bebé permite compartir el embarazo en familia por un enlace de WhatsApp. Conocé el papel de la cuenta y cómo acordar un acompañamiento útil.',
        'date' => '2026-09-20', 'datePublished' => '2026-09-20', 'updated' => '2026-09-20',
        'tags' => ['Familia', 'Mi Bebé'], 'service' => null, 'example' => false,
        'kind' => 'product', 'reviewedBy' => null, 'image' => null,
        'lead' => 'Mi Bebé permite compartir el embarazo en familia mediante un enlace de WhatsApp, con una cuenta de Google. Para acompañar a tu pareja, el primer paso es acordar que quiera compartirlo y revisar juntos la opción de familia en la app. La función abre una forma de estar al tanto; el apoyo cotidiano se construye con lo que hacen después de recibir el enlace.',
        'sections' => [
            ['h2' => 'Primero el acuerdo, después el enlace', 'body' => [
                'Preguntale qué le gustaría compartir y con quién. Puede querer acompañamiento de su pareja, de una hermana o de su mamá, y también puede preferir guardar algunas conversaciones para el control prenatal. Recibir una invitación no te da permiso para reenviarla a un grupo. Si quieren sumar a otra persona, vuelvan a hablarlo antes de ampliar el círculo.',
                'La opción de compartir en familia está asociada al ingreso con Google. Antes de enviar el enlace, revisen en la app qué información verá la persona invitada y qué opciones de acceso aparecen: los campos visibles, los requisitos para quien recibe y el manejo del enlace necesitan comprobarse allí. La página de [familia](/familia/) explica el enfoque para acompañar sin convertir el seguimiento en una obligación de contar todo.',
            ]],
            ['h2' => 'La cuenta y la privacidad forman parte del paso', 'body' => [
                'En Mi Bebé, seguir sin cuenta mantiene todo en el teléfono. Con cuenta, el servidor guarda un sobre que no puede leer; Google permite respaldo, sincronización y compartir en familia. Las fotos nunca se suben. Son características distintas que conviene entender juntas: elegir compartir no es lo mismo que usar la app de manera individual, aunque ambas decisiones empiecen desde el mismo teléfono.',
                'Leé con tu pareja la explicación de [privacidad](/privacidad/) antes de ingresar o compartir datos que consideren sensibles. Si el celular queda desbloqueado sobre una mesa o lo usan otras personas, conversen también sobre ese acceso cotidiano. La confianza no depende solo de la aplicación: incluye respetar cuándo alguien quiere hablar del embarazo y cuándo necesita que la conversación sea sobre otra cosa.',
            ]],
            ['h2' => 'Transformá la información en ayuda concreta', 'body' => [
                'En lugar de preguntar únicamente cuánto creció el bebé, podés preguntar qué tarea aliviaría el día. Acompañar a una consulta si ella quiere, organizar el traslado, preparar una comida o hacerse cargo de una compra son formas de apoyo que no requieren interpretar datos médicos. Si vas al control, acuerden antes qué preguntas quieren llevar y dejá espacio para que ella hable por sí misma.',
                'Cuando aparezca una duda, anoten el tema y busquen la guía relacionada. Si están organizando dónde atenderse, el artículo sobre [control prenatal: IPS y privado](/tramites/control-prenatal-ips-vs-privado/) puede servir para preparar preguntas. Evitá convertir una lectura general en una indicación para tu pareja. Su cansancio, sus molestias y sus decisiones merecen escucharse, aunque no coincidan con una descripción de la semana.',
            ]],
            ['h2' => 'Qué hacer cuando llega la invitación', 'body' => [
                'Abrí el enlace que te comparta y seguí las indicaciones que muestre la app. Si algo no queda claro, revisalo con ella antes de ingresar información o volver a compartirlo. No mandes capturas del embarazo a otras personas sin preguntarle. Pueden acordar además qué canal usar para organizar cosas prácticas y cuáles son los momentos en que prefieren conversar sin el teléfono.',
                'El valor del seguimiento se nota fuera de la pantalla: recordar una pregunta, cumplir una tarea acordada o escuchar sin intentar resolver todo. Revisen de vez en cuando si esta forma de compartir les está sirviendo. La persona embarazada puede necesitar más compañía en un momento y más espacio en otro; acompañar bien incluye aceptar esos cambios y ajustar el acuerdo sin exigir explicaciones permanentes.',
            ]],
        ],
        'faq' => [
            ['q' => '¿Puedo reenviar la invitación al grupo familiar?', 'a' => 'Pedí autorización antes. La invitación expresa una decisión de compartir con vos; no supone un acuerdo para ampliar quién recibe el enlace.'],
            ['q' => '¿Qué puedo aportar además de mirar la app?', 'a' => 'Acordá una tarea concreta, ayudá a preparar preguntas y escuchá qué apoyo quiere tu pareja. Seguir información no sustituye esa conversación.'],
        ],
        'related' => ['control-prenatal-ips-vs-privado', 'que-llevar-al-sanatorio'],
        'sources' => [
            ['title' => 'Mi Bebé: familia', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null],
            ['title' => 'Mi Bebé: privacidad', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null],
        ],
    ],
    [
        'slug' => 'que-revisa-app-embarazo',
        'title' => 'Qué revisa y qué no una app de embarazo',
        'seoTitle' => 'Qué revisa y qué no una app de embarazo',
        'description' => 'Una app de embarazo organiza información, pero no examina tu salud ni la de tu bebé. Aprendé a usar fechas, registros y guías en la consulta.',
        'date' => '2026-09-20', 'datePublished' => '2026-09-20', 'updated' => '2026-09-20',
        'tags' => ['Salud', 'Mi Bebé'], 'service' => null, 'example' => false,
        'kind' => 'medical', 'reviewedBy' => null, 'image' => null,
        'lead' => 'Con Mi Bebé disponible para instalar, aparece una pregunta necesaria: qué puede revisar una app de embarazo. Puede ayudarte a ordenar fechas, registros y lecturas; no examina tu cuerpo ni confirma que tu bebé esté bien. Para quienes empiezan a usarla, distinguir esas funciones permite aprovechar la información sin confundir una pantalla de seguimiento con un control prenatal.',
        'sections' => [
            ['h2' => 'Una fecha calculada depende de los datos de entrada', 'body' => [
                'La semana que muestra una herramienta parte de fechas y reglas de cálculo. Si una fecha se anotó mal o la menstruación era irregular, el resultado puede no coincidir con la edad gestacional que usa tu equipo. Una cuenta exacta sobre un dato incierto sigue siendo una estimación. La fecha probable de parto tampoco es una cita que el nacimiento deba cumplir.',
                'Si encontrás una diferencia, llevá al control la fecha que ingresaste y la que figura en tu carné. Preguntá cuál usar para organizar el seguimiento. La [calculadora de embarazo](/calculadora/) explica cómo interpretar semanas y fechas; no reemplaza la valoración de tu historia ni de una ecografía. Corregir el dato de referencia es más útil que comparar pantallas hasta encontrar la que muestra el número que esperabas.',
            ]],
            ['h2' => 'Registrar un síntoma no es interpretarlo', 'body' => [
                'Mi Bebé incluye herramientas de síntomas, peso, contracciones y movimientos, además de un resumen prenatal. Esos nombres describen espacios de la app; no significan que el teléfono pueda hacer un examen físico. Un registro puede ayudarte a recordar cuándo empezó una molestia, cómo cambió y qué estabas haciendo. La interpretación necesita contexto y, según el problema, una evaluación presencial.',
                'El control prenatal reúne conversaciones, mediciones, examen y estudios según lo que corresponda a tu embarazo. Por ejemplo, la presión se mide con un equipo adecuado y los análisis requieren muestras: escribir cómo te sentís no produce esos resultados. Tampoco una descripción general del desarrollo confirma el crecimiento de tu bebé. La información semanal habla de un proceso habitual, no de una observación individual de tu embarazo.',
            ]],
            ['h2' => 'Las señales de alarma no esperan un registro completo', 'body' => [
                'Si tenés sangrado, pérdida de líquido, dolor intenso, dificultad para respirar o dolor de cabeza fuerte con alteraciones de la visión, buscá atención urgente. Una disminución de los movimientos respecto de lo habitual también necesita consulta inmediata cuando ya los percibís. No esperes a llenar un contador o a encontrar una respuesta dentro de la app para decidir pedir ayuda.',
                'Guardá la guía de [señales de alarma](/salud/senales-de-alarma/) para reconocer situaciones que requieren actuar. Que no hayas anotado un síntoma, o que una pantalla se vea igual que ayer, no demuestra que todo esté bien. Si algo te preocupa, describilo al equipo de salud con tus palabras; no necesitás que encaje en una opción de un menú para que merezca ser escuchado.',
            ]],
            ['h2' => 'Qué llevar de la app a la consulta', 'body' => [
                'Elegí las dudas que te quedaron después de leer y reuní los datos que ayuden a explicarlas: cuándo comenzó el cambio, si se repite y si interfiere con comer, dormir o moverte. Llevá también el carné y los resultados que te hayan pedido. Un resumen breve permite conversar sobre lo importante sin dedicar toda la consulta a recorrer el teléfono buscando una anotación.',
                'Después, revisá qué indicaciones recibiste y preguntá si algo quedó ambiguo. Usá las guías para volver sobre una explicación, no para modificar por tu cuenta un tratamiento. En [la presentación de Mi Bebé](/app/) podés elegir herramientas según lo que querés organizar. El criterio para saber si te están ayudando es sencillo: que te permitan comprender mejor tus preguntas y conversar con tu equipo, sin hacerte postergar la atención que necesitás.',
            ]],
        ],
        'faq' => [
            ['q' => '¿La app puede confirmar que mi bebé está creciendo bien?', 'a' => 'No. Las explicaciones semanales son generales. Evaluar el crecimiento de tu bebé requiere el seguimiento clínico que corresponda.'],
            ['q' => '¿Llevo mis anotaciones al control?', 'a' => 'Sí, pueden ayudarte a explicar cambios y dudas. Seleccioná lo relevante y acompañalo con tu carné y los estudios solicitados.'],
        ],
        'related' => ['senales-de-alarma', 'control-prenatal-ips-vs-privado'],
        'sources' => [
            ['title' => 'Mi Bebé: presentación de la aplicación', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null],
            ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud', 'url' => null, 'accessed' => null],
            ['title' => 'Orientaciones sobre control prenatal y señales de alarma', 'publisher' => 'MSPBS', 'url' => null, 'accessed' => null],
        ],
    ],
];
