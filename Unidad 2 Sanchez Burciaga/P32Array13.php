<?php
/* CBTIS 89
   Programa que Crea un código donde se den de alta 3 productos: Camisa, Pantalón y Cinturón. Luego muestra el array y por último muestra el array ascendente. Modifica este código para que se inserten 2 productos más: Una Gorra y unos Calcetines. Modifica el código para mostrar los productos descendentes.
   Sanchez Burciaga Angel Gilberto 
   3°A Programación Matutino
*/
$ArrayRopa = array("Camisa", "Pantalón", "Cinturón");
sort($ArrayRopa);
var_export($ArrayRopa);

echo "<p>";

array_push($ArrayRopa, "Gorra","Calcetines");
foreach ($ArrayRopa as $Ropa){
   echo $Ropa . " <br>";
}
rsort($ArrayRopa);
var_export($ArrayRopa)
?>
