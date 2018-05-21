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
            
            
              <h3 class="box-title">Todo </h3>
              <a href ="<?php echo site_url('Todo/tambah') ?>"  >
              <button type="submit"  class="btn btn-info pull-right"> Tambah Todo </button>
              </a>
            </div> 

            

            <!-- /.box-header -->
            <div class="box-body">
           <!--  <?php var_dump($user); ?> -->
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Deadline</th>
                 <th>Program Kerja </th>
                 <th> PIC </th>
                 <th> Operation </th>

                </tr>
                <?php $i=1; foreach ($todo as $todos) {?>
                 <tr>
                 <td> <?php echo $i; ?> </td>
                    <td> <?php echo $todos->todo_name ?> </td>
                    <td> <?php echo $todos->todo_deadline ?> </td>
                    <td> <?php echo $todos->proker_name ?> </td>
                    <td> <?php echo $todos->user_name ?> </td>
                    <td class="text-center">
                   <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah_proker<?php echo $todos->todo_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-pencil"></i>
                   </button>
                   <a style="background:#f44336; border-color: #fff" class="btn btn-sm btn-info"  href="<?php base_url() ?>hapus/<?=$todos->todo_id ?> "> <i class="fa fa-trash"></i></a>
</td>
                    
                 </tr>
                <?php $i++; }  ?>
                </thead>
                <tbody>
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
?>