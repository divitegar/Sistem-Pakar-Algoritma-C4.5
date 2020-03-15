-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 03:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartmom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE `datapasien` (
  `kd_datapasien` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `umur_ibu` varchar(50) NOT NULL,
  `agama_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `telepon_ibu` varchar(50) NOT NULL,
  `pertama_haid` varchar(50) NOT NULL,
  `tafsiran_persalinan` varchar(50) NOT NULL,
  `hamil_direncanakan` varchar(50) NOT NULL,
  `kontrol` varchar(50) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `gol_darah` varchar(50) NOT NULL,
  `lila` varchar(50) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `berat_badan` varchar(50) NOT NULL,
  `riwayat_penyakit` varchar(50) NOT NULL,
  `riwayat_alergi` varchar(50) NOT NULL,
  `riwayat_kontrasepsi` varchar(50) NOT NULL,
  `nama_bapak` varchar(50) NOT NULL,
  `umur_bapak` varchar(50) NOT NULL,
  `agama_bapak` varchar(50) NOT NULL,
  `pendidikan_bapak` varchar(50) NOT NULL,
  `pekerjaan_bapak` varchar(50) NOT NULL,
  `alamat_bapak` varchar(50) NOT NULL,
  `telepon_bapak` varchar(50) NOT NULL,
  `riwayat_perkawinan` varchar(50) NOT NULL,
  `lama_perkawinan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hasildiagnosa`
--

CREATE TABLE `hasildiagnosa` (
  `kd_hasil` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tds` varchar(50) NOT NULL,
  `tdd` varchar(50) NOT NULL,
  `kbb` varchar(50) NOT NULL,
  `uk` varchar(50) NOT NULL,
  `ui` varchar(50) NOT NULL,
  `edema` varchar(50) NOT NULL,
  `proteinuria` varchar(50) NOT NULL,
  `hasil_diagnosa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasildiagnosa`
--

INSERT INTO `hasildiagnosa` (`kd_hasil`, `nama`, `no_hp`, `tds`, `tdd`, `kbb`, `uk`, `ui`, `edema`, `proteinuria`, `hasil_diagnosa`) VALUES
(3, 'divi', 'divi', 'normal', 'normal', 'normal', 'trimester1', 'muda', 'iya', 'positif', 'preeklampsia'),
(4, 'kiki', 'kiki', 'normal', 'tinggi', 'normal', 'trimester1', 'muda', 'iya', 'negatif', 'hamil normal'),
(5, 'sugeng', 'sugeng', 'normal', 'tinggi', 'normal', 'trimester1', 'muda', 'iya', 'negatif', 'hamil normal'),
(6, 'fico', 'fico', 'normal', 'tinggi', 'normal', 'trimester1', 'tua', 'iya', 'negatif', 'preeklampsia'),
(7, 'veni', 'veni', 'normal', 'tinggi', 'normal', 'trimester1', 'ideal', 'iya', 'negatif', 'hamil normal'),
(8, 'gen', 'gen', 'normal', 'tinggi', 'tinggi', 'trimester2', 'ideal', 'iya', 'negatif', 'hamil normal'),
(9, 'ki', 'ki', 'normal', 'tinggi', 'normal', 'trimester3', 'ideal', 'iya', 'negatif', 'hamil normal'),
(10, 'ken', 'ken', 'tinggi', 'tinggi', 'normal', 'trimester3', 'ideal', 'iya', 'negatif', 'preeklampsia'),
(11, 's', 's', 'tinggi', 'tinggi', 'normal', 'trimester3', 'ideal', 'tidak', 'negatif', 'hamil normal'),
(12, 'su', 'su', 'tinggi', 'tinggi', 'tinggi', 'trimester3', 'ideal', 'tidak', 'negatif', 'preeklampsia');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `kd_riwayat` int(5) NOT NULL,
  `partus` varchar(5) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `bbl` varchar(5) NOT NULL,
  `penolong` varchar(25) NOT NULL,
  `jenis_persalinan` varchar(10) NOT NULL,
  `uk` varchar(25) NOT NULL,
  `keadaan_bersalin` varchar(25) NOT NULL,
  `laktasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`kd_datapasien`);

--
-- Indexes for table `hasildiagnosa`
--
ALTER TABLE `hasildiagnosa`
  ADD PRIMARY KEY (`kd_hasil`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`kd_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `kd_admin` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datapasien`
--
ALTER TABLE `datapasien`
  MODIFY `kd_datapasien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasildiagnosa`
--
ALTER TABLE `hasildiagnosa`
  MODIFY `kd_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `kd_riwayat` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
