<?php 

	/**
	 * Import clase COnexion
	 */
	include 'Conexion.php';
	include '../entidades/Usuario.php';


// Con la importación de la clase conexion(previamente) podemos extenderla para usar el metodo internamente( en esta clase)
class UsuarioDao extends Conexion{


	protected static $cn;

	/**
	 * Un metodo que nos permita conectar en todo momento
	 */
	
	public static function getConexion(){

	/**
	 * self: invocar la clase en si
	 */
	
	self::$cn = Conexion::conectar();
	}

	private static function desconectar(){

		self::$cn = null;
	}

	/**
	 * [Validad las credenciales ingresada con la BD]
	 * @param  [type] $usuario [description]
	 * @return [boolean]          [description]
	 */
	public static function login($usuario){
		// echo "Login";
		// 
		#$usuario = $usuario->getUsuario();
		#$password = $usuario->getPassword();

		$query = "SELECT * FROM usuarios WHERE usuario=:usuario AND password=:password";

		/**
		 * Call getConexion()
		 */
		self::getConexion();



		$resultado = self::$cn->prepare($query);
		$resultado->bindParam(":usuario", $usuario->getUsuario());
		$resultado->bindParam(":password", $usuario->getPassword());

// var_dump($resultado);
		$resultado->execute();
// var_dump($resultado)
		if ($resultado->rowCount() > 0) {
			#Capturamos la informacion y realizar comparacion, se hace para evitar la inyeccion de codigo(hay metodos mejores)
			$row = $resultado->fetch();
			if ( $row['usuario'] == $usuario->getUsuario() && $row['password'] == $usuario->getPassword() ) {
				return true;
			}
		}

		return false;

	}

}

 ?>