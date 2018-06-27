<?php	
include("../../controlador/seguridad/inter/seguridad_admin.php");
include '../../controlador/base_de_datos.php';  
if(isset($_POST['insert']))//si se le dio clic al boton enviar 
	{
		//datos recojidos
		$Isbn= $_POST['v1'];
		$Libro= $_POST['v2'];
		$Fecha= $_POST['v3'];
		$Editorial= $_POST['edit'];
		$Categoria= $_POST['cat'];
		$Autor= $_POST['v6'];
		$Pais_Autor= $_POST['v7'];
		
		//llamado de la clase y paso de datos recojidos
		$a= new Libro($Isbn,$Libro,$Fecha,$Editorial,$Categoria,$Autor,$Pais_Autor);
		$b= $a->insertar();//llamado al metodo insertar
		
	}
?>
<?php
class Libro 
{
	
	public $Isbn;
	public $Libro;
	public $Fecha;
	public $Editorial;
	public $Categoria;
	public $Autor;
	public $Pais_Autor;

	//variables que recepcionaran los datos
	//public $enviar;

	
	public function __construct($Isbn,$Libro,$Fecha,$Editorial,$Categoria,$Autor,$Pais_Autor)
	{
		//asignacion de valores
		$this->Isbn=$Isbn;
		$this->Libro=$Libro;
		$this->Fecha=$Fecha;
		$this->Editorial=$Editorial;
		$this->Categoria=$Categoria;
 		$this->Autor=$Autor;
		$this->Pais_Autor=$Pais_Autor;
		
	}
	public function insertar()
	{
		$estado_inicial="Disponible";
		//llamado a la clase conexion
		$inten= new Conexion();
		$c=$inten->conm();
		//verificacion
		$verifica="SELECT * FROM libros where isbn='$this->Isbn'";
		$control=mysqli_query($c,$verifica);
		$control1=mysqli_fetch_array($control);
		$control2=$control1['isbn'];
		if ($this->Isbn==$control2)
		{
			echo "<script>

				alert('Libro ya existente')
				window.location.replace('../../Vista/libros/consulta_lib.php')

			</script>";
		}
		else
		{
			header("Location:../../Vista/libros/consulta_lib.php");
		//setencias sql
		$enviar= "INSERT INTO `libros`(`isbn`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`,compra)  VALUES ('$this->Isbn','$this->Libro','$this->Fecha','$this->Editorial','$this->Categoria','$this->Autor','$this->Pais_Autor','$estado_inicial')";
		return $van=mysqli_query($c,$enviar);//insercion de los datos
		}
	}
}

?>