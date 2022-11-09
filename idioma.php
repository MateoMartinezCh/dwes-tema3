<?php

$idioma = 'es';

if ($_GET && isset($_GET['idioma'])) {
    $idioma = in_array($_GET['idioma'], ['es', 'en']) ? $_GET['idioma'] : 'es';
}

$cadenas = [
    'bienvenida' => [
        'es' => 'Bienvenid@ a mi sitio web',
        'en' => 'Welcome to MiniMyCloud'
    ],
    'subtitulo' => [
        'es' => 'Desde aquí puedes administrar tus ficheros',
        'en' => 'Here you can manage your files'
    ],
    'despedida' => [
        'es' => 'Adiós',
        'en' => 'Bye'
    ],
    'enlaceinicial' => [
        'es' => 'Empieza a subir ficheros',
        'en' => 'Start uploading files'
    ],
    'subir_h1' => [
        'es' => 'Sube ficheros PDF o imágenes GIF, PNG y JPEG',
        'en' => 'Upload your PDF, GIF images, PNG or JPEG files'
    ],
    'subir_nombre' => [
        'es' => 'Nombre del fichero ',
        'en' => 'Name of the file '
    ],
    'subir_seleccionar' => [
        'es' => 'Selecciona un fichero ',
        'en' => 'Select a file '
    ],
    'subir_enviar' => [
        'es' => 'Enviar fichero ',
        'en' => 'Send file '
    ],
    'subir_reenviar' => [
        'es' => 'Pulse aquí para enviar otro fichero ',
        'en' => 'Click here to send another file '
    ],
    'subir_subidocorrectamentep1' => [
        'es' => 'El fichero ',
        'en' => 'The file '
    ],
    'subir_subidocorrectamentep2' => [
        'es' => ' se ha subido correctamente',
        'en' => ' was uploaded correctly'
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
