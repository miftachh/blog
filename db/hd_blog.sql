-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2017 at 06:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hd_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_model_tag`
--

CREATE TABLE IF NOT EXISTS `post_model_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_model_id` int(255) NOT NULL,
  `tag_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_model_tag`
--

INSERT INTO `post_model_tag` (`id`, `post_model_id`, `tag_id`) VALUES
(1, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_post`
--

CREATE TABLE IF NOT EXISTS `tbl_add_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `url_select` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `related_post` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'php', '2017-06-24 16:46:56', '2017-06-24 16:46:56'),
(2, 'laravel', '2017-06-24 16:46:59', '2017-06-24 16:46:59'),
(3, 'codeigniter', '2017-06-24 16:47:05', '2017-06-24 16:47:05'),
(4, 'mysql', '2017-06-24 16:47:09', '2017-06-24 16:47:09'),
(5, 'javascript', '2017-06-24 16:47:14', '2017-06-24 16:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `post_model_id` varchar(255) NOT NULL,
  `approved` varchar(255) NOT NULL DEFAULT '0',
  `notify` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `imagefile` varchar(255) NOT NULL,
  `frame_work` varchar(255) NOT NULL,
  `platform` varchar(255) NOT NULL,
  `programming_language` varchar(255) NOT NULL,
  `ide_tool` varchar(255) NOT NULL,
  `database` varchar(255) NOT NULL,
  `checkout_process` varchar(255) NOT NULL,
  `add_to_cart_system` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `download_link` varchar(255) NOT NULL,
  `preview_link` varchar(255) NOT NULL,
  `admin_panel` text NOT NULL,
  `customer_panel` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_project_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `notify` varchar(255) NOT NULL DEFAULT '0',
  `is_approved` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slug_log`
--

CREATE TABLE IF NOT EXISTS `tbl_slug_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) NOT NULL DEFAULT '',
  `ip` varchar(255) NOT NULL DEFAULT '',
  `browser` varchar(500) NOT NULL DEFAULT '',
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE IF NOT EXISTS `tbl_subscribe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE IF NOT EXISTS `tbl_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_tag`
--

INSERT INTO `tbl_tag` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(1, 'php', '2017-02-26 04:57:21', '2017-02-26 04:57:21'),
(2, 'codeigniter', '2017-02-26 04:57:30', '2017-03-22 02:21:59'),
(3, 'laravel', '2017-03-22 02:22:04', '2017-03-22 02:22:04'),
(4, 'jquery', '2017-03-22 02:22:09', '2017-03-22 02:22:09'),
(5, 'phpexcel', '2017-06-24 16:48:18', '2017-06-24 16:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bladephp', 'admin@bladephp.co', '$2y$10$6hJ0N.pLoPGXQ92DIFJreOORVYl54oFZ8FVNtpaygrJT7uR7SfqWG', '1FS5zzCOFUPodqVAP7dpatF4F2QlewPe58eKhzReDDFrzQaEPOPVNbxSYj4x', '2017-03-07 18:30:00', '2017-06-24 11:07:42');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
