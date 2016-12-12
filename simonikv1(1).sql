-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Des 2016 pada 19.28
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simonikv1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bistudi`
--

CREATE TABLE `bistudi` (
  `id_bidang` int(11) NOT NULL,
  `nama_bistudi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bistudi`
--

INSERT INTO `bistudi` (`id_bidang`, `nama_bistudi`) VALUES
(1, 'MATEMATIKA'),
(2, 'IPA [BIOLOGI]'),
(3, 'IPA [KIMIA]'),
(4, 'BAHASA INGGRIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hari`
--

CREATE TABLE `hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hari`
--

INSERT INTO `hari` (`id_hari`, `nama_hari`) VALUES
(1, 'SENIN'),
(2, 'SELASA'),
(3, 'RABU'),
(4, 'KAMIS'),
(5, 'JUMAT'),
(6, 'SABTU'),
(7, 'AHAD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id_info` int(11) NOT NULL,
  `info_judul` varchar(100) NOT NULL,
  `info_isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id_info`, `info_judul`, `info_isi`) VALUES
(1, 'INFORMASI KENAIKAN GAJI', 'kenaikan gaji karyawan nurul fikri tanggal 12-12-2016'),
(2, 'PENGGAJIAN KE REKENING BSM', 'mulai tanggal 12 desember gaji akan di transfer ke rekening bsm'),
(3, 'KERINGANAN BIAYA BIMBINGAN', 'untuk staff ataupun pengajar keringanan biaya bimbingan belajar di nurul fikri akan di berlakukan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'PENGAJAR'),
(2, 'STAFF PENDAMPING'),
(3, 'MANAJER'),
(4, 'ASISTEN MANAJER');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `id_lokasi`) VALUES
(1, '115P001', 1),
(2, '115T001+', 1),
(3, '105P001', 2),
(4, '105Q001', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lemburan`
--

CREATE TABLE `lemburan` (
  `id_lembur` int(11) NOT NULL,
  `nopeg` int(11) NOT NULL,
  `alasan_lembur` text NOT NULL,
  `status` enum('Proses Koreksi','Diterima','Ditolak') NOT NULL,
  `jns_lmbr` enum('L','R') NOT NULL,
  `jam_mul` time NOT NULL,
  `jam_sel` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lemburan`
--

INSERT INTO `lemburan` (`id_lembur`, `nopeg`, `alasan_lembur`, `status`, `jns_lmbr`, `jam_mul`, `jam_sel`) VALUES
(1, 615073, 'Merapikan LJK, Setor LJK Kepusat', 'Ditolak', 'L', '01:08:10', '06:09:13'),
(2, 615000, 'Sebar brosur ke sma 36', 'Proses Koreksi', 'R', '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `code_lokasi` int(5) NOT NULL,
  `nama_lokasi` varchar(30) NOT NULL,
  `notelp1` int(15) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `code_lokasi`, `nama_lokasi`, `notelp1`, `alamat`) VALUES
(1, 115, 'rawamangun', 87223345, 'jl. paus raya no 92f rawamangun'),
(2, 105, 'BUARAN', 21998843, 'jl.buaran raya no 2 klender');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nopeg` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('admin','superadmin','lokasi','staff','pengajar') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tahun_masuk_nf` varchar(5) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `history_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hp` varchar(15) NOT NULL,
  `id_jabatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nopeg`, `password`, `nama_pegawai`, `email`, `level`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `tahun_masuk_nf`, `foto`, `status`, `history_update`, `hp`, `id_jabatan`) VALUES
(1, 615073, 'facd877fae11c5ecef26c2d0dd542d84', 'SAEFUL MUJAB.SKOM', 'saefulmujab008@hotmail.com', 'superadmin', 'WONOSOBO', '2016-11-19', 'LAKI-LAKI', '2015', 'ipul.jpg', 1, '2016-12-06 17:55:40', '081326129801', 2),
(2, 615074, 'admin', 'IMAM NURHUDA', 'IMAM@GMAIL.COM', 'admin', 'JAKARTA', '2016-11-01', 'LAKI-LAKI', '2010', '', 0, '2016-12-06 17:55:29', '081327619872', 1),
(3, 615000, '142c7718eb159c92e99b4fe5bbbdc203', 'UUT WIYANSAH', 'UUT@GMAIL.COM', 'staff', 'WONOSOBO', '2016-11-02', 'LAKI-LAKI', '2004', '', 1, '2016-12-06 17:55:18', '081326129809', 2),
(4, 619859, 'f46f944e351f8b92e40c3308318738a3', 'CUCU CANDRA', 'CUCAN@GMAIL.COM', 'admin', 'BANDUNG', '2016-11-23', 'PEREMPUAN', '2011', '', 0, '2016-12-06 17:54:58', '012345654345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bistudi`
--
ALTER TABLE `bistudi`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `lemburan`
--
ALTER TABLE `lemburan`
  ADD PRIMARY KEY (`id_lembur`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bistudi`
--
ALTER TABLE `bistudi`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lemburan`
--
ALTER TABLE `lemburan`
  MODIFY `id_lembur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
