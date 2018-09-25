function campos()
{ 
	var cod;
	var edit;

	cod=document.getElementById('cod');
	edit=document.getElementById('nom');

	if (cod.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		cod.style.border="2px solid #FF0000";
		cod.style.backgroundColor= "#FF0000";
	 	cod.style.color="#FFFFFF";
		return false;
	}
	else
	{
		cod.style.border="2px solid #000000";
		cod.style.backgroundColor= "#FFFFFF";
	 	cod.style.color="#000000"
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

	if (cod.value.length > 10 )
	{
		alert('Deben ser como maximo 10  digitos \n Por favor intente nuevamente');
		cod.style.border= "2px solid #ef9928";
		cod.style.backgroundColor= "#ef9928";
		cod.style.color="#FFFFFF";
		return false;
	}

	if (edit.value.length > 90 )
	{
		alert('Deben ser como maximo 90  digitos \n Por favor intente nuevamente');
		edit.style.border= "2px solid #ef9928";
		edit.style.backgroundColor= "#ef9928";
		edit.style.color="#FFFFFF";
		return false;
	}
}

function c_isbn(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var isbn;
	isbn=document.getElementById('cod');


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
		isbn.style.backgroundColor="#4aa2ef";
		isbn.style.border = "2px solid #4aa2ef";
		isbn.style.color="#FFFFFF"
		return false;
	}
	else
	{
		isbn.style.backgroundColor= "#FFFFFF";
	 	isbn.style.color="#000000";
	}
}

function edit(e)
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
	permitidos=" abcdfeghijklmnopqrstuvwxyz0123456789áéíóúü-/";
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