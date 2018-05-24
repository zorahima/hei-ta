<?php
$this->load->view('head_admin');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Profil</h1>
	</section>

	<?php 

	/*foreach ($profile as $data)*/ {
# code...
		?>

		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-md-4">
					<!-- Profile Image -->
					<div class="box box-warning">
						<div class="box-body box-profile">
							<img class="profile-user-img img-responsive img-circle" src="" alt="User profile picture">

							<h3 class="profile-username text-center"> </h3>

							<!-- <?php if($data->nama_roles=='klien') {
								?>
								<p class="text-muted text-center">Klien</p>
								<?php }?> -->
							</div>
							<!-- /.box-body -->
						</div>

						<!-- About Me Box -->
						<div class="box box-solid">
							<div class="box-header with-border">
								<h3 class="box-title">Tentang Saya</h3>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<strong><i class="fa fa-book margin-r-5"></i> Nama</strong>

								<p class="text-muted"> </p>

								<hr>

								<strong><i class="fa fa-intersex margin-r-5"></i>Jenis Kelamin</strong>

								<p class="text-muted"> </p>

								<hr>

								<strong><i class="fa fa-pencil margin-r-5"></i> Email</strong>

								<p class="text-muted"> </p>

								<hr>

								<strong><i class="fa fa-map-marker margin-r-5"></i> No Telfon</strong>

								<p class="text-muted"> </p>

								<hr>

								<strong><i class="fa fa-calendar"></i> Periode Kepengurusan </strong>

								<p class="text-muted"> </p>

							</div>
							<!-- /.box-body -->
						</div>
						<!-- /.box-warning-->
					</div>
					<!-- /.col-md-4 -->
					<!-- <?php } ?>
				-->
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
									<form action="<?php echo site_url('Klien_profile/ubahKlien') ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
										<input type="hidden" class="form-control" name="id_users" value=" ">

										<div class="form-group">
											<label for="inputName" class="col-sm-2 control-label">Nama</label>

											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputName" name="nama_users" value=" ">
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-2 control-label">Jenis Kelamin</label>

											<div class="col-sm-10"> 
												<select class="form-control" name="jenis_kelamin">
													<option value="Pria">Pria</option>
													<option value="Wanita">Wanita</option>
												</select>
											</div>
										</div>

										<div class="form-group">
											<label for="inputEmail" class="col-sm-2 control-label">Email</label>

											<div class="col-sm-10">
												<input type="email" class="form-control" name="email" value="">
											</div>
										</div>

										<div class="form-group">
											<label for="inputTelp" class="col-sm-2 control-label">No Telpon</label>

											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputName" name="no_telpon" value="">
											</div>
										</div>

										<div class="form-group">
											<label for="inputTelp" class="col-sm-2 control-label">Instansi</label>

											<div class="col-sm-10">
												<input type="text" class="form-control" id="inputName" name="instansi" value="">
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

								
								<div  class=" active tab-pane" id="activity">
									<!-- Post -->
									<div class="post">
										<div class="user-block">
											<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
											<span class="username">
												<a href="#">Jonathan Burke Jr.</a>
												<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
											</span>
											<span class="description">Shared publicly - 7:30 PM today</span>
										</div>
										<!-- /.user-block -->
										<p>
											Lorem ipsum represents a long-held tradition for designers,
											typographers and the like. Some people hate it and argue for
											its demise, but others ignore the hate as they create awesome
											tools to help create filler text for everyone from bacon lovers
											to Charlie Sheen fans.
										</p>
										<ul class="list-inline">
											<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
											<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
											</li>
											<li class="pull-right">
												<a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
													(5)</a></li>
												</ul>

												<input class="form-control input-sm" type="text" placeholder="Type a comment">
											</div>
											<!-- /.post -->

										</div>

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

						</div>
						<!-- /.row -->
					</section>
					<!-- /.content -->
				</div>
				<!-- /.content-wrapper -->


				<?php
				$this->load->view('foot_admin');
				?>