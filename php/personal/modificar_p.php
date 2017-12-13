<?php
include("conexion.php");
$idpersonal=$_REQUEST['idpersonal'];
$personal_titulo=$_POST['personal_titulo'];
$personal_puesto=$_POST['personal_puesto'];
$personal_nombre=$_POST['personal_nombre'];
		
$query="UPDATE personal SET personal_titulo='$personal_titulo',personal_puesto='$personal_puesto',personal_nombre='$personal_nombre' WHERE idpersonal='$idpersonal'";

$resultado=$conexion->query($query);

if($resultado){
	header("location:cerrar.php");
}
else{
	echo"insercion no exitosa";
}
	



?>
