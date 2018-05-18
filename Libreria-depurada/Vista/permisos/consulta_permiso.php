<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	<form action="../modelo/permisos/permisos.php" method="post">
	<select name="lista" id="lista">
		<?php
		include("../../controlador/base_de_datos.php");
		session_start();
		Class permisos
		{
			function pregunta()
			{
		 	$conexion1=new conexion();
			$conectar=$conexion1->conm();
			
		 	
		 	$consulta="SELECT identificacion,nombre,contrasena,roles.u_rol,roles.t_permiso FROM usuarios INNER JOIN roles INNER JOIN permisos WHERE identificacion='$_SESSION[id]' AND nombre='$_SESSION[usuario]' and id_usuario=identificacion and u_rol=id_rol";
			$consultapermisos=mysqli_query($conectar,$consulta);
			while($a=mysqli_fetch_array($consultapermisos))
			{
			$roles=$a['t_permiso'];


			echo"<option name='$roles'>$roles</option>";
			
		 	}
		 	echo "<br><input type='submit' value='envio'>";
			}
		}
		//Permisos obj
		$pregunta1=new permisos();
		$preguntapermisos=$pregunta1->pregunta();
		//Cerrar
		
		?>
		
	</select>

</form>
	
	</body>
	</html>
