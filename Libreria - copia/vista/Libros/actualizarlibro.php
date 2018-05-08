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
		echo "das";
		
	}
 ?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Actualización de libros</title>
	<link rel="stylesheet" type="text/css" href="act.css">
</head>

<body>

	<form name="form1" method="post" action="../../modelo/Libros/actualizarlibro1.php?tipo=registrar">
	
		<h1>Ingrese el ISBN del libro que desea actualizar</h1>
		<h2>ISBN del libro:</h2>
		<input type="bigint" name="isbn" id="isbn" placeholder="ISBN">
		<input type="submit" name="Guardar" id="Guardar" value="Enviar" class="boton">
			
			<form method="post" action= "../menureg.php">
				<input type="submit" value="Menu registro y consulta" class="boton">
            </form>
	</form>
</body>
</html>
