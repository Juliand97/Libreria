<?php #require_once '../Controlador/seguridad/seguridad_admin.php'; ?>
<?php require_once '../Controlador/seguridad/seguridad_default.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title>Administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/menu/pag_prin.css">
		<link rel="stylesheet" type="text/css" href="css/menu/prin.css">
		<link rel="stylesheet" href="css/footer/footer.css">
		<link rel="shortcut icon" href="img/icono/favicon.ico" type="image/x-icon">
 		<link rel="icon" href="img/icono/favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script language="javascript">
		$(document).ready(function(e)
		{
			$.backstretch([
					"img/fondo animado/principal/fondo1.jpg",
					"img/fondo animado/principal/fondo2.jpg",
					"img/fondo animado/principal/fondo3.jpg",
					"img/fondo animado/principal/fondo4.jpg"
				
				],{
					fade:750,
					duration:5000
				});		
		});
		</script>
		<?php require_once 'menu/menu_admin.php'; ?>
</head>
<body>
	
</body>
<footer>
	<?php require_once 'footer/footer.php'; ?>
</footer>
</html>