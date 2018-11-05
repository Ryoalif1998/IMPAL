<!DOCTYPE html>
<html lang="en">
<head>
    <title>IMPAL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" href="<?php echo base_url("assets/img/login/logo3.png");?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css");?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css");?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/iconic/css/material-design-iconic-font.min.css");?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animate/animate.css");?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/css-hamburgers/hamburgers.min.css");?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animsition/css/animsition.min.css");?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/select2/select2.min.css");?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.css");?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/util.css");?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main.css");?>">
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

<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('<?php echo base_url("assets/img/login/bg-01.jpg");?>');">
        <div class="wrap-login100">
            <?php $atribut = array(
                'class' => 'login100-form validate-form p-l-55 p-r-55 p-t-178'
            );?>
            <?php
            echo form_open("Akun_C/cek_login",$atribut);
            //            isi dengan form_open ke controller Akun_C dengan method cek_login

            ?>
    			<span class="login100-form-logo" style="margin-top: -200px">
                    <img src="<?php echo base_url("assets/img/login/logo3.png");?>">
                </span>

                <span class="login100-form-title p-b-34 p-t-27">
                    Log in
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                    <input class="input100" type="text" required name="username" placeholder="Username">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" type="password" required name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                </div>

                <br>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="flex-col-c p-t-170 p-b-40" style="margin-top: -100px">
    				<span class="txt1 p-b-9">
    					Belum Punya Akun?
    					</span>

                    <a href="<?php echo site_url('Akun_C/daftar_view') ?>" class="txt3" style="margin-bottom: -100px">
                        Daftar Sekarang
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!--===============================================================================================-->
    <script src="<?php echo base_url("assets/vendor/jquery/jquery-3.2.1.min.js");?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url("assets/vendor/animsition/js/animsition.min.js");?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/popper.js");?>"></script>
    <script src="<?php echo base_url("assets/vendor/bootstrap/js/bootstrap.min.js");?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url("assets/vendor/select2/select2.min.js");?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url("assets/vendor/daterangepicker/moment.min.js");?>"></script>
    <script src="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js");?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url("assets/vendor/countdowntime/countdowntime.js");?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url("assets/js/main.js");?>"></script>

</body>
</html>