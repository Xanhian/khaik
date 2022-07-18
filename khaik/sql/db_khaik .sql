-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 05:52 PM
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
-- Database: `db_khaik`
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
(12, '2022_05_19_115034_create_tbl_restaurants_deals_table', 1),
(13, '2022_06_20_103859_create_tbl_article_options_table', 1),
(14, '2022_06_20_104355_foreign_key', 1),
(15, '2022_05_19_114612_create_tbl_article_categories_table', 2),
(16, '2022_07_06_134217_create_tbl_admins_table', 3),
(17, '2022_07_07_141755_create_tbl_reports_table', 4),
(18, '2022_07_17_222849_create_tbl_restaurants_messages_table', 5);

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
(5, 'darkeyekyle@gmail.com', '$2y$10$BVUHSbvxNKrtdyejAhtzbu1waAGadPSjDHWuRCoVRm8hjSaPSEWxu', 1, NULL, '2022-07-07 00:53:57', '2022-07-07 00:53:57'),
(6, 'a@gmail.com', '$2y$10$wp9wtX1DIJ4TJPf5ZxDxWO5h5RdnxWRKWTUhgmPxGXVdTzc0ouMpa', 1, NULL, '2022-07-07 17:36:08', '2022-07-07 17:36:08'),
(7, 'admin@khaik.com', '$2y$10$8GZ9dQ5PekNferwVnA7f2.a8R0ZjhDI04FpeHybRWmT5p5wlU3sTC', 1, NULL, '2022-07-18 14:59:53', '2022-07-18 14:59:53');

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

--
-- Dumping data for table `tbl_articles`
--

INSERT INTO `tbl_articles` (`id`, `restaurant_id`, `article_category_id`, `article_name`, `article_description`, `article_img`, `article_item_relations`, `article_option`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, 'Kip', 'Geroosterd kip', 'storage/articles/1656820251_202207030050wave-haikei(1).png', NULL, 4, NULL, '2022-07-03 03:50:51', '2022-07-03 03:50:51'),
(5, 3, NULL, 'Fried Chicken', 'Chicken fried with spices', 'storage/articles/1657017788_202207050743image_2022-07-05_074303149.png', NULL, 10, NULL, '2022-07-05 10:43:08', '2022-07-05 10:43:08'),
(6, 3, NULL, 'Cola', 'Drink', 'storage/articles/1657017851_202207050744image_2022-07-05_074404069.png', NULL, 11, NULL, '2022-07-05 10:44:11', '2022-07-05 10:44:11'),
(7, 3, NULL, 'Kip burger', 'De lekkerste en sapige kip burger', 'storage/articles/1657019181_202207050806image_2022-07-05_080611450.png', NULL, 12, NULL, '2022-07-05 11:06:22', '2022-07-05 11:06:22'),
(8, 3, NULL, 'Burger combo', 'De lekkerste en sapige kip burger', 'storage/articles/1657019181_202207050806image_2022-07-05_080611450.png', '7', 12, NULL, '2022-07-05 11:06:22', '2022-07-05 11:06:22'),
(11, 1, NULL, 'Nov', 'Try our new zinger aka the best chicken burger', 'storage/articles/1657113238_202207061013Digital_menu_screens_KFC_juni_20225(1).jpg', '10', NULL, NULL, '2022-07-06 13:13:59', '2022-07-06 13:15:32'),
(12, 1, NULL, 'Kip met pataq', 'Try our new zinger aka the best chicken burger', 'storage/articles/1657113238_202207061013Digital_menu_screens_KFC_juni_20225(1).jpg', '10', NULL, NULL, '2022-07-06 13:13:59', '2022-07-06 13:15:32'),
(17, 4, NULL, 'Bbq kip', 'rousted chicken with a special sauce', 'storage/articles/1657296837_202207081313image_2022-07-08_131353988.png', NULL, 20, NULL, '2022-07-08 16:13:57', '2022-07-08 16:13:57'),
(18, 3, NULL, 'brown beans', 'brown beans', 'storage/articles/1657303930_202207081512TOUCAN-TOQUÉ.jpg', NULL, 10, NULL, '2022-07-08 18:12:10', '2022-07-08 18:12:10'),
(21, 5, NULL, 'Bier', 'Chill', 'storage/articles/1657630657_202207120957Screenshot_2022-07-09-09-58-01-848_com.mi.android.globallauncher.jpg', NULL, 24, NULL, '2022-07-12 12:57:37', '2022-07-12 12:57:37'),
(23, 1, NULL, 'Varken', 'Geroosterd kip', 'storage/articles/1658154697_202207181131image_2022-07-18_113136109.png', NULL, 27, NULL, '2022-07-18 14:30:40', '2022-07-18 14:31:37'),
(24, 1, NULL, 'Varken met rijst', 'Geroosterd kip', NULL, '23', 27, NULL, '2022-07-18 14:30:59', '2022-07-18 14:30:59');

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

