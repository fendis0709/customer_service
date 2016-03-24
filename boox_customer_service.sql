-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mar 2016 pada 15.23
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
(1, 'Admin Master', 'admin@boox.asia', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

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
(1, NULL, 'Joko', 'fendi_septiawan0709@yahoo.co.id', 'Topik coba', 'Keluhan coba', 'Belum', '2016-03-24 13:15:29', NULL, NULL),
(2, NULL, 'Fendi', 'fendi.septiawan0709@gmail.com', 'Topik', 'Keluhan', 'Selesai', '2016-03-24 13:26:55', '2016-03-24 14:18:51', '2016-03-24 14:21:16'),
(3, NULL, 'Fariz', 'fendi.septiawan0709@gmail.com', 'jhlsndnc', 'jnjsnfjlncdlc', 'Proses', '2016-03-24 13:31:54', '2016-03-24 14:21:02', NULL),
(4, NULL, 'Rahmad', 'fendi.septiawan0709@gmail.com', 'Topik', 'Keluhan', 'Belum', '2016-03-24 13:38:17', NULL, NULL),
(5, NULL, 'Bagus', 'fendi.septiawan0709@gmail.com', 'TIdak punya topik', 'tidak tahu', 'Belum', '2016-03-24 13:44:12', NULL, NULL),
(6, NULL, 'Dichy', 'fendi.septiawan0709@gmail.com', 'jsncjn', 'jlnsdlcnslkdc', 'Belum', '2016-03-24 13:49:13', NULL, NULL);

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
  ADD KEY `id_akun` (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_ibfk_1` FOREIGN KEY (`id_akun`) REFERENCES `akun` (`id_akun`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
