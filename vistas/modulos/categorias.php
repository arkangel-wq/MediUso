<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ADMINISTRACION DE CATEGORIAS</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Inicio</li>
                        <li class="breadcrumb-item"><a href="categorias">Categorias</a></li>

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
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">Agregar Categoria</button>


                        </div>
                        <div class="card-body">
                            <div class="box-body">
                                <table class="table table-bordered table-striped dt-responsive tablas tabladatatable" width="100%">

                                    <thead>

                                        <tr>

                                            <th style="width:10px">#</th>
                                            <th>Categoria</th>

                                            <th>Fecha De Creacion</th>
                                            <th>Acciones</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php

                                        $item = null;
                                        $valor = null;

                                        $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                                        foreach ($categorias as $key => $value) {

                                            echo ' <tr>
 
                     <td>' . ($key + 1) . '</td>
 
                     <td class="text-uppercase">' . $value["categoria"] . '</td>
                     <td>' . $value['fecha'] . '</td>
 
                     <td>
 
                       <div class="btn-group">
                           
                         <button class="btn btn-warning btnEditarCategoria" idCategoria="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pen"></i></button>
 
                           <button class="btn btn-danger  btnEliminarCategoria" idCategoria="' . $value["id"] . '"><i class="fa fa-times"></i></button>
 
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

<div class="modal fade" id="modalAgregarCategoria" tabindex="-1" role="dialog" aria-labelledby="modalAgregarCategoria" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background:#343a40;color:white">
                    <h5 class="modal-title" id="modalAgregarCategoria">Agregar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria</label>
                                <input type="text" class="form-control" name="nuevaCategoria" placeholder="Ingresar Categoria ">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                </div>
                <?php

                $crearCategoria = new ControladorCategorias();
                $crearCategoria->ctrCrearCategoria();

                ?>
            </form>
        </div>
    </div>
</div>


<!-- Modal  Editar Usuarios-->

<div class="modal fade" id="modalEditarCategoria" tabindex="-1" role="dialog" aria-labelledby="modalEditarCategoria" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form role="form" method="post" enctype="multipart/form-data">
                <div class="modal-header" style="background:#343a40;color:white">
                    <h5 class="modal-title" id="modalEditarCategoria">Editar Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <div class="form-group">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria</label>
                                <input type="text" class="form-control" name="editarCategoria" id="editarCategoria" requiredplaceholder="Ingresar Categoria ">
                                <input type="hidden" name="idCategoria" id="idCategoria" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>
                </div>
                <?php

                $editarCategoria = new ControladorCategorias();
                $editarCategoria->ctrEditarCategoria();

                ?>
            </form>
        </div>
    </div>
</div>
<?php

$borrarCategoria = new ControladorCategorias();
$borrarCategoria->ctrBorrarCategoria();

?>