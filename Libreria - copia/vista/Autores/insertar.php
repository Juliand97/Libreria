<?php
	include("../../controlador/seguridad pags.php");
	if(is_null($usuario) )
	{	
		
		echo "<Script>
		alert('Lo sentimos debe iniciar sesion para poder continuar') 
		window.location.replace('login-index.php')
		</script>";
		
	}
	else
	{		
	}
 ?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		<link rel="stylesheet" href="insertar.css">
	</head>
	<body> <!--background="imagenes/registro.jpg">-->
		<form name="form1" method="post" action="../../modelo/Autores/registrar.php">
		  <p align="center">Registro Autores</p>
		  <p>
			  <table width="600" border="1">
					  <tr>
					  <td>
						<label for="no_registro"></label>
						No.registro:<br><br>
						<input type="text" name="no_registro" id="no_registro" placeholder="Numero de registro">
				  </p>
					  </td>
				  <td>
					  <p>
						<label for="nombrea"></label>
						Nombre:<br> <br>
						<input type="text" name="nombrea" id="nombrea" placeholder="Nombre">
					  </p>
				  </td>
				  <tr>
					  <td>
						  <p>
							<label for="apellidoa">Apellido: </label><br>
							<input type="text" name="apellidoa" id="apellidoa" placeholder="Apellido">
						  </p>
					  </td>
					<td>
					  <p>
						<label for="nac">Nacionalidad: </label>
						<input type="text" name="nac" id="nac" placeholder="Nacionalidad">
					  </p>
					</td>
				  </tr>
				  <tr>
					  <td>
						<p>
						<label for="fechan">Fecha de nacimiento:   </label>
						<input type="date" name="fechan" id="fechan">
						</p>
					  </td>
					  <td>
						  <p>
							<label for="estadoa">Estado:   </label><br>
							<input type="text" name="estadoa" id="estadoa" placeholder="Estado">
						  </p>
					  </td>
					</tr>
					<tr>
					  <td>
						  <p>
							<label for="obras">Numero de Obras:   </label><br>
							<input type="text" name="obras" id="obras" placeholder="Numero de obras">
						  </p>
					  </td>
					</tr>
			</table>
			<input type="submit" name="Guardar" id="Guardar" class="boton1" value="Registrar">
		</form>
		<table width="200" border="0" align="center">
			<tr>
				<td>
					<form name="form2" method="post" action="../menureg.php">
						<input type="submit" name="borrar" id="borrar" value="regresar a Registros y Consultas" class="boton2"> 	
					</form>
				</td>
		</table>
	</body>
</html>