<?php
/* CBTIS 89
   Programa que sume y muestre el total de pares e impares en un rango de 1 a 30 por medio de un ciclo
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$SumaPares=0;
$SumaImpares=0;
for ($k=1;$k<=30;$k++){
	if ($k%2 ==0)
		{$SumaPares+=$k;}
	else {$SumaImpares+=$k;}
}
echo "La suma de PARES es: $SumaPares";
echo "<br>";
echo "La suma de PARES es: $SumaImpares";
?>