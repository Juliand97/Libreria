
<html>
	<head>
		<p align="center">Clientes</p>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../Vista/css/clientes/formulario.css">
		<script src="../../Vista/js/validacion datos/registro_clientes/validar_cliente.js"></script>
	</head>
	
	<body oncontextmenu="return false">
		<form method="post" action="" onsubmit="return validar_Cliente();">
			<table>
				<tr>
					<td>
						<p>Identificacion</p>
						<input type = "number" name="doc" id="doc" placeholder="identificacion" onkeypress="return caracteres_U(event);"  >
					</td>

					<td>
						<p> Primer Nombre</p>
						<input type = "text" name="pnombre" id="pnombre" placeholder=" Primer Nombre" onkeypress="return caracteres(event);">
					</td>
				</tr>

				<tr>
					<td>
						<p> Segundo Nombre</p>
						<input type = "text" name="snombre" id="snombre" placeholder="Segundo Nombre" onkeypress="return caracteres(event);">	
					</td>
					<td>
						<p>Primer Apellido</p>
						<input type = "text" name="papellido" id="papellido" placeholder="Primer Apellido" onkeypress="return caracteres(event);" >	
					</td>	

				</tr>
				<tr>	
					<td>
						<p> Segundo Apellido</p>
						<input type = "text" name="sapellido" id="sapellido" placeholder="Segundo Apellido" onkeypress="return caracteres(event);" >	
					</td>
					<td>
						<p>Correo electronico</p>
					<input type = "email" name="email" id="email" placeholder="email" >	
					</td>
						
				</tr>
				<tr>
					<td colspan="2">
						<p>Contraseña</p>
					<input type = "password" name="pass" id="pass" placeholder="Contraseña" onkeypress="return contrasena(event);">

					</td>
					<td>
						<input type="hidden" name="permiso" value="cliente">
					</td>	

				</tr>
					
				<tr>
					<td colspan="2">
						<input type = "Submit" name="insert" value="Enviar registro" class="boton1"/>
		</form>
					</td>
				</tr>
			</table>
			<table>
				<tr>
					<td>
						<form method="post" action="../../Vista/pag_visitante.php">
							<input type="submit" value="Volver a la pagina principal" class="boton2">
						</form>
					</td>
				</tr>
			</table>
	</body>
</html>