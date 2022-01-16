<?php
include 'onek.php';
require_once 'nav.php';
?>

<div style="background-color: #2c3e50;" id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color: #ecf0f1;" class="page-header">HASIL SPK</h1>
            </div>
            <div class="col-lg-12">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="background-color: #ecf0f1;">No</th>
                            <th style="background-color: #ecf0f1;">NISN</th>
                            <th style="background-color: #ecf0f1;">Nama</th>
                            <th style="background-color: #ecf0f1;">Nilai IPA</th>
                            <th style="background-color: #ecf0f1;">Nilai BAHASA</th>
                            <th style="background-color: #ecf0f1;">Nilai IPS</th>
                            <th style="background-color: #ecf0f1;">Nilai Seni</th>
                            <th style="background-color: #ecf0f1;">Nilai Olahraga</th>
                            <th style="background-color: #ecf0f1;">Nilai Bobot Evaluasi</th>
                            <th style="background-color: #ecf0f1;">Pilihan JUrusan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $n = 1;

                        $sqljumlah = "SELECT SUM(bobot) FROM kriteria";
                        $queryjumlah = mysqli_query($dbcon, $sqljumlah);
                        $jumlah0 = mysqli_fetch_array($queryjumlah);
                        $jumlah = $jumlah0[0];

                        // bobot
                        $sqlkriteria = "SELECT bobot FROM kriteria";
                        $querykriteria = mysqli_query($dbcon, $sqlkriteria);
                        $bobot = [];
                        while ($bariskriteria = mysqli_fetch_array($querykriteria)) {
                            $bobot[] = $bariskriteria['bobot'];
                        }
                        // var_dump($bobot);die();
                        //end bobot

                        //nilai 
                        $sqlnilai = "SELECT * FROM penilaian";
                        $querynilai = mysqli_query($dbcon, $sqlnilai);



                        while ($barisnilai = mysqli_fetch_array($querynilai)) {
                            //nama
                            $nisn = $barisnilai['nisn'];
                            $sqlnama = "SELECT nama FROM siswa WHERE nisn = $nisn";
                            $namasiswa = mysqli_fetch_array(mysqli_query($dbcon, $sqlnama));
                            //nilai
                            $nilaiP     = $barisnilai['np'] *  ($bobot[1] / $jumlah);
                            $nilaiK     = $barisnilai['nk'] *  ($bobot[2] / $jumlah);
                            $nilaiA     = $barisnilai['na'] *  ($bobot[0] / $jumlah);
                            $nilaiSeni  = $barisnilai['ns'] *  ($bobot[3] / $jumlah);
                            $nilaiOla   = $barisnilai['nol'] * ($bobot[4] / $jumlah);

                            $nilaievaluasi = $nilaiP + $nilaiK + $nilaiA + $nilaiSeni + $nilaiOla;
                            if ($nilaievaluasi >= 70) {
                                $jurusan = "IPA";
                            } else {
                                $jurusan = "IPS";
                            }
                        ?>
                            <tr>
                                <td><?= $n ?></td>
                                <td><?= $barisnilai['nisn'] ?></td>
                                <td><?= $namasiswa['nama'] ?></td>
                                <td class="text-right"><?= $barisnilai['np'] ?></td>
                                <td class="text-right"><?= $barisnilai['nk'] ?></td>
                                <td class="text-right"><?= $barisnilai['na'] ?></td>
                                <td class="text-right"><?= $barisnilai['ns'] ?></td>
                                <td class="text-right"><?= $barisnilai['nol'] ?></td>
                                <td class="text-right"><?= round($nilaievaluasi, 2) ?></td>
                                <td><?= $jurusan ?></td>
                            </tr>
                        <?php
                            $n++;
                        }

                        ?>





                    </tbody>
                </table>
            </div>
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