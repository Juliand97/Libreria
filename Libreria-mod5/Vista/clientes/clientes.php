<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
	 <html>
	<head>
		<p align="center">Clientes</p>
		<meta charset="utf-8">
		<link rel="stylesheet" href="../../Vista/css/clientes/formulario.css">
	</head>
	<body >
		<form method="post" action="" >
			
			<table>
				<tr>
					<td>
						<p>Identificacion</p>
						<input type = "text" name="doc" placeholder="identificacion" required="required" minlength="10">
					</td>
					<td>
						<p> Primer Nombre</p>
						<input type = "text" name="pnombre" placeholder=" Primer Nombre" required="required" minlength="3">
					</td>
				</tr>
				<tr>
					<td>
						<p> Segundo Nombre</p>
						<input type = "text" name="snombre" placeholder="Segundo Nombre" minlength="3">	
					</td>
					<td>
						<p>Primer Apellido</p>
						<input type = "text" name="papellido" placeholder="Primer Apellido" required="required" minlength="3">	
					</td>	

				</tr>
				<tr>	
					<td>
						<p> Segundo Apellido</p>
						<input type = "text" name="sapellido" placeholder="Segundo Apellido" minlength="3">	
					</td>
					<td>
						<p>Correo electronico</p>
					<input type = "email" name="email" placeholder="email" required="required">	
					</td>
						
				</tr>
				<tr>
					<td>
						<p>Contraseña</p>
					<input type = "password" name="pass" id="pass" placeholder="Contraseña" required="required" minlength="8">

					</td>
					<td>
						<p>Permisos</p>
						<select name="permiso" id="listado">
							
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
						<form method="post" action="../../Vista/menu/menu_consulta">
							<input type="submit" value="Volver a registros y consultas" class="boton2">
						</form>
					</td>
				</tr>
			</table>
	</body>
</html>