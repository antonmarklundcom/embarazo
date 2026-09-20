<?php
/** Navigation: primary[{label,path? ,items?[{label,path}]}], guides[{label,path}], legal[{label,path}]. */
declare(strict_types=1);
return [
    'primary' => [[
    'label' => 'Semana a semana',
    'path' => '/semana/'
], [
    'label' => 'Calculadora',
    'path' => '/calculadora/'
], [
    'label' => 'Guías',
    'items' => [[
    'label' => 'Salud',
    'path' => '/salud/'
], [
    'label' => 'Alimentación',
    'path' => '/alimentacion/'
], [
    'label' => 'Trámites',
    'path' => '/tramites/'
], [
    'label' => 'Derechos',
    'path' => '/derechos/'
], [
    'label' => 'Parto',
    'path' => '/parto/'
], [
    'label' => 'Planear',
    'path' => '/planear/'
]]
], [
    'label' => 'Blog',
    'path' => '/blog/'
], [
    'label' => 'La app',
    'path' => '/app/'
], [
    'label' => 'Instalar',
    'path' => '/instalar/'
]],
    'guides' => [[
    'label' => 'Salud',
    'path' => '/salud/'
], [
    'label' => 'Alimentación',
    'path' => '/alimentacion/'
], [
    'label' => 'Trámites',
    'path' => '/tramites/'
], [
    'label' => 'Derechos',
    'path' => '/derechos/'
], [
    'label' => 'Parto',
    'path' => '/parto/'
], [
    'label' => 'Planear',
    'path' => '/planear/'
]],
    'legal' => [[
    'label' => 'Privacidad',
    'path' => '/privacidad/'
], [
    'label' => 'Contacto',
    'path' => '/contacto/'
], [
    'label' => 'Sobre Mi Bebé',
    'path' => '/sobre/'
]]
];
