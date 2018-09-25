<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_default.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../Vista/css/clientes/estilo_cons.css">
	<script src="../../Vista/js/validacion datos/registro_clientes/validar_cliente.js"></script>
	<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
</head>
<body oncontextmenu="return false;">
	<table class="tabla1">
		<form action="" method="post" class="form" onsubmit="return validar_cliente();">
		<tr><td colspan="3"><p>Actualizacion de datos</p></td></tr>
		<tr>
			
			<td>
				<p>Identificacion</p>
				<input type = "text" name="doc" id="input" value="<?php echo $consulta['identificacion']; ?>" onkeypress="return caracteres_U(event);">
				<input type = "hidden" name="indice" id="input" value="<?php echo $consulta['identificacion']; ?>" onkeypress="return caracteres_U(event);">
			</td>
			<td>
				<p>Nombre</p>
				<input type = "text" name="nombre" id="input" value="<?php echo $consulta['p_nombre']; ?>" onkeypress="return caracteres(event);">
			</td>
			<td>
				<p>Segundo nombre</p>
				<input type = "text" name="snom" id="input" value="<?php echo $consulta['s_nombre']; ?>" onkeypress="return caracteres(event);">
			</td>
		</tr>
		<tr>
			
			<td>
				<p>Apellido</p>
				<input type = "text" name="apellido" id="input" value="<?php echo $consulta['p_apellido']; ?>" onkeypress="return caracteres(event);">
			</td>
			<td>
				<p>Segundo apellido</p>
				<input type = "text" name="sape" id="input" value="<?php echo $consulta['s_apellido']; ?>" onkeypress="return caracteres(event);">
			</td>
			<td>
				<p>Correo electronico</p>
				<input type = "email" name="email" id="input" value="<?php echo $consulta['correo']; ?>" onkeypress="return caracteres(event);">
			</td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" class="boton" name="act" value="Actualizar informacion"></td>
			
		</tr>
	</table>	
</form>
</body>
</html>