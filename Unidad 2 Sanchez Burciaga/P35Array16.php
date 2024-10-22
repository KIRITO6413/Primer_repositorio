<?php
/* CBTIS 89
   Programa que 
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$Array1= [10,20,30,40,50];
$Longitud=count($Array1);
$Array2= [3,7,6,15,18];
$Longitud=count($Array2);

echo "SUMA ENTRE ARREGLOS <br>";
for ($i=0;$i<$Longitud;$i++){
$ArraySuma[$i]= $Array1[$i] + $Array2[$i];
echo $Array1[$i] ." + " .$Array2[$i]. " = " . $ArraySuma[$i];
echo "<br>";}

echo "<br> RESTA ENTRE ARREGLOS <br>";
for ($i=0;$i<$Longitud;$i++){
$ArrayResta[$i]= $Array1[$i] - $Array2[$i];
echo $Array1[$i]. " - " .$Array2[$i]. " = " .$ArrayResta[$i] ;
   echo "<br>";}

echo "<br> MULTIPLICACIÓN ENTRE ARREGLOS <br>";
for ($i=0;$i<$Longitud;$i++){
$ArrayMulti[$i]= $Array1[$i] * $Array2[$i];
 echo $Array1[$i]. " x " .$Array2[$i]. " = " .$ArrayMulti[$i] ;
   echo "<br>";}

echo "<br> DIVISIÓN ENTRE ARREGLOS <br>";
for ($i=0;$i<$Longitud;$i++){
$ArrayDivi[$i]= $Array1[$i] / $Array2[$i];  
 echo $Array1[$i]. " / " .$Array2[$i]. " = " .$ArrayDivi[$i];
   echo "<br>";}
?>