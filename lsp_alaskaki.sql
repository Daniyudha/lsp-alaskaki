-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 21 Apr 2022 pada 21.02
-- Versi server: 8.0.25
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_alaskaki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content_thumbnail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `content_full` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content_thumbnail`, `content_full`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Berita Terupdate Gan', 'berita-terupdate-gan-y8cr', 'This may be a trivial question but I am wondering if Laravelx cxzc', '<p style=\"margin-right: 0px; margin-bottom: var(--s-prose-spacing); margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, &quot;Liberation Sans&quot;, sans-serif; font-size: 15px; vertical-align: baseline; box-sizing: inherit; clear: both; color: rgb(35, 38, 41);\">This may be a trivial question but I am wondering if Laravel recommends a certain way to check whether an Eloquent collection returned from&nbsp;<code style=\"margin: 0px; padding: 2px 4px; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: inherit; font-family: var(--ff-mono); font-size: 13px; vertical-align: baseline; box-sizing: inherit; background-color: var(--black-075); white-space: pre-wrap; color: var(--black-800); border-radius: 3px;\">$result = Model::where(...)-&gt;get()</code>&nbsp;is empty, as well as counting the number of elements.</p><div><br></div>', '1646521792-image.png', '2022-03-05 22:15:04', '2022-03-05 23:37:30'),
(3, 'LSP Alaskaki Terbaru', 'lsp-alaskaki-terbaru-va2c', 'Adi mengatakan sikap galau akut Cak Imin itu menjadi paradoks. Dia mengatakan jika Cak Imin stop kampanye politik, namanya bakal tenggelam di bursa capres.', '<p><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Adi mengatakan sikap galau akut Cak Imin itu menjadi paradoks. Dia mengatakan jika Cak Imin stop kampanye politik, namanya bakal tenggelam di bursa capres.</span><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Jadinya serba paradoks. Usul nunda pemilu tapi dikecam dan dibully publik, mau stop kampanye politik bisa membuat nama Cak Imin hilang di peredaran pilpres,\" ujarnya.</span><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Lebih lanjut Adi mengatakan jika usulan penundaan Pemilu hanya sebagai strategi semata, namun strategi yang diambil salah. Sebab bisa memunculkan sentimen negatif bukan saja ke Cak Imin, melainkan juga partai yang dipimpinnya.</span><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">\"Mungkin saja itu strategi, meski itu strategi salah. Alih-alih dapat simpati, usul menunda pemilu justru memunculkan sentimen negatif ke Cak Imin dan PKB. Cak Imin memang lagi jadi buah bibir, tapi bukan yang positif yang dibicarakan publik,\" imbuhnya.</span><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><br style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">Baca artikel detiknews, \"Cak Imin Dinilai Galau Akut, Usul Tunda Pemilu Tapi Mau Nyapres 2024\" selengkapnya&nbsp;</span><a href=\"https://news.detik.com/berita/d-5970143/cak-imin-dinilai-galau-akut-usul-tunda-pemilu-tapi-mau-nyapres-2024\" style=\"background: rgb(255, 255, 255); color: rgb(0, 0, 0); transition: all 0.3s ease-in-out 0s; font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">https://news.detik.com/berita/d-5970143/cak-imin-dinilai-galau-akut-usul-tunda-pemilu-tapi-mau-nyapres-2024</a><span style=\"color: rgb(0, 0, 0); font-family: Helvetica-FF, Arial, Tahoma, sans-serif; font-size: 16px;\">.</span></p>', '1646523439-hero-mern.png', '2022-03-05 23:37:19', '2022-03-05 23:37:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photos`
--

CREATE TABLE `photos` (
  `id` int NOT NULL,
  `type` enum('menjahit','pengemalan','pengeleman') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` text COLLATE utf8mb4_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `photos`
--

INSERT INTO `photos` (`id`, `type`, `title`, `descriptions`, `image`, `created_at`, `updated_at`) VALUES
(1, 'menjahit', 'Aku Adalah Saya', 'Nama Saya Adalah nana nina', '1648978980-logo.png', '2022-04-03 09:43:00', '2022-04-03 09:43:00'),
(3, 'pengemalan', 'Haloo Ya Apa', 'Kereta Kencana', '1650567855-capture.png', '2022-04-03 09:46:29', '2022-04-21 19:04:15'),
(5, 'pengeleman', 'Test Pengeleman', 'Ngelem itu haram bang', '1650569748-laravel-featured-image.png', '2022-04-21 19:35:48', '2022-04-21 19:35:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrants`
--

CREATE TABLE `registrants` (
  `id` int NOT NULL,
  `unique_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `skema_sertifikasi` enum('1','2','3','4','5','6','7','8','9','10','11') COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_uji` enum('sertifikasi','rcc') COLLATE utf8mb4_general_ci NOT NULL,
  `no_ktp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `provinsi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kabupaten` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kecamatan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kelurahan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_pos` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_sesuai_ktp` text COLLATE utf8mb4_general_ci NOT NULL,
  `pendidikan_terakhir` enum('S3','S2','S1','D4','D3','D2','D1','SMA/SEDRAJAT','SMP','SD') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `universitas_sekolah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bidang_usaha` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_ktp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `foto_ijazah` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `sertifikat_pelatihan` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` enum('pending','success','cancel') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `registrants`
--

INSERT INTO `registrants` (`id`, `unique_id`, `skema_sertifikasi`, `jenis_uji`, `no_ktp`, `nama_lengkap`, `jenis_kelamin`, `no_hp`, `email`, `tempat_lahir`, `tanggal_lahir`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat_sesuai_ktp`, `pendidikan_terakhir`, `universitas_sekolah`, `bidang_usaha`, `foto_ktp`, `foto_ijazah`, `sertifikat_pelatihan`, `status`, `created_at`, `updated_at`) VALUES
(4, 'SERTIFIKASI.03.00004', '3', 'sertifikasi', '25342534543654645', 'Rahma Andita Purnama', 'L', '089669413260', 'cobavoba17@gmail.com', 'SLEMAN', '2022-02-20', 'Yogyakarta', 'SLEMAN', 'Turi', 'Girikerto', '55551', 'Jineman.Kloposawit, Girikerto, Turi, Sleman, DIY RT/RW 004/006', 'SMP', 'Amikom', 'Tidak Ada 1', '1645981656-capture.png', '1645307970-untitled.png', NULL, 'pending', '2022-02-19 21:59:30', '2022-02-27 17:31:51'),
(5, 'SERTIFIKASI.03.00005', '3', 'sertifikasi', '253425345436546x', 'Rahma Andita Purnama', 'L', '089669413260', 'cobavoba17@gmail.com', 'SLEMAN', '2022-02-20', 'Yogyakarta', 'SLEMAN', 'Turi', 'Girikerto', '55551', 'Jineman.Kloposawit, Girikerto, Turi, Sleman, DIY RT/RW 004/006', 'SMP', 'Amikom', 'Tidak Ada', '1645307970-logo.png', '1645307970-untitled.png', NULL, 'pending', '2022-02-19 21:59:30', '2022-04-03 08:46:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, 'Admin LSP Alaskaki', 'admin@lspakjogja.or.id', '$2y$10$VrVaAvPX7KYm58sOaI5y0OLEyvyzHuSGcFLjv3DOG2D7/XH3d9oCG', '2021-10-13 17:14:11', '2021-10-13 17:14:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `registrants`
--
ALTER TABLE `registrants`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `registrants`
--
ALTER TABLE `registrants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
