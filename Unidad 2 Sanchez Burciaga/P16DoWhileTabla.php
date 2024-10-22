<?php
/* CBTIS 89
   Programa que genera la tabla del 9 con el ciclo DO WHILE
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
echo "Tabla de multiplicar del 9";
echo "<br>","<br>";

$i=1;$v=10;

do {
	$Resu=9*$i;
echo "9 X $i = $Resu";
echo "<br>","<br>";
$i++;
} while ($i<=$v);
?>