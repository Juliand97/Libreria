<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="device-width", user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0>
		<title>¿Olvidó Su Contraseña?</title>
		<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
		<!--estilos formulario-->
		<link rel="stylesheet" type="text/css" href="../../Vista/correo/formulario.css">

	</head>
	<body>
		<p class="p">Cambiar de contraseña</p>
		<form action="" method="post" class="form">
			<input type="number" name="identificacion" id="identificacion" placeholder="Escriba su numero de identificacion" class="id">
			<input type="text" placeholder="nombre" name="user" class="user" >
			<input type="email" placeholder="correo" name="email" class="pass" required>
			<input type="submit" name="envio" class="envio" value="Enviar informacion">
			<a href="cambiar_ctrl.php" style="color:#FFF;">Si ya tiene su codigo ingrese aqui</a>
		</form>
		<form action="../../Vista/pag_visitante.php" method="post">
			<input type="submit" name="volver" value="Regresar a la pagina principal" class="envio">
		</form>

	</body>
</html>