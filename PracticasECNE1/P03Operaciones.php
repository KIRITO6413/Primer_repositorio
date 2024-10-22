<?php
/* CBTIS 89
   Programa que suma, resta, multiplica y divide dos números enteros
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
   */

$N1;$N2;$Suma;$Resta;$Multi;$Divi; //Se declaran las variables
$N1=20; //Se asigna valor a N1
$N2=9; //Se asigna valor a N2
$Suma=$N1+$N2; //Se realiza la operación aritmética
$Resta=$N1-$N2; //Se realiza la operación aritmética
$Multi=$N1*$N2; //Se realiza la operación aritmética
$Divi=$N1/$N2; //Se realiza la operación aritmética

//En las siguientes líneas se imprimen los valores de las variables y el resultado de la suma
echo "El primer número es: ", $N1;
echo "<br>"; //Salto de linea
echo "El segundo número es: ", $N2;
echo "<br>"; //Salto de linea
echo "La suma de los números es: ", $Suma;
echo "<br>"; //Salto de linea
echo "La resta de los números es: ", $Resta;
echo "<br>"; //Salto de linea
echo "La multiplicación de los números es: ", $Multi;
echo "<br>"; //Salto de linea
echo "La división de los números es: ", $Divi;
?>