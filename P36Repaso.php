<?php 
/*P36Repaso 
programa que con un array que pase una lista de nombres y si esta el nombre salta un texto el alumono a asistido a su clase y diga el dia que asistio y si no esta salta el dialogo "el. alumno $Nombre no asistio a su clase "."el dia .$dia "
Sanchez Burciaga Angel Gilberto
PROGRAMACION 1°A CBTIS89 TURNO MATUTINO */
$dia=date("d");
$Nombres=array("Maolo","Kider","Kirito","Jazmín","Osmar","Tere","Rose","link");
$Nombre="Maolo";
foreach ($Nombres as $N){
	if ($N==$Nombre){
		echo "el.alumno $Nombre  si asistio a su clase "."el dia .$dia ";
		
		}
		else {echo  "el. alumno $Nombre no asistio a su clase "."el dia .$dia ";
	break;}
	}
?>