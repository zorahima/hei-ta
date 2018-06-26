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
                nanti tambahi activity id / activity namenya
                
              </div> 



              <!-- /.box-header -->
              <div class="box-body">
               <!--  <?php var_dump($user); ?> -->
               <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    
                    <th> Name</th>
                    <th> Status </th>
                    <th> Confirmation </th>
                    <th>Check Confirmation </th>

                    
                  </tr>
                  <?php $i=1; foreach ($confirmation as $u) {?>
                  <tr>
                   <td> <?php echo $i; ?> </td>
                   <td> <?php echo $u->user_name ?> </td>
                   <td> <?php echo $u->invitation_status ?> </td>
                   <td> <?php echo $u->invitation_confirmation ?> </td>
                   
                   <td class="text-center">
                  
                     <a href="<?php echo base_url ('Invitation/update_present_invitation/'.$u->invitation_id.'/'.$this->uri->segment(3)) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i></a>
                     <a href="<?php echo base_url ('Invitation/update_absent_invitation/'.$u->invitation_id.'/'.$this->uri->segment(3)) ?> " class="btn btn-sm btn-info" style="background: #d41912; border-color: #fff"><i class="fa fa-remove"></i></a>
                   </td>
                 </tr>

                 
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