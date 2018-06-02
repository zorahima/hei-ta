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

							<h3 class="profile-username text-center"> <!-- <?php echo $data->nama_users ?> --> </h3>

							<!-- <?php if($data->nama_roles=='klien') {
								?>
								<p class="text-muted text-center">Klien</p>
								<?php }?> -->
							</div>
							<!-- /.box-body -->
							<div class="box-footer no-padding">
								<ul class="nav nav-stacked">
									<li><a href="#">Activity <span class="pull-right badge bg-blue">31</span></a></li>
									<li><a href="#">Present <span class="pull-right badge bg-aqua">5</span></a></li>
									<li><a href="#">Absent <span class="pull-right badge bg-green">12</span></a></li>
									<li><a href="#">Todo Finish <span class="pull-right badge bg-red">842</span></a></li>
								</ul>
							</div>
						</div>

						<!-- About Me Box -->
						<div class="box box-solid">
							<div class="box-header with-border">
								<?php $i=1; foreach ($bio as $u) {?>
								<h3 class="box-title">Tentang Saya</h3>
								<button type="button" class="btn btn-sm btn-info pull-right" data-toggle="modal" data-target="#ubah_bio<?php echo $u->user_id ?>" style="background:#1a75ff; border-color:#fff"><i class="fa fa-pencil"></i>
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
									<a href="#activity" data-toggle="tab">Activity </a></li>
									<li><a href="#ubahData" data-toggle="tab"> Ubah Data </a></li>
									<li><a href="#ubahPassword" data-toggle="tab">Ubah Password</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane" id="ubahData">
										<form action="<?php echo site_url('') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">

										</form>
									</div> 

									<?php $i=1; foreach ($activity as $b) {?>
									<div  class=" active tab-pane" id="activity">
										<!-- Post -->
										<div class="post">
											<div class="user-block">
												<img class="img-circle img-bordered-sm" src="<?php echo base_url('assets/avatar/avatar9.png') ?>" alt="user image">
												<span class="username">
													<a href="#"><?php echo $b->user_name ?></a>
													<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
												</span>

											</div>
											<!-- /.user-block -->
											<h4> <?php echo $b->activity_name ?></h4>
											<p>
												<?php echo $b->activity_desc ?>
											</p>
											<div>
												<?php echo $b->activity_loc ?>
												<?php echo $b->activity_date ?>
												<?php echo $b->activity_times ?>

											</div>
										</div>
										<!-- /.post -->

									</div>
									<?php $i++; }  ?>

									<div class="tab-pane" id="ubahPassword">
										<form class="form-horizontal">
											<div class="box-body">
												<div class="form-group">
													<div class="col-sm-3">
														<label for="inputName">Password Baru</label>
													</div>

													<div class="col-sm-12">
														<input type="email" class="form-control" id="inputName" placeholder="Masukkan Password Baru">
													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-3">
														<label for="inputEmail">Re-type Password</label>
													</div>

													<div class="col-sm-12">
														<input type="email" class="form-control" id="inputEmail" placeholder="Re-type Password">
													</div>
												</div>

												<div class="form-group">
													<div class="col-sm-offset-10 col-sm-12">
														<input type="submit" class="btn btn-success" value="Simpan">
													</div>
												</div>
											</div>
										</form>
									</div>
									<!-- /.tab-pane -->
								</div>
								<!-- /.tab-content -->
							</div>
							<!-- /.nav-tabs-custom -->
						</div>
						<!-- /.col -->
						<!-- /.TAB PANE END -->

						<div class="modal fade" id="ubah_bio<?php echo $u->user_id ?>">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title"> Ubah data diri </h4>
										</div>
										<div class="modal-body">
											<form class="form-horizontal" method ="post"  id="formubahbio<?php echo $u->user_id ?>" action="<?php echo base_url('Todo/updateTodo'); ?>" role="form">
												<input type="hidden" name='proker_id' id='proker_id'>

												<div class="box-body">
													<label class="col-sm-2 control-label">Nama </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nama" value="<?php echo $u->user_name ?>" >
														
													</div>
												</div>

												<div class="box-body">
													<label class="col-sm-2 control-label">Email </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="todo_name" name="todo_name" placeholder="Email" value="<?php echo $u->email ?>" >
														
													</div>
												</div>

												<div class="form-group">
													<label class="col-sm-2 control-label">Jenis Kelamin</label>

													<div class="col-sm-10"> 
														<select class="form-control" name="jenis_kelamin">
														<option value="laki-laki" <?php if($u->user_gender == "laki-laki") {echo "selected=selected";} ?>>Laki-laki</option>
															<option value="perempuan" <?php if($u->user_gender == "perempuan") {echo "selected=selected";} ?>>Perempuan</option>
														</select>
													</div>
												</div>

												<div class="box-body">
													<label class="col-sm-2 control-label"> No Telepon </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="No HP" value="<?php echo $u->user_phone ?>" >
														
													</div>
												</div>

												<div class="box-body">
													<label class="col-sm-2 control-label"> Periode Kepengurusan </label>
													<div class="col-sm-10">
														<input type="text" class="form-control" id="periode_id" name="periode_id" placeholder="Periode Kepengurusan" value="<?php echo $u->periode ?>"  disabled >
														
													</div>
												</div>

													<div class="form-group">
											<label class="col-sm-2 control-label">Upload Foto</label>

											<div class="col-sm-10">
												<input type="file" name="foto" value="">
											</div>
										</div>

										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-10">
												<input type="submit" class="btn btn-success pull-right" value="Simpan">
											</div>
										</div>
									</form>



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




					</div>


					<!-- /.row -->
				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->


			<?php
			$this->load->view('foot_admin');
			?>