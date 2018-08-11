<?php require_once '../Controlador/seguridad/seguridad_default.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
	<script language="javascript">
		$(document).ready(function(e)
		{
			$.backstretch([
					"img/fondo animado/fondo1.jpg",
					"img/fondo animado/fondo2.jpg",
					"img/fondo animado/fondo3.jpg",
					"img/fondo animado/fondo4.jpg",
					"img/fondo animado/fondo5.png"
				],{
					fade:750,
					duration:5000
				});		
		});
		</script>
		<?php require_once 'menu/menu_cliente.php'; ?>
</head>
<body>
	
</body>
<footer>
	<?php require_once 'footer/footer-cliente.php' ?>
</footer>
</html>