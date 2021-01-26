  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark">
    <div class="container">
    
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
        </ul>
        <form class="form-inline ml-0 ml-md-3"> 
        </form>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
 
 <?php

 if($_SESSION["foto"] != ""){

   echo '<img src="'.$_SESSION["foto"].'" class="user-image">';

 }else{


   echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image">';

 }


 ?>
       	<span  class="text-uppercase"><?php  echo $_SESSION["nombre"]; ?></span>   
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="logout" class="dropdown-item">
            <i class="fas fa-user-times mr-2"></i> Cerrar Sesión
            <span class="float-right text-muted text-sm">Activa</span>
          </a>
          </div>
         
      </li>
        
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->