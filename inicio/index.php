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
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <title></title>
    </head>
    <body>
		 <nav class="nav-extended">
    <div class="nav-wrapper">
		<a href="#" class="brand-logo">Bienvenido</a>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <?php// if($_SESSION["usr_tipo"]):?>
		  <li class="tab"><a href="#test1">Crear Evento</a></li>
          <li class="tab"><a class="" href="../php/personal/modificar.php">Modificar Personal</a></li>
		  <li class="tab"><a class="active" href="#test2">Anuario</a></li>
		  <?php// endif;?>
          <li class="tab"><a href="#test3">Eventos</a></li>
          <li class="tab"><a href="#test4"></a></li>
      </ul>
    </div>
  </nav>

    </body>
</html>