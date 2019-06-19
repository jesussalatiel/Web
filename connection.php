<?php
class DataBase{
    private static $instance = NULL;

    private function __construct(){}

    private function __clone(){}
    
    public static function getInstance(){
        $NAME_DATABASE = 'root';
        $PASSWORD_DATABASE = '';
        if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$instance= new PDO('mysql:host=localhost;dbname=mvc',$NAME_DATABASE,$PASSWORD_DATABASE,$pdo_options);
			}
		return self::$instance;
    }
}
?>