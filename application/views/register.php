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
                  <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nama" required>
                </div>
                <div class="form-group">
                  <label> Email </label>
                  <input type="email" class="form-control" id="email" name="email" placeholder=" Email" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                <label> Jenis User </label>
                <!-- <select class="form-control" name="agama" id="agama" value="<?php echo set_value('agama');?>" required> -->
                  <select class="form-control" name="type" id="type" required>
                    <option value="admin">Admin </option>
                    <option value="pengurus "> Pengurus </option>

                  </select>

                <!--   <label for="exampleInputEmail1">Type</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                </div>

                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="user_gender" id="user_gender" required>
                    <option value="Laki-laki"> Laki-laki </option>
                    <option value="Perempuan"> Perempuan </option>

                  </select>
                  <!-- <label for="exampleInputEmail1">Jenis Kelamin</label> -->

                  <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                -->
              </div>
              <div class="form-group">
                <label> Nomor Telepon</label>
                <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="Nomor Telepon " required>
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Alamat " required>
              </div>
          
              <div class="form-group">
                <label> Periode Pengurus </label>
                <select class="form-control" name="periode_id" id="periode_id" required>

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

                     <div class="form-group">
                <label> Divisi Pengurus </label>
                <select class="form-control" name="divisi_id" id="divisi_id">

                     <?php  foreach ($divisis as $div) {
                    ?>
                   <option value="<?php echo $div->divisi_id ;?> " required><?php echo $div->divisi_name; ?> </option> 
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