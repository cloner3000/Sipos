-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2018 at 11:47 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.12-1+ubuntu18.04.1+deb.sury.org+1

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
  `id_ibu` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `layanan_ibu_hamil`
--

CREATE TABLE `layanan_ibu_hamil` (
  `id_layanan` int(11) NOT NULL,
  `no_layanan` int(11) NOT NULL,
  `id_ibu` int(32) NOT NULL,
  `pelayanan` varchar(32) NOT NULL,
  `tanggal_pelayanan` date NOT NULL,
  `umur_kehamilan` float NOT NULL,
  `risiko_kehamilan` varchar(32) NOT NULL,
  `berat_badan` float NOT NULL,
  `lila` varchar(16) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamps` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layanan_ibu_wuspus`
--

CREATE TABLE `layanan_ibu_wuspus` (
  `id_layanan` int(11) NOT NULL,
  `no_layanan` varchar(32) NOT NULL,
  `id_ibu` int(11) NOT NULL,
  `lila` varchar(64) NOT NULL,
  `pelayanan` varchar(32) NOT NULL,
  `tanggal_pelayanan` date NOT NULL,
  `kontrasepsi_lama` varchar(32) NOT NULL,
  `kontrasepsi_baru` varchar(32) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamps` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `no_petugas` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` varchar(64) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `no_kecamatan` int(11) NOT NULL,
  `jabatan` varchar(32) NOT NULL,
  `tanggal_mulai_kerja` date NOT NULL,
  `status` varchar(16) NOT NULL,
  `pendidikan` varchar(16) NOT NULL,
  `no_telepon` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_pegawai` varchar(64) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posyandu`
--

CREATE TABLE `posyandu` (
  `id_posyandu` int(11) NOT NULL,
  `no_posyandu` varchar(32) NOT NULL,
  `nama_posyandu` varchar(32) NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamps` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id_puskesmas` int(11) NOT NULL,
  `no_puskesmas` varchar(32) NOT NULL,
  `nama_puskesmas` varchar(32) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_ku` int(11) NOT NULL,
  `timestamps` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id_desa`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `ibu`
--
ALTER TABLE `ibu`
  ADD PRIMARY KEY (`id_ibu`),
  ADD KEY `id_desa` (`id_desa`),
  ADD KEY `id_posyandu` (`id_posyandu`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `layanan_anak`
--
ALTER TABLE `layanan_anak`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `id_anak` (`id_anak`);

--
-- Indexes for table `layanan_ibu_hamil`
--
ALTER TABLE `layanan_ibu_hamil`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `layanan_ibu_wuspus`
--
ALTER TABLE `layanan_ibu_wuspus`
  ADD PRIMARY KEY (`id_layanan`),
  ADD KEY `id_ibu` (`id_ibu`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`id_posyandu`),
  ADD KEY `id_desa` (`id_desa`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id_puskesmas`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

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
-- AUTO_INCREMENT for table `ibu`
--
ALTER TABLE `ibu`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layanan_anak`
--
ALTER TABLE `layanan_anak`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layanan_ibu_hamil`
--
ALTER TABLE `layanan_ibu_hamil`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layanan_ibu_wuspus`
--
ALTER TABLE `layanan_ibu_wuspus`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posyandu`
--
ALTER TABLE `posyandu`
  MODIFY `id_posyandu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id_puskesmas` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id_ibu`);

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`);

--
-- Constraints for table `ibu`
--
ALTER TABLE `ibu`
  ADD CONSTRAINT `ibu_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`),
  ADD CONSTRAINT `ibu_ibfk_2` FOREIGN KEY (`id_posyandu`) REFERENCES `posyandu` (`id_posyandu`);

--
-- Constraints for table `layanan_anak`
--
ALTER TABLE `layanan_anak`
  ADD CONSTRAINT `layanan_anak_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`);

--
-- Constraints for table `layanan_ibu_hamil`
--
ALTER TABLE `layanan_ibu_hamil`
  ADD CONSTRAINT `layanan_ibu_hamil_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id_ibu`);

--
-- Constraints for table `layanan_ibu_wuspus`
--
ALTER TABLE `layanan_ibu_wuspus`
  ADD CONSTRAINT `layanan_ibu_wuspus_ibfk_1` FOREIGN KEY (`id_ibu`) REFERENCES `ibu` (`id_ibu`);

--
-- Constraints for table `petugas`
--
ALTER TABLE `petugas`
  ADD CONSTRAINT `petugas_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Constraints for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD CONSTRAINT `posyandu_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id_desa`);

--
-- Constraints for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD CONSTRAINT `puskesmas_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id_kecamatan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
