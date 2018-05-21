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
              <h3 class="box-title"> Tabel data Periode </h3>
              <!-- <a href ="<?php echo site_url('profil/input_todo') ?>"  > -->
               <a href ="<?php echo site_url('Periode/tambah') ?>"  >
              <button type="submit"  class="btn btn-info pull-right"> Tambah Periode </button>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
            <!--   <?php var_dump($proker); ?> -->
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Periode</th>
                  <th> Tahun Periode</th>
                  <th> Status Periode </th>
                  <th> Jumlah Pengurus </th>
                  
                </tr>
                <?php $i=1; foreach ($periode as $periode) {?>
                <tr>
                 <td> <?php echo $i; ?> </td>
                    <td> <?php echo $periode->periode ?> </td>
                    <td> <?php echo $periode->periode_tahun ?> </td>
                    <td> <?php echo $periode->periode_status ?> </td>
                    <td> <?php echo $periode->banyak ?> </td>
                 </tr>
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
  <!-- /.content-wrapper -->
<?php
$this->load->view('foot_admin');
?></html>
