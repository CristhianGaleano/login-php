$(document).ready( function(){

	//Cuando se envie el form del login
	//bin(evento que ejecuta una funcion): captura el evento- en este caso cuando haga el form submit, podria ser tambien 'clik etc.'
	$('#formulario-login').bind("submit", function() {

		$.ajax({
			//capturamos los atributos del formulario con this porque es el que hemos seleccionado con '#...'
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			beforeSend: function(){
				$("#formulario-login button[type=submit]").html("Enviando...");
			},
			//Recibe la respuesta: response
			success: function(response){

//console.log(response);
				if (response.estado == 'true') {

$("body").overhang({
  type: "success",
  message: "Usuario encontrado! en segundos seras redirigido",
  callback: function(){
  	window.location.href="admin.php";
  }
});

				}else{

$("body").overhang({
  type: "error",
  message: "Lo siento ha ocurrido un error!",
  //closeConfirm: true
});
$("#formulario-login button[type=submit]").html("Enviando...");
				}
$("#formulario-login button[type=submit]").html("Ingresar");
			},
			error: function(){



			}
		});


		//Impide
		return false; 
	});

} );