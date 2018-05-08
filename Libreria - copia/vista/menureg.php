<?php
	include("../controlador/seguridad pags.php");
	if(is_null($usuario) )
	{	
		
		echo "<Script>
		alert('Lo sentimos debe iniciar sesion para poder continuar') 
		window.location.replace('login-index.php')
		</script>";
		
	}
	else
	{		
	}
 ?>
<html>
	<head>
		<meta charset="UTF -8">
		<link rel="stylesheet" href="menureg.css">
	</head>
	<body text="#FFFFFF"> 
		<header>
			<center>
			<ul><li><a href="principal.php">Inicio</a></li>
			<li><a href="">Registro</a>
				<ul>
					<li>
						<a href="libros/registrarlibro.php">libros</a>
						<a href="Editoriales/registrareditorial.php">Editorial </a>
						<a href="Autores/insertar.php">Autor</a>
						<a href="Categorias  mod/insertar.php">Categoria</a>
						<a href="Clientes/formulario.php">Clientes</a>
					</li>
					</ul>
				
			<li><a href="">Consulta</a>
				<ul>
					<li>
						<a href="libros/consultarlibro1.php">libros</a>
						<a href="Editoriales/consultareditorial1.php">Editorial </a>
						<a href="Autores/5reportehtmlqli.php">Autor</a>
						<a href="Categorias  mod/consulta.php">Categoria</a>
						<a href="Clientes/consulta.php">Clientes</a>
					</li>
					</ul>
					
			<li><a href="">Actualizacion de datos</a>
				<ul>
					<li>
						<a href="libros/actualizarlibro.php">libros</a>
						<a href="Editoriales/actualizareditorial.php">Editorial </a>
						<a href="Autores/3actualizar.php">Autor</a>
					</li>
					
					</ul>
					<li> <p><br><?php echo $usuario; ?></p></li>
					<ul></ul>
			</center>
		</header>
	</body>
</html>