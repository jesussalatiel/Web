<?php 
	
	class LoginController
	{	
		public function __construct(){}

		public function access($email, $password){
			//se está de dentro del directorio Controllers y se debe salir con ../
			require_once("../Models/Login_model.php");
			Login::getAccess($email, $password);
			

			//header('Location: ../index.php');
		}
		
		public function error(){
			require_once('Views/Usuario/error.php');
		} 
	}
	
	require_once('../Models/Login_model.php');
	require_once('../connection.php');


	if ( !isset($_POST['email'], $_POST['pass']) ) {
		// Could not get the data that should have been sent.
		die ('Please fill both the username and password field!');
	}

	$login = new LoginController();
	$login->access('test@test.com', '123');
	
	echo $login;





	//obtiene los datos del usuario desde la vista y redirecciona a UsuarioController.php
	if (isset($_POST['action'])) {
		$usuarioController= new UsuarioController();
		//se añade el archivo usuario.php
		require_once('../Models/User_model.php');
		
		//se añade el archivo para la conexion
		require_once('../connection.php');

		if ($_POST['action']=='register') {
			$usuario= new Usuario(null,$_POST['alias'],$_POST['nombres'],$_POST['email']);
			$usuarioController->save($usuario);
		}elseif ($_POST['action']=='update') {
			$usuario= new Usuario($_POST['id'],$_POST['alias'],$_POST['nombres'],$_POST['email']);
			$usuarioController->update($usuario);
		}		
	}

	//se verifica que action esté definida
	if (isset($_GET['action'])) {
		if ($_GET['action']!='register'&$_GET['action']!='index') {
			require_once('../connection.php');
			$usuarioController=new UsuarioController();
			//para eliminar
			if ($_GET['action']=='delete') {		
				$usuarioController->delete($_GET['id']);
			}elseif ($_GET['action']=='update') {//mostrar la vista update con los datos del registro actualizar
				require_once('../Models/usuario.php');				
				$usuario=Usuario::getById($_GET['id']);		
				//var_dump($usuario);
				//$usuarioController->update();
				require_once('../Views/Usuario/update.php');
			}	
		}	
	}
?>