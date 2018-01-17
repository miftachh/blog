-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 05:00 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_model_tag`
--

CREATE TABLE `post_model_tag` (
  `id` int(11) NOT NULL,
  `post_model_id` int(255) NOT NULL,
  `tag_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_model_tag`
--

INSERT INTO `post_model_tag` (`id`, `post_model_id`, `tag_id`) VALUES
(1, 1, 3),
(2, 1, 1),
(3, 1, 2),
(4, 2, 3),
(5, 3, 1),
(6, 3, 3),
(7, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_post`
--

CREATE TABLE `tbl_add_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `url_select` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `related_post` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_add_post`
--

INSERT INTO `tbl_add_post` (`id`, `title`, `slug`, `meta_description`, `url_select`, `image`, `related_post`, `category_id`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Custom dropdown multi select option', 'asasas', 'Custom dropdown multi select option', 'codeigniter', '1516122690_.png', '1', 3, '<p style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Open Sans''; vertical-align: baseline; color: #272727;"><strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">PHP</strong>&nbsp;merupakan bahasa wajib programmer web. Sampai saat ini PHP masih menjadi standar bahasa pemograman server side untuk pembuatan website. Duniailkom mencoba membuat artikel dan tutorial sebagai bahan belajar PHP untuk pemula. Tutorial PHP akan dibagi menjadi beberapa bagian, yaitu&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Tutorial PHP Dasar</strong>,&nbsp;<strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">Tutorial PHP Lanjutan</strong>,<strong style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">&nbsp;Tutorial Pemrograman Berbasis Objek PHP</strong>&nbsp;<em style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;">(Object Oriented Programming &ndash; OOP)</em>, dan Artikel seputar perkembangan PHP.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Open Sans''; vertical-align: baseline; color: #272727;"><a style="box-sizing: border-box; background-color: transparent; color: #2482c1; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;" href="http://www.duniailkom.com/tutorial-belajar-php-dan-index-artikel-php/#phpdasar" target="_top">Tutorial PHP dasar&nbsp;</a>ditujukan untuk pengguna awam atau pemula yang ingin mempelajari PHP dari dasar. Tutorial belajar PHP ini disusun secara sistematis. Pembahasan akan dimulai dari pengertian PHP, sejarah PHP, cara instalasi XAMPP yang digunakan untuk menjalankan PHP, selanjutnya masuk kepada cara penulisan dasar PHP seperti tipe data, perulangan, struktur logika, serta cara penggunaan fungsi PHP.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Open Sans''; vertical-align: baseline; color: #272727;"><a style="box-sizing: border-box; background-color: transparent; color: #2482c1; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;" href="http://www.duniailkom.com/tutorial-belajar-php-dan-index-artikel-php/#phpfungsibawaan" target="_top">Tutorial Fungsi Bawaan PHP&nbsp;</a>Berisi pembahasan mengenai fungsi-fungsi (function) bawaan PHP. PHP menyediakan ribuan fungsi bawaan yang bisa kita gunakan.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Open Sans''; vertical-align: baseline; color: #272727;"><a style="box-sizing: border-box; background-color: transparent; color: #2482c1; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;" href="http://www.duniailkom.com/tutorial-belajar-php-dan-index-artikel-php/#phpmysql" target="_top">Tutorial PHP MySQL&nbsp;</a>akan membahas tentang cara menghubungkan PHP dengan database MySQL. 3 cara koneksi PHP ke MySQL: mysql extension, mysqli extension dan PDO akan kita bahas secara detail.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Open Sans''; vertical-align: baseline; color: #272727;"><a style="box-sizing: border-box; background-color: transparent; color: #2482c1; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;" href="http://www.duniailkom.com/tutorial-belajar-php-dan-index-artikel-php/#phpform" target="_top">Tutorial PHP Form</a>&nbsp;akan membahas tentang cara penanganan form HTML menggunakan PHP. Kita akan membahas cara penanganan method GET, POST, serta tentang aspek keamanannya.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Open Sans''; vertical-align: baseline; color: #272727;"><a style="box-sizing: border-box; background-color: transparent; color: #2482c1; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;" href="http://www.duniailkom.com/tutorial-belajar-php-dan-index-artikel-php/#phpoop" target="_top">Tutorial Pemrograman Berbasis Objek (OOP) PHP</a>&nbsp;akan membahas tentang cara penulisan PHP menggunakan object, atau dikenal juga dengan Object Oriented Programming PHP. Pemrograman Berbasis Objek merupakan standar cara penulisan PHP modern.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ''Open Sans''; vertical-align: baseline; color: #272727;"><a style="box-sizing: border-box; background-color: transparent; color: #2482c1; text-decoration-line: none; margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;" href="http://www.duniailkom.com/tutorial-belajar-php-dan-index-artikel-php/#phpartikel" target="_top">Artikel PHP&nbsp;</a>akan membahas perkembangan PHP serta tips dan trik dalam membuat code PHP agar lebih efisien.</p>', '2018-01-16 16:33:16', '2018-01-16 19:04:25'),
(2, 'Apa sih PHP itu?', 'tes-tes', 'Apa sih PHP itu?', 'php', '1516129093_.png', '3', 1, '<center style="font-family: Times; font-size: medium; background-color: #f0f2f3;">\r\n<h1 style="font-size: 10pt; color: #000677; font-family: Tahoma, Arial; letter-spacing: 1px;"><span style="color: #333399;">Apa sih PHP itu?</span></h1>\r\n</center>\r\n<p><span style="background-color: #f0f2f3; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;"><br />Apa sih PHP itu ? Mungkin itu pertanyaan yang ada di benak rekan-rekan saat mendengar kata PHP. PHP merupakan script yang menyatu dengan HTML dan berada pada server (<em>server side HTML embedded scripting</em>). Dengan PHP ini Anda dapat membuat beragam aplikasi berbasis web, mulai dari halaman web yang sederhana sampai aplikasi komplek yang membutuhkan koneksi ke database.</span></p>\r\n<p style="font-family: Times; font-size: medium; background-color: #f0f2f3;">&nbsp;</p>\r\n<p style="font-family: Times; font-size: medium; background-color: #f0f2f3;" align="left"><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">Sampai saat ini telah banyak database yang telah didukung oleh PHP dan kemungkinan akan terus bertambah. Database tersebut adalah :</span></p>\r\n<ul style="font-family: Times; font-size: medium; background-color: #f0f2f3;">\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">dBase</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">DBM</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">FilePro</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">mSQL</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">MySQL</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">ODBC</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">Oracle</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">Postgres</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">Sybase</span></li>\r\n<li><span style="font-family: Verdana, Arial, Helvetica, sans-serif; font-size: small;">Velocis</span></li>\r\n</ul>\r\n<p style="font-family: Times; font-size: medium; background-color: #f0f2f3;" align="left"><span style="font-family: Verdana, Arial, Helvetica; font-size: small;">Selain itu PHP juga mendukung koneksi dengan protokol IMAP, SNMP, NNTP dan POP3.</span></p>', '2018-01-16 17:43:24', '2018-01-16 18:58:41'),
(3, 'Pengertian dan Keunggulan Framework Laravel', 'tess-lagi', 'Pengertian dan Keunggulan Framework Laravel', 'laravel', '1516129220_.png', '2', 2, '<p style="box-sizing: border-box; margin: 10px 0px 0px; padding: 0px; font-family: Lato, sans-serif; font-size: 16px; line-height: 24px; color: #333333;"><span style="box-sizing: border-box; font-weight: bold;">Laravel</span>&nbsp;adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu.</p>\r\n<p style="box-sizing: border-box; margin: 10px 0px 0px; padding: 0px; font-family: Lato, sans-serif; font-size: 16px; line-height: 24px; color: #333333;">MVC adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.</p>\r\n<ol style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: ''PT Sans'', sans-serif;">\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Model, Model mewakili struktur data. Biasanya model berisi fungsi-fungsi yang membantu seseorang dalam pengelolaan basis data seperti memasukkan data ke basis data, pembaruan data dan lain-lain.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">View, View adalah bagian yang mengatur tampilan ke pengguna. Bisa dikatakan berupa halaman web.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Controller, Controller merupakan bagian yang menjembatani model dan view.</li>\r\n</ol>\r\n<p style="box-sizing: border-box; margin: 10px 0px 0px; padding: 0px; font-family: Lato, sans-serif; font-size: 16px; line-height: 24px; color: #333333;">Beberapa fitur yang terdapat di Laravel :</p>\r\n<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: ''PT Sans'', sans-serif;">\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Bundles, yaitu sebuah fitur dengan sistem pengemasan modular dan tersedia beragam di aplikasi.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Eloquent ORM, merupakan penerapan PHP lanjutan menyediakan metode internal dari pola &ldquo;active record&rdquo; yang menagatasi masalah pada hubungan objek database.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Application Logic, merupakan bagian dari aplikasi, menggunakan controller atau bagian Route.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Reverse Routing, mendefinisikan relasi atau hubungan antara Link dan Route.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Restful controllers, memisahkan logika dalam melayani HTTP GET and POST.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Class Auto Loading, menyediakan loading otomatis untuk class PHP.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">View Composer, adalah kode unit logikal yang dapat dieksekusi ketika view sedang loading.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">IoC Container, memungkin obyek baru dihasilkan dengan pembalikan controller.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Migration, menyediakan sistem kontrol untuk skema database.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Unit Testing, banyak tes untuk mendeteksi dan mencegah regresi.</li>\r\n<li style="box-sizing: border-box; font-size: 16px; font-family: Lato, sans-serif; line-height: 24px; margin: auto;">Automatic Pagination, menyederhanakan tugas dari penerapan halaman.</li>\r\n</ul>', '2018-01-16 17:51:07', '2018-01-16 19:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
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
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tag`
--

CREATE TABLE `tbl_tag` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@blog.com', '$2y$10$6hJ0N.pLoPGXQ92DIFJreOORVYl54oFZ8FVNtpaygrJT7uR7SfqWG', 'di8JMlOGnIywx4dXljvA0XIlaAqsgpjdNL9CKoOWXWyV1ilAf53ugACj0le6', '2018-01-16 18:30:00', '2018-01-16 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_model_tag`
--
ALTER TABLE `post_model_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_add_post`
--
ALTER TABLE `tbl_add_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
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
-- AUTO_INCREMENT for table `post_model_tag`
--
ALTER TABLE `post_model_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_add_post`
--
ALTER TABLE `tbl_add_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tag`
--
ALTER TABLE `tbl_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
