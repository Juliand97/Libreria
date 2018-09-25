<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cambiar Clave</title>
	<link rel="stylesheet" type="text/css" href="../../Vista/css/cambiar_clave/c_clave.css">
	<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
</head>
<body>
	<form action="" method="post" class="form">
		<input type="number" name="id" id="id" placeholder=" Ingrese su numero de documento">
		<input type="password" name="pass" id="pass" placeholder="Ingrese nueva clave">
		<input type="password" name="vpass" id="vpass" placeholder="Verifique la clave">
		<input type="text" name="cod" id="cod" placeholder=" Ingrese el codigo de verificacion">
		<input type="submit" name="confirmar" class="enviar" value="Cambiar clave">
	</form>
	<form action="../../Vista/pag_visitante.php">
		<input type="submit" class="enviar" value="Volver a la pagina principal">
	</form>
</body>
</html>