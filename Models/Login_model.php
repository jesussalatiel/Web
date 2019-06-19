<?php
/**
* Modelo para el acceso a la base de datos y funciones CRUD
*/
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
		//buscar
        $db=DataBase::getConnect();
        echo 'añsldkñaskd';
		//$select=$db->prepare('SELECT id, password FROM accounts WHERE username ='. $email);
        //$select->execute();
        //$select->store_result();
		//asignarlo al objeto usuario
		//echo $select;
		//$usuario= new Usuario($usuarioDb['id'],$usuarioDb['alias'],$usuarioDb['nombres'],$usuarioDb['email']);
		//return $usuario;
	}
}
?>