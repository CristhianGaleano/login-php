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
		// Se comenta ya que en PHP 7.? presenta una restriccion por lo que toca utilizar bindValue()
		// $resultado->bindParam(":usuario", $usuario->getUsuario());
		// $resultado->bindParam(":password", $usuario->getPassword());

		$resultado->bindValue(":usuario", $usuario->getUsuario());
		$resultado->bindValue(":password", $usuario->getPassword());

#var_dump($resultado);
		$resultado->execute();
// var_dump($resultado)
		if ($resultado->rowCount() > 0) {
			#Capturamos la informacion y realizar comparacion, se hace para evitar la inyeccion de codigo(hay metodos mejores)
			#echo '<br>On login <br>';
			$row = $resultado->fetch();
				#echo $row['usuario'] . "-" . $row['password'] . $usuario->getPassword();
			if ( $row['usuario'] == $usuario->getUsuario() && $row['password'] == $usuario->getPassword() ) {
				return true;
			}
		}
#echo 'No salío';
		return false;

	}


/**
	 * Metodo que sirve para traer datos del usuario
	 * @param  [type] $usuario [description]
	 * @return [boolean]          [description]
	 */
	public static function get_usuario($usuario){
		
		$query = "SELECT id,nombre,usuario,privilegio,fecha_registro,email FROM usuarios WHERE usuario=:usuario AND password=:password LIMIT 1";

		/**
		 * Call getConexion()
		 */
		self::getConexion();



		$resultado = self::$cn->prepare($query);
		
		$resultado->bindValue(":usuario", $usuario->getUsuario());
		$resultado->bindValue(":password", $usuario->getPassword());

		$resultado->execute();

		$filas=$resultado->fetch();

		#Creamos el objeto de tipo usuario
		$usuario  = new Usuario();
		$usuario->setId($filas['id']);
		$usuario->setNombre($filas['nombre']);
		$usuario->setUsuario($filas['usuario']);
		$usuario->setEmail($filas['email']);
		$usuario->setPrivilegio($filas['privilegio']);
		$usuario->setFecha_registro($filas['fecha_registro']);

		return $usuario;

	}#END METHOD



	/**
	 * Registra un usuario
	 * @param  Object usuario [description]
	 * @return boolean          [description]
	 */
	public static function registro($usuario_obj){
		
		// var_dump($usuario);


		$query = "INSERT INTO usuarios(nombre,usuario,email,password,privilegio) VALUES (:nombre,:usuario,:email,:password,:privilegio)";

		/**
		 * Call getConexion()
		 */
		self::getConexion();



		$resultado = self::$cn->prepare($query);




		$resultado->bindValue(":nombre", $usuario_obj->getNombre());
		$resultado->bindValue(":usuario", $usuario_obj->getUsuario());
		$resultado->bindValue(":email", $usuario_obj->getEmail());
		$resultado->bindValue(":password", $usuario_obj->getPassword());
		$resultado->bindValue(":privilegio",$usuario_obj->getPrivilegio());

		if ($resultado->execute()) {
			#echo "<br>TRUE<br>";
			return true;
		}

		return false;
echo "false";
	}



}#end clase

 ?>