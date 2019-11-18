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
		#echo "On login-controller <br>";

		// Crear objeto d etipo usuario, no se importa nuevamente porque ya se hi
		$obj_usuario = new Usuario();
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);

	#	var_dump($obj_usuario);

// Llamamos al metodo estatico
		 return UsuarioDao::login($obj_usuario);

	}


	public function get_usuario($usuario,$password){
		

		// Crear objeto d etipo usuario, no se importa nuevamente porque ya se hi
		$obj_usuario = new Usuario();
		
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setPassword($password);

	#	var_dump($obj_usuario);

// Llamamos al metodo estatico
		 return UsuarioDao::get_usuario($obj_usuario);

	}



	 public function registrar($nombre,$usuario,$email,$password,$privilegio){
		

		// Crear objeto d etipo usuario, no se importa nuevamente porque ya se hi
		$obj_usuario = new Usuario();
		
		$obj_usuario->setNombre($nombre);
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setEmail($email);
		$obj_usuario->setPassword($password);
		$obj_usuario->setPrivilegio($privilegio);
		#echo "COntrolador<br>";
#var_dump($obj_usuario);
	
// Llamamos al metodo estatico
		 return UsuarioDao::registro($obj_usuario);

	}

	public function crear_nuevo_usuario($id,$nombre,$usuario,$email,$password,$privilegio){
		

		// Crear objeto d etipo usuario, no se importa nuevamente porque ya se hi
		$obj_usuario = new Usuario();
		
		$obj_usuario->setId($id);
		$obj_usuario->setNombre($nombre);
		$obj_usuario->setUsuario($usuario);
		$obj_usuario->setEmail($email);
		$obj_usuario->setPassword($password);
		$obj_usuario->setPrivilegio($privilegio);
		#echo "COntrolador<br>";
#var_dump($obj_usuario);
	
// Llamamos al metodo estatico
		 return UsuarioDao::crear_nuevo_usuario($obj_usuario);

	}

public function get_usuarios(){
	return UsuarioDao::get_usuarios();
}



public function get_usuarioById($id){
	return UsuarioDao::get_usuarioById($id);
}


public function eliminar_usuario($id){
	return UsuarioDao::eliminar_usuario($id);
}



}#End class




 ?>