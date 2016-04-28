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
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clicked` int(200) unsigned NOT NULL DEFAULT '0',
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.articles: ~3 rows (approximately)
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `clicked`, `publisher_name`, `sub_id`, `active`, `user_id`, `title`, `file`, `some_text`, `co_author`, `category_id`, `search_keys`, `publication_date`, `page_count`, `created_at`, `updated_at`) VALUES
	(1, 5, 'Батсүрэн', 9, '1', 1, 'Найк', '571b45eb95453asdasdasd.pdf', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.', 'asd', 1, 'kajsdkajshd', '1111-11-22', '22', '2016-04-23 17:52:43', '2016-04-28 08:37:10'),
	(6, 11, 'Мөнхтулга', 2, '1', 8, 'Хуралын илтгэл', '5721aaacd814eCWYK8CLC61.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Ганболд, Сүх-Очир', 3, 'Lorem Ipsum is simply dummy text of ', '2016-04-13', '20', '2016-04-28 06:16:12', '2016-04-28 09:05:25'),
	(7, 0, 'Мөнхтулга', 2, '1', 8, 'Bootstrap Skeleton', '5721ab0b077f31C1A9389B4.jpg', 'asjkdh', 'akjshd', 2, 'kajsdkajshd', '2016-04-08', '22', '2016-04-28 06:17:47', '2016-04-28 06:17:47');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;


-- Dumping structure for table dusal.articles_category
CREATE TABLE IF NOT EXISTS `articles_category` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.articles_category: ~5 rows (approximately)
/*!40000 ALTER TABLE `articles_category` DISABLE KEYS */;
INSERT INTO `articles_category` (`cat_id`, `category_name`) VALUES
	(1, 'Математик'),
	(2, 'Физик'),
	(3, 'Хими'),
	(4, 'Газарзүй Геологи'),
	(5, 'ХАА Биологи');
/*!40000 ALTER TABLE `articles_category` ENABLE KEYS */;


-- Dumping structure for table dusal.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(225) CHARACTER SET utf8 NOT NULL,
  `body` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `author` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `lector` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `where_is` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `when_year` year(4) NOT NULL,
  `when_month` int(2) NOT NULL,
  `when_day` int(2) NOT NULL,
  `when_time` time NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table dusal.events: 0 rows
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;


-- Dumping structure for table dusal.migrations
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
CREATE TABLE IF NOT EXISTS `sub_category` (
  `subcat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`subcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.sub_category: ~3 rows (approximately)
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` (`subcat_id`, `sub`) VALUES
	(1, 'Судалгааны бүтээл'),
	(2, 'Эрдэм шинжилгээний хурлын илтгэл, эмхтгэл'),
	(3, 'Лекц');
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;


-- Dumping structure for table dusal.users
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table dusal.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `type`, `image`, `major`, `f_name`, `l_name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, '571b577f0360abi.jpg', '0', 'Мөнхтулга', 'Сайнбуян', 'monhtulga1122@gmail.com', '$2y$10$usc8T7MiCwDIMSPGohTzcuStOXu1FK4IUGaUxTFi0m5QimMbyFS0q', '8gS8B5n0Wh8PZouj2aVzHYiODIMCKvtgRiUTWmmPddvu8KqMaimnsjNi4jWi', '2016-04-23 15:37:24', '2016-04-28 05:43:22'),
	(8, 3, 'user.png', '0', 'Мөнхтулга', 'Сайнбуян', 'tulgaa.2211@yahoo.com', '$2y$10$uCSZRQloGiHLoGIZsP0gVuEyMpWo/HbWXwHEzlScV1zY/vAaSNiPK', NULL, '2016-04-28 05:44:30', '2016-04-28 05:44:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table dusal.users_type
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
