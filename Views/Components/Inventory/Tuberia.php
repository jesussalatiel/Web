<?php
require_once('../../Models/TuberiaAC_model.php');
require_once('../../connection.php');
$data = TuberiaAC::all();
?>
<div class="table-responsive">
<table class="table table-bordered">
<caption class="text-center">Tuberia de Acero al Carbon</caption>
  <tr>
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
	<select class="selectpicker show-tick form-control" title="Medida" id="medida">
	<optgroup label="Medidas" data-max-options="2">
		<?php
			$items = TuberiaAC::fillMedida();	
			foreach($items as $item){
				echo '<option value="'.$item.'">'.$item.'</option>';
			}
		?>
	</optgroup>
	</form>
	</td>
	<td class="text-center"><?php echo $data->diametro_ex_pulgadas;?></td>
	<td class="text-center"><?php echo $data->diametro_ex_milimetros;?></td>
	<td class="text-center">
	<select class="selectpicker show-tick form-control" title="Cedula">
	<optgroup label="Cedula" data-max-options="2">
		<?php
			$items = TuberiaAC::fillCedula();	
			foreach($items as $item){
				echo '<option value="'.$item.'">'.$item.'</option>';
			}
		?>
	</optgroup>
	</select>
	</td>
	<td class="text-center">
	<!--<?php echo $data->pared_pulgadas;?>-->
		<input type="number" step="0.01"  min="0" placeholder="Pulgadas" class="form-control" id="pulgadas">
	</td>
	<td class="text-center">
		<!--<?php echo $data->pared_milimetros;?>-->
		<input type="number" step="0.01"  min="0" placeholder="Milimetros" class="form-control" id="milimetros">
	</td>
	<td class="text-center"><?php echo $data->diametro_in_pulgadas;?></td>
	<td class="text-center"><?php echo $data->diametro_in_milimetros;?></td>
	<td class="text-center"><?php echo $data->kg;?></td>
	<td class="text-center"><?php echo $data->peso;?></td>
	<td class="text-center"><?php echo $data->total;?></td>
	<td class="text-center">
		<!--<?php echo $data->piezas;?>-->
		<input type="number" step="any"  min="0" placeholder="Piezas" class="form-control" id="piezas">
	</td>
	<td class="text-center">
		<!--<?php echo $data->longitud;?>-->
		<input type="number" step="any"  min="0" placeholder="Longitud" class="form-control" id="longitud">
	</td>
  </tr>
  <?php } ?>
</table>
</div>
