<?php
/* CBTIS 89
   Programa que almacena los datos de un arreglo y posteriormente los imprime 
  Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$Equipo=array("Portero"=>"Ren", "Defensa"=>"Akechi ","Medio"=>"Makoto ","Delantero"=>"Aigis");
echo "**SELECCION NACIONAL DE JAPÓN**","<br>","<br>";
foreach ($Equipo as $Posicion=>$Jugador) {
	echo "El jugador ".$Jugador . " es el " .$Posicion;
	echo "<br>","<br>";
}
?>