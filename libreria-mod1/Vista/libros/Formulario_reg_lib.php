<?php
	include("../../controlador/seguridad/seguridad_admin.php");  
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
										<input type="BIGINT" name="v1" placeholder="ISBN" required autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Libro</p>
										<input type="VARCHAR" name="v2" placeholder="Libro" required autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Fecha</p>
										<input type="DATE" name="v3" placeholder="Fecha" required autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Editorial</p>
										<input type="VARCHAR" name="v4" placeholder="Editorial" required autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Categoria</p>
										<input type="VARCHAR" name="v5" placeholder="Categoria" required autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>Autor</p>
										<input type="VARCHAR" name="v6" placeholder="Autor" required autofocus>
									</td>
								</tr>
								<tr>
									<td>
										<p>País de Autor</p>
										<input type="VARCHAR" name="v7" placeholder="País de autor" required autofocus>
									</td>
								</tr>	
								<tr>
									<td>
										<p>Disponibilidad</p>
										<input type="text" name="v8" placeholder="Disponibilidad">
									</td>
								</tr>

								<table>
									<tr>
										<td>
											<input type="SUBMIT" name="insert" value="Enviar registro" class="boton1">
											<form method="post" action="../menureg.php">
												<input type="submit" value="Volver a registros y consultas" class="boton2">
											</form>
										</td>
									</tr>	
								</table>						
						</table>
				</form>			
			</body>	

	</html>
