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
-- Table structure for table `opening_master`
--

CREATE TABLE `opening_master` (
  `id` int(11) NOT NULL,
  `label_name` varchar(50) NOT NULL,
  `Comp_name` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `pub_date` date DEFAULT NULL,
  `pub_edate` date DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `link` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `clas` varchar(100) NOT NULL,
  `ssc` int(11) NOT NULL,
  `hsc` int(11) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `degreeper` int(11) NOT NULL,
  `master` varchar(30) NOT NULL,
  `masterper` int(11) NOT NULL,
  `description` varchar(250) NOT NULL,
  `responsiblity` varchar(250) NOT NULL,
  `rules` varchar(250) NOT NULL,
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
(7, 'kjlojkljk', 'Ramdasia', '2023-02-04', '2023-02-04', '2023-02-01', 'Ramdasia', 'First aid and CPR', 2147483647, 'sthrtyh@fdg', 'ggggggggggg', 'Demo', 'Demo', 'Demo', 66, 66, 'BSC', 66, 'MCA', 66, 'jkhhhhhhk', 'jhhhhhhhhhhhhh', 'hjjjjjjjjjj', 0, 1, 1, '2023-02-04 17:54:39', 1, NULL, NULL, NULL, NULL, NULL, '2023-02-04 16:54:39');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
