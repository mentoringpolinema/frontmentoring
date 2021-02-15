-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 11:57 PM
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
(4, 'Teknik Kimia', 'TK', '2021-02-10 10:06:04', '2021-02-10 10:06:04');

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
(12, 'Pertemuan Zoom', 'Materi', '02/15/2021', '09:30 AM', 'Minggu 2', 'Ashiap', '2021-02-14 19:32:33', '2021-02-14 19:32:33');

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
-- Error reading data for table mentoring20.materi: #2006 - MySQL server has gone away
<div class="error"><h1>Error</h1><p><strong>SQL query:</strong>  <a href="#" class="copyQueryBtn" data-text="SET SQL_QUOTE_SHOW_CREATE = 1">Copy</a>
<a href="db_sql.php?sql_query=SET+SQL_QUOTE_SHOW_CREATE+%3D+1&amp;show_query=1&amp;db=mentoring20"><span class="nowrap"><img src="themes/dot.gif" title="Edit" alt="Edit" class="icon ic_b_edit">&nbsp;Edit</span></a>    </p>
<p>
<code class="sql"><pre>
SET SQL_QUOTE_SHOW_CREATE = 1
</pre></code>
</p>
<p>
    <strong>MySQL said: </strong><a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Fserver-error-reference.html" target="mysql_doc"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help"></a>
</p>
<code>#2006 - MySQL server has gone away</code><br></div>