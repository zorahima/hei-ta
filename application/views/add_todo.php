<?php
$user_data = $this->session->userdata();


$this->load->view('head_admin');


if ($user_data['type']=='pengurus') {
  $this->load->view('User/sidebar_user');
} elseif ($user_data['type']=='admin') {
  $this->load->view('sidebar_admin');
}
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
      <h3 class="box-title"> Tambahkan Todo </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method= "post" action="<?php echo base_url('Todo/tambah_data'); ?>"  class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label class="col-sm-2 control-label">Nama to-do </label>

          <div class="col-sm-10">
            <input type="text" class="form-control" id="todo_name" name="todo_name" placeholder="Nama Todo">
          </div>
        </div>
        <div class="form-group">
          <label  class="col-sm-2 control-label">Tanggal deadline</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="todo_deadline" name="todo_deadline">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Program Kerja </label>
          <div class="col-sm-10">
            <select class="form-control select2" name="proker_id" id="proker_id" style="width: 80%;">
             <?php  foreach ($prokers as $proker) {
              ?>
              <option value="<?php echo $proker->proker_id ?>"> <?php echo $proker->proker_name ?> </option> 
              <?php
            } 
            ?>
          </select>                  

        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">PIC</label>
        <div class="col-sm-10">
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
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
</div>
<!-- /.box-body -->
<div class="box-footer">
  <button type="submit" class="btn btn-default">Cancel</button>
  <button type="submit" class="btn btn-info pull-right"> Submit </button>
</div>  </div>
<!-- /.content-wrapper -->
<?php
$this->load->view('foot_admin');
?>