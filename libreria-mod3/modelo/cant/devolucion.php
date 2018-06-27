<?php 
if (isset($_POST['envio']))
 {
	$o= new cantidaddev();
	$o->devolucion($_POST['id'],$_POST['dev']);
}

include("../../controlador/seguridad/inter/seguridad_admin.php");
class  cantidaddev
{
	public function devolucion($id_dev,$cantd)
	{
		include("../../controlador/base_de_datos.php");
		$inten = new Conexion();/*Llamado a la clase conexion*/
		$con=$inten->conm();
		$texto="Devolucion: libro correspondiente al isbn ".$id_dev;
		
		$insercion="INSERT into historial (id_u,isbn_c,Descripcion,fecha_de_entrada,cant_ingresada,Fecha_de_salida,cant_reservada,cant_lib_dev,fecha_de_devolucion) values ('$id_dev','$id_dev','$texto','N/A','0','N/A','0','$cantd',NOW())";
		
		$envio=mysqli_query($con,$insercion);
		header("Location: ../../Vista/cant/consulta_cant.php");
		
	}
}


 ?>