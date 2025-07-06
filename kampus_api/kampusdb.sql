-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2025 at 08:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kampus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_lengkap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telpon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('Swasta','Negeri') COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` decimal(10,7) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id`, `nama_kampus`, `alamat_lengkap`, `no_telpon`, `kategori`, `latitude`, `longitude`, `jurusan`, `created_at`, `updated_at`) VALUES
(3, 'Universitas Negeri padang', 'Air Tawar', '08347458654', 'Negeri', '-0.8987556', '100.4238197', 'Olahraga', '2025-06-28 01:35:41', '2025-06-28 02:01:37'),
(4, 'Universitas Unand', 'Limau Manis', '08467343672', 'Negeri', '-0.9149980', '100.4581896', 'Kedokteran', '2025-06-28 01:39:48', '2025-06-28 01:46:44'),
(7, 'Universitas Baiturahmah', 'Jl. By Pass, Aie Pacah, Kec. Koto Tangah, Kota Padang, Sumatera Barat 25586', '084645638', 'Swasta', '-0.8702322', '100.3835605', 'Kedokteran', '2025-06-28 02:03:03', '2025-06-28 02:03:18'),
(9, 'POliteknik Negeri Padang', 'limau Manis', '34749373767', 'Negeri', '-0.9137526', '100.4662363', 'TI', '2025-06-28 02:28:09', '2025-06-28 02:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_06_01_000000_create_kampus_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
