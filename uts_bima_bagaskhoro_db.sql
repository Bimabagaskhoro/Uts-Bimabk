-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 10.20
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_bima_bagaskhoro_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kelas`
--

CREATE TABLE `data_kelas` (
  `id_kelas` int(11) NOT NULL,
  `mataKuliah_kls` varchar(100) NOT NULL,
  `kode_kelas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_kelas`
--

INSERT INTO `data_kelas` (`id_kelas`, `mataKuliah_kls`, `kode_kelas`) VALUES
(6, 'JARINGAN KOMPUTER', 'R-417'),
(7, 'ARSITEKTUR KOMPUTER', 'R-417'),
(8, 'PANCASILA', 'R-103'),
(9, 'OBJECT ORIENTED ANALYSIS DESIGN', 'R-416'),
(10, 'METODE NUMERIK', 'R-416'),
(11, 'SISTEM OPERASI', 'R-417'),
(12, 'PEMROGRAMAN WEBSITE', 'R-417'),
(13, 'MANAGEMENT SEKURITI', 'R-103'),
(14, 'PENDIDIKAN WIRAUSAHA', 'R-420'),
(15, 'PEMROGRAMAN MOBILE', 'R-420');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_matkul`
--

CREATE TABLE `data_matkul` (
  `id` int(11) NOT NULL,
  `kodematkul` varchar(100) DEFAULT NULL,
  `matkul` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_matkul`
--

INSERT INTO `data_matkul` (`id`, `kodematkul`, `matkul`) VALUES
(7, 'JARKOM', 'JARINGAN KOMPUTER'),
(8, 'ARKOM', 'ARSITEKTUR KOMPUTER'),
(9, 'PANCASILA', 'PANCASILA'),
(10, 'OOAD', 'OBJECT ORIENTED ANALYSIS DESIGN'),
(11, 'METNUM', 'METODE NUMERIK'),
(12, 'SO', 'SISTEM OPERASI'),
(13, 'PEMWEB', 'PEMROGRAMAN WEB'),
(14, 'MANSEK', 'MANAGEMENT SEKURITI'),
(15, 'PENDWIR', 'PENDIDIKAN WIRAUSAHA'),
(16, 'PEMMOB', 'PEMBROGRAMAN MOBILE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sesi`
--

CREATE TABLE `data_sesi` (
  `id_sesi` int(11) NOT NULL,
  `matkul_sesi` varchar(100) NOT NULL,
  `kode_sesi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_sesi`
--

INSERT INTO `data_sesi` (`id_sesi`, `matkul_sesi`, `kode_sesi`) VALUES
(1, 'JARINGAN KOMPUTER', 'Senin, 17.00 - 19.30'),
(2, 'ARSITEKTUR KOMPUTER', 'Selasa, 17.00 - 19.30'),
(3, 'PANCASILA', 'Selasa, 19.30 - 21.00'),
(4, 'OBJECT ORIENTED ANALYSIS DESIGN', 'Senin, 19.30 - 21.00'),
(5, 'METODE NUMERIK', 'Jumat, 19.30 - 21.30'),
(6, 'SISTEM OPERASI', 'Rabu, 17.00 - 19.30'),
(7, 'PEMROGRAMAN WEBSITE', 'Rabu, 19.30 - 21.30'),
(8, 'MANAGEMENT SEKURITI', 'Kamis, 17.00 - 19.00'),
(9, 'PENDIDIKAN WIRAUSAHA', 'Kamis, 19.30 - 21.30'),
(10, 'PEMROGRAMAN MOBILE', 'Jumat, 17.00 - 19.30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `data_matkul`
--
ALTER TABLE `data_matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_sesi`
--
ALTER TABLE `data_sesi`
  ADD PRIMARY KEY (`id_sesi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kelas`
--
ALTER TABLE `data_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `data_matkul`
--
ALTER TABLE `data_matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_sesi`
--
ALTER TABLE `data_sesi`
  MODIFY `id_sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
