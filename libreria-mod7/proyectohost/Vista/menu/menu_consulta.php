<?php
	require_once ("../../Controlador/seguridad/inter/seguridad_admin.php");
 ?>
<html>
	<head>
		<meta charset="UTF -8">
		<link rel="stylesheet" href="../css/menu/menuregi.css">
		<style>*{text-decoration:none; }</style>
	</head>
	<body text="#FFFFFF"> 
		<header>
			<center>
			<ul><li><a href="../pag_principal.php">Inicio</a></li>
			<li><a href="">Registro</a>
				<ul>
					<li>
						<a href="../../Controlador/libros/libros_ctrl.php">Libros</a>
						<a href="../../Controlador/editoriales/editoriales_ctrl.php">Editorial </a>
						<a href="../../Controlador/Autor/Autores_ctrl.php">Autor</a>
						<a href="../../Controlador/clientes/clientes_ctrl.php">Usuarios</a>
						<a href="../../Controlador/categorias/categorias_ctrl.php">Categorias</a>
					</li>
					</ul>
				
			<li><a href="">Consulta</a>
				<ul>
					<li>
						<a href="../../Controlador/libros/libros_con_ctrl.php">Libros</a>
						<a href="../../Controlador/editoriales/editoriales_con_ctrl.php">Editorial </a>
						<a href="../../Controlador/Autor/autores_con_ctrl.php">Autor</a>
						<a href="../../Controlador/clientes/clientes_con_ctrl.php">Usuarios</a>
						<a href="../../Controlador/categorias/categorias_con_ctrl.php">Categorias</a>
					</li>
					
					</ul>
					
					<li> <br><h1><?php #echo $_SESSION['usuario']; ?></h1></li>
					<li>
						<br>
						<p>
							<?php 
								#include("../controlador/base_de_datos.php");
								#include("permisos/consulta_permiso.php");
							?>
						</p>	<h1><?php
				 echo $_SESSION['usuario']; ?></h1>
				<p>
				
					</li>
					<li>
						<div class="Tp"><a><form action="../../Controlador/logout/cerrar_sesion_ctrl.php" method="post" >
				<input type="image" src="../img/botones/logout.png" value="Cerrar sesion" class="btnS"></form>
			</a>
				<span class="Tptxt">Cerrar Sesión</span>
			</div>	
					</li>
					</ul>
					
					<ul>
					
					</ul>
			</center>
		</header>
	</body>
</html>