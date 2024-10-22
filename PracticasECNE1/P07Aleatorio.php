<?php
/* CBTIS 89
   Programa que muestra un número aleatorio y dice si es mayor o menor a 50 
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$num=rand(1,100);
echo "El número es: ", $num;
if ($num<50) 
	{echo "<br>";
     echo "El número es menor a 50";}
elseif ($num>50)
	{echo "<br>";
     echo "El número es mayor a 50";}
?>