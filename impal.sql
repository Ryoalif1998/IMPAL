-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 05:17 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `nama_univ` varchar(20) NOT NULL,
  `nama_fakultas` varchar(20) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `tanggal_pemasukan` date NOT NULL,
  `jumlah_pemasukan` int(20) NOT NULL,
  `asal_pemasukan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `nama_univ`, `nama_fakultas`, `nama_jurusan`, `tanggal_pemasukan`, `jumlah_pemasukan`, `asal_pemasukan`) VALUES
(1, 'Universitas Telkom', 'Fakultas Informatika', 'S1 Teknik Informatik', '2010-10-23', 15000, 'BPP'),
(3, 'Universitas Telkom', 'Fakultas Informatika', 'Jurusan A', '2010-12-09', 15000, 'Pembayaran BPP');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `nama_univ` varchar(20) NOT NULL,
  `nama_fakultas` varchar(20) NOT NULL,
  `nama_jurusan` varchar(20) NOT NULL,
  `tanggal_pengeluaran` date NOT NULL,
  `jumlah_pengeluaran` int(20) NOT NULL,
  `asal_pengeluaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `nama_univ`, `nama_fakultas`, `nama_jurusan`, `tanggal_pengeluaran`, `jumlah_pengeluaran`, `asal_pengeluaran`) VALUES
(1, 'Universitas Telkom', 'Fakultas Elektro', 'Jurusan B', '2010-12-01', 12000, 'Pembayaran BPP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
