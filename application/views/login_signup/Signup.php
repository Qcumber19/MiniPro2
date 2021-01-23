<!DOCTYPE html>
<html lang="en">
<head>
	<title>STMIK Bandung - Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('Login_Assets/images/icons/favicon.ico/')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/fonts/iconic/css/material-design-iconic-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Login_Assets/css/main.css')?>">
<!--===============================================================================================-->
</head>
<body>
<?php
  $data=$this->session->flashdata('sukses');
  if($data!=""){ ?>
  <div id="notifikasi" class="alert alert-success"><strong>Sukses! </strong> <?=$data;?></div>
  <?php } ?>

  <?php 
  $data2=$this->session->flashdata('error');
  if($data2!=""){ ?>
  <div id="notifikasi" class="alert alert-danger"><strong> Error! </strong> <?=$data2;?></div>
  <?php } ?>
<?php echo validation_errors(); ?>  
<?php echo form_open('login/signup');?> 
	<div class="container-login100" style="background-image: <?php echo base_url('Login_Assets/images/bg-01.jpg');?>">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post">
				<?php echo $this->session->flashdata('msg');?>
				<span class="login100-form-title p-b-37">
					Sign Up
				</span>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="NIM">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="fname" placeholder="Full Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit">
						Sign Up
					</button>
				</div>
				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						Already have an account?
					</span>
				</div>
				<div class="text-center">
					<a href= "<?php echo site_url('login/index') ?>" class="txt2 hov1">
						Sign In
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="Login_Assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_Assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_Assets/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_Assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_Assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_Assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login_Assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login_Assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="Login_Assets/js/main.js"></script>

</body>
</html>