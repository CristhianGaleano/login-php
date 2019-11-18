<?php 
	include 'partials/head.php';
	include 'partials/menu.php';
	include '../helps/help.php';
  ?>


  <?php 
  		// Call method get_usuarios() in controlador
  		include '../controlador/UsuarioControlador.php';
  		$filas = UsuarioControlador::get_usuarios();

  		#echo json_encode($filas);
   ?>

    <div class="container">
    	

		<div class="starter-template">
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<div class="md-12">
					<a href="crear_usuario_form.php" class="btn btn-primary">Crear usuario +</a>
					<br>
					<br>
				</div>
				<div class="col-md-12 mx-auto">
					<div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
					 	<table class="table table-hover">
					 	  <caption>List of users</caption>
					 	  <thead class="thead-dark">
					 	    <tr>
					 	      <th scope="col">Id</th>
					 	      <th scope="col">Nombre</th>
					 	      <th scope="col">Usuario</th>
					 	      <th scope="col">Email</th>
					 	      <th scope="col">Password</th>
					 	      <th scope="col">Privilegio</th>
					 	      <th scope="col">Acción</th>
					 	    </tr>
					 	  </thead>
					 	  <tbody>

					 	   <?php
					 	   foreach ($filas as $value) {?>
					 	   	<tr>
					 	   		<td><?php echo $value['id'] ?></td>
					 	   		<td><?php echo $value['nombre'] ?></td>
					 	   		<td><?php echo $value['usuario'] ?></td>
					 	   		<td><?php echo $value['email'] ?></td>
					 	   		<td><?php echo $value['password'] ?></td>
					 	   		<td><?php echo getPrivilegio( $value['privilegio'] ) ?></td>
					 	   		<td><a href="crear_usuario_form.php?id=<?php echo $value['id'] ?>" class="btn btn-success btn-sm">Editar</a></td>
					 	   	</tr>
					 	   
					 	   <?php
					 	   }
					 	    ?>

					 	  </tbody>
					 	</table>
					 </div> 
				</div>
			</div>
		</div>


    </div>


    <?php 
    include 'partials/footer.php';
     ?>