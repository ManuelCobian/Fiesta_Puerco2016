$(document).ready(function(){
alert("Pagina oficial de la fiesta del Puerco 2016 ");
$(".oculto").hide()



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