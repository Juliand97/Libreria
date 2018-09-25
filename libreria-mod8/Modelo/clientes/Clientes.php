<?php 
Class Clientes
{
	Private $db;
	private $cod_en;

	public function __construct()
	{
		require_once '../../Modelo/Conexion.php';
		$this->db=Conexion::conm();
		$this->cod_en="2018";
	}

	public function insertar($id,$n1,$n2,$a1,$a2,$correo,$pass)
	{
		$visible=1;
		$credencial=$pass;
		$permiso=$this->cod_en;
		######Inicio de verificacion si el usuario ya esta registrado#####
		$verificacion="SELECT * from usuario where identificacion='$id'";
		$control=$this->db->query($verificacion);
		$control1=mysqli_fetch_array($control);
		$redundancia=$control1['identificacion'];

		if ($id==$redundancia )
		{
			echo "<script>
					alert('Usuario ya existente')
					window.Location.Replace(../../Vista/clientes/consulta.php);
					</script>	";
		}
		else
		{	
			############################Envio de info################################
			$enviar1= "INSERT INTO usuario(identificacion,p_nombre,s_nombre,p_apellido,s_apellido,correo,contrasena,estado) VALUES ('$id','$n1','$n2','$a1','$a2','$correo',aes_encrypt('$credencial','$permiso'),'$visible')";
			$insertar1=$this->db->query($enviar1);
			header("Location: clientes_con_ctrl.php");
		}	
	}

	public function consulta()
	{
		$estado=1;
		$info=array();
		$rol="SELECT * from usuario where estado='$estado'";
		$envio= $this->db->query($rol);
		while($trae=mysqli_fetch_array($envio))
		{
			$info[]=$trae;
		}
		return $info;
	}

	public function selec($dato)
	{
		$indice=ltrim($dato);
		$sql="SELECT * from usuario where identificacion='$indice'";
		
		$envio=$this->db->query($sql);
		$trae=mysqli_fetch_array($envio);
		return $trae;
	}

	public function actualizar($id,$n1,$n2,$a1,$a2,$correo,$dato)
	{
		$act="UPDATE usuario set identificacion='$id',p_nombre='$n1',s_nombre='$n2',p_apellido='$a1',s_apellido='$a2',correo='$correo' where identificacion='$dato'";
		$envio=$this->db->query($act);
		if ($envio==true)
		{
			echo "<script>
				alert('Actualizado!')
				window.location.replace('clientes_con_ctrl.php')
			</script>";
		}
	}
	public function actualizar_perfil($id,$n1,$n2,$a1,$a2,$correo,$dato)
	{

		$act="UPDATE usuario set identificacion='$id',p_nombre='$n1',s_nombre='$n2',p_apellido='$a1',s_apellido='$a2',correo='$correo' where identificacion='$dato'";
	
		$envio=$this->db->query($act);
		if ($envio==true)
		{
			echo "<script>
				alert('Actualizado!')
				window.location.replace('perfil_clientes_con_ctrl.php')
			</script>";
		}
	}

	public function eliminar($indice)
	{
		$estado=0;
		$elim="UPDATE usuario set estado='$estado' where identificacion='$indice'";
		$oculto=$this->db->query($elim);
		if ($oculto==true)
		{
			echo "<script>
				alert('Eliminado!')
				window.location.replace('clientes_con_ctrl.php')
			</script>";
		}
	}
	public function datos_perfil()
	{
		$sql="SELECT * from usuario where identificacion='$_SESSION[id]'";
		$envio=$this->db->query($sql);
		$trae=mysqli_fetch_array($envio);

		return $trae;
	}
	
	public function roles()
	{
		$info=array();
		$rol="SELECT * from rol";
		$envio= $this->db->query($rol);
		while($trae=mysqli_fetch_array($envio))
		{
			$info[]=$trae;
		}
		return $info;
	}

	public function permisos($id,$rol_u)
	{
		$verificacion="SELECT * from usuario where identificacion='$id'";
		$control=$this->db->query($verificacion);
		$control1=mysqli_fetch_array($control);
		$dato=$control1['identificacion'];
		######Asignacion de permisos al nuevo usuario#####################
		
		if ($id==$dato)
		{
			$rol="SELECT * from rol where t_permiso='$rol_u'";
			$envio= $this->db->query($rol);
			$trae=mysqli_fetch_array($envio);
			$asigna=$trae['u_rol'];
			$enviar="INSERT INTO permiso (id_usuario,id_rol) VALUES('$id','$asigna')";
			$insertar=$this->db->query($enviar);
		}
	}
}
 ?>
