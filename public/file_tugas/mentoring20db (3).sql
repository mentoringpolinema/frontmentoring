-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 09:02 AM
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
-- Database: `mentoring20db`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(10) UNSIGNED NOT NULL,
  `pertemuan_id` int(11) UNSIGNED DEFAULT NULL,
  `mentee_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `pertemuan_id`, `mentee_id`, `created_at`, `updated_at`) VALUES
(20, 2, 1, '2021-04-30 03:03:56', '2021-04-30 03:03:56'),
(22, 3, 1, '2021-04-30 03:15:02', '2021-04-30 03:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `angkatan`
--

CREATE TABLE `angkatan` (
  `id_angkatan` int(10) UNSIGNED NOT NULL,
  `angkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `angkatan`
--

INSERT INTO `angkatan` (`id_angkatan`, `angkatan`, `created_at`, `updated_at`) VALUES
(1, '2020', '2021-04-19 00:54:00', '2021-04-19 00:54:00');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan_jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `singkatan_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'Teknologi Informasi', 'TI', NULL, NULL),
(2, 'Teknik Sipil', 'TS', NULL, NULL),
(3, 'Teknik Elektro', 'TE', NULL, NULL),
(4, 'Akutansi', 'AK', NULL, NULL),
(5, 'Teknik Kimia', 'TK', NULL, NULL),
(6, 'Teknik Mesin', 'TM', NULL, NULL),
(7, 'Administrasi Niaga', 'AN', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minggu_kegiatan` int(11) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `detail_kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama_kegiatan`, `jenis_kegiatan`, `minggu_kegiatan`, `tanggal_kegiatan`, `detail_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Pertemuan Perdana Mentoring', 'Pertemuan', 1, '2021-04-24', '<p>Pertemuan Perdana dengan Mentor, diharapkan seluruh mentee untuk mengikuti kegiatan ini.&nbsp;</p>\r\n\r\n<p>Terimakasih :)</p>', '2021-04-19 22:25:03', '2021-04-19 22:25:03'),
(2, 'Materi Dan Tugas', 'Materi', 2, '2021-05-01', '<p>Materi dan Tugas Minggu Ke-2, silahkan mengakses materi dan mengerjakan tugas yang telah disediakan.&nbsp;</p>', '2021-04-19 22:34:30', '2021-04-19 22:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) UNSIGNED NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodi_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`, `prodi_id`, `created_at`, `updated_at`) VALUES
(1, '1A', 1, NULL, NULL),
(2, '1A', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id_kelompok` int(10) UNSIGNED NOT NULL,
  `nama_kelompok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentor_id` int(10) UNSIGNED NOT NULL,
  `materi_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id_kelompok`, `nama_kelompok`, `mentor_id`, `materi_id`, `created_at`, `updated_at`) VALUES
(1, '2', 1, 1, NULL, NULL),
(2, '3', 3, 1, '2021-04-24 05:40:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` int(10) UNSIGNED NOT NULL,
  `mentee_id` int(10) UNSIGNED NOT NULL,
  `panitia_id` int(10) UNSIGNED DEFAULT NULL,
  `isi_keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawab_keluhan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `mentee_id`, `panitia_id`, `isi_keluhan`, `jawab_keluhan`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 'Belum Ada Pesan !', 'Assalamualaikum, Silahkan kirim kan keluhan anda. Terimakasih', '2021-05-01 19:47:26', '2021-05-01 19:47:26'),
(6, 1, 1, 'Belum Ada Pesan !', 'Assalamualaikum, Silahkan kirim kan keluhan anda. Terimakasih', '2021-05-01 19:49:19', '2021-05-01 19:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(10) UNSIGNED NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `link_materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_materi_embed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minggu_materi` int(11) NOT NULL,
  `detail_materi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `link_materi`, `link_materi_embed`, `minggu_materi`, `detail_materi`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Belajar Mengaji', 'https://www.youtube.com/watch?v=_jEkvAHLbp0', 'https://youtube.com/embed/_jEkvAHLbp0', 1, 'Jam 08:00 sampai selesai yaaaa....', 'belajar-mengaji', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentee`
--

CREATE TABLE `mentee` (
  `id_mentee` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nim_mentee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_mentee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_id` int(10) UNSIGNED NOT NULL,
  `kelompok_id` int(10) UNSIGNED DEFAULT NULL,
  `angkatan_id` int(10) UNSIGNED NOT NULL,
  `status_mentee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentee`
--

INSERT INTO `mentee` (`id_mentee`, `user_id`, `nim_mentee`, `nama_mentee`, `kelas_id`, `kelompok_id`, `angkatan_id`, `status_mentee`, `created_at`, `updated_at`) VALUES
(1, 3, '1831710190', 'A. Yahya Hudan Permana', 1, 2, 1, 'Tidak Lulus', NULL, '2021-05-02 23:41:19'),
(2, 2, '1831710160', 'Irfak Wahyudi', 2, 1, 1, 'Lulus', '2021-04-20 07:52:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id_mentor` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_mentor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_mentor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_mentor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notelp_mentor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_mentor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id_mentor`, `user_id`, `nama_mentor`, `email_mentor`, `alamat_mentor`, `notelp_mentor`, `status_mentor`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ust. Rijalus Sholihan', 'mentor@mentoringpolinema.my.id', 'Kamerun', '0503 2534 1592', 'aktif', 'rijal-sholihun', NULL, '2021-04-27 08:05:04'),
(2, 7, 'Galih Pamungkas I', 'galihp@mentoringpolinema.my.id', 'darjo', '0812359224380', 'aktif', 'galih-pamungkas-i', '2021-04-21 18:55:11', '2021-04-21 18:55:11'),
(3, 8, 'Sena Adi Fakhruddiin', 'senadi@mentoringpolinema.my.id', 'Sengkaleng', '082337105933', 'tidak aktif', 'sena-adi-fakhruddiin', '2021-04-21 18:55:30', '2021-04-21 18:55:30');

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
(9, '2021_02_02_045205_create_materi_table', 1),
(10, '2021_02_02_045206_create_kelompok_table', 1),
(11, '2021_02_02_050825_create_panitia_table', 1),
(12, '2021_02_02_053434_create_kelas_table', 1),
(13, '2021_02_02_053435_create_mentee_table', 1),
(14, '2021_02_02_053436_create_pengganti_table', 1),
(15, '2021_02_02_053437_create_keluhan_table', 1),
(16, '2021_02_02_145451_create_kegiatan_table', 1),
(17, '2021_02_27_024440_create_pertemuan_table', 1),
(18, '2021_03_02_011822_create_pengumuman_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama_panitia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `user_id`, `nama_panitia`, `created_at`, `updated_at`) VALUES
(1, 1, 'A. Yahya Hudan Permana', '2021-04-27 13:05:03', '2021-04-27 13:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengganti`
--

CREATE TABLE `pengganti` (
  `id_pengganti` int(10) UNSIGNED NOT NULL,
  `mentee_id` int(10) UNSIGNED NOT NULL,
  `file_pengganti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(10) UNSIGNED NOT NULL,
  `judul_pengumuman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline_pengumuman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pengumuman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_pengumuman` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `tagline_pengumuman`, `status_pengumuman`, `detail_pengumuman`, `created_at`, `updated_at`) VALUES
(1, 'Mentoring Ashiap', 'Mentoring', 'Selesai', 'Sit perferendis iure eum est.', '2021-04-19 00:54:00', '2021-04-19 00:54:00'),
(2, 'Mau Closing Loh', 'Closing Mentoring', 'On Going', 'Et consequatur voluptate iste incidunt modi rerum ut. Et consequatur voluptate iste incidunt modi rerum ut. Et consequatur voluptate iste incidunt modi rerum ut. ', '2021-04-19 00:54:00', '2021-04-19 00:54:00'),
(3, 'Pengambilan Sertifikat', 'Pengambilan Sertifikat', 'Coming Soon', 'Temporibus doloremque eum beatae rem eum.', '2021-04-19 00:54:00', '2021-04-19 00:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `pertemuan`
--

CREATE TABLE `pertemuan` (
  `id_pertemuan` int(10) UNSIGNED NOT NULL,
  `nama_pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentor_id` int(10) UNSIGNED NOT NULL,
  `minggu_pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pertemuan` date NOT NULL,
  `detail_pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_pertemuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertemuan`
--

INSERT INTO `pertemuan` (`id_pertemuan`, `nama_pertemuan`, `mentor_id`, `minggu_pertemuan`, `tanggal_pertemuan`, `detail_pertemuan`, `link_pertemuan`, `created_at`, `updated_at`) VALUES
(2, 'Pertemuan Perdana', 1, '1', '2021-04-24', 'Hayok', 'Zoom', '2021-04-20 07:55:11', NULL),
(3, 'Pertemuan Kedua', 1, '3', '2021-05-01', 'Pertemuan Dengan Mentor', 'youtube.com', '2021-04-20 09:48:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) UNSIGNED NOT NULL,
  `nama_prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkatan_prodi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`, `singkatan_prodi`, `jurusan_id`, `created_at`, `updated_at`) VALUES
(1, 'D3 Manajemen Informatika', 'MI', 1, NULL, NULL),
(2, 'D4 Teknik Informatika', 'TI', 1, NULL, NULL),
(3, 'D3 Teknik Sipil', 'TS', 2, NULL, NULL),
(4, 'D4 Manajemen Rekayasa Konstruksi', 'MRK', 2, NULL, NULL),
(5, 'D3 Teknologi Konstruksi Jalan, Jembatan, dan Bangungan Air', 'TKJJBA', 2, NULL, NULL),
(6, 'D3 Teknik Listrik', 'TL', 3, NULL, NULL),
(7, 'D3 Teknik Elektronika', 'TE', 3, NULL, NULL),
(8, 'D3 Teknik Telekomunikasi', 'TT', 3, NULL, NULL),
(9, 'D4 Sistem Kelistrikan', 'SKL', 3, NULL, NULL),
(10, 'D4 Teknik Elektronika', 'TE', 3, NULL, NULL),
(11, 'D4 Jaringan Telekomunikasi Digital', 'JTD', 3, NULL, NULL),
(12, 'D4 Akutansi Manajemen', 'AM', 4, NULL, NULL),
(13, 'D4 Keuangan', 'KEU', 4, NULL, NULL),
(14, 'D3 Akutansi', 'AKT', 4, NULL, NULL),
(15, 'D3 Teknik Kimia', 'TK', 5, NULL, NULL),
(16, 'D4 Teknik Kimia Industri', 'TKI', 5, NULL, NULL),
(17, 'D4 Teknik Otomotif Elektronik', 'TOE', 6, NULL, NULL),
(18, 'D3 Teknik Mesin', 'TM', 6, NULL, NULL),
(19, 'D4 Teknik Mesin Produksi dan Perawatan', 'TMPP', 6, NULL, NULL),
(20, 'D4 Manajemen Pemasaran', 'MP', 7, NULL, NULL),
(21, 'D3 Administrasi Bisnis', 'AB', 7, NULL, NULL),
(22, 'D3 Bahasa Inggris', 'BING', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentee_id` int(10) UNSIGNED DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `mentee_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Panitia', 'Yahya Hudan', 'panitia@mentoringpolinema.my.id', NULL, '2021-04-19 00:54:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pNJhbA0QSA1ZdAeJMxKmP3beuhlnfmG8vXM7IjwoMT26Qb2Japreeqz9ooHE', NULL, NULL),
(2, 'Mentee', 'Irfak Wahyudi', 'irfak@mentoringpolinema.my.id', 2, '2021-04-19 00:54:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 's1KE48oKTmtKHpE6s2vaKbdz2cogXJOxV4GpcW3Mw02qw1cXJOYlHvF08Q0H', NULL, NULL),
(3, 'Mentee', 'Yahya Hudan', 'mentee@mentoringpolinema.my.id', 1, '2021-04-19 00:54:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'B5Qv3seq97KZLBdsvgkIgnBII99aFNj4wQl8HHOEEVZRN738voxxkIyk6Xv0', NULL, NULL),
(7, 'Mentor', 'Galih Pamungkas I', 'galihp@mentoringpolinema.my.id', NULL, NULL, '$2y$10$qogQVMNJqJ0ifdrBEWXXweO33.jFWVghqSjOVRCeXP45F3E9V7AES', NULL, '2021-04-21 18:55:10', '2021-04-21 18:55:10'),
(8, 'Mentor', 'Sena Adi Fakhruddiin', 'senadi@mentoringpolinema.my.id', NULL, NULL, '$2y$10$ukpNdulkzDHCGySnXb7uCubQJM8aHOrPj8YptyAp6kTUN.ejB5V8.', NULL, '2021-04-21 18:55:30', '2021-04-21 18:55:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `absensi_mentee_id_foreign` (`mentee_id`),
  ADD KEY `absensi_pertemuan_id_foreign` (`pertemuan_id`);

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
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kelas_prodi_id_foreign` (`prodi_id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `kelompok_mentor_id_foreign` (`mentor_id`),
  ADD KEY `kelompok_materi_id_foreign` (`materi_id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`),
  ADD KEY `keluhan_mentee_id_foreign` (`mentee_id`),
  ADD KEY `keluhan_panitia_id_foreign` (`panitia_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `mentee`
--
ALTER TABLE `mentee`
  ADD PRIMARY KEY (`id_mentee`),
  ADD KEY `mentee_kelas_id_foreign` (`kelas_id`),
  ADD KEY `mentee_kelompok_id_foreign` (`kelompok_id`),
  ADD KEY `mentee_angkatan_id_foreign` (`angkatan_id`),
  ADD KEY `mentee_user_id_foreign` (`user_id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id_mentor`),
  ADD KEY `mentor_user_id_foreign` (`user_id`);

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
  ADD KEY `panitia_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengganti`
--
ALTER TABLE `pengganti`
  ADD PRIMARY KEY (`id_pengganti`),
  ADD KEY `pengganti_mentee_id_foreign` (`mentee_id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`),
  ADD KEY `pertemuan_mentor_id_foreign` (`mentor_id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`),
  ADD KEY `prodi_jurusan_id_foreign` (`jurusan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `user_mentee_id_foreign` (`mentee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `angkatan`
--
ALTER TABLE `angkatan`
  MODIFY `id_angkatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id_kelompok` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id_keluhan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mentee`
--
ALTER TABLE `mentee`
  MODIFY `id_mentee` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id_mentor` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
  MODIFY `id_panitia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengganti`
--
ALTER TABLE `pengganti`
  MODIFY `id_pengganti` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `pertemuan`
--
ALTER TABLE `pertemuan`
  MODIFY `id_pertemuan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_mentee_id_foreign` FOREIGN KEY (`mentee_id`) REFERENCES `mentee` (`id_mentee`),
  ADD CONSTRAINT `absensi_pertemuan_id_foreign` FOREIGN KEY (`pertemuan_id`) REFERENCES `pertemuan` (`id_pertemuan`);

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_prodi_id_foreign` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`) ON DELETE CASCADE;

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `kelompok_materi_id_foreign` FOREIGN KEY (`materi_id`) REFERENCES `materi` (`id_materi`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelompok_mentor_id_foreign` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id_mentor`) ON DELETE CASCADE;

--
-- Constraints for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD CONSTRAINT `keluhan_mentee_id_foreign` FOREIGN KEY (`mentee_id`) REFERENCES `mentee` (`id_mentee`) ON DELETE CASCADE,
  ADD CONSTRAINT `keluhan_panitia_id_foreign` FOREIGN KEY (`panitia_id`) REFERENCES `panitia` (`id_panitia`) ON DELETE CASCADE;

--
-- Constraints for table `mentee`
--
ALTER TABLE `mentee`
  ADD CONSTRAINT `mentee_angkatan_id_foreign` FOREIGN KEY (`angkatan_id`) REFERENCES `angkatan` (`id_angkatan`) ON DELETE CASCADE,
  ADD CONSTRAINT `mentee_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE,
  ADD CONSTRAINT `mentee_kelompok_id_foreign` FOREIGN KEY (`kelompok_id`) REFERENCES `kelompok` (`id_kelompok`) ON DELETE CASCADE,
  ADD CONSTRAINT `mentee_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `mentor`
--
ALTER TABLE `mentor`
  ADD CONSTRAINT `mentor_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `panitia`
--
ALTER TABLE `panitia`
  ADD CONSTRAINT `panitia_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pengganti`
--
ALTER TABLE `pengganti`
  ADD CONSTRAINT `pengganti_mentee_id_foreign` FOREIGN KEY (`mentee_id`) REFERENCES `mentee` (`id_mentee`) ON DELETE CASCADE;

--
-- Constraints for table `pertemuan`
--
ALTER TABLE `pertemuan`
  ADD CONSTRAINT `pertemuan_mentor_id_foreign` FOREIGN KEY (`mentor_id`) REFERENCES `mentor` (`id_mentor`) ON DELETE CASCADE;

--
-- Constraints for table `prodi`
--
ALTER TABLE `prodi`
  ADD CONSTRAINT `prodi_jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_mentee_id_foreign` FOREIGN KEY (`mentee_id`) REFERENCES `mentee` (`id_mentee`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
