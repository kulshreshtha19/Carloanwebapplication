-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 08:57 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profileimage` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `name`, `dob`, `address`, `profileimage`) VALUES
(2, 'kulshreshtha', '7rErn3uzkPrTJwF7mmVSotxWf35X2aZF', '$2y$13$j75.N1k93euOEI9Bgm76S.CInP1rWmCmf.X8agzrW7xMZY.xpcIMe', '', 'kulshreshthagoyal@gmail.com', 10, 1529487488, 1529487488, 'Kulshreshtha Goyal', '18/06/1999', 'A-2 jain mandir road Mohan nagar hindaun city karauli rajasthan', 'pro_2.jpg'),
(3, 'RedEagle', '4siGbi7qPSOqs6oVNVrpMRDkOsyMKAV5', '$2y$13$rcRwbfpVVpuhnXqnK.bYOOgAvZ9O0e4GbrEDoTsKScjtHsptKz57e', NULL, 'r@gmail.com', 10, 1529663234, 1529663234, 'RedEagle', '18/06/1999', 'A-2 jain mandir road mohan nagar hindaun city', 'pro_3.jpg'),
(4, 'naveen', 'w2Kui3FgoX4xEUr3WPJudzz4moDfccgL', '$2y$13$876xbfwK8lqVs9PXwZGET.T9cfQX/CW1MjkysKjzwFI.xOwcLoORW', NULL, 'n@gmail.com', 10, 1529663976, 1529663976, 'Naveen', '18/06/1999', 'Aligarh agra', 'pro_4.jpg'),
(8, 'deadalive', 'qUC6oZqTz2kzj6dO0WHDwcPZA02Qg03Y', '$2y$13$oJsDaP1FKvpicv5wzTumxO06LeNuOPETlZiqf4DApnKRIg7mNXOFi', NULL, '', 10, 0, 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
