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
					<li class="links">A tu Municipio</li>
					<li><a class="links" href="contacto.php">Contacto</a></li>
					<li><a class="links" href="ayuda.php">Ayuda</a></li>
				</ul>
			</div>
			<div id="nav2">
				<div id="login"><a href="crear_cuenta.php">Crear cuenta</a></div>
			</div>
			<div id="nav3">
				<div id="signin"><a href="inicio_sesion.php">Iniciar cuenta</a></div>
			</div>
		</nav>
		<aside>
			<div class="flags">
							<img id="pr_flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Flag_of_Puerto_Rico.svg/800px-Flag_of_Puerto_Rico.svg.png" alt="PR_Flag"/>
							<img id="us_flag" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/1235px-Flag_of_the_United_States.svg.png" alt="PR_Flag"/>
			</div>
		</aside>
		<article>
			<form action="php_files/form_municipio.php" method="post">
			<div class="pueblos2"><label for="pueblos">Pueblo en donde surge o la situación:</label><br />
			<select name="pueblos" id="pueblos" tabindex="3">
			<option selected>Selecciona el pueblo</option>
			<option>Adjuntas</option>
			<option>Aguada</option>
			<option>Aguadilla</option>
			<option>Aguas Buenas</option>
			<option>Aibonito</option>
			<option>Añasco</option>
			<option>Arecibo</option>
			<option>Arroyo</option>
			<option>Barceloneta</option>
			<option>Barranquitas</option>
			<option>Bayamón</option>
			<option>Cabo Rojo</option>
			<option>Caguas</option>
			<option>Camuy</option>
			<option>Canóvanas</option>
			<option>Carolina</option>
			<option>Cataño</option>
			<option>Cayey</option>
			<option>Ceiba</option>
			<option>Ciales</option>
			<option>Cidra</option>
			<option>Coamo</option>
			<option>Comerío</option>
			<option>Corozal</option>
			<option>Culebra</option>
			<option>Dorado</option>
			<option>Fajardo</option>
			<option>Florida</option>
			<option>Guánica</option>
			<option>Guayama</option>
			<option>Guayanilla</option>
			<option>Guaynabo</option>
			<option>Gurabo</option>
			<option>Hatillo</option>
			<option>Hormigueros</option>
			<option>Humacao</option>
			<option>Isabela</option>
			<option>Jayuya</option>
			<option>Juana Díaz</option>
			<option>Juncos</option>
			<option>Lajas</option>
			<option>Lares</option>
			<option>Las Marías</option>
			<option>Las Piedras</option>
			<option>Loíza</option>
			<option>Luquillo</option>
			<option>Manatí</option>
			<option>Maricao</option>
			<option>Maunabo</option>
			<option>Mayagüez</option>
			<option>Moca</option>
			<option>Morovis</option>
			<option>Naguabo</option>
			<option>Naranjito</option>
			<option>Orocovis</option>
			<option>Patillas</option>
			<option>Peñuelas</option>
			<option>Ponce</option>
			<option>Quebradillas</option>
			<option>Rincón</option>
			<option>Río Grande</option>
			<option>Sabana Grande</option>
			<option>Salinas</option>
			<option>San Germán</option>
			<option>San Juan</option>
			<option>San Lorenzo</option>
			<option>San Sebastián</option>
			<option>Santa Isabel</option>
			<option>Toa Alta</option>
			<option>Toa Baja</option>
			<option>Trujillo Alto</option>
			<option>Utuado</option>
			<option>Vega Alta</option>
			<option>Vega Baja</option>
			<option>Vieques</option>
			<option>Villalba</option>
			<option>Yabucoa</option>
			<option>Yauco</option>
		</select>
		</div>
		<div class="email"><label for="e-mail">Email:</label><br />
		<input type="email" name="e-mail" id="e-mail"
		tabindex="1">
		</div>
		<div class="tel"><label for="tel">Teléfono:</label><br />
		<input type="tel" name="tel" id="tel"
		tabindex="2">
		</div>
		<div class="problema"><label for="problema">Problema:</label><br />
		<textarea name="problema" id="problema" 
		rows="15" cols="40">Indique su situación.</textarea>
		<br />
		<input type="submit" value="Enviar">
		<input type="reset" value="Restablecer"></div>
		</form>
		
		</article>
		<footer>
			<div id="footer3"><i>Copyright &copy; 2017-2018. Todos los derechos reservados.</i></div>
		</footer>
	</body>
</html>