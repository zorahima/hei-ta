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
      <h3 class="box-title"> Tambahkan Kegiatan </h3>
    </div>
    <!-- /.box-header -->

    <div class="box-body">
    <!-- form start -->
    <form method= "post" action="<?php echo base_url('Activity/tambah_data'); ?>"  class="form-horizontal">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nama Kegiatan</label>

        <div class="col-sm-10">
          <input type="text" class="form-control" id="activity_name " name="activity_name" placeholder=" Nama Kegiatan" required>
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Kegiatan</label>
        <div class="col-sm-10">
          <div class="input-group date" data-provide="datepicker" >
            <input type="text" min="<?php echo date('Y-m-d') ?>" class="form-control" name="activity_date" id="activity_date" required>
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
            <input type="text" id="timepicker" class="form-control timepicker" name="activity_times" id="activity_times" required>
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
          <input type="text_area" class="form-control" id="activity_loc"  name="activity_loc" placeholder="Lokasi" required>
        </div>
      </div>

      <div class="form-group">
        <label for="text" class="col-sm-2 control-label">Deskripsi Kegiatan</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="activity_desc"  name="activity_desc" placeholder="Deskripsi" required>  </textarea>
        </div>
      </div>

      <div class="form-group">
        <label  class="col-sm-2 control-label"> Kirim Undangan  ke Grup </label>
        <div class="col-sm-10">
          <select class="form-control select2" multiple="multiple" name="divisi_id[]"  id="divisi_id" style="width: 100%;" >
           <?php var_dump($divisi);  foreach ($divisi as $div) {
            ?>
            <option value="<?php echo $div->divisi_id ?>" required> <?php echo $div->divisi_name ?> </option> 
            <?php
          } 
          ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label  class="col-sm-2 control-label"> Kirim Undangan </label>
        <div class="col-sm-10">
          <select class="form-control select2" multiple="multiple" name="user_id[]"  id="user_id" style="width: 100%;" >
           <?php  foreach ($users as $user) {
            ?>
            <option value="<?php echo $user->user_id ?>" required> <?php echo $user->user_name ?> </option> 
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
  <!-- /.box-body -->

</section>
</div>
<!-- /.content-wrapper -->
  

<script type="text/javascript">
  $(document).ready(function(){

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

    $('#divisi_id').on('change', function(e){
      let id_divisi = e.target.value
      $.get('<?php echo base_url();?>' + '/Activity/getUserByDivisi/' + id_divisi)
        .then(function(data){
          let dataUser = JSON.parse(data)
          let userElement = $('#user_id')
          userElement.html('')
          dataUser.users.map(function(user){
            userElement.append('<option value="'+ user.user_id +'" selected   >'+ user.user_name +'</option>')
          })
        })
        .catch(function(err){
          console.error(err)
        })
    })
  })
  </script>

  <?php
  $this->load->view('foot_admin');
  ?>