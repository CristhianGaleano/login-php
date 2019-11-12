
    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">
      <a class="navbar-brand" href="#">Login con PHP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php   #var_dump($_SESSION); ?>
          <?php if (!isset($_SESSION['usuario'])) {?>

          <li class="nav-item active">
            <a class="nav-link" href="login.php">LogIn <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registro.php">Registro</a>
          </li>
          <?php }else{

                if ( $_SESSION['usuario']['privilegio'] == 1 ) {?>
              <li class="nav-item dropdown">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>                    
                            <?php  }elseif ( $_SESSION['usuario']['privilegio'] == 2 ) {?>
              <li class="nav-item dropdown">
            <a class="nav-link" href="usuario.php">Usuario</a>
          </li>               
                            <?php } ?>
          <li class="nav-item dropdown">
            <a class="nav-link" href="#">Agencia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="crud.php">Mantenimiento</a>
          </li>
           <?php   
          } ?>
          
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </nav>
