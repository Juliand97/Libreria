<?php
	$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");
?>
<html>
<head>Clientes<meta charset="utf-8">
<style type="text/css">
body{
	background-image: url(imagenes/Libros1.jpg);
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>
</head>
<body text="#FFFFFF">
<br>
	<form method="post" action="formulario.php" >
	<table width="190" border=6>
	<tr><td><p>Identificacion</p><br>
	<input type = "text" name="doc" placeholder="identificacion"><br></td>
	<td><p>Nombre</p>
	<input type = "text" name="nombre" placeholder="nombre completo"><br></td></tr>
	
	<td><p>Correo electronico</p><br>
	<input type = "text" name="email" placeholder="email"></td></tr>
	<tr><td>
	<br>
	<input type = "Submit" name="insert" value="Enviar registro"/>
	</form>
	</td>
	<td>
	<br>
	<form method="post" action="../menureg.html">
	<input type="submit" value="Volver a registros y consultas">
	</form>
	</tr></td>
	</table>
</body>
</html>
<?php
 if(isset($_POST['insert'])){
	 $doc= $_POST['doc'];
	 $nombre= $_POST['nombre'];
	 $correo= $_POST['email'];

	
 $enviar= "INSERT INTO `clientes`(`identificacion`, `nombre`, `correo`)  VALUES ('$doc','$nombre','$correo')";
 
	$ejecutar= mysqli_query($con,$enviar);
	echo $ejecutar;
	if($ejecutar)
	{echo "<script> alert ('hecho')</script>";
echo "<script>window.location.replace('consulta.php')</script>";}
	} 		  
?>