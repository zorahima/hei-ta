<?php
$user_data = $this->session->userdata();


$this->load->view('head_admin');


if ($user_data['type']=='pengurus') {
  $this->load->view('User/sidebar_user');
} elseif ($user_data['type']=='admin') {
  $this->load->view('sidebar_admin');
}
?>

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


                <h3 class="box-title">Tabel Check Kehadiran </h3>
               
              </div> 



              <!-- /.box-header -->
              <div class="box-body">
               <!--  <?php var_dump($user); ?> -->
               <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Activity ID</th>
                    <th>Activity name</th>
                    <th>People Invited </th>
                    <th> Operation </th>

                    
                  </tr>
                  <?php $i=1; foreach ($confirmation as $u) {?>
                  <tr>
                   <td> <?php echo $i; ?> </td>
                    <td> <?php echo $u->activity_id ?> </td>
                   <td> <?php echo $u->activity_name ?> </td>
                   <td> <?php echo $u->banyak ?> </td>
                   <td class="text-center">
                  
                     <a href="<?php echo base_url ('Invitation/update_present_invitation/'.$u->invitation_id) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i></a>
                     <a href="<?php echo base_url ('Invitation/update_absent_invitation/'.$u->invitation_id) ?> " class="btn btn-sm btn-info" style="background: #d41912; border-color: #fff"><i class="fa fa-remove"></i></a>
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
<?php
$this->load->view('foot_admin');
?>