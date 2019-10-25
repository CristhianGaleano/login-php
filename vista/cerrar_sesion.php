<?php 	
		session_start();


		session_destroy();
		session_unset();
		$_SESSION['usuario'] = null;

		header('location:login.php');	
 ?>
