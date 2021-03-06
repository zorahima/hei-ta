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

            <h3 class="box-title">Tabel Kehadiran  Kegiatan </h3>

          </div>

          <!-- /.box-header -->
          <div class="box-body">
            <!--  <?php var_dump($user); ?> -->
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <!-- <th>Activity ID</th> -->
                  <th>Nama Kegiatan</th>
                  <th>Jumlah Undangan </th>
                  <th> Aksi </th>

                </tr>
                </thead>
                <tbody>
                  
                <?php $i=1; foreach ($confirmation as $u) {?>
                <tr>
                  <td>
                    <?php echo $i; ?>
                  </td>
                  <!-- <td>
                    <?php echo $u->activity_id ?>
                  </td> -->
                  <td>
                    <?php echo $u->activity_name ?>
                  </td>
                  <td>
                    <?php echo $u->banyak ?>
                  </td>
                  <td class="text-center">

                    <a href="<?php echo site_url('Invitation/index_confirmation_detail/'.$u->activity_id) ?>" class="btn btn-sm btn-info" style="background:#1a75ff; border-color:#fff"> <i class="fa fa-list-ul"></i>
                    </button>


                    <!-- <a data-toggle="modal" class="btn btn-sm btn-info" onclick="getDataModal()" data-id="<?php echo $u->activity_id ?>" data-target="#tampil_invitation<?php echo $u->activity_id ?>" style="background: #00c0ef; border-color: #fff"><i class="fa  fa-eye"></i></a> -->
                  </td>
                </tr>
                  <?php $i++; }  ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <div class="modal fade" id="tampil_invitation">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> Undangan</h4>
              </div>
              <div class="modal-body">
                <form method="post" action="<?php echo base_url(''); ?>" role="form">
                  <div class="box-body">
                    

                    <table id="isimodal" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Confirmation</th>
                          <th>Check Confirmation </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $tamu=$activity_model->modelGet($u->activity_id);                    

                        $i=1; foreach ($tamu as $t) {
                          ?>
                          <tr>
                           <td> <?php echo $i; ?> </td>
                           <td id="name"> <?php //echo $t->user_name ?> </td>
                           <td> <?php echo $t->invitation_status ?> </td>
                           <td> <?php echo $t->invitation_confirmation ?> </td>
                           <td class="text-center">
                          
                            <a href="<?php echo base_url ('Invitation/update_present_invitation/'.$u->invitation_id) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i></a>
                          
                            <a href="<?php echo base_url ('Invitation/update_absent_invitation/'.$u->invitation_id) ?> " class="btn btn-sm btn-info" style="background: #d41912; border-color: #fff"><i class="fa fa-remove"></i></a>
                          </td>
                         </tr>
                         <?php  $i++; }  
                         ?>
                       </tbody>
                     </table>



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

<script type="text/javascript">
  function getDataModal() {
    $('tampil_invitation').modal().show();
    var id = $(this).data('id');
    $.ajax({
      type: "POST",
      url: "<?php echo base_url('Invitation/get_data_invitation/') ?>"+id,
      error : function(result){
          // Do something here to see what the problem is
          // maybe console.log(result);
      },
      success : function(result){
          $("#name").html(result[0].user_id);
      }
  });
  }
</script>>

      <?php
      $this->load->view('foot_admin');
      ?>

