<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>s
<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Editar Autores</title>
		<link rel="stylesheet" href="../../Vista/css/autores/editar">
	</head>
	<body>
		<br><br>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $lleva['no_registro']; ?>" class="campos">
			<input type="text"	name="nom" value="<?php echo $lleva['nombrea'];  ?>" class="campos">
			<input type="text"	name="ape" value="<?php echo $lleva['apellidoa'];  ?>" class="campos">
			<input type="text"	name="nac" value="<?php echo $lleva['nac']; ?>" class="campos">
			<input type="date"	name="fec_na" value="<?php echo $lleva['fechan']; ?>" class="campos">
			<select name="est" >
				<?php
			 if($lleva['estado']==1)
			 {
			 	echo "<option>".'Activo'."</option>";
			 }
			 elseif($lleva['estado']==0)
			 {
			 	echo "<option>".'Inactivo'."</option>";
			 }

			  ?>
			</select>
			
			<input type="text"	name="obra" value="<?php echo$lleva['obras'];  ?>"class="campos">
			<input type="submit" name="act" value="Actualizar info" class="envio">
		</form>
	</body>
</html>