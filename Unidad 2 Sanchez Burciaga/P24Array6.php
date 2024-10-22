<?php
/* CBTIS 89
   Programa que almacena los datos de un arreglo y posteriormente los imprime 
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$AlumnoS=array("Akechi "=>"ARH","Makoto"=>"Programación","Aigis"=>"Mecatrónica","Ren"=>"Contabilidad");

echo "**LISTA DE ESTUDIANTES**","<br>","<br>";

foreach ($AlumnoS as $Nombre=>$Carrera) {
	echo "El alumno  ".$Nombre . " del CBTIs 89, estudia la carrera de " .$Carrera;
	echo "<br>","<br>";
}
?>