<html>
	<head>
	<meta charset="UTF-8">
		<script language="javascript">
			function enviar()
			{ 
				var campo1=document.f1.i1.value;
				var campo2=document.f1.i2.value;
				alert(campo1);
			}
		</script>
	<link rel="stylesheet" href="login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class ="contenedor" align="center">
			<img src="login/principal.png" class="imagen">
			<form action="../controlador/login.php" method="post" id ="f1">
				<center>
				<p>Usuario</p>
				<input type="text" name="name" class="usuario" placeholder="ingrese su usuario " id="i1" required   >
				<p >contraseña</p>
				<input type="password" name="contraseña" class="contraseña" placeholder="ingrese su contraseña" id="i2" required ><br><br>
				<input type="submit"  name="submit" class="enviar" value="Iniciar Sesion" onclick="enviar()" color="#000000">
				<br><br>
				<a href="pag_cliente.php"> <font color="#FFFFFF">Volver al inicio</a>
				</center>
			</form>
		</div>
	</body>
</html>
