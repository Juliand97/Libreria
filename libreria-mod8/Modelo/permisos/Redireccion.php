<?php 
/*Recibe el dato de los menus para realizar las respectivas redirecciones*/
Class Redireccion
{
	public function redireccionar($rol)
	{
		if ($rol=='admin')
		{
			header("Location: ../../Vista/pag_principal.php");
		}

		if ($rol=='cliente')
		{
			header("Location: ../../Vista/pag_cliente.php");
		}
	}
}
 ?>
