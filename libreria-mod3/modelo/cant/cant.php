<?php 
include("../../controlador/base_de_datos.php");
include("../../controlador/seguridad/inter/seguridad_admin.php");
Class cantidad
{
	public $cantidad;
	public $lib;

	public function __construct()
	{
		$this->cantidad=$_POST['cant'];
		$this->lib=$_POST['lib'];
	}	
	public function add()
	{
		$inten = new Conexion();/*Llamado a la clase conexion*/
		$bd=$inten->conm();
		$des="Ingreso: "." libro correpondiente al isbn ".$this->lib;
		$envio="INSERT into historial (id_u,isbn_c,Descripcion,fecha_de_entrada,cant_ingresada,fecha_de_salida,cant_reservada,cant_lib_dev,fecha_de_devolucion)values('4','$this->lib','$des',NOW(),'$this->cantidad','N/A','0','0','N/A')";
		$historial=mysqli_query($bd,$envio);
		header("Location:../../Vista/libros/consulta_lib.php");
	}
	

}
$o= new cantidad();
$o->add();
 ?>
