
<table width="500" border="1" >

	
		<th>Identificacion</th>
		<th>Nombre</th>
		<th>Correo electronico</th>
	
		<th>Eliminar</th><br>
<?php 

class Elim_user
{
	public function e_user($bd,$sql,$tabla)
	{	
		$i=0;
		while($fila= mysqli_fetch_array($sql))
			{
			$identificacion = $fila['identificacion'];
			$nombre = $fila['nombre'];
			$correo = $fila['correo'];
			$i++;


 ?>
 <tr>
 
		<td><?php echo $identificacion; ?></td>
<td><?php echo $nombre; ?></td>
<td><?php echo $correo; ?></td>
<td><form action="eliminaciones/eliminar-total_u.php" method="post">
	<input type = "hidden" name="id" value="<?php echo $identificacion; ?>">
	<input type="submit" name="envio" value="Eliminar">
	</form>
</td></tr>
<?php 
			}


	}
}




 ?>