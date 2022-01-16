<?php
include 'onek.php';
require_once 'nav.php';
?>

<div style="background-color: #2c3e50;" id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color: #ecf0f1;" class="page-header">Data Nilai Siswa</h1>
                <a class="btn btn-primary" href="kriteria.php">Tentukan kriteria dahulu</a><br><br>
            </div>

            <div class="col-lg-8">
                <form role="form" method="POST" action="">
                    <div class="form-group">
                        <input required type="text" name="nisn" class="form-control" placeholder="NISN">
                    </div>

                    <div class="form-group">
                        <input required type="text" name="nilaipel" class="form-control" placeholder="Nilai IPA">
                    </div>

                    <div class="form-group">
                        <input required type="text" name="nilaikep" class="form-control" placeholder="Nilai BAHASA">
                    </div>

                    <div class="form-group">
                        <input required type="text" name="nilaiak" class="form-control" placeholder="Nilai IPS">
                    </div>

                    <div class="form-group">
                        <input required type="text" name="nilaiSeni" class="form-control" placeholder="Nilai SENI">
                    </div>

                    <div class="form-group">
                        <input required type="text" name="nilaiOlah" class="form-control" placeholder="Nilai OLAHRAGA">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" class=" btn btn-success form-control" value="submit" placeholder="submit">
                    </div>
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $nisn    = $_POST['nisn'];
                    $nilaipel = $_POST['nilaipel'];
                    $nilaikep = $_POST['nilaikep'];
                    $nilaiak = $_POST['nilaiak'];
                    $nilaiSeni = $_POST['nilaiSeni'];
                    $nilaiOlah = $_POST['nilaiOlah'];
                    // var_dump($nama,$nisn,$kelamin,$kelas,$sekolah);
                    // die;
                    $sqlceknilai = "SELECT * FROM penilaian WHERE nisn=$nisn";
                    $sqlcek  = "SELECT * FROM siswa WHERE nisn=$nisn ";
                    $cekquery = mysqli_query($dbcon, $sqlcek);

                    if (mysqli_num_rows($cekquery) < 1) {
                        echo "<script>alert('data siswa tidak ditemukan')</script>";
                    } else {
                        if (mysqli_num_rows(mysqli_query($dbcon, $sqlceknilai)) < 1) {
                            $sql = "INSERT INTO penilaian (nisn,np,nk,na,ns,nol)VALUES ('$nisn','$nilaipel','$nilaikep','$nilaiak', '$nilaiSeni', '$nilaiOlah')";
                            $query = mysqli_query($dbcon, $sql);
                            if ($query) {
                                echo "<script>alert('berhasil memasukkan data penilaian')</script>";
                            } else {
                                echo "<script>alert('Gagal Memasukkan data')</script>";
                            }
                        } else {
                            echo "<script>alert('Duplikasi Data dengan NIM tersebut')</script>";
                        }
                    }
                }
                ?>
            </div>


            <!-- Menampilkan Tabel Data -->
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Alternatif
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Nilai IPA</th>
                                        <th>Nilai BAHASA</th>
                                        <th>Nilai IPS</th>
                                        <th>Nilai Seni</th>
                                        <th>Nilai Olahraga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- mengeluarkan data siswa dari database -->
                                    <?php
                                    $sql = "SELECT * FROM penilaian";
                                    $query = mysqli_query($dbcon, $sql);
                                    $n = 1;



                                    while ($siswa = mysqli_fetch_array($query)) {
                                        $nisn = $siswa['nisn'];
                                        $sqlnama = "SELECT nama FROM siswa WHERE nisn = $nisn";
                                        $namasiswa = mysqli_fetch_array(mysqli_query($dbcon, $sqlnama));

                                    ?>
                                        <tr>
                                            <td><?= $n ?></td>
                                            <td><?= $siswa['nisn'] ?></td>
                                            <td><?= $namasiswa['nama'] ?></td>
                                            <td class="text-right"><?= $siswa['np'] ?></td>
                                            <td class="text-right"><?= $siswa['nk'] ?></td>
                                            <td class="text-right"><?= $siswa['na'] ?></td>
                                            <td class="text-right"><?= $siswa['ns'] ?></td>
                                            <td class="text-right"><?= $siswa['nol'] ?></td>
                                            <td><a class="btn btn-danger" href="aksi/hapusna.php?name=<?= $siswa['id_penilaian']; ?>">hapus</a></td>
                                        </tr>
                                    <?php
                                        $n++;
                                    }
                                    ?>
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