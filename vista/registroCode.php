<?php 

include '../controlador/UsuarioControlador.php';
include '../helps/help.php';


session_start();

#para que retorne el response como un object
header('Content-Type: application/json');
$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	

	if (isset($_POST['txtNombre'])  && isset($_POST['txtUsuario']) && isset($_POST['txtPassword']) && isset($_POST['txtEmail']) ) {
	
	$txtNombre = validar_campo($_POST['txtNombre']);
	$txtUsuario = validar_campo($_POST['txtUsuario']);
	$txtPassword = validar_campo($_POST['txtPassword']);
	$txtEmail = validar_campo($_POST['txtEmail']);
	$txtPrivilegio = 2;


	$resultado = array('estado' => 'true' );

	if (UsuarioControlador::registrar($txtNombre,$txtUsuario,$txtEmail,$txtPassword,$txtPrivilegio)) {
	#echo 'Disque true';
		$usuario = UsuarioControlador::get_usuario($txtUsuario,$txtPassword);

		
		return print( json_encode( $resultado ) );
	}else{
	#	echo 'Disque falso';
		$resultado = array('estado' => 'false' );
		return print( json_encode( $resultado) );

	}
}

}

 ?>