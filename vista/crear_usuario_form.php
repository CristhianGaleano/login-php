<?php 
	include 'partials/head.php';
	include 'partials/menu.php';
  ?>


  <?php 
  	 include '../controlador/UsuarioControlador.php';
	 include '../helps/help.php';

	 $usuario = null;

	 // we check if the variable exists
	 if (isset($_GET['id'])) {
	 	// reset
	 	$id = validar_campo($_GET['id']);
	 	$usuario = UsuarioControlador::get_usuarioById($id);
	 }
   ?>

    <div class="container">
    	

		<div class="starter-template">
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<!-- columna de 4 espacios y un espacio a la derecha -->
				<div class="col-md-4 mx-auto">
					 <div class="panel panel-default">
					 	<div class="panel-body">
					 		<form action="crear_usuario_logic.php" method="POST" role="form" id="formulario-registro">
					 			<?php if ( is_null( $usuario ) ) {?>

					 			<legend>Crear nuevo usuario</legend>
					 			<?php }else{ ?>
					 				<legend>Esta editando a [<?php echo $usuario->getNombre() ?>]</legend>
					 				<!-- creamos input con id -->
					 				<input type="hidden" name="id" value="<?php echo $usuario->getId() ?>">
					 			<?php } ?>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput">Nombre</label>
					 				<input type="text" class="form-control" name="txtNombre" autofocus="autofocus" required="required" id="formGroupExampleInput" placeholder="Nombre" value="<?php echo is_null($usuario) ? "" : $usuario->getNombre() ?>">
					 			</fieldset>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput">Usuario</label>
					 				<input type="text" class="form-control" name="txtUsuario" autofocus="autofocus" required="required" id="formGroupExampleInput" placeholder="Usuario" value="<?php echo is_null($usuario)? "" : $usuario->getUsuario() ?>">
					 			</fieldset>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput2">Password</label>
					 				<input type="password" class="form-control" name="txtPassword" required="required" id="formGroupExampleInput2" placeholder="Password" value="<?php echo is_null($usuario)? "" : $usuario->getPassword() ?>">
					 			</fieldset>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput">Email</label>
					 				<input type="email" class="form-control" name="txtEmail" autofocus="autofocus" required="required" id="formGroupExampleInput" placeholder="Email" value="<?php echo is_null($usuario)? "" : $usuario->getEmail() ?>">
					 			</fieldset>
					 			<!-- <fieldset class="form-group">
					 				<label for="formGroupExampleInput2">Privilegio</label>
					 				<input type="text" class="form-control" name="txtPrivilegio" required="required" id="formGroupExampleInput2" placeholder="Privilegio">
					 			</fieldset> -->

					 			<button class="btn btn-success" type="submit" value="Nuevo"><?php echo is_null($usuario)? "Crear usuario" : "Editar usuario" ?></button>
					 		</form>
					 	</div>
					 </div>
				</div>
			</div>
		</div>


    </div>


    <?php 
    include 'partials/footer.php';
     ?>