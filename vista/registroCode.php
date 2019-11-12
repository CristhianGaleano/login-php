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
	$txtPrivilegio = 1;


	#Registra al nuevo user return en caso de exito.
	if (UsuarioControlador::registrar($txtNombre,$txtUsuario,$txtEmail,$txtPassword,$txtPrivilegio)) {

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

		header("location:admin.php");
	}else{
	header("location:registro.php?error=1");

	}
}else{
	header("location:registro.php?error=1");
}

}

 ?>