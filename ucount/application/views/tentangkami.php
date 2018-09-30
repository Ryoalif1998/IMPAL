<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Academy - Education Course Template</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url("assets/img/login/logo3.png");?>">

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
                                <a href="#">Keluar</a>
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
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url('../assets/img/bg-img/breadcumb.jpg);">
        <div class="bradcumbContent">
            <h2>Tentang Kami</h2>
        </div>
    </div>
    <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Kami Adalah U-Count</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <p>wkwkwkwkwkwkwkwkwkwkwkwkwkwland</p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>wkwkwkwkwkwkwkwkwkwkwkwkwkwland</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="img/bg-img/bg-2.jpg" alt="">
                        <img src="img/bg-img/bg-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->

    <!-- ##### Team Area Start ##### -->
    <section class="teachers-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                        <h3>Pengurus di sini</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Teachers -->
                <div class="col-4">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="400ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="<?php echo base_url("assets/img/bg-img/aup.jpg");?>" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5 style="font-weight: 600;">Aup Hakim Nurzaman</h5>
                            <span style="font-weight: 600;font-size: large;">1301164395</span>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-4">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="<?php echo base_url("assets/img/bg-img/ryo.jpg");?>" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5 style="font-weight: 600;">Ryo Alif Ramadhan</h5>
                            <span style="font-weight: 600;font-size: large;">1301164351</span>
                        </div>
                    </div>
                </div>
                <!-- Single Teachers -->
                <div class="col-4">
                    <div class="single-teachers-area text-center mb-100 wow fadeInUp" data-wow-delay="600ms">
                        <!-- Thumbnail -->
                        <div class="teachers-thumbnail">
                            <img src="<?php echo base_url("assets/img/bg-img/pradit.jpg");?>" alt="">
                        </div>
                        <!-- Meta Info -->
                        <div class="teachers-info mt-30">
                            <h5 style="font-weight: 600;">Praditya Rizki Nugraha</h5>
                            <span style="font-weight: 600;font-size: large;">1301164288</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Features Area Start ##### -->

    <!-- ##### Footer Area Start ##### -->
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