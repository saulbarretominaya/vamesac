<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/login/style.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/plugins/fontawesome-free/css/all.min.css">


    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>plantilla/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <script src="<?php echo base_url(); ?>plantilla/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>plantilla/dist/js/adminlte.min.js"></script>
    <script src="<?php echo base_url(); ?>plantilla/plugins/select2/js/select2.full.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

            <div class="modal fade" id="modal-default">
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
                                            <div class="direct-chat-infos clearfix">
                                            </div>
                                            <img class="direct-chat-img" src="<?php echo base_url(); ?>plantilla/dist/img/128x128-px-rombos.png" alt="Message User Image">
                                            <div class="direct-chat-text" style="font-size: 15px;">
                                                Hola, mi nombre es boot y tengo estas opciones
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <div class="form-group row">
                                                    <button type="button" class="btn btn-block btn-outline-success btn-sm w-100" data-toggle="modal" data-target="#opcion_target_cotizar" id="btn_cotizar">Cotizar</button>
                                                    <button type="button" class="btn btn-block btn-outline-success btn-sm w-100">Contactanos</button>
                                                    <button type="button" class="btn btn-block btn-outline-success btn-sm w-100">Otros</button>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Escribe algo aquí..." class="form-control" id="campo_entrada">
                                            <span class="input-group-append">
                                                <button id="send-btn" class="btn btn-primary">Enviar</button>
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

        <div class="modal fade" id="opcion_target_cotizar" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class=" modal-title text-center w-100">Registrar Cotizacion</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>


                    <div class="modal-body">

                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>DNI/RUC</label>
                                        <input type="text" class="form-control" placeholder="DNI/RUC">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Tel</label>
                                        <input type="text" class="form-control" placeholder="Tel">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Correo</label>
                                        <input type="text" class="form-control" placeholder="Correo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Direccion</label>
                                        <input type="text" class="form-control" placeholder="Direccion">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Buscar Productos</label>
                                        <select class="form-control select2" id="">
                                            <option value="0">Seleccionar</option>
                                            <!-- <option value="0">Hola</option> -->
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Cant</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Total</label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <!-- <input type="text" class="form-control" readonly> -->
                                        <button type="button" class="btn btn-block btn-outline-success">+</button>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Descripcion</th>
                                        <th>Marca</th>
                                        <th>UM</th>
                                        <th>Cant</th>
                                        <th>Precio</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>