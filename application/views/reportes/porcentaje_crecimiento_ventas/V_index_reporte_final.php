<div class="content-wrapper">

  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>PORCENTAJE DE CRECIMIENTO DE VENTAS
            <a href="<?php echo base_url(); ?>reportes/C_porcentaje_crecimiento_ventas" class="btn btn-primary btn-sm">VOLVER A CALCULAR</a>
            <a href="<?php echo base_url(); ?>reportes/C_porcentaje_crecimiento_ventas/mostrar_pdf" class="btn btn-danger btn-sm" download="">PDF</a>
          </h1>
        </div>
      </div>
    </div>
  </section>

  <section class="content">

    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <table>
            <thead>
              <tr>
                <th>Item</th>
                <th>Fecha</th>
                <th>Venta Actual (VA)</th>
                <th>Fecha</th>
                <th>Venta Anterior (VA)</th>
                <th>%Crecimiento (VA)</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($index)) : ?>
                <?php foreach ($index as $index) : ?>
                  <tr>
                    <td><?php echo $index->item; ?></td>
                    <td><?php echo $index->fecha_emision; ?></td>
                    <td><?php echo $index->precio_venta; ?></td>
                    <td><?php echo $index->fecha_emision2; ?></td>
                    <td><?php echo $index->precio_venta2; ?></td>
                    <td><?php echo $index->porcentaje_venta; ?></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>


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

<!-- <script type="text/javascript" charset="utf8" src="<?php echo base_url() ?>plantilla/plugins/DataTables/datatables.js"></script> -->
<script src="<?php echo base_url() ?>plantilla/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>plantilla/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>plantilla/plugins/select2/js/select2.full.min.js"></script>

<script>
  var base_url = "<?php echo base_url(); ?>";
</script>

<script src="<?php echo base_url() ?>application/js/reportes/j_porcentaje_crecimiento_ventas.js"></script>

</body>

</html>