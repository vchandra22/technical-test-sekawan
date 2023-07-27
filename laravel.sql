-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2023 at 03:53 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', ' Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 09:28:39', '2023-07-26 09:28:39'),
(2, 'default', 'Reza Darmawan telah login', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2023-07-26 09:30:35', '2023-07-26 09:30:35'),
(3, 'default', 'Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 09:35:08', '2023-07-26 09:35:08'),
(4, 'default', 'created', 'App\\Models\\Vehicle', 'created', 8, 'App\\Models\\User', 1, '{\"attributes\":{\"name\":null,\"text\":null}}', NULL, '2023-07-26 09:35:40', '2023-07-26 09:35:40'),
(5, 'default', 'created', 'App\\Models\\Vehicle', 'created', 9, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 09:37:37', '2023-07-26 09:37:37'),
(6, 'default', 'created', 'App\\Models\\Vehicle', 'created', 10, 'App\\Models\\User', 1, '{\"attributes\":{\"merek\":\"Honda Brio\",\"nopol\":\"N 6755 KBD\",\"bahan_bakar\":\"Bensin\",\"nama_driver\":null,\"jenis\":\"penumpang\",\"status\":\"tersedia\"}}', NULL, '2023-07-26 09:39:17', '2023-07-26 09:39:17'),
(7, 'default', 'created', 'App\\Models\\Vehicle', 'created', 11, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 09:43:46', '2023-07-26 09:43:46'),
(8, 'default', 'created', 'App\\Models\\Vehicle', 'created', 12, 'App\\Models\\User', 1, '{\"attributes\":{\"merek\":\"L300\",\"nopol\":\"N 4550 OAJ\",\"bahan_bakar\":\"Bensin\",\"nama_driver\":null,\"jenis\":\"barang\",\"status\":\"tersedia\"}}', NULL, '2023-07-26 09:54:24', '2023-07-26 09:54:24'),
(9, 'default', 'Reza Darmawan telah login', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2023-07-26 09:55:00', '2023-07-26 09:55:00'),
(10, 'default', 'Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 09:57:58', '2023-07-26 09:57:58'),
(11, 'default', 'Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 15:22:58', '2023-07-26 15:22:58'),
(12, 'default', 'Vincent Chandra Trie Novan telah logout', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 15:25:22', '2023-07-26 15:25:22'),
(13, 'default', 'Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 15:25:40', '2023-07-26 15:25:40'),
(14, 'default', 'Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 17:04:43', '2023-07-26 17:04:43'),
(15, 'default', 'Vincent Chandra Trie Novan telah logout', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 17:11:16', '2023-07-26 17:11:16'),
(16, 'default', 'Susanto Bowo telah login', NULL, NULL, NULL, 'App\\Models\\User', 4, '[]', NULL, '2023-07-26 17:11:54', '2023-07-26 17:11:54'),
(17, 'default', 'Susanto telah logout', NULL, NULL, NULL, 'App\\Models\\User', 4, '[]', NULL, '2023-07-26 17:27:07', '2023-07-26 17:27:07'),
(18, 'default', 'Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 17:27:15', '2023-07-26 17:27:15'),
(19, 'default', 'Vincent Chandra Trie Novan telah logout', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 17:31:37', '2023-07-26 17:31:37'),
(20, 'default', 'Vincent Chandra Trie Novan telah login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 17:39:27', '2023-07-26 17:39:27'),
(21, 'default', 'Vincent Chandra Trie Novan telah logout', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2023-07-26 18:22:34', '2023-07-26 18:22:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_26_002111_create_permission_tables', 1),
(6, '2023_07_26_025540_create_vehicles_table', 1),
(7, '2023_07_26_060313_create_transactions_table', 1),
(8, '2023_07_26_161754_create_activity_log_table', 2),
(9, '2023_07_26_161755_add_event_column_to_activity_log_table', 2),
(10, '2023_07_26_161756_add_batch_uuid_column_to_activity_log_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add kendaraan', 'web', '2023-07-26 09:01:59', '2023-07-26 09:01:59'),
(2, 'edit kendaraan', 'web', '2023-07-26 09:02:04', '2023-07-26 09:02:04'),
(3, 'approve', 'web', '2023-07-26 09:02:13', '2023-07-26 09:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-07-26 09:01:47', '2023-07-26 09:01:47'),
(2, 'verifikator', 'web', '2023-07-26 09:01:51', '2023-07-26 09:01:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_vehicles` bigint(20) UNSIGNED DEFAULT NULL,
  `id_users` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_vehicles`, `id_users`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2023-07-26 09:10:50', '2023-07-26 09:10:50'),
(2, 4, 2, '2023-07-26 09:11:16', '2023-07-26 09:11:16'),
(3, 2, 3, '2023-07-26 09:12:38', '2023-07-26 09:12:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vincent Chandra Trie Novan', 'vincentchaandra@gmail.com', '$2y$10$RQm2IcC1uVeBW3d5gIOhp.xwTiIchpFuZs4zEdY2C1P.HEEVLVWQe', NULL, '2023-07-26 09:02:47', '2023-07-26 09:02:47'),
(2, 'Reza Darmawan', 'reza.darmawan12@gmail.com', '$2y$10$JYopi9GLdHOFGmLliBibYehgSZsag2vUuGWeW2U8Xw28hTcihokH6', NULL, '2023-07-26 09:04:32', '2023-07-26 09:04:32'),
(3, 'Putri Mustika', 'putrimustika.24@gmail.com', '$2y$10$bl8gmKjGuuiEHaJFpHn7R.x8J5onrqqHsmuW.mt3Ey3Fe6nMnpZ0C', NULL, '2023-07-26 09:05:25', '2023-07-26 09:05:25'),
(4, 'Susanto', 'susanto.b23@gmail.com', '$2y$10$DYmhFg4SNad3T90o4IPDE.Ra22tmVbShMxoX22MmaZ2jt6fNOWehm', NULL, '2023-07-26 17:11:44', '2023-07-26 17:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `merek` varchar(255) DEFAULT NULL,
  `nopol` varchar(255) DEFAULT NULL,
  `bahan_bakar` varchar(255) DEFAULT NULL,
  `nama_driver` varchar(255) DEFAULT NULL,
  `jenis` enum('barang','penumpang') DEFAULT NULL,
  `status` enum('tersedia','dipesan','dipakai','servis') DEFAULT 'tersedia',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `merek`, `nopol`, `bahan_bakar`, `nama_driver`, `jenis`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kijang Inova', 'N 1134 OBD', 'Bensin', 'Sunardi', 'penumpang', 'dipesan', '2023-07-26 09:07:52', '2023-07-26 09:10:50'),
(2, 'Kijang Inova', 'N 2354 KBD', 'Bensin', 'Widya', 'penumpang', 'dipakai', '2023-07-26 09:08:17', '2023-07-26 09:16:39'),
(3, 'Kijang Inova', 'N 5468 OBF', 'Solar', NULL, 'penumpang', 'servis', '2023-07-26 09:08:40', '2023-07-26 09:11:30'),
(4, 'Avanza', 'N 6457 KBC', 'Bensin', 'Mujianto', 'penumpang', 'dipesan', '2023-07-26 09:09:21', '2023-07-26 09:11:16'),
(5, 'Ioniq 5', 'N 5477 UG', 'Listrik', NULL, 'penumpang', 'tersedia', '2023-07-26 09:09:43', '2023-07-26 09:09:43'),
(6, 'Xenia', 'N 7780 KBG', 'Bensin', NULL, 'penumpang', 'tersedia', '2023-07-26 09:10:01', '2023-07-26 09:10:01'),
(7, 'Canter Super Speed', 'N 6588 UF', 'Solar', NULL, 'barang', 'tersedia', '2023-07-26 09:10:33', '2023-07-26 09:10:33'),
(8, 'Grand Max', 'N 1923 KBQ', 'Bensin', NULL, 'barang', 'tersedia', '2023-07-26 09:35:40', '2023-07-26 09:51:56'),
(9, 'Avanza Veloz', 'N 1154 UFQ', 'Bensin', NULL, 'penumpang', 'tersedia', '2023-07-26 09:37:37', '2023-07-26 09:42:45'),
(10, 'Honda Brio', 'N 6755 KBD', 'Bensin', NULL, 'penumpang', 'tersedia', '2023-07-26 09:39:17', '2023-07-26 09:39:17'),
(11, 'Veloz', 'N 7698 KBD', 'Bensin', NULL, 'penumpang', 'tersedia', '2023-07-26 09:43:46', '2023-07-26 09:58:08'),
(12, 'L300', 'N 4550 OAJ', 'Bensin', NULL, 'barang', 'tersedia', '2023-07-26 09:54:24', '2023-07-26 09:54:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_id_vehicles_index` (`id_vehicles`),
  ADD KEY `transactions_id_users_index` (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_id_vehicles_foreign` FOREIGN KEY (`id_vehicles`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
