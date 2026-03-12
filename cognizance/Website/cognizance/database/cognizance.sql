-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 12, 2026 at 02:35 AM
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
  `Adminname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `hospital_id` int DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_appointments_hospital` (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `full_name`, `email`, `hospital_id`, `visit_date`, `created_at`) VALUES
(1, 'Junaid arif', 'arifjunaid039@gmail.com', 1, '2026-03-20', '2026-03-11 00:49:11'),
(2, 'Junaid arif', 'arifjunaid039@gmail.com', 1, '2026-04-03', '2026-03-12 02:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

DROP TABLE IF EXISTS `contact_messages`;
CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `help_type` varchar(100) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone_number`, `help_type`, `visit_date`, `message`, `created_at`) VALUES
(8, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'I would like to discuss', '2026-03-21', 'DS', '2026-03-11 12:25:42'),
(9, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'I would like to discuss', '2026-03-21', 'DS', '2026-03-11 12:25:42'),
(10, 'Junaid arif', 'arifjunaid039@gmail.com', '030021369', 'I would like to discuss', '2026-03-28', 'd', '2026-03-12 02:11:47'),
(11, 'Junaid arif', 'arifjunaid039@gmail.com', '030021369', 'I would like to discuss', '2026-03-28', 'd', '2026-03-12 02:11:47'),
(12, 'Junaid arif', 'arifjunaid039@gmail.com', '0300213690', 'I would like to discuss', '2026-03-11', 's', '2026-03-12 02:25:31'),
(13, 'Junaid arif', 'arifjunaid039@gmail.com', '0300213690', 'I would like to discuss', '2026-03-11', 's', '2026-03-12 02:25:31'),
(14, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'I would like to discuss', '2026-03-20', 'g', '2026-03-12 02:26:17'),
(15, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'I would like to discuss', '2026-03-20', 'g', '2026-03-12 02:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialization` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hospital` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_details`
--

DROP TABLE IF EXISTS `doctor_details`;
CREATE TABLE IF NOT EXISTS `doctor_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `hospital_id` int DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`id`, `full_name`, `email`, `phone`, `password`, `degree`, `cv`, `hospital_id`, `address`, `created_at`, `status`) VALUES
(1, 'Junaid arif', 'arifjunaid039@gmai.com', '03002136903', '$2y$10$eBSktH6oDkycbHKnu6JXOeni8S7fR7BkDIhdH.hAxmzHW1D0lBhsK', 'Dermatologist', '1773281604_Corona test and vaccination system.docx', NULL, 'dsfa', '2026-03-12 02:13:24', ''),
(2, 'Junaid arif', 'arifjunaid09@gmaicom', '03002136903', '$2y$10$gUNWMrOmjcxx7BseW6dIDO8MHqZv6TLB1x5tIUE/CcuSsYi1ECllq', 'Dermatologist', '1773281635_Corona test and vaccination system.docx', NULL, 'dsfa', '2026-03-12 02:13:55', ''),
(3, 'Junaid arif', 'arifjunaid09@gaicom', '03002136903', '$2y$10$PAeqFx3pxuFHrSq3LznGoePJ1GLlfarG47QDE1Fdm5jX1QfeYK/um', 'Dermatologist', '1773281640_Corona test and vaccination system.docx', NULL, 'dsfa', '2026-03-12 02:14:00', ''),
(4, 'Junaid arif', 'arifjunaid09@gf', '03002136903', '$2y$10$wahLVSeutAwtQ8emztz3PesAQTZEt.37eFOLTTPB/46mSNVNPYT1O', 'Dermatologist', '1773281658_Corona test and vaccination system.docx', NULL, 'dsfa', '2026-03-12 02:14:18', 'approved'),
(5, 'Ali', 'ali@email.com', '03002136908', '$2y$10$5rLrcUI6lCj5TIEpxj5Rpuv5pi6MJQ9YiaNkk3s7Uo14ZX4WkWhLi', 'Cardiologist', '1773282176_Corona test and vaccination system.docx', NULL, 'dsfa', '2026-03-12 02:22:56', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','approved') DEFAULT 'pending',
  `hospital_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `email`, `password`, `phone`, `address`, `details`, `created_at`, `status`, `hospital_file`) VALUES
(1, 'Rajput', 'arifjunaid039@gmail.com', '$2y$10$l2uoscnxmNVmQC62Asujxux1SdL/bp7tjtNwvBeR8fxUsK.3Ik5Hi', '03002136908', 'dsfa', 'dsfdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2026-03-11 00:46:49', 'approved', '1773190009_Corona test and vaccination system.docx'),
(2, 'DOW', 'DOW@gmail.com', '$2y$10$HJOJE.WYHoL3rBaEI8rf6epV1Mljms5iUX2/28/5Xdba6ggm8c7dS', '03002136908', 'dsfa', 'sdddddddddddddddddddddddddddddd', '2026-03-12 02:12:47', 'approved', '1773281567_Corona test and vaccination system.docx');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `order_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
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
  `product_name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `hospital_id` int DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_patients_hospital` (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `full_name`, `email`, `phone`, `password`, `hospital_id`, `address`, `created_at`) VALUES
(11, 'Ibrahim', 'Ibrahim@gmail.com', '03002136908', '$2y$10$8pFO5SMLzWUDk1NmzpHquuYf5bEqxXC3LIbBahmziB1L334QMZpO.', 1, 'dsfa', '2026-03-11 19:58:16'),
(12, 'Ali', 'ali@email.com', '03002136908', '$2y$10$VNzzEBkyFktu0hU6KvBnTu75A0BWG8.oxdIpVKT1appEqTPDgnLnW', 1, 'dsfa', '2026-03-11 20:01:37'),
(13, 'Junaid arif', 'arifjunaid03@gmail.com', '03002136908', '$2y$10$pP0u1WTTNzxiUPjYMd6VYeT0q244cNtsxPYkL9i.b9cnykdCoM0LO', NULL, 'dsfa', '2026-03-11 20:21:28'),
(16, 'Rabi', 'Rabi@gmail.com', '03002136908', '$2y$10$lZvqnrZrX7BEDXp5ycx21O76gYceOHa27RcdKEMALIpjXkHtbhi86', NULL, 'dsfa', '2026-03-12 00:59:42'),
(17, 'HADI', 'HADI@gmail.com', '03002136908', '$2y$10$T6LMI0KCUkbopX9IbERNGudOhiuVqMH21u9F08KhEbt4O4GnRK6Zm', NULL, 'dsfa', '2026-03-12 01:07:42'),
(19, 'Talha', 'Talha@gmail.com', '03002136908', '$2y$10$LOqH5ojVkrBegs9Num7zAOHbBVNBJxoopIIPx0sHLzTmnzjB0xAuC', NULL, 'dsfa', '2026-03-12 01:24:18'),
(21, 'Azam', 'Azam@gmail.com', '03002136908', '$2y$10$4brtm1qsgmL4rtZSsvEgreXfxGGf7eADuUu7uZpgMb2dVvzNZYtDy', NULL, 'dsfa', '2026-03-12 01:29:01'),
(24, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136903', '$2y$10$AZsqiST0fzN5gjcVaB2qO.q1Sd1vPOodsR5JcZZrix1c8OEF3ssFe', NULL, 'dsfa', '2026-03-12 02:12:18');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointments_hospital` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `fk_patients_hospital` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
