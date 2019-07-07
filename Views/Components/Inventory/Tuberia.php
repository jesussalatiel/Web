<?php
require_once('../../Models/TuberiaAC_model.php');
require_once('../../connection.php');
?>
<div>
    <input type="number" required="required" placeholder="Pared Pulgadas" type="text class=" form-control" id="paredPulgadas" value="">
</div>
<div>
    <input type="number" required="required" placeholder="Pared Milimetros" type="text class=" form-control" id="paredMilimetros" value="">
</div>
<div>
    <input type="number" required="required" placeholder="Piezas" type="text class=" form-control" id="piezas" value="">
</div>
<div>
    <input type="number" required="required" placeholder="Longitud" type="text class=" form-control" id="longitud" value="">
</div>
<div>
    <input type="submit" value="Aceptar" onClick="calculateTuberiaAC()">
</div>
<div class="table">
    <table class="table table-bordered" id='table'>
        <caption class="text-center">Tuberia de Acero al Carbon</caption>
        <tr>
            <td rowspan="2" class="text-center">Medida</td>
            <td colspan="2" class="text-center">Diametro Exterior</td>
            <td rowspan="2" class="text-center">Cedula</td>
            <td colspan="2" class="text-center">Diametro Interior</td>
            <td rowspan="2" class="text-center">KG x M</td>
            <td rowspan="2" class="text-center">Peso x pieza</td>
            <td rowspan="2" class="text-center">Peso Total</td>
        </tr>
        <tr>
            <td class="text-center">Pulgadas</td>
            <td class="text-center">Milimetros</td>
            <td class="text-center">Pulgadas</td>
            <td class="text-center">Milimetros</td>

        </tr>

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
            <input type="text" class=" form-control" id="pulgadasExterior" value="" disabled>
        </td>
        <td class="text-center">
            <input type="text" class=" form-control" id="milimetrosExterior" value="" disabled>
        </td>
        <td class="text-center">
            <?php
				$medidas = TuberiaAC::fillType('cedula');
				echo '<select class="selectpicker show-tick form-control" id="Cedula">';
				foreach($medidas as $medida){
					echo '<option value="'.$medida.'">'.$medida.'</option>';
				}	
				echo'</select>';
			?>
        </td>
        <td class="text-center">
            <input type="text" class=" form-control" id="pulgadasInterior" value="" disabled>
        </td>
        <td class="text-center">
            <input type="text" class=" form-control" id="milimetrosInterior" value="" disabled>
        </td>
        <td class="text-center">
            <input type="text" class=" form-control" id="kilogramo" value="" disabled>
        </td>
        <td class="text-center">
            <input type="text" class=" form-control" id="pesoPieza" value="" disabled>
        </td>
        <td class="text-center">
            <input type="text" class=" form-control" id="total" value="" disabled>
        </td>

    </table>
</div>