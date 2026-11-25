<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Arreglo multidimensional</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>
	<form method="POST">
		<label>Nombres: </label>
		<input type="text" name="nombre">
		<br><br>
		<label>Edades: </label>
		<input type="number" name="edad">
		<br><br>
		<label>Pasatiempos: </label>
		<input type="text" name="pasatiempo">
		<br><br>
		<button type="submit" name="guardar">Guardar</button>
		<button type="submit" name="eliminar">Eliminar</button>
	</form>
		<?php
	if (isset($_POST['eliminar'])) {
		file_put_contents("alumnos.txt", "");
		file_put_contents("edades.txt", "");
		file_put_contents("pasatiempos.txt", "");
		echo "<p>Se eliminaron correctamente los datos.</p>";}
	?>

	<?php
	if (isset($_POST['guardar'])) {
		$nombre=$_POST['nombre'];
		$edad=$_POST['edad'];
		$pasat=$_POST['pasatiempo'];
		file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
		echo "<p>Nombre guardado correctamente.</p>";
			file_put_contents("edades.txt", $edad . PHP_EOL, FILE_APPEND);
		echo "<p>Edad guardada correctamente.</p>";
			file_put_contents("pasatiempos.txt", $pasat . PHP_EOL, FILE_APPEND);
		echo "<p>Pasatiempo guardado correctamente.</p>";}
	?>
	<h3>Lista de alumnos de 3°A registrados</h3>
	<?php
	if (file_exists("Alumnos.txt")) {
		$contenido=file_get_contents("Alumnos.txt");
		echo nl2br($contenido);
		}
		echo "<br>";
	if (file_exists("Edades.txt")) {
		$contenido=file_get_contents("Edades.txt");
		echo nl2br($contenido);
	    }
	    echo "<br>";
	if (file_exists("Pasatiempos.txt")) {
		$contenido=file_get_contents("Pasatiempos.txt");
		echo nl2br($contenido);
	    }
	    echo "<br>";

	?>
