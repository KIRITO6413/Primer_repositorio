<?php
/* CBTIS 89
   Programa que crea un array asociativo de ropa, considerando playeras, camisas, pantalones de mezclilla y bermudas. Con un Var_dump muestra el contenido del Array.
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
   $Ropa = array('Playeras'=>'100','Camisas'=>'250','Pantalones'=>'300','Bermudas'=>'200');

   foreach($Ropa as $Prenda=>$Precio){
     echo "La prenda " . $Prenda . " tiene un costo de " . $Precio;
     echo "<br>";
   }
   echo "<br>";
    var_dump($Ropa);
?>