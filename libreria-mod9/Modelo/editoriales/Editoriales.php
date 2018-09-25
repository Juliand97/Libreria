<?php 
Class Editoriales
{
	private $db;
	private $activo;
	private $deshabilitado;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
		$this->activo=1;
		$this->deshabilitado=0;
	}

	public function insertar($cod,$ed)
	{
		$ed=ltrim($ed);
		#######Verificacion de editorial#######

		$verifica="SELECT * from editorial where nombre_e='$ed'";
		$verificacion=$this->db->query($verifica);
		$trae=mysqli_fetch_array($verificacion);
		$editorial=$trae['nombre_e'];
		if ($ed==$editorial)
		{
			echo "<script>
					alert('Editorial ya existente')
					window.location.replace('editoriales_con_ctrl.php');
						";
		}
		else
		{
			$sql="INSERT into editorial (codigo_postal,nombre_e,estado) values('$cod','$ed','$this->activo')";
			$envio=$this->db->query($sql);
			header("Location: editoriales_con_ctrl.php");
		}
	}

	public function consultar()
	{
		$info=array();
		$ver="SELECT * from editorial where estado='$this->activo'";
		$envio=$this->db->query($ver);
		while ($traer=mysqli_fetch_array($envio))
		{
			$info[]=$traer;
		}
		return $info;
	}

	public function seleccion($indice)
	{
		$quita=trim($indice);
		$sql="SELECT * from editorial where nombre_e='$quita'";
		$envio=$this->db->query($sql);
		$resultado=mysqli_fetch_array($envio);
		return $resultado;
	}

	public function actualizar($cod_act,$indice,$nom_act)
	{
		$nom_act=ltrim($nom_act);
		$indice=ltrim($indice);
		$sql="UPDATE editorial set codigo_postal='$cod_act',nombre_e='$nom_act' where nombre_e='$indice'";
		$envio=$this->db->query($sql);
		if ($envio==true)
		{
			echo "<script>
				alert('Actualizado!')
				window.location.replace('editoriales_con_ctrl.php')
			</script>";
		}
	}

	public function eliminar($dato)
	{
		$eli="UPDATE editorial set estado='$this->deshabilitado' where nombre_e='$dato'";
		$envio=$this->db->query($eli);
		if ($envio==true)
		{
			echo "<script>
				alert('Eliminado!')
				window.location.replace('editoriales_con_ctrl.php')
			</script>";
		}
	}

	public function lista()
	{
		$ver="SELECT * from editorial where estado='$this->activo'";
		$envio=$this->db->query($ver);
		while ($traer=mysqli_fetch_array($envio))
		{
			echo "<option>".$info=$traer['nombre_e']."</option>";
		}
	}	
}
 ?>