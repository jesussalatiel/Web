<?php

class Login
{
	//atributos
	public $email;
	public $password;
	

	//constructor de la clase
	function __construct($email, $password)
	{
		$this->email=$email;
		$this->password=$password;
	}

	//la función para obtener un usuario por el id
	public static function getAccess($email, $password){
		$db=DataBase::getConnect();
		$select=$db->prepare("SELECT id, password FROM accounts WHERE email = :email");
		$select->bindValue('email', $email);
		$select->execute();
		$usuarioDb=$select->fetch();
		echo $usuarioDb['password']."  ".$password;
		//if($select->num_rows>0){
			if($usuarioDb['password']=== $password){
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['name'] = $_POST['email'];
				$_SESSION['id'] = $email;
				header('Location: ../Views/Home/Home.php');
			}else{
				session_destroy();
				header('Location: ../index.php');
			}
		//}else{
		//	session_destroy();
		//	echo 'Incorrect username!';
		//}		
	}
}
?>