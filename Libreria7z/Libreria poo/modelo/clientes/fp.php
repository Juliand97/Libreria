<?php	
	include("../../controlador/seguridad pags.php");
	$admin= new Seguridad();
	$usuario_admin= $admin->control();  

if(isset($_POST['insert']))
	{
		$doc= $_POST['doc'];
		$nombre= $_POST['nombre'];
		$correo= $_POST['email'];
		$contrasena= $_POST['pass'];
		$privilegios_c;
		
		$a= new Formulario();
		$b= $a->insertar();
		if ($b==true)
		{echo "<script>alert('Informacion registrada')
				window.location.replace('../../Vista/clientes/consulta.php');
				</script>";}
		else
		{
			echo "<script>alert('Informacion no registrada')
				window.location.replace('../../Vista/clientes/formulario.php');
				</script>";
		}
	}
class Formulario 
{
	public $doc;
	public $nombre;
	public $correo;
	public $contrasena;
	public $privilegios;
	public $cod_en;	
	public $credencial;
	public $encrypted_data_hex;
	public function __construct()
	{
		$this->doc=$_POST['doc'];
		$this->nombre=$_POST['nombre'];
		$this->correo=$_POST['email'];
		$this->contrasena=$_POST['pass'];
		$this->privilegios="cliente";
		$this->cod_en="2018";
	}
	 
	public function insertar()
	{
		$credencial=$this->contrasena;
		$permiso=$this->cod_en;
		$inten= new Conexion();
		$c=$inten->conm();
		$enviar= "INSERT INTO `usuarios`(`identificacion`, `nombre`, `correo`, `privilegios`, `contrasena`)  VALUES ('$this->doc','$this->nombre','$this->correo','$this->privilegios',aes_encrypt('$credencial','$permiso'))";
		echo $enviar;
		return $van=mysqli_query($c,$enviar);
	}
}