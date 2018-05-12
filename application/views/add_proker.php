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

        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title"> Tambahkan Program Kerja </h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form method= "post" action="<?php echo base_url('index.php/programKerja/tambah_data'); ?>"  class="form-horizontal">
            <div class="box-body">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Nama Program Kerja</label>

                <div class="col-sm-10">
                <input type="text" class="form-control"  name ="proker_name" id="proker_name" placeholder="Nama Program Kerja">
                </div>
              </div>

                <label for="inputDate" class="col-sm-2 control-label">Tanggal Kegiatan</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" class="form-control pull-right"  name="proker_date" id="proker">
                  </div>

                   <label for="inputEmail3" class="col-sm-2 control-label"> Penganggung Jawab </label>
                  <select class="form-control select2" name="user_id" id="user_id" style="width: 80%;">
                  
                   <?php  foreach ($users as $user) {
                    ?>
                   <option value="<?php echo $user->user_id ?>"> <?php echo $user->user_name ?> </option> 
                    <?php
                    } 
                   ?>
                  
                </select>


                </div>
              </div>
               <div class="box-footer">
              <button type="submit" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-info pull-right"> Submit </button>
            </div> 


            </div>

            <!-- /.box-body -->
            </div>
            <!-- /.content-wrapper -->

<?php
$this->load->view('foot_admin');
?>