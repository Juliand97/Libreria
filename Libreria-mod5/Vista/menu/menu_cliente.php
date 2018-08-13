
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/menu/menu-cliente">
	<script>
		function redireccionar()
		{
			var elemento
			elemento=document.getElementById('lista').text;
			alert(elemento);
		}
	</script>
</head>
</head>
<body>
	<header>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/prin_s1.css">
<ul>		
		<li>
			<div class="Tp" id="posH"><a href="pag_cliente">
			<input type="image" src="img/botones/inicio.png" class="btnI"></a>
			<span class="Tptxt">Inicio</span>
			</div>
		</li>		
		<li><a href="quienes somos/Quienes Somos">Quiénes Somos</a></li>
		</li>
		<li><a href="../Controlador/busqueda/busqueda_ctrl.php">Libros<span class="fa fa-angle-down"></span></a>
		
			<li>
				<h1><?php
				 echo $_SESSION['usuario']; ?></h1>
				<p>
					<form action="../Controlador/login/permisos_ctrl_r" method="post">
						<select name="lista" id="lista">
						<?php 
							require_once '../Controlador/login/permisos_ctrl.php';
							
						 ?>
						
						</select>
						<input type="submit" name="redirec" value="Ir a .." >
					</form>
				
				</p>
				 	
				 </p>
				 <ul>	
			</ul>
			</li>
			<li>
			<div class="Tp"><a><form action="../controlador/logout/cerrar_sesion_ctrl.php" method="post" >
				<input type="image" src="img/botones/log_out.png" value="Cerrar sesion" class="btnS"></form></a>
				<span class="Tptxt">Cerrar Sesión</span>
			</div>
			</li>
			</ul>
				
	</ul>
</body>
</html>