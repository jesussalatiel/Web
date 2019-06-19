<?php
// la variable controller guarda el nombre del controlador y action guarda la acción por ejemplo registrar 
	//si la variable controller y action son pasadas por la url desde layout.php entran en el if
	if (isset($_GET['controller'])&&isset($_GET['action'])) {
		$controller=$_GET['controller'];
		$action=$_GET['action'];
	} else {
		$controller='User';
		$action='update';
	}	
	//carga la vista lOgin.php
	require_once('Views/Login/Login.php');
?>