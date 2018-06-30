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
                  <th> Jumlah Pengurus </th>
                  <th> Status Periode </th>
                  <th> Operation </th>
                  
                </tr>
                <?php $i=1; foreach ($periode as $p) {?>
                <tr>
                 <td> <?php echo $i; ?> </td>
                    <td> <?php echo $p->periode ?> </td>
                    <td> <?php echo $p->periode_tahun ?> </td>
                    <td> <?php echo $p->banyak ?> </td>
                    <td> <?php echo $p->periode_status ?> </td>
                    
                     <td class="text-center">


                 <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah_proker<?php echo $p->periode_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-pencil"></i>
                   </button>
                   <?php if($p->periode_status == 'deactive'){?>
                   <a href="<?php echo base_url ('Periode/update_active_periode/'.$p->periode_id) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i></a>
                   <?php }else{ ?>

                   <a href="<?php echo base_url ('Periode/update_deactive_periode/'.$p->periode_id) ?> " class="btn btn-sm btn-info" style="background: #f44336; border-color: #fff"><i class="fa  fa fa-close"></i></a>
                  <?php } ?>

               </td>
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
