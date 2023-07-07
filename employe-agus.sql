-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2023 at 02:30 PM
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
-- Database: `employe-agus`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_07_071904_create_tbl_divisis_table', 1),
(6, '2023_07_07_071913_create_tbl_pegawais_table', 1),
(7, '2023_07_07_071918_create_tbl_presensis_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_divisis`
--

CREATE TABLE `tbl_divisis` (
  `Kode_divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pimpinan_divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_divisis`
--

INSERT INTO `tbl_divisis` (`Kode_divisi`, `Nama_divisi`, `Pimpinan_divisi`, `created_at`, `updated_at`) VALUES
('S1', 'Gudang', 'Beni Permana, SE', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
('S2', 'Produksi', 'Syaiful Bachri, ST', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
('S3', 'HRD', 'Dr. Anggit Darmawan', '2023-07-07 00:26:55', '2023-07-07 00:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawais`
--

CREATE TABLE `tbl_pegawais` (
  `NIP` int NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `Kode_divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_pegawais`
--

INSERT INTO `tbl_pegawais` (`NIP`, `Nama`, `Alamat`, `Tanggal_lahir`, `Kode_divisi`, `created_at`, `updated_at`) VALUES
(11234, 'Arini Nikita', 'Jl. Dedali Putih 5A Tangerang', '1988-01-02', 'S1', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(11235, 'Toni Purana', 'Jl. Temenggung 21B Jakarta Selatan', '1983-04-04', 'S2', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(11236, 'Gigih Prayitno', 'Jl. Sidopekso 65 Bandung', '1985-11-08', 'S3', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(11237, 'Hilda Rahmawati', 'Jl. Mendut 12 Bogor', '1986-11-01', 'S2', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(11238, 'Miftachul Fauzan', 'Jl. Borobudur 1 Bogor', '1984-09-05', 'S1', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(11239, 'Katrilia Tirta', 'Jl. Kenanga 21 Jakarta Timur', '1984-07-05', 'S1', '2023-07-07 00:26:55', '2023-07-07 00:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_presensis`
--

CREATE TABLE `tbl_presensis` (
  `id` bigint UNSIGNED NOT NULL,
  `Tanggal` date DEFAULT NULL,
  `NIP` int NOT NULL,
  `Jam_masuk` time DEFAULT NULL,
  `Jam_pulang` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_presensis`
--

INSERT INTO `tbl_presensis` (`id`, `Tanggal`, `NIP`, `Jam_masuk`, `Jam_pulang`, `created_at`, `updated_at`) VALUES
(1, '2018-01-02', 11234, '08:10:00', '17:40:00', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(2, '2018-01-02', 11235, '08:00:00', '17:07:00', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(3, '2018-01-02', 11236, '07:00:00', '16:30:00', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(4, '2018-01-03', 11234, '07:45:00', '16:40:00', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(5, '2018-01-03', 11235, '07:50:00', '16:50:00', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(6, '2018-01-04', 11234, '07:55:00', '17:30:00', '2023-07-07 00:26:55', '2023-07-07 00:26:55'),
(7, '2018-01-05', 11234, '07:20:00', '16:20:00', '2023-07-07 00:26:55', '2023-07-07 00:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_divisis`
--
ALTER TABLE `tbl_divisis`
  ADD PRIMARY KEY (`Kode_divisi`);

--
-- Indexes for table `tbl_pegawais`
--
ALTER TABLE `tbl_pegawais`
  ADD UNIQUE KEY `tbl_pegawais_nip_unique` (`NIP`),
  ADD KEY `tbl_pegawais_kode_divisi_foreign` (`Kode_divisi`);

--
-- Indexes for table `tbl_presensis`
--
ALTER TABLE `tbl_presensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_presensis_nip_foreign` (`NIP`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_presensis`
--
ALTER TABLE `tbl_presensis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_pegawais`
--
ALTER TABLE `tbl_pegawais`
  ADD CONSTRAINT `tbl_pegawais_kode_divisi_foreign` FOREIGN KEY (`Kode_divisi`) REFERENCES `tbl_divisis` (`Kode_divisi`);

--
-- Constraints for table `tbl_presensis`
--
ALTER TABLE `tbl_presensis`
  ADD CONSTRAINT `tbl_presensis_nip_foreign` FOREIGN KEY (`NIP`) REFERENCES `tbl_pegawais` (`NIP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
