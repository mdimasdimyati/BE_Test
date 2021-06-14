-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 01.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technical_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bank`
--

INSERT INTO `bank` (`id`, `name`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Bank Central Asia', 1, '2021-01-12 04:56:45', '2021-02-08 09:15:29', 'Super Admin', 'Admin Unit Kerja'),
(2, 'Bank Mandiri', 1, '2021-01-20 06:21:22', '2021-01-20 06:21:33', 'Super Admin', 'Super Admin'),
(10, 'Bank Negara Indonesia', 1, '2021-03-12 03:26:45', '2021-03-12 03:26:45', 'YUSRON HAMIDI', NULL),
(11, 'Bank Republik Indonesia', 1, '2021-03-12 04:22:18', '2021-03-12 04:22:36', 'YUSRON HAMIDI', 'YUSRON HAMIDI'),
(13, 'Bank Jabar', 1, '2021-03-23 03:34:57', '2021-03-23 03:34:57', 'YON GURETNO', NULL),
(14, 'Permata', 1, '2021-04-28 13:39:32', '2021-04-28 13:39:32', 'Super Admin', NULL),
(15, 'BTPN', 1, '2021-04-28 14:21:14', '2021-04-28 14:21:14', 'Super Admin', NULL),
(16, 'CIMB Niaga Syariah', 1, '2021-04-29 03:52:42', '2021-04-29 03:52:42', 'Super Admin', NULL),
(100, 'Other...', 1, '2021-06-12 06:44:29', '2021-06-11 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `gender` enum('L','P') NOT NULL DEFAULT 'L',
  `city_of_birth` varchar(150) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion_id` int(11) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `identity_number` varchar(150) DEFAULT NULL,
  `identity_file` varchar(150) NOT NULL DEFAULT current_timestamp(),
  `bank_id` int(11) DEFAULT NULL,
  `bank_account` varchar(150) DEFAULT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `education_id` int(11) DEFAULT NULL,
  `university_id` int(11) DEFAULT NULL,
  `university_other` varchar(300) DEFAULT NULL,
  `major` text DEFAULT NULL,
  `graduation_year` varchar(12) DEFAULT NULL,
  `in_college` tinyint(4) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `skill` text DEFAULT NULL,
  `file_cv` varchar(150) DEFAULT NULL,
  `file_photo` varchar(150) DEFAULT NULL,
  `file_portfolio` varchar(150) DEFAULT NULL,
  `source_information_id` int(11) DEFAULT NULL,
  `source_information_other` text DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `assessment_score` int(11) DEFAULT NULL,
  `mail_sent` tinyint(4) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `candidate_status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(150) DEFAULT NULL,
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `candidate`
--

INSERT INTO `candidate` (`id`, `name`, `gender`, `city_of_birth`, `date_of_birth`, `religion_id`, `email`, `phone`, `identity_number`, `identity_file`, `bank_id`, `bank_account`, `bank_name`, `address`, `education_id`, `university_id`, `university_other`, `major`, `graduation_year`, `in_college`, `semester`, `skill`, `file_cv`, `file_photo`, `file_portfolio`, `source_information_id`, `source_information_other`, `ranking`, `assessment_score`, `mail_sent`, `instagram`, `twitter`, `linkedin`, `facebook`, `candidate_status_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'M Dimyati C A', 'P', 'PATIc', '1992-10-21', 3, 'dimas@email.comw', '08000099883', '12312312312312', '1623589111_80.jpg', 2, '2343242123', NULL, 'aaaaaaaaaaaaaas 123333333', 6, 36, NULL, 'teknik informatika', '2017-02-02', NULL, '8', 'asas  qwqw', '1623589111_Cv-M Dimyati-081286881475.pdf', '1623589111_dimas-bg-biru.jpg', 'data_file/portfolio', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, '2021-06-13 05:58:31', '2021-06-13 10:06:18', NULL, NULL),
(2, 'Dimas', 'L', 'PATI', '1992-10-20', 1, 'dimas_it@honda-bintaro.com', '0800009988', '2342342342342342234', '1623592822_500140300076_1210.jpg', 100, '787878787878', 'CIMB NIAGA', 'sssssssssssssss', 6, 100, 'Universitas Pamulang', 'teknik informatika', '2017-02-02', NULL, '2', 'fffffffffffff', '1623592822_Cv-M Dimyati-081286881475.pdf', '1623592822_dimas-bg-biru.jpg', '1623592822_Cv-M Dimyati-081286881475.jpg', 6, 'Tiktok', NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, '2021-06-13 07:00:22', '2021-06-13 07:00:22', NULL, NULL),
(3, 'Muhammad Dimyati', 'L', 'PATI', '1992-10-20', 1, 'dimas@email.com', '0800009988', '2342342342342342234', '1623597038_500140300076_1210.jpg', 1, '787878787878', NULL, 'qqqqqqqqqqqq', 2, 100, 'Universitas Pamulang', 'teknik informatika', '2017-02-02', NULL, '9', 'we e aweaw eaw e a', '1623597038_Cv-M Dimyati-081286881475.pdf', '1623597038_dimas-bg-biru.jpg', '1623597038_Cv-M Dimyati-081286881475.jpg', 5, NULL, NULL, NULL, 0, NULL, 'Mdimasdimyati', 'mdimasdimyati2', 'muhammad dimyati', 1, '2021-06-13 08:10:38', '2021-06-13 08:10:38', NULL, NULL),
(4, 'rere ruru riri', 'P', 'PATI', '1992-10-20', 1, 'dimas_it@honda-bintaro.com', '0800009988', '2342342342342342234', '1623598079_500140300076_1210.jpg', 10, '787878787878', NULL, 'sdfsfds s dfsdf', 2, 24, NULL, 'teknik informatika', '-', NULL, '8', 'dfg dfg dfg  df', '1623598079_Cv-M Dimyati-081286881475.pdf', '1623598079_dimas-bg-biru.jpg', '1623598079_80.jpg', 2, NULL, NULL, NULL, 0, 'qweqwe', NULL, NULL, 'qweqweqwe', 1, '2021-06-13 08:27:59', '2021-06-13 08:27:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidatex`
--

CREATE TABLE `candidatex` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `gender` enum('L','P') NOT NULL DEFAULT 'L',
  `city_of_birth` varchar(150) NOT NULL,
  `date_of_birth` date NOT NULL,
  `religion_id` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `identity_number` varchar(150) NOT NULL,
  `identity_file` varchar(150) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `bank_account` varchar(150) NOT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `address` text NOT NULL,
  `education_id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `university_other` varchar(300) DEFAULT NULL,
  `major` text NOT NULL,
  `graduation_year` varchar(12) NOT NULL,
  `in_college` tinyint(4) DEFAULT NULL,
  `semester` varchar(30) NOT NULL,
  `skill` text NOT NULL,
  `file_cv` varchar(150) NOT NULL,
  `file_photo` varchar(150) NOT NULL,
  `file_portfolio` varchar(150) NOT NULL,
  `source_information_id` int(11) NOT NULL,
  `source_information_other` text DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `assessment_score` int(11) DEFAULT NULL,
  `mail_sent` tinyint(4) NOT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `candidate_status_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(150) DEFAULT NULL,
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `candidatex`
--

INSERT INTO `candidatex` (`id`, `name`, `gender`, `city_of_birth`, `date_of_birth`, `religion_id`, `email`, `phone`, `identity_number`, `identity_file`, `bank_id`, `bank_account`, `bank_name`, `address`, `education_id`, `university_id`, `university_other`, `major`, `graduation_year`, `in_college`, `semester`, `skill`, `file_cv`, `file_photo`, `file_portfolio`, `source_information_id`, `source_information_other`, `ranking`, `assessment_score`, `mail_sent`, `instagram`, `twitter`, `linkedin`, `facebook`, `candidate_status_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'M Dimyati C', 'L', 'PATI', '1992-10-20', 1, 'dimas@email.com', '0800009988', '2342342342342342234', '1623589111_80.jpg', 2, '2343242', NULL, 'aaaaaaaaaaaaaas', 6, 36, NULL, 'teknik informatika', '2017-02-02', NULL, '8', 'asas  qwqw', '1623589111_Cv-M Dimyati-081286881475.pdf', '1623589111_dimas-bg-biru.jpg', 'data_file/portfolio', 1, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, '2021-06-13 05:58:31', '2021-06-13 09:57:02', NULL, NULL),
(2, 'Dimas', 'L', 'PATI', '1992-10-20', 1, 'dimas_it@honda-bintaro.com', '0800009988', '2342342342342342234', '1623592822_500140300076_1210.jpg', 100, '787878787878', 'CIMB NIAGA', 'sssssssssssssss', 6, 100, 'Universitas Pamulang', 'teknik informatika', '2017-02-02', NULL, '2', 'fffffffffffff', '1623592822_Cv-M Dimyati-081286881475.pdf', '1623592822_dimas-bg-biru.jpg', '1623592822_Cv-M Dimyati-081286881475.jpg', 6, 'Tiktok', NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, '2021-06-13 07:00:22', '2021-06-13 07:00:22', NULL, NULL),
(3, 'Muhammad Dimyati', 'L', 'PATI', '1992-10-20', 1, 'dimas@email.com', '0800009988', '2342342342342342234', '1623597038_500140300076_1210.jpg', 1, '787878787878', NULL, 'qqqqqqqqqqqq', 2, 100, 'Universitas Pamulang', 'teknik informatika', '2017-02-02', NULL, '9', 'we e aweaw eaw e a', '1623597038_Cv-M Dimyati-081286881475.pdf', '1623597038_dimas-bg-biru.jpg', '1623597038_Cv-M Dimyati-081286881475.jpg', 5, NULL, NULL, NULL, 0, NULL, 'Mdimasdimyati', 'mdimasdimyati2', 'muhammad dimyati', 1, '2021-06-13 08:10:38', '2021-06-13 08:10:38', NULL, NULL),
(4, 'rere ruru riri', 'P', 'PATI', '1992-10-20', 1, 'dimas_it@honda-bintaro.com', '0800009988', '2342342342342342234', '1623598079_500140300076_1210.jpg', 10, '787878787878', NULL, 'sdfsfds s dfsdf', 2, 24, NULL, 'teknik informatika', '-', NULL, '8', 'dfg dfg dfg  df', '1623598079_Cv-M Dimyati-081286881475.pdf', '1623598079_dimas-bg-biru.jpg', '1623598079_80.jpg', 2, NULL, NULL, NULL, 0, 'qweqwe', NULL, NULL, 'qweqweqwe', 1, '2021-06-13 08:27:59', '2021-06-13 08:27:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidate_`
--

CREATE TABLE `candidate_` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `gender` char(3) DEFAULT NULL,
  `city_of_birth` varchar(150) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion_id` int(11) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `identity_number` varchar(150) DEFAULT NULL,
  `identity_file` varchar(150) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `bank_account` varchar(150) DEFAULT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `education_id` int(11) DEFAULT NULL,
  `university_id` int(11) DEFAULT NULL,
  `university_other` varchar(300) DEFAULT NULL,
  `major` text DEFAULT NULL,
  `graduation_year` varchar(12) DEFAULT NULL,
  `in_college` tinyint(4) DEFAULT NULL,
  `semester` varchar(30) DEFAULT NULL,
  `skill` text DEFAULT NULL,
  `file_cv` varchar(150) DEFAULT NULL,
  `file_photo` varchar(150) DEFAULT NULL,
  `file_portfolio` varchar(150) DEFAULT NULL,
  `source_information_id` int(11) DEFAULT NULL,
  `source_information_other` text DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `assessment_score` int(11) DEFAULT NULL,
  `mail_sent` tinyint(4) DEFAULT NULL,
  `instagram` varchar(300) DEFAULT NULL,
  `twitter` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `candidate_status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(150) DEFAULT NULL,
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidate_organization`
--

CREATE TABLE `candidate_organization` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `org_name` varchar(300) NOT NULL,
  `year` varchar(12) NOT NULL,
  `position` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(150) DEFAULT NULL,
  `updated_by` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `candidate_organization`
--

INSERT INTO `candidate_organization` (`id`, `candidate_id`, `org_name`, `year`, `position`, `description`, `file`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'Taekwondo', '2021', 'Pengururs', 'aaaaaaaaaaaaaaaaa', NULL, '2021-06-13 05:58:31', '2021-06-13 05:58:31', NULL, NULL),
(2, 2, 'Taekwondo', '2021', 'Pengururs', 'fffffffffffffff', NULL, '2021-06-13 07:00:23', '2021-06-13 07:00:23', NULL, NULL),
(3, 3, 'Taekwondo', '2021', 'Pengururs', 'ssssssss', NULL, '2021-06-13 08:10:39', '2021-06-13 08:10:39', NULL, NULL),
(4, 4, 'Taekwondo', '2021', 'opopopop', 'dsssssssssssssss', NULL, '2021-06-13 08:27:59', '2021-06-13 08:27:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidate_status`
--

CREATE TABLE `candidate_status` (
  `id` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `candidate_status`
--

INSERT INTO `candidate_status` (`id`, `status`, `code`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Review JLI', '<label class=\"badge badge-gradient-warning\">Review JLI</label>', 1, '2021-01-20 03:25:48', '2021-01-20 03:25:48', NULL, NULL),
(2, 'Tidak Lolos (Oleh JLI)', '<label class=\"badge badge-gradient-danger\">Tidak Lolos (JLI)</label>', 1, '2021-01-20 03:25:59', '2021-01-20 03:25:59', NULL, NULL),
(3, 'Review Unit Kerja', '<label class=\"badge badge-gradient-info\">Review Unit Kerja</label>', 1, '2021-01-20 03:26:29', '2021-01-20 03:26:29', NULL, NULL),
(4, 'Lolos (Oleh Unit Kerja)', '<label class=\"badge badge-gradient-success\"> Lolos (Unit)</label>', 1, '2021-01-20 03:26:44', '2021-01-20 03:26:44', NULL, NULL),
(5, 'Tidak Lolos (Oleh Unit Kerja)', '<label class=\"badge badge-gradient-danger\"> Tidak Lolos (Unit)</label>', 1, '2021-01-20 03:26:51', '2021-01-20 03:26:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `name`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'SMA', 1, '2021-01-12 04:35:34', '2021-01-12 04:40:51', 'Super Admin', 'Super Admin'),
(2, 'S1', 1, '2021-01-20 06:28:18', '2021-02-08 07:33:38', 'Super Admin', 'Super Admin'),
(6, 'S2', 1, '2021-02-08 07:33:56', '2021-02-08 07:33:56', 'Super Admin', NULL),
(12, 'S3', 1, '2021-03-12 04:19:00', '2021-03-12 08:55:04', 'YUSRON HAMIDI', 'YON GURETNO'),
(14, 'D3', 1, '2021-03-23 03:32:18', '2021-03-23 03:32:18', 'YON GURETNO', NULL),
(15, 'D4', 0, '2021-03-23 03:32:38', '2021-04-09 09:52:05', 'YON GURETNO', 'YON GURETNO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `religion`
--

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `religion`
--

INSERT INTO `religion` (`id`, `name`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Islam', 1, '2021-01-11 06:42:08', '2021-01-11 06:42:08', 'db', NULL),
(2, 'Budha', 1, '2021-01-11 07:11:37', '2021-01-11 07:16:31', 'Super Admin', 'Super Admin'),
(3, 'Protestan', 1, '2021-03-02 07:09:22', '2021-03-02 07:09:22', 'dira', NULL),
(4, 'Katolik', 1, '2021-03-02 07:09:27', '2021-03-02 07:09:27', 'dira', NULL),
(5, 'Hindu', 1, '2021-03-02 07:09:44', '2021-03-02 07:09:44', 'dira', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `source_information`
--

CREATE TABLE `source_information` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `source_information`
--

INSERT INTO `source_information` (`id`, `name`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Internet', 1, '2021-02-24 01:58:35', '2021-02-24 01:58:35', NULL, NULL),
(2, 'Instagram', 1, '2021-02-24 01:58:38', '2021-02-24 01:58:38', NULL, NULL),
(3, 'Twitter', 1, '2021-02-24 01:58:41', '2021-02-24 01:58:41', NULL, NULL),
(4, 'Kampus', 1, '2021-02-24 01:58:44', '2021-02-24 01:58:44', NULL, NULL),
(5, 'Facebook', 1, '2021-02-24 01:59:02', '2021-02-24 01:59:02', NULL, NULL),
(6, 'Lain-lain', 1, '2021-02-24 01:59:05', '2021-02-24 01:59:05', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `recommendation_university_id` int(11) DEFAULT NULL,
  `active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` varchar(50) DEFAULT NULL,
  `updated_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `university`
--

INSERT INTO `university` (`id`, `name`, `score`, `recommendation_university_id`, `active`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Universitas Singaperbangsa Karawang', NULL, 1, 1, '2021-01-12 04:46:56', '2021-01-20 06:33:56', 'Super Admin', 'Super Admin'),
(2, 'Institut Teknologi Bandung', NULL, 1, 1, '2021-01-20 06:35:05', '2021-01-20 06:35:16', 'Super Admin', 'Super Admin'),
(3, 'Universitas Trisakti', NULL, NULL, 1, '2021-02-08 07:37:01', '2021-02-08 07:37:14', 'Super Admin', 'Super Admin'),
(5, 'Universitas Jakarta', NULL, NULL, 1, '2021-02-15 02:10:19', '2021-03-12 04:21:09', 'YUSRON HAMIDI', 'YUSRON HAMIDI'),
(10, 'Universitas Telkom', NULL, NULL, 1, '2021-03-12 04:19:54', '2021-03-12 04:19:54', 'YUSRON HAMIDI', NULL),
(11, 'Universitas Malang', NULL, NULL, 0, '2021-03-12 08:55:18', '2021-03-12 08:55:23', 'YON GURETNO', 'YON GURETNO'),
(12, 'Universitas Negeri Jakarta', NULL, NULL, 0, '2021-03-23 03:32:54', '2021-03-23 03:33:20', 'YUSRON HAMIDI', 'YUSRON HAMIDI'),
(13, 'Universitas Padjajaran', NULL, NULL, 1, '2021-03-23 03:33:06', '2021-03-23 03:33:06', 'YON GURETNO', NULL),
(15, 'Institut Kesehatan Deli Husada Deli Tua', NULL, NULL, 1, '2021-04-12 04:18:15', '2021-04-12 04:18:15', NULL, NULL),
(16, 'Institut Pertanian Bogor', NULL, NULL, 1, '2021-04-12 04:18:42', '2021-04-12 04:18:42', NULL, NULL),
(17, 'Institut Teknologi Nasional Bandung', NULL, NULL, 1, '2021-04-12 04:19:04', '2021-04-12 04:19:04', NULL, NULL),
(18, 'Institut Teknologi Sepuluh Nopember', NULL, NULL, 1, '2021-04-12 04:19:41', '2021-04-12 04:19:41', NULL, NULL),
(19, 'Politeknik Negeri Jakarta', NULL, NULL, 1, '2021-04-12 04:20:00', '2021-04-12 04:20:00', NULL, NULL),
(20, 'Politeknik Negeri Media Kreatif', NULL, NULL, 1, '2021-04-12 04:20:13', '2021-04-12 04:20:13', NULL, NULL),
(21, 'Sekolah Tinggi Ilmu Ekonomi Indonesia', NULL, NULL, 1, '2021-04-12 04:20:32', '2021-04-12 04:20:32', NULL, NULL),
(22, 'Sekolah Tinggi Teknik PLN', NULL, NULL, 1, '2021-04-12 04:20:47', '2021-04-12 04:20:47', NULL, NULL),
(23, 'Sekolah Tinggi Teknologi Bandung', NULL, NULL, 1, '2021-04-12 04:21:03', '2021-04-12 04:21:03', NULL, NULL),
(24, 'STMIK Nusa Mandiri', NULL, NULL, 1, '2021-04-12 04:21:14', '2021-04-12 04:21:14', NULL, NULL),
(25, 'Universitas Bakrie', NULL, NULL, 1, '2021-04-12 04:21:34', '2021-04-12 04:21:34', NULL, NULL),
(26, 'Universitas Bina Nusantara', NULL, NULL, 1, '2021-04-12 04:22:02', '2021-04-12 04:22:02', NULL, NULL),
(27, 'Universitas Brawijaya', NULL, NULL, 1, '2021-04-12 04:22:15', '2021-04-12 04:22:15', NULL, NULL),
(28, 'Universitas Esa Unggul', NULL, NULL, 1, '2021-04-12 04:23:41', '2021-04-12 04:23:41', NULL, NULL),
(29, 'Universitas Fajar', NULL, NULL, 1, '2021-04-12 04:23:52', '2021-04-12 04:23:52', NULL, NULL),
(30, 'Universitas Islam Indonesia', NULL, NULL, 1, '2021-04-12 04:24:05', '2021-04-12 04:24:05', NULL, NULL),
(31, 'Universitas Islam Negeri Sunan Gunung Jati Bandung', NULL, NULL, 1, '2021-04-12 04:24:29', '2021-04-12 04:24:29', NULL, NULL),
(32, 'Universitas Mercu Buana', NULL, NULL, 1, '2021-04-12 04:24:54', '2021-04-12 04:24:54', NULL, NULL),
(33, 'Universitas Muhammadiyah Jakarta', NULL, NULL, 1, '2021-04-12 04:25:14', '2021-04-12 04:25:14', NULL, NULL),
(34, 'Universitas Nasional Jakarta', NULL, NULL, 1, '2021-04-12 04:25:28', '2021-04-12 04:25:28', NULL, NULL),
(35, 'Universitas Pancasila', NULL, NULL, 1, '2021-04-12 04:25:49', '2021-04-12 04:25:49', NULL, NULL),
(36, 'Universitas Pembangunan Jaya', NULL, NULL, 1, '2021-04-12 04:26:03', '2021-04-12 04:26:03', NULL, NULL),
(37, 'Universitas Presiden', NULL, NULL, 1, '2021-04-12 04:26:14', '2021-04-12 04:26:14', NULL, NULL),
(38, 'Universitas Sultan Ageng Tirtayasa', NULL, NULL, 1, '2021-04-12 04:27:23', '2021-04-12 04:27:23', NULL, NULL),
(39, 'Universitas Widyagama Malang', NULL, NULL, 1, '2021-04-12 04:27:47', '2021-04-12 04:27:47', NULL, NULL),
(40, 'UPN Veteran Jakarta', NULL, NULL, 1, '2021-04-12 04:28:00', '2021-04-12 04:28:00', NULL, NULL),
(100, 'Other...', 0, 0, 1, '2021-06-11 17:00:00', '2021-06-11 17:00:00', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `religion_id` (`religion_id`),
  ADD KEY `bank_id` (`bank_id`),
  ADD KEY `education_id` (`education_id`),
  ADD KEY `university_id` (`university_id`),
  ADD KEY `source_information_id` (`source_information_id`);

--
-- Indeks untuk tabel `candidatex`
--
ALTER TABLE `candidatex`
  ADD PRIMARY KEY (`id`),
  ADD KEY `religion_id` (`religion_id`),
  ADD KEY `bank_id` (`bank_id`),
  ADD KEY `education_id` (`education_id`),
  ADD KEY `university_id` (`university_id`),
  ADD KEY `source_information_id` (`source_information_id`);

--
-- Indeks untuk tabel `candidate_`
--
ALTER TABLE `candidate_`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `candidate_organization`
--
ALTER TABLE `candidate_organization`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `source_information`
--
ALTER TABLE `source_information`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `candidatex`
--
ALTER TABLE `candidatex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `candidate_`
--
ALTER TABLE `candidate_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `candidate_organization`
--
ALTER TABLE `candidate_organization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_ibfk_1` FOREIGN KEY (`religion_id`) REFERENCES `religion` (`id`),
  ADD CONSTRAINT `candidate_ibfk_2` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`id`),
  ADD CONSTRAINT `candidate_ibfk_3` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`),
  ADD CONSTRAINT `candidate_ibfk_4` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `candidate_ibfk_5` FOREIGN KEY (`source_information_id`) REFERENCES `source_information` (`id`);

--
-- Ketidakleluasaan untuk tabel `candidatex`
--
ALTER TABLE `candidatex`
  ADD CONSTRAINT `candidatex_ibfk_1` FOREIGN KEY (`religion_id`) REFERENCES `religion` (`id`),
  ADD CONSTRAINT `candidatex_ibfk_2` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`id`),
  ADD CONSTRAINT `candidatex_ibfk_3` FOREIGN KEY (`education_id`) REFERENCES `education` (`id`),
  ADD CONSTRAINT `candidatex_ibfk_4` FOREIGN KEY (`university_id`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `candidatex_ibfk_5` FOREIGN KEY (`source_information_id`) REFERENCES `source_information` (`id`);

--
-- Ketidakleluasaan untuk tabel `candidate_organization`
--
ALTER TABLE `candidate_organization`
  ADD CONSTRAINT `candidate_organization_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
