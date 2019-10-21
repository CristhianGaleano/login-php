$(document).ready( function(){

	//Cuando se envie el form del login
	//bin(evento que ejecuta una funcion): captura el evento- en este caso cuando haga el form submit, podria ser tambien 'clik etc.'
	$('#formulario-login').bind("submit", function() {

		$.ajax({
			//capturamos los atributos del formulario con this porque es el que hemos seleccionado con '#...'
			type: $(this).attr("method"),
			url: $(this).attr("action"),
			data: $(this).serialize(),
			success: function(){
				

$("body").overhang({
  type: "success",
  message: "Woohoo! Our message works!"
});


			},
			error: function(){
				alert("No Ok");
			}
		});


		//Impide
		return false; 
	});

} );