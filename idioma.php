<?php

$idioma = 'es';

if ($_GET && isset($_GET['idioma'])) {
    $idioma = in_array($_GET['idioma'], ['es', 'en']) ? $_GET['idioma'] : 'es';
}

$cadenas = [
    'bienvenida' => [
        'es' => 'Bienvenid@ a mi sitio web',
        'en' => 'Welcome to my website'
    ],
    'saludo' => [
        'es' => 'Hola',
        'en' => 'Hello'
    ],
    'despedida' => [
        'es' => 'Adiós',
        'en' => 'Bye'
    ]
];

function getCadena(string $id): string
{
    global $idioma, $cadenas;

    if (isset($cadenas[$id])) {
        return $cadenas[$id][$idioma];
    } else {
        return "Error interno: la cadena identificada con $id no existe";
    }
}
