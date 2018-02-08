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
				<div id="login">Crear cuenta</div>
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
			<form action="form_newAccount.php" method="post">
			<div class="nombre"><label for="nombre">Nombre:</label><br />
			<input type="text" name="nombre" id="nombre" required="required"
			size="7" maxlength="15" tabindex="1"></div><br />
			<div class="apellido_p"><label for="apellido">Apellido paterno:</label><br />
			<input type="text" name="apellido" id="apellido"
			size="15" maxlength="20" tabindex="2" required="required"></div><br />
			<div class="apellido_m"><label for="apellido2">Apellido materno:</label><br />
			<input type="text" name="apellido2" id="apellido2"
			size="15" maxlength="20" tabindex="3" required="required"></div>
			<div class="inicial"><label for="inicial">Inicial:</label><br />
			<input type="text" name="inicial" id="inicial" 
			size="2" maxlength="1" tabindex="4"></div><br />
			<div class="edad"><label for="edad">Edad:</label><br />
			<input type="number" name="edad" id="edad"
			min="1" max="120" tabindex="7"></div><br />
			<div class="pueblos"><label for="pueblos">Pueblo:</label><br />
			<select name="pueblos" id="pueblos" tabindex="5">
				<option selected>Selecciona tu pueblo</option>
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
			<div class="address"><label for="address">Dirección:</label><br />
			<input type="text" name="address" id="address"
			size="18" maxlength="50" tabindex="6" required="required"></div>
			<br />
			<div class="genero"><label for="genero">Género:</label><br />
			<select name="genero" id="genero" tabindex="8">
			<option selected>Selecciona tu sexo</option>
			<option>Femenino</option>
			<option>Masculino</option>
			</select>
			</div>
			<div class="email2"><label for="e-mail2">Email:</label><br />
			<input type="email" name="e-mail2" id="e-mail2"
			tabindex="9">
			</div>
			<div class="username"><label for="username">Username:</label><br />
			<input type="text" name="username" id="username"
			size="15" maxlength="20" tabindex="10" required="required"></div>
			<br />
			<div class="password"><label for="password">Password:</label><br />
			<input type="password" name="password" id="password"
			size="12" maxlength="20" tabindex="11" required="required"></div>
			<br />
			<div class="conf_password"><label for="conf_password">Confirmar Password:</label><br />
			<input type="password" name="conf_password" id="conf_password"
			size="12" maxlength="20" tabindex="11" required="required"></div>
			<br />
			<div class="crear_reset_button">
			<input type="submit" value="Crear">
			<input type="reset" value="Restablecer"></div>
		</form>
		
		</article>
		<footer>
			<div id="footer3"><i>Copyright &copy; 2017-2018. Todos los derechos reservados.</i></div>
		</footer>
	</body>
</html>