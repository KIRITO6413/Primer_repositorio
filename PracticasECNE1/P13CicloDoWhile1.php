<?php
/* CBTIS 89
   Programa que genera una lista aleatoria del 1 al 100
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/

$valor=rand(1,100);
$inicio=1;
do {
	echo $inicio;
	echo "<br>";
	$inicio++;	
} while ($inicio<=$valor);
?>