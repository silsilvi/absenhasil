-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 10:53 AM
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

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`kodeabsen`, `tanggal`, `kodep`, `Nama`, `jamhadir`, `jampulang`, `jamhadir_bulat`, `jampulang_bulat`, `ketr`, `telat`, `lembur`, `jamkerja`) VALUES
(139, '2019-09-30', 1111, '', '16:26:18', '16:26:49', '00:00:00', '00:00:00', 'Telat', 10.4, 0, 0),
(140, '2019-09-30', 1205, '', '16:46:36', '16:27:07', '00:00:00', '00:00:00', 'Telat', 10.8, 0, 0),
(141, '2019-09-30', 6101, '', '16:27:22', '00:00:00', '00:00:00', '00:00:00', 'Telat', 8.5, 0, 0),
(275, '2019-10-04', 1111, 'Silvi', '13:19:15', '13:19:24', '00:00:00', '00:00:00', 'Telat', 7.3, 0, 0),
(276, '2019-10-04', 3333, 'tr', '13:19:55', '13:19:59', '00:00:00', '13:00:00', 'Telat', 7.3, 0, 0),
(277, '2019-10-04', 2222, 'Unc', '16:33:59', '16:34:13', '00:00:00', '16:30:00', 'Telat', 10.6, 0, 0),
(1119, '2019-10-09', 1111, '', '10:30:29', '13:06:00', '11:00:00', '13:00:00', 'Telat', 5, 0, 2.6),
(1128, '2019-10-09', 1205, '', '13:48:42', '13:45:14', '14:00:00', '13:30:00', 'Telat', -436257, 0, 0),
(1129, '2019-10-09', 2222, 'Unc', '14:17:27', '00:00:00', '14:30:00', '00:00:00', 'Telat', 8.5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `dempul`
--

CREATE TABLE `dempul` (
  `tanggal` date DEFAULT NULL,
  `bahankurang` varchar(100) NOT NULL,
  `panjang` int(100) NOT NULL,
  `lebar` int(100) NOT NULL,
  `tebal` double NOT NULL,
  `kw` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `hasil` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailkayumasuk`
--

CREATE TABLE `detailkayumasuk` (
  `no` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `seri` int(50) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `lahan` varchar(50) DEFAULT NULL,
  `banyak` int(50) DEFAULT NULL,
  `m3` double DEFAULT NULL,
  `uang` int(50) DEFAULT NULL,
  `totalbanyak` int(50) DEFAULT NULL,
  `totalm3` float DEFAULT NULL,
  `totaluang` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailkayumasuk`
--

INSERT INTO `detailkayumasuk` (`no`, `tanggal`, `nama`, `seri`, `panjang`, `jenis`, `lahan`, `banyak`, `m3`, `uang`, `totalbanyak`, `totalm3`, `totaluang`) VALUES
(21, '2019-10-22', 'AAAA', 1111, 120, 'Keras', '1A', 9, 1, 5000000, NULL, NULL, NULL),
(22, '2019-10-22', 'BBBB', 2222, 120, 'Keras', '1A', 50, 1, 3500000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dryer`
--

CREATE TABLE `dryer` (
  `tanggal` int(11) DEFAULT NULL,
  `dryer` varchar(100) DEFAULT NULL,
  `mesin` varchar(100) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` float DEFAULT NULL,
  `kw` varchar(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `hasil` int(50) DEFAULT NULL,
  `kurang` int(100) NOT NULL
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
  `tanggal` date DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `tebal` float DEFAULT NULL,
  `kw` varchar(50) DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `banyak` int(50) DEFAULT NULL,
  `panjangh` int(100) DEFAULT NULL,
  `lebarh` int(100) DEFAULT NULL,
  `tebalh` float DEFAULT NULL,
  `kwh` varchar(100) DEFAULT NULL,
  `jenish` varchar(100) DEFAULT NULL,
  `hasil` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kayumasuk`
--

CREATE TABLE `kayumasuk` (
  `no` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `uang` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kupasan`
--

CREATE TABLE `kupasan` (
  `no` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `batang` int(100) DEFAULT NULL,
  `lahan` varchar(100) DEFAULT NULL,
  `seri` int(100) DEFAULT NULL,
  `mesin` int(11) DEFAULT NULL,
  `panjang` int(11) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `tebal` float DEFAULT NULL,
  `kw` int(11) DEFAULT NULL,
  `jenis` varchar(11) DEFAULT NULL,
  `hasil` int(11) DEFAULT NULL,
  `ket` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kupasan`
--

INSERT INTO `kupasan` (`no`, `tanggal`, `batang`, `lahan`, `seri`, `mesin`, `panjang`, `lebar`, `tebal`, `kw`, `jenis`, `hasil`, `ket`) VALUES
(34, '2019-10-22', 50, '1A', 1111, 1, 1, 1, 1, 1, 'S', 1, 'Belum'),
(35, '2019-10-22', 30, '1A', 1111, 1, 1, 1, 1, 1, 'S', 1, 'Habis'),
(36, '2019-10-22', 10, '2', 1122, 1, 1, 1, 1, 1, 'S', 200, 'Habis'),
(37, '2019-10-22', 2, '2', 1122, 1, 1, 1, 1, 1, 's', 250, 'Belum'),
(38, '2019-10-23', 11, '1A', 1111, 1, 1, 1, 1, 1, 's', 1, 'Belum'),
(39, '2019-10-24', 20, '1A', 2222, 1, 1, 1, 1, 1, 's', 120, 'Habis'),
(40, '2019-10-24', 10, '1A', 2222, 1, 1, 1, 1, 1, 's', 130, 'Habis'),
(41, '2019-10-24', 20, '1A', 2222, 1, 1, 1, 1, 1, 's', 120, 'Habis');

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
(1111, 'Silvi', 'fbhgg', 'Perempuan', 2147483647, 1, 78),
(2222, 'Lina', 'Blitar', 'Perempuan', 2147483647, 2, 4),
(4444, 'sfgggg', 'hhhhhhh', 'Laki-laki', 2147483647, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `pilihtriplek`
--

CREATE TABLE `pilihtriplek` (
  `tanggal` date DEFAULT NULL,
  `kerja` varchar(100) NOT NULL,
  `panjang` int(100) NOT NULL,
  `lebar` int(100) NOT NULL,
  `tebal` float DEFAULT NULL,
  `kw` varchar(100) NOT NULL,
  `jenis` int(100) NOT NULL,
  `hasil` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `tanggal` date DEFAULT NULL,
  `jeniskayu` varchar(50) NOT NULL,
  `jumlah` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`tanggal`, `jeniskayu`, `jumlah`) VALUES
('2019-10-14', 'Meranti', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tabsen`
--

CREATE TABLE `tabsen` (
  `kodeabsen` int(10) NOT NULL,
  `tanggal1` date DEFAULT NULL,
  `jamhadir1` time DEFAULT NULL,
  `jampulang1` time DEFAULT NULL,
  `kodep` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabsen`
--

INSERT INTO `tabsen` (`kodeabsen`, `tanggal1`, `jamhadir1`, `jampulang1`, `kodep`) VALUES
(1250, '2019-10-08', '08:00:00', '17:00:00', 2),
(1252, '2019-10-23', '09:00:00', '21:40:00', 1111),
(1254, '2019-10-23', '00:50:00', '01:30:00', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `tembel`
--

CREATE TABLE `tembel` (
  `tanggal` date DEFAULT NULL,
  `kodedept` int(10) NOT NULL,
  `kodep` int(10) DEFAULT NULL,
  `bahankurang` varchar(100) DEFAULT NULL,
  `panjang` int(50) DEFAULT NULL,
  `lebar` int(50) DEFAULT NULL,
  `tebal` float DEFAULT NULL,
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
(1, 'admin', 'admin'),
(4, 'aaa', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`kodeabsen`);

--
-- Indexes for table `detailkayumasuk`
--
ALTER TABLE `detailkayumasuk`
  ADD PRIMARY KEY (`no`);

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
-- Indexes for table `kayumasuk`
--
ALTER TABLE `kayumasuk`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `kupasan`
--
ALTER TABLE `kupasan`
  ADD PRIMARY KEY (`no`);

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
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`jeniskayu`);

--
-- Indexes for table `tabsen`
--
ALTER TABLE `tabsen`
  ADD PRIMARY KEY (`kodeabsen`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailkayumasuk`
--
ALTER TABLE `detailkayumasuk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `finishing`
--
ALTER TABLE `finishing`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotpress`
--
ALTER TABLE `hotpress`
  MODIFY `kodedept` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kayumasuk`
--
ALTER TABLE `kayumasuk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kupasan`
--
ALTER TABLE `kupasan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- AUTO_INCREMENT for table `tabsen`
--
ALTER TABLE `tabsen`
  MODIFY `kodeabsen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1255;

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
