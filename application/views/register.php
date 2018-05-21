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

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Tambahkan Pengurus </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method ="post" action="<?php echo base_url('/Pengurus/tambah_data'); ?>" enctype="multipart/form-data" >
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
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="user_picture" name="user_picture">
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
<?php
$this->load->view('foot_admin');
?>