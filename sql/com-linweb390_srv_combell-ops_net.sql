-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: com-linweb390.srv.combell-ops.net:3306
-- Generation Time: Jun 15, 2021 at 04:01 PM
-- Server version: 5.7.33-36-log
-- PHP Version: 7.1.25-1+0~20181207224605.11+jessie~1.gbpf65b84

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ID293913_project2`
--
CREATE DATABASE IF NOT EXISTS `ID293913_project2` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ID293913_project2`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `early_bird` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `group_ticket` int(11) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `name`, `email`, `phone`, `early_bird`, `student`, `group_ticket`, `order_date`) VALUES
(12, 'Lander Piessens', 'lander.piessens@gmail.com', 477384647, 0, 0, 6, '2021-06-14 17:02:02'),
(15, 'Matthew Koelling', 'lander.piessens@gmail.com', 2147483647, 0, 0, 0, '2021-06-14 22:20:06'),
(18, 'Lander Piessens', 'lander.piessens@gmail.com', 477384647, 1, 0, 0, '2021-06-14 22:25:13'),
(19, 'Lander Piessens', 'lander.piessens@gmail.com', 477384647, 1, 0, 0, '2021-06-14 22:25:32'),
(20, 'Lander Piessens', 'lander.piessens@gmail.com', 477384647, 1, 0, 0, '2021-06-14 22:25:56'),
(22, 'Lander Piessens', 'lander.piessens@gmail.com', 477384647, 3, 0, 0, '2021-06-15 09:04:10'),
(25, 'Faryaab Shkeih', 'faryaab@outlook.com', 2147483647, 0, 2, 0, '2021-06-15 10:19:30'),
(27, 'Lander Piessens', 'lander.piessens@gmail.com', 477384647, 2, 5, 0, '2021-06-15 13:37:47'),
(28, 'Lander Piessens', 'lander.piessens@gmail.com', 477384647, 0, 0, 6, '2021-06-15 14:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `pwd_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `pwd_hash`) VALUES
(1, 'admin', 'Lander', 'Piessens', '$2y$10$2IqsSSjFE.F75vEUpzCGbu043cN.7vcKp.bE4O6KQlLdJD4R/o1EK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
