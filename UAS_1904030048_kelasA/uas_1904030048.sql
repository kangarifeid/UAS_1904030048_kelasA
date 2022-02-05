-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2022 pada 18.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

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
-- Struktur dari tabel `db_pelanggan`
--

CREATE TABLE `db_pelanggan` (
  `id` int(10) NOT NULL,
  `kd_pelanggan` int(20) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_pelanggan`
--

INSERT INTO `db_pelanggan` (`id`, `kd_pelanggan`, `nama_pelanggan`, `email`, `alamat`, `no_hp`) VALUES
(1, 123456, 'KANG ARIF', 'kangarif.id@gmail.com', 'TANGERANG', 812345678),
(2, 123457, 'KANG AMIR', 'kangarif.eid@gmail.com', 'TANGERANG', 812345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_tokobuku`
--

CREATE TABLE `db_tokobuku` (
  `id` int(10) NOT NULL,
  `kd_buku` int(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `harga_buku` int(100) NOT NULL,
  `stok_buku` int(10) NOT NULL,
  `gambar_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_tokobuku`
--

INSERT INTO `db_tokobuku` (`id`, `kd_buku`, `judul_buku`, `harga_buku`, `stok_buku`, `gambar_buku`) VALUES
(1, 123456, 'BUKU EDUKASI', 150000, 15, 1),
(2, 123457, 'BUKU BISNIS', 100000, 20, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_pelanggan`
--
ALTER TABLE `db_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_tokobuku`
--
ALTER TABLE `db_tokobuku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
