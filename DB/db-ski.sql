-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 06:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-ski`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antri_stand`
--

CREATE TABLE `tbl_antri_stand` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `kd_stand` varchar(5) NOT NULL,
  `no_antri` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_antri_stand`
--

INSERT INTO `tbl_antri_stand` (`id`, `nama`, `email`, `tanggal_pesan`, `kd_stand`, `no_antri`) VALUES
(4, 'Anna', 'adminblog@senna.co.id', '2023-02-24', 'FT', 'FT20230224001'),
(5, 'Denny', 'demo123@gmail.com', '2023-02-24', 'LK', 'LK20230224001'),
(6, 'Toni', 'toni@email.co.id', '2023-02-24', 'FT', 'FT20230224002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id`, `nama`, `kota`, `pekerjaan`) VALUES
(1, 'Jane Doe', 'Madrid', 'Programmer'),
(2, 'Adam Smith', 'London', 'UI/UX Designer'),
(3, 'Steven Berk', 'Madrid', 'System Analyst'),
(4, 'John Drink Water', 'Jakarta', 'Programmer'),
(5, 'Alphonse Calman', 'Paris', 'UI/UX Designer'),
(6, 'Paulo Verbose', 'Jakarta', 'System Analyst'),
(7, 'Rebecca Bernardo', 'Paris', 'Programmer'),
(8, 'Luis Petrucci', 'London', 'System Analyst'),
(9, 'Frank Bethoveen', 'Madrid', 'UI/UX Designer'),
(10, 'Calumn Sweet', 'Jakarta', 'UI/UX Designer'),
(11, 'Edward Campbell', 'Lisbon', 'Programmer'),
(12, 'Harry Potter', 'Jakarta', 'UI/UX Designer'),
(13, 'Gilberto', 'Lisbon', 'System Analyst'),
(14, 'Luka Smitic', 'Madrid', 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quota_stand`
--

CREATE TABLE `tbl_quota_stand` (
  `id` int(11) NOT NULL,
  `kd_stand` varchar(5) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quota_stand`
--

INSERT INTO `tbl_quota_stand` (`id`, `kd_stand`, `jumlah`) VALUES
(1, 'FT', 50),
(2, 'LK', 30);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stand`
--

CREATE TABLE `tbl_stand` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kd_stand` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stand`
--

INSERT INTO `tbl_stand` (`id`, `nama`, `kd_stand`) VALUES
(1, 'Foto', 'FT'),
(2, 'Lukis', 'LK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_antri_stand`
--
ALTER TABLE `tbl_antri_stand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quota_stand`
--
ALTER TABLE `tbl_quota_stand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_stand`
--
ALTER TABLE `tbl_stand`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_antri_stand`
--
ALTER TABLE `tbl_antri_stand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_quota_stand`
--
ALTER TABLE `tbl_quota_stand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_stand`
--
ALTER TABLE `tbl_stand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
