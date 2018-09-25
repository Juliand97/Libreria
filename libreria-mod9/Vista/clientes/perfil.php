<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_default.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Clientes registrados</title>
	<link rel="stylesheet" href="../../Vista/css/clientes/estilo_cons.css">
	<script>
	function elimina(elim)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='perfil_clientes_con_ctrl.php?elim_cli=' +elim+ '';
				/*return true;*/
			}

		}
		function edit(cons)
		{
			window.location.href='perfil_clientes_con_ctrl.php?edit_cli= ' +cons+ '';
		}
	</script>

</head>
<body>
<table width="500" border="1" >

	
		<th>Identificacion</th>
		<th>Nombre</th>
		<th>Correo electronico</th>
		<th>Editar</th>	
		<th>Eliminar</th>
		<tr>
			
				<td><?php echo $consulta['identificacion']; ?></td>
				<td><?php echo $consulta['p_nombre']." ".$consulta['p_apellido']; ?></td>
				<td><?php echo $consulta['correo']; ?></td>
				<td><input type="BUTTON"  onclick="edit(<?php echo $consulta['identificacion']; ?>)" name="consulta" value="Editar" class="boton1"></td>
				<td><input type = "BUTTON" onclick="elimina(<?php echo $consulta['identificacion']; ?>)" name = "Eliminar" value = "Eliminar" class="boton1"></td>
		
			</tr>	
			<?php  ?>
		</table>
		<table border=0 >
			<form action = "../../Vista/pag_cliente.php" method="post" >
			<input type="submit" value="Volver a la pagina principal"class="boton2">
			</form>
		</table>
</body>
</html>