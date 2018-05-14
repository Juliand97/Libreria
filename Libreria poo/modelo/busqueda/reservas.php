<?php
include ("../../controlador/Base_de_datos.php");
include("../../controlador/seguridad/seguridad_cliente.php"); 	
#session_start();
 class Reserva 
 {
 	public $dato1;
 	public $dato2;
 	public $name;

 	public function __construct()
 	{
 		
 		$this->dato1=$_POST['cant'];
 	}
	 public function compra_l()
	 {
	 	
	 	$_SESSION['libro_i'];
	 	$quitar=$this->dato1;

	 	echo $_SESSION['libro_i'];

	 	$inten= new Conexion();
		$con=$inten->conm();

		$comprar="UPDATE libros set cantidad=(cantidad-$quitar) WHERE isbn='$_SESSION[libro_i]'";
		echo $comprar;

		$p=mysqli_query($con,$comprar);
		
		/**/
	 } 
	 public function novedad()
	 {
	 	$_SESSION['libro_i'];
	 	$quitar=$this->dato1;
	echo $quitar;
	 	$inten= new Conexion();
		$con=$inten->conm();
	 	$libro= "SELECT * FROM libros WHERE isbn='$_SESSION[libro_i]'";
	echo $libro;
		$trae=mysqli_query($con,$libro);
		$traer_lib= mysqli_fetch_array($trae);
		$lib=$traer_lib['libro'];
		$cantidad=$traer_lib['cantidad'];
		if ($cantidad<=0) 
		{
			$cerrar_venta="UPDATE `libros` SET compra='vendido' WHERE isbn='$_SESSION[libro_i]'";
			$envio=mysqli_query($con,$cerrar_venta);
			echo "<script>alert('lo sentimos pero este libro no lo tenemos en el momento')</script>";

		}
		else
		{
			$envio="INSERT into vendidos (id_u,isbn_c,cant_vendida,fecha) values('$_SESSION[libro_i]','$_SESSION[libro_i]','$quitar',NOW())";
			echo $envio;
			$registra=mysqli_query($con,$envio);
			echo "<script>alert('Producto reservado con exito') </script>";
			header("Location: ../../Vista/pag_cliente_log.php");
		}
		
	 }
	 
 }
 $nuevbo= new Reserva();
 $nuevbo->compra_l();
 $nuevbo->novedad();
?>