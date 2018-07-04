<?php
	include("../../controlador/seguridad/inter/seguridad_admin.php");

?>

<!DOCTYPE html>
	<html>
		<title>Registrar libros</title>
		<head>
			<meta charset="UTF-8">
			<p>Registro de libros</p>
			<link rel="stylesheet" type="text/css" href="estilo_reg_li.css">
		</head>
			
			<body>
				<form method="POST" action="../../modelo/libros/insert_reg_lib.php">
						<table width="190" border=1 class="table">
								<tr>
									<td>
										<p>ISBN</p>
										<input type="BIGINT" name="v1" placeholder="ISBN"  autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Libro</p>
										<input type="VARCHAR" name="v2" placeholder="Libro"  autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Fecha</p>
										<input type="DATE" name="v3" placeholder="Fecha"  autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Editorial</p>
										<select name="edit">
										 <?php
										 	include ("../../modelo/editoriales/trae_edit.php"); 
										 	$trae_edit= new t_edit();
										 	$info=$trae_edit->info();
										   ?>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<p>Categoria</p>
										<select name="cat">
										 <?php
										 	include ("../../modelo/categorias/trae_cat.php"); 
										 	$trae_edit= new t_cat();
										 	$info=$trae_edit->info();
										   ?>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										<p>Autor</p>
										<input type="VARCHAR" name="v6" placeholder="nombre del autor" autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>País de Autor</p>
										<input type="VARCHAR" name="v7" placeholder="País de autor"  autofocus>
									</td>
								</tr>	
								

								<table>
									<tr>
										<td>
											<input type="SUBMIT" name="insert" value="Enviar registro" class="boton1">
											
											
										</td>
									</tr>
									
									
								</table>

						</table>
				</form>	
				<form method="post" action="../menureg.php">
				<table border=1 class="table2">
					<input type="submit" value="Volver a registros y consultas" class="boton2">
				</table>
												
				</form>			
			</body>	

	</html>
	
