<?php	
	include("../../controlador/seguridad pags.php");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();  

if(isset($_POST['insert']))//si se le dio clic al boton enviar 
	{
		//datos recojidos
		$id= $_POST['id'];
		$nombre= $_POST['nombrea'];
		$apellido= $_POST['apellidoa'];
		$nac= $_POST['nac'];
		$fechan= $_POST['fechan'];
		$estado= $_POST['estadoa'];
		$obras= $_POST['obras'];
		
		
		//llamado de la clase y paso de datos recojidos
		$a= new Formulario();/*($id,$nombre,$apellido,$nac,$fechan,$estado,$obras);*/
		$b= $a->insertar();//llamado al metodo insertar
		

	}
class Formulario 
{
	public $id;
	public $nombre;
	public $apellido;
	public $nac;
	public $fechan;
	public $estado;
	public $obras;
	
	//variables que recepcionaran los datos
	//public $enviar;

	
	public function __construct()/*($id,$nombre,$apellido,$nac,$fechan,$estado,$obras)*/
	{
		//asignacion de valores
		$this->id=$_POST['id'];
		$this->nombre=$_POST['nombrea'];
		$this->apellido= $_POST['apellidoa'];
		$this->nac= $_POST['nac'];
		$this->fechan=$_POST['fechan'];
		$this->estado= $_POST['estadoa'];
		$this->obras=$_POST['obras'];
		
		
		
	}
	public function insertar()
	{
		
		//llamado a la clase conexion
		$inten= new Conexion();
		$c=$inten->conm();
		//setencias sql
		$verificacion="SELECT * from autores where nombrea='$this->nombre' ";
		$control=mysqli_query($c,$verificacion);
		$control_info=mysqli_fetch_array($control);
		$n_autor=$control_info['nombrea'];
		$a_autor=$control_info['apellidoa'];
		if ($this->nombre==$n_autor and $this->apellido==$a_autor)
		{
			echo "<script>alert('Autor ya existe')
					window.location.replace('../../Vista/autores/consulta.php')
				</script>";
		}
		else
		{
		$enviar= "INSERT INTO `autores`(`no_registro`, `nombrea`, `apellidoa`,`nac`,`fechan`,`estadoa`,`obras`)  VALUES ('$this->id','$this->nombre','$this->apellido','$this->nac','$this->fechan','$this->estado','$this->obras')";
		return $van=mysqli_query($c,$enviar);//insercion de los datos
		}
		
	}
}
