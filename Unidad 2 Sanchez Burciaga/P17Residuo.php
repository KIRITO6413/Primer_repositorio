<?php
/* CBTIS 89
   Programa que genera númros aleatorios e indica en cada uno si es PAR o IMPAR
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
echo "Números Aleatorios";
echo "<br>","<br>";

for ($k=1;$k<=5;$k++){
	$Valor=rand(1,50);
	$Resi=$Valor%2;
	echo "El número es ",$Valor;
	if ($Resi==0)
		{echo " es número PAR","<br>","<br>";}
	else {echo " es número IMPAR","<br>","<br>";}
}
?>