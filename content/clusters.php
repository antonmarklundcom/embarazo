<?php
/**
 * Hubs keyed salud|alimentacion|tramites|derechos|parto|planear.
 * title,h1,seoTitle,metaDescription:string; intro:string[] (200..300 words).
 * kind:medical|legal|procedural; guaraniStrip:bool (derechos only);
 * related:string[] (cluster keys). Additive sources:[{title,publisher,url,accessed}]
 * on every record, reviewedBy:null|{name,credentials,registration}, updated:ISO-date,
 * validAsOf:?ISO-date (legal/procedural); dates are editorial, not fresh legal verification.
 * All copy is plain text; consumers use e(). No HTML or unreviewed Guaraní strings.
 */
declare(strict_types=1);

return [
    'salud' => [
        'title' => 'Salud', 'h1' => 'Salud en el embarazo en Paraguay',
        'seoTitle' => 'Salud en el embarazo en Paraguay',
        'metaDescription' => 'Salud en el embarazo en Paraguay: organizá tus dudas sobre controles, vacunas y síntomas, y conocé las guías para acompañar tu consulta prenatal.',
        'intro' => [
            'La salud en el embarazo se sigue con tu equipo de atención. Esta guía reúne temas para preparar esa conversación: controles prenatales, vacunas, dengue, presión alta, diabetes gestacional, salud dental, descanso y ejercicio. Podés empezar por la pregunta que tenés hoy, sin leer todo de una vez. Una explicación general ayuda a entender palabras y ordenar dudas; no permite diagnosticar lo que te pasa ni decidir un tratamiento para vos.',
            'Si llegaste buscando un síntoma, evitá sacar una conclusión solamente porque otra persona contó algo parecido. La semana, tus antecedentes y lo que evalúe el equipo forman parte de una situación que una página no conoce. El apartado de señales de alarma tiene su propio lugar dentro de estas guías. Las fechas de estudios, los esquemas de vacunación y las recomendaciones concretas deben contrastarse con la información vigente y con tu seguimiento.',
            'En Paraguay también aparece la pregunta por dónde consultar y cómo organizar el turno. Podés separar la duda de salud del trámite: qué necesitás conversar con el profesional y qué necesitás confirmar con el servicio. Mi Bebé incluye seguimiento semanal, guías y un resumen prenatal. Usá esos recursos para acompañar tus preguntas, con espacio para pedir una explicación cuando una indicación no te quede clara. Todavía no contamos con revisor médico; esta información general no reemplaza la consulta.',
        ],
        'kind' => 'medical', 'guaraniStrip' => false, 'related' => ['alimentacion', 'tramites', 'parto'],
        'sources' => [['title' => 'Mi Bebé: seguimiento semanal y guías de embarazo', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null]],
        'reviewedBy' => null, 'updated' => '2026-09-20', 'validAsOf' => null,
    ],
    'alimentacion' => [
        'title' => 'Alimentación', 'h1' => 'Alimentación en el embarazo en Paraguay',
        'seoTitle' => 'Alimentación en el embarazo: dudas de Paraguay',
        'metaDescription' => 'Alimentación en el embarazo: prepará tus preguntas sobre tereré, yuyos, comidas paraguayas e hidratación, con información general para tu consulta.',
        'intro' => [
            'La alimentación en el embarazo trae preguntas muy cotidianas: el tereré de la tarde, los yuyos que te ofrecen, una comida familiar o qué tomar cuando hace calor. Este espacio organiza esas dudas con palabras de acá. No propone un menú universal ni una lista de prohibiciones para todas. Si necesitás cambiar tu alimentación por una indicación médica, esa orientación debe tener en cuenta tu situación y lo que ya conversaste en el control.',
            'Las guías abordan tereré, mate y cocido, yuyos, pescado de río, comidas paraguayas, antojos e hidratación. Para preguntar por algo que consumís, podés describir qué es, cómo lo preparás y qué ingredientes lleva. Decir solamente que es natural no responde si corresponde en tu embarazo. Tampoco alcanza una foto de una comida para definir una cantidad adecuada. Las dosis, los límites y las recomendaciones específicas necesitan una fuente vigente y una orientación que contemple tu caso.',
            'La idea es que puedas participar de la conversación sin sentir que cada comida es un examen. Tus costumbres, tus horarios y lo que conseguís también forman parte de tus preguntas. Mi Bebé tiene una guía sobre tereré, mate, cocido y cafeína; acá ese tema se conecta con otras dudas de alimentación. No contamos todavía con revisor médico. Tomá el contenido como información general para conversar con tu equipo, sin reemplazar las indicaciones que recibiste ni sacar conclusiones por comparación con otra embarazada.',
        ],
        'kind' => 'medical', 'guaraniStrip' => false, 'related' => ['salud', 'planear'],
        'sources' => [['title' => 'Tereré, mate, cocido y cafeína en el embarazo', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null]],
        'reviewedBy' => null, 'updated' => '2026-09-20', 'validAsOf' => null,
    ],
    'tramites' => [
        'title' => 'Trámites', 'h1' => 'Trámites del embarazo y nacimiento en Paraguay',
        'seoTitle' => 'Trámites del embarazo y nacimiento en Paraguay',
        'metaDescription' => 'Trámites del embarazo y nacimiento en Paraguay: ordená tus preguntas sobre carné, cobertura y documentos, y confirmá los requisitos vigentes.',
        'intro' => [
            'Para organizar los trámites del embarazo y del nacimiento, empezá por identificar qué gestión necesitás hacer y qué requisito está confirmado para tu caso. Este espacio reúne preguntas sobre carné perinatal, cobertura, documentos del nacimiento e identificación del bebé. No hay una lista única que resuelva todas las situaciones. Los requisitos, las modalidades de atención y los plazos deben confirmarse con la institución correspondiente antes de organizar una visita o contar con una fecha.',
            'Podés separar la información en tres grupos: lo que ya tenés, lo que te pidieron y lo que falta preguntar. Anotar el nombre del trámite y la fecha de una respuesta te ayuda a distinguir una indicación actual de un consejo que alguien recibió tiempo atrás. Si te dan instrucciones distintas, pedí que aclaren cuál corresponde a tu situación. Una experiencia compartida puede orientar una pregunta, pero no prueba que un documento sea obligatorio para todas las familias.',
            'Las guías de Mi Bebé incluyen control prenatal con IPS o atención privada y trámites después del nacimiento. Esa referencia permite organizar los temas, sin prometer cobertura, turnos ni atención en una oficina concreta. Consultá el dato vigente sobre documentos, costos si los hubiera y canales habilitados. También podés revisar Derechos para separar un permiso laboral de una gestión de cobertura. Este contenido es información general, no asesoría legal; las respuestas sobre tu expediente necesitan confirmación de quien lo tramita.',
        ],
        'kind' => 'procedural', 'guaraniStrip' => false, 'related' => ['derechos', 'parto', 'salud'],
        'sources' => [['title' => 'Guías de control prenatal y trámites después del nacimiento', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null]],
        'reviewedBy' => null, 'updated' => '2026-09-20', 'validAsOf' => '2026-09-20',
    ],
    'derechos' => [
        'title' => 'Derechos', 'h1' => 'Derechos de la embarazada en Paraguay',
        'seoTitle' => 'Derechos de la embarazada en Paraguay',
        'metaDescription' => 'Derechos de la embarazada en Paraguay: licencia de maternidad, permisos para controles y preguntas sobre IPS. Consultá requisitos y vigencia.',
        'intro' => [
            'En Paraguay, la Ley 5508/2015 contempla una licencia de maternidad de 18 semanas y una extensión a 24 en los casos previstos por la ley. La Ley 7383/2024 contempla hasta cuatro horas remuneradas para controles prenatales. Son dos temas distintos: el tiempo de licencia alrededor del nacimiento y el permiso para asistir al control. Conocer esa diferencia te ayuda a plantear qué necesitás consultar en el trabajo y qué falta confirmar para tu situación.',
            'Este espacio también reúne lactancia, paternidad, fuero maternal y subsidio de maternidad. Las cifras provienen de la referencia legal documentada por Mi Bebé y requieren revalidación antes de publicar como orientación vigente. No suponemos que todos los regímenes laborales tengan el mismo trámite ni que una cifra resuelva tu caso. Consultá el dato vigente sobre requisitos, alcance y documentación. Si recibís una respuesta que no entendés, podés pedir que te expliquen qué norma y qué procedimiento están aplicando.',
            'Para preparar tus preguntas, distinguí la licencia laboral del subsidio y de la atención médica. Tener una fecha probable de parto sirve para ordenar fechas orientativas, pero no equivale a una autorización ni confirma un pago. La app incluye un apartado de derechos y cálculo de fechas de licencia. Las guías del sitio amplían esas preguntas con fuentes y fecha editorial visible. Vigente a 2026-09-20 según la referencia disponible, pendiente de revalidación: no es asesoría legal ni sustituye una consulta sobre tu caso.',
        ],
        'kind' => 'legal', 'guaraniStrip' => true, 'related' => ['tramites', 'parto'],
        'sources' => [
            ['title' => 'Ley 5508/2015 — promoción, protección de la maternidad y apoyo a la lactancia materna', 'publisher' => 'Biblioteca y Archivo Central del Congreso Nacional (BACN)', 'url' => 'https://www.bacn.gov.py/leyes-paraguayas/4428/promocion-proteccion-de-la-maternidad-y-apoyo-a-la-lactancia-materna', 'accessed' => '2026-09-20'],
            ['title' => 'Ley 7383/2024 — permisos para controles prenatales (nota oficial del MTESS)', 'publisher' => 'Ministerio de Trabajo, Empleo y Seguridad Social (MTESS)', 'url' => 'https://www.mtess.gov.py/?p=30138', 'accessed' => '2026-09-20'],
        ],
        'reviewedBy' => null, 'updated' => '2026-09-20', 'validAsOf' => '2026-09-20',
    ],
    'parto' => [
        'title' => 'Parto', 'h1' => 'Preparación para el parto en Paraguay',
        'seoTitle' => 'Preparación para el parto en Paraguay',
        'metaDescription' => 'Preparación para el parto en Paraguay: ordená tus dudas sobre el sanatorio, el bolso y los primeros días, y conversá tus opciones con tu equipo.',
        'intro' => [
            'Prepararte para el parto puede empezar por una conversación: dónde está previsto que te atiendan, qué querés preguntar y qué información te falta. Este espacio organiza temas del sanatorio, el bolso, las contracciones, la cesárea y los primeros días en casa. No anticipa cómo va a ser tu nacimiento ni indica una conducta médica a partir de una lista. Tu equipo es quien puede conversar las opciones y las indicaciones de tu embarazo.',
            'Para el bolso, diferenciá tus preferencias de lo que el servicio realmente pide. Una lista compartida por otra familia puede darte ideas, pero no confirma los requisitos del lugar donde vas a atenderte. Consultá el dato vigente sobre documentación, acompañamiento y objetos permitidos. Si todavía no tenés definido el lugar, podés dejar esas preguntas anotadas sin dar por hecho una cobertura o una disponibilidad. Organizar lo pendiente también es una forma de prepararte, sin resolver todo en un solo día.',
            'Mi Bebé incluye una guía sobre qué llevar al sanatorio y una sección de emergencia. Las lecturas de preparación cumplen una función distinta de la atención ante una preocupación de salud. Acá no fijamos una frecuencia de contracciones ni un momento universal para salir de casa: esas indicaciones necesitan orientación clínica. Podés compartir tus preguntas con quien te acompañe y decidir qué ayuda querés pedir. Todavía no tenemos revisor médico; la información general acompaña la consulta y no reemplaza tu plan de atención.',
        ],
        'kind' => 'medical', 'guaraniStrip' => false, 'related' => ['salud', 'tramites', 'derechos'],
        'sources' => [['title' => 'Qué llevar al sanatorio', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null]],
        'reviewedBy' => null, 'updated' => '2026-09-20', 'validAsOf' => null,
    ],
    'planear' => [
        'title' => 'Planear', 'h1' => 'Planear un embarazo en Paraguay',
        'seoTitle' => 'Planear un embarazo en Paraguay',
        'metaDescription' => 'Planear un embarazo en Paraguay: organizá dudas sobre el ciclo, los tests y la consulta previa, y conocé el modo de planificación de Mi Bebé.',
        'intro' => [
            'Si estás planeando un embarazo, podés empezar por ordenar tus preguntas sobre el ciclo y la consulta previa. Este espacio aborda días fértiles, tests, primeros síntomas, ácido fólico y dudas cuando el embarazo no llega. No hay una fecha que podamos prometerte ni una señal aislada que dé todas las respuestas. La información general sirve para entender qué querés preguntar, sin convertir cada cambio del cuerpo en una conclusión sobre un posible embarazo.',
            'Mi Bebé tiene un modo de planificación con calendario menstrual, estimación de ventana fértil y una lista de temas de preconcepción. Una estimación del calendario no confirma que haya ocurrido ovulación ni un embarazo; tampoco es un método anticonceptivo. Podés usarla para organizar la información que querés llevar a la consulta. Si buscás una indicación sobre suplementos, estudios o cuándo hacer un test, consultá la orientación vigente para tu situación en lugar de copiar una dosis o un plazo de otra persona.',
            'También hay espacio para decir cómo te sentís con la búsqueda y cuánto querés compartir con otras personas. No necesitás responder preguntas familiares que no quieras contestar. Si tenés antecedentes o inquietudes que querés conversar, podés anotarlos con tus propias palabras y pedir una explicación cuando algo no quede claro. Las guías conectan planificación, salud y alimentación para acompañar ese proceso. Todavía no contamos con revisor médico: no ofrecemos diagnóstico ni un calendario personalizado de tratamiento desde estas páginas.',
        ],
        'kind' => 'medical', 'guaraniStrip' => false, 'related' => ['salud', 'alimentacion'],
        'sources' => [['title' => 'Mi Bebé: calendario menstrual, fertilidad y checklist de preconcepción', 'publisher' => 'Mi Bebé', 'url' => null, 'accessed' => null]],
        'reviewedBy' => null, 'updated' => '2026-09-20', 'validAsOf' => null,
    ],
];
