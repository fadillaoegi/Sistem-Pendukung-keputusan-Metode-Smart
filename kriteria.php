<?php
include 'onek.php';
require_once 'nav.php';
?>

<div style="background-color: #2c3e50;" id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color: #ecf0f1;" class="page-header">Data Kriteria</h1>
                <a class="btn btn-primary" href="alternatif.php">Masukkan data siswa/alternatif</a> | <a class="btn btn-primary" href="spk.php">Proses perhitungan</a><br><br>
            </div>

            <div class="col-lg-8">
                <form role="form" action="" method="POST">
                    <div class="form-group">
                        <input type="text" required name="kriteria" class="form-control" placeholder="NAMA KRITERIA">
                    </div>
                    <div class="form-group">
                        <input type="text" required name="bobot" class="form-control" placeholder="BOBOT">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-success form-control" value="submit" placeholder="submit">
                    </div>
                </form>

                <!-- insert kriteria -->
                <?php
                if (isset($_POST['submit'])) {
                    $kriteria   = $_POST['kriteria'];
                    $bobot   = $_POST['bobot'];
                    // var_dump($nama,$nisn,$kelamin,$kelas,$sekolah);
                    // die;

                    //sql insert to siswa
                    $sql = "INSERT INTO kriteria (nama_kriteria,bobot )VALUES ('$kriteria','$bobot')";
                    $query = mysqli_query($dbcon, $sql);
                    if ($query) {
                        echo "<script>alert('berhasil memasukkan data Alternatif')</script>";
                    } else {
                        echo "<script>alert('Gagal Memasukkan data')</script>";
                    }
                } else {
                }
                ?>
                <!-- end kriteria -->


            </div>

            <!-- Tabel Data -->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Kriteria
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kriteria</th>
                                        <th>Bobot Kriteria</th>
                                        <th>Bobot Relatif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- mengeluarkan data siswa dari database -->
                                    <?php

                                    $sqljumlah = "SELECT SUM(bobot) FROM kriteria";
                                    $queryjumlah = mysqli_query($dbcon, $sqljumlah);
                                    $jumlah0 = mysqli_fetch_array($queryjumlah);
                                    $jumlah = $jumlah0[0];



                                    $sql = "SELECT * FROM kriteria";
                                    $query = mysqli_query($dbcon, $sql);
                                    $n = 1;
                                    while ($barisbobot = mysqli_fetch_assoc($query)) {

                                    ?>
                                        <tr>
                                            <td><?= $n ?></td>
                                            <td><?= $barisbobot['nama_kriteria'] ?></td>
                                            <td class="text-right"><?= $barisbobot['bobot'] ?></td>
                                            <td class="text-right"><?= round($barisbobot['bobot'] / $jumlah, 4) ?></td>

                                        </tr>
                                    <?php
                                        $n++;
                                    }
                                    ?>
                                    <tr class="inverse">
                                        <td colspan="2">Total</td>
                                        <td class="text-right"><?= $jumlah ?></td>
                                        <td class="text-right"> </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Tabel Data -->

            <!-- /.col-lg-12 -->
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