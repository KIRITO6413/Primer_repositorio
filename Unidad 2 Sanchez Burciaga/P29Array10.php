<?php
/* CBTIS 89
   Programa que  Crea un array con 8 nombres de personas. En una variable $nombre escribe un nombre. Después, crea un ciclo que recorra el array. Si el nombre coincide con el del array mostrar el mensaje que “Este nombre está en el Array”.
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$Nombres=array("Sasalma","Kider","Kirito","Jazmín","Osmar","Tere","Rose","Makoto");
$Nombre="Akechi";
foreach ($Nombres as $N){
	if ($N==$Nombre){
		echo "Ese nombre está en el array";
		break;
		}
	}
?>