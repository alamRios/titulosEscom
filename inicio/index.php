<?php
    session_start(); 
    if (!isset($_SESSION["usr_id"])) {
        header("Location: /titulosEscom");
        die();
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
		<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script> 
		<script type="text/javascript" src="../js/slider.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script> 
		<script type="text/javascript" src="../js/slider.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>     
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <title></title>
    </head>
    <body>
<nav class="indigo">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Bienvenido</a>
      <ul class="left hide-on-med-and-down">
		  <?php if($_SESSION["usr_tipo"]):?>
        <li><a href="../php/Proyecto/proyecto.php">Crear Evento</a></li>
        <li><a href="../php/personal/cerrar.php">Modificar Personal</a></li>
        <li><a href="../php/anuario/images.php">Anuario</a></li>
		 <li><a href="../php/pdf.php">Pdf</a></li>
		  <?php else:?>
		<li><a href="">Evento</a></li>
		  <li><a href="../php/anuario/form.php">Seleccionar imagenes</a></li>
		  <?php endif;?>
      </ul>
    </div>
  </nav>
		 <div class="slider">
    <ul class="slides">
      <li>
        <img src="../img/marco.png"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="../img/35713143.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/3"> <!-- random image -->
        <div class="caption right-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <li>
        <img src="https://lorempixel.com/580/250/nature/4"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    </ul>
  </div>
    </body>
</html>