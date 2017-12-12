<?php
include("conexion.php");
$idpersonal=$_REQUEST['idpersonal'];
$query="DELETE FROM personal  WHERE idpersonal='$idpersonal'";

$resultado=$conexion->query($query);

if($resultado){
	header("location:cerrar.php");
}
else{
	echo"insercion no exitosa";
}
	



?>
