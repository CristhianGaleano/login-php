<?php 

include '../controlador/UsuarioControlador.php';
include '../helps/help.php';


session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	

	if (isset($_POST['txtNombre'])  && isset($_POST['txtUsuario']) && isset($_POST['txtPassword']) && isset($_POST['txtEmail']) ) {
	
	$txtNombre = validar_campo($_POST['txtNombre']);
	$txtUsuario = validar_campo($_POST['txtUsuario']);
	$txtPassword = validar_campo($_POST['txtPassword']);
	$txtEmail = validar_campo($_POST['txtEmail']);
	$txtPrivilegio = 2;


	$resultado = array('estado' => 'true' );

	if (UsuarioControlador::registrar($txtNombre,$txtUsuario,$txtEmail,$txtPassword,$txtPrivilegio)) {
	

		
		return print( json_encode( $resultado ) );
	}
}

}

 ?>