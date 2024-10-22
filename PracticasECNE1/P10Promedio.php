<?php
/* CBTIS 89
   Programa que calculee el promedio de un alumno a base de 3 calificaciones
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$Cali1=3.5;$Cali2=4.9;$Cali3=2.6;$Prom;$Nombre;
$Prom=($Cali1+$Cali2+$Cali3)/3;
$Nombre="Goro Akechi";

echo "El nombre de del alumno es: ", $Nombre;
echo "<br>";
echo "Su promedio es: ", $Prom;
if ($Prom<6){
	echo "<br>";
	echo "El alumno ", $Nombre." reprobó";
}
else {
	echo "<br>";
	echo "El alumno ", $Nombre." aprobó";
}
?>