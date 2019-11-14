<?php

include '../controlador/UsuarioControlador.php';
include '../helps/help.php';


session_start();

#para que retorne el response como un object
header('Content-Type: application/json');
$resultado = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	

	if (isset($_POST['txtUsuario']) && isset($_POST['txtPassword'])) {
	
	$txtUsuario = validar_campo($_POST['txtUsuario']);
	$txtPassword = validar_campo($_POST['txtPassword']);


	$resultado = array('estado' => 'true' );

	if (UsuarioControlador::login( $txtUsuario,$txtPassword )) {
	#echo 'Disque true';
		$usuario = UsuarioControlador::get_usuario($txtUsuario,$txtPassword);

		$_SESSION['usuario'] = array(
			'id' => $usuario->getId(),
			'nombre' => $usuario->getNombre(),
			'usuario' => $usuario->getUsuario(),
			'email' => $usuario->getEmail(),
			'privilegio' => $usuario->getPrivilegio(),
			'fecha_registro' => $usuario->getFecha_registro()
		);
		return print( json_encode( $resultado ) );
	}else{
	#	echo 'Disque falso';
		$resultado = array('estado' => 'false' );
		return print( json_encode( $resultado) );

	}
}

}

 ?>