<?php
require_Once("../controlador/vendor/autoload.php");
require_Once("../controlador/cuentas de google.php");
$googleClient= new Google_Client();
$autorizar= new GoogleAuth($googleClient);
 if($autorizar->checkRedirectCode())
 {
	 //die($_GET['code']);
	 
 }
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="login-cliente.css">
		<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
<body>
<div class="contenedor">
<?php
if(!$autorizar->isLoggedIn()):

 ?>
 <a href="<?php echo $autorizar->getAuthUrl(); ?>"><img src="imagenes/gmail.jpg" border="0" class="imagen"></a>
 
<?php else:  ?>
<a href="cerrar sesion cliente.php">Cerrar sesion  google</a>
<?php endif;  ?>
</div>
 </body>
</html>