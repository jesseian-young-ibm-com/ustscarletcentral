-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2022 at 02:19 PM
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ust_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_and_time_of_registration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_time` tinyint(1) NOT NULL DEFAULT 1,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `first_name`, `last_name`, `student_number`, `ust_email`, `department`, `phone_number`, `year_level`, `birthday`, `date_and_time_of_registration`, `first_time`, `verification_code`, `is_verified`) VALUES
(6, '2020123456', '2168ad5e463d9accb215edaafa31c8d9', 'Juan', 'Dela Cruz', '2020123456', 'testjuandelacruz123@gmail.com', 'College of Science', '09123456789', '2nd Year', '2022-04-06', '', 1, '347628846624d584fe9dd1', 1),
(7, '2019128596', '7dc43cfb2b8462e216113939d0724511', 'Erica', 'Manao', '2019128596', 'ericamanao17@gmail.com', 'College of Science', '09662114819', '3rd Year', '2000-06-15', '', 0, '239498186624d5e18d7420', 1),
(8, '2019123456', '1ab96cf3373caa4e960d1941809ca01e', 'Ethan', 'Elizalde', '2019123456', 'ericatheresemanao@gmail.com', 'College of Science', '09662114819', '2nd Year', '2001-10-15', '', 0, '1636116794624d7f7f9a8d6', 1),
(9, '2019131916', 'dbe37975d42f7986c4aa12494db4445a', 'Tobi Grant', 'Arceo', '2019131916', 'tobigrant.arceo.iics@ust.edu.ph', 'College of Science', '09682306625', '3rd Year', '2000-07-20', '', 1, '1832660324624d83b65c7e3', 0),
(12, '201513128', '05572e7b6a64ed88bc67d076a88c2278', 'Jake', 'Peralta', '201513128', '201513128@fit.edu.ph', 'College of Nursing', '091223232425', '1st Year', '2022-04-01', '', 0, '1073804798624eddb015cad', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
