<?php
$this->load->view('head_admin');
?>

  <!-- =============================================== -->

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
              <h3 class="box-title">Tabel data program kerja</h3>
              <!-- <a href ="<?php echo site_url('profil/input_todo') ?>"  > -->
               <a href ="<?php echo site_url('ProgramKerja/tambah') ?>"  >
              <button type="submit"  class="btn btn-info pull-right"> Tambah Program Kerja </button>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
            <!--   <?php var_dump($proker); ?> -->
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Program Kerja</th>
                  <th>Tanggal</th>
                  <th>Penganggung Jawab</th>
                  <th> Operation </th>
                  
                </tr> 
                <?php $i=1; foreach ($proker as $proker) {?>
                <tr>
                 <td> <?php echo $i; ?> </td>
                    <td> <?php echo $proker->proker_name ?> </td>
                    <td> <?php echo $proker->proker_date ?> </td>
                    <td> <?php echo $proker->user_name ?> </td>
                    <td class="text-center">
                     <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah-user" style="background:#1a75ff; border-color:#fff" onclick="ubah-produk"><i class="fa fa-pencil"></i>
                     </button>
                     <a class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa fa-check"></i></a>
                     <a class="btn btn-sm btn-info" style="background: #d41912; border-color: #fff"><i class="fa fa-remove"></i></a>
                   </td>

                 </tr> 
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
                            <div class="box-body">
                              <div class="form-group">
                                <label> Nama  Program Kerja </label>
                                <input type="text" class="form-control"  name ="proker_name" id="proker_name" placeholder="Nama Program Kerja">
                
                              </div>

                              <div class="form-group">
                                <label> Tanggal Kegiatan </label>
                                <input type="date" class="form-control"  name ="proker_date" id="proker_date"
                
                              </div>
                              
                              
                              

              
              
              
              <div class="form-group">
                <label> PIC  </label>
                <select class="form-control" name="user_id" id="user_id">

                <!--  <?php foreach($companies as $company){ ?>
                    <option value="<?php echo $company->id_company ;?>"><?php echo $company->name; ?></option>
                    <?php } ?> -->
                    <?php  foreach ($user as $user) {
                      ?>
                      <option value="<?php echo $user->user_id ;?>"><?php echo $user->user_name; ?> </option> 
                      <?php
                    } 
                    ?>
                    
                  </select>
                  
                  
                </div>
               
              </div>
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