--
-- Dumping data for table `tbl_article_likes`
--

INSERT INTO `tbl_article_likes` (`id`, `user_id`, `article_id`, `like_status`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 1, '2022-07-04 16:34:50', '2022-07-12 16:22:14'),
(4, 2, 5, 1, '2022-07-05 11:02:41', '2022-07-08 17:47:12'),
(5, 2, 6, 1, '2022-07-05 11:02:43', '2022-07-08 17:47:13'),
(6, 2, 7, 1, '2022-07-05 11:07:08', '2022-07-08 17:47:10'),
(7, 2, 17, 1, '2022-07-08 16:17:35', '2022-07-12 13:06:13'),
(9, 4, 17, 1, '2022-07-08 18:04:38', '2022-07-08 18:04:38'),
(10, 4, 18, 1, '2022-07-08 18:13:12', '2022-07-08 18:13:12'),
(11, 4, 5, 1, '2022-07-08 18:13:31', '2022-07-08 18:13:31'),
(12, 4, 6, 1, '2022-07-08 18:13:32', '2022-07-08 18:13:32'),
(13, 4, 7, 1, '2022-07-08 18:13:33', '2022-07-08 18:13:33');

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

--
-- Dumping data for table `tbl_article_options`
--

INSERT INTO `tbl_article_options` (`id`, `restaurant_id`, `option_name`, `created_at`, `updated_at`) VALUES
(4, 2, 'Main Course', '2022-07-03 03:32:25', '2022-07-03 03:32:25'),
(5, 2, 'Snacks', '2022-07-03 03:32:25', '2022-07-03 03:32:25'),
(6, 2, 'Drinks', '2022-07-03 03:32:25', '2022-07-03 03:32:25'),
(10, 3, 'Fried chicken', '2022-07-05 10:42:01', '2022-07-05 10:42:01'),
(11, 3, 'Drinks', '2022-07-05 10:42:08', '2022-07-05 10:42:08'),
(12, 3, 'Burgers', '2022-07-05 11:03:34', '2022-07-05 11:03:34'),
(20, 4, 'BBQ', '2022-07-08 16:13:18', '2022-07-08 16:13:18'),
(24, 5, 'Drinks', '2022-07-12 12:56:47', '2022-07-12 12:56:47'),
(27, 1, 'Soup', '2022-07-18 14:07:36', '2022-07-18 14:28:53');

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

--
-- Dumping data for table `tbl_article_prices`
--

INSERT INTO `tbl_article_prices` (`id`, `article_id`, `article_price_number`, `article_price_currency`, `created_at`, `updated_at`) VALUES
(2, 2, 123, 'SRD', '2022-07-03 03:50:51', '2022-07-03 03:50:51'),
(5, 5, 150, 'SRD', '2022-07-05 10:43:08', '2022-07-05 10:43:08'),
(6, 6, 50, 'SRD', '2022-07-05 10:44:11', '2022-07-05 10:44:11'),
(7, 7, 100, 'SRD', '2022-07-05 11:06:22', '2022-07-05 11:06:22'),
(8, 8, 150, 'SRD', '2022-07-05 11:06:22', '2022-07-05 11:06:22'),
(10, 11, 10001, 'SRD', '2022-07-06 13:13:59', '2022-07-06 13:15:08'),
(11, 12, 10002, 'SRD', '2022-07-06 13:13:59', '2022-07-06 13:15:08'),
(16, 17, 142, 'SRD', '2022-07-08 16:13:58', '2022-07-08 16:13:58'),
(17, 18, 5, 'SRD', '2022-07-08 18:12:10', '2022-07-08 18:12:10'),
(20, 21, 123, 'SRD', '2022-07-12 12:57:38', '2022-07-12 12:57:38'),
(22, 23, 123, 'SRD', '2022-07-18 14:30:40', '2022-07-18 14:30:40'),
(23, 24, 150, 'SRD', '2022-07-18 14:30:59', '2022-07-18 14:30:59');

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

