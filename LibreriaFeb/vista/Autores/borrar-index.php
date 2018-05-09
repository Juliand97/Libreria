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
<meta charset ="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="borrar.css">
</head>

<body  text="#FFFFFF">
<form name="form1" method="post" action="borrar.php">
  <p align="center">Formulario de eliminacion de autores</p>
  <p align="center">Digite el numero de registro que desea borrar</p>
  <table width="362" border="1">
    <tbody><tr>
      <td>No.registro:</td>
      <td><input type="text" name="no_registro" id="id"></td>
    </tr>
  </tbody>
  </table>
  <input type="submit" name="borrar" id="borrar" value="Borrar" class="boton1">
</form>
</body>
</html>