<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
 <html>
<head>
	<meta charset="utf-8">
	<title>Registro Categoria</title>
	<link rel="stylesheet" type="text/css" href="../../Vista/css/categorias/form.css">
	<script src="../../Vista/js/validacion datos/categoria/categoria.js"></script>
	<link rel="shortcut icon" href="../img/icono/favicon.ico" type="image/x-icon">
 	<link rel="icon" href="../../Vista/img/icono/favicon.ico" type="image/x-icon">
	<style>
	.cajasb
	{
		width: 100%;
		height: 20px;
	}
	.interaccion
{
	margin-left: 35%;
	width: 20%;
	height: 5%;
	border-radius: 8%;
	border-style: outset;
}
	</style>
</head>
	<body oncontextmenu="return false">
		<form action="" method="post" class="formulario" onsubmit="return vacio();">
			<h1>Ingrese Los Datos</h1>
			<input type="text" id=cat name="cat" placeholder="Nombre categoria" onkeypress="return textos(event);" required="required">
				
		<br><br><input type="submit" id="envio" value="Enviar datos" name="envio">
		</form>
		<form action="../../Vista/menu/menu_consulta.php" >
			<input type="submit" value="Menu registro y consulta" class="interaccion">
		</form>
		<form action="categorias_con_ctrl.php">
			<input type="submit" value="consultar registros"class="interaccion">
		</form>
		
	</body>
</html>
