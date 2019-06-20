<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../index.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Panel de Control</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../../Assets/css/home.css">
</head>
<body>
<div class="container pen">
  <div class="row">
    <div class="col-sm-12 pen">
      <div class="page-header">
      </div>
    </div>
  </div>
</div>

<div class="container pen">
  <div class="row">
    <div class="col-sm-12">
		<img src="../../Assets/images/image.png" class="rounded float-left"  height="200" width="450">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul class="nav navbar-nav">
                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Inventario<b class="caret"></b></a>
                  	<ul class="dropdown-menu">
                      <li><a href="#">Barra Hueca</a></li>
                      <li><a href="#">Tuberia A/C</a></li>
                      <li><a href="#">Barra Solida</a></li>
					  <li><a href="#">Placa A/C</a></li>
                      <li><a href="#">Dropdown 1</a></li>
                    </ul>
                  </li>

				  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cotizaciones<b class="caret"></b></a>
                  	<ul class="dropdown-menu">
                      <li><a href="#">Dropdown 1</a></li>
                      <li><a href="#">Dropdown 2</a></li>
                      <li><a href="#">Dropdown 3</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes<b class="caret"></b></a>
                  	<ul class="dropdown-menu">
                      <li><a href="#">Dropdown 1</a></li>
                      <li><a href="#">Dropdown 2</a></li>
                      <li><a href="#">Dropdown 3</a></li>
                    </ul>
                  </li>

				  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Facturas<b class="caret"></b></a>
                  	<ul class="dropdown-menu">
                      <li><a href="#">Dropdown 1</a></li>
                      <li><a href="#">Dropdown 2</a></li>
                      <li><a href="#">Dropdown 3</a></li>
                    </ul>
                  </li>
              </ul>
			  <li><a href="logout.php" class="btn btn-danger navbar-btn" >Salir</a></li>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
  </div>
</div>
<script src="Assets/js/main.js"></script>
<?php require_once('routes.php'); ?>
</body>
</html>
