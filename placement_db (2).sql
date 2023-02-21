-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 12:14 PM
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
-- Database: `placement_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `first_DBR` ()   BEGIN
    SELECT * FROM studentcreate_master;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_DBR` ()   BEGIN

SELECT * FROM studentcreate_master;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `studentcreatemaster_DBR` ()   BEGIN

SELECT std_id, std_fullname, std_email, std_appliedfor, std_qualification, std_department, std_branch, std_term  
              FROM studentcreate_master;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `studentverify_mastersp_DBR` ()   BEGIN

SELECT std_id, std_fullname, std_email, std_appliedfor, std_qualification, std_department, std_branch, std_term  
              FROM studentverify_master;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `company_master`
--

CREATE TABLE `company_master` (
  `id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `company_contact` int(15) NOT NULL,
  `contact_person` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `company_type` varchar(30) NOT NULL,
  `branch_location` varchar(30) NOT NULL,
  `company_address` varchar(300) NOT NULL,
  `company_pincode` int(6) NOT NULL,
  `about_us` varchar(300) NOT NULL,
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
-- Dumping data for table `company_master`
--

INSERT INTO `company_master` (`id`, `company_name`, `company_website`, `company_email`, `company_contact`, `contact_person`, `contact_no`, `company_type`, `branch_location`, `company_address`, `company_pincode`, `about_us`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, '', 'jggjgj', 'hjghj', 5757, '', 0, '', '', '', 0, '', 0, 1, 1, '2023-02-02 16:46:23', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 15:46:23'),
(2, '', 'jhgjjghjj', 'ghjhgjhj', 2147483647, '', 0, '', '', '', 0, '', 0, 1, 1, '2023-02-02 16:47:41', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 15:47:41'),
(3, '', 'uiyiyiyui', 'yuiuyiuio', 2147483647, '', 0, '', '', '', 0, '', 0, 1, 1, '2023-02-02 16:49:16', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 15:49:16'),
(4, 'gjgjgj', 'jgjgj', 'gjgjg', 2147483647, 'tghghjghghg', 2147483647, '1', 'Mumbai', '', 0, '', 0, 1, 1, '2023-02-02 17:00:42', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 16:00:42'),
(5, 'uiuiui', 'uiuiuiu', 'iuiui', 2147483647, 'yuyuyu', 2147483647, '1', 'Mumbai', 'hgghgh', 666666, 'jhghjghj', 0, 1, 1, '2023-02-02 18:00:58', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-02 17:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `createaccount_master`
--

CREATE TABLE `createaccount_master` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repassword` int(50) NOT NULL,
  `mobilenumber` int(50) NOT NULL,
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
-- Dumping data for table `createaccount_master`
--

INSERT INTO `createaccount_master` (`id`, `username`, `email`, `password`, `repassword`, `mobilenumber`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'prashant', 'p@gmail.com', '12345', 12345, 2147483647, 0, 1, 1, '2023-01-27 11:36:05', 1, NULL, NULL, NULL, NULL, NULL, '2023-01-27 10:36:05'),
(2, 'komal1027', 'komalmengane8833@gmail.com', 'Komal@1027', 0, 2147483647, 0, 1, 1, '2023-01-28 07:41:01', 1, NULL, NULL, NULL, NULL, NULL, '2023-01-28 06:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `opening_master`
--

CREATE TABLE `opening_master` (
  `id` int(11) NOT NULL,
  `label_name` varchar(50) DEFAULT NULL,
  `Comp_name` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pub_date` date DEFAULT NULL,
  `pub_edate` date DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `mobileno` int(10) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `clas` varchar(100) DEFAULT NULL,
  `ssc` int(11) DEFAULT NULL,
  `hsc` int(11) DEFAULT NULL,
  `degree` varchar(30) DEFAULT NULL,
  `degreeper` int(11) DEFAULT NULL,
  `master` varchar(30) DEFAULT NULL,
  `masterper` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `responsiblity` varchar(250) DEFAULT NULL,
  `rules` varchar(250) DEFAULT NULL,
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
-- Dumping data for table `opening_master`
--

INSERT INTO `opening_master` (`id`, `label_name`, `Comp_name`, `date`, `pub_date`, `pub_edate`, `type`, `keyword`, `mobileno`, `email`, `link`, `department`, `branch`, `clas`, `ssc`, `hsc`, `degree`, `degreeper`, `master`, `masterper`, `description`, `responsiblity`, `rules`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(1, 'ffff', '', NULL, NULL, NULL, '', '', 0, '', '', '', '', '', 0, 0, '', 0, '', 0, '', '', '', 0, 1, 1, '2023-02-03 11:58:20', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-03 10:58:20'),
(2, 'gggg', '1', '2023-02-03', '2023-02-03', '2023-02-08', '', '', 0, '', '', '', '', '', 0, 0, '', 0, '', 0, '', '', '', 0, 1, 1, '2023-02-03 12:07:19', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-03 11:07:19'),
(3, 'ggg', 'Ramdasia', '2023-02-04', '2023-02-04', '2023-01-31', 'Ramdasia', 'First aid and CPR', 2147483647, 'sthrtyh@fdg', '', '', '', '', 0, 0, '', 0, '', 0, '', '', '', 0, 1, 1, '2023-02-04 16:42:50', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-04 15:42:50'),
(4, 'ghgjgjg', 'Ramdasia', '2023-02-04', '2023-02-04', '2023-02-07', 'Ramdasia', 'First aid and CPR', 2147483647, 'sthrtyh@fdg', 'ghkjhkhjk', 'Demo', 'Demo', 'Bicycling', 0, 0, '', 0, '', 0, '', '', '', 0, 1, 1, '2023-02-04 16:47:49', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-04 15:47:49'),
(5, 'jkjhkjhk', 'Ramdasia', '2023-02-04', '2023-02-04', '2023-02-08', 'Ramdasia', 'First aid and CPR', 2147483647, 'sthrtyh@fdg', 'fuyouyoy', 'Demo', 'Demo', 'Bicycling', 77, 77, 'BSC', 77, 'MCA', 77, '', '', '', 0, 1, 1, '2023-02-04 16:51:44', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-04 15:51:44'),
(6, 'iuuu', 'Ramdasia', '2023-02-04', '2023-02-04', '2023-02-01', 'Ramdasia', 'First aid and CPR', 2147483647, 'sthrtyh@fdg', 'uiiiiiiiiiiiii', 'Demo', 'Demo', 'Bicycling', 99, 99, 'BSC', 88, 'MCA', 88, '', '', '', 0, 1, 1, '2023-02-04 16:55:19', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-04 15:55:19'),
(7, 'kjlojkljk', 'Ramdasia', '2023-02-04', '2023-02-04', '2023-02-01', 'Ramdasia', 'First aid and CPR', 2147483647, 'sthrtyh@fdg', 'ggggggggggg', 'Demo', 'Demo', 'Demo', 66, 66, 'BSC', 66, 'MCA', 66, 'jkhhhhhhk', 'jhhhhhhhhhhhhh', 'hjjjjjjjjjj', 0, 1, 1, '2023-02-04 17:54:39', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-04 16:54:39'),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '2023-02-17 09:17:16', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-17 08:17:16'),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '2023-02-17 09:18:39', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-17 08:18:39'),
(0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, '2023-02-17 09:19:39', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-17 08:19:39');

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
(168, 'Nitin Kamble', '', '', 0, 'nitin12@gmail.com', '2023-02-14', NULL, NULL, NULL, 'Artificial Intelligence', 'Associate\'s Degree', 'Electronics', 'Electronics', '1', NULL, '', NULL, '', 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-14 18:36:33', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:36:33'),
(180, 'comtranse', NULL, NULL, NULL, NULL, '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, '', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 1, 1, '2023-02-17 08:53:23', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-17 07:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `studentunverify_master`
--

CREATE TABLE `studentunverify_master` (
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
  `verification_status` int(20) NOT NULL,
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
-- Dumping data for table `studentunverify_master`
--

INSERT INTO `studentunverify_master` (`std_id`, `std_fullname`, `std_fathername`, `std_mothername`, `std_age`, `std_email`, `std_dob`, `std_gender`, `std_cast`, `std_subcast`, `std_appliedfor`, `std_qualification`, `std_department`, `std_branch`, `std_term`, `std_degree`, `std_degreeper`, `std_master`, `std_masterper`, `std_pincode`, `std_adharnumber`, `std_mobileno`, `std_country`, `std_state`, `std_city`, `std_certification`, `std_hobbies`, `std_skills`, `std_address`, `std_adharphoto`, `std_photo`, `verification_status`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(161, 'prashant anant wadekar', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 'Artificial Intelligence', 'Doctorate Degree', 'Computer Science', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:04:50'),
(162, 'a', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:07:01'),
(163, 'ravi', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:14:01'),
(164, 'Mangesh', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 'Machine Learning', 'High School', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:19:39'),
(165, 'vishal', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 'Associate\'s Degree', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:21:52'),
(166, 'Sourabh', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 'High School', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:25:54'),
(167, 'z', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, 'Master\'s Degree', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:31:33'),
(170, 'asc', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 17:59:31'),
(171, 's', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 18:16:14'),
(172, 's', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 18:16:58'),
(173, '1', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 18:28:55'),
(174, '2', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 18:29:03'),
(175, '3', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 18:29:11'),
(178, 'ashwin', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 07:26:55'),
(179, 'software developer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', '3', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-15 11:50:49'),
(180, 'comtranse', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-17 07:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `studentverify_master`
--

CREATE TABLE `studentverify_master` (
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
-- Dumping data for table `studentverify_master`
--

INSERT INTO `studentverify_master` (`std_id`, `std_fullname`, `std_fathername`, `std_mothername`, `std_age`, `std_email`, `std_dob`, `std_gender`, `std_cast`, `std_subcast`, `std_appliedfor`, `std_qualification`, `std_department`, `std_branch`, `std_term`, `std_degree`, `std_degreeper`, `std_master`, `std_masterper`, `std_pincode`, `std_adharnumber`, `std_mobileno`, `std_country`, `std_state`, `std_city`, `std_certification`, `std_hobbies`, `std_skills`, `std_address`, `std_adharphoto`, `std_photo`, `is_default`, `is_on`, `is_active`, `created_date`, `created_by`, `modified_date`, `modified_by`, `deleted_date`, `deleted_by`, `delete_remark`, `last_changed`) VALUES
(169, 'Akshay kamble', NULL, NULL, NULL, 'akshy@gmail.com', NULL, NULL, NULL, NULL, 'Machine Learning', 'Bachelor\'s Degree', 'Electrical', 'Electronics', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-14 18:41:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createaccount_master`
--
ALTER TABLE `createaccount_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentcreate_master`
--
ALTER TABLE `studentcreate_master`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `studentunverify_master`
--
ALTER TABLE `studentunverify_master`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `studentverify_master`
--
ALTER TABLE `studentverify_master`
  ADD PRIMARY KEY (`std_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createaccount_master`
--
ALTER TABLE `createaccount_master`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentcreate_master`
--
ALTER TABLE `studentcreate_master`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `studentunverify_master`
--
ALTER TABLE `studentunverify_master`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `studentverify_master`
--
ALTER TABLE `studentverify_master`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
