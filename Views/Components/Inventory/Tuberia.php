<?php
require_once('../../Models/TuberiaAC_model.php');
require_once('../../connection.php');
$data = TuberiaAC::all();
?>
<div class="table-responsive">
<table class="table table-bordered">
<caption class="text-center">Tuberia de Acero al Carbon</caption>
  <tr>
    <td rowspan="2">Medida</td>
    <td colspan="2">Diametro Exterior</td>
	<td rowspan="2">Cedula</td>
	<td colspan="2">Pared</td>
	<td colspan="2">Diametro Interior</td>
	<td rowspan="2">KG x M</td>
	<td rowspan="2">Peso x Pieza</td>
	<td rowspan="2">Peso Total</td>
	<td rowspan="2">Piezas</td>
	<td rowspan="2">Longitud</td>
  </tr>
  <tr>
    <td>in</td>
    <td>mm</td>
    <td>in</td>
    <td>mm</td>
	<td>in</td>
    <td>mm</td>
	
  </tr>
  <?php foreach ($data as $data) { ?>
  <tr>
	<td><?php echo $data->medida;?></td>
	<td><?php echo $data->diametro_ex_pulgadas;?></td>
	<td><?php echo $data->diametro_ex_milimetros;?></td>
	<td><?php echo $data->cedula;?></td>
	<td><?php echo $data->pared_pulgadas;?></td>
	<td><?php echo $data->pared_milimetros;?></td>
	<td><?php echo $data->diametro_in_pulgadas;?></td>
	<td><?php echo $data->diametro_in_milimetros;?></td>
	<td><?php echo $data->kg;?></td>
	<td><?php echo $data->peso;?></td>
	<td><?php echo $data->total;?></td>
	<td><?php echo $data->piezas;?></td>
	<td><?php echo $data->longitud;?></td>
  </tr>
  <?php } ?>
</table>
</div>