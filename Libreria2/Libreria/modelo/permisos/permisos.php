<?php 
session_start();
class permiso
{
	function validarPermiso()
	{

		$list=$_POST['lista'];
		echo $list;
	
		switch ($list) 
		{
			case 'admin':
				header("location:../../Vista/principal.php");
				break;
			case 'cliente':
				header("location:../../Vista/pag_cliente_log.php");
				
				break;
			/*case 'proveedor':
			
				
			
			break;*/
			default:
				# code...
				break;
		}
				
	}
}
$obj= new permiso();
$obj->validarPermiso();

 ?>