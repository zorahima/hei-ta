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
              <h3 class="box-title"> Tambahkan Activity </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method= "post" action="<?php echo base_url('Activity/tambah_data'); ?>"  class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Kegiatan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="activity_name " name="activity_name" placeholder=" Nama Kegiatan">
                  </div>
                </div>
                <div class="form-group">
                  <label for="date" class="col-sm-2 control-label">Tanggal Kegiatan</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="activity_time" name="activity_time">
                  </div>
                </div>
                <div class="form-group">
                  <label for="text" class="col-sm-2 control-label">Deskripsi Kegiatan</label>

                  <div class="col-sm-10">
                    <input type="text_area" class="form-control" id="activity_desc"  name="activity_desc" placeholder="Deskripsi">
                  </div>
        </div>
      
                   
                </div>
                   <div class="form-group">
                   <label  class="col-sm-2 control-label"> Kirim Undangan </label>
                  <select class="form-control select2" multiple="multiple" name="user_id[]"  id="user_id" style="width: 80%;">
                   
                   <?php  foreach ($users as $user) {
                    ?>
                   <option value="<?php echo $user->user_id ?>"> <?php echo $user->user_name ?> </option> 
                    <?php
                    } 
                   ?>
                  
                </select>

                  
                </div>

           

            
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <input type="submit" class="btn btn-info pull-right" value="Submit">  
              </div>  </div>
              </form>
  <!-- /.content-wrapper -->

  <?php
$this->load->view('foot_admin');
?>