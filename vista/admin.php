<?php 
session_start();
	include 'partials/head.php';
	include 'partials/menu.php';
 ?>

    <nav class="container text-center">
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4"><strong>Bienvenido</strong> <?php echo $_SESSION['usuario']['usuario'] ?> </h1>
		    <p class="lead">Panel de control | <span class="badge badge-primary"><?php echo $_SESSION['usuario']['privilegio'] ?></span></p>
		    <a class="btn btn-primary" href="cerrar_sesion.php" role="button">Cerrar sessión</a>
		  </div>
		</div>
    </nav>


    <?php 
    include 'partials/footer.php';
     ?>