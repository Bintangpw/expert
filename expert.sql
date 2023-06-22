-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 04:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expert`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url_gambar` char(255) NOT NULL,
  `kode_depresi` char(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `url_gambar`, `kode_depresi`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'https://plus.unsplash.com/premium_photo-1668062843172-0129f25a1276?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80', 'P001', 'Gangguan Mood', 'Ganggguan mood yang terjadi pada seseorang ini umumnya terjadi karena banyaknya tekanan yang menimpa dirinya dan cenderung terlarut dalam tekanan dapat meningkatkan resiko berkembangnya gangguan mood yang kemudian dapat berubah menjadi depresi terutama depresi mayor. Hal ini terbukti pada suatu penelitian yang menemukan bahwa dalam sekitar empat dari lima kasus, depresi mayor diawali oleh peristiwa kehidupan yang penuh tekanan.', NULL, NULL),
(2, 'https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2022/10/04084507/Ini-Ciri-Ciri-Depresi-Ringan-yang-Masih-Sering-Diabaikan.jpg', 'P002', 'Depresi Minor / Depresi Ringan', 'Depresi ringan ini di identikkan dengan depresi minor yang merupakan perasaan melankolis yang berlangsung sebentar dan disebabkan oleh sebuah kejadian yang tragis atau mengandung ancaman, atau kehilangan sesuatu yang penting dalam kehidupan si penderita (Meier, 2000: 20-21). Orang dengan depresi ringan ini setidaknya memiliki 2 dari gejala lainnya dan 2-3 dari gejala utama. (Maslim, 2003, 64).', NULL, NULL),
(3, 'https://soc-phoenix.s3-ap-southeast-1.amazonaws.com/wp-content/uploads/2017/09/22173906/mental-illness-and-disorders.jpg', 'P003', 'Depresi Sedang', 'Depresi sedang ini di alami oleh penderita selama kurang 2 minggu, dan orang dengan depresi sedang ini mengalami kesulitan nyata untuk meneruskan kegiatan social, pekerjaan dan urusan rumah tangga. Orang dengan depresi sedang ini setidaknya memiliki 2-3 dari gejala utama dan 3-4 dari gejala lainnya (Maslim,  2003: 64).', NULL, NULL),
(4, 'https://soc-phoenix.s3-ap-southeast-1.amazonaws.com/wp-content/uploads/2017/09/22173906/mental-illness-and-disorders.jpg', 'P004', 'Depresi mayor / Depresi Berat', 'Depresi mayor merupakan salah satu gangguan yang prevalensinya paling tinggi di antara berbagai gangguan (Davidson, 2006: 374). Depresi mayor adalah kemurungan yang dalam dan menyebar luas. Perasaan murung ini mampu menyedot semangat dan energy serta menyelubungi kehidupan si penderita seperti asap yang tebak dan menyesakkan dada. Depresi mayor ini dapat berlangsung cukup lama mulai dari empat belas hari sampai beberapa tahun. Hal ini menyebabkan penderita akan sangat sulit utnuk berfungsi dengan baik di lingkungannya. Orang dengan depresi mayor ini juga terkadang disertai dengan keinginan untuk bunuh diri atau bahkan keinginan untuk mati. Orang yang sangat tertekan, mereka akan mengalami dampak hal-hal yang mengganggu kejiwaan mereka seperti gila, paranoia atau halusinasi pendengaran (Meier, 2000: 25-26).', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diagnosas`
--

CREATE TABLE `diagnosas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diagnosa_id` char(255) NOT NULL,
  `data_diagnosa` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data_diagnosa`)),
  `kondisi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`kondisi`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `diagnosas`
--

INSERT INTO `diagnosas` (`id`, `diagnosa_id`, `data_diagnosa`, `kondisi`, `created_at`, `updated_at`) VALUES
(1, '64900c1b97740', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"0.64\",\"kode_depresi\":\"P002\"},{\"value\":\"0.6\",\"kode_depresi\":\"P003\"},{\"value\":\"0.8\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0.6\"],[\"G002\",\"0.8\"],[\"G003\",\"0.4\"],[\"G004\",\"0.6\"],[\"G005\",\"0.6\"],[\"G007\",\"1\"]]', '2023-06-19 08:04:43', '2023-06-19 08:04:43'),
(2, '64900c3b2b587', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.6\",\"kode_depresi\":\"P003\"},{\"value\":\"0.8\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0.6\"],[\"G002\",\"0.8\"],[\"G003\",\"0.4\"],[\"G004\",\"0.6\"],[\"G005\",\"0.6\"],[\"G006\",\"0.8\"],[\"G007\",\"1\"]]', '2023-06-19 08:05:15', '2023-06-19 08:05:15'),
(3, '64900c4c540ea', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.6\",\"kode_depresi\":\"P003\"},{\"value\":\"0.8\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0.6\"],[\"G002\",\"0.8\"],[\"G003\",\"0.4\"],[\"G004\",\"0.6\"],[\"G005\",\"0.6\"],[\"G006\",\"0\"],[\"G007\",\"1\"]]', '2023-06-19 08:05:32', '2023-06-19 08:05:32'),
(4, '64900c578ba23', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.84\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0.6\"],[\"G002\",\"0.8\"],[\"G003\",\"0.4\"],[\"G004\",\"0.6\"],[\"G005\",\"0.6\"],[\"G006\",\"0\"],[\"G007\",\"1\"],[\"G008\",\"0.6\"],[\"G009\",\"0.8\"]]', '2023-06-19 08:05:43', '2023-06-19 08:05:43'),
(5, '64900c6bd8fcb', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.84\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0\"],[\"G002\",\"0\"],[\"G003\",\"0\"],[\"G004\",\"0\"],[\"G005\",\"0\"],[\"G006\",\"0\"],[\"G007\",\"0\"],[\"G008\",\"0.6\"],[\"G009\",\"0.8\"]]', '2023-06-19 08:06:03', '2023-06-19 08:06:03'),
(6, '64900c7ac48cc', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.9616\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0\"],[\"G002\",\"0\"],[\"G003\",\"0\"],[\"G004\",\"0\"],[\"G005\",\"0\"],[\"G006\",\"0.6\"],[\"G007\",\"0\"],[\"G008\",\"0.6\"],[\"G009\",\"0.8\"],[\"G010\",\"0.4\"],[\"G011\",\"1\"]]', '2023-06-19 08:06:18', '2023-06-19 08:06:18'),
(7, '64900c873e1e4', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.98464\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0\"],[\"G002\",\"0\"],[\"G003\",\"0\"],[\"G004\",\"0\"],[\"G005\",\"0\"],[\"G006\",\"0.6\"],[\"G007\",\"0\"],[\"G008\",\"0.6\"],[\"G009\",\"0.8\"],[\"G010\",\"0.4\"],[\"G011\",\"1\"],[\"G012\",\"0.6\"]]', '2023-06-19 08:06:31', '2023-06-19 08:06:31'),
(8, '64900c954bb7e', '[{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.84\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G006\",\"0.6\"],[\"G008\",\"0.8\"],[\"G009\",\"0.4\"],[\"G010\",\"0.8\"]]', '2023-06-19 08:06:45', '2023-06-19 08:06:45'),
(9, '64901d6c287be', '[]', '[]', '2023-06-19 09:18:36', '2023-06-19 09:18:36'),
(10, '64901d832e366', '[{\"value\":\"0.6\",\"kode_depresi\":\"P004\"}]', '[[\"G025\",\"0\"]]', '2023-06-19 09:18:59', '2023-06-19 09:18:59'),
(11, '649020e558613', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"0.64\",\"kode_depresi\":\"P002\"},{\"value\":\"0.6\",\"kode_depresi\":\"P003\"},{\"value\":\"0.8\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"1\"],[\"G002\",\"1\"],[\"G003\",\"1\"],[\"G004\",\"1\"],[\"G005\",\"1\"]]', '2023-06-19 09:33:25', '2023-06-19 09:33:25'),
(12, '6490210499cf3', '[{\"value\":\"0.2\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"0.84\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G006\",\"1\"],[\"G007\",\"1\"],[\"G008\",\"1\"],[\"G009\",\"1\"],[\"G010\",\"1\"]]', '2023-06-19 09:33:56', '2023-06-19 09:33:56'),
(13, '64902143246c0', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"1\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0\"],[\"G002\",\"0.2\"],[\"G003\",\"0.2\"],[\"G004\",\"0.6\"],[\"G005\",\"0.6\"],[\"G006\",\"0.2\"],[\"G007\",\"0.2\"],[\"G008\",\"0.4\"],[\"G009\",\"0.4\"],[\"G010\",\"0.2\"],[\"G011\",\"0.4\"],[\"G012\",\"0.6\"],[\"G013\",\"0.8\"],[\"G014\",\"1\"],[\"G015\",\"0.6\"],[\"G016\",\"0.6\"],[\"G017\",\"0.4\"],[\"G018\",\"0.8\"],[\"G019\",\"1\"],[\"G020\",\"1\"],[\"G021\",\"0.8\"],[\"G022\",\"0.6\"],[\"G023\",\"0.8\"],[\"G024\",\"1\"],[\"G025\",\"1\"],[\"G026\",\"1\"],[\"G027\",\"0.8\"],[\"G028\",\"1\"]]', '2023-06-19 09:34:59', '2023-06-19 09:34:59'),
(14, '64902177cafbd', '[{\"value\":\"1\",\"kode_depresi\":\"P001\"},{\"value\":\"1\",\"kode_depresi\":\"P002\"},{\"value\":\"1\",\"kode_depresi\":\"P003\"},{\"value\":\"1\",\"kode_depresi\":\"P004\"}]', '[[\"G001\",\"0\"],[\"G002\",\"0\"],[\"G003\",\"0\"],[\"G004\",\"0\"],[\"G005\",\"0\"],[\"G006\",\"1\"],[\"G007\",\"1\"],[\"G008\",\"1\"],[\"G009\",\"1\"],[\"G010\",\"1\"],[\"G011\",\"0\"],[\"G012\",\"0\"],[\"G013\",\"0\"],[\"G014\",\"0\"],[\"G015\",\"0\"],[\"G016\",\"0\"],[\"G017\",\"0\"],[\"G018\",\"0\"],[\"G019\",\"0\"],[\"G020\",\"0\"],[\"G021\",\"0\"],[\"G022\",\"0\"],[\"G023\",\"0\"],[\"G024\",\"0\"],[\"G025\",\"0\"],[\"G026\",\"0\"],[\"G027\",\"0\"],[\"G028\",\"0\"]]', '2023-06-19 09:35:51', '2023-06-19 09:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` char(255) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode_gejala`, `gejala`, `created_at`, `updated_at`) VALUES
(30, 'G001', 'Mengonsumsi bahan-bahan yang tidak lazim', '2023-06-19 09:21:21', '2023-06-19 09:21:21'),
(31, 'G002', 'Terjadi pada usia yang tidak lazim', '2023-06-19 09:22:37', '2023-06-19 09:22:37'),
(32, 'G003', 'Tidak terkait dengan budaya dan praktik makan setempat', '2023-06-19 09:23:13', '2023-06-19 09:23:13'),
(33, 'G004', 'Tidak didiagnosa dengan gangguan makan lain (pada gangguan yang sama, seperti ARFID, dll)', '2023-06-19 09:23:32', '2023-06-19 09:23:32'),
(34, 'G005', 'Gejala sudah persistensi selama minimal satu bulan', '2023-06-19 09:23:50', '2023-06-19 09:23:50'),
(35, 'G006', 'Muntah yang berulang dan regurgitasi', '2023-06-19 09:24:02', '2023-06-19 09:24:02'),
(36, 'G007', 'Masih dapat makan dengan normal dan dalam jumlah yang cukup', '2023-06-19 09:24:43', '2023-06-19 09:24:43'),
(38, 'G008', 'Reaksif terhadap makanan yang telah dikonsumsi', '2023-06-19 09:25:33', '2023-06-19 09:25:33'),
(39, 'G009', 'Tidak ada gangguan medis atau gastrointestinal yang dapat menjelaskan gejala', '2023-06-19 09:25:51', '2023-06-19 09:25:51'),
(40, 'G010', 'Mengidap gangguan sosial, pekerjaan, atau fungsi lainnya', '2023-06-19 09:26:21', '2023-06-19 09:26:21'),
(41, 'G011', 'Kurangnya minat terhadap makan atau makanan', '2023-06-19 09:26:30', '2023-06-19 09:26:30'),
(42, 'G012', 'Menghindari makanan berdasarkan karakteristik sensoriknya', '2023-06-19 09:26:47', '2023-06-19 09:26:47'),
(43, 'G013', 'Kekhawatiran mengenai konsekuensi negatif yang akan terjadi. Contoh: gemuk, gula berlebih', '2023-06-19 09:26:54', '2023-06-19 09:26:54'),
(44, 'G014', 'Ketidakmampuan yang berkelanjutan untuk melengkapi kebutuhan nutrisi dan energi yang sesuai', '2023-06-19 09:27:03', '2023-06-19 09:27:03'),
(45, 'G015', 'Tidak ada bukti adanya gangguan dalam cara individu mengalami perubahan berat badan atau bentuk tubuh', '2023-06-19 09:27:12', '2023-06-19 09:27:12'),
(46, 'G016', 'Tidak dapat dikaitkan dengan kondisi atau gangguan mental lainnya', '2023-06-19 09:27:20', '2023-06-19 09:27:20'),
(47, 'G017', 'Restriksi pola makan yang signifikan', '2023-06-19 09:27:29', '2023-06-19 09:27:29'),
(48, 'G018', 'Gangguan dalam persepsi tubuh', '2023-06-19 09:27:37', '2023-06-19 09:27:37'),
(49, 'G019', 'Konsekuensi fisik dan kesehatan yang merugikan', '2023-06-19 09:27:45', '2023-06-19 09:27:45'),
(50, 'G020', 'Tidak terjadi sebagai akibat penggunaan zat tertentu', '2023-06-19 09:27:54', '2023-06-19 09:27:54'),
(51, 'G021', 'Episod makan yang berlebihan dan berulang', '2023-06-19 09:28:03', '2023-06-19 09:28:03'),
(52, 'G022', 'Perilaku kompensator berlebihan', '2023-06-19 09:29:27', '2023-06-19 09:29:27'),
(53, 'G023', 'Praktek skrining tubuh berlebihan', '2023-06-19 09:29:41', '2023-06-19 09:29:41'),
(54, 'G024', 'Perasaan malu dan rasa bersalah', '2023-06-19 09:29:51', '2023-06-19 09:29:51'),
(55, 'G025', 'Ketidakteraturan dalam pola makan', '2023-06-19 09:29:59', '2023-06-19 09:29:59'),
(56, 'G026', 'Makan berlebihan diiringi oleh perasaan ketidaknyamanan', '2023-06-19 09:30:07', '2023-06-19 09:30:07'),
(57, 'G027', 'Makan berlebihan tanpa perilaku kompensator', '2023-06-19 09:30:15', '2023-06-19 09:30:15'),
(58, 'G028', 'Makan dalam situasi emosional', '2023-06-19 09:30:23', '2023-06-19 09:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` char(255) NOT NULL,
  `kode_depresi` char(255) NOT NULL,
  `mb` double(8,2) NOT NULL,
  `md` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`id`, `kode_gejala`, `kode_depresi`, `mb`, `md`, `created_at`, `updated_at`) VALUES
