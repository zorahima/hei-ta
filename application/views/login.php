<!DOCTYPE html>
<html lang="en">
<head>
	<title> HIMAKOMSI </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/user/images/icons/favicon.ico')	?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>assets/userfonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/vendor/animsition/css/animsition.min.css')  ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/vendor/select2/select2.min.css')	?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/vendor/daterangepicker/daterangepicker.css')  ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/util.css') ?> ">
	<link rel="stylesheet" type="text/css" href=" <?php echo base_url('assets/user/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="<?php echo site_url('Login/loginMe') ?>" method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login 
					</span>
					
					<div>
						<?php if($this->session->flashdata('auth')){ ?>
            			<div class="alert alert-danger alert-dismissible">
              				<p><?php echo $this->session->flashdata('auth') ;?></p>
            			</div>
          				<?php } ?>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id = "email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id ="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login">
							Login
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('<?php echo base_url(
				'assets/images/himakomsi.jpg') ?>');">
				</div>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/user/vendor/jquery/jquery-3.2.1.min.js')  ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/user/vendor/animsition/js/animsition.min.js')  ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/user/vendor/bootstrap/js/popper.js')  ?>"></script>
	<script src="<?php echo base_url('assets/user/vendor/bootstrap/js/bootstrap.min.js')  ?>"></script>
<!--=============================================================================================-->
	<script src="<?php echo base_url('assets/user/vendor/select2/select2.min.js')  ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/user/vendor/daterangepicker/moment.min.js')  ?>"></script>
	<script src="<?php echo base_url('assets/user/vendor/daterangepicker/daterangepicker.js')  ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/user/vendor/countdowntime/countdowntime.js')  ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/user/js/main.js')  ?>"></script>

</body>
</html>