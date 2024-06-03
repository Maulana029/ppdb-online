-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2024 pada 18.28
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb-online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peserta_baru`
--

CREATE TABLE `tbl_peserta_baru` (
  `id` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `jumlah_saudara_kandung` varchar(10) NOT NULL,
  `status_keluarga` varchar(30) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `jurusan` varchar(15) NOT NULL,
  `gelombang` varchar(20) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nik_ayah` varchar(20) NOT NULL,
  `tempat_lahir_ayah` varchar(40) NOT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `pendidikan_ayah` varchar(25) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `penghasilan_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `nik_ibu` varchar(20) NOT NULL,
  `tempat_lahir_ibu` varchar(40) NOT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `pendidikan_ibu` varchar(25) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ibu` varchar(20) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `nik_wali` varchar(20) NOT NULL,
  `tempat_lahir_wali` varchar(40) NOT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `pendidikan_wali` varchar(25) NOT NULL,
  `pekerjaan_wali` varchar(20) NOT NULL,
  `penghasilan_wali` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_peserta_baru`
--

INSERT INTO `tbl_peserta_baru` (`id`, `nama_lengkap`, `nisn`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kabupaten`, `anak_ke`, `jumlah_saudara_kandung`, `status_keluarga`, `asal_sekolah`, `no_wa`, `jurusan`, `gelombang`, `nama_ayah`, `nik_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nik_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nama_wali`, `nik_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`) VALUES
(2, 'Ahmad Maulana', '0089898787', '3216000000000000', 'Bekasi', '2009-09-09', 'Laki - laki', 'Islam', 'KP. PULO TIMAHA', '010', '008', 'Babelan Kota', 'Babelan', 'Bekasi', '1', '2', 'Anak Kandung', 'SMK Attaqwa', '089676788909', 'TKJ', 'Gel - 1', 'Ahmad', '3216000000000000', 'Bekasi', '1964-11-06', 'SD', 'Buruh', '500,000', 'Yuni', '3216000000000000', 'Bekasi', '1981-01-05', 'SD', 'Ibu Rumah Tangga', '-', '', '', '', '0000-00-00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_peserta_baru`
--
ALTER TABLE `tbl_peserta_baru`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_peserta_baru`
--
ALTER TABLE `tbl_peserta_baru`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
