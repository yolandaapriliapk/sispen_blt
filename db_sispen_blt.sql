-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2020 pada 16.34
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sispen_blt`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(4, 'admin', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_blt2020`
--

CREATE TABLE `tb_blt2020` (
  `id_blt2020` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_kblain` int(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `keluarga_sakit` varchar(255) NOT NULL,
  `lantai` varchar(255) NOT NULL,
  `dinding` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_blt2020`
--

INSERT INTO `tb_blt2020` (`id_blt2020`, `nama`, `nik`, `alamat`, `id_kblain`, `pekerjaan`, `keluarga_sakit`, `lantai`, `dinding`) VALUES
(35, 'Via Yolanda', '123', 'Kepanjen Malang', 0, 'Kehilangan pekerjaan', 'Sakit kronis / Sakit menahun', 'Tanah', 'Bambu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kbantuanlain`
--

CREATE TABLE `tb_kbantuanlain` (
  `id_kblain` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kbantuanlain`
--

INSERT INTO `tb_kbantuanlain` (`id_kblain`, `kategori`) VALUES
(1, 'Tidak menerima bantuan lain'),
(2, 'PKH'),
(3, 'BPNT'),
(4, 'Kartu Prakerja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `no` int(11) NOT NULL,
  `kriteria` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`no`, `kriteria`, `kategori`) VALUES
(1, 'Menerima bantuan lain', 'Tidak menerima bantuan lain, PKH, BPNT, Prakerja'),
(2, 'Pekerjaan', 'Kehilangan pekerjaan, Pekerja lepas, Petani, Pedagang, Wiraswasta, Pegawai Swasta, PNS, Pensiunan'),
(3, 'Memiliki keluarga sakit', 'Sakit kronis, Sakit menahun, Rentan sakit, Tidak memiliki anggota keluarga sakit'),
(4, 'Lantai rumah', 'Tanah, bambu, kayu murah, semen, ubin'),
(5, 'Dinding rumah', 'Bambu, kayu murah, tembok tanpa plester, tembok halus, tembok keramik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_blt2020`
--
ALTER TABLE `tb_blt2020`
  ADD PRIMARY KEY (`id_blt2020`),
  ADD KEY `id_kblain` (`id_kblain`);

--
-- Indeks untuk tabel `tb_kbantuanlain`
--
ALTER TABLE `tb_kbantuanlain`
  ADD PRIMARY KEY (`id_kblain`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_blt2020`
--
ALTER TABLE `tb_blt2020`
  MODIFY `id_blt2020` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tb_kbantuanlain`
--
ALTER TABLE `tb_kbantuanlain`
  MODIFY `id_kblain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
