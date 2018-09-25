function textos(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var edit;

	edit=document.getElementById('cat');


	texto= e.keyCode || e.which;
	cadena=String.fromCharCode(texto).toLowerCase();
	permitidos=" abcdfeghijklmnopqrstuvwxyzáéíóúü";
	permitidos2="8-37-38-46-164";
	especial=false;

	for (var i in permitidos2) {
		if (texto===permitidos2[i])
		{
			especial=true;
			break;
		}
	}

	if (permitidos.indexOf(cadena)==-1 && !especial)
	{
		alert('No se permiten ciertos simbolos');
		edit.style.backgroundColor="#4aa2ef";
		edit.style.border = "2px solid #4aa2ef";
		edit.style.color="#FFFFFF"
		return false;
	}
	else
	{
		edit.style.backgroundColor= "#FFFFFF";
	 	edit.style.color="#000000";
	}


	if (edit.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		edit.style.border="2px solid #FF0000";
		edit.style.backgroundColor= "#FF0000";
	 	edit.style.color="#FFFFFF";
		return false;
	}
	else
	{
		edit.style.border="2px solid #000000";
		edit.style.backgroundColor= "#FFFFFF";
	 	edit.style.color="#000000"
	}
}

function vacio()
{
	if (edit.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		edit.style.border="2px solid #FF0000";
		edit.style.backgroundColor= "#FF0000";
	 	edit.style.color="#FFFFFF";
		return false;
	}
	else
	{
		edit.style.border="2px solid #000000";
		edit.style.backgroundColor= "#FFFFFF";
	 	edit.style.color="#000000"
	}
}