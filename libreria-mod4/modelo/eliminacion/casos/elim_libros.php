<?php
class Elim_lib
{
	public function e_lib($bd,$sql,$tabla)
	{
		$i=0;
		while($fila= mysqli_fetch_array($sql))
		{
	 			//datos de la tabla
	 			$Isbn=$fila['isbn'];
	 			$Libro=$fila['libro'];
	 			$Fecha=$fila['fecha'];
	 			$Editorial=$fila['editorial'];
	 			$Categoria=$fila['categoria'];
	 			$Autor=$fila['autor'];
	 			$Pais_Autor=$fila['pais_de_autor'];
	 			$di=$fila['compra'];
	 			$i++;
	 	
 ?>
 <table width="1000" border="1" >
			<th>ISBN</th>
			<th>Libro</th>
			<th>Fecha</th>
			<th>Editorial</th>
			<th>Categoria</th>
			<th>Autor</th>
			<th>País de autor</th>
			<th>Disponibilidad</th>
			<th>Eliminar</th>
			<tr align="center">
	 			<td><?php echo $Isbn; ?></td>
	 			<td><?php echo $Libro; ?></td>
	 			<td><?php echo $Fecha; ?></td>
	 			<td><?php echo $Editorial; ?></td>
	 			<td><?php echo $Categoria; ?></td>
	 			<td><?php echo $Autor; ?></td>
	 			<td><?php echo $Pais_Autor; ?></td>
	 			<td><?php echo $di; ?></td>
	 			<td>
	 				<form action="eliminaciones/eliminar-total_l.php" method="post">
	<input type = "hidden" name="id" value="<?php echo $Isbn; ?>">
	<input type="submit" name="envio" value="Eliminar"></td>
<?php
		}
	}
} 
  ?>