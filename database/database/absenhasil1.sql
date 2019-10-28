-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 08:52 AM
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
  `kodep` int(10) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `jamhadir` time DEFAULT NULL,
  `jampulang` time DEFAULT NULL,
  `jamhadir_bulat` time DEFAULT NULL,
  `jampulang_bulat` time DEFAULT NULL,
  `shift` int(5) NOT NULL,
  `ketr` varchar(100) DEFAULT NULL,
  `telat` float NOT NULL,
  `lembur` float DEFAULT NULL,
  `jamkerja` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`kodeabsen`, `tanggal`, `kodep`, `Nama`, `jamhadir`, `jampulang`, `jamhadir_bulat`, `jampulang_bulat`, `shift`, `ketr`, `telat`, `lembur`, `jamkerja`) VALUES
(1300, '2019-10-26', 1111, 'Silvi', '15:05:11', '15:05:42', '08:00:00', '18:00:00', 1, 'lembur hanero\r\n', 7.5, 0, 0),
(0, '2019-10-26', 1205, 'Hadi', '00:00:00', '00:00:00', '06:00:00', '17:00:00', 1, 'Tidak Punya Ceklok\r\n', 7.5, 0, 0),
(1301, '2019-10-26', 2222, 'Unc', '15:05:19', '15:05:47', '06:00:00', '15:00:00', 1, 'tidak punya ceklok', 7.5, 0, 0),
(0, '2019-10-26', 3333, 'tr', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1, '', 7.5, 0, 0),
(0, '2019-10-26', 5555, 'Per', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1, '', 7.5, 0, 0),
(0, '2019-10-26', 6104, 'Denik', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1, '', 7.5, 0, 0),
(0, '2019-10-26', 6106, 'Ajeng', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1, '', 7.5, 0, 0),
(1302, '2019-10-26', 6107, 'Ima Indriyati', '15:05:27', '15:05:51', '15:30:00', '15:00:00', 2, 'lembur antar jeruk', 7.5, 0, 0);

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
(1111, 'Silvi', 'Jalan Kedawung Gang XI / No. 15', '', 896798744, 5, 2),
(1205, 'Hadi', 'Jalan ajalan', '', 8999, 1, 1),
(2222, 'Unc', 'kedawung gang xi k\r\n', 'L', 0, 0, 1),
(3333, 'tr', 'halooooooooooooooo', 'P', 0, 0, 1),
(5555, 'Per', 'Jl. Dr Cipto Lawang', 'P', 9888, 0, 1),
(6104, 'Denik', 'Bedali Lawang', 'P', 8999999, 1, 1),
(6106, 'Ajeng', 'Lawang Malang', 'P', 80988, 1, 1),
(6107, 'Ima Indriyati', 'Jabung Tumpang', 'Perempuan', 900899, 1, 1);

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
(1264, '2019-10-28', '08:00:00', '18:00:00', 1111),
(1265, '2019-10-26', '06:00:00', '15:00:00', 2222),
(1266, '2019-10-28', '06:00:00', '15:00:00', 6104),
(1268, '2019-10-28', '06:00:00', '17:00:00', 1205),
(1269, '2019-10-28', '15:30:00', '15:00:00', 6107);

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

--
-- Dumping data for table `tjadwal`
--

INSERT INTO `tjadwal` (`id_jadwal`, `ket`, `jam_masuk`, `jam_pulang`, `shift`) VALUES
(1, '-', '06:00:00.000000', '17:00:00.000000', 'Pagi'),
(2, '-', '08:00:00.000000', '17:00:00.000000', 'Pagi2'),
(3, '-', '07:00:00.000000', '17:00:00.000000', 'Jeruk'),
(4, '-', '17:00:00.000000', '06:00:00.000000', 'Malam'),
(5, '-', '06:00:00.000000', '15:00:00.000000', 'Pagi Kantor');

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
  ADD PRIMARY KEY (`kodep`);

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
-- AUTO_INCREMENT for table `tabsen`
--
ALTER TABLE `tabsen`
  MODIFY `kodeabsen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1270;

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
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tlogin`
--
ALTER TABLE `tlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
