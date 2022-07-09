<?php
  include_once '../config/config.php';
  
  $usertype=null;
  session_start();
  if(!(isset($_SESSION['is_loggedin']) && $_SESSION['is_loggedin'] === true)) {
    header("location:login.php");
  } else{
    $usertype=$_SESSION['user_type'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->

  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/summernote/summernote-bs4.min.css">

  <style>
    .hide {
      display: none;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
	
<div class="">
    
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="./index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nam-link" role="button" href="./logout.php">LOGOUT
        </a>
      </li>
    </ul>
  </nav>

	<ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLogin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          
          <a href="#" class="d-block"><?php echo $_SESSION['user_name']; ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open <?php echo $usertype == 'admin' ? '' : 'hide'; ?> ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              
            </ul>
          </li>
          
        
          <li class="nav-item <?php echo $usertype == 'admin' ? '' : 'hide'; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                User Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Data</p>
                </a>
              </li>
              
            </ul>
          </li>


          <li class="nav-item <?php echo $usertype == 'client' ? '' : 'hide'; ?>">
            <a href="work.php" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Start Work
              </p>
            </a>
          </li>

          <li class="nav-item <?php echo $usertype == 'client' ? '' : 'hide'; ?>">
            <a href="my_work.php" class="nav-link">
              <i class="nav-icon fas "></i>
              <p>
                My Work
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Images
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user_interface.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Generate Image</p>
                </a>
              </li>
            </ul>
          </li> -->
          
          
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/moment/moment.min.js"></script>
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo SERVER_NAME."/".FOLDER_NAME; ?>/dist/js/pages/dashboard.js"></script>
</body>

</html>