-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2018 at 03:05 AM
-- Server version: 10.0.36-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipos`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL,
  `no_anak` varchar(32) NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `tanggal_meninggal` date DEFAULT NULL,
  `penyebab_meninggal` varchar(64) DEFAULT NULL,
  `penolong_persalinan` varchar(32) DEFAULT NULL,
  `berat_bayi_lahir` int(11) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamps` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id_desa` int(11) NOT NULL,
  `no_desa` varchar(32) NOT NULL,
  `nama_desa` varchar(32) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `no_puskesmas` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ibu`
--

CREATE TABLE `ibu` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `no` varchar(32) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_posyandu` int(11) NOT NULL,
  `nama_suami` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `kelompok_dasawisma` varchar(20) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `penyebab_meninggal` varchar(64) NOT NULL,
  `tahapan_ks` varchar(20) NOT NULL,
  `keadaan_ibu` varchar(20) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `no_kecamatan` varchar(32) NOT NULL,
  `nama_kecamatan` varchar(32) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamps` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_anak`
--

CREATE TABLE `layanan_anak` (
  `id_layanan` int(11) NOT NULL,
  `no_layanan` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `timbang` float NOT NULL,
  `pelayanan` varchar(32) NOT NULL,
  `imunisasi` varchar(32) NOT NULL,
  `tanggal` date NOT NULL,
  `id_bpertb` int(11) NOT NULL,
  `standart_timbang` varchar(32) NOT NULL,
  `hasil_timbang` varchar(32) NOT NULL,
  `status_gizi` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id_desa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
