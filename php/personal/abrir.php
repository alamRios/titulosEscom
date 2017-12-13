<?php
include("conexion.php");
$personal_titulo=$_POST['personal_titulo'];
$personal_puesto=$_POST['personal_puesto'];
$personal_nombre=$_POST['personal_nombre'];
<<<<<<< HEAD
$personal_escuela=$_POST['personal_escuela'];
		
$query="INSERT INTO personal(personal_nombre,personal_titulo,personal_puesto,personal_escuela)values('$personal_nombre','$personal_titulo','$personal_puesto','$personal_escuela')";
=======
<<<<<<< HEAD
$personal_escuela=$_POST['personal_escuela'];
		
$query="INSERT INTO personal(personal_nombre,personal_titulo,personal_puesto,personal_escuela)values('$personal_nombre','$personal_titulo','$personal_puesto','$personal_escuela')";
=======
		
$query="INSERT INTO personal(personal_nombre,personal_titulo,personal_puesto)values('$personal_nombre','$personal_titulo','$personal_puesto')";
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db

$resultado=$conexion->query($query);

if($resultado){
	header("location:cerrar.php");
}
else{
	echo"insercion no exitosa";
}
	



?>