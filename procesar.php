<?php

echo "<br>";

switch($_GET['operation'])
{
  case "sum": 
   {
	echo $_GET['firstNumber'] + $_GET['secondNumber'];
	break;
   }
   case "rest":
   {
	echo $_GET['firstNumber'] - $_GET['secondNumber'];
	break;
   }
   case "mult":
   {
	echo $_GET['firstNumber'] * $_GET['secondNumber'];
	break;
   }
   case "divi":
   {
   	if($_GET['secondNumber'] == 0)
   	{
   		echo "No se puede dividir entre cero", "<br>";
   		break;
   	}
	echo $_GET['firstNumber'] / $_GET['secondNumber'];
	break;
   }
   case "mod":
   {
	echo $_GET['firstNumber'] % $_GET['secondNumber'];
	break;
   }
 }
echo "<br>";
include 'footer.html';

?>
