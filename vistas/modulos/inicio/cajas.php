<?php

$item = null;
$valor = null;
$orden = "id";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>

<div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
        <span class="info-box-icon bg-warning elevation-4"><i class="fas fa-capsules"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Medicamentos Registrados</span>
            <span class="info-box-number">
            <?php echo number_format($totalProductos); ?>
            </span>
        </div>
        <div class="card-footer clearfix">
            <a href="Productos" class="btn btn-sm btn-warning float-left">Mas Informacion</a>
        </div>
    </div>
   
</div>