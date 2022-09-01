  <div class="mostrar_registros">

    <div class="content-wrapper">

      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <!-- <h1>PORCENTAJE DE CRECIMIENTO DE VENTAS
            </h1> -->
            </div>
          </div>
        </div>
      </section>

      <section class="content">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">PORCENTAJE DE CRECIMIENTO DE VENTAS</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <div class="col-sm-2">
                  <label>DESDE</label>
                  <input type="date" class="form-control" id="desde" value="<?php if (!empty($desde)) {
                                                                              echo $desde;
                                                                            } ?>">
                </div>
                <div class="col-sm-2">
                  <label>HASTA</label>
                  <input type="date" class="form-control" id="hasta" value="<?php if (!empty($hasta)) {
                                                                              echo $hasta;
                                                                            } ?>">
                </div>

                <div class="col-md-4">
                  <label for="">&nbsp;</label>
                  <div class="input-group">
                    <button type="button" class="btn btn-success buscar">BUSCAR</button>
                    <label for="">&nbsp;</label>
                    <button type="button" class="btn btn-secondary restablecer">RESTABLECER</button>
                    <label for="">&nbsp;</label>
                    <a href="<?php echo base_url(); ?>reportes/C_porcentaje_crecimiento_ventas/listar_fechas?desde=<?php if (!empty($desde)) {
                                                                                                                      echo $desde;
                                                                                                                    } ?>&hasta=<?php if (!empty($hasta)) {
                                                                                                                                  echo $hasta;
                                                                                                                                } ?>" class="btn btn-danger" download="">PDF</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table>
                <thead>
                  <tr>
                    <th>Item</th>
                    <th>Fecha</th>
                    <th>Valor Reciente (VR)</th>
                    <th>Fecha</th>
                    <th>Valor Anterior (VA)</th>
                    <th>Porcentaje de Venta (PV)</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (!empty($index)) : ?>
                    <?php foreach ($index as $index) : ?>
                      <tr>
                        <td><?php echo $index->item; ?></td>
                        <td><?php echo $index->fecha_vr; ?></td>
                        <td><?php echo $index->valor_reciente_vr; ?></td>
                        <td><?php echo $index->fecha_va; ?></td>
                        <td><?php echo $index->valor_reciente_va; ?></td>
                        <td><?php echo $index->porcentaje_venta; ?></td>
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
      </section>
    </div>


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

  <script src="<?php echo base_url() ?>application/js/reportes/j_porcentaje_crecimiento_ventas.js"></script>

  </body>

  </html>