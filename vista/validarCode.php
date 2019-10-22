<?php 

include '../controlador/UsuarioControlador.php';
#para que retorne el response como un object
header('Content-Type: application/json');
$resultado = array();

if (isset($_POST['txtUsuario']) && isset($_POST['txtPassword'])) {
	
	$txtUsuario = $_POST['txtUsuario']; 
	$txtPassword = $_POST['txtPassword']; 


	$resultado = array('estado' => 'true' );

	if (UsuarioControlador::login( $txtUsuario,$txtPassword )) {
	#echo 'Disque true';
		return print( json_encode( $resultado ) );
	}else{
	#	echo 'Disque falso';
		$resultado = array('estado' => 'false' );
		return print( json_encode( $resultado) );

	}
}

 ?>