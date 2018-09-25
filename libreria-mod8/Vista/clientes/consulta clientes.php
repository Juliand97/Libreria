<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
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
				window.location.href='clientes_con_ctrl.php?elim_cli=' +elim+ '';
				/*return true;*/
			}

		}
		function edit(cons)
		{
			window.location.href='clientes_con_ctrl.php?edit_cli= ' +cons+ '';
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
		<?php 
			foreach ($consulta as $registro)
			{
				# code...
			
		 ?>
		<tr>
			
				<td><?php echo $registro['identificacion']; ?></td>
				<td><?php echo $registro['p_nombre']." ".$registro['p_apellido']; ?></td>
				<td><?php echo $registro['correo']; ?></td>
				<td><input type="BUTTON"  onclick="edit(<?php echo $registro['identificacion']; ?>)" name="consulta" value="Editar" class="boton1"></td>
				<td><input type = "BUTTON" onclick="elimina(<?php echo $registro['identificacion']; ?>)" name = "Eliminar" value = "Eliminar" class="boton1"></td>
		
			</tr>	
			<?php } ?>
		</table>
		<table border=0 >
			<form action = "clientes_ctrl.php" method="post" >
			<input type="submit" value="Ir a registro"class="boton2">
			</form>
			<form action = "../../Vista/menu/menu_consulta.php" method="post">
			<input type="submit" value="Volver a registro y consulta" class="boton3">
			</form>
		</table>
</body>
</html>