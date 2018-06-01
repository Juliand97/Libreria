<?php	

	include("../../controlador/seguridad pags.php");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();  
if(isset($_POST['insert']))//si se le dio clic al boton enviar 
	{
		//datos recojidos
		$Isbn= $_POST['v1'];
		$Libro= $_POST['v2'];
		$Fecha= $_POST['v3'];
		$Editorial= $_POST['v4'];
		$Categoria= $_POST['v5'];
		$Autor= $_POST['v6'];
		$Pais_Autor= $_POST['v7'];
		
		//llamado de la clase y paso de datos recojidos
		$a= new Formulario($Isbn,$Libro,$Fecha,$Editorial,$Categoria,$Autor,$Pais_Autor);
		$b= $a->insertar();//llamado al metodo insertar
		if ($b==true)
		{echo "
		<script>
				alert ('¡Registro exitoso!')
				window.location.replace('../../Vista/libros/consulta_lib.php');
		</script>";}
		else
		{echo "<script>alert('Informacion no registrada')</script>";} 
	}
?>
<?php
class Formulario 
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
		//llamado a la clase conexion
		$inten= new Conexion();
		$c=$inten->conm();
		//setencias sql
		$enviar= ("INSERT INTO `libros`(`isbn`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`)  VALUES ('$this->Isbn','$this->Libro','$this->Fecha','$this->Editorial','$this->Categoria','$this->Autor','$this->Pais_Autor')");
		return $van=mysqli_query($c,$enviar);//insercion de los datos
	}
}

?>