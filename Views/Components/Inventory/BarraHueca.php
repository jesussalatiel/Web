<?php
require_once('../../Models/BarraHueca_model.php');
require_once('../../connection.php');
$data = BarraHueca::all();
?>

<div class="table-responsive">
<table class="table table-bordered">
<caption class="text-center">Barra Hueca</caption>
  <tr>
    <td colspan="2" class="text-center">Medida</td>
    <td colspan="2" class="text-center">Pared</td>
    <td rowspan="2" class="text-center">KG x M</td>
    <td rowspan="2" class="text-center">Peso x Pieza</td>
    <td rowspan="2" class="text-center">Peso Total</td>
    <td rowspan="2" class="text-center">Piezas</td>
    <td rowspan="2" class="text-center">Longitud</td>
  </tr>
  <tr>
    <td class="text-center">Exterior</td>
    <td class="text-center">Interior</td>
    <td class="text-center">Milimetros</td>
    <td class="text-center">Pulgadas</td>
  </tr>
  <?php foreach ($data as $data) { ?>
  <tr>
    <td class="text-center"><?php echo $data->medida_exterior;?></td>
    <td class="text-center"><?php echo $data->medida_interior;?></td>
    <td class="text-center"><?php echo $data->pared_milimetros;?></td>
    <td class="text-center"><?php echo $data->pared_pulgadas;?></td>
    <td class="text-center"><?php echo $data->kg;?></td>
    <td class="text-center"><?php echo $data->peso;?></td>
    <td class="text-center"><?php echo $data->total;?></td>
    <td class="text-center"><?php echo $data->piezas;?></td>
    <td class="text-center"><?php echo $data->longitud;?></td>
    	
  </tr>
  <?php } ?>
</table>
</div>