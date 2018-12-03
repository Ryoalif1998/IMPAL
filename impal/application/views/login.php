<!DOCTYPE html>
<html lang="en">
<head>
	<title>University Accounting</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo3.png") ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css") ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css") ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/iconic/css/material-design-iconic-font.min.css") ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animate/animate.csss") ?> ">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/css-hamburgers/hamburgers.min.css") ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animsition/css/animsition.min.css") ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/select2/select2.min.css") ?> ">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.css") ?> ">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/util.css") ?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main.css") ?> ">
<!--===============================================================================================-->
</head>

<?php
if ($this->session->flashdata('alert')=='sukses_daftar'){
    echo "<script>alert('Sukses Daftar');</script>";
}else if ($this->session->flashdata('alert')=='gagal_login'){
    echo "<script>alert('Username / Password Salah!');</script>";
}
//disini tampilkan flashdata dari controller
?>

<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?php echo base_url("assets/images/bg-01.jpg") ?> ');"></div>

				

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

				<?php $atribut = array(
					'class' => 'login100-form validate-form'
				);?>
				<?php
				echo form_open("Akun_C/cek_login",$atribut);
				//            isi dengan form_open ke controller Akun_C dengan method cek_login

				?>
					
				<form class="login100-form validate-form">

					<span class="login100-form-title p-b-59">
						Sign in
					</span>



					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" required name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" required name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign in
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/jquery/jquery-3.2.1.min.js") ?> "></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/animsition/js/animsition.min.js") ?> "></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/bootstrap/js/popper.js") ?> "></script>
	<script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js") ?> "></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/select2/select2.min.js") ?> "></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/daterangepicker/moment.min.js") ?> "></script>
	<script src="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js") ?> "></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/countdowntime/countdowntime.js") ?> "></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/js/main.js") ?> "></script>

</body>
</html>