<?php
$user_data = $this->session->userdata();


$this->load->view('head_admin');


if ($user_data['type']=='pengurus') {
  $this->load->view('User/sidebar_user');
} elseif ($user_data['type']=='admin') {
  $this->load->view('sidebar_admin');
}
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

      <div class="post">
        <div class="user-block">
          <img class="img-circle img-bordered-sm" src="<?php echo base_url('assets/dist/img/user1-128x128.jpg') ?>" alt="user image">
          <span class="username">
            <a href="#"> <?php echo $activity->user_name ?> </a>

          </span>


        </div>
        <!-- /.user-block -->
        <h4><?php echo $activity->activity_id ?></h4>
        <p>
          <?php echo $activity->activity_desc ?>
        </p>
        <span class="description"><i class="fa fa fa-calendar"></i> <?php echo $activity->activity_date ?> <i class="fa fa fa-clock-o"></i> <?php echo $activity->activity_times ?></span>
        <span class="description"><i class="fa fa fa-map-marker"></i> <?php echo $activity->activity_loc ?></span>
        <ul class="list-inline">
          <li><a data-toggle="modal" class="link-black text-sm"  data-target="#tampil_invitation" ><i class="fa fa-user-circle"></i> 15 People </a></li>

                    <!-- <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                  </li> -->
                  
                </ul>
              </div>

              <!-- <td> <?php echo $i; ?> </td> -->

              <!-- <h3 class="box-title"><?php echo $activity->activity_name ?></h3> -->
              <!-- <span class="description"><?php echo $activity->activity_times ?></span> -->


              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
                </div>
              </div>
            <!-- <div class="box-body">
             <h5 class="box-title"><?php echo $activity->activity_times ?></h3>
             <?php echo $activity->activity_desc ?>
              <div> <?php echo $activity->activity_loc ?></div>
             
           </div>
         -->
         <!--- modals -->
         <div class="modal fade" id="tampil_invitation">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"> Ubah data User</h4>
                </div>
                <div class="modal-body">
                <form method ="post" action="<?php echo base_url(''); ?>" role="form">
                    <div class="box-body">
                    <?php 

                    $this->load->model('Activity_model');

                    $tamu=$this->activity_model->modelGet($activity->activity_id );
                    foreach ($tamu as $t) {
                      echo $t->user_id;
                    }








                     ?>








                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
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