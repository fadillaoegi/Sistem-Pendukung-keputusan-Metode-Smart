<?php
   include 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistem Pengambilan Keputusan SMART</title>


        <!-- Bootstrap 5 Core CSS -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <style>

        body{
            background-color: #2c3e50;
        }

    </style>


    <body>
        
        
        <div style="background-color: #2c3e50;" id="wrapper">

            <!-- Navigation -->
            <nav style="background-color: #2c3e50;"class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a style="color: #ecf0f1;" class="navbar-brand" href="">Fadil-UTS Sistem Pendukung Keputusan</a>
                    <img src="css/wtb.png" style="width: 70px; height: 70px; margin: auto;" alt="">
                    <img src="css/2-01.png" style="width: 70px; height: 70px; margin: auto;" alt="">
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--<ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul>-->

                <ul class="nav navbar-right navbar-top-links">

                    <li class="dropdown">
                        <a style="color: #ecf0f1;" class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> Administrator <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div style="background-color: #2c3e50;" class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="index.php" class=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="alternatif.php" class=""><i class="fa fa-file-o fa-fw"></i> Data Alternatif</a>
                            </li>
                            <li>
                                <a href="kriteria.php" class=""><i class="fa fa-file-o fa-fw"></i> Data Kriteria</a>
                            </li>
                            <li>
                                <a href="nilai.php" class=""><i class="fa fa-edit fa-fw"></i> Isi Nilai Alternatif</a>
                            </li>
                            <li>
                                <a href="spk.php" class=""><i class="fa fa-cogs fa-fw"></i> Proses SPK</a>
                            </li>
                            
                            <!-- <li>
                                <a href="pages/tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                            </li>   -->                                                     
                        </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
