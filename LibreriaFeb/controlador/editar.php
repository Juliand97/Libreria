<?php
	if(is_null($usuario) )
	{	
		echo "<Script>
		alert('Lo sentimos debe iniciar sesion para poder continuar') 
		window.location.replace('../login-index.php')
		</script>";
	}
	else
	{		
	}
 ?>
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
	
	$intento=decrypt($identificacion);
	echo "<script>alert('$intento')</script>";
	function decrypt($intento) 
	{$clave="julian123";
 
		  //$code = hex2bin($code);
		  $td = mcrypt_module_open("rijndael-128", "", "cbc",$intento);
		  mcrypt_generic_init($td, $clave,"ju1997li02an0712");
		  $decrypted = mdecrypt_generic($td, $intento);	
		  mcrypt_generic_deinit($td);
		  mcrypt_module_close($td);
		 
		  return $decrypted;
		  echo "<script> alert ('entre a la funcion')
		  alert('$decrypted')</script>";
		   
	}
//
	/*function aes_desencriptar($intento,$intento_e)
	{
	$td=mcrypt_module_open(MCRYPT_RIJNDAEL_128,'',MCRYPT_MODE_CBC,'');
		$iv_size_hex=mcrypt_enc_get_iv_size($td)*2;
 		$iv=pack('H*',substr($intento_e,90,$iv_size_hex));
		$encrypted_data_bin=pack('H*',substr($intento_e,$iv_size_hex));
		mcrypt_generic_init($td,$intento,$iv);
		$descrypted=mdecrypt_generic($td,$encrypted_data_bin);
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		return $decrypted;
	
		return rtrim
		(
			mcrypt_decrypt
			(
				MCRYPT_RIJNDAEL_128,$intento,
				base64_decode($intento),
				MCRYPT_MODE_ECB,
				mcrypt_create_iv
				(
					mcrypt_get_iv_size
					(
						MCRYPT_RIJNDAEL_128,
						MCRYPT_MODE_ECB
					),
					MCRYPT_DEV_RANDOM
				)
			)
		);
	}*/
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
	<input type = "text" name="doc" value="<?php echo $identificacion; ?>"><br></td></tr>
	<tr><td><p>Nombre</p>
	<input type = "text" name="nombre" value="<?php echo $nombre; ?>"><br></td></tr>
	<tr><td><p>Correo electronico</p><br>
	<input type = "text" name="email" value="<?php echo $correo ?>"></td></tr>
</table>
<table>
	<tr>
		<td>
		<input type="submit" name="actualizar" value="Actualizar datos" class="boton3">
		</td>
	</tr>
</table>
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