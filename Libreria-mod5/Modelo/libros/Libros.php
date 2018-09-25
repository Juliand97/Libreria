<?php 
Class Libros
{
	Private $db;
	private $activo;
	private $inactivo;
	private $estado;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
		$this->activo=1;
		$this->inactivo=0;
		$this->estado="Disponible";
	}

	public function insertar($id,$nom,$fec,$ed,$cat,$aut,$p_aut)
	{
		//verificacion
		$verifica="SELECT * FROM libros where isbn='$id'";
		$control=$this->db->query($verifica);
		$control1=mysqli_fetch_array($control);
		$control2=$control1['isbn'];
		if ($id==$control2)
		{
			echo "<script>

				alert('Libro ya existente')
				window.location.replace('../../Vista/libros/consulta_lib.php')

			</script>";
		}
		else
		{
			#
			//setencias sql
			$enviar= "INSERT INTO `libros`(`isbn`, `libro`, `fecha`, `editorial`, `categoria`, `autor`, `pais_de_autor`,compra,estado)  VALUES ('$id','$nom','$fec','$ed','$cat','$aut','$p_aut','$this->estado','$this->activo')";
				$van=$this->db->query($enviar);//insercion de los datos
				header("Location: libros_con_ctrl");
		}
	}

	public function consulta()
	{
		$informacion=array();
		$sql="SELECT * FROM libros where estado='$this->activo'";
		$envio=$this->db->query($sql);
		while ($trae=mysqli_fetch_array($envio))
		{
			$informacion[]=$trae;
		}

		return $informacion;
	}

	public function selec($dato)
	{
		$sql="SELECT * FROM libros where isbn='$dato'";
		$envio=$this->db->query($sql);
		$trae=mysqli_fetch_array($envio);
		return $trae;
	}

	public function actualizar($id,$nom,$fec,$ed,$cat,$aut,$p_aut,$est,$indice)
	{
		if ($est=='Disponible')
		{
			$disponibilidad=1;
		}
		else
		{
			$disponibilidad=0;
		}

		$actualizar= "UPDATE libros SET isbn='$id', libro='$nom', fecha='$fec', editorial='$ed', categoria='$cat', autor='$aut', pais_de_autor='$p_aut', compra='$est', estado='$disponibilidad' WHERE isbn='$indice'";
		$envio=$this->db->query($actualizar);
		if ($envio==true)
		{
			echo "<script>
				alert('Actualizado!')
				window.location.replace('libros_con_ctrl.php')

			</script>";
		}
	}

	public function eliminar($indicio)
	{
		$elim="UPDATE libros set estado='$this->inactivo' where isbn='$indicio'";
		$ocultar=$this->db->query($elim);
		if ($ocultar==true)
		{
			echo "<script>
				alert('Eliminado!')
				window.location.replace('libros_con_ctrl.php')
			</script>";
		}
	}
}
 ?>