-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 10:52 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `managemen_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE IF NOT EXISTS `data_siswa` (
  `induk_siswa` varchar(50) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `tempat_tinggal` varchar(200) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username_siswa` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`induk_siswa`, `nama_siswa`, `tempat_tinggal`, `telp`, `agama`, `gender`, `tempat_lahir`, `tanggal_lahir`, `username_siswa`, `password`) VALUES
('1212', 'diana', 'pasuruan', '098978', 'Islam', 'P', 'malang', '2017-05-19', 'asli', 'as');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
 ADD PRIMARY KEY (`induk_siswa`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
