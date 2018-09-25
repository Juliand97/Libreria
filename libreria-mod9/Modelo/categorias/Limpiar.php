<?php 
class Limpiar
{
	public  function caracteres($dato)
	{
			$dato=str_replace("*"," ",$dato);
			$dato=str_replace(";"," ",$dato);
			$dato=str_replace("'"," ",$dato);
			$dato=str_replace("/"," ",$dato);
			$dato=str_replace("<"," ",$dato);
			$dato=str_replace(">"," ",$dato);
			$dato=str_replace("-"," ",$dato);
			$dato=str_replace("="," ",$dato);
			$dato=str_replace("%"," ",$dato);
			$dato=str_replace('"',' ', $dato);
			$dato=str_replace("update"," ",$dato);
			$dato=str_replace("delete"," ",$dato);
			$dato=str_replace("drop"," ",$dato);
			$dato=str_replace("truncate"," ",$dato);
			$dato=str_replace("from","",$dato);
			$dato=str_replace("!","",$dato);
			$dato=str_replace("(","",$dato);
			$dato=str_replace(")","",$dato);
			return $dato;
	}

	public function caracteres2($dato1,$dato2)
	{

		$dato1=str_replace("*"," ",$dato1);
		$dato1=str_replace(";"," ",$dato1);
		$dato1=str_replace("'"," ",$dato1);
		$dato1=str_replace("/"," ",$dato1);
		$dato1=str_replace("<"," ",$dato1);
		$dato1=str_replace(">"," ",$dato1);
		$dato1=str_replace("-"," ",$dato1);
		$dato1=str_replace("="," ",$dato1);
		$dato1=str_replace("%"," ",$dato1);
		$dato1=str_replace('"',' ', $dato1);
		$dato1=str_replace("update"," ",$dato1);
		$dato1=str_replace("delete"," ",$dato1);
		$dato1=str_replace("drop"," ",$dato1);
		$dato1=str_replace("truncate"," ",$dato1);
		$dato1=str_replace("from","",$dato1);
		$dato1=str_replace("!","",$dato1);
		$dato1=str_replace("(","",$dato1);
		$dato1=str_replace(")","",$dato1);


		$dato2=str_replace("*"," ",$dato2);
		$dato2=str_replace(";"," ",$dato2);
		$dato2=str_replace("'"," ",$dato2);
		$dato2=str_replace("/"," ",$dato2);
		$dato2=str_replace("<"," ",$dato2);
		$dato2=str_replace(">"," ",$dato2);
		$dato2=str_replace("-"," ",$dato2);
		$dato2=str_replace("="," ",$dato2);
		$dato2=str_replace("%"," ",$dato2);
		$dato2=str_replace('"',' ', $dato2);
		$dato2=str_replace("update"," ",$dato2);
		$dato2=str_replace("delete"," ",$dato2);
		$dato2=str_replace("drop"," ",$dato2);
		$dato2=str_replace("truncate"," ",$dato2);
		$dato2=str_replace("from","",$dato2);
		$dato2=str_replace("!","",$dato2);
		$dato2=str_replace("(","",$dato2);
		$dato2=str_replace(")","",$dato2);
		
		$devolver=array($dato1,$dato2);
		#print_r($devolver);
		return $devolver;
	}
}
 ?>