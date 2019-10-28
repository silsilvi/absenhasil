-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2019 at 08:51 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`kodep`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
