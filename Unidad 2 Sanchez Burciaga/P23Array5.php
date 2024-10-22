<?php
/* CBTIS 89
   Programa que almacena los datos de un arreglo y posteriormente los imprime 
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$Fruteria=array("Manzanas"=>"25", "Mango"=>"40","Limón"=>"35","Naranja"=>"20");
echo "**FRUTERIA DEL SUR**","<br>","<br>";
foreach ($Fruteria as $Frutas=>$Precio) {
	echo "El kilo de  ".$Frutas . " cuesta " .$Precio;
	echo "<br>","<br>";
}
?>