(1, 'G001', 'P001', 1.00, 0.00, NULL, NULL),
(2, 'G002', 'P001', 0.40, 0.20, NULL, NULL),
(3, 'G003', 'P001', 0.40, 0.20, NULL, NULL),
(4, 'G004', 'P001', 0.60, 0.20, NULL, NULL),
(7, 'G007', 'P002', 0.60, 0.20, NULL, NULL),
(9, 'G006', 'P002', 1.00, 0.00, NULL, NULL),
(10, 'G008', 'P002', 0.60, 0.00, NULL, NULL),
(11, 'G010', 'P002', 0.20, 0.20, NULL, NULL),
(12, 'G009', 'P002', 0.20, 0.20, NULL, NULL),
(17, 'G003', 'P003', 0.40, 0.20, NULL, NULL),
(18, 'G014', 'P003', 0.80, 0.20, NULL, NULL),
(19, 'G015', 'P003', 0.60, 0.20, NULL, NULL),
(20, 'G011', 'P003', 0.80, 0.20, NULL, NULL),
(21, 'G012', 'P003', 0.80, 0.20, NULL, NULL),
(22, 'G013', 'P003', 0.20, 0.20, NULL, NULL),
(23, 'G016', 'P003', 0.60, 0.20, NULL, NULL),
(30, 'G009', 'P004', 0.20, 0.20, NULL, NULL),
(31, 'G010', 'P004', 0.20, 0.20, NULL, NULL),
(32, 'G013', 'P004', 0.20, 0.20, NULL, NULL),
(35, 'G017', 'P004', 1.00, 0.00, NULL, NULL),
(36, 'G018', 'P004', 0.60, 0.20, NULL, NULL),
(37, 'G020', 'P004', 0.60, 0.20, NULL, NULL),
(38, 'G019', 'P004', 0.60, 0.20, NULL, NULL),
(39, 'G017', 'P004', 0.60, 0.20, NULL, NULL),
(40, 'G018', 'P004', 0.80, 0.20, NULL, NULL),
(41, 'G020', 'P005', 0.60, 0.20, NULL, NULL),
(42, 'G021', 'P005', 0.20, 0.20, NULL, NULL),
(43, 'G023', 'P005', 0.80, 0.00, NULL, NULL),
(44, 'G024', 'P005', 0.20, 0.20, NULL, NULL),
(45, 'G025', 'P005', 0.20, 0.20, NULL, NULL),
(46, 'G021', 'P004', 0.20, 0.20, NULL, NULL),
(47, 'G024', 'P005', 0.20, 0.20, NULL, NULL),
(48, 'G025', 'P005', 0.20, 0.20, NULL, NULL),
(49, 'G026', 'P005', 0.60, 0.20, NULL, NULL),
(50, 'G027', 'P005', 0.80, 0.20, NULL, NULL),
(51, 'G028', 'P005', 0.60, 0.20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_users`
--

CREATE TABLE `kondisi_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `nilai` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kondisi_users`
--

INSERT INTO `kondisi_users` (`id`, `kondisi`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Tahu', 0.00, NULL, NULL),
(2, 'Tidak Yakin', 0.20, NULL, NULL),
(3, 'Mungkin', 0.40, NULL, NULL),
(4, 'Kemungkinan Besar', 0.60, NULL, NULL),
(5, 'Hampir Pasti', 0.80, NULL, NULL),
(6, 'Pasti', 1.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_19_072517_create_gejalas_table', 1),
(7, '2022_12_20_020104_create_keputusans_table', 1),
(8, '2022_12_20_023708_create_kondisi_users_table', 1),
(9, '2022_12_21_202642_create_diagnosas_table', 1),
(10, '2022_12_22_143013_create_tingkat_depresis_table', 1),
(11, '2022_12_28_103705_create_artikels_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_depresi`
--

CREATE TABLE `tingkat_depresi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_depresi` char(255) NOT NULL,
  `depresi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tingkat_depresi`
--

INSERT INTO `tingkat_depresi` (`id`, `kode_depresi`, `depresi`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Pica', NULL, '2023-06-19 09:30:46'),
(2, 'P002', 'Rumination Disorder', NULL, '2023-06-19 09:31:09'),
(3, 'P003', 'ARFID', NULL, '2023-06-19 09:31:18'),
(4, 'P004', 'Anorexia Nervosa', NULL, '2023-06-19 09:31:26'),
(5, 'P005', 'Bulimia Nervosa', '2023-06-19 09:31:34', '2023-06-19 09:31:34'),
(6, 'P006', 'Binge-Eating Disorder', '2023-06-19 09:31:55', '2023-06-19 09:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'rika.latupono@example.net', '2023-06-17 10:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'K6eiLKm7N3', '2023-06-17 10:19:10', '2023-06-17 10:19:10'),
(2, 'admin', 'gunarto.melinda@example.org', '2023-06-17 10:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'dCsTvnwSUq', '2023-06-17 10:19:10', '2023-06-17 10:19:10'),
(3, 'admin', 'mhastuti@example.com', '2023-06-17 10:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PHcho023lN', '2023-06-17 10:19:10', '2023-06-17 10:19:10'),
(4, 'admin', 'admin@example.com', '2023-06-17 10:19:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8tVSh28n2Q', '2023-06-17 10:19:10', '2023-06-17 10:19:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagnosas`
--
ALTER TABLE `diagnosas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_users`
--
ALTER TABLE `kondisi_users`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tingkat_depresi`
--
ALTER TABLE `tingkat_depresi`
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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diagnosas`
--
ALTER TABLE `diagnosas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `kondisi_users`
--
ALTER TABLE `kondisi_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tingkat_depresi`
--
ALTER TABLE `tingkat_depresi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
