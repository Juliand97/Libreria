function validar_libro()
{
	var isbn;
	var libro;
	var fecha;
	var autor;
	var p_autor;

	isbn=document.getElementById('isbn');
	libro=document.getElementById('libro');
	fecha=document.getElementById('fecha');
	autor=document.getElementById('autor');
	p_autor=document.getElementById('p_autor');

	if (isbn.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		isbn.style.border="2px solid #FF0000";
		isbn.style.backgroundColor= "#FF0000";
	 	isbn.style.color="#FFFFFF";
		return false;
	}
	else
	{
		isbn.style.border="2px solid #000000";
		isbn.style.backgroundColor= "#FFFFFF";
	 	isbn.style.color="#000000";
	}

	if (libro.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		libro.style.border="2px solid #FF0000";
		libro.style.backgroundColor= "#FF0000";
	 	libro.style.color="#FFFFFF";
		return false;
	}
	else
	{
		libro.style.border="2px solid #000000";
		libro.style.backgroundColor= "#FFFFFF";
	 	libro.style.color="#000000";
	}

	if (fecha.value===null || fecha.value==="")
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
	 	fecha.style.color="#000000";
	}

	if (autor.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		autor.style.border="2px solid #FF0000";
		autor.style.backgroundColor= "#FF0000";
	 	autor.style.color="#FFFFFF";
		return false;
	}
	else
	{
		autor.style.border="2px solid #000000";
		autor.style.backgroundColor= "#FFFFFF";
	 	autor.style.color="#000000";
	}

	if (p_autor.value==="")
	{
		alert('Este campo esta vacio \n Por favor diligenciarlo');
		p_autor.style.border="2px solid #FF0000";
		p_autor.style.backgroundColor= "#FF0000";
	 	p_autor.style.color="#FFFFFF";
		return false;
	}
	else
	{
		p_autor.style.border="2px solid #000000";
		p_autor.style.backgroundColor= "#FFFFFF";
	 	p_autor.style.color="#000000";
	}

	if (isbn.value.length < 10 )
	{
		alert('Deben ser como minimo 10  digitos \n Por favor intente nuevamente');
		isbn.style.border= "2px solid #ef9928";
		isbn.style.backgroundColor= "#ef9928";
		isbn.style.color="#FFFFFF";
		
		return false;
	} 

	if (libro.value.length < 3 )
	{
		alert('Deben ser como minimo 3 caracteres \n Por favor intente nuevamente');
		libro.style.border= "2px solid #ef9928";
		libro.style.backgroundColor= "#ef9928";
		libro.style.color="#FFFFFF";
		
		return false;
	}

	if (autor.value.length < 3 )
	{
		alert('Deben ser como minimo 3 caracteres \n Por favor intente nuevamente');
		autor.style.border= "2px solid #ef9928";
		autor.style.backgroundColor= "#ef9928";
		autor.style.color="#FFFFFF";
		
		return false;
	}
	if (isbn.value.length > 13 )
	{
		alert('Deben ser como maximo 13  digitos \n Por favor intente nuevamente');
		isbn.style.border= "2px solid #ef9928";
		isbn.style.backgroundColor= "#ef9928";
		isbn.style.color="#FFFFFF";
		
		return false;
	} 

	if (libro.value.length > 73 )
	{
		alert('Deben ser como maximo 73 caracteres \n Por favor intente nuevamente');
		libro.style.border= "2px solid #ef9928";
		libro.style.backgroundColor= "#ef9928";
		libro.style.color="#FFFFFF";
		
		return false;
	}

	if (autor.value.length > 73 )
	{
		alert('Deben ser como maximo 73 caracteres \n Por favor intente nuevamente');
		autor.style.border= "2px solid #ef9928";
		autor.style.backgroundColor= "#ef9928";
		autor.style.color="#FFFFFF";
		
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
	isbn=document.getElementById('isbn');


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

function c_libro(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var libro;

	libro=document.getElementById('libro');


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
		libro.style.backgroundColor="#4aa2ef";
		libro.style.border = "2px solid #4aa2ef";
		libro.style.color="#FFFFFF"
		return false;
	}
	else
	{
		libro.style.backgroundColor= "#FFFFFF";
	 	libro.style.color="#000000";
	}

}

function c_autor(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var autor;
	autor=document.getElementById('autor');


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
		autor.style.backgroundColor="#4aa2ef";
		autor.style.border = "2px solid #4aa2ef";
		autor.style.color="#FFFFFF"
		return false;
	}
	else
	{
		autor.style.backgroundColor= "#FFFFFF";
	 	autor.style.color="#000000";
	}

}

function c_autorp(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var p_autor;
	p_autor=document.getElementById('p_autor');


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
		p_autor.style.backgroundColor="#4aa2ef";
		p_autor.style.border = "2px solid #4aa2ef";
		p_autor.style.color="#FFFFFF"
		return false;
	}
	else
	{
		p_autor.style.backgroundColor= "#FFFFFF";
	 	p_autor.style.color="#000000";
	}

}