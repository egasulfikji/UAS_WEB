-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 01:28 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'ega', '123', 'Ega Sulfika'),
(2, 'eva', '12345', 'Eva'),
(3, 'mindi', '$2y$10$RrDPiwd6MXro24FiiCLWtue3U4HRxVdAV3jJNePZFBsqeCmjH64oe', 'mindi'),
(4, 'bayu', '$2y$10$5muWIM6y/qTj5nTKjwnurOe8vm0o3Ymf/Yd3ZpnnuqkzpyzKS45wO', 'bayu'),
(5, 'asd', '$2y$10$/3HpPGtjkQtcChWqJCi0dOua3/R0NpoplERdTUXOJFhEQx.SSuH96', 'asd'),
(6, 'asdf', '$2y$10$0aR7AsJwv3WB2L0KT8KO0uJo/S6aLC/GWhbwknfe6gtLVt400pg5e', 'asdf'),
(7, 'egas', '$2y$10$Q/XEkmrPDKQ5e5O1jz5oceM3vITUlBq3.z4naIvJlcwmlxeXbep/S', 'egas'),
(8, 'efs', '$2y$10$ezayGTD.aGpFwwDz9t99weuaaRFaHwwLcWregHZHnZ0aqDl0me6by', 'efs'),
(9, 'asdg', '$2y$10$dNhMKnoQvC3k0TeW5A652OLJK.Inz.xcG50liofmwCi0KZi6Rcgha', 'asdg'),
(10, 'ita', '$2y$10$XI8F0XF1UWSkbAGDXmRigOIWcV6BtqG3DKs1bSwdw/iHzDxs0x8iO', 'ita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
