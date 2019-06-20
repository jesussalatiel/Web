<?php

class InventoryController{
    public function __construct(){}
    public function barraHueca(){
        return "../Components/Inventory/BarraHueca.php";
    }
    public function tuberia(){
        return "../Components/Inventory/Tuberia.php";
    }
    public function error(){
        require_once('../Views/Home/err.php');
    } 
}

$userController= new InventoryController();

?>