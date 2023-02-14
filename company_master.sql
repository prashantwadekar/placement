-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 08:38 PM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
