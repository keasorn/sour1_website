-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2019 at 01:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sour1_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `applies`
--

CREATE TABLE `applies` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `first_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `attach_file` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `cp_first_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_last_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_position` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_phone` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_email` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_nation` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_address` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp_gender` int(11) NOT NULL,
  `com_name` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_type` int(11) NOT NULL,
  `com_address` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_tel` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_phone` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_email` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_web` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `cp_first_name`, `cp_last_name`, `cp_position`, `cp_phone`, `cp_email`, `cp_nation`, `cp_address`, `cp_gender`, `com_name`, `com_type`, `com_address`, `com_tel`, `com_phone`, `com_email`, `com_web`, `com_description`, `created_at`, `updated_at`, `logo`) VALUES
(1, 'KEA', 'CP', 'AA', 'BB', 'CC', 'DD', 'EE', 1, 'ABC Col TD', 1, 'aaa', '1231', '123', '12321', '123212', 'Training and Test file formats\n                    Both the training file and the test file need to be in a particular format for CRF++ to work properly. Generally speaking, training and test file must consist of multiple tokens. In addition, a token consists of multiple (but fixed-numbers) columns. The definition of tokens depends on tasks, however, in most of typical cases, they simply correspond to words. Each token must be represented in one line, with the columns separated by white space (spaces or tabular characters). A sequence of token becomes a sentence. To identify the boundary between sentences, an empty line is put.', NULL, NULL, 'logo/smart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company_types`
--

