-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 18, 2020 at 12:31 AM
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
-- Database: `laravel-image`
--

--
-- Dumping data for table `emoticon_types`
--

INSERT INTO `emoticon_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Standard Emoticons', NULL, NULL);

--
-- Dumping data for table `extensions`
--

INSERT INTO `extensions` (`id`, `image_type_id`, `extension`, `created_at`, `updated_at`) VALUES
(1, 1, 'jpg', NULL, NULL),
(2, 2, 'gif', NULL, NULL),
(3, 3, 'webp', NULL, NULL);

--
-- Dumping data for table `image_types`
--

INSERT INTO `image_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'JPEG', NULL, NULL),
(2, 'GIF', NULL, NULL),
(3, 'WebP', NULL, NULL);

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chaturbate', 'apps@chaturbate.com', NULL, '', NULL, NULL, NULL),
(2, 'Chaturbate', 'support@tr.chaturbate.com', NULL, '', NULL, NULL, NULL),
(3, 'Chaturbate Support', 'support@chaturbate.com', NULL, '', NULL, NULL, NULL),
(4, 'noud41', 'noud4@home.nl', NULL, '', NULL, NULL, NULL);

--
-- Dumping data for table `account_images`
--

INSERT INTO `account_images` (`id`, `image_id`, `account_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, NULL, NULL),
(2, 2, 4, NULL, NULL),
(3, 3, 4, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 5, 4, NULL, NULL),
(6, 6, 4, NULL, NULL),
(7, 7, 4, NULL, NULL),
(8, 9, 4, NULL, NULL),
(9, 13, 1, NULL, NULL),
(10, 11, 1, NULL, NULL),
(11, 7, 1, NULL, NULL),
(12, 2, 1, NULL, NULL),
(13, 10, 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
