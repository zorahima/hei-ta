<?php
$this->load->view('head_admin');
?>
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <a href ="<?php echo site_url('Activity/tambah') ?>"  >
          <button type="submit"  class="btn btn-info pull-right"> Tambah Activity </button>
        </a>
          <h1>
           All Activity
         </h1>


       </section>

       <!-- Main content -->
       <section class="content">

        <!-- Default box -->
        <?php $i=1; foreach ($activity as $activity) {?>  
        <div class="box">

          <div class="box-header with-border">
           <td> <?php echo $i; ?> </td>

            <h3 class="box-title"><?php echo $activity->activity_name ?></h3>


            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
              title="Collapse">
              <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <h5 class="box-title"><?php echo $activity->activity_times ?></h3>
             <?php echo $activity->activity_desc ?>
           </div>

           <?php $i++; }  ?>
           <!-- /.box-body -->
         </div>
         <!-- /.box -->

       </section>
       <!-- /.content -->
     </div>
     <!-- /.content-wrapper -->
<?php
$this->load->view('foot_admin');
?>