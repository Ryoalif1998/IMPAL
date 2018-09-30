<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Pemasukan</title>

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
            <h2>Pemasukan</h2>
        </div>
    </div>
    <div class="blog-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts">
                        <div class="row">

                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="<?php echo base_url("assets/img/gr-img/graphic.jpg");?>" alt="">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="#" class="post-title">Pemasukan Perbulan</a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#">September 18, 2018</a>
                                    </div>
                                    <a href="#" class="btn academy-btn btn-sm mt-15">Edit</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Pagination Area Start -->
                    <div class="academy-pagination-area wow fadeInUp" data-wow-delay="400ms">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->
                        <div class="blog-post-search-widget mb-30">
                            <form action="#" method="post">
                                <input type="search" name="search" id="Search" placeholder="Cari Pemasukan">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="latest-blog-posts mb-30">
                            <h5>Pemasukan Terbaru</h5>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Pemasukan dari pemerintah</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Pemasukan dari pemerintah</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Pemasukan dari pemerintah</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                            <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex">
                                <div class="latest-blog-post-content">
                                    <a href="#" class="post-title">
                                        <h6>Pemasukan dari pemerintah</h6>
                                    </a>
                                    <a href="#" class="post-date">March 18, 2018</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->

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