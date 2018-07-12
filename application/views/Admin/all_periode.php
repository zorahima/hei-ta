<?php
$this->load->view('head_admin');
$this->load->view('sidebar_admin');
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

   <!--  Main content --> 
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> Tabel Periode </h3>
                     <a href ="<?php echo site_url('Periode/tambah') ?>"  >
                      <button type="submit"  class="btn btn-info pull-right"> Tambah Periode </button>
                     </a>
                </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  
                  <tr>
                    <th>NO</th>
                    <th>Periode</th>
                    <th> Tahun Periode</th>
                    <th> Jumlah Pengurus </th>
                    <th> Status Periode </th>
                    <th> Aksi </th>
                    
                  </tr>
                  <?php $i=1; foreach ($periode as $p) {?>
                  <tr>
                      <td> <?php echo $i; ?> </td>
                      <td> <?php echo $p->periode ?> </td>
                      <td> <?php echo $p->periode_tahun ?> </td>
                      <td> <?php echo $p->banyak ?> </td>
                      <td> <?php echo $p->periode_status ?> </td>
                      <td class="text-center">


                           <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah_periode<?php echo $p->periode_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-pencil"></i>
                           </button>

                             <?php if($p->periode_status == 'deactive'){?>
                                 <a href="<?php echo base_url ('Periode/update_active_periode/'.$p->periode_id) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i>
                                 </a>
                             <?php }else{ ?>
                             <a href="<?php echo base_url ('Periode/update_deactive_periode/'.$p->periode_id) ?> " class="btn btn-sm btn-info" style="background: #f44336; border-color: #fff"><i class="fa  fa fa-close"></i>
                             </a>
                            <?php } ?>

                       </td>
                   </tr>
                    <?php $i++; }  ?>
                 
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

             <!-- Modal -->
             <div class="modal fade" id="ubah_periode<?php echo $p->periode_id ?>">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title"> Ubah Periode </h4>
                          </div>
                          <div class="modal-body">
                            <form method ="post"  id="formubahperiode<?php echo $p->periode_id ?>" action="<?php echo base_url('Periode/updatePeriode'); ?>" role="form">
                              <input type="hidden" name='periode_id' id='periode_id'>
                              <div class="box-body">
                              <input type="hidden" class="form-control" name="periode_id" value="<?php echo $p->periode_id ?>" required>
                                <div class="form-group">
                                  <label> Nama  Periode </label>
                                  <input type="text" class="form-control" name ="periode" id="periode" placeholder="Nama Periode" value="<?php echo $p->periode ?>" >
                                </div>

                                <div class="form-group">
                                  <label> Tahun Periode </label>
                                  <input type="text" class="form-control" name ="periode_tahun" id="periode_tahun" placeholder="Tahun Periode" value="<?php echo $p->periode_tahun ?>" >
                                </div>

                              </div>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <input type="submit"  class="btn btn-primary" value=" Save changes ">
                          </div>
                        </div>
                        </form>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
$this->load->view('foot_admin');
?></html>
