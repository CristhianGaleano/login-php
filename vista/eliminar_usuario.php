<?php 

include '../controlador/UsuarioControlador.php';
include '../helps/help.php';


session_start();


if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	if (isset($_GET['id']) ) {

	$id = validar_campo($_GET['id']);

	#Crea al nuevo user return en caso de exito.
	if (UsuarioControlador::eliminar_usuario($id)) {


	header("location:crud.php");
	}else{
	header("location:crud.php?error=1");

	}
}else{
	header("location:crud.php?error=1");
}

}

 ?>