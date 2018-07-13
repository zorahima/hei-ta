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
      <h3 class="box-title"> Tambahkan Divisi </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method= "post" action="<?php echo base_url('Divisi/tambah_data'); ?>"  class="form-horizontal" id="form2">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Divisi</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" required name ="divisi_name" id="divisi_name" placeholder="Nama Divisi" required>
          </div>
        </div>

 
    </div>
  </div>
  <div class="box-footer">
    <a class="btn btn-default" >Cancel</a>
    <button type="submit" name="submit" class="btn btn-info pull-right"> Submit </button>
  </div> 
</form>

</div>

<!-- /.box-body -->
</div>
<!-- /.content-wrapper -->

<?php
$this->load->view('foot_admin');
?>