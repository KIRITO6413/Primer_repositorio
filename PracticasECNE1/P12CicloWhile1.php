<?php
/* CBTIS 89
   Programa que imprime los valores desde el 1 hasta el número que se genere aleatoriamente
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/

$valor=rand(1,100);
$inicio=1;
while ($inicio<=$valor)
	{echo $inicio;
		echo "<br>";
		$inicio++;
	}
?>