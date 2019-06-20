<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../../index.php');
	exit();
}
require_once('routes.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Panel de Control</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="../../Assets/css/home.css">
</head>
<body>
<div class="container pen">
  <div class="row">
    <div class="col-sm-12">
		<a href='./Home.php'><img src="../../Assets/images/image.png" class="rounded float-left"  height="200" width="450"></a>
          <nav class="navbar navbar-default" role="navigation">            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
              <ul class="nav navbar-nav">
			
                <li class="dropdown">
                  <a href="#" class="dropdown-item" data-toggle="dropdown">Inventario<b class="caret"></b></a>
                  	<ul class="dropdown-menu">
                      <li><a href="?controller=Inventory&action=barraHueca">Barra Hueca</a></li>
                      <li><a href="?controller=Inventory&action=tuberia">Tuberia A/C</a></li>
                      <li><a href="?controller=Inventory&action=barraSolida">Barra Solida</a></li>
					            <li><a href="?controller=Inventory&action=placa">Placa A/C</a></li>
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
			       <a href="logout.php" class="btn btn-danger navbar-btn" >Salir</a>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>
  </div>
</div>

<div class="container pen">
	<div class="row">
		<div class="col-sm-12 pen">
			<?php
            require($view);
      ?>
		</div>
	</div>
</div>

<footer class="container pen text-center">
  <p></p>
</footer>


<script src="Assets/js/main.js"></script>


</body>
</html>
