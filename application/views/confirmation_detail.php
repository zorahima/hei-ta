<?php

$user_data = $this->session->userdata();


$this->load->view('User/head_user');


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


                <h3 class="box-title"> Cek Kehadiran Aggota </h3>
                <!-- nanti tambahi activity id / activity namenya -->
                
              </div> 



              <!-- /.box-header -->
              <div class="box-body">
               <!--  <?php var_dump($user); ?> -->
               <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>No</th>
                    <th> Nama </th>
                    <th> Konfirmasi Anggota </th>
                    <th> Kehadiran Anggota </th>
                    <th> Alasan Ketidakhadiran </th>
                    <th> Aksi </th>

                    
                  </tr>
                  <?php $i=1; foreach ($confirmation as $u) {?>
                  <tr>
                   <td> <?php echo $i; ?> </td>
                   <td> <?php echo $u->user_name ?> </td>
                   <td>
                    <?php if($u->invitation_status=='accept') {
                      ?>
                      <span class="label label-success"> Disetujui </span>
                      <?php } else if ($u->invitation_status== 'decline') { ?>
                      <span class="label label-warning"> Ditolak </span>
                      <?php } else {?> 
                      <span class="label label-warning"> Process </span>
                      <?php }?>
                    </td>

                   <td>
                    <?php if($u->invitation_confirmation=='present') {
                      ?>
                      <span class="label label-success">Hadir</span>
                      <?php }else{ ?>
                      <span class="label label-warning"> Absen </span>
                      <?php }?>
                    </td>
                   <td> <?php  if ($u->invitation_cancelation  != '' ) {

                     echo $u->invitation_cancelation;   } else {echo '-';} ?>  </td>
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