<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Arreglo multidimensional</title>
</head>
<body>
	<h2>Guardar informacion en un archivo</h2>

<?php
	$nombre="Pablixx";
	file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
	echo "Informacion guardada perfectamente.";
	echo "<br><br>";
?>
<?php
    echo "<br><br>";
    $nombre="Panchixx";
    file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
	echo "Alumn@ guardada correctamente.";
?>
<?php
    echo "<br><br>";
    $contenido=file_get_contents("alumnos.txt");
    echo nl2br($contenido);
?>


</body>
</html>	
