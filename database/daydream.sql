-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 04:20 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daydream`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `nama_akun` varchar(255) NOT NULL,
  `no_reff` int(10) NOT NULL,
  `ket_akun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`nama_akun`, `no_reff`, `ket_akun`) VALUES
('101-KAS DI TANGAN', 101, 'DEBIT'),
('105-KAS DI BANK', 105, 'KREDIT'),
('126-PERSEDIAAN', 126, 'DEBIT'),
('129-SEWA BAYAR DI MUKA', 129, 'DEBIT'),
('130-ASURANSI BAYAR DIMUKA', 130, 'DEBIT'),
('153-PERLENGKAPAN/ PERALATAN', 153, 'DEBIT'),
('154-PENYUSUTAN PERALATAN', 154, 'DEBIT'),
('200-HUTANG WESEL', 200, 'KREDIT'),
('201-HUTANG', 201, 'KREDIT'),
('209-PENDAPATAN DITERIMA DI MUKA', 209, 'KREDIT'),
('212-HUTANG GAJI', 212, 'KREDIT'),
('230-HUTANG BUNGA', 230, 'KREDIT'),
('311-MODAL', 311, 'KREDIT'),
('332-DIVIDEN', 332, 'KREDIT'),
('400-PENDAPATAN JASA', 400, 'KREDIT'),
('610-BEBAN IKLAN', 610, 'DEBIT'),
('621-BEBAN PENYUSUTAN PERALATAN', 621, 'DEBIT'),
('631-BEBAN PERSEDIAAN', 631, 'DEBIT'),
('726-BEBAN GAJI', 726, 'DEBIT'),
('729-BEBAN SEWA', 729, 'DEBIT'),
('730-BEBAN ASURANSI', 730, 'DEBIT'),
('731-BIAYA UTILITAS', 731, 'DEBIT'),
('735-BEBAN BIAYA PERAWATAN DAN PERBAIKAN', 735, 'DEBIT'),
('740-BEBAN BENSIN', 740, 'DEBIT'),
('741-BEBAN BUNGA', 741, 'DEBIT');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tgl_transaksi` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_akun` varchar(255) NOT NULL,
  `saldo` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tgl_transaksi`, `keterangan`, `no_akun`, `nama_akun`, `saldo`, `jenis`, `user_id`) VALUES
(222, '02/01/2020', '1', 101, '101-KAS DI TANGAN', 1067126250, 'Debit', 37),
(223, '02/01/2020', '1', 311, '311-MODAL', 1067126250, 'Kredit', 37),
(224, '02/05/2020', '2', 153, '153-PERLENGKAPAN/ PERALATAN', 213425250, 'Debit', 37),
(225, '02/05/2020', '2', 101, '101-KAS DI TANGAN', 142283500, 'Kredit', 37),
(226, '02/05/2020', '2', 201, '201-HUTANG', 71141750, 'Kredit', 37),
(227, '02/07/2020', '3', 129, '129-SEWA BAYAR DI MUKA', 313023700, 'Debit', 37),
(228, '02/07/2020', '3', 101, '101-KAS DI TANGAN', 313023700, 'Kredit', 37),
(229, '02/08/2020', '4', 126, '126-PERSEDIAAN', 35570875, 'Debit', 37),
(230, '02/08/2020', '4', 201, '201-HUTANG', 35570875, 'Kredit', 37),
(231, '02/11/2020', '5', 101, '101-KAS DI TANGAN', 142283500, 'Debit', 37),
(232, '02/11/2020', '5', 130, '130-ASURANSI BAYAR DIMUKA', 99598450, 'Debit', 37),
(233, '02/11/2020', '5', 400, '400-PENDAPATAN JASA', 241881950, 'Kredit', 37),
(234, '02/13/2020', '6', 610, '610-BEBAN IKLAN', 12805515, 'Debit', 37),
(235, '02/13/2020', '6', 201, '201-HUTANG', 12805515, 'Kredit', 37),
(236, '02/15/2020', '7', 201, '201-HUTANG', 14228350, 'Debit', 37),
(237, '02/15/2020', '7', 101, '101-KAS DI TANGAN', 14228350, 'Kredit', 37),
(238, '02/17/2020', '8', 201, '201-HUTANG', 35570875, 'Debit', 37),
(239, '02/17/2020', '8', 101, '101-KAS DI TANGAN', 35570875, 'Kredit', 37),
(240, '02/20/2020', '9', 101, '101-KAS DI TANGAN', 71141750, 'Debit', 37),
(241, '02/20/2020', '9', 209, '209-PENDAPATAN DITERIMA DI MUKA', 71141750, 'Kredit', 37),
(242, '02/22/2020', '10', 731, '731-BIAYA UTILITAS', 4268505, 'Debit', 37),
(243, '02/22/2020', '10', 101, '101-KAS DI TANGAN', 4268505, 'Kredit', 37),
(244, '02/25/2020', '11', 726, '726-BEBAN GAJI', 17074020, 'Debit', 37),
(245, '02/25/2020', '11', 101, '101-KAS DI TANGAN', 17074020, 'Kredit', 37),
(246, '02/26/2020', '12', 201, '201-HUTANG', 12805515, 'Debit', 37),
(247, '02/26/2020', '12', 101, '101-KAS DI TANGAN', 12805515, 'Kredit', 37),
(248, '02/27/2020', '13', 130, '130-ASURANSI BAYAR DIMUKA', 113826800, 'Debit', 37),
(249, '02/27/2020', '13', 400, '400-PENDAPATAN JASA', 113826800, 'Kredit', 37),
(250, '02/29/2020', '14', 101, '101-KAS DI TANGAN', 99598450, 'Debit', 37),
(251, '02/29/2020', '14', 130, '130-ASURANSI BAYAR DIMUKA', 99598450, 'Kredit', 37),
(252, '12/29/2021', '123', 101, '101-KAS DI TANGAN', 18000, 'Debit', 38),
(253, '12/29/2021', '123', 726, '726-BEBAN GAJI', 18000, 'Kredit', 38),
(254, '12/31/2021', 'kassdfaf', 311, '311-MODAL', 20000, 'Debit', 38),
(255, '12/31/2021', 'kassdfaf', 101, '101-KAS DI TANGAN', 20000, 'Kredit', 38),
(256, '12/30/2021', '397412', 101, '101-KAS DI TANGAN', 120000, 'Kredit', 38),
(257, '12/30/2021', '397412', 610, '610-BEBAN IKLAN', 120000, 'Debit', 38),
(260, '12/29/2021', 'asfg', 101, '101-KAS DI TANGAN', 10000000, 'Debit', 38),
(261, '12/29/2021', 'asfg', 621, '621-BEBAN PENYUSUTAN PERALATAN', 10000000, 'Kredit', 38),
(262, '01/01/2022', 'asfd', 126, '126-PERSEDIAAN', 500000000, 'Kredit', 38),
(263, '01/01/2022', 'asfd', 200, '200-HUTANG WESEL', 500000000, 'Debit', 38),
(264, '01/03/2022', 'qe', 126, '126-PERSEDIAAN', 600000000, 'Debit', 38),
(265, '01/03/2022', 'qe', 101, '101-KAS DI TANGAN', 600000000, 'Kredit', 38);

-- --------------------------------------------------------

--
-- Table structure for table `user2`
--

CREATE TABLE `user2` (
  `nama` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `umkm` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user2`
