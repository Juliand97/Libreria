<?php
	include("../controlador/seguridad/seguridad_admin.php");
 ?>
<html>
	<head>
		<meta charset="UTF -8">
		<link rel="stylesheet" href="menuregi.css">
		<style>*{text-decoration:none; }</style>
	</head>
	<body text="#FFFFFF"> 
		<header>
			<center>
			<ul><li><a href="principal.php">Inicio</a></li>
			<li><a href="">Registro</a>
				<ul>
					<li>
						<a href="libros/formulario_reg_lib.php">Libros</a>
						<a href="editoriales/formulario-ed.php">Editorial </a>
						<a href="Autores/formulario.php">Autor</a>
						<a href="Clientes/formulario.php">Usuarios</a>
						<a href="categorias/formulario.php">Categorias</a>
					</li>
					</ul>
				
			<li><a href="">Consulta</a>
				<ul>
					<li>
						<a href="libros/consulta_lib.php">Libros</a>
						<a href="Editoriales/consulta.php">Editorial </a>
						<a href="Autores/consulta.php">Autor</a>
						<a href="Clientes/consulta.php">Clientes</a>
						<a href="categorias/consulta.php">Categorias</a>
						<a href="cant/devolucion.php">Devolución de libros</a>
					</li>
					
					</ul>
					
					<li> <br><h1><?php echo $_SESSION['usuario']; ?></h1></li>
					<li>
						<br>
						<p>
							<?php 
								include("../controlador/base_de_datos.php");
								include("permisos/consulta_permiso.php");
							?>
						</p>
					</li>
					<li>
						<div class="Tp"><a><form action="../controlador/cerrar sesion.php" method="post">
						<input type="image" src="index/Imagenes/logout.png" value="Cerrar sesion" class="btnS"></form></a>
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