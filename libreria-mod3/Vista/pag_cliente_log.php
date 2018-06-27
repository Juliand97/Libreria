<?php 
#session_start();
include("../controlador/seguridad/seguridad_default.php");
	
?>
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
					"fondo animado/fondo5.png"
				],{
					fade:750,
					duration:5000
				});
				
					
		});
		</script>
	</head>
	<body>
		<header>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="prin_s1.css">
<ul>		
		<li>
			<div class="Tp" id="posH"><a href="pag_cliente_log.php">
			<input type="image" src="index/Imagenes/inicio.png" class="btnI"></a>
			<span class="Tptxt">Inicio</span>
			</div>
		</li>		
		<li><a href="index/Quienes Somos.html">Quiénes Somos</a></li>
		</li>
		<li><a href="busqueda/buscar libro.php">Libros<span class="fa fa-angle-down"></span></a>
		
			<li>
				<h1><?php echo $_SESSION['usuario']; ?></h1>
				<p><?php 
				include("../controlador/base_de_datos.php");
				include("permisos/consulta_permiso.php");
				 ?></p>
				 <ul>	
			</ul>
			</li>
			<li>
			<div class="Tp"><a><form action="../controlador/cerrar sesion.php" method="post" >
				<input type="image" src="index/Imagenes/log_out.png" value="Cerrar sesion" class="btnS"></form></a>
				<span class="Tptxt">Cerrar Sesión</span>
			</div>
			</li>
			</ul>
				
	</ul>

	<footer>
			<div class="Tp" id="posU">
				<a href="https://www.google.com/maps/@4.633618,-74.0739014,3a,75y,160.09h,89.91t/data=!3m6!1e1!3m4!1sRN4amXosp1e9C2DgE6DF7g!2e0!7i13312!8i6656" target="_blank"><input type="image" src="index/Imagenes/ubicacion.png" class="btnU"></a>
				<span class="Tptxt">Ubicación</span>
				<p> Cra 22 No. 44A-30 <br/> Bogotá- Colombia</p>	
			</div>
			<div class="Tp" id="posT">
				<input type="image" src="index/Imagenes/telefono.png" class="btnT">
				<span class="Tptxt">Teléfono</span>
				<p><a class="txtTx">►</a> 485 7903</p>
			</div>
			<div class="Tp" id="posC">
				<input type="image" src="index/Imagenes/celular.png" class="btnC">
				<span class="Tptxt">Celular</span>
				<p><a class="txtTx">►</a> 3172543405 <br/><a class="txtTx">►</a> 3005631648</p>
			</div>
			<div class="Tp" id="posF">
				<a href="https://es-la.facebook.com/eldinosauriolibreria/" target="_blank"><input type="image" src="index/Imagenes/facebook.png" class="btnF"></a>
				<span class="Tptxt">Facebook</span> 
				<p> El Dinosaurio Libreria <br/> Jorge Ramirez Fajardo</p>
			</div>
		</footer>
	</header>
	</body>
	

</html>