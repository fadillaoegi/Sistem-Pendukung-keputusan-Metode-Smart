-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 07:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spksmart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'fadil', 'fadil123');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(350) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(7, 'Nilai Seni', 40),
(8, 'Nilai IPA', 70),
(9, 'Nilai IPS', 60),
(10, 'Nilai Bahasa', 55),
(11, 'Nilai Olahraga', 65);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `np` int(11) NOT NULL,
  `nk` int(11) NOT NULL,
  `na` int(11) NOT NULL,
  `ns` int(11) NOT NULL,
  `nol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `nisn`, `np`, `nk`, `na`, `ns`, `nol`) VALUES
(7, '1630511', 90, 90, 90, 50, 67),
(8, '19410100076', 70, 55, 45, 60, 70),
(9, '19410100070', 85, 85, 70, 66, 90),
(10, '19410100071', 60, 60, 60, 60, 60),
(11, '19410100072', 70, 72, 83, 44, 70),
(12, '19410100073', 77, 66, 55, 88, 88),
(13, '19410100074', 45, 67, 98, 65, 57),
(14, '19410100075', 78, 77, 67, 95, 44),
(15, '19410100077', 70, 60, 80, 50, 20),
(16, '19410100078', 56, 67, 78, 89, 78),
(17, '19410100079', 77, 65, 56, 89, 87),
(18, '19410100080', 80, 80, 80, 87, 33),
(19, '19410100081', 34, 55, 67, 56, 80),
(20, '19410100082', 56, 70, 60, 62, 70),
(21, '19410100083', 76, 86, 78, 56, 65);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nama`, `kelamin`, `kelas`, `siswa`) VALUES
(14, '1630511', 'Ampatuna', 'Perempuan', '9', 'SMPN 1 Nagrak'),
(15, '19410100076', 'Fadil', 'Laki-Laki', '9', 'MTsN 1 Wawotobi'),
(24, '19410100070', 'Nesa', 'Perempuan', '9', 'MTsN 1 Wawotobi'),
(25, '19410100071', 'Konro', 'Laki-Laki', '9', 'MTsN 1 Wawotobi'),
(26, '19410100072', 'Coto', 'Perempuan', '9', 'MTsN 2 Konawe'),
(27, '19410100073', 'pikacu', 'Laki-Laki', '9', 'SMP 90 Jakarta'),
(28, '19410100074', 'koko', 'Laki-Laki', '9', 'SMPN 40 Sumatera'),
(29, '19410100075', 'kiki', 'Perempuan', '9', 'SMPN 70 Rolak'),
(30, '19410100077', 'mimi', 'Perempuan', '9', 'SMPN 1 Jepara'),
(31, '19410100078', 'kiko', 'Laki-Laki', '9', 'SMPN 1 Unaaha'),
(32, '19410100079', 'lingling', 'Perempuan', '9', 'SMP Muhammaddiyah Surabaya'),
(33, '19410100080', 'jefri', 'Laki-Laki', '9', 'SMPN 1 Minang Kabau'),
(34, '19410100081', 'nikol', 'Perempuan', '9', 'SMPN 2 Kepulauan Riau'),
(35, '19410100082', 'Bembi', 'Laki-Laki', '9', 'SMPN 3 Jakarta Pusat'),
(36, '19410100083', 'Joko', 'Perempuan', '9', 'SMPN 5 Suramadu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nisn` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
