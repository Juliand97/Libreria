<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Editorial</title>
	<script src="../../Vista/js/validacion datos/autor/validar_autor.js"></script>	
</head>
<body>
	<form action="" method="post">
		<input type="text" name="cod" value="<?php echo $trae['codigo_postal'];?>" minlength="4" required="required" onkeypress="return numeros(event)">
		<input type="hidden" name="semilla" value="<?php echo $trae['nombre_e'] ;?>" onkeypress="return textos(event)">
		<input type="text" name="nom_act" value="<?php echo $trae['nombre_e'] ;?>" minlength="3" required="required" onkeypress="return textos(event)">
		<input type="submit" name="act" value="Actualizar informacion" >
	</form>
</body>
</html>