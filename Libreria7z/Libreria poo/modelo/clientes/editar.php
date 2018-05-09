<?php

if (isset($_GET['editar']))
{
		$ver= new editar();
		$ver_d=$ver->seleccion();
}
	class editar
	{
		public $dato_e;
		public function __construct()
		{$this->dato_e=$_GET['editar'];}
		
		public function seleccion()
		{
			$inten= new Conexion();
			$con=$inten->conm();
			$consulta="SELECT * FROM `usuarios`  WHERE identificacion='$this->dato_e' ";
			$ejecutar=mysqli_query($con,$consulta);
			$fila= mysqli_fetch_array($ejecutar);
			$identificacion = $fila['identificacion'];
			$nombre = $fila['nombre'];
			$correo = $fila['correo'];
			$contraseña=$fila['contrasena'];
			//$privilegios=$fila['privilegios'];
		//	echo $identificacion;
	?>
<br><br>
<head>
<style type="text/css">
body{
	background-image: url(imagenes/datos.png);
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
</style>
</head>
<body>
<form action="" method="post">
<p>Actualizacion de datos</p>
<table width="190" border=6>
	<tr><td><p>Identificacion</p><br>
	<input type = "text" name="doc" value="<?php echo $identificacion; ?>"><br></td></tr>
	<tr><td><p>Nombre</p>
	<input type = "text" name="nombre" value="<?php echo $nombre; ?>"><br></td></tr>
	<tr><td><p>Correo electronico</p><br>
	<input type = "text" name="email" value="<?php echo $correo; ?>"></td></tr>
	<tr><td><p>Contraseña</p><br>
	<input type = "password" name="contrasena" id="contrasena" value="<?php echo $contraseña; ?>"></td></tr>
</table>
<table>
	<tr>
		<td>
		<input type="submit" name="actualizar" value="Actualizar datos" class="boton3">
		</td>
	</tr>
</table>
</form>
</body>
<?php
     }
		
	}
?>
<?php

		if(isset($_POST['actualizar']))//si dieron click en boton actualizar
	{
		$update= new Actualizar();//llamado de la clase 
		$c=$update->modificar();//llamado al metodo
		echo "<script>
				alert('¡Actualización exitosa!')
			window.location.replace('../../Vista/clientes/consulta.php');
	</script>";
	}
	class Actualizar 
{	//variables que recepcionaran los datos(variables globales)
	public $ide;
	public $nom;
	public $co;
	public $cont;
	public $privilegio;


	public function __construct()
	{
		//Asignacion de datos
		$this->ide=$_POST['doc'];
		$this->nom=$_POST['nombre'];
		$this->co=$_POST['email'];
		$this->cont=$_POST['contrasena'];
		$this->privilegio=$_POST['acceso'];
		
		//localizacion de los datos recolectados en el formulario
		$this->dato_e=$_GET['editar'];
		
	}
	public function modificar()
	{
		//conexion de base de  datos 
		$inten= new Conexion();
		$con=$inten->conm();
		//sentencia sql
		$actualizar= "UPDATE `usuarios` SET `identificacion`= '$this->ide',`nombre`= '$this->nom',`correo`= '$this->co',contrasena=aes_encrypt('$this->cont','2018') WHERE identificacion='$this->dato_e'";
		return $a=mysqli_query($con,$actualizar);//ejecucion de la actualizacion teniendo en cuenta el lugar de origen de los datos en la tabla a traves del boton editar
	}
		}
	
?>