<?php 
class Limpiar
{
	public  function caracteres($dato1,$dato2,$dato3,$dato4,$dato5,$dato6,$dato7)
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

			$dato4=str_replace("*"," ",$dato4);
			$dato4=str_replace(";"," ",$dato4);
			$dato4=str_replace("'"," ",$dato4);
			$dato4=str_replace("/"," ",$dato4);
			$dato4=str_replace("<"," ",$dato4);
			$dato4=str_replace(">"," ",$dato4);
			$dato4=str_replace("-"," ",$dato4);
			$dato4=str_replace("="," ",$dato4);
			$dato4=str_replace("%"," ",$dato4);
			$dato4=str_replace('"',' ', $dato4);
			$dato4=str_replace("update"," ",$dato4);
			$dato4=str_replace("delete"," ",$dato4);
			$dato4=str_replace("drop"," ",$dato4);
			$dato4=str_replace("truncate"," ",$dato4);
			$dato4=str_replace("from","",$dato4);
			$dato4=str_replace("!","",$dato4);
			$dato4=str_replace("(","",$dato4);
			$dato4=str_replace(")","",$dato4);


			$dato5=str_replace("*"," ",$dato5);
			$dato5=str_replace(";"," ",$dato5);
			$dato5=str_replace("'"," ",$dato5);
			$dato5=str_replace("/"," ",$dato5);
			$dato5=str_replace("<"," ",$dato5);
			$dato5=str_replace(">"," ",$dato5);
			$dato5=str_replace("-"," ",$dato5);
			$dato5=str_replace("="," ",$dato5);
			$dato5=str_replace("%"," ",$dato5);
			$dato5=str_replace('"',' ', $dato5);
			$dato5=str_replace("update"," ",$dato5);
			$dato5=str_replace("delete"," ",$dato5);
			$dato5=str_replace("drop"," ",$dato5);
			$dato5=str_replace("truncate"," ",$dato5);
			$dato5=str_replace("from","",$dato5);
			$dato5=str_replace("!","",$dato5);
			$dato5=str_replace("(","",$dato5);
			$dato5=str_replace(")","",$dato5);

			$dato6=str_replace("*"," ",$dato6);
			$dato6=str_replace(";"," ",$dato6);
			$dato6=str_replace("'"," ",$dato6);
			$dato6=str_replace("/"," ",$dato6);
			$dato6=str_replace("<"," ",$dato6);
			$dato6=str_replace(">"," ",$dato6);
			$dato6=str_replace("-"," ",$dato6);
			$dato6=str_replace("="," ",$dato6);
			$dato6=str_replace("%"," ",$dato6);
			$dato6=str_replace('"',' ', $dato6);
			$dato6=str_replace("update"," ",$dato6);
			$dato6=str_replace("delete"," ",$dato6);
			$dato6=str_replace("drop"," ",$dato6);
			$dato6=str_replace("truncate"," ",$dato6);
			$dato6=str_replace("from","",$dato6);
			$dato6=str_replace("!","",$dato6);
			$dato6=str_replace("(","",$dato6);
			$dato6=str_replace(")","",$dato6);

			$dato7=str_replace("*"," ",$dato7);
			$dato7=str_replace(";"," ",$dato7);
			$dato7=str_replace("'"," ",$dato7);
			$dato7=str_replace("/"," ",$dato7);
			$dato7=str_replace("<"," ",$dato7);
			$dato7=str_replace(">"," ",$dato7);
			$dato7=str_replace("-"," ",$dato7);
			$dato7=str_replace("="," ",$dato7);
			$dato7=str_replace("%"," ",$dato7);
			$dato7=str_replace('"',' ', $dato7);
			$dato7=str_replace("update"," ",$dato7);
			$dato7=str_replace("delete"," ",$dato7);
			$dato7=str_replace("drop"," ",$dato7);
			$dato7=str_replace("truncate"," ",$dato7);
			$dato7=str_replace("from","",$dato7);
			$dato7=str_replace("!","",$dato7);
			$dato7=str_replace("(","",$dato7);
			$dato7=str_replace(")","",$dato7);

			$devolver=array($dato1,$dato2,$dato3,$dato4,$dato5,$dato6,$dato7);

			return $devolver;
	}

	public  function caracteres2($dato1,$dato2,$dato3,$dato4,$dato5,$dato6)
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

			$dato4=str_replace("*"," ",$dato4);
			$dato4=str_replace(";"," ",$dato4);
			$dato4=str_replace("'"," ",$dato4);
			$dato4=str_replace("/"," ",$dato4);
			$dato4=str_replace("<"," ",$dato4);
			$dato4=str_replace(">"," ",$dato4);
			$dato4=str_replace("-"," ",$dato4);
			$dato4=str_replace("="," ",$dato4);
			$dato4=str_replace("%"," ",$dato4);
			$dato4=str_replace('"',' ', $dato4);
			$dato4=str_replace("update"," ",$dato4);
			$dato4=str_replace("delete"," ",$dato4);
			$dato4=str_replace("drop"," ",$dato4);
			$dato4=str_replace("truncate"," ",$dato4);
			$dato4=str_replace("from","",$dato4);
			$dato4=str_replace("!","",$dato4);
			$dato4=str_replace("(","",$dato4);
			$dato4=str_replace(")","",$dato4);


			$dato5=str_replace("*"," ",$dato5);
			$dato5=str_replace(";"," ",$dato5);
			$dato5=str_replace("'"," ",$dato5);
			$dato5=str_replace("/"," ",$dato5);
			$dato5=str_replace("<"," ",$dato5);
			$dato5=str_replace(">"," ",$dato5);
			$dato5=str_replace("-"," ",$dato5);
			$dato5=str_replace("="," ",$dato5);
			$dato5=str_replace("%"," ",$dato5);
			$dato5=str_replace('"',' ', $dato5);
			$dato5=str_replace("update"," ",$dato5);
			$dato5=str_replace("delete"," ",$dato5);
			$dato5=str_replace("drop"," ",$dato5);
			$dato5=str_replace("truncate"," ",$dato5);
			$dato5=str_replace("from","",$dato5);
			$dato5=str_replace("!","",$dato5);
			$dato5=str_replace("(","",$dato5);
			$dato5=str_replace(")","",$dato5);

			$dato6=str_replace("*"," ",$dato6);
			$dato6=str_replace(";"," ",$dato6);
			$dato6=str_replace("'"," ",$dato6);
			$dato6=str_replace("/"," ",$dato6);
			$dato6=str_replace("<"," ",$dato6);
			$dato6=str_replace(">"," ",$dato6);
			$dato6=str_replace("-"," ",$dato6);
			$dato6=str_replace("="," ",$dato6);
			$dato6=str_replace("%"," ",$dato6);
			$dato6=str_replace('"',' ', $dato6);
			$dato6=str_replace("update"," ",$dato6);
			$dato6=str_replace("delete"," ",$dato6);
			$dato6=str_replace("drop"," ",$dato6);
			$dato6=str_replace("truncate"," ",$dato6);
			$dato6=str_replace("from","",$dato6);
			$dato6=str_replace("!","",$dato6);
			$dato6=str_replace("(","",$dato6);
			$dato6=str_replace(")","",$dato6);

			$devolver=array($dato1,$dato2,$dato3,$dato4,$dato5,$dato6);
			

			return $devolver;
	}

}
 ?>