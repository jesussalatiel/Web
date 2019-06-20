<?php

	//función que llama al controlador y su respectiva acción, que son pasados como parámetros
	function call($controller, $action){
		//importa el controlador desde la carpeta Controllers
		require_once('../../Controllers/' . $controller . '_controller.php');
		//crea el controlador
		switch($controller){
			case 'Inventory':
				require_once('../../Models/Home_model.php');
				$controller = new InventoryController();
			break;
						    
		}
		
		return $controller->{$action}();;
	}

	if (empty($_GET["controller"]) == 1){
		$view = './image.php';
	}else{
		$view = call($_GET["controller"], $_GET["action"]);
	}

	
	
?>