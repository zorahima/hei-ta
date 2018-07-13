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

    <!-- Main content -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Tambahkan Periode </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="post" action="<?php echo base_url('index.php/Periode/tambah_data'); ?>" >
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Periode </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="periode"  name= "periode" placeholder="Periode Example : 2016/2017" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label"> Tahun Periode </label>

                  <div class="col-sm-10">
                    <input type="year" class="form-control" id="periode_tahun" name="periode_tahun" placeholder="Tahun" required>
                  </div>
                </div>
             
              <!-- /.box-body -->
              <div class="box-footer">
                <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
                <button type="submit" class="btn btn-info pull-right"> Submit </button>
                </form>
              </div>  </div>
  <!-- /.content-wrapper -->
<?php
$this->load->view('foot_admin');
?>