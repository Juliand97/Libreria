<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../Vista/css/clientes/estilo_cons.css">
</head>
<body>
	<table class="tabla1">
		<form action="" method="post" class="form">
		<tr><td colspan="3"><p>Actualizacion de datos</p></td></tr>
		<tr>
			
			<td>
				<p>Identificacion</p>
				<input type = "text" name="doc" id="input" value="<?php echo $edicion['identificacion']; ?>">
				<input type = "hidden" name="indice" id="input" value="<?php echo $edicion['identificacion']; ?>">
			</td>
			<td>
				<p>Nombre</p>
				<input type = "text" name="nombre" id="input" value="<?php echo $edicion['p_nombre']; ?>">
			</td>
			<td>
				<p>Segundo nombre</p>
				<input type = "text" name="snom" id="input" value="<?php echo $edicion['s_nombre']; ?>">
			</td>
		</tr>
		<tr>
			
			<td>
				<p>Apellido</p>
				<input type = "text" name="apellido" id="input" value="<?php echo $edicion['p_apellido']; ?>">
			</td>
			<td>
				<p>Segundo apellido</p>
				<input type = "text" name="sape" id="input" value="<?php echo $edicion['s_apellido']; ?>">
			</td>
			<td>
				<p>Correo electronico</p>
				<input type = "email" name="email" id="input" value="<?php echo $edicion['correo']; ?>">
			</td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" class="boton" name="act" value="Actualizar informacion"></td>
			
		</tr>
	</table>	
</form>
</body>
</html>