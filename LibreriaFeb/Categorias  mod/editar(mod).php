<?php
if (isset($_GET['editar']))
	{
		$editar_c=$_GET['editar'];
		$consulta="SELECT * FROM `categorias`  WHERE idcategoria='$editar_c' ";
		$ver=mysqli_query($con,$consulta);
		$campo= mysqli_fetch_array($ver);
			$nreg= $campo['idcategoria'];
			$nombre= $campo['nombrecategoria'];
			$nsub1= $campo['subncategoria1'];
			$nsub2= $campo['subncategoria2'];	
	}
?>
<br><br>
<body background="imagenes/consulta.jpg">
	<form action="" method="post">
		<p>Actualizacion de datos</p>
		<table width="190" border=6>
			<tr><td><p>Id categoria</p><br>
			<input type = "text" name="idc" value="<?php echo $nreg; ?>"><br></td>
			<td><p>Nombre de la categoria</p>
			<input type = "text" name="nombre" value="<?php echo $nombre; ?>"><br></td></tr>
			<td><p>Nombre de la subcategoria</p><br>
			<input type = "text" name="sub" value="<?php echo $nsub1; ?>"></td>
			<td><p>Nombre de la subcategoria 2</p>
			<input type="text" name="sub1" value="<?php echo $nsub2; ?>"></td></tr>
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
		$actualizar_nreg= $_POST['idc'];
		$actualizar_nombre= $_POST['nombre'];
		$actualizar_nsub1= $_POST['sub'];
		$actualizar_nsub2= $_POST['sub1'];
	
		
	$actualizar= "UPDATE `categorias` SET `idcategoria`= '$actualizar_nreg',`nombrecategoria`= '$actualizar_nombre',`subncategoria1`= '$actualizar_nsub1' ,`subncategoria2`= '$actualizar_nsub2' WHERE idcategoria='$editar_c'";
		$ejecutar=mysqli_query($con,$actualizar);
		
		if ($ejecutar)
		{
			echo "<script> alert('Actualizacion Realizada')
			alert('Iniciado redireccionamiento a consultas')
			window.location.replace('consulta(mod).php')</script>";
			
			
		}
	}
?>