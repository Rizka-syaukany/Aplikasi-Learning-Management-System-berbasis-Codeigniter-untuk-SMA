-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 03:06 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_siswa`
--

CREATE TABLE `daftar_siswa` (
  `id_daftar_siswa` int(10) UNSIGNED NOT NULL,
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_siswa`
--

INSERT INTO `daftar_siswa` (`id_daftar_siswa`, `id_kelas`, `id_user`) VALUES
(18, 1, 59),
(19, 1, 62),
(20, 2, 63);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pengajaran`
--

CREATE TABLE `jadwal_pengajaran` (
  `id_jadwal` int(10) UNSIGNED NOT NULL,
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_matpel` int(10) UNSIGNED NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_pengajaran`
--

INSERT INTO `jadwal_pengajaran` (`id_jadwal`, `id_kelas`, `id_user`, `id_matpel`, `mulai`, `selesai`, `hari`) VALUES
(2, 1, 1, 3, '08:40:00', '10:10:00', 'Senin');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `id_konsentrasi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_konsentrasi`) VALUES
(1, '10 IPA 1', 1),
(2, '10 IPA 2', 1),
(3, '10 IPS 1', 2),
(4, '10 IPS 2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `konsentrasi`
--

CREATE TABLE `konsentrasi` (
  `id_konsentrasi` int(10) UNSIGNED NOT NULL,
  `nama_konsentrasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsentrasi`
--

INSERT INTO `konsentrasi` (`id_konsentrasi`, `nama_konsentrasi`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(10) UNSIGNED NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `penjelasan_materi` varchar(255) NOT NULL,
  `file_materi` varchar(255) NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `id_kode_matpel` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `id_matpel` int(10) UNSIGNED NOT NULL,
  `nama_matpel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `nama_matpel`) VALUES
