<?php
include "db.php";
$images = get_imgs();
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
$image=get_img($id);
?>
<html>
	<head>
	<script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
<<<<<<< HEAD
=======
=======
?>
<html>
	<head>
			<script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
    <script type="text/javascript" src="../../js/materialize.min.js"></script>     
	<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>

		<title>Anuario</title>
	</head>
	<body>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
		<h1>Anuario</h1>
		<a href="./form.php">Agregar mas</a>
		
		<?php if($_SESSION["usr_tipo"]):
	if(count($images)>0):?>
			<ul>
			<?php foreach($images as $img):?>
				<li><img class="materialboxed" width="650" src="<?php echo $img->evento_estudiante_foto_folder.$img->evento_estudiante_foto_src; ?>" style="width:240px;">
<<<<<<< HEAD
=======
=======
		<h1>Imagenes</h1>
		<a href="./form.php">Agregar mas</a> - <a href="./files.php">Archivos</a>
		<?php if(count($images)>0):?>
			<ul>
			<?php foreach($images as $img):?>
				<li><img src="<?php echo $img->evento_estudiante_foto_folder.$img->evento_estudiante_foto_src; ?>" style="width:240px;">
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
				<br>
					  <p>
				Alumno: <?php echo $img->evento_estudiante_foto_idestudiante;?>
				<a href="./download.php?id=<?php echo $img->idevento_estudiante_foto; ?>">Descargar</a> 
				<a href="./delete.php?id=<?php echo $img->idevento_estudiante_foto; ?>">Eliminar</a>
				<form method="post" action="bd.php">
					<?php if(($img->evento_estudiante_foto_valido)=="1"):?>		 
				<div><input type="checkbox" class="filled-in" id="filled-in-box" checked="checked"/>
					<label for="filled-in-box">Aceptar</label> </div><?php echo get_validar("0",$img->idevento_estudiante_foto);
					else:?>
					<div><input type="checkbox" class="filled-in" id="filled-in-box" />
      			<label for="filled-in-box">Aceptar</label></div> <?php echo get_validar("1",$img->idevento_estudiante_foto);
					endif;?>
					</form>
    				</p>
				</li>
			<?php endforeach;?>
			</ul>
		<?php else:?>
			<h4>No hay imagenes!</h4>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db
		<?php endif; 
		elseif(count($image)>0):?>
			<ul>
			<?php foreach($image as $imge):?>
				<li><img class="materialboxed" width="650" src="<?php echo $imge->evento_estudiante_foto_folder.$imge->evento_estudiante_foto_src; ?>" style="width:240px;">
				<br>
					  <p>
				Alumno: <?php echo $imge->evento_estudiante_foto_idestudiante;?>
				<a href="./download.php?id=<?php echo $imge->idevento_estudiante_foto; ?>">Descargar</a> 
				<a href="./delete.php?id=<?php echo $imge->idevento_estudiante_foto; ?>">Eliminar</a>
    				</p>
				</li>
			<?php endforeach;?>
			</ul>
		<?php else:?>
			<h4>No hay imagenes!</h4>?>


<?php endif; ?>

<<<<<<< HEAD
=======
=======
		<?php endif; ?>
>>>>>>> 43499fa378594a806cae9a7e6a59080eef00287d
>>>>>>> 1308092b8f21de9c4967c89300704c21fc7556db

	</body>

</html>
