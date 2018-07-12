<?php

   $user_data = $this->session->userdata();
   
   
   $this->load->view('head_admin');
   if ($user_data['type']=='pengurus') {
   	$this->load->view('User/sidebar_user');
   } elseif ($user_data['type']=='admin') {
   	$this->load->view('sidebar_admin');
   }
   ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
   <h1>Profil</h1>
</section>
<?php 
   {
   # code...
   	?>
<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-md-4">
         <!-- Profile Image -->
         <div class="box box-warning">
            <div class="box-body box-profile">
               <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/avatar/avatar9.png') ?>" alt="User profile picture">
               <h3 class="profile-username text-center">
                  <!-- <?php echo $data->nama_users ?> --> 
               </h3>
               <!-- <?php if($data->nama_roles=='klien') {
                  ?>
                  <p class="text-muted text-center">Klien</p>
                  <?php }?> -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
               <ul class="nav nav-stacked">
                   <?php $i=1; foreach ($countAct as $c) {?>  
                     <li><a href="#">Activity <span class="pull-right badge bg-blue">
                  <?php echo $c->banyak?></span></a></li>
                  <?php $i++; }  ?>

                  <?php $i=1; foreach ($countPresent as $p) {?>  
                  <li><a href="#">Present <span class="pull-right badge bg-aqua">
                   <?php echo $p->banyak?></span></a></li>
                  <?php $i++; }  ?>

                  <?php $i=1; foreach ($countAbsent as $a) {?>
                  <li><a href="#">Absent <span class="pull-right badge bg-green">
                  <?php echo $a->banyak?></span></a></li>
                  <?php $i++; }  ?>

                  <li><a href="#">Todo Finish <span class="pull-right badge bg-red">842</span></a></li>
               </ul>
            </div>
         </div>
         <!-- About Me Box -->
         <div class="box box-solid">
            <div class="box-header with-border">
               <?php  $i=1; foreach ($bio as $u) {?>
               <h3 class="box-title">Tentang Saya</h3>
               <button type="button" class="btn btn-sm btn-info pull-right" data-toggle="modal" data-target="#ubah_bio<?php echo $u->user_id ?>" style="background:#fff; border-color:#000	"><i class="fa fa-pencil" style="color: #000"></i>
               </button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               <strong><i class="fa fa-book margin-r-5"></i> Nama</strong>
               <p class="text-muted"> <?php echo $u->user_name?> </p>
               <hr style="margin-top:-10px;margin-bottom: 10px;">

               <strong><i class="fa fa-intersex margin-r-5"></i>Jenis Kelamin</strong>
               <p class="text-muted">  <?php echo $u->user_gender ?></p>
               <hr style="margin-top:-10px;margin-bottom: 10px;">

               <strong><i class="fa fa-pencil margin-r-5"></i> Email</strong>
               <p class="text-muted"> <?php echo $u->email ?></p>
               <hr style="margin-top:-10px;margin-bottom: 10px;">

               <strong><i class="fa fa-map-marker margin-r-5"></i> No Telfon</strong>
               <p class="text-muted"> <?php echo $u->user_phone?> </p>
               <hr style="margin-top:-10px;margin-bottom: 10px;">

               <strong><i class="fa fa-map-marker margin-r-5"></i> Divisi</strong>
               <p class="text-muted"> <?php echo $u->divisi_name?> </p>
               <hr style="margin-top:-10px;margin-bottom: 10px;">

               <strong><i class="fa fa-calendar"></i> Periode Kepengurusan </strong>
               <p class="text-muted"><?php echo $u->periode?> </p>
            </div>
            <!-- /.box-body -->
            <?php $i++; }  ?>
         </div>
         <!-- /.box-warning-->
      </div>
      <!-- /.col-md-4 -->
      <!-- <?php } ?>
         <!-- TAB PANE -->
      <div class="col-md-8">
         <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
               <li class="active"> 
                  <a href="#activity" data-toggle="tab">Kegiatan </a>
               </li>
               <li><a href="#tugas" data-toggle="tab"> Tugas</a></li>
            </ul>
            <div class="tab-content">
               <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                           <thead>
                               <tr>
                                 <th>No</th>
                                 <th>Nama Kegiatan</th>
                                 <th>Info </th>

                                 
                               </tr> 
                                    <?php $i=1; foreach ($activity as $a) {?>
                              <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $a->activity_name ?> </td>
                                <td class="text-center">

                                    <button type="button" class="btn btn-sm btn-info " data-toggle="modal" data-target="#ubah_bio2<?php echo $a->activity_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-list-ul"></i>
                                    </button>

                              </td>
<div class="modal fade" id="ubah_bio2<?php echo $a->activity_id ?>">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span></button>
                           <!-- <h4 class="modal-title"> Ubah data Todo </h4> -->
                           <!--                       //TAB PANE -->
                           <ul class="nav nav-tabs">
                                 <h4 class="modal-title">Lihat Detail Aktivitas  </h4>
                              
                           </ul>
                           <div class="modal-body">
                              <div class="tab-content">
                                 <div id="ubahBio" class="tab-pane fade in active">
                                    <form class="form-horizontal" method ="post"  id="formubahbio<?php echo $u->user_id ?>" action="<?php echo base_url('Pengurus/updateBio'); ?>" role="form">
                                       <input type="hidden" name='user_id' id='user_id' value="<?php echo $u->user_id ?>" >
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label">Nama Kegiatan </label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nama" value="<?php echo $a->activity_name ?>" >
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label">Deskripsi </label>
                                          <div class="col-sm-9">
                                             <textarea class="form-control" rows="3"  id="invitation_cancelation" name="invitation_cancelation" placeholder="Enter ..." > <?php echo $a->activity_desc?> </textarea>
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label">Tanggal </label>
                                          <div class="col-sm-9">

                                          <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nama" value="<?php echo $a->activity_date ?>" >
                                             
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label"> Waktu </label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="No HP" value="<?php echo $a->activity_times ?>" >
                                          </div>
                                       </div>

                                           <div class="box-body">
                                          <label class="col-sm-3 control-label"> Lokasi </label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="No HP" value="<?php echo $a->activity_loc ?>" >
                                          </div>
                                       </div>
                                 
                                       <div class="box-body">
                                          <div class="col-sm-offset-2 col-sm-10">
                                             
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                  
                           </div>
                              <!-- modal -->
                           </div>
                           <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                     </div>
                     <!-- /.nav-tabs-custom -->
                  </div>
                  <!--     <div class="modal-footer">
                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                     <input type="submit"  class="btn btn-primary" value=" Save changes ">
                     </div> -->
               </div>
                                
                                    <?php $i++; }  ?>
                               </tr>     
                        </table>
                   </div>

                  
                     <!-- tab pane tugas -->
                     <div id="tugas" class="tab-pane fade">
                     <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                           <thead>
                               <tr>
                                 <th>No</th>
                                 <th>Nama Tugas</th>
                                 <th>Status Tugas</th>
                                 <th>Penerima</th>
                                 <th>Aksi </th>

                               </tr> 
                                    <?php $i=1; foreach ($tugas as $t) {?>
                              <tr>
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $t->todo_name ?> </td>
                                <td>
                                    <?php if($t->todo_status=='finish') {
                                      ?>
                                      <span class="label label-success">finish</span>
                                    <?php }else{ ?>
                                      <span class="label label-warning"> process </span>
                                    <?php }?>
                                 </td>
                                 <td><?php echo $t->penerima ?></td>
                                 <td class="text-center">
                                   <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah_todo<?php echo $t->todo_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-pencil"></i>
                                   </button>
                                   <a style="background:#f44336; border-color: #fff" class="btn btn-sm btn-info"  href="<?php base_url() ?>hapus/<?=$t->todo_id ?> "> <i class="fa fa-trash"></i></a>
                                 </td>


            
                         <?php $i++; }  ?>
                        </table>
                   </div>
           

                     </div>
               <!-- /.col -->
               <!-- /.TAB PANE END -->

               <!-- //Modal ubah todo -->
                            <!-- Modal -->
             <div class="modal fade" id="ubah_todo<?php echo $t->todo_id ?>">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title"> Ubah data Todo </h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method ="post"  id="formubahtodo<?php echo $t->todo_id ?>" action="<?php echo base_url('Todo/updateTodo'); ?>" role="form">
                        <input type="hidden" name='proker_id' id='proker_id'>

                        <div class="box-body">
                          <label class="col-sm-2 control-label">Nama todo </label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="todo_name" name="todo_name" placeholder="Nama Todo" value="<?php echo $t->todo_name ?>" >
                            <input type="hidden" class="form-control" name="todo_id" value="<?php echo $t->todo_id ?>" required>
                          </div>
                        </div>

                        <div class="box-body">
                          <label class="col-sm-2 control-label">Tanggal deadline</label>
                          <div class="col-sm-10">
                            <input type="date" class="form-control" id="todo_deadline" name="todo_deadline" value="<?php echo $t->todo_deadline ?>">
                          </div>
                        </div>

                        <div class="box-body">
                          <label class="col-sm-2 control-label"> Program Kerja </label>
                          <div class="col-sm-10">
                            <select class="form-control select2"  name="proker_id" id="proker_id" style="width: 80%;">
                                <?php /*var_dump($users);*/ foreach ($prokers as $proker){
                                  ?>
                                  <option <?php if ($t->proker_id == $proker->proker_id) {echo 'selected';} ?> value="<?php echo $proker->proker_id ?>"> <?php echo $proker->proker_name ?> </option> 
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
                                <option <?php if ($t->user_id == $users->user_id) {echo 'selected';} ?> value="<?php echo $users->user_id ?>"> <?php echo $users->user_name ?> </option> 
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

               


               <div class="modal fade" id="ubah_bio<?php echo $u->user_id ?>">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span></button>
                           <!-- <h4 class="modal-title"> Ubah data Todo </h4> -->
                           <!--                       //TAB PANE -->
                           <ul class="nav nav-tabs">
                              <li class="active">
                                 <a href="#ubahBio" data-toggle="tab">Ubah Data Diri </a>
                              </li>
                              <li><a href="#ubahPassword" data-toggle="tab">Ubah Password</a></li>
                           </ul>
                           <div class="modal-body">
                              <div class="tab-content">
                                 <div id="ubahBio" class="tab-pane fade in active">
                                    <form class="form-horizontal" method ="post"  id="formubahbio<?php echo $u->user_id ?>" action="<?php echo base_url('Pengurus/updateBio'); ?>" role="form">
                                       <input type="hidden" name='user_id' id='user_id' value="<?php echo $u->user_id ?>" >
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label">Nama </label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nama" value="<?php echo $u->user_name ?>" >
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label">Email </label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="todo_name" name="email" placeholder="Email" value="<?php echo $u->email ?>" >
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label">Jenis Kelamin</label>
                                          <div class="col-sm-9">
                                             <select class="form-control" name="user_gender">
                                                <option value="laki-laki" <?php if($u->user_gender == "laki-laki") {echo "selected=selected";} ?>>Laki-laki</option>
                                                <option value="perempuan" <?php if($u->user_gender == "perempuan") {echo "selected=selected";} ?>>Perempuan</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label"> No Telepon </label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="No HP" value="<?php echo $u->user_phone ?>" >
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label"> Periode Kepengurusan </label>
                                          <div class="col-sm-9">
                                             <input type="text" class="form-control" id="periode_id"  placeholder="Periode Kepengurusan" value="<?php echo $u->periode ?>"  readonly >
                                             <input type="hidden" class="form-control" name="periode_id" value="<?php echo $u->periode_id ?>" required>
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <label class="col-sm-3 control-label">Upload Foto</label>
                                          <div class="col-sm-9">
                                             <input type="file" name="foto" value="">
                                          </div>
                                       </div>
                                       <div class="box-body">
                                          <div class="col-sm-offset-2 col-sm-10">
                                             <input type="submit" class="btn btn-success pull-right" value="Simpan">
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 <div id="ubahPassword" class="tab-pane fade">
                                      <div class="box-body">
                                       <label class="col-sm-3 control-label">Password Lama </label>
                                       <div class="col-sm-9">
                                          <input type="password" class="form-control" id="newPass" name="newPass" placeholder="Masukan password Lama" value="" >
                                       </div>
                                    </div>

                                    <div class="box-body">
                                       <label class="col-sm-3 control-label">Password Baru </label>
                                       <div class="col-sm-9">
                                          <input type="password" class="form-control" id="newPass" name="newPass" placeholder="Masukan password Baru" value="" >
                                       </div>
                                    </div>

                                    <div class="box-body">
                                       <label class="col-sm-3 control-label">Ulangi Password Baru </label>
                                       <div class="col-sm-9">
                                          <input type="password" class="form-control" id="reTypePass" name="reTypePass" placeholder="Ulangi Password Baru" value="" >
                                       </div>
                                    </div>

                           
                                 </div>
                              </div>
                              <!-- modal -->
                           </div>
                           <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                     </div>
                     <!-- /.nav-tabs-custom -->
                  </div>
                  <!--     <div class="modal-footer">
                     <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                     <input type="submit"  class="btn btn-primary" value=" Save changes ">
                     </div> -->
               </div>
            </div>
            </form>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
   $this->load->view('foot_admin');
   ?>