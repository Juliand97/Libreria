<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../../Vista/css/autores/estilo_consul.css">
	<title>Consulta Autores</title>
	<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
</head>
<body>
	<table width="500" border="1" >

		<th>No. de registro</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Nacionalidad</th>
		<th>Fecha de Nacimiento</th>
		<th>Estado</th>
		<th>No.Obras</th>
		<th>Editar</th>	
		<th>Eliminar</th><br>
		
	<script language="JavaScript">
		function elimina(elim)
		{
			if(confirm ("¿Desea eliminar el registro?"))
			{
				window.location.href='autores_con_ctrl.php?elim_aut= ' +elim+ '';
				return true;
			}
			
		}
		function editar(cons)
			{
				window.location.href='autores_con_ctrl.php?edit_aut= ' +cons+ '';	
			}
	</script>

	<?php foreach ($consulta as $dato) {
		# code...
	 ?>
	 
	<tr align= "center">
	<td><?php echo $dato['no_registro']; ?></td>
	<td><?php echo $dato['nombrea']; ?></td>
	<td><?php echo $dato['apellidoa']; ?></td>
	<td><?php echo $dato['nac']; ?></td>
	<td><?php echo $dato['fechan']; ?></td>	
	<td>
		<?php
			if ($dato['estado']=='1')
			{
				echo "Activo";
			}
		?>
			
	</td>
	<td><?php echo $dato['obras']; ?></td>
	<td>
		<form action="" method="post">
			<input type="hidden" name="dato" value="<?php echo $dato['no_registro'] ?>" >
			<input type="submit" name="edit" class="boton2" value="Editar">
		</form></td>
	</td>
	<td><input type="BUTTON" onclick="elimina(<?php echo $dato['no_registro']; ?>)" name="Eliminar" value="Eliminar" class="boton2"></td>
	</tr>
	<?php } ?>
	</table>
	<br>
<table border=0 class="tabla">
	<tr>
	<form action = "autores_ctrl.php" method="post">
		<input type="submit" value="Ir a registro" class="boton1">
	</form>
	</tr>
	<tr>
	<form action = "../../Vista/menu/menu_consulta.php" method="post">
		<input type="submit" value="Volver a registro y consulta" class="boton3">
	</form>
	</tr>

</table>

<?php
	#include '../Reportes/filtros.php';
?>
</body>
</html>