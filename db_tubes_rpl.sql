-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 12:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes_rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksi_otomatis`
--

CREATE TABLE `aksi_otomatis` (
  `id_aksi_otomatis` int(11) NOT NULL,
  `nama_aksi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aksi_otomatis`
--

INSERT INTO `aksi_otomatis` (`id_aksi_otomatis`, `nama_aksi`) VALUES
(1, 'Buka Kunci'),
(2, 'Tutup Kunci');

-- --------------------------------------------------------

--
-- Table structure for table `kunci_pintu`
--

CREATE TABLE `kunci_pintu` (
  `id_kunci_pintu` int(11) NOT NULL,
  `nama_kunci_pintu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kunci_pintu`
--

INSERT INTO `kunci_pintu` (`id_kunci_pintu`, `nama_kunci_pintu`) VALUES
(1, 'Pintu Depan');

-- --------------------------------------------------------

--
-- Table structure for table `log_aksi_otomatis`
--

CREATE TABLE `log_aksi_otomatis` (
  `id_log_aksi` int(11) NOT NULL,
  `id_aksi_otomatis` int(11) NOT NULL,
  `id_kunci_pintu` int(11) NOT NULL,
  `waktu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_aksi_otomatis`
--

INSERT INTO `log_aksi_otomatis` (`id_log_aksi`, `id_aksi_otomatis`, `id_kunci_pintu`, `waktu`) VALUES
(31, 2, 1, '16:36:00'),
(32, 2, 1, '20:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `log_kunci_pintu`
--

CREATE TABLE `log_kunci_pintu` (
  `id_log_kunci` int(11) NOT NULL,
  `id_pengguna` varchar(20) NOT NULL,
  `id_kunci_pintu` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `log_kunci_pintu`
--

INSERT INTO `log_kunci_pintu` (`id_log_kunci`, `id_pengguna`, `id_kunci_pintu`, `tanggal`, `waktu`, `status`) VALUES
(1, 'admin', 1, '2022-05-25', '14:12:19', 'Terbuka'),
(2, 'admin', 1, '2022-05-25', '14:14:29', 'Terbuka'),
(3, 'admin', 1, '2022-05-25', '14:14:46', 'Terbuka'),
(4, 'admin', 1, '2022-05-25', '14:14:56', 'Terbuka'),
(5, 'admin', 1, '2022-05-25', '14:33:47', 'Tertutup'),
(6, 'admin', 1, '2022-05-25', '14:41:12', 'Terbuka'),
(7, 'admin', 1, '2022-05-25', '14:43:49', 'Tertutup'),
(8, 'admin', 1, '2022-05-25', '14:43:52', 'Terbuka'),
(9, 'admin', 1, '2022-05-25', '15:12:16', 'Tertutup'),
(10, 'admin', 1, '2022-05-25', '15:21:11', 'Terbuka'),
(67, 'admin', 1, '2022-05-25', '16:07:48', 'Terbuka'),
(120, 'admin', 1, '2022-05-25', '16:09:45', 'Terbuka'),
(121, 'admin', 1, '2022-05-25', '16:10:35', 'Tertutup'),
(122, 'admin', 1, '2022-05-25', '16:13:05', 'Terbuka'),
(123, 'admin', 1, '2022-05-25', '16:15:14', 'Tertutup'),
(124, 'admin', 1, '2022-05-25', '16:19:04', 'Terbuka'),
(125, 'admin', 1, '2022-05-25', '16:23:41', 'Tertutup'),
(126, 'admin', 1, '2022-05-25', '16:25:08', 'Terbuka'),
(127, 'admin', 1, '2022-05-25', '16:29:24', 'Tertutup'),
(128, 'admin', 1, '2022-05-27', '15:14:57', 'Terbuka'),
(129, 'admin', 1, '2022-05-27', '15:52:21', 'Tertutup'),
(130, 'admin', 1, '2022-05-27', '16:02:21', 'Terbuka'),
(131, 'admin', 1, '2022-05-27', '16:03:17', 'Tertutup'),
(132, 'admin', 1, '2022-05-27', '16:04:48', 'Terbuka'),
(133, 'admin', 1, '2022-05-27', '16:05:39', 'Tertutup'),
(134, 'admin', 1, '2022-05-27', '16:08:25', 'Terbuka'),
(135, 'admin', 1, '2022-05-27', '16:10:20', 'Tertutup'),
(136, 'admin', 1, '2022-05-27', '16:12:21', 'Terbuka'),
(137, 'admin', 1, '2022-05-27', '16:13:05', 'Tertutup'),
(138, 'admin', 1, '2022-05-27', '16:13:20', 'Terbuka'),
(139, 'admin', 1, '2022-05-27', '16:14:23', 'Tertutup'),
(140, 'admin', 1, '2022-05-27', '16:25:17', 'Terbuka'),
(141, 'admin', 1, '2022-05-27', '16:25:40', 'Tertutup'),
(142, 'admin', 1, '2022-05-27', '16:25:51', 'Terbuka'),
(143, 'admin', 1, '2022-05-27', '16:25:54', 'Tertutup'),
(144, 'admin', 1, '2022-05-27', '16:31:23', 'Terbuka'),
(145, 'admin', 1, '2022-05-27', '16:33:08', 'Tertutup'),
(146, 'admin', 1, '2022-05-27', '17:06:16', 'Terbuka'),
(147, 'admin', 1, '2022-05-27', '17:06:40', 'Tertutup'),
(148, 'admin', 1, '2022-05-27', '17:07:08', 'Terbuka'),
(149, 'admin', 1, '2022-05-27', '17:07:12', 'Tertutup'),
(150, 'admin', 1, '2022-05-27', '17:07:23', 'Terbuka'),
(151, 'admin', 1, '2022-05-30', '20:53:03', 'Tertutup'),
(152, 'admin', 1, '2022-05-30', '20:53:34', 'Terbuka'),
(153, 'admin', 1, '2022-05-30', '20:54:06', 'Tertutup'),
(154, 'admin', 1, '2022-05-30', '20:54:21', 'Terbuka'),
(155, 'admin', 1, '2022-05-30', '20:55:31', 'Tertutup'),
(156, 'admin', 1, '2022-06-06', '15:53:47', 'Terbuka'),
(157, 'admin', 1, '2022-06-06', '15:53:53', 'Tertutup');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `password`, `nama`, `email`, `no_telepon`) VALUES
('admin', 'passadmin', 'Admin', 'admin@email.com', '081234567890');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksi_otomatis`
--
ALTER TABLE `aksi_otomatis`
  ADD PRIMARY KEY (`id_aksi_otomatis`);

