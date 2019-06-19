<?php 
	
	class LoginController
	{	
		public function __construct(){}

		public function access($email, $password){
			//se está de dentro del directorio Controllers y se debe salir con ../
			require_once("../Models/Login_model.php");
			Login::getAccess($email, $password);
			

			
		}
		
		public function error(){
			require_once('Views/Usuario/error.php');
		} 
	}
	
	$login = new LoginController;
	require_once('../Models/Login_model.php');
	require_once('../connection.php');
	
	$login->access($_POST['email'], $_POST['pass']);


	if ( !isset($_POST['email'], $_POST['pass']) ) {
		// Could not get the data that should have been sent.
		die ('Please fill both the username and password field!');
	}

	


?>