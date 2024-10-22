<?php
/* CBTIS 89
   Programa que desglosa la cantidad de un cheque en billetes y monedas 
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/

$Cheque=2997;$B1000;$B500;$B200;$B100;$B50;$B20;$M10;$M5;$M2;$M1;$Resi;
$B1000=floor($Cheque/1000);
$R=$Cheque%1000;
$B500=floor($R/500);
$R=$Cheque%500;
$B200=floor($R/200);
$R=$Cheque%200;
$B100=floor($R/100);
$R=$Cheque%100;
$B50=floor($R/50);
$R=$Cheque%50;
$B20=floor($R/20);
$R=$Cheque%20;
$M10=floor($R/10);
$R=$Cheque%10;
$M5=floor($R/5);
$R=$Cheque%5;
$M2=floor($R/2);
$R=$Cheque%2;
$M1=floor($R/1);
$R=$Cheque%1;
echo "La cantidad del cheque es: ".$Cheque;
echo "<br>";
echo "La cantidad de billetes de 1000 es: ".$B1000;
echo "<br>";
echo "La cantidad de billetes de 500 es: ".$B500;
echo "<br>";
echo "La cantidad de billetes de 200 es: ".$B200;
echo "<br>";
echo "La cantidad de billetes de 100 es: ".$B100;
echo "<br>";
echo "La cantidad de billetes de 50 es: ".$B50;
echo "<br>";
echo "La cantidad de billetes de 20 es: ".$B20;
echo "<br>";
echo "La cantidad de monedas de 10 es: ".$M10;
echo "<br>";
echo "La cantidad de monedas de 5 es: ".$M5;
echo "<br>";
echo "La cantidad de monedas de 2 es: ".$M2;
echo "<br>";
echo "La cantidad de monedas de 1 es: ".$M1;
?>