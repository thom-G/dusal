-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dusal.articles
DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `publisher_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `sub_id` int(10) unsigned NOT NULL DEFAULT '0',
  `active` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `file` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `some_text` mediumtext COLLATE utf8_unicode_ci,
  `co_author` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `search_keys` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `publication_date` date NOT NULL DEFAULT '0000-00-00',
  `page_count` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.articles: ~4 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `publisher_name`, `sub_id`, `active`, `user_id`, `title`, `file`, `some_text`, `co_author`, `category_id`, `search_keys`, `publication_date`, `page_count`, `created_at`, `updated_at`) VALUES
	(1, 'Батсүрэн', 9, '1', 1, 'Найк', '571b45eb95453asdasdasd.pdf', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'asd', 1, 'kajsdkajshd', '1111-11-22', '22', '2016-04-23 17:52:43', '2016-04-24 18:26:29'),
	(3, '0', 0, '1', 2, '0', '0', NULL, '0', 0, '0', '0000-00-00', '0', '0000-00-00 00:00:00', '2016-04-25 22:58:50'),
	(4, '0', 0, '0', 1, '0', '0', NULL, '0', 0, '0', '0000-00-00', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(5, '0', 0, '0', 1, '0', '0', NULL, '0', 0, '0', '0000-00-00', '0', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;


-- Dumping structure for table dusal.articles_category
DROP TABLE IF EXISTS `articles_category`;
CREATE TABLE IF NOT EXISTS `articles_category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.articles_category: ~2 rows (approximately)
/*!40000 ALTER TABLE `articles_category` DISABLE KEYS */;
INSERT INTO `articles_category` (`category_id`, `category_name`) VALUES
	(1, 'Эрдэм шинжилгээний бүтээл'),
	(2, 'Эрдэм шинжилгээний хурлын илтгэл'),
	(3, 'Лекц');
/*!40000 ALTER TABLE `articles_category` ENABLE KEYS */;


-- Dumping structure for table dusal.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table dusal.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table dusal.sub_category
DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.sub_category: ~8 rows (approximately)
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` (`sub_id`, `sub`) VALUES
	(1, 'Газарзүй'),
	(2, 'Биологи'),
	(3, 'Геологи'),
	(4, 'Экологи'),
	(5, 'Хими'),
	(6, 'Физик'),
	(7, 'Ус, Цаг уур'),
	(8, 'Бакалавр'),
	(9, 'Магистр'),
	(10, 'Докторант');
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;


-- Dumping structure for table dusal.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` int(10) unsigned NOT NULL DEFAULT '0',
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT '0',
  `major` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `f_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `l_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `type`, `image`, `major`, `f_name`, `l_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, '571b577f0360abi.jpg', '0', 'Мөнхтулга', 'Сайнбуян', 'monhtulga1122@gmail.com', '$2y$10$usc8T7MiCwDIMSPGohTzcuStOXu1FK4IUGaUxTFi0m5QimMbyFS0q', 'HRAfJF95RuaH5lDm3vISspz3klnJ9KBtgdkdAemYxWV2rjHToKteKdwWszbq', '2016-04-23 15:37:24', '2016-04-25 22:50:23'),
	(2, 2, 'user.png', '0', 'askjhd', 'kjahsdkajhsd', 'akjshd@kahsgf.com', '$2y$10$7h16J8IP68Ti96rMnW7a4uynv2hhbMgoK9dBCI4YgY9i4fF954wZq', NULL, '2016-04-23 19:07:43', '2016-04-23 19:07:43'),
	(3, 1, 'user.png', '0', 'akjshd', 'aksjhd', 'kajshdkasd@kajshd.com', '$2y$10$0Rped058hYxz.r1M26AHM.npvkvQ2gf8EpnshV8Unx24NWHiPFvEi', 'dkqvkrIgMJHGpLPApybNHjjlebvtBKfiYAKjniWY03F6AfE6TSc7jtBKlU3v', '2016-04-24 15:37:02', '2016-04-24 15:37:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table dusal.users_type
DROP TABLE IF EXISTS `users_type`;
CREATE TABLE IF NOT EXISTS `users_type` (
  `type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.users_type: ~3 rows (approximately)
/*!40000 ALTER TABLE `users_type` DISABLE KEYS */;
INSERT INTO `users_type` (`type_id`, `type_name`) VALUES
	(1, 'admin'),
	(2, 'customer'),
	(3, 'author');
/*!40000 ALTER TABLE `users_type` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
