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
					"fondos/fondo1.jpg",
					"fondos/fondo2.jpg",
					"fondos/fondo3.jpg",
					"fondos/fondo4.jpg",
					"fondos/fondo5.jpg"
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
					<li><a href="consultas_cliente-index.php">consulta</a></li>
				</ul></li>
				<li><a href="#">Contactos<span class="fa fa-angle-down"></span></a><ul>
					<li><a href="https://es-la.facebook.com/eldinosauriolibreria/">Redes sociales</a></li>
					<li><a href="#">Numeros telefonicos</a></li>
				</ul>
				<li><a href="#">Iniciar Sesion<span class="fa-angle-down"></span></a><ul>
					<li><a href="login-index.php">Administrador</a></li>
					<li><a href="login cliente.php">Cliente</a></li>
				</ul></li>
				<li><a href="clientes/formulario.php">Registrate<span class="fa fa-angle-down"></span></a><ul>
				</ul></li>
	</ul>
	</header>
	</body>
</html>