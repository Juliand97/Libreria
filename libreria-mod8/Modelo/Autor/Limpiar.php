<?php 
class Limpiar
{
	public  function caracteres($nom,$ape,$nac,$fec,$est,$obr)
	{
			$nom=str_replace("*"," ",$nom);
			$nom=str_replace(";"," ",$nom);
			$nom=str_replace("'"," ",$nom);
			$nom=str_replace("/"," ",$nom);
			$nom=str_replace("<"," ",$nom);
			$nom=str_replace(">"," ",$nom);
			$nom=str_replace("-"," ",$nom);
			$nom=str_replace("="," ",$nom);
			$nom=str_replace("%"," ",$nom);
			$nom=str_replace('"',' ', $nom);
			$nom=str_replace("update"," ",$nom);
			$nom=str_replace("delete"," ",$nom);
			$nom=str_replace("drop"," ",$nom);
			$nom=str_replace("truncate"," ",$nom);
			$nom=str_replace("from","",$nom);
			$nom=str_replace("!","",$nom);
			
			$ape=str_replace("*"," ",$ape);
			$ape=str_replace(";"," ",$ape);
			$ape=str_replace("'"," ",$ape);
			$ape=str_replace("/"," ",$ape);
			$ape=str_replace("<"," ",$ape);
			$ape=str_replace(">"," ",$ape);
			$ape=str_replace("-"," ",$ape);
			$ape=str_replace("="," ",$ape);
			$ape=str_replace("%"," ",$ape);
			$ape=str_replace('"',' ', $ape);
			$ape=str_replace("update"," ",$ape);
			$ape=str_replace("delete"," ",$ape);
			$ape=str_replace("drop"," ",$ape);
			$ape=str_replace("truncate"," ",$ape);
			$ape=str_replace("from"," ",$ape);
			$ape=str_replace("!","",$ape);

			$nac=str_replace("*"," ",$nac);
			$nac=str_replace(";"," ",$nac);
			$nac=str_replace("'"," ",$nac);
			$nac=str_replace("/"," ",$nac);
			$nac=str_replace("<"," ",$nac);
			$nac=str_replace(">"," ",$nac);
			$nac=str_replace("-"," ",$nac);
			$nac=str_replace("="," ",$nac);
			$nac=str_replace("%"," ",$nac);
			$nac=str_replace('"',' ', $nac);
			$nac=str_replace("update"," ",$nac);
			$nac=str_replace("delete"," ",$nac);
			$nac=str_replace("drop"," ",$nac);
			$nac=str_replace("truncate"," ",$nac);
			$nac=str_replace("from"," ",$nac);
			$nac=str_replace("!","",$nac);

			$fec=str_replace("*"," ",$fec);
			$fec=str_replace(";"," ",$fec);
			$fec=str_replace("'"," ",$fec);
			$fec=str_replace("/"," ",$fec);
			$fec=str_replace("<"," ",$fec);
			$fec=str_replace(">"," ",$fec);
			$fec=str_replace("-"," ",$fec);
			$fec=str_replace("="," ",$fec);
			$fec=str_replace("%"," ",$fec);
			$fec=str_replace('"',' ', $fec);
			$fec=str_replace("update"," ",$fec);
			$fec=str_replace("delete"," ",$fec);
			$fec=str_replace("drop"," ",$fec);
			$fec=str_replace("truncate"," ",$fec);
			$fec=str_replace("from"," ",$fec);
			$fec=str_replace("!","",$fec);

			$est=str_replace("*"," ",$est);
			$est=str_replace(";"," ",$est);
			$est=str_replace("'"," ",$est);
			$est=str_replace("/"," ",$est);
			$est=str_replace("<"," ",$est);
			$est=str_replace(">"," ",$est);
			$est=str_replace("-"," ",$est);
			$est=str_replace("="," ",$est);
			$est=str_replace("%"," ",$est);
			$est=str_replace('"',' ', $est);
			$est=str_replace("update"," ",$est);
			$est=str_replace("delete"," ",$est);
			$est=str_replace("drop"," ",$est);
			$est=str_replace("truncate"," ",$est);
			$est=str_replace("from"," ",$est);
			$est=str_replace("!","",$est);

			$obr=str_replace("*"," ",$obr);
			$obr=str_replace(";"," ",$obr);
			$obr=str_replace("'"," ",$obr);
			$obr=str_replace("/"," ",$obr);
			$obr=str_replace("<"," ",$obr);
			$obr=str_replace(">"," ",$obr);
			$obr=str_replace("-"," ",$obr);
			$obr=str_replace("="," ",$obr);
			$obr=str_replace("%"," ",$obr);
			$obr=str_replace('"',' ', $obr);
			$obr=str_replace("update"," ",$obr);
			$obr=str_replace("delete"," ",$obr);
			$obr=str_replace("drop"," ",$obr);
			$obr=str_replace("truncate"," ",$obr);
			$obr=str_replace("from"," ",$obr);
			$obr=str_replace("!","",$obr);

			$valores_limpios=array($nom,$ape,$nac,$fec,$est,$obr);
			return $valores_limpios;
	}

