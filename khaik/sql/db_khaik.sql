-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2022 at 02:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_05_18_113800_create_tbl_users_table', 1),
(3, '2022_05_18_122204_create_tbl_restaurant_owners_table', 1),
(4, '2022_05_18_130858_create_tbl_restaurants_table', 1),
(5, '2022_05_18_145830_create_tbl_restaurants_categories_table', 1),
(6, '2022_05_18_150608_create_tbl_articles_table', 1),
(7, '2022_05_19_111050_create_tbl_restaurants_connected_categories_table', 1),
(8, '2022_05_19_111344_create_tbl_article_likes_table', 1),
(9, '2022_05_19_112401_create_tbl_users_favorites_table', 1),
(10, '2022_05_19_112902_create_tbl_favorite_statuses_table', 1),
(11, '2022_05_19_114340_create_tbl_article_prices_table', 1),
(12, '2022_05_19_114612_create_tbl_article_categories_table', 1),
(13, '2022_05_19_115034_create_tbl_restaurants_deals_table', 1),
(14, '2022_06_20_103859_create_tbl_article_options_table', 1),
(15, '2022_06_20_104355_foreign_key', 1),
(16, '2022_07_06_134217_create_tbl_admins_table', 1),
(17, '2022_07_07_141755_create_tbl_reports_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admins`
--

CREATE TABLE `tbl_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_level` int(11) NOT NULL,
  `firebase_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admins`
--

INSERT INTO `tbl_admins` (`id`, `email`, `password`, `auth_level`, `firebase_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@khaik.com', '$2y$10$w.NRUgYAMJ3MA2QfNpkJsuIWMBeed6iJFfKOxEo097.7ha8xqUhp6', 0, NULL, '2022-07-13 12:32:09', '2022-07-13 12:32:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `article_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `article_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_description` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_img` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_item_relations` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `article_option` bigint(20) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article_categories`
--

CREATE TABLE `tbl_article_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article_likes`
--

CREATE TABLE `tbl_article_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `like_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article_options`
--

CREATE TABLE `tbl_article_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article_prices`
--

CREATE TABLE `tbl_article_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `article_price_number` int(11) NOT NULL,
  `article_price_currency` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favorite_statuses`
--

CREATE TABLE `tbl_favorite_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favorite_status_description` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE `tbl_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurants`
--

CREATE TABLE `tbl_restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_phonenumber` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_header_photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_addres` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_place` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_country` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_longitude` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_latitude` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_opening_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_closing_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_facebook_link` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_qr` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_custom_status` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `restaurant_complete_status` bigint(20) UNSIGNED DEFAULT NULL,
  `total_views` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurants_categories`
--

CREATE TABLE `tbl_restaurants_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_restaurants_categories`
--

INSERT INTO `tbl_restaurants_categories` (`id`, `restaurant_category_name`, `created_at`, `updated_at`) VALUES
(1, 'BBQ', '2022-07-13 12:31:49', '2022-07-13 12:31:49'),
(2, 'Javanese', '2022-07-13 12:31:49', '2022-07-13 12:31:49'),
(3, 'House Food', '2022-07-13 12:31:49', '2022-07-13 12:31:49'),
(4, 'Indian', '2022-07-13 12:31:49', '2022-07-13 12:31:49'),
(5, 'Vegan', '2022-07-13 12:31:49', '2022-07-13 12:31:49'),
(6, 'Fast Food', '2022-07-13 12:31:49', '2022-07-13 12:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurants_connected_categories`
--

CREATE TABLE `tbl_restaurants_connected_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurants_deals`
--

CREATE TABLE `tbl_restaurants_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `deal_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deal_photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deal_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurant_owners`
--

CREATE TABLE `tbl_restaurant_owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firebase_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_favorites`
--

CREATE TABLE `tbl_users_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `favorite_status_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_admins_email_unique` (`email`);

--
-- Indexes for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_articles_restaurant_id_foreign` (`restaurant_id`),
  ADD KEY `tbl_articles_article_option_foreign` (`article_option`);

--
-- Indexes for table `tbl_article_categories`
--
ALTER TABLE `tbl_article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article_likes`
--
ALTER TABLE `tbl_article_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_article_likes_user_id_foreign` (`user_id`),
  ADD KEY `tbl_article_likes_article_id_foreign` (`article_id`);

--
-- Indexes for table `tbl_article_options`
--
ALTER TABLE `tbl_article_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_article_options_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `tbl_article_prices`
--
ALTER TABLE `tbl_article_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_article_prices_article_id_foreign` (`article_id`);

--
-- Indexes for table `tbl_favorite_statuses`
--
ALTER TABLE `tbl_favorite_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_reports_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `tbl_restaurants`
--
ALTER TABLE `tbl_restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_restaurants_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `tbl_restaurants_categories`
--
ALTER TABLE `tbl_restaurants_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_restaurants_connected_categories`
--
ALTER TABLE `tbl_restaurants_connected_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_connection` (`restaurant_id`),
  ADD KEY `category_connecetion` (`restaurant_category_id`);

--
-- Indexes for table `tbl_restaurants_deals`
--
ALTER TABLE `tbl_restaurants_deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_restaurants_deals_restaurant_id_foreign` (`restaurant_id`);

--
-- Indexes for table `tbl_restaurant_owners`
--
ALTER TABLE `tbl_restaurant_owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_restaurant_owners_email_unique` (`email`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_users_phonenumber_unique` (`phonenumber`),
  ADD UNIQUE KEY `tbl_users_email_unique` (`email`);

--
-- Indexes for table `tbl_users_favorites`
--
ALTER TABLE `tbl_users_favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_users_favorites_restaurant_id_foreign` (`restaurant_id`),
  ADD KEY `tbl_users_favorites_user_id_foreign` (`user_id`),
  ADD KEY `tbl_users_favorites_favorite_status_id_foreign` (`favorite_status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_article_categories`
--
ALTER TABLE `tbl_article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_article_likes`
--
ALTER TABLE `tbl_article_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_article_options`
--
ALTER TABLE `tbl_article_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_article_prices`
--
ALTER TABLE `tbl_article_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_favorite_statuses`
--
ALTER TABLE `tbl_favorite_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_restaurants`
--
ALTER TABLE `tbl_restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_restaurants_categories`
--
ALTER TABLE `tbl_restaurants_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_restaurants_connected_categories`
--
ALTER TABLE `tbl_restaurants_connected_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_restaurants_deals`
--
ALTER TABLE `tbl_restaurants_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_restaurant_owners`
--
ALTER TABLE `tbl_restaurant_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users_favorites`
--
ALTER TABLE `tbl_users_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD CONSTRAINT `tbl_articles_article_option_foreign` FOREIGN KEY (`article_option`) REFERENCES `tbl_article_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_articles_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_article_likes`
--
ALTER TABLE `tbl_article_likes`
  ADD CONSTRAINT `tbl_article_likes_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `tbl_articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_article_likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_article_options`
--
ALTER TABLE `tbl_article_options`
  ADD CONSTRAINT `tbl_article_options_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_article_prices`
--
ALTER TABLE `tbl_article_prices`
  ADD CONSTRAINT `tbl_article_prices_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `tbl_articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  ADD CONSTRAINT `tbl_reports_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_restaurants`
--
ALTER TABLE `tbl_restaurants`
  ADD CONSTRAINT `tbl_restaurants_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `tbl_restaurant_owners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_restaurants_connected_categories`
--
ALTER TABLE `tbl_restaurants_connected_categories`
  ADD CONSTRAINT `category_connecetion` FOREIGN KEY (`restaurant_category_id`) REFERENCES `tbl_restaurants_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `restaurant_connection` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_restaurants_deals`
--
ALTER TABLE `tbl_restaurants_deals`
  ADD CONSTRAINT `tbl_restaurants_deals_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_users_favorites`
--
ALTER TABLE `tbl_users_favorites`
  ADD CONSTRAINT `tbl_users_favorites_favorite_status_id_foreign` FOREIGN KEY (`favorite_status_id`) REFERENCES `tbl_favorite_statuses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_users_favorites_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_users_favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
