-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2019 pada 13.57
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_statlog`
--

CREATE TABLE `tb_statlog` (
  `ID` int(3) NOT NULL,
  `Umur` int(3) DEFAULT NULL,
  `PenyakitKanak` int(1) DEFAULT NULL,
  `Kecelakaan` int(1) DEFAULT NULL,
  `Bedah` int(1) DEFAULT NULL,
  `DemamTinggi` int(2) DEFAULT NULL,
  `Merokok` int(2) DEFAULT NULL,
  `HasilDiagnosa` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_statlog`
--

INSERT INTO `tb_statlog` (`ID`, `Umur`, `PenyakitKanak`, `Kecelakaan`, `Bedah`, `DemamTinggi`, `Merokok`, `HasilDiagnosa`) VALUES
(1, 78, 4, 1, 1, 4, 4, 4),
(2, 69, 4, 1, 4, 1, 12, 4),
(3, 94, 4, 1, 4, 1, 12, 4),
(4, 67, 4, 1, 1, 1, 12, 4),
(5, 67, 4, 1, 4, 1, 8, 4),
(6, 78, 4, 4, 1, 4, 8, 4),
(7, 69, 4, 1, 4, -4, 16, 4),
(8, 75, 4, 1, 4, 1, 12, 4),
(9, 67, 4, 4, 1, 1, 12, 4),
(10, 67, 1, 1, 4, 1, 8, 4),
(11, 67, 1, 1, 4, 1, 8, 4),
(12, 51, 4, 4, 1, -4, 12, 4),
(13, 78, 4, 1, 1, 1, 16, 8),
(14, 78, 4, 4, 4, 1, 8, 8),
(15, 58, 1, 1, 4, 1, 16, 8),
(16, 58, 4, 4, 4, -4, 12, 8),
(17, 58, 4, 1, 4, 1, 12, 8),
(18, 64, 4, 1, 4, 1, 16, 8),
(19, 67, 4, 1, 4, 1, 12, 8),
(20, 78, 4, 1, 4, 4, 16, 8),
(21, 86, 4, 4, 4, 4, 16, 8),
(22, 94, 4, 4, 4, 1, 4, 8),
(23, 11, 4, 1, 4, 4, 8, 8),
(24, 51, 4, 1, 1, 4, 12, 8),
(25, 56, 4, 1, 4, 1, 16, 8),
(26, 56, 4, 1, 1, 1, 16, 8),
(27, 56, 4, 4, 1, 1, 16, 8),
(28, 61, 4, 1, 4, 1, 16, 8),
(29, 61, 4, 1, 4, 1, 16, 8),
(30, 64, 1, 1, 1, 1, 16, 8);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_statlog`
--
ALTER TABLE `tb_statlog`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_statlog`
--
ALTER TABLE `tb_statlog`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
