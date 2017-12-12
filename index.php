<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ESCOM - TITULOS</title>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

	  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/materialize.min.js"></script>
	  <script type="text/javascript" src="js/index1.js"></script>
          <script type="text/javascript" src="js/sweetalert2.all.js"></script>
  </head>
  <body>
  	<div class="section"></div>
	  <main>
		<center>
		  <div class="section"></div>

		  <h5 class="indigo-text">Bienvenido al sistema</h5>
		  <div class="section"></div>

		  <div class="container">
			<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

			  <form class="col s12" id="loginForm">
				<div class='row'>
				  <div class='col s12'>
				  </div>
				</div>

				<div class='row'>
				  <div class='input-field col s12'>
					<input class='validate' type='text' name='usr_boleta' id='usr_boleta' />
					<label for='usr_boleta'>Ingrese su boleta</label>
				  </div>
				</div>

				<div class='row'>
				  <div class='input-field col s12'>
					<input class='validate' type='password' name='usr_pass' id='usr_pass' />
					<label for='usr_pass'>Ingrese su contraseña</label>
				  </div>
				  <!--label style='float: right;'>
									<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
								</label-->
				</div>

				<br />
				<center>
				  <div class='row'>
					<button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Ingresar</button>
				  </div>
				</center>
			  </form>
			</div>
		  </div>
		</center>

		<div class="section"></div>
		<div class="section"></div>
	  </main>
  </body>
</html>
