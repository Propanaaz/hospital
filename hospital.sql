-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2026 at 09:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `file_cat` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `tribe` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `place_of_Origin` varchar(255) NOT NULL,
  `nok_name` varchar(255) NOT NULL,
  `nok_address` varchar(255) NOT NULL,
  `nok_phone` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `created_at`, `updated_at`, `user_id`, `file_cat`, `fname`, `lname`, `mname`, `address`, `age`, `occupation`, `tribe`, `phone_no`, `place_of_Origin`, `nok_name`, `nok_address`, `nok_phone`, `sex`) VALUES
(2, '2025-02-22 15:56:24', '2025-02-22 21:05:17', '7dGX3Y', 'private', 'Azeez', 'Adebimpe', 'Adeniyi', 'Sw9/1575 Temidire Street Adifase Area Apata Ibadan', '24', 'Programmer', 'Yoruba', '09067669557', 'Ibadan', 'Adebimpe Aminat', 'Sw9/1575 Temidire Street Adifase Area Apata Ibadan', '07084761161', 'Female'),
(6, '2025-02-27 08:27:44', '2025-02-28 10:23:49', 'gb31qw', 'private', 'Azeez', 'Adebimpe', 'Adeniyi', 'Sw9/1575 Temidire Street Adifase Area Apata Ibadan', '12', 'Student', '8', '098767', '788', '780', '77', '8778', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultants`
--

CREATE TABLE `consultants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultants`
--

INSERT INTO `consultants` (`id`, `created_at`, `updated_at`, `user_id`, `type`, `name`) VALUES
(3, '2025-02-22 16:56:48', '2025-02-22 16:56:48', '7dGX3Y', 'Opthamologist', 'Azeez Adeniyi Adebimpe');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `created_at`, `updated_at`, `user_id`, `type`, `answer`) VALUES
(1, '2025-02-22 17:26:12', '2025-02-22 17:26:12', '7dGX3Y', 'Heart Disease', 'None'),
(2, '2025-02-27 08:28:48', '2025-02-27 08:28:48', 'gb31qw', 'Heart Disease', 'nill'),
(3, '2025-02-27 08:29:00', '2025-02-27 08:29:00', 'gb31qw', 'others', 'asthma'),
(4, '2025-02-28 10:22:52', '2025-02-28 10:22:52', 'EV2UCh', 'Heart Disease', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_21_205052_create_biodatas_table', 1),
(5, '2025_02_21_205741_create_pregnancies_table', 1),
(6, '2025_02_21_210113_create_histories_table', 1),
(7, '2025_02_21_210920_create_consultants_table', 1),
(8, '2025_02_21_210954_create_specialpoints_table', 1),
(9, '2025_02_21_213338_create_pregbios_table', 1),
(10, '2025_02_21_213738_create_schemes_table', 1),
(11, '2025_02_21_214412_create_tests_table', 1),
(12, '2025_02_21_214423_create_wards_table', 1),
(13, '2025_03_01_110715_add_type_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pregbios`
--

CREATE TABLE `pregbios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `total_preg` varchar(255) NOT NULL,
  `total_liv_children` varchar(255) NOT NULL,
  `lmp` varchar(255) NOT NULL,
  `edd` varchar(255) NOT NULL,
  `ip_num` varchar(255) NOT NULL,
  `op_num` varchar(255) NOT NULL,
  `preg_duration` varchar(255) NOT NULL,
  `mage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pregbios`
--

INSERT INTO `pregbios` (`id`, `created_at`, `updated_at`, `user_id`, `total_preg`, `total_liv_children`, `lmp`, `edd`, `ip_num`, `op_num`, `preg_duration`, `mage`) VALUES
(1, '2025-02-22 17:46:34', '2025-02-22 20:39:16', '7dGX3Y', '200', '19', '7', '7', '8', '67', '4', '25');

-- --------------------------------------------------------

--
-- Table structure for table `pregnancies`
--

CREATE TABLE `pregnancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `preg_duration` varchar(255) NOT NULL,
  `birth_weight` varchar(255) NOT NULL,
  `preg_complication` varchar(255) NOT NULL,
  `lab_complication` varchar(255) NOT NULL,
  `premium` varchar(255) NOT NULL,
  `age_death` varchar(255) DEFAULT NULL,
  `cause_death` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pregnancies`
--

INSERT INTO `pregnancies` (`id`, `created_at`, `updated_at`, `user_id`, `dob`, `preg_duration`, `birth_weight`, `preg_complication`, `lab_complication`, `premium`, `age_death`, `cause_death`) VALUES
(1, '2025-02-22 18:00:47', '2025-02-22 18:00:47', '7dGX3Y', '65', '7567', '5675', '65', '5656', '556', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `hmo_name` varchar(255) NOT NULL,
  `hmo_code` varchar(255) NOT NULL,
  `hmo_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schemes`
--

INSERT INTO `schemes` (`id`, `created_at`, `updated_at`, `user_id`, `type`, `number`, `hmo_name`, `hmo_code`, `hmo_no`) VALUES
(1, '2025-02-22 18:13:25', '2025-02-22 18:13:25', '7dGX3Y', 'NHIS', '67', 'pp', 'pp', 'pp');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('C7g52ptPO5Xb5ZTuY2lYRiHmDc53zLAtnIYW7YFZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUlVYTEzNkxHT0phaVg3bHkzaW1Nckc1RzgxaWpjcU50V3lwWmFzbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1740829577),
('itsaTvqTu0XzOqhQkcyJrqbwqXQKBTtTUWNptyQs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUFnQ2RnR0NMTVFERzZ1dWpjd3o5UENNNUw1WDVJMk1qcGFvMnhzTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742140568),
('ObVcabIZZPr52lTwwEmupkLlrwMhsRuWtKUh5r1J', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlY2MGR3bWYyMzM2UWx0NjZJeXpsYjdZeFIxZnIwOGVhd0VmdEdPNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcmVhdGVfdXNlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1741176641),
('Px8HB0N01HvWx1BGrjJ68BWw46Jy95CZ3avKTpjx', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR2lhSEx0NUJCZ2t1c1lmWjJJbXNzd1I4eXFTM0dRVVp2SVVUZmo4VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbGxfcGF0aWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1741181298);

-- --------------------------------------------------------

--
-- Table structure for table `specialpoints`
--

CREATE TABLE `specialpoints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialpoints`
--

INSERT INTO `specialpoints` (`id`, `created_at`, `updated_at`, `user_id`, `name`) VALUES
(1, '2025-02-22 18:26:36', '2025-02-22 18:26:36', '7dGX3Y', 'Head');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `created_at`, `updated_at`, `user_id`, `type`, `remark`) VALUES
(1, '2025-02-22 18:27:07', '2025-02-22 18:27:07', '7dGX3Y', 'CRI', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$BcF71XNT5z0vmLd.RRO3Rep6OtYr0bv8f57lj2Lk9Z496hi..oDB6', NULL, '2025-03-01 09:51:02', '2025-03-01 09:51:02', 'admin'),
(4, 'azeez@gmail.com', 'azeez@gmail.com', NULL, '$2y$12$wtQuOeFTqRaFW/CB7.Gu..9LEJ.JllRHJV9CADOMpYVAYsupL1W/m', NULL, '2025-03-01 10:19:05', '2025-03-01 10:19:05', 'other'),
(5, 'a@gmail.com', 'a@gmail.com', NULL, '$2y$12$9ruf6GXZrSTE.ydKAwdIgeXzG4aiGOYy.uqFXVxOxTFh4Hlfse/HG', NULL, '2025-03-05 11:12:25', '2025-03-05 11:12:25', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `created_at`, `updated_at`, `user_id`, `name`) VALUES
(3, '2025-02-22 20:22:20', '2025-02-22 20:22:20', '7dGX3Y', 'ward 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `consultants`
--
ALTER TABLE `consultants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pregbios`
--
ALTER TABLE `pregbios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pregnancies`
--
ALTER TABLE `pregnancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `specialpoints`
--
ALTER TABLE `specialpoints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `consultants`
--
ALTER TABLE `consultants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pregbios`
--
ALTER TABLE `pregbios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pregnancies`
--
ALTER TABLE `pregnancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialpoints`
--
ALTER TABLE `specialpoints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
