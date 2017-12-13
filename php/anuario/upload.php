<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
 session_start(); 
    if (!isset($_SESSION["usr_id"])) {
        header("Location: /titulosEscom");
        die();
    }
$id=$_SESSION['usr_id'];
<<<<<<< HEAD
=======
=======

>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
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
<<<<<<< HEAD
    	insert_img("uploads/",$handle->file_dst_name,1,$id,"0");
=======
<<<<<<< HEAD
    	insert_img("uploads/",$handle->file_dst_name,1,$id,"0");
=======
    	insert_img("uploads/",$handle->file_dst_name,1,2,"0");
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
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
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
	?><script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>     
	<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
<?php
	print "<h4>Imagenes agregadas con Exito!</h4>";
<<<<<<< HEAD
=======
=======
	print "<h4>Exito!</h4>";
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
	print "<ul><li><a href='./form.php'>Agregar mas</a></li>";
	print "<li><a href='./images.php'>Ver imagenes</a></li>";
}

?>