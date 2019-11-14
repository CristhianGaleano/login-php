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


	#Crea al nuevo user return en caso de exito.
	if (UsuarioControlador::crear_nuevo_usuario($txtNombre,$txtUsuario,$txtEmail,$txtPassword,$txtPrivilegio)) {


		header("location:crud.php");
	}else{
	header("location:crud.php?error=1");

	}
}else{
	header("location:crear_usuario_form.php?error=1");
}

}

 ?>