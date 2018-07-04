<?php 
class Elim_edit
{
	public function e_edit($bd,$producto_e,$tabla)
	{
		$i=0;

		while ($fila=mysqli_fetch_array($producto_e))
		{
			$codp=$fila['codigo_postal'];
			$nombre=$fila['nombre_e'];
			$ubicacion=$fila ['ubicacion'];
			$telefono=$fila['telefono'];
			$correo=$fila['correo'];
			$pbx=$fila['pbx'];
			$jefe_editorial=$fila['jefe_editorial'];
			$fecha_creacion=$fila['fecha_creacion'];
			$i++;
		
 ?>
 <table width="500" border="1" class="table" >
	
				  <th>Codigo_postal</th>
				  <th>Nombre</th>
                  <th>Ubicacion</th>
				  <th>Telefono</th>
				  <th>Correo</th>
				  <th>Pbx</th>
				  <th>Jefe_editorial</th>
				  <th>Fecha_creacion</th>
			
				  <th>Eliminar</th>
				  <tr align= "center">
<td> <?php echo $codp; ?></td>
<td> <?php echo $nombre; ?></td>
<td><?php echo $ubicacion; ?></td>
<td><?php echo $telefono; ?></td>
<td><?php echo $correo; ?></td>
<td><?php echo $pbx; ?></td>
<td><?php echo $jefe_editorial; ?></td>
<td><?php echo $fecha_creacion; ?></td>
<td><form action="eliminaciones/eliminar-total_e.php" method="post">
	<input type = "hidden" name="id" value="<?php echo $codp; ?>">
	<input type="submit" name="envio" value="Eliminar">
</td>

<?php 
		}

	}

}

 ?>