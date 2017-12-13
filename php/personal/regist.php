<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Personal</title>

<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/hola.css">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/index.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
<title>Personal</title>
<link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" >
	<link rel="stylesheet" type="text/css" href="../../css/hola.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/index.js"></script>
</head>
<body>
	<div>	 
	<form action="abrir.php" method="POST">
	<h1>Registro del Personal a Evento</h1>
		<label for="escuela">Selecciona</label>
		<select id="personal_escuela" required name="personal_escuela">
		<h1>Registro del Personal</h1>	
		<label for="titulo">Titulo</label>
		<select id="personal_titulo" required name="personal_titulo">
		<option> </option>
		<option>Instituto Politecnico Nacional</option>
		<option>Escuela Superior de Computo</option>
		</select>
	
		
		<label for="cargo">Cargo</label>
		<select id="personal_puesto" required name="personal_puesto">
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
		<label for="titulo">Titulo</label>
		<select id="personal_titulo" required name="personal_titulo">
		<option> </option>
		<option>Dr.</option>
		<option>Lic.</option>
		<option>Ing.</option>
		<option>Mtro.</option>
		<option>M. en C.</option>
		<option>Dra.</option>
		</select>
	<label for="nombre">Nombre</label>
	<input type="text" required name="personal_nombre" placeholder="Nombre..."value="" />	
	<input type="submit" value="aceptar" />
	
	
	</form>
		
	
	</div>
	
	
</body>
</html>
