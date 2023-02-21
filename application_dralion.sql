-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 04:50 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_dralion`
--

CREATE TABLE `application_dralion` (
  `Name` text NOT NULL,
  `Address` text NOT NULL,
  `Phone` int(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application_dralion`
--

INSERT INTO `application_dralion` (`Name`, `Address`, `Phone`, `E-mail`, `CV`) VALUES
('muna', '07', 2147483647, 'mail.munna50@gmail.com', ''),
('MUNNA', 'MAHAGADHIAMI', 2147483647, 'mail.munna50@gmail.com', ''),
('Deepak kurmi', 'lumbini', 6986567, 'kurmideepak7@gmail.com', ''),
('sushant yadav', 'bhairahwa', 6986567, '22btrcn008@jainunversity.ac.in', ''),
('sushant yadav', 'bhairahwa', 6986567, '22btrcn008@jainunversity.ac.in', ''),
('sushant yadav', 'bhairahwa', 6986567, '22btrcn008@jainunversity.ac.in', ''),
('sushant yadav', '07', 2147483647, 'mail.munna50@gmail.com', ''),
('sushant yadav', '07', 2147483647, 'mail.munna50@gmail.com', ''),
('abhishek', 'kalaiya', 2147483647, 'jain@university.gmail.com', ''),
('', '', 0, '', ''),
('', '', 0, '', ''),
('munna', 'banglore', 987347393, 'yahoo@gmail.com', ''),
('', '', 0, '', ''),
('Anish kumar yadav', 'kathmandu', 984897342, 'yadav@gmail.com', ''),
('Anish kumar yadav', 'kathmandu', 984897342, 'yadav@gmail.com', ''),
('Anish kumar yadav', 'kathmandu', 93987394, 'anish@gmail.com', ''),
('mahesh', 'karnataka', 983749273, 'dralion@gmail.com', 'cv'),
('mahesh', 'karnataka', 983749273, 'dralion@gmail.com', ''),
('mahesh ', 'karnataka', 2147483647, 'dralion@gmail.com', ''),
('mahesh ', 'karnataka', 2147483647, 'dralion@gmail.com', ''),
('abhishek ', 'janakpur', 98378463, 'janakpur@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
