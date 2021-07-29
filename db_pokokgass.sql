-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2020 pada 10.07
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pokokgass`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_galeri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_album` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guide`
--

CREATE TABLE `guide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_guide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal_guide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tglahir_guide` date NOT NULL,
  `lokasi_guide` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mountain` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `guide`
--

INSERT INTO `guide` (`id`, `nama_guide`, `asal_guide`, `tglahir_guide`, `lokasi_guide`, `foto`, `id_mountain`, `id_user`, `created_at`, `updated_at`) VALUES
(3, 'Rizqi Noor Faidziin', 'Bondowoso', '2001-07-25', 'Mt. Raung', '1597925203.JPG', 7, 1, '2020-08-20 05:06:45', '2020-08-20 05:12:21'),
(4, 'Yek Yahya', 'Bondowoso', '2001-08-05', 'Mt. Piramid', '1597925677.JPG', 8, 1, '2020-08-20 05:14:39', '2020-08-20 05:14:57'),
(5, 'Isbed Geng', 'Bondowoso', '2001-06-10', 'Raung', '1597940437.JPG', 7, 3, '2020-08-20 09:20:39', '2020-08-20 09:20:39'),
(6, 'Lopess', 'Gubrih', '2001-05-05', 'Semeru', '1597941884.jpg', 9, 1, '2020-08-20 09:44:46', '2020-08-22 15:42:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_jasaguide`
--

CREATE TABLE `list_jasaguide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `list_jasaguide`
--

INSERT INTO `list_jasaguide` (`id`, `nama`, `asal`, `umur`, `ket`, `harga`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(1, 'Mba Moer', 'Bondowoso', '19', 'Guide Mt. Raung', 450000, '2001-07-25', '2020-08-02 23:50:00', '2020-08-02 23:50:00'),
(2, 'Lopes', 'Bondowoso', '19', 'Blank', 154000, '2001-05-05', '2020-08-03 00:01:30', '2020-08-20 08:18:05'),
(3, 'Yek Yahya', 'Bondowoso', '19', 'Setan Alas', 173000, '2001-08-05', '2020-08-03 00:02:20', '2020-08-03 00:02:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_30_093009_create_list_jasaguide', 1),
(4, '2020_08_03_073214_create_album_table', 2),
(5, '2020_08_03_073230_create_galeri_table', 2),
(6, '2014_10_12_100000_create_password_resets_table', 3),
(7, '2020_08_12_023052_add_field_level_user', 3),
(8, '2020_08_18_211550_create_guide_table', 4),
(9, '2020_08_20_073546_create_mountain_table', 5),
(10, '2020_08_20_111926_create_guide_table', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mountain`
--

CREATE TABLE `mountain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalur_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mountain_seo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mountain`
--

INSERT INTO `mountain` (`id`, `nama_gunung`, `lokasi_gunung`, `jalur_gunung`, `mountain_seo`, `foto`, `created_at`, `updated_at`) VALUES
(7, 'Raung', 'Bondowoso, Jawa Timur, Indonesia', 'Sumber Wringin', 'raung', '1597923944.JPG', '2020-08-20 04:45:44', '2020-08-20 05:25:50'),
(8, 'Piramid', 'Bondowoso, Jawa Timur, Indonesia', 'Via Bondowoso', 'piramid', '1597925639.JPG', '2020-08-20 05:13:59', '2020-08-20 05:26:03'),
(9, 'Semeru', 'lumajang, Jawa Timur, Indonesia', 'Via Lumajang', 'semeru', '1597941855.JPG', '2020-08-20 09:44:15', '2020-08-21 19:41:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opentrip`
--

CREATE TABLE `opentrip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_opentrip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_berangkat` date NOT NULL,
  `estimasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mountain` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `opentrip`
--

INSERT INTO `opentrip` (`id`, `nama_opentrip`, `open_member`, `jadwal_berangkat`, `estimasi`, `foto`, `id_mountain`, `id_user`, `created_at`, `updated_at`) VALUES
(15, 'Pecinta Alam SMEA', '50', '2020-08-22', '3', '1598069031.JPG', 7, 3, '2020-08-21 20:48:15', '2020-08-21 21:03:52'),
(16, 'Operasi Blak Mamba', '32', '2020-08-22', '2', '1598069137.JPG', 8, 3, '2020-08-21 21:05:39', '2020-08-21 21:05:39'),
(19, '17 Agustus 2020', '55', '2020-08-16', '4', '1598156594.JPG', 9, 1, '2020-08-22 21:23:15', '2020-08-22 21:23:15'),
(20, 'regerg', '34', '2020-08-23', '3', '1598161368.JPG', 7, 1, '2020-08-22 22:42:49', '2020-08-22 22:42:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Rizqi', 'rinofdz@gmail.com', NULL, '$2y$10$Vaaj9WsMU0Y5kTzQ.tC3VucZukR7WKTqdHvTArnKgvoWpaR2UNKaG', 'AT1DlPknF1X8eEdAendbrifF0bsGRQ0UQMqnQYvkbfc73KaSSU8fDpFRgmic', '2020-08-11 20:15:02', '2020-08-11 21:25:48', 'operator'),
(2, 'tes', 'tes@gmail.com', NULL, '$2y$10$nDZucqUIrqUrEp4FA1EurezheldEpXL2wMEBIyebDc6hOv0/W/i9e', NULL, '2020-08-18 06:31:02', '2020-08-18 06:31:02', 'admin'),
(3, 'Yek Yahya', 'yek@gmail.com', NULL, '$2y$10$W3PSjgMEryHJyF2Zg3ZFXe3AZVQI4P2sv.MKqdJ.C2JJQZ4AbUSYm', NULL, '2020-08-20 08:23:54', '2020-08-20 08:23:54', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeri_id_album_foreign` (`id_album`);

--
-- Indeks untuk tabel `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id_mountain_foreign` (`id_mountain`);

--
-- Indeks untuk tabel `list_jasaguide`
--
ALTER TABLE `list_jasaguide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mountain`
--
ALTER TABLE `mountain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `opentrip`
--
ALTER TABLE `opentrip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mountain` (`id_mountain`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `guide`
--
ALTER TABLE `guide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `list_jasaguide`
--
ALTER TABLE `list_jasaguide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mountain`
--
ALTER TABLE `mountain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `opentrip`
--
ALTER TABLE `opentrip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_id_album_foreign` FOREIGN KEY (`id_album`) REFERENCES `opentrip` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guide`
--
ALTER TABLE `guide`
  ADD CONSTRAINT `guide_id_mountain_foreign` FOREIGN KEY (`id_mountain`) REFERENCES `mountain` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
