<?php
	$con = mysqli_connect("localhost","root","" ,"libreria") or die ("Error");
?>
<html>
<head>
<p align="center">Clientes</p>
<meta charset="utf-8">
<link rel="stylesheet" href="formulario.css">
</head>
<body text="#FFFFFF">
	<form method="post" action="formulario.php" >
	<table width="190" border=1>
	<tr><td><p>Identificacion</p><br>
	<input type = "text" name="doc" placeholder="identificacion"><br></td></tr>
	<tr>
	<td><p>Nombre</p>
	<input type = "text" name="nombre" placeholder="nombre completo"><br></td>
	</tr>
	
	<td><p>Correo electronico</p><br>
	<input type = "text" name="email" placeholder="email"></td></tr>
	<tr><td>
	<br>
	<input type = "Submit" name="insert" value="Enviar registro" class="boton1"/>
	</form>
	</td></tr><tr>
	<td>
	<br>
	<form method="post" action="../menureg.html">
	<input type="submit" value="Volver a registros y consultas" class="boton2">
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