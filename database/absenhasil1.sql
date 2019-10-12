-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 09:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absenhasil1`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `kodeabsen` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jamhadir` time DEFAULT NULL,
  `jampulang` time DEFAULT NULL,
  `kodep` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`kodeabsen`, `tanggal`, `jamhadir`, `jampulang`, `kodep`) VALUES
(1249, '2019-10-07', '06:10:00', '21:00:00', 1),
(1250, '2019-10-08', '08:00:00', '17:00:00', 2),
(1252, '2019-10-09', '09:00:00', '21:00:00', 1111);

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `kodeabsen` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kodep` int(10) DEFAULT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `jamhadir` time DEFAULT NULL,
  `jampulang` time DEFAULT NULL,
  `jamhadir_bulat` time DEFAULT NULL,
  `jampulang_bulat` time DEFAULT NULL,
  `ketr` varchar(100) DEFAULT NULL,
  `telat` float DEFAULT NULL,
  `lembur` float DEFAULT NULL,
  `jamkerja` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dryyer`
--

CREATE TABLE `dryyer` (
  `tanggal` date DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` int(50) DEFAULT NULL,
  `kw` int(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `hasil` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `finishing`
--

CREATE TABLE `finishing` (
  `tanggal` date DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` int(50) DEFAULT NULL,
  `kw` int(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `hasil` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotpress`
--

CREATE TABLE `hotpress` (
  `tanggal` int(11) DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` int(50) DEFAULT NULL,
  `kw` int(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `hasil` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kupasan`
--

CREATE TABLE `kupasan` (
  `tanggal` date DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` int(50) DEFAULT NULL,
  `kw` int(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `hasil` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lain`
--

CREATE TABLE `lain` (
  `tanggal` date DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` int(50) DEFAULT NULL,
  `kw` int(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `hasil` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `kodep` int(50) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jeniskelamin` varchar(50) DEFAULT NULL,
  `notelp` int(50) DEFAULT NULL,
  `kodej` int(50) DEFAULT NULL,
  `idjadwal` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`kodep`, `Nama`, `alamat`, `jeniskelamin`, `notelp`, `kodej`, `idjadwal`) VALUES
(1, 'an', 'Malang', 'Laki-laki', 2147483647, 1, 1),
(2, 'efef', 'frfrf', 'Laki-laki', 4647676, 1, 12),
(1111, 'Silvi', 'fbhgg', 'Perempuan', 2147483647, 1, 78);

-- --------------------------------------------------------

--
-- Table structure for table `tembel`
--

CREATE TABLE `tembel` (
  `tanggal` date DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` int(50) DEFAULT NULL,
  `kw` int(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `hasil` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tjabatan`
--

CREATE TABLE `tjabatan` (
  `kodej` int(10) NOT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjabatan`
--

INSERT INTO `tjabatan` (`kodej`, `jabatan`) VALUES
(1, 'Kupasan'),
(2, 'Dryer'),
(3, 'Tembel'),
(4, 'Hotpress'),
(5, 'Finishing'),
(6, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `tjadwal`
--

CREATE TABLE `tjadwal` (
  `id_jadwal` int(10) NOT NULL,
  `ket` varchar(100) DEFAULT NULL,
  `jam_masuk` time(6) DEFAULT NULL,
  `jam_pulang` time(6) DEFAULT NULL,
  `shift` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tlogin`
--

CREATE TABLE `tlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlogin`
--

INSERT INTO `tlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`kodeabsen`);

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`kodeabsen`);

--
-- Indexes for table `dryyer`
--
ALTER TABLE `dryyer`
  ADD PRIMARY KEY (`kodedept`);

--
-- Indexes for table `finishing`
--
ALTER TABLE `finishing`
  ADD PRIMARY KEY (`kodedept`);

--
-- Indexes for table `hotpress`
--
ALTER TABLE `hotpress`
  ADD PRIMARY KEY (`kodedept`);

--
-- Indexes for table `kupasan`
--
ALTER TABLE `kupasan`
  ADD PRIMARY KEY (`kodedept`);

--
-- Indexes for table `lain`
--
ALTER TABLE `lain`
  ADD PRIMARY KEY (`kodedept`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`kodep`);

--
-- Indexes for table `tembel`
--
ALTER TABLE `tembel`
  ADD PRIMARY KEY (`kodedept`);

--
-- Indexes for table `tjabatan`
--
ALTER TABLE `tjabatan`
  ADD PRIMARY KEY (`kodej`);

--
-- Indexes for table `tjadwal`
--
ALTER TABLE `tjadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tlogin`
--
ALTER TABLE `tlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `kodeabsen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1253;

--
-- AUTO_INCREMENT for table `dryyer`
--
ALTER TABLE `dryyer`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finishing`
--
ALTER TABLE `finishing`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotpress`
--
ALTER TABLE `hotpress`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kupasan`
--
ALTER TABLE `kupasan`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lain`
--
ALTER TABLE `lain`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `kodep` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tembel`
--
ALTER TABLE `tembel`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tjabatan`
--
ALTER TABLE `tjabatan`
  MODIFY `kodej` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tjadwal`
--
ALTER TABLE `tjadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tlogin`
--
ALTER TABLE `tlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
