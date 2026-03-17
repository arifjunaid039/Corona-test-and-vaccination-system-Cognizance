-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 17, 2026 at 02:46 AM
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
  `phone` varchar(20) DEFAULT NULL,
  `doctor_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_appointments_hospital` (`hospital_id`),
  KEY `fk_doctor` (`doctor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `full_name`, `email`, `hospital_id`, `visit_date`, `created_at`, `phone`, `doctor_id`) VALUES
(8, 'Junaid arif', 'arifjunaid039@gmail.com', 5, '2026-03-27', '2026-03-17 02:41:42', '03002136908', 29);

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(15, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136908', 'I would like to discuss', '2026-03-20', 'g', '2026-03-12 02:26:17'),
(16, 'Junaid arif', 'arifjunaid039@gmail.com', '03444444444', 'I would like to discuss', '2026-03-12', 'S', '2026-03-12 10:08:12'),
(17, 'Junaid arif', 'arifjunaid039@gmail.com', '03444444444', 'I would like to discuss', '2026-03-12', 'S', '2026-03-12 10:08:12');

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
  `pmc_number` varchar(50) DEFAULT NULL,
  `university_name` varchar(100) DEFAULT NULL,
  `graduation_year` year DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending',
  `hospital_id` int DEFAULT NULL,
  `verified_status` enum('pending','verified','rejected') NOT NULL DEFAULT 'pending',
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fk_hospital` (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor_details`
--

INSERT INTO `doctor_details` (`id`, `full_name`, `email`, `pmc_number`, `university_name`, `graduation_year`, `phone`, `password`, `degree`, `cv`, `photo`, `address`, `created_at`, `status`, `hospital_id`, `verified_status`, `details`) VALUES
(29, 'Saad', 'Saad@gmail.com', '344', 'Dow University of Health Sciences', '0000', '03002136908', '$2y$10$qe4qZFyLQejojr.9F2z6XOp/aqYFqTVqnWFC8j.MVtwqoS8JPBIQW', 'General Practitioner', '1773706164_Corona test and vaccination system.docx', '1773706164_IMG-20250613-WA0021.jpg', 'dsfa', '2026-03-17 00:09:24', '', 5, 'verified', '1773706164_Advantages of education junaid.pdf'),
(30, 'Junaid arif', 'arifjunaid039@gmail.com', '234', 'Dow University of Health Sciences', '2023', '03002136908', '$2y$10$EcR1oEnYtomrgzXQdFV32e63wcmKZH/NrwaOWfdmwGbmWfolbkpwy', 'Cardiologist', '1773709860_three-components.webp', '1773709860_IMG-20250612-WA0007.jpg', 'Karachi,Gulshan-Iqbal', '2026-03-17 01:11:00', '', 5, 'rejected', '1773709860_Corona test and vaccination system.docx'),
(55, 'Ibrahim', 'Ibrahim@gmail.com', '12', 'Dow University of Health Sciences', '2023', '03002136903', '$2y$10$HxUk8upUsmWOfGvOxGUEmeA5nyjk0kz1JIarkRRhsWO7Ii9iSDnOu', 'Cardiologist', '1773712968_Junaid_Arif_ppt[1].pdf', '1773712968_doctor img.jpg', 'dsfa', '2026-03-17 02:02:48', '', 7, 'verified', '1773712968_Junaid_Arif_ppt[1].pdf'),
(56, 'Talha', 'Talha@gmail.com', '12345', 'Dow University of Health Sciences', '2022', '03002136908', '$2y$10$9d.fZB3zYQzFwaTZYAZQEuMy.YcUX7CElQpn5N74LACto0TYh1GmG', 'Cardiologist', '1773713416_Advantages of education junaid.pdf', '1773713416_img6.jpg', 'dsfa', '2026-03-17 02:10:16', '', 7, 'verified', '1773713416_Corona test and vaccination system.docx'),
(57, 'Hamza', 'Hamza@gmail.com', '1233', 'Dow University of Health Sciences', '2024', '03002136908', '$2y$10$dQTwVuj3l3HEiDTwi7A74ezGhbUIRzyKRjEqiqgWSjUH05jhV/NLG', 'Cardiologist', '1773713516_Corona test and vaccination system.docx', '1773713516_img1.jpg', 'dsfa', '2026-03-17 02:11:56', '', 9, 'verified', '1773713516_Corona test and vaccination system.docx'),
(58, 'Umer', 'Umer@gmail.com', '23456789', 'Dow University of Health Sciences', '2021', '03002136908', '$2y$10$rSu8Z0OEGQKZ8qGlnqn0je84rWARyWKPqSEcKzznblf/ZyqDWnar2', 'General Practitioner', '1773713631_Corona test and vaccination system.docx', '1773713631_img4.jpg', 'dsfa', '2026-03-17 02:13:51', '', 8, 'verified', '1773713631_Corona test and vaccination system.docx'),
(59, 'Aymen', 'Aymen@examplecom', '12345678910', 'Dow University of Health Sciences', '2023', '03002136908', '$2y$10$/vZ5pP12At2ZG6RXqmaAwOPYZ9xai44NLIP3T.mQ1UocEf0LRH1MG', 'General Practitioner', '1773714412_Advantages of education junaid.pdf', '1773714412_img4.jpg', 'dsfa', '2026-03-17 02:26:52', '', 8, 'verified', '1773714412_Advantages of education junaid.pdf'),
(60, 'Osama', 'Osama@gmail.com', '12234', 'Dow University of Health Sciences', '2024', '03002136908', '$2y$10$xwnvWgPXXc6EdrVV/QG35O5L0eYsKB2OTdHjgf0ltx1lnQ/SwSXKW', 'Dermatologist', '1773714600_Advantages of education junaid.pdf', '1773714600_img1.jpg', 'dsfa', '2026-03-17 02:30:00', '', 5, 'verified', '1773714600_Advance PRESENTATION.pptx'),
(61, 'Arif', 'arif@gmail.com', '1222', 'Dow University of Health Sciences', '2024', '03002136908', '$2y$10$tW6dN32oR5M1/OQKpK5mvekjt6a6Xt.wpZTUong3rMYk82HDcWKkG', 'Dermatologist', '1773714665_Advantages of education junaid.pdf', '1773714665_img1.jpg', 'dsfa', '2026-03-17 02:31:05', '', 6, 'verified', '1773714665_Junaid_Arif_ppt[1].pdf'),
(62, 'Noor', 'Noor@gmial.com', '12111', 'Dow University of Health Sciences', '2021', '03002136908', '$2y$10$s62ZY97pRFG6DNX.WlgT/usMqt0Cb8s8sGmJwlDOOU5Zs23xbfWra', 'Pediatrician', '1773714729_M.Junaid MY PERSONAL Portfolio. dcox.docx', '1773714729_doctor img.jpg', 'dsfa', '2026-03-17 02:32:09', '', 8, 'verified', '1773714729_Advance PRESENTATION.pptx'),
(63, 'Shakir', 'Shakir@gmail.com', '12222', 'Dow University of Health Sciences', '2019', '03002136908', '$2y$10$IKiImRk97hJKrdUtmSzLsOMtfJteskMdg4/PfS.W5wo/iFUFTPbq6', 'Dermatologist', '1773714810_M.Junaid MY PERSONAL Portfolio. dcox.docx', '1773714810_img1.jpg', 'dsfa', '2026-03-17 02:33:30', '', 9, 'verified', '1773714810_JUNAID ARIF EXCEL ASIGMENT 4 . xlsx.xlsx'),
(64, 'Sabir', 'Sabir@gmail.com', '9999', 'Dow University of Health Sciences', '2015', '03002136908', '$2y$10$iS3KhqydJbPYNSGVpzI7QuH7SgtFCgz/gXA/LGzUhE8AfWD4538zm', 'Neurologist', '1773714892_Advantages of education junaid.pdf', '1773714892_doctor img.jpg', 'dsfa', '2026-03-17 02:34:52', '', 7, 'verified', '1773714892_Junaid_Arif_ppt[1].pdf'),
(65, 'Hassan', 'hassan@gmail.com', '1222333', 'Dow University of Health Sciences', '2011', '03002136908', '$2y$10$mRzyGW1Q12VAaT3Qz4/VLOuehR5kGE/UTFe3GJBAwYwdfQ2Ed6.Ga', 'Neurologist', '1773714944_Junaid_Arif_ppt[1].pdf', '1773714944_doctor img.jpg', 'dsfa', '2026-03-17 02:35:44', '', 6, 'verified', '1773714944_M.Junaid MY PERSONAL Portfolio. dcox.pdf'),
(67, 'hashir', 'Hashir@gmail.com', '2', 'Dow University of Health Sciences', '2001', '03002136908', '$2y$10$w8rXpP2fWCzbR4YkQKaqP.LAPToPBaeVRAoP/2iFMLLcgoejURMRW', 'Neurologist', '1773715092_Paper.docx', '1773715092_img1.jpg', 'dsfa', '2026-03-17 02:38:12', '', 7, 'verified', '1773715092_Advantages of education.pptx'),
(68, 'Wasil', 'Wasil@gmnail.com', '111', 'Dow University of Health Sciences', '0000', '03002136908', '$2y$10$kxPJymsoTo2Dw2kQb2fPlO7VRpEnCn/eQvK8tcuTadC48A/fc5R9W', 'Pediatrician', '1773715174_M.Junaid MY PERSONAL Portfolio. dcox.pdf', '1773715174_img1.jpg', 'dsfa', '2026-03-17 02:39:34', '', 6, 'verified', '1773715174_Junaid Arif PPT Assignment.pptx'),
(69, 'Ayan', 'Ayan@gmail.com', '11111', 'Dow University of Health Sciences', '2006', '03002136908', '$2y$10$.rbM7yevg0Rdrux.6Fwcj.Hms4rQ3T57bZsM/MlQhQ.3FktCRZQmK', 'Pediatrician', '1773715248_M.Junaid MY PERSONAL Portfolio. dcox.pdf', '1773715248_doctor img.jpg', 'dsfa', '2026-03-17 02:40:48', '', 5, 'verified', '1773715248_Bio data.docx');

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
  `hospital_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `email`, `password`, `phone`, `address`, `details`, `created_at`, `status`, `hospital_file`, `hospital_image`) VALUES
(5, 'ESSA', 'Essakhan@gmail.com', '$2y$10$6hpkhmfGyQzo.0980wX50unwClEOaHtdtrRKrsBIUwUiN2L78lYeu', '03002136908', 'dsfa', 'fdsaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2026-03-13 11:15:23', 'approved', '1773400523_Advantages of education junaid.pdf', '1773400523_img.jpg'),
(6, 'Patel', 'Patel@gmail.com', '$2y$10$.fh5Ssy/JheDPU6w6Y89T.72S1.tPW5vj852GTtXQzSiuzTHx90a6', '03002136908', 'dsfa', 'acxvvvvvvvvvvvvvvvvvvvccccccccccccccccccccccccccccc', '2026-03-15 22:52:36', 'approved', '1773615156_Corona test and vaccination system.docx', 'hospital_6_1773615262.jpg'),
(7, 'DOW', 'DOW@gmail.com', '$2y$10$McfXoamcMgsUFYoflgrz/eNElDhUfXbWXtb.6VV1EmGCZlUIrzfYW', '03002136908', 'dsfa', '2222222222222222222222222222222', '2026-03-17 01:51:24', 'approved', '1773712284_Junaid_Arif_ppt[1].pdf', '1773712284_img.jpg'),
(8, 'Rajput', 'rajput@gmail.com', '$2y$10$bY3ks6Wk9a76gegS4SQTdeytURCjjVwozA3DUfr6USfIs8roA/TKW', '03002136908', 'dsfa', '2222222222222222222222222222222', '2026-03-17 01:52:14', 'approved', '1773712334_Advantages of education junaid.pdf', '1773712334_img.jpg'),
(9, 'agha', 'Aghakhan@gmail.com', '$2y$10$FWnKRP9xwxd17Ld3YbjG..spJLn2W8l8RLMyF9pLSJaLWcAePLide', '03002136908', 'dsfa', 'dssssssssssssssssssssssssssssssssssssssss', '2026-03-17 01:55:15', 'approved', '1773712515_Junaid_Arif_ppt[1].pdf', '1773712515_img.jpg');

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
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patients_hospital` (`hospital_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `full_name`, `email`, `phone`, `password`, `hospital_id`, `address`, `created_at`, `photo`) VALUES
(17, 'HADI', 'HADI@gmail.com', '03002136908', '$2y$10$T6LMI0KCUkbopX9IbERNGudOhiuVqMH21u9F08KhEbt4O4GnRK6Zm', NULL, 'dsfa', '2026-03-12 01:07:42', NULL),
(19, 'Talha', 'Talha@gmail.com', '03002136908', '$2y$10$LOqH5ojVkrBegs9Num7zAOHbBVNBJxoopIIPx0sHLzTmnzjB0xAuC', NULL, 'dsfa', '2026-03-12 01:24:18', NULL),
(21, 'Azam', 'Azam@gmail.com', '03002136908', '$2y$10$4brtm1qsgmL4rtZSsvEgreXfxGGf7eADuUu7uZpgMb2dVvzNZYtDy', NULL, 'dsfa', '2026-03-12 01:29:01', NULL),
(24, 'Junaid arif', 'arifjunaid039@gmail.com', '03002136903', '$2y$10$AZsqiST0fzN5gjcVaB2qO.q1Sd1vPOodsR5JcZZrix1c8OEF3ssFe', NULL, 'dsfa', '2026-03-12 02:12:18', NULL),
(30, 'Junaid arif', 'arifjunaid39@gmail.com', '03002136908', '$2y$10$NlKq2Von13EfYk2hJph3j.Vh0AGZ90.e6XiqqzTy6JTvHTtv3GBAq', NULL, 'dsfa', '2026-03-13 23:23:58', NULL),
(31, 'Khizer', 'Khizer@gmail.com', '03002136908', '$2y$10$k2k4hEFK2QM/sAnNiXvip.5DVU2ko43wjLj7stIB7VpKIFFkGtlg.', NULL, 'dsfa', '2026-03-14 01:07:17', NULL),
(32, 'Salman', 'Salman@gmail.com', '03002136908', '$2y$10$qrhFo.oj85CMoXNhbrIHBeCfdCNiZAa9S/Rvo7GMDzRE/qieacPyO', NULL, 'dsfa', '2026-03-14 01:13:37', NULL),
(34, 'Musab', 'Musab123@gmail.com', '03002136908', '$2y$10$1wd4fOxJTLVNsVN4UNRrRuaT2ii48H9fwZiXzNkLDo2R1EprgHCyO', NULL, 'dsfa', '2026-03-14 22:37:23', NULL),
(35, 'Hassan', 'Hassan@gmail.com', '03002136908', '$2y$10$Zeu4NpnT1l7E0iwWK1jdsO2Gr/bEojF0.zzkMqhNF.qVzhmcZQGF6', NULL, 'dsfa', '2026-03-14 22:45:02', 'default.png'),
(36, 'Abdullah', 'Abdullah@gmail.com', '03002136908', '$2y$10$UGVSPeZm5EFPaOaAeZBZge6Ys6.tVgEljCaT8IT.bUAjl8t/bx8o6', NULL, 'dsfa', '2026-03-14 22:48:50', 'patient_36_1773529736.jpg'),
(37, 'Saad', 'Saad@gmail.com', '03002136908', '$2y$10$w6Ov.nHT38Ef7Hl4E2Vjb.13VJ7uTk7Yte0OxHhkQisyKYxPEa7r6', NULL, 'dsfa', '2026-03-16 02:22:58', ''),
(38, 'Junaid arif', 'arifjunaid0@gmail.com', '03002136908', '$2y$10$sU93xqkoTihiyH/tL/gNBulHoENOKo.QaHfbUnkGTqmMZKEfnM/J.', NULL, 'dsfa', '2026-03-16 09:50:11', ''),
(39, 'Junaid', 'Junaid@gmail.com', '03002136908', '$2y$10$J7Qnt2jTLBlLtpS8NHrkj.9KdKVH8TOeVTrAe.t/3Z6me1OiAoxxq', NULL, 'dsfa', '2026-03-16 10:04:21', ''),
(40, 'Ali', 'ali@gmail.com', '03002136908', '$2y$10$HOIeeI3b/H6Wol2t6hdm9.7NizpOZAVLCTItOznjN0BUNtYk/l1N.', NULL, 'dsfa', '2026-03-16 23:13:50', ''),
(41, 'Muhammad', 'Muhammad@gmail.com', '03002136908', '$2y$10$zB/5X5z.PSa/M6xTbSsVrOg3Myg5m4OPtMRlGELxRlatcJXGJcQBm', NULL, 'dsfa', '2026-03-16 23:42:40', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `fk_appointments_hospital` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `fk_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctor_details` (`id`);

--
-- Constraints for table `doctor_details`
--
ALTER TABLE `doctor_details`
  ADD CONSTRAINT `fk_hospital` FOREIGN KEY (`hospital_id`) REFERENCES `hospitals` (`id`);

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
