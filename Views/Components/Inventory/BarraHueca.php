<?php
require_once('../../Models/Home_model.php');
require_once('../../connection.php');
$data = Home::all();
?>

<div class="table-responsive">
<table class="table table-bordered">
<caption class="text-center">Barra Hueca</caption>
  <tr>
    <td colspan="2">Medida</td>
    <td colspan="2">Pared</td>
    <td rowspan="2">KG x M</td>
    <td rowspan="2">Peso x Pieza</td>
    <td rowspan="2">Peso Total</td>
    <td rowspan="2">Piezas</td>
    <td rowspan="2">Longitud</td>
  </tr>
  <tr>
    <td>Exterior</td>
    <td>Interior</td>
    <td>mm</td>
    <td>in</td>
  </tr>
  <?php foreach ($data as $data) { ?>
  <tr>
    <td><?php echo $data->id;?></td>
    <td><?php echo $data->medida;?></td>
    <td><?php echo $data->pared;?></td>
    <td><?php echo $data->kg;?></td>
    <td><?php echo $data->peso;?></td>
    <td><?php echo $data->total;?></td>
    <td><?php echo $data->piezas;?></td>
    <td><?php echo $data->longitud;?></td>
    <td><?php echo $data->id;?></td>	
  </tr>
  <?php } ?>
</table>
</div>