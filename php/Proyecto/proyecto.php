<!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="js/validetta101/validetta.min.css">
      <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
	  <link rel="stylesheet" type="text/css" href="fontAwesome/css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="formcss.css">
	  <link rel="stylesheet" type="text/css" href="index.css">
      <script src="js/jquery-3.1.1.min.js"></script>
	  <script src="formularioAJAX.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
	  <script src="js/index.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script src="js/validetta101/validetta.min.js"></script>
	  <script src="js/validetta101/localization/validettaLang-es-ES.js"></script>
    </head>

  <body>
	  <section id="contenidos">
		<div class="container">
			<p><a href="#modalAcc" id="btnAcc" class="btn blue modal-trigger">Registrar evento</a></p>
		</div>
	  </section>
	  <section>
	  	<img src="load.gif" id="load">
 	  	<div id="respAX"></div> 
	  </section>
<!---------------------------Modals-------------------------------->
<div id="modalAcc" class="modal">
    <div class="modal-content">
      	<div class="container">
        	<div class="row">
            	<form id="formAcc" method="POST" action="abrir.php">
					<div class="row">
						<div class="input-field col s6" >
          					<input id="evento_titulo" name = "evento_titulo" type="text" class="validate" required="" aria-required="true" data-length="45">
          					<label for="evento_titulo" data-error="wrong" data-success="right">Titulo del evento</label>
        				</div>
                		<div class="input-field col s6">
                    		<input id="evento_lugar" name ="evento_lugar" type="text" class="validate" required="" aria-required="true" data-length="45">
          					<label for="evento_lugar" data-error="wrong" data-success="right">Lugar</label>
                    	</div>
					</div>
                    <div class="row col s6">
        					<input id="fecha" name="fecha" type="date" class="datepicker">
							<label for="fecha" data-error="wrong" data-success="right">Fecha</label>
					</div>
					<div class="row col s6">
        					<input id="tiempo" name="tiempo" type="time" class="timepicker">
							<label for="tiempo" data-error="wrong" data-success="right">Hora</label>
					</div>
					<div class="row">
						<div class="input-field col s6">
                    		<input id="evento_invitadosPAlumno" type="number" name = "evento_invitadosPAlumno" class="validate" required="" aria-required="true" data-length="1">
          					<label for="evento_invitadosPAlumno" data-error="wrong" data-success="right">Invitados por alumno</label>
                    	</div>
						<div class="input-field col s6">
                    		<input id="evento_encavezado" name = "evento_encavezado" type="text" class="validate" required="" aria-required="true" data-length="45">
          					<label for="evento_encavezado" data-error="wrong" data-success="right">Encabezado</label>
                    	</div>
					</div>
					<div class="row">
					<div class="row col s6">
        					<input id="fechaL" name="fechaL" type="date" class="datepicker">
							<label for="fechaL" data-error="wrong" data-success="right">Fecha limite confirmacion</label>
						
					</div>
					<div class="row col s6">
        					<input id="tiempoL" name="tiempoL" type="time" class="timepicker">
							<label for="tiempoL" data-error="wrong" data-success="right">Hora final confirmacion</label>
					</div>
					</div>
					
						<div class="input-field">
   							<div class="file-field input-field">
      							<div class="btn">
        							<span>Imagen</span>
        							<input type="file">
      							</div>
      							<div class="file-path-wrapper">
        							<input class="file-path validate" id = "evento_rutaImagen" name="evento_rutaImagen" type="text">
      							</div>
    						</div>
						</div>
					
					<div class="input-field">
                    	<input id="evento_direccion" type="text" name = "evento_direccion" class="validate" required="" aria-required="true" data-length="50">
          				<label for="evento_direccion" data-error="wrong" data-success="right">Direccion</label>
                    </div>
					<div class="row">
        				<div class="input-field">
          					<textarea id="evento_primerTexto" name="evento_primerTexto" class="materialize-textarea" data-length="120"></textarea>
           					<label for="evento_primerTexto" data-error="wrong" data-success="right">1er texto</label>
       	 				</div>
      				</div>
					<div class="row">
        				<div class="input-field">
          					<textarea id="evento_segundoTexto" name="evento_segundoTexto" class="materialize-textarea" data-length="120"></textarea>
           					<label for="evento_segundoTexto" data-error="wrong" data-success="right">2do texto</label>
       	 				</div>
      				</div>
					<div class="row">
        				<div class="input-field">
          					<textarea id="evento_programa" name="evento_programa" class="materialize-textarea" data-length="500"></textarea>
           					<label for="evento_programa" data-error="wrong" data-success="right">Programa</label>
       	 				</div>
      				</div>
					<div class="row">
                   		<div class="input-field">
                    		 <button id="btnAcc" class="btn waves-effect waves-light" type="submit" name="action">Submit
        							<i class="material-icons right">cloud</i>
    						</button>
                    	</div>
					</div>
                </form>
            </div>
      	</div>
    </div>
</div>

	  
</body>
	  
</html>

