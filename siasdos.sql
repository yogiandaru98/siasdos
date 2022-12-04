-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2022 at 10:02 AM
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
-- Database: `siasdos`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id_announcement` int UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id_announcement`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Wawancara', '<p>WAWANCARA DILAKUKAN SECARA ONLINE</p>', '2022-12-04 03:10:00', '2022-12-04 03:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE `mata_kuliah` (
  `id_mk` int UNSIGNED NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `semester` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `nama_mk`, `semester`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pemrograman Web', 3, 0, '2022-12-04 02:33:17', '2022-12-04 02:33:17'),
(2, 'Pemrograman Dasar', 1, 0, '2022-12-04 02:33:17', '2022-12-04 02:33:17'),
(3, 'Matematika Dasar', 1, 1, '2022-12-04 02:33:17', '2022-12-04 02:33:17'),
(4, 'Logika', 1, 1, '2022-12-04 02:33:17', '2022-12-04 02:33:17'),
(5, 'Basis Data', 3, 1, '2022-12-04 02:33:17', '2022-12-04 02:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(5, '2022-12-04-081310', 'App\\Database\\Migrations\\Users', 'default', 'App', 1670142617, 1),
(6, '2022-12-04-081450', 'App\\Database\\Migrations\\MataKuliah', 'default', 'App', 1670142617, 1),
(7, '2022-12-04-081451', 'App\\Database\\Migrations\\Pendaftar', 'default', 'App', 1670142617, 1),
(8, '2022-12-04-082004', 'App\\Database\\Migrations\\Anouncement', 'default', 'App', 1670142617, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int UNSIGNED NOT NULL,
  `id_user` int UNSIGNED NOT NULL,
  `id_mk` int UNSIGNED NOT NULL,
  `status` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int UNSIGNED NOT NULL,
  `NPM` varchar(13) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `is_admin` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `NPM`, `password`, `nama`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, '2737730315748', 'hJPUutU.TerZ6;lClyQ', 'Ratna Putri Widiastuti', 1, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(2, '1392327598502', '@E*SHBel|', 'Ajimat Simbolon', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(3, '4216643751754', 'H\\zLPJoQd8wt.qi}?', 'Cemani Kawaya Prasasta', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(4, '2236137506695', 'nRPC$uQa>&48Y', 'Tina Anita Usamah S.T.', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(5, '4129723182624', 'Tc5v`]p(9<JTM', 'Adika Sitompul', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(6, '1412330369874', '[!!b93BWP,*', 'Laila Elma Handayani', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(7, '2894060839332', 'hkl;l*|&~', 'Amelia Ilsa Purwanti S.H.', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(8, '9553509716046', '0@.@*+5', 'Mutia Dina Mulyani S.IP', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(9, '1133558715138', '9Wvm)}Y3ig', 'Rosman Megantara', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(10, '7887683206843', 'MR7z!Pt*/\'', 'Koko Nababan', 0, '2022-12-04 02:30:25', '2022-12-04 02:30:25'),
(11, '2017051033', 'rian', 'rian', 0, '2022-12-04 02:49:23', '2022-12-04 02:49:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id_announcement`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD KEY `pendaftar_id_user_foreign` (`id_user`),
  ADD KEY `pendaftar_id_mk_foreign` (`id_mk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id_announcement` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  MODIFY `id_mk` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_id_mk_foreign` FOREIGN KEY (`id_mk`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
