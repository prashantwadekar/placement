-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 08:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentcreate_master`
--

CREATE TABLE `studentcreate_master` (
  `std_id` int(11) NOT NULL,
  `std_fullname` varchar(50) DEFAULT NULL,
  `std_fathername` varchar(50) DEFAULT NULL,
  `std_mothername` varchar(50) DEFAULT NULL,
  `std_age` int(50) DEFAULT NULL,
  `std_email` varchar(60) DEFAULT NULL,
  `std_dob` date DEFAULT NULL,
  `std_gender` varchar(10) DEFAULT NULL,
  `std_cast` varchar(20) DEFAULT NULL,
  `std_subcast` varchar(30) DEFAULT NULL,
  `std_appliedfor` varchar(40) DEFAULT NULL,
  `std_qualification` varchar(40) DEFAULT NULL,
  `std_department` varchar(40) DEFAULT NULL,
  `std_branch` varchar(50) DEFAULT NULL,
  `std_term` varchar(50) DEFAULT NULL,
  `std_degree` varchar(40) DEFAULT NULL,
  `std_degreeper` varchar(50) DEFAULT NULL,
  `std_master` varchar(40) DEFAULT NULL,
  `std_masterper` varchar(50) DEFAULT NULL,
  `std_pincode` int(40) DEFAULT NULL,
  `std_adharnumber` int(100) DEFAULT NULL,
  `std_mobileno` int(200) DEFAULT NULL,
  `std_country` varchar(50) DEFAULT NULL,
  `std_state` varchar(50) DEFAULT NULL,
  `std_city` varchar(50) DEFAULT NULL,
  `std_certification` varchar(50) DEFAULT NULL,
  `std_hobbies` varchar(100) DEFAULT NULL,
  `std_skills` varchar(100) DEFAULT NULL,
  `std_address` varchar(100) DEFAULT NULL,
  `std_adharphoto` blob DEFAULT NULL,
  `std_photo` blob DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT 0,
  `is_on` tinyint(4) DEFAULT 1,
  `is_active` tinyint(4) DEFAULT 1,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `delete_remark` varchar(200) DEFAULT NULL,
  `last_changed` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentcreate_master`
--

INSERT INTO `studentcreate_master` (`std_id`, `std_fullname`, `std_fathername`, `std_mothername`, `std_age`, `std_email`, `std_dob`, `std_gender`, `std_cast`, `std_subcast`, `std_appliedfor`, `std_qualification`, `std_department`, `std_branch`, `std_term`, `std_degree`, `std_degreeper`, `std_master`, `std_masterper`, `std_pincode`, `std_adharnumber`, `std_mobileno`, `std_country`, `std_state`, `std_city`, `std_certification`, `std_hobbies`, `std_skills`, `std_address`, `std_adharphoto`, `std_photo`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(162, 'avinash desai', '', '', 0, 'avinash@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Data Science', 'Associate\'s Degree', 'Electronics', 'Electronics', '3', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:07:01', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:07:01'),
(163, 'ravi uday udpat', '', '', 0, 'ravia2@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Marketing', 'Diploma', 'Electrical', 'Mechanical', '1', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:14:01', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:14:01'),
(164, 'Mangesh Shinde', '', '', 0, 'Mangesh@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Machine Learning', 'High School', 'Electronics', 'Electronics', '2', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:19:39', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:19:39'),
(165, 'vishal Patil', '', '', 0, 'vishal@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Data Science', 'Bachelor\'s Degree', 'Electrical', 'Mechanical', '3', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:21:52', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:21:52'),
(166, 'Sourabh Raut', '', '', 0, 'saurabh@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Machine Learning', 'Doctorate Degree', 'Civil', 'Electrical', '2', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:25:54', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:25:54'),
(167, 'Shubham Patil', '', '', 0, 'shubham@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Business Analytics', 'Master\'s Degree', 'Electronics', 'Mechanical', '3', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:31:33', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:31:33'),
(168, 'Nitin Kamble', '', '', 0, 'nitin12@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Artificial Intelligence', 'Associate\'s Degree', 'Electronics', 'Electronics', '1', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:36:33', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:36:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentcreate_master`
--
ALTER TABLE `studentcreate_master`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentcreate_master`
--
ALTER TABLE `studentcreate_master`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
