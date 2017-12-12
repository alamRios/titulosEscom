<?php
include "db.php";
$images = get_imgs();
?>
<html>
	<head>
			<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>     
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

		<title>Mis imagenes</title>
	</head>
	<body>
		<h1>Anuario</h1>
		<a href="./form.php">Agregar mas</a> - <a href="./files.php">Archivos</a>
		<?php if(count($images)>0):?>
			<ul>
			<?php foreach($images as $img):?>
				<li><img src="<?php echo $img->folder.$img->src; ?>" style="width:240px;">
				<br>
				<a href="./delete.php?id=<?php echo $img->id; ?>">Eliminar</a>
				</li>
			<?php endforeach;?>
			</ul>
		<?php else:?>
			<h4>No hay imagenes!</h4>
		<?php endif; ?>

	</body>

</html>
