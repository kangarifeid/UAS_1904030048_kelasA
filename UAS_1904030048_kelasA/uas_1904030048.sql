-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 07:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030048`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_pelanggan`
--

CREATE TABLE `db_pelanggan` (
  `id` int(10) NOT NULL,
  `kd_pelanggan` int(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `gambar_pelanggan` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_pelanggan`
--

INSERT INTO `db_pelanggan` (`id`, `kd_pelanggan`, `nama_pelanggan`, `email`, `alamat`, `no_hp`, `gambar_pelanggan`) VALUES
(1, 123456, 'KANG ARIF', 'kangarif.id@gmail.com', 'KRONJO', 812345678, 'foto1.png'),
(2, 123457, 'KANG AMIR', 'kangarif.eid@gmail.com', 'KRONJO', 812345678, 'foto1.png'),
(3, 123458, 'ALFINA', 'alfinadeelayanti01@gmail.com', 'KRONJO', 852138490, 'foto2.png'),
(4, 123459, 'DEELAH', 'alfinadeelayanti1@gmail.com', 'KRONJO', 852138490, 'foto2.png');

-- --------------------------------------------------------

--
-- Table structure for table `db_tokobuku`
--

CREATE TABLE `db_tokobuku` (
  `id` int(10) NOT NULL,
  `kd_buku` int(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `harga_buku` int(100) NOT NULL,
  `stok_buku` int(10) NOT NULL,
  `gambar_buku` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_tokobuku`
--

INSERT INTO `db_tokobuku` (`id`, `kd_buku`, `judul_buku`, `harga_buku`, `stok_buku`, `gambar_buku`) VALUES
(1, 123456, 'BUKU EDUCATE', 150000, 15, '1.png'),
(2, 123457, 'BUKU STACKBOOK', 100000, 20, '2.png'),
(3, 123458, 'BUKU ELECTBOOK', 200000, 15, '3.png'),
(4, 123459, 'BUKU LIBRAIN', 150000, 25, '4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_pelanggan`
--
ALTER TABLE `db_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_tokobuku`
--
ALTER TABLE `db_tokobuku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
