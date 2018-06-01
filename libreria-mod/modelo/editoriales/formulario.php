<?php
include("../../controlador/base_de_datos.php");

if (isset($_POST ['insert']))
{
	$a=new Formulario ();
	$b=$a->insertar ();
	if ($b==true)
		{echo "<script>alert('Informacion registrada')</script>";}
			else
		{echo "<script>alert('Informacion no registrada')</script>";}
}

 class Formulario 
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
		echo $this->codigo_postal;
		echo $this->nombre_e;
		echo $this->ubicacion;
		echo $this->telefono;
		echo $this->correo;
		echo $this->jefe_editorial;
		echo $this->fecha_creacion;
		$enviar= "INSERT INTO editoriales (ubicacion,telefono,correo,pbx,jefe_editorial,fecha_creacion,nombre_e,codigo_postal) VALUES ('$this->ubicacion','$this->telefono','$this->correo','$this->pbx','$this->jefe_editorial','$this->fecha_creacion','$this->nombre_e','$this->codigo_postal')";
		return $van=mysqli_query($c,$enviar);
	 }
 } 