<?php
/* CBTIS 89
   Programa que utiliza un array para mostrar los numeros pares e impares del 1 al 100
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$Numeros=array();
for ($i=1; $i<=100 ; $i++) { 
	$Numeros[]=$i;
}
echo "PARES";
echo "<br>";
foreach ($Numeros as $Numero){
if ($Numero%2==0) {
	echo $Numero . "\n";
}
}
echo "<br>","<br>";
echo"IMPARES";
echo "<br>";
foreach ($Numeros as $Numero){
	if ($Numero%2!=0){
		echo $Numero . "\n";
	}
}
?>