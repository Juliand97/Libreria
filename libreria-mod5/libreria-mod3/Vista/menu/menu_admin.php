<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/menu/pag_prin.css">
	<link rel="stylesheet" type="text/css" href="prin.css">
	<script>
		function redireccionar()
		{
			var elemento
			elemento=document.getElementByName('lista')[0].value;
			alert('elemento');
		}
	</script>
</head>
<body>
		<header>
	<ul>		
		<li>
			<div class="Tp"><a href="principal.php">
			<input type="image" src="img/botones/home.png" class="btnI"></a>
			<span class="Tptxt">Inicio</span>
			</div>
		</li>		
		<li><a href="quienes somos/Quienes somos.html">Quiénes Somos</a></li>
		</li>
		<li><a href="menu/menu_consulta">Consulta y Registro<span class="fa fa-angle-down"></span></a>
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
						<input type="submit" name="redirec" value="Ir a.." onclick="redirecciona()">
					</form>
					
				 	
				 </p>
		</li>
		</li>
		<li>
			<div class="Tp"><a><form action="../controlador/logout/cerrar_sesion_ctrl.php" method="post" >
				<input type="image" src="img/botones/logout.png" value="Cerrar sesion" class="btnS"></form>
			</a>
				<span class="Tptxt">Cerrar Sesión</span>
			</div>	
		</li>
		</li>
	</ul>
	</ul>
	</header>
</body>
</html>