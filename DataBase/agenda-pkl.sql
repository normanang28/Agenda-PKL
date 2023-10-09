-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 05:51 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pklagenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absen` int(4) NOT NULL,
  `id_pengguna` int(4) NOT NULL,
  `absen` varchar(100) NOT NULL,
  `tanggal_absen` date NOT NULL DEFAULT current_timestamp(),
  `id_sekolah` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absen`, `id_pengguna`, `absen`, `tanggal_absen`, `id_sekolah`) VALUES
(7, 22, 'Sakit', '2023-06-03', 10),
(10, 27, 'Hadir', '2023-06-05', 11),
(11, 25, 'Hadir', '2023-06-05', 10),
(12, 25, 'Izin', '2023-06-07', 10);

-- --------------------------------------------------------

--
-- Table structure for table `absensipt`
--

CREATE TABLE `absensipt` (
  `id_absenpt` int(4) NOT NULL,
  `id_pengguna` int(4) NOT NULL,
  `absenpt` varchar(100) NOT NULL,
  `tanggal_absenpt` date NOT NULL DEFAULT current_timestamp(),
  `id_pt` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensipt`
--

INSERT INTO `absensipt` (`id_absenpt`, `id_pengguna`, `absenpt`, `tanggal_absenpt`, `id_pt`) VALUES
(6, 22, 'Hadir', '2023-06-03', 11),
(8, 25, 'Sakit', '2023-06-05', 11),
(9, 25, 'Hadir', '2023-06-05', 13),
(10, 25, 'Hadir', '2023-06-05', 11),
(11, 25, 'Izin', '2023-06-07', 11);

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(4) NOT NULL,
  `jam_pulang` varchar(100) NOT NULL,
  `rencana_pekerjaan` varchar(100) NOT NULL,
  `relalisasi_pekerjaan` varchar(100) NOT NULL,
  `penugasan_atasan` varchar(100) NOT NULL,
  `penemuan_masalah` varchar(100) NOT NULL,
  `maker` int(4) NOT NULL,
  `tanggal_agenda` datetime NOT NULL DEFAULT current_timestamp(),
  `tgl` date NOT NULL DEFAULT current_timestamp(),
  `persetujuan` varchar(100) NOT NULL,
  `persetujuan_pt` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `jam_pulang`, `rencana_pekerjaan`, `relalisasi_pekerjaan`, `penugasan_atasan`, `penemuan_masalah`, `maker`, `tanggal_agenda`, `tgl`, `persetujuan`, `persetujuan_pt`) VALUES
(4, '17.00', 'Edit Listing', 'Ngedit foto', 'Cari Kwitansi', 'Ga ketemu', 61, '2023-06-03 00:00:00', '2023-06-05', '', ''),
(10, '17.00', '1', '1', '1', '1', 61, '2023-06-05 16:06:14', '2023-06-05', '', ''),
(14, '16.00', 'Edit', 'posting', 'Cari Kwitansi', 'Ga ketemu', 80, '2023-06-05 20:25:06', '2023-06-05', 'Setuju', 'Tidak Setuju'),
(15, '15.00', 'POsting', 'vidio', 'buat surat', 'pena habis tinta', 80, '2023-06-07 22:26:30', '2023-06-07', 'Setuju', 'Setuju');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(4) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_sekolah` int(4) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL,
  `catatan` varchar(1000) NOT NULL,
  `tanggal_nilai` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nama_siswa`, `id_sekolah`, `nama_guru`, `nilai`, `catatan`, `tanggal_nilai`) VALUES
(5, '1', 10, '11', 'D (Kurang)', '1', '2023-06-05'),
(6, 'Ferdi', 11, 'Bu tuti', 'B (Baik)', 'Semangat', '2023-06-05'),
(7, 'Norman1', 10, 'Pak if', 'A (Sangat Baik)', 'keren1', '2023-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `nilaipt`
--

CREATE TABLE `nilaipt` (
  `id_nilaipt` int(4) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_pt` int(4) NOT NULL,
  `nama_pembimbing` varchar(100) NOT NULL,
  `nilaipt` varchar(100) NOT NULL,
  `catatanpt` varchar(100) NOT NULL,
  `tanggal_nilaipt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilaipt`
--

INSERT INTO `nilaipt` (`id_nilaipt`, `nama_siswa`, `id_pt`, `nama_pembimbing`, `nilaipt`, `catatanpt`, `tanggal_nilaipt`) VALUES
(7, 'Ferdi1', 11, 'Putri1', 'A (Sangat Baik)', 'baik baik', '2023-06-05'),
(8, 'Jessy1', 11, 'Windi1', 'B (Baik)', 'Baik baik saja', '2023-06-05'),
(9, 'winsen1', 11, 'Putri1', 'B (Baik)', 'Baik2', '2023-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(4) NOT NULL,
  `nama` varchar(1000) DEFAULT NULL,
  `jk` varchar(10) NOT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `id_user` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama`, `jk`, `email`, `telp`, `alamat`, `id_user`) VALUES
(25, 'Ferdi', 'Laki-Laki', '1234567890', '1', '1', 64),
(31, 'Jessy', 'Perempuan', 'jessy@gmail.com', '086313512451', 'batam', 78),
(32, 'norman', 'Laki-Laki', 'norman@gmail.com', '08136521321', 'citra buana indah', 79),
(33, 'winsen', 'Laki-Laki', 'winsen@gmail.com', '08765432123', 'PU', 80);

-- --------------------------------------------------------

--
-- Table structure for table `pt`
--

CREATE TABLE `pt` (
  `id_pt` int(4) NOT NULL,
  `nama_pt` varchar(1000) DEFAULT NULL,
  `alamat_pt` varchar(1000) NOT NULL,
  `telp_pt` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pt`
--

INSERT INTO `pt` (`id_pt`, `nama_pt`, `alamat_pt`, `telp_pt`) VALUES
(11, 'Promex batam city', 'Nagoya', '0812345678901'),
(13, 'PT Besar Kecil', 'Batam Kota batam', '08097654321324');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(4) NOT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `alamat_sekolah` varchar(1000) NOT NULL,
  `telp_sekolah` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `telp_sekolah`) VALUES
(10, 'Permata Harapan', 'Batu Batam', '081287654321'),
(11, 'Bodhidharrma', 'Batam Centre', '08123453121');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(64, 'Ferdi', '8bf4bb0e2efad01abe522bf314504a49', 1),
(78, 'jessy', '6b9611669f31f2a9a2c9e80d185b127e', 2),
(79, 'norman', '202cb962ac59075b964b07152d234b70', 3),
(80, 'winsen', '202cb962ac59075b964b07152d234b70', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `absensipt`
--
ALTER TABLE `absensipt`
  ADD PRIMARY KEY (`id_absenpt`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilaipt`
--
ALTER TABLE `nilaipt`
  ADD PRIMARY KEY (`id_nilaipt`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `NMA` (`nama`) USING HASH,
  ADD UNIQUE KEY `EMA` (`email`) USING HASH;

--
-- Indexes for table `pt`
--
ALTER TABLE `pt`
  ADD PRIMARY KEY (`id_pt`),
  ADD UNIQUE KEY `TELPT` (`telp_pt`),
  ADD UNIQUE KEY `NMAPT` (`nama_pt`) USING HASH;

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD UNIQUE KEY `NMASKLH` (`nama_sekolah`),
  ADD UNIQUE KEY `TELPSKLH` (`telp_sekolah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `USER` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absen` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `absensipt`
--
ALTER TABLE `absensipt`
  MODIFY `id_absenpt` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nilaipt`
--
ALTER TABLE `nilaipt`
  MODIFY `id_nilaipt` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pt`
--
ALTER TABLE `pt`
  MODIFY `id_pt` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
