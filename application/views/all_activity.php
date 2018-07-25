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
    <a href ="<?php echo site_url('Activity/tambah') ?>"  >
      <button type="submit"  class="btn btn-info pull-right"> Tambah Kegiatan </button>
    </a>
      <button id="print_data"  class="btn btn-success pull-right"> Print Data</button>
    <h1>
     Semua Kegiatan
   </h1>

   	      <div>
						<?php if($this->session->flashdata('success')){ ?>
            			<div class="alert alert-success alert-dismissible">
              				<p><?php echo $this->session->flashdata('success') ;?></p>
            			</div>
          				<?php } ?>
					</div>


 </section>


 <!-- Main content -->
 <section class="content">


  <!-- Default box -->
  
  <div class="box">


    <div class="box-header with-border">

       <table id="tabel-activity" class="table table-bordered table-hover">
              <!--   <?php var_dump($proker); ?> -->
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Kegiatan </th>
                  <th>Deskripsi Kegiatan </th>
                  <th> Tanggal Kegiatan </th>
                  <th> Waktu Kegiatan </th>
                  <th>Lokasi Kegiatan </th>
                  <th> Status </th>
                  

                </tr> 
                <?php $i=1; foreach ($activity as $act) {?>  
                <tr>
                 <td> <?php echo $i; ?> </td>
                 <td> <?php echo $act->activity_name ?> </td>
                  <td> <?php echo $act->activity_desc ?> </td>
                  <td> <?php echo $act->activity_date ?> </td>
                  <td> <?php echo $act->activity_times ?> </td>
                  <td> <?php echo $act->activity_loc ?> </td>
                  <td>  </td>
             
                </tr>
            

         
        
          <?php $i++; }  ?>
        </tfoot>
      </table>

        <!-- /.user-block -->
        
       
       
        
        
<!--         <ul class="list-inline">
          <li><a data-toggle="modal" class="link-black text-sm"  data-target="#tampil_invitation<?php echo $activity->activity_id ?>" ><i class="fa fa-user-circle"></i> 15 People </a></li>

                  
                </ul> -->
              </div>

   

              </div>
 
        
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#print_data').on('click', function(){
      window.print()
    })
  })
</script>>
<?php
$this->load->view('foot_admin');
?>