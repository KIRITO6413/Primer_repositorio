<?php
/* CBTIS 89
   Programa que convierte los datos de un arreglo en una cadena de texto, y de forma contraria es decir, convierte una cadena de texto a elementos dentro de un arreglo. 
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
   
//Almacena datos en un arreglo
$ArrayDatos= ["Karina","Rosales","Orozco"];

//Convierte un array en una cadena de texto
$String= implode(" ", $ArrayDatos);
echo "Cadena de texto <br>";
echo $String;
echo "<br>","<br>";

//Cadena de texto a separar
$Cadena= "Tercero De Programación Matutino";

//Convierte una cadena de texto a un array
$Array= explode(" ",$Cadena);
$Longitud=count($Array);
echo "<br>";
echo "Arreglo con datos de tipo string <br>";

//Imprime los datos de un arreglo
for($i=0;$i<$Longitud;$i++){
	//Se obtiene el valor de cada elemento
	echo $Array[$i];
    echo "<br>";
}
?>