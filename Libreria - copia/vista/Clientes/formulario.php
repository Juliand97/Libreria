<html>
<head>
<p align="center">Clientes</p>
<meta charset="utf-8">
<link rel="stylesheet" href="formulario.css">
</head>
<body text="#FFFFFF">
	<form method="post" action="formulario.php"  >
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
	<form method="post" action="../menureg.php">
	<input type="submit" value="Volver a registros y consultas" class="boton2">
	</form>
	</tr></td>
	</table>
</body>
</html>
<?php
include ("../../controlador/base_de_datos.php");
$clave="julian123";
 function encriptar_AES($doc,$clave)
{
     $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_CBC, '');
     $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_DEV_URANDOM );
     mcrypt_generic_init($td, $clave, $iv);
     $encrypted_data_bin = mcrypt_generic($td, $doc);
     mcrypt_generic_deinit($td);
     mcrypt_module_close($td);
     $encrypted_data_hex = bin2hex($iv).bin2hex($encrypted_data_bin);
     return $encrypted_data_hex;
 }

 if(isset($_POST['insert'])){
	 $doc= $_POST['doc'];
	 
	 $nombre= $_POST['nombre'];
	 $correo= $_POST['email'];
	 $docp=encriptar_AES($doc,$clave);//PASSWORD_DEFAULT debe ser en mayuscula
	
	echo $docp;
	 echo "<script> alert('$docp')</script>";
	 $enviar= "INSERT INTO `clientes`(`identificacion`, `nombre`, `correo`)  VALUES ('$docp','$nombre','$correo')";
 
	$ejecutar= mysqli_query($con,$enviar);
	echo $ejecutar;
	if($ejecutar)
	{echo "<script> alert ('hecho')</script>";
echo "<script>window.location.replace('consulta.php')</script>";}
	} 		  
?>