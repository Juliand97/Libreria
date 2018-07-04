
<?php
	
if (isset($_GET['editar']))//si dan click en ..
{
		$ver= new Editar_autor();//llamado a la clase
		$ver_d=$ver->seleccion();//llamado al metodo
}
	class Editar_autor
	{
		public $dato_e;
		public function __construct()
		{$this->dato_e=$_GET['editar'];}//asignacion del dato a la variable publica
		
		public function seleccion()
		{
			//conexion a base de datos
			$inten= new Conexion();
			$con=$inten->conm();
			//setencia sql
			$consulta="SELECT * FROM `autores`  WHERE no_registro='$this->dato_e' ";
			//consulta sql
			$ejecutar=mysqli_query($con,$consulta);
			//
			$fila= mysqli_fetch_array($ejecutar);//datos sacados en arreglo desde la tabla de la consulta
			$id = $fila['no_registro'];
			$nombre = $fila['nombrea'];
			$apellido = $fila['apellidoa'];
			$nac = $fila['nac'];
			$fechan = $fila['fechan'];
			$estado = $fila['estadoa'];
			$obras = $fila['obras'];
	 
	?>
	<!-- formulario donde se ordenaran los datos de la db-->
<br><br>
<head>
<style type="text/css">
body
{

	background-image: url(../../vista/clientes/imagenes/datos.png);
	background-position: center;
	background-repeat: no-repeat;
	background-attachment: fixed; 
						
}
table
{background-color:rgba(151, 173, 190, 0.7);}
</style>
</head>
<body>
<form action="" method="post">
<p>Actualizacion de datos</p>
<table width="190" border="6" >
	<tr><td><p>No.Registro</p><br>
	<input type = "text" name="id" value="<?php echo $id; ?>"><br></td></tr>
	<tr><td><p>Nombre</p>
	<input type = "text" name="nombre" value="<?php echo $nombre; ?>"><br></td></tr>
	<tr><td><p>Apellido</p><br>
	<input type = "text" name="apellido" value="<?php echo $apellido; ?>"></td></tr>
	<tr><td><p>Nacionalidad</p><br>
	<input type = "text" name="nac" value="<?php echo $nac; ?>"></td></tr>	
	<tr><td><p>Fecha de Nacimiento</p><br>
	<input type = "date" name="fecha" value="<?php echo $fechan; ?>"></td></tr>	
	<tr><td><p>Estado</p><br>
	<input type = "text" name="estado" value="<?php echo $estado; ?>"></td></tr>
	<tr><td><p>No.Obras</p><br>
	<input type = "text" name="obras" value="<?php echo $obras; ?>"></td></tr>
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
		echo "
		<script>
			alert('¡Actualización exitosa!')
			window.location.replace('../../Vista/autores/consulta.php');
		</script>";
	}
	class Actualizar 
{	//variables que recepcionaran los datos(variables globales)
	public $reg;
	public $name;
	public $lname;
	public $nac;
	public $dateb;
	public $state;
	public $obras;
	
	public function __construct()
	{
		//Asignacion de datos
		$this->reg=$_POST['id'];
		$this->name=$_POST['nombre'];
		$this->lname=$_POST['apellido'];
		$this->nac=$_POST['nac'];
		$this->dateb=$_POST['fecha'];
		$this->state=$_POST['estado'];
		$this->obras=$_POST['obras'];
		//localizacion de los datos recolectados en el formulario
		$this->dato_e=$_GET['editar'];
		
	}
	public function modificar()
	{
		$visible=1;
		//conexion de base de  datos 
		$inten= new Conexion();
		$con=$inten->conm();
		//sentencia sql
		$actualizar= "UPDATE `autores` SET `no_registro`= '$this->reg',`nombrea`= '$this->name',`apellidoa`= '$this->lname',`nac`= '$this->nac', `fechan`= '$this->dateb',`estadoa`= '$this->state',`obras`= '$this->obras',estado='$visible'  WHERE no_registro='$this->dato_e'";
		return $a=mysqli_query($con,$actualizar);//ejecucion de la actualizacion teniendo en cuenta el lugar de origen de los datos en la tabla a traves del boton editar
	}
}
?>