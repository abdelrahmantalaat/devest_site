-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2021 at 08:37 PM
-- Server version: 10.3.30-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devest_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `content`, `image`, `category_id`, `author`, `created_at`, `updated_at`) VALUES
(7, 'تحت الانشاء', '<p>تحت الانشاء</p>', '/tmp/phpBKEaL6', 1, 'Anupama dilshan', '2021-06-17 16:20:56', '2021-06-24 15:49:23'),
(8, 'تحت الانشاء', '<p>تحت الانشاء</p>', '/tmp/phpFTYrqV', 2, 'Anupama dilshan', '2021-06-17 16:21:21', '2021-06-24 15:49:43'),
(9, 'تحت الانشاء', '<p>تحت الانشاء</p>', '/tmp/phpVtteER', 2, 'Anupama dilshan', '2021-06-17 16:30:57', '2021-06-24 15:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tech', NULL, NULL),
(2, 'Mobile', NULL, NULL),
(3, 'News', NULL, NULL),
(4, 'Platforms', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Anupama dilshan', 'The Tangible Words team have been on our radar for some time. However we had not had occasion to use their comprehensive services until October of last year.', '/private/var/tmp/phpvbEJmQ', '2021-06-17 16:59:04', '2021-06-23 15:42:33'),
(2, 'Nikki Bakker', 'We have worked with Tangible Words for over a year now. It has been a very productive year as they have helped us in so many ways.', '/private/var/tmp/phpYGRqLj', '2021-06-17 16:59:43', '2021-06-23 15:43:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `contact_no`, `email`, `service_type`, `message`, `created_at`, `updated_at`) VALUES
(1, 'gvjhvgh', 'cfhcf', 'sashayacosta@gmail.com', 'ssssss', 'hftnvghg', '2021-06-20 14:06:50', '2021-06-20 14:06:50'),
(2, 'Anupama dilshan', 'ssergthfyjguhkj', 'anupama.dilshan@aiesec.net', 'abc', 'hghdg', '2021-06-23 12:09:54', '2021-06-23 12:09:54'),
(3, 'Gffhd', 'Gfcb', 'bffh@bf.v', 'ssssss', 'Bcg', '2021-06-24 12:10:27', '2021-06-24 12:10:27');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(82, '2014_10_12_000000_create_users_table', 1),
(83, '2014_10_12_100000_create_password_resets_table', 1),
(84, '2019_08_19_000000_create_failed_jobs_table', 1),
(85, '2021_05_27_135424_create_settings_table', 1),
(86, '2021_06_06_151746_create_pages_table', 1),
(87, '2021_06_07_104955_create_portfolios_table', 1),
(88, '2021_06_08_133015_create_clients_table', 1),
(89, '2021_06_16_144659_create_contacts_table', 1),
(90, '2021_06_17_112225_create_categories_table', 1),
(91, '2021_06_18_105251_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('text','number','long_text','image_url') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `key`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'main_text', 'text', 'شركاؤك نحو النجاح', NULL, '2021-06-24 15:53:20'),
(2, 'left_text', 'long_text', '<p><span style=\"color:#ffffff\">نؤمن بقيمة منتجك وانك تستحق افضل مستوي خدمة</span></p>', NULL, '2021-06-24 15:53:20'),
(3, 'right_text', 'long_text', '<p><span style=\"color:#ffffff\">نحن نبني حلولاً برمجية تقدم تجارب مستخدم مخصصة تضمن قيمة أعلى مدى الحياة.</span></p>', NULL, '2021-06-24 15:53:20'),
(6, 'service_title', 'text', 'نوفر افضل مستوي خدمة', NULL, '2021-06-24 15:53:20'),
(7, 'service1_icon', 'image_url', '/private/var/tmp/phpYfFVHO', NULL, '2021-06-20 12:19:18'),
(8, 'service1_text', 'text', 'التسويق الالكتروني', NULL, '2021-06-24 15:53:20'),
(9, 'service2_icon', 'image_url', '/private/var/tmp/php6UvqEb', NULL, '2021-06-20 12:19:18'),
(10, 'service2_text', 'text', 'انترنت الأشياء', NULL, '2021-06-24 15:53:20'),
(11, 'service3_icon', 'image_url', '/private/var/tmp/phplTctFw', NULL, '2021-06-20 12:19:18'),
(12, 'service3_text', 'text', 'انشاء التطبيقات', NULL, '2021-06-24 15:53:20'),
(13, 'service4_icon', 'image_url', '/private/var/tmp/phpw7TsYl', NULL, '2021-06-20 12:19:18'),
(14, 'service4_text', 'text', 'انشاء المواقع', NULL, '2021-06-24 15:53:20'),
(15, 'about_title', 'text', 'شركة تطوير برمجيات متخصصة', NULL, '2021-06-24 15:53:20'),
(16, 'about_descrption', 'long_text', '<p>شركة تجمع رياديّ الأعمال المبدعين، والذين أسسوا وساعدوا في بناء مشاريع رائدة في الشرق الأوسط .. واثقون بأننـا نصنع المستقبل من خلال تمكين رواد الأعمال لبناء شركات رائدة في الشرق الأوسط وشمال افريقيا</p>', NULL, '2021-06-24 15:53:20'),
(17, 'about_link', 'text', 'https://www.youtube.com/embed/FzcfZyEhOoI', NULL, '2021-06-24 15:53:20'),
(18, 'about_thumbnail', 'image_url', '/private/var/tmp/phpTEZ6WG', NULL, '2021-06-16 10:14:54'),
(19, 'about_facts', 'long_text', '<ul>\r\n	<li><img alt=\"\" src=\"{{ asset(\'images/icons/1.png\') }}\" />\r\n	<p>العالم يتغير بأشخاص ملهمين</p>\r\n	</li>\r\n	<li><img alt=\"\" src=\"{{ asset(\'images/icons/2.png\') }}\" />\r\n	<p>التطور المستمر هو أساس الريادة</p>\r\n	</li>\r\n	<li><img alt=\"\" src=\"{{ asset(\'images/icons/3.png\') }}\" />\r\n	<p>الفريق المبدع يصنع نتائج استثنائية</p>\r\n	</li>\r\n	<li><img alt=\"\" src=\"{{ asset(\'images/icons/4.png\') }}\" />\r\n	<p>الابتكار يجعلك تسبق الجميع&nbsp;</p>\r\n	</li>\r\n</ul>', NULL, '2021-06-24 15:53:20'),
(20, 'stat1_no', 'number', '100', NULL, '2021-06-24 15:53:20'),
(21, 'stat1_text', 'text', 'إدارة نظام', NULL, '2021-06-24 15:53:20'),
(22, 'stat2_no', 'number', '100', NULL, '2021-06-24 15:53:20'),
(23, 'stat1_text', 'text', 'تطبيق موبايل', NULL, '2021-06-24 15:53:20'),
(24, 'stat3_no', 'number', '100', NULL, '2021-06-24 15:53:20'),
(25, 'stat3_text', 'text', 'موقع الكتروني', NULL, '2021-06-24 15:53:20'),
(26, 'portfolio_title', 'text', 'نحول الأفكار الى واقع ملموس', NULL, '2021-06-24 15:53:20'),
(27, 'portfolio_description', 'long_text', '<p>نساعد رواد الأعمال بتحويل افكارهم الى واقع واعمال تجارية ربحية</p>', NULL, '2021-06-24 15:53:20'),
(28, 'blog_title', 'text', 'تعلم دائما لتصل الى هدفك', NULL, '2021-06-24 15:53:20'),
(29, 'client_title', 'text', 'نفتخر دوماً بما يقوله عنا عملاؤنا', NULL, '2021-06-24 15:53:20'),
(30, 'contact_title', 'text', 'شاركنا فكرتك الان', NULL, '2021-06-24 15:53:20'),
(31, 'about_fact_1', 'long_text', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص', NULL, NULL),
(32, 'about_fact2', 'long_text', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق\r\n\r\n', NULL, NULL),
(33, 'about_fact3', 'long_text', 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص\r\n\r\n', NULL, NULL),
(34, 'about_fact4', 'long_text', '\r\nهذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anupama.dilshan@aiesec.net', '$2y$10$Ctw5/tPIJ8JEsjdp/iqV2eMdcnZa9VBqchdop7DTFfTbB6/Ly2o5O', '2021-06-20 11:34:50'),
('me@mhdads.com', '$2y$10$wFwOqrvTGhnDtzg2YrwhC.q.z8NtRMpWN/Pm2rTzdmhySyR9ZDnCK', '2021-06-23 16:54:36'),
('anupama.dilshan@aiesec.net', '$2y$10$Ctw5/tPIJ8JEsjdp/iqV2eMdcnZa9VBqchdop7DTFfTbB6/Ly2o5O', '2021-06-20 11:34:50'),
('anupama.dilshan@aiesec.net', '$2y$10$Ctw5/tPIJ8JEsjdp/iqV2eMdcnZa9VBqchdop7DTFfTbB6/Ly2o5O', '2021-06-20 11:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `platforms` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `content`, `image`, `platforms`, `created_at`, `updated_at`) VALUES
(13, 'تحت الانشاء', '<p>تحت الانشاء</p>', '/tmp/php4EAGRe', '<i class=\"fab fa-apple fa-x\"></i> <i class=\"fab fa-apple fa-x\"></i>', '2021-06-16 12:13:26', '2021-06-24 15:50:47'),
(14, 'تحت الانشاء', '<p>تحت الانشاء</p>', '/tmp/phpyoTIaR', '<i class=\"fab fa-windows\"></i> <i class=\"fab fa-apple\"></i>', '2021-06-16 12:13:26', '2021-06-24 15:51:07'),
(16, 'تحت الانشاء', '<p>تحت الانشاء</p>', '/tmp/phpU1C3tm', '<i class=\"fab fa-windows\"></i> <i class=\"fab fa-apple\"></i>', '2021-06-16 12:13:26', '2021-06-24 15:51:28');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('text','number','long_text','image_url') COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'light logo', 'image_url', 'logo.png', NULL, NULL),
(2, 'dark logo', 'image_url', 'logo-black.png', NULL, NULL),
(3, 'favicon', 'image_url', 'favicon.png', NULL, NULL),
(4, 'LinkedIn link', 'text', 'https://www.linkedin.com/company/devestcompany', NULL, '2021-06-24 15:47:32'),
(5, 'Twitter link', 'text', 'https://twitter.com/devestcompany', NULL, '2021-06-24 15:47:32'),
(6, 'Facebook link', 'text', 'https://www.facebook.com/DevestCompany', NULL, '2021-06-24 15:47:32'),
(7, 'Youtube link', 'text', '#', NULL, '2021-06-24 15:47:32'),
(8, 'Contact number', 'text', '00966502127302', NULL, '2021-06-24 15:47:32'),
(9, 'email', 'text', 'info@devest.co', NULL, '2021-06-24 15:47:32'),
(10, 'location', 'text', 'El khabar, KSA', NULL, '2021-06-24 15:47:32'),
(11, 'copyright text', 'text', 'DEVEST Company © 2021', NULL, '2021-06-24 15:47:32');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'anupama', 'anupama@gmail.com', NULL, '123', NULL, NULL, NULL),
(3, 'mohamed amar', 'mohamed.amar@gmail.com', NULL, '$2y$10$sVhMeCVs3pvlNRtbG66VLe5GGkDA4PZ5Upd7yt1QL6bARJFRluKj6', NULL, '2021-06-17 11:52:43', '2021-06-17 11:52:43'),
(4, 'Anupama dilshan', 'anupama.dilshan@yahoo.com', NULL, '$2y$10$Dmjx.gP5.oZ51peid7.mke0RwCxT0jg1BXVdWefBh/QeocgOCdPPu', NULL, '2021-06-17 14:31:46', '2021-06-17 14:31:46'),
(5, 'eduvardo', 'me@mhdads.com', NULL, '96e79218965eb72c92a549dd5a330112', '96e79218965eb72c92a549dd5a330112', '2021-06-20 11:35:21', '2021-06-20 11:35:21'),
(6, 'Anupama dilshan', 'anupama.dilshan@aiesec.net', NULL, '$2y$10$Vq2ML4nypAxCQ7N2agd4nO0TFVtw3XLsxzOWg1.qVegqbQIemO5oy', NULL, '2021-06-22 17:40:11', '2021-06-22 17:40:11'),
(7, 'Mohamed Ads', 'admin@admin.com', NULL, '$2y$10$IY/mNotA1tJajj0GmMOGd.eR6MyU.jLTX/uplRQGUKmH/ma8AqJ1G', NULL, '2021-06-23 17:06:37', '2021-06-23 17:06:37'),
(8, 'Mohamed Ads', 'mrida0@icloud.com', NULL, '$2y$10$/6NT.CDbb/PWR67Z62s3OOOHQyqaorD5MNQ/JWtQpM72xtpEjisxa', NULL, '2021-06-24 12:17:46', '2021-06-24 12:17:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
