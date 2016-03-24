-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2016 pada 08.34
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boox_customer_service`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama_akun` varchar(255) DEFAULT NULL,
  `email_akun` varchar(255) DEFAULT NULL,
  `username_akun` varchar(255) DEFAULT NULL,
  `password_akun` varchar(255) DEFAULT NULL,
  `level_akun` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `nama_akun`, `email_akun`, `username_akun`, `password_akun`, `level_akun`) VALUES
(1, 'Admin Master', 'admin@master.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `id_akun` int(11) DEFAULT NULL,
  `nama_pelanggan` varchar(255) DEFAULT NULL,
  `email_pelanggan` varchar(255) DEFAULT NULL,
  `judul_keluhan` varchar(45) DEFAULT NULL,
  `deskrip_keluhan` varchar(45) DEFAULT NULL,
  `status_keluhan` varchar(25) DEFAULT NULL,
  `tgl_keluhan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tgl_proses` timestamp NULL DEFAULT NULL,
  `tgl_selesai` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='			';

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `id_akun`, `nama_pelanggan`, `email_pelanggan`, `judul_keluhan`, `deskrip_keluhan`, `status_keluhan`, `tgl_keluhan`, `tgl_proses`, `tgl_selesai`) VALUES
(1, 1, 'Fendi', 'fendi_septiawan0709@yahoo.co.id', 'Uji coba - 1', 'Ini keluhan uji coba', 'Selesai', '2016-03-21 10:57:57', '2016-03-22 15:18:03', '2016-03-22 20:57:57'),
(2, 1, 'Fendi Septiawan', 'fendi.septiawan0709@google.com', 'Uji coba - 2', 'Ini keluhan uji coba', 'Belum', '2016-03-21 18:58:52', NULL, NULL),
(3, NULL, 'Joko Sasongko', 'joko@yahoo.co.id', 'sdfsdcsdf', 'sdfvsgdhghsvzdcz', 'Proses', '2016-03-22 01:13:06', '2016-03-22 14:29:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD UNIQUE KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
