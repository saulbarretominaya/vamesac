  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              <marquee>BIENVENIDOS AL SISTEMA</marquee>

              <!-- <a href="<?php echo base_url(); ?>C_usuarios/enlace_registrar" class="btn btn-primary btn-sm">REGISTRAR</a> -->
            </h1>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">

<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
<section class="content">
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>27</h3>
<p>Cotización</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="<?php echo base_url(); ?>C_cotizacion" class="small-box-footer">Ver Cotizacion <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>53<sup style="font-size: 20px">%</sup></h3>
<p>Orden de Despacho</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="#" class="small-box-footer">Ver Orden de Despacho <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">
<h3>44</h3>
<p>Interacción Asist. Virtual</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="#" class="small-box-footer">Ver Asistente Virtual <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>120</h3>
<p>Ventas</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer">Ver Ventas<i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>



<div class="row">

<section class="col-lg-7 connectedSortable">

<div class="card">
<div class="card-header">
<h3 class="card-title">
<i class="fas fa-chart-pie mr-1"></i>
Nivel de productividad - Crecimiento de ventas
</h3>
<div class="card-tools">
<ul class="nav nav-pills ml-auto">
<li class="nav-item">
<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
</li>
</ul>
</div>
</div>
<div class="card-body">
<div class="tab-content p-0">

<div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
<canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
</div>
<div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
<canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
</div>
</div>
</div>
</div>




<div class="card bg-gradient-info">
<div class="card-header border-0">
<h3 class="card-title">
<i class="fas fa-th mr-1"></i>
Atención cliente
</h3>
<div class="card-tools">
<button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
<button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
<i class="fas fa-times"></i>
</button>
</div>
</div>
<div class="card-body">
<canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
</div>

<div class="card-footer bg-transparent">
<div class="row">
<div class="col-4 text-center">
<input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">
<div class="text-white">Clientes pendientes</div>
</div>

<div class="col-4 text-center">
<input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">
<div class="text-white">Clientes Atendidos</div>
</div>

<div class="col-4 text-center">
<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">
<div class="text-white">Clientes De</div>
</div>

</div>

</div>

</div>
</div>
</div>












          
            <!-- <table id="listar" class="table table-bordered table-sm table-hover" style="width: 100%;">
              <thead>
                <tr>
                  <th>Usuario</th>
                  <th>Nombres Completos</th>
                  <th>Accesos Empresas</th>
                  <th>Trabaja RRHH</th>
                  <th>Sucursal</th>
                  <th>Rol</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php if (!empty($index)) : ?>
                  <?php foreach ($index as $index) : ?>
                    <tr>
                      <td><?php echo $index->usuario; ?></td>
                      <td><?php echo $index->ds_nombre_usuario; ?></td>
                      <td><?php echo $index->ds_accesos_empresas; ?></td>
                      <td><?php echo $index->ds_trabaja_rrhh; ?></td>
                      <td><?php echo $index->ds_sucursal; ?></td>
                      <td><?php echo $index->ds_rol_usuario; ?></td>
                      <td><a href=" <?php echo base_url(); ?>C_usuarios/enlace_actualizar/<?php echo $index->id_usuario; ?>" class="btn btn-outline-warning btn-sm"><span class="far fa-edit"></span></a></td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif; ?>
              </tbody>
            </table> -->
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.div -->
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

  <script src="<?php echo base_url() ?>application/js/j_usuarios.js"></script>

<!-- e -->

<script src="<?php echo base_url(); ?>plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/chart.js/Chart.min.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/sparklines/sparkline.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plantilla/plugins/daterangepicker/daterangepicker.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/summernote/summernote-bs4.min.js"></script>

<script src="<?php echo base_url(); ?>plantilla/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>




<!--  -->






  </body>

  </html>