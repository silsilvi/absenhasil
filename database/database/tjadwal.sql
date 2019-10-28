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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tjadwal`
--
ALTER TABLE `tjadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tjadwal`
--
ALTER TABLE `tjadwal`
  MODIFY `id_jadwal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
