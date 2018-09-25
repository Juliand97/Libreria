<?php 
class Limpiar
{
	public  function caracteres($dato1,$dato2)
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

			return $devolver;
	}

	public  function caracteres2($dato1,$dato2,$dato3)
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


			$dato3=str_replace("*"," ",$dato3);
			$dato3=str_replace(";"," ",$dato3);
			$dato3=str_replace("'"," ",$dato3);
			$dato3=str_replace("/"," ",$dato3);
			$dato3=str_replace("<"," ",$dato3);
			$dato3=str_replace(">"," ",$dato3);
			$dato3=str_replace("-"," ",$dato3);
			$dato3=str_replace("="," ",$dato3);
			$dato3=str_replace("%"," ",$dato3);
			$dato3=str_replace('"',' ', $dato3);
			$dato3=str_replace("update"," ",$dato3);
			$dato3=str_replace("delete"," ",$dato3);
			$dato3=str_replace("drop"," ",$dato3);
			$dato3=str_replace("truncate"," ",$dato3);
			$dato3=str_replace("from","",$dato3);
			$dato3=str_replace("!","",$dato3);
			$dato3=str_replace("(","",$dato3);
			$dato3=str_replace(")","",$dato3);

			$devolver=array($dato1,$dato2,$dato3);

			return $devolver;
	}
}
 ?>