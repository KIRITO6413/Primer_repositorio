<?php
/* CBTIS 89
   Programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo FOR
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$Nombre = "Makoto";
$Array = array(1,2,3, "Shujin Academy", $Nombre);

//Se obtiene el número de elementos
$longitud=count($Array);

//Recorre todos los elementos
for ($i=0;$i<$longitud;$i++)
	{//Se obtiene el valor de cada elemento
		echo $Array[$i];
		echo "<br>";}
