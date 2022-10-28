-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2022 at 02:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-laundry`
--

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
-- Table structure for table `layanans`
--

CREATE TABLE `layanans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanans`
--

INSERT INTO `layanans` (`id`, `nama_toko`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'Alby Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(2, 'Putri Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(3, 'Ikko Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(4, 'Wei Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(5, 'O Mee Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(6, 'Kartika Laundry Mart', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(7, 'Waroenk Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(8, 'Arafah Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(9, 'Assalamualaikum Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(10, 'Afn Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(11, 'Buzz Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(12, 'Wils Wash Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(13, 'Al Fazza Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(14, 'Reyhan Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(15, 'Fanseb Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(16, 'D Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(17, 'Keyla Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(18, 'HM Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(19, 'Berkah Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(20, 'Kapten Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(21, 'Samarinda Laundry Mart', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(22, 'Neo Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(23, 'Richman Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(24, 'Area Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(25, 'Yuk Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(26, 'Fresh Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(27, 'Ibay Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(28, 'Wozmi Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(29, 'Gerai Laundry', 'Paket Ekspress', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(30, 'Elmadinah Laundry', 'Paket Reguler', '2022-08-22 15:36:30', '2022-08-22 15:36:30');

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
(5, '2022_07_22_224556_create_tokos_table', 1),
(6, '2022_07_22_224653_create_statuses_table', 1),
(7, '2022_07_22_224728_create_layanans_table', 1),
(8, '2022_07_22_225047_create_transaksis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Diterima', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(2, 'Di Cuci', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(3, 'Di Jemur', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(4, 'Di Setrika', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(5, 'Selesai', '2022-08-22 15:36:30', '2022-08-22 15:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `tokos`
--

CREATE TABLE `tokos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `x` double DEFAULT NULL,
  `y` double DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_buka` time DEFAULT NULL,
  `jam_tutup` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokos`
--

