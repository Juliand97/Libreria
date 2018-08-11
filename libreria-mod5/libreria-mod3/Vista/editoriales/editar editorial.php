<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Editorial</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="cod" value="<?php echo $trae['codigo_postal'];?>" minlength="4" required="required">
		<input type="hidden" name="semilla" value="<?php echo $trae['nombre_e'] ;?>">
		<input type="text" name="nom_act" value="<?php echo $trae['nombre_e'] ;?>" minlength="3" required="required">
		<input type="submit" name="act" value="Actualizar informacion" >
	</form>
</body>
</html>