$(document).ready(function(){

alert("bienvenido al sistema")
$('#boton').bind('click',agregar);//agrega el evento .jsbtnadd	


configurar_borrar();
validar_num();

$("#identi").focus();

$("th").css("text-align","center");





});
var agregar=function(){

	var id=$("#identi").val();
	var name=$("#categoria").val();
	

		
	if (confirm('¿Seguro desea agregar el registro?')){
		
			if(id<=0 && name<=0)
		{
		alert("ingrese los campos");
		}

		else
		
		if(id<=0)
		{
			$("#identi").focus();
				alert("ingrese los campos");

		} 

		else

			if(name<=0)

			{
					$("#categoria").focus();
						alert("ingrese los campos");

			}


		
		
		
		else
		{


		var html = '';
		var no_filas = parseFloat($('.table tbody tr').length);
		var ultima_fila = $('.table tbody tr:last-child').attr('id');
		var ultimo_id = (ultima_fila != undefined) ? ultima_fila.split('_')[1] : 0;
		ultimo_id = parseFloat(ultimo_id) + 1;


		html += '<tr id="tr_' + ultimo_id + '">';
			html += '<td>' + (no_filas+1) + '</td>';
			html += '<td>' + $("#identi").val(); + '</td>';
			html += '<td>' + $("#categoria").val(); + '</td>';
                html += '<td>' +'<input type=text class="moneda" width="100px"> ' + '</td>';
                html += '<td>' +'<input type=text class="billete" width="100px"> ' + '</td>';
                   html += '<td>' +'<input type=text class="dolar" width="100px"> ' + '</td>';
                html += '<td>' +'<input type=text class="total" width="100px"> ' + '</td>';

				
			
				html += '<td>';
				html += '<a href="javascript: void(0)" class="borrar">Borrar</a>';
			html += '</td>';
		html += '</tr>';

		$('.table tbody').append(html);
	
			$(".moneda").val(0);
		$(".billete").val(0);
		$(".dolar").val(0);

	$("td").css("text-align","center");
	$(".moneda").css("font-size","20px");
	$(".billete").css("padding-right ","20px");
	$(".total").css("padding-left ","20px");

suma(ultimo_id);

	

			}
	
			}
		
	}

		var suma=function(ultimo_id){

		
			$(".table").on("click","tr",function(){

				var moneda=$(".moneda:last").val();
			var billete=$(".billete:last").val();
			var dolar=$(".dolar:last").val();


			if(moneda>0 && billete>0 )
			{
				var dol=17;
				dol=dol*dolar;
				var monedas=0;
				monedas=+moneda;
				var billetes=0
				billetes=+billete;

				total=billetes+monedas+dol;
					cantidad=$(this).find("td").eq(6).html(total);

				
					
				
			}
			
				
				fam=$("#categoria:first").val();//familia
				id=$("#identi:first").val();//el id del puerco
				familia=$(this).find("td").eq(2).html();
				id=$(this).find("td").eq(1).html();
				
				$(".Total").val(total);
				$(".fam").val(familia);//enviar familia
				$(".No").val(ultimo_id)//conteo de puercos
				$(".Id").val(id)//enviar Id puerco
			

					
			


			})

			

				

		
 		}








var limpiar_controles=function(){
$("#identi").val(" ");
$("#categoria").val("");


}

function configurar_borrar(){
	$('.table').on('click', '.borrar', function(){
		if (confirm('¿Seguro desea borrarlo?')){
			$(this).parent().parent('tr').remove();
			calcular_edad_promedio();
		}
	});	
}

var validar_num=function() {
	
	$('#identi').on('keypress', function(evt){
		var code = (evt.which) ? evt.which : event.keyCode;

		if (code > 31 && (code < 48 || code > 57)) {
	    	return false;
	  
	    } else {
	    	return true;
	    	  	alert("ingrese solo numeros");
	    }  
	});
}




