-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 02:13 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipos_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `id_pasangan` int(11) NOT NULL,
  `nama_anak` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `berat_bayi_lahir` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `id_pasangan`, `nama_anak`, `tanggal_lahir`, `jenis_kelamin`, `berat_bayi_lahir`, `status`, `id_user`, `timestamps`) VALUES
(1, 1, 'Anak Ganteng', '2019-01-16', 'Laki-Laki', 1.6, 1, 1, '2019-01-06 16:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `meninggal` tinyint(1) DEFAULT NULL,
  `tanggal_meninggal` date DEFAULT NULL,
  `penyebab_meninggal` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id`, `id_anak`, `meninggal`, `tanggal_meninggal`, `penyebab_meninggal`) VALUES
(1, 1, 1, '2019-01-23', 'Tolol banget');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `id` int(11) NOT NULL,
  `nama_desa` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `nama_desa`, `id_kecamatan`, `id_user`, `timestamp`) VALUES
(1, 'Test-Desa', 1, 1, '2018-12-28 15:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(11) NOT NULL,
  `nama_kabupaten` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama_kabupaten`) VALUES
(1, 'Probolinggo');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nama_kecamatan` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `id_kabupaten`, `nama_kecamatan`, `id_user`, `timestamps`) VALUES
(1, 1, 'Test-Kecamatan', 1, '2018-12-28 15:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_12_07_074345_create_anak_table', 1),
(2, '2018_12_07_074345_create_desa_table', 1),
(3, '2018_12_07_074345_create_ibu_table', 1),
(4, '2018_12_07_074345_create_kecamatan_table', 1),
(5, '2018_12_07_074345_create_layanan_anak_table', 1),
(6, '2018_12_07_074345_create_layanan_ibu_hamil_table', 1),
(7, '2018_12_07_074345_create_layanan_ibu_wuspus_table', 1),
(8, '2018_12_07_074345_create_password_resets_table', 1),
(9, '2018_12_07_074345_create_petugas_table', 1),
(10, '2018_12_07_074345_create_posyandu_table', 1),
(11, '2018_12_07_074345_create_puskesmas_table', 1),
(12, '2018_12_07_074345_create_role_table', 1),
(13, '2018_12_07_074345_create_users_table', 1),
(14, '2018_12_07_074346_add_foreign_keys_to_anak_table', 1),
(15, '2018_12_07_074346_add_foreign_keys_to_desa_table', 1),
(16, '2018_12_07_074346_add_foreign_keys_to_ibu_table', 1),
(17, '2018_12_07_074346_add_foreign_keys_to_layanan_anak_table', 1),
(18, '2018_12_07_074346_add_foreign_keys_to_layanan_ibu_hamil_table', 1),
(19, '2018_12_07_074346_add_foreign_keys_to_layanan_ibu_wuspus_table', 1),
(20, '2018_12_07_074346_add_foreign_keys_to_petugas_table', 1),
(21, '2018_12_07_074346_add_foreign_keys_to_posyandu_table', 1),
(22, '2018_12_07_074346_add_foreign_keys_to_puskesmas_table', 1),
(23, '2018_12_07_074346_add_foreign_keys_to_users_table', 1),
(24, '2019_01_06_182520_create_anak_table', 0),
(25, '2019_01_06_182520_create_catatan_table', 0),
(26, '2019_01_06_182520_create_desa_table', 0),
(27, '2019_01_06_182520_create_kabupaten_table', 0),
(28, '2019_01_06_182520_create_kecamatan_table', 0),
(29, '2019_01_06_182520_create_ortu_table', 0),
(30, '2019_01_06_182520_create_pasangan_table', 0),
(31, '2019_01_06_182520_create_password_resets_table', 0),
(32, '2019_01_06_182520_create_pemberian_asi_table', 0),
(33, '2019_01_06_182520_create_pemberian_imunisasi_table', 0),
(34, '2019_01_06_182520_create_pemberian_vit_a_table', 0),
(35, '2019_01_06_182520_create_penimbangan_table', 0),
(36, '2019_01_06_182520_create_posyandu_table', 0),
(37, '2019_01_06_182520_create_register_bayi_table', 0),
(38, '2019_01_06_182520_create_role_table', 0),
(39, '2019_01_06_182520_create_users_table', 0),
(40, '2019_01_06_182522_add_foreign_keys_to_anak_table', 0),
(41, '2019_01_06_182522_add_foreign_keys_to_catatan_table', 0),
(42, '2019_01_06_182522_add_foreign_keys_to_desa_table', 0),
(43, '2019_01_06_182522_add_foreign_keys_to_kecamatan_table', 0),
(44, '2019_01_06_182522_add_foreign_keys_to_ortu_table', 0),
(45, '2019_01_06_182522_add_foreign_keys_to_pemberian_asi_table', 0),
(46, '2019_01_06_182522_add_foreign_keys_to_pemberian_imunisasi_table', 0),
(47, '2019_01_06_182522_add_foreign_keys_to_pemberian_vit_a_table', 0),
(48, '2019_01_06_182522_add_foreign_keys_to_penimbangan_table', 0),
(49, '2019_01_06_182522_add_foreign_keys_to_posyandu_table', 0),
(50, '2019_01_06_182522_add_foreign_keys_to_register_bayi_table', 0),
(51, '2019_01_06_182522_add_foreign_keys_to_users_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `tempat_lahir` varchar(32) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(16) NOT NULL,
  `pendidikan_terakhir` varchar(32) NOT NULL,
  `pekerjaan` varchar(32) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `id_pasangan` int(11) DEFAULT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id`, `nama`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan_terakhir`, `pekerjaan`, `status`, `id_pasangan`, `id_user`, `timestamps`) VALUES
(1, 'Miqdad Yanuar Farcha', '123123', 'Laki-Laki', 'Jember', '1999-01-20', 'Islam', 'SMA', 'Mahasiswa', 1, 1, 1, '2019-01-06 17:28:28'),
(2, 'Pacarnya Miqdad', '123321123', 'Perempuan', 'Jember', '2019-01-01', 'Islam', 'SMA', 'Mahasiswa', 1, 1, 1, '2019-01-06 17:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `pasangan`
--

CREATE TABLE `pasangan` (
  `id` int(11) NOT NULL,
  `tanggal_menikah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasangan`
--

INSERT INTO `pasangan` (`id`, `tanggal_menikah`) VALUES
(1, '2019-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemberian_asi`
--

