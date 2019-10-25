<?php 
	include 'partials/head.php';
	include 'partials/menu.php';
  ?>

    <div class="container">
    	

		<div class="starter-template">
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<!-- columna de 4 espacios y un espacio a la derecha -->
				<div class="col-md-4 col-md-offset-3">
					 <div class="panel panel-default">
					 	<div class="panel-body">
					 		<form action="validarCode.php" method="POST" role="form" id="formulario-registro">
					 			<legend>Registro de usuarios</legend>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput">Nombre</label>
					 				<input type="text" class="form-control" name="txtNombre" autofocus="autofocus" required="required" id="formGroupExampleInput" placeholder="Nombre">
					 			</fieldset>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput">Usuario</label>
					 				<input type="text" class="form-control" name="txtUsuario" autofocus="autofocus" required="required" id="formGroupExampleInput" placeholder="Usuario">
					 			</fieldset>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput2">Password</label>
					 				<input type="password" class="form-control" name="txtPassword" required="required" id="formGroupExampleInput2" placeholder="Password">
					 			</fieldset>
					 			<fieldset class="form-group">
					 				<label for="formGroupExampleInput">Email</label>
					 				<input type="email" class="form-control" name="txtEmail" autofocus="autofocus" required="required" id="formGroupExampleInput" placeholder="Email">
					 			</fieldset>
					 			<!-- <fieldset class="form-group">
					 				<label for="formGroupExampleInput2">Privilegio</label>
					 				<input type="text" class="form-control" name="txtPrivilegio" required="required" id="formGroupExampleInput2" placeholder="Privilegio">
					 			</fieldset> -->

					 			<button class="btn btn-success" type="submit" value="Ingresar">Registrar</button>
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