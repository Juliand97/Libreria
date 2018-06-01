<?php
	include("../controlador/seguridad/seguridad_admin.php");
 ?>
<html>
	<head>
		<meta charset="UTF -8">
		<link rel="stylesheet" href="menureg.css">
		<style>*{text-decoration:none; }</style>
	</head>
	<body text="#FFFFFF"> 
		<header>
			<center>
			<ul><li><a href="principal.php">Inicio</a></li>
			<li><a href="">Registro</a>
				<ul>
					<li>
						<a href="libros/formulario_reg_lib.php">libros</a>
						<a href="editoriales/formulario-ed.php">Editorial </a>
						<a href="Autores/formulario.php">Autor</a>
						<a href="Clientes/formulario.php">Usuarios</a>
					</li>
					</ul>
				
			<li><a href="">Consulta</a>
				<ul>
					<li>
						<a href="libros/consulta_lib.php">libros</a>
						<a href="Editoriales/consulta.php">Editorial </a>
						<a href="Autores/consulta.php">Autor</a>
						<a href="Clientes/consulta.php">Clientes</a>
					</li>
					
					</ul>
					
					<li> <br><p><?php echo $_SESSION['usuario']; ?></p></li>
					<li>
						<br>
						<p>
							<?php 
								include("../controlador/base_de_datos.php");
								include("permisos/consulta_permiso.php");
							?>
						</p>
					</li>
					</ul>
					
					<ul>
					
					</ul>
			</center>
		</header>
	</body>
</html>