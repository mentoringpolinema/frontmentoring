-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 10:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
  `nama_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minggu_kegiatan` int(2) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `detail_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `jenis_kegiatan`, `minggu_kegiatan`, `tanggal_kegiatan`, `detail_kegiatan`, `created_at`, `updated_at`) VALUES
(2, 'Makhrojul Huruf', 'Pertemuan', 9, '2021-03-16', '<p>haha</p>', '2021-02-25 04:17:23', '2021-03-11 03:15:20'),
(3, 'haha', 'Materi', 1, '2021-03-15', '<p>aaaaaa</p>\r\n\r\n<p>aaa</p>', '2021-03-07 06:30:57', '2021-03-07 06:30:57'),
(5, 'n', 'Materi', 3, '2021-03-26', '<p>a,</p>', '2021-03-11 03:14:03', '2021-03-11 03:16:21'),
(6, 'Makhrojul Huruf', 'Materi', 4, '2021-03-10', '<p>Sesi 1 09.00</p>\r\n\r\n<p>Sesi 2 10.00</p>\r\n\r\n<p>Sesi 3 11.00</p>', '2021-03-15 01:00:07', '2021-03-15 01:01:08');

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
  `nama_materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_materi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_materi_embed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minggu_materi` int(2) NOT NULL,
  `detail_materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `link_materi`, `link_materi_embed`, `minggu_materi`, `detail_materi`, `created_at`, `updated_at`) VALUES
(15, 'Mengaji', 'https://www.youtube.com/watch?v=_jEkvAHLbp0', 'https://youtube.com/embed/_jEkvAHLbp0', 9, '<p>Sesi 1 09.00</p>\r\n\r\n<p>Sesi 2 10.00</p>', '2021-03-14 22:26:00', '2021-03-14 22:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id_mentee` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
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

INSERT INTO `mentee` (`id_mentee`, `id_user`, `nim_mentee`, `nama_mentee`, `kelas_id`, `kelompok_id`, `angkatan_id`, `status_mentee`, `created_at`, `updated_at`) VALUES
(1, 0, '1831710190', 'A. Yahya Hudan Permana', 0, 0, 0, '', '2021-02-03 13:37:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mentor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `id_user`, `nama_mentor`, `email_mentor`, `alamat_mentor`, `notelp_mentor`, `status_mentor`, `slug`, `created_at`, `updated_at`) VALUES
(15, 11, 'Master', 'halo@halo.com', 'tyftr', '0878976858', 'aktif', 'master', '2021-03-15 02:26:49', '2021-03-15 02:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2021_01_28_114810_create_mentor_table', 1),
(6, '2021_02_02_044120_create_jurusan_table', 1),
(7, '2021_02_02_044300_create_prodi_table', 1),
(8, '2021_02_02_044321_create_angkatan_table', 1),
(9, '2021_02_02_045206_create_kelompok_table', 1),
(10, '2021_02_02_045351_create_materi_table', 1),
(11, '2021_02_02_050625_create_pengganti_table', 1),
(12, '2021_02_02_050756_create_mentee_table', 1),
(13, '2021_02_02_050825_create_panitia_table', 1),
(14, '2021_02_02_050848_create_keluhan_table', 1),
(15, '2021_02_02_053434_create_kelas_table', 1),
(16, '2021_02_02_145451_create_kegiatan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_panitia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) UNSIGNED NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `tagline_pengumuman` varchar(255) NOT NULL,
  `status_pengumuman` varchar(255) NOT NULL,
  `detail_pengumuman` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `tagline_pengumuman`, `status_pengumuman`, `detail_pengumuman`, `created_at`, `updated_at`) VALUES
(2, 'a', 'Mentoring', 'Selesai', '<p>a</p>\r\n\r\n<p>a</p>', '2021-03-07 07:37:55', '2021-03-07 07:37:55');

-- --------------------------------------------------------

--
-- Table structure for table `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id_pertemuan` int(11) NOT NULL,
  `nama_pertemuan` varchar(100) NOT NULL,
  `mentor_pertemuan` varchar(100) NOT NULL,
  `minggu_pertemuan` int(2) NOT NULL,
  `tanggal_pertemuan` date NOT NULL,
  `detail_pertemuan` text NOT NULL,
  `link_pertemuan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int(20) UNSIGNED NOT NULL,
  `role` enum('Panitia','Mentee','Mentor','') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Panitia',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Mentee', 'Izza Putri', 'izza.mentee@mentoringpolinema.my.id', NULL, '$2y$10$fFqkKbYnYeJyEwZkN.S5yOB6o4khnAx.Z5h6XDUgpB.9RXo44fiiq', NULL, '2021-03-14 23:36:06', '2021-03-14 23:36:06'),
(3, 'Mentor', 'Rizal Putra', 'rizal.mentor@mentoringpolinema.my.id', NULL, '$2y$10$UPEF0HEzIiSXcRW0D95wZeGG2FyQZYmGKr/Va2LM5r.WCuLLtn56G', NULL, '2021-03-14 23:41:22', '2021-03-14 23:41:22'),
(4, 'Panitia', 'Irfak Wahyudi', 'irfak.panitia@mentoringpolinema.my.id', NULL, '$2y$10$ziqkdS77Ghq0nEDwnV6z6e7.tJsX0ru8w3cVxrj5.5erP11GSy6eq', NULL, '2021-03-15 00:02:04', '2021-03-15 00:02:04'),
(10, 'Mentor', 'test', 'djasd!!=@askdnsakd.xom', NULL, '$2y$10$Xa0uf6ctrJ4vmntBCFA1eOzlVXuGFs94bW93LO9u5fjs9fb11cgNy', NULL, '2021-03-15 01:29:16', '2021-03-15 01:29:16'),
(11, 'Mentor', 'Master', 'halo@halo.com', NULL, '$2y$10$78MUTy8q0hwcI0zUAsTGvO8o4vy2caotQu3l8sKi7NbpFk5D70AuK', NULL, '2021-03-15 02:26:49', '2021-03-15 02:26:49'),
(12, 'Mentor', 'a', 'test@gmail.asodm', NULL, '$2y$10$8SCl5o2mAceVuzcN4AZLbumIc2HDeR0T22qbofa./G/82BpxhaXnS', NULL, '2021-03-15 02:30:56', '2021-03-15 02:30:56');

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
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `pengganti`
--
ALTER TABLE `pengganti`
  ADD PRIMARY KEY (`id_pengganti`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id_mentee` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
