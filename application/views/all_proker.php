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
                <?php $i=1; foreach ($proker as $prokers) {?>
                <tr>
                 <td> <?php echo $i; ?> </td>
                 <td> <?php echo $prokers->proker_name ?> </td>
                 <td> <?php echo $prokers->proker_date ?> </td>
                 <td> <?php echo $prokers->user_name ?> </td>
                 <td class="text-center">
                   <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah_proker<?php echo $prokers->proker_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-pencil"></i>
                   </button>
                   <a style="background:#f44336; border-color: #fff" class="btn btn-sm btn-info"  href="<?php base_url() ?>hapus/<?=$prokers->proker_id ?> "> <i class="fa fa-trash"></i></a>


                  
                  
               <!-- <a class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa fa-check"></i></a>
             -->
           </td>

         </tr> 
         <div class="modal fade" id="ubah_proker<?php echo $prokers->proker_id ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"> Ubah data Program Kerja</h4>
                </div>
                <div class="modal-body">
                  <form method ="post"  id="formubahproker<?php echo $prokers->proker_id ?>" action="<?php echo base_url('ProgramKerja/updateProker'); ?>" role="form">
                    <!-- <?php foreach ($proker as $proker)?> -->
                    <input type="hidden" name='proker_id' id='proker_id'>
                    <div class="box-body">
                    <input type="hidden" class="form-control" name="proker_id" value="<?php echo $prokers->proker_id ?>" required>


                      <div class="form-group">
                        <label> Nama  Program Kerja </label>
                        <input type="text" class="form-control" name ="proker_name" id="proker_name" placeholder="Nama Program Kerja" value="<?php echo $prokers->proker_name ?>" >
                      </div>

                      <div class="form-group">
                        <label> Tanggal Kegiatan </label>
                        <input type="date" class="form-control"  name ="proker_date" id="proker_date" value="<?php echo $prokers->proker_date ?>">
                      </div>
                      <div class="form-group">
                        <label > Penganggung Jawab </label>
                        <!-- <select class="form-control select2" name="user_id" id="user_id" style="width: 80%;"> -->

                        <select class="form-control select2"  name="user_id" id="user_id" style="width: 100%;">
                          <?php /*var_dump($users);*/ foreach ($user as $users){
                            ?>
                            <option <?php if ($users->user_id == $prokers->user_id) {echo 'selected';} ?> value="<?php echo $users->user_id ?>"> <?php echo $users->user_name ?> </option> 
                            <?php
                          } 
                          ?>
                        </select>

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
        <div class="modal fade" id="hapus_proker<?php echo $prokers->proker_id ?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"> Hapus Data Proker</h4>
                </div>
                <div class="modal-body">
                  <form method ="post"  id="formhapusproker" action="<?php echo base_url('ProgramKerja/hapus'); ?>" role="form">
                    <!-- <?php foreach ($proker as $proker)?> -->
                    <input type="hidden" name='proker_id' id='proker_id'>
                    <div class="box-body">
                    <p>Apakah anda akan menghapus data ini ?</p>
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
<script type="text/javascript">
  function edit_proker(id){
    $('#butSave'+id+'').attr("onclick","update_proker("+id+")");
    // $('#formubahproker'+id+' input[name=proker_id]').val(id);
    $('#ubah_proker').modal('show');
    // detail_proker(id);
  }

  function update_proker(id){

    var fd = $("#formubahproker"+id+"").serialize();
    $.ajax({
      url : "<?php echo base_url("ProgramKerja/update_proker"); ?>",
      type: "POST",
      data: fd,
      dataType: "JSON",
      success: function(data){
        if (data.status == true) {
          $('#ubah_proker').modal('hide');
          alert("Data berhasil diubah");
        }else{
          alert("Perubahan gagal");
        }
      },
      error: function(jqXHR, textStatus, errorThrown){
        alert(errorThrown);
      }
    });
  }
  function detail_proker(id) {
    $.ajax({
      url : "<?php echo base_url('ProgramKerja/detail_proker')?>/"+id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        if (data.status==true){
          var val = data.data;
          $('input[name="proker_id"]').val(val.proker_id);
          $('input[name="proker_name"]').val(val.proker_name);
          $('input[name="proker_date"]').val(val.proker_date);
          $('input[name="user_id"]').val(val.user_id);
        }
      }
    });
  }


</script>
<!-- /.content-wrapper -->
<?php
$this->load->view('foot_admin');
?>