<?php 
#include("../../controlador/seguridad/inter/seguridad_cliente.php");
?>	
<html>
	<head>
		<link rel="stylesheet" href="../../Vista/css/busqueda/buscar.css">
	</head>
	<body>
		
		<form action="" method="post" class="form">
			<p>Por favor diligencie los siguientes datos</p>
			<p>Nombre del libro</p><input type="text" placeholder="Nombre del libro" id="libro"  name="libro" autofocus required>
			<br><br><input type="submit" value="Solicitar" name="enviar" class="envio">
		</form>
		<form action="../../Vista/pag_cliente" class="form2">
		<input type="submit" value="Regresar al menu principal" class="envio2">
		</form>
	</body>
	
</html>
<?php 


 ?>