//#FF0000=red
//#F57A07=orange
//#015F37= emerald green
//string.fromCharCode=convertir los caracteres unicode en caracteres normales
//
function validar()
{
	var dato;
	dato=document.getElementById("libro");
	if (dato.value==="")
	{
		dato.style.border = "2px solid #FF0000";
		alert('El campo esta vacio \n Por favor intente nuevamente');
		return false;
	}
	else if(dato.value.length>60)
	{
		dato.style.border = "2px solid #F57A07";
		alert('Excedio el limite de caracteres \n Por favor intente nuevamente');
		return false;
	}
	else if(dato.value.length<2)
	{
		dato.style.border = "4px solid #015F37";
		alert('palabra demasiado corta \n Por favor intente nuevamente');
		return false;
	}	
}

function caracteres(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;

	texto= e.keyCode || e.which;
	cadena=String.fromCharCode(texto).toLowerCase();
	permitidos=" abcdfeghijklmnopqrstuvwxyz";
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
		return false;
	}
}