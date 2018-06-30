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
<section class="content">
  <!-- Main content -->

  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title"> Tambahkan Activity </h3>
    </div>
    <!-- /.box-header -->

    <div class="box-body">
    <!-- form start -->
    <form method= "post" action="<?php echo base_url('Activity/tambah_data'); ?>"  class="form-horizontal">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Kegiatan</label>

        <div class="col-sm-10">
          <input type="text" class="form-control" id="activity_name " name="activity_name" placeholder=" Nama Kegiatan">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Kegiatan</label>
        <div class="col-sm-10">
          <div class="input-group date" data-provide="datepicker" >
            <input type="text" min="<?php echo date('Y-m-d') ?>" class="form-control" name="activity_date" id="activity_date">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        </div>
      </div>

      <div class="bootstrap-timepicker">
        <div class="form-group">

          <label for="date" class="col-sm-2 control-label">Waktu Kegiatan</label>
          <div class="col-sm-10">
          <div class="input-group">
            <input type="text" id="timepicker" class="form-control timepicker" name="activity_times" id="activity_times">
            <div class="input-group-addon">
              <i class="fa fa-clock-o"></i>
            </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="text" class="col-sm-2 control-label"> Lokasi  Kegiatan</label>

        <div class="col-sm-10">
          <input type="text_area" class="form-control" id="activity_loc"  name="activity_loc" placeholder="Lokasi">
        </div>
      </div>

      <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Deskripsi Kegiatan</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="activity_desc"  name="activity_desc" placeholder="Deskripsi">  </textarea>
        </div>
      </div>

      <div class="form-group">
        <label  class="col-sm-2 control-label"> Kirim Undangan </label>
        <div class="col-sm-10">
          <select class="form-control select2" multiple="multiple" name="user_id[]"  id="user_id" style="width: 100%;">
           <?php  foreach ($users as $user) {
            ?>
            <option value="<?php echo $user->user_id ?>"> <?php echo $user->user_name ?> </option> 
            <?php
          } 
          ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="submit" class="btn btn-info pull-right" value="Submit"/>  
        </div>
      </div>
    </form>
    </div>
  </div>
</section>
</div>
  <!-- /.box-body -->
  
  <!-- <div class="box-footer"> -->
    

  <!-- <button type="submit" class="btn btn-default">Cancel</button> -->
  
<!-- </div>   -->
<!-- /.content-wrapper -->

<script type="text/javascript">
  $('#activity_date').on('change', function(e){
    e.preventDefault()
    let inputtedDate = new Date(this.value)
    let q = new Date()
    let d = q.getDate()
    let m = q.getMonth()
    let y = q.getFullYear()
    let date = new Date(y,m,d)

    console.log(date, inputtedDate)

    $('#activity_date').val('')
    if(inputtedDate > date)
      // console.log('olololo')
    $('#activity_date').val(`${inputtedDate.getFullYear()}-${inputtedDate.getMonth()+1}-${inputtedDate.getDate()}`)
      // this.val(inputtedDate)
    })
  </script>

  <?php
  $this->load->view('foot_admin');
  ?>