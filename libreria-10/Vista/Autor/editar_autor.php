<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Editar Autores</title>
		<link rel="stylesheet" href="../../Vista/css/autores/editar.css">
		<script src="../../Vista/js/validacion datos/autor/validar_autor.js"></script>
			<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">	
	</head>
	<body oncontextmenu="return false">
		<br><br>
		<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $lleva['no_registro']; ?>" class="campos" onkeypress="return numeros(event)">
			<input type="text"	name="nom" value="<?php echo $lleva['nombrea'];  ?>" class="campos" onkeypress="textos(event)">
			<input type="text"	name="ape" value="<?php echo $lleva['apellidoa'];  ?>" class="campos" onkeypress="return textos_ape(event)">
			<input type="text"	name="nac" value="<?php echo $lleva['nac']; ?>" class="campos" onkeypress="return textos_nac(event)">
			<input type="date"	name="fec_na" value="<?php echo $lleva['fechan']; ?>" class="campos" required>
			<select name="est" required="required">
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
			
			<input type="text"	name="obra" value="<?php echo $lleva['obras'];  ?>"class="campos" onkeypress="return numeros(event)">
			<input type="submit" name="act" value="Actualizar info" class="envio">
		</form>
	</body>
</html>