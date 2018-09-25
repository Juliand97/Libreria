function validar_Cliente()
{
	var identificacion;
	var nombre,nombre2;
	var apellido,apellido2;
	var correo;
	var contrasena;
	var especial;

	identificacion=document.getElementById("doc");
	nombre=document.getElementById("pnombre");
	nombre2=document.getElementById("snombre");
	apellido=document.getElementById("papellido");
	apellido2=document.getElementById("sapellido");
	correo=document.getElementById("email");
	contrasena=document.getElementById("pass");
	especial=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	if (identificacion.value==="" || nombre.value==="" || apellido.value==="" || correo.value==="" || contrasena.value==="")
	{
		alert('Existen 1 o más campos obligatorios no diligenciados. \n Por favor intente nuevamente');
		if (identificacion.value==="")
		{
			identificacion.style.border="2px solid #FF0000";
			identificacion.style.backgroundColor= "#FF0000";
	 		identificacion.style.color="#FFFFFF";

		}
		else
		{
			identificacion.style.border="2px solid #000000";
			identificacion.style.backgroundColor= "#FFFFFF";
	 		identificacion.style.color="#000000";
		}

		if ( nombre.value==="")
		{
			nombre.style.border="2px solid #FF0000";
			nombre.style.backgroundColor= "#FF0000";
	 		nombre.style.color="#FFFFFF";
		}
		else
		{
			nombre.style.border="2px solid #000000";
			nombre.style.backgroundColor= "#FFFFFF";
	 		nombre.style.color="#000000";
		}

		if (apellido.value==="")
		{
			apellido.style.border="2px solid #FF0000";
	 		apellido.style.backgroundColor="#FF0000";
	 		apellido.style.color="#FFFFFF";
		}
		else
		{
			apellido.style.border="2px solid #000000";
			apellido.style.backgroundColor= "#FFFFFF";
	 		apellido.style.color="#000000";
		}
	 	
	 	if (correo.value==="")
	 	{
	 		correo.style.border="2px solid #FF0000";
	 		correo.style.backgroundColor="#FF0000";
	 		correo.style.color="#FFFFFF";
	 	}
	 	else
		{
			correo.style.border="2px solid #000000";
			correo.style.backgroundColor= "#FFFFFF";
	 		correo.style.color="#000000";
		}

		if (contrasena.value==="")
		{
			contrasena.style.border="2px solid #FF0000";
	 		contrasena.style.backgroundColor="#FF0000";
	 		contrasena.style.color="#FFFFFF";
		}
		else
		{
			contrasena.style.border="2px solid #000000";
			contrasena.style.backgroundColor= "#FFFFFF";
	 		contrasena.style.color="#000000";
		}

	 	return false;
	}
	// Validacion de nombres
	if (nombre.value.length < 3 )
	{
		alert('Deben ser como minimo 3  caracteres \n Por favor intente nuevamente');
		nombre.style.border= "2px solid #ef9928";
		nombre.style.backgroundColor= "#ef9928";
		nombre.style.color="#FFFFFF";
		
		return false;
	}
	else if (nombre2.value!="" && nombre2.value.length < 3 )
	{
		alert('Deben ser como minimo 3  caracteres \n Por favor intente nuevamente');
		nombre2.style.border= "2px solid #ef9928";
		nombre2.style.backgroundColor= "#ef9928";
		nombre2.style.color="#FFFFFF";
		
		return false;
	}
	else if (nombre.value.length > 12) 
	{
		alert('Deben ser como maximo 12  caracteres \n Por favor intente nuevamente');
		nombre.style.border= "2px solid #ef9928";
		nombre.style.backgroundColor= "#ef9928";
		nombre.style.color="#FFFFFF";
		return false;
	}
	else if (nombre2.value.length > 12) 
	{
		alert('Deben ser como maximo 12  caracteres \n Por favor intente nuevamente');
		nombre2.style.border= "2px solid #ef9928";
		nombre2.style.backgroundColor= "#ef9928";
		nombre2.style.color="#FFFFFF"
		return false;
	}

	// validacion de apellidos
	if (apellido.value.length < 3 )
	{
		alert('Deben ser como minimo 3  caracteres \n Por favor intente nuevamente');
		apellido.style.border= "2px solid #ef9928";
		apellido.style.backgroundColor= "#ef9928";
		apellido.style.color="#FFFFFF";
		
		return false;
	}
	else if (apellido2.value!="" && apellido2.value.length < 3 )
	{
		alert('Deben ser como minimo 3  caracteres \n Por favor intente nuevamente');
		apellido2.style.border= "2px solid #ef9928";
		apellido2.style.backgroundColor= "#ef9928";
		apellido2.style.color="#FFFFFF";
		
		return false;
	}
	else if (apellido.value.length > 16) 
	{
		alert('Deben ser como maximo 16  caracteres \n Por favor intente nuevamente');
		apellido.style.border= "2px solid #ef9928";
		apellido.style.backgroundColor= "#ef9928";
		apellido.style.color="#FFFFFF";
		return false;
	}
	else if (apellido2.value.length > 16) 
	{
		alert('Deben ser como maximo 16  caracteres \n Por favor intente nuevamente');
		apellido2.style.border= "2px solid #ef9928";
		apellido2.style.backgroundColor= "#ef9928";
		apellido2.style.color="#FFFFFF"
		return false;
	}

	

	// validacion de .length de contrasena
	if (contrasena.value.length < 8 )
	{
		alert('Deben ser como minimo 8 caracteres \n Por favor intente nuevamente');
		contrasena.style.border= "2px solid #ef9928";
		contrasena.style.backgroundColor= "#ef9928";
		contrasena.style.color="#FFFFFF";
		
		return false;
	}
	
	else if (contrasena.value.length > 16 ) 
	{
		alert('Deben ser como maximo 16 caracteres \n Por favor intente nuevamente');
		contrasena.style.border= "2px solid #ef9928";
		contrasena.style.backgroundColor= "#ef9928";
		contrasena.style.color="#FFFFFF";
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
	var identificacion;
	identificacion=document.getElementById("doc");

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
		identificacion.style.backgroundColor="#4aa2ef";
		identificacion.style.border = "2px solid #4aa2ef";
		identificacion.style.color="#FFFFFF"
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
	var nombre,nombre2;
	var apellido,apellido2;

	nombre=document.getElementById("pnombre");
	nombre2=document.getElementById("snombre");
	apellido=document.getElementById("papellido");
	apellido2=document.getElementById("sapellido");

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

function contrasena(e)
{
	var texto;
	var cadena;
	var permitidos;
	var permitidos2;
	var especial;
	var contrasena;

	contrasena=document.getElementById("pass");
	

	texto= e.keyCode || e.which;
	cadena=String.fromCharCode(texto).toLowerCase();
	permitidos="abcdfeghijklmnopqrstuvwxyz1234567890#$%&+,./:?@[]^_`{|}~";
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
		alert('Caracter invalido');
		contrasena.style.backgroundColor="#4aa2ef";
		contrasena.style.border = "2px solid #4aa2ef";
		contrasena.style.color="#FFFFFF"
		return false;
	}
	else
	{
		contrasena.style.border="2px solid #000000";
		contrasena.style.backgroundColor= "#FFFFFF";
	 	contrasena.style.color="#000000";
	}
}
