<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ISMA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <link rel="shortcut icon" href="<?php echo base_url()."assets/images/" ;?>logo_isma.ico">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?= base_url("assets/AdminLTE-master/")?>plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?= base_url("assets/vendor/")?>jquery-datatables/media/css/jquery.dataTables.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url("assets/AdminLTE-master/")?>index3.html" class="brand-link">
      <img src="<?= base_url("assets/")?>images/logo_isma.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ISMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url("assets/AdminLTE-master/")?>dist/img/profil_pic.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php print_r($this->session->userdata('ses_nama'))?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header" style="color:#6ab2ff; text-decoration:bold">MR & BENTURAN KEPENTINGAN</li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>manajemen_risiko/" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Manajemen Risiko
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>benturan_kepentingan" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Benturan Kepentingan
              </p>
            </a>
          </li>


          <li class="nav-header" style="color:#6ab2ff; text-decoration:bold">AUDIT</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


        <?php include $content;?>







  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="<?= base_url("assets/AdminLTE-master/")?>http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2-pre
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url("assets/AdminLTE-master/")?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url("assets/AdminLTE-master/")?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url("assets/AdminLTE-master/")?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url("assets/AdminLTE-master/")?>dist/js/demo.js"></script>
<?php if(function_exists("custom_footer")){
		custom_footer();
}?>
</body>
</html>
