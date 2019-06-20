<?php

	//función que llama al controlador y su respectiva acción, que son pasados como parámetros
	function call($controller, $action){
		//importa el controlador desde la carpeta Controllers
		require_once('Controllers/' . $controller . '_controller.php');
		//crea el controlador
		switch($controller){
			case 'Inventario':
				$controller = new InventoryController();
			break; 
			case 'Cotizaciones':
			
			break;

			default:

			break;
		}
		//llama a la acción del controlador
		$controller->{$action}();
	}

	$controller = $_GET["controller"];
	$action = $_GET["action"];

	switch($controller){
		case 'Inventario':
			$view = 'err.php';
		break;
	}
	
	
	
	$word = $controller."  ".$action;
	//$view = 'test.php';
?>