--

INSERT INTO `user2` (`nama`, `username`, `pass`, `email`, `user_id`, `umkm`, `no_hp`) VALUES
(' Ruben Onsu', 'geprekbensu', '$2y$10$OhRFVJsLvb3Yz9bK/RY5CuKQj9TCkaXbWIx6zI1/lCOIZ9S4ibKS2', 'geprekbensu@gmail.com', 34, 'Ayam Geprek Bensu', '089765465342'),
('admin', 'admin', '$2y$10$cjYdqT23jiKzlUjoPVYE4OXWD1JIDcPYtcGVxNNF3ivcXiM5Z2Z86', 'admin@gmail.com', 35, 'admin', '098789789765'),
('Jason Ranti Dea', 'jason', '$2y$10$59SxlySRLt4Ps3gaay6xxucHVFidGFVYlLWiyxVGqsTeGbl3TTH62', 'jasonrantideaananda@gmail.com', 36, 'Bengkel Pak Jason Ranti', '140998'),
('Dea Ananda Gunawan', 'deaanandagnw', '$2y$10$azBihJgrme3Wtk3Que0yYe3flVnJUtBpkoS8fLXPfgQb7zv6mEtO.', 'deaanandagunawan@gmail.com', 37, 'Ayam Geprek Dea', '083157206433'),
('azizhaol ', 'azizhaol', '$2y$10$/iRj9R7ngo2K5o7xLGh9AOCujo/WaPZxhbtlklqVFsaSyclYOThUu', 'azizzhaol@gmail.com', 38, 'WIfi-Router Az', '083227206412');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_reff`),
  ADD KEY `nama_akun` (`nama_akun`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tgl_transaksi` (`tgl_transaksi`),
  ADD KEY `no_akun` (`no_akun`),
  ADD KEY `nama_akun` (`nama_akun`),
  ADD KEY `saldo` (`saldo`),
  ADD KEY `jenis` (`jenis`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;

--
-- AUTO_INCREMENT for table `user2`
--
ALTER TABLE `user2`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`no_akun`) REFERENCES `akun` (`no_reff`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user2` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
