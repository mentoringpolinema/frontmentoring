-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 07:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentoring20`
--

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(10) UNSIGNED NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `angkatan`, `created_at`, `updated_at`) VALUES
(1, '2020', '2021-02-02 06:50:19', NULL),
(2, '2020', '2021-02-02 06:50:19', NULL);

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
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `singkatan_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi', 'TI', '2021-02-02 06:50:49', NULL),
(2, 'Akutansi', 'AK', '2021-02-10 15:26:37', NULL),
(3, 'Teknik Elektro', 'TE', '2021-02-10 09:25:48', '2021-02-10 09:25:48'),
(4, 'Teknik Kimia', 'TK', '2021-02-10 10:06:04', '2021-02-10 10:06:04'),
(5, 'Teknik Mesin', 'TM', '2021-02-17 23:23:00', '2021-02-17 23:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minggu_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `jenis_kegiatan`, `tanggal_kegiatan`, `jam_kegiatan`, `minggu_kegiatan`, `detail_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Opening Mentoring 2021/2022', 'Opening Mentoring', '2021-02-06', '11.30 AM', 'Minggu 1', 'Kegiatan Opening Mentoring Bagi Mahasiswa Muslim Polinema Angkatan 2021. Online di Channel Official Youtube Rohis Polinema', '2021-02-03 05:46:31', NULL),
(12, 'Pertemuan Zoom', 'Materi', '0000-00-00', '09:30 AM', 'Minggu 2', 'Ashiap', '2021-02-14 19:32:33', '2021-02-14 19:32:33'),
(13, 'Penyampaian Materi', 'Materi', '02/20/2021', '09:00 AM', 'Minggu 5', 'Zoom Ashiap', '2021-02-17 23:37:16', '2021-02-17 23:37:16');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` int(10) NOT NULL,
  `jurusan_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(10) UNSIGNED NOT NULL,
  `nama_kelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materi_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(10) UNSIGNED NOT NULL,
  `id_mentee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_panitia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `NIM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(10) UNSIGNED NOT NULL,
  `nama_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minggu_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `minggu_materi`, `link_materi`, `detail_materi`, `created_at`, `updated_at`) VALUES
(1, 'Makhorijul Huruf ', 'Minggu 3', 'https://www.youtube.com/watch?v=1c3nyGDzDBQ', 'Materi Makhorijul Huruf dapat diaksesi di laman berikut ini', '2021-02-15 04:10:35', NULL),
(2, 'Makhorijul Huruf Part 2', 'Minggu 5', 'https://www.youtube.com/watch?v=NWA1IPAzUmc', 'Materi Minggu 5 dapat diaksesi di laman berikut ini ', '2021-02-15 04:15:51', NULL),
(3, 'Sifat-Sifat Huruf', 'Minggu 2', 'https://www.youtube.com/rohispolinema', 'Materi dapat diakses di laman berikut ini', '2021-02-15 00:02:22', '2021-02-15 00:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id_mentee` int(10) UNSIGNED NOT NULL,
  `nim_mentee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mentee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int(10) NOT NULL,
  `kelompok_id` int(10) NOT NULL,
  `angkatan_id` int(10) NOT NULL,
  `status_mentee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`id_mentee`, `nim_mentee`, `nama_mentee`, `kelas_id`, `kelompok_id`, `angkatan_id`, `status_mentee`, `created_at`, `updated_at`) VALUES
(1, '1831710190', 'A. Yahya Hudan Permana', 0, 0, 0, '', '2021-02-03 13:37:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(10) UNSIGNED NOT NULL,
  `nama_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `nama_mentor`, `email_mentor`, `alamat_mentor`, `notelp_mentor`, `status_mentor`, `created_at`, `updated_at`) VALUES
(2, 'A. Yahya Hudan Permana', 'yahyahudan@mentoringpolinema.my.id', 'Jalan A. Satsui Tubun III No.83M RT 12 RW03 Malang', '081259224380', 'Aktif', NULL, NULL),
(3, 'Rijalus Sholihin', 'rijaluss@mentoringpolinema.my.id', 'Jalan Sepanjang Kenangan Indah No.69 Kab. Probolinggo', '082337105933', 'Aktif', '2021-01-28 05:30:35', '2021-01-28 05:30:35'),
(12, 'Galih Pamungkas I', 'galihp@mentoringpolinema.my.id', 'Darjo', '0812359224380', 'Aktif', '2021-02-15 03:04:43', '2021-02-15 03:04:43');

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
(4, '2021_01_28_024723_create_mahasiswa_table', 1),
(5, '2021_01_28_114810_create_mentor_table', 2),
(6, '2021_02_02_044120_create_jurusan_table', 3),
(7, '2021_02_02_044300_create_prodi_table', 3),
(8, '2021_02_02_044321_create_angkatan_table', 3),
(9, '2021_02_02_045206_create_kelompok_table', 3),
(10, '2021_02_02_045351_create_materi_table', 3),
(11, '2021_02_02_050625_create_pengganti_table', 3),
(12, '2021_02_02_050756_create_mentee_table', 3),
(13, '2021_02_02_050825_create_panitia_table', 4),
(14, '2021_02_02_050848_create_keluhan_table', 4),
(15, '2021_02_02_053434_create_kelas_table', 4),
(16, '2021_02_02_145451_create_kegiatan_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(10) UNSIGNED NOT NULL,
  `nama_panitia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username_panitia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_panitia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_panitia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pengganti`
--

CREATE TABLE `pengganti` (
  `id_pengganti` int(10) UNSIGNED NOT NULL,
  `id_mentee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_pengganti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) UNSIGNED NOT NULL,
  `nama_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `singkatan_prodi`, `created_at`, `updated_at`) VALUES
(1, 'D4 Teknik Informatika', 'MI', '2021-02-02 06:51:07', NULL),
(2, 'D3 Manajemen Informatika', 'MI', '2021-02-02 06:51:07', NULL),
(3, 'D4 Keuangan', 'KEU', '2021-02-10 09:38:12', '2021-02-10 09:38:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Panitia', 'Ahmad Yahya', 'panitia@mentoringpolinema.my.id', NULL, '$2y$10$5VOyqn9iQuxiUAQXOoCk4OdAy2w01k8451VGKwnFsUYyxE2vqkc5O', 'UeRO1IUWpHEdqWvMEArkUp8KDdxetkmKZt4n7yRV33yblrSQd3TGWkcjN8GJ', '2021-01-27 20:10:08', '2021-01-27 20:10:08'),
(2, 'Mentor', 'Mentor', 'mentor@mentoringpolinema.my.id', NULL, '$2y$10$MxqXdmLcxNhCz57DsQUkwOrPbEXcbm6vD87LhRNsrEi6PAAZaw/Ym', NULL, '2021-02-17 23:07:24', '2021-02-17 23:07:24'),
(3, 'Mentee', 'Irfak Wahyudi', 'irfak@mentoringpolinema.my.id', NULL, '$2y$10$/jul3vL8T/4bgftf/isb4uEpUv97HIgBKMnzSCo1EZgsLj6Vzzp.C', NULL, '2021-02-17 23:10:11', '2021-02-17 23:10:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `angkatan`
--
ALTER TABLE `angkatan`
  ADD PRIMARY KEY (`id_angkatan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`id_mentee`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`),
  ADD UNIQUE KEY `panitia_email_panitia_unique` (`email_panitia`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengganti`
--
ALTER TABLE `pengganti`
  ADD PRIMARY KEY (`id_pengganti`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

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
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id_mentee` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengganti`
--
ALTER TABLE `pengganti`
  MODIFY `id_pengganti` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