CREATE TABLE `pemberian_asi` (
  `id` int(11) NOT NULL,
  `id_register` int(11) NOT NULL,
  `e0` date DEFAULT NULL,
  `e1` date DEFAULT NULL,
  `e2` date DEFAULT NULL,
  `e3` date DEFAULT NULL,
  `e4` date DEFAULT NULL,
  `e5` date DEFAULT NULL,
  `e6` date DEFAULT NULL,
  `e7_asi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemberian_imunisasi`
--

CREATE TABLE `pemberian_imunisasi` (
  `id` int(11) NOT NULL,
  `id_register` int(11) NOT NULL,
  `hb0` date DEFAULT NULL,
  `bcg` date DEFAULT NULL,
  `dpt_hb_1` date DEFAULT NULL,
  `dpt_hb_2` date DEFAULT NULL,
  `dpt_hb_3` date DEFAULT NULL,
  `polio_1` date DEFAULT NULL,
  `polio_2` date DEFAULT NULL,
  `polio_3` date DEFAULT NULL,
  `polio_4` date DEFAULT NULL,
  `polio_5` date DEFAULT NULL,
  `campak_011` date DEFAULT NULL,
  `dpt_hb_hib_1223` date DEFAULT NULL,
  `campak_1223` date DEFAULT NULL,
  `dpt_hb_hib_2435` date DEFAULT NULL,
  `campak_2435` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemberian_vit_a`
--

CREATE TABLE `pemberian_vit_a` (
  `id` int(11) NOT NULL,
  `id_register` int(11) NOT NULL,
  `tanggal_pemberian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penimbangan`
--

CREATE TABLE `penimbangan` (
  `id` int(11) NOT NULL,
  `berat_penimbangan` double NOT NULL,
  `tanggal_penimbangan` date NOT NULL,
  `id_rergister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posyandu`
--

CREATE TABLE `posyandu` (
  `id` int(11) NOT NULL,
  `no_posyandu` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_posyandu` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_desa` int(11) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posyandu`
--

INSERT INTO `posyandu` (`id`, `no_posyandu`, `nama_posyandu`, `id_desa`, `id_user`, `timestamps`) VALUES
(1, '123', 'Posyandu-Test', 1, 1, '2018-12-28 15:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `register_bayi`
--

CREATE TABLE `register_bayi` (
  `id` int(11) NOT NULL,
  `id_anak` int(11) NOT NULL,
  `id_pemberian_asi` int(11) NOT NULL,
  `id_imunisasi` int(11) NOT NULL,
  `catatan` varchar(64) DEFAULT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `timestamps` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama_role`, `role`, `deskripsi`) VALUES
(1, 'Super Admin', 'SUPER_ADMIN', NULL),
(2, 'Kader', 'KADER', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL DEFAULT '1',
  `id_posyandu` int(11) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `token_key` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `id_role`, `id_posyandu`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `token_key`) VALUES
(1, 'Miqdad', 'miqdad.farcha@gmail.com', 1, NULL, NULL, '$2y$10$cUvI2slaiqGZ7XqH2XohBOetf7glqv34F4RfjI9hVW2mzs4gFAtd6', 'oJdBbnCDt74z9KgYm0kcydmySHuVxD2v3cMXtR4FdbZjS8Pasv7HfoMmnAJ1', '2018-12-28 08:13:46', '2019-01-06 09:13:25', '325fcd319a6af77e9617d60a65b2b129'),
(4, 'Kader', 'kader@gmail.com', 2, NULL, NULL, '$2y$10$3BcS63TEdDxPcVFhQeZX/.trnYfUQSKKvRXj8AOd3qD.2eibhdQBm', '', '2018-12-28 08:28:55', '2018-12-28 08:28:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasangan` (`id_pasangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catatan_ibfk_1` (`id_anak`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kabupaten` (`id_kabupaten`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasangan` (`id_pasangan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pasangan`
--
ALTER TABLE `pasangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemberian_asi`
--
ALTER TABLE `pemberian_asi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_register` (`id_register`);

--
-- Indexes for table `pemberian_imunisasi`
--
ALTER TABLE `pemberian_imunisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_register` (`id_register`);

--
-- Indexes for table `pemberian_vit_a`
--
ALTER TABLE `pemberian_vit_a`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_register` (`id_register`);

--
-- Indexes for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rergister` (`id_rergister`);

--
-- Indexes for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_desa` (`id_desa`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `register_bayi`
--
ALTER TABLE `register_bayi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_anak` (`id_anak`),
  ADD KEY `id_imunisasi` (`id_imunisasi`),
  ADD KEY `id_pemberian_asi` (`id_pemberian_asi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_role` (`id_role`),
  ADD KEY `users_ibfk_2` (`id_posyandu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasangan`
--
ALTER TABLE `pasangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemberian_asi`
--
ALTER TABLE `pemberian_asi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemberian_imunisasi`
--
ALTER TABLE `pemberian_imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemberian_vit_a`
--
ALTER TABLE `pemberian_vit_a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penimbangan`
--
ALTER TABLE `penimbangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posyandu`
--
ALTER TABLE `posyandu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register_bayi`
--
ALTER TABLE `register_bayi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_ibfk_1` FOREIGN KEY (`id_pasangan`) REFERENCES `pasangan` (`id`),
  ADD CONSTRAINT `anak_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
  ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id`);

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`),
  ADD CONSTRAINT `desa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`),
  ADD CONSTRAINT `kecamatan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `ortu`
--
ALTER TABLE `ortu`
  ADD CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`id_pasangan`) REFERENCES `pasangan` (`id`),
  ADD CONSTRAINT `ortu_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `pemberian_asi`
--
ALTER TABLE `pemberian_asi`
  ADD CONSTRAINT `pemberian_asi_ibfk_1` FOREIGN KEY (`id_register`) REFERENCES `register_bayi` (`id`);

--
-- Constraints for table `pemberian_imunisasi`
--
ALTER TABLE `pemberian_imunisasi`
  ADD CONSTRAINT `pemberian_imunisasi_ibfk_1` FOREIGN KEY (`id_register`) REFERENCES `register_bayi` (`id`);

--
-- Constraints for table `pemberian_vit_a`
--
ALTER TABLE `pemberian_vit_a`
  ADD CONSTRAINT `pemberian_vit_a_ibfk_1` FOREIGN KEY (`id_register`) REFERENCES `register_bayi` (`id`);

--
-- Constraints for table `penimbangan`
--
ALTER TABLE `penimbangan`
  ADD CONSTRAINT `penimbangan_ibfk_1` FOREIGN KEY (`id_rergister`) REFERENCES `register_bayi` (`id`);

--
-- Constraints for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD CONSTRAINT `posyandu_ibfk_1` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id`),
  ADD CONSTRAINT `posyandu_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `register_bayi`
--
ALTER TABLE `register_bayi`
  ADD CONSTRAINT `register_bayi_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id`),
  ADD CONSTRAINT `register_bayi_ibfk_2` FOREIGN KEY (`id_imunisasi`) REFERENCES `pemberian_imunisasi` (`id`),
  ADD CONSTRAINT `register_bayi_ibfk_3` FOREIGN KEY (`id_pemberian_asi`) REFERENCES `pemberian_asi` (`id`),
  ADD CONSTRAINT `register_bayi_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_posyandu`) REFERENCES `posyandu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
