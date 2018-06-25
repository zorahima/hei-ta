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
                <th>Desctiption</th>
                <th>Deadline</th>
                <th>Program Kerja </th>
                <th> PIC </th>
                <th> Status </th>
                <th> Operation </th>

              </tr>
              <?php $i=1; foreach ($todo as $todos) {?>
              <tr>
               <td> <?php echo $i; ?> </td>
               <td> <?php echo $todos->todo_name ?> </td>
               <td> <?php echo $todos->todo_desc ?> </td>
               <td> <?php echo $todos->todo_deadline ?> </td>
               <td> <?php echo $todos->proker_name ?> </td>
               <td> <?php echo $todos->user_name ?> </td>
               <td> <?php echo $todos->todo_status ?> </td>
               <td class="text-center">
                 <a href="<?php echo base_url ('Todo/update_finish_todo/'.$todos->todo_id) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i></a>
                 
                 <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah_todo<?php echo $todos->todo_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-pencil"></i>
                 </button>
                 <a style="background:#f44336; border-color: #fff" class="btn btn-sm btn-info"  href="<?php base_url() ?>hapus/<?=$todos->todo_id ?> "> <i class="fa fa-trash"></i></a>
               </td>

             </tr>




             <!-- Modal -->
             <div class="modal fade" id="ubah_todo<?php echo $todos->todo_id ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"> Ubah data Todo </h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method ="post"  id="formubahtodo<?php echo $todos->todo_id ?>" action="<?php echo base_url('Todo/updateTodo'); ?>" role="form">
                        <input type="hidden" name='proker_id' id='proker_id'>

                        <div class="box-body">
                          <label class="col-sm-2 control-label">Nama todo </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="todo_name" name="todo_name" placeholder="Nama Todo" value="<?php echo $todos->todo_name ?>" >
                            <input type="hidden" class="form-control" name="todo_id" value="<?php echo $todos->todo_id ?>" required>
                          </div>
                        </div>

                        <div class="box-body">
                          <label class="col-sm-2 control-label">Tanggal deadline</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="todo_deadline" name="todo_deadline" value="<?php echo $todos->todo_deadline ?>">
                          </div>
                        </div>

                        <div class="box-body">
                          <label class="col-sm-2 control-label"> Program Kerja </label>
                          <div class="col-sm-10">
                            <select class="form-control select2"  name="proker_id" id="proker_id" style="width: 80%;">
                                <?php /*var_dump($users);*/ foreach ($prokers as $proker){
                                  ?>
                                  <option <?php if ($todos->proker_id == $proker->proker_id) {echo 'selected';} ?> value="<?php echo $proker->proker_id ?>"> <?php echo $proker->proker_name ?> </option> 
                                  <?php
                                } 
                                ?>
                            </select>
                          </div>
                        </div>

                        

                        <div class="box-body">
                          <label class="col-sm-2 control-label"> PIC </label>
                          <div class="col-sm-10">
                            <select class="form-control select2"  name="user_id" id="user_id" style="width: 100%;">
                              <?php /*var_dump($users);*/ foreach ($user as $users){
                                ?>
                                <option <?php if ($todos->user_id == $users->user_id) {echo 'selected';} ?> value="<?php echo $users->user_id ?>"> <?php echo $users->user_name ?> </option> 
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
                  </div>
                </form>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->



            <?php $i++; }  ?>
          </thead>
          <tbody>
          </tfoot>
        </table>

        <!-- TO DO List -->
        <div class="box box-primary">
          <div class="box-header">
            




            <!-- Ini buat yang kayak page, hal 1 2 3 -->
            <div class="box-tools pull-right">
              <ul class="pagination pagination-sm inline">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
         


    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view('foot_admin');
?>