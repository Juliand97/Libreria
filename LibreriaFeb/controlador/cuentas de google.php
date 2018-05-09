<?php 
class GoogleAuth 
{
	 protected $cliente ;
	 
	 public function __construct (Google_Client $googleClient= null)
	 {
		 $this->client = $googleClient; 
		if($this->client)
		{
			$this->client->setClientId('273368402423-svql9qog12rka84t579jjilt49rlvo18.apps.googleusercontent.com');
			$this->client->setClientSecret('SxrscAlMzA4d5c1timsvHbfv');
			$this->client->setRedirectUri('http://localhost:8080/proyecto/Libreria%20-%20copia/vista/pag_cliente.php');
			$this->client->setScopes('email');
			
		}
	 }
		public function isLoggedIn()
		{
			return isset($_SESSION['access_token']);
			
			
			
			
		}
		public function getAuthUrl()
		{ return $this->client->CreateAuthUrl();}
		
		public function checkRedirectCode()
		{
			if (isset($_GET['code']))
			{
				$this->client->authenticate($_GET['code']);
			$this->setToken($this->client-getAccessToken());
			
				$payload=$this->getPayload();
				echo "<pre>",print_r($payload),"</pre>";
				return true;
			}
			return false;
		} 
		public function setToken($token)
		{
			$_SESSION['access_token']=$token;
			$this->client->setAccessTOken($token);
		}
	 public function getPayload()
	 {
		 $payload = $this->client-verifyIdToken()->getAttributes(); 
		 return $payload;
	 }
}

?>