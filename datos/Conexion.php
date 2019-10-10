<?php 
 
 /**
  * 
  */
 class Conexion 
 {
 	

 	/**
 	 * Conexion a la BD 
 	 * @return [PDO] [Un objeto de tipo PDO]
 	 */
 	public static function conectar(){

 		try {
 			
 			$cn = new PDO("mysql:host=localhost;dbname=login-php","root","1088264375C");
 			return $cn;

 		} catch (PDOException $e) {
 			die($e->getMessage());
 		}
 	}

 }


 #Conexion::conectar();

 ?>