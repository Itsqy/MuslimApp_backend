-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 05:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_rest_api_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(2, '5 Kriteria Mati Syahid Menurut Rasulullah SAW: Terkena Wabah - Tenggelam  Baca artikel detikedu, \"5 Kriteria Mati Syahid Menurut Rasulullah SAW: Terkena Wabah - Tenggelam\" selengkapnya https://www.detik.com/edu/detikpedia/d-6121529/5-kriteria-mati-syahid-menurut-rasulullah-saw--terkena-wabah---tenggelam', '<p>Berikut beberapa syarat orang yang mati syahid:<br><br>1. Orang yang ikut berperang<br>Gelar mati syahid diperoleh untuk orang-orang yang ikut berperang di jalan Allah SWT lalu meninggal di medan perang. Orang-orang yang mati di medan perang memiliki kemuliaan yang tinggi. Jenazahnya pun dapat dikubur tanpa harus disalatkan atau dimandikan terlebih dahulu.<br><br>Dari Jabir bin Abdillah radhiyallahu \'anhuma, bahwa Nabi shallallahu \'alaihi wa sallam bersabda terkait jenazah korban perang Uhud:<br><br>لَا تُغَسِّلُوهُمْ، فَإِنَّ كُلَّ جُرْحٍ - أَوْ كُلَّ دَمٍ - يَفُوحُ مِسْكًا يَوْمَ الْقِيَامَةِ<br><br>Artinya: \"Jangan kalian mandikan mereka, karena setiap luka atau darah, akan mengeluarkan bau harum minyak misk pada hari kiamat.\" (HR. Ahmad 14189 dan dinilai shahih oleh Syuaib Al-Arnauth)<br><br>2. Orang yang mati di jalan Allah<br>Orang-orang yang meninggal akibat perjuangan membela Islam atau lebih dikenal dengan jihad, juga termasuk sebagai mati syahid. Mereka tetap wajib dimandikan, dikafani, disalatkan, dan dimakamkan.<br><br>Orang-orang yang termasuk golongan ini antara lain meningal saat menuntut ilmu, meninggal karena kecelakaan di perjalanan dakwah atau orang yang wafat ketika sedang di dalam agenda dakwah.<br><br>3. Orang-orang yang terkena wabah<br>Orang yang terkena wabah, juga sama dengan orang yang meninggal di jalan Allah, meskipun bukan karena perang mereka dianggap mati syahid. Mereka termasuk sebagai mati syahid akhirat, sementara jenazahnya ditangani sebagaimana umumnya jenazah umat muslim yakni dimandikan dan shalatkan sebelum dimakamkan.<br><br>4. Orang yang meninggal karena sakit perut<br>Orang-orang yang meninggal karena sakit perut juga termasuk golongan orang yang mati syahid. Dalam kitab Fathul Bari terdapat Bab: obat sakit perut dan terdapat hadits Abu Hurairah dari Nabi shallallahu \'alahi wa sallam, beliau bersabda,<br><br>\"Barang siapa yang mati karena (ada penyakit) dalam perut maka ia syahid\" (HR. Muslim)<br><br>Menurut Imam An-Nawawi, orang yang meninggal karena penyakit di perutnya, baik karena tenggelam, melahirkan, atau yang lainnya diganjar dengan pahala syahid.<br><br>Baca juga:<br>4 Keutamaan Membaca Surat Ar-Rahman: Mati Syahid hingga Syafaat di Hari Kiamat<br>5. Orang yang mati karena tenggelam<br>Dilansir dari laman Muhammadiyah.or (10/6) orang-orang yang meninggal karena tenggelam juga masuk dalam golongan yang mati syahid. Ketika seseorang mengalami tenggelam, orang tersebut kemungkinan akan mengalami sakit tak tertahankan dan penderitaan sebelum meninggal.<br><br>Orang yang meninggal karena tenggelam di air tergolong mati syahid. Jika jenazah diketemukan maka harus dimakamkan sesuai syariat Islam yakni dengan dimandikan, dikafani dan disholatkan.<br><br>Itulah 5 orang yang termasuk dalam golongan mati syahid. Meskipun demikian, ada beberapa syarat yang bisa menjadikan orang ini tergolong mati syahid yakni harus dalam keadaan beriman, berada di jalan Allah SWT, dan tidak diperbudak oleh siapa pun baik secara rohani maupun<br><br>Baca artikel detikedu, \"5 Kriteria Mati Syahid Menurut Rasulullah SAW: Terkena Wabah - Tenggelam\" selengkapnya <a href=\"https://www.detik.com/edu/detikpedia/d-6121529/5-kriteria-mati-syahid-menurut-rasulullah-saw--terkena-wabah---tenggelam\">https://www.detik.com/edu/detikpedia/d-6121529/5-kriteria-mati-syahid-menurut-rasulullah-saw--terkena-wabah---tenggelam</a>.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p><p>&nbsp;</p><p>}\" class=\"form-control\"&gt;</p>', '2022-06-11 18:56:54', '2022-06-11 19:07:34'),
(3, '5 Kriteria Mati Syahid Menurut Rasulullah SAW: Terkena Wabah - Tenggelam  Baca artikel detikedu, \"5 Kriteria Mati Syahid Menurut Rasulullah SAW: Terkena Wabah - Tenggelam\" selengkapnya https://www.detik.com/edu/detikpedia/d-6121529/5-kriteria-mati-syahid-menurut-rasulullah-saw--terkena-wabah---tenggelam', '<p>Jakarta - Setiap manusia memang sudah memiliki takdir masing-masing, termasuk takdir tentang usia. Ada orang-orang yang ditetapkan meninggal dalam keadaan syahid.<br>Mati syahid adalah kematian yang dihadiri oleh para malaikat. Dalam Islam, orang yang termasuk mati syahid adalah mereka yang mati saat berperang karena memperjuangkan kebenaran. Ternyata mati syahid bukan hanya bisa diraih oleh orang-orang yang meninggal saat berperang saja.<br><br>Baca juga:<br>Penjelasan MUI Soal Jenazah Meninggal Karena Tenggelam, Hukumnya Syahid?<br>Dikutip dari buku Kemuliaan Mati Syahid karya Dr. Ali Syariati (10/6), Rasulullah SAW bersabda, ada 5 kematian yang tergolong mati syahid.<br><br>\"Dari Abu Hurairah, Rasulullah SAW bertanya (kepada sahabatnya), \'Siapakah orang yang mati syahid di antara kalian?\' Mereka menjawab, \'Orang yang gugur di medan perang itulah syahid ya Rasulullah.\' Rasulullah SAW menjawab, \'Kalau begitu, sedikit sekali umatku yang mati syahid.\' Para sahabat bertanya \'Mereka itu siapa ya Rasul?\' Rasulullah SAW menjawab, \'Orang yang gugur di medan perang itu syahid, orang yang mati di jalan Allah (bukan karena perang) juga syahid, orang yang tertimpa tha\'un (wabah) pun syahid, orang yang mati karena sakit perut juga syahid, dan orang yang tenggelam adalah syahid\'.\" (HR. Muslim)<br><br>Berikut beberapa syarat orang yang mati syahid:<br><br>1. Orang yang ikut berperang<br>Gelar mati syahid diperoleh untuk orang-orang yang ikut berperang di jalan Allah SWT lalu meninggal di medan perang. Orang-orang yang mati di medan perang memiliki kemuliaan yang tinggi. Jenazahnya pun dapat dikubur tanpa harus disalatkan atau dimandikan terlebih dahulu.<br><br>Dari Jabir bin Abdillah radhiyallahu \'anhuma, bahwa Nabi shallallahu \'alaihi wa sallam bersabda terkait jenazah korban perang Uhud:<br><br>لَا تُغَسِّلُوهُمْ، فَإِنَّ كُلَّ جُرْحٍ - أَوْ كُلَّ دَمٍ - يَفُوحُ مِسْكًا يَوْمَ الْقِيَامَةِ<br><br>Artinya: \"Jangan kalian mandikan mereka, karena setiap luka atau darah, akan mengeluarkan bau harum minyak misk pada hari kiamat.\" (HR. Ahmad 14189 dan dinilai shahih oleh Syuaib Al-Arnauth)<br><br>2. Orang yang mati di jalan Allah<br>Orang-orang yang meninggal akibat perjuangan membela Islam atau lebih dikenal dengan jihad, juga termasuk sebagai mati syahid. Mereka tetap wajib dimandikan, dikafani, disalatkan, dan dimakamkan.<br><br>Orang-orang yang termasuk golongan ini antara lain meningal saat menuntut ilmu, meninggal karena kecelakaan di perjalanan dakwah atau orang yang wafat ketika sedang di dalam agenda dakwah.<br><br>3. Orang-orang yang terkena wabah<br>Orang yang terkena wabah, juga sama dengan orang yang meninggal di jalan Allah, meskipun bukan karena perang mereka dianggap mati syahid. Mereka termasuk sebagai mati syahid akhirat, sementara jenazahnya ditangani sebagaimana umumnya jenazah umat muslim yakni dimandikan dan shalatkan sebelum dimakamkan.<br><br>4. Orang yang meninggal karena sakit perut<br>Orang-orang yang meninggal karena sakit perut juga termasuk golongan orang yang mati syahid. Dalam kitab Fathul Bari terdapat Bab: obat sakit perut dan terdapat hadits Abu Hurairah dari Nabi shallallahu \'alahi wa sallam, beliau bersabda,<br><br>\"Barang siapa yang mati karena (ada penyakit) dalam perut maka ia syahid\" (HR. Muslim)<br><br>Menurut Imam An-Nawawi, orang yang meninggal karena penyakit di perutnya, baik karena tenggelam, melahirkan, atau yang lainnya diganjar dengan pahala syahid.<br><br>Baca juga:<br>4 Keutamaan Membaca Surat Ar-Rahman: Mati Syahid hingga Syafaat di Hari Kiamat<br>5. Orang yang mati karena tenggelam<br>Dilansir dari laman Muhammadiyah.or (10/6) orang-orang yang meninggal karena tenggelam juga masuk dalam golongan yang mati syahid. Ketika seseorang mengalami tenggelam, orang tersebut kemungkinan akan mengalami sakit tak tertahankan dan penderitaan sebelum meninggal.<br><br>Orang yang meninggal karena tenggelam di air tergolong mati syahid. Jika jenazah diketemukan maka harus dimakamkan sesuai syariat Islam yakni dengan dimandikan, dikafani dan disholatkan.<br><br>Itulah 5 orang yang termasuk dalam golongan mati syahid. Meskipun demikian, ada beberapa syarat yang bisa menjadikan orang ini tergolong mati syahid yakni harus dalam keadaan beriman, berada di jalan Allah SWT, dan tidak diperbudak oleh siapa pun baik secara rohani maupun<br><br>Baca artikel detikedu, \"5 Kriteria Mati Syahid Menurut Rasulullah SAW: Terkena Wabah - Tenggelam\" selengkapnya <a href=\"https://www.detik.com/edu/detikpedia/d-6121529/5-kriteria-mati-syahid-menurut-rasulullah-saw--terkena-wabah---tenggelam\">https://www.detik.com/edu/detikpedia/d-6121529/5-kriteria-mati-syahid-menurut-rasulullah-saw--terkena-wabah---tenggelam</a>.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>', '2022-06-11 18:58:53', '2022-06-11 18:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `emas`
--

CREATE TABLE `emas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hargaemas` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `khutbahs`
--

CREATE TABLE `khutbahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemateri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khutbahs`
--

INSERT INTO `khutbahs` (`id`, `judul`, `isi`, `pemateri`, `created_at`, `updated_at`) VALUES
(1, 'syahadat', '<p>hair jumat isitimewa</p>', 'ustad abror', '2022-06-11 20:25:43', '2022-06-11 20:27:26');

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
(5, '2022_06_04_234507_create_mutabaahs_table', 1),
(6, '2022_06_06_120206_create_emas_table', 1),
(7, '2022_06_07_133049_create_beritas_table', 1),
(8, '2022_06_09_144546_create_products_table', 1),
(9, '2022_06_10_042030_create_khutbahs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mutabaahs`
--

CREATE TABLE `mutabaahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mutabaahs`
--

INSERT INTO `mutabaahs` (`id`, `user_id`, `catatan`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, '1', 'sholat', 'di masjid', '2022-06-11 19:02:47', '2022-06-11 19:32:57'),
(4, '1', 'ngahi', '<p><strong>alskaljslajskaskabksbakjsbaksbak</strong></p>', '2022-06-11 19:08:36', '2022-06-11 19:08:36'),
(5, '2', 'sudah puasa', '<p>jadi kita puasas sunnah senin</p><p>&nbsp;</p>', '2022-06-11 20:37:27', '2022-06-11 20:37:27'),
(6, '6', 'rifqi', 'testapi', '2022-06-12 00:45:51', '2022-06-12 00:45:51');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 6, 'rifqi', '1ae4dfa02aa3f648a1d14d224428153e8f818469326b9cb2b859a7b18e4c8a68', '[\"*\"]', NULL, '2022-06-12 00:43:25', '2022-06-12 00:43:25'),
(2, 'App\\Models\\User', 6, 'rifqi', '748b5d086a0874137a48f6333244c3d9ee0571c25acf17c81c38ab0a181bde0f', '[\"*\"]', '2022-06-12 00:51:33', '2022-06-12 00:48:56', '2022-06-12 00:51:33'),
(3, 'App\\Models\\User', 6, 'token', 'b7441242fe31109bdc1f9fb81350fe682b146ad11190fef02f2f3e3aaed7a20b', '[\"*\"]', NULL, '2022-06-12 00:52:43', '2022-06-12 00:52:43'),
(4, 'App\\Models\\User', 6, 'token', 'fe20f5a284a215c16e7112167f8bc4f9a78aa173dbd82d7c8eafcfd36880263a', '[\"*\"]', NULL, '2022-06-12 01:18:47', '2022-06-12 01:18:47'),
(5, 'App\\Models\\User', 6, 'token', 'b824d7a423443ea54b19b48bedfb80475bbb332cc147508d40e69133c595857a', '[\"*\"]', NULL, '2022-06-12 01:21:56', '2022-06-12 01:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$V3Iv/RhE7WjvyikAg.Ux.O8NvYBZpBEzpR9gj/MIn4pki.IwbjB7a', NULL, '2022-06-10 15:28:15', '2022-06-10 15:28:15'),
(2, 'rifqi', 'q@gmail.com', 'user', NULL, '$2y$10$QhaNvTx2qhnEaRNtANLOKuPzeKhG4n46wB25WewxfojfAMHZp3rym', NULL, '2022-06-11 20:36:39', '2022-06-11 20:36:39'),
(4, 'muhammad', 'rifqi@gmail.com', 'user', NULL, '$2y$10$EeZ9yrvDY8d.6Y8aDxkNeOT9ry.YlYYv0goEKEhY38g7C1pFjLWWy', NULL, '2022-06-12 00:40:03', '2022-06-12 00:40:03'),
(6, 'rifqi', 'syatria@gmail.com', 'user', NULL, '$2y$10$ku/LJhuQi00cXEkt3zuze.S1oStogc6bb6J8OlmEgVME893MeWkIK', NULL, '2022-06-12 00:43:25', '2022-06-12 00:43:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emas`
--
ALTER TABLE `emas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `khutbahs`
--
ALTER TABLE `khutbahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutabaahs`
--
ALTER TABLE `mutabaahs`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emas`
--
ALTER TABLE `emas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khutbahs`
--
ALTER TABLE `khutbahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mutabaahs`
--
ALTER TABLE `mutabaahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
