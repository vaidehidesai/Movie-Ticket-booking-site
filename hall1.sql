-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 09:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `hall1`
--

CREATE TABLE `hall1` (
  `seatnumber` varchar(432) NOT NULL,
  `name` varchar(432) DEFAULT 'notbooked',
  `email` varchar(432) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall1`
--

INSERT INTO `hall1` (`seatnumber`, `name`, `email`, `date`) VALUES
('A1', 'santosh', 'santu@gmail.com', '2019-05-25'),
('A2', 'santosh', 'santu@gmail.com', '2019-05-25'),
('A3', 'notbooked', NULL, '0000-00-00'),
('A4', 'notbooked', NULL, '0000-00-00'),
('A5', 'notbooked', NULL, '0000-00-00'),
('A6', 'notbooked', NULL, '0000-00-00'),
('A7', 'notbooked', NULL, '0000-00-00'),
('A8', 'notbooked', NULL, '0000-00-00'),
('B1', 'notbooked', NULL, '0000-00-00'),
('B2', 'notbooked', NULL, '0000-00-00'),
('B3', 'santosh', 'santu@gmail.com', '2019-06-06'),
('B4', 'notbooked', NULL, '0000-00-00'),
('B5', 'notbooked', NULL, '0000-00-00'),
('B6', 'santosh', 'santu@gmail.com', '2019-06-11'),
('B7', 'notbooked', NULL, '0000-00-00'),
('B8', 'notbooked', NULL, '0000-00-00'),
('C1', 'notbooked', NULL, '0000-00-00'),
('C2', 'notbooked', NULL, '0000-00-00'),
('C3', 'notbooked', NULL, '0000-00-00'),
('C4', 'notbooked', NULL, '0000-00-00'),
('C5', 'notbooked', NULL, '0000-00-00'),
('C6', 'notbooked', NULL, '0000-00-00'),
('C7', 'notbooked', NULL, '0000-00-00'),
('C8', 'notbooked', NULL, '0000-00-00'),
('D1', 'notbooked', NULL, '0000-00-00'),
('D2', 'notbooked', NULL, '0000-00-00'),
('D3', 'notbooked', NULL, '0000-00-00'),
('D4', 'santosh', 'santu@gmail.com', '2019-05-25'),
('D5', 'notbooked', NULL, '0000-00-00'),
('D6', 'notbooked', NULL, '0000-00-00'),
('D7', 'notbooked', NULL, '0000-00-00'),
('D8', 'santosh', 'santu@gmail.com', '2019-06-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
