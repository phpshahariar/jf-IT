-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2019 at 05:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, '1567238691_achievements_cit-media-bg.jpg', 1, '2019-08-31 02:04:51', '2019-08-31 02:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `information`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Exam Routing', 'Exam Routing', 1, '2019-08-30 00:21:01', '2019-08-30 00:21:01'),
(9, 'Class Routing', 'Class Routing', 1, '2019-08-30 00:21:11', '2019-08-30 00:21:11'),
(10, 'Result', 'Result', 1, '2019-08-30 00:21:29', '2019-08-30 00:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `images`, `status`, `created_at`, `updated_at`) VALUES
(21, 'Java Developer', '<p>Wordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme CustomizationWordpress Theme Customization</p>', '1567162830_course_image_apps-development.jpg', 1, '2019-08-30 05:00:30', '2019-08-30 05:00:30'),
(23, 'Web Development', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', '1567163046_course_image_web_development_hover.png', 1, '2019-08-30 05:04:06', '2019-08-30 05:04:06'),
(24, 'Web Design', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', '1567163062_course_image_3d_hover.png', 1, '2019-08-30 05:04:22', '2019-08-30 05:04:22'),
(25, 'Graphics Design', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', '1567163082_course_image_filmmaking-hover.jpg', 1, '2019-08-30 05:04:42', '2019-08-30 05:04:42'),
(26, 'Wordpress Theme Customization', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', '1567163127_course_image_seo_hover.png', 1, '2019-08-30 05:05:27', '2019-08-30 05:05:27'),
(27, 'Web Development Laravel', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', '1567163230_course_image_web_development_hover.png', 1, '2019-08-30 05:07:10', '2019-08-30 05:07:10'),
(28, 'Web Development', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', '1567163253_course_image_web_design_hover.png', 1, '2019-08-30 05:07:33', '2019-08-30 05:07:33'),
(29, 'Graphics Design', '<p>Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development</p>', '1567163277_course_image_apps-development.jpg', 1, '2019-08-30 05:07:57', '2019-08-30 05:07:57');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shahariar', 'I think that its Best it institute in any private institute and our sir , quality team are best and helpful.so I expected that I will gain in my goal. Go ahead Creative IT Institute and we are staying with You', 1, '2019-08-31 06:09:36', '2019-08-31 06:09:36'),
(2, 'Admin', 'Their course outline is very well organized and professional. It helps you to learn professional level of Graphics Design work.I am very pleased with their training process. special thank our class teacher Md Hafiz sir he take every class very carefully and effective. Thank you.', 1, '2019-08-31 06:10:12', '2019-08-31 06:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institutes`
--

INSERT INTO `institutes` (`id`, `images`, `status`, `created_at`, `updated_at`) VALUES
(2, '1567237231_ins_work_spotlight-bg.jpg', 1, '2019-08-31 01:40:31', '2019-08-31 03:35:41');

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
(3, '2019_08_01_070047_create_categories_table', 2),
(4, '2019_08_01_114216_create_courses_table', 3),
(5, '2019_08_01_171019_create_sliders_table', 4),
(6, '2019_08_02_055915_create_notices_table', 5),
(7, '2019_08_30_112636_create_seminars_table', 6),
(8, '2019_08_30_162853_create_students_table', 7),
(9, '2019_08_31_070041_create_institutes_table', 8),
(10, '2019_08_31_075306_create_achievements_table', 9),
(11, '2019_08_31_100302_create_workplaces_table', 10),
(12, '2019_08_31_120310_create_feedback_table', 11),
(13, '2019_09_01_072205_create_student_galleries_table', 12),
(14, '2019_09_01_160521_create_teachers_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `images`, `status`, `created_at`, `updated_at`) VALUES
(2, '<p>Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate it ★★★★★ recommended.</p>\r\n\r\n<p>Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate it ★★★★★ recommended.</p>', '1564735796_course_image_img1.jpg', 1, '2019-08-02 02:49:57', '2019-08-02 02:49:57');

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
-- Table structure for table `seminars`
--

CREATE TABLE `seminars` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seminars`
--

INSERT INTO `seminars` (`id`, `images`, `status`, `created_at`, `updated_at`) VALUES
(2, '1567180039_seminar_seminar-p.jpg', 1, '2019-08-30 09:47:19', '2019-08-30 09:47:19'),
(5, '1567181478_seminar_counter.jpg', 1, '2019-08-30 10:11:18', '2019-08-30 10:11:18'),
(6, '1567181723_seminar_Untitled-1.jpg', 1, '2019-08-30 10:15:23', '2019-08-30 10:15:23');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, '1567152461_slider_image_ab1.jpg', 1, '2019-08-30 02:07:41', '2019-08-30 02:48:46'),
(4, '1567154939_slider_image_2nd.jpg', 1, '2019-08-30 02:48:59', '2019-08-30 02:48:59'),
(5, '1567154958_slider_image_PN603D.jpg', 1, '2019-08-30 02:49:18', '2019-08-30 02:49:18'),
(6, '1567161341_slider_image_g5.jpg', 1, '2019-08-30 04:35:42', '2019-08-30 04:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, '1567183429_stu_work_gallery-1 (1).jpg', 0, '2019-08-30 10:43:49', '2019-08-31 01:39:09'),
(2, '1567183489_stu_work_gallery-4.jpg', 1, '2019-08-30 10:44:49', '2019-08-30 10:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_galleries`
--

CREATE TABLE `student_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_galleries`
--

INSERT INTO `student_galleries` (`id`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, '1567324166_stu-gallery_a4.jpg', 1, '2019-09-01 01:49:26', '2019-09-01 01:49:34'),
(2, '1567353257_stu-gallery_a1.jpg', 1, '2019-09-01 09:54:17', '2019-09-01 09:54:17'),
(3, '1567353276_stu-gallery_g2.jpg', 1, '2019-09-01 09:54:36', '2019-09-01 09:54:36'),
(4, '1567353295_stu-gallery_a2.jpg', 1, '2019-09-01 09:54:55', '2019-09-01 09:54:55'),
(5, '1567353376_stu-gallery_g8.jpg', 1, '2019-09-01 09:56:16', '2019-09-01 09:56:16'),
(7, '1567353439_stu-gallery_a4.jpg', 1, '2019-09-01 09:57:19', '2019-09-01 09:57:19'),
(8, '1567353447_stu-gallery_a1.jpg', 1, '2019-09-01 09:57:27', '2019-09-01 09:57:27'),
(9, '1567353454_stu-gallery_a3.jpg', 1, '2019-09-01 09:57:34', '2019-09-01 09:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `images`, `name`, `dept`, `course_info`, `status`, `created_at`, `updated_at`) VALUES
(1, '1567356248_tec-gallery_t1.jpg', 'Shahariar', 'Web Development', 'Web DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb DevelopmentWeb Development', 1, '2019-09-01 10:44:08', '2019-09-01 10:45:49'),
(3, '1567357482_tec-gallery_t2.jpg', 'Nitu Sarkar', 'Web Development Design', 'Web Development DesignWeb Development DesignWeb Development DesignWeb Development DesignWeb Development DesignWeb Development DesignWeb Development Design', 1, '2019-09-01 11:04:42', '2019-09-01 11:04:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'JF Institute', 'jf@info.com', NULL, '$2y$10$d1G0TrmYrAtFZ6r5YSVCFO4dl8RRzODioWEqVlEwWsGOMAQdI/gpW', NULL, '2019-07-31 12:07:22', '2019-07-31 12:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `workplaces`
--

CREATE TABLE `workplaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workplaces`
--

INSERT INTO `workplaces` (`id`, `images`, `status`, `created_at`, `updated_at`) VALUES
(1, '1567246700_work_stu-wp-bg.jpg', 1, '2019-08-31 04:18:20', '2019-08-31 04:53:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutes`
--
ALTER TABLE `institutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `seminars`
--
ALTER TABLE `seminars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_galleries`
--
ALTER TABLE `student_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workplaces`
--
ALTER TABLE `workplaces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seminars`
--
ALTER TABLE `seminars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_galleries`
--
ALTER TABLE `student_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `workplaces`
--
ALTER TABLE `workplaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
