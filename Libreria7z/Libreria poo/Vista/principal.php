<?php
	include("../controlador/seguridad pags.php");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();
	
		
 ?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="pag_principal.css">
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
		<script language="javascript">
		$(document).ready(function(e)
		{
			$.backstretch([
					"fondo animado/principal/fondo1.jpg",
					"fondo animado/principal/fondo2.jpg",
					"fondo animado/principal/fondo3.jpg",
					"fondo animado/principal/fondo4.jpg"
				
				],{
					fade:750,
					duration:5000
				});		
		});
		</script>
	</head>
	<header>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<ul>
			<li><a href="#">Inicio</a></li>
			<li><a href="">Quienes somos</a>
			<ul>
					<li><a href="index/Quienes Somos.html">Nuestra historia</a></li>
				</ul></li>
			<li><a href="#">Libros<span class="fa fa-angle-down"></span></a><ul>
					<li><a href="menureg.php">Registro de datos</a></li>
				</ul></li>
			<li><a href="#">Contactos<span class="fa fa-angle-down"></span></a><ul>
					<li><a href="https://es-la.facebook.com/eldinosauriolibreria/">Redes sociales</a></li>
					<li><a href="#">Numeros telefonicos</a></li>
				</ul><li> <p><?php echo $_SESSION['usuario']; ?></p></li></li>
				<li><P> <form action="../controlador/cerrar sesion.php" method="post" ><input type="submit" value="Cerrar sesion" class="logout"> </form></P></li></li>				</ul>
	</ul>
	</header>
	<body  bgcolor="#000000" text="#FFFFFF">
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="1000" border="0" cellpadding="0">
		  <tr>
			<td><p>Cra 22 No. 44A-30</p><p>Bogotá- Colombia</p></td>
			<td><p><img name="" src="index/Imagenes/Telefono.png" width="92" height="59" alt="">: 485 7903</p></td>
			<td><p><img name="" src="index/Imagenes/Cellular.png" width="82" height="66" alt="">: 3172543405-005631648</p></td>
			<td><p><a href="https://es-la.facebook.com/eldinosauriolibreria/"><img name="" src="index/Imagenes/facebook-logo-64.png" width="68" height="71" alt=""></a> : el dinosaurio libreria</p>
			<p>Jorge Ramirez Fajardo.</p>
			</td>
			</tr>
		</table>
	</body>
</html>
