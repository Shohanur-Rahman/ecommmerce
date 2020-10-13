-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 06:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_vendors`
--

CREATE TABLE `apply_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `secret_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approve` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_vendors`
--

INSERT INTO `apply_vendors` (`id`, `user_id`, `secret_key`, `is_approve`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 'ZAu1bd3VyB2', 1, 1, '2020-10-13 05:58:13', '2020-10-13 05:58:39'),
(2, 3, 'aJoQKzQR9l3', 1, 1, '2020-10-13 06:25:53', '2020-10-13 06:26:14'),
(3, 4, 'Q8D2rzC3RR4', 1, 1, '2020-10-13 06:32:51', '2020-10-13 06:33:11'),
(4, 5, '1VdHdWkBX65', 1, 1, '2020-10-13 06:59:43', '2020-10-13 07:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dashboards`
--

CREATE TABLE `dashboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ecom_settings`
--

CREATE TABLE `ecom_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_cost` double(8,2) NOT NULL,
  `outer_city_shipping_cost` double(8,2) NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ecom_supports`
--

CREATE TABLE `ecom_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `subject`, `description`, `user_type`, `read_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'How can we help you?', 'How can we help you?How can we help you?How can we help you?How can we help you?How can we help you?', NULL, NULL, NULL, '2020-10-13 09:50:44', '2020-10-13 09:50:44'),
(2, 'How can we help you?', 'How can we help you?How can we help you?How can we help you?How can we help you?How can we help you?', NULL, NULL, NULL, '2020-10-13 09:51:56', '2020-10-13 09:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `mail_addresses`
--

CREATE TABLE `mail_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mail_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `read_at` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_addresses`
--

INSERT INTO `mail_addresses` (`id`, `mail_id`, `name`, `email`, `user_type`, `status`, `read_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Shohanur Rahman', 'nur57@gmail.com', NULL, 0, 0, NULL, '2020-10-13 09:50:44', '2020-10-13 09:50:44'),
(2, 2, 'Shohanur Rahman', 'nur57@gmail.com', NULL, 0, 0, NULL, '2020-10-13 09:51:56', '2020-10-13 09:51:56');

-- --------------------------------------------------------

--
-- Table structure for table `main_sliders`
--

CREATE TABLE `main_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_sliders`
--