--
-- Indexes for table `kunci_pintu`
--
ALTER TABLE `kunci_pintu`
  ADD PRIMARY KEY (`id_kunci_pintu`);

--
-- Indexes for table `log_aksi_otomatis`
--
ALTER TABLE `log_aksi_otomatis`
  ADD PRIMARY KEY (`id_log_aksi`),
  ADD KEY `fk_aksi_otomatis_has_kunci_pintu_kunci_pintu1_idx` (`id_kunci_pintu`),
  ADD KEY `fk_aksi_otomatis_has_kunci_pintu_aksi_otomatis1_idx` (`id_aksi_otomatis`);

--
-- Indexes for table `log_kunci_pintu`
--
ALTER TABLE `log_kunci_pintu`
  ADD PRIMARY KEY (`id_log_kunci`),
  ADD KEY `fk_pengguna_has_kunci_pintu_kunci_pintu1_idx` (`id_kunci_pintu`),
  ADD KEY `fk_pengguna_has_kunci_pintu_pengguna_idx` (`id_pengguna`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aksi_otomatis`
--
ALTER TABLE `aksi_otomatis`
  MODIFY `id_aksi_otomatis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kunci_pintu`
--
ALTER TABLE `kunci_pintu`
  MODIFY `id_kunci_pintu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_aksi_otomatis`
--
ALTER TABLE `log_aksi_otomatis`
  MODIFY `id_log_aksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `log_kunci_pintu`
--
ALTER TABLE `log_kunci_pintu`
  MODIFY `id_log_kunci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_aksi_otomatis`
--
ALTER TABLE `log_aksi_otomatis`
  ADD CONSTRAINT `fk_aksi_otomatis_has_kunci_pintu_aksi_otomatis1` FOREIGN KEY (`id_aksi_otomatis`) REFERENCES `aksi_otomatis` (`id_aksi_otomatis`),
  ADD CONSTRAINT `fk_aksi_otomatis_has_kunci_pintu_kunci_pintu1` FOREIGN KEY (`id_kunci_pintu`) REFERENCES `kunci_pintu` (`id_kunci_pintu`);

--
-- Constraints for table `log_kunci_pintu`
--
ALTER TABLE `log_kunci_pintu`
  ADD CONSTRAINT `fk_pengguna_has_kunci_pintu_kunci_pintu1` FOREIGN KEY (`id_kunci_pintu`) REFERENCES `kunci_pintu` (`id_kunci_pintu`),
  ADD CONSTRAINT `fk_pengguna_has_kunci_pintu_pengguna` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
