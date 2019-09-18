-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 02 Agu 2019 pada 13.40
-- Versi server: 10.1.28-MariaDB
-- Versi PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sasdik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `kdagama` varchar(20) NOT NULL,
  `nmagama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`kdagama`, `nmagama`) VALUES
('A002', 'Buddha'),
('A08382', 'Konghucu'),
('A0993', 'Protestan'),
('A11', 'Khatolik'),
('A3234', 'Hindu'),
('A9992', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `jurusan`) VALUES
(1, 'Administrasi Perkantoran'),
(2, 'Akuntansi'),
(3, 'Perbankan'),
(4, 'Pemasaran'),
(5, 'Alfamart'),
(6, 'Multimedia'),
(7, 'Teknologi Komputer dan Jaringan'),
(8, 'Rekayasa Perangkat Lunak'),
(9, 'Kimia Industri'),
(10, 'Persiapan Grafika'),
(11, 'Produksi Grafika'),
(12, 'Geomatika'),
(111, 'asdasdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('hafid', 'hafid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama` varchar(123) DEFAULT NULL,
  `jk` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(123) DEFAULT NULL,
  `no_hp` varchar(25) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `nama_ortu` varchar(50) DEFAULT NULL,
  `uk_seragam` enum('S','M','L','XL','XXL','3XL') DEFAULT NULL,
  `organisasi` varchar(123) DEFAULT NULL,
  `asal_sekolah` varchar(123) DEFAULT NULL,
  `motto` text,
  `status` enum('Diterima','Ditolak','Dipertimbangkan','Belum Dikonfirmasi') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `jk`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `kelas`, `nama_ortu`, `uk_seragam`, `organisasi`, `asal_sekolah`, `motto`, `status`) VALUES
(1, 'Achmad Hafid S', 'Laki - Laki', 'Islam', 'Lumajang', '2001-01-07', 'Lumajang', '085233561310', 'XII', 'Khusnul Chotimah', 'L', 'Organisasi Siswa Intra Sekolah', 'SMK Negeri 1 Lumajang', 'Bermain Sambil Belajar', 'Dipertimbangkan'),
(2, 'Achmad Hafid S', 'Laki - Laki', 'Islam', 'Lumajang', '2001-01-07', 'Lumajang', '085233561310', 'XII', 'Khusnul Chotimah', 'L', 'Organisasi Siswa Intra Sekolah', 'SMK Negeri 1 Lumajang', 'Bermain Sambil Belajar', 'Diterima'),
(9, 'Achmad Hafid S', 'Laki - Laki', 'Islam', 'Lumajang', '2001-07-01', 'Lumajang', '0823 - 3476 - 7680', 'XII', 'Khusnul Chotimah', 'L', 'OSIS', 'SMK', 'Hidup Lah kau', 'Belum Dikonfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`kdagama`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
