$(document).ready(function(){
	$("#enviar").click(function(){

		var nombre = $("#nombre").val();
		var email = $ ("#email").val();
		var Asunto = $("#Asunto").val();
		var	mensaje= $("#mensaje").val();

		//si hay datos vacios
		if(nombre == "" && email == "" && Asunto == "" && comentarios == ""){
			jAlert("Es necesario capturar todos los datos");
		}else{
			// $("#enviar").attr("disabled", "false");
		}

		var datos = 'nombre1=' + nombre + '&email1=' + email +'&Asunto1=' + Asunto + '&mensaje1=' + mensaje;
	
		//metodo ajax 

		$.ajax({
			type: "POST",
			url: "php/conexion.php",
			data: datos,
			succes: function(){
				JAlert("Se envio correctamente");
			},
			error: function(){
				jAlert("Error");
			}
		});
	});

});//ultimo