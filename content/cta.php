<?php
/**
 * CTA copy: primary/week/tool:string (button labels); week contains literal {n}.
 * trust:string, exact shared strip copy. Additional disclaimers map medical/legal/
 * procedural/product to plain strings; disclaimer_kind() reads them (no copy in lib).
 * Consumers substitute n as an integer, then escape every value with e().
 */
declare(strict_types=1);
return [
    'primary' => 'Abrí Mi Bebé',
    'week' => 'Seguí la semana {n} en Mi Bebé',
    'tool' => 'Continuá en Mi Bebé',
    'trust' => 'Gratis, sin tienda, funciona sin datos, tus datos son tuyos.',
    'disclaimers' => [
        'medical' => 'Información general, no es un diagnóstico. Todavía no contamos con revisor médico; esta información no reemplaza tu consulta.',
        'legal' => 'No es asesoría legal. Consultá los requisitos y la normativa vigente para tu caso.',
        'procedural' => 'No es asesoría legal. Confirmá los requisitos y procedimientos vigentes antes de hacer el trámite.',
        'product' => '',
    ],
];
