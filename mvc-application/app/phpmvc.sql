-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 06:01 AM
-- Server version: 10.11.4-MariaDB
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `pacarku`
--

CREATE TABLE `pacarku` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ultah` varchar(20) NOT NULL,
  `negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pacarku`
--

INSERT INTO `pacarku` (`id`, `nama`, `ultah`, `negara`) VALUES
(1, 'Dilreba Dilmurat', '3 juni', 'Cina'),
(2, 'Freyanashifa Jayawardana', '13 februari', 'Indonesia'),
(3, 'Park Rose', '11 februari', 'Korea'),
(4, 'Suzuka Nakamoto', '20 desember', 'Jepang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pacarku`
--
ALTER TABLE `pacarku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pacarku`
--
ALTER TABLE `pacarku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
