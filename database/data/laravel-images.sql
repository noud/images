-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 23, 2020 at 09:27 PM
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
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `image_type_id`, `extension`, `created_at`, `updated_at`) VALUES
(1, 4, 'jpg', NULL, NULL),
(2, 1, 'gig', NULL, NULL);

--
-- Dumping data for table `image_categories`
--

INSERT INTO `image_categories` (`id`, `image_category_type_id`, `image_category_type_order`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 101, 1, 1, NULL, NULL),
(2, 101, 2, 2, NULL, NULL),
(3, 101, 3, 3, NULL, NULL),
(4, 101, 4, 4, NULL, NULL),
(7, 101, 5, 5, NULL, NULL),
(8, 101, 6, 6, NULL, NULL),
(9, 101, 7, 7, NULL, NULL),
(10, 101, 8, 8, NULL, NULL),
(11, 101, 9, 9, NULL, NULL),
(12, 101, 10, 10, NULL, NULL),
(13, 101, 11, 11, NULL, NULL),
(14, 101, 12, 12, NULL, NULL),
(15, 101, 13, 13, NULL, NULL),
(16, 101, 14, 14, NULL, NULL),
(17, 101, 15, 15, NULL, NULL),
(18, 101, 16, 16, NULL, NULL),
(19, 101, 17, 17, NULL, NULL),
(20, 101, 18, 18, NULL, NULL),
(21, 101, 19, 19, NULL, NULL),
(22, 101, 21, 21, NULL, NULL),
(23, 101, 22, 22, NULL, NULL),
(24, 101, 23, 23, NULL, NULL),
(25, 101, 24, 24, NULL, NULL),
(26, 101, 25, 25, NULL, NULL),
(27, 101, 26, 26, NULL, NULL),
(28, 101, 27, 27, NULL, NULL),
(29, 101, 28, 28, NULL, NULL),
(30, 101, 29, 29, NULL, NULL),
(31, 101, 30, 30, NULL, NULL),
(32, 101, 31, 31, NULL, NULL),
(33, 101, 32, 32, NULL, NULL),
(34, 101, 33, 33, NULL, NULL),
(35, 101, 34, 34, NULL, NULL),
(36, 101, 20, 20, NULL, NULL),
(45, 102, 1, 35, NULL, NULL),
(46, 102, 1, 41, NULL, NULL);

--
-- Dumping data for table `image_types`
--

INSERT INTO `image_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'gif', NULL, NULL),
(2, 'webp', NULL, NULL),
(4, 'jpg', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
