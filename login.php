<?php
session_start();




?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="logincss.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>




<div id="login-box">
	
	<img id="avatar" src="ImagenesLogin/poro.png" alt="Logo poroterra">
	<h1>INICIO DE SESION</h1>

	<form method="post" action="sesion.php">
		
		<!-- CORREO-->
		<label for="correo">CORREO</label>
		<input type="email" name="correo" placeholder="Ingrese su Correo">

		<!-- PASSWORD-->
		<label for="password">PASSWORD</label>
		<input type="password" name="password" placeholder="Ingrese su Contraseña">

		<input type="submit" name="submit" value="INGRESAR">

		<a href="registro.php">REGISTRASE</a>

	</form>

</div>

</body>
</html>