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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabsen`
--
ALTER TABLE `tabsen`
  ADD PRIMARY KEY (`kodeabsen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabsen`
--
ALTER TABLE `tabsen`
  MODIFY `kodeabsen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1270;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
