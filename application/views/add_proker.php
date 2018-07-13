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
      <h3 class="box-title"> Tambahkan Program Kerja </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method= "post" action="<?php echo base_url('ProgramKerja/tambah_data'); ?>"  class="form-horizontal" id="form2">
      <div class="box-body">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Nama Program Kerja</label>

          <div class="col-sm-10">
            <input type="text" class="form-control" required name ="proker_name" id="proker_name" placeholder="Nama Program Kerja" required>
          </div>
        </div>

        <label for="inputDate" class="col-sm-2 control-label">Tanggal Kegiatan</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="date" class="form-control pull-right" required name="proker_date" id="proker" required>
        </div>

        <label for="inputEmail3" class="col-sm-2 control-label"> Penganggung Jawab </label>
        <!-- <select class="form-control select2" name="user_id" id="user_id" style="width: 80%;"> -->

        <select class="form-control select2"  name="user_id" id="user_id" style="width: 80%;">
         <?php  foreach ($users as $user) {
          ?>
          <option value="<?php echo $user->user_id ?>" required> <?php echo $user->user_name ?> </option> 
          <?php
        } 
        ?>
      </select>
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