-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2019 at 11:51 AM
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
(1, 'KEA', 'CP', 'AA', 'BB', 'CC', 'DD', 'EE', 1, 'ABC Col TD', 1, 'aaa', '1231', '123', '12321', '123212', 'Training and Test file formats\n                    Both the training file and the test file need to be in a particular format for CRF++ to work properly. Generally speaking, training and test file must consist of multiple tokens. In addition, a token consists of multiple (but fixed-numbers) columns. The definition of tokens depends on tasks, however, in most of typical cases, they simply correspond to words. Each token must be represented in one line, with the columns separated by white space (spaces or tabular characters). A sequence of token becomes a sentence. To identify the boundary between sentences, an empty line is put.', NULL, NULL, 'logo/smart.jpg'),
(4, '', '', '', '', '', '', '', 1, 'ABCDEF COMPANY', 1, '', '', '', '', '', '', '2019-10-23 01:47:29', '2019-10-23 01:47:29', NULL),
(5, '', '', '', '', '', '', '', 1, 'MY COM', 1, '', '', '', '', '', '', '2019-10-23 01:52:52', '2019-10-23 01:52:52', NULL),
(6, '', '', '', '', '', '', '', 1, 'MY COM', 1, '', '', '', '', '', '', '2019-10-23 01:53:09', '2019-10-23 01:53:09', NULL),
(7, '', '', '', '', '', '', '', 1, 'MY COM', 1, '', '', '', '', '', '', '2019-10-23 01:53:22', '2019-10-23 01:53:22', NULL),
(8, '', '', '', '', '', '', '', 1, 'MY COM', 1, '', '', '', '', '', '', '2019-10-23 01:53:45', '2019-10-23 01:53:45', NULL),
(9, '', '', '', '', '', '', '', 1, 'MY COM', 1, '', '', '', '', '', '', '2019-10-23 01:54:47', '2019-10-23 01:54:47', NULL),
(10, '', '', '', '', '', '', '', 1, 'TESTING', 1, '', '', '', '', '', '', '2019-10-23 01:56:17', '2019-10-23 01:56:17', NULL),
(11, '', '', '', '', '', '', '', 1, 'TESTING', 1, '', '', '', '', '', '', '2019-10-23 01:56:39', '2019-10-23 01:56:39', NULL),
(12, 'sdfds', 'sdfds', 'dsfds', 'sdfndksjfn', 'jksndjkf', 'sdfjdjks', 'sdfdsf', 1, 'sdfdsfdsfdsfdsfds', 1, 'sdfdsf', 'sdfdsf', 'sfds', 'sdfds', 'sfdsf', 'sfdsfdsfds', '2019-10-23 01:57:03', '2019-10-23 02:42:16', NULL),
(13, '', '', '', '', '', '', '', 1, 'TESTING', 1, '', '', '', '', '', '', '2019-10-23 01:57:34', '2019-10-23 01:57:34', NULL),
(14, '', '', '', '', '', '', '', 1, 'TESTING', 1, '', '', '', '', '', '', '2019-10-23 01:57:49', '2019-10-23 01:57:49', NULL),
(15, '', '', '', '', '', '', '', 1, 'TESTING', 1, '', '', '', '', '', '', '2019-10-23 01:58:38', '2019-10-23 01:58:38', NULL),
(16, '', '', '', '', '', '', '', 1, 'TESTING', 1, '', '', '', '', '', '', '2019-10-23 01:59:09', '2019-10-23 01:59:09', NULL),
(17, 'Kea', 'sorn', 'HR', '0933330089', 'kea3rd@gamil.com', 'KHMER', 'Phnom Penh', 1, 'ANZ', 1, 'Phnom Penh', '02312345678', '093330089', 'kea@gmail.com', 'www.anz.com', 'abcd', '2019-10-23 03:23:26', '2019-10-23 03:25:57', NULL);

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
(1, 'Public Sector', '', '', NULL, NULL),
(2, 'Private Sector', '', '', NULL, NULL),
(3, 'NGO', '', '', NULL, NULL);

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
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_vacancies` int(11) NOT NULL,
  `job_type` int(11) NOT NULL,
  `pow` int(11) NOT NULL,
  `salary` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_level` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `closing_date` date NOT NULL,
  `duties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `publication` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `number_vacancies`, `job_type`, `pow`, `salary`, `job_level`, `user`, `closing_date`, `duties`, `requirement`, `note`, `status`, `publication`, `created_at`, `updated_at`) VALUES
(3, 'IT Staff', 23, 1, 1, '23.00', 1, 1, '2020-03-12', '<ul><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to<br></span><br></li></ul>', '<ul><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to<br></span><br></li></ul>', '<ul><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both the training file and the test file need to<br></span><br></li></ul>', 0, 1, '2019-10-11 02:41:12', '2019-10-13 00:26:01'),
(4, 'Teacher', 2, 1, 1, '300.00', 1, 1, '2019-10-25', '<ol><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;<br></span><br></li></ol>', '<ol><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;<br></span></li></ol>', '<ol><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;</span></li><li><span style=\"color: rgb(99, 110, 123); font-family: Montserrat, sans-serif; font-size: 15px;\">Training and Test file formats Both&nbsp;<br></span></li></ol>', 0, 1, '2019-10-11 03:00:27', '2019-10-11 04:27:32'),
(5, 'IT Officer', 1, 1, 1, '300.00', 1, 1, '2019-10-17', '<ul><li>/so-manage/job/1</li><li>/so-manage/job/1</li><li>/so-manage/job/1<br></li></ul>', '<ul><li>/so-manage/job/1</li><li>/so-manage/job/1</li><li>/so-manage/job/1</li></ul>', '<ul><li>/so-manage/job/1</li><li>/so-manage/job/1</li><li>/so-manage/job/1</li></ul>', 0, 1, '2019-10-11 03:41:34', '2019-10-11 04:27:47'),
(7, 'Sale', 2, 1, 1, '200.00', 1, 1, '2019-10-17', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content<br></li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', 0, 1, '2019-10-11 04:29:54', '2019-10-11 04:29:54'),
(8, 'Admin', 2, 1, 1, '400.00', 1, 1, '2019-10-25', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', 0, 1, '2019-10-11 04:30:34', '2019-10-11 04:30:34'),
(9, 'CSO', 3, 1, 1, '200.00', 1, 1, '2019-11-15', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', '<ul><li>content&nbsp;</li><li>content</li><li>content</li><li>content</li></ul>', 0, 1, '2019-10-11 04:31:13', '2019-10-11 04:31:13'),
(10, 'PYTHON TEACHER', 3, 1, 1, '123.00', 1, 1, '2019-10-11', '<p>fsdsfds</p>', '<p>sdfds</p>', '<p>dfdsfds</p>', 0, 1, '2019-10-13 00:57:23', '2019-10-13 00:57:23'),
(11, 'Java Teacher', 2, 1, 1, '200.00', 1, 1, '2019-10-19', '<p>fdsfs</p>', '<p>sdfds</p>', '<p>sdfds</p>', 0, 0, '2019-10-13 01:05:15', '2019-10-13 01:05:15'),
(12, 'Amazon Staff', 1, 1, 1, '200.00', 1, 1, '2019-10-18', '<p>sdfdsfd</p>', '<p>sdfds</p>', '<p>dsfdss</p>', 0, 1, '2019-10-13 01:25:02', '2019-10-13 01:25:02'),
(13, 'PHP TEACHER', 1, 1, 1, '300.00', 1, 1, '2019-10-18', '<p>fsdfds</p>', '<p>sdfds</p>', '<p>sdfds</p>', 0, 1, '2019-10-13 01:42:15', '2019-10-13 01:42:15'),
(14, 'ENGLISH TEACHER', 2, 1, 1, '2.00', 1, 1, '2019-10-18', '<p>fdsfsfds</p>', '<p>sfsdf</p>', '<p>dsfdsf</p>', 0, 1, '2019-10-13 02:06:04', '2019-10-13 02:06:04'),
(15, 'Math Teacher', 2, 1, 1, '123.00', 1, 1, '2019-10-17', '<p>sfsdfds</p>', '<p>dsfdsf</p>', '<p>fdsfds</p>', 0, 1, '2019-10-13 02:11:00', '2019-10-13 02:11:00'),
(16, 'AMAZON ABC', 2, 1, 1, '200.00', 1, 1, '2019-10-10', '<p>sdfds</p>', '<p>dsfds</p>', '<p>sdfdsf</p>', 0, 1, '2019-10-13 09:12:07', '2019-10-13 09:12:07'),
(17, 'AMAZON', 3, 2, 1, '400.00', 1, 1, '2019-10-18', '<p>fsdfds</p>', '<p>sdfds</p>', '<p>sdfds</p>', 0, 0, '2019-10-13 09:13:13', '2019-10-13 09:13:13'),
(18, 'CHAK SANG', 2, 1, 1, '12.00', 1, 1, '2019-10-26', '<p>sdfds</p>', '<p>sdfds</p>', '<p>sdfds</p>', 0, 1, '2019-10-13 09:37:46', '2019-10-13 09:37:46'),
(19, 'ABC', 1, 1, 1, '300.00', 1, 1, '2019-10-14', '<p>sdfdsfs</p>', '<p>sdfds</p>', '<p>fdsfds</p>', 0, 1, '2019-10-13 09:47:07', '2019-10-13 09:47:07'),
(20, 'testing', 2321, 1, 1, '5.00', 1, 1, '2019-10-19', '<p>sfds</p>', '<p>sdfds</p>', '<p>sdfdsfds</p>', 0, 1, '2019-10-14 13:54:24', '2019-10-14 13:54:24'),
(25, 'Admin', 2, 2, 5, '200.00', 4, 28, '2019-10-26', '<p>Admin<br></p>', '<p>Admin<br></p>', '<p>Admin<br></p>', 0, 1, '2019-10-23 03:37:39', '2019-10-23 03:37:39'),
(26, 'IT', 2, 2, 5, '200.00', 4, 28, '2019-10-18', '<p>Admin<br></p>', '<p>Admin<br></p>', '<p>Admin<br></p>', 0, 1, '2019-10-23 03:37:59', '2019-10-23 03:37:59');

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
(1, 'Manager', 'Manager', 'Manager', NULL, '2019-11-03 05:52:24'),
(3, 'Supervisor', 'Supervisor', 'Supervisor', '2019-10-14 16:13:07', '2019-11-03 05:52:42'),
(4, 'Sinior Officer', 'Advisory', 'Advisory', '2019-10-14 16:13:12', '2019-10-14 16:25:38'),
(5, 'Officer', 'Agrivulture-Agronomy', 'Agrivulture-Agronomy', '2019-10-14 16:25:44', '2019-10-14 16:25:44'),
(61, 'Worker', 'Worker', 'Worker', '2019-11-03 05:56:54', '2019-11-03 05:56:54');

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
(1, 'Part Time', 'Part Time', 'Part Time', NULL, '2019-11-03 05:50:57'),
(2, 'Full Time', 'Full Time', 'Full Time', NULL, '2019-11-03 05:51:32'),
(4, 'Freelance', 'Freelance', 'Freelance', '2019-10-14 16:13:40', '2019-11-03 05:51:48');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `last_name` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `img_profile` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` char(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `company` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_name`, `first_name`, `user_name`, `email`, `email_verified_at`, `img_profile`, `password`, `user_type`, `gender`, `company`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kea', 'sorn', '', '', '2019-10-23 08:47:41', NULL, '', 1, 1, 1, 0, NULL, '2019-10-15 08:49:12', NULL),
(12, 'ABC', 'DEF', 'keasorn', 'kea3rd@gmail.com', NULL, NULL, '$2y$10$ic.8FElzUwVXgwmdwJoOMeNX6KNs07hjDcuAfZbHBKSxBUfdZz7PK', 6, 1, 1, 1, NULL, '2019-10-14 13:53:51', '2019-10-14 13:53:51'),
(13, NULL, NULL, 'sopheak', 'sopheak.kheng168@gmail.com', NULL, NULL, '$2y$10$gQDUhshINA5D35tXhwOsLOCMUz2MnvDaEFq3lQnjG97ZMjuM2Wpjm', 1, 1, 1, 1, NULL, '2019-10-23 01:11:37', '2019-10-23 01:11:37'),
(15, NULL, NULL, 'CHING CHING', 'ching@gmail.com', NULL, NULL, '$2y$10$OJgZkBwniRk4YL1AxGIxVOjhPE/s5ptQzAT6KIIoY1aBWkPPy2gIi', 1, 1, 4, 1, NULL, '2019-10-23 01:47:29', '2019-10-23 01:47:29'),
(17, NULL, NULL, 'keasorn1', 'keasorn@gmail.com', NULL, NULL, '$2y$10$XSBP4miPW2vpaoVt.chH9eRmx0RMgy3XGRHGJTmUr65kvzreZ23Ra', 1, 1, 6, 1, NULL, '2019-10-23 01:53:09', '2019-10-23 01:53:09'),
(19, NULL, NULL, 'keasorn2', 'keasorn1@gmail.com', NULL, NULL, '$2y$10$glAQxOCFFW7/aExt7Yvewu4zVTe6/zkW5sxAFBAEmcHKkREigcHOK', 1, 1, 8, 1, NULL, '2019-10-23 01:53:45', '2019-10-23 01:53:45'),
(21, NULL, NULL, 'test', 'test@gmail.com', NULL, NULL, '$2y$10$E6qj/FJHbfaIAJH.rGY4R.LjaPsFocLM92Sq4rvpHtRajKr8Wxo4y', 1, 1, 10, 1, NULL, '2019-10-23 01:56:17', '2019-10-23 01:56:17'),
(22, NULL, NULL, 'test3', 'test3@gmail.com', NULL, NULL, '$2y$10$R5ABehAuOxsAgdBbHcJeteiSvHAkJR8P1b/orpUhrFDuVkMSVu/ki', 1, 1, 11, 1, NULL, '2019-10-23 01:56:40', '2019-10-23 01:56:40'),
(23, NULL, NULL, 'test4', 'test4@gmail.com', NULL, NULL, '$2y$10$uRj8WN1E.UJmygIcwphkKOavHJmS5hekcdIdxTdFTSNQkmV0MWmHi', 1, 1, 12, 1, NULL, '2019-10-23 01:57:03', '2019-10-23 01:57:03'),
(25, NULL, NULL, 'test5', 'test5@gmail.com', NULL, NULL, '$2y$10$X4CEiYbB6WqpG9zJvGuTA.IZ/Ocv3La0KqggL1pmlBXCBQyS.PHrW', 1, 1, 14, 1, NULL, '2019-10-23 01:57:49', '2019-10-23 01:57:49'),
(26, NULL, NULL, 'test6', 'test6@gmail.com', NULL, NULL, '$2y$10$cK.QiiU4JIdKXRoDREg6VuAPfWnj/z.p7/uX6CjRieKo772lER3LC', 1, 1, 15, 1, NULL, '2019-10-23 01:58:39', '2019-10-23 01:58:39'),
(27, NULL, NULL, 'test7', 'test7@gmail.com', NULL, NULL, '$2y$10$DyJvGuDkN/0ICb7H1F6RUevAwnDc1LZaFljJfZZ2PxETOuv2vGLYi', 1, 1, 16, 1, NULL, '2019-10-23 01:59:09', '2019-10-23 01:59:09'),
(28, NULL, NULL, 'abc name', 'anz@gmail.com', NULL, NULL, '$2y$10$b7SqzXjOtoUCUEIgav0eq.vhG7uiB1M/2Ciar8h7j/S8Rb9Bp6mr2', 1, 1, 17, 1, NULL, '2019-10-23 03:23:26', '2019-10-23 03:23:26');

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
(1, 'admin', 'admin CHINESE', 'admin JAPAN', NULL, '2019-10-14 14:50:33'),
(6, 'editor', 'editor', 'editor', '2019-10-14 13:34:02', '2019-10-14 13:34:02'),
(7, 'supper admin', 'supper admin', 'supper admin', '2019-10-14 13:34:18', '2019-10-14 14:53:08'),
(11, 'TESTING', 'NA', 'NA', '2019-10-14 14:55:42', '2019-10-14 14:55:42');

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
(1, 'Banteay Meanchey', 'Banteay Meanchey', 'Banteay Meanchey', NULL, '2019-10-14 16:20:21'),
(2, 'Battambang', 'Battambang', 'Battambang', '2019-10-14 15:58:53', '2019-10-14 16:20:31'),
(3, 'Kampong Cham', 'Kampong Cham', 'Kampong Cham', '2019-10-14 15:59:11', '2019-10-14 16:20:42'),
(5, 'Kampong Chhnang', 'Kampong Chhnang', 'Kampong Chhnang', '2019-10-14 16:20:48', '2019-10-14 16:20:48'),
(6, 'Kampong Speu', 'Kampong Speu', 'Kampong Speu', '2019-10-14 16:20:54', '2019-10-14 16:20:54'),
(7, 'Kampong Thom', 'Kampong Thom', 'Kampong Thom', '2019-10-14 16:21:00', '2019-10-14 16:21:00'),
(8, 'Kampot', 'Kampot', 'Kampot', '2019-10-14 16:21:06', '2019-10-14 16:21:06'),
(9, 'Kandal', 'Kandal', 'Kandal', '2019-10-14 16:21:12', '2019-10-14 16:21:12'),
(10, 'Kep', 'Kep', 'Kep', '2019-10-14 16:21:18', '2019-10-14 16:21:18'),
(11, 'Koh Kong', 'Koh Kong', 'Koh Kong', '2019-10-14 16:21:24', '2019-10-14 16:21:24'),
(12, 'Kratie', 'Kratie', 'Kratie', '2019-10-14 16:21:30', '2019-10-14 16:21:30'),
(13, 'Krong Pailin', 'Krong Pailin', 'Krong Pailin', '2019-10-14 16:21:36', '2019-10-14 16:21:36'),
(14, 'Mondulkiri', 'Mondulkiri', 'Mondulkiri', '2019-10-14 16:21:43', '2019-10-14 16:21:43'),
(15, 'Otdar Meanchey', 'Otdar Meanchey', 'Otdar Meanchey', '2019-10-14 16:21:49', '2019-10-14 16:21:49'),
(16, 'Other', 'Other', 'Other', '2019-10-14 16:21:57', '2019-10-14 16:21:57'),
(17, 'Outside Cambodia', 'Outside Cambodia', 'Outside Cambodia', '2019-10-14 16:22:02', '2019-10-14 16:22:02'),
(18, 'Phnom Penh', 'Phnom Penh', 'Phnom Penh', '2019-10-14 16:22:07', '2019-10-14 16:22:07'),
(19, 'Poipet', 'Poipet', 'Poipet', '2019-10-14 16:22:15', '2019-10-14 16:22:15'),
(20, 'Preah Vihear', 'Preah Vihear', 'Preah Vihear', '2019-10-14 16:22:21', '2019-10-14 16:22:21'),
(21, 'Prey Veng', 'Prey Veng', 'Prey Veng', '2019-10-14 16:22:27', '2019-10-14 16:22:27'),
(22, 'Pursat', 'Pursat', 'Pursat', '2019-10-14 16:22:33', '2019-10-14 16:22:33'),
(23, 'Rattanakiri', 'Rattanakiri', 'Rattanakiri', '2019-10-14 16:22:39', '2019-10-14 16:22:39'),
(24, 'Siem Reap', 'Siem Reap', 'Siem Reap', '2019-10-14 16:22:45', '2019-10-14 16:22:45'),
(25, 'Sihanoukville', 'Sihanoukville', 'Sihanoukville', '2019-10-14 16:22:51', '2019-10-14 16:22:51'),
(26, 'Stung Treng', 'Stung Treng', 'Stung Treng', '2019-10-14 16:22:56', '2019-10-14 16:22:56'),
(27, 'Svay Rieng', 'Svay Rieng', 'Svay Rieng', '2019-10-14 16:23:02', '2019-10-14 16:23:02'),
(28, 'Takeo', 'Takeo', 'Takeo', '2019-10-14 16:23:07', '2019-10-14 16:23:07'),
(29, 'Tboung Khmum', 'Tboung Khmum', 'Tboung Khmum', '2019-10-14 16:23:13', '2019-10-14 16:23:13'),
(30, 'Travel to Provinces', 'Travel to Provinces', 'Travel to Provinces', '2019-10-14 16:23:19', '2019-10-14 16:23:19');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `company_types`
--
ALTER TABLE `company_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `job_levels`
--
ALTER TABLE `job_levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `work_places`
--
ALTER TABLE `work_places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  ADD CONSTRAINT `jobs_job_level_foreign` FOREIGN KEY (`job_level`) REFERENCES `job_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_job_type_foreign` FOREIGN KEY (`job_type`) REFERENCES `job_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_pow_foreign` FOREIGN KEY (`pow`) REFERENCES `work_places` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_type_fk` FOREIGN KEY (`user_type`) REFERENCES `user_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_company_foreign` FOREIGN KEY (`company`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_gender_foreign` FOREIGN KEY (`gender`) REFERENCES `genders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
