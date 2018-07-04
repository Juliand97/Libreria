<script>
	function eliminar(prod)
	{
		
		if(confirm ("¿Desea eliminar el registro?"))
			{
				
			
			}
			else
			{
				alert("no")
			}
	}
</script>
<table width="500" border="1" >

	
		<th>No. de registro</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Nacionalidad</th>
		<th>Fecha de Nacimiento</th>
		<th>Estado</th>
		<th>No.Obras</th>
		<th>Eliminar</th><br>	

<?php 
Class Elim_a
{
	public function e_autores($bd,$producto_e,$tabla)
	{
		$i=0;

		while($fila= mysqli_fetch_array($producto_e))
			{
				//datos de  la tabla
			$id = $fila['no_registro'];
			$nombre = $fila['nombrea'];
			$apellido = $fila['apellidoa'];
			$nac = $fila['nac'];
			$fechan = $fila['fechan'];
			$estadoa = $fila['estadoa'];
			$obras = $fila['obras'];
			$i++;	
 ?>
 <tr align= "center">
	<td><?php echo $id; ?></td>
	<td><?php echo $nombre; ?></td>
	<td><?php echo $apellido; ?></td>
	<td><?php echo $nac; ?></td>
	<td><?php echo $fechan; ?></td>
	<td><?php echo $estadoa; ?></td>
	<td><?php echo $obras; ?></td>
	<td>
	<form action="eliminaciones/eliminar-total_a.php" method="post">
	<input type = "hidden" name="id" value="<?php echo $id; ?>">
	<input type="submit" name="envio" value="Eliminar">
	
	</td>
 <?php }
 
	}
}

 ?>