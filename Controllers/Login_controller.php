<?php 
	
	class LoginController
	{	
		public function __construct(){}

		public function access($email, $password){
			require_once("../Models/Login_model.php");
			Login::getAccess($email, $password);			
		}
		
		public function error(){
			require_once('Views/Usuario/error.php');
		} 
	}
	
	$login = new LoginController();
	require_once('../Models/Login_model.php');
	require_once('../connection.php');
	
	$login->access($_POST['email'], $_POST['pass']);


?>