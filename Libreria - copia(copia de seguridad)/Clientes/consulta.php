<?php
	$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");
?>
<head>
<link rel="stylesheet" href="consulta.css">
</head>
<body>
<table width="500" border="1" align="center">

	
		<th>Identificacion</th>
		<th>Nombre</th>
		<th>Correo electronico</th>
		<th>editar</th>	
		<th>eliminar</th>	
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
<table>
	<tr>
		<td>
			<form action="consulta.php" method="post">
			<input type="submit" value="consultar registros" class="boton1">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<form action = "formulario.php" method="post">
			<input type="submit" value="Ir a registro" class="boton2">
			</form>
		</td>
	</tr>
	<tr>
		<td>
			<form action = "../menureg.html" method="post">
			<input type="submit" value="Volver a registro y consulta" class="boton3">
		</td>
	</tr>
</form>
</body>


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
	