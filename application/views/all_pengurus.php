<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin  |HEI </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css') ?>">

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
  <!-- base wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="<?php echo base_url('assets/index2.html') ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>H</b>EI</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>HEI</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <!-- Notifications: style can be found in dropdown.less -->
            <!-- Tasks: style can be found in dropdown.less -->
            <li class="dropdown tasks-menu">

              <ul class="dropdown-menu">
                <li>
                  <!-- inner menu: contains the actual data -->
                  <ul class="menu">
                    <!-- end task item -->
                  </ul>
                </li>

              </ul>
            </li>
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="user-image" alt="User Image">
                <span class="hidden-xs">Alexander Pierce</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Alexander Pierce</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href=" <?php echo site_url('Pengurus/index') ?>">
              <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
            <li>
              <li class="treeview">
                <a href="<?php echo site_url('ProgramKerja/index') ?>">
                  <i class="fa fa-circle-o"></i> Program Kerja
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Todo </a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Activity </a></li>
                </ul>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Todo </a></li>
                  <li class="treeview">
                    <a href="<?php echo site_url('ProgramKerja/index') ?>"><i class="fa fa-circle-o"></i> Program Kerja
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </li>
            </li>
            <li>
              <a href="<?php echo site_url('profil/timeline') ?>">
                <i class="fa fa-th"></i> <span>Timelime</span>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url('Pengurus/index') ?>">
                <i class="fa fa-th"></i> <span>Pengurus</span>
              </a>


            </li>
            <li class="treeview">
              <a href="<?php echo site_url('ProgramKerja/index') ?>">
                <i class="fa fa-circle-o"></i> Periode
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Periode/index') ?> "><i class="fa fa-circle-o"></i> Lihat Periode </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Tambah Periode </a></li>
              </ul>
            </li>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      </section>

      <!-- Main content -->
      <!--  Main content --> 
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

            <div class="box">
              <div class="box-header">


                <h3 class="box-title">Tabel data pengurus</h3>
                <a href ="<?php echo site_url('Pengurus/tambah') ?>"  >
                  <button type="submit"  class="btn btn-info pull-right"> Tambah Pengurus </button>
                </a>
              </div> 



              <!-- /.box-header -->
              <div class="box-body">
               <!--  <?php var_dump($user); ?> -->
               <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th> Periode User </th>
                    <th>Profil Picture</th>
                    <th>Operation</th>
                  </tr>
                  <?php $i=1; foreach ($user as $pengurus) {?>
                  <tr>
                   <td> <?php echo $i; ?> </td>
                   <td> <?php echo $pengurus->user_name ?> </td>
                   <td> <?php echo $pengurus->email ?> </td>
                   <td> <?php echo $pengurus->user_address ?> </td>
                   <td> <?php echo $pengurus->user_phone ?> </td>
                   <td> <?php echo $pengurus->user_gender ?> </td>
                   <td> <?php echo $pengurus->periode ?> </td>
                   <td>  </td>
                   <td class="text-center">
                     <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah-user" style="background:#1a75ff; border-color:#fff" onclick="ubah-produk"><i class="fa fa-pencil"></i>
                     </button>
                     <a class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa fa-check"></i></a>
                     <a class="btn btn-sm btn-info" style="background: #d41912; border-color: #fff"><i class="fa fa-remove"></i></a>
                   </td>
                 </tr>

                 <!--- modals -->
                 <div class="modal fade" id="ubah-user">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title"> Ubah data User</h4>
                        </div>
                        <div class="modal-body">
                          <form method ="post" action="<?php echo base_url('index.php/Pengurus/tambah_data'); ?>" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label> Nama </label>
                  <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label> Email </label>
                  <input type="email" class="form-control" id="email" name="email" placeholder=" Email">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                <label> Jenis User </label>
                <!-- <select class="form-control" name="agama" id="agama" value="<?php echo set_value('agama');?>" required> -->
                  <select class="form-control" name="type" id="type">
                    <option value="admin">Admin </option>
                    <option value="pengurus "> Pengurus </option>

                  </select>

                <!--   <label for="exampleInputEmail1">Type</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="user_gender" id="user_gender">
                    <option value="Laki-laki"> Laki-laki </option>
                    <option value="Perempuan"> Perempuan </option>

                  </select>
                  <!-- <label for="exampleInputEmail1">Jenis Kelamin</label> -->

                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                -->
              </div>
              <div class="form-group">
                <label> Nomor Telepon</label>
                <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="Nomor Telepon ">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Alamat ">
              </div>
              <div class="form-group">
                <label> Periode Pengurus </label>
                <select class="form-control" name="periode_id" id="periode_id">

                <!--  <?php foreach($companies as $company){ ?>
                    <option value="<?php echo $company->id_company ;?>"><?php echo $company->name; ?></option>
                <?php } ?> -->
                     <?php  foreach ($periodes as $periode) {
                    ?>
                   <option value="<?php echo $periode->periode_id ;?>"><?php echo $periode->periode; ?> </option> 
                    <?php
                    } 
                   ?>
                  
                  </select>
                  
                
              </div>
              <button type="submit" class="btn btn-info pull-right"> Submit </button>
            </div>
          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
                  <?php $i++; }  ?>
                </thead>
                <tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
      </footer>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js') ?>"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
</body>
</html>

