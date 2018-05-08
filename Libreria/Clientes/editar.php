<?php
if (isset($_GET['editar']))
	{
		$editar_c=$_GET['editar'];
		$consulta="SELECT * FROM `clientes`  WHERE identificacion='$editar_c' ";
		
		$ejecutar=mysqli_query($con,$consulta);
		
		$fila= mysqli_fetch_array($ejecutar);
			$identificacion = $fila['identificacion'];
			$nombre = $fila['nombre'];
			$correo = $fila['correo'];
			
	}
?>
<br><br>
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
<body>
<form action="" method="post">
<p>Actualizacion de datos</p>
<table width="190" border=6>
	<tr><td><p>Identificacion</p><br>
	<input type = "text" name="doc" value="<?php echo $identificacion; ?>"><br></td>
	<td><p>Nombre</p>
	<input type = "text" name="nombre" value="<?php echo $nombre; ?>"><br></td></tr>
	<td><p>Correo electronico</p><br>
	<input type = "text" name="email" value="<?php echo $correo ?>"></td></tr>
	<tr><td>
	<br>
	</td>
	<td>
<br>
<input type="submit" name="actualizar" value="Actualizar datos">
</form>
</body>
<?php
	if(isset($_POST['actualizar']))
	{
		$actualizar_ide= $_POST['doc'];
		$actualizar_nom= $_POST['nombre'];
		$actualizar_co= $_POST['email'];
	
		
	$actualizar= "UPDATE `clientes` SET `identificacion`= '$actualizar_ide',`nombre`= '$actualizar_nom',`correo`= '$actualizar_co'  WHERE identificacion='$editar_c'";
		$ejecutar=mysqli_query($con,$actualizar);
		
		if ($ejecutar)
		{
			echo "<script>window.location.replace('consulta.php')</script>";
			
		}
	}
?>