(1, 'Fisika'),
(2, 'Kimia'),
(3, 'Biologi'),
(4, 'Sosiologi'),
(5, 'Geografi'),
(6, 'Ekonomi'),
(7, 'Sejarah'),
(8, 'Matematika'),
(9, 'Bahasa Indonesia'),
(10, 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id_tugas` int(10) UNSIGNED NOT NULL,
  `nama_tugas` varchar(255) NOT NULL,
  `nilai_tugas` int(11) NOT NULL,
  `id_materi` int(11) UNSIGNED NOT NULL,
  `file_tugas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `NIP` int(11) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp_user` int(14) NOT NULL,
  `profile_user` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `jenis_kelamin`, `NIP`, `alamat_user`, `email_user`, `password`, `telp_user`, `profile_user`, `level`) VALUES
(1, 'Rizka Akbar Syaukany', 'Laki-laki', 897856, 'pejawaran bos', 'bla@gmail.com', '$2y$10$EZxZIr1iqakRLCojukdZEuwGtBYg03fk47yKuBXP2rUPdhtn92HtW', 812344, 'default.png', 0),
(26, 'rizka Akbar Syaukany', 'Laki-laki', 1234321, 'jalan kemana abang yahahafasdf', 'kaka@dsfafasd.comfsad', 'sasasa', 2147483647, 'fasge', 0),
(29, 'kaka', 'Laki-laki', 1911923, 'Pandeglang rt4 rw3', 'kaka@gmial.com', 'pasw', 8221, 'tes pribadi.PNG', 0),
(30, 'kaka', 'Laki-laki', 11234, 'jalan kemana abang yahaharqw', 'kaka@dsfafasd.com2', '211211', 9868753, 'user.PNG', 2),
(33, 'Dimas bagus', 'Laki-laki', 235123, 'jalan kemana abang yahaharqwerq', 'dha@gmail.comafsdsdf', 'dim', 823232, 'PXL_20210509_020708899.jpg', 0),
(34, 'Dimas bagus', 'Laki-laki', 1231233, 'jalan kemana abang yahahaeqw', 'dha@gmail.comweasdr', 'adsrfa', 123123, 'PXL_20210509_20708900.jpg', 1),
(39, 'kanika uhuy pertama', 'Laki-laki', 123212321, ' frarsdf fasdf asdf  asdf', 'kaka@dsfafasd.comfasadf', 'adsf', 1234232, 'Capture_4.PNG', 1),
(40, 'kanika uhuy pertamwe', 'Laki-laki', 2147483647, ' frarsdf fasdf asdf  asdf', 'kaka@dsfafasd.comfasadf', 'adsf', 12342321, 'Capture_5.PNG', 1),
(41, 'kanika uhuy pertamwe', 'Laki-laki', 12329898, 'jalan kemana abang yahaha', 'kaka@dsfafasd.comfa', '12312', 12341111, 'Capture_6.PNG', 1),
(44, 'adam', 'Laki-laki', 1897912, 'jalan kemana abang yahaha', 'dha@gmail.com', '$2y$10$2StZpBixP9Bvg2IhkwsVB.kJWbfXUYOHOdjw1cN4eHGweBNyFodyO', 2131331, 'default.png', 1),
(47, 'acads', 'Laki-laki', 12321312, 'jalan kemana abang yahaha', '', '', 31233, 'Capture_22.PNG', 2),
(48, 'acadsa', 'Laki-laki', 12321567, 'jalan kemana abang yahaha', '', '', 3123312, 'Capture_23.PNG', 2),
(53, 'dengan ini saya ganteng', 'Laki-laki', 98989898, 'jalan kemana abang ', 'kaka@dsfafasd.comfa', '$2y$10$U41wd8Nyn1HhCz9ifOjRou7olAYRJy30lviPvsY1gqDgRGTD2CAVW', 34234123, 'default.png', 2),
(54, 'coba pasw', 'Laki-laki', 12312312, 'coba pasw', 'syau@kaka.com', '$2y$10$WK.Vr.7KtSFdBMD4TvbAkOYiKf3Zu0Z71yPl0APY5qsOjr5zEERgy', 74522110, 'MIUI 13.jpg', 2),
(57, 'coba pasw', 'Laki-laki', 12312312, 'yahaha', 'syau@kaka.com', '$2y$10$2.hoLtUIkDPQgZykrdz6v.kPH/Fj2fEPkHHtp78GZh1usVdV0yVAq', 74522110, 'default.png', 2),
(58, 'syaukany', 'Laki-laki', 19113007, 'jalan pejawaran rt 4 rw 3 pejwaran', 'kaka@email.com', '$2y$10$.qYDZeRELuBD0PTCmqYD0ezszfvFxPGIxvYfcWBX7a2ho7WvsaNNG', 2147483647, 'default.png', 1),
(59, 'surti', 'Laki-laki', 1234123, 'jalan kemana abang yahaha', 'surti@email.com', '$2y$10$TYBHLjPoy7bbkOC63TPPu.uvMzRXaw95oDmjfGtizC4IT/y8TysC2', 8456786, 'default.png', 2),
(60, 'admin', 'Laki-laki', 1, 'admin pertama', 'admin@email.com', '$2y$10$ZjW6SY1YkryFDpaQRo.2ce/nth1vViTmdE8u5gP7UyZAmAFKebnia', 10821301, 'default.png', 1),
(61, 'guru', 'Laki-laki', 2, 'guru pertama', 'guru@email.com', '$2y$10$3xvmFmTnjU7Kt7GIVlzbAOvOGNfXyfEcegaSZR1UMvorS.8x7Vqzy', 2832, 'default.png', 0),
(62, 'siswa', 'Laki-laki', 3, 'siswa pertama', 'siswa@gmail.com', '$2y$10$7ymNr8OVrMm/Gat1V4ERKeVTZajt.4jBeAJ5MrBcKRD8b3W0ieHJO', 9123, 'default.png', 2),
(63, 'siswa 2', 'Perempuan', 3123, 'boleh juga', 'siswa1@email.com', '$2y$10$0bRDWmYldq8Y5PPY7oSx/.DMMyhFZmjlHs3VeAkWV71sc0hzU95ye', 83142341, 'default.png', 2),
(65, 'admin 1', 'Laki-laki', 56456, 'dsadf', 'dha@gmail.com', '$2y$10$inND0e8XV6okpeUib7tRXuYxqRYUKJ8c3L9Dzq9SRuZ/kne1imxbK', 98687234, 'default.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD PRIMARY KEY (`id_daftar_siswa`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `jadwal_pengajaran`
--
ALTER TABLE `jadwal_pengajaran`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_matpel` (`id_matpel`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_konsentrasi` (`id_konsentrasi`);

--
-- Indexes for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  ADD PRIMARY KEY (`id_konsentrasi`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `matpel`
--
ALTER TABLE `matpel`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `id_materi` (`id_materi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  MODIFY `id_daftar_siswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `jadwal_pengajaran`
--
ALTER TABLE `jadwal_pengajaran`
  MODIFY `id_jadwal` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `konsentrasi`
--
ALTER TABLE `konsentrasi`
  MODIFY `id_konsentrasi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matpel`
--
ALTER TABLE `matpel`
  MODIFY `id_matpel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id_tugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_siswa`
--
ALTER TABLE `daftar_siswa`
  ADD CONSTRAINT `daftar_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `daftar_siswa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_pengajaran`
--
ALTER TABLE `jadwal_pengajaran`
  ADD CONSTRAINT `jadwal_pengajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_pengajaran_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_pengajaran_ibfk_3` FOREIGN KEY (`id_matpel`) REFERENCES `matpel` (`id_matpel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `id_konsentrasi` FOREIGN KEY (`id_konsentrasi`) REFERENCES `konsentrasi` (`id_konsentrasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `tugas_ibfk_1` FOREIGN KEY (`id_materi`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