INSERT INTO `tokos` (`id`, `x`, `y`, `nama`, `image`, `pemilik`, `no_hp`, `alamat`, `jam_buka`, `jam_tutup`, `created_at`, `updated_at`) VALUES
(1, -0.471852, 117.160556, 'Alby Laundry', 'images/4W9boXkGjecJoqbccuZ5usVZrWvCmbtg1FC3RKCu.jpg', 'Alby Saputra', '08125461564', 'Jl. Gelatik 2 No. 1, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:59:49'),
(2, -0.465523, 117.172613, 'Putri Laundry', 'images/cmM8y7JkW5wBBSEPXwrgPOMcOoXp7P4VIBntAi6O.jpg', 'Putri', '082122074447', 'Jl. DI Panjaitan No. 10, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:38:20'),
(3, -0.462351, 117.174818, 'Ikko Laundry', 'images/hBWuNfgHe1b7GVyQOI9crZvnda96TUTrOX7WlJss.jpg', 'Ikko', '085348555518', 'Jl. DI Panjaitan No. 12, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:40:48'),
(4, -0.475619, 117.14688, 'Wei Laundry', NULL, NULL, '082154596305', 'Jl. Elang Di No.52, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(5, -0.480295, 117.135854, 'O Mee Laundry', NULL, NULL, '082252525525', 'Jl. Juanda No. 55, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(6, -0.499446, 117.120027, 'Kartika Laundry Mart', NULL, NULL, '081346001655', 'Jl. KS Tubun Dalam, Dadi Mulya, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(7, -0.499446, 117.120014, 'Waroenk Laundry', NULL, NULL, '085266008894', 'Jl. Cendana No.6 kel, Karang Anyar, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(8, -0.513166, 117.112576, 'Arafah Laundry', NULL, NULL, '08115540789', 'Jl. Teuku Umar Perumahan Bukit Indah Permai Blok M 3 B, Karang Asam Ilir, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75126', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(9, -0.513633, 117.113103, 'Assalamualaikum Laundry', NULL, NULL, '082226639483', 'Jl. Adam Malik No.27, Karang Asam Ilir, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(10, -0.513962, 117.113434, 'Buzz Laundry', NULL, NULL, '082370007192', 'Jl. Bung Tomo No.24d, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(11, -0.514826, 117.114752, 'Wils Wash Laundry', NULL, NULL, '082255665577', 'Jl. Bung Tomo No.32, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(12, -0.519425, 117.117467, 'Al Fazza Laundry', NULL, NULL, '081349410573', 'Jl. Bung Tomo No.39, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(13, -0.514298, 117.130418, 'Afn Laundry', NULL, NULL, '082152682968', 'Jl. Bung Tomo No.45, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(14, -0.514097, 117.130682, 'Fanseb Laundry', NULL, NULL, '082353239957', 'Jl. Bung Tomo No.49, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(15, -0.509394, 117.144966, 'D Laundry', NULL, NULL, '08115537377', 'Jl. Bung Tomo No.63, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(16, -0.511399, 117.145409, 'Keyla Laundry', NULL, NULL, NULL, 'Jl. Bung Tomo No.66, Sungai Keledang, Kec. Samarinda Seberang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(17, -0.509638, 117.145299, 'HM Laundry', NULL, NULL, NULL, 'Jl. Jelawat No.12, Mugirejo, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(18, -0.471038, 117.158012, 'Berkah Laundry', NULL, NULL, '085820274597', 'Jl. Damanhuri No.12, Mugirejo, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(19, -0.476979, 117.140177, 'Kapten Laundry', 'images/rph8tWxyYIEpkhaaIBoOGtnEboYgUNymZV1rvLoO.jpg', 'Taufiqurrahman', '082250006369', 'Jl. Anggur Samarinda No. 13, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:44:44'),
(20, -0.485428, 117.141726, 'Samarinda Laundry Mart', NULL, NULL, '082155198519', 'Jl. Anggur Samarinda No. 45, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(21, -0.497975, 117.135969, 'Neo Laundry', NULL, NULL, NULL, 'Jl. Anggur Samarinda No. 56, Sidodadi, Kec. Samarinda Ulu, Kota Samarinda, Kalimantan Timur 75243', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(22, -0.507206, 117.177852, 'Richman Laundry', NULL, NULL, NULL, 'Jl. Sultan Sulaiman, Sambutan, Kec. Sambutan, Kota Samarinda, Kalimantan Timur 75251', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(23, -0.516853, 117.18162, 'Area Laundry', 'images/MT5yQ1dUQafszBVoWCNFiAgIC00Wfysn000OBQLN.jpg', 'Ahmad Fajri', '085255504405', 'Jl. Sultan Sulaiman, Sambutan, Kec. Sambutan, Kota Samarinda, Kalimantan Timur 75251', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:50:34'),
(24, -0.515928, 117.164173, 'Reyhan Laundry', 'images/BxjxXYv49ox65LbZ6i0CckDHu813qJ69u9E1fWOH.jpg', 'Reyhan', '081347549082', 'Jl. Sultan Sulaiman, Sambutan, Kec. Sambutan, Kota Samarinda, Kalimantan Timur 75251', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:56:43'),
(25, -0.515265, 117.164359, 'Yuk Laundry', NULL, NULL, '081244818242', 'Gn. Lingai, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(26, -0.503457, 117.159937, 'Fresh Laundry', 'images/M6e8yXtICULXPvAJvVljQ4uGjyY42LjTunv20EIN.jpg', 'Pratama Wijaya', '05417773492', 'Tlk. Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda, Kalimantan Timur 75243', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:48:09'),
(27, -0.500336, 117.159883, 'Ibay Laundry', 'images/g7QhQbwofrihyizCf55vPMmOhLbLuxrZgnreaRiK.jpg', 'Bayu', '085347525433', 'Jl. Jelawat, Sidodamai, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75115', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:47:10'),
(28, -0.495083, 117.162406, 'Wozmi Laundry', 'images/Cgz9dkoh352KIeiTrEXYfwFCtHD64FyK9yNMCYBL.jpg', 'William', '082154158538', 'Jl. Jelawat, Sidodamai, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75115', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:45:48'),
(29, -0.495056, 117.162435, 'Gerai Laundry', 'images/6YF5sad2dIQt7UDkEd3ncFQZh6n5UhOWcMbMPpRO.jpg', 'Agus', '081352719284', 'Jl. Biawan No.39C, Sidomulyo, Kec. Samarinda Ilir, Kota Samarinda, Kalimantan Timur 75242', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:43:29'),
(30, -0.48949, 117.161952, 'Elmadinah Laundry', 'images/Q1vmgDeEd63K0ILa3qAtmVjD8zhQP5WVIdoXnrLW.jpg', 'Muhammad', '085242266652', 'Jl. Kemakmuran No.7, Sungai Pinang Dalam, Kec. Sungai Pinang, Kota Samarinda, Kalimantan Timur 75117', '08:00:00', '22:00:00', '2022-08-22 15:36:30', '2022-08-22 15:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `layanan_id` bigint(20) UNSIGNED NOT NULL,
  `status_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_toko` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `layanan_id`, `status_id`, `nama`, `berat`, `nama_toko`, `token`, `created_at`, `updated_at`) VALUES
(1, 27, 2, 'Maya Putri Azzahra', '4', 'Alby Laundry', 'YDICqn', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(2, 4, 3, 'Maya Putri Azzahra', '2', 'Putri Laundry', 'cpgHTL', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(3, 22, 4, 'Maya Putri Azzahra', '2', 'Ikko Laundry', 'd3RRJ5', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(4, 24, 3, 'Maya Putri Azzahra', '4', 'Wei Laundry', 'IfHR7H', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(5, 15, 3, 'Maya Putri Azzahra', '3', 'O Mee Laundry', 'aUZaRo', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(6, 16, 1, 'Maya Putri Azzahra', '3', 'Kartika Laundry Mart', '0gYXDY', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(7, 8, 4, 'Maya Putri Azzahra', '5', 'Waroenk Laundry', 'vu3wF6', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(8, 21, 1, 'Maya Putri Azzahra', '4', 'Arafah Laundry', 'eRJ4Sd', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(9, 2, 2, 'Maya Putri Azzahra', '5', 'Assalamualaikum Laundry', 'iUlmTm', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(10, 26, 4, 'Maya Putri Azzahra', '1', 'Buzz Laundry', 'FbvE30', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(11, 27, 4, 'Maya Putri Azzahra', '4', 'Wils Wash Laundry', 'p2HdlX', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(12, 18, 4, 'Maya Putri Azzahra', '4', 'Al Fazza Laundry', 'RL40Rz', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(13, 22, 2, 'Maya Putri Azzahra', '5', 'Afn Laundry', 'CSwmkT', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(14, 2, 5, 'Maya Putri Azzahra', '4', 'Fanseb Laundry', '22dNkb', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(15, 27, 3, 'Maya Putri Azzahra', '4', 'D Laundry', 'EKH4To', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(16, 8, 3, 'Maya Putri', '3', 'Keyla Laundry', 'dNCBlf', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(17, 6, 3, 'Maya Putri', '3', 'HM Laundry', 'A7xlHS', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(18, 30, 1, 'Maya Putri', '5', 'Berkah Laundry', 'BVHhv1', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(19, 4, 3, 'Maya Putri', '2', 'Kapten Laundry', 'lFiwGu', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(20, 1, 3, 'Maya Putri', '3', 'Samarinda Laundry Mart', 'trSYvZ', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(21, 14, 4, 'Maya Putri', '4', 'Neo Laundry', 'xBnraT', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(22, 12, 2, 'Maya Putri', '4', 'Richman Laundry', 'WHpBLJ', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(23, 18, 5, 'Maya Putri', '1', 'Area Laundry', 'FUrrpx', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(24, 15, 4, 'Maya Putri Azzahra', '2', 'Reyhan Laundry', '0K1ayb', '2022-08-22 15:36:31', '2022-08-22 15:36:31'),
(25, 26, 3, 'Maya Putri', '3', 'Yuk Laundry', 'gHEcNu', '2022-08-22 15:36:31', '2022-08-22 15:36:31'),
(26, 13, 4, 'Maya Putri', '3', 'Fresh Laundry', 'en0MAz', '2022-08-22 15:36:31', '2022-08-22 15:36:31'),
(27, 19, 4, 'Maya Putri', '2', 'Ibay Laundry', 'myFnVZ', '2022-08-22 15:36:31', '2022-08-22 15:36:31'),
(28, 24, 2, 'Maya Putri', '5', 'Wozmi Laundry', 'X3lNdY', '2022-08-22 15:36:31', '2022-08-22 15:36:31'),
(29, 21, 2, 'Maya Putri', '1', 'Gerai Laundry', 'MoBtUQ', '2022-08-22 15:36:31', '2022-08-22 15:36:31'),
(30, 26, 1, 'Maya Putri', '2', 'Elmadinah Laundry', 'JVe1dU', '2022-08-22 15:36:31', '2022-08-22 15:36:31');

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
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin laundry', 'admin.laundry@gmail.com', '2022-08-22 15:36:27', '$2y$10$6HXZkuj45/bQuqFIxoqUceR43QcHmK1WYl5uqDCC4911ylg9AtF2m', 1, 'YyOLXr9jNtJ2kWpZ2ckrAE4Byn9nDvECWGew81j1XYdggvA34OqLxlDiCT2B', '2022-08-22 15:36:27', '2022-08-22 15:36:27'),
(2, 'Alby Laundry', 'alby.laundry@gmail.com', '2022-08-22 15:36:27', '$2y$10$NnlTMGVc2tndXhAC.8ErVu4YBGgoWCwEkWtepSQuYTkYQ/VMO9AL2', 0, 'FjYJUqMgE47vypjYdXw7tH6i7nPCwvtfDdmasaxfmKhmM05PDOcZztBmcbpL', '2022-08-22 15:36:27', '2022-08-22 15:36:27'),
(3, 'Putri Laundry', 'putri.laundry@gmail.com', '2022-08-22 15:36:27', '$2y$10$4YwHzm4a7zeIgdxwqwkHGOSNLSNTLILobEcGoRENvMXTowHkD9Ia6', 0, 'wSlitobxDvSpUief5a2TaiKUA0Be8jzTYrSBuOT7E6s6hnt6kqtsQjpPjAsE', '2022-08-22 15:36:27', '2022-08-22 15:36:27'),
(4, 'Ikko Laundry', 'ikko.laundry@gmail.com', '2022-08-22 15:36:27', '$2y$10$M9M/6U5/gIbrR/EKp2mRNOuC9Yj/iRKBOOXlYuT0iVUVeMa2MGfAK', 0, 't8mq507JAnl8oLd6xQT7zFHxsb66iXXLquOygHJZkFA5dEkuD2mdEMXZD4kT', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(5, 'Wei Laundry', 'wei.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$KTL940JLgw2ooCeK4bPSY.WeJZP5GIS5AYHoR/Rp1e9eAEOCqKC6.', 0, 'brPFNORKvuVXvs1r1g5qbcojjaDiC97X9xwTMH8Xp7GFsILjFsCneGxBioZ7', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(6, 'O Mee Laundry', 'mee.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$VR0rsE7gdiQW4t9BlWYXrepMjtSj/sgS7fFzML1aJHAezeS4lJaQK', 0, 'YRsebuoILr', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(7, 'Kartika Laundry Mart', 'kartikamart.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$5fCVa8RyMk9YdqA9RiJB9eDpl4R2m1pvnhwLk/SlSNzv8CLNsFn9e', 0, 'LuyDwqqbWD', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(8, 'Waroenk Laundry', 'waroenk.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$nFEl5M5aChXNO8zKnKAHlOiAcnRvRTjuENFJHnbPYk/BluWlWCKEO', 0, 'HrkqcJALZc', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(9, 'Arafah Laundry', 'arafah.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$ZmezrpE874Df1FI/eGgh6embn9zjbMSbYp0Z7Hx3nOHyYb4nGuJ/G', 0, '5SFKW8CZca', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(10, 'Assalamualaikum Laundry', 'salam.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$amzoS.p3oQo9imb8HRUBiutYlG0MdWRmOvZl.jjwzqnVom1y6v6lq', 0, 'KxMtFYmOFh', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(11, 'Buzz Laundry', 'buzz.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$dQVFoSCvIV6jIoGCZt4WZuAGD3kCYLFGgWOhFpAdlNa.C7Ly5Gg1G', 0, 'n3FK8W3Y3s', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(12, 'Wils Wash Laundry', 'ww.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$AEHyoA70rFLx8UCFhvj/eOOjEJpzM7j5bBPbofSQ9wq75KS/Z89Uu', 0, 'QtE1SxUNvG', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(13, 'Al Fazza Laundry', 'fazza.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$Z68FMRMaxbbIjz5ZWUbfx.0Jy6YzbouZu7o1ggdyvUA4rhLjNTZGq', 0, 'oxNGwOTRvX', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(14, 'AFN Laundry', 'afn.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$51FTBnhTnMLoM32q5TVs5O71HLEnLc/KSXBxx9dpXTNev5rASdQHm', 0, 'n2fsfiNWqx', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(15, 'Fanseb Laundry', 'fanseb.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$I9dAcC2/ipq1MNh/FaV/HOpvAiB9kccYyavS7bh0ADSRxeJH8Kf1O', 0, 'EhBo5rR33V', '2022-08-22 15:36:28', '2022-08-22 15:36:28'),
(16, 'D Laundry', 'd.laundry@gmail.com', '2022-08-22 15:36:28', '$2y$10$JetdYJqX.jBjs1PokuJnauKS7V8ujPXjyFzv/Ze8qHBosh8p0G5wq', 0, 'x1XtTiVfrh', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(17, 'Keyla Laundry', 'keyla.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$Eyp5qfUmm6prmgNhQbS74ezIoUIlwfcUQd9xWPmrwBfmwvcGartY6', 0, 'MJtaIo5pGU', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(18, 'HM Laundry', 'hm.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$7QLHWC7D4a6J6q9q7v/DIubh9rh/kqyTVVKp2F2lcZLCdCac56Jju', 0, '09hkYjMwUe', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(19, 'Berkah Laundry', 'berkah.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$VU6N0oHcNlQJwB1bxEaWkuSs5Oy4VadIqylQxIJyqKVu/ibriextC', 0, 'WppXe1UU8K', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(20, 'Kapten Laundry', 'kapten.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$.HtYXpnKAksyfNos60jRb.4i2PxzbmGys4zIjIbvh55BcFzGeBzrq', 0, '29fJ98Rxx2YBkGrdPQy5ydTyhxzZ3LsCLJmKzDkg2fLLLSDWtvwwQud3UrVr', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(21, 'Samarinda Laundry Mart', 'smdmart.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$1EbGlGetJXG6jeGjtKpSg.lzQSCEt9BApMsAk6zjhX7g417bfVBoy', 0, 'hFrShNj0NZ', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(22, 'Neo Laundry', 'neo.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$5TPZ5UpGC6dUToWwqQzixeJ82FpZx.Sm2k0o455yT6N65vAhrk90W', 0, 'b4bLRfest2', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(23, 'Richman Laundry', 'richman.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$gYAqd783LeNwUzYui/PCqOWdpTdx9nKcpVvbI1S1XMhU1UdKdxgke', 0, 'Rs4NhzCTgx', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(24, 'Area Laundry', 'areasmd.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$daWdn64.jZVXnNwtP.uP0uK9TjUEkQKmnmwIMYgf.T5QofRz8WxIy', 0, 'tpeKBkde754eCi4YoEO5qa9SVC5zcfRvQQY1aPCRWItdRIrXDfOeflzSV1jx', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(25, 'Reyhan Laundry', 'reyhan.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$fg0UNSpFYSoie9hPvQw9mOa.4VWJ1.J76WjoY6saMRZPa894BiqLq', 0, 'dGUNz3msXiNM1Rk0y4M4HhdALafo7UTQlNhnEi1Oht8iZaKXNl56OfFkeFe3', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(26, 'Yuk Laundry', 'kuysmd.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$aNyP75f8FgrFYBT8Eh8Uh.RjnKTuSMiMTq7HKBzYGKNdMcMkdHbM.', 0, 'c1x8baY4fo', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(27, 'Fresh Laundry', 'fresh.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$5ja2uErd8R..5Tpgs5wlmOJNLkXqXdiO8hlxnARK7F1o0xq822qZW', 0, 'ulLz2GbNNWDfMaU3LetM8nRZaTlbh0gXDxvaAU6pLsK1AyLWPJouSO7Vfx5c', '2022-08-22 15:36:29', '2022-08-22 15:36:29'),
(28, 'Ibay Laundry', 'ibay.laundry@gmail.com', '2022-08-22 15:36:29', '$2y$10$AGq7r9X8V7PCokmk2T8RJ.j.CiUfvkfEzRcLApAfW1rQXT6jPBnqe', 0, 'IpjLGMpp5cqqtcvE8glYwmHD7DqQyYZgL8hTdx14HkGQi1laydcyQ6dC1Ax5', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(29, 'Wozmi Laundry', 'wozmi.laundry@gmail.com', '2022-08-22 15:36:30', '$2y$10$4apoVayybTHsXSZjUxGdZuOwInQLz7ilZ4HwQus1ydlrCHpgwNz4y', 0, 'Ski4aQdm4JeuZIqxIUyAN0LTJB5X2DwMgWAjNulh5qDzi5ZGqatzpD4zc6tl', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(30, 'Gerai Laundry', 'gerai.laundry@gmail.com', '2022-08-22 15:36:30', '$2y$10$cuIqfow/XQ3hymJ.mMuFweGLVHjsoc.JSOmw20TdWlMASVZ0ofLv6', 0, '2RcljMVshV0862bnLXvb6ff2EzJcRAljqnmAnGD0KZnJ3v8A3SKaetcg2PSc', '2022-08-22 15:36:30', '2022-08-22 15:36:30'),
(31, 'Elmadinah Laundry', 'madinahsmd.laundry@gmail.com', '2022-08-22 15:36:30', '$2y$10$zyD4qe1hdghyIGnYp.o/leDUxg68yrPgYgL2MLCnuBfyjtwlGPhAK', 0, 'PuCIOflB6vf17kidZVzcps4twScDE3wwMECNQmcDNCtRGOmZhZsgIhSGHcCp', '2022-08-22 15:36:30', '2022-08-22 15:36:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `layanans`
--
ALTER TABLE `layanans`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokos`
--
ALTER TABLE `tokos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `layanans`
--
ALTER TABLE `layanans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tokos`
--
ALTER TABLE `tokos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
