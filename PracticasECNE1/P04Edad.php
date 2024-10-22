<?php
/* CBTIS 89
   Programa que une cadenas de texto
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
   */

$edad=18;
$nombre = "Goro";
$apellido1 = "Akechi";
$apellido2 = "Crow";

echo "Tu nombre es ", $nombre." ".$apellido1." Tambien conocido como ".$apellido2;
echo "<br>";
echo "Tienes ", $edad, " años";

if($edad>=18)
{echo "<br>";
echo "Eres mayor de edad";} 
else 
{echo "<br>";
echo "Eres menor de edad";}
?>