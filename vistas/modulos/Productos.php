<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ADMINISTRACION  MEDICAMENTOS</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Inicio</li>
            <li class="breadcrumb-item"><a href="Productos">Medicamentos</a></li>

          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card card-primary card-outline">
            <div class="card-header">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">Agregar Medicamento</button>


            </div>
            <div class="card-body">
              <div class="box-body">
                <table class="table table-bordered table-striped dt-responsive tablas tabladatatable" width="100%">

                  <thead>

                    <tr>

                      <th style="width:10px">#</th>
                      <th>Imagen </th>
                      <th>Nombre Comercial</th>
                      <th>Nombre Quimico</th>
                      <th>Medidas</th>
                      <th>Stock</th>
                      <th>Fecha de compra</th>
                      <th>Fecha de caducidad</th>
                      <th>Acciones</th>
                    </tr>

                  </thead>

                  <tbody>

                    <?php
                    $item = null;
                    $valor = null;
                    $productos = ControladorProductos::ctrMostrarProductos($item, $valor);

                    foreach ($productos as $key => $value) {

                      echo '<tr>
                 <td>' . ($key + 1) . '</td> 
                 <td><img src="vistas/img/productos/default/anonymous.png" class="thumbnail" width="40px"></td>
                  <td>' . $value["nombre_C"] . '</td>
                  <td>' . $value["nombre_Q"] . '</td>
                  <td>' . $value["medidas"] . '</td>
                  <td>' . $value["stock"] . '</td>
                  <td>' . $value["fecha_C"] . '</td>
                  <td>' . $value["fecha_CD"] . '</td>
 
                     <td>
 
                       <div class="btn-group">
                           
                         <button class="btn btn-warning " idCategoria="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pen"></i></button>
 
                           <button class="btn btn-danger " idCategoria="' . $value["id"] . '"><i class="fa fa-times"></i></button>
 
                       </div>  
                   </tr>';
                    }

                    ?>

                  </tbody>

                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Modal  Agregar Usuarios-->

<div class="modal fade" id="modalAgregarProducto" tabindex="-1" role="dialog" aria-labelledby="modalAgregarProducto" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
        <div class="modal-header" style="background:#343a40;color:white">
          <h5 class="modal-title" id="modalAgregarProducto">Agregar Medicamento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="box-body">
            <div class="form-group">

              <div class="input-group mb-0">
                <div class="form-group">
                  <label>Seleccionar Categoria</label>
                  <select class="form-control select2" style="width: 235%;" name="nuevaCategoria" id="nuevaCategoria" required>
                    <option selected="selected">Seleccionar Categoria</option>
                    <?php
                    $item = null;
                    $valor = null;
                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
                    foreach ($categorias as $Key => $value) {
                      echo '<option value="' . $value["id"] . '">' . $value["categoria"] . '</option>';
                    }
                    ?>

                  </select>
                </div>
              </div>
            
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-comment-medical"></i></span>
                </div>
                <input type=" text" class="form-control" name="nuevaDescripcion" placeholder="Nombre Comercial" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-comment-medical"></i></span>
                </div>
                <input type=" text" class="form-control" name="nuevoQuimico" placeholder="Nombre Quimico" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-comment-medical"></i></span>
                </div>
                <input type=" text" class="form-control" name="Unidades" placeholder="Unidades de medida" required>
              </div>

              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-check"></i></span>
                </div>
                <input type=" number" class="form-control" name="nuevoStock" min="0" placeholder=" PIezas" required>
              </div>
              <label for="exampleInputEmail1">Fecha de caducidad</label>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-check"></i></span>
                </div>
                <input type="text" class="form-control" name="fecha_CD" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" data-mask required>
              </div>

              <br>

              <div class="form-group">
                <label>Subir Foto</label>
                <input type="file" class="nuevaImagen" name="nuevaImagen" class="center-block">
                <p class="center-block">Peso maximo de la foto 200Mb</p>
                <img src="vistas/img/productos/default/anonymous.png" class="thumbnail center-block previsualizar" width="100px">
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
        </div>
 <?php
 $crearProducto = new ControladorProductos();
 $crearProducto -> ctrCrearProducto();
 ?>
      </form>
    </div>
  </div>
</div>