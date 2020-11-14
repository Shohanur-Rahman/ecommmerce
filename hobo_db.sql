SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


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
(1, 2, 'z2EvHGYNFY2', 0, 1, '2020-11-01 14:11:50', '2020-11-01 14:11:50'),
(2, 4, 'tvuj3vdSzf4', 1, 1, '2020-11-01 14:19:06', '2020-11-01 14:31:26'),
(3, 5, 'lPw77LHVON5', 1, 1, '2020-11-01 16:12:38', '2020-11-01 16:13:47');

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

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `user_id`, `product_id`, `quantity`, `size`, `created_at`, `updated_at`) VALUES
(1, 2, 5, 1, NULL, '2020-11-01 17:31:56', '2020-11-01 17:31:56'),
(2, 2, 1, 1, NULL, '2020-11-01 17:32:34', '2020-11-01 17:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `case_categories`
--

CREATE TABLE `case_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_type_id` bigint(20) UNSIGNED NOT NULL,
  `case_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `case_types`
--

CREATE TABLE `case_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `case_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` mediumint(8) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `describe_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `company_number`, `company_img`, `line1`, `line2`, `postcode`, `state`, `city`, `describe_address`, `created_at`, `updated_at`) VALUES
(1, 2, 'Give us your full location address so we can find you and deliver your order accurately.', 'Give us your full location address so we can find you and deliver your order accurately.', '', 'Give us your full location address so we can find yoGive us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find y', 'Give us your full location address so we can find you and deliver your order accurately.', 0, 'South Carolina (SC)', 'Give us your full location address so we can find you and deliver your order accurately.', 'Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.Give us your full location address so we can find you and deliver your order accurately.', '2020-11-01 14:07:00', '2020-11-01 14:07:00'),
(2, 4, 'Nike', '(345) 452-4354', 'uploads/company/Nike/November_2020/01/1604240327_nike.png', 'sdfsfgsfg', 'sfdgsdfg', 34345, 'OH', 'sdfgsfd', 'sfgsfdg', '2020-11-01 14:18:47', '2020-11-01 14:18:47'),
(3, 5, 'Polo', '(234) 234-2344', 'uploads/company/Polo/November_2020/01/1604247143_images.jpg', 'sdfg', 'sfdg', 34345, 'NJ', 'sdfg', 'sdfsdfg', '2020-11-01 16:12:23', '2020-11-01 16:12:23');

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
-- Table structure for table `customer_supports`
--

CREATE TABLE `customer_supports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_category_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Table structure for table `delivery_times`
--

CREATE TABLE `delivery_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_times`
--

INSERT INTO `delivery_times` (`id`, `name`, `day`, `created_at`, `updated_at`) VALUES
(1, '7 Days', 7, '2020-11-01 16:36:56', '2020-11-01 16:36:56'),
(2, '5 Days', 5, '2020-11-01 16:37:10', '2020-11-01 16:37:10'),
(3, '15 Days', 15, '2020-11-01 16:37:26', '2020-11-01 16:37:26'),
(4, '5 to 9 Days', 9, '2020-11-01 16:37:47', '2020-11-01 16:37:47');

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
(1, NULL, 1, 'Summer collections for men', 'The Buttons extension for DataTables provides a common set of options', 'uploads/sliders/mainSlider/November_2020/01/1604245080_1602589072_160183~1.PNG', '2020-11-01 15:38:00', '2020-11-01 15:38:00'),
(2, NULL, 1, 'API methods and styling to display buttons', 'API methods and styling to display buttons on a page that', 'uploads/sliders/mainSlider/November_2020/01/1604245960_c10_01_banner_d.jpg', '2020-11-01 15:52:40', '2020-11-01 15:52:40'),
(3, NULL, 2, 'What is Lorem Ipsum', 'Ipsum	Type and scrambled it to make a type sp', 'uploads/sliders/mainSlider/November_2020/01/1604246165_1602589758_1601721490_8.jpeg', '2020-11-01 15:56:05', '2020-11-01 15:56:05'),
(4, NULL, 2, 'Why do we use it', 'making it look like readable English. M', 'uploads/sliders/mainSlider/November_2020/01/1604246187_1602589795_1601833186_fashion-young-african-girl-black-260nw-1420132757.jpg', '2020-11-01 15:56:27', '2020-11-01 15:56:27'),
(5, NULL, 3, 'Where can I get some', 'Lorem Ipsum generators', 'uploads/sliders/mainSlider/November_2020/01/1604246226_1602589828_1601835854_a3bee3890d4039488fabcfd797e02fa6.jpg', '2020-11-01 15:57:06', '2020-11-01 15:57:06'),
(6, NULL, 4, 'If you are going to use a passage', 'The Extremes of Good and Evil) by Cicero', 'uploads/sliders/mainSlider/November_2020/01/1604246264_1602589943_1601832945_carl-f-bucherer-manero-tourbillon-1.jpg', '2020-11-01 15:57:44', '2020-11-01 15:57:44'),
(7, NULL, 4, 'combined with a handful', 'Various versions have evolved', 'uploads/sliders/mainSlider/November_2020/01/1604246344_1602589973_1601832812_maxresdefault.jpg', '2020-11-01 15:59:04', '2020-11-01 15:59:04'),
(8, NULL, 3, 'Summer collections for Kids', 'New  Stylish collections', 'uploads/sliders/mainSlider/November_2020/01/1604246503_Vegas16-1497-Edit-web-1000x700.jpg', '2020-11-01 16:01:43', '2020-11-01 16:01:43');

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
(4, '2020_09_07_134453_create_dashboards_table', 1),
(5, '2020_09_07_141320_create_product_brands_table', 1),
(6, '2020_09_08_072714_create_product_tags_table', 1),
(7, '2020_09_08_114549_create_product_brand_category_maps_table', 1),
(8, '2020_09_08_144202_create_products_table', 1),
(9, '2020_09_08_151007_create_product_categories_table', 1),
(10, '2020_09_09_032336_create_warehouses_table', 1),
(11, '2020_09_09_050047_create_main_sliders_table', 1),
(12, '2020_09_09_051004_create_product_availabilities_table', 1),
(13, '2020_09_10_062652_create_product_colors_table', 1),
(14, '2020_09_10_062747_create_product_sizes_table', 1),
(15, '2020_09_10_135744_create_shipping_addresses_table', 1),
(16, '2020_09_10_140931_create_user_profiles_table', 1),
(17, '2020_09_10_164248_create_product_category_maps_table', 1),
(18, '2020_09_10_164526_create_product_tag_maps_table', 1),
(19, '2020_09_10_165443_create_product_gallery_maps_table', 1),
(20, '2020_09_12_051554_create_new_arrival_tabs_table', 1),
(21, '2020_09_12_090845_create_product_features_table', 1),
(22, '2020_09_13_140056_create_ecom_supports_table', 1),
(23, '2020_09_16_063333_create_apply_vendors_table', 1),
(24, '2020_09_19_065630_create_orders_table', 1),
(25, '2020_09_19_070446_create_transactions_table', 1),
(26, '2020_09_19_073901_create_order_products_table', 1),
(27, '2020_09_20_010223_create_cart_items_table', 1),
(28, '2020_09_20_055545_create_product_reviews_table', 1),
(29, '2020_09_22_063134_create_countries_table', 1),
(30, '2020_09_22_075214_create_ecom_settings_table', 1),
(31, '2020_09_22_080756_create_currencies_table', 1),
(32, '2020_10_03_075019_create_social_icons_table', 1),
(33, '2020_10_03_075946_create_site_settings_table', 1),
(34, '2020_10_03_113222_create_news_letters_table', 1),
(35, '2020_10_08_122552_create_wishlists_table', 1),
(36, '2020_10_10_115411_create_mails_table', 1),
(37, '2020_10_10_115424_create_mail_addresses_table', 1),
(38, '2020_10_12_072529_create_product_color_maps_table', 1),
(39, '2020_10_12_072539_create_product_size_maps_table', 1),
(40, '2020_10_26_143158_create_delivery_times_table', 1),
(41, '2020_10_28_020355_create_social_providers_table', 1),
(42, '2020_10_31_053925_create_companies_table', 1),
(43, '2020_10_31_072515_create_customer_supports_table', 1),
(44, '2020_10_31_074414_create_case_types_table', 1),
(45, '2020_10_31_074454_create_case_categories_table', 1),
(46, '2020_11_01_053441_create_payment_refunds_table', 1);

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
-- Table structure for table `payment_refunds`
--

CREATE TABLE `payment_refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `refund_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refund_from_transaction_fee` decimal(8,2) DEFAULT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `refund_from_received_amount` decimal(8,2) DEFAULT NULL,
  `total_refunded_amount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `delivery_id` bigint(20) UNSIGNED NOT NULL,
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
  `shipping_charge` double(8,2) DEFAULT 0.00,
  `height` double(8,2) DEFAULT 0.00,
  `width` double(8,2) DEFAULT 0.00,
  `weight` double(8,2) DEFAULT 0.00,
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

INSERT INTO `products` (`id`, `delivery_id`, `title`, `short_description`, `slug`, `description`, `sku`, `old_price`, `new_price`, `is_published`, `is_new`, `is_feature`, `allow_review`, `show_on_home`, `user_id`, `availability_id`, `brand_id`, `size_id`, `color_id`, `available_start_date`, `available_end_date`, `is_inventory`, `inventory_qty`, `minimum_inventory_qty`, `notify_low_inventory`, `warehouse_id`, `shipping_charge`, `height`, `width`, `weight`, `show_availability`, `minimum_cart_qty`, `featured_image`, `allow_seo`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 3, 'Summar And Summar Man \'S Coat  Design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'summar-and-summar-man-s-coat-design', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'S11', 230.00, 220.00, 1, 0, 0, 1, 1, 3, NULL, 1, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 5.00, 44.00, 12.00, 0.20, 0, NULL, 'uploads/products/u_3/November_2020/01/1604250739_1602588901_67.jpg', 0, NULL, NULL, '2020-11-01 16:39:17', '2020-11-01 17:12:19'),
(2, 1, 'unknown printer took', 'unknown printer took a galley of type and scrambled it to make a type specimen book. Copy', 'unknown-printer-took', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'S12', 450.00, 430.00, 1, 0, 0, 1, 1, 1, NULL, 8, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 2.00, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/01/1604249404_1602587822_mzz28303_black_xl.jpg', 0, NULL, NULL, '2020-11-01 16:50:04', '2020-11-01 16:50:04'),
(3, 2, 'It was popularised Copy', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'it-was-popularised-copy', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'K_123', 540.00, 510.00, 1, 0, 0, 1, 1, 1, NULL, 7, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 3.00, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/01/1604249543_1602592729_1601722130_2.jpg', 0, NULL, NULL, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(4, 2, 'Sometimes on purpos', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'sometimes-on-purpos', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'K_134', NULL, 765.00, 1, 0, 0, 1, 1, 1, NULL, 8, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 5.00, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/01/1604249640_1602592565_1601724308_2.jpg', 0, NULL, NULL, '2020-11-01 16:54:00', '2020-11-01 16:54:00'),
(5, 2, 'predefined chunks as necessary', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'predefined-chunks-as-necessary', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'k_321', NULL, 800.00, 1, 0, 0, 1, 1, 1, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 4.00, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/01/1604249864_1602592507_1602488980_1601724145_4.jpg', 0, NULL, NULL, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(6, 2, 'The standard chunk', 'but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets', 'the-standard-chunk', '&lt;strong style=\"margin:0px;padding:0px;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;Lorem Ipsum&lt;/strong&gt;&lt;span style=\"font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;text-align:justify;background-color:#ffffff;\"&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;', 'k_323', NULL, 800.00, 1, 0, 0, 1, 1, 1, NULL, 2, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 4.00, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/01/1604250388_1602592596_1601724178_3.jpg', 0, NULL, NULL, '2020-11-01 17:06:28', '2020-11-01 17:08:16'),
(7, 3, 'unknown printer took a galley of typ', 'a type specimen book. Copy', 'unknown-printer-took-a-galley-of-typ', 'unknown printer took a galley of type and scrambled it to make a type specimen book. Copy', '25', 500.00, 500.00, 1, 1, 1, 1, 1, 3, NULL, 7, NULL, NULL, '2020-11-01', '2020-11-28', 0, NULL, NULL, NULL, NULL, 50.00, 100.00, 100.00, 500.00, 1, NULL, 'uploads/products/u_3/November_2020/01/1604250523_1602586517_1.jpg', 0, NULL, NULL, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(8, 2, 'Where does it come from', 'years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil)', 'where-does-it-come-from', '&lt;p style=\"margin-bottom:15px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.&lt;/p&gt;&lt;p style=\"margin-bottom:15px;padding:0px;text-align:justify;font-family:\'Open Sans\', Arial, sans-serif;font-size:14px;background-color:#ffffff;\"&gt;The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&lt;/p&gt;', NULL, 450.00, 410.00, 1, 0, 0, 1, 1, 1, NULL, 4, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0.00, NULL, NULL, NULL, 0, NULL, 'uploads/products/u_1/November_2020/01/1604250623_1602592047_54.jpg', 0, NULL, NULL, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(9, 1, 'unknown printer took a galley', 'unknown printer took a galley unknown printer took a galley', 'unknown-printer-took-a-galley', '&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;unknown printer took a galley&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;unknown printer took a galley&amp;nbsp;&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;unknown printer took a galley&lt;/span&gt;', '50', 400.00, 400.00, 1, 0, 0, 1, 1, 3, NULL, 5, NULL, NULL, '2020-11-01', '2020-12-12', 0, NULL, NULL, NULL, NULL, 0.00, 50.00, 50.00, 100.00, 1, NULL, 'uploads/products/u_3/November_2020/01/1604250807_1602589008_8.jpg', 0, NULL, NULL, '2020-11-01 17:11:40', '2020-11-01 17:13:27'),
(10, 2, 'discovered the undoubtable source', 'discovered the undoubtable source discovered the undoubtable source discovered the undoubtable source discovered the undoubtable source', 'discovered-the-undoubtable-source', '&lt;p&gt;discovered the undoubtable source discovered the undoubtable source discovered the undoubtable source discovered the undoubtable source&lt;/p&gt;&lt;p&gt;discovered the undoubtable source discovered the undoubtable source discovered the undoubtable source discovered the undoubtable source&lt;/p&gt;', '44', 700.00, 700.00, 1, 1, 1, 1, 1, 3, NULL, NULL, NULL, NULL, '2020-11-01', '2020-11-26', 0, NULL, NULL, NULL, NULL, 40.00, 40.00, 40.00, 40.00, 1, NULL, 'uploads/products/u_3/November_2020/01/1604250978_1602588958_56.jpg', 0, NULL, NULL, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(11, 1, 'Rrandomised words which', 'Rrandomised words which  Rrandomised words which Rrandomised words which', 'rrandomised-words-which', '&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;Rrandomised words which&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;Rrandomised words which&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;Rrandomised words which&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;Rrandomised words which&lt;/span&gt;', '99', NULL, 500.00, 1, 1, 1, 1, 1, 3, NULL, 4, NULL, NULL, '2020-11-19', '2020-11-19', 0, NULL, NULL, NULL, NULL, 0.00, NULL, NULL, NULL, 1, NULL, 'uploads/products/u_3/November_2020/01/1604251150_1602592090_5.jpg', 0, NULL, NULL, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(12, 3, 'discovered the undoubtable', 'discovered the undoubtable', 'discovered-the-undoubtable', '&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;discovered the undoubtable&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;discovered the undoubtable&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;discovered the undoubtable&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;discovered the undoubtable&amp;nbsp;&lt;/span&gt;&lt;span style=\"color:#3c4858;font-family:\'Nunito Sans\', sans-serif;font-size:13px;font-weight:600;background-color:#ffffff;\"&gt;discovered the undoubtable&lt;/span&gt;', '34', NULL, 500.00, 1, 1, 1, 1, 1, 3, NULL, 8, NULL, NULL, '2020-11-01', '2020-11-19', 0, NULL, NULL, NULL, NULL, 50.00, NULL, NULL, NULL, 1, NULL, 'uploads/products/u_3/November_2020/01/1604251683_1602592160_2.jpg', 0, NULL, NULL, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(13, 4, 'ter took a galley of type and scrambled it to make', 'ter took a galley of type and scrambled it to make', 'ter-took-a-galley-of-type-and-scrambled-it-to-make', 'ter took a galley of type and scrambled it to make&amp;nbsp; &amp;nbsp;ter took a galley of type and scrambled it to make&amp;nbsp; &amp;nbsp;ter took a galley of type and scrambled it to make&amp;nbsp;&amp;nbsp;', '34', NULL, 400.00, 1, 1, 1, 1, 1, 3, NULL, 4, NULL, NULL, '2020-11-01', '2020-11-19', 0, NULL, NULL, NULL, NULL, 0.00, NULL, NULL, NULL, 1, NULL, 'uploads/products/u_3/November_2020/01/1604251790_1602592117_56.jpg', 0, NULL, NULL, '2020-11-01 17:29:50', '2020-11-01 17:29:50');

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
(1, 1, 'Nike', 'uploads/brands/November_2020/01/1604241267_nike.png', 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(2, 1, 'Gucci', 'uploads/brands/November_2020/01/1604242915_gucci.png', 1, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(3, 1, 'Fashionar', 'uploads/brands/November_2020/01/1604243006_fashion-designers.png', 1, '2020-11-01 15:03:26', '2020-11-01 15:03:26'),
(4, 1, 'Levis', 'uploads/brands/November_2020/01/1604243448_levies.png', 1, '2020-11-01 15:10:48', '2020-11-01 15:10:48'),
(5, 1, 'Hunt Store', 'uploads/brands/November_2020/01/1604243526_hunt-store.png', 1, '2020-11-01 15:12:06', '2020-11-01 15:12:06'),
(7, 3, 'Adidas', 'uploads/brands/November_2020/01/1604245185_images.png', 1, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(8, 3, 'Hatchul', 'uploads/brands/November_2020/01/1604245223_download.png', 1, '2020-11-01 15:40:23', '2020-11-01 15:40:23'),
(9, 3, 'M-Clothing', 'uploads/brands/November_2020/01/1604245349_pngtree-m-clothing-logo-design-template-png-image_4945700.jpg', 1, '2020-11-01 15:41:00', '2020-11-01 15:42:29'),
(10, 3, 'K Fashion', 'uploads/brands/November_2020/01/1604245426_k-fashion.png', 1, '2020-11-01 15:43:46', '2020-11-01 15:43:46'),
(11, 4, 'Polo', 'uploads/brands/November_2020/01/1604245558_images.jpg', 1, '2020-11-01 15:45:58', '2020-11-01 15:45:58');

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
(1, 1, 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(2, 2, 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(3, 3, 1, '2020-11-01 14:34:27', '2020-11-01 14:34:27'),
(4, 1, 2, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(5, 2, 2, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(6, 3, 2, '2020-11-01 15:01:55', '2020-11-01 15:01:55'),
(7, 1, 3, '2020-11-01 15:03:26', '2020-11-01 15:03:26'),
(8, 2, 3, '2020-11-01 15:03:26', '2020-11-01 15:03:26'),
(9, 2, 4, '2020-11-01 15:10:48', '2020-11-01 15:10:48'),
(10, 1, 5, '2020-11-01 15:12:06', '2020-11-01 15:12:06'),
(15, 2, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(16, 1, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(17, 3, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(18, 4, 7, '2020-11-01 15:39:45', '2020-11-01 15:39:45'),
(19, 1, 8, '2020-11-01 15:40:23', '2020-11-01 15:40:23'),
(22, 1, 9, '2020-11-01 15:42:29', '2020-11-01 15:42:29'),
(23, 2, 10, '2020-11-01 15:43:46', '2020-11-01 15:43:46'),
(24, 1, 11, '2020-11-01 15:45:58', '2020-11-01 15:45:58'),
(25, 2, 11, '2020-11-01 15:45:58', '2020-11-01 15:45:58');

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
(1, 0, 1, 'Male', 'male', 1, '2020-11-01 14:32:47', '2020-11-01 14:32:47'),
(2, 0, 1, 'Female', 'female', 1, '2020-11-01 14:33:04', '2020-11-01 14:33:04'),
(3, 0, 1, 'Kids', 'kids', 1, '2020-11-01 14:33:23', '2020-11-01 14:33:23'),
(4, 0, 1, 'Others', 'others', 1, '2020-11-01 14:33:32', '2020-11-01 14:33:32');

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
(2, 1, 2, 1, '2020-11-01 16:50:04', '2020-11-01 16:50:04'),
(3, 3, 3, 1, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(4, 3, 4, 1, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(5, 3, 5, 1, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(7, 3, 6, 1, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(8, 4, 6, 1, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(11, 1, 7, 1, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(12, 2, 8, 1, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(13, 4, 8, 1, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(15, 1, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(16, 4, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(17, 1, 9, 1, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(18, 1, 10, 1, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(19, 2, 11, 1, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(20, 4, 12, 1, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(21, 2, 12, 1, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(22, 2, 13, 1, '2020-11-01 17:29:50', '2020-11-01 17:29:50');

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
(1, 5, 'Yellow', '2020-11-01 16:15:10', '2020-11-01 16:15:10'),
(2, 5, 'White', '2020-11-01 16:15:18', '2020-11-01 16:15:18'),
(3, 5, 'Red', '2020-11-01 16:15:46', '2020-11-01 16:15:46'),
(4, 1, 'Black', '2020-11-01 17:07:22', '2020-11-01 17:07:22');

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
(3, 2, 2, '2020-11-01 16:50:04', '2020-11-01 16:50:04'),
(4, 3, 2, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(5, 4, 2, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(6, 5, 3, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(8, 6, 3, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(11, 7, 2, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(12, 8, 2, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(13, 8, 4, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(15, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(16, 1, 3, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(17, 9, 4, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(18, 10, 2, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(19, 10, 4, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(20, 11, 4, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(21, 12, 4, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(22, 13, 4, '2020-11-01 17:29:50', '2020-11-01 17:29:50');

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
(1, 'uploads/products/u_1/gallery/November_2020/01/1604248757_1602585116_1.jpg', 1, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604248757_1602585116_1.jpg', '2020-11-01 16:39:17', '2020-11-01 16:39:17'),
(2, 'uploads/products/u_1/gallery/November_2020/01/1604249404_1602587822_mzz28303_black_xl.jpg', 2, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604249404_1602587822_mzz28303_black_xl.jpg', '2020-11-01 16:50:04', '2020-11-01 16:50:04'),
(3, 'uploads/products/u_1/gallery/November_2020/01/1604249543_1602592729_1601722130_2.jpg', 3, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604249543_1602592729_1601722130_2.jpg', '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(4, 'uploads/products/u_1/gallery/November_2020/01/1604249641_1602592565_1601724308_2.jpg', 4, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604249640_1602592565_1601724308_2.jpg', '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(5, 'uploads/products/u_1/gallery/November_2020/01/1604249864_1602592507_1602488980_1601724145_4.jpg', 5, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604249864_1602592507_1602488980_1601724145_4.jpg', '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(6, 'uploads/products/u_1/gallery/November_2020/01/1604250388_1602592596_1601724178_3.jpg', 6, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604250388_1602592596_1601724178_3.jpg', '2020-11-01 17:06:28', '2020-11-01 17:06:28'),
(7, 'uploads/products/u_3/gallery/November_2020/01/1604250523_1602586358_1.jpg', 7, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250523_1602586358_1.jpg', '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(8, 'uploads/products/u_3/gallery/November_2020/01/1604250523_1602586517_1.jpg', 7, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250523_1602586517_1.jpg', '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(9, 'uploads/products/u_1/gallery/November_2020/01/1604250623_1602592047_54.jpg', 8, 'uploads/products/u_1/gallery/thumb/November_2020/01/1604250623_1602592047_54.jpg', '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(10, 'uploads/products/u_3/gallery/November_2020/01/1604250700_1602586783_mzz28303_black_xl.jpg', 9, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250700_1602586783_mzz28303_black_xl.jpg', '2020-11-01 17:11:40', '2020-11-01 17:11:40'),
(11, 'uploads/products/u_3/gallery/November_2020/01/1604250739_1602588959_67.jpg', 1, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250739_1602588959_67.jpg', '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(12, 'uploads/products/u_3/gallery/November_2020/01/1604250978_1602588958_56.jpg', 10, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604250978_1602588958_56.jpg', '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(13, 'uploads/products/u_3/gallery/November_2020/01/1604251150_1602592090_5.jpg', 11, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604251150_1602592090_5.jpg', '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(14, 'uploads/products/u_3/gallery/November_2020/01/1604251683_1602592160_2.jpg', 12, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604251683_1602592160_2.jpg', '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(15, 'uploads/products/u_3/gallery/November_2020/01/1604251790_1602592117_56.jpg', 13, 'uploads/products/u_3/gallery/thumb/November_2020/01/1604251790_1602592117_56.jpg', '2020-11-01 17:29:50', '2020-11-01 17:29:50');

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
(1, 4, 'XL', '2020-11-01 16:01:49', '2020-11-01 16:01:49'),
(2, 4, 'L', '2020-11-01 16:02:05', '2020-11-01 16:02:05'),
(3, 4, 'XXL', '2020-11-01 16:02:24', '2020-11-01 16:02:24'),
(4, 4, 'ML', '2020-11-01 16:02:42', '2020-11-01 16:02:42');

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
(3, 2, 1, '2020-11-01 16:50:04', '2020-11-01 16:50:04'),
(4, 3, 2, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(5, 4, 2, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(6, 4, 4, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(7, 5, 2, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(9, 6, 2, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(12, 7, 2, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(13, 7, 3, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(14, 8, 3, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(17, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(18, 1, 3, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(19, 9, 3, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(20, 9, 4, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(21, 11, 3, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(22, 11, 2, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(23, 12, 3, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(24, 12, 4, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(25, 13, 3, '2020-11-01 17:29:50', '2020-11-01 17:29:50');

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
(1, 'Top Rated', 1, '2020-11-01 16:03:53', '2020-11-01 16:03:53'),
(2, 'Adidas', 1, '2020-11-01 16:04:19', '2020-11-01 16:04:19');

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
(2, 1, 2, '2020-11-01 16:50:04', '2020-11-01 16:50:04'),
(3, 1, 3, '2020-11-01 16:52:23', '2020-11-01 16:52:23'),
(4, 1, 4, '2020-11-01 16:54:01', '2020-11-01 16:54:01'),
(5, 1, 5, '2020-11-01 16:57:44', '2020-11-01 16:57:44'),
(7, 1, 6, '2020-11-01 17:08:16', '2020-11-01 17:08:16'),
(9, 2, 7, '2020-11-01 17:08:43', '2020-11-01 17:08:43'),
(10, 2, 8, '2020-11-01 17:10:23', '2020-11-01 17:10:23'),
(12, 1, 1, '2020-11-01 17:12:19', '2020-11-01 17:12:19'),
(13, 1, 9, '2020-11-01 17:13:27', '2020-11-01 17:13:27'),
(14, 1, 10, '2020-11-01 17:16:18', '2020-11-01 17:16:18'),
(15, 2, 11, '2020-11-01 17:19:10', '2020-11-01 17:19:10'),
(16, 2, 12, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(17, 1, 12, '2020-11-01 17:28:03', '2020-11-01 17:28:03'),
(18, 1, 13, '2020-11-01 17:29:50', '2020-11-01 17:29:50');

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
(1, 4, 'gsdfgsfdg (34534)', 'Customer One', 'vendor@gmail.com', '(343) 453-4535', 'gsdfgsfdg', 'sfdgsdf', 34534, 'NJ', 'adsfadsf', '', 'adfs adfadsf', '2020-11-01 14:28:36', '2020-11-01 14:40:41'),
(2, 2, 'asdfasd (12564)', 'user1', 'user1@gmail.com', '(545) 454-5454', 'asdfasd', 'adsf', 12564, 'South Carolina (SC)', 'Chitagong', '', '123 Main Street, New York, NY 1003', '2020-11-01 14:45:18', '2020-11-01 14:45:18');

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
(1, 'HOBO', 'info@hobo.com', '(234) 234-2344', 'Line1', 'Line2', 34534, 'State', 'City', 'ksdfj, ksdfm, sdfjiksdf, sdfsdf', 'user/assets/images/logos/logo-blue.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-11-01 21:04:22', '2020-11-01 21:04:22');

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
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Admin John', 'admin@gmail.com', NULL, 'Super-admin', NULL, '$2y$10$.fJyGrc0TpuOm.OfAA9VJOM6TxNCSYtI8EjzIa/dLadCV1WeGsG9.', 1, NULL, NULL, '2020-11-01 13:47:35', '2020-11-01 13:47:35'),
(2, 'user1', 'user1@gmail.com', NULL, 'customer', NULL, '$2y$10$NNE3KdQXuZq/WizCqKZmouvuQG4TH0MY2o.Ti8A.1OnT7I1RChoRm', 1, NULL, NULL, '2020-11-01 13:52:37', '2020-11-01 13:52:37'),
(3, 'admin1', 'admin1@gmail.com', NULL, 'admin', NULL, '$2y$10$L0uL7Gt9CKRs2GUXDdYc8epSoOxVXDUwox5ZCXoMCInKg72cUF3nC', 1, NULL, NULL, '2020-11-01 13:56:17', '2020-11-01 13:56:17'),
(4, 'Vendor One', 'vendor@gmail.com', NULL, 'Vendor', NULL, '$2y$10$8aLGuGRuJJxHfCgK4yYei.2LU.htru0LFPntgVOPfiOCUsKVpEjg.', 1, NULL, 'TyIn89YDKgWhM2xo6OMCq88t7PHn6mlNdfLRBZqU7vPNOnJMrR4Y5IrKbAVf', '2020-11-01 13:59:36', '2020-11-01 14:31:26'),
(5, 'Vendor Two', 'vendor2@gmail.com', NULL, 'Vendor', NULL, '$2y$10$2jost4MBN9dtIKPVbfh3Duxt1wmLX/jVqo8F/3VY/u8aenK2sIS8a', 1, NULL, NULL, '2020-11-01 16:08:35', '2020-11-01 16:13:47');

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
(1, 1, 'user/profiles/avatar/November_2020/01/1604238858_1602579591_wissenschaftler-von-healy.jpg', 'admin@gmail.com', '1994-01-11', 'ER 3434R34', 'user/profiles/nid/November_2020/01/1604238629_1.jpg', '(234) 234-2344', NULL, NULL, 'AL1', 'AL2', 343434, 'NH', 'AL City', NULL, 'AL Full Give us your full location address so we can find you and deliver your order accurately.', '2020-11-01 13:47:35', '2020-11-01 13:54:18'),
(2, 2, 'user/profiles/avatar/November_2020/01/1604239375_a3bee3890d4039488fabcfd797e02fa6.jpg', 'admin23@gmail.com', '2020-11-29', '34adfasdf', 'user/profiles/nid/November_2020/01/1604239072_fashion-young-african-girl-black-260nw-1420132757.jpg', '(545) 454-5454', NULL, NULL, '123 Main Street', NULL, 1414, 'GA', 'Chitagong', NULL, '123 Main Street, New York, NY 1003', '2020-11-01 13:52:37', '2020-11-01 14:46:54'),
(3, 3, NULL, NULL, NULL, NULL, NULL, '(016) 255-3033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 13:56:17', '2020-11-01 13:56:17'),
(4, 4, 'user/profiles/avatar/November_2020/01/1604239603_1602590132_1601832702_black_man_impatient.jpg', 'vendor@gmail.com', '1995-02-07', 'ER234234234', 'user/profiles/nid/November_2020/01/1604239549_1.jpg', '(345) 345-345', NULL, NULL, 'CAL1', 'CAL2', 68878, 'IL', 'CAL City', NULL, 'CAL Address Details', '2020-11-01 13:59:36', '2020-11-01 14:46:02'),
(5, 5, 'user/profiles/avatar/November_2020/01/1604247039_1602579591_wissenschaftler-von-healy.jpg', 'vendor2@gmail.com', '1998-01-06', 'RE3234234', 'user/profiles/nid/November_2020/01/1604247114_1.jpg', '(345) 343-4535', NULL, NULL, 'afd', 'sdfg', 34534, 'IL', 'sfdg', NULL, 'sfgsfdgsfg', '2020-11-01 16:08:35', '2020-11-01 16:11:54'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 17:43:16', '2020-11-01 17:43:16'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-01 17:48:34', '2020-11-01 17:48:34');

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
(1, 5, 2, NULL, 1, '2020-11-01 17:31:58', '2020-11-01 17:31:58');

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
-- Indexes for table `case_categories`
--
ALTER TABLE `case_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_types`
--
ALTER TABLE `case_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
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
-- Indexes for table `customer_supports`
--
ALTER TABLE `customer_supports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboards`
--
ALTER TABLE `dashboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_times`
--
ALTER TABLE `delivery_times`
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
-- Indexes for table `payment_refunds`
--
ALTER TABLE `payment_refunds`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `case_categories`
--
ALTER TABLE `case_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `case_types`
--
ALTER TABLE `case_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `customer_supports`
--
ALTER TABLE `customer_supports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dashboards`
--
ALTER TABLE `dashboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `delivery_times`
--
ALTER TABLE `delivery_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_addresses`
--
ALTER TABLE `mail_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_sliders`
--
ALTER TABLE `main_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_refunds`
--
ALTER TABLE `payment_refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_availabilities`
--
ALTER TABLE `product_availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_brand_category_maps`
--
ALTER TABLE `product_brand_category_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_category_maps`
--
ALTER TABLE `product_category_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_color_maps`
--
ALTER TABLE `product_color_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_features`
--
ALTER TABLE `product_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_gallery_maps`
--
ALTER TABLE `product_gallery_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_size_maps`
--
ALTER TABLE `product_size_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_tag_maps`
--
ALTER TABLE `product_tag_maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
