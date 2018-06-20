<?php	
	include("../../controlador/base_de_datos.php");
	include("../../controlador/seguridad/inter/seguridad_admin.php"); 

if(isset($_POST['insert']))
	{
		$doc= $_POST['doc'];
		$nombre= $_POST['nombre'];
		$correo= $_POST['email'];
		$contrasena= $_POST['pass'];
		$privilegios_c;
		
		$a= new Formulario();
		$b= $a->insertar();
		if ($b==true){

			header("Location:../../vista/clientes/consulta.php ");
		}
		else
		{
			echo "a";
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
		$verificacion="SELECT * from usuarios where identificacion='$this->doc'";
		$control=mysqli_query($c,$verificacion);
		$control1=mysqli_fetch_array($control);
		$redundancia=$control1['identificacion'];
		if ($this->doc==$redundancia)
		{
			echo "<script>
					alert('Usuario ya existente')
					window.Location.Replace(../../Vista/clientes/consulta.php);
						";
					
		}
		else
		{
		$enviar= "INSERT INTO `usuarios`(`identificacion`, `nombre`, `correo`, `contrasena`)  VALUES ('$this->doc','$this->nombre','$this->correo',aes_encrypt('$credencial','$permiso'))";
		echo $enviar;

		header("Location:../../Vista/clientes/consulta.php ");
		
		
		}
echo "a";
		return $van=mysqli_query($c,$enviar);
	}
}