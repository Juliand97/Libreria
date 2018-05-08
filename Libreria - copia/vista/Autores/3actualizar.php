<?php
	include("../../controlador/seguridad pags.php");
	if(is_null($usuario) )
	{	
		
		echo "<Script>
		alert('Lo sentimos debe iniciar sesion para poder continuar') 
		window.location.replace('../login-index.php')
		</script>";
		
	}
	else
	{		
	}
 ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="3actualizar.css">
</form></form>
<body background="imagenes/actualizar.jpg" text="#FFFFFF">
<form name="form1" method="post" action="../../controlador/1actualizartraer.php">
  <p align="center">Actualizar Datos</p>
  <table width="415" border="1">
    <tr>
      <td>No.Registro:</td>
      <td><input type="text" name="no_registro" id="no_registro"></td>
	</tr>
  </table>
  <input type="submit" name="Guardar" id="Guardar" value="Enviar" class="boton">
</form>
<form action="../menureg.php" method="post">
<input type="submit" value="Volver a Registro y consulta" class="boton1">
</form>
</body>
</html>