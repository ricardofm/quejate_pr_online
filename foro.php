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
			<div id="nav_contact">
				<ul>
					<li><a class="links" href="index.php">Principal</a></li>
					<li class="links">Foro</li>
					<li><a class="links" href="atu_municipio.php">A tu Municipio</a></li>
					<li><a class="links" href="contacto.php">Contacto</a></li>
					<li><a class="links" href="ayuda.php">Ayuda</a></li>
				</ul>
			</div>
			<div id="nav2">
				<div id="login_"><a href="crear_cuenta.php">Crear cuenta</a></div>
			</div>
			<div id="nav3">
				<div id="signin_"><a href="inicio_sesion.php">Iniciar cuenta</a></div>
			</div>
		</nav>
		<aside>
			<div class="flags">
							<img id="pr_flag" src="pictures/pr_flag.png" alt="PR_Flag"/>
							<img id="us_flag" src="pictures/us_flag.png" alt="PR_Flag"/>
			</div>
		</aside>
		<article>
			<div id="caja-foro">		
			<form action="php_files/form_forum.php" method="post">		
			<fieldset>		
			<legend>Comenta:</legend>
			<textarea name="comenta" id="comenta" 
			rows="4" cols="60" ></textarea>
			</fieldset>
			<br />	
			<input type="submit" value="Publicar">
			<input type="reset" value="Restablecer">
			</form>
			</div>
			</article>
			<div id="public_box">
			<p><b>John_35364 escribió el 1/12/18 a las 8:19pm.
			<br /><br />Llevo 115 días sin luz y aún no he visto acción
			por parte del municipio de Adjuntas.</b></p>
			<p><b>Leila_pr!2 escribió el 1/12/18 a las 8:01pm.
			<br /><br />Empezando el año con dos gomas rotas por culpa
			de los cráteres en las calles. Ponganse pa' su número Mayita.</b></p>
			</div>
			<footer>
			<div id="footer2"><i>Copyright &copy; 2017-2018. Todos los derechos reservados.</i></div>
		</footer>
	</body>
</html>