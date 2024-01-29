-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2024 at 08:33 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `  font_family`
--

DROP TABLE IF EXISTS `  font_family`;
CREATE TABLE IF NOT EXISTS `  font_family` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `  font_family`
--

INSERT INTO `  font_family` (`id`, `name`) VALUES
(1, 'Lato'),
(2, 'Roboto'),
(3, 'Josefin Sans'),
(4, 'Lobster'),
(5, 'Open sans'),
(6, 'Poiret One'),
(7, 'Dancing Script'),
(8, 'Bangers'),
(9, 'Playfair Display'),
(10, 'Chewy'),
(11, 'Quicksand'),
(12, 'Great Vibes'),
(13, 'Righteous'),
(14, 'Crafty Girls'),
(15, 'Mystery Quest'),
(16, 'Serif'),
(17, 'Helvetica'),
(18, 'Verdana'),
(19, 'Montserrat'),
(20, 'Oswald'),
(21, 'Unica One'),
(22, 'Muli'),
(23, 'Courier'),
(24, 'Raleway'),
(25, 'Carter One'),
(26, 'Varela Round');

-- --------------------------------------------------------

--
-- Table structure for table `thirdparty_apikey`
--

DROP TABLE IF EXISTS `thirdparty_apikey`;
CREATE TABLE IF NOT EXISTS `thirdparty_apikey` (
  `id` int NOT NULL AUTO_INCREMENT,
  `thirdparty_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirdparty_apikey` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_shops`
--

DROP TABLE IF EXISTS `user_shops`;
CREATE TABLE IF NOT EXISTS `user_shops` (
  `store_user_id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1=active,0=deactive',
  `application_status` enum('1','0') NOT NULL DEFAULT '0' COMMENT '1=enable,0=disable',
  `application_language` enum('en','es','he_IL','fil','fr','ru','sp','pt') DEFAULT 'en',
  `shop_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_demand_accept` enum('0','1') NOT NULL DEFAULT '0' COMMENT '1:aproved; 0:not approved',
  `charge` float NOT NULL DEFAULT '0',
  `price_id` varchar(255) DEFAULT NULL,
  `invoice_on` date DEFAULT NULL,
  `operated_on` date DEFAULT NULL,
  `test_finals_on` date DEFAULT NULL,
  `removed_on` date DEFAULT NULL,
  `store_name` varchar(255) NOT NULL,
  `api_key` varchar(100) NOT NULL,
  `store_idea` varchar(25) NOT NULL,
  `price_pattern` varchar(60) NOT NULL,
  `cash` varchar(25) NOT NULL,
  `store_holder` varchar(255) NOT NULL,
  `address11` varchar(255) NOT NULL,
  `address22` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `division` varchar(50) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `america_timezone` varchar(50) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `feedback_status` enum('1','0') NOT NULL DEFAULT '0',
  `block_status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uninstall_on` timestamp NULL DEFAULT NULL,
  `install_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`store_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_shops`
--

INSERT INTO `user_shops` (`store_user_id`, `email`, `status`, `application_status`, `application_language`, `shop_name`, `password`, `is_demand_accept`, `charge`, `price_id`, `invoice_on`, `operated_on`, `test_finals_on`, `removed_on`, `store_name`, `api_key`, `store_idea`, `price_pattern`, `cash`, `store_holder`, `address11`, `address22`, `city`, `country_name`, `mobile_no`, `division`, `zip`, `timezone`, `america_timezone`, `domain`, `feedback_status`, `block_status`, `created_at`, `updated_at`, `uninstall_on`, `install_date`) VALUES
(1, 'codelock2021@gmail.com', '1', '0', 'en', 'payalcls.myshopify.com', 'shpua_dced2a70ff744a6c7d3273734b496b66', '0', 0, NULL, NULL, NULL, NULL, NULL, 'payalcls.myshopify.com', '', 'partner_test', '', '', '', '2020, Silver business point', '', 'Surat', 'India', '', '', '394105', '(GMT+05:30) Asia/Calcutta', '', '', '0', '0', '2023-07-24 14:25:29', '2023-07-24 14:25:29', NULL, NULL),
(2, 'codelock2021@gmail.com', '1', '0', 'en', 'managedashboard.myshopify.com', 'shpua_3d73718dbf39a0bf6483244921129dc2', '0', 0, NULL, NULL, NULL, NULL, NULL, 'managedashboard.myshopify.com', '', 'partner_test', '', '', '', '2020, Silver business point', '', 'Surat', 'India', '', '', '394105', '(GMT+05:30) Asia/Calcutta', '', '', '0', '0', '2023-07-27 07:54:51', '2023-07-27 07:54:51', NULL, NULL),
(3, 'codelock2021@gmail.com', '1', '0', 'en', 'skinpdppagetest.myshopify.com', 'shpua_0e8241bff37faf10d1498f00786b11ed', '0', 0, NULL, NULL, NULL, NULL, NULL, 'skinpdppagetest.myshopify.com', '', 'affiliate', '', '', '', '', '', '', 'India', '', '', '', '(GMT-05:00) Eastern Time (US & Canada)', '', '', '0', '0', '2023-07-27 10:01:21', '2023-07-27 10:01:21', NULL, NULL),
(4, 'codelock2021@gmail.com', '1', '0', 'en', 'pdpdemo.myshopify.com', 'shpua_2c337fc46c72a66d8ea60187841d6ea0', '0', 0, NULL, NULL, NULL, NULL, NULL, 'pdpdemo.myshopify.com', '', 'partner_test', '', '', '', '', '', '', 'United States', '', '', '', '(GMT-05:00) America/New_York', '', '', '0', '0', '2023-07-27 10:02:33', '2023-07-28 10:19:42', NULL, NULL),
(5, 'codelock2021@gmail.com', '1', '0', 'en', 'dharacls.myshopify.com', 'shpua_e8caa56db9975a742359855351678252', '0', 0, NULL, NULL, NULL, NULL, NULL, 'dharacls.myshopify.com', '', 'partner_test', '', '', '', '2020, Silver business point', '', 'Surat', 'India', '', '', '394105', '(GMT+05:30) Asia/Calcutta', '', '', '0', '0', '2023-07-29 11:50:56', '2023-07-29 11:50:56', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
