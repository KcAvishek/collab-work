-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 04:43 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(100) NOT NULL,
  `bookingno` int(100) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` varchar(20) NOT NULL,
  `adults` varchar(50) NOT NULL,
  `children` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `bookingno`, `name`, `email`, `phone`, `booking_date`, `booking_time`, `adults`, `children`, `created_at`) VALUES
(41, 100000, 'abhisek kc ', 'NP03CS4A220219@heraldcollege.edu.np', '9842742225', '2024-04-08', '09:54 PM', '4', '4', '2024-04-09 13:51:25'),
(58, 1065210, 'nischal shingh', 'n45439687@gmail.com', '9876543211', '2024-04-09', '08:50 PM', '5', '6', '2024-04-09 14:03:07'),
(59, 1041354, 'nischal shingh', 'n45439687@gmail.com', '9808159122', '2024-04-09', '07:53 PM', '5', '6', '2024-04-09 14:08:37'),
(60, 1079919, 'kenab kc', 'NP03CS4A220219@heraldcollege.edu.np', '9876543210', '2024-04-09', '08:03 PM', '4', '4', '2024-04-09 14:18:36'),
(61, 1008337, 'abhisek kcc ', 'n45439687@gmail.com', '9876543210', '2024-04-09', '08:07 PM', '12', '10', '2024-04-09 14:22:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
