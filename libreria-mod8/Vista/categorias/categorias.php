<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
 <html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../Vista/css/categorias/form.css">
</head>
	<body>
		<form action="" method="post" class="formulario">
			<h1>Ingrese Los Datos</h1>
			<input type="text" id=cat name="cat" placeholder="Nombre categoria">
				
		<br><br><input type="submit" id="envio" value="Enviar datos" name="envio">
		</form>
		<form action="../../Vista/menu/menu_consulta.php">
			<input type="submit" value="Menu registro y consulta" class="interaccion">
		</form>
		<form action="categorias_con_ctrl.php">
			<input type="submit" value="consultar registros"class="interaccion">
		</form>
		<form></form>
	</body>
</html>
