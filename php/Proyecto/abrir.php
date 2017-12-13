<?php
include("conexion.php");
$evento_titulo=$_POST['evento_titulo'];
$evento_lugar=$_POST['evento_lugar'];
$fecha=$_POST['fecha'];
$tiempo=$_POST['tiempo'];
$evento_fecha=$fecha.$tiempo;
$evento_invitadosPAlumno=$_POST['evento_invitadosPAlumno'];
$fechaL=$_POST['fechaL'];
$tiempoL=$_POST['tiempoL'];
$evento_fechaLimite=$fechaL.$tiempoL;
$evento_encavezado=$_POST['evento_encavezado'];
$evento_rutaImagen=$_POST['evento_rutaImagen'];
$evento_primerTexto=$_POST['evento_primerTexto'];
$evento_segundoTexto=$_POST['evento_segundoTexto'];
$evento_direccion=$_POST['evento_direccion'];
$evento_programa=$_POST['evento_programa'];

$query="INSERT INTO evento(evento_titulo,evento_lugar,evento_fecha,evento_invitadosPAlumno,evento_fechaLimite,evento_encavezado,evento_rutaImagen,evento_primerTexto,evento_segundoTexto,evento_direccion,evento_programa)values('$evento_titulo','$evento_lugar','$fecha.$tiempo','$evento_invitadosPAlumno','$fechaL.$tiempoL','$evento_encavezado','$evento_rutaImagen','$evento_primerTexto','$evento_segundoTexto','$evento_direccion','$evento_programa')";

$resultado=$conexion->query($query);






?>