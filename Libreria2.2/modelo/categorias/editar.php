<?php
include("../../controlador/base_de_datos.php");
	class edicion 
	{
		public $campo;
		public function __construct()
		{
			$this->campo=$_GET['edit_cat'];
		}


		public function informacion()
		{
			$conecta= new conexion();
			$db= $conecta->conm();
		
			$consulta="SELECT * from categorias WHERE id_cat='$this->campo' ";
			#echo $consulta;
			$trae=mysqli_query($db,$consulta);
			$campo= mysqli_fetch_array($trae);
			#$nreg= $campo['id_cat'];
			$nombre= $campo['categoria'];

	
?>
<br><br>
<link rel="stylesheet" type="text/css" href="edit.css">
<body >
	<form action="" method="post">
		
		<table  border="1" class="tabla" >
			<th><p>Nombre categoria</p></th>
			<th><input type = "text" name="nombre" class="nombre" value="<?php echo $nombre; ?>"></th>
		</table>

			<br> <br> 
		<input type="submit" name="actualizar" value="Actualizar datos" class="boton4">
	</form>
</body>
<?php
	}
}
	$obj= new edicion();
$obj->informacion();
if(isset($_POST['actualizar']))//si dieron click en boton actualizar
	{
			$obj2=new mod();
			$obj2->modificar();
			header("Location:../../Vista/categorias/consulta.php");
	}

class mod
{
	public $modificar;
	public $campo;
	
	public function __construct()
	{
		$this->modificar=$_POST['nombre'];
		$this->campo=$_GET['edit_cat'];
	}

	public function modificar()
	{
			$conecta= new conexion();
			$db= $conecta->conm();
			$actualizar="UPDATE categorias set categoria='$this->modificar' WHERE id_cat='$this->campo'";
			echo $actualizar;
			$envio=mysqli_query($db,$actualizar);
		


	}
}


	
?>



