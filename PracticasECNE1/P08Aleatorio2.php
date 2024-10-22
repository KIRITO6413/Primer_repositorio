<?php
$cali=rand(1,10);
/* CBTIS 89
   Programa que muestra una calificaciómn al azar y muestra si aprobó o reprobó
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
echo "Tu calificación es: ", $cali;
if ($cali<6) 
	{echo "<br>";
     echo "Alumno reprobado";}
elseif ($cali>=6)
	{echo "<br>";
     echo "Alumno aprobado";}
?>