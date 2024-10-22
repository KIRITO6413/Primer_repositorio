<?php
/* CBTIS 89
   Programa que muestra una si una página está disponible, solamente si es entre los primeros 10 dias del mes
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$dia=date("d");

if ($dia<=10)
{echo "Sitio activo";}
else
{echo "Este sitio está fuera de servicio";}
?>