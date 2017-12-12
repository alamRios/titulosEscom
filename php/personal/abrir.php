<?php
include("conexion.php");
$personal_titulo=$_POST['personal_titulo'];
$personal_puesto=$_POST['personal_puesto'];
$personal_nombre=$_POST['personal_nombre'];
		
$query="INSERT INTO personal(personal_nombre,personal_titulo,personal_puesto)values('$personal_nombre','$personal_titulo','$personal_puesto')";

$resultado=$conexion->query($query);

if($resultado){
	header("location:cerrar.php");
}
else{
	echo"insercion no exitosa";
}
	



?>