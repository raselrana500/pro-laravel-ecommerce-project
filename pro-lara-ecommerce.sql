-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 06:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro-lara-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `report` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `type` int(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `category`, `coupon`, `product`, `blog`, `order`, `other`, `report`, `role`, `return`, `contact`, `comment`, `setting`, `stock`, `type`, `created_at`, `updated_at`) VALUES
(3, 'Admin', '123456789', 'admin@gmail.com', NULL, '$2y$10$GayOblYYdcE0dtLLHQW05eQe9whKbdcw0MI/5bkgAUann3S6RiaZi', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, NULL, '2021-09-09 04:00:52'),
(9, 'Rasel Rana', '01716530037', 'raselrana500@gmail.com', NULL, '$2y$10$qjSN1motoDtph6zrAI6v6ukegQ9lPr4hPnvuYX0z7EaME4nxTkAIG', NULL, NULL, NULL, NULL, '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2021-10-18 13:15:32', '2021-10-18 13:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(5, 'Sony', 'public/media/brand/190921_18_45_48.png', NULL, NULL),
(6, 'Rado', 'public/media/brand/190921_18_02_49.png', NULL, NULL),
(7, 'Lenovo', 'public/media/brand/190921_18_16_49.png', NULL, NULL),
(8, 'Assus', 'public/media/brand/190921_18_30_49.png', NULL, NULL),
(9, 'Cannon', 'public/media/brand/190921_18_45_49.png', NULL, NULL),
(10, 'Dell', 'public/media/brand/190921_18_56_49.png', NULL, NULL),
(11, 'Gucci', 'public/media/brand/190921_18_07_50.png', NULL, NULL),
(12, 'Levis', 'public/media/brand/190921_18_23_50.png', NULL, NULL),
(13, 'Nike', 'public/media/brand/190921_18_36_50.png', NULL, NULL),
(14, 'Adidas', 'public/media/brand/190921_18_47_50.png', NULL, NULL),
(15, 'Denim', 'public/media/brand/101121_15_12_48.png', '2021-11-10 15:48:12', '2021-11-10 15:48:12'),
(16, 'Others', 'public/media/brand/101121_15_24_52.png', '2021-11-10 15:52:24', '2021-11-10 15:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(6, 'Mens Fashion', NULL, NULL),
(7, 'Womens Fashion', NULL, NULL),
(8, 'Childs', NULL, NULL),
(9, 'Watch', NULL, NULL),
(10, 'Furniture', NULL, NULL),
(11, 'Electronics', NULL, NULL),
(12, 'Health', NULL, NULL),
(13, 'Beauty', NULL, NULL),
(14, 'Sports & Outdoor', NULL, NULL),
(15, 'Home & Living', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messege` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `messege`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Rasel Rana', '01716530037', 'raselrana500@gmail.com', 'Test Mesage', 0, NULL, NULL),
(2, 'Zihad hasan', '01726091227', 'zihad368@gmail.com', 'Hello! how are you?\r\nhi', 1, NULL, NULL),
(3, 'test', '0175862455', 'test@gmail.com', 'Test Message here', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon`, `discount`, `created_at`, `updated_at`) VALUES
(2, 'UDEMY', '10', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_10_05_052517_create_admins_table', 1),
(8, '2021_09_09_105653_create_categories_table', 2),
(9, '2021_09_09_112525_create_sub_categories_table', 2),
(10, '2021_09_09_113530_create_brands_table', 2),
(11, '2021_09_13_184207_create_coupons_table', 3),
(12, '2021_09_13_193825_create_newslatters_table', 4),
(13, '2021_09_15_040549_create_products_table', 5),
(14, '2021_09_19_053048_create_posts_table', 6),
(15, '2021_09_19_053123_create_post_categories_table', 6),
(16, '2021_09_23_081045_create_wishlists_table', 7),
(17, '2021_10_05_100727_create_settings_table', 8),
(18, '2016_06_01_000001_create_oauth_auth_codes_table', 9),
(19, '2016_06_01_000002_create_oauth_access_tokens_table', 9),
(20, '2016_06_01_000003_create_oauth_refresh_tokens_table', 9),
(21, '2016_06_01_000004_create_oauth_clients_table', 9),
(22, '2016_06_01_000005_create_oauth_personal_access_clients_table', 9),
(23, '2021_10_10_184408_create_orders_table', 10),
(24, '2021_10_10_184541_create_order_details_table', 10),
(25, '2021_10_10_184556_create_shippings_table', 10),
(26, '2021_10_14_093742_create_seos_table', 11),
(27, '2021_10_19_042110_create_site_settings_table', 12),
(28, '2021_10_24_094823_create_contacts_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `newslatters`
--

CREATE TABLE `newslatters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newslatters`
--

INSERT INTO `newslatters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'zihad368@gmail.com', '2021-09-13 20:35:18', NULL),
(3, 'raselrana500@gmail.com', '2021-09-13 20:46:49', NULL),
(4, 'raselrana501@gmail.com', '2021-11-08 04:16:25', '2021-11-08 04:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'JQWBNHmlKpgLrJbXpJsmzap7QRH9DVDx6vWXk3yj', 'http://localhost', 1, 0, 0, '2021-10-06 22:50:58', '2021-10-06 22:50:58'),
(2, NULL, 'Laravel Password Grant Client', 'l0BvNmUWceHl6KT3z9yKcYxNEUmyoDvLP28uRi9R', 'http://localhost', 0, 1, 0, '2021-10-06 22:50:58', '2021-10-06 22:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-10-06 22:50:58', '2021-10-06 22:50:58');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paying_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_transection` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_order_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `return_order` int(10) DEFAULT 0,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_month` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_type`, `payment_id`, `paying_amount`, `balance_transection`, `transaction_id`, `stripe_order_id`, `subtotal`, `shipping`, `vat`, `total`, `status`, `return_order`, `month`, `date`, `delivery_date`, `delivery_month`, `delivery_year`, `year`, `status_code`, `created_at`, `updated_at`) VALUES
(2, '3', 'stripe', 'card_1JjSbmIXmdYFNxCRkVHQb37s', '665200', 'txn_3JjSbnIXmdYFNxCR17FMPVAJ', NULL, '616478e1ec60e', '6597.00', '50', '5', '6652', '3', 2, 'October', '16-10-21', NULL, NULL, '2020', '2021', '1771533127', NULL, NULL),
(3, '3', 'stripe', 'card_1JjSuHIXmdYFNxCRtfqBJE35', '125300', 'txn_3JjSuIIXmdYFNxCR2QMjw1TR', NULL, '61647d5d7c792', '1188', '50', '5', '1253', '3', 0, 'October', '11-10-21', '23-10-21', 'October', '2021', '2021', '1771533126', '2021-10-11 18:07:26', '2021-10-11 18:07:26'),
(4, '3', 'stripe', 'card_1JjgVJIXmdYFNxCRxpMeIhcF', '195400', 'txn_3JjgVKIXmdYFNxCR2pKF1YQi', NULL, '61654988be716', '1899.00', '50', '5', '1954', '3', 2, 'October', '12-10-21', '17-10-21', 'October', '2021', '2021', '1771533128', '2021-10-12 08:38:34', '2021-10-12 08:38:34'),
(5, '3', 'stripe', 'card_1Jk0EUIXmdYFNxCRfjov7RLG', '275200', 'txn_3Jk0EWIXmdYFNxCR0ZL8h7nM', NULL, '616671c66d017', '2687', '50', '5', '2752', '3', 1, 'October', '13-10-21', '16-10-21', NULL, '2023', '2021', '1771533129', '2021-10-13 05:42:32', '2021-10-13 05:42:32'),
(6, '3', 'stripe', 'card_1Jk0GPIXmdYFNxCRJW0TMEBR', '305500', 'txn_3Jk0GQIXmdYFNxCR0yjysaGl', NULL, '6166723c91914', '3000.00', '50', '5', '3055', '3', 3, 'October', '13-10-21', NULL, NULL, '2020', '2021', '1771533130', '2021-10-13 05:44:30', '2021-10-13 05:44:30'),
(7, '3', 'stripe', 'card_1JkBpoIXmdYFNxCRo1zfhixn', '1544800', 'txn_3JkBpqIXmdYFNxCR0hSmqVts', NULL, '61671ffb73ca3', '15393.00', '50', '5', '15448', '3', 3, 'October', '16-10-21', NULL, NULL, '2021', '2021', '1771533131', '2021-10-13 18:05:49', '2021-10-13 18:05:49'),
(10, '3', 'stripe', 'card_1JkC4QIXmdYFNxCRZbxHu4aU', '75400', 'txn_3JkC4RIXmdYFNxCR0MBXPTlr', NULL, '616723852abe6', '699.00', '50', '5', '754', '3', 0, 'October', '13-10-21', NULL, NULL, '2022', '2021', '1771533125', '2021-10-13 18:20:55', '2021-10-13 18:20:55'),
(11, '3', 'stripe', 'card_1Jl4qAIXmdYFNxCR3p45eCJM', '565300', 'txn_3Jl4qBIXmdYFNxCR1PkaOWXj', NULL, '616a59ecd3800', '5598.00', '50', '5', '5653', '3', 1, 'October', '16-10-21', NULL, NULL, '2023', '2021', '243434', '2021-10-16 04:49:50', '2021-10-16 04:49:50'),
(12, '3', 'stripe', 'card_1Jl9JMIXmdYFNxCRfdS01ggw', '195400', 'txn_3Jl9JOIXmdYFNxCR2L9Y4NCu', NULL, '616a9d0f8b154', '1899.00', '50', '5', '1954', '3', 0, 'October', '16-10-21', '22-10-21', 'October', '2021', '2021', '835049', '2021-10-16 09:36:17', '2021-10-16 09:36:17'),
(13, '14', 'stripe', 'card_1Jpc7GIXmdYFNxCR1zqG952X', '145300', 'txn_3Jpc7IIXmdYFNxCR1Z8iGbcc', NULL, '617ad974d7c77', '1388', '50', '5', '1453', '3', 0, 'October', '28-10-21', '28-10-21', 'October', '2021', '2021', '661951', '2021-10-28 17:10:15', '2021-10-28 17:10:15'),
(14, '15', 'stripe', 'card_1JqBEvIXmdYFNxCREnR5LPFe', '475300', 'txn_3JqBExIXmdYFNxCR1uDP99Yr', NULL, '617ce8dc6df9a', '4698.00', '50', '5', '4753', '0', 0, 'October', '30-10-21', NULL, NULL, NULL, '2021', '954199', '2021-10-30 06:40:30', '2021-10-30 06:40:30'),
(15, '15', 'cashOn', NULL, NULL, NULL, NULL, NULL, '899.00', '50', '5', '954', '0', 0, 'October', '30-10-21', NULL, NULL, NULL, '2021', '510193', '2021-10-30 08:09:35', '2021-10-30 08:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `single_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `color`, `size`, `quantity`, `single_price`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 2, '12', 'Sport men\'s Shoes', 'Black', '40', '1', '2799', '2799', NULL, NULL),
(2, 2, '13', 'Sport Men\'s Watch', 'black', 'Metal', '2', '1899', '3798', NULL, NULL),
(3, 3, '7', 'Men\'s Red T-shirt', 'Red', 'M', '1', '699', '699', NULL, NULL),
(4, 3, '8', 'Navy top', 'Black', 'M', '1', '499', '499', NULL, NULL),
(5, 4, '13', 'Sport Men\'s Watch', 'black', 'Metal', '1', '1899', '1899', NULL, NULL),
(6, 5, '10', 'Men\'s Watch', 'Black', 'Lather', '3', '899', '2697', NULL, NULL),
(7, 6, '11', 'Stylish men\'s shoes', 'Black', '38', '2', '1500', '3000', NULL, NULL),
(8, 7, '7', 'Men\'s Red T-shirt', 'Red', 'M', '2', '699', '1398', NULL, NULL),
(9, 7, '12', 'Sport men\'s Shoes', 'Black', '40', '5', '2799', '13995', NULL, NULL),
(10, 8, '11', 'Stylish men\'s shoes', 'Black', '38', '2', '1500', '3000', NULL, NULL),
(11, 9, '12', 'Sport men\'s Shoes', 'Black', '40', '1', '2799', '2799', NULL, NULL),
(12, 10, '7', 'Men\'s Red T-shirt', 'Red', 'M', '1', '699', '699', NULL, NULL),
(13, 11, '12', 'Sport men\'s Shoes', 'Black', '40', '2', '2799', '5598', '2021-10-16 04:49:51', '2021-10-16 04:49:51'),
(14, 12, '13', 'Sport Men\'s Watch', 'black', 'Metal', '1', '1899', '1899', '2021-10-16 09:36:17', '2021-10-16 09:36:17'),
(15, 13, '7', 'Men\'s Red T-shirt', 'Red', 'M', '2', '699', '1398', '2021-10-28 17:10:15', '2021-10-28 17:10:15'),
(16, 14, '13', 'Sport Men\'s Watch', 'black', 'Metal', '1', '1899', '1899', '2021-10-30 06:40:36', '2021-10-30 06:40:36'),
(17, 14, '12', 'Sport men\'s Shoes', 'Black', '40', '1', '2799', '2799', '2021-10-30 06:40:36', '2021-10-30 06:40:36'),
(18, 15, '10', 'Men\'s Watch', 'Black', 'Lather', '1', '899', '899', '2021-10-30 08:09:35', '2021-10-30 08:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_details_bn` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `post_title_en`, `post_title_bn`, `post_image`, `post_details_en`, `post_details_bn`, `created_at`, `updated_at`) VALUES
(6, 1, 'Man City held to frustrating draw by Southampton despite VAR reprieve', 'ভিএআর ছাড়ার পরও ম্যান সিটি সাউদাম্পটনের হতাশাজনক ড্র করেছে', 'public/media/post/1.7113442144145E+15.jpg', '<p>Manchester City were held to a frustrating goalless draw at home by Southampton in the Premier League on Saturday, despite being handed a reprieve when a VAR review led to a penalty and a red card for Kyle Walker both being overturned.</p><p>After an uneventful first half where City were well below par, Southampton thought they had been handed a golden chance to edge in front early in the second period as they were awarded a penalty for a foul on Adam Armstrong.</p><p><br></p><p>To make matters worse for City, Walker was sent off for the foul, only for referee Jon Moss, following a VAR intervention, to overturn both the red card and the awarding of the spot kick.</p>', '<p>ম্যানচেস্টার সিটি শনিবার প্রিমিয়ার লিগে সাউদাম্পটন কর্তৃক ঘরের মাঠে হতাশাজনক গোলশূন্য ড্র করেছিল, যদিও ভিএআর রিভিউয়ের ফলে পেনাল্টি এবং কাইল ওয়াকারের জন্য একটি লাল কার্ড উভয়ই বাতিল হয়ে গিয়েছিল।</p><p>অসমাপ্ত প্রথমার্ধের পর যেখানে সিটি সমানভাবে নিচে ছিল, সাউদাম্পটন ভেবেছিল যে দ্বিতীয় সময়ের শুরুতে তাদের সামনে এগিয়ে যাওয়ার সুবর্ণ সুযোগ দেওয়া হয়েছিল কারণ অ্যাডাম আর্মস্ট্রংকে ফাউলের জন্য পেনাল্টি দেওয়া হয়েছিল।</p><p><br></p><p>সিটির জন্য পরিস্থিতি আরও খারাপ করার জন্য, লাল কার্ড এবং স্পট কিক প্রদান উভয়কেই উল্টে দেওয়ার জন্য, ভিএআর হস্তক্ষেপের পরে, ওয়াকারকে ফাউলের জন্য পাঠানো হয়েছিল, কেবল রেফারি জন মসের জন্য।</p>', '2021-09-19 15:23:43', '2021-09-19 15:23:43'),
(7, 1, 'FIFA says survey shows majority of fans back more frequent World Cups', 'ফিফা বলছে, সমীক্ষায় দেখা গেছে যে বেশিরভাগ ভক্তরা ঘন ঘন বিশ্বকাপে ফিরে আসে', 'public/media/post/1.7113443795565E+15.jpg', '<div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-29 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; font-family: arial, sans-serif; line-height: 18px;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 14px; line-height: 1.3; font-family: Arial, Verdana, Helvetica, sans-serif; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">FIFA says it has fan backing for the much-criticised plan to shift to a biennial World Cup after releasing a summary of the results of an opinion survey of supporters.</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-28\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; font-family: arial, sans-serif; line-height: 18px; color: rgb(21, 21, 21);\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-21 article_body\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">The proposals, which have been outlined by FIFA\'s head of Global Football Development, former Arsenal manager Arsene Wenger, have been met with widespread opposition from within the game.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">FIFA\'s congress in May voted by a large majority to conduct a feasibility study into the potential of holding the World Cup every two years instead of every four.</p></div></div></div>', '<p>ফিফা বলছে, সমর্থকদের মতামত জরিপের ফলাফলের সারসংক্ষেপ প্রকাশের পর দ্বিবার্ষিক বিশ্বকাপে স্থানান্তরের বহুল সমালোচিত পরিকল্পনার জন্য ভক্তদের সমর্থন রয়েছে।</p><p>ফিফার গ্লোবাল ফুটবল ডেভেলপমেন্টের প্রধান, আর্সেনালের প্রাক্তন ব্যবস্থাপক আর্সেন ওয়েঙ্গারের প্রস্তাবগুলি, খেলার মধ্যে থেকেই ব্যাপক বিরোধিতার সম্মুখীন হয়েছে।</p><p><br></p><p>মে মাসে ফিফার কংগ্রেস একটি বিশাল সংখ্যাগরিষ্ঠতা দ্বারা প্রতি চার বছরে পরিবর্তে প্রতি দুই বছর পর বিশ্বকাপ আয়োজনের সম্ভাব্যতা সম্পর্কে সম্ভাব্যতা যাচাই করার জন্য ভোট দেয়।</p>', '2021-09-19 15:26:21', '2021-09-19 15:26:21'),
(8, 6, 'Evaly supplier sues MD Rassel, wife Shamima over dues', 'ইভালি সরবরাহকারী এমডি রাসেল, স্ত্রী শামীমার বিরুদ্ধে বকেয়া মামলা করেছেন', 'public/media/post/1.7113445345352E+15.jpg', '<div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-29 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; font-family: arial, sans-serif; line-height: 18px;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 14px; line-height: 1.3; font-family: Arial, Verdana, Helvetica, sans-serif; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">A supplier to Evaly has sued Mohammad Rassel, managing director of the embattled e-commerce platform, his wife and the company’s Chairman Shamima Nasrin, and 18 others.</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-28\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; font-family: arial, sans-serif; line-height: 18px; color: rgb(21, 21, 21);\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-21 article_body\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Rassel and Shamima are being quizzed in police custody in another case filed by a customer. They were shown arrested on allegations of embezzlement and financial fraud in the case filed by the supplier on Friday.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Police have sought their remand for questioning in the new case as well, Dhanmondi police chief Ikram Ali said on Sunday.</p></div></div></div>', '<p>ইভালির একজন সরবরাহকারী ই-কমার্স প্ল্যাটফর্মের ব্যবস্থাপনা পরিচালক মোহাম্মদ রাসেল, তার স্ত্রী এবং কোম্পানির চেয়ারম্যান শামীমা নাসরিন এবং অন্য ১ 18 জনের বিরুদ্ধে মামলা করেছেন।</p><p>একজন গ্রাহকের দায়ের করা আরেকটি মামলায় রাসেল এবং শামীমাকে পুলিশ হেফাজতে জিজ্ঞাসাবাদ করা হচ্ছে। শুক্রবার সরবরাহকারীর দায়ের করা মামলায় আত্মসাৎ ও আর্থিক জালিয়াতির অভিযোগে তাদের গ্রেফতার দেখানো হয়েছে।</p><p><br></p><p>রোববার ধানমন্ডি থানার ওসি ইকরাম আলী বলেন, নতুন মামলায় জিজ্ঞাসাবাদের জন্য পুলিশ তাদের রিমান্ড চেয়েছে।</p>', '2021-09-19 15:28:49', '2021-09-19 15:28:49'),
(9, 6, 'Evaly rose to a dizzying height. Now its colossal debt takes down owners', 'ইভালি একটি চকচকে উচ্চতায় উঠেছিল। এখন এর বিশাল মালিকদের নিচে নিয়ে যায়', 'public/media/post/1.7113446656514E+15.jpg', '<div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-29 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; font-family: arial, sans-serif; line-height: 18px;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 14px; line-height: 1.3; font-family: Arial, Verdana, Helvetica, sans-serif; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">Mistakes in almost every step, management full of irregularities, sheer nepotism and madness to capture the market even at the cost of reputation to many of the customers led to the fall of Mohammad Rassel, the managing director of Evaly.</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-28\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; font-family: arial, sans-serif; line-height: 18px; color: rgb(21, 21, 21);\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-21 article_body\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Launched with a paid-up capital of only Tk 100,000 three years ago, Evaly has sunken in the debt of Tk 5.43 billion until July as Rassel employed his “incompetent” relatives, mostly by marriage with Shamima Nasrin, other workers of the company say.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">The Rapid Action Battalion arrested Rassel and Shamima, also the chairman of the company, on Thursday in connection with a lawsuit filed by a customer alleging fraud.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Arif Baker, the accuser, filed the case claiming that he saw Evaly’s advertising and made orders worth Tk 310,000 from the site. The orders have yet to be fulfilled, long after they were made.</p></div></div></div>', '<p>প্রায় প্রতিটি পদক্ষেপে ভুল, অনিয়মে পরিপূর্ণ ব্যবস্থাপনা, নিছক স্বজনপ্রীতি এবং অনেক গ্রাহকের কাছে সুনামের মূল্যে বাজার দখল করার উন্মাদনা ইভালির ব্যবস্থাপনা পরিচালক মোহাম্মদ রাসেলের পতনের দিকে পরিচালিত করে।</p><p>তিন বছর আগে মাত্র ১০ লাখ টাকার পরিশোধিত মূলধন নিয়ে চালু হওয়া, ইভালি জুলাই পর্যন্ত ৫.43 বিলিয়ন টাকার inণে ডুবে গিয়েছিল কারণ রাসেল তার \"অযোগ্য\" আত্মীয়দের নিয়োগ করেছিল, বেশিরভাগই শামীমা নাসরিনের সাথে বিয়ে করে, কোম্পানির অন্যান্য কর্মীরা বলে।</p><p><br></p><p>জালিয়াতির অভিযোগে এক গ্রাহকের দায়ের করা মামলায় বৃহস্পতিবার কোম্পানির চেয়ারম্যান রাসেল এবং শামীমাকে গ্রেপ্তার করে র The্যাপিড অ্যাকশন ব্যাটালিয়ন।</p><p><br></p><p>অভিযুক্ত আরিফ বাকের মামলাটি দায়ের করে দাবি করেন যে তিনি ইভালির বিজ্ঞাপন দেখেছেন এবং সাইট থেকে 310,000 টাকার অর্ডার করেছেন। আদেশগুলি তৈরি হওয়ার অনেক পরেও তা পূরণ করা হয়নি।</p>', '2021-09-19 15:30:54', '2021-09-19 15:30:54'),
(10, 3, 'India antitrust probe finds Google abused Android dominance, report shows', 'রিপোর্ট দেখায়, ভারতের অ্যান্টি ট্রাস্ট প্রোব গুগলকে অ্যান্ড্রয়েড আধিপত্যের অপব্যবহার করেছে', 'public/media/post/1.711354655696E+15.jpg', '<div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-29 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; font-family: arial, sans-serif; line-height: 18px;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 14px; line-height: 1.3; font-family: Arial, Verdana, Helvetica, sans-serif; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">Google abused the dominant position of its Android operating system in India, using its \"huge financial muscle\" to illegally hurt competitors, the country\'s antitrust authority found in a report on its two-year probe seen by Reuters.</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-28\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; font-family: arial, sans-serif; line-height: 18px; color: rgb(21, 21, 21);\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-21 article_body\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Alphabet Inc\'s Google reduced \"the ability and incentive of device manufacturers to develop and sell devices operating on alternative versions of Android,\" says the June report by the Competition Commission of India\'s (CCI) investigations unit.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">The US tech giant told Reuters in a statement it looks forward to working with the CCI to \"demonstrate how Android has led to more competition and innovation, not less.\"</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Google has not received the investigation report, a person with direct knowledge of the situation told Reuters.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">The CCI did not respond to a request for comment on the report. Senior CCI members will review the report and give Google another chance to defend itself, before issuing a final order, which could include penalties, said another person familiar with the case.</p></div></div></div>', '<p>গুগল ভারতে তার অ্যান্ড্রয়েড অপারেটিং সিস্টেমের প্রভাবশালী অবস্থানের অপব্যবহার করে, তার \"বিশাল আর্থিক পেশী\" ব্যবহার করে অবৈধভাবে প্রতিযোগীদের ক্ষতিগ্রস্ত করে, দেশটির অবিশ্বাস কর্তৃপক্ষ রয়টার্সের দুই বছরের তদন্তের প্রতিবেদনে পাওয়া গেছে।</p><p>আলফাবেট ইনকর্পোরেটেড এর গুগল \"অ্যান্ড্রয়েডের বিকল্প সংস্করণে অপারেটিং ডিভাইসগুলি বিকাশ ও বিক্রয়ের জন্য ডিভাইস নির্মাতাদের ক্ষমতা এবং প্রণোদনা হ্রাস করেছে,\" ভারতের প্রতিযোগিতা কমিশন (সিসিআই) তদন্ত ইউনিটের জুন রিপোর্ট বলছে।</p><p><br></p><p>মার্কিন টেক জায়ান্ট রয়টার্সকে এক বিবৃতিতে বলেছে যে এটি CCI- এর সাথে কাজ করার অপেক্ষায় আছে \"কিভাবে অ্যান্ড্রয়েড আরও প্রতিযোগিতা এবং উদ্ভাবনের দিকে পরিচালিত করেছে, তা কম নয়।\"</p><p><br></p><p>গুগল তদন্ত প্রতিবেদন পায়নি, পরিস্থিতি সম্পর্কে সরাসরি জ্ঞান থাকা একজন ব্যক্তি রয়টার্সকে বলেছেন।</p><p><br></p><p>সিসিআই প্রতিবেদনের বিষয়ে মন্তব্যের অনুরোধে সাড়া দেয়নি। সিসিআইয়ের সিনিয়র সদস্যরা প্রতিবেদনটি পর্যালোচনা করবেন এবং চূড়ান্ত আদেশ জারি করার আগে গুগলকে আত্মরক্ষার আরেকটি সুযোগ দেবেন, যার মধ্যে জরিমানা অন্তর্ভুক্ত থাকতে পারে, এই মামলার সাথে পরিচিত আরেক ব্যক্তি বলেন।</p>', '2021-09-19 15:32:50', '2021-09-19 15:32:50'),
(11, 3, 'AI can now write its own computer code. That’s good news for humans', 'এআই এখন নিজের কম্পিউটার কোড লিখতে পারে। এটি মানুষের জন্য সুখবর', 'public/media/post/1.7113449215939E+15.jpg', '<div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-29 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; font-family: arial, sans-serif; line-height: 18px;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 14px; line-height: 1.3; font-family: Arial, Verdana, Helvetica, sans-serif; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">As soon as Tom Smith got his hands on Codex — a new artificial intelligence technology that writes its own computer programmes — he gave it a job interview.</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-28\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; font-family: arial, sans-serif; line-height: 18px; color: rgb(21, 21, 21);\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-21 article_body\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">He asked if it could tackle the “coding challenges” that programmers often face when interviewing for big-money jobs at Silicon Valley companies like Google and Facebook. Could it write a programme that replaces all the spaces in a sentence with dashes? Even better, could it write one that identifies invalid ZIP codes?</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">It did both instantly, before completing several other tasks. “These are problems that would be tough for a lot of humans to solve, myself included, and it would type out the response in two seconds,” said Smith, a seasoned programmer who oversees an AI startup called Gado Images. “It was spooky to watch.”</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Codex seemed like a technology that would soon replace human workers. As Smith continued testing the system, he realised that its skills extended well beyond a knack for answering canned interview questions. It could even translate from one programming language to another.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Yet after several weeks working with this new technology, Smith believes it poses no threat to professional coders. In fact, like many other experts, he sees it as a tool that will end up boosting human productivity. It may even help a whole new generation of people learn the art of computers, by showing them how to write simple pieces of code, almost like a personal tutor.</p></div></div></div>', '<p>যত তাড়াতাড়ি টম স্মিথ কোডেক্সে হাত পান - একটি নতুন কৃত্রিম বুদ্ধিমত্তা প্রযুক্তি যা তার নিজের কম্পিউটার প্রোগ্রামগুলি লিখে - তিনি এটি একটি চাকরির ইন্টারভিউ দিয়েছিলেন।</p><p>তিনি জিজ্ঞাসা করেছিলেন যে এটি \"কোডিং চ্যালেঞ্জগুলি\" মোকাবেলা করতে পারে যা গুগল এবং ফেসবুকের মতো সিলিকন ভ্যালি সংস্থায় বড় অর্থের চাকরির জন্য ইন্টারভিউ দেওয়ার সময় প্রোগ্রামাররা প্রায়ই মুখোমুখি হন। এটি কি এমন একটি প্রোগ্রাম লিখতে পারে যা একটি বাক্যে সমস্ত স্পেসকে ড্যাশ দিয়ে প্রতিস্থাপন করে? আরও ভাল, এটি কি এমন একটি লিখতে পারে যা অবৈধ জিপ কোড সনাক্ত করে?</p><p><br></p><p>এটি অন্যান্য অনেক কাজ সম্পন্ন করার আগে, তাত্ক্ষণিকভাবে উভয় কাজ করে। গ্যাডো ইমেজস নামে একটি এআই স্টার্টআপের তত্ত্বাবধানকারী একজন অভিজ্ঞ প্রোগ্রামার স্মিথ বলেন, \"এগুলি এমন সমস্যা যা অনেক মানুষের পক্ষে সমাধান করা কঠিন হবে, আমি নিজেও এটি অন্তর্ভুক্ত করেছি এবং এটি দুই সেকেন্ডের মধ্যে প্রতিক্রিয়া টাইপ করবে।\" \"এটা দেখতে ভীতিকর ছিল।\"</p><p><br></p><p>কোডেক্স এমন একটি প্রযুক্তি বলে মনে হয়েছিল যা শীঘ্রই মানব শ্রমিকদের প্রতিস্থাপন করবে। স্মিথ যখন সিস্টেমটি পরীক্ষা চালিয়ে যাচ্ছিলেন, তিনি বুঝতে পেরেছিলেন যে এর দক্ষতা ক্যানড ইন্টারভিউ প্রশ্নের উত্তর দেওয়ার জন্য একটি দক্ষতার বাইরেও বিস্তৃত। এমনকি এটি একটি প্রোগ্রামিং ভাষা থেকে অন্য ভাষায় অনুবাদ করতে পারে।</p><p><br></p><p>তবুও এই নতুন প্রযুক্তির সাথে কয়েক সপ্তাহ কাজ করার পরে, স্মিথ বিশ্বাস করেন যে এটি পেশাদার কোডারদের জন্য কোন হুমকি নয়। প্রকৃতপক্ষে, অন্যান্য অনেক বিশেষজ্ঞের মতো, তিনি এটিকে একটি হাতিয়ার হিসেবে দেখেন যা মানুষের উৎপাদনশীলতা বাড়িয়ে তুলবে। এটি এমনকি একটি সম্পূর্ণ নতুন প্রজন্মকে কম্পিউটারের শিল্প শিখতে সাহায্য করতে পারে, তাদের দেখাতে পারে কিভাবে কোডের সাধারণ টুকরা লিখতে হয়, প্রায় ব্যক্তিগত শিক্ষকের মতো।</p>', '2021-09-19 15:34:58', '2021-09-19 15:34:58'),
(12, 5, 'Babul Supriyo, ex-union minister of Modi govt, joins Mamata’s Trinamool', 'মোদী সরকারের প্রাক্তন কেন্দ্রীয় মন্ত্রী বাবুল সুপ্রিয়ও মমতার তৃণমূলে যোগ দেন', 'public/media/post/1.7113450287695E+15.jpg', '<div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-29 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; font-family: arial, sans-serif; line-height: 18px;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 14px; line-height: 1.3; font-family: Arial, Verdana, Helvetica, sans-serif; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">Babul Supriyo has joined West Bengal Chief Minister Mamata Banerjee\'s party after Indian Prime Minister Narendra Modi dropped the celebrity singer-turned-politician from his cabinet.</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-28\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; font-family: arial, sans-serif; line-height: 18px; color: rgb(21, 21, 21);\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-21 article_body\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">The Asansol MP, who once declared that he would leave politics after he was dropped from cabinet, joined All India Trinamool Congress on Saturday, according to an announcement made from the party\'s official Twitter account.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">\"Today, in the presence of national general secretary Abhishek Banerjee and RS MP Derek O\'Brien, former Union minister and sitting MP Babul Supriyo joined the Trinamool family,\" the party said.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Earlier in July, Supriyo insisted that he would no longer be a part of politics after being dropped from the cabinet.&nbsp; But BJP leadership tried to convince him so that he stays in the party as an MP, The Times of India reports.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">\"I\'m very proud that I am changing my decision (of leaving politics). I am returning for the great opportunity to serve Bengal. I am very excited. I will meet Didi (Mamata Banerjee) on Monday. I am overwhelmed by the cordial welcome,\" Supriyo said just after he joined.</p></div></div></div>', '<p>ভারতের প্রধানমন্ত্রী নরেন্দ্র মোদি তার মন্ত্রিসভা থেকে বিখ্যাত গায়ক-রাজনীতিবিদ থেকে বাদ পড়ার পর বাবুল সুপ্রিয় পশ্চিমবঙ্গের মুখ্যমন্ত্রী মমতা বন্দ্যোপাধ্যায়ের দলে যোগ দিয়েছেন।</p><p>আসানসোলের সাংসদ, যিনি একবার ঘোষণা করেছিলেন যে তিনি মন্ত্রিসভা থেকে বাদ পড়ার পর রাজনীতি ছেড়ে দেবেন, শনিবার দলের সর্বভারতীয় তৃণমূল কংগ্রেসে যোগ দেন, দলের আনুষ্ঠানিক টুইটার অ্যাকাউন্ট থেকে করা এক ঘোষণায়।</p><p><br></p><p>\"আজ, জাতীয় সাধারণ সম্পাদক অভিষেক ব্যানার্জি এবং আরএস সাংসদ ডেরেক ও\'ব্রায়েনের উপস্থিতিতে, প্রাক্তন কেন্দ্রীয় মন্ত্রী এবং বর্তমান সংসদ সদস্য বাবুল সুপ্রিয় তৃণমূল পরিবারে যোগদান করেছেন,\" দলটি বলেছে।</p><p><br></p><p>এর আগে জুলাই মাসে, সুপ্রিয় জোর দিয়েছিলেন যে মন্ত্রিসভা থেকে বাদ পড়ার পর তিনি আর রাজনীতির অংশ হবেন না। কিন্তু বিজেপি নেতৃত্ব তাঁকে বোঝানোর চেষ্টা করেছিলেন যাতে তিনি এমপি হিসেবে দলে থাকেন, টাইমস অব ইন্ডিয়া রিপোর্ট করে।</p><p><br></p><p>\"আমি খুবই গর্বিত যে আমি আমার সিদ্ধান্ত পরিবর্তন করছি (রাজনীতি ত্যাগ করার)। আমি বাংলার সেবা করার মহান সুযোগের জন্য ফিরে আসছি। আমি খুবই উচ্ছ্বসিত। আমি সোমবার দিদির (মমতা বন্দ্যোপাধ্যায়) সঙ্গে দেখা করব। আন্তরিকভাবে স্বাগত জানাই, \"যোগ দেওয়ার পরপরই সুপ্রিয়ো বললেন।</p>', '2021-09-19 15:36:40', '2021-09-19 15:36:40'),
(13, 4, 'England takes Bangladesh off COVID red list for travel', 'ভ্রমণের জন্য ইংল্যান্ড বাংলাদেশকে কোভিডের লাল তালিকা থেকে সরিয়ে নিয়েছে', 'public/media/post/1.7113451688213E+15.jpg', '<div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-29 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; font-family: arial, sans-serif; line-height: 18px;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 14px; line-height: 1.3; font-family: Arial, Verdana, Helvetica, sans-serif; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">England has decided to move Bangladesh and seven other countries off the COVID-19 red list as it announces a major relaxing of travel rules for people coming in and out of the country.</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-28\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; font-family: Helvetica, Arial; float: right; clear: both; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; font-family: arial, sans-serif; line-height: 18px; color: rgb(21, 21, 21);\"><div class=\"widget storyContent article widget-editable viziwyg-section-37 inpage-widget-21 article_body\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 18px;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Bangladesh will be dropped from the red list at 4 am on Sept 22. The seven other countries are Turkey, Pakistan, the Maldives, Egypt, Sri Lanka, Kenya and Oman.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Britain simplified rules on Friday for international travel to England in a boost to the tourism industry, including scrapping the need for fully vaccinated passengers to take expensive COVID-19 tests on arrival from low-risk countries.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">Under the new proposals, destinations will simply be ranked low or high risk, instead of red, amber and green.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; line-height: 19px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">From Oct 4, passengers arriving from low-risk countries will be permitted to take a cheaper lateral flow test, rather than the privately administered PCR lab tests now required. PCR tests for a family now can cost hundreds of pounds.</p></div></div></div>', '<p>ইংল্যান্ড বাংলাদেশ এবং অন্যান্য সাতটি দেশকে কোভিড -১ red এর লাল তালিকা থেকে সরিয়ে নেওয়ার সিদ্ধান্ত নিয়েছে কারণ এটি দেশে এবং বাইরে আসা লোকদের জন্য ভ্রমণের নিয়মগুলি শিথিল করার ঘোষণা দিয়েছে।</p><p>২২ সেপ্টেম্বর ভোর at টায় বাংলাদেশ লাল তালিকা থেকে বাদ যাবে। অন্য সাতটি দেশ হলো তুরস্ক, পাকিস্তান, মালদ্বীপ, মিশর, শ্রীলঙ্কা, কেনিয়া এবং ওমান।</p><p><br></p><p>কম ঝুঁকিপূর্ণ দেশ থেকে আগমনের সময় ব্যয়বহুল কোভিড -১ tests পরীক্ষা নেওয়ার জন্য সম্পূর্ণভাবে টিকা দেওয়া যাত্রীদের প্রয়োজনীয়তা প্রত্যাহারসহ পর্যটন শিল্পকে উৎসাহিত করার জন্য ব্রিটেন শুক্রবার ইংল্যান্ডে আন্তর্জাতিক ভ্রমণের জন্য নিয়মগুলি সহজ করেছে।</p><p><br></p><p>নতুন প্রস্তাবের অধীনে, গন্তব্যগুলি কেবল লাল, অ্যাম্বার এবং সবুজের পরিবর্তে কম বা উচ্চ ঝুঁকিতে স্থান পাবে।</p><p><br></p><p>Oct অক্টোবর থেকে, কম ঝুঁকিপূর্ণ দেশ থেকে আগত যাত্রীদের ব্যক্তিগতভাবে পরিচালিত পিসিআর ল্যাব পরীক্ষার পরিবর্তে একটি সস্তা পার্শ্বীয় প্রবাহ পরীক্ষা করার অনুমতি দেওয়া হবে। একটি পরিবারের জন্য এখন পিসিআর পরীক্ষার জন্য শত শত পাউন্ড খরচ হতে পারে।</p>', '2021-09-19 15:38:54', '2021-09-19 15:38:54'),
(14, 5, 'Kovid: The Prime Minister has warned that winter is coming', 'কোভিড: শীত আসছে বলে সতর্কবার্তা প্রধানমন্ত্রীর', 'public/media/post/1714884632449770.jpg', '<p>Though the rate of coronavirus infection has come down now, Prime Minister Sheikh Hasina has warned everyone that winter is coming.</p><p>He said, \"It seems that whenever winter comes, coronavirus is appearing again in all the countries of the world. Even in the USA or England or various countries in Europe, its prevalence is already increasing somewhat. I urge everyone in Bangladesh to be careful. ”</p><p><br></p><p>The Prime Minister made the call while attending the ceremony of receiving blankets at the Prime Minister\'s Relief Store through video conferencing from Ganobhaban on Thursday afternoon.</p><p><br></p><p>July-August this year was the most catastrophic since the outbreak of the coronavirus epidemic in the country last year. At that time the daily infection rate rose to 32 percent.</p><p><br></p><p>Starting in September, the daily infection rate has dropped below two percent. At the same time, death has also decreased. The Department of Health said no new deaths were reported in six departments on Wednesday.</p>', '<div class=\"widget storyContent article widget-editable viziwyg-section-104 inpage-widget-85 article_lead_text\" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 18px; vertical-align: baseline; background: transparent; margin: 0px; padding: 10px 0px; line-height: 22px; font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\"><h5 class=\" print-only\" style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: bold; font-stretch: normal; font-size: 18px; line-height: normal; font-family: SolaimanLipi; margin-right: 0px; margin-bottom: 15px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; padding: 0px;\">করোনাভাইরাস সংক্রমণের হার এখন কমলেও শীত আসছে বলে সবাইকে সতর্ক করলেন প্রধানমন্ত্রী শেখ হাসিনা।</h5></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; float: right; clear: both; font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;; width: 140px;\"><div class=\"widget storyContent article widget-editable viziwyg-section-104 inpage-widget-81\" style=\"overflow: hidden; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\"></div></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; float: right; clear: both; font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; float: right; clear: both; font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;; width: 140px;\"></div><div class=\"floatingContent-right \" style=\"overflow: hidden; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px 0px 0px 15px; padding: 0px; float: right; clear: both; font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;; width: 140px;\"></div><div class=\"wrappingContent \" style=\"overflow: visible; border: 0px; outline: 0px; font-size: 16px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 1.4; color: rgb(68, 68, 68); font-family: solaimanLipi, &quot;Siyam Rupali&quot;, Vrinda, Helvetica, Arial, &quot;sans-serif&quot;;\"><div class=\"widget storyContent article widget-editable viziwyg-section-104 inpage-widget-84 article_body\" id=\"storyBody\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 1.4;\"><div class=\"custombody print-only\" style=\"overflow: visible; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px; line-height: 1.4;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">তিনি বলেছেন, “দেখা যাচ্ছে যখনই একটু শীতকাল আসছে, পৃথিবীর সব দেশে আবার কিন্তু করোনাভাইরাস দেখা দিচ্ছে। এমনকি ইউএসএ বা ইংল্যান্ড বা ইউরোপের বিভিন্ন দেশে ইতোমধ্যে এর প্রার্দুভাব কিছুটা বৃদ্ধি পাচ্ছে। বাংলাদেশে সবাইকে একটু সতর্ক থাকার জন্য অনুরোধ করছি।”</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">বৃহস্পতিবার বিকালে গণভবন থেকে ভিডিও কনফারেন্সিংয়ের মাধ্যমে প্রধানমন্ত্রীর ত্রাণ ভাণ্ডারে কম্বল গ্রহণ অনুষ্ঠানে যুক্ত হয়ে এই আহ্বান জানান প্রধানমন্ত্রী।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">গত বছর দেশে করোনাভাইরাস মহামারীর প্রাদুর্ভাবের পর এই বছরের জুলাই-অগাস্ট সবচেয়ে বেশি বিপর্যয়কর অবস্থা পার করে। তখন দৈনিক সংক্রমণের হার ৩২ শতাংশে উঠেছিল।</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 2px 0px 0px; line-height: 1.4; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; overflow: visible;\">সেপ্টেম্বর থেকে কমতে শুরু করে এখন দৈনিক সংক্রমণের হার দুই শতাংশের নিচে নেমেছে। একই সঙ্গে কমেছে মৃত্যুও। বুধবার ছয় বিভাগে নতুন কারও মৃত্যুর তথ্য মেলেনি বলে স্বাস্থ্য অধিদপ্তর জানায়।</p></div></div></div>', '2021-10-28 17:17:09', '2021-10-28 17:17:09');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_categoryName_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_categoryName_bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `post_categoryName_en`, `post_categoryName_bn`, `created_at`, `updated_at`) VALUES
(1, 'Sports', 'খেলাধূলা', '2021-09-19 06:31:35', '2021-09-19 06:31:35'),
(3, 'Technology', 'প্রযুক্তি', '2021-09-19 07:33:04', '2021-09-19 07:33:04'),
(4, 'Local', 'স্থানীয়', '2021-09-19 07:33:31', '2021-09-19 07:33:31'),
(5, 'politics', 'রাজনীতি', '2021-09-19 07:33:56', '2021-09-19 07:33:56'),
(6, 'Business', 'ব্যবসা', '2021-09-19 15:27:29', '2021-09-19 15:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_slider` int(11) DEFAULT NULL,
  `hot_deal` int(11) DEFAULT NULL,
  `best_rated` int(11) DEFAULT NULL,
  `mid_slider` int(11) DEFAULT NULL,
  `hot_new` int(11) DEFAULT NULL,
  `buyone_getone` int(10) DEFAULT NULL,
  `trend` int(11) DEFAULT NULL,
  `image_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_code`, `product_quantity`, `product_details`, `product_color`, `product_size`, `selling_price`, `discount_price`, `video_link`, `main_slider`, `hot_deal`, `best_rated`, `mid_slider`, `hot_new`, `buyone_getone`, `trend`, `image_one`, `image_two`, `image_three`, `status`, `created_at`, `updated_at`) VALUES
(6, 6, 3, 13, 'Men\'s T-shirt', '1', '20', 'Description', 'Red,Black,Blue,Yellow', 'M,L,XL', '20', '16', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', 1, 1, 1, 1, 1, NULL, 1, 'public/media/product/1.7113578405501E+15.png', 'public/media/product/1.7113578409167E+15.png', 'public/media/product/1.7113578410027E+15.png', 1, '2021-09-19 19:00:19', '2021-09-19 19:00:19'),
(7, 6, 3, 13, 'Men\'s Red T-shirt', '2', '7', '<p>Description<br></p>', 'Red,Black,Yellow', 'M,L,XL', '15', '12', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', 1, 1, 1, 1, 1, 1, 1, 'public/media/product/1.7113581652683E+15.png', 'public/media/product/1.7113581653803E+15.png', 'public/media/product/1.7113581654843E+15.png', 1, '2021-09-19 19:05:28', '2021-09-19 19:05:28'),
(8, 7, 6, 13, 'Navy top', '3', '9', '<p>Description&nbsp;</p>', 'Black,Yellow', 'M,L', '600', '499', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, 1, NULL, NULL, 1, NULL, NULL, 'public/media/product/1.7113585004529E+15.jpeg', 'public/media/product/1.7113585005599E+15.jpeg', 'public/media/product/1.7113585006739E+15.jpeg', 1, '2021-09-19 19:10:48', '2021-09-19 19:10:48'),
(9, 7, 6, 14, 'Women\'s Product', '4', '20', '<p>Description</p>', 'Red,Yellow', 'M,L', '15', '13', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', 1, 1, NULL, 1, 1, 1, NULL, 'public/media/product/1.7113586582019E+15.jpeg', 'public/media/product/1.7113586583609E+15.jpeg', 'public/media/product/1.711358658486E+15.jpeg', 1, '2021-09-19 19:13:18', '2021-09-19 19:13:18'),
(10, 9, 12, 11, 'Men\'s Watch', '5', '20', '<p>Description</p>', 'Black,Blue', 'Lather,Metal', '45', '40', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', 1, 1, 1, 1, 1, NULL, 1, 'public/media/product/190921_19_57_56.jpeg', 'public/media/product/1.7113588019557E+15.jpeg', 'public/media/product/1.7113588020657E+15.jpeg', 1, '2021-09-19 19:15:35', '2021-09-19 19:15:35'),
(11, 6, 22, 14, 'Stylish men\'s shoes', '6', '20', '<p>Description&nbsp;</p>', 'Black,Gray', '38,40,42', '100', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, 1, 1, NULL, 1, 1, 1, 'public/media/product/1.7114049463482E+15.jpeg', 'public/media/product/1.7114049466362E+15.jpeg', 'public/media/product/1.7114049466722E+15.jpeg', 1, '2021-09-20 07:29:02', '2021-09-20 07:29:02'),
(12, 6, 22, 13, 'Sport men\'s Shoes', '7', '20', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><br></p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Black,Red', '40,42,44', '80', '70', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, 1, 1, NULL, 1, 1, 1, 'public/media/product/1.711405133585E+15.jpeg', 'public/media/product/1.711405133642E+15.jpeg', 'public/media/product/1.7114051337296E+15.jpeg', 1, '2021-09-20 07:32:01', '2021-09-20 07:32:01'),
(13, 9, 12, 11, 'Sport Men\'s Watch', '8', '30', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'black,Red', 'Metal,Lather', '60', '55', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, 1, 1, NULL, 1, 1, 1, 'public/media/product/1.7114053024599E+15.jpeg', 'public/media/product/1.7114053026175E+15.jpeg', 'public/media/product/1.7114053027075E+15.jpeg', 1, '2021-09-20 07:34:42', '2021-09-20 07:34:42'),
(14, 9, 12, 7, 'Men\'s sport watch 3', '9', '20', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px; color: rgb(0, 0, 0);\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Black,Red', 'Metal,Lather', '99', '90', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, 1, 1, NULL, 1, NULL, 1, 'public/media/product/1.7114054962971E+15.jpeg', 'public/media/product/1.7114054963661E+15.jpeg', 'public/media/product/1.7114054964601E+15.jpeg', 1, '2021-09-20 07:37:47', '2021-09-20 07:37:47'),
(15, 7, 6, 12, 'Women\'s T-shirt', '10', '10', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'Black,White', 'M,L', '20', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, 1, 1, NULL, 1, NULL, 1, 'public/media/product/1716019431301187.jpeg', 'public/media/product/1716019431528200.jpeg', 'public/media/product/1716019431611205.jpeg', 1, '2021-11-10 05:54:18', '2021-11-10 05:54:18'),
(16, 7, 6, 13, 'Women\'s navy Top', '11', '10', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'Black,White', 'M,L', '25', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, 1, 'public/media/product/1716019734106594.jpeg', 'public/media/product/1716019734161597.jpeg', 'public/media/product/1716019734276177.jpeg', 1, '2021-11-10 05:59:07', '2021-11-10 05:59:07'),
(17, 9, 12, 11, 'Men\'s Watch', '12', '10', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'Black,Golden', 'Metal ,Lather', '50', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', 1, 1, 1, NULL, 1, NULL, 1, 'public/media/product/1716021016357985.jpeg', 'public/media/product/1716021016417988.jpeg', 'public/media/product/1716021016477992.jpeg', 1, '2021-11-10 06:19:29', '2021-11-10 06:19:29'),
(18, 6, 22, 14, 'Men\'s Shoes', '13', '10', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'Black,Gray', '40,42', '100', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', 1, 1, 1, NULL, 1, NULL, 1, 'public/media/product/1716022115788178.jpeg', 'public/media/product/1716022115919186.jpeg', 'public/media/product/1716022116024192.jpeg', 1, '2021-11-10 06:36:58', '2021-11-10 06:36:58'),
(22, 7, 23, 14, 'Women`s Fashionable Sweat shirts Winter Jacket by HH Fashion', '15', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Pink', 'M,L', '50', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, 1, NULL, NULL, 1, NULL, 1, 'public/media/product/1716056593446798.PNG', 'public/media/product/1716056593887396.PNG', 'public/media/product/1716056593982402.PNG', 1, '2021-11-10 15:44:59', '2021-11-10 15:44:59'),
(23, 7, 23, 15, 'Denim Jacket for Women', '16', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Blue,Black', 'M,L,XL,XXL', '40', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716056900703326.PNG', 'public/media/product/1716056900812332.PNG', 'public/media/product/1716056901253931.PNG', 1, '2021-11-10 15:49:52', '2021-11-10 15:49:52'),
(24, 7, 25, 16, 'Women\'s Winter Cap', '17', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Pink', 'M,L', '5', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716057233528647.PNG', 'public/media/product/1716057233641653.PNG', 'public/media/product/1716057233789662.PNG', 1, '2021-11-10 15:55:09', '2021-11-10 15:55:09'),
(25, 7, 26, 16, 'মহিলাদের জন্য বিভিন্ন রঙের সাতকাহনের শাড়ি', '18', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,White', '১৪ হাত,১২ হাত', '7', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716057659653748.PNG', 'public/media/product/1716057659747753.PNG', 'public/media/product/1716057660129775.PNG', 1, '2021-11-10 16:01:56', '2021-11-10 16:01:56'),
(26, 7, 26, 16, 'Jorna cotton saree for women', '19', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Yellow', '১৪ হাত,১২ হাত', '8', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716058010590850.PNG', 'public/media/product/1716058010670854.PNG', 'public/media/product/1716058010770860.PNG', 1, '2021-11-10 16:07:30', '2021-11-10 16:07:30'),
(27, 7, 26, 16, 'Half Silk Saree for Women', '20', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Red,Black', '১৪ হাত,১২ হাত', '9', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716058715559376.PNG', 'public/media/product/1716058715630380.PNG', 'public/media/product/1716058715698384.PNG', 1, '2021-11-10 16:18:42', '2021-11-10 16:18:42'),
(28, 7, 27, 16, 'New Buterfly Design Kurti', '21', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Gray,Black,Yellow,Pink', 'M,L', '10', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716059996988147.PNG', 'public/media/product/1716059997104153.PNG', 'public/media/product/1716059997173157.PNG', 1, '2021-11-10 16:39:04', '2021-11-10 16:39:04'),
(29, 7, 27, 16, 'Digital Printed Readymade Kurtis', '613452', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Red,Yellow,Black', 'M,L,XL,XXL', '25', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716060455062845.PNG', 'public/media/product/1716060455141849.PNG', 'public/media/product/1716060455214854.PNG', 1, '2021-11-10 16:46:21', '2021-11-10 16:46:21'),
(30, 7, 27, 16, 'Stitched Printed Kurtis', '860730', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Red', 'M,L', '10', NULL, 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716060631612244.PNG', 'public/media/product/1716060632000840.PNG', 'public/media/product/1716060632047842.PNG', 1, '2021-11-10 16:49:10', '2021-11-10 16:49:10'),
(31, 9, 12, 16, 'Stainless Steel Watch for Men-Silver and Golden', '470837', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Silver,Golden', NULL, '10', '8', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716061034415400.PNG', 'public/media/product/1716061034558982.PNG', 'public/media/product/1716061034652987.PNG', 1, '2021-11-10 16:55:34', '2021-11-10 16:55:34'),
(32, 9, 12, 11, 'Men\'s Watch 5', '441215', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Silver,Golden', 'Metal,Lather', '15', '10', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', 1, 1, 1, NULL, 1, NULL, 1, 'public/media/product/1716061538461950.jpeg', 'public/media/product/1716061538517953.jpeg', 'public/media/product/1716061538582957.jpeg', 1, '2021-11-10 17:03:34', '2021-11-10 17:03:34'),
(33, 9, 12, 16, 'CURRENT 8 WATCH for men', '184114', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Golden', 'Metal,Lather', '10', '6', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716062274278438.PNG', 'public/media/product/1716062274606456.PNG', 'public/media/product/1716062274710462.PNG', 1, '2021-11-10 17:15:16', '2021-11-10 17:15:16'),
(34, 9, 12, 16, 'Stainless Steel Rosara Watch For Men\'s Silver and Gold', '656327', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Silver,Golden', 'Metal,Lather', '9', '7', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716062412051410.PNG', 'public/media/product/1716062412142415.PNG', 'public/media/product/1716062412257422.PNG', 1, '2021-11-10 17:17:28', '2021-11-10 17:17:28'),
(35, 9, 13, 16, 'Magnet Strap Buckle Stainless Steel Women Girl Gift', '163984', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Silver,Golden', 'Metal,Lather', '11', '8', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716062547192085.PNG', 'public/media/product/1716062547284090.PNG', 'public/media/product/1716062547372095.PNG', 1, '2021-11-10 17:19:36', '2021-11-10 17:19:36'),
(36, 9, 13, 16, 'Wonderful White Stone Women watch', '396175', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Silver,Golden', 'Metal,Lather', '12', '9', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716062867228223.PNG', 'public/media/product/1716062867266225.PNG', 'public/media/product/1716062867332229.PNG', 1, '2021-11-10 17:24:42', '2021-11-10 17:24:42'),
(37, 9, 13, 16, 'Original_Dior Watch Trend Women', '590638', '10', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 'Black,Silver,Golden', 'Metal,Lather', '5', '3', 'https://www.youtube.com/watch?v=Ndsm6_y66r8', NULL, NULL, 1, NULL, 1, NULL, NULL, 'public/media/product/1716063031311603.PNG', 'public/media/product/1716063031409609.PNG', 'public/media/product/1716063031496614.PNG', 1, '2021-11-10 17:27:18', '2021-11-10 17:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bing_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_tag`, `meta_description`, `google_analytics`, `bing_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Pro laravel ecommerce', 'Rasel Rana', 'tag tag tag', 'meta description', 'google analytics', 'bing analytics', '2021-10-14 09:42:31', '2021-10-14 09:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `shopName`, `email`, `phone`, `address`, `logo`, `shipping_charge`, `vat`, `created_at`, `updated_at`) VALUES
(1, 'Pro Laravel Ecommerce', 'prolaravelecommerce@gmail.com', '01716530037', 'Dhaka,Bangladesh', NULL, '50', '5', '2021-10-05 10:13:08', '2021-10-05 10:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `ship_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ship_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `order_id`, `ship_name`, `ship_phone`, `ship_email`, `ship_address`, `ship_city`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rasel Rana', '01716530037', 'raselrana500@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', NULL, NULL),
(2, 3, 'Rasel Rana', '01716530037', 'raselrana500@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', NULL, NULL),
(3, 4, 'Mamun', '01686391286', 'mamun2526@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', NULL, NULL),
(4, 5, 'Rukon', '01672447122', 'air.rukon@gmail.cm', 'West Razabazar,Dhaka-1205', 'Tajgaon', NULL, NULL),
(5, 6, 'Zihad hasan', '01826091222', 'zihad368@gmail.com', 'Rajshahi Sadar', 'Rajshahi', NULL, NULL),
(6, 7, 'Rukon', '01686391286', 'rukon@gmail.com', 'Biswas betka', 'Tangail', NULL, NULL),
(7, 8, 'Rana', '01726091227', 'zihad368@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', NULL, NULL),
(8, 9, 'Rasel Rana', '01726091227', 'zihad368@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', NULL, NULL),
(9, 10, 'Rasel Rana', '01726091227', 'zihad368@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', NULL, NULL),
(10, 11, 'Rasel Rana', '01716530037', 'raselrana500@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', '2021-10-16 04:49:50', '2021-10-16 04:49:50'),
(11, 12, 'Shakil', '01816530037', 'shakil@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', '2021-10-16 09:36:17', '2021-10-16 09:36:17'),
(12, 13, 'Rasel Rana', '01716530037', 'raselrana500@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', '2021-10-28 17:10:15', '2021-10-28 17:10:15'),
(13, 14, 'Rasel Rana', '01716530037', 'earntkbyonline@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', '2021-10-30 06:40:36', '2021-10-30 06:40:36'),
(14, 15, 'Rasel Rana', '01716530037', 'raselrana5@gmail.com', 'Rowail,Shatihati,Kalihati,Tangail', 'Tangail', '2021-10-30 08:09:35', '2021-10-30 08:09:35'),
(26, 27, NULL, NULL, NULL, NULL, NULL, '2021-11-06 09:59:32', '2021-11-06 09:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `company_name`, `company_address`, `phone_one`, `phone_two`, `email`, `facebook`, `youtube`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'Professional Laravel E-commerce', 'Teajgaon,Dhaka-1215', '01726091227', '01686391286', 'admin@prolaravelecommerce.com', 'https://www.facebook.com/raselranacse', 'https://www.youtube.com/channel/UCc_mI-T2BbSck7VbHBDY4qQ', NULL, NULL, '2021-10-19 08:23:31', '2021-10-19 08:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catId` int(11) NOT NULL,
  `subcategory_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `catId`, `subcategory_name`, `created_at`, `updated_at`) VALUES
(3, 6, 'Gents Tshirt', NULL, NULL),
(4, 6, 'Gents Shirt', NULL, NULL),
(5, 6, 'Gents Pant', NULL, NULL),
(6, 7, 'Womens Tshirt', NULL, NULL),
(7, 7, 'Womens Shirt', NULL, NULL),
(8, 7, 'Womens Pant', NULL, NULL),
(9, 8, 'Child Dress & Footware', NULL, NULL),
(10, 10, 'Child Body Care', NULL, NULL),
(11, 8, 'Child Diaper', NULL, NULL),
(12, 9, 'Gents Watch', NULL, NULL),
(13, 9, 'Womans Watch', NULL, NULL),
(14, 9, 'Kids Watch', NULL, NULL),
(15, 13, 'Body Spray', NULL, NULL),
(16, 13, 'Finger Ring', NULL, NULL),
(17, 13, 'Jewelry', NULL, NULL),
(18, 15, 'Appliances', NULL, NULL),
(19, 15, 'Room Decoration', NULL, NULL),
(20, 15, 'Light and Lamp', NULL, NULL),
(21, 15, 'Security', NULL, NULL),
(22, 6, 'Men\'s Shoes', NULL, NULL),
(23, 7, 'Jacket', '2021-11-10 15:39:57', '2021-11-10 15:39:57'),
(24, 6, 'Jacket', '2021-11-10 15:42:46', '2021-11-10 15:42:46'),
(25, 7, 'Cap', '2021-11-10 15:54:11', '2021-11-10 15:54:11'),
(26, 7, 'Sarees', '2021-11-10 15:57:38', '2021-11-10 15:57:38'),
(27, 7, 'Kurti', '2021-11-10 16:37:37', '2021-11-10 16:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `avatar`, `provider`, `provider_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ariyan', NULL, 'ariyan@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$dMY5vrhg4kz.iP5sr.pH3uV.VlPhgEP30QR1PHY8s0F8vMXGyOvwq', NULL, '2019-10-04 23:27:57', '2019-10-04 23:27:57'),
(2, 'udemy', NULL, 'udemy@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$dMY5vrhg4kz.iP5sr.pH3uV.VlPhgEP30QR1PHY8s0F8vMXGyOvwq', NULL, '2019-10-05 04:47:42', '2019-10-05 04:47:42'),
(3, 'Rasel Rana', '01716530037', 'raselrana500@gmail.com', NULL, NULL, NULL, '2021-09-21 00:16:19', '$2y$10$iKvZs7NgMXmzbYSYGBTVtuTZXlCTOnpUncDeTXGYBbdipZrkJPqtW', NULL, '2021-09-21 00:15:03', '2021-09-22 00:09:17'),
(4, 'Rasel Rana', '01726091227', 'raselrana501@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$4zBnHq5f.ao1MqVsyb7jy.aYozcQezyDZw8.kQHK6LBW0F0LoX7DK', NULL, '2021-09-21 00:17:05', '2021-09-21 00:17:05'),
(5, 'Rasel Rana', '01686391286', 'raselrana502@gmail.com', NULL, NULL, NULL, '2021-09-21 00:21:16', '$2y$10$LWK6b9DJXrl9YuAxthCBGeKUr8lkCbOg5s6AoxYWAPkPxsEZYPZ0q', NULL, '2021-09-21 00:19:46', '2021-09-21 00:21:16'),
(6, 'Rasel Rana', '01862546', 'raselrana503@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$x3zY6maMTBlUOwL6UlymouMA0kE9gK4kF879RjZ.q/5eOllbSD4Xm', NULL, '2021-09-21 00:22:05', '2021-09-21 00:22:05'),
(15, 'Technology World', NULL, 'earntkbyonline@gmail.com', NULL, 'google', '100058514673565720416', NULL, NULL, NULL, '2021-10-30 00:38:45', '2021-10-30 00:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(9, 3, 14, NULL, NULL),
(10, 3, 12, NULL, NULL),
(11, 3, 10, NULL, NULL),
(12, 3, 13, NULL, NULL),
(13, 14, 14, '2021-10-28 17:13:18', '2021-10-28 17:13:18'),
(14, 14, 8, '2021-10-28 17:13:22', '2021-10-28 17:13:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newslatters`
--
ALTER TABLE `newslatters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `newslatters`
--
ALTER TABLE `newslatters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
