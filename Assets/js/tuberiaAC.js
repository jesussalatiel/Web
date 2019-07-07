function calculateTuberiaAC(){
    var paredPulgadas = document.getElementById('paredPulgadas').value, 
    paredMilimetros = document.getElementById('paredMilimetros').value, 
    piezas = document.getElementById('piezas').value, 
    longitud = document.getElementById('longitud').value;


    var pulgadasExterior = document.getElementById('pulgadasExterior').value = 1.315;
    var milimetrosExterior = document.getElementById('milimetrosExterior').value = (pulgadasExterior * 25.4).toFixed(3);
    var pulgadasInterior = document.getElementById('pulgadasInterior').value = (pulgadasExterior-paredPulgadas-paredPulgadas).toFixed(3);
    var milimetrosInterior = document.getElementById('milimetrosInterior').value = (pulgadasInterior *25.4).toFixed(3);
    var kilogramos = document.getElementById('kilogramo').value = (((pulgadasExterior*pulgadasExterior)*4)-(pulgadasInterior*pulgadasInterior)*4).toFixed(3);
    var pesoPieza = document.getElementById('pesoPieza').value = (longitud*kilogramos).toFixed(3);
    var total = document.getElementById('total').value = (piezas*longitud*kilogramos).toFixed(3);
    
}