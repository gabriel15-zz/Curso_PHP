<?php

//Demostracion de arreglos


//Arreglos indexados

//Declarando un arreglo indexado
$arregloIndex = array(55, 23, 'hola', TRUE); //Se declara un arreglo indexado con 4 valores.

echo $arregloIndex[0] . "<br>"; //Mostrando el valor de la posición 0 en el array

echo $arregloIndex[1] . "<br>"; //Mostrando el valor de la posición 1 en el array
//OK
echo $arregloIndex[2] . "<br>"; //Mostrando el valor de la posición 2 en el array

echo $arregloIndex[3] . "<br>"; //Mostrando el valor de la posición 3 en el array

echo "<hr>";

//Arreglos Asociativos

//Declarando un arreglo asociativo
$arregloAsoc = array("calificacion" => 18,
					 "temp" => 38,
					 "asistenciaTotal" => TRUE);

echo $arregloAsoc["calificacion"] . "<br>"; //Mostrando el valor de la clave 'calificacion' en el arreglo

echo $arregloAsoc["temp"] . "<br>"; //Mostrando el valor de la clave 'temp' en el arreglo

echo $arregloAsoc["asistenciaTotal"] . "<br>"; //Mostrando el valor de la clave 'asistenciaTotal' en el arreglo

echo "<hr>";

echo $arregloAsoc['calificacion'] . "<br>"; /*Mostrando el valor de la clave
											 'calificacion' en el arreglo (ahora con conmillas simples)*/

echo $arregloAsoc['temp'] . "<br>"; /*Mostrando el valor de la clave 'temp'
									 en el arreglo (ahora con conmillas simples)*/

echo $arregloAsoc['asistenciaTotal'] . "<br>"; /*Mostrando el valor de la clave
												 'asistenciaTotal' en el arreglo (ahora con conmillas simples)*/

echo "<hr>";

//Arreglo Multi-dimensional

//Declarando un array multi-dimensional indexado, implementamos una matriz cuadrada de 3 x 3
$matriz = array( array(1, 2, 3),
				 array(4, 5, 6),
				 array(7, 8, 9)
);

echo $matriz[0][0] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [0][0]
echo $matriz[0][1] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [0][1]
echo $matriz[0][2] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [0][2]
echo $matriz[1][0] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [1][0]
echo $matriz[1][1] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [1][1]
echo $matriz[1][2] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [1][2]
echo $matriz[2][0] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [2][0]
echo $matriz[2][1] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [2][1]
echo $matriz[2][2] . "<br>"; //Accediendo a la implementacion de la matriz en las coordenadas [2][2]

echo "<hr>";

//Declarando un array multi-dimensional asociativo
$direcciones = array(
	"juan" => array("ciudad" => 'Maracaibo',
			   		"estado" => 'Zulia'),
	"ana" => array("ciudad" => 'Cabimas',
			  		"estado" => 'Zulia')
	);

echo $direcciones['juan']['ciudad'] . "<br>"; // Accediendo al valor dentro de el array multi-dimensional
echo $direcciones['juan']['estado'] . "<br>"; // Accediendo al valor dentro de el array multi-dimensional
echo $direcciones['ana']['ciudad'] . "<br>"; // Accediendo al valor dentro de el array multi-dimensional
echo $direcciones['ana']['estado'] . "<br>"; // Accediendo al valor dentro de el array multi-dimensional
echo "<hr>";

?>
