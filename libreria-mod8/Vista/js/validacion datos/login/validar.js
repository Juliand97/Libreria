function validar_Usuario()
{
	var dato;
	var dato1;
	var exp_regulares_usuario;
	dato=document.getElementById("i1");
	dato1=document.getElementById("i2");
	// exp_regulares_usuario=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/;
	if (dato.value==="" || dato1.value==="")
	{
		
		dato1.style.border="2px solid #FF0000";
		dato1.style.backgroundColor= "#FF0000";
		dato1.style.color="#FFFFFF";
		alert('Hay campo(s) vacio(s) \n Por favor intente nuevamente');
		
		//Campo de usuario
		if (dato.value==="")
		{
			dato.style.border="2px solid #FF0000";
			dato.style.backgroundColor= "#FF0000";
			dato.style.color="#FFFFFF";
		}
		else
		{
			dato.style.border="2px solid #000000";
			dato.style.backgroundColor= "#FFFFFF";
			dato.style.color="#000000";
		}

		//Campo de contraseña
		if (dato1.value==="")
		{
			dato1.style.border="2px solid #FF0000";
			dato1.style.backgroundColor= "#FF0000";
			dato1.style.color="#FFFFFF";
		}
		else
		{
			dato1.style.border="2px solid #000000";
			dato1.style.backgroundColor= "#FFFFFF";
			dato1.style.color="#000000";
		}

		return false;
	}
	else if(dato.value.length < 8 )
	{
		dato.style.border = "2px solid #ef9928";
		dato.style.backgroundColor= "#ef9928";
		dato.style.color="#FFFFFF";
		alert('Solo se  8 a 10 caracteres \n Por favor intente nuevamente');
		return false;
	}

	else if(dato.value.length > 10)
	{
		dato.style.border = "2px solid #ef9928";
		dato.style.backgroundColor= "#ef9928";
		dato.style.color="#FFFFFF";
		alert('Solo se  8 a 10 caracteres \n Por favor intente nuevamente');
		return false;
	}

	if (dato1.value.length < 3)
	{
		dato1.style.border = "2px solid #ef9928";
		dato1.style.backgroundColor= "#ef9928";
		dato1.style.color="#FFFFFF";
		alert('Minimo 3 caracteres \n Por favor intente nuevamente');
		return false;
	}
	else if(dato1.value.length > 20)
	{
		dato1.style.border = "2px solid #ef9928";
		dato1.style.backgroundColor= "#ef9928";
		dato1.style.color="#FFFFFF";
		alert('Maximo 20 caracteres \n Por favor intente nuevamente');
		return false;
	}
}

function caracteres_U(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var dato;
dato=document.getElementById("i1");

	texto= e.keyCode || e.which;
	cadena=String.fromCharCode(texto).toLowerCase();
	permitidos="0123456789";
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
		alert('Solo se permiten caracteres numericos \n Por favor intente nuevamente');
		dato.style.backgroundColor="#4aa2ef";
		dato.style.border = "2px solid #4aa2ef";
		dato.style.color="#FFFFFF"
		return false;
	}

}

