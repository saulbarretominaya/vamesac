  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Salida Productos
              <!-- <a href="<?php echo base_url(); ?>C_productos/enlace_registrar" class="btn btn-primary btn-sm">REGISTRAR</a> -->
            </h1>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="listar" class="table table-bordered table-sm table-hover" style="width: 100%;">
              <thead>
                <tr>
                  <th>Num. Guia</th>
                  <th>Serie Guia</th>
                  <th>Tienda</th>
                  <th>Num. Comprobante</th>
                  <th>Serie Comprobante</th>
                  <th>Tipo Comprobante </th>
                  <th>Fecha Comprobante</th>
                  <th>Cliente</th>
                  <th>Vendedor</th>
                  <th>Estado Comprobante</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($index)) : ?>
                  <?php foreach ($index as $index) :

                    switch ($index->ds_estado_comprobante) {
                      case "PENDIENTE":
                        $ds_estado_comprobante = '<div><span class="badge bg-warning">PENDIENTE</span></div>';
                        break;
                      case "PENDIENTE POR ALMACEN":
                        $ds_estado_comprobante = '<div><span class="badge bg-dark">PENDIENTE POR ALMACEN</span></div>';
                        break;
                      case "ORDEN DESPACHADA":
                        $ds_estado_comprobante = '<div><span class="badge bg-info">ORDEN DESPACHADA</span></div>';
                        break;
                      case "ANULADO":
                        $ds_estado_comprobante = '<div><span class="badge bg-danger">ANULADO</span></div>';
                        break;
                      default:
                        $ds_estado_comprobante = '<div><span class="badge bg-warning">PENDIENTE</span></div>';
                        break;
                    }

                  ?>
                    <tr>
                      <input type="hidden" id="id_comprobante" value="<?php echo $index->id_comprobante; ?>">
                      <td><?php echo $index->id_tienda; ?></td>
                      <td><?php echo $index->ds_serie_guia_remision; ?></td>
                      <td><?php echo $index->ds_sucursal_trabajador; ?></td>
                      <td><?php echo $index->num_comprobante;  ?></td>
                      <td><?php echo $index->ds_serie_comprobante;  ?></td>
                      <td><?php echo $index->ds_tipo_comprobante;  ?></td>
                      <td><?php echo $index->fecha_comprobante;  ?></td>
                      <td><?php echo $index->ds_nombre_cliente_proveedor; ?></td>
                      <td><?php echo $index->ds_nombre_trabajador; ?></td>
                      <td><?php echo $ds_estado_comprobante; ?></td>
                      <?php if ($index->id_comprobante != "" and $index->ds_estado_comprobante == "PENDIENTE POR ALMACEN") { ?>
                        <td><button type="button" class="btn btn-outline-info btn-sm js_lupa_comprobantes_productos" value="<?php echo $index->id_comprobante; ?>" data-toggle="modal" data-target="#id_target_comprobantes_productos"><span class="fas fa-search-plus"></span></button></td>
                        <td><button type="button" class="btn btn-outline-success btn-sm btn_aprobar_estado" value="<?php echo $index->id_comprobante; ?>"><span class="fas fa-check-circle"></span></button></td>

                      <?php } else if ($index->id_comprobante != "" and $index->ds_estado_comprobante == "ORDEN DESPACHADA") { ?>
                        <td><button type="button" class="btn btn-outline-info btn-sm js_lupa_comprobantes_productos" value="<?php echo $index->id_comprobante; ?>" data-toggle="modal" data-target="#id_target_comprobantes_productos"><span class="fas fa-search-plus"></span></button></td>
                        <td><button type="button" class="btn btn-outline-secondary btn-sm" disabled><span class="fas fa-check-circle"></span></button></td>

                      <?php } else if ($index->id_comprobante != "" and $index->ds_estado_comprobante == "ANULADO") { ?>
                        <td><button type="button" class="btn btn-outline-info btn-sm js_lupa_comprobantes_productos" value="<?php echo $index->id_comprobante; ?>" data-toggle="modal" data-target="#id_target_comprobantes_productos"><span class="fas fa-search-plus"></span></button></td>
                        <td><button type="button" class="btn btn btn-outline-secondary btn-sm" disabled><span class="far fa-trash-alt"></span></button></td>

                      <?php } ?>

                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.div -->
    </section>
  </div>



  <!-- Inicio Modal Comprobantes Productos -->
  <div class="modal fade" id="id_target_comprobantes_productos" tabindex="-1">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
      <div class="modal-content">
      </div>
    </div>
  </div>
  <!-- Fin de Modal Comprobantes Productos -->





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

  <script src="<?php echo base_url() ?>application/js/j_salida_productos.js"></script>

  </body>

  </html>