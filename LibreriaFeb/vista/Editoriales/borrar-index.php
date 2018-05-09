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
		<link rel="stylesheet" href="borrar.css">
	</head>
<body>
<form name="form1" method="post" action="../../modelo/Editoriales/borrar.php">
  <p>Formulario de Borrado</p>
  <p>Digite el codigo postal que desea borrar</p>
  <table width="400" border="1">
    <tbody><tr>
      <td>codigo postal:</td>
      <td><input type="int" name="codigo_postal" id="codigo_postal"></td>
    </tr>
	</table>
	<table width="400">
    <tr>
      <td><input type="submit" name="Guardar" id="Guardar" value="Enviar" class="boton1"></td>
    </tr>
  </tbody></table>
  
</form>
</body></html>