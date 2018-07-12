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


            <h3 class="box-title">Tabel Undangan </h3>

          </div> 



          <!-- /.box-header -->
          <div class="box-body">
           <!--  <?php var_dump($user); ?> -->
           <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>

                <th>Invitation Name</th>
                <th>Invitation Desciption </th>
                <th>Invitation Time</th>
                <th>Invitation Loc</th>
                <th>Invitation Confirmation</th>
                <th> Operation </th>


              </tr>
              <?php $i=1; foreach ($invitation as $u) {?>
              <tr>
               <td> <?php echo $i; ?> </td>
               <td> <?php echo $u->activity_name ?> </td>
               <td> <?php echo $u->activity_desc ?> </td>
               <td> <?php echo $u->activity_times ?> </td>
               <td> <?php echo $u->activity_loc ?> </td>
               <td> <?php echo $u->invitation_status ?> </td>

               <td class="text-center">

                 <a href="<?php echo base_url ('Invitation/update_accept_invitation/'.$u->invitation_id) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i></a>
                 <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#input_cancelation<?php echo $u->activity_id ?>" style="background:#d41912; border-color:#fff"><i class="fa fa fa-remove"></i>
                 </button>
                 
               </td>
             </tr>

                          <!-- Modal -->
             <div class="modal fade" id="input_cancelation<?php echo $u->activity_id ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"> Tambahkan Alasan Tidak Hadir </h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method ="post"  id="formtambahalasan<?php echo $u->activity_id ?>" action="<?php echo base_url('Invitation/decline_detail'); ?>" role="form">
                        <!-- <input type="text" name='invitation_id' id='invitation_id' value="<?php echo $u->invitation_id ?>"> -->

                        <div class="box-body">
                          <label class="col-sm-3 control-label">Alasan Tidak Hadir </label>
                          <div class="col-sm-9">
                          <input type="text" name="status" id="status" value="decline">
                          <textarea class="form-control" rows="3"  id="invitation_cancelation" name="invitation_cancelation" placeholder="Enter ..." > <?php echo $u->invitation_cancelation ?> </textarea>
                          
                            <input type="text" class="form-control" name="invitation_id" value="<?php echo $u->invitation_id ?>" required>
                          </div>
                        </div>

                        <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <input type="submit"  class="btn btn-primary" value=" Save changes ">
                      </div>
                      </form>

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