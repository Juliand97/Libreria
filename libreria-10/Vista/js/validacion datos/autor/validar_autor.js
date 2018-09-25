function campos()
{
	var noma;
	var ape;
	var nac;
	var fecha;
	var lista;
	var obras;

	nom=document.getElementById('nom');
	ape=document.getElementById('ape');
	nac=document.getElementById('nac');
	fecha=document.getElementById('fechan')
	lista=document.getElementById('estadoa');
	obras=document,getElementById('obras');

	if (nom.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		nom.style.border="2px solid #FF0000";
		nom.style.backgroundColor= "#FF0000";
	 	nom.style.color="#FFFFFF";
		return false;
	}
	else
	{
		nom.style.border="2px solid #000000";
		nom.style.backgroundColor= "#FFFFFF";
	 	nom.style.color="#000000"
	}
	if (nom.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		nom.style.border="2px solid #FF0000";
		nom.style.backgroundColor= "#FF0000";
	 	nom.style.color="#FFFFFF";
		return false;
	}
	else
	{
		nom.style.border="2px solid #000000";
		nom.style.backgroundColor= "#FFFFFF";
	 	nom.style.color="#000000"
	}
	if (fecha==null || fecha=="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		fecha.style.border="2px solid #FF0000";
		fecha.style.backgroundColor= "#FF0000";
	 	fecha.style.color="#FFFFFF";
		return false;
	}
	else
	{
		fecha.style.border="2px solid #000000";
		fecha.style.backgroundColor= "#FFFFFF";
	 	fecha.style.color="#000000"
	}

}
function numeros(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var o;
	o=document.getElementById('obras');


	texto= e.keyCode || e.which;
	cadena=String.fromCharCode(texto).toLowerCase();
	permitidos="0123456789-";
	permitidos2="37-38-46-164";
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
		o.style.backgroundColor="#4aa2ef";
		o.style.border = "2px solid #4aa2ef";
		o.style.color="#FFFFFF"
		return false;
	}
	else
	{
		o.style.backgroundColor= "#FFFFFF";
	 	o.style.color="#000000";
	}
}

function textos(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var edit;

	edit=document.getElementById('nom');


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
}
function textos_ape(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var ape;

	ape=document.getElementById('ape');


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
		ape.style.backgroundColor="#4aa2ef";
		ape.style.border = "2px solid #4aa2ef";
		ape.style.color="#FFFFFF"
		return false;
	}
	else
	{
		ape.style.backgroundColor= "#FFFFFF";
	 	ape.style.color="#000000";
	}
}

function textos_nac(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var nac;

	nac=document.getElementById('nac');


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
		nac.style.backgroundColor="#4aa2ef";
		nac.style.border = "2px solid #4aa2ef";
		nac.style.color="#FFFFFF"
		return false;
	}
	else
	{
		ape.style.backgroundColor= "#FFFFFF";
	 	ape.style.color="#000000";
	}
}