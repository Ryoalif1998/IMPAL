<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="<?php echo base_url("image/png") ?> " href="<?php echo base_url("assets/img/logo3.png") ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>University Accounting</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url("assets/css/bootstrap.min.css") ?> " rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url("assets/css/animate.min.css") ?> " rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url("assets/css/light-bootstrap-dashboard.css?v=1.4.0") ?> " rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url("assets/css/demo.css") ?> " rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url("assets/css/pe-icon-7-stroke.css") ?> " rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url("assets/img/sidebar-5.jpg") ?> ">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    University Accounting
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo site_url('CBeranda') ?>">
                        <i class="pe-7s-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('pemasukan') ?>">
                        <i class="pe-7s-graph1"></i>
                        <p>Data Pemasukan</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('pengeluaran') ?>">
                        <i class="pe-7s-graph1"></i>
                        <p>Data Pengeluaran</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('pemasukan/add') ?>">
                        <i class="pe-7s-upload"></i>
                        <p>Tambah Pemasukan</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('pengeluaran/add') ?>">
                        <i class="pe-7s-upload"></i>
                        <p>Tambah Pengeluaran</p>
                    </a>
                </li>
                <li class="active">
                    <a href="#">
                        <i class="pe-7s-note"></i>
                        <p>Edit Pemasukan</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-note"></i>
                        <p>Edit Pengeluaran</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Edit Pemasukan</a>
                </div>
                <div class="collapse navbar-collapse">
                    

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo site_url('Akun_C/logout') ?>">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">Edit Data Pemasukan Universitas</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width" style="margin-right: 15px;margin-left: 15px">
                                    
                                    <tbody>
                                        <form method="POST" action="<?php echo site_url('pemasukan/updateProcess/'.$pemasukan['id_pemasukan']);?>">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Universitas</label>
                                                <select name="nama_univ" class="form-control">
                                                    <option value="<?php echo $pemasukan['nama_univ']; ?>"><?php echo $pemasukan['nama_univ']; ?></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Fakultas</label>
                                                <select name="nama_fakultas" class="form-control">
                                                    <option value="<?php echo $pemasukan['nama_fakultas']; ?>"><?php echo $pemasukan['nama_fakultas']; ?></option>
                                                    <option value="Fakultas Informatika">Fakultas Informatika</option>
                                                    <option value="Fakultas Elektro">Fakultas Elektro</option>
                                                    <option value="Fakultas Bisnis">Fakultas Bisnis</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Nama Jurusan</label>
                                                <select name="nama_jurusan" class="form-control">
                                                    <option value="<?php echo $pemasukan['nama_jurusan']; ?>"><?php echo $pemasukan['nama_jurusan']; ?></option>
                                                    <option value="Jurusan A">Jurusan A</option>
                                                    <option value="Jurusan B">Jurusan B</option>
                                                    <option value="Jurusan C">Jurusan C</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Tanggal Pemasukan</label>
                                                <input type="date" class="form-control" name="tanggal_pemasukan" value="<?php echo $pemasukan['tanggal_pemasukan']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jumlah Pemasukan</label>
                                                <input type="text" class="form-control" name="jumlah_pemasukan" value="<?php echo $pemasukan['jumlah_pemasukan']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Asal Pemasukan</label>
                                                <select name="asal_pemasukan" class="form-control">
                                                    <option value="<?php echo $pemasukan['asal_pemasukan']; ?>"><?php echo $pemasukan['asal_pemasukan']; ?></option>
                                                    <option value="Pembayaran BPP">Pembayaran BPP</option>
                                                    <option value="Sponsorship">Sponsorship</option>
                                                    <option value="Uang Gedung">Uang Gedung</option>
                                                </select>
                                            </div>
                                                    <button type="submit" class="btn btn-primary" style="margin-bottom: 50px">Submit</button>
                                        </form>

                                    </tbody>

                            </div>
                        </div>
                    </div>

                    
                </div>
         
            </div>
        </div>




        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Kelompok IMPAL</a>, Universitas Telkom IF 40-04
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url("assets/js/jquery.3.2.1.min.js") ?> " type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?> " type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="<?php echo base_url("assets/js/chartist.min.js") ?> "></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url("assets/js/bootstrap-notify.js") ?> "></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?php echo base_url("assets/js/light-bootstrap-dashboard.js?v=1.4.0") ?> "></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url("assets/js/demo.js") ?> "></script>

    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            

        });
    </script>

</html>
