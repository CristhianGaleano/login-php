<?php 

include '../datos/UsuarioDao.php';
/**
* 
*/
class UsuarioControlador
{

/**
 * [Envia el objeto usuario seteado con los datos del login a usuario daro para validar a BD]
 * @param  [text] $usuario  [description]
 * @param  [text] $password [description]
 * @return [type]           [description]
 */
	public static function login($usuario, $password){
	#	echo "On login-controller <br>";

		// Crear objeto d etipo usuario, no se importa nuevamente porque ya se hi
		$obj_usuario = new Usuario();
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);

	#	var_dump($obj_usuario);

// Llamamos al metodo estatico
		echo UsuarioDao::login($obj_usuario);

	}
}

 ?>