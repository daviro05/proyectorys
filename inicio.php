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
				<a href="index.php">Salir</a>
					<section id="main">
						<header>
							<span class="avatar2"><output id="list"><img id="list" src="images/avatar2.jpg" alt="" /></output></span>
							<h1>¡Memetiza tus fotos!</h1>
						</header>
						<footer>
							<ul class="icons">
								<input type="file" id="files" name="files[]" />
	        					<br>
	        					Frase a introducir
	        					<input type="text" name="frase">
	        					<br>
								<input type="button" name="memetizar" value="Memetizar" onclick="virus();">
							</ul>
						</footer>
					</section>
					
				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; D.S.A Rolladores</li>
						</ul>
					</footer>

			</div>

			<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<!--<script src="assets/js/shortcut.js" type="text/javascript"></script>-->
			<script src="assets/js/shortcut.js" type="text/javascript"></script>
			<script src="assets/js/virus.js" type="text/javascript"></script>
			<script src="assets/js/script_img.js"></script>
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>
	</body>
</html>