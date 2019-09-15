-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 10:33 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shakzeecodeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uId` int(200) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `uDate` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gender` varchar(5) DEFAULT NULL,
  `uStatus` int(10) DEFAULT '0',
  `uLink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uId`, `firstName`, `lastName`, `uDate`, `email`, `password`, `gender`, `uStatus`, `uLink`) VALUES
(1, 'dfdf', 'dfdfdf', '2017-09-20 04:14:21', 'shakzee@hotmail.com', 'dfdf', '', 0, ''),
(2, 'Sidra Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(3, 'Sidra Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(4, 'Sidra Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(5, 'Sidra Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(6, 'Sidra Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(7, 'Sidra Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(8, 'Sidra Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(9, 'Sidra ali Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(10, 'Sidra ali Khan', 'Ali', '0000-00-00 00:00:00', 'Sidra@hotmail.com', 'shakee123', 'Femal', 0, ''),
(11, 'sfd', 'dfdf', '0000-00-00 00:00:00', 'ii@hotmail.com', 'kkk', NULL, 0, ''),
(12, 'dfdf', 'dfdf', '0000-00-00 00:00:00', 'sss@htomail.com', 'dfd', NULL, 0, ''),
(13, 'shakzee', 'Ahmed', '0000-00-00 00:00:00', 'info1@shakzee.com', '2ed45186c72f9319dc64338cdf16ab76b44cf3d1', NULL, 0, 'aNvKWZAsrkiMnyVD'),
(14, 'dfkdfjkldfj', 'lkdfljdfk', '0000-00-00 00:00:00', 'kkk@hotmail.com', '2ed45186c72f9319dc64338cdf16ab76b44cf3d1', NULL, 0, 'BlUAOsR57qFM4H9W'),
(15, 'dfddf', 'dfdf', '0000-00-00 00:00:00', 'ererer@hotmail.com', '095644a7a8b11e4fba04d18fee43fe3c2c768de8', NULL, 0, 'OzkChvfatGF5uZMK'),
(19, 'Shehzad ahmed', 'Arain', '0000-00-00 00:00:00', 'shahzad_raza171@hotmail.com', '2ed45186c72f9319dc64338cdf16ab76b44cf3d1', NULL, 1, 'W3oRQO8xMb1HUmCFactivate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