CREATE TABLE `company_types` (
  `id` int(11) NOT NULL,
  `title_en` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ch` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_types`
--

INSERT INTO `company_types` (`id`, `title_en`, `title_ch`, `title_jp`, `created_at`, `updated_at`) VALUES
(1, 'Type1', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(11) NOT NULL,
  `title_en` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ch` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `title_en`, `title_ch`, `title_jp`, `created_at`, `updated_at`) VALUES
(1, 'Male', '', '', NULL, NULL),
(2, 'Female', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_vacancies` int(11) NOT NULL,
  `job_type` int(11) NOT NULL,
  `pow` int(11) NOT NULL,
  `salary` double(8,2) NOT NULL,
  `job_level` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `closing_date` date NOT NULL,
  `duties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `publication` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `number_vacancies`, `job_type`, `pow`, `salary`, `job_level`, `user`, `closing_date`, `duties`, `requirement`, `note`, `status`, `publication`, `created_at`, `updated_at`) VALUES
(3, 'IT Staff', 23, 1, 1, 23.00, 1, 1, '2020-03-12', '<ul><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to<br></span><br></li></ul>', '<ul><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to<br></span><br></li></ul>', '<ul><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to<br></span><br></li></ul>', 0, 1, '2019-10-11 02:41:12', '2019-10-11 04:24:24'),
(4, 'Teacher', 2, 1, 1, 300.00, 1, 1, '2019-10-25', '<ol><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;<br></span><br></li></ol>', '<ol><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;<br></span></li></ol>', '<ol><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;<br></span></li></ol>', 0, 1, '2019-10-11 03:00:27', '2019-10-11 04:27:32'),
(5, 'IT Officer', 1, 1, 1, 300.00, 1, 1, '2019-10-17', '<ul><li>/so-manage/job/1</li><li>/so-manage/job/1</li><li>/so-manage/job/1<br></li></ul>', '<ul><li>/so-manage/job/1</li><li>/so-manage/job/1</li><li>/so-manage/job/1</li></ul>', '<ul><li>/so-manage/job/1</li><li>/so-manage/job/1</li><li>/so-manage/job/1</li></ul>', 0, 1, '2019-10-11 03:41:34', '2019-10-11 04:27:47'),
(6, 'ACCOUNTING', 1, 1, 1, 230.00, 1, 1, '2019-10-19', '<p>fsdfs</p>', '<p>sdfds</p>', '<p>sdfsd</p>', 0, 1, '2019-10-11 04:03:05', '2019-10-11 04:14:43'),
(7, 'Sale', 2, 1, 1, 200.00, 1, 1, '2019-10-17', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content<br></li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', 0, 1, '2019-10-11 04:29:54', '2019-10-11 04:29:54'),
(8, 'Admin', 2, 1, 1, 400.00, 1, 1, '2019-10-25', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', 0, 1, '2019-10-11 04:30:34', '2019-10-11 04:30:34'),
(9, 'CSO', 3, 1, 1, 200.00, 1, 1, '2019-11-15', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', 0, 1, '2019-10-11 04:31:13', '2019-10-11 04:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `job_levels`
--

CREATE TABLE `job_levels` (
  `id` int(11) NOT NULL,
  `title_en` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ch` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_levels`
--

INSERT INTO `job_levels` (`id`, `title_en`, `title_ch`, `title_jp`, `created_at`, `updated_at`) VALUES
(1, 'Siner', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` int(11) NOT NULL,
  `title_en` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ch` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `title_en`, `title_ch`, `title_jp`, `created_at`, `updated_at`) VALUES
(1, 'FULL TIME', '', '', NULL, NULL),
(2, 'PART TIME', '', '', NULL, NULL);

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
(1, '2013_10_05_015758_create_job_types_table', 1),
(2, '2013_10_05_020014_create_user_types_table', 1),
(3, '2013_10_05_020033_create_company_types_table', 1),
(4, '2013_10_05_020108_create_work_places_table', 1),
(5, '2013_10_05_020125_create_job_levels_table', 1),
(6, '2013_10_05_020613_create_genders_table', 1),
(7, '2014_10_05_020046_create_companys_table', 1),
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_10_05_020138_create_jobs_table', 1),
(11, '2019_10_05_020159_create_posts_table', 1),
(12, '2019_10_05_022455_create_applies_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `def_img` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `img_profile` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `company` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `user_name`, `email`, `email_verified_at`, `img_profile`, `password`, `user_type`, `gender`, `company`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kea', 'sorn', '', '', '2019-10-23 08:47:41', NULL, '', 1, 1, 1, 0, NULL, '2019-10-15 08:49:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `title_en` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ch` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `title_en`, `title_ch`, `title_jp`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `work_places`
--

CREATE TABLE `work_places` (
  `id` int(11) NOT NULL,
  `title_en` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ch` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_jp` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_places`
--

INSERT INTO `work_places` (`id`, `title_en`, `title_ch`, `title_jp`, `created_at`, `updated_at`) VALUES
(1, 'Banteay Mean Chey', '', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applies_job_id_index` (`job_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `companies_cp_gender_index` (`cp_gender`),
  ADD KEY `companies_com_type_index` (`com_type`);

--
-- Indexes for table `company_types`
--
ALTER TABLE `company_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_job_type_index` (`job_type`),
  ADD KEY `jobs_pow_index` (`pow`),
  ADD KEY `jobs_job_level_index` (`job_level`),
  ADD KEY `jobs_user_index` (`user`);

--
-- Indexes for table `job_levels`
--
ALTER TABLE `job_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_type_index` (`user_type`),
  ADD KEY `users_gender_index` (`gender`),
  ADD KEY `users_company_index` (`company`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_places`
--
ALTER TABLE `work_places`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applies`
--
ALTER TABLE `applies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company_types`
--
ALTER TABLE `company_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_levels`
--
ALTER TABLE `job_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work_places`
--
ALTER TABLE `work_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_com_type_foreign` FOREIGN KEY (`com_type`) REFERENCES `company_types` (`id`),
  ADD CONSTRAINT `companies_cp_gender_foreign` FOREIGN KEY (`cp_gender`) REFERENCES `genders` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_job_level_foreign` FOREIGN KEY (`job_level`) REFERENCES `job_levels` (`id`),
  ADD CONSTRAINT `jobs_job_type_foreign` FOREIGN KEY (`job_type`) REFERENCES `job_types` (`id`),
  ADD CONSTRAINT `jobs_pow_foreign` FOREIGN KEY (`pow`) REFERENCES `work_places` (`id`),
  ADD CONSTRAINT `jobs_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_company_foreign` FOREIGN KEY (`company`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `users_gender_foreign` FOREIGN KEY (`gender`) REFERENCES `genders` (`id`),
  ADD CONSTRAINT `users_user_type_foreign` FOREIGN KEY (`user_type`) REFERENCES `user_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
