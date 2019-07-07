var position = 0;

$('td').click(function(){
	var col = $(this).parent().children().index($(this));
	var row = $(this).parent().parent().children().index($(this).parent());
	//test= ('Row: ' + row + ', Column: ' + col);
	position = row-2;
});


function calculateDiametroExterior(){
	positionSeleccion = (document.getElementsByName('item')[position].value).toString();
	var nameSelected = document.getElementById("in_selected-"+positionSeleccion);
	var valueSelected = nameSelected.options[nameSelected.selectedIndex].text;
	
	document.getElementById('exmilimetros-'+positionSeleccion).value= (valueSelected * 25.4).toFixed(2);
	
	//alert('Item: '+positionSeleccion+" Opcion: "+nameselected.options[0].text);
}

function calculatePared(event){
	if(event.keyCode == 13){
		positionSeleccion = (document.getElementsByName('item')[position].value).toString();

		var valueParedIn = document.getElementById('paredIn-'+positionSeleccion).value;
		document.getElementById('paredMm-'+positionSeleccion).value = (valueParedIn * 25.4).toFixed(2);
		
	}
}

