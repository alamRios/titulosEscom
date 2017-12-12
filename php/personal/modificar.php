<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>modificar</title>
	<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../../css/hola.css">

<script src="js/jquery-3.2.1.min.js"></script>

<script src="../../js/index.js"></script>
</head>

<body>
	<?php
		
		   $idpersonal=$_REQUEST['idpersonal'];
		
				include("conexion.php");
		
				$query="SELECT * FROM personal WHERE idpersonal='$idpersonal'";
				$resultado=$conexion->query($query);
				$row=$resultado->fetch_assoc();
				
				?>
	<div>
	<form action="modificar_p.php?idpersonal=<?php echo $row['idpersonal']; ?>" method="POST">
		<label for="titulo">Titulo</label>
		<select id="personal_titulo" required name="personal_titulo">
		<option> </option>
		<option>Instituto Politecnico Nacional</option>
		<option>Escuela Superior de Computo</option>
		</select>
	
		
		<label for="cargo">Cargo</label>
		<select id="personal_puesto" required name="personal_puesto" value="<?php echo $row['personal_puesto']; ?>">
		<option> </option>
		<option>Director General</option>
		<option>Secretario General</option>
		<option>Secretario Acad&eacute;mico</option>
		<option>Secretario de Investigaci&oacute;n y Posgrado</option>
		<option>Secretario de Extensi&oacute;n e Integraci&oacute;n Social</option>
		<option>Secretario de Servicios Educativos</option>
		<option>Secretario de Gesti&oacute;n Estrat&eacute;gica</option>
		<option>Secretario de Administraci&oacute;n</option>
		<option>Secretario General</option>
		<option>Secretario Ejecutivo de la Comisi&oacute;n de Operaciones y Fomento de Actividades Acad&eacute;micas</option>
		<option>Secretario Ejecutivo del Patronato de Obras e Instalaciones</option>
		<option>Director de Educaci&oacute;n Superior</option>
		<option>Director</option>
		<option>Subdirecci&oacute;n Academica</option>
		<option>Jefe(a)de la Secci&oacute;n de Estudios de Posgrado e Investigaci&oacute;n </option>
		<option>Subdirector(a)de Servicios Educativos e Integraci&oacute;n Social</option>
		<option>Subdirector(a)Administrativo(a)</option>
		<option>Profesor Decano</option>
		<option>Jefe del Depto.de Formaci&oacute;n Integral e Institucional</option>
		<option>Jefe del Depto.de Formaci&oacute;n B&aacute;sica</option>
		<option>Jefe del Depto.de Ciencia e Ingenieria de la Computaci&oacute;n</option>
		<option>Jefe del Depto.de Ingenieria en Sistemas Computacionales</option>
		</select>
		
	<label for="nombre">Nombre</label>
	<input type="text" required name="personal_nombre" placeholder="Nombre..." value="<?php echo $row['personal_nombre']; ?>">
	
	<input type="submit" value="aceptar" />
	
	
	
	</form>
		</div>
</body>
</html>
