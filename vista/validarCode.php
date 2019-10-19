<?php 

include '../controlador/UsuarioControlador.php';


if (isset($_POST['txtUsuario']) && isset($_POST['txtPassword'])) {
	
	$txtUsuario = $_POST['txtUsuario']; 
	$txtPassword = $_POST['txtPassword']; 


	$resultado = array('estado' => "true" );

	if (UsuarioControlador::login($txtUsuario,$txtPassword)) {
		return print( json_encode( $resultado ) );
	}
}

$resultado = array('estado' => "false" );
return print( json_encode( $resultado) );
 ?>