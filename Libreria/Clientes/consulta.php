<?php
	$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");
?>
<table width="500" border="1" style="background-color: silver;">

	
		<th>Identificacion</th>
		<th>Nombre</th>
		<th>Correo electronico</th>
		<th>editar</th>	
		<th>eliminar</th><br>	
<?php
	$consulta="SELECT * FROM `clientes`";
	$ejecutar=mysqli_query($con,$consulta);
	$i=0;
	
	
		
	while($fila = mysqli_fetch_array($ejecutar))
	{
		$identificacion = $fila['identificacion'];
		$nombre = $fila['nombre'];
		$correo = $fila['correo'];
		$i++;
		
?> 
<head>
<style type="text/css">
body{
	background-image: url(imagenes/datos.png);
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>
</head>	
<tr align= "center">
<td><?php echo $identificacion; ?></td>
<td><?php echo $nombre; ?></td>
<td><?php echo $correo; ?></td>
<td><a href="consulta.php?editar=<?php echo $identificacion; ?>">editar</a></td>
<td><a href="consulta.php?eliminar=<?php echo $identificacion; ?>">eliminar</a></td>
</tr>
<?php } ?>
</table>
<br>
<form action="consulta.php" method="post">
<input type="submit" value="consultar registros">
</form>
<form action = "formulario.php" method="post">
<input type="submit" value="Ir a registro">
</form>
<form action = "../menureg.html" method="post">
<input type="submit" value="Volver a registro y consulta">
</form>


<?php
	if (isset($_GET['editar']))
	{
		include ("editar.php");
	}
?>
<?php
	if (isset($_GET['eliminar']))
	{
		include ("eliminar.php");
	}
?>
	