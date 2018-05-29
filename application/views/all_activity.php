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
                          <a href="#"> <?php echo $this->session->userdata('user_name');?> </a>
                         
                        </span>
                    <span class="description"><?php echo $activity->activity_date ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                  
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