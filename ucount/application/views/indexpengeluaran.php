<!DOCTYPE html>
<html lang="en">

<head>
    <title>IMPAL</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo base_url("assets/img/login/logo3.png");?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url('assets/style.css');?>">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <a href="<?php echo site_url('Cberanda');?>"><img src="<?php echo base_url("assets/img/core-img/logo.png");?>" alt=""></a>
                            </div>
                            <div class="login-content">
                                <a href="<?php echo site_url('Akun_C/logout') ?>">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="<?php echo site_url('Cberanda');?>">Beranda</a></li>
                                    <li><a href="#">Transaksi</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo site_url('Cpemasukan');?>">Pemasukan</a></li>
                                            <li><a href="<?php echo site_url('Cpengeluaran');?>">Pengeluaran</a></li>
                                            <li><a href="<?php echo site_url('Clihatdata');?>">Lihat Data</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo site_url('Ctentangkami');?>">Tentang Kami</a></li>
                                    <li><a href="<?php echo site_url('Ckontak');?>">Kontak</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                            <div class="calling-info">
                                <div class="call-center">
                                    <a><img src="<?php echo base_url("assets/img/core-img/logo2.png");?>" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row" style="margin-top: 80px">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <a href="<?php echo site_url('pengeluaran/add'); ?>" class="btn btn-primary" role="button">Tambah Data</a>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    			
	<div class="container"></div>
		<div class="row">   	
			<div class="col-md-2">
			</div>
			<div class="col-md-8" style="margin-top: 30px;margin-bottom: 50px">
	    		<p><?php echo $this->session->flashdata('msg'); ?></p>
	    		<table class="table">
				  	<thead>
					    <tr>
					    	<th>ID Pengeluaran</th>
					      	<th>Nama Universitas</th>
					      	<th>Nama Fakultas</th>
					      	<th>Nama Jurusan</th>
					      	<th>Tanggal Pengeluaran</th>
					      	<th>Jumlah Pengeluaran</th>
					      	<th>Asal Pengeluaran</th>
                            <th>Aksi</th>
					    </tr>
				  	</thead>
				  	<tbody>
				  		<?php foreach ($pengeluaran as $key => $value) { ?>
				    	<tr>
				    		<th><?php echo $value['id_pengeluaran'];?></th>
					      	<td><?php echo $value['nama_univ'];?></td>
					      	<td><?php echo $value['nama_fakultas'];?></td>
					      	<td><?php echo $value['nama_jurusan'];?></td>
					      	<td><?php echo $value['tanggal_pengeluaran'];?></td>
					      	<td><?php echo $value['jumlah_pengeluaran'];?></td>
					      	<td><?php echo $value['asal_pengeluaran'];?></td>
					      	<td>
					      		<a type="button" class="btn btn-lg btn-warning fa fa-edit" href="<?php echo site_url('pengeluaran/edit/'.$value['id_pengeluaran']);?>"></a>
					      		<a type="button" class="btn btn-lg btn-danger fa fa-trash" href="<?php echo site_url('pengeluaran/delete/'.$value['id_pengeluaran']);?>" onclick="return confirm('Are you sure?')"></a>
					      	</td>
				    	</tr>
				    	<?php } ?>
				  </tbody>
				</table>
	    	</div>
	  	</div>


	  <footer class="footer-area">
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">    
                                <a href="#"><img src="<?php echo base_url("assets/img/core-img/logo2.png");?>" alt=""></a>
                            </div>
                            <p>Disini di tulis apa itu u count dan tentang u count.</p>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Contact</h6>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-placeholder"></i>
                                <p>Jl. Telekomunikasi, Jl. Terusan Buah Batu No.01, Sukapura, Dayeuhkolot, Bandung, Jawa Barat 40257</p>
                            </div>
                            <div class="single-contact d-flex mb-30">
                                <i class="icon-telephone-1"></i>
                                <p>+62 (22) 7564 108 </p>
                            </div>
                            <div class="single-contact d-flex">
                                <i class="icon-contract"></i>
                                <p>info@telkomuniversity.ac.id</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url('assets/js/jquery/jquery-2.2.4.min.js');?>"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url('assets/js/bootstrap/popper.min.js');?>"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url('assets/js/bootstrap/bootstrap.min.js');?>"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url('assets/js/plugins/plugins.js');?>"></script>
    <!-- Active js -->
    <script src="<?php echo base_url('assets/js/active.js');?>"></script>
</body>

</html>
	