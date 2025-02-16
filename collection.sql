-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2025 at 03:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentinel`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `bin_id` varchar(100) NOT NULL,
  `bin_name` varchar(100) NOT NULL,
  `bin_location` varchar(255) NOT NULL,
  `fill_level` varchar(100) NOT NULL,
  `last_cleared` varchar(100) DEFAULT NULL,
  `last_full` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`bin_id`, `bin_name`, `bin_location`, `fill_level`, `last_cleared`, `last_full`) VALUES
('bin_1', 'CU Mart_Front', 'CU Mart, Pocket C, UTP', '85', '2025-02-16 01:46:03', '2025-02-16 01:30:17'),
('bin_2', 'IRC_1st Level', 'Information Resource Centre, UTP', '40', '2025-02-05 19:46:35', '2025-02-02 19:46:24'),
('bin_3', 'V4_Cafe', 'V4, UTP', '60\r\n', '2025-02-13 19:47:37', '2025-02-09 19:47:06'),
('bin_4', 'Undercroft_Seminar 9', 'Chancellor Complex, UTP', '90', '2025-02-14 19:47:49', '2025-02-08 19:47:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`bin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
