-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2025 at 07:21 AM
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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name_extension` varchar(20) DEFAULT NULL,
  `gsis_id` varchar(50) DEFAULT NULL,
  `pagibig_id` varchar(50) DEFAULT NULL,
  `philhealth_id` varchar(50) DEFAULT NULL,
  `sss_id` varchar(50) DEFAULT NULL,
  `tin_id` varchar(50) DEFAULT NULL,
  `agency_employee_no` varchar(50) DEFAULT NULL,
  `citizenship_type` varchar(50) DEFAULT NULL,
  `dual_by` varchar(50) DEFAULT NULL,
  `dual_country` varchar(100) DEFAULT NULL,
  `res_house_block_lot` varchar(100) DEFAULT NULL,
  `res_street` varchar(100) DEFAULT NULL,
  `res_subdivision` varchar(100) DEFAULT NULL,
  `res_barangay` varchar(100) DEFAULT NULL,
  `res_city` varchar(100) DEFAULT NULL,
  `res_province` varchar(100) DEFAULT NULL,
  `res_zip` varchar(10) DEFAULT NULL,
  `perm_house_block_lot` varchar(100) DEFAULT NULL,
  `perm_street` varchar(100) DEFAULT NULL,
  `perm_subdivision` varchar(100) DEFAULT NULL,
  `perm_barangay` varchar(100) DEFAULT NULL,
  `perm_city` varchar(100) DEFAULT NULL,
  `perm_province` varchar(100) DEFAULT NULL,
  `perm_zip` varchar(10) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pds`
--

INSERT INTO `pds` (`id`, `firstname`, `lastname`, `middlename`, `dob`, `pob`, `sex`, `civil_status`, `citizenship`, `height`, `weight`, `blood_type`, `highest_education`, `school_name`, `year_graduated`, `employer_name`, `job_title`, `employment_duration`, `email`, `created_at`, `name_extension`, `gsis_id`, `pagibig_id`, `philhealth_id`, `sss_id`, `tin_id`, `agency_employee_no`, `citizenship_type`, `dual_by`, `dual_country`, `res_house_block_lot`, `res_street`, `res_subdivision`, `res_barangay`, `res_city`, `res_province`, `res_zip`, `perm_house_block_lot`, `perm_street`, `perm_subdivision`, `perm_barangay`, `perm_city`, `perm_province`, `perm_zip`, `telephone`, `mobile`) VALUES
(8, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-15', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 231, 231, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:32:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-15', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 231, 231, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:32:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-15', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 231, 231, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:35:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-30', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 32, 324, 'NA', 'College', 'ADFC', '2342', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:36:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-30', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 423, 24, 'NA', 'College', 'ADFC', '342', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-29 16:42:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Rey', 'Gabitnan', 'Ecalne', '2025-05-30', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 160, 50, 'NA', 'College', 'ADFC', '2025', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-05-30 14:29:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-05 17:00:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 03:46:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Rey', 'Gabitnan', 'Ecalne', '2025-06-06', 'Catbalogan', 'Male', 'Single', 'Roman Catholic', 160, 50, 'NA', 'College', 'ADFC', '2323', 'NA', 'NA', 'NA', 'gabitananrey@gmail.com', '2025-06-06 04:08:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '', '', '', '0000-00-00', '', 'Male', 'Single', 'Filipino', 160, 0, 'NA', '', '', '', '', '', '', 'gabitananrey@gmail.com', '2025-06-06 04:46:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '', '', '', '0000-00-00', '', 'Male', 'Single', 'Filipino', 160, 0, 'NA', '', '', '', '', '', '', 'gabitananrey@gmail.com', '2025-06-06 05:06:29', '', 'NA', 'NA', 'NA', 'NA', 'NA', '', '', '', 'PH', '', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA'),
(19, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '2025-06-06 05:10:46', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 05:12:55', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 05:19:42', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 05:38:26', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, '', '', '', '0000-00-00', '', 'Male', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 05:53:22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 06:17:27', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 06:48:24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 06:49:08', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(27, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 06:50:03', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'gabitananrey@gmail.com', '2025-06-06 06:51:42', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-06 08:31:44', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '0000-00-00', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '2025-06-07 05:10:12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
