<?php
 session_start(); 
    if (!isset($_SESSION["usr_id"])) {
        header("Location: /titulosEscom");
        die();
    }
$id=$_SESSION['usr_id'];
include "db.php";
include "class.upload.php";

/// mostrar errores
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$error = false;

$files = array();
foreach ($_FILES['image'] as $k => $l) {
 foreach ($l as $i => $v) {
 if (!array_key_exists($i, $files))
   $files[$i] = array();
   $files[$i][$k] = $v;
 }
}

foreach ($files as $file) {
  $handle = new Upload($file);
  if ($handle->uploaded) {
    $handle->Process("uploads/");
    if ($handle->processed) {
    	// usamos la funcion insert_img de la libreria db.php
    	insert_img("uploads/",$handle->file_dst_name,1,$id,"0");
    } else {
	  $error = true;
      echo 'Error: ' . $handle->error;
    }
  } else {
   	$error = true;
    echo 'Error: ' . $handle->error;
  }
  unset($handle);
}   

if(!$error){
	?><script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>     
	<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<?php
	print "<h4>Imagenes agregadas con Exito!</h4>";
	print "<ul><li><a href='./form.php'>Agregar mas</a></li>";
	print "<li><a href='./images.php'>Ver imagenes</a></li>";
}

?>