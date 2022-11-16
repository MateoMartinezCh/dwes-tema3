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
    'error_yaexistenombre' => [
        'es' => 'El fichero con ese nombre ya existe en el servidor',
        'en' => 'It already exists a file with that name in the server'
    ],
    'error_extensionincorrecta' => [
        'es' => 'La extensión no es correcta',
        'en' => 'The file extension is not correct'
    ],
    'error_faltaarchivo' => [
        'es' => 'Falta el archivo o está vacío',
        'en' => 'There\'s no file or its empty'
    ],
    'error_sinnombre' => [
        'es' => 'No hay nombre o el nombre está vacío',
        'en' => 'There\'s no name or the name is empty'
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
        'en' => 'Send a file '
    ],
    'subir_reenviar' => [
        'es' => 'Pulse aquí para subir otro fichero ',
        'en' => 'Click here to upload another file '
    ],
    'subir_subidocorrectamentep1' => [
        'es' => 'El fichero ',
        'en' => 'The file '
    ],
    'subir_subidocorrectamentep2' => [
        'es' => ' se ha subido correctamente',
        'en' => ' was uploaded correctly'
    ],
    'cloud_vacio' => [
        'es' => 'Aún no hay ficheros.',
        'en' => 'There\'s no files uploaded yet.'
    ],
    'cloud_reenviar' => [
        'es' => 'Pulse aquí para subir el primer fichero ',
        'en' => 'Click here to upload the first file '
    ],
    'cloud_pdf' => [
        'es' => 'Aquí puedes ver tus archivos PDF subidos',
        'en' => 'Here you can see your uploaded PDF files',
    ],
    'cloud_images' => [
        'es' => 'Aquí puedes ver tus GIFS e imágenes subidas',
        'en' => 'Here you can see your uploaded GIF\'S and images',
    ],
    'cloud_nopdf' => [
        'es' => 'Aún no has subido ningún archivo PDF',
        'en' => 'There\'s not PDF files uploaded yet',
    ],
    'cloud_noimages' => [
        'es' => 'Aún no has subido ningun archivo de imagen',
        'en' => 'There are not image files uploaded yet',
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