INSERT INTO `main_sliders` (`id`, `product_id`, `category_id`, `name`, `caption`, `image_url`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Summer collections for men', 'The Buttons extension for DataTables provides a common set of options', 'uploads/sliders/mainSlider/October_2020/13/1602589072_160183~1.PNG', '2020-10-13 05:37:52', '2020-10-13 05:37:52'),
(2, NULL, 1, 'API methods and styling to display buttons', 'API methods and styling to display buttons on a page that', 'uploads/sliders/mainSlider/October_2020/13/1602589695_1601832607_c10_01_banner_d.jpg', '2020-10-13 05:48:15', '2020-10-13 05:48:15'),
(3, NULL, 2, 'What is Lorem Ipsum', 'Type and scrambled it to make a type sp', 'uploads/sliders/mainSlider/October_2020/13/1602589758_1601721490_8.jpeg', '2020-10-13 05:49:18', '2020-10-13 05:49:18'),
(4, NULL, 2, 'Why do we use it', 'making it look like readable English. M', 'uploads/sliders/mainSlider/October_2020/13/1602589795_1601833186_fashion-young-african-girl-black-260nw-1420132757.jpg', '2020-10-13 05:49:55', '2020-10-13 05:49:55'),
(5, NULL, 3, 'Where can I get some', 'Lorem Ipsum generators', 'uploads/sliders/mainSlider/October_2020/13/1602589828_1601835854_a3bee3890d4039488fabcfd797e02fa6.jpg', '2020-10-13 05:50:28', '2020-10-13 05:50:28'),
(6, NULL, 3, 'Lorem Ipsum is therefore always free', 'All the Lorem Ipsum generators on the Internet tend to rep', 'uploads/sliders/mainSlider/October_2020/13/1602589864_1601835854_a3bee3890d4039488fabcfd797e02fa6.jpg', '2020-10-13 05:51:04', '2020-10-13 05:51:04'),
(8, NULL, 4, 'If you are going to use a passage', 'The Extremes of Good and Evil) by Cicero', 'uploads/sliders/mainSlider/October_2020/13/1602589943_1601832945_carl-f-bucherer-manero-tourbillon-1.jpg', '2020-10-13 05:52:23', '2020-10-13 05:52:23'),
(9, NULL, 4, 'combined with a handful', 'Various versions have evolved', 'uploads/sliders/mainSlider/October_2020/13/1602589973_1601832812_maxresdefault.jpg', '2020-10-13 05:52:53', '2020-10-13 05:52:53');

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
(3, '2018_08_08_100000_create_telescope_entries_table', 1),
(54, '2014_10_12_000000_create_users_table', 2),
(55, '2014_10_12_100000_create_password_resets_table', 2),
(56, '2019_08_19_000000_create_failed_jobs_table', 2),
(57, '2020_09_07_134453_create_dashboards_table', 2),
(58, '2020_09_07_141320_create_product_brands_table', 2),
(59, '2020_09_08_072714_create_product_tags_table', 2),
(60, '2020_09_08_114549_create_product_brand_category_maps_table', 2),
(61, '2020_09_08_144202_create_products_table', 2),
(62, '2020_09_08_151007_create_product_categories_table', 2),
(63, '2020_09_09_032336_create_warehouses_table', 2),
(64, '2020_09_09_050047_create_main_sliders_table', 2),
(65, '2020_09_09_051004_create_product_availabilities_table', 2),
(66, '2020_09_10_062652_create_product_colors_table', 2),
(67, '2020_09_10_062747_create_product_sizes_table', 2),
(68, '2020_09_10_135744_create_shipping_addresses_table', 2),
(69, '2020_09_10_140931_create_user_profiles_table', 2),
(70, '2020_09_10_164248_create_product_category_maps_table', 2),
(71, '2020_09_10_164526_create_product_tag_maps_table', 2),
(72, '2020_09_10_165443_create_product_gallery_maps_table', 2),
(73, '2020_09_12_051554_create_new_arrival_tabs_table', 2),
(74, '2020_09_12_090845_create_product_features_table', 2),
(75, '2020_09_13_140056_create_ecom_supports_table', 2),
(76, '2020_09_16_063333_create_apply_vendors_table', 2),
(77, '2020_09_19_065630_create_orders_table', 2),
(78, '2020_09_19_070446_create_transactions_table', 2),
(79, '2020_09_19_073901_create_order_products_table', 2),
(80, '2020_09_20_010223_create_cart_items_table', 2),
(81, '2020_09_20_055545_create_product_reviews_table', 2),
(82, '2020_09_22_063134_create_countries_table', 2),
(83, '2020_09_22_075214_create_ecom_settings_table', 2),
(84, '2020_09_22_080756_create_currencies_table', 2),
(85, '2020_10_03_075019_create_social_icons_table', 2),
(87, '2020_10_03_113222_create_news_letters_table', 2),
(88, '2020_10_08_122552_create_wishlists_table', 2),
(91, '2020_10_12_072529_create_product_color_maps_table', 2),
(92, '2020_10_12_072539_create_product_size_maps_table', 2),
(93, '2020_10_10_115411_create_mails_table', 3),
(94, '2020_10_10_115424_create_mail_addresses_table', 3),
(95, '2020_10_03_075946_create_site_settings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news_letters`
--

CREATE TABLE `news_letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_arrival_tabs`
--

CREATE TABLE `new_arrival_tabs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `no_of_product` int(11) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` bigint(20) UNSIGNED NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_amount` bigint(20) UNSIGNED NOT NULL,
  `paid_amount` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `seller_id`, `transaction_id`, `payer_id`, `payer_email`, `invoice_number`, `payment_mode`, `payment_method`, `payment_state`, `payment_id`, `total_amount`, `paid_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 3, 0, '4N583744DJ794964Y', 'ZVNCB3GB57T96', 'sb-iobco3429645@personal.example.com', '5f85c26dd01f7', 'INSTANT_TRANSFER', 'paypal', 'completed', 'PAYID-L6C4E6Q3LD76395LR057001F', 1606, 1606, 'New', '2020-10-13 09:11:37', '2020-10-13 09:11:37'),
(2, 6, 5, 0, '8C250176UC341521Y', 'ZVNCB3GB57T96', 'sb-iobco3429645@personal.example.com', '5f85ca4f76e51', 'INSTANT_TRANSFER', 'paypal', 'completed', 'PAYID-L6C4UYA4A99641032313300S', 46463, 46463, 'New', '2020-10-13 09:44:14', '2020-10-13 09:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '1', '2020-10-13 09:11:37', '2020-10-13 09:11:37'),
(2, 1, 4, '1', '2020-10-13 09:11:37', '2020-10-13 09:11:37'),
(3, 2, 9, '1', '2020-10-13 09:44:14', '2020-10-13 09:44:14'),
(4, 2, 10, '1', '2020-10-13 09:44:14', '2020-10-13 09:44:14');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'This is a demo product',
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` decimal(8,2) DEFAULT NULL,
  `new_price` decimal(8,2) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `is_new` tinyint(1) NOT NULL DEFAULT 0,
  `is_feature` tinyint(1) NOT NULL DEFAULT 0,
  `allow_review` tinyint(1) NOT NULL DEFAULT 1,
  `show_on_home` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) DEFAULT NULL,
  `availability_id` int(11) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `size_id` bigint(20) DEFAULT NULL,
  `color_id` bigint(20) DEFAULT NULL,
  `available_start_date` date DEFAULT NULL,
  `available_end_date` date DEFAULT NULL,
  `is_inventory` tinyint(1) NOT NULL DEFAULT 0,
  `inventory_qty` bigint(20) DEFAULT NULL,
  `minimum_inventory_qty` int(11) DEFAULT NULL,
  `notify_low_inventory` tinyint(1) DEFAULT NULL,
  `warehouse_id` bigint(20) DEFAULT NULL,
  `shipping_charge` double(8,2) NOT NULL DEFAULT 0.00,
  `show_availability` tinyint(1) NOT NULL DEFAULT 0,
  `minimum_cart_qty` int(11) DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_seo` tinyint(1) NOT NULL DEFAULT 0,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `short_description`, `slug`, `description`, `sku`, `old_price`, `new_price`, `is_published`, `is_new`, `is_feature`, `allow_review`, `show_on_home`, `user_id`, `availability_id`, `brand_id`, `size_id`, `color_id`, `available_start_date`, `available_end_date`, `is_inventory`, `inventory_qty`, `minimum_inventory_qty`, `notify_low_inventory`, `warehouse_id`, `shipping_charge`, `show_availability`, `minimum_cart_qty`, `featured_image`, `allow_seo`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Summar And Summar Man \'S Coat  Design Of Pure Color Warm Men \'S Cotton Padded Coat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'summar-t-shirt-copy', '&lt;p&gt;&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;h2 style=\"margin:0px 0px 10px;padding:0px;font-weight:400;font-family:DauphinPlain;font-size:24px;line-height:24px;background-color:#ffffff;\"&gt;Why do we use it?&lt;/h2&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;le content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, some&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 's_ert', '50.00', '30.00', 1, 0, 0, 1, 1, 1, 2, 1, NULL, NULL, '2020-10-12', '2020-10-21', 1, 100, 1, 0, 2, 2.00, 1, NULL, 'uploads/products/u_1/October_2020/13/1602585154_1.jpg', 1, 'adf, asdf, afd,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '2020-10-13 04:32:34', '2020-10-13 09:36:32'),
(2, 'unknown printer took a galley of type and scrambled it to make a type specimen book. Copy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'unknown-printer-took-a-galley-of-type-and-scrambled-it-to-make-a-type-specimen-book-copy', '&lt;p&gt;&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;h2 style=\"margin:0px 0px 10px;padding:0px;font-weight:400;font-family:DauphinPlain;font-size:24px;line-height:24px;background-color:#ffffff;\"&gt;Why do we use it?&lt;/h2&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;le content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, some&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 's_ert', '50.00', '30.00', 1, 0, 0, 1, 1, 1, 2, 5, NULL, NULL, '2020-10-12', '2020-10-21', 1, 100, 1, 0, 2, 2.00, 1, NULL, 'uploads/products/u_1/October_2020/13/1602587898_mzz28303_black_xl.jpg', 1, 'adf, asdf, afd,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '2020-10-13 05:18:18', '2020-10-13 09:37:09'),
(3, 'Going to use a passage of Lorem Ipsum Copy', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source', 'going-to-use-a-passage-of-lorem-ipsum-copy', '&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', 'WT_TV_24', '8500.00', '800.00', 1, 0, 0, 1, 1, 1, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602588068_7.jpg', 1, 'adf, asdf, afd,', 'afdads adsf adsf asdf', '2020-10-13 05:21:09', '2020-10-13 05:34:35'),
(4, 'Going to use a passage of Lorem Ipsum Copy Copy', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source', 'going-to-use-a-passage-of-lorem-ipsum-copy-copy', '&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', 'WT_TV_24', '8500.00', '800.00', 1, 0, 0, 1, 1, 1, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602588900_67.jpg', 1, 'adf, asdf, afd,', 'afdads adsf adsf asdf', '2020-10-13 05:34:41', '2020-10-13 05:35:01'),
(5, 'unknown printer took a galley of type and scrambled it to make a type specimen book. Copy Copy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'unknown-printer-took-a-galley-of-type-and-scrambled-it-to-make-a-type-specimen-book-copy-copy', '&lt;p&gt;&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;h2 style=\"margin:0px 0px 10px;padding:0px;font-weight:400;font-family:DauphinPlain;font-size:24px;line-height:24px;background-color:#ffffff;\"&gt;Why do we use it?&lt;/h2&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;le content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, some&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 's_ert', '50.00', '30.00', 1, 0, 0, 1, 1, 1, 2, 3, NULL, NULL, '2020-10-12', '2020-10-21', 1, 100, 1, 0, 2, 2.00, 1, NULL, 'uploads/products/u_1/October_2020/13/1602588920_5.jpg', 1, 'adf, asdf, afd,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '2020-10-13 05:35:20', '2020-10-13 09:36:47'),
(6, 'discovered the undoubtable source Copy ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source', 'discovered-the-undoubtable-source-copy', '&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', 'WT_TV_24', '700.00', '700.00', 1, 0, 0, 1, 1, 1, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602588958_56.jpg', 1, 'adf, asdf, afd,', 'afdads adsf adsf asdf', '2020-10-13 05:35:59', '2020-10-13 05:35:59'),
(7, 'Hampden-Sydney College in Virginia Copy ', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source', 'hampden-sydney-college-in-virginia-copy', '&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', 'WT_TV_24', '780.00', '800.00', 1, 0, 0, 1, 1, 1, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602589007_8.jpg', 1, 'adf, asdf, afd,', 'afdads adsf adsf asdf', '2020-10-13 05:36:48', '2020-10-13 05:36:48'),
(8, 'There are many variations of passages Copy', 'the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look eve', 'there-are-many-variations-of-passages-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum&lt;/span&gt;', '456dffgh', '454.00', '800.00', 1, 0, 0, 1, 1, 2, NULL, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2.00, 0, NULL, 'uploads/products/u_2/October_2020/13/1602590738_1601722785_3.jpg', 0, NULL, NULL, '2020-10-13 06:05:38', '2020-10-13 06:06:42'),
(9, 'Randomised words which don\' Copy ', 'the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look eve', 'randomised-words-which-don-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum&lt;/span&gt;', '456dffgh', '454.00', '800.00', 1, 0, 0, 1, 1, 2, NULL, 3, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2.00, 0, NULL, 'uploads/products/u_2/October_2020/13/1602591408_1601836666_1601722556_5.jpg', 0, NULL, NULL, '2020-10-13 06:16:48', '2020-10-13 06:16:48'),
(10, 'Where does it come from Copy ', 'years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil)', 'where-does-it-come-from-copy', '&lt;p style=\"margin-bottom:15px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.&lt;/p&gt;&lt;p style=\"margin-bottom:15px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/p&gt;', '567yrty', '5656.00', '45656.00', 1, 0, 0, 1, 1, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 5.00, 0, NULL, 'uploads/products/u_2/October_2020/13/1602591814_1.jpg', 0, NULL, NULL, '2020-10-13 06:23:35', '2020-10-13 06:23:35'),
(11, 'f you use this site regularly and would like Copy ', 'e 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into e', 'f-you-use-this-site-regularly-and-would-like-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by acci&lt;/span&gt;', 'dghrty', '4564.00', '4545.00', 1, 0, 0, 1, 1, 3, NULL, 5, NULL, NULL, '2020-09-29', NULL, 0, NULL, NULL, NULL, NULL, 4.00, 0, NULL, 'uploads/products/u_3/October_2020/13/1602592047_54.jpg', 0, NULL, NULL, '2020-10-13 06:27:27', '2020-10-13 06:27:27'),
(12, 'Rrandomised words which Copy ', 'e 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into e', 'rrandomised-words-which-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by acci&lt;/span&gt;', 'dghrty', '4564.00', '4545.00', 1, 0, 0, 1, 1, 3, NULL, 5, NULL, NULL, '2020-09-29', NULL, 0, NULL, NULL, NULL, NULL, 4.00, 0, NULL, 'uploads/products/u_3/October_2020/13/1602592089_5.jpg', 0, NULL, NULL, '2020-10-13 06:28:10', '2020-10-13 06:28:10'),
(13, 'ter took a galley of type and scrambled it to make a Copy ', 'e 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into e', 'ter-took-a-galley-of-type-and-scrambled-it-to-make-a-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by acci&lt;/span&gt;', 'dghrty', '4564.00', '4545.00', 1, 0, 0, 1, 1, 3, NULL, 5, NULL, NULL, '2020-09-29', NULL, 0, NULL, NULL, NULL, NULL, 4.00, 0, NULL, 'uploads/products/u_3/October_2020/13/1602592116_56.jpg', 0, NULL, NULL, '2020-10-13 06:28:36', '2020-10-13 06:28:36'),
(14, 'discovered the undoubtable Copy ', 'e 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into e', 'discovered-the-undoubtable-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by acci&lt;/span&gt;', 'dghrty', '445.00', '544.00', 1, 0, 0, 1, 1, 3, NULL, 5, NULL, NULL, '2020-09-29', NULL, 0, NULL, NULL, NULL, NULL, 4.00, 0, NULL, 'uploads/products/u_3/October_2020/13/1602592159_2.jpg', 0, NULL, NULL, '2020-10-13 06:29:19', '2020-10-13 06:29:19'),
(15, 'It was popularised Copy ', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'it-was-popularised-copy', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'fgh756', '576.00', '766.00', 1, 0, 0, 1, 1, 4, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 6.00, 0, NULL, 'uploads/products/u_4/October_2020/13/1602592507_1602488980_1601724145_4.jpg', 0, NULL, NULL, '2020-10-13 06:35:07', '2020-10-13 06:35:07'),
(16, 'sometimes on purpos Copy ', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'sometimes-on-purpos-copy', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'fgh756', '546.00', '446.00', 1, 0, 0, 1, 1, 4, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 6.00, 0, NULL, 'uploads/products/u_4/October_2020/13/1602592565_1601724308_2.jpg', 0, NULL, NULL, '2020-10-13 06:36:05', '2020-10-13 06:36:05'),
(17, 'predefined chunks as necessary Copy', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'predefined-chunks-as-necessary-copy', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'fgh756', '546.00', '446.00', 1, 0, 0, 1, 1, 4, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 6.00, 0, NULL, 'uploads/products/u_4/October_2020/13/1602592596_1601724178_3.jpg', 0, NULL, NULL, '2020-10-13 06:36:37', '2020-10-13 06:37:41'),
(18, 'The standard chunk', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'sometimes-on-purpos-copy-copy', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'fgh756', '546.00', '446.00', 1, 0, 0, 1, 1, 4, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 6.00, 0, NULL, 'uploads/products/u_4/October_2020/13/1602592698_1601724308_2.jpg', 0, NULL, NULL, '2020-10-13 06:36:48', '2020-10-13 06:38:18'),
(19, 'comes from a line in section', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'predefined-chunks-as-necessary-copy-copy', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'fgh756', '546.00', '446.00', 1, 0, 0, 1, 1, 4, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 6.00, 0, NULL, 'uploads/products/u_4/October_2020/13/1602592729_1601722130_2.jpg', 0, NULL, NULL, '2020-10-13 06:37:17', '2020-10-13 06:38:49'),
(20, 'This book is a treatise on the theory of ethics Copy ', 'Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable', 'this-book-is-a-treatise-on-the-theory-of-ethics-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very&amp;nbsp;&lt;/span&gt;', 'dgf45', '345.00', '233.00', 1, 0, 0, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602593027_1601724494_7.jpg', 0, NULL, NULL, '2020-10-13 06:43:47', '2020-10-13 06:43:47'),
(21, 'This book is a treatise on the theory of ethics Copy Copy ', 'Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable', 'this-book-is-a-treatise-on-the-theory-of-ethics-copy-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very&amp;nbsp;&lt;/span&gt;', 'dgf45', '345.00', '233.00', 1, 0, 0, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602593336_1.jpg', 0, NULL, NULL, '2020-10-13 06:48:56', '2020-10-13 06:48:56'),
(22, 'Assus Gamming Laptop Copy ', 'Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable', 'assus-gamming-laptop-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very&amp;nbsp;&lt;/span&gt;', 'dgf45', '900.00', '780.00', 1, 0, 0, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602593380_3.jpg', 0, NULL, NULL, '2020-10-13 06:49:40', '2020-10-13 06:49:40'),
(23, 'Assus Gamming Laptop HD Copy ', 'Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable', 'assus-gamming-laptop-hd-copy', '&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very&amp;nbsp;&lt;/span&gt;', 'dgf45', '800.00', '880.00', 1, 0, 0, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, 0, NULL, 'uploads/products/u_1/October_2020/13/1602593429_2.jpg', 0, NULL, NULL, '2020-10-13 06:50:30', '2020-10-13 06:50:30'),
(24, 'Summar And Summar Man \'S Coat Copy ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'summar-and-summar-man-s-coat-copy', '&lt;p&gt;&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;h2 style=\"margin:0px 0px 10px;padding:0px;font-weight:400;font-family:DauphinPlain;font-size:24px;line-height:24px;background-color:#ffffff;\"&gt;Why do we use it?&lt;/h2&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;le content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, some&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 's_ert', '50.00', '30.00', 1, 0, 0, 1, 1, 1, 2, 3, NULL, NULL, '2020-10-12', '2020-10-21', 1, 100, 1, 0, 2, 2.00, 1, NULL, 'uploads/products/u_1/October_2020/13/1602593573_1.jpg', 1, 'adf, asdf, afd,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '2020-10-13 06:52:53', '2020-10-13 06:52:53'),
(25, 'Iphone new model', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'iphone-new-model', '&lt;p&gt;&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;h2 style=\"margin:0px 0px 10px;padding:0px;font-weight:400;font-family:DauphinPlain;font-size:24px;line-height:24px;background-color:#ffffff;\"&gt;Why do we use it?&lt;/h2&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;le content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, some&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 's_ert', '50.00', '30.00', 1, 0, 0, 1, 1, 1, 2, 3, NULL, NULL, '2020-10-12', '2020-10-21', 1, 100, 1, 0, 2, 2.00, 1, NULL, 'uploads/products/u_1/October_2020/13/1602593790_3.jpg', 1, 'adf, asdf, afd,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '2020-10-13 06:56:00', '2020-10-13 06:56:30'),
(26, 'Iphone new model Copy ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'iphone-new-model-copy', '&lt;p&gt;&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;&lt;h2 style=\"margin:0px 0px 10px;padding:0px;font-weight:400;font-family:DauphinPlain;font-size:24px;line-height:24px;background-color:#ffffff;\"&gt;Why do we use it?&lt;/h2&gt;&lt;p&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;le content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, some&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 's_ert', '80.00', '80.00', 1, 0, 0, 1, 1, 1, 2, 3, NULL, NULL, '2020-10-12', '2020-10-21', 1, 100, 1, 0, 2, 2.00, 1, NULL, 'uploads/products/u_1/October_2020/13/1602593827_4.jpg', 1, 'adf, asdf, afd,', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '2020-10-13 06:57:07', '2020-10-13 06:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_availabilities`
--

CREATE TABLE `product_availabilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_availabilities`
--

INSERT INTO `product_availabilities` (`id`, `name`, `days`, `created_at`, `updated_at`) VALUES
(1, 'Only for 1 Week', 7, '2020-10-13 03:36:28', '2020-10-13 03:36:28'),
(2, '5 Days', 5, '2020-10-13 03:36:43', '2020-10-13 03:36:43'),
(3, '15 Days', 15, '2020-10-13 03:37:08', '2020-10-13 03:37:08'),
(4, '3 Days Only', 3, '2020-10-13 03:37:22', '2020-10-13 03:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`id`, `user_id`, `name`, `image`, `is_show`, `created_at`, `updated_at`) VALUES
(1, 1, 'Samsung', 'uploads/brands/October_2020/13/1602581643_1599565781_samsung.png', 1, '2020-10-13 03:27:20', '2020-10-13 03:34:03'),
(2, 1, 'Toshiba', 'uploads/brands/October_2020/13/1602581661_1599563751_roshiba.jpg', 1, '2020-10-13 03:27:45', '2020-10-13 03:34:21'),
(3, 1, 'Nokia', 'uploads/brands/October_2020/13/1602581673_1599565959_nokia.png', 1, '2020-10-13 03:28:16', '2020-10-13 03:34:33'),
(5, 2, 'Vivo', 'uploads/brands/October_2020/13/1602591103_1599970067_bg.jpg', 1, '2020-10-13 06:11:43', '2020-10-13 06:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand_category_maps`
--

CREATE TABLE `product_brand_category_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_brand_category_maps`
--

INSERT INTO `product_brand_category_maps` (`id`, `cat_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(6, 1, 1, '2020-10-13 03:34:03', '2020-10-13 03:34:03'),
(7, 2, 1, '2020-10-13 03:34:03', '2020-10-13 03:34:03'),
(8, 4, 1, '2020-10-13 03:34:03', '2020-10-13 03:34:03'),
(9, 1, 2, '2020-10-13 03:34:21', '2020-10-13 03:34:21'),
(10, 1, 3, '2020-10-13 03:34:33', '2020-10-13 03:34:33'),
(15, 1, 5, '2020-10-13 06:11:43', '2020-10-13 06:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_top_menu` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `user_id`, `category_name`, `slug`, `is_top_menu`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Male', 'male', 1, '2020-10-13 03:20:03', '2020-10-13 03:20:03'),
(2, 0, 1, 'Female', 'female', 1, '2020-10-13 03:25:24', '2020-10-13 03:25:24'),
(3, 0, 1, 'Kids', 'kids', 1, '2020-10-13 03:25:34', '2020-10-13 03:25:34'),
(4, 0, 1, 'Others', 'others', 1, '2020-10-13 03:25:43', '2020-10-13 03:25:50'),
(6, 0, 2, 'Laptops', 'laptops', 0, '2020-10-13 06:09:26', '2020-10-13 06:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_maps`
--

CREATE TABLE `product_category_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category_maps`
--

INSERT INTO `product_category_maps` (`id`, `cat_id`, `product_id`, `is_published`, `created_at`, `updated_at`) VALUES
(15, 1, 3, 1, '2020-10-13 05:34:35', '2020-10-13 05:34:35'),
(17, 1, 4, 1, '2020-10-13 05:35:01', '2020-10-13 05:35:01'),
(19, 1, 6, 1, '2020-10-13 05:35:59', '2020-10-13 05:35:59'),
(20, 1, 7, 1, '2020-10-13 05:36:48', '2020-10-13 05:36:48'),
(22, 2, 8, 1, '2020-10-13 06:06:42', '2020-10-13 06:06:42'),
(23, 2, 9, 1, '2020-10-13 06:16:48', '2020-10-13 06:16:48'),
(24, 2, 10, 1, '2020-10-13 06:23:36', '2020-10-13 06:23:36'),
(25, 2, 11, 1, '2020-10-13 06:27:28', '2020-10-13 06:27:28'),
(26, 2, 12, 1, '2020-10-13 06:28:10', '2020-10-13 06:28:10'),
(27, 2, 13, 1, '2020-10-13 06:28:37', '2020-10-13 06:28:37'),
(28, 2, 14, 1, '2020-10-13 06:29:20', '2020-10-13 06:29:20'),
(29, 3, 15, 1, '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(30, 3, 16, 1, '2020-10-13 06:36:05', '2020-10-13 06:36:05'),
(34, 3, 17, 1, '2020-10-13 06:37:41', '2020-10-13 06:37:41'),
(35, 3, 18, 1, '2020-10-13 06:38:18', '2020-10-13 06:38:18'),
(36, 3, 19, 1, '2020-10-13 06:38:49', '2020-10-13 06:38:49'),
(37, 4, 20, 1, '2020-10-13 06:43:47', '2020-10-13 06:43:47'),
(38, 4, 21, 1, '2020-10-13 06:48:56', '2020-10-13 06:48:56'),
(39, 4, 22, 1, '2020-10-13 06:49:40', '2020-10-13 06:49:40'),
(40, 4, 23, 1, '2020-10-13 06:50:30', '2020-10-13 06:50:30'),
(41, 4, 24, 1, '2020-10-13 06:52:54', '2020-10-13 06:52:54'),
(43, 4, 25, 1, '2020-10-13 06:56:30', '2020-10-13 06:56:30'),
(44, 4, 26, 1, '2020-10-13 06:57:07', '2020-10-13 06:57:07'),
(47, 1, 1, 1, '2020-10-13 09:36:32', '2020-10-13 09:36:32'),
(48, 1, 5, 1, '2020-10-13 09:36:47', '2020-10-13 09:36:47'),
(49, 1, 2, 1, '2020-10-13 09:37:09', '2020-10-13 09:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `user_id`, `color`, `created_at`, `updated_at`) VALUES
(1, 1, 'Red', '2020-10-13 03:40:29', '2020-10-13 03:40:29'),
(2, 1, 'Green', '2020-10-13 03:40:36', '2020-10-13 03:40:36'),
(3, 1, 'Blue', '2020-10-13 03:40:42', '2020-10-13 03:40:42'),
(4, 1, 'Pink', '2020-10-13 03:40:50', '2020-10-13 03:40:50'),
(5, 1, 'Yellow', '2020-10-13 03:40:57', '2020-10-13 03:40:57'),
(6, 1, 'White', '2020-10-13 03:41:03', '2020-10-13 03:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_color_maps`
--

CREATE TABLE `product_color_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_color_maps`
--

INSERT INTO `product_color_maps` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(38, 3, 2, '2020-10-13 05:34:35', '2020-10-13 05:34:35'),
(39, 3, 1, '2020-10-13 05:34:35', '2020-10-13 05:34:35'),
(42, 8, 1, '2020-10-13 06:06:42', '2020-10-13 06:06:42'),
(43, 8, 4, '2020-10-13 06:06:42', '2020-10-13 06:06:42'),
(44, 10, 1, '2020-10-13 06:23:36', '2020-10-13 06:23:36'),
(45, 10, 4, '2020-10-13 06:23:36', '2020-10-13 06:23:36'),
(46, 11, 3, '2020-10-13 06:27:28', '2020-10-13 06:27:28'),
(47, 15, 2, '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(48, 15, 5, '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(49, 20, 1, '2020-10-13 06:43:47', '2020-10-13 06:43:47'),
(53, 1, 1, '2020-10-13 09:36:32', '2020-10-13 09:36:32'),
(54, 5, 4, '2020-10-13 09:36:47', '2020-10-13 09:36:47'),
(55, 2, 5, '2020-10-13 09:37:09', '2020-10-13 09:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_features`
--

CREATE TABLE `product_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `no_of_product` int(11) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery_maps`
--

CREATE TABLE `product_gallery_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `thumb_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_gallery_maps`
--

INSERT INTO `product_gallery_maps` (`id`, `image_url`, `product_id`, `thumb_url`, `created_at`, `updated_at`) VALUES
(5, 'uploads/products/u_1/gallery/October_2020/13/1602586783_mzz28303_black_xl.jpg', 1, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602586783_mzz28303_black_xl.jpg', '2020-10-13 04:59:43', '2020-10-13 04:59:43'),
(6, 'uploads/products/u_1/gallery/October_2020/13/1602586831_1.jpg', 1, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602586830_1.jpg', '2020-10-13 05:00:31', '2020-10-13 05:00:31'),
(7, 'uploads/products/u_1/gallery/October_2020/13/1602588069_7.jpg', 3, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602588069_7.jpg', '2020-10-13 05:21:09', '2020-10-13 05:21:09'),
(8, 'uploads/products/u_1/gallery/October_2020/13/1602588868_7.jpg', 3, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602588867_7.jpg', '2020-10-13 05:34:28', '2020-10-13 05:34:28'),
(9, 'uploads/products/u_1/gallery/October_2020/13/1602588901_67.jpg', 4, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602588901_67.jpg', '2020-10-13 05:35:01', '2020-10-13 05:35:01'),
(10, 'uploads/products/u_1/gallery/October_2020/13/1602588921_5.jpg', 5, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602588920_5.jpg', '2020-10-13 05:35:21', '2020-10-13 05:35:21'),
(11, 'uploads/products/u_1/gallery/October_2020/13/1602588959_67.jpg', 6, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602588959_67.jpg', '2020-10-13 05:35:59', '2020-10-13 05:35:59'),
(12, 'uploads/products/u_1/gallery/October_2020/13/1602589008_8.jpg', 7, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602589008_8.jpg', '2020-10-13 05:36:48', '2020-10-13 05:36:48'),
(13, 'uploads/products/u_2/gallery/October_2020/13/1602590738_1601722785_3.jpg', 8, 'uploads/products/u_2/gallery/thumb/October_2020/13/1602590738_1601722785_3.jpg', '2020-10-13 06:05:38', '2020-10-13 06:05:38'),
(14, 'uploads/products/u_2/gallery/October_2020/13/1602591408_1601836666_1601722556_5.jpg', 9, 'uploads/products/u_2/gallery/thumb/October_2020/13/1602591408_1601836666_1601722556_5.jpg', '2020-10-13 06:16:48', '2020-10-13 06:16:48'),
(15, 'uploads/products/u_2/gallery/October_2020/13/1602591816_1.jpg', 10, 'uploads/products/u_2/gallery/thumb/October_2020/13/1602591815_1.jpg', '2020-10-13 06:23:36', '2020-10-13 06:23:36'),
(16, 'uploads/products/u_3/gallery/October_2020/13/1602592048_54.jpg', 11, 'uploads/products/u_3/gallery/thumb/October_2020/13/1602592047_54.jpg', '2020-10-13 06:27:28', '2020-10-13 06:27:28'),
(17, 'uploads/products/u_3/gallery/October_2020/13/1602592090_5.jpg', 12, 'uploads/products/u_3/gallery/thumb/October_2020/13/1602592090_5.jpg', '2020-10-13 06:28:10', '2020-10-13 06:28:10'),
(18, 'uploads/products/u_3/gallery/October_2020/13/1602592117_56.jpg', 13, 'uploads/products/u_3/gallery/thumb/October_2020/13/1602592116_56.jpg', '2020-10-13 06:28:37', '2020-10-13 06:28:37'),
(19, 'uploads/products/u_3/gallery/October_2020/13/1602592160_2.jpg', 14, 'uploads/products/u_3/gallery/thumb/October_2020/13/1602592159_2.jpg', '2020-10-13 06:29:20', '2020-10-13 06:29:20'),
(20, 'uploads/products/u_4/gallery/October_2020/13/1602592508_1602488980_1601724145_4.jpg', 15, 'uploads/products/u_4/gallery/thumb/October_2020/13/1602592507_1602488980_1601724145_4.jpg', '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(21, 'uploads/products/u_4/gallery/October_2020/13/1602592597_1601724308_2.jpg', 17, 'uploads/products/u_4/gallery/thumb/October_2020/13/1602592597_1601724308_2.jpg', '2020-10-13 06:36:37', '2020-10-13 06:36:37'),
(22, 'uploads/products/u_4/gallery/October_2020/13/1602592608_1601724308_2.jpg', 18, 'uploads/products/u_4/gallery/thumb/October_2020/13/1602592608_1601724308_2.jpg', '2020-10-13 06:36:48', '2020-10-13 06:36:48'),
(23, 'uploads/products/u_4/gallery/October_2020/13/1602592637_1601724178_3.jpg', 19, 'uploads/products/u_4/gallery/thumb/October_2020/13/1602592637_1601724178_3.jpg', '2020-10-13 06:37:17', '2020-10-13 06:37:17'),
(24, 'uploads/products/u_4/gallery/October_2020/13/1602592661_1601724178_3.jpg', 17, 'uploads/products/u_4/gallery/thumb/October_2020/13/1602592661_1601724178_3.jpg', '2020-10-13 06:37:41', '2020-10-13 06:37:41'),
(25, 'uploads/products/u_4/gallery/October_2020/13/1602592729_1601722130_2.jpg', 19, 'uploads/products/u_4/gallery/thumb/October_2020/13/1602592729_1601722130_2.jpg', '2020-10-13 06:38:49', '2020-10-13 06:38:49'),
(26, 'uploads/products/u_1/gallery/October_2020/13/1602593027_1601724494_7.jpg', 20, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602593027_1601724494_7.jpg', '2020-10-13 06:43:47', '2020-10-13 06:43:47'),
(27, 'uploads/products/u_1/gallery/October_2020/13/1602593336_1.jpg', 21, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602593336_1.jpg', '2020-10-13 06:48:56', '2020-10-13 06:48:56'),
(28, 'uploads/products/u_1/gallery/October_2020/13/1602593380_3.jpg', 22, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602593380_3.jpg', '2020-10-13 06:49:40', '2020-10-13 06:49:40'),
(29, 'uploads/products/u_1/gallery/October_2020/13/1602593430_2.jpg', 23, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602593430_2.jpg', '2020-10-13 06:50:30', '2020-10-13 06:50:30'),
(30, 'uploads/products/u_1/gallery/October_2020/13/1602593574_1.jpg', 24, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602593573_1.jpg', '2020-10-13 06:52:54', '2020-10-13 06:52:54'),
(31, 'uploads/products/u_1/gallery/October_2020/13/1602593790_3.jpg', 25, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602593790_3.jpg', '2020-10-13 06:56:30', '2020-10-13 06:56:30'),
(32, 'uploads/products/u_1/gallery/October_2020/13/1602593827_4.jpg', 26, 'uploads/products/u_1/gallery/thumb/October_2020/13/1602593827_4.jpg', '2020-10-13 06:57:07', '2020-10-13 06:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `user_id`, `size`, `created_at`, `updated_at`) VALUES
(1, 1, 'XL', '2020-10-13 03:38:06', '2020-10-13 03:38:06'),
(2, 1, 'L', '2020-10-13 03:38:12', '2020-10-13 03:38:12'),
(3, 1, 'XXL', '2020-10-13 03:38:18', '2020-10-13 03:38:18'),
(4, 1, 'ML', '2020-10-13 03:38:30', '2020-10-13 03:38:30'),
(5, 1, 'Small', '2020-10-13 03:38:49', '2020-10-13 03:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_size_maps`
--

CREATE TABLE `product_size_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size_maps`
--

INSERT INTO `product_size_maps` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(29, 3, 1, '2020-10-13 05:34:35', '2020-10-13 05:34:35'),
(30, 3, 2, '2020-10-13 05:34:35', '2020-10-13 05:34:35'),
(31, 3, 4, '2020-10-13 05:34:35', '2020-10-13 05:34:35'),
(34, 8, 1, '2020-10-13 06:06:42', '2020-10-13 06:06:42'),
(35, 8, 2, '2020-10-13 06:06:42', '2020-10-13 06:06:42'),
(36, 10, 3, '2020-10-13 06:23:36', '2020-10-13 06:23:36'),
(37, 11, 3, '2020-10-13 06:27:28', '2020-10-13 06:27:28'),
(38, 15, 3, '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(39, 15, 2, '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(40, 20, 1, '2020-10-13 06:43:47', '2020-10-13 06:43:47'),
(43, 1, 1, '2020-10-13 09:36:32', '2020-10-13 09:36:32'),
(44, 1, 2, '2020-10-13 09:36:32', '2020-10-13 09:36:32'),
(45, 5, 3, '2020-10-13 09:36:47', '2020-10-13 09:36:47'),
(46, 2, 1, '2020-10-13 09:37:09', '2020-10-13 09:37:09'),
(47, 2, 4, '2020-10-13 09:37:09', '2020-10-13 09:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Top Rated', 1, '2020-10-13 03:34:59', '2020-10-13 03:34:59'),
(2, 'Best Product', 1, '2020-10-13 03:35:08', '2020-10-13 03:35:08'),
(3, 'Best Mobile', 1, '2020-10-13 03:35:17', '2020-10-13 03:35:17'),
(4, 'Pink colour mobile', 1, '2020-10-13 03:35:37', '2020-10-13 03:35:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_tag_maps`
--

CREATE TABLE `product_tag_maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag_maps`
--

INSERT INTO `product_tag_maps` (`id`, `tag_id`, `product_id`, `created_at`, `updated_at`) VALUES
(27, 1, 3, '2020-10-13 05:34:35', '2020-10-13 05:34:35'),
(29, 1, 4, '2020-10-13 05:35:01', '2020-10-13 05:35:01'),
(32, 1, 6, '2020-10-13 05:35:59', '2020-10-13 05:35:59'),
(33, 1, 7, '2020-10-13 05:36:48', '2020-10-13 05:36:48'),
(35, 2, 8, '2020-10-13 06:06:42', '2020-10-13 06:06:42'),
(36, 2, 9, '2020-10-13 06:16:48', '2020-10-13 06:16:48'),
(37, 2, 10, '2020-10-13 06:23:36', '2020-10-13 06:23:36'),
(38, 1, 11, '2020-10-13 06:27:28', '2020-10-13 06:27:28'),
(39, 1, 12, '2020-10-13 06:28:10', '2020-10-13 06:28:10'),
(40, 1, 13, '2020-10-13 06:28:37', '2020-10-13 06:28:37'),
(41, 1, 14, '2020-10-13 06:29:20', '2020-10-13 06:29:20'),
(42, 1, 15, '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(43, 3, 15, '2020-10-13 06:35:08', '2020-10-13 06:35:08'),
(44, 1, 16, '2020-10-13 06:36:05', '2020-10-13 06:36:05'),
(45, 3, 16, '2020-10-13 06:36:05', '2020-10-13 06:36:05'),
(52, 1, 17, '2020-10-13 06:37:41', '2020-10-13 06:37:41'),
(53, 3, 17, '2020-10-13 06:37:41', '2020-10-13 06:37:41'),
(54, 1, 18, '2020-10-13 06:38:18', '2020-10-13 06:38:18'),
(55, 3, 18, '2020-10-13 06:38:18', '2020-10-13 06:38:18'),
(56, 1, 19, '2020-10-13 06:38:49', '2020-10-13 06:38:49'),
(57, 3, 19, '2020-10-13 06:38:49', '2020-10-13 06:38:49'),
(58, 1, 20, '2020-10-13 06:43:47', '2020-10-13 06:43:47'),
(59, 3, 20, '2020-10-13 06:43:47', '2020-10-13 06:43:47'),
(60, 1, 21, '2020-10-13 06:48:56', '2020-10-13 06:48:56'),
(61, 3, 21, '2020-10-13 06:48:56', '2020-10-13 06:48:56'),
(62, 1, 22, '2020-10-13 06:49:40', '2020-10-13 06:49:40'),
(63, 3, 22, '2020-10-13 06:49:40', '2020-10-13 06:49:40'),
(64, 1, 23, '2020-10-13 06:50:30', '2020-10-13 06:50:30'),
(65, 3, 23, '2020-10-13 06:50:30', '2020-10-13 06:50:30'),
(66, 2, 24, '2020-10-13 06:52:54', '2020-10-13 06:52:54'),
(67, 1, 24, '2020-10-13 06:52:54', '2020-10-13 06:52:54'),
(70, 2, 25, '2020-10-13 06:56:30', '2020-10-13 06:56:30'),
(71, 1, 25, '2020-10-13 06:56:30', '2020-10-13 06:56:30'),
(72, 2, 26, '2020-10-13 06:57:07', '2020-10-13 06:57:07'),
(73, 1, 26, '2020-10-13 06:57:07', '2020-10-13 06:57:07'),
(78, 2, 1, '2020-10-13 09:36:32', '2020-10-13 09:36:32'),
(79, 1, 1, '2020-10-13 09:36:32', '2020-10-13 09:36:32'),
(80, 2, 5, '2020-10-13 09:36:47', '2020-10-13 09:36:47'),
(81, 1, 5, '2020-10-13 09:36:47', '2020-10-13 09:36:47'),
(82, 2, 2, '2020-10-13 09:37:09', '2020-10-13 09:37:09'),
(83, 1, 2, '2020-10-13 09:37:09', '2020-10-13 09:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`id`, `user_id`, `title`, `name`, `email`, `phone`, `line1`, `line2`, `postcode`, `state`, `city`, `country`, `describe_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'Line 1 (34534)', 'Super Admin', 'superadmin@gmail.com', '(454) 545-4455', 'Line 1', 'Line 2', 34534, '', '', '', 'Give us your full location address so we can find you and deliver your order accurately.', '2020-10-13 03:03:06', '2020-10-13 03:03:06'),
(3, 6, 'shipping line 1 (454)', 'Customar', 'customer@gmail.com', '(456) 456-4565', 'shipping line 1 update', 'shipping line 2  update', 45445, 'SD', 'shipping city  update', '', 'sdfsfdg sfdg  update', '2020-10-13 07:40:23', '2020-10-13 07:51:05'),
(5, 6, 'we (5657)', 'Customar', 'customer@gmail.com', '(456) 456-4565', 'we', 'uiui', 5657, '', '', '', 'zcxv zxc z zxcv', '2020-10-13 08:32:05', '2020-10-13 08:32:05'),
(6, 6, 'l1 (87654)', 'Customar', 'customer@gmail.com', '(456) 456-4565', 'l1', 'l2', 87654, 'MT', 'ct', NULL, 'fl', '2020-10-13 08:33:49', '2020-10-13 08:33:49');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `name`, `email`, `phone`, `line1`, `line2`, `postcode`, `state`, `city`, `address`, `logo_url`, `description`, `created_at`, `updated_at`) VALUES
(1, 'HOBO', 'hobo@gmail.com', '(767) 676-7676', 'line 1', 'line 2', 45454, 'IA', 'City', 'line 1, uk', 'uploads/e-com/site_setting/October_2020/13/1602605498_logo-blue.png', NULL, '2020-10-13 15:55:05', '2020-10-13 10:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `admin_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `user_type`, `email_verified_at`, `password`, `is_active`, `admin_comment`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', NULL, 'Super-admin', NULL, '$2y$10$6WPNRf8ciOejP3JkDsxgueXX8Ec9pt4nuC.CtgIAXiOpIOylTgfaK', 1, NULL, NULL, '2020-10-13 02:58:34', '2020-10-13 03:17:48'),
(2, 'Seller Account', 'seller@gmail.com', NULL, 'Vendor', NULL, '$2y$10$Or1Oy9TjZPLL/43yxUFApeECbkHDSvT/TFEc29xNDvOJZAmExH5Ri', 1, NULL, NULL, '2020-10-13 05:54:44', '2020-10-13 05:58:39'),
(3, 'New Seller', 'seller2@gmail.com', NULL, 'Vendor', NULL, '$2y$10$.iroJSsUdRAerXWtzOfJ2uU33zM9fKVkvHHX4cxdq1jiPgqvvvpGe', 1, NULL, NULL, '2020-10-13 06:24:42', '2020-10-13 06:26:14'),
(4, 'Third Seller', 'selle3@gmail.com', NULL, 'Vendor', NULL, '$2y$10$vDpK9Uo/AMVjAEeWP9NJ2OufqxrPrggtTi95NdWr5.zK7KKLlxRa.', 1, NULL, NULL, '2020-10-13 06:30:48', '2020-10-13 06:33:11'),
(5, 'Admin User', 'admin@gmail.com', NULL, 'Super-admin', NULL, '$2y$10$6yry658hxVVHrWzsT270sus4M9JgpSUzBYMcmWI8TUqBXyoWdoKEi', 1, NULL, NULL, '2020-10-13 06:58:27', '2020-10-13 07:03:11'),
(6, 'Customar', 'customer@gmail.com', NULL, 'customer', NULL, '$2y$10$gah1hHgeenLE3P04tnia0eUDh6dzPmcoaSn0jGL7YXgIH90XPEeY2', 1, NULL, NULL, '2020-10-13 07:04:27', '2020-10-13 07:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `house` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `avatar`, `secondary_email`, `dob`, `nid`, `nid_image`, `phone`, `house`, `road`, `line1`, `line2`, `postcode`, `state`, `city`, `country`, `describe_address`, `created_at`, `updated_at`) VALUES
(1, 1, 'user/profiles/avatar/October_2020/13/1602579591_wissenschaftler-von-healy.jpg', 'superadmin@gmail.com', '2020-10-22', '34534534', 'user/profiles/nid/October_2020/13/1602579565_wissenschaftler-von-healy.jpg', '(454) 545-4455', NULL, NULL, 'ert e', 'fgh e', 34534, 'CA', 'ct u', NULL, 'sfgsfsfg', '2020-10-13 02:58:34', '2020-10-13 08:45:38'),
(2, 2, 'user/profiles/avatar/October_2020/13/1602590132_1601832702_black_man_impatient.jpg', 'seller@gmail.com', '2020-10-15', '5674674657', 'user/profiles/nid/October_2020/13/1602590123_1601835518_ecommerce-survey-banner-1.jpg', '(456) 456-4565', NULL, NULL, '467', '467', 467, NULL, NULL, NULL, '467467', '2020-10-13 05:54:44', '2020-10-13 05:55:32'),
(3, 3, 'user/profiles/avatar/October_2020/13/1602591928_1.jpg', 'seller2@gmail.com', '2020-10-15', '345345345', 'user/profiles/nid/October_2020/13/1602591918_1.jpg', '(567) 567-6767', NULL, NULL, 'twret', 'wrtwr', 4345, NULL, NULL, NULL, 'Give us your full location address so we can find you and deliver your order accurately.', '2020-10-13 06:24:42', '2020-10-13 06:25:28'),
(4, 4, 'user/profiles/avatar/October_2020/13/1602592261_54.jpg', 'seller3#gmail.com', '2020-09-28', 'adsfw345', 'user/profiles/nid/October_2020/13/1602592343_54.jpg', '(934) 534-5345', NULL, NULL, 'adfs35345', 'adfs4545', 43534, NULL, NULL, NULL, 'Give us your full location address so we can find you and deliver your order accurately.', '2020-10-13 06:30:48', '2020-10-13 06:32:23'),
(5, 5, 'user/profiles/avatar/October_2020/13/1602593930_1602489690_1601724145_4.jpg', 'admin@gmail.com', '2020-10-20', '435345345', 'user/profiles/nid/October_2020/13/1602593963_1602489690_1601724145_4.jpg', '(456) 456-4566', NULL, NULL, 'fghdgf', 'dghd', 45645, NULL, NULL, NULL, 'dghdgh dh dgh', '2020-10-13 06:58:27', '2020-10-13 06:59:23'),
(6, 6, NULL, NULL, NULL, NULL, NULL, '(456) 456-4565', NULL, NULL, 'profile line 1 update', 'profile line 2 update', 45454, 'DE', 'profile city update', NULL, 'Give us your full location address so we can find you and deliver your order accurately. update', '2020-10-13 07:04:28', '2020-10-13 09:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `user_id`, `name`, `location`, `created_at`, `updated_at`) VALUES
(1, 1, 'USA', '254, washinton, united kingdom', '2020-10-13 03:35:52', '2020-10-13 03:35:52'),
(2, 1, 'U.A.E', '$brand->image = $fileURL;', '2020-10-13 03:36:08', '2020-10-13 03:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `session_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 4, 6, NULL, 1, '2020-10-13 10:22:24', '2020-10-13 10:22:24'),
(2, 6, 6, NULL, 1, '2020-10-13 10:22:27', '2020-10-13 10:22:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_vendors`
--
ALTER TABLE `apply_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_settings`
--
ALTER TABLE `ecom_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_supports`
--
ALTER TABLE `ecom_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_addresses`
--
ALTER TABLE `mail_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_sliders`
--
ALTER TABLE `main_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letters`
--
ALTER TABLE `news_letters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_letters_email_unique` (`email`);

--
-- Indexes for table `new_arrival_tabs`
--
ALTER TABLE `new_arrival_tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_availabilities`
--
ALTER TABLE `product_availabilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brand_category_maps`
--
ALTER TABLE `product_brand_category_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_categories_slug_unique` (`slug`);

--
-- Indexes for table `product_category_maps`
--
ALTER TABLE `product_category_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color_maps`
--
ALTER TABLE `product_color_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_features`
--
ALTER TABLE `product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_gallery_maps`
--
ALTER TABLE `product_gallery_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size_maps`
--
ALTER TABLE `product_size_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tag_maps`
--
ALTER TABLE `product_tag_maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_profiles_secondary_email_unique` (`secondary_email`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_vendors`
--
ALTER TABLE `apply_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecom_settings`
--
ALTER TABLE `ecom_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecom_supports`
--
ALTER TABLE `ecom_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mail_addresses`
--
ALTER TABLE `mail_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `main_sliders`
--
ALTER TABLE `main_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `news_letters`
--
ALTER TABLE `news_letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `new_arrival_tabs`
--
ALTER TABLE `new_arrival_tabs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_availabilities`
--
ALTER TABLE `product_availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_brand_category_maps`
--
ALTER TABLE `product_brand_category_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_category_maps`
--
ALTER TABLE `product_category_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_color_maps`
--
ALTER TABLE `product_color_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_gallery_maps`
--
ALTER TABLE `product_gallery_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_size_maps`
--
ALTER TABLE `product_size_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_tag_maps`
--
ALTER TABLE `product_tag_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
