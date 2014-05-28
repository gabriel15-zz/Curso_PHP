<!DOCTYPE html>
<html lang = "es">
<meta charset = "utf-8"/>
<head>
	<title>Operadores de String en PHP</title>
</head>fdsadfdsaf
<body>
<?php

//Practica de Operadores de strings en PHP

$a = "hola";
$b = "Mundo";

//Operadores de concatenación de Strings

echo "Cadena a = $a<br>";
echo "Cadena b = $b<br>";

$x = $a . $b;
echo "Concatenación con el operador punto (.)<br>" . $x;
echo "<hr>";


//Operador de concatenación con asignación

$a .= $b;

echo 'Concatenación con $a .= $b <br>' . $a;
?>
</body>
</html>
