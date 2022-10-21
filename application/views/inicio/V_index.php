<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/login/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     <!-- No se habilita el bootrap5 porque tiene conflictos con bundle.min.js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="<?php echo base_url(); ?>plantilla/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>plantilla/dist/js/adminlte.min.js"></script>


    <!-- <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>plantilla/plugins/DataTables/datatables.js"></script> -->


    <!-- Enlace de Admin-ultimo modificacion -->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>plantilla/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>plantilla/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"> -->
    <script src="<?php echo base_url() ?>plantilla/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>plantilla/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>

    <title>TESIS CHRISTIAN BRANDO VARGAS SERRATO</title>
</head>

<body>

    <section>
        <div class="row g-0">
            <div class="col-lg-9 d-none d-lg-block">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item img-1 min-vh-100 active">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="px-lg-5 py-lg-5 p-5">
                    <h1>Bienvenido</h1>
                    <form action="<?php echo base_url(); ?>C_inicio/ingresar" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Usuario</label>
                            <input type="type" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Iniciar Sesion</button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-md-3">
            <button type="button" class="btn btn-default back-to-top" data-toggle="modal" data-target="#modal-default">
                <i class="fas fa-comment-dots" style="font-size:50px;"></i>
            </button>

            <div class="modal fade" id="modal-default" tabindex="-1">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class=" modal-title text-center w-100">Asistente virtual</h5>
                            <button type=" button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-primary card-outline direct-chat direct-chat-primary">

                                <div class="card-body">

                                    <div class="direct-chat-messages class_bot">

                                        <div class="direct-chat-msg">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <img class="direct-chat-img" src="<?php echo base_url(); ?>plantilla/dist/img/img_bot.jpeg" alt="Message User Image">
                                                    <div class="direct-chat-text">
                                                        Hola, mi nombre es <b>boot</b> y tengo estas opciones
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="button" class="btn btn-block btn-outline-success btn-sm" data-toggle="modal" data-target="#opcion_target_cotizacion" id="btn_cotizar">Cotizar</button>
                                                    <button type="button" class="btn btn-block btn-outline-success btn-sm" id="btn_medio_pago">Medio Pago</button>
                                                    <button type="button" class="btn btn-block btn-outline-success btn-sm" id="btn_contactanos">Contactanos</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="direct-chat-msg right">
                                            <div class="col-md-12">
                                                <img class="direct-chat-img" src="<?php echo base_url(); ?>plantilla/dist/img/img_user.jpeg" alt="message user image">
                                                <div class="direct-chat-text">
                                                    You better believe it!
                                                </div>
                                            </div>
                                        </div> -->

                                    </div>

                                    <div class="card-footer">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Consultas" class="form-control" id="pregunta">
                                            <span class="input-group-append">
                                                <button id="btn_consultar" class="btn btn-primary btn-sm">Enviar</button>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="modal fade" id="opcion_target_cotizacion" tabindex="-1" data-keyboard="false" data-backdrop="static">

            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class=" modal-title text-center w-100">Registrar Cotizacion</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>


                    <div class="modal-body" style="font-size: 12px;">

                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="nombre" id="nombre">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>DNI/RUC</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="DNI/RUC" id="num_documento">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Celular</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Cel" id="telefono">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Correo" id="correo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Direccion</label>
                                        <input type="text" class="form-control form-control-sm" placeholder="Direccion" id="direccion">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Producto -->
                                <div class="col-sm-6">
                                    <label for="">Producto</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-sm" id="descripcion_producto" readonly style="font-size: 12px;">
                                        <span class="input-group-append">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-block btn-outline-success btn-sm w-100" data-toggle="modal" data-target="#opcion_target_producto">Buscar</button>
                                                <div class="modal fade" id="opcion_target_producto" tabindex="-1" data-keyboard="false" data-backdrop="static">
                                                    <div class="modal-dialog modal-dialog-centered ">
                                                        <div class="modal-content">
                                                            <div class="modal-header bg-primary">
                                                                <h4 class=" modal-title text-center w-100">Seleccionar Cotizacion</h4>
                                                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button> -->
                                                            </div>

                                                            <div class="modal-body" style="font-size: 12px;">

                                                                <table id="id_datatable_productos" class="table table-bordered table-sm table-hover table-responsive">
                                                                    <thead>
                                                                        <tr>
                                                                            <th></th>
                                                                            <th id="dtable_codigo">Codigo</th>
                                                                            <th id="dtable_descripcion_producto">Nombre del Producto</th>
                                                                            <th id="dtable_ds_unidad_medida">U.M</th>
                                                                            <th id="dtable_ds_marca_producto">Marca</th>
                                                                            <th id="dtable_precio_unitario">Precio Unitario</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php if (!empty($index_productos)) : ?>
                                                                            <?php foreach ($index_productos as $index_productos) : ?>
                                                                                <tr>
                                                                                    <?php $split_productos =
                                                                                        $index_productos->id_producto . "*" .
                                                                                        $index_productos->id_general . "*" .
                                                                                        $index_productos->codigo_producto . "*" .
                                                                                        $index_productos->descripcion_producto . "*" .
                                                                                        $index_productos->id_unidad_medida . "*" .
                                                                                        $index_productos->ds_unidad_medida . "*" .
                                                                                        $index_productos->id_marca_producto . "*" .
                                                                                        $index_productos->ds_marca_producto . "*" .
                                                                                        $index_productos->id_moneda . "*" .
                                                                                        $index_productos->ds_moneda . "*" .
                                                                                        $index_productos->precio_unitario;
                                                                                    ?>
                                                                                    <td>
                                                                                        <button type="button" class="btn btn-outline-success btn-sm js_seleccionar_modal_producto" value="<?php echo $split_productos; ?>"><span class="fas fa-check"></span></button>
                                                                                    </td>
                                                                                    <td><?php echo $index_productos->codigo_producto; ?></td>
                                                                                    <td><?php echo $index_productos->descripcion_producto; ?></td>
                                                                                    <td><?php echo $index_productos->ds_unidad_medida; ?></td>
                                                                                    <td><?php echo $index_productos->ds_marca_producto; ?></td>
                                                                                    <td><?php echo $index_productos->precio_unitario; ?></td>
                                                                                </tr>
                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                    </tbody>
                                                                </table>

                                                            </div>

                                                            <div class="modal-footer justify-content-between">
                                                                <button type="button" class="btn btn-outline-danger btn-sm js_seleccionar_modal_producto_cerrar">Cerrar</button>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                                <!-- Fin Producto -->
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Precio unitario</label>
                                        <input type="text" class="form-control form-control-sm" id="precio_unitario" readonly style="font-size: 12px;">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label>Cant</label>
                                        <input type="text" class="form-control form-control-sm" id="cantidad" style="font-size: 12px;">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Valor venta</label>
                                        <input type="text" class="form-control form-control-sm" id="valor_venta" readonly style="font-size: 12px;">
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <button type="button" class="btn btn-block btn-outline-success btn-sm" id="id_agregar_cotizacion"><span class="fas fa-plus"></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <input type="hidden" id="hidden_id_producto">
                        <input type="hidden" id="hidden_codigo_producto">
                        <input type="hidden" id="hidden_id_unidad_medida">
                        <input type="hidden" id="hidden_ds_unidad_medida">
                        <input type="hidden" id="hidden_id_marca_producto">
                        <input type="hidden" id="hidden_ds_marca_producto">
                        <input type="hidden" id="hidden_item">


                        <div class="col-md-12 table-responsive">
                            <table class="table" id="id_table_detalle_cotizacion">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Descripcion</th>
                                        <th>UM</th>
                                        <th>Marca</th>
                                        <th>Cant</th>
                                        <th>Precio unitario</th>
                                        <th>Valor venta</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Valor venta T</label>
                                        <input type="text" class="form-control form-control-sm" id="valor_venta_t" readonly style="font-size: 12px;">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Igv</label>
                                        <input type="text" class="form-control form-control-sm" id="igv" readonly style="font-size: 12px;">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Precio venta</label>
                                        <input type="text" class="form-control form-control-sm" id="precio_venta" readonly style="font-size: 12px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-success btn-sm js_seleccionar_modal_cotizacion">Registrar</button>
                        <button type="button" class="btn btn-outline-danger btn-sm" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script>
        var base_url = "<?php echo base_url(); ?>";
    </script>


    <script src="<?php echo base_url() ?>application/js/j_inicio.js"></script>
</body>

</html>