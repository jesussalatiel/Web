var position = 0;
$('td').click(function(){
	var col = $(this).parent().children().index($(this));
	var row = $(this).parent().parent().children().index($(this).parent());
	//test= ('Row: ' + row + ', Column: ' + col);
	position = row-2;
});

function calcular(event){
	if(event.keyCode == 13){
		seleccion = document.getElementsByName('item')[position].value;
		alert(seleccion);
	}
}

function calculate(){
	positionSeleccion = (document.getElementsByName('item')[position].value).toString();
	var nameSelected = document.getElementById("in_selected-"+positionSeleccion);
	var valueSelected = nameSelected.options[nameSelected.selectedIndex].text;
	/**/
	document.getElementById('exmilimetros-'+positionSeleccion).value= (valueSelected * 25.4).toFixed(4);
	
	//alert('Item: '+positionSeleccion+" Opcion: "+nameselected.options[0].text);
}

	

