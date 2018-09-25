<?php 
/*Recepcion de informacion y envio a su respectivo procesamiento.Adicional a ello se realiza la asignación de permisos */
require_once '../../Modelo/clientes/Clientes.php';
require_once '../../Modelo/clientes/Limpiar.php';
$Limpiar=new Limpiar;
$cl= new Clientes;
require_once '../../Vista/clientes/reg_perfil_clientes.php';
if (!empty($_POST['insert']))
{
	$id=$_POST['doc'];
	$nom1=$_POST['pnombre'];
	$nom2=$_POST['snombre'];
	$ape1=$_POST['papellido'];
	$ape2=$_POST['sapellido'];
	$correo=$_POST['email'];
	$cont=$_POST['pass'];
	$permiso=$_POST['permiso'];

	$caracteres=$Limpiar->caracteres($id,$nom1,$nom2,$ape1,$ape2,$correo,$cont);
	$recostruccion=implode(",",$caracteres);
	list($id1,$nom_1,$nom_2,$ape_1,$ape_2,$correo_1,$cont_1)=explode(",",$recostruccion);

	$insertar=$cl->insertar($id1,$nom_1,$nom_2,$ape_1,$ape_2,$correo_1,$cont_1);
	$permiso= $cl->permisos($id_1,$permiso);
}

 ?>