<?php 

import '../datos/UsuarioDao.php';
/**
* 
*/
class UsuarioControlador
{

	public static function login($usuario, $password){

		// Crear objeto d etipo usuario, no se importa nuevamente porque ya se hi
		$obj_usuario = new Usuario();
		$obj_usuario.setUsuario($usuario);
		$obj_usuario.setPassword($password);

// Llamamos al metodo estatico
		UsuarioDao::login($obj_usuario);		

	}
}

 ?>