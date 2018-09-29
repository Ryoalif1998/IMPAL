-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2018 at 02:18 PM
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
-- Database: `tubes_impal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` char(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `id_laporan` char(6) NOT NULL,
  `id_admin` char(6) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pemasukan_univ` char(6) NOT NULL,
  `id_pengeluaran_univ` char(6) NOT NULL,
  `jumlah_pemasukan_univ` int(12) NOT NULL,
  `jumlah_pengeluaran_univ` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan_fakultas`
--

CREATE TABLE `pemasukan_fakultas` (
  `id_pemasukan_fakultas` char(6) NOT NULL,
  `id_pemasukan_jurusan` char(6) NOT NULL,
  `nama_fakultas` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pemasukan_fakultas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan_jurusan`
--

CREATE TABLE `pemasukan_jurusan` (
  `id_pemasukan_jurusan` char(6) NOT NULL,
  `nama_jurusan` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pemasukan_jurusan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan_univ`
--

CREATE TABLE `pemasukan_univ` (
  `id_pemasukan_univ` char(6) NOT NULL,
  `id_pemasukan_fakultas` char(6) NOT NULL,
  `nama_univ` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pemasukan_univ` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_fakultas`
--

CREATE TABLE `pengeluaran_fakultas` (
  `id_pengeluaran_fakultas` char(6) NOT NULL,
  `nama_fakultas` varchar(12) NOT NULL,
  `id_pengeluaran_jurusan` char(6) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pengeluaran_fakultas` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_jurusan`
--

CREATE TABLE `pengeluaran_jurusan` (
  `id_pengeluaran_jurusan` char(6) NOT NULL,
  `nama_jurusan` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pengeluaran_jurusan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_univ`
--

CREATE TABLE `pengeluaran_univ` (
  `id_pengeluaran_univ` char(6) NOT NULL,
  `id_pengeluaran_fakultas` char(6) NOT NULL,
  `nama_univ` varchar(12) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pengeluaran_univ` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pemasukan_fakultas`
--
ALTER TABLE `pemasukan_fakultas`
  ADD PRIMARY KEY (`id_pemasukan_fakultas`);

--
-- Indexes for table `pemasukan_jurusan`
--
ALTER TABLE `pemasukan_jurusan`
  ADD PRIMARY KEY (`id_pemasukan_jurusan`);

--
-- Indexes for table `pemasukan_univ`
--
ALTER TABLE `pemasukan_univ`
  ADD PRIMARY KEY (`id_pemasukan_univ`);

--
-- Indexes for table `pengeluaran_fakultas`
--
ALTER TABLE `pengeluaran_fakultas`
  ADD PRIMARY KEY (`id_pengeluaran_fakultas`);

--
-- Indexes for table `pengeluaran_jurusan`
--
ALTER TABLE `pengeluaran_jurusan`
  ADD PRIMARY KEY (`id_pengeluaran_jurusan`);

--
-- Indexes for table `pengeluaran_univ`
--
ALTER TABLE `pengeluaran_univ`
  ADD PRIMARY KEY (`id_pengeluaran_univ`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `laporan_keuangan` (`id_laporan`);

--
-- Constraints for table `pemasukan_fakultas`
--
ALTER TABLE `pemasukan_fakultas`
  ADD CONSTRAINT `pemasukan_fakultas_ibfk_1` FOREIGN KEY (`id_pemasukan_fakultas`) REFERENCES `pemasukan_univ` (`id_pemasukan_univ`);

--
-- Constraints for table `pemasukan_jurusan`
--
ALTER TABLE `pemasukan_jurusan`
  ADD CONSTRAINT `pemasukan_jurusan_ibfk_1` FOREIGN KEY (`id_pemasukan_jurusan`) REFERENCES `pemasukan_fakultas` (`id_pemasukan_fakultas`);

--
-- Constraints for table `pemasukan_univ`
--
ALTER TABLE `pemasukan_univ`
  ADD CONSTRAINT `pemasukan_univ_ibfk_1` FOREIGN KEY (`id_pemasukan_univ`) REFERENCES `laporan_keuangan` (`id_laporan`);

--
-- Constraints for table `pengeluaran_fakultas`
--
ALTER TABLE `pengeluaran_fakultas`
  ADD CONSTRAINT `pengeluaran_fakultas_ibfk_1` FOREIGN KEY (`id_pengeluaran_fakultas`) REFERENCES `pengeluaran_univ` (`id_pengeluaran_univ`);

--
-- Constraints for table `pengeluaran_jurusan`
--
ALTER TABLE `pengeluaran_jurusan`
  ADD CONSTRAINT `pengeluaran_jurusan_ibfk_1` FOREIGN KEY (`id_pengeluaran_jurusan`) REFERENCES `pengeluaran_fakultas` (`id_pengeluaran_fakultas`);

--
-- Constraints for table `pengeluaran_univ`
--
ALTER TABLE `pengeluaran_univ`
  ADD CONSTRAINT `pengeluaran_univ_ibfk_1` FOREIGN KEY (`id_pengeluaran_univ`) REFERENCES `laporan_keuangan` (`id_laporan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
