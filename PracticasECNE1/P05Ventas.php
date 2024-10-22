<?php
/* CBTIS 89
   Programa que calculee imprima el pago de una venttade tres artículos
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/

$Produ1=325;$Produ2=341;$Produ3=534;$Desc;$TotT;
$Tot=$Produ1+$Produ2+$Produ3;
echo "La suma de los artículos es: ",$Tot;
echo "<br>";
if ($Tot<1000)
{$Desc=$Tot*.5;}
elseif ($Tot>=1000)
	{$Desc=$Tot*.10;}
elseif ($Tot<2500)
	{$Desc=$Tot*.20;}

echo "El descuento es: ", $Desc;
echo "<br>";
$TotT=$Tot-$Desc;
echo "El total a pagar es :", $TotT;
?>