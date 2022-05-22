-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Bulan Mei 2022 pada 01.36
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
  `fk_photo_type` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `descriptions` text COLLATE utf8mb4_general_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `photos`
--

INSERT INTO `photos` (`id`, `fk_photo_type`, `title`, `descriptions`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Aku Adalah Saya', 'Nama Saya Adalah nana nina', '1648978980-logo.png', '2022-04-03 09:43:00', '2022-04-03 09:43:00'),
(3, 2, 'Haloo Ya Apa', 'Kereta Kencana', '1650567855-capture.png', '2022-04-03 09:46:29', '2022-04-21 19:04:15'),
(5, 3, 'Test Pengeleman', 'Ngelem itu haram bang', '1650569748-laravel-featured-image.png', '2022-04-21 19:35:48', '2022-04-21 19:35:48'),
(6, 6, 'Test New', 'XXDSDSD', '1651951360-logo-preview.jpg', '2022-05-07 19:22:40', '2022-05-07 19:22:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo_types`
--

CREATE TABLE `photo_types` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `photo_types`
--

INSERT INTO `photo_types` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Menjahit', 'menjahit', '2022-05-07 16:21:50', '2022-05-07 16:21:50'),
(2, 'Pengemalan', 'pengemalan', '2022-05-07 16:21:50', '2022-05-07 16:21:50'),
(3, 'Pengeleman', 'pengeleman', '2022-05-07 16:22:10', '2022-05-07 16:22:10'),
(5, 'Testing Wae A', 'testing-wae-a', '2022-05-07 18:17:32', '2022-05-07 19:22:02'),
(6, 'AABBX', 'aabbx', '2022-05-07 19:22:15', '2022-05-07 19:22:24');

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
  `bidang_usaha` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `kantor_sekarang` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat_kantor` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `phone_fax_email_kantor` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
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

INSERT INTO `registrants` (`id`, `unique_id`, `skema_sertifikasi`, `jenis_uji`, `no_ktp`, `nama_lengkap`, `jenis_kelamin`, `no_hp`, `email`, `tempat_lahir`, `tanggal_lahir`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `kode_pos`, `alamat_sesuai_ktp`, `pendidikan_terakhir`, `universitas_sekolah`, `bidang_usaha`, `kantor_sekarang`, `jabatan`, `alamat_kantor`, `phone_fax_email_kantor`, `foto_ktp`, `foto_ijazah`, `sertifikat_pelatihan`, `status`, `created_at`, `updated_at`) VALUES
(4, 'SERTIFIKASI.03.00004', '3', 'sertifikasi', '25342534543654645', 'Rahma Andita Purnama', 'L', '089669413260', 'cobavoba17@gmail.com', 'SLEMAN', '2022-02-20', 'Yogyakarta', 'SLEMAN', 'Turi', 'Girikerto', '55551', 'Jineman.Kloposawit, Girikerto, Turi, Sleman, DIY RT/RW 004/006', 'SMP', 'Amikom', 'Tidak Ada 1', NULL, NULL, NULL, NULL, '1645981656-capture.png', '1645307970-untitled.png', NULL, 'pending', '2022-02-19 21:59:30', '2022-02-27 17:31:51'),
(5, 'SERTIFIKASI.03.00005', '3', 'sertifikasi', '253425345436546x', 'Rahma Andita Purnama', 'L', '089669413260', 'cobavoba17@gmail.com', 'SLEMAN', '2022-02-20', 'Yogyakarta', 'SLEMAN', 'Turi', 'Girikerto', '55551', 'Jineman.Kloposawit, Girikerto, Turi, Sleman, DIY RT/RW 004/006', 'SMP', 'Amikom', 'Tidak Ada', NULL, NULL, NULL, NULL, '1645307970-logo.png', '1645307970-untitled.png', NULL, 'pending', '2022-02-19 21:59:30', '2022-04-03 08:46:47'),
(6, 'SERTIFIKASI.01.00006', '1', 'sertifikasi', '23424234', 'Rahma', 'L', '08985756', 'blitzindo.utama@gmail.com', 'dasdsadas', '2022-05-10', 'Yogyakarta', 'sleman', 'turi', 'gitikerto', '55551', 'sdfsdfsdf sdfsdfsdfsd', 'S3', 'fsdfsdfsdf', 'dfsdfsdf', NULL, NULL, NULL, NULL, '1652105417-cli-18-removebg-preview.png', '1652105417-images1-removebg-preview.png', NULL, 'pending', '2022-05-09 14:10:17', '2022-05-09 14:10:17'),
(7, 'SERTIFIKASI.01.00007', '1', 'sertifikasi', '23424234', 'Rahma', 'L', '08985756', 'blitzindo.utama@gmail.com', 'Dasdsadas', '2022-05-11', 'Yogyakarta', 'Sleman', 'Turi', 'Gitikerto', '5435', 'Fdgdfg', 'S1', 'Fsdfsdfsdf', 'Dfsdfsdf', NULL, NULL, NULL, NULL, '1652105727-creative-clipart-creative-person-10.png', '1652105727-images1-removebg-preview.png', NULL, 'pending', '2022-05-09 14:15:27', '2022-05-09 14:15:27'),
(8, 'SERTIFIKASI.01.00008', '1', 'sertifikasi', '23424234', 'Rahma', 'L', '08985756', 'cobavoba17@gmail.com', 'Dasdsadas', '2022-05-09', 'Yogyakarta', 'Sleman', 'Turi', 'Gitikerto', '34245235', 'Gdfgdfg', 'S2', 'Fsdfsdfsdf', 'Dfsdfsdf', NULL, NULL, NULL, NULL, '1652105823-creative-clipart-creative-person-10.png', '1652105823-images1-removebg-preview.png', NULL, 'pending', '2022-05-09 14:17:03', '2022-05-09 14:17:03'),
(9, 'SERTIFIKASI.01.00009', '1', 'sertifikasi', '23424234', 'Rahma', 'L', '08985756', 'cobavoba17@gmail.com', 'Sleman', '2022-05-10', 'Yogyakarta', 'Sleman', 'Turi', 'Gitikerto', '55551', 'Jineman 004/006', 'S1', 'Amikom', 'Sepatu', NULL, NULL, NULL, NULL, '1652106558-cli-18-removebg-preview.png', '1652106558-images1-removebg-preview.png', NULL, 'pending', '2022-05-09 14:29:18', '2022-05-09 14:29:18'),
(10, 'RCC.01.00010', '1', 'rcc', '1111111111111119', 'Rahma', 'L', '08985756', 'cobavoba17@gmail.com', 'Sleman', '2022-05-09', 'Yogyakarta', 'Sleman', 'Turi', 'Gitikerto', '55551', 'Jineman 004/006', 'S1', 'Amikom', 'Sepatu', NULL, NULL, NULL, NULL, '1652106980-creative-clipart-creative-person-10.png', '1652106980-images-removebg-preview.png', NULL, 'pending', '2022-05-09 14:36:20', '2022-05-21 21:25:49'),
(11, 'SERTIFIKASI.01.00011', '1', 'sertifikasi', '1234567890123456', 'Kusuma Syariah Hotel', 'L', '08982002040', 'cobavoba17@gmail.com', 'SLEMAN', '1999-01-22', 'Yogyakarta', 'Sleman', 'Turi', 'Girikerto', '12345', 'Sleman', 'S3', 'Amikom', 'Tidak Ada 1', NULL, NULL, NULL, NULL, '1653170740-danautobapng.png', '1653170740-destiasi-bg.jpg', NULL, 'pending', '2022-05-21 22:05:40', '2022-05-21 22:05:40'),
(12, 'RCC.01.00012', '1', 'rcc', '3404150701990000', 'Rahma Andita Purnama', 'L', '089669413260', 'cobavoba17@gmail.com', 'Sleman', '1999-01-07', 'Yogyakarta', 'Sleman', 'Turi', 'Girikerto', '55551', 'Jineman.Kloposawit, Girikerto, Turi, Sleman, DIY RT/RW 004/006', 'S1', 'Amikom YK', '', NULL, NULL, NULL, NULL, '1653171555-danau1.jpg', '1653171555-destiasi-bg.jpg', NULL, 'pending', '2022-05-21 22:19:15', '2022-05-21 22:19:15'),
(13, 'RCC.01.00013', '1', 'rcc', '3404150701990001', 'Sito Karuniawan', 'L', '+6289669413260', 'cobavoba17@gmail.com', 'SLEMAN', '2022-05-29', 'Yogyakarta', 'Yogyakarta', 'Dsadsadfd', 'Fsdf', '55551', 'JINEMAN.KLOPOSAWIT', 'S1', 'Dsdsad', '', NULL, NULL, NULL, NULL, '1653171735-danau1.jpg', '1653171735-download.jpg', NULL, 'pending', '2022-05-21 22:22:15', '2022-05-21 22:22:15'),
(14, 'RCC.11.00014', '11', 'rcc', '3404150701990001', 'Rahma Purnama', 'L', '08982002040', 'cobavoba17@gmail.com', 'Sleman', '2022-05-21', 'Yogyakarta', 'Sleman', 'Turi', 'Girikerto', '55551', 'Jineman.Kloposawit, Girikerto, Turi, Sleman, DIY RT/RW 004/006', 'S1', 'Amikom', NULL, 'RahmaTV', 'Founder/CEO', 'Sleman', 'Purwantiibuku@gmail.com', '1653182926-cahaya-taman-cover.jpg', '1653182113-danau1.jpg', '1653182113-kaliurang.jpg', 'success', '2022-05-22 01:15:13', '2022-05-22 01:28:46');

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_photo_type` (`fk_photo_type`);

--
-- Indeks untuk tabel `photo_types`
--
ALTER TABLE `photo_types`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `photo_types`
--
ALTER TABLE `photo_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `registrants`
--
ALTER TABLE `registrants`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`fk_photo_type`) REFERENCES `photo_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
