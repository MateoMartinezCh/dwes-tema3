<!DOCTYPE html>
<?php
require 'idioma.php';
function is_dir_empty($dir)
{
    if (!is_readable($dir)) {
        return null;
    } else {
        return (count(scandir($dir)) == 2);
    }
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Mateo MiniMyCloud</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css" />
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <p class="navbar-brand  logo" href="#">MiniMyCloud</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll " style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php?idioma=<?= $idioma ?>">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="subir.php?idioma=<?= $idioma ?>">Subir</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link active pil" href="cloud.php?idioma=<?= $idioma ?>">Ficheros</a>
                        </li>

                    </ul>
                    <form action="#" method="GET">
                        <select id="idioma" name="idioma" class="idioma">
                            <option value="es" <?php if ($idioma == 'es') {
                                                    echo 'selected';
                                                } ?>>Español</option>
                            <option value="en" <?php if ($idioma == 'en') {
                                                    echo 'selected';
                                                } ?>>Inglés</option>
                        </select>
                        <input type="submit" value="Ok" class="aceptar" />
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        $directorio = './ficheros';
        $todosFicheros = scandir($directorio);
        $ficherosPdf = [];
        $ficherosGif = [];
        $ficherosPng = [];
        $ficherosJpg = [];
        if (is_dir_empty("./ficheros")) {
            echo "<h1>" . getCadena('cloud_vacio') . "</h1>";
            echo "<a href='subir.php?idioma=$idioma'>" . getCadena('cloud_reenviar') . "</a>";
        } else {
            foreach ($todosFicheros as $fic) {
                if (pathinfo($fic, PATHINFO_EXTENSION) == 'pdf') {
                    $ficherosPdf[] = "./ficheros/$fic";
                }
            }
            foreach ($todosFicheros as $fic) {
                if (pathinfo($fic, PATHINFO_EXTENSION) == 'gif') {
                    $ficherosGif[] = "./ficheros/$fic";
                }
            }
            foreach ($todosFicheros as $fic) {
                if (pathinfo($fic, PATHINFO_EXTENSION) == 'png') {
                    $ficherosPng[] = "./ficheros/$fic";
                }
            }
            foreach ($todosFicheros as $fic) {
                if (pathinfo($fic, PATHINFO_EXTENSION) == 'jpg' || pathinfo($fic, PATHINFO_EXTENSION) == 'jpeg') {
                    $ficherosJpg[] = "./ficheros/$fic";
                }
            }
            if (!empty($ficherosPdf)) {

                echo "<h1>" . getCadena('cloud_pdf') . "</h1>";
                echo "<ul>";
                foreach ($ficherosPdf as $fic) {
                    echo "<li><a href=" .  "./" . $fic . ">"  . pathinfo($fic, PATHINFO_BASENAME) . "</a></li>";
                }
                echo "</ul>";
            } else {
                echo "<h1>" . getCadena('cloud_nopdf') . "</h1>";
            }
            if (!empty($ficherosGif) || !empty($ficherosPng) || !empty($ficherosJpg)) {
                echo "<h1>" . getCadena('cloud_images') . "</h1>";
                /*                 echo "<div class='contenedor'>";
 */
                foreach ($ficherosGif as $fic) {
                    echo "<img src=" .  "./" . $fic . "></img><br>";
                }
                foreach ($ficherosPng as $fic) {
                    echo "<img src=" .  "./" . $fic . "></img><br>";
                }
                foreach ($ficherosJpg as $fic) {
                    echo "<img src=" .  "./" . $fic . "></img><br>";
                }
                /*                 echo "</div>";
 */
            } else {
                echo "<h1>" . getCadena('cloud_noimages') . "</h1>";
            }
        }

        ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>