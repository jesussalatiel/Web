<?php
class DataBase{
    private static $instance = NULL;

    private function __construct(){}

    private function __clone(){}
    
    public static function getConnect(){
        $USER_DATABASE = 'root';
        $PASSWORD_DATABASE = '';
        $SERVER = 'localhost';
        $DATABASE = 'mvc';
        if (!isset(self::$instance)) {
	  			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
		  		self::$instance= new PDO('mysql:host='.$SERVER.';dbname='.$DATABASE, $USER_DATABASE,$PASSWORD_DATABASE,$pdo_options);
  			}
    
        return self::$instance;
    }
}
?>