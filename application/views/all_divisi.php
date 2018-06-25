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
  <!--  Main content --> 
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Tabel data divisi</h3>
            <!-- <a href ="<?php echo site_url('profil/input_todo') ?>"  > -->
            <a href ="<?php echo site_url('ProgramKerja/tambah') ?>"  >
              <button type="submit"  class="btn btn-info pull-right"> Tambah Divisi </button>
            </a>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <!--   <?php var_dump($proker); ?> -->
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Divisi</th>
                </tr> 
                <?php $i=1; foreach ($divisi as $d) {?>
                <tr>
                 <td> <?php echo $i; ?> </td>
                 <td> <?php echo $d->divisi_name ?> </td>
                 

                  
                  
               <!-- <a class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa fa-check"></i></a>
             -->
           </td>

         
        
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