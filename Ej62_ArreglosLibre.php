<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi horario</title>
</head>
<body>

<?php

$Horas = array("7-8","8-9","9-10","10-11","11-12","12-13","13-14");
$Dias = array("Lunes","Martes","Miercoles","Jueves","Viernes");
$Horario = array(

array("Submodulo I","Submodulo II","Submodulo I","Submodulo II","Submodulo II"),
array("Submodulo I","Submodulo II","Submodulo I","Submodulo II","Submodulo II"),
array("Filosofia","Terrestres","Filosofia","Submodulo I","Submodulo I"),
array("Lengua","Filosofia","Lengua","Submodulo I","Submodulo I"),
array("Terrestres","Filosofia","Matematicas","Terrestres","Terrestres"),
array("Matematicas","Ingles","Socioemocionales","Matematicas","Lengua"),
array("Ingles","Submodulo II","Ingles","Matematicas","Libre")

);

echo "<h2>Mi horario escolar</h2>";

echo "<h3>CBTIS 89 - Grupo 3A MAT</h3>";

echo "<table border='1' cellpadding='10'>";

echo "<tr>";
echo "<th>Hora</th>";

for($j=0; $j<5; $j++){
    echo "<th>".$Dias[$j]."</th>";
}

echo "</tr>";

for($i=0; $i<7; $i++){

    echo "<tr>";

    echo "<td>".$Horas[$i]."</td>";

    for($j=0; $j<5; $j++){

        echo "<td>".$Horario[$i][$j]."</td>";

    }

    echo "</tr>";

}

echo "</table>";

?>
