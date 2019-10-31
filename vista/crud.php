<?php 
	include 'partials/head.php';
	include 'partials/menu.php';
  ?>


  <?php 
  		// Call method get_usuarios() in controlador
  		include '../controlador/UsuarioControlador.php';
  		$filas = UsuarioControlador::get_usuarios();

  		echo json_encode($filas);
   ?>

    <div class="container">
    	

		<div class="starter-template">
			<br>
			<br>
			<br>
			<br>
			<div class="row">
				<!-- columna de 4 espacios y un espacio a la derecha -->
				<div class="col-md-12 mx-auto">
					 <div class="card">
					 	<div class="card-header">
					 	<div class="panel-body">
					 		
					 	</div>
					 </div>
					 </div>
				</div>
			</div>
		</div>


    </div>


    <?php 
    include 'partials/footer.php';
     ?>