<?php 
	include 'partials/head.php';
	include 'partials/menu.php';
	if ( isset($_SESSION['usuario']) ) {
		if ($_SESSION['usuario']['privilegio'] == 1) {
			header('location:admin.php');
		}
	}
	#header('location:login.php');
 ?>

    <nav class="container text-center">
		<div class="jumbotron jumbotron-fluid">
		  <div class="container">
		    <h1 class="display-4"><strong>Bienvenido</strong> <?php echo $_SESSION['usuario']['usuario'] ?> </h1>
		    <p class="lead">Panel de control | <span class="badge badge-primary"><?php if ($_SESSION['usuario']['privilegio'] == 1) {
		    	echo "Admin";
		    }else{ echo "Cliente";} ?></span></p>
		    <a class="btn btn-primary" href="login.php" role="button">Cerrar sessión</a>
		  </div>
		</div>
    </nav>


    <?php 
    include 'partials/footer.php';
     ?>