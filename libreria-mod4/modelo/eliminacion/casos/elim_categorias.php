
<?php 
class Elim_cat
{
	public function e_cat($bd,$sql,$tabla)
	{
		$i=0;
		while ($campo = mysqli_fetch_array($sql))
		 { 
			 $id=$campo['id_cat'];
			 $nombre= $campo['categoria'];
			 $i++;
		


 ?>
 <table class="tabla" border="1">
<th>Numero de registro</th>
<th>Categoria</th>
<th>Eliminar</th>
 <tr>
	<td><?php echo $id; ?></td>
	<td><?php echo $nombre; ?></td>
	<td>
		<form action="eliminaciones/eliminar-total_c.php" method="post">
	<input type = "hidden" name="id" value="<?php echo $id; ?>">
	<input type="submit" name="envio" value="Eliminar">/td>

 <?php 
		}
	}

} 
?>
</tr>
</table>