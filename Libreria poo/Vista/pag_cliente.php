<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="index-cliente.css">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script language="javascript">
		$(document).ready(function(e)
		{
			$.backstretch([
					"fondo animado/fondo1.jpg",
					"fondo animado/fondo2.jpg",
					"fondo animado/fondo3.jpg",
					"fondo animado/fondo4.jpg",
					"fondo animado/fondo5.jpg"
				],{
					fade:750,
					duration:5000
				});
				
					
		});
		</script>
	</head>
	<body>
		<header>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<ul>
			<li><a href="#">Inicio</a></li>
			<li><a href="">Quienes somos</a>
			<ul>
					<li><a href="index/Quienes Somos.html">Nuestra historia</a></li>
				</ul></li>
			<li><a href="#">Libros<span class="fa fa-angle-down"></span></a><ul>
					<li><?php include("busqueda visitante/buscar libro.php");?></li>
				</ul></li>
				<li><a href="#">Contactos<span class="fa fa-angle-down"></span></a><ul>
					<li><a href="https://es-la.facebook.com/eldinosauriolibreria/">Redes sociales</a></li>
					<li><a href="#">Numeros telefonicos</a></li>
				</ul>
				<li><a href="login-index.php">Iniciar Sesion<span class="fa-angle-down"></span></a><ul>
				</ul></li>
				</ul></li>
	</ul>
	</header>
	</body>
</html>