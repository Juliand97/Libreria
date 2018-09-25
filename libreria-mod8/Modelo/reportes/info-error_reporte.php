<?php
Class mostrar_error
{
	public function error_rep()
	{
		error_reporting(E_ALL);
		ini_set('display_errors', true);
		ini_set('display_startup_errors',true);
		date_default_timezone_get('Europe/London');
	}

	public function no_console()
	{
		if (PHP_SAPI=='cli')
		{
			die('No lo intentes por aqui. Ve a tu navegador');
		}

	}

	public function headers()
	{
		#Formato de excel
		header('Content-Type: application/vnd.ms-excel');
		#Define el nombre del archivo
		header('Content-Disposition: attachment;filename="Reporte.xls"');
		#Cantidad de cache
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');

		#Modificacion inicial	
		header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		#Actulizacion de la fecha de modificacion 
		header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
		header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header ('Pragma: public'); // HTTP/1.0
	}
}

?>