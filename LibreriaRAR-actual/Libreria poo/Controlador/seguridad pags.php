<?php
	include "base_de_datos.php";
	session_start();
	Class Seguridad 
	{
		public function control()
		{
				$usuarios=$_SESSION["usuario"];
				$contrasenas=$_SESSION["pass"];
				$inten= new Conexion();
				$con=$inten->conm();
				//echo $usuarios,$contrasenas;
				$consulta=mysqli_query($con,"SELECT * FROM usuarios where nombre='$usuarios' and contrasena='$contrasenas' ");
				$fila = mysqli_fetch_array($consulta);
				$usuario = $fila['nombre'];
				$contrasena = $fila['contrasena'];
				if($usuarios==$usuario and $contrasena==$contrasenas )
				{	
					echo "<Script>
					alert('Lo sentimos debe iniciar sesion para poder continuar') 
					window.location.replace('../../Vista/pag_cliente.php')
					</script>";	
				}
				else
				{
				}
		}
	}
	//echo $usuario,$contrasena;
?>