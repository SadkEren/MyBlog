-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Mar 2023, 04:51:57
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `headTitle` varchar(255) DEFAULT NULL,
  `navbarTitle` varchar(255) DEFAULT NULL,
  `upTitle` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `aboutTitle` varchar(255) DEFAULT NULL,
  `aboutContent` varchar(5000) DEFAULT NULL,
  `aboutImage` varchar(400) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`id`, `headTitle`, `navbarTitle`, `upTitle`, `title`, `aboutTitle`, `aboutContent`, `aboutImage`, `created_at`, `updated_at`) VALUES
(6, 'SEY Blog2', 'SEY Blog', 'SEY Blog', 'welcome to my blog', 'Lorem Ipsum', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et ultricies augue. Suspendisse vitae fringilla velit. Nam et ex quam. Proin pharetra porttitor quam vel efficitur. Nullam hendrerit urna vitae elit bibendum elementum. Duis interdum eget nisl non iaculis. Cras eros eros, imperdiet eu nunc sed, mollis faucibus turpis. Fusce feugiat urna vitae orci aliquet, nec malesuada arcu accumsan.</strong></p><p>Sed efficitur egestas interdum. Cras nisl ante, dapibus sed dictum non, varius a metus. Sed fermentum sagittis risus, consectetur hendrerit purus. Curabitur ligula risus, vehicula quis nunc ac, interdum molestie magna. Fusce porttitor rutrum erat, nec ultricies neque tristique ut. Aliquam a turpis mattis, condimentum mauris et, varius nunc. Sed vitae leo libero. Morbi laoreet mauris enim. Proin nec pretium eros, sit amet dapibus eros.</p><blockquote><p>Pellentesque ligula lorem, convallis eu massa ac, vulputate scelerisque ante. Duis scelerisque lorem tincidunt elit blandit mattis. Quisque venenatis sit amet justo sed cursus. Nunc interdum imperdiet metus. Morbi auctor ultrices ex, in pellentesque nisi hendrerit non. Nunc vitae ex ac ex convallis pharetra. Vivamus in arcu vitae elit tincidunt fringilla sed eu leo.</p></blockquote><p>Mauris in porta urna. Integer efficitur efficitur erat, ut ultricies mauris elementum vel. Ut tempor velit nec diam molestie, sed tempor libero malesuada. Maecenas consectetur tempus urna, a vehicula sapien venenatis ut. Quisque ac rhoncus felis, quis fringilla neque. Pellentesque viverra nibh ut malesuada facilisis. Aenean gravida pulvinar sapien, nec bibendum nisl molestie vitae. Maecenas at nunc nibh. Fusce in sapien finibus, imperdiet lacus in, malesuada neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus elementum vulputate elit, sit amet pulvinar odio. Fusce venenatis felis sit amet est sagittis luctus. Nunc rhoncus dolor id nulla sollicitudin, at egestas nisi sollicitudin. Integer vitae finibus quam. Ut faucibus augue a tortor ultricies, blandit eleifend ante placerat.</p>', '1677894899-Lorem Ipsum.png', '2023-03-03 20:20:29', '2023-03-04 00:22:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `instagram`, `twitter`, `linkedin`, `created_at`, `updated_at`) VALUES
(4, 'admin@gmail.com', '12222222222', 'https://www.instagram.com/', 'https://twitter.com/sadikerenyazici', 'https://www.linkedin.com/', '2023-03-03 23:27:42', '2023-03-03 23:27:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_25_123500_create_abouts_table', 1),
(6, '2023_02_25_123526_create_posts_table', 1),
(7, '2023_02_25_123538_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `upTitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(3000) NOT NULL,
  `postImage` varchar(500) DEFAULT NULL,
  `userName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `posts`
--

INSERT INTO `posts` (`id`, `upTitle`, `title`, `content`, `postImage`, `userName`, `created_at`, `updated_at`) VALUES
(3, 'asdasd123123', 'asdas', '<p>asdas asdas asdas asdasasdas asdasasdas asdasasdas asdasasdas asdasasdas asdasasdas asdas</p>', '1677900937-asdasd123123.png', 'admin', '2023-03-03 19:12:28', '2023-03-04 00:35:37');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$NU1cxN8sdohN7Sin4jTwGOAJ294FOiIoIclNf2./ui8Q/rktoa2dS', NULL, '2023-02-25 10:04:25', '2023-02-25 10:04:25');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
