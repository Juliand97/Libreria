<?php 
class Categorias
{
	Private $db;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
	}

	public function insertar($cat)
	{
		$visible=1;
		
		$verificacion="SELECT * from categoria where categoria='$cat'";
		$control=$this->db->query($verificacion);
		$control1=mysqli_fetch_array($control);
		$redundancia=$control1['categoria'];
		
		if ($cat==$redundancia)
		{
			echo "<script>

				alert('Categoria ya existente')
				window.location.replace('categorias_con_ctrl.php')
			</script>";
		}
		else
		{	
			$datos="INSERT into categoria (categoria,estado) VALUES ('$cat','$visible')";
			$ejecutar=$this->db->query($datos);
			header("Location: categorias_con_ctrl.php");		
		}
	}

	public function consultar()
	{
		$estado=1;
		$info=array();
		$sql="SELECT * from categoria where estado='$estado'";
		$envio=$this->db->query($sql);
		while ($filas=mysqli_fetch_array($envio))
		{
			$info[]=$filas;
		}
		return $info;
	}

	public function edicion($trae_id)
	{
		$sql="SELECT * from categoria where id_cat='$trae_id'";
		$envio=$this->db->query($sql);
		if ($envio==true) 
		{
			$fila=mysqli_fetch_array($envio);
			return $fila;
		}
		else
		{
			echo "
			<script>
				alert('Categoria no existente') 
			</script>
				";
		}	
	}
	public function actualizar($id,$act_id)
	{
		$act="UPDATE categoria set categoria='$act_id' where id_cat='$id'";
		$envio=$this->db->query($act);
		if ($envio==true)
		{
			echo "<script>

				alert('Actualizado')
				window.location.replace('categorias_con_ctrl.php')
			</script>";
		}
	}

	public function eliminar($elim_id)
	{
		$oculto=0;
		/*Sentencias SQL*/
		$borrar = "UPDATE categoria set estado='$oculto' WHERE id_cat='$elim_id'";
		$result = $this->db->query($borrar) or die ($borrar);/*Ejecución de eliminación*/
		return true;
	}
	public function lista()
	{
		$estado=1;
		$sql="SELECT * from categoria where estado='$estado'";
		$envio=$this->db->query($sql);
		while ($filas=mysqli_fetch_array($envio))
		{
			echo "<option>".$info=$filas['categoria']."</option>";
		}
	}
}
 ?>
