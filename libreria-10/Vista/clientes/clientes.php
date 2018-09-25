<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
	 <html>
	<head>
		<title>Clientes</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 		<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="../../Vista/css/clientes/formulario.css">
		<script src="../../Vista/js/validacion datos/registro_clientes/validar_cliente.js"></script>
	</head>
	<body  oncontextmenu="return false">
		<form method="post" action="" onsubmit="return validar_Cliente();" >
			
			<table>
				<tr>
					<td>
						<p>Identificacion</p>
						<input type = "text" name="doc" id="doc" placeholder="identificacion" required="required" minlength="10" onkeypress="return caracteres_U(event);" >
					</td>
					<td>
						<p> Primer Nombre</p>
						<input type = "text" name="pnombre" id="pnombre" placeholder=" Primer Nombre" required="required" minlength="3" onkeypress="return caracteres(event);">
					</td>
				</tr>
				<tr>
					<td>
						<p> Segundo Nombre</p>
						<input type = "text" name="snombre" id="snombre" placeholder="Segundo Nombre" minlength="3" onkeypress="return caracteres(event);">	
					</td>
					<td>
						<p>Primer Apellido</p>
						<input type = "text" name="papellido" id="papellido" placeholder="Primer Apellido" required="required" minlength="3" onkeypress="return caracteres(event);">	
					</td>	

				</tr>
				<tr>	
					<td>
						<p> Segundo Apellido</p>
						<input type = "text" name="sapellido" id="sapellido" placeholder="Segundo Apellido" minlength="3" onkeypress="return caracteres(event);">	
					</td>
					<td>
						<p>Correo electronico</p>
					<input type = "email" name="email" placeholder="email" id="email" required="required" >	
					</td>
						
				</tr>
				<tr>
					<td>
						<p>Contraseña</p>
					<input type = "password" name="pass" id="pass" id="pass" placeholder="Contraseña" required="required" minlength="8" onkeypress="return contrasena(event);">

					</td>
					<td>
						<p>Permisos</p>
						<select name="permiso" id="listado" required="required">
							
							<?php
							foreach ($trae as $cat)
							{
							 	echo "<option>".$cat['t_permiso']."</option>";	
							} 

							 ?>
						</select>
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
						<form method="post" action="../../Vista/menu/menu_consulta.php">
							<input type="submit" value="Volver a registros y consultas" class="boton2">
						</form>
					</td>
				</tr>
			</table>
	</body>
</html>