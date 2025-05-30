-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 04:32 PM
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
-- Database: `pds`
--

-- --------------------------------------------------------

--
-- Table structure for table `pds`
--

CREATE TABLE `pds` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pob` varchar(255) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `civil_status` varchar(20) DEFAULT NULL,
  `citizenship` varchar(50) DEFAULT NULL,
  `height` double DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `blood_type` varchar(5) DEFAULT NULL,
  `highest_education` varchar(100) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `year_graduated` varchar(10) DEFAULT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `job_title` varchar(100) DEFAULT NULL,
  `employment_duration` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pds`
--

INSERT INTO `pds` (`id`, `firstname`, `lastname`, `middlename`, `dob`, `pob`, `sex`, `civil_status`, `citizenship`, `height`, `weight`, `blood_type`, `highest_education`, `school_name`, `year_graduated`, `employer_name`, `job_title`, `employment_duration`, `email`, `created_at`) VALUES
(8, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-15', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 231, 231, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:32:22'),
(9, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-15', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 231, 231, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:32:45'),
(10, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-15', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 231, 231, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:35:37'),
(11, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-30', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 32, 324, 'NA', 'College', 'ADFC', '2342', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:36:51'),
(12, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-30', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 423, 24, 'NA', 'College', 'ADFC', '342', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:42:10'),
(13, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-30', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 160, 50, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-30 14:29:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pds`
--
ALTER TABLE `pds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pds`
--
ALTER TABLE `pds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
