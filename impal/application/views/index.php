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
                <li  class="active">
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
                <li>
                    <a href="#" class="disable">
                        <i class="pe-7s-note"></i>
                        <p>Edit Pemasukan</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="disable">
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
                    <a class="navbar-brand" href="#">Data Pemasukan</a>
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
                                <h4 class="title">Daftar Data Pemasukan Universitas</h4>
                                <p class="category">Berdasarkan Penambahan Data Terakhir</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Universitas</th>
                                        <th>Fakultas</th>
                                        <th>Jurusan</th>
                                        <th>Tanggal</th>
                                        <th>Jumlah</th>
                                        <th>Asal</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php $i=0; foreach ($pemasukan as $key => $value) { $i++; ?>
                                        <tr>
                                            <td><?php echo $value['id_pemasukan'];?></td>
                                            <td><?php echo $value['nama_univ'];?></td>
                                            <td><?php echo $value['nama_fakultas'];?></td>
                                            <td><?php echo $value['nama_jurusan'];?></td>
                                            <td><?php echo $value['tanggal_pemasukan'];?></td>
                                            <td><?php echo $value['jumlah_pemasukan'];?></td>
                                            <td><?php echo $value['asal_pemasukan'];?></td>
                                            <td>
                                                <a type="button" class="btn btn-lg btn-warning pe-7s-note" href="<?php echo site_url('pemasukan/edit/'.$value['id_pemasukan']);?>"></a>
                                                <a type="button" class="btn btn-lg btn-danger pe-7s-trash" href="<?php echo site_url('pemasukan/delete/'.$value['id_pemasukan']);?>" onclick="return confirm('Konfirmasi Penghapusan Data')"></a>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>

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
