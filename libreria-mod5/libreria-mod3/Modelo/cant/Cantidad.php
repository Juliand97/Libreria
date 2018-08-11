<?php 
Class Cantidad
{
	Private $db;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
	}

	public function add($isbn,$cant)
	{
		$verificacion="SELECT * from libros where isbn='$isbn'";
		$verificacion1=$this->db->query($verificacion);
		$info=mysqli_fetch_array($verificacion1);
		$isbn_verificacion=$info['isbn'];
		if ($isbn_verificacion!=null)
		{
			$des="Ingreso: "." libro correpondiente al isbn ".$isbn;
			$envio="INSERT into historial (id_u,isbn_c,Descripcion,fecha_de_entrada,cant_ingresada,fecha_de_salida,cant_reservada,cant_lib_dev,fecha_de_devolucion) values('4','$isbn','$des',NOW(),'$cant','N/A','0','0','N/A')";
			$historial=$this->db->query($envio);
			#header("Location:../../Vista/libros/consulta_lib.php");
		}
		else
		{
			echo "ISBN erroneo por favor intente de nuevo";
		}	
	}
	
 	public function consulta($dato)
	{
		$consulta= "SELECT isbn,isbn_c,libro,sum(cant_ingresada) as entrantes,sum(cant_reservada) as prestados,sum(cant_lib_dev) as devolucion from historial inner join libros WHERE isbn='$dato' and isbn_c=isbn";
		
		$envio=$this->db->query($consulta);
		
		$info=mysqli_fetch_array($envio);
		return $info;
		 #$existencia=$salida-$devuelto;
		 #$total=$cant-$existencia;
	}
}
 ?>