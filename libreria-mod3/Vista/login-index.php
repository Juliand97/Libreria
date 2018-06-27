<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script language="javascript">
		function enviar(){ 
			var campo1=document.f1.i1.value;
			var campo2=document.f1.i2.value;
			alert(campo1);
		}
	</script>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Css/Logn/logu.css">
	<link rel="stylesheet" type="text/css" href="Css/Logn/fonts/style.css">
	<link rel="stylesheet" type="text/css" href="Css/Logn/log1.css">
	<meta name="viewport" content="width=device-width, user-sacalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
</head>
<body>
<div class="contenedor">
	<center>
		<div class="contend" id="posC">
			<!--<div class="library">
				<input type="image" src="fondo/library.png" class="btnL">
			</div>-->
			<div class="iconU">
				<form action="../controlador/login.php" method="post" id="f1">
				<input type="text" name="name" placeholder="Nombre de usuario" id="i1" required>
				<i class="icon-user" aria-hidden="true"></i>
			</div>	
			<div class="iconK">
				<form action="../controlador/login.php" method="post" id="f1">	
				<input type="password" placeholder="Ingrese su contraseña" name="contraseña" id="i2" required>
				<i class="icon-key" aria-hidden="true"></i>
			</div>
			<div class="boton">
				<form action="../controlador/login.php" method="post" id="f1">
				<input type="submit" name="submit" value="Iniciar Sesión" onclick="enviar()">
			</div>
			<div class="boton2">
				<input type="button" value="Volver a la pagina principal" onclick="window.location.href='pag_cliente.php'" class="input" >
			</div>
		</form>
	</div>
			<!--div class="volver">
				<br>
				<a href="pag_cliente.php">Volver al Inicio</a>
			</div-->
		</div>
	</center>
	</form>
</div>
</body>
</html>