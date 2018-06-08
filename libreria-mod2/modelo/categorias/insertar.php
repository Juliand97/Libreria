<?php
include '../../Controlador/base_de_datos.php';
class categorias
{
	public $categoria;
	
	public function __construct()
	{
		$this->categoria= $_POST ['cat'];
	}

	public function insertar()
	{
		$conexion= new conexion();
		$bd= $conexion->conm();
		$verificacion="SELECT * from categorias where categoria='$this->categoria'";
		$control=mysqli_query($bd,$verificacion);
		$control1=mysqli_fetch_array($control);
		$redundancia=$control1['categoria'];
		if ($this->categoria==$redundancia)
		{
			echo "<script>

				alert('Categoria ya existente')
				window.location.replace('../../Vista/categorias/consulta.php')

			</script>";
		}
		else
		{	
		$datos="INSERT into categorias (categoria) VALUES ('$this->categoria')";
		$ejecutar= mysqli_query($bd,$datos);
		if ($ejecutar==true) 
		{
			header("Location: ../../Vista/categorias/consulta.php");
		}
		}
		

		#die($ejecutar);
	}
}
$cat= new categorias();
$cat->insertar();
	   
?>