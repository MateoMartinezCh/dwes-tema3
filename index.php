<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Mateo MiniMyCloud</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" media="screen" href="CSS/main.css" />
</head>

<body>
	<p>MiniMyCloud</p>
	<nav>
		<a href="#">Inicio</a>
		<a href="#">Subir</a>
		<a href="#">Ficheros</a>
	</nav>
	<form action="GET">
		<select id="idioma" name="idioma">
			<option value="es" <?php if ($idioma == 'es') {
									echo 'selected';
								} ?>>Español</option>
			<option value="en" <?php if ($idioma == 'en') {
									echo 'selected';
								} ?>>Inglés</option>
		</select>
		<input type="submit" value="OK" />
	</form>
</body>

</html>