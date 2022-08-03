  <div class="content-wrapper">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Porcentaje de Crecimientos de Ventas
            </h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">

      <div class="col-md-12">
        <div class="card card-primary">
          
          <div class="card-header">
            
            <h3 class="card-title">Listar - Porcentaje de Crecimientos de Ventas</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-plus"></i>
              </button>
            </div>
          </div>
          
          <div class="card-body">
            <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        
                        <div class="col-md-3">
                          <label for="cargo">Desde:</label>
                          <div class="input-group">
                            <?php
                            date_default_timezone_set("America/Lima");
                            ?>
                            <input type="date" class="form-control" id="fecha_cotizacion" value="<?php echo date("Y-m-d"); ?>" >
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="cargo">Hasta:</label>
                          <div class="input-group">
                            <?php
                            date_default_timezone_set("America/Lima");
                            ?>
                            <input type="date" class="form-control" id="fecha_cotizacion" value="<?php echo date("Y-m-d"); ?>">
                          </div>
                        </div>
                       
                        
                       
                      

                      <div class="card-body">
            <div class="row">
                    <div class="col-md-12">
                      <div class="form-group row">
                        
                        <div class="col-md-3">
                          <label for="cargo">Desde:</label>
                          <div class="input-group">
                            <?php
                            date_default_timezone_set("America/Lima");
                            ?>
                           <input type="date" class="form-control" id="fecha_cotizacion" value="<?php echo date("Y-m-d"); ?>" >
                          </div>
                        </div>
                        <div class="col-md-3">
                          <label for="cargo">Hasta:</label>
                          <div class="input-group">
                            <?php
                            date_default_timezone_set("America/Lima");
                            ?>
                            <input type="date" class="form-control" id="fecha_cotizacion" value="<?php echo date("Y-m-d"); ?>">
                          </div>

                          
                        </div>
                        <div class="col-md-1">
                          <label for="cargo"> <br></label>
                          <br>
                          <div class="input-group">
                          <a href="<?php echo base_url(); ?>C_cotizacion/enlace_registrar" class="btn btn-primary btn-sm">BUSCAR</a>

                          </div>
                        </div>
                        <div class="col-md-2">
                          <label for="cargo"> <br></label>
                          <br>
                          <div class="input-group">
                          <a href="<?php echo base_url(); ?>C_cotizacion/enlace_registrar" class="btn btn-warning btn-sm">RESTABLECER</a>

                          </div>
                        </div>
                        <div class="col-md-1">
                          <label for="cargo"> <br></label>
                          <br>
                          <div class="input-group">
                          <a href="<?php echo base_url(); ?>C_cotizacion/enlace_registrar" class="btn btn-info btn-sm">CALCULAR</a>

                          </div>
                        </div>
                        <div class="col-md-1">
                          <label for="cargo"> <br></label>
                          <br>
                          <div class="input-group">
                          <a href="<?php echo base_url(); ?>C_cotizacion/enlace_registrar" class="btn btn-danger btn-sm">PDF</a>

                          </div>
                        </div>
                        <div class="col-md-1">
                          <label for="cargo"> <br></label>
                          <br>
                          <div class="input-group">
                          <a href="<?php echo base_url(); ?>C_cotizacion/enlace_registrar" class="btn btn-success btn-sm">EXCEL</a>

                          </div>
                        </div>
                        </div>


            
            


            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <table id="listar" class="table table-bordered table-sm table-hover" style="width: 100%;">
                    <thead>
                      <tr>
                        <th>Item</th>
                        <th>Fecha</th>
                        <th>Valor Reciente(Monto Total)</th>
                        <th>Valor Anterior(Monto Total)</th>
                        <th>Porcentaje de Venta</th>
                     
                       
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (!empty($index)) : ?>
                        <?php foreach ($index as $index) : ?>

                          <?php
                          switch ($index->ds_estado_cotizacion) {
                            case "PENDIENTE":
                              $ds_estado_cotizacion = '<div><span class="badge bg-warning">PENDIENTE</span></div>';
                              break;
                            case "APROBADO":
                              $ds_estado_cotizacion = '<div><span class="badge bg-success">APROBADO</span></div>';
                              break;
                            case "CADUCADO":
                              $ds_estado_cotizacion = '<div><span class="badge bg-secondary">CADUCADO</span></div>';
                              break;
                          }
                          switch ($index->ds_estado_orden_despacho) {
                            case "PENDIENTE":
                              $ds_estado_orden_despacho = '<div><span class="badge bg-warning">PENDIENTE</span></div>';
                              break;
                            case "APROBADO":
                              $ds_estado_orden_despacho = '<div><span class="badge bg-success">APROBADO</span></div>';
                              break;
                            case "DESAPROBADO":
                              $ds_estado_orden_despacho = '<div><span class="badge bg-danger">DESAPROBADO</span></div>';
                              break;
                            default;
                              $ds_estado_orden_despacho = '';
                              break;
                          }
                          ?>

                          <tr>
                            <input type="hidden" id="id_cotizacion" value="<?php echo $index->id_cotizacion; ?>">
                            <td><?php echo $index->id_cotizacion_empresa; ?></td>
                            <td><?php echo $index->fecha_cotizacion; ?></td>
                            <td><?php echo $index->ds_nombre_cliente_proveedor; ?></td>
                            <td><?php echo $index->ds_condicion_pago; ?></td>
                            <td><?php echo $index->ds_moneda; ?></td>
                            
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
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

  <!-- Inicio Modal Cotizacion Productos -->
  <div class="modal fade" id="id_target_cotizacion_productos" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
      <div class="modal-content">
      </div>
    </div>
  </div>
  <!-- Fin de Modal Cotizacion Productos -->

  <!-- Inicio Modal Cotizacion Tableros -->
  <div class="modal fade" id="id_target_cotizacion_tableros" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
      <div class="modal-content">
      </div>
    </div>
  </div>
  <!-- Fin de Modal Cotizacion Tableros -->

  <!-- Inicio Modal Orden Despacho Productos -->
  <div class="modal fade" id="id_target_orden_despacho_productos" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
      <div class="modal-content">
      </div>
    </div>
  </div>
  <!-- Fin de Modal Orden Despacho Productos -->

  <!-- Inicio Modal Orden Despacho Tableros -->
  <div class="modal fade" id="id_target_orden_despacho_tableros" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
      <div class="modal-content">
      </div>
    </div>
  </div>
  <!-- Fin de Modal Orden Despacho Tableros -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>plantilla/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url() ?>plantilla/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url() ?>plantilla/dist/js/demo.js"></script>
  <!-- Page specific script -->

  <script src="<?php echo base_url() ?>plantilla/plugins/moment/moment.min.js"></script>
  <script src="<?php echo base_url() ?>plantilla/plugins/inputmask/jquery.inputmask.min.js"></script>
  <script src="<?php echo base_url(); ?>plantilla/plugins/alertify/alertify.js"></script>

  <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>plantilla/plugins/DataTables/datatables.js"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url() ?>plantilla/plugins/select2/js/select2.full.min.js"></script>

  <script>
    var base_url = "<?php echo base_url(); ?>";
  </script>

  <script src="<?php echo base_url() ?>application/js/j_cotizacion.js"></script>

  </body>

  </html>