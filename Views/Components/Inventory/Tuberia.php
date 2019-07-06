<?php
require_once('../../Models/TuberiaAC_model.php');
require_once('../../connection.php');
$data = TuberiaAC::all();
?>
<div class="table-responsive">
<table class="table table-bordered" id='table'>
<caption class="text-center">Tuberia de Acero al Carbon</caption>
<tr>
  	<td rowspan="2" class="text-center">No.</td>
	<td rowspan="2" class="text-center">Medida</td>
    <td colspan="2" class="text-center">Diametro Exterior</td>
	<td rowspan="2" class="text-center">Cedula</td>
	<td colspan="2" class="text-center">Pared</td>
	<td colspan="2" class="text-center">Diametro Interior</td>
	<td rowspan="2" class="text-center">KG x M</td>
	<td rowspan="2" class="text-center">Peso x Pieza</td>
	<td rowspan="2" class="text-center">Peso Total</td>
	<td rowspan="2" class="text-center">Piezas</td>
	<td rowspan="2" class="text-center">Longitud</td>
</tr>
<tr>
	<td class="text-center">Pulgadas</td>
	<td class="text-center">Milimetros</td>
	<td class="text-center">Pulgadas</td>
	<td class="text-center">Milimetros</td>
	<td class="text-center">Pulgadas</td>
	<td class="text-center">Milimetros</td>
</tr>
<?php foreach ($data as $data) { ?>
<tr>
<td class="text-center">
<?php echo '<input name="item" type="hidden" value="'.($data->id).'">'.($data->id).'</input>';?>
</td>
<td class="text-center">
<?php
$medidas = TuberiaAC::fillType('medida');
echo '<select class="selectpicker show-tick form-control" id="medida_selected-'.($data->id).'">';
foreach($medidas as $medida){
	echo '<option value="'.$medida.'">'.$medida.'</option>';
}	
echo'</select>';
?>
</td>
<td class="text-center">
	<?php
	$item = TuberiaAC::fillType('diametro_ex_pulgadas');
	echo '<select class="selectpicker show-tick form-control" onchange="calculate()" id="in_selected-'.($data->id).'">';
	foreach($item as $type){
		echo '<option value="'.$type.'">'.$type.'</option>';
	}
	echo'</select>';
	?>
</td>

<td>
<?php
	echo '<input type="text" placeholder="Milimetros" class="form-control" id="exmilimetros-'.$data->id.'" value="">';
?>
</td>


</tr>
<?php } ?>
</table>
</div>

