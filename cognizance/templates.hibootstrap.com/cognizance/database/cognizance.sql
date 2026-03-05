-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2026 at 07:38 AM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cognizance`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Adminname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Adminname` (`Adminname`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Adminname`, `password`, `created_at`) VALUES
(2, 'Junaid', 'arifjunaid039', '2026-02-14 02:15:43'),
(3, 'Measum', '123', '2026-02-14 02:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `full_name`, `email`, `help_type`, `visit_date`, `created_at`) VALUES
(1, 'Junaid Arif', 'arifjunaid039@gmail.com', 'Need some help', '2026-02-17', '2026-02-14 20:57:09'),
(10, 'Measum', '', 'Need some help', '2026-04-08', '2026-03-03 21:14:40'),
(11, 'Measum', 'arifjunaid039@gmail.com', 'Need some help', '2026-04-08', '2026-03-03 21:15:33'),
(5, 'Measum', 'MEASUM@GMAIL.COM', 'Give some suggestion', '2026-02-10', '2026-02-14 21:05:36'),
(12, 'tAJ', 'tAJ@GMAIL.COM', 'I would like to discuss', '2026-03-08', '2026-03-03 21:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone_number`, `message`, `created_at`) VALUES
(1, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'sg', '2026-03-03 22:50:28'),
(2, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'sgf', '2026-03-03 22:50:31'),
(3, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'f', '2026-03-03 22:53:27'),
(4, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'sg', '2026-03-03 22:53:58'),
(5, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'sg', '2026-03-03 22:54:29'),
(6, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'sg', '2026-03-03 22:54:53'),
(7, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'ghf', '2026-03-03 22:55:29'),
(8, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'ghf', '2026-03-03 22:56:34'),
(9, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'afd', '2026-03-03 22:59:33'),
(10, 'Junaid ariff', 'arifjunaid039@gmail.com', '03002136908', 'gf', '2026-03-05 07:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','approved') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `hospital_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `email`, `password`, `phone`, `address`, `details`, `created_at`, `status`, `hospital_file`) VALUES
(1, 'DOW', 'arifjunaid039@gmail.com', '$2y$10$K4rjuILC3VgvDCo10npwb.8KtrrUCVTrx5AFyoMqjrBBikk5baCf.', '03002136908', 'fsd', 'gsd', '2026-02-13 19:52:18', '', NULL),
(2, 'DOW', 'arifjunaid03@gmail.com', '$2y$10$/kSxmdUPhCJ7A5C4TBrS1uEIPtlrsgrk7p7JSm9dV5Rf/veTJw0dK', '03002136908', 'f', 'gs', '2026-02-13 19:59:28', '', NULL),
(3, 'Patel', 'Patel@gmail.com', '$2y$10$8QFEsHr2rU7cPPuoBIB6e.7ZgYNFrfwVf0Hg7V5aNyKy0GiaUr.a2', '03182513504', 'a iii block i metrovil third', 'fdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2026-02-13 20:22:53', 'approved', NULL),
(4, 'Patel', 'Patel@gmai.com', '$2y$10$ipmfaKcrUNBPUtpLR/qzoutBz7gXHHzqHeVIdH0xMeyNDL5gjafIm', '03182513504', 'a iii block i metrovil third', 'fdhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2026-02-13 20:26:58', '', NULL),
(5, 'DOW', 'DOW@gmail.com', '$2y$10$20PTofs1OKePUXI8I8xqcehpivRp.EJ1Vs3tNbg5CbWCpdT7yoRXS', '03002136908', 'sd', 'sfaaaaa', '2026-02-13 21:42:32', 'approved', NULL),
(6, 'agha', 'arif@gmail.com', '$2y$10$FZP8cvRorox1WKQML4lUWu8RlTWmzttxOMgG8ajEW119m1d/T7sY.', '03182513502', 'fds', 'sgd', '2026-02-28 10:57:38', '', '1772276258_Junaid_cv.docx'),
(7, 'Rajput', 'raj@gmail.com', '$2y$10$us22LlYY1lauD.PWk42LNes1mz9t6Cuywt0PTsxEW5iliyksHPKj2', '03002136901', 'sf', 'gd', '2026-02-28 23:08:16', 'approved', '1772320096_Junaid_cv.pdf'),
(8, 'Rajput', 'rj@gmail.com', '$2y$10$i0c1eknMEwAXYaiZygpVWOGbkCxqmS6sR9ecnMFo1vGl9QsqbB9Wm', '03002136901', 'sf', 'gd', '2026-02-28 23:08:50', '', '1772320130_Junaid_cv.pdf'),
(9, 'Rajput', 'j@gmail.com', '$2y$10$lmD8nxYnilbiLp5tgzksY.mHupFTDXKS8DDytD7e2rzJhHLOFc/lq', '03002136901', 'sf', 'gd', '2026-02-28 23:12:35', '', '1772320355_Junaid_cv.pdf'),
(10, 'Rajput', 'd@gmail.com', '$2y$10$qDEs0iNiGceJt7nJwxWaWe5g8ooiLjuN0PllSzc1HTpWLhW.5yKKi', '03002136909', 'bx', 'dg', '2026-02-28 23:14:38', '', '1772320478_Junaid_cv.docx'),
(11, 'DOW', 'arifjunaid09@gmail.com', '$2y$10$WI1m/0O7fVQ/6GT9XleWh.rrib3vV/hDjcNC4nXQs2nYEq6lp9lSe', '03002136903', 'dfs', 'gd', '2026-02-28 23:16:57', '', '1772320617_Junaid_cv.docx'),
(12, 'DOW', 'arifjunaid39@gmail.com', '$2y$10$fbIfuvQenMGUnf64qY7JpOQ5BcVJ.kbxrlZA8pkOJj5aTUTD9.fCy', '03002136904', 'fds', 'gds', '2026-02-28 23:19:34', '', '1772320774_Junaid_cv.docx'),
(13, 'DOW', 'arifjuaid03@gmail.com', '$2y$10$ckE6czIgAfBHoFsUF9JRZOl0zUdZx8MfUKqc4DT.4.FuZVq/ZjBb6', '0300213690', 'hf', 'hfg', '2026-02-28 23:22:48', '', '1772320968_Junaid_cv.pdf'),
(14, 'DOW', 'arifunaid039@gmail.com', '$2y$10$ge0lQ.WZSX4GfnSeJLgkLed5a8mrnQrPUChKyS7hGARBdbDVq8K.C', '03002136908', 'drhsf', 'sg', '2026-02-28 23:23:30', '', '1772321010_Junaid_cv.pdf'),
(15, 'ESSA', 'Essakhan@gmail.com', '$2y$10$iKvT2wWkkI/tlDD6ET9Tcuj9lXVn57945m3/jnpAN/nr4xNmlVfz2', '03002136905', 'we are the best', 'th', '2026-03-03 23:21:49', 'approved', '1772580109_Junaid_cv.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_name`, `customer_email`, `customer_phone`, `customer_address`, `total_amount`, `order_status`, `created_at`) VALUES
(1, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'dsfa, sg, rdh - sg', 126.00, 'Pending', '2026-03-03 22:22:44'),
(2, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'dsfa, sg, fg - sg', 106.00, 'Pending', '2026-03-03 23:52:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `order_id` int NOT NULL,
  `product_name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_name`, `price`, `quantity`, `created_at`) VALUES
(1, 2, 'Medical Mask', 20.00, 2, '2026-03-03 22:22:44'),
(2, 1, 'Antiseptics', 25.00, 1, '2026-03-03 22:22:44'),
(3, 1, 'Medical Gloves', 11.00, 1, '2026-03-03 22:22:44'),
(4, 1, 'Drugs', 50.00, 1, '2026-03-03 22:22:44'),
(5, 2, 'Medical Mask', 20.00, 1, '2026-03-03 23:52:14'),
(6, 2, 'Antiseptics', 25.00, 1, '2026-03-03 23:52:14'),
(7, 2, 'Medical Gloves', 11.00, 1, '2026-03-03 23:52:14'),
(8, 2, 'Drugs', 50.00, 1, '2026-03-03 23:52:14');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
