-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 06:50 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smixs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_years`
--

CREATE TABLE `academic_years` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `academic_years`
--

INSERT INTO `academic_years` (`id`, `created_at`, `updated_at`, `name`, `description`, `status`) VALUES
(1, '2016-10-03 15:21:35', '2016-10-03 15:21:35', '1994', '1994', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `created_at`, `updated_at`, `name`, `description`, `status`) VALUES
(1, '2016-10-03 15:20:33', '2016-10-03 15:20:33', 'Philippines', 'Philippines', 1);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `like` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `created_at`, `updated_at`, `user_id`, `post_id`, `like`) VALUES
(1, '2016-10-03 15:14:53', '2016-10-03 15:14:53', 2, 3, 1),
(2, '2016-10-03 15:14:54', '2016-10-03 15:14:54', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_08_13_075804_create_users_table', 1),
('2016_08_14_034330_create_posts_table', 2),
('2016_08_14_040300_create_posts_table', 3),
('2016_08_18_094722_create_likes_table', 3),
('2016_08_19_033732_create_settings_table', 3),
('2016_08_27_091101_create_school_types_table', 3),
('2016_08_27_091140_create_school_levels_table', 3),
('2016_08_27_091250_create_municipalities_table', 3),
('2016_08_27_091304_create_regions_table', 3),
('2016_08_27_091314_create_countries_table', 3),
('2016_08_27_091330_create_academic_years_table', 3),
('2016_08_27_091339_create_templates_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

CREATE TABLE `municipalities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`id`, `created_at`, `updated_at`, `name`, `description`, `status`) VALUES
(1, '2016-10-03 15:20:43', '2016-10-03 15:20:43', 'Caloocan', 'Caloocan City', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `body`, `user_id`) VALUES
(2, '2016-10-03 15:09:45', '2016-10-03 15:13:53', 'asdadadasdadada', 2),
(3, '2016-10-03 15:14:45', '2016-10-03 15:14:49', 'sadsad', 2),
(4, '2016-10-04 15:27:07', '2016-10-04 15:27:07', 'grrr\r\n', 2),
(5, '2016-10-04 15:27:11', '2016-10-04 15:27:11', 'sad', 2),
(6, '2016-10-04 15:27:17', '2016-10-04 15:27:17', 'zxcdsa', 2);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `created_at`, `updated_at`, `name`, `description`, `status`) VALUES
(1, '2016-10-03 15:20:58', '2016-10-03 15:20:58', 'NCR', 'Metro Manila', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_levels`
--

CREATE TABLE `school_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `school_levels`
--

INSERT INTO `school_levels` (`id`, `created_at`, `updated_at`, `name`, `description`, `status`) VALUES
(1, '2016-10-03 15:21:07', '2016-10-03 15:21:07', 'Tertiary', 'Tertiary', 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_types`
--

CREATE TABLE `school_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `school_types`
--

INSERT INTO `school_types` (`id`, `created_at`, `updated_at`, `name`, `description`, `status`) VALUES
(1, '2016-10-03 15:21:23', '2016-10-03 15:21:23', 'Private', 'Private', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `site_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `barangay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `municipality_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_level_id` int(11) NOT NULL,
  `site_type_id` int(11) NOT NULL,
  `academic_year` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
  `activated_modules` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `updated_at`, `site_code`, `site_title`, `owner`, `street`, `barangay`, `municipality_id`, `region_id`, `country_id`, `zip_code`, `contact`, `fax`, `tin`, `site_level_id`, `site_type_id`, `academic_year`, `template_id`, `activated_modules`) VALUES
(1, NULL, NULL, 's', 's', 's', 's', 's', 1, 1, 1, 's', 's', 's', 's', 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `provider_user_id` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`user_id`, `provider_user_id`, `provider`, `updated_at`, `created_at`) VALUES
(2, '1460952647254439', 'facebook', '2016-10-03 14:35:50', '2016-10-03 14:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `email`, `firstname`, `password`, `remember_token`, `status`) VALUES
(1, '2016-08-13 16:22:29', '2016-10-01 14:26:25', 'marcaidameg@gmail.com', 'Meg Marcaida', '$2y$10$DxwuHCrYuEz95zkfEG9vluLIzLNiunWJxKNCa.3VYmk9F0Dth1Yna', 'iDc2jtRMT9e5tapCtoeSSvIe0GHM40fqUSyoeB2Kf7CxKhMRITgpt5EEWs8M', b'0'),
(2, '2016-08-14 09:34:27', '2016-10-04 15:26:46', 'megz082894@yahoo.com', 'Megz', '$2y$10$5f4NNJoBQGdi2f193dbuLuD8dcfByGPPl8kMv81G9U2EfKr9MQIOq', 'Fpxsq1F5GDwWhiInrX6Vt1MmPvZIXhBT9nW9qfbPVx0e4r9hnblNVWH7cbNp', b'0'),
(3, '2016-08-14 09:42:57', '2016-08-18 12:36:33', 'gemmamarcaida@yahoo.com', 'gemma', '$2y$10$wDU1rtfGZKL/VYzU3UeK9etpnJv67uSsgvVXXWiLOgM4GekPMm/9u', 'eCpKBnz4elNGJG9sdXO3zg21dMX0RwzWOpNd4LluvTBd9Qt0SXoLgCYcWtFB', b'0'),
(4, '2016-08-14 10:16:40', '2016-08-14 11:59:51', 'ss@gmail.com', 'qweqwe', '$2y$10$vA/.n7MiIYJAjI7Xjbi3sOgJFgNLN6cxyaeAipvGH73r.2Yv5m6kS', 'fH8x9ibsM6xyZRSYDgRvSBaVo6ESl3wJ5DImFAwJ3EEpoDboAHNv1niABzOV', b'0'),
(5, '2016-08-14 10:58:50', '2016-08-14 10:58:50', 'gemmamarcaida@yahoo.com2', 'wqeq', '$2y$10$kZ9ERhFa/SVPcdWf7odfbeVw11lLBjZBpO3enmyVXc.nEYNiC0JnG', NULL, b'0'),
(6, '2016-08-15 10:41:15', '2016-08-15 13:01:55', 'roweljohn@gmail.com', 'rowell john', '$2y$10$WxoJzNZFIGZy3tauw5qd3.j6SiDT5wOGriJGleRGbzyPVjK5F./tK', 'AoxQP4xQ2WdDAVsGL0rUt7fBFKuKILkaBIZIzQFA94fy3RLn1rT0XhWny1IL', b'0'),
(7, '2016-08-18 10:58:58', '2016-08-18 11:04:13', 'ewwww@gmail.com', 'qwe', '$2y$10$t.2.vJkYMhqxXO1uA9VLieWvFMt2MnIHha3ASeHx43bdzCjs5nrmq', 'PVYbWujsW0jeVsse9dao1RP742BUx2pnOAXzwOE67Ly1K9pb9DhoBrVOCc7x', b'0'),
(8, '2016-08-18 19:06:56', '2016-08-18 19:09:20', 'test@gmail.com', 'Test Account', '$2y$10$lhgd.O/xtWWbSL9O6BTPJuHiCa4nWt402hSJ2DZNTYIBy6tUBL6Vu', 'NQZNKUxHfNAJdn8hd6LPogROopMfcErKvk2ewnUCzjZxGlr08RInOq6QRkRN', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_years`
--
ALTER TABLE `academic_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `municipalities`
--
ALTER TABLE `municipalities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_levels`
--
ALTER TABLE `school_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_types`
--
ALTER TABLE `school_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_years`
--
ALTER TABLE `academic_years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `municipalities`
--
ALTER TABLE `municipalities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_levels`
--
ALTER TABLE `school_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school_types`
--
ALTER TABLE `school_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
