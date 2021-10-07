-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 02:29 PM
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
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(5) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `hargajual` double NOT NULL,
  `hargabeli` double NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `nama`, `hargajual`, `hargabeli`, `satuan`) VALUES
('KD01', 'Pasta Gigi', 6000, 4500, 'pcs'),
('KD02', 'Sabun', 3000, 2500, 'pcs'),
('KD03', 'Shampoo', 10000, 8000, 'pcs'),
('KD04', 'Sikat', 2000, 1500, 'pcs');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `nomor` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `konsumen` varchar(250) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hargasatuan` double NOT NULL,
  `hargatotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`nomor`, `tanggal`, `konsumen`, `kode`, `jumlah`, `hargasatuan`, `hargatotal`) VALUES
('1', '2020-11-09', 'Yono', 'KD01', 2, 5000, 10000),
('11', '2020-11-09', 'c', 'KD01', 1, 5000, 5000),
('12', '2020-11-09', 'd', 'KD03', 4, 10000, 40000),
('FK002', '2020-11-09', 'Sigma', 'KD02', 9, 3000, 27000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`nomor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
