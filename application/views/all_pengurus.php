<?php
$this->load->view('head_admin');
$this->load->view('sidebar_admin');
?>    <!-- =============================================== -->

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


                <h3 class="box-title">Tabel data pengurus</h3>
                <a href ="<?php echo site_url('Pengurus/tambah') ?>"  >
                  <button type="submit"  class="btn btn-info pull-right"> Tambah Pengurus </button>
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
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th> Periode User </th>
                    <th> Status User </th>
                    <th>Profil Picture</th>
                    <th width="50px">Operation</th>
                  </tr>
                  <?php $i=1; foreach ($user as $pengurus) {?>
                  <tr>
                   <td> <?php echo $i; ?> </td>
                   <td> <?php echo $pengurus->user_name ?> </td>
                   <td> <?php echo $pengurus->email ?> </td>
                   <td> <?php echo $pengurus->user_address ?> </td>
                   <td> <?php echo $pengurus->user_phone ?> </td>
                   <td> <?php echo $pengurus->user_gender ?> </td>
                   <td> <?php echo $pengurus->periode ?> </td>
                   <td> <?php echo $pengurus->user_status ?> </td>
                   <td> 
                   <?php 
                    if($pengurus->user_picture != ''){
                      echo $pengurus->user_picture; //tidak kosong
                    } else{
                      ?>
                      <img src="<?php echo base_url('assets/avatar/avatar9.png') ?>" height="30px" class="img-circle text-center" alt="User Image">
                      <?php
                    }
                   ?> 
                   </td>
                   <td class="text-center">
                     <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ubah-user" style="background:#1a75ff; border-color:#fff" onclick="ubah-produk"><i class="fa fa-pencil"></i>
                     </button>
                     <a href="<?php echo base_url ('Pengurus/update_active_user/'.$pengurus->user_id) ?> " class="btn btn-sm btn-info" style="background: #4e9e02; border-color: #fff"><i class="fa  fa-check-circle"></i></a>

                     <a href="<?php echo base_url ('Pengurus/update_deactive_user/'.$pengurus->user_id) ?> " class="btn btn-sm btn-info" style="background: #f44336; border-color: #fff"><i class="fa  fa fa-close"></i></a>
                   </td>
                 </tr>

                 <!--- modals -->
                 <div class="modal fade" id="ubah-user">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title"> Ubah data User</h4>
                        </div>
                        <div class="modal-body">
                          <form method ="post" action="<?php echo base_url('index.php/Pengurus/tambah_data'); ?>" role="form">
                            <div class="box-body">
                              <div class="form-group">
                                <label> Nama </label>
                                <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nama">
                              </div>
                              <div class="form-group">
                                <label> Email </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder=" Email">
                              </div>
                              <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label> Jenis User </label>
                                <!-- <select class="form-control" name="agama" id="agama" value="<?php echo set_value('agama');?>" required> -->
                                <select class="form-control" name="type" id="type">
                                  <option value="admin">Admin </option>
                                  <option value="pengurus "> Pengurus </option>

                                </select>

                <!--   <label for="exampleInputEmail1">Type</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="user_gender" id="user_gender">
                  <option value="Laki-laki"> Laki-laki </option>
                  <option value="Perempuan"> Perempuan </option>

                </select>
                <!-- <label for="exampleInputEmail1">Jenis Kelamin</label> -->

                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                -->
              </div>
              <div class="form-group">
                <label> Nomor Telepon</label>
                <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="Nomor Telepon ">
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Alamat ">
              </div>
              <div class="form-group">
                <label> Periode Pengurus </label>
                <select class="form-control" name="periode_id" id="periode_id">

                <!--  <?php foreach($companies as $company){ ?>
                    <option value="<?php echo $company->id_company ;?>"><?php echo $company->name; ?></option>
                    <?php } ?> -->
                    <?php  foreach ($periodes as $periode) {
                      ?>
                      <option value="<?php echo $periode->periode_id ;?>"><?php echo $periode->periode; ?> </option> 
                      <?php
                    } 
                    ?>
                    
                  </select>
                  
                  
                </div>
                <button type="submit" class="btn btn-info pull-right"> Submit </button>
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
    <!-- /.modal -->
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