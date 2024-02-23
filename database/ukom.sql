-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 11:47 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukom`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapes`
--

CREATE TABLE `datapes` (
  `idpeserta` int(11) NOT NULL,
  `namasekolah` varchar(50) NOT NULL,
  `namagugus` varchar(30) NOT NULL,
  `namakoor` varchar(50) NOT NULL,
  `kontak` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapes`
--

INSERT INTO `datapes` (`idpeserta`, `namasekolah`, `namagugus`, `namakoor`, `kontak`) VALUES
(1, 'SMK 1 Kota Serang', 'Gugus Kelapa N', 'Mahmudin N', '081240991111'),
(2, 'SMK 5 Kota Serang', 'Gugus Jeruk', 'Mang umam', '09999911111'),
(3, 'SMA 1 Kota Serang', 'Gugus Jeruk', 'Kang enim', '00811111'),
(4, 'SMA 2 Kota Serang', 'Gugus Apel', 'Jajang', '10000111'),
(5, 'SMK 11 Kota Cilegon', 'Gugus Melati', 'Maman Suherman', '1110000222'),
(9, 'SMK 11 Kota Serang', 'Gugus Kelepon', 'Maman', '11111'),
(11, 'SMK 11 Kota Serang', 'Gugus Kelepon', 'Maman', '11111'),
(13, 'SMA 5 Kota Serang', 'Gugus Mangga', 'Jajang', '1000222'),
(17, 'SMA 5 Kota Serangs', 'Gugus Mangga', 'Maman', '10000111');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `namasekolah` varchar(30) NOT NULL,
  `matalomba` varchar(100) NOT NULL,
  `nilai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`namasekolah`, `matalomba`, `nilai`) VALUES
('SMA 1 Kota Serang', 'LKBBT', '80'),
('SMA 2 Kota Serang', 'Hasta Karya', '70'),
('SMK 1 Kota Serang', 'Pioneering', '90'),
('SMK 5 Kota Serang', 'Semaphore Dance', '99');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapes`
--
ALTER TABLE `datapes`
  ADD PRIMARY KEY (`idpeserta`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`namasekolah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datapes`
--
ALTER TABLE `datapes`
  MODIFY `idpeserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
