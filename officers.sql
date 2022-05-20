-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 03, 2022 at 12:35 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u451015665_qcdrrmo_schema`
--

-- --------------------------------------------------------

--
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_edited` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `full_name`, `position`, `last_edited`) VALUES
(1, 'Test', 'President', 'April 03, 2022 @ 08:17:37pm, Sunday'),
(2, '', 'Vice President', ''),
(3, '', 'External Vice President', ''),
(4, '', 'Executive Secretary', ''),
(5, '', 'Assistant Secretary', ''),
(6, '', 'VP for Professional Development', ''),
(7, '', 'Associate VP for Alumni Affairs', ''),
(8, '', 'Vice President for Communications', ''),
(9, '', 'Associate Vice President for Communications', ''),
(10, '', 'Vice President for Business and Marketing', ''),
(11, '', 'Vice President for Finance', ''),
(12, '', 'Vice President for Audit and Inventory', ''),
(13, '', 'Vice President for Community Development', ''),
(14, '', 'Vice President for Arts and Design', ''),
(15, '', 'Associate Vice President for Arts and Design', ''),
(16, '', 'Vice President for Documentation', ''),
(17, '', 'Vice President for Logistics', ''),
(18, '', 'Vice President for Athletics', ''),
(19, '', 'AFiCS Representative', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
