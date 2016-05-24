$(document).ready(function(){
alert("Pagina oficial de la fiesta del Puerco 2016 ");
$(".oculto").hide()
validar_num();


});

function validar(){

	var bandera = false;//bandera para que quede
	var puerco=$(".boton").val();//le doy el valor

	if(puerco!="")//si esta lleno
	{
		
		bandera = true;
		
		
	}	
	else{
		
		alert("ingrese campo")
		
	}
	
	return bandera;

}



var validar_num=function() {
	
	$('.boton').on('keypress', function(evt){
		var code = (evt.which) ? evt.which : event.keyCode;

		if (code > 31 && (code < 48 || code > 57)) {
	    	return false;
	    	alert("ingrese solo numeros")
	    } else {
	    	return true;
	    	alert("ingrese solo numeros")
	    }  
	});
}




