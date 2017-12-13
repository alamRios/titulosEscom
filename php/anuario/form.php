<html>
	<head>
		<script type="text/javascript" src="../../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../../js/materialize.min.js"></script>     
	<link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
		<title>Anuario</title>
	</head>
	<body>
		<form enctype="multipart/form-data" method="post" action="upload.php">
			<blockquote>	
			<div class="file-field input-field">
      <div class="btn indigo">
      <div class="btn indigo">
      <div class="btn">
        <span>Seleccionar imagenes</span>
         <input name="image[]" required="" type="file" multiple />
		<br>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
			<button class="btn waves-effect waves-light indigo" type="submit" name="action">Enviar</button>
			<button class="btn waves-effect waves-light indigo" type="submit" name="action">Enviar</button>
			<button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
		</blockquote>
		</form>
	</body>

</html>
