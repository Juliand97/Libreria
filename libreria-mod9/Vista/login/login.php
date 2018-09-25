<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Inicio de sesión</title>
		<link rel="stylesheet" href="../../Vista/css/login/logu.css">
		<link rel="stylesheet" href="../../Vista/css/login/log1.css">
		<link rel="stylesheet" href="../../Vista/css/login/fonts/style.css">
		<script src="../../Vista/js/validacion datos/login/validar.js"></script>
	</head>
	<body oncontextmenu="return false">
		<div class="contenedor">
			<center>
				<div class="contend" id="posC">
					<form action="" method="post" id="f1" onsubmit=" return validar_Usuario(); ">
						<table>
							<tr >
								<div class="iconU">	
									 <input type="number" name="name" placeholder="Numero de identificacion" id="i1" onkeypress="return caracteres_U(event);" required="required">
									 <i class="icon-user" aria-hidden="true"></i>
								</div>	
							</tr>
							<tr >
								<div class="iconK">
									<input type="password" placeholder="Ingrese su contraseña" name="contraseña" id="i2" required="required">
									<i class="icon-key" aria-hidden="true"></i>
								</div>
							</tr>
							<tr >
								<div class="boton">
									<input type="submit" name="submit" value="Iniciar Sesión">
								</div>
							</tr>
							<tr>
								<div class="boton2">
									<input type="button" value="Volver a la pagina principal" onclick="window.location.href='../../Vista/pag_visitante.php'" class="input" >
								</div>
							</tr>
							<tr>
								<div class="boton2">
									<input type="button" value="Registrate.." onclick="window.location.href='../../Controlador/clientes/perfil_clientes_ctrl.php'" class="input" >
								</div>
								<a href="../../Controlador/correo/correos_ctrl.php" style="font-weight:bold; color:#000;">¿Olvido su contraseña?</a>
							</tr>
						</table>
	               </form>
	      		</div>
	     </center>
	</body>
</html>