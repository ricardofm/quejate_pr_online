<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Quéjate PR Online</title>
		<meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="module1.css"/>
		<link type="image/png" rel="icon" href="pictures/icon.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header>
			<div id="header">
					<h1>¡Bienvenidos a <i>Quéjate <span id="puerto">P</span><span 
					id="rico">R</span> Online</i>!</h1>
					<h2>Un sitio en donde puedes hacer saber tus reclamos...</h2>
			</div>
		</header>
	
		<nav>
			<div id="nav">
				<ul>
					<li><a class="links" href="index.php">Principal</a></li>
					<li><a class="links" href="foro.php">Foro</a></li>
					<li><a class="links" href="atu_municipio.php">A tu Municipio</a></li>
					<li><a class="links" href="contacto.php">Contacto</a></li>
					<li><a class="links" href="ayuda.php">Ayuda</a></li>
				</ul>
			</div>
			<div id="nav2">
				<div id="login"><a href="crear_cuenta.php">Crear cuenta</a></div>
			</div>
			<div id="nav3">
				<div id="signin">Iniciar cuenta</div>
			</div>
		</nav>
		<aside>
			<div class="flags">
							<img id="pr_flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Flag_of_Puerto_Rico.svg/800px-Flag_of_Puerto_Rico.svg.png" alt="PR_Flag"/>
							<img id="us_flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/1235px-Flag_of_the_United_States.svg.png" alt="PR_Flag"/>
			</div>
		</aside>
		<article>
			<form method="post">
				<div class="username2"><label for="username2">Email/Username:</label><br />
				<input type="text" name="username2" id="username2"
				size="15" maxlength="20" tabindex="1" required="required"></div>
				<br />
				<div class="password2"><label for="password2">Password:</label><br />
				<input type="password" name="password2" id="password2"
				size="12" maxlength="20" tabindex="2" required="required"></div>
				<br /><br />
				<div class="iniciar_reset_button">
				<input type="submit" value="Iniciar">
				<input type="reset" value="Restablecer"></div>
		</form>
		
		</article>
		<footer>
			<div id="footer6"><i>Copyright &copy; 2017-2018. Todos los derechos reservados.</i></div>
		</footer>
	</body>
</html>