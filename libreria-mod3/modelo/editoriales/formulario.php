<?php
include("../../controlador/base_de_datos.php");
include("../../controlador/seguridad/inter/seguridad_admin.php");

if (isset($_POST ['insert']))
{
	$a=new Editorial ();
	$b=$a->insertar ();
	header("Location: ../../Vista/editoriales/consulta.php");
	
}

 class Editorial
 {
	 public $cod;
	 public $nom_e;
	 public $ubi;
	 public $tel;
	 public $email;
	 public $pbx; 
	 public $jefe;
	 public $fecha;
	 
	 public function __construct ()
	 {
		  $this->ubicacion=$_POST['ubi'];
		  $this->telefono=$_POST['tel'];
		  $this->correo=$_POST['email'];
		  $this->pbx=$_POST['pbx'];
		  $this->jefe_editorial=$_POST['jefe'];
		  $this->fecha_creacion=$_POST['fecha'];
		  $this->nombre_e=$_POST['nom_e'];
		   $this->codigo_postal=$_POST['cod'];  
	 }

	 public function insertar ()
	 { 
		$inten= new Conexion();
		$c=$inten->conm();
		$verificacion= "SELECT * from editoriales where nombre_e='$this->nombre_e'";
		$control=mysqli_query($c,$verificacion);
		$contrl_info=mysqli_fetch_array($control);
		$redundancia=$contrl_info['nombre_e'];
		echo $redundancia;
		

		if ($this->nombre_e==$redundancia) 
		{
			
			echo "<script>

				alert('Editorial ya existente')
				window.location.replace('../../Vista/editoriales/consulta.php')

			</script>";
		}

		else
		{
			
		$enviar= "INSERT INTO editoriales (ubicacion,telefono,correo,pbx,jefe_editorial,fecha_creacion,nombre_e,codigo_postal) VALUES ('$this->ubicacion','$this->telefono','$this->correo','$this->pbx','$this->jefe_editorial','$this->fecha_creacion','$this->nombre_e','$this->codigo_postal')";
		return $van=mysqli_query($c,$enviar);
		}
	 }
 } 