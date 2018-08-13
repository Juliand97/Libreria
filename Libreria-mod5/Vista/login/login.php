<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio de sesión</title>
	<link rel="stylesheet" href="../../Vista/css/login/logu.css">
	<link rel="stylesheet" href="../../Vista/css/login/log1.css">
	<link rel="stylesheet" href="../../Vista/css/login/fonts/style.css">
</head>
<body>
	<div class="contenedor">
	<center>
		<div class="contend" id="posC">
			<div class="iconU">
				<form action="" method="post" id="f1">
				<input type="text" name="name" placeholder="Numero de identificacion" id="i1" required>
				<i class="icon-user" aria-hidden="true"></i>
			</div>	
			<div class="iconK">
				<form action="../controlador/login.php" method="post" id="f1">	
				<input type="password" placeholder="Ingrese su contraseña" name="contraseña" id="i2" required>
				<i class="icon-key" aria-hidden="true"></i>
			</div>
			<div class="boton">
				<form action="" method="post" id="f1">
				<input type="submit" name="submit" value="Iniciar Sesión" onclick="enviar()">
			</div>
			<div class="boton2">
				<input type="button" value="Volver a la pagina principal" onclick="window.location.href='../../Vista/pag_visitante.php'" class="input" >
			</div>
		</form>
	</div>
</body>
</html>