	public  function caracteres2($id,$nom,$ape,$nac,$fec,$obr)
	{
			$id=str_replace("*"," ",$id);
			$id=str_replace(";"," ",$id);
			$id=str_replace("'"," ",$id);
			$id=str_replace("/"," ",$id);
			$id=str_replace("<"," ",$id);
			$id=str_replace(">"," ",$id);
			$id=str_replace("-"," ",$id);
			$id=str_replace("="," ",$id);
			$id=str_replace("%"," ",$id);
			$id=str_replace('"',' ', $id);
			$id=str_replace("update"," ",$id);
			$id=str_replace("delete"," ",$id);
			$id=str_replace("drop"," ",$id);
			$id=str_replace("truncate"," ",$id);
			$id=str_replace("from","",$id);
			$id=str_replace("!","",$id);

			$nom=str_replace("*"," ",$nom);
			$nom=str_replace(";"," ",$nom);
			$nom=str_replace("'"," ",$nom);
			$nom=str_replace("/"," ",$nom);
			$nom=str_replace("<"," ",$nom);
			$nom=str_replace(">"," ",$nom);
			$nom=str_replace("-"," ",$nom);
			$nom=str_replace("="," ",$nom);
			$nom=str_replace("%"," ",$nom);
			$nom=str_replace('"',' ', $nom);
			$nom=str_replace("update"," ",$nom);
			$nom=str_replace("delete"," ",$nom);
			$nom=str_replace("drop"," ",$nom);
			$nom=str_replace("truncate"," ",$nom);
			$nom=str_replace("from","",$nom);
			$nom=str_replace("!","",$nom);
			
			$ape=str_replace("*"," ",$ape);
			$ape=str_replace(";"," ",$ape);
			$ape=str_replace("'"," ",$ape);
			$ape=str_replace("/"," ",$ape);
			$ape=str_replace("<"," ",$ape);
			$ape=str_replace(">"," ",$ape);
			$ape=str_replace("-"," ",$ape);
			$ape=str_replace("="," ",$ape);
			$ape=str_replace("%"," ",$ape);
			$ape=str_replace('"',' ', $ape);
			$ape=str_replace("update"," ",$ape);
			$ape=str_replace("delete"," ",$ape);
			$ape=str_replace("drop"," ",$ape);
			$ape=str_replace("truncate"," ",$ape);
			$ape=str_replace("from"," ",$ape);
			$ape=str_replace("!","",$ape);

			$nac=str_replace("*"," ",$nac);
			$nac=str_replace(";"," ",$nac);
			$nac=str_replace("'"," ",$nac);
			$nac=str_replace("/"," ",$nac);
			$nac=str_replace("<"," ",$nac);
			$nac=str_replace(">"," ",$nac);
			$nac=str_replace("-"," ",$nac);
			$nac=str_replace("="," ",$nac);
			$nac=str_replace("%"," ",$nac);
			$nac=str_replace('"',' ', $nac);
			$nac=str_replace("update"," ",$nac);
			$nac=str_replace("delete"," ",$nac);
			$nac=str_replace("drop"," ",$nac);
			$nac=str_replace("truncate"," ",$nac);
			$nac=str_replace("from"," ",$nac);
			$nac=str_replace("!","",$nac);

			$fec=str_replace("*"," ",$fec);
			$fec=str_replace(";"," ",$fec);
			$fec=str_replace("'"," ",$fec);
			$fec=str_replace("/"," ",$fec);
			$fec=str_replace("<"," ",$fec);
			$fec=str_replace(">"," ",$fec);
			$fec=str_replace("-"," ",$fec);
			$fec=str_replace("="," ",$fec);
			$fec=str_replace("%"," ",$fec);
			$fec=str_replace('"',' ', $fec);
			$fec=str_replace("update"," ",$fec);
			$fec=str_replace("delete"," ",$fec);
			$fec=str_replace("drop"," ",$fec);
			$fec=str_replace("truncate"," ",$fec);
			$fec=str_replace("from"," ",$fec);
			$fec=str_replace("!","",$fec);

			$obr=str_replace("*"," ",$obr);
			$obr=str_replace(";"," ",$obr);
			$obr=str_replace("'"," ",$obr);
			$obr=str_replace("/"," ",$obr);
			$obr=str_replace("<"," ",$obr);
			$obr=str_replace(">"," ",$obr);
			$obr=str_replace("-"," ",$obr);
			$obr=str_replace("="," ",$obr);
			$obr=str_replace("%"," ",$obr);
			$obr=str_replace('"',' ', $obr);
			$obr=str_replace("update"," ",$obr);
			$obr=str_replace("delete"," ",$obr);
			$obr=str_replace("drop"," ",$obr);
			$obr=str_replace("truncate"," ",$obr);
			$obr=str_replace("from"," ",$obr);
			$obr=str_replace("!","",$obr);

			$valores_limpios=array($id,$nom,$ape,$nac,$fec,$obr);
			return $valores_limpios;
	}
}
 ?>