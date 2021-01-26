<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        <?php
        echo' <h1>Bienvenido al sistema de MediUsO  :' .$_SESSION["nombre"].'</h1>';
        
        ?>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item active">Inicio <?php  echo $_SESSION["nombre"]; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <section class="content">
    <div class="container-fluid">

      <div>
      <?php
include "inicio/cajas.php";

      ?>
      </div>
    </div>
  </section>
</div>