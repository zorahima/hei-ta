<!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
    <!--     <div class="user-panel">
          <div class="pull-left image">
            <img src="<?php echo base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p> <?php echo $this->session->userdata('user_name');?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div> -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="treeview">
            <a href=" <?php echo site_url('User/index') ?>">
            </a>
            <li>
              <li class="treeview">
                <a href="">
                  <i class="fa fa-tasks"></i> <span>Program Kegiatan</span>


                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">

                  <li><a href="<?php echo site_url('ProgramKerja/index') ?>"><i class="fa fa-briefcase"></i> Program Kerja </a></li>
                  <li><a href="<?php echo site_url('Todo/index') ?>"><i class="fa fa-check-square-o"></i> Tugas </a></li>
                  <li><a href="<?php echo site_url('Activity/index') ?>"><i class="fa fa-circle-o"></i> Kegiatan </a></li>
                </ul>

              </li>
            </li>
            <li>
              <a href="<?php echo site_url('Timeline/index') ?>">
                <i class="fa  fa-calendar"></i> <span>Timelime</span>
              </a>
            </li>
            <li>

             <a href="<?php echo site_url('Pengurus/index') ?>">
                <i class="fa fa-users"></i> <span>Pengurus</span>
              </a>

              <li>
                <a href="<?php echo site_url('Divisi/index') ?>">
                  <i class="fa fa-th"></i> <span>Divisi </span>
                </a>
              </li>

           <!--    <li>
                <a href="<?php echo site_url('Invitation/index') ?>">
                  <i class="fa fa-th"></i> <span>Undangan </span>
                </a>
              </li> -->

                <li>
                <a href="<?php echo site_url('Invitation/index_confirmation') ?>">
                  <i class="fa fa-th"></i> <span>Konfirmasi </span>
                </a>


              </li>


            </li>
                        <li class="treeview">
              <a href="<?php echo site_url('ProgramKerja/index') ?>">
                <i class="fa  fa-list"></i><span>Periode</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Periode/index') ?> "><i class="fa fa-circle-o"></i> Lihat Periode </a></li>
                
              </ul>
            </li>
  
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
