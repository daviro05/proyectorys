<!DOCTYPE HTML>
<html>
	<head>
		<title>Proyecto RyS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
							<h1>Proyecto RyS</h1>
						
						</header>
						<footer>
							<ul class="icons">
								<form action="logarse.php" method="post">
								  Usuario
								  <input type="text" name="usuario">
								  Password
								  <input type="password" name="password">
								  <br>
								  <input type="submit" name="login" value="Login">
								  <input id="Reg" type="button" name="registro" value="Registro">
								  <br>
								  <img id="btn_fb" src="./images/log_facebook.png">
								  <?php
									if( isset( $_GET['mensaje'] ) )
									  {
									  	if( $_GET['mensaje']=='correcto' )
									  	{
									  		echo "<p class='correcto'>Registro correcto</p>";
									  	}
									  	if( $_GET['mensaje']=='error1' )
									  	{
									  		echo "<p class='incorrecto'>Registro incorrecto</p>";
									  	}
									  	if( $_GET['mensaje']=='error2' )
									  	{
									  		echo "<p class='incorrecto'>Nombre no cumple requisitos</p>";
									  	}
									  	if( $_GET['mensaje']=='error3' )
									  	{
									  		echo "<p class='incorrecto'>Usuario ya registrado</p>";
									  	}
									  	if( $_GET['mensaje']=='error4' )
									  	{
									  		echo "<p class='incorrecto'>Email incorrecto o ya existe</p>";
									  	}
									  	if( $_GET['mensaje']=='error5' )
									  	{
									  		echo "<p class='incorrecto'>Los passwords no coinciden</p>";
									  	}
									  	if( $_GET['mensaje']=='error6' )
									  	{
									  		echo "<p class='incorrecto'>Rellena todos los campos</p>";
									  	}
									  	if( $_GET['mensaje']=='error7' )
									  	{
									  		echo "<p class='incorrecto'>Error al registrar por Facebook</p>";
									  	}
									  	if( $_GET['mensaje']=='error9' )
									  	{
									  		echo "<p class='incorrecto'>Error Usuario o Password</p>";
									  	}
									  	
									  }
									?>
								</form>
							</ul>
						</footer>
					</section>
					

					<!-- Modal para Registro -->
					<div id="myModal" class="modal">

					  <!-- Contenido del Modal de Registro -->
					  <div class="modal-content">
					    <span class="close">&times;</span>
					    <p class="centra">¡REGISTRATE EN MEMETIC!</p>
					    <form  id="contenido" action="registro.php" method="post">
					    Nombre de usuario
					    <input class="campo" type="text" name="nick">
					    Nombre
					    <input class="campo" type="text" name="nombre">
					    Apellidos
					    <input class="campo" type="text" name="apellidos">
					    Password
					    <input class="campo" type="password" name="password">
					    Repite password
					    <input class="campo" type="password" name="password2">
					    E-mail
					    <input class="campo" type="email" name="email">
					    <br>
					    <input type="submit" name="Registro" value="Registrarse"> <input type="reset" value="Borrar">
					    </form>
					  </div>

					</div>


					<!-- Modal para Facebook -->
					<div id="myModal_fb" class="modal">

					  <!-- Contenido del Modal de Facebook -->
					  <div class="modal-content-fb">
					    <span class="close_fb">&times;</span>
					    <p class="centra">¡CONECTATE CON FACEBOOK!</p>
					    <form  id="contenido" action="registro.php" method="post">
					    E-Mail
					    <input class="campo" type="email" name="email">
					    Password
					    <input class="campo" type="password" name="password">
					    <br>
					    <input class="btn_con" type="submit" name="RegistroFB" value="Conectarse">
					    </form>
					  </div>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; D.S.A Rolladores</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script src="assets/js/script.js"></script>
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>