-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_company_astro.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.articles: ~6 rows (approximately)
INSERT INTO `articles` (`id`, `title`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
	(11, 'Belanja Kebutuhan Sehari-hari Jadi Lebih Mudah dengan Astro', 'Astro hadir sebagai solusi belanja kebutuhan sehari-hari yang cepat dan praktis. Dengan pengiriman hanya dalam 15 menit, Anda tidak perlu lagi repot keluar rumah. Cukup pesan melalui aplikasi atau website, dan pesanan Anda akan segera diantar ke depan pintu.', NULL, 'published', '2026-06-16 07:44:24', '2026-06-16 07:44:24'),
	(12, '5 Tips Memilih Sayuran Segar untuk Keluarga', 'Memilih sayuran segar memang perlu ketelitian. Pastikan warna sayuran cerah, tidak layu, dan tidak ada bercak hitam. Astro selalu memilih supplier terbaik untuk memastikan kualitas sayuran yang kami kirimkan kepada pelanggan tetap segar dan bergizi.', NULL, 'published', '2026-06-16 07:44:24', '2026-06-16 07:44:24'),
	(13, 'Promo Spesial Akhir Tahun di Astro! Diskon Hingga 50%', 'Nikmati promo akhir tahun dengan diskon besar-besaran untuk produk pilihan. Dapatkan voucher belanja gratis dan penawaran menarik lainnya. Promo berlaku terbatas, jangan sampai kehabisan!', NULL, 'published', '2026-06-16 07:44:24', '2026-06-16 07:44:24'),
	(14, 'Cara Mudah Menggunakan Aplikasi Astro untuk Pemula', 'Bagi Anda yang baru pertama kali menggunakan Astro, prosesnya sangat mudah. Unduh aplikasi, daftar akun, pilih produk favorit Anda, dan selesaikan pembayaran. Tim kurir kami akan segera mengantar pesanan Anda dalam waktu singkat.', NULL, 'draft', '2026-06-16 07:44:24', '2026-06-16 08:33:29'),
	(15, 'Astro Hadir di Kota Tangerang!', 'Kami dengan senang hati mengumumkan bahwa Astro kini telah hadir di wilayah Tangerang dan sekitarnya. Kini lebih banyak pelanggan yang dapat menikmati kemudahan belanja kebutuhan sehari-hari dengan pengiriman cepat.', NULL, 'published', '2026-06-16 07:44:24', '2026-06-16 07:44:24'),
	(17, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor luctus ipsum ac pellentesque. Pellentesque sit amet dignissim mi. Donec vitae tellus sem. Nam et lacus quam. Phasellus elementum velit vehicula risus congue, ac consequat ipsum posuere. Etiam egestas sapien at arcu commodo, a sodales velit volutpat. Nam dignissim mauris ac ligula rhoncus, sit amet accumsan sapien suscipit. Nullam iaculis enim neque, quis condimentum augue placerat sed. Integer a mi iaculis, rutrum nunc in, bibendum tortor.', 'uploads/articles/1781739391_Lorem Ipsum.png', 'draft', '2026-06-17 16:36:31', '2026-06-17 16:42:43');

-- Dumping structure for table db_company_astro.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.cache: ~0 rows (approximately)

-- Dumping structure for table db_company_astro.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.cache_locks: ~0 rows (approximately)

-- Dumping structure for table db_company_astro.company_profiles
CREATE TABLE IF NOT EXISTS `company_profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.company_profiles: ~0 rows (approximately)
INSERT INTO `company_profiles` (`id`, `company_name`, `description`, `address`, `phone`, `email`, `logo`, `created_at`, `updated_at`) VALUES
	(2, 'PT Astro Technologies Indonesia', 'Astro adalah startup quick commerce yang berkomitmen memberikan solusi belanja kebutuhan sehari-hari dengan pengiriman cepat dalam 15 menit. Kami hadir untuk memudahkan masyarakat Indonesia berbelanja tanpa ribet.', 'Jl. Astro No. 123, Jakarta Selatan, DKI Jakarta 12120', '(021) 1234-5678', 'info@astro.com', 'uploads/profiles/1781739806_Lorem Ipsum.png', '2026-06-16 07:44:27', '2026-06-17 16:43:26');

-- Dumping structure for table db_company_astro.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table db_company_astro.galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.galleries: ~5 rows (approximately)
INSERT INTO `galleries` (`id`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Toko Astro Jakarta', '', 'Tampilan depan toko Astro di Jakarta yang modern dan bersih, siap melayani pelanggan.', '2026-06-16 07:48:57', '2026-06-16 07:48:57'),
	(2, 'Tim Kurir Astro', '', 'Tim kurir Astro yang sigap dan profesional siap mengantarkan pesanan tepat waktu.', '2026-06-16 07:48:57', '2026-06-16 07:48:57'),
	(3, 'Produk Segar di Astro', '', 'Berbagai macam produk segar tersedia di Astro mulai dari sayuran, buah-buahan, hingga daging.', '2026-06-16 07:48:57', '2026-06-16 07:48:57'),
	(4, 'Suasana Belanja di Astro', '', 'Suasana belanja yang nyaman dan rapi di toko Astro dengan berbagai pilihan produk.', '2026-06-16 07:48:57', '2026-06-16 07:48:57'),
	(6, 'Lorem Ipsum', 'uploads/galleries/1781739787_Lorem Ipsum.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor luctus ipsum ac pellentesque. Pellentesque sit amet dignissim mi. Donec vitae tellus sem. Nam et lacus quam. Phasellus elementum velit vehicula risus congue, ac consequat ipsum posuere. Etiam egestas sapien at arcu commodo, a sodales velit volutpat. Nam dignissim mauris ac ligula rhoncus, sit amet accumsan sapien suscipit. Nullam iaculis enim neque, quis condimentum augue placerat sed. Integer a mi iaculis, rutrum nunc in, bibendum tortor.', '2026-06-17 16:43:07', '2026-06-17 16:43:07');

-- Dumping structure for table db_company_astro.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.jobs: ~0 rows (approximately)

-- Dumping structure for table db_company_astro.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.job_batches: ~0 rows (approximately)

-- Dumping structure for table db_company_astro.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.migrations: ~8 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_06_16_130808_add_role_to_users_table', 2),
	(5, '2026_06_16_130827_create_articles_table', 2),
	(6, '2026_06_16_130845_create_products_table', 2),
	(7, '2026_06_16_130901_create_galleries_table', 2),
	(8, '2026_06_16_130925_create_company_profiles_table', 2);

-- Dumping structure for table db_company_astro.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table db_company_astro.products
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.products: ~7 rows (approximately)
INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `stock`, `created_at`, `updated_at`) VALUES
	(13, 'Beras Premium 5kg', 'Beras kualitas terbaik dengan tekstur pulen dan wangi alami. Cocok untuk makan sehari-hari.', 75000.00, NULL, 100, '2026-06-16 07:44:25', '2026-06-16 07:44:25'),
	(14, 'Minyak Goreng Bimoli 2L', 'Minyak goreng berkualitas tinggi, kaya akan vitamin dan baik untuk kesehatan. Bebas kolesterol jahat.', 32000.00, NULL, 50, '2026-06-16 07:44:25', '2026-06-16 07:44:25'),
	(15, 'Gula Pasir 1kg', 'Gula pasir putih bersih dengan kadar sakarosa tinggi. Manis alami, cocok untuk minuman dan masakan.', 18000.00, NULL, 80, '2026-06-16 07:44:25', '2026-06-16 07:44:25'),
	(16, 'Telur Ayam 1/2 Kg (10 butir)', 'Telur ayam segar dari peternakan terpercaya. Kaya protein dan sangat baik untuk kesehatan.', 25000.00, NULL, 40, '2026-06-16 07:44:25', '2026-06-16 07:44:25'),
	(17, 'Susu UHT Full Cream 1L', 'Susu UHT dengan rasa lezat dan kaya kalsium. Baik untuk pertumbuhan tulang dan kesehatan gigi.', 22000.00, NULL, 60, '2026-06-16 07:44:25', '2026-06-16 07:44:25'),
	(18, 'Snack Coklat Wafer 200g', 'Camilan lezat dengan lapisan coklat creamy dan renyah. Sempurna untuk teman minum teh atau kopi.', 15000.00, NULL, 120, '2026-06-16 07:44:25', '2026-06-16 07:44:25'),
	(20, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tempor luctus ipsum ac pellentesque. Pellentesque sit amet dignissim mi. Donec vitae tellus sem. Nam et lacus quam. Phasellus elementum velit vehicula risus congue, ac consequat ipsum posuere. Etiam egestas sapien at arcu commodo, a sodales velit volutpat. Nam dignissim mauris ac ligula rhoncus, sit amet accumsan sapien suscipit. Nullam iaculis enim neque, quis condimentum augue placerat sed. Integer a mi iaculis, rutrum nunc in, bibendum tortor.', 999.00, 'uploads/products/1781739478_Lorem Ipsum.png', 1, '2026-06-17 16:37:58', '2026-06-17 16:37:58');

-- Dumping structure for table db_company_astro.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` longtext NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('S4p8AI4tqUj9S1jYHsQ9EEvmPab7ie0nGYpbzHEj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYjVmNXpHSGlFQTE2eml5M1JOWHdDOW9aYm85ZlFtOUlsNDhvT0phNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9kdWN0cy8yMC9lZGl0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1781740750);

-- Dumping structure for table db_company_astro.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_company_astro.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', 'admin@example.com', NULL, '$2y$12$SKxay2Dl3nilQ4K.AZt6Q.dr/vplVxAFVfb0taWFfxMJZhTJbvhcu', 'admin', NULL, '2026-06-16 06:20:27', '2026-06-16 06:20:27');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
