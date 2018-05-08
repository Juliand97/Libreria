<?php
session_start();
include "base_de_datos.php";
if (isset($_session['name']))
{
	echo "<script> 
	window.location.replace('login-html.php');
</script>";
	
}
 ?>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="login.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class ="contenedor" align="center">
<img src="login/principal.png" class="imagen">
<form action="login.php" method="post">

<center>
<p>Usuario</p>
<input type="text" name="name" class="usuario" placeholder="ingrese su usuario " >
<p >contraseña</p>
<input type="password" name="contraseña" class="contraseña" placeholder="ingrese su contraseña" ><br><br>
<input type="submit"  name="submit" class="enviar" value="Iniciar Sesion" color="#000000">
</form>
</center></div>
</body>
</html>
