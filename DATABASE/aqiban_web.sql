-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2020 pada 16.40
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqiban_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akun`
--

CREATE TABLE `data_akun` (
  `Nama_Depan` varchar(30) DEFAULT NULL,
  `Nama_Belakang` varchar(30) DEFAULT NULL,
  `Jenis_Kelamin` varchar(30) DEFAULT NULL,
  `No_Telepon` varchar(12) DEFAULT NULL,
  `Tanggal_Lahir` varchar(12) DEFAULT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_akun`
--

INSERT INTO `data_akun` (`Nama_Depan`, `Nama_Belakang`, `Jenis_Kelamin`, `No_Telepon`, `Tanggal_Lahir`, `username`, `password`) VALUES
('vickri', 'Fahrurozi', 'Laki-Laki', '083815718369', '02/04/2000', 'vickri', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembayaran`
--

CREATE TABLE `data_pembayaran` (
  `Nama_Depan` varchar(30) DEFAULT NULL,
  `Nama_Belakang` varchar(30) DEFAULT NULL,
  `Pesanan` varchar(30) DEFAULT NULL,
  `Harga` varchar(12) DEFAULT NULL,
  `Status_Pembayaran` varchar(12) DEFAULT NULL,
  `No_Telepon` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pembayaran`
--

INSERT INTO `data_pembayaran` (`Nama_Depan`, `Nama_Belakang`, `Pesanan`, `Harga`, `Status_Pembayaran`, `No_Telepon`) VALUES
('Vickri', 'Fahrurozi', 'K.Jantan - Paket D', 'Rp1.650.000', 'Belum Lunas', '083815718369');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pesanan`
--

CREATE TABLE `data_pesanan` (
  `Nama_Depan` varchar(30) DEFAULT NULL,
  `Nama_Belakang` varchar(30) DEFAULT NULL,
  `No_Telepon` varchar(12) DEFAULT NULL,
  `Email` varchar(35) DEFAULT NULL,
  `Alamat_Rumah` varchar(50) DEFAULT NULL,
  `Paket` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pesanan`
--

INSERT INTO `data_pesanan` (`Nama_Depan`, `Nama_Belakang`, `No_Telepon`, `Email`, `Alamat_Rumah`, `Paket`) VALUES
('Vickri', 'Fahrurozi', '083815718369', 'vickrifahrurozi@gmail.com', 'jl.raya serang km.35 jayanti banten 15610', 'K.Jantan - Paket D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_testimoni`
--

CREATE TABLE `data_testimoni` (
  `username` varchar(30) NOT NULL,
  `isi_testi` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_akun`
--
ALTER TABLE `data_akun`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `data_testimoni`
--
ALTER TABLE `data_testimoni`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
