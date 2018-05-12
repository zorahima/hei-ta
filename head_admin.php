<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist') ?>/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/dist') ?>/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/plugins') ?>/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('AdminLTE/bower_components') ?>/select2/dist/css/select2.min.css">
  <!-- jQuery 3 -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('AdminLTE/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>V</b>D</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>VokasiDev</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="<?php echo site_url('login/logout') ?>" class="btn btn-primary btn-flat"><i class="fa fa-sign-out"></i>Sign out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
            <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('AdminLTE/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
  
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>

        <li>
          <a href="<?php echo site_url('Admin_dashboard') ?>">
            <i class="fa fa-dashboard"></i> 
            <span>Dashboard</span>
          </a>
        </li>

         <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text-o"></i> <span>Pemesanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url('Admin_pemesanan')?>"><i class="fa fa-list-alt"></i> Pemesanan Diproses</a></li>
            <li><a href="<?php echo site_url('Admin_pemesanan/pemesananDiterima')?>"><i class="fa fa-check"></i> Pemesanan Diterima</a></li>
            <li><a href="<?php echo site_url('Admin_pemesanan/pemesananDitolak')?>"><i class="fa fa-close"></i> Pemesanan Ditolak</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i> <span>Transaksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="">
              <i class="fa fa-file-text-o"></i>Pemesanan
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('Admin_transaksi_pemesanan/statusProses')?>"><i class="fa fa-list-alt"></i>Diproses</a></li>
                  <li><a href="<?php echo site_url('Admin_transaksi_pemesanan/statusSelesai')?>"><i class="fa fa-check"></i>Selesai</a></li>
              </ul>
            </li>
      
            <li class="treeview">
              <i class="fa fa-navicon"></i> Pembelian
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
              </a>
              <ul class="treeview-menu">
                  <li><a href="<?php echo site_url('Admin_pembelian')?>"><i class="fa fa-list-alt"></i> Diproses</a></li>
                  <li><a href="<?php echo site_url('Admin_pembelian/pembelianSelesai')?>"><i class="fa fa-check"></i> Selesai</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="treeview">
          <a href="<?php echo site_url('') ?>">
            <i class="fa fa-file"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('Admin_produk') ?>"><i class="fa fa-list-alt"></i> Produk Masuk </a></li>
            <li><a href="<?php echo site_url('Admin_anggota') ?>"><i class="fa fa-check"></i> Produk Diterima </a></li>
          </ul>
        </li>


         <li class="treeview">
          <a href="<?php echo site_url('') ?>">
            <i class="fa fa-users"></i> <span>Pengguna </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('Admin_klien') ?>"><i class="fa fa-user"></i> Klien </a></li>
            <li><a href="<?php echo site_url('Admin_anggota') ?>"><i class="fa fa-user"></i> Anggota Tim </a></li>
            <li><a href="<?php echo site_url('Admin_team') ?>"><i class="fa fa-user"></i> Tim </a></li>
            <li><a href="<?php echo site_url('Admin_pelamar') ?>"><i class="fa fa-user"></i> Pelamar</a></li>  
          </ul>
        </li>   
    </section>
    <!-- /.sidebar -->
  </aside>