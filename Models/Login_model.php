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

		echo $email."<br>".$usuarioDb['password']." ".$password."<br>";

		//if($select->num_rows>0){
			if($usuarioDb['password']=== $password){
				session_regenerate_id();
				$_SESSION['loggedin'] = TRUE;
				$_SESSION['name'] = $_POST['email'];
				$_SESSION['id'] = $id;
				echo 'Welcome ' . $_SESSION['name'] . '!';
				header('Location: ../Views/Home/Panel.php');
			}else{
				header('Location: ../index.php');
			}
		//}else{
		//	echo 'Incorrect username!';
		//}		
	}
}
?>