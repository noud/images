-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 23, 2020 at 08:09 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-images`
--

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chaturbate', 'apps@chaturbate.com', NULL, '', NULL, NULL, NULL),
(2, 'Chaturbate', 'support@tr.chaturbate.com', NULL, '', NULL, NULL, NULL),
(3, 'Chaturbate Support', 'support@chaturbate.com', NULL, '', NULL, NULL, NULL),
(4, 'noud41', 'noud4@home.nl', NULL, '', NULL, NULL, NULL);

--
-- Dumping data for table `image_categories`
--

INSERT INTO `image_categories` (`id`, `image_category_type_id`, `image_category_type_order`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL),
(2, 1, 2, 2, NULL, NULL),
(3, 1, 3, 3, NULL, NULL),
(4, 1, 4, 4, NULL, NULL),
(7, 1, 5, 5, NULL, NULL),
(8, 1, 6, 6, NULL, NULL),
(9, 1, 7, 7, NULL, NULL),
(10, 1, 8, 8, NULL, NULL),
(11, 1, 9, 9, NULL, NULL),
(12, 1, 10, 10, NULL, NULL),
(13, 1, 11, 11, NULL, NULL),
(14, 1, 12, 12, NULL, NULL),
(15, 1, 13, 13, NULL, NULL),
(16, 1, 14, 14, NULL, NULL),
(17, 1, 15, 15, NULL, NULL),
(18, 1, 16, 16, NULL, NULL),
(19, 1, 17, 17, NULL, NULL),
(20, 1, 18, 18, NULL, NULL),
(21, 1, 19, 19, NULL, NULL),
(22, 1, 21, 21, NULL, NULL),
(23, 1, 22, 22, NULL, NULL),
(24, 1, 23, 23, NULL, NULL),
(25, 1, 24, 24, NULL, NULL),
(26, 1, 25, 25, NULL, NULL),
(27, 1, 26, 26, NULL, NULL),
(28, 1, 27, 27, NULL, NULL),
(29, 1, 28, 28, NULL, NULL),
(30, 1, 29, 29, NULL, NULL),
(31, 1, 30, 30, NULL, NULL),
(32, 1, 31, 31, NULL, NULL),
(33, 1, 32, 32, NULL, NULL),
(34, 1, 33, 33, NULL, NULL),
(35, 1, 34, 34, NULL, NULL),
(36, 1, 20, 20, NULL, NULL),
(45, 5, 1, 35, NULL, NULL),
(46, 5, 1, 41, NULL, NULL);

--
-- Dumping data for table `image_types`
--

INSERT INTO `image_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'webp', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
