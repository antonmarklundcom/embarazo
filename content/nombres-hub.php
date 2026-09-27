<?php
/**
 * Copy for /nombres/ and its origin pages (growth plan item 2). The names are generated into
 * content/nombres.php from the app seed; this file holds only what the site writes around them.
 * hub + origins[guarani|espanol|biblico]: {title,seoTitle(<=60),metaDescription,h1,lead}; `{count}`
 * in a lead is replaced with the number of names shown. genderLabels mirror the app's
 * GENDER_LABELS; genderTitle is the h1/title shape of a future gender page.
 */
declare(strict_types=1);

return [
    'hub' => [
        'title' => 'Nombres de bebé',
        'seoTitle' => 'Nombres de bebé guaraníes, en español y bíblicos',
        'metaDescription' => 'Nombres de bebé con su significado: guaraníes, en español y bíblicos, separados en nombres de nena, de varón y para cualquiera.',
        'h1' => 'Nombres de bebé con su significado',
        'lead' => 'Elegir el nombre del bebé es una de las primeras decisiones que muchas familias toman juntas. Acá reunimos {count} nombres con su significado, en tres grupos: nombres en guaraní, nombres en español y nombres bíblicos. En cada grupo están separados los de nena, los de varón y los que sirven para cualquiera. Los significados son orientativos: el sentido de un nombre también es el que le da tu familia.',
    ],
    'origins' => [
        'guarani' => [
            'title' => 'Nombres guaraníes para bebé',
            'seoTitle' => 'Nombres guaraníes para bebé y su significado',
            'metaDescription' => 'Nombres guaraníes para bebé con su significado: Arami, Yasy, Kuarahy, Mainumby y más, separados en nombres de nena, de varón y para cualquiera.',
            'h1' => 'Nombres guaraníes para tu bebé',
            'lead' => 'Un nombre guaraní le da al bebé algo del idioma que se habla en todo Paraguay. Muchos nombran el cielo, la luna, el sol, flores, pájaros o el monte. Esta lista reúne {count} nombres en guaraní con su significado, separados en nombres de nena, de varón y para cualquiera. Algunos llevan letras propias del guaraní, como la ã o la ĩ: si pensás anotarlo así, preguntá en el Registro Civil cómo queda escrito.',
        ],
        'espanol' => [
            'title' => 'Nombres de bebé en español',
            'seoTitle' => 'Nombres de bebé en español y su significado',
            'metaDescription' => 'Nombres de bebé en español con su significado: Sofía, Valentina, Mateo, Santiago, Joaquín y más, separados en nombres de nena y de varón.',
            'h1' => 'Nombres de bebé en español',
            'lead' => 'Estos son {count} nombres conocidos en castellano, con el significado que suele darse a cada uno. Muchos vienen del latín, del griego o del hebreo; también hay formas cercanas, como Thiago, la forma brasileña de Santiago, o Lautaro, de origen mapuche. Están separados en nombres de nena y de varón para que puedas recorrerlos rápido y anotar los que te gusten.',
        ],
        'biblico' => [
            'title' => 'Nombres bíblicos para bebé',
            'seoTitle' => 'Nombres bíblicos para bebé y su significado',
            'metaDescription' => 'Nombres bíblicos para bebé con su significado: Ana, María, Sara, Daniel, Samuel, Gabriel y más, separados en nombres de nena, de varón y para cualquiera.',
            'h1' => 'Nombres bíblicos para tu bebé',
            'lead' => 'Los nombres bíblicos vienen de personajes del Antiguo y del Nuevo Testamento, y muchos se usan desde hace generaciones en familias de distintas tradiciones. Acá tenés {count} con su significado, separados en nombres de nena, de varón y para cualquiera. Algunos, como Ana, María o Daniel, son tan comunes que se eligen sin pensar en su origen.',
        ],
    ],
    'genderLabels' => ['f' => 'Nena', 'm' => 'Varón', 'u' => 'Para cualquiera'],
    'genderTitle' => '{origin}: {gender}',
];
