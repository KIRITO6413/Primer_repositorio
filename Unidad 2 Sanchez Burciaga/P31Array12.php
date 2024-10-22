<?php
/* CBTIS 89
   Programa que mostrar un Array Ascendente y Descendente
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";
rsort($arraynumerico);
var_export($arraynumerico);
?>