<?php
    // include 'cek.php';
    include 'onek.php';
    require_once 'nav.php';
?>
            
            <div style="background-color: #2c3e50;" id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color: #ecf0f1;" class="page-header"><b><h1>Spk Pemilihan Jurusan SMA Metode Smart</h1></b></h1>
                        </div>
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Admin
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="alert alert-info">
                                        Selamat datang, <?=$_SESSION['username']?>. Ini adalah sebuah aplikasi berbasis web pengambilan metode keputusan pemilihan jurusan SMA dengan metode SMART (Simple Multi Attribute Rating Technique). <a href="alternatif.php" class="alert-link">masukkan data siswa/alternatif</a>
                                    </div>
                                </div>
                                <!-- .panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>                        <!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                        <center><img class="img-fluid" src="css/2-01.png" width="20%"><br></center>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

<?php 
    require_once 'foot.php';
 ?>