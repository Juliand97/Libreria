<?php
include_once('../php/class.phpmailer.php');
include_once('../php/class.smtp.php');
Class Email
{
	Public $id;
	public $user;
	public $correo;
	public $codigo;
	public $asunto;

	public function __construct ($id,$user,$correo,$codigo)
	{
		$this->id=$id;
		$this->user=$user;
		$this->correo=$correo;
		$this->codigo=$codigo;
		$this->asunto="Reestablecer clave";

	}
	public function envios()
	{

		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		
		//Se envía desde:
		$mail->Username ='dynolib@gmail.com';
		$mail->Password = 'dy20li17b2018';
		$mail->From = "dynolib@gmail.com";
		$mail->FromName='Reestablecer clave aplicacion libreria';
		#echo $this->asunto;
	    //Se envia desde: 
	    
	    $mail->AddAddress($this->correo);
		$mail->Subject ="Reestablecer clave aplicacion libreria";
			
	//Para redactar el mensaje
		$mail->MsgHTML("<p>Restablecer la clave: <br>Estimado  ".$this->user." <br> Le hemos enviado el siguiente codigo <strong>".$this->codigo."</strong> para restablecer contraseña.  Vuelva a la pagina para reestablecerla.</p>");

		if ($mail->send())
		{
			echo "enviado";
		}	
		else
		{
		echo"Error  en el envio";
		#die($mail);
	}
	}
}

?>