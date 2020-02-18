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
-- Database: `laravel-img`
--

--
-- Dumping data for table `emoticon_types`
--

INSERT INTO `emoticon_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Standard Emoticons', NULL, NULL);

--
-- Dumping data for table `exts`
--

INSERT INTO `exts` (`id`, `img_type_id`, `ext`, `created_at`, `updated_at`) VALUES
(1, 1, 'jpg', NULL, NULL),
(2, 2, 'gif', NULL, NULL),
(3, 3, 'webp', NULL, NULL);

--
-- Dumping data for table `imgs`
--

-- INSERT INTO `imgs` (`id`, `img_type_id`, `name`, `filename`, `time`, `uploaded_at`, `created_at`, `updated_at`) VALUES
-- (1, 3, 'hello007', 'd6m5IAF8T8T76j', 0, '2014-01-19 00:00:00', NULL, NULL),
-- (3, 1, 'hellO', 'dc78e324f2dd3f4dc7259b6fad07e3e4246aa2c1', 1, '2018-07-02 16:51:00', NULL, NULL),
-- (4, 1, 'followagatagrimaldos', 'badd3d4465497b4a67e9a8dbe13539bf7fcc7561', 1, '2019-11-28 14:55:00', NULL, NULL),
-- (5, 3, 'hearty', 'ASp1s54OzM0pn8R6G', 0, '2013-03-14 00:00:00', NULL, NULL),
-- (6, 3, 'btm6', 'c50784b5a26519776a213a8a36acf647e0cf7a03', 0, '2018-08-03 09:53:00', NULL, NULL),
-- (9, 3, 'LOve', '7c7a9fe1a938ac6d8b9a177dc3023c50631e9cc0_250x80', 0, '2018-09-05 01:27:00', NULL, NULL),
-- (14, 2, 'kiss4u', 'IdX7eG1ruYBcPfUkR', 0, '2013-05-25 00:00:00', NULL, NULL);


--
-- Dumping data for table `img_types`
--

INSERT INTO `img_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'JPEG', NULL, NULL),
(2, 'GIF', NULL, NULL),
(3, 'WebP', NULL, NULL);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chaturbate', 'apps@chaturbate.com', NULL, '', NULL, NULL, NULL),
(2, 'Chaturbate', 'support@tr.chaturbate.com', NULL, '', NULL, NULL, NULL),
(3, 'Chaturbate Support', 'support@chaturbate.com', NULL, '', NULL, NULL, NULL),
(4, 'noud41', 'noud4@home.nl', NULL, '', NULL, NULL, NULL);

--
-- Dumping data for table `user_imgs`
--

INSERT INTO `user_imgs` (`id`, `img_id`, `user_id`, `created_at`, `updated_at`) VALUES
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