--
-- Dumping data for table `tbl_favorite_statuses`
--

INSERT INTO `tbl_favorite_statuses` (`id`, `favorite_status_description`, `created_at`, `updated_at`) VALUES
(1, 'Added', NULL, NULL),
(2, 'Deleted\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reports`
--

CREATE TABLE `tbl_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_reports`
--

INSERT INTO `tbl_reports` (`id`, `restaurant_id`, `user_id`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(2, 3, 0, 'info', '1', '2022-07-07 23:26:19', '2022-07-12 13:59:57'),
(3, 3, 0, 'price', '1', '2022-07-07 23:27:07', '2022-07-12 13:59:59'),
(4, 3, 0, 'Test', '1', '2022-07-07 23:27:29', '2022-07-08 01:12:30'),
(5, 1, 0, 'price', NULL, '2022-07-13 17:27:57', '2022-07-13 17:27:57'),
(6, 4, 0, 'price', '1', '2022-07-14 10:55:31', '2022-07-18 01:52:39'),
(7, 4, 0, 'info', '1', '2022-07-18 01:41:14', '2022-07-18 11:14:14'),
(8, 4, 0, 'price', NULL, '2022-07-18 01:41:19', '2022-07-18 01:41:19'),
(9, 4, 0, 'Dumb', NULL, '2022-07-18 01:41:27', '2022-07-18 01:41:27');

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

--
-- Dumping data for table `tbl_restaurants`
--

INSERT INTO `tbl_restaurants` (`id`, `owner_id`, `restaurant_name`, `restaurant_description`, `restaurant_phonenumber`, `restaurant_header_photo`, `restaurant_addres`, `restaurant_place`, `restaurant_country`, `restaurant_longitude`, `restaurant_latitude`, `restaurant_opening_time`, `restaurant_closing_time`, `restaurant_facebook_link`, `restaurant_qr`, `restaurant_custom_status`, `restaurant_complete_status`, `total_views`, `created_at`, `updated_at`) VALUES
(1, 1, 'Warung kyle', 'De heerlijktse javaanse gerechten met een hindoestaanse twist', '1234567', 'storage/images/1656818248_202207030017wave-haikei(1).png', 'apen straat #30', 'Wanica', 'suriname', '-55.2075264', '5.7868288', '{\"sunday\":\"00:42\",\"monday\":\"00:43\",\"tuesday\":\"00:43\",\"wednesday\":\"00:44\",\"thursday\":\"00:44\",\"friday\":\"00:42\",\"saturday\":\"closed\"}', '{\"sunday\":\"17:43\",\"monday\":\"17:43\",\"tuesday\":\"17:43\",\"wednesday\":\"16:44\",\"thursday\":\"17:44\",\"friday\":\"18:42\",\"saturday\":\"closed\"}', 'https://www.facebook.com/KFC.Suriname/', 'storage/restaurants_qr/1656818248.png', NULL, 4, 229, '2022-07-03 03:17:29', '2022-07-18 13:39:23'),
(2, 1, 'DragonFruit Restaurant', 'de heerlijktste gerechten', '1234567', 'storage/images/1656819144_2022070300329ae07d60-00d8-4815-bbb9-4c2a4c4c985b.jfif', 'apen straat #30', 'paramaribo', 'suriname', '-55.159713', '5.848933', '{\"sunday\":\"00:40\",\"monday\":\"00:40\",\"tuesday\":\"00:40\",\"wednesday\":\"00:40\",\"thursday\":\"00:40\",\"friday\":\"closed\",\"saturday\":\"00:40\"}', '{\"sunday\":\"12:40\",\"monday\":\"12:40\",\"tuesday\":\"12:40\",\"wednesday\":\"12:40\",\"thursday\":\"12:40\",\"friday\":\"closed\",\"saturday\":\"12:40\"}', 'https://www.facebook.com/KFC.Suriname/', 'storage/restaurants_qr/1656819144.png', NULL, 4, 47, '2022-07-03 03:32:24', '2022-07-18 15:22:34'),
(3, 3, 'KFC', 'Since 1996 KFC Suriname offers the original recipe of Colonel Sanders to all generations in Suriname with 6 restaurants nationwide', '422272', 'storage/images/1657017594_202207050739image_2022-07-05_073843526.png', 'Wilhelmina St', 'paramaribo', 'suriname', '-55.2042496', '5.783552', '{\"sunday\":\"closed\",\"monday\":\"closed\",\"tuesday\":\"closed\",\"wednesday\":\"closed\",\"thursday\":\"closed\",\"friday\":\"closed\",\"saturday\":\"closed\"}', '{\"sunday\":\"closed\",\"monday\":\"closed\",\"tuesday\":\"closed\",\"wednesday\":\"closed\",\"thursday\":\"closed\",\"friday\":\"closed\",\"saturday\":\"closed\"}', 'https://www.facebook.com/KFC.Suriname/', 'storage/restaurants_qr/1657017595.png', NULL, 4, 81, '2022-07-05 10:39:56', '2022-07-18 11:55:52'),
(4, 4, 'Jones BBQ', 'Delicious BBQ and fries. With a hint of smokiness goodness', '234124', 'storage/images/1657296668_202207081311image_2022-07-08_131040844.png', 'Paramaribo straat 1', 'paramaribo', 'suriname', '-55.2009728', '5.783552', '{\"sunday\":\"closed\",\"monday\":\"01:11\",\"tuesday\":\"01:12\",\"wednesday\":\"01:12\",\"thursday\":\"01:12\",\"friday\":\"01:12\",\"saturday\":\"closed\"}', '{\"sunday\":\"closed\",\"monday\":\"19:12\",\"tuesday\":\"18:12\",\"wednesday\":\"17:12\",\"thursday\":\"17:12\",\"friday\":\"18:12\",\"saturday\":\"closed\"}', 'https://www.facebook.com/KFC.Suriname/', 'storage/restaurants_qr/1657296668.png', NULL, 4, 138, '2022-07-08 16:11:08', '2022-07-18 14:43:41'),
(5, 5, 'Warung sana', 'De heerlijkste gerecht op aard', '554422', 'storage/images/1657630553_202207120955IMG-20220701-WA0002.jpg', 'Harold straat #30', 'Nickerie', 'suriname', NULL, NULL, '{\"sunday\":\"closed\",\"monday\":\"closed\",\"tuesday\":\"closed\",\"wednesday\":\"closed\",\"thursday\":\"closed\",\"friday\":\"closed\",\"saturday\":\"closed\"}', '{\"sunday\":\"closed\",\"monday\":\"closed\",\"tuesday\":\"closed\",\"wednesday\":\"closed\",\"thursday\":\"closed\",\"friday\":\"closed\",\"saturday\":\"closed\"}', 'http://192.168.0.115:8000/vendor/register', 'storage/restaurants_qr/1657630554.png', NULL, 3, 16, '2022-07-12 12:55:54', '2022-07-18 15:22:41');

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
(1, 'BBQ', NULL, NULL),
(2, 'Javanese', NULL, NULL),
(3, 'House Food', NULL, NULL),
(4, 'Indian', NULL, NULL),
(5, 'Vegan', NULL, NULL),
(6, 'Fast Food', NULL, NULL);

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

--
-- Dumping data for table `tbl_restaurants_connected_categories`
--

INSERT INTO `tbl_restaurants_connected_categories` (`id`, `restaurant_id`, `restaurant_category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-07-03 03:17:29', '2022-07-03 03:17:29'),
(2, 1, 2, '2022-07-03 03:17:29', '2022-07-03 03:17:29'),
(3, 1, 3, '2022-07-03 03:17:29', '2022-07-03 03:17:29'),
(4, 1, 4, '2022-07-03 03:17:29', '2022-07-03 03:17:29'),
(5, 1, 5, '2022-07-03 03:17:29', '2022-07-03 03:17:29'),
(6, 1, 6, '2022-07-03 03:17:29', '2022-07-03 03:17:29'),
(7, 2, 1, '2022-07-03 03:32:24', '2022-07-03 03:32:24'),
(8, 2, 2, '2022-07-03 03:32:25', '2022-07-03 03:32:25'),
(9, 3, 6, '2022-07-05 10:39:56', '2022-07-05 10:39:56'),
(10, 4, 1, '2022-07-08 16:11:09', '2022-07-08 16:11:09'),
(11, 5, 2, '2022-07-12 12:55:54', '2022-07-12 12:55:54');

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

--
-- Dumping data for table `tbl_restaurants_deals`
--

INSERT INTO `tbl_restaurants_deals` (`id`, `restaurant_id`, `deal_name`, `deal_photo`, `deal_description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 'masa', 'storage/deals/1657291701_202207081148wave-haikei(1).png', 'k', NULL, '2022-07-08 14:48:22', '2022-07-08 14:54:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_restaurants_messages`
--

CREATE TABLE `tbl_restaurants_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `message_title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message_seen` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_restaurants_messages`
--

INSERT INTO `tbl_restaurants_messages` (`id`, `restaurant_id`, `sender_id`, `message_title`, `message_body`, `message_seen`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 'price', 'Please check your prices', NULL, '2022-07-18 01:52:39', '2022-07-18 01:52:39'),
(2, 1, 5, 'Test', 'Hello', NULL, '2022-07-18 03:00:40', '2022-07-18 03:00:40'),
(3, 1, 5, 'Welcome', 'Back', 1, '2022-07-18 03:01:11', '2022-07-18 12:40:16'),
(4, 4, 5, 'info', 'Some information of the restaurants is false or incorrect', NULL, '2022-07-18 11:14:14', '2022-07-18 11:14:14');

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
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_restaurant_owners`
--

INSERT INTO `tbl_restaurant_owners` (`id`, `name`, `lastname`, `password`, `phonenumber`, `email`, `fcm_token`, `created_at`, `updated_at`) VALUES
(1, 'Kyle', 'Tasmoredjo', '$2y$10$VHozba7P7QoA5hAe.4v7X.bsYh8M8TkGunmy1JhXkCHSaxw7Rgci6', '1234567', 'darkeyekyle@gmail.com', 'fJzcszCmn-UVvISvljjlh0:APA91bE6Cvxa0fC31yiKe4D1kOXtNlZ-B_uvsYHnrNOkfVOPJLWgHGfD6uEJiJUheuz5dyxNaPiY3zKfeTGQbg25kOOk73nySvSRZOMXDE9QptVwBrVjItzmgAVkHMMLQbAhLJHtrYmG', '2022-07-03 03:17:28', '2022-07-12 18:43:49'),
(2, 'kyle', 'asdqa', '$2y$10$y3znAPfHvh42jTm5hClS2uPV2444jYDe80LXPfZOkA8/3/Qd1FTyy', '1234567', 'darkeyekyle1@gmail.com', 'fJzcszCmn-UVvISvljjlh0:APA91bE6Cvxa0fC31yiKe4D1kOXtNlZ-B_uvsYHnrNOkfVOPJLWgHGfD6uEJiJUheuz5dyxNaPiY3zKfeTGQbg25kOOk73nySvSRZOMXDE9QptVwBrVjItzmgAVkHMMLQbAhLJHtrYmG', '2022-07-03 03:32:24', '2022-07-08 11:10:31'),
(3, 'Jason', 'Bourne', '$2y$10$zkyfafnpZwk9485JwrsWmepIuXcWi9iTrHYpVvrpzWfB.HlonRt7m', '8942134', 'kyletasmoredjo@gmail.com', '', '2022-07-05 10:39:55', '2022-07-05 10:39:55'),
(4, 'Jason', 'Bourne', '$2y$10$mPHEfuA5VFRBPwRm8s8H3OiB2enhh8JrySh/otOGeMTfLkpK1V57.', '2341234', 'darkeyekyle90@gmail.com', 'fJzcszCmn-UVvISvljjlh0:APA91bE6Cvxa0fC31yiKe4D1kOXtNlZ-B_uvsYHnrNOkfVOPJLWgHGfD6uEJiJUheuz5dyxNaPiY3zKfeTGQbg25kOOk73nySvSRZOMXDE9QptVwBrVjItzmgAVkHMMLQbAhLJHtrYmG', '2022-07-08 16:11:08', '2022-07-08 16:14:09'),
(5, 'Gastoff', 'Harold', '$2y$10$pqYKjwL0ClQfhv9J.HkhQuKCu.L2KOwXheIjmfnTm.9b6aPf9I696', '8564935', 'kyletasmorsedjo@gmail.com', '', '2022-07-12 12:55:54', '2022-07-12 12:55:54');

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
  `fcm_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `lastname`, `password`, `phonenumber`, `email`, `fcm_token`, `created_at`, `updated_at`) VALUES
(1, 'Kyle', 'Tasmoredjo', '$2y$10$MznUb/8w.4Kw5bhGsR8dG.xF8mD6D3Ks3PC267GdfujN9xxi/XMCm', '12345678', 'kyletasmoredjo@gmail.com', 'cs9TLItwUh3UENvz6e25sG:APA91bHZa06vCEgZ9YB_gx1bMXd7ENHci0LApyojGX6TCwq9IrXKDEzXaaOQFpSNhHx1u7xqbEca3C2uKohDYL501cOSOLXjfob68weJRdWrMP5n0D2NI-jtr4OPm4xg9jNl6V0Hfeij', '2022-07-04 14:57:25', '2022-07-04 14:57:25'),
(2, 'Kyle', 'tas', '$2y$10$soWpth2VcWA8djOxZTsMl.vu1188GK8ir6PGyyIoj1PaaJhjzzI.a', '7893214', 'darkeyekyle@gmail.com', 'fJzcszCmn-UVvISvljjlh0:APA91bE6Cvxa0fC31yiKe4D1kOXtNlZ-B_uvsYHnrNOkfVOPJLWgHGfD6uEJiJUheuz5dyxNaPiY3zKfeTGQbg25kOOk73nySvSRZOMXDE9QptVwBrVjItzmgAVkHMMLQbAhLJHtrYmG', '2022-07-04 15:21:51', '2022-07-08 17:39:43'),
(3, 'kyle11', 'Tasmoredjo', '$2y$10$VW70kXMb3k4bB6f.PvOO1eOb7gKGbV4YOsTTEnrzuePHTgKJJiiVm', '1234765', 'darkeye11kyle@gmail.com', '', '2022-07-08 14:17:19', '2022-07-08 14:17:19'),
(4, 'Denzel', 'Rasidin', '$2y$10$iUwjehsr4ZWTJgXbObaLi.E8qpsvwPmRWgfErgJnOBP8m2G16B3f6', '8659521', 'denzel@bitdynamics.sr', '', '2022-07-08 18:01:28', '2022-07-08 18:01:28'),
(5, 'Shivan', 'Bhagwandin', '$2y$10$BvTRxB9K1IKA9YN0upj9turYdK2kOQHaPvr69aIR638CK9f85yN2a', '8920264', 'shivan@bitdynamics.sr', '', '2022-07-08 18:12:55', '2022-07-08 18:12:55');

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
-- Dumping data for table `tbl_users_favorites`
--

INSERT INTO `tbl_users_favorites` (`id`, `user_id`, `restaurant_id`, `favorite_status_id`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 1, '2022-07-04 15:07:53', '2022-07-04 15:07:53'),
(3, 2, 2, 2, '2022-07-04 16:35:06', '2022-07-04 16:35:15'),
(4, 2, 1, 1, '2022-07-04 16:43:03', '2022-07-04 16:43:03'),
(5, 2, 2, 1, '2022-07-04 16:46:44', '2022-07-04 16:46:44'),
(6, 2, 4, 1, '2022-07-08 16:17:36', '2022-07-08 16:17:36'),
(7, 4, 1, 1, '2022-07-08 18:02:41', '2022-07-08 18:02:41'),
(8, 4, 3, 1, '2022-07-08 18:13:41', '2022-07-08 18:13:41'),
(9, 5, 2, 2, '2022-07-08 18:15:44', '2022-07-08 18:16:16');

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
-- Indexes for table `tbl_restaurants_messages`
--
ALTER TABLE `tbl_restaurants_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_restaurants_messages_restaurant_id_foreign` (`restaurant_id`),
  ADD KEY `tbl_restaurants_messages_sender_id_foreign` (`sender_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admins`
--
ALTER TABLE `tbl_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_article_categories`
--
ALTER TABLE `tbl_article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_article_likes`
--
ALTER TABLE `tbl_article_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_article_options`
--
ALTER TABLE `tbl_article_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_article_prices`
--
ALTER TABLE `tbl_article_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_favorite_statuses`
--
ALTER TABLE `tbl_favorite_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_reports`
--
ALTER TABLE `tbl_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_restaurants`
--
ALTER TABLE `tbl_restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_restaurants_categories`
--
ALTER TABLE `tbl_restaurants_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_restaurants_connected_categories`
--
ALTER TABLE `tbl_restaurants_connected_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_restaurants_deals`
--
ALTER TABLE `tbl_restaurants_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_restaurants_messages`
--
ALTER TABLE `tbl_restaurants_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_restaurant_owners`
--
ALTER TABLE `tbl_restaurant_owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users_favorites`
--
ALTER TABLE `tbl_users_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
-- Constraints for table `tbl_restaurants_messages`
--
ALTER TABLE `tbl_restaurants_messages`
  ADD CONSTRAINT `tbl_restaurants_messages_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `tbl_restaurants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tbl_restaurants_messages_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `tbl_admins` (`id`) ON DELETE CASCADE;

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
