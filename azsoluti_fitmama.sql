-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2022 at 03:10 PM
-- Server version: 5.7.37
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `azsoluti_fitmama`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `attachment` longtext COLLATE utf8mb4_unicode_ci,
  `images` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_schedule_messages`
--

CREATE TABLE `chat_schedule_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `attachment` longtext COLLATE utf8mb4_unicode_ci,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `send_date` date DEFAULT NULL,
  `sent` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `exercise_category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_popular` tinyint(1) NOT NULL DEFAULT '0',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `is_premium` tinyint(1) NOT NULL DEFAULT '0',
  `price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercise_categories`
--

CREATE TABLE `exercise_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_recipes`
--

CREATE TABLE `food_recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `instructions` longtext COLLATE utf8mb4_unicode_ci,
  `recipe_category_id` bigint(20) UNSIGNED NOT NULL,
  `ingredients` longtext COLLATE utf8mb4_unicode_ci,
  `is_premium` tinyint(1) NOT NULL DEFAULT '0',
  `price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_recipe_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_20_205653_create_notifications_table', 1),
(6, '2022_02_20_220043_create_packages_table', 1),
(7, '2022_02_20_220103_create_user_packages_table', 1),
(8, '2022_02_20_220216_create_user_body_measurements_table', 1),
(9, '2022_02_20_220235_create_meals_table', 1),
(10, '2022_02_20_220308_create_food_recipes_table', 1),
(11, '2022_02_20_220325_create_user_meals_table', 1),
(12, '2022_02_20_220455_create_user_diaries_table', 1),
(13, '2022_02_20_220518_create_recipe_categories_table', 1),
(14, '2022_02_20_220557_create_user_progress_photos_table', 1),
(15, '2022_02_20_220626_create_exercises_table', 1),
(16, '2022_02_20_220647_create_videos_table', 1),
(17, '2022_02_20_220733_create_chats_table', 1),
(18, '2022_02_20_220752_create_wishlists_table', 1),
(19, '2022_02_20_220811_create_products_table', 1),
(20, '2022_02_20_220828_create_product_categories_table', 1),
(21, '2022_02_20_220921_create_colors_table', 1),
(22, '2022_02_20_220936_create_sizes_table', 1),
(23, '2022_02_20_220955_create_product_colors_table', 1),
(24, '2022_02_20_221010_create_product_sizes_table', 1),
(25, '2022_02_20_221037_create_orders_table', 1),
(26, '2022_02_20_221127_create_user_achievements_table', 1),
(27, '2022_02_20_221147_create_article_categories_table', 1),
(28, '2022_02_20_221203_create_articles_table', 1),
(29, '2022_02_20_221242_create_user_payments_table', 1),
(30, '2022_02_20_221302_create_transactions_table', 1),
(31, '2022_02_20_225515_create_exercise_categories_table', 1),
(32, '2022_02_23_070803_create_profile_questions_table', 1),
(33, '2022_02_23_070955_create_profile_answers_table', 1),
(34, '2022_02_23_074154_create_chat_schedule_messages_table', 1),
(35, '2022_02_23_082851_create_schedule_chat_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tax` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `status` enum('pending','processing','shipping','shiped','completed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `checkmark` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkmark_description` longtext COLLATE utf8mb4_unicode_ci,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `intro_video` longtext COLLATE utf8mb4_unicode_ci,
  `splitable` tinyint(1) NOT NULL DEFAULT '0',
  `onetime_payment_amount` decimal(8,2) DEFAULT NULL,
  `per_month_payment_amount` decimal(8,2) DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `description`, `checkmark`, `checkmark_description`, `image`, `intro_video`, `splitable`, `onetime_payment_amount`, `per_month_payment_amount`, `days`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fit Strong Mama', '8 week online coaching transformation programme that will get you results. Designed to meet the needs of the modern day busy mum looking to make the fastest possible progress with their Fitness, Health and Wellness goals. This bespoke coaching programme will tone your body, tummy and pelvic floor, leaving you feeling confident in your own skin.\r\n\r\nYou will get:', '&#10004;', '[\"Nutritional support, recommended supplement protocol, personalised meal plan to help fuel your body the right way, give you more energy and more motivation.\",\"Fitness training programme that is customised based on your goals, experience and time schedule.\",\"Weekly check-ins to ensure you are getting the desired results\",\"Detailed hand book upon application with vital information to support your goals\",\"Monthly complimentary group coaching call with guest speaker, Female Embodiment Coach to support mindset\",\"Access to healthy nutritious recipes\",\"Access to all on demand workouts ranging from HIIT, Strength, Pilates, Yoga, Barre and Gym workouts\"]', 'public/workout_images/image_1.png', 'public/fitmama_videos/Intro_fitmama.mp4', 0, 499.00, 233.00, 60, NULL, NULL, NULL),
(2, 'Fit Mama Online Monthly Coaching', 'Online coaching is the most flexible, cost-effective way to reach your health and fitness goals. If you want to work out where and when it\'s convenient for you, instead of relying on someone else\'s location and availability as well as it being the fraction of the cost of in-person fitness training, then online coaching could is for you. You can get fit and healthy even if your schedule is crazy. Perfect for the busy mum.\r\n\r\nYou will get:', '&#10004;', '[\"A bespoke fitness programme with video tutorials so you know how to safely perform the exercise.\",\"Nutritional support, recommended supplement protocol, personalised meal plan to help fuel your body the right way, give you more energy and more motivation\",\"Weekly check ins for accountability and to ensure you are on track to achieving your goals.\",\"Complimentary weekly online HIIT class\",\"Monthly coaching from Female embodiment coach to support mindset\",\"Access to healthy and nutritious recipes\"]', 'public/workout_images/image_2.png', 'public/fitmama_videos/Intro_fitmama.mp4', 0, 150.00, 75.00, 30, NULL, NULL, NULL),
(3, 'Fit Mama Subscription\r\n', 'A monthly online fitness and weight loss membership programme designed to give you results. Perfect solution to spice up your workout routine, whether you want to train at home or the gym on a tight time frame. You will get access to a range of workouts ranging from HIIT, Strength, Pilates, Yoga, Barre and gym workouts.\r\n\r\nYou will get:', '&#10004;', '[\"Access both on demand and real time workouts to complete at a time that suits you.\",\"Unlock a range of recipes to support your health and fitness goals. In built calorie tracking with barcode scanning to make it easier for you.\",\"Access our \'Educational Zone\' where you will find various articles and blogs from experts in health and fitness to support your journey throughout motherhood.\"]', 'public/workout_images/image_3.png', 'public/fitmama_videos/Intro_fitmama.mp4', 0, 9.99, 90.00, 15, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` int(50) DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(12, 'App\\Models\\User', 2, 'demo@gmail.com', '0ba75b59317e95173e33d163c78768cc2a1b378ee792c0f72c9ab5a777c4748c', '[\"*\"]', NULL, '2022-02-28 13:30:42', '2022-02-28 13:30:42'),
(13, 'App\\Models\\User', 3, 'demo3@gmail.com', 'd272305d992105138c4d6893a3679d0832626a10bdf69ac6fdedba212f00a4aa', '[\"*\"]', NULL, '2022-02-28 13:34:31', '2022-02-28 13:34:31'),
(14, 'App\\Models\\User', 2, 'demo@gmail.com', 'ed8103973b220c7e0f4f9497fcb824241f1a2be53d5268d0582b9124b0779b44', '[\"*\"]', NULL, '2022-03-01 08:36:02', '2022-03-01 08:36:02'),
(15, 'App\\Models\\User', 2, 'demo@gmail.com', '9120d8fdd14d38cf1d0dbd3bcd7a6209d8eb4e43d94cc82ed6d741addb588a9b', '[\"*\"]', '2022-03-01 10:04:14', '2022-03-01 09:03:12', '2022-03-01 10:04:14'),
(16, 'App\\Models\\User', 2, 'demo@gmail.com', '51cb6315a2c615988f8341a5d932ba5cb152709ccc6af6c36006a20232bdce89', '[\"*\"]', '2022-03-04 02:11:11', '2022-03-02 03:31:22', '2022-03-04 02:11:11'),
(17, 'App\\Models\\User', 2, 'demo@gmail.com', '14f4adf9866891e80f32cc3ac5e3befc37281ab7b99bdcd5907247e1bfb5930c', '[\"*\"]', '2022-03-11 08:23:03', '2022-03-04 02:11:49', '2022-03-11 08:23:03'),
(18, 'App\\Models\\User', 2, 'demo@gmail.com', 'e512d6c41df4762376b72d90af41e6d0d3f20e9f190635a25ac9b142e7628b73', '[\"*\"]', '2022-03-04 08:08:56', '2022-03-04 05:01:01', '2022-03-04 08:08:56'),
(19, 'App\\Models\\User', 4, 'demo@demo.com', '11e186855f234ea6c1dfe55b3d62ef1dbd9221cc9ea09acb8f270cb4c72e2e25', '[\"*\"]', NULL, '2022-03-04 08:18:33', '2022-03-04 08:18:33'),
(20, 'App\\Models\\User', 5, 'demoq@demo.com', 'bb041b892e84d0bac27a386c93b05db3749dad06f8167b62690fe9322054351b', '[\"*\"]', NULL, '2022-03-04 08:20:12', '2022-03-04 08:20:12'),
(21, 'App\\Models\\User', 6, 'demoa@demo.com', '55ca90b6258da2a200c772ec716c3ead09972869b17a276c182beb05f4f005f0', '[\"*\"]', NULL, '2022-03-04 08:22:03', '2022-03-04 08:22:03'),
(22, 'App\\Models\\User', 2, 'demo@gmail.com', 'b0569619610ba18c099279ccff2f13a6eb56a18043df56f08045314b61b1b428', '[\"*\"]', NULL, '2022-03-04 09:34:46', '2022-03-04 09:34:46'),
(23, 'App\\Models\\User', 7, 'jaan@gmail.com', '2573be2bf6bd5e89a54aa6e1c3ede49cf68b2fdeaba13301a84372b6bde9e881', '[\"*\"]', NULL, '2022-03-04 10:22:42', '2022-03-04 10:22:42'),
(24, 'App\\Models\\User', 8, 'newuser@gmail.com', '982b90c716f360057b365bf01651887b93a381761f91d711adbb1c7275a48ad3', '[\"*\"]', NULL, '2022-03-04 10:36:27', '2022-03-04 10:36:27'),
(25, 'App\\Models\\User', 9, 'newdemo@gmail.com', '05861b6bbef22d91993eda176a6f426b8f385874b660544d6146efdf2e427979', '[\"*\"]', NULL, '2022-03-04 10:38:11', '2022-03-04 10:38:11'),
(26, 'App\\Models\\User', 10, 'demouser1@gmail.con', '9fe6ab8664991b3c7a954778cb0c52f9bce4752400ad94b1dcf5fa9a8b7873b2', '[\"*\"]', NULL, '2022-03-04 10:39:35', '2022-03-04 10:39:35'),
(27, 'App\\Models\\User', 2, 'demo@gmail.com', '1950ee9c8a39ff58a4024e84dd7f7af0f6751cbfb1b5fd8eda7b0a243f63f289', '[\"*\"]', '2022-03-05 02:55:56', '2022-03-05 02:16:12', '2022-03-05 02:55:56'),
(28, 'App\\Models\\User', 2, 'demo@gmail.com', '9e7d18a5f7394117e3c64bfad2f4fe9239b1bbd53fec286f2ca552b3cffbb802', '[\"*\"]', NULL, '2022-03-05 06:11:02', '2022-03-05 06:11:02'),
(29, 'App\\Models\\User', 11, 'demo10@gmail.com', '25389f428a57591d13791290e8b2b35a83d78b230afd2f9ebaac78110cb50b30', '[\"*\"]', NULL, '2022-03-05 06:18:20', '2022-03-05 06:18:20'),
(30, 'App\\Models\\User', 2, 'demo@gmail.com', 'e65faf4c34e994fb6c8ad0ceefe7291ac18b4fd4172f65e9f632ddd3b3c1464c', '[\"*\"]', NULL, '2022-03-05 06:18:38', '2022-03-05 06:18:38'),
(31, 'App\\Models\\User', 3, 'demo3@gmail.com', '1375e9d48ffd6f5ca97c6e10cf1eac9e3eee910002f99eaa3c03d808b380af84', '[\"*\"]', NULL, '2022-03-05 06:23:21', '2022-03-05 06:23:21'),
(32, 'App\\Models\\User', 11, 'demo10@gmail.com', '5edb63554b1079db35bc7a801a076593639301afcbff54ad75710673e18e81e9', '[\"*\"]', '2022-03-11 08:31:41', '2022-03-05 06:25:45', '2022-03-11 08:31:41'),
(33, 'App\\Models\\User', 2, 'demo@gmail.com', 'a860bf719b0663d553ec2ffe52ad46db62aa28d94eace20bdaf998837d8cd6a1', '[\"*\"]', '2022-03-05 06:42:04', '2022-03-05 06:29:02', '2022-03-05 06:42:04'),
(34, 'App\\Models\\User', 12, 'abul@gmail.com', '11ee57f49728cc359fc3899bf1c72ab6e97c9c910ad6b5b1a2d9682ed34fe494', '[\"*\"]', NULL, '2022-03-05 08:08:03', '2022-03-05 08:08:03'),
(35, 'App\\Models\\User', 13, 'sss@gmail.com', 'f8dfc81172634011ff3f7048dd90bda7d4ef2cc0cab46ec6eac6f9b6bf14c61c', '[\"*\"]', NULL, '2022-03-05 08:12:58', '2022-03-05 08:12:58'),
(36, 'App\\Models\\User', 14, 'jaa@gmail.com', '3b138ce01d7f7fe6cc50df394b9538a10f2ac41c736deb17f7a70e688d668d5c', '[\"*\"]', NULL, '2022-03-05 08:14:05', '2022-03-05 08:14:05'),
(37, 'App\\Models\\User', 15, 'aaa@gmail.vom', '680ef1113f9a9dcbb8cc27e8b90cae74aa44147a2b68a80ec6c172eb1dc81d54', '[\"*\"]', NULL, '2022-03-05 08:15:18', '2022-03-05 08:15:18'),
(38, 'App\\Models\\User', 16, 'azad@gmail.com', 'ff2e1ce9eb3218b7f569573b6a7de1a25312122a13e6639c42f390dce86e35df', '[\"*\"]', NULL, '2022-03-05 08:18:19', '2022-03-05 08:18:19'),
(39, 'App\\Models\\User', 17, 'jjj@gmail.com', '11f8d241f3cc12aca25e6fca325c36ffc2b3e4639ff3ec1b1a174c19f0a83705', '[\"*\"]', '2022-03-05 08:55:52', '2022-03-05 08:32:26', '2022-03-05 08:55:52'),
(44, 'App\\Models\\User', 18, 'job@gmail.com', 'fadec9c04b342d1010369d5671602326808b06b5fa7a8ac223e4f85aee5d0f99', '[\"*\"]', '2022-03-05 09:36:55', '2022-03-05 09:36:54', '2022-03-05 09:36:55'),
(45, 'App\\Models\\User', 2, 'demo@gmail.com', '1e4ef9289802809bc9eabee1d1531b0e6c1512edf2f4cc00942ace076e0ae7b3', '[\"*\"]', '2022-03-10 09:56:51', '2022-03-07 06:03:00', '2022-03-10 09:56:51'),
(46, 'App\\Models\\User', 19, 'test@test.cim', '94eb95b8d1dd6f70b8e394108eebac043a1b542c3a0bf40d50570c2296155fea', '[\"*\"]', '2022-03-07 08:20:26', '2022-03-07 08:20:25', '2022-03-07 08:20:26'),
(47, 'App\\Models\\User', 20, 'test@test.com', 'bdbc14e905990db82f51bdbd3adb783aef4b84778ac5f9854243f86ba2e92ca1', '[\"*\"]', '2022-03-07 08:21:13', '2022-03-07 08:21:12', '2022-03-07 08:21:13'),
(48, 'App\\Models\\User', 21, 'newuser1@gmail.com', 'bda7c0220e5bda15eee1f5fa7b7238be20876aac0281aca19a02e0c706e4c5e0', '[\"*\"]', '2022-03-07 08:56:37', '2022-03-07 08:56:37', '2022-03-07 08:56:37'),
(49, 'App\\Models\\User', 18, 'job@gmail.com', 'c86077087ab78c14b73249b8457518d921be3d46581ab84a05e361270bb65ead', '[\"*\"]', '2022-03-07 13:01:10', '2022-03-07 12:48:26', '2022-03-07 13:01:10'),
(50, 'App\\Models\\User', 18, 'job@gmail.com', '18fdaff78eae517d291b10d28583358146fe9a28f2737b5653e1f8b746f6968c', '[\"*\"]', '2022-03-10 04:09:56', '2022-03-08 04:50:40', '2022-03-10 04:09:56'),
(51, 'App\\Models\\User', 22, 'faraz@gmail.com', '72874f20d91c0d5fb2d094aa4966cbc5c2e9cc6281c56ea4e433affe783c80c1', '[\"*\"]', NULL, '2022-03-09 03:45:16', '2022-03-09 03:45:16'),
(52, 'App\\Models\\User', 18, 'job@gmail.com', 'ba22cede758fdc19dbfc52f1c90c3ba9dda8fef4e65ce415fdd37504d699363e', '[\"*\"]', '2022-03-09 07:43:43', '2022-03-09 07:41:14', '2022-03-09 07:43:43'),
(53, 'App\\Models\\User', 18, 'job@gmail.com', 'e95a80e415a5fea17267eea5b8d9fc22a4880e4f7b248b1fbdbf57ef797bb903', '[\"*\"]', '2022-03-09 08:24:11', '2022-03-09 08:23:59', '2022-03-09 08:24:11'),
(54, 'App\\Models\\User', 18, 'job@gmail.com', 'abbd10308cc23a483bc838b11bad27b132d6f39a27ef32b5fd7ad45f60860b1d', '[\"*\"]', '2022-03-09 08:57:02', '2022-03-09 08:56:52', '2022-03-09 08:57:02'),
(55, 'App\\Models\\User', 18, 'job@gmail.com', 'fe4e36ab159057a7e38ae9b704a45df921eab5e3a430087e588c6ae26e0db177', '[\"*\"]', '2022-03-09 09:30:34', '2022-03-09 08:58:53', '2022-03-09 09:30:34'),
(56, 'App\\Models\\User', 23, 'demo11@gmail.com', '22de930a22cb00eaa073cbf5ad12c629c98aae2366db4b23d0548eb75bf50a1f', '[\"*\"]', NULL, '2022-03-09 09:00:18', '2022-03-09 09:00:18'),
(57, 'App\\Models\\User', 24, 'demoaccount@gmail.com', '35956d6a5afd9c8e114f4498136240b40f41c2b16557c18e45ad5bd4e5ffcb97', '[\"*\"]', NULL, '2022-03-09 09:00:48', '2022-03-09 09:00:48'),
(58, 'App\\Models\\User', 25, 'jaan1@gmail.com', '252f15bab78542e8abb96eb7391808f6948809eba47a689c50530a774ef3ab13', '[\"*\"]', '2022-03-11 07:12:59', '2022-03-09 09:32:06', '2022-03-11 07:12:59'),
(59, 'App\\Models\\User', 18, 'job@gmail.com', '3a201e0b6dd0f1370f7b5420230ff42cb8bfecc3f2b604859b9ed7c7b724b61e', '[\"*\"]', '2022-03-09 11:09:21', '2022-03-09 11:08:18', '2022-03-09 11:09:21'),
(60, 'App\\Models\\User', 26, 'jhon@gmail.com', '5e802bd524acacbd232c5d3038654d47cc05724c1826f1b105bdec8c7731b0b5', '[\"*\"]', '2022-03-09 11:25:46', '2022-03-09 11:22:09', '2022-03-09 11:25:46'),
(61, 'App\\Models\\User', 18, 'job@gmail.com', '4ce285a37f50554896e81f289206e46ba9a6e1b74569f56c471018012ac1ca30', '[\"*\"]', '2022-03-10 03:12:14', '2022-03-09 11:35:05', '2022-03-10 03:12:14'),
(62, 'App\\Models\\User', 2, 'demo@gmail.com', '96e94c232427ff885626f31b7ca95b19cbadf9867fdbef337e73a0d5d5e82b92', '[\"*\"]', '2022-03-10 01:42:57', '2022-03-10 01:42:30', '2022-03-10 01:42:57'),
(63, 'App\\Models\\User', 2, 'demo@gmail.com', '62ccec088b5bcd7fbb7723936eb7974ec5e2cc9e763f148b4a0445993eb73ba8', '[\"*\"]', '2022-03-11 01:52:18', '2022-03-10 07:46:18', '2022-03-11 01:52:18'),
(64, 'App\\Models\\User', 27, 'demoaccount123@gmail.com', '1a298312a06c1ff5930b037e6d5318223001f4805706a988257a443e26c9e308', '[\"*\"]', NULL, '2022-03-10 08:58:51', '2022-03-10 08:58:51'),
(65, 'App\\Models\\User', 28, 'newaccount@gmail.com', '5ab3dc7ec835c23f024205f89b44254d48f84a244776ce08447cccdc9a585e0e', '[\"*\"]', NULL, '2022-03-10 09:00:33', '2022-03-10 09:00:33'),
(66, 'App\\Models\\User', 29, 'testingaccount@gmail.com', 'f4aebf3c7b803ee5321196b894a772165e5c69cd21a5134ee0d9f0803243924d', '[\"*\"]', NULL, '2022-03-10 09:03:14', '2022-03-10 09:03:14'),
(67, 'App\\Models\\User', 30, 'testingaccount1@gmail.com', '39a4aa0f91accbb3e8f4c5dbbd611ba0275690e00a4278d434677981c49f2800', '[\"*\"]', NULL, '2022-03-10 09:14:17', '2022-03-10 09:14:17'),
(68, 'App\\Models\\User', 11, 'demo10@gmail.com', '6a3ee13ed50c5ecd6666785ef17f24a156cad00ce938b7a49337759415218ba6', '[\"*\"]', NULL, '2022-03-10 09:15:43', '2022-03-10 09:15:43'),
(69, 'App\\Models\\User', 31, 'hellouser@gmail.com', 'e48d4c02cc4bcf17ed2ba5acc22fb77feb1c3d275601f19bf499d2d8361d2520', '[\"*\"]', NULL, '2022-03-10 09:53:48', '2022-03-10 09:53:48'),
(70, 'App\\Models\\User', 32, 'somee@gma.com', '61e6cc6d89e98f1c8866ba4f817283c1baa192d22f93d3ca2b68cd8a529b68c5', '[\"*\"]', NULL, '2022-03-10 10:41:09', '2022-03-10 10:41:09'),
(71, 'App\\Models\\User', 33, 'somee1@gma.com', '8f9f7f775696268cf9c89ed16bb179eeabb64454d73bcd2f3d2d18bc2eb5b567', '[\"*\"]', NULL, '2022-03-10 10:42:21', '2022-03-10 10:42:21'),
(72, 'App\\Models\\User', 34, 'somee11@gma.com', 'c37cd172d096cb9fa29a91b2afb1d4c152de6c334b5794d865bfe720ae030749', '[\"*\"]', NULL, '2022-03-10 10:42:42', '2022-03-10 10:42:42'),
(73, 'App\\Models\\User', 35, 'somee111@gma.com', '9b46b272771e306b6361fed2ff1583ddd2d715ceec9b03971a2969356d067873', '[\"*\"]', NULL, '2022-03-10 10:43:19', '2022-03-10 10:43:19'),
(74, 'App\\Models\\User', 36, 'somee1111@gma.com', '396a35929c0846032bbceaf139493950f14c3b6104f1c55c0e0dfcd6b5697957', '[\"*\"]', '2022-03-10 10:44:16', '2022-03-10 10:43:31', '2022-03-10 10:44:16'),
(75, 'App\\Models\\User', 37, 'jjjj@gmail.com', '0b0b074525aa6e47c534fdc0efa12c3f9016e1f85833d4042bddb7b58389db14', '[\"*\"]', '2022-03-10 10:46:20', '2022-03-10 10:44:32', '2022-03-10 10:46:20'),
(76, 'App\\Models\\User', 18, 'job@gmail.com', '02c22bb45386962f327f026e4c09614090feed7b01798921319e93aa14711e41', '[\"*\"]', '2022-03-10 10:47:08', '2022-03-10 10:47:07', '2022-03-10 10:47:08'),
(77, 'App\\Models\\User', 38, 'abc@gmail.com', '0744c6fd6c03dbfabc60211655d400acf51592b620a5f9241e5084a8e519ab7c', '[\"*\"]', '2022-03-10 10:58:35', '2022-03-10 10:49:51', '2022-03-10 10:58:35'),
(78, 'App\\Models\\User', 18, 'job@gmail.com', 'f1f0aab463feca38121c057a7887b6714a115fee9069a1dfde9f51bed46c2efa', '[\"*\"]', '2022-03-11 02:26:50', '2022-03-10 11:00:09', '2022-03-11 02:26:50'),
(79, 'App\\Models\\User', 18, 'job@gmail.com', 'c622240d09fc29f6a6a1815534fab8de43332ba66ed70256078482f730561ff5', '[\"*\"]', '2022-03-11 02:27:25', '2022-03-11 02:27:24', '2022-03-11 02:27:25'),
(80, 'App\\Models\\User', 39, 'lama@gmail.com', '1feed257c3c50f53e50bb7b26e75431ef3e6824b683ebb9a8722575337cc3cd1', '[\"*\"]', '2022-03-11 08:28:15', '2022-03-11 02:28:51', '2022-03-11 08:28:15'),
(81, 'App\\Models\\User', 40, 'someone2@gmail.vom', 'b8621c7987717129da51bcc85e41dc5f17fc4f364e49084f3f923183418d55da', '[\"*\"]', '2022-03-11 08:32:01', '2022-03-11 04:37:59', '2022-03-11 08:32:01'),
(82, 'App\\Models\\User', 41, 'newsc@gmail.com', '4dc37f04a3755dbd8485787ca4e54d62f0d30056dbc828782c8a3dead8dc151b', '[\"*\"]', '2022-03-11 07:35:13', '2022-03-11 07:16:50', '2022-03-11 07:35:13'),
(83, 'App\\Models\\User', 2, 'hellouser@gmail.com', '2afb4f9e63a06fdcd056e6d1e1a2014e8d5753f975fd6f2a9d0d09e6563b8cbe', '[\"*\"]', NULL, '2022-03-11 08:41:16', '2022-03-11 08:41:16'),
(84, 'App\\Models\\User', 2, 'hellouser@gmail.com', '0c41d68b7f6d3bd864d9f75c24025c8bd2d536e04452b3d1da663a9d9589877f', '[\"*\"]', NULL, '2022-03-11 08:41:27', '2022-03-11 08:41:27'),
(85, 'App\\Models\\User', 3, 'akjaan89@gmail.com', 'c9a5e201bfd79f572e0c53f51c051b30794c5b5b18c3f5649a7778cb7f24b029', '[\"*\"]', '2022-03-11 09:39:04', '2022-03-11 08:41:53', '2022-03-11 09:39:04'),
(86, 'App\\Models\\User', 2, 'hellouser@gmail.com', '85d0a4447daef6d164d2b10e5ae7dcde40d38f4982f020a03d39e08f2d01f209', '[\"*\"]', '2022-03-11 08:43:06', '2022-03-11 08:42:56', '2022-03-11 08:43:06'),
(87, 'App\\Models\\User', 4, 'zubair@gmail.com', '3c4f3927676b7204cf60ab6f07585164ae4f3f89e387d67afea2d5bc407284dd', '[\"*\"]', '2022-03-11 09:56:32', '2022-03-11 09:55:48', '2022-03-11 09:56:32'),
(88, 'App\\Models\\User', 5, 'jaan@gmail.com', '376e520294d8737725477d320cede1795d9add73b2150913391980317fc52971', '[\"*\"]', NULL, '2022-03-11 10:30:25', '2022-03-11 10:30:25'),
(89, 'App\\Models\\User', 5, 'jaan@gmail.com', 'b6d3779249aaefe8010ea991485b8e285c4d0bf2f77b40d448108ebfac59845a', '[\"*\"]', '2022-03-11 10:33:31', '2022-03-11 10:33:11', '2022-03-11 10:33:31'),
(90, 'App\\Models\\User', 5, 'jaan@gmail.com', 'fafc4776b16dff34ab892d0a0389f64eec2bf648fe437547062c498e6b8ea41d', '[\"*\"]', '2022-03-11 10:45:13', '2022-03-11 10:43:40', '2022-03-11 10:45:13'),
(91, 'App\\Models\\User', 6, 'abul@gmail.com', '1e4d169afeee3f5e419b7085b85be621cc42a897fabf7cfe60cdea8cb555eb7f', '[\"*\"]', '2022-03-11 11:11:55', '2022-03-11 10:57:00', '2022-03-11 11:11:55'),
(92, 'App\\Models\\User', 6, 'abul@gmail.com', '9fe96440000f03110293ca03ce0b6b791e9d0e489a8918a3283190478233dd03', '[\"*\"]', '2022-03-11 11:19:39', '2022-03-11 11:14:02', '2022-03-11 11:19:39'),
(93, 'App\\Models\\User', 6, 'abul@gmail.com', 'e51d7b035636b16ae67252353703fd8f4de9e61560f5540cc0f52ab55c51c327', '[\"*\"]', '2022-03-11 11:21:16', '2022-03-11 11:20:42', '2022-03-11 11:21:16'),
(94, 'App\\Models\\User', 6, 'abul@gmail.com', '00f752a508626ce32f846ea59526e5cda845b1fadee1335e9d409654b64d16fb', '[\"*\"]', '2022-03-11 11:21:39', '2022-03-11 11:21:37', '2022-03-11 11:21:39'),
(95, 'App\\Models\\User', 7, 'hellouser@gmail.com', '3e4a3a9344e0ac3b38ff8ae3317189ff36e37c4d1981a5d10833a1a0c9922173', '[\"*\"]', '2022-03-11 11:38:27', '2022-03-11 11:28:10', '2022-03-11 11:38:27'),
(96, 'App\\Models\\User', 8, 'jaan@gmail.com', '18d43863723e6053d5f6bdbc97675c2ff129246701bd5a949d48d1e2b135d5cf', '[\"*\"]', '2022-03-11 11:34:12', '2022-03-11 11:31:53', '2022-03-11 11:34:12'),
(97, 'App\\Models\\User', 7, 'hellouser@gmail.com', '7712fb9561b4c1e5fa4f195f79d256422dbb600ebdad4daf7c26836fe6b484a8', '[\"*\"]', '2022-03-11 11:41:06', '2022-03-11 11:37:52', '2022-03-11 11:41:06'),
(98, 'App\\Models\\User', 9, 'new@gmail.con', 'e98676ab6c571414b70068badfac84ad2ce2c7b945538467cf1a7efba238419a', '[\"*\"]', '2022-03-11 11:48:52', '2022-03-11 11:44:16', '2022-03-11 11:48:52'),
(99, 'App\\Models\\User', 10, 'Faizqaimkhani@gmail.com', 'fec3c952f398753f6d9f2d05c4a147a25cd460742bfac574b5c527c549e07a21', '[\"*\"]', '2022-03-11 12:00:54', '2022-03-11 11:58:16', '2022-03-11 12:00:54'),
(100, 'App\\Models\\User', 10, 'Faizqaimkhani@gmail.com', '7937d020d9dd03f244afd6c5907d35fe1374eb9d0fce57f6c50fdcaa4407228e', '[\"*\"]', NULL, '2022-03-11 12:03:05', '2022-03-11 12:03:05'),
(101, 'App\\Models\\User', 11, 'test@gmail.com', '38e4308de2507974696a7d718fe3cf328c14e32f4da5a88fe63db7cb34358909', '[\"*\"]', '2022-03-11 12:07:48', '2022-03-11 12:05:37', '2022-03-11 12:07:48'),
(102, 'App\\Models\\User', 8, 'jaan@gmail.com', '04b0b3c7372b2a775447623534d071873ba7f5c5649640a78143364534c2c0ae', '[\"*\"]', NULL, '2022-03-11 12:07:34', '2022-03-11 12:07:34'),
(103, 'App\\Models\\User', 12, 'john@gmail.com', '23dfe37e190438e38ccfd142a0db76f086629c06cccfbc1a18079a31613c4cd6', '[\"*\"]', '2022-03-11 12:09:17', '2022-03-11 12:08:02', '2022-03-11 12:09:17'),
(104, 'App\\Models\\User', 13, 'azad@gmail.con', '4a38450b3342005a205f82e70100c94caffe7411a190f1f4355731557c70b869', '[\"*\"]', '2022-03-15 13:38:22', '2022-03-11 12:09:12', '2022-03-15 13:38:22'),
(105, 'App\\Models\\User', 14, 'test@test.com', 'd9e897f75aa1dbc726c8b43c7b2a294191bedb08c526983801b55c27580888d4', '[\"*\"]', '2022-03-11 16:27:23', '2022-03-11 16:20:42', '2022-03-11 16:27:23'),
(106, 'App\\Models\\User', 15, 'gvg@ff.bin', '717c21a9aa0b2e2e437825d2dfe523a97102dfa97e7ea10ee512ce936a0c3399', '[\"*\"]', '2022-03-11 16:30:11', '2022-03-11 16:30:11', '2022-03-11 16:30:11'),
(107, 'App\\Models\\User', 15, 'gvg@ff.bin', 'd02f54572097fecf8e8e9dfa641107ae39833c2457e714a3e55f3d371419f1eb', '[\"*\"]', '2022-03-11 16:31:26', '2022-03-11 16:31:26', '2022-03-11 16:31:26'),
(108, 'App\\Models\\User', 16, 'testing@testing.com', 'fb5d24287ae0cb8fbf6770e7dcaafcc86cfb2a40529dfab1c5ea157d9e7d4fcf', '[\"*\"]', '2022-03-14 11:53:41', '2022-03-14 11:51:49', '2022-03-14 11:53:41'),
(109, 'App\\Models\\User', 17, 'testing1@testing.com', 'ea28a3aeca1586f102faf02788bd033f5ef8b5694af2f061e0cce3fc652a22ba', '[\"*\"]', '2022-03-14 11:56:34', '2022-03-14 11:56:33', '2022-03-14 11:56:34'),
(110, 'App\\Models\\User', 17, 'testing1@testing.com', '3d08b949d2d6a77d33e2bb8af77d81a37738313301a061355c666dec517c312d', '[\"*\"]', '2022-03-15 10:43:12', '2022-03-14 11:59:09', '2022-03-15 10:43:12'),
(111, 'App\\Models\\User', 18, 'abc@gmail.com', '8ffc823049a291ffb1a60b3315bb1d9d00420fc040d379f6bf4f49a57f96088c', '[\"*\"]', '2022-03-14 12:15:05', '2022-03-14 12:15:04', '2022-03-14 12:15:05'),
(112, 'App\\Models\\User', 1, 'admin@admin.com', 'a728b794feb886cc6ff3f2371f386a4fe40a833c9f5feebab097fab11d2a6d63', '[\"*\"]', '2022-03-15 03:44:22', '2022-03-15 03:43:00', '2022-03-15 03:44:22'),
(113, 'App\\Models\\User', 19, 'testing2@gmail.com', 'f9ebbc46f5039f42caf208c2e08bac34671097980febb87b1ddd63b68c3ee777', '[\"*\"]', '2022-03-15 10:48:44', '2022-03-15 10:45:19', '2022-03-15 10:48:44'),
(114, 'App\\Models\\User', 20, 'alam@gmail.com', 'bb0c311df6f789e0f7f4f6dec1d3360ec6c6697a490ef74dd81870ec3b0c61e8', '[\"*\"]', '2022-03-15 14:13:40', '2022-03-15 13:44:03', '2022-03-15 14:13:40'),
(115, 'App\\Models\\User', 21, 'dhdh@fjfj.com', 'd4489060b59925f69c221e1fae506893e887b3b5ea0ee323c730d57f0e1f7273', '[\"*\"]', '2022-03-15 14:22:19', '2022-03-15 14:22:18', '2022-03-15 14:22:19'),
(116, 'App\\Models\\User', 22, 'hshdhd@gjfj.com', 'd8d409b7374292ee2d51e9d38669b0730694d5269a962466c2b0154af9ac3621', '[\"*\"]', '2022-03-15 14:24:37', '2022-03-15 14:23:03', '2022-03-15 14:24:37'),
(117, 'App\\Models\\User', 23, 'djdjdj@fjfjf.xkfjfj', '8d70190e16090e76d81bff2f51fe674451c7bcaa04397f59f98eb3583380301f', '[\"*\"]', '2022-03-15 14:32:38', '2022-03-15 14:27:50', '2022-03-15 14:32:38'),
(118, 'App\\Models\\User', 24, 'fhfhfh@fjfnf.fkdkd', '1dd06c44d08e86c3725a7dee87ad1b5a0b9e11d951a4a402dd26d370f6ccaa06', '[\"*\"]', '2022-03-15 14:40:56', '2022-03-15 14:36:12', '2022-03-15 14:40:56'),
(119, 'App\\Models\\User', 25, 'Faizi@gmail.com', '4a3205fb861cd47a82d5da780c9889593ede41f94e9c33f47a28fdf9d9b27094', '[\"*\"]', '2022-03-15 15:23:28', '2022-03-15 15:21:16', '2022-03-15 15:23:28'),
(120, 'App\\Models\\User', 26, 'anc@gmail.com', 'fe1b9db3c89f47286e5a0521a84f85f2d94bdc5f7d5db2c00d82b6eea743a5e1', '[\"*\"]', '2022-03-17 10:56:07', '2022-03-15 15:30:27', '2022-03-17 10:56:07'),
(121, 'App\\Models\\User', 27, 'testing3@gmail.com', '5a444123c36a59c9689badc4825a6ce9d7ed20306ad8c065ffdad100b5900daa', '[\"*\"]', '2022-03-15 17:24:33', '2022-03-15 16:14:23', '2022-03-15 17:24:33'),
(122, 'App\\Models\\User', 28, 'bigbaldscot@hotmail.co.uk', 'f863241980942eb57507ea8898c3c207f8efc0a4c37dedab1d55b0acf2302c65', '[\"*\"]', '2022-03-16 07:37:13', '2022-03-16 02:16:28', '2022-03-16 07:37:13'),
(123, 'App\\Models\\User', 1, 'admin@admin.com', '229927cc3463a358e782039ffa121dd9132b4c912662168c4ae4a120c90d8ef6', '[\"*\"]', NULL, '2022-03-16 06:21:39', '2022-03-16 06:21:39'),
(124, 'App\\Models\\User', 6, 'abul@gmail.com', '4b7751c9a5353b0698321268e621be74a61e37a2e6ce26ab334c650fe6d61266', '[\"*\"]', '2022-03-18 03:20:54', '2022-03-16 06:31:55', '2022-03-18 03:20:54'),
(125, 'App\\Models\\User', 29, 'dhdj@gmail.com', '3edce447fa97b463ac43f3507aa48eb3dfd20bb764095fd1ec7901dace19ee5e', '[\"*\"]', '2022-03-16 07:55:08', '2022-03-16 07:45:43', '2022-03-16 07:55:08'),
(126, 'App\\Models\\User', 30, 'fhdh@gmail.com', 'e057511df1c5e62d572c731e44021d37b4bd37bb3795b352acbc43a13af6c8b7', '[\"*\"]', '2022-03-18 02:53:40', '2022-03-16 07:59:33', '2022-03-18 02:53:40'),
(127, 'App\\Models\\User', 6, 'abul@gmail.com', 'f11e029217f3a5661ed235bb6adbd12511c93292e13e9be721674010296efea3', '[\"*\"]', NULL, '2022-03-16 08:11:30', '2022-03-16 08:11:30'),
(128, 'App\\Models\\User', 31, 'saadyadullahi11@gmail.com', '4d9061871f04a01e92985377270afa7276d32109f8fb3fc1a6fc8c7a70647446', '[\"*\"]', '2022-03-16 13:37:50', '2022-03-16 13:36:46', '2022-03-16 13:37:50'),
(129, 'App\\Models\\User', 32, 'mc.sanchez@hotmail.co.uk', '1934022c9d10d3cbb47648705ced1cbfe5fae7b5160b13ee3a414b1cd1fefbd2', '[\"*\"]', '2022-03-16 13:45:43', '2022-03-16 13:41:06', '2022-03-16 13:45:43'),
(130, 'App\\Models\\User', 31, 'saadyadullahi11@gmail.com', '219d4cbe706b9575954d964f2052f8046190d2f91756bc7f83232431d2419eda', '[\"*\"]', NULL, '2022-03-16 13:48:15', '2022-03-16 13:48:15'),
(131, 'App\\Models\\User', 31, 'saadyadullahi11@gmail.com', '64f64085f0e6f1cd74c5ce7e0aaefd84b0bda46c264b0877fc2519cdea7f7df0', '[\"*\"]', NULL, '2022-03-16 13:49:03', '2022-03-16 13:49:03'),
(132, 'App\\Models\\User', 6, 'abul@gmail.com', '7d9289d55f9889c992567d92f9863b0d579f7a32cdcccf8ea80805e3cdee1e64', '[\"*\"]', '2022-03-17 11:54:01', '2022-03-17 08:31:53', '2022-03-17 11:54:01'),
(133, 'App\\Models\\User', 6, 'abul@gmail.com', '3e4658279d51a0cf185a3bf9c3a9c7522ac2ebf9ca0e954046b745d5195852fa', '[\"*\"]', '2022-03-18 03:20:45', '2022-03-18 02:18:12', '2022-03-18 03:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `price` decimal(8,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `product_category_id` bigint(20) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_external` tinyint(1) NOT NULL DEFAULT '0',
  `external_link` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_answers`
--

CREATE TABLE `profile_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `profile_question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_answers`
--

INSERT INTO `profile_answers` (`id`, `answer`, `user_id`, `profile_question_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(140, '\"abul\"', 6, 1, '2022-03-11 11:01:40', '2022-03-11 11:01:40', NULL),
(141, '\"1-Jan-1989\"', 6, 2, '2022-03-11 11:01:51', '2022-03-11 11:01:51', NULL),
(142, '\"soft engr\"', 6, 3, '2022-03-11 11:01:59', '2022-03-11 11:01:59', NULL),
(143, '\"12\"', 6, 4, '2022-03-11 11:02:03', '2022-03-11 11:02:03', NULL),
(144, '\"goal\"', 6, 5, '2022-03-11 11:02:10', '2022-03-11 11:02:10', NULL),
(145, '\"not workded\"', 6, 6, '2022-03-11 11:02:17', '2022-03-11 11:02:17', NULL),
(146, '\"All of these\"', 6, 7, '2022-03-11 11:02:23', '2022-03-11 11:02:23', NULL),
(147, '10', 6, 8, '2022-03-11 11:02:29', '2022-03-11 11:02:29', NULL),
(148, '[\"dsfsd\",\"ddsf\"]', 6, 9, '2022-03-11 11:07:11', '2022-03-11 11:07:11', NULL),
(149, '\"Gym\"', 6, 10, '2022-03-11 11:08:24', '2022-03-11 11:08:24', NULL),
(150, '[\"fdfds\"]', 6, 11, '2022-03-11 11:08:29', '2022-03-11 11:08:29', NULL),
(151, '\"dsfsdfsd\"', 6, 12, '2022-03-11 11:08:35', '2022-03-11 11:08:35', NULL),
(152, '[\"sdfds\",\"sdf\"]', 6, 13, '2022-03-11 11:08:43', '2022-03-11 11:08:43', NULL),
(153, '\"3-4\"', 6, 14, '2022-03-11 11:08:47', '2022-03-11 11:08:47', NULL),
(154, '\"1-2 hours\"', 6, 15, '2022-03-11 11:08:50', '2022-03-11 11:08:50', NULL),
(155, '\"sdfsd\"', 6, 16, '2022-03-11 11:08:53', '2022-03-11 11:08:53', NULL),
(156, '5', 6, 17, '2022-03-11 11:08:56', '2022-03-11 11:08:56', NULL),
(157, '\"9-10 hours\"', 6, 18, '2022-03-11 11:08:59', '2022-03-11 11:08:59', NULL),
(158, '\"8,000 - 10,000\"', 6, 19, '2022-03-11 11:09:01', '2022-03-11 11:09:01', NULL),
(159, '\"iPhone\"', 6, 20, '2022-03-11 11:09:05', '2022-03-11 11:09:05', NULL),
(160, '\"sdfsd\"', 6, 21, '2022-03-11 11:09:08', '2022-03-11 11:09:08', NULL),
(161, '\"Stronger body\"', 6, 22, '2022-03-11 11:09:15', '2022-03-11 11:09:15', NULL),
(162, '\"No\"', 6, 23, '2022-03-11 11:09:28', '2022-03-11 11:09:28', NULL),
(163, '\"No\"', 6, 24, '2022-03-11 11:09:31', '2022-03-11 11:09:31', NULL),
(164, '\"No\"', 6, 25, '2022-03-11 11:09:34', '2022-03-11 11:09:34', NULL),
(165, '\"No\"', 6, 26, '2022-03-11 11:09:37', '2022-03-11 11:09:37', NULL),
(166, '\"No\"', 6, 27, '2022-03-11 11:09:39', '2022-03-11 11:09:39', NULL),
(167, '\"No\"', 6, 28, '2022-03-11 11:09:43', '2022-03-11 11:09:43', NULL),
(168, '\"No\"', 6, 29, '2022-03-11 11:09:45', '2022-03-11 11:09:45', NULL),
(169, '\"No\"', 6, 30, '2022-03-11 11:09:48', '2022-03-11 11:09:48', NULL),
(170, '\"No\"', 6, 31, '2022-03-11 11:09:51', '2022-03-11 11:09:51', NULL),
(171, '\"No\"', 6, 32, '2022-03-11 11:09:54', '2022-03-11 11:09:54', NULL),
(172, '\"No\"', 6, 33, '2022-03-11 11:09:57', '2022-03-11 11:09:57', NULL),
(173, '\"No\"', 6, 34, '2022-03-11 11:09:59', '2022-03-11 11:09:59', NULL),
(174, '\"No\"', 6, 35, '2022-03-11 11:10:02', '2022-03-11 11:10:02', NULL),
(175, '\"No\"', 6, 36, '2022-03-11 11:10:04', '2022-03-11 11:10:04', NULL),
(176, '\"No\"', 6, 37, '2022-03-11 11:10:07', '2022-03-11 11:10:07', NULL),
(177, '\"fhfhf\"', 8, 1, '2022-03-11 11:32:36', '2022-03-11 11:32:36', NULL),
(178, '\"27-Nov-2008\"', 8, 2, '2022-03-11 11:32:40', '2022-03-11 11:32:40', NULL),
(179, '\"fhffhf\"', 8, 3, '2022-03-11 11:32:43', '2022-03-11 11:32:43', NULL),
(180, '\"dhdhf\"', 8, 4, '2022-03-11 11:32:45', '2022-03-11 11:32:45', NULL),
(181, '\"dhdhc\"', 8, 5, '2022-03-11 11:32:48', '2022-03-11 11:32:48', NULL),
(182, '\"dhdjd\"', 8, 6, '2022-03-11 11:32:50', '2022-03-11 11:32:50', NULL),
(183, '\"All of these\"', 8, 7, '2022-03-11 11:32:52', '2022-03-11 11:32:52', NULL),
(184, '6', 8, 8, '2022-03-11 11:32:55', '2022-03-11 11:32:55', NULL),
(185, '[\"dhd\",\"rhdhf\",\"rhdhdh\"]', 8, 9, '2022-03-11 11:33:06', '2022-03-11 11:33:06', NULL),
(186, '\"Gym\"', 8, 10, '2022-03-11 11:33:09', '2022-03-11 11:33:09', NULL),
(187, '[\"dhdhdj\",\"rudhdh\"]', 8, 11, '2022-03-11 11:33:15', '2022-03-11 11:33:15', NULL),
(188, '\"dhdhd.\"', 8, 12, '2022-03-11 11:33:18', '2022-03-11 11:33:18', NULL),
(189, '[\"dbdnfn\",\"dhfjdj\"]', 8, 13, '2022-03-11 11:33:24', '2022-03-11 11:33:24', NULL),
(190, '\"4-5\"', 8, 14, '2022-03-11 11:33:27', '2022-03-11 11:33:27', NULL),
(191, '\"1-2 hours\"', 8, 15, '2022-03-11 11:33:29', '2022-03-11 11:33:29', NULL),
(192, '\"dhdjfj\"', 8, 16, '2022-03-11 11:33:32', '2022-03-11 11:33:32', NULL),
(193, '6', 8, 17, '2022-03-11 11:33:34', '2022-03-11 11:33:34', NULL),
(194, '\"7-8 hours\"', 8, 18, '2022-03-11 11:33:36', '2022-03-11 11:33:36', NULL),
(195, '\"8,000 - 10,000\"', 8, 19, '2022-03-11 11:33:38', '2022-03-11 11:33:38', NULL),
(196, '\"I don\'t have a device\"', 8, 20, '2022-03-11 11:33:39', '2022-03-11 11:33:39', NULL),
(197, '\"rhfhfh\"', 8, 21, '2022-03-11 11:33:42', '2022-03-11 11:33:42', NULL),
(198, '\"Healthier habits\"', 8, 22, '2022-03-11 11:33:43', '2022-03-11 11:33:43', NULL),
(199, '\"No\"', 8, 23, '2022-03-11 11:33:48', '2022-03-11 11:33:48', NULL),
(200, '\"No\"', 8, 24, '2022-03-11 11:33:50', '2022-03-11 11:33:50', NULL),
(201, '\"No\"', 8, 25, '2022-03-11 11:33:51', '2022-03-11 11:33:51', NULL),
(202, '\"No\"', 8, 26, '2022-03-11 11:33:53', '2022-03-11 11:33:53', NULL),
(203, '\"Yes\"', 8, 27, '2022-03-11 11:33:56', '2022-03-11 11:33:56', NULL),
(204, '\"No\"', 8, 28, '2022-03-11 11:33:58', '2022-03-11 11:33:58', NULL),
(205, '\"No\"', 8, 29, '2022-03-11 11:33:59', '2022-03-11 11:33:59', NULL),
(206, '\"No\"', 8, 30, '2022-03-11 11:34:01', '2022-03-11 11:34:01', NULL),
(207, '\"No\"', 8, 31, '2022-03-11 11:34:02', '2022-03-11 11:34:02', NULL),
(208, '\"No\"', 8, 32, '2022-03-11 11:34:04', '2022-03-11 11:34:04', NULL),
(209, '\"No\"', 8, 33, '2022-03-11 11:34:05', '2022-03-11 11:34:05', NULL),
(210, '\"No\"', 8, 34, '2022-03-11 11:34:06', '2022-03-11 11:34:06', NULL),
(211, '\"No\"', 8, 35, '2022-03-11 11:34:08', '2022-03-11 11:34:08', NULL),
(212, '\"Yes\"', 8, 36, '2022-03-11 11:34:09', '2022-03-11 11:34:09', NULL),
(213, '\"No\"', 8, 37, '2022-03-11 11:34:12', '2022-03-11 11:34:12', NULL),
(214, '\"[\'my name is jane\']\"', 7, 1, '2022-03-11 11:41:06', '2022-03-11 11:41:06', NULL),
(215, '\"fjfj\"', 9, 1, '2022-03-11 11:44:52', '2022-03-11 11:44:52', NULL),
(216, '\"1-Jan-2007\"', 9, 2, '2022-03-11 11:44:55', '2022-03-11 11:44:55', NULL),
(217, '\"xhxhf\"', 9, 3, '2022-03-11 11:44:57', '2022-03-11 11:44:57', NULL),
(218, '\"fhfhfh\"', 9, 4, '2022-03-11 11:45:00', '2022-03-11 11:45:00', NULL),
(219, '\"dhfbf\"', 9, 5, '2022-03-11 11:45:02', '2022-03-11 11:45:02', NULL),
(220, '\"fbfbfb\"', 9, 6, '2022-03-11 11:45:04', '2022-03-11 11:45:04', NULL),
(221, '\"All of these\"', 9, 7, '2022-03-11 11:45:07', '2022-03-11 11:45:07', NULL),
(222, '7', 9, 8, '2022-03-11 11:45:09', '2022-03-11 11:45:09', NULL),
(223, '[\"rhdhfh\",\"rhfhfb\"]', 9, 9, '2022-03-11 11:45:17', '2022-03-11 11:45:17', NULL),
(224, '\"Gym\"', 9, 10, '2022-03-11 11:45:18', '2022-03-11 11:45:18', NULL),
(225, '[\"fhfhf\",\"dhchf\"]', 9, 11, '2022-03-11 11:45:25', '2022-03-11 11:45:25', NULL),
(226, '\"xbxbc\"', 9, 12, '2022-03-11 11:45:28', '2022-03-11 11:45:28', NULL),
(227, '[\"dhdhfh\"]', 9, 13, '2022-03-11 11:45:31', '2022-03-11 11:45:31', NULL),
(228, '\"3-4\"', 9, 14, '2022-03-11 11:45:33', '2022-03-11 11:45:33', NULL),
(229, '\"1-2 hours\"', 9, 15, '2022-03-11 11:45:34', '2022-03-11 11:45:34', NULL),
(230, '\"xhdhd\"', 9, 16, '2022-03-11 11:45:38', '2022-03-11 11:45:38', NULL),
(231, '7', 9, 17, '2022-03-11 11:45:44', '2022-03-11 11:45:44', NULL),
(232, '\"10 hours +\"', 9, 18, '2022-03-11 11:46:57', '2022-03-11 11:46:57', NULL),
(233, '\"12,000 - 15,000\"', 9, 19, '2022-03-11 11:47:01', '2022-03-11 11:47:01', NULL),
(234, '\"I don\'t have a device\"', 9, 20, '2022-03-11 11:47:23', '2022-03-11 11:47:23', NULL),
(235, '\"hhdhrd\"', 9, 21, '2022-03-11 11:47:30', '2022-03-11 11:47:30', NULL),
(236, '\"increase in fitness\"', 9, 22, '2022-03-11 11:47:33', '2022-03-11 11:47:33', NULL),
(237, '\"No\"', 9, 23, '2022-03-11 11:47:36', '2022-03-11 11:47:36', NULL),
(238, '\"No\"', 9, 24, '2022-03-11 11:48:05', '2022-03-11 11:48:05', NULL),
(239, '\"No\"', 9, 25, '2022-03-11 11:48:09', '2022-03-11 11:48:09', NULL),
(240, '\"No\"', 9, 26, '2022-03-11 11:48:12', '2022-03-11 11:48:12', NULL),
(241, '\"No\"', 9, 27, '2022-03-11 11:48:15', '2022-03-11 11:48:15', NULL),
(242, '\"No\"', 9, 28, '2022-03-11 11:48:17', '2022-03-11 11:48:17', NULL),
(243, '\"No\"', 9, 29, '2022-03-11 11:48:20', '2022-03-11 11:48:20', NULL),
(244, '\"No\"', 9, 30, '2022-03-11 11:48:25', '2022-03-11 11:48:25', NULL),
(245, '\"Yes\"', 9, 31, '2022-03-11 11:48:28', '2022-03-11 11:48:28', NULL),
(246, '\"Yes\"', 9, 32, '2022-03-11 11:48:31', '2022-03-11 11:48:31', NULL),
(247, '\"No\"', 9, 33, '2022-03-11 11:48:33', '2022-03-11 11:48:33', NULL),
(248, '\"No\"', 9, 34, '2022-03-11 11:48:36', '2022-03-11 11:48:36', NULL),
(249, '\"Yes\"', 9, 35, '2022-03-11 11:48:40', '2022-03-11 11:48:40', NULL),
(250, '\"No\"', 9, 36, '2022-03-11 11:48:42', '2022-03-11 11:48:42', NULL),
(251, '\"Yes\"', 9, 37, '2022-03-11 11:48:44', '2022-03-11 11:48:44', NULL),
(252, '\"faiz\"', 11, 1, '2022-03-11 12:07:10', '2022-03-11 12:07:10', NULL),
(253, '\"1-Jun-2014\"', 11, 2, '2022-03-11 12:07:22', '2022-03-11 12:07:22', NULL),
(254, '\"abc\"', 11, 3, '2022-03-11 12:07:27', '2022-03-11 12:07:27', NULL),
(255, '\"abc\"', 11, 4, '2022-03-11 12:07:32', '2022-03-11 12:07:32', NULL),
(256, '\"abc\"', 11, 5, '2022-03-11 12:07:41', '2022-03-11 12:07:41', NULL),
(257, '\"qbc\"', 11, 6, '2022-03-11 12:07:48', '2022-03-11 12:07:48', NULL),
(258, '\"fjfh\"', 13, 1, '2022-03-11 12:15:31', '2022-03-11 12:15:31', NULL),
(259, '\"1-Jan-2008\"', 13, 2, '2022-03-11 12:16:23', '2022-03-11 12:16:23', NULL),
(260, '\"ffff\"', 13, 3, '2022-03-11 12:16:27', '2022-03-11 12:16:27', NULL),
(261, '\"fgggg\"', 13, 4, '2022-03-11 12:16:30', '2022-03-11 12:16:30', NULL),
(262, '\"fggg\"', 13, 5, '2022-03-11 12:16:33', '2022-03-11 12:16:33', NULL),
(263, '\"fggg\"', 13, 6, '2022-03-11 12:16:36', '2022-03-11 12:16:36', NULL),
(264, '\"All of these\"', 13, 7, '2022-03-11 12:16:41', '2022-03-11 12:16:41', NULL),
(265, '7', 13, 8, '2022-03-11 12:16:44', '2022-03-11 12:16:44', NULL),
(266, '[\"fffff\",\"dhdhdhdhdhd\",\"dhdhdhd\",\"hdhdhdhd\",\"dhdhdhd\",\"dhdbdhd\"]', 13, 9, '2022-03-11 12:17:53', '2022-03-11 12:17:53', NULL),
(267, '\"Gym\"', 13, 10, '2022-03-11 12:20:14', '2022-03-11 12:20:14', NULL),
(268, '[\"hdjdjdj\",\"ffgg\",\"ffgg\"]', 13, 11, '2022-03-11 12:21:09', '2022-03-11 12:21:09', NULL),
(269, '\"gggg\"', 13, 12, '2022-03-11 12:21:12', '2022-03-11 12:21:12', NULL),
(270, '[\"fdgf\",\"tdfg\"]', 13, 13, '2022-03-11 12:29:08', '2022-03-11 12:29:08', NULL),
(271, '\"3-4\"', 13, 14, '2022-03-11 12:29:11', '2022-03-11 12:29:11', NULL),
(272, '\"30 mins\"', 13, 15, '2022-03-11 12:29:16', '2022-03-11 12:29:16', NULL),
(273, '\"ttttt\"', 13, 16, '2022-03-11 12:29:19', '2022-03-11 12:29:19', NULL),
(274, '6', 13, 17, '2022-03-11 12:29:22', '2022-03-11 12:29:22', NULL),
(275, '\"7-8 hours\"', 13, 18, '2022-03-11 12:29:24', '2022-03-11 12:29:24', NULL),
(276, '\"8,000 - 10,000\"', 13, 19, '2022-03-11 12:29:27', '2022-03-11 12:29:27', NULL),
(277, '\"I don\'t have a device\"', 13, 20, '2022-03-11 12:29:30', '2022-03-11 12:29:30', NULL),
(278, '\"ggyy\"', 13, 21, '2022-03-11 12:29:33', '2022-03-11 12:29:33', NULL),
(279, '\"Better mindset\"', 13, 22, '2022-03-11 12:29:36', '2022-03-11 12:29:36', NULL),
(280, '\"No\"', 13, 23, '2022-03-11 12:29:37', '2022-03-11 12:29:37', NULL),
(281, '\"Yes\"', 13, 24, '2022-03-11 12:29:40', '2022-03-11 12:29:40', NULL),
(282, '\"No\"', 13, 25, '2022-03-11 12:29:42', '2022-03-11 12:29:42', NULL),
(283, '\"Yes\"', 13, 26, '2022-03-11 12:29:44', '2022-03-11 12:29:44', NULL),
(284, '\"No\"', 13, 27, '2022-03-11 12:29:46', '2022-03-11 12:29:46', NULL),
(285, '\"Yes\"', 13, 28, '2022-03-11 12:29:47', '2022-03-11 12:29:47', NULL),
(286, '\"No\"', 13, 29, '2022-03-11 12:29:49', '2022-03-11 12:29:49', NULL),
(287, '\"Yes\"', 13, 30, '2022-03-11 12:29:51', '2022-03-11 12:29:51', NULL),
(288, '\"No\"', 13, 31, '2022-03-11 12:29:52', '2022-03-11 12:29:52', NULL),
(289, '\"Yes\"', 13, 32, '2022-03-11 12:29:54', '2022-03-11 12:29:54', NULL),
(290, '\"No\"', 13, 33, '2022-03-11 12:29:56', '2022-03-11 12:29:56', NULL),
(291, '\"Yes\"', 13, 34, '2022-03-11 12:29:57', '2022-03-11 12:29:57', NULL),
(292, '\"No\"', 13, 35, '2022-03-11 12:29:59', '2022-03-11 12:29:59', NULL),
(293, '\"Yes\"', 13, 36, '2022-03-11 12:30:01', '2022-03-11 12:30:01', NULL),
(294, '\"No\"', 13, 37, '2022-03-11 12:30:03', '2022-03-11 12:30:03', NULL),
(295, '\"yyy\"', 14, 1, '2022-03-11 16:22:45', '2022-03-11 16:22:45', NULL),
(296, '\"1-Mar-2014\"', 14, 2, '2022-03-11 16:22:48', '2022-03-11 16:22:48', NULL),
(297, '\"yy\"', 14, 3, '2022-03-11 16:22:51', '2022-03-11 16:22:51', NULL),
(298, '\"yyhh\"', 14, 4, '2022-03-11 16:22:54', '2022-03-11 16:22:54', NULL),
(299, '\"yyh\"', 14, 5, '2022-03-11 16:22:57', '2022-03-11 16:22:57', NULL),
(300, '\"hhhhh\"', 14, 6, '2022-03-11 16:23:01', '2022-03-11 16:23:01', NULL),
(301, '\"Weight\"', 14, 7, '2022-03-11 16:23:03', '2022-03-11 16:23:03', NULL),
(302, '7', 14, 8, '2022-03-11 16:23:07', '2022-03-11 16:23:07', NULL),
(303, '[\"ggg\"]', 14, 9, '2022-03-11 16:23:14', '2022-03-11 16:23:14', NULL),
(304, '\"Gym\"', 14, 10, '2022-03-11 16:23:36', '2022-03-11 16:23:36', NULL),
(305, '[\"ttt\",\"gtt\"]', 14, 11, '2022-03-11 16:26:38', '2022-03-11 16:26:38', NULL),
(306, '\"bb\"', 14, 12, '2022-03-11 16:26:41', '2022-03-11 16:26:41', NULL),
(307, '[\"hg\"]', 14, 13, '2022-03-11 16:26:45', '2022-03-11 16:26:45', NULL),
(308, '\"3-4\"', 14, 14, '2022-03-11 16:26:47', '2022-03-11 16:26:47', NULL),
(309, '\"1-2 hours\"', 14, 15, '2022-03-11 16:26:49', '2022-03-11 16:26:49', NULL),
(310, '\"uujb\"', 14, 16, '2022-03-11 16:26:52', '2022-03-11 16:26:52', NULL),
(311, '9', 14, 17, '2022-03-11 16:26:54', '2022-03-11 16:26:54', NULL),
(312, '\"10 hours +\"', 14, 18, '2022-03-11 16:26:57', '2022-03-11 16:26:57', NULL),
(313, '\"12,000 - 15,000\"', 14, 19, '2022-03-11 16:26:59', '2022-03-11 16:26:59', NULL),
(314, '\"I don\'t have a device\"', 14, 20, '2022-03-11 16:27:01', '2022-03-11 16:27:01', NULL),
(315, '\"yy\"', 17, 1, '2022-03-14 12:17:39', '2022-03-14 12:17:39', NULL),
(316, '\"3-Jan-2014\"', 17, 2, '2022-03-14 12:17:53', '2022-03-14 12:17:53', NULL),
(317, '\"1-Jan-2013\"', 22, 2, '2022-03-15 14:24:37', '2022-03-15 14:24:37', NULL),
(318, '\"1-Jan-2010\"', 23, 2, '2022-03-15 14:29:38', '2022-03-15 14:29:38', NULL),
(319, '\"1-Nov-2011\"', 23, 2, '2022-03-15 14:29:46', '2022-03-15 14:29:46', NULL),
(320, '\"rrr\"', 23, 3, '2022-03-15 14:29:55', '2022-03-15 14:29:55', NULL),
(321, '\"rrrrd\"', 23, 4, '2022-03-15 14:29:58', '2022-03-15 14:29:58', NULL),
(322, '\"fffr\"', 23, 5, '2022-03-15 14:30:02', '2022-03-15 14:30:02', NULL),
(323, '\"FCC ffff\"', 23, 6, '2022-03-15 14:30:06', '2022-03-15 14:30:06', NULL),
(324, '\"Weight\"', 23, 7, '2022-03-15 14:31:27', '2022-03-15 14:31:27', NULL),
(325, '5', 23, 8, '2022-03-15 14:31:29', '2022-03-15 14:31:29', NULL),
(326, '[\"fydhdj\"]', 23, 9, '2022-03-15 14:32:27', '2022-03-15 14:32:27', NULL),
(327, '\"Gym\"', 23, 10, '2022-03-15 14:32:33', '2022-03-15 14:32:33', NULL),
(328, '[\"tff\"]', 23, 11, '2022-03-15 14:32:38', '2022-03-15 14:32:38', NULL),
(329, '\"5-Jan-2014\"', 27, 2, '2022-03-15 17:20:41', '2022-03-15 17:20:41', NULL),
(330, '\"3-Jan-2014\"', 27, 2, '2022-03-15 17:21:02', '2022-03-15 17:21:02', NULL),
(331, '\"hhh\"', 27, 3, '2022-03-15 17:21:06', '2022-03-15 17:21:06', NULL),
(332, '\"hbbv\"', 27, 4, '2022-03-15 17:21:10', '2022-03-15 17:21:10', NULL),
(333, '\"ghhh\"', 27, 5, '2022-03-15 17:21:13', '2022-03-15 17:21:13', NULL),
(334, '\"yhb\"', 27, 6, '2022-03-15 17:21:17', '2022-03-15 17:21:17', NULL),
(335, '\"Low self esteem\"', 27, 7, '2022-03-15 17:21:20', '2022-03-15 17:21:20', NULL),
(336, '8', 27, 8, '2022-03-15 17:21:23', '2022-03-15 17:21:23', NULL),
(337, '[\"test\"]', 27, 9, '2022-03-15 17:21:29', '2022-03-15 17:21:29', NULL),
(338, '\"Gym\"', 27, 10, '2022-03-15 17:21:31', '2022-03-15 17:21:31', NULL),
(339, '[\"ytghh\"]', 27, 11, '2022-03-15 17:21:37', '2022-03-15 17:21:37', NULL),
(340, '\"hhvvvvv\"', 27, 12, '2022-03-15 17:21:40', '2022-03-15 17:21:40', NULL),
(341, '[\"hbvvvvvv\"]', 27, 13, '2022-03-15 17:21:46', '2022-03-15 17:21:46', NULL),
(342, '\"3-4\"', 27, 14, '2022-03-15 17:21:48', '2022-03-15 17:21:48', NULL),
(343, '\"1-2 hours\"', 27, 15, '2022-03-15 17:21:49', '2022-03-15 17:21:49', NULL),
(344, '\"gvbbbb\"', 27, 16, '2022-03-15 17:21:53', '2022-03-15 17:21:53', NULL),
(345, '8', 27, 17, '2022-03-15 17:21:55', '2022-03-15 17:21:55', NULL),
(346, '\"10 hours +\"', 27, 18, '2022-03-15 17:21:57', '2022-03-15 17:21:57', NULL),
(347, '\"12,000 - 15,000\"', 27, 19, '2022-03-15 17:21:59', '2022-03-15 17:21:59', NULL),
(348, '\"Fitbit\"', 27, 20, '2022-03-15 17:22:03', '2022-03-15 17:22:03', NULL),
(349, '\"yh\"', 27, 21, '2022-03-15 17:22:06', '2022-03-15 17:22:06', NULL),
(350, '\"Healthier habits\"', 27, 22, '2022-03-15 17:22:10', '2022-03-15 17:22:10', NULL),
(351, '\"No\"', 27, 23, '2022-03-15 17:22:12', '2022-03-15 17:22:12', NULL),
(352, '\"No\"', 27, 24, '2022-03-15 17:22:14', '2022-03-15 17:22:14', NULL),
(353, '\"No\"', 27, 25, '2022-03-15 17:22:16', '2022-03-15 17:22:16', NULL),
(354, '\"No\"', 27, 26, '2022-03-15 17:22:17', '2022-03-15 17:22:17', NULL),
(355, '\"Yes\"', 27, 27, '2022-03-15 17:22:19', '2022-03-15 17:22:19', NULL),
(356, '\"No\"', 27, 28, '2022-03-15 17:22:21', '2022-03-15 17:22:21', NULL),
(357, '\"No\"', 27, 29, '2022-03-15 17:22:22', '2022-03-15 17:22:22', NULL),
(358, '\"No\"', 27, 30, '2022-03-15 17:22:24', '2022-03-15 17:22:24', NULL),
(359, '\"No\"', 27, 31, '2022-03-15 17:22:26', '2022-03-15 17:22:26', NULL),
(360, '\"No\"', 27, 32, '2022-03-15 17:22:27', '2022-03-15 17:22:27', NULL),
(361, '\"Yes\"', 27, 33, '2022-03-15 17:22:29', '2022-03-15 17:22:29', NULL),
(362, '\"No\"', 27, 34, '2022-03-15 17:22:31', '2022-03-15 17:22:31', NULL),
(363, '\"Yes\"', 27, 35, '2022-03-15 17:22:34', '2022-03-15 17:22:34', NULL),
(364, '\"No\"', 27, 36, '2022-03-15 17:22:36', '2022-03-15 17:22:36', NULL),
(365, '\"No\"', 27, 37, '2022-03-15 17:22:38', '2022-03-15 17:22:38', NULL),
(366, '[\"test\"]', 27, 41, '2022-03-15 17:22:44', '2022-03-15 17:22:44', NULL),
(367, '[\"bbb\"]', 27, 41, '2022-03-15 17:22:49', '2022-03-15 17:22:49', NULL),
(368, '[\"hhb\"]', 27, 41, '2022-03-15 17:22:55', '2022-03-15 17:22:55', NULL),
(369, '[\"bbb\"]', 27, 41, '2022-03-15 17:23:00', '2022-03-15 17:23:00', NULL),
(370, '[\"testing\",\"testing\",\"testing\"]', 27, 41, '2022-03-15 17:23:19', '2022-03-15 17:23:19', NULL),
(371, '[\"gvb\"]', 27, 41, '2022-03-15 17:23:25', '2022-03-15 17:23:25', NULL),
(372, '[\"bbbv\"]', 27, 41, '2022-03-15 17:23:31', '2022-03-15 17:23:31', NULL),
(373, '[\"gvv\"]', 27, 41, '2022-03-15 17:23:36', '2022-03-15 17:23:36', NULL),
(374, '[\"bbbv\"]', 27, 41, '2022-03-15 17:23:42', '2022-03-15 17:23:42', NULL),
(375, '[\"test\"]', 27, 41, '2022-03-15 17:23:50', '2022-03-15 17:23:50', NULL),
(376, '[\"fgg\"]', 27, 41, '2022-03-15 17:24:23', '2022-03-15 17:24:23', NULL),
(377, '[\"test\",\"test\"]', 27, 41, '2022-03-15 17:24:33', '2022-03-15 17:24:33', NULL),
(378, '\"1-Jan-2009\"', 29, 2, '2022-03-16 07:53:34', '2022-03-16 07:53:34', NULL),
(379, '\"1-Nov-2007\"', 30, 2, '2022-03-18 02:41:29', '2022-03-18 02:41:29', NULL),
(380, '\"jaaan\"', 30, 1, '2022-03-18 02:53:24', '2022-03-18 02:53:24', NULL),
(381, '\"john\"', 6, 1, '2022-03-18 02:55:53', '2022-03-18 02:55:53', NULL),
(382, '\"abulkhan\"', 6, 1, '2022-03-18 03:20:45', '2022-03-18 03:20:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_questions`
--

CREATE TABLE `profile_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci,
  `sort_num` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_questions`
--

INSERT INTO `profile_questions` (`id`, `package_id`, `question`, `type`, `options`, `sort_num`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'what is your name?', 'text', '[null]', 1, '2022-03-04 06:22:40', '2022-03-15 13:31:12', NULL),
(2, 1, 'What is your DOB?', 'date', '[null]', 2, '2022-03-04 06:22:54', '2022-03-04 06:22:54', NULL),
(3, 1, 'what is your occupations', 'text', '[null]', 3, '2022-03-04 06:23:10', '2022-03-04 06:23:10', NULL),
(4, 1, 'How many hours do you work?', 'text', '[null]', 4, '2022-03-04 06:23:33', '2022-03-04 06:23:33', NULL),
(5, 1, 'What is your Goal?', 'text', '[null]', 5, '2022-03-04 06:27:19', '2022-03-04 06:27:19', NULL),
(6, 1, 'What have you done in the past to achieve this goal? Why has it not worked?', 'text', '[null]', 6, '2022-03-04 06:28:46', '2022-03-04 06:28:46', NULL),
(7, 1, 'What is your biggest struggle right now', 'checkbox', '[\"Unsure of where to start\",\"Low Confidence\",\"Low self esteem\",\"Weight\",\"Exercise\",\"All of these\"]', 7, '2022-03-04 06:32:24', '2022-03-04 06:32:24', NULL),
(8, 1, 'How much of priority is getting fit and healthy to you right now?', 'number', '[null]', 8, '2022-03-04 06:33:37', '2022-03-04 06:33:37', NULL),
(9, 1, 'What type of exercise do you enjoy?', 'array', '[null]', 9, '2022-03-04 06:34:45', '2022-03-04 06:34:45', NULL),
(10, 1, 'Do you want to train at home or at gym?', 'checkbox', '[\"Home\",\"Gym\"]', 10, '2022-03-04 06:35:34', '2022-03-04 06:35:34', NULL),
(11, 1, 'If you training at home,what equipement do you have access too?List below please(including size of weights)', 'array', '[null]', 11, '2022-03-04 06:36:11', '2022-03-04 06:36:11', NULL),
(12, 1, 'What is your current diet? Please give an example of a normal day of eating for you,describe below', 'text', '[null]', 12, '2022-03-04 06:39:33', '2022-03-04 06:39:33', NULL),
(13, 1, 'Do you have any food allergies,intolerances , likes or dislikes? List below', 'array', '[null]', 13, '2022-03-04 06:40:45', '2022-03-04 06:40:45', NULL),
(14, 1, 'How many times a week can you commit to training?', 'checkbox', '[\"1-2\",\"3-4\",\"4-5\"]', 14, '2022-03-04 06:41:55', '2022-03-04 06:41:55', NULL),
(15, 1, 'How much time do you have to do a workout?', 'checkbox', '[\"30 mins\",\"1-2 hours\"]', 15, '2022-03-04 06:42:48', '2022-03-04 06:42:48', NULL),
(16, 1, 'Do you feel stressed? if so, what causes you stress? how do you deal with this stress?', 'text', '[null]', 16, '2022-03-04 06:44:01', '2022-03-04 06:44:01', NULL),
(17, 1, 'Rate your quality of sleep.(1 being the worst, 10 being great)', 'number', '[null]', 17, '2022-03-04 06:45:39', '2022-03-04 06:45:39', NULL),
(18, 1, 'On a average night how much sleep do you get?', 'checkbox', '[\"less than 6 hours\",\"7-8 hours\",\"9-10 hours\",\"10 hours +\"]', 18, '2022-03-04 06:47:05', '2022-03-04 06:47:05', NULL),
(19, 1, 'On a average day, how many steps do you do?', 'checkbox', '[\"less than 5,000\",\"6,000 - 8,000\",\"8,000 - 10,000\",\"10,000 - 12,000\",\"12,000 - 15,000\",\"15,000 +\"]', 19, '2022-03-04 06:49:15', '2022-03-04 06:49:15', NULL),
(20, 1, 'What device do you have for tracking your steps?', 'checkbox', '[\"Fitbit\",\"Apple Watch\",\"iPhone\",\"I don\'t have a device\"]', 20, '2022-03-04 06:55:33', '2022-03-04 06:55:33', NULL),
(21, 1, 'What could be the biggest obstacles for you over the next 8 weeks? Describe in as myuch detaila as possible.', 'text', '[null]', 21, '2022-03-04 06:56:54', '2022-03-04 06:56:54', NULL),
(22, 1, 'What result will you like to achieve by the end of the 8 weeks?', 'checkbox', '[\"Weight loss\",\"Increase energy levelss\",\"increase in fitness\",\"Better mindset\",\"Healthier habits\",\"Stronger body\",\"All of the above\"]', 22, '2022-03-04 06:59:29', '2022-03-04 06:59:29', NULL),
(23, 1, 'Has your doctor ever said that you have a bone or joint problem, such as arthritis, that has been aggravated by exercise or might be madeworse with erexcise?', 'checkbox', '[\"Yes\",\"No\"]', 23, '2022-03-04 07:01:21', '2022-03-04 07:01:21', NULL),
(24, 1, 'Do you have high blood pressure?', 'checkbox', '[\"Yes\",\"No\"]', 24, '2022-03-04 07:02:13', '2022-03-04 07:02:13', NULL),
(25, 1, 'Do you have Diabetes Mellitus or any other metabolic disease?', 'checkbox', '[\"Yes\",\"No\"]', 25, '2022-03-04 07:03:10', '2022-03-04 07:03:10', NULL),
(26, 1, 'Has your doctor ever said you have raised cholestrol (serum level above 6.2mmol/L)?', 'checkbox', '[\"Yes\",\"No\"]', 26, '2022-03-04 07:04:50', '2022-03-04 07:04:50', NULL),
(27, 1, 'Has your doctor ever said that you have a heart condition and that you should only do physical activity recommmended by a doctor?', 'checkbox', '[\"Yes\",\"No\"]', 27, '2022-03-04 07:06:15', '2022-03-04 07:06:15', NULL),
(28, 1, 'Have you ever felt pain in your chest when you do physical exercise?', 'checkbox', '[\"Yes\",\"No\"]', 28, '2022-03-04 07:07:57', '2022-03-04 07:07:57', NULL),
(29, 1, 'Is your doctor currently prescribing you drugs or medications?', 'checkbox', '[\"Yes\",\"No\"]', 29, '2022-03-04 07:09:20', '2022-03-04 07:09:20', NULL),
(30, 1, 'Have you ever suffered from unusual shortness of breath at rest or with mild exertion?', 'checkbox', '[\"Yes\",\"No\"]', 30, '2022-03-04 07:10:38', '2022-03-04 07:10:38', NULL),
(31, 1, 'Is there any history of Coronary Heart Disease in your family?', 'checkbox', '[\"Yes\",\"No\"]', 31, '2022-03-04 07:11:35', '2022-03-04 07:11:35', NULL),
(32, 1, 'Do you often feel faint, have spells of severe dizziness or have lost consciousness?', 'checkbox', '[\"Yes\",\"No\"]', 32, '2022-03-04 07:12:57', '2022-03-04 07:12:57', NULL),
(33, 1, 'Do you currently drink more than the average amount of alcohol per week(21units for men and 14 units for women)', 'checkbox', '[\"Yes\",\"No\"]', 33, '2022-03-04 07:14:39', '2022-03-04 07:14:39', NULL),
(34, 1, 'Do you currently smoke?', 'checkbox', '[\"Yes\",\"No\"]', 34, '2022-03-04 07:15:22', '2022-03-04 07:15:22', NULL),
(35, 1, 'Do you NOT currently exercise on a regular basis (at least 3 times a week) and/or work in a job that is physically demanding?', 'checkbox', '[\"Yes\",\"No\"]', 35, '2022-03-04 07:21:03', '2022-03-04 07:21:03', NULL),
(36, 1, 'Do you know of any other reason why you should not participate in a program of physical activity?', 'checkbox', '[\"Yes\",\"No\"]', 36, '2022-03-04 07:22:02', '2022-03-04 07:22:02', NULL),
(37, 1, 'Are you, or is there any possibility that you might be pregnant?', 'checkbox', '[\"Yes\",\"No\"]', 37, '2022-03-04 07:22:51', '2022-03-04 07:22:51', NULL),
(41, 1, 'Do you have any questions? if so list below', 'array', '[null]', 41, '2022-03-04 07:26:41', '2022-03-04 07:26:41', NULL),
(42, 2, 'What is your DOB?', 'date', '[null]', 1, '2022-03-07 06:25:50', '2022-03-07 06:25:50', NULL),
(45, 3, 'What is your DOB?', 'date', '[null]', 1, '2022-03-07 06:29:52', '2022-03-07 06:29:52', NULL),
(48, 2, 'Activity level (BMR)', 'text', '[null]', 4, '2022-03-07 06:32:52', '2022-03-07 06:32:52', NULL),
(49, 3, 'Activity level (BMR)', 'text', '[null]', 4, '2022-03-07 06:33:11', '2022-03-14 14:07:11', '2022-03-14 14:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

CREATE TABLE `recipe_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_chat_users`
--

CREATE TABLE `schedule_chat_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chat_schedule_message_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `online_status` tinyint(1) NOT NULL DEFAULT '0',
  `steps_goal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foot_steps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_intake_goal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_intake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caloric_burn_goal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caloric_burn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caloric_burn_limit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initial_body_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initial_body_goal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accepted_terms_and_conditions` tinyint(1) DEFAULT NULL,
  `subscribe_newsletter` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `image`, `status`, `package_id`, `online_status`, `steps_goal`, `foot_steps`, `water_intake_goal`, `water_intake`, `caloric_burn_goal`, `caloric_burn`, `caloric_burn_limit`, `initial_body_weight`, `initial_body_goal`, `current_weight`, `accepted_terms_and_conditions`, `subscribe_newsletter`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$SyoAZnMFpfjIKLRsPEtLb.wuw7BtUsimB.AnsZH100Q.gcfDC8XoW', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 08:37:06', '2022-03-11 08:37:06', NULL),
(6, 'abul', 'abul@gmail.com', NULL, '$2y$10$XpU46CItWQZYE8Noo10kd.RBkaIxi.6S4l8axWQeOp6ZF5gNb2vBu', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 10:57:00', '2022-03-16 06:31:26', NULL),
(7, 'demo', 'hellouser@gmail.com', NULL, '$2y$10$8WB3Mzc9EC9sMvTsgjSvDuTofcE6UVyW7qdvVC2B8umzi4KWR1dJ2', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 11:28:10', '2022-03-11 11:28:10', NULL),
(8, 'jaan', 'jaan@gmail.com', NULL, '$2y$10$C1B7rBDOIdNKgPSlDvg3IutLWi6nIEvhH4soVQH0ll0KGagsdmUsO', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 11:31:53', '2022-03-11 11:32:16', NULL),
(9, 'new', 'new@gmail.con', NULL, '$2y$10$G.4z.Si1GK.s.vdZnHlSrOmKNj7a4f8lD8wfC/o8s8tKwxWthUHZ.', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 11:44:16', '2022-03-11 11:44:34', NULL),
(10, 'Faiz', 'Faizqaimkhani@gmail.com', NULL, '$2y$10$uSmZayLsvK1R06HKNF9F1.OVR8cxcv1sheCxGHbtedDMtfovGC/I.', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 11:58:16', '2022-03-11 12:00:00', NULL),
(11, 'test', 'test@gmail.com', NULL, '$2y$10$bs7rtbWFT1WZ/mkyvyW6k.LhJE2WvlsEsq48lLH0frflRr7nEc1.m', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 12:05:37', '2022-03-11 12:06:17', NULL),
(12, 'john', 'john@gmail.com', NULL, '$2y$10$yiJNI1RprZvqerNWIM1l0OTXRJeBxD3TRP82RvBna3pZAMowOjCt.', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 12:08:02', '2022-03-11 12:08:33', NULL),
(13, 'azad', 'azad@gmail.con', NULL, '$2y$10$PGyGCGnuGYL27s982GQ2beLc5WFm1R7Vgr7Vzz1/xelrfYVFI3oh6', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-11 12:09:12', '2022-03-11 12:10:36', NULL),
(14, 'testing', 'test@test.com', NULL, '$2y$10$eHcLUNsDDz9UKGIQMXTb2OsHgcbKVtuKeAco0OfDXfuIqSIyPkQfC', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-11 16:20:42', '2022-03-11 16:21:33', NULL),
(15, 'ggg', 'gvg@ff.bin', NULL, '$2y$10$7qWOKz208Obw2wAZY.ILr.RrPk0hmPam/ZwhFFieV5uNgNW.XA6D.', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-11 16:30:11', '2022-03-11 16:30:11', NULL),
(16, 'testing', 'testing@testing.com', NULL, '$2y$10$uIJlwRpqWe9fP84ikFxdNOsbTm73Dza.0ynH3nDXVDj29PJjqnqJi', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-14 11:51:49', '2022-03-14 11:51:49', NULL),
(17, 'testing1', 'testing1@testing.com', NULL, '$2y$10$g3BPX12Qn3ggqjCoyAKpdOPVhl4jm3qQY4VxzCFGedNImBaeMgUoC', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-14 11:56:33', '2022-03-14 12:00:32', NULL),
(18, 'abc', 'abc@gmail.com', NULL, '$2y$10$ZZmnUstQi1WbVLRuipjoTus7XqeM6kYuHjIEklTVn1VmSEE4uOzlK', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-14 12:15:04', '2022-03-14 12:15:04', NULL),
(19, 'testing 2', 'testing2@gmail.com', NULL, '$2y$10$3DzXkt2wWS2DdsMwn.6D9O.34LRm.6VNX3BIIyp3cV0VvQGs8n3wu', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-15 10:45:19', '2022-03-15 10:47:58', NULL),
(20, 'jaan', 'alam@gmail.com', NULL, '$2y$10$LWoGvpzAIbz8K008hTrL2.j06HUi.Xnc0dVaEqbXaztGInyz/vpu6', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-15 13:44:03', '2022-03-15 14:11:40', NULL),
(21, 'djdj', 'dhdh@fjfj.com', NULL, '$2y$10$mBRdhJpg9ZvFhtMUkn33SO7KvSr/5LFvMR9YNKfJ3WWj593UvJatu', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-15 14:22:18', '2022-03-15 14:22:18', NULL),
(22, 'fhfhdh', 'hshdhd@gjfj.com', NULL, '$2y$10$MSZ67b.GkZ6aqAgAAgiIq.zjyvFy6OcCGn44CphiKmBIRR.8vVAHe', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '2022-03-15 14:23:03', '2022-03-15 14:24:08', NULL),
(23, 'djdhd', 'djdjdj@fjfjf.xkfjfj', NULL, '$2y$10$Nlzu5DUvMESHy/Cyt.oot.C.dUgCPAqGSsLFaEKRgt58WESB/Puli', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-15 14:27:50', '2022-03-15 14:28:15', NULL),
(24, 'fhdhf', 'fhfhfh@fjfnf.fkdkd', NULL, '$2y$10$Iz4DQEW3RuIj09To8venveuW1.eMqlXRq6Ln310aJ.9I3HLNzIA6S', NULL, NULL, 1, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-15 14:36:12', '2022-03-15 14:39:23', NULL),
(25, 'Faiz', 'Faizi@gmail.com', NULL, '$2y$10$EtXuXu.W0cuvWukY9jSj3.B6IYPZfSuxsSUBWTnwLm6nvs.zPwiYS', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-15 15:21:16', '2022-03-15 15:23:23', NULL),
(26, 'abc', 'anc@gmail.com', NULL, '$2y$10$Y6aW9fC88FeuPE0dj6d8uOMTOwSWrfKXrOz.KQP6uf1JmiWQZckzS', NULL, NULL, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-15 15:30:27', '2022-03-15 15:30:27', NULL),
(27, 'testing3', 'testing3@gmail.com', NULL, '$2y$10$b1An0qn2Ii05xK0omcdnU.hQ7DeXIj.AHYl5hnmEpNTVjDuBjCYki', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-15 16:14:23', '2022-03-15 16:15:53', NULL),
(28, 'brett morris', 'bigbaldscot@hotmail.co.uk', NULL, '$2y$10$WFUX431T9Z4Vim0f7eQuaOHQBzZz0aAIIP1t6CPwUHrYFr3dykMBG', NULL, NULL, 1, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-03-16 02:16:28', '2022-03-16 07:37:07', NULL),
(29, 'dhdhd', 'dhdj@gmail.com', NULL, '$2y$10$zJ8iFi4GBESg3AUhcMNip.rBe9kxW.54ahMecGoADVWDXIDT1oH66', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-16 07:45:43', '2022-03-16 07:50:02', NULL),
(30, 'hdhfh', 'fhdh@gmail.com', NULL, '$2y$10$wkjFWn7xFucwB4w2VcLr1ODCMkPwcdDg7ZlpS1QGyD8mWzPLmE6J6', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-16 07:59:33', '2022-03-18 02:10:21', NULL),
(31, 'saadyadullahi', 'saadyadullahi11@gmail.com', NULL, '$2y$10$e9DjYaWOpry8pvyuSmszVuSptBZs60wdkBgCgJDc6FyknzprFAi8i', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-16 13:36:46', '2022-03-16 13:37:31', NULL),
(32, 'mari', 'mc.sanchez@hotmail.co.uk', NULL, '$2y$10$yiEcOGjOjE.yZRwmLbPBSezqzA6Py86Pzbd0mFFfcvGY7ufC5qTea', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-03-16 13:41:06', '2022-03-16 13:43:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_achievements`
--

CREATE TABLE `user_achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `badge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_body_measurements`
--

CREATE TABLE `user_body_measurements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hips` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waist` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biceps` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thighs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_body_measurements`
--

INSERT INTO `user_body_measurements` (`id`, `hips`, `waist`, `biceps`, `thighs`, `chest`, `weight`, `height`, `date`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, '20', '34', '30', '20', '42', '74', '12', '5-3-2022', 1, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-11 16:11:55', 6, '2022-03-11 11:11:55', '2022-03-11 11:11:55', NULL),
(11, '12', '121', NULL, '121', '121', NULL, '12', '2022-03-11 16:19:39', 6, '2022-03-11 11:19:39', '2022-03-11 11:19:39', NULL),
(12, '12', '12', NULL, '12', '12', NULL, '12', '2022-03-11 16:21:16', 6, '2022-03-11 11:21:16', '2022-03-11 11:21:16', NULL),
(13, '33', '34', '20', '28', '34', '65', '5.8', '2022-03-11 16:38:27', 7, '2022-03-11 11:38:27', '2022-03-11 11:38:27', NULL),
(14, '12', '12', '12', '12', '12', NULL, '12', '2022-03-11 16:48:52', 9, '2022-03-11 11:48:52', '2022-03-11 11:48:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_diaries`
--

CREATE TABLE `user_diaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_meals`
--

CREATE TABLE `user_meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_packages`
--

CREATE TABLE `user_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `days` int(11) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_packages`
--

INSERT INTO `user_packages` (`id`, `package_id`, `user_id`, `days`, `end_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 1, 6, 60, '2022-05-10', '2022-03-11 10:58:16', '2022-03-11 10:58:16', NULL),
(12, 1, 8, 60, '2022-05-10', '2022-03-11 11:32:16', '2022-03-11 11:32:16', NULL),
(13, 1, 9, 60, '2022-05-10', '2022-03-11 11:44:34', '2022-03-11 11:44:34', NULL),
(14, 1, 10, 60, '2022-05-10', '2022-03-11 12:00:00', '2022-03-11 12:00:00', NULL),
(15, 1, 11, 60, '2022-05-10', '2022-03-11 12:06:17', '2022-03-11 12:06:17', NULL),
(16, 1, 12, 60, '2022-05-10', '2022-03-11 12:08:33', '2022-03-11 12:08:33', NULL),
(17, 1, 13, 60, '2022-05-10', '2022-03-11 12:10:36', '2022-03-11 12:10:36', NULL),
(18, 1, 14, 60, '2022-05-10', '2022-03-11 16:21:33', '2022-03-11 16:21:33', NULL),
(19, 1, 17, 60, '2022-05-13', '2022-03-14 12:00:32', '2022-03-14 12:00:32', NULL),
(20, 1, 19, 60, '2022-05-14', '2022-03-15 10:47:58', '2022-03-15 10:47:58', NULL),
(21, 1, 20, 60, '2022-05-14', '2022-03-15 14:11:40', '2022-03-15 14:11:40', NULL),
(22, 1, 22, 60, '2022-05-14', '2022-03-15 14:24:08', '2022-03-15 14:24:08', NULL),
(23, 1, 23, 60, '2022-05-14', '2022-03-15 14:28:15', '2022-03-15 14:28:15', NULL),
(24, 2, 24, 30, '2022-04-14', '2022-03-15 14:39:23', '2022-03-15 14:39:23', NULL),
(25, 1, 25, 60, '2022-05-14', '2022-03-15 15:23:23', '2022-03-15 15:23:23', NULL),
(26, 1, 27, 60, '2022-05-14', '2022-03-15 16:15:53', '2022-03-15 16:15:53', NULL),
(27, 3, 28, 15, '2022-03-31', '2022-03-16 07:37:07', '2022-03-16 07:37:07', NULL),
(28, 1, 29, 60, '2022-05-15', '2022-03-16 07:50:02', '2022-03-16 07:50:02', NULL),
(29, 1, 31, 60, '2022-05-15', '2022-03-16 13:37:31', '2022-03-16 13:37:31', NULL),
(30, 1, 32, 60, '2022-05-15', '2022-03-16 13:43:24', '2022-03-16 13:43:24', NULL),
(31, 1, 30, 60, '2022-05-17', '2022-03-18 02:10:21', '2022-03-18 02:10:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_progress_photos`
--

CREATE TABLE `user_progress_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `front_image` longtext COLLATE utf8mb4_unicode_ci,
  `back_image` longtext COLLATE utf8mb4_unicode_ci,
  `side_image` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `file` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exercise_id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_schedule_messages`
--
ALTER TABLE `chat_schedule_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise_categories`
--
ALTER TABLE `exercise_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_recipes`
--
ALTER TABLE `food_recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_answers`
--
ALTER TABLE `profile_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_questions`
--
ALTER TABLE `profile_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_chat_users`
--
ALTER TABLE `schedule_chat_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
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
-- Indexes for table `user_achievements`
--
ALTER TABLE `user_achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_body_measurements`
--
ALTER TABLE `user_body_measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_diaries`
--
ALTER TABLE `user_diaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_meals`
--
ALTER TABLE `user_meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_packages`
--
ALTER TABLE `user_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_progress_photos`
--
ALTER TABLE `user_progress_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_schedule_messages`
--
ALTER TABLE `chat_schedule_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercise_categories`
--
ALTER TABLE `exercise_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_recipes`
--
ALTER TABLE `food_recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_answers`
--
ALTER TABLE `profile_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT for table `profile_questions`
--
ALTER TABLE `profile_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_chat_users`
--
ALTER TABLE `schedule_chat_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user_achievements`
--
ALTER TABLE `user_achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_body_measurements`
--
ALTER TABLE `user_body_measurements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_diaries`
--
ALTER TABLE `user_diaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_meals`
--
ALTER TABLE `user_meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_packages`
--
ALTER TABLE `user_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_progress_photos`
--
ALTER TABLE `user_progress_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
