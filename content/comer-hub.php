<?php
/**
 * Copy for /alimentacion/puedo-comer/ (growth plan item 1). The foods themselves are generated
 * into content/comer.php from the app seed; this file holds only what the site writes around
 * them. title,seoTitle(<=60),metaDescription,h1,lead:string; verdicts: verdict => {label,
 * heading}; faq:[{q,a}]; sources:[{title,publisher,url,accessed}]. The hub exists only while
 * at least one food is published (reviewed) — see tools/import-food.php.
 */
declare(strict_types=1);

return [
    'title' => '¿Puedo comer esto embarazada?',
    'seoTitle' => '¿Puedo comer esto embarazada? Alimentos de la A a la Z',
    'metaDescription' => 'Qué podés comer y tomar en el embarazo, de la A a la Z: tereré, queso Paraguay, asado, sushi, yuyos y más, con el motivo de cada respuesta.',
    'h1' => '¿Puedo comer esto embarazada?',
    'lead' => 'Esta lista responde, alimento por alimento, si conviene comerlo o tomarlo durante el embarazo: sí, con precaución o mejor evitarlo, y por qué. Incluye comidas y bebidas de todos los días en Paraguay, como el tereré, el queso Paraguay, la chipa o el asado. Las respuestas son generales: si tenés una indicación de tu equipo de salud, seguí esa. Ante vómitos, fiebre o diarrea después de comer algo, consultá.',
    'verdicts' => [
        'safe' => ['label' => 'Sí, tranquila', 'heading' => 'Sí, tranquila'],
        'precaucion' => ['label' => 'Con precaución', 'heading' => 'Con precaución'],
        'evitar' => ['label' => 'Mejor evitar', 'heading' => 'Mejor evitar'],
    ],
    'faq' => [
        ['q' => '¿Por qué hay alimentos que conviene evitar en el embarazo?', 'a' => 'Algunos pueden transmitir infecciones como la listeriosis o la toxoplasmosis, que en el embarazo pueden ser más serias, y otros aportan sustancias como el alcohol o demasiada cafeína. Cocinar bien, lavar y elegir lácteos pasteurizados reduce buena parte de esos riesgos.'],
        ['q' => '¿Y si ya comí algo de la lista de evitar?', 'a' => 'No te asustes: un bocado no suele significar un problema. Contalo en tu próximo control, y si aparecen fiebre, vómitos, diarrea o dolor, consultá sin esperar.'],
    ],
    'sources' => [
        ['title' => 'Recomendaciones de la OMS sobre atención prenatal para una experiencia positiva del embarazo', 'publisher' => 'Organización Mundial de la Salud (OMS)', 'url' => null, 'accessed' => null],
        ['title' => 'Orientaciones vigentes sobre alimentación y control prenatal', 'publisher' => 'Ministerio de Salud Pública y Bienestar Social (MSPBS)', 'url' => null, 'accessed' => null],
    ],
];
