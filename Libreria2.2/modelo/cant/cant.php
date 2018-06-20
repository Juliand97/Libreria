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
	public function consulta()
	{
		$inten = new Conexion();/*Llamado a la clase conexion*/
		$con=$inten->conm();
		$add="SELECT * from cantidad";
		$envio= mysqli_query($con,$add);
		$paso= new cantidad();
		$p_info= $paso->add($con,$envio);
	}
	public function add($bd,$sql)
	{
		$trae=mysqli_fetch_array($sql);
		$cant=$trae['cant_existente'];
		
		$adicion=$cant+$this->cantidad;	
		echo $adicion;	
		$ingreso="UPDATE cantidad set cant_existente='$adicion' where isbn_lib='$this->lib'";
		$envios=mysqli_query($bd,$ingreso);
		$des="Ingreso: "." libro correpondiente al isbn ".$this->lib;
		$envio="INSERT into historial (id_u,isbn_c,Descripcion,fecha_de_entrada,cant_ingresada,fecha_de_salida,cant_reservada) values('4','$this->lib','$des',NOW(),'$this->cantidad','N/A','0')";
		$historial=mysqli_query($bd,$envio);
		header("Location:../../Vista/libros/consulta_lib.php");
	}

}
$o= new cantidad();
$o->consulta();
 ?>
