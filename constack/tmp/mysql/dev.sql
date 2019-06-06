/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour costocking_dev
CREATE DATABASE IF NOT EXISTS `costocking_dev` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `costocking_dev`;

-- Listage de la structure de la table costocking_dev. booking
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `listing_id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` smallint(6) NOT NULL,
  `validated` tinyint(1) NOT NULL,
  `amount` decimal(8,0) NOT NULL,
  `amount_fee_as_asker` decimal(8,0) NOT NULL,
  `amount_fee_as_offerer` decimal(8,0) NOT NULL,
  `amount_total` decimal(8,0) NOT NULL,
  `cancellation_policy` smallint(6) NOT NULL,
  `new_booking_at` datetime DEFAULT NULL,
  `payed_booking_at` datetime DEFAULT NULL,
  `refused_booking_at` datetime DEFAULT NULL,
  `canceled_asker_booking_at` datetime DEFAULT NULL,
  `alerted_expiring` tinyint(1) NOT NULL,
  `alerted_imminent` tinyint(1) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `time_zone_asker` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time_zone_offerer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E00CEDDEA76ED395` (`user_id`),
  KEY `IDX_E00CEDDED4619D1A` (`listing_id`),
  KEY `start_idx` (`start`),
  KEY `end_idx` (`end`),
  KEY `start_time_idx` (`start_time`),
  KEY `end_time_idx` (`end_time`),
  KEY `status_idx` (`status`),
  KEY `validated_idx` (`validated`),
  KEY `new_booking_at_idx` (`new_booking_at`),
  KEY `alerted_expiring_idx` (`alerted_expiring`),
  KEY `alerted_imminent_idx` (`alerted_imminent`),
  KEY `created_at_idx` (`createdAt`),
  KEY `updated_at_idx` (`updatedAt`),
  CONSTRAINT `FK_E00CEDDEA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_E00CEDDED4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.booking : ~0 rows (environ)
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. booking_bank_wire
CREATE TABLE IF NOT EXISTS `booking_bank_wire` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `amount` decimal(8,0) NOT NULL,
  `payed_at` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8929A0B83301C60` (`booking_id`),
  KEY `IDX_8929A0B8A76ED395` (`user_id`),
  KEY `status_bbw_idx` (`status`),
  KEY `created_at_bbw_idx` (`createdAt`),
  CONSTRAINT `FK_8929A0B83301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8929A0B8A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.booking_bank_wire : ~0 rows (environ)
/*!40000 ALTER TABLE `booking_bank_wire` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking_bank_wire` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. booking_payin_refund
CREATE TABLE IF NOT EXISTS `booking_payin_refund` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `amount` decimal(8,0) NOT NULL,
  `payed_at` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2CD4E82D3301C60` (`booking_id`),
  KEY `IDX_2CD4E82DA76ED395` (`user_id`),
  KEY `status_pr_idx` (`status`),
  KEY `created_at_pr_idx` (`createdAt`),
  CONSTRAINT `FK_2CD4E82D3301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2CD4E82DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.booking_payin_refund : ~0 rows (environ)
/*!40000 ALTER TABLE `booking_payin_refund` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking_payin_refund` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. booking_user_address
CREATE TABLE IF NOT EXISTS `booking_user_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B7DC90443301C60` (`booking_id`),
  CONSTRAINT `FK_B7DC90443301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.booking_user_address : ~0 rows (environ)
/*!40000 ALTER TABLE `booking_user_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `booking_user_address` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_at_c_idx` (`createdAt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.contact : ~0 rows (environ)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. footer
CREATE TABLE IF NOT EXISTS `footer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `footer_published_idx` (`published`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.footer : ~0 rows (environ)
/*!40000 ALTER TABLE `footer` DISABLE KEYS */;
/*!40000 ALTER TABLE `footer` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. footer_translation
CREATE TABLE IF NOT EXISTS `footer_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` bigint(20) DEFAULT NULL,
  `url` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url_hash` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `footer_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_439793442C2AC5D3` (`translatable_id`),
  KEY `footer_url_hash_idx` (`url_hash`),
  CONSTRAINT `FK_439793442C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `footer` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.footer_translation : ~0 rows (environ)
/*!40000 ALTER TABLE `footer_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `footer_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_area
CREATE TABLE IF NOT EXISTS `geo_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `geocoding_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D3B312683A405C9` (`geocoding_id`),
  KEY `IDX_D3B31268F92F3E70` (`country_id`),
  CONSTRAINT `FK_D3B312683A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_D3B31268F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_area : ~4 rows (environ)
/*!40000 ALTER TABLE `geo_area` DISABLE KEYS */;
INSERT INTO `geo_area` (`id`, `country_id`, `geocoding_id`) VALUES
	(6, 6, 3),
	(7, 6, 7),
	(8, 6, 10),
	(9, 6, 15);
/*!40000 ALTER TABLE `geo_area` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_area_translation
CREATE TABLE IF NOT EXISTS `geo_area_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_area_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_7A5BDDAB2C2AC5D3` (`translatable_id`),
  KEY `name_gat_idx` (`name`),
  CONSTRAINT `FK_7A5BDDAB2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_area` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_area_translation : ~8 rows (environ)
/*!40000 ALTER TABLE `geo_area_translation` DISABLE KEYS */;
INSERT INTO `geo_area_translation` (`id`, `translatable_id`, `name`, `slug`, `locale`) VALUES
	(11, 6, 'Île-de-France', 'ile-de-france', 'en'),
	(12, 6, 'Île-de-France', 'ile-de-france', 'fr'),
	(13, 7, 'Auvergne-Rhône-Alpes', 'auvergne-rhone-alpes', 'en'),
	(14, 7, 'Auvergne-Rhône-Alpes', 'auvergne-rhone-alpes', 'fr'),
	(15, 8, 'Nouvelle-Aquitaine', 'nouvelle-aquitaine', 'en'),
	(16, 8, 'Nouvelle-Aquitaine', 'nouvelle-aquitaine', 'fr'),
	(17, 9, 'Bretagne', 'bretagne', 'en'),
	(18, 9, 'Bretagne', 'bretagne', 'fr');
/*!40000 ALTER TABLE `geo_area_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_city
CREATE TABLE IF NOT EXISTS `geo_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `geocoding_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_297C2D343A405C9` (`geocoding_id`),
  KEY `IDX_297C2D34F92F3E70` (`country_id`),
  KEY `IDX_297C2D34BD0F409C` (`area_id`),
  KEY `IDX_297C2D34AE80F5DF` (`department_id`),
  CONSTRAINT `FK_297C2D343A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_297C2D34AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `geo_department` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_297C2D34BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `geo_area` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_297C2D34F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_city : ~5 rows (environ)
/*!40000 ALTER TABLE `geo_city` DISABLE KEYS */;
INSERT INTO `geo_city` (`id`, `country_id`, `area_id`, `department_id`, `geocoding_id`) VALUES
	(6, 6, 6, 6, 1),
	(7, 6, 7, 7, 5),
	(8, 6, 8, 8, 9),
	(9, 6, 8, 9, 11),
	(10, 6, 9, 10, 13);
/*!40000 ALTER TABLE `geo_city` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_city_translation
CREATE TABLE IF NOT EXISTS `geo_city_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_city_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_72D469D42C2AC5D3` (`translatable_id`),
  KEY `name_gct_idx` (`name`),
  CONSTRAINT `FK_72D469D42C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_city` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_city_translation : ~10 rows (environ)
/*!40000 ALTER TABLE `geo_city_translation` DISABLE KEYS */;
INSERT INTO `geo_city_translation` (`id`, `translatable_id`, `name`, `slug`, `locale`) VALUES
	(11, 6, 'Paris', 'paris', 'en'),
	(12, 6, 'Paris', 'paris', 'fr'),
	(13, 7, 'Villeurbanne', 'villeurbanne', 'en'),
	(14, 7, 'Villeurbanne', 'villeurbanne', 'fr'),
	(15, 8, 'Bordeaux', 'bordeaux', 'en'),
	(16, 8, 'Bordeaux', 'bordeaux', 'fr'),
	(17, 9, 'Limoges', 'limoges', 'en'),
	(18, 9, 'Limoges', 'limoges', 'fr'),
	(19, 10, 'Brest', 'brest', 'en'),
	(20, 10, 'Brest', 'brest', 'fr');
/*!40000 ALTER TABLE `geo_city_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_coordinate
CREATE TABLE IF NOT EXISTS `geo_coordinate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `lat` decimal(11,7) NOT NULL,
  `lng` decimal(11,7) NOT NULL,
  `zip` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B2E13D99F92F3E70` (`country_id`),
  KEY `IDX_B2E13D99BD0F409C` (`area_id`),
  KEY `IDX_B2E13D99AE80F5DF` (`department_id`),
  KEY `IDX_B2E13D998BAC62AF` (`city_id`),
  KEY `coordinate_idx` (`lat`,`lng`),
  CONSTRAINT `FK_B2E13D998BAC62AF` FOREIGN KEY (`city_id`) REFERENCES `geo_city` (`id`),
  CONSTRAINT `FK_B2E13D99AE80F5DF` FOREIGN KEY (`department_id`) REFERENCES `geo_department` (`id`),
  CONSTRAINT `FK_B2E13D99BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `geo_area` (`id`),
  CONSTRAINT `FK_B2E13D99F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_coordinate : ~7 rows (environ)
/*!40000 ALTER TABLE `geo_coordinate` DISABLE KEYS */;
INSERT INTO `geo_coordinate` (`id`, `country_id`, `area_id`, `department_id`, `city_id`, `lat`, `lng`, `zip`, `route`, `street_number`, `address`, `createdAt`, `updatedAt`) VALUES
	(6, 6, 6, 6, 6, 48.8697174, 2.3509855, '75002', 'Rue de la Lune', '9', '9 Rue de la Lune, 75002 Paris, France', '2019-03-19 15:56:36', '2019-03-19 15:56:36'),
	(7, 6, 6, 6, 6, 48.8840194, 2.3299259, '75009', 'Boulevard de Clichy', '77', '77 Boulevard de Clichy, 75009 Paris, France', '2019-03-20 14:39:14', '2019-03-20 14:39:14'),
	(8, 6, 7, 7, 7, 45.7638450, 4.8701420, '69100', 'Cours Tolstoï', '1', '1 Cours Tolstoï, 69100 Villeurbanne, France', '2019-03-21 14:17:55', '2019-03-21 14:17:55'),
	(9, 6, 8, 8, 8, 44.8487589, -0.5807822, '33000', 'Rue Emile Zola', '12', '12 Rue Emile Zola, 33000 Bordeaux, France', '2019-03-21 14:57:21', '2019-03-21 14:57:21'),
	(10, 6, 8, 9, 9, 45.7988984, 1.2650314, '87000', 'Allée Marguerite Gènes', '5', '5 Allée Marguerite Gènes, 87000 Limoges, France', '2019-03-21 15:06:57', '2019-03-21 15:06:57'),
	(11, 6, 9, 10, 10, 48.3928138, -4.5176571, '29200', 'Rue Jean Paul Sartre', '3', '3 Rue Jean Paul Sartre, 29200 Brest, France', '2019-03-21 15:12:27', '2019-03-21 15:12:27'),
	(12, 6, 9, 10, 10, 48.4143206, -4.4983428, '29200', 'Rue César Franck', '7', '7 Rue César Franck, 29200 Brest, France', '2019-03-21 15:15:00', '2019-03-21 15:15:00');
/*!40000 ALTER TABLE `geo_coordinate` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_country
CREATE TABLE IF NOT EXISTS `geo_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `geocoding_id` int(11) DEFAULT NULL,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E46544643A405C9` (`geocoding_id`),
  KEY `code_idx` (`code`),
  CONSTRAINT `FK_E46544643A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_country : ~1 rows (environ)
/*!40000 ALTER TABLE `geo_country` DISABLE KEYS */;
INSERT INTO `geo_country` (`id`, `geocoding_id`, `code`) VALUES
	(6, 4, 'FR');
/*!40000 ALTER TABLE `geo_country` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_country_translation
CREATE TABLE IF NOT EXISTS `geo_country_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_country_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_F705D5582C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_F705D5582C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_country_translation : ~2 rows (environ)
/*!40000 ALTER TABLE `geo_country_translation` DISABLE KEYS */;
INSERT INTO `geo_country_translation` (`id`, `translatable_id`, `name`, `slug`, `locale`) VALUES
	(11, 6, 'France', 'france', 'en'),
	(12, 6, 'France', 'france', 'fr');
/*!40000 ALTER TABLE `geo_country_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_department
CREATE TABLE IF NOT EXISTS `geo_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `geocoding_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B46066043A405C9` (`geocoding_id`),
  KEY `IDX_B4606604F92F3E70` (`country_id`),
  KEY `IDX_B4606604BD0F409C` (`area_id`),
  CONSTRAINT `FK_B46066043A405C9` FOREIGN KEY (`geocoding_id`) REFERENCES `geo_geocoding` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_B4606604BD0F409C` FOREIGN KEY (`area_id`) REFERENCES `geo_area` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_B4606604F92F3E70` FOREIGN KEY (`country_id`) REFERENCES `geo_country` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_department : ~5 rows (environ)
/*!40000 ALTER TABLE `geo_department` DISABLE KEYS */;
INSERT INTO `geo_department` (`id`, `country_id`, `area_id`, `geocoding_id`) VALUES
	(6, 6, 6, 2),
	(7, 6, 7, 6),
	(8, 6, 8, 8),
	(9, 6, 8, 12),
	(10, 6, 9, 14);
/*!40000 ALTER TABLE `geo_department` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_department_translation
CREATE TABLE IF NOT EXISTS `geo_department_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `geo_department_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_95DC05742C2AC5D3` (`translatable_id`),
  KEY `name_gdt_idx` (`name`),
  CONSTRAINT `FK_95DC05742C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `geo_department` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_department_translation : ~10 rows (environ)
/*!40000 ALTER TABLE `geo_department_translation` DISABLE KEYS */;
INSERT INTO `geo_department_translation` (`id`, `translatable_id`, `name`, `slug`, `locale`) VALUES
	(11, 6, 'Paris', 'paris', 'en'),
	(12, 6, 'Paris', 'paris', 'fr'),
	(13, 7, 'Rhône', 'rhone', 'en'),
	(14, 7, 'Rhône', 'rhone', 'fr'),
	(15, 8, 'Gironde', 'gironde', 'en'),
	(16, 8, 'Gironde', 'gironde', 'fr'),
	(17, 9, 'Haute-Vienne', 'haute-vienne', 'en'),
	(18, 9, 'Haute-Vienne', 'haute-vienne', 'fr'),
	(19, 10, 'Finistère', 'finistere', 'en'),
	(20, 10, 'Finistère', 'finistere', 'fr');
/*!40000 ALTER TABLE `geo_department_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. geo_geocoding
CREATE TABLE IF NOT EXISTS `geo_geocoding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lat` decimal(11,7) NOT NULL,
  `lng` decimal(11,7) NOT NULL,
  `viewport` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_type` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.geo_geocoding : ~15 rows (environ)
/*!40000 ALTER TABLE `geo_geocoding` DISABLE KEYS */;
INSERT INTO `geo_geocoding` (`id`, `lat`, `lng`, `viewport`, `address_type`) VALUES
	(1, 48.8566140, 2.3522219, '((48.815573, 2.224199), (48.9021449, 2.4699208))', 'locality,political'),
	(2, 48.8566140, 2.3522219, '((48.815573, 2.224199), (48.9021449, 2.4699208))', 'locality,political'),
	(3, 48.8499198, 2.6370411, '((48.1200811, 1.4461699999999), (49.241504, 3.5590069))', 'administrative_area_level_1,political'),
	(4, 46.2276380, 2.2137490, '((41.31433, -5.5590999999999), (51.1241999, 9.6624999000001))', 'country,political'),
	(5, 45.7719440, 4.8901709, '((45.7484471, 4.858424), (45.795069, 4.9212289))', 'locality,political'),
	(6, 45.7351456, 4.6108043, '((45.45413, 4.243647), (46.306502, 5.1601089000001))', 'administrative_area_level_2,political'),
	(7, 45.4471431, 4.3852507, '((44.115493, 2.0628819999999), (46.804293, 7.1855661))', 'administrative_area_level_1,political'),
	(8, 44.8496650, -0.4502368, '((44.1939019, -1.2614241), (45.573636, 0.31513700000005))', 'administrative_area_level_2,political'),
	(9, 44.8377890, -0.5791800, '((44.810752, -0.63897299999996), (44.9167039, -0.53330900000003))', 'locality,political'),
	(10, 45.7087182, 0.6268910, '((42.777531, -1.7923251), (47.17599, 2.6112931))', 'administrative_area_level_1,political'),
	(11, 45.8336190, 1.2611050, '((45.788675, 1.146249), (45.928607, 1.317546))', 'locality,political'),
	(12, 45.7435173, 1.4025484, '((45.43663, 0.62924999999996), (46.401586, 1.9110789))', 'administrative_area_level_2,political'),
	(13, 48.3903940, -4.4860760, '((48.3572541, -4.5689391), (48.459562, -4.4302620999999))', 'locality,political'),
	(14, 48.2520249, -3.9300525, '((47.701242, -5.1412921), (48.7535, -3.3866189))', 'administrative_area_level_2,political'),
	(15, 48.2020471, -2.9326435, '((47.2778529, -5.1412921), (48.9009421, -1.015621))', 'administrative_area_level_1,political');
/*!40000 ALTER TABLE `geo_geocoding` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. group
CREATE TABLE IF NOT EXISTS `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.group : ~0 rows (environ)
/*!40000 ALTER TABLE `group` DISABLE KEYS */;
/*!40000 ALTER TABLE `group` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. lexik_currency
CREATE TABLE IF NOT EXISTS `lexik_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `rate` decimal(10,4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.lexik_currency : ~4 rows (environ)
/*!40000 ALTER TABLE `lexik_currency` DISABLE KEYS */;
INSERT INTO `lexik_currency` (`id`, `code`, `rate`) VALUES
	(57, 'EUR', 1.0000),
	(58, 'USD', 1.1358),
	(59, 'JPY', 126.5900),
	(60, 'GBP', 0.8555),
	(61, 'CHF', 1.1353),
	(62, 'RUB', 73.1062),
	(63, 'AUD', 1.5986),
	(64, 'CAD', 1.5060);
/*!40000 ALTER TABLE `lexik_currency` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing
CREATE TABLE IF NOT EXISTS `listing` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `type` smallint(6) DEFAULT NULL,
  `price` decimal(8,0) NOT NULL,
  `certified` tinyint(1) DEFAULT NULL,
  `min_duration` smallint(6) DEFAULT NULL,
  `max_duration` smallint(6) DEFAULT NULL,
  `cancellation_policy` smallint(6) NOT NULL,
  `average_rating` smallint(6) DEFAULT NULL,
  `comment_count` int(11) DEFAULT NULL,
  `admin_notation` decimal(3,1) DEFAULT NULL,
  `availabilities_updated_at` datetime DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `price_labour` decimal(8,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CB0048D464D218E` (`location_id`),
  KEY `IDX_CB0048D4A76ED395` (`user_id`),
  KEY `created_at_l_idx` (`createdAt`),
  KEY `status_l_idx` (`status`),
  KEY `price_idx` (`price`),
  KEY `type_idx` (`type`),
  KEY `min_duration_idx` (`min_duration`),
  KEY `max_duration_idx` (`max_duration`),
  KEY `average_rating_idx` (`average_rating`),
  KEY `admin_notation_idx` (`admin_notation`),
  CONSTRAINT `FK_CB0048D464D218E` FOREIGN KEY (`location_id`) REFERENCES `listing_location` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_CB0048D4A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing : ~9 rows (environ)
/*!40000 ALTER TABLE `listing` DISABLE KEYS */;
INSERT INTO `listing` (`id`, `user_id`, `location_id`, `status`, `type`, `price`, `certified`, `min_duration`, `max_duration`, `cancellation_policy`, `average_rating`, `comment_count`, `admin_notation`, `availabilities_updated_at`, `createdAt`, `updatedAt`, `price_labour`) VALUES
	(107773222, 1178039886, 8, 2, NULL, 260, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-20 14:39:14', '2019-03-20 14:39:14', NULL),
	(430013419, 1178039886, 7, 2, NULL, 120, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-20 14:38:30', '2019-03-20 14:38:30', NULL),
	(650204970, 1178039886, 11, 2, NULL, 120, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-21 14:57:21', '2019-03-21 15:11:43', 170),
	(727435100, 1178039886, 10, 2, NULL, 100, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-21 14:17:55', '2019-03-26 09:29:06', 50),
	(982545444, 1178039886, 12, 2, NULL, 120, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-21 15:06:57', '2019-03-21 15:06:57', 80),
	(1476892739, 1178039886, 14, 2, NULL, 300, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-21 15:15:00', '2019-03-27 10:50:54', 80),
	(1636628131, 1178039886, 6, 2, NULL, 10000, 1, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-19 15:56:36', '2019-03-19 15:56:36', NULL),
	(1991717083, 1178039886, 13, 2, NULL, 200, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-21 15:12:26', '2019-03-21 15:14:12', 700),
	(2063367781, 1178039886, 9, 2, NULL, 100, NULL, NULL, NULL, 1, NULL, 0, NULL, NULL, '2019-03-21 09:50:03', '2019-03-21 09:50:03', NULL);
/*!40000 ALTER TABLE `listing` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_category
CREATE TABLE IF NOT EXISTS `listing_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `root` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E0307BBB727ACA70` (`parent_id`),
  CONSTRAINT `FK_E0307BBB727ACA70` FOREIGN KEY (`parent_id`) REFERENCES `listing_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_category : ~10 rows (environ)
/*!40000 ALTER TABLE `listing_category` DISABLE KEYS */;
INSERT INTO `listing_category` (`id`, `parent_id`, `lft`, `lvl`, `rgt`, `root`) VALUES
	(64, NULL, 1, 0, 10, 64),
	(65, 64, 2, 1, 3, 64),
	(66, 64, 4, 1, 5, 64),
	(67, NULL, 1, 0, 10, 67),
	(68, 67, 4, 1, 5, 67),
	(69, 67, 2, 1, 3, 67),
	(70, 67, 6, 1, 7, 67),
	(71, NULL, 1, 0, 2, 71),
	(72, 64, 6, 1, 7, 64),
	(73, 64, 8, 1, 9, 64),
	(74, 67, 8, 1, 9, 67);
/*!40000 ALTER TABLE `listing_category` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_category_translation
CREATE TABLE IF NOT EXISTS `listing_category_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_category_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_606EDC1F2C2AC5D3` (`translatable_id`),
  KEY `name_idx` (`name`),
  CONSTRAINT `FK_606EDC1F2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_category_translation : ~28 rows (environ)
/*!40000 ALTER TABLE `listing_category_translation` DISABLE KEYS */;
INSERT INTO `listing_category_translation` (`id`, `translatable_id`, `name`, `slug`, `locale`) VALUES
	(1, 1, 'Category1', 'category1', 'en'),
	(2, 1, 'Température ambiante', 'temperature-ambiante-2', 'fr'),
	(7, 4, 'Category2', 'category2', 'en'),
	(8, 4, 'Froid positif', 'froid-positif-8', 'fr'),
	(15, 8, 'Froid négatif', 'froid-negatif', 'fr'),
	(16, 9, 'Extérieur', 'exterieur', 'fr'),
	(127, 64, 'Empty warehouses', 'empty-warehouses-127', 'en'),
	(128, 64, 'Entrepôts libres', 'entrepots-libres-128', 'fr'),
	(129, 65, 'Dry strorage', 'dry-strorage-129', 'en'),
	(130, 65, 'Température ambiante', 'temperature-ambiante-130', 'fr'),
	(131, 66, 'Cold storage', 'cold-storage-131', 'en'),
	(132, 66, 'Entrepôts réfrigérés', 'entrepots-refrigeres-132', 'fr'),
	(133, 67, 'Logistics areas', 'logistics-areas-133', 'en'),
	(134, 67, 'Surfaces logistiques', 'surfaces-logistiques-134', 'fr'),
	(135, 68, 'Dry storage', 'dry-storage-135', 'en'),
	(136, 68, 'Température ambiante', 'temperature-ambiante-136', 'fr'),
	(137, 69, 'Cold storage', 'cold-storage-137', 'en'),
	(138, 69, 'Entrepôts réfrigérés', 'entrepots-refrigeres-138', 'fr'),
	(139, 70, 'Frozen storage', 'frozen-storage-139', 'en'),
	(140, 70, 'Entrepôts surgelés', 'entrepots-surgeles-140', 'fr'),
	(141, 71, 'Global logistics', 'global-logistics', 'en'),
	(142, 71, 'Prestations logistiques', 'prestations-logistiques', 'fr'),
	(143, 72, 'Frozen storage', 'frozen-storage-143', 'en'),
	(144, 72, 'Entrepôts surgelés', 'entrepots-surgeles-144', 'fr'),
	(145, 73, 'Outdoor storage', 'outdoor-storage', 'en'),
	(146, 73, 'Zones extérieures', 'zones-exterieures', 'fr'),
	(147, 74, 'Outdoor storage', 'outdoor-storage', 'en'),
	(148, 74, 'Zones extérieures', 'zones-exterieures', 'fr');
/*!40000 ALTER TABLE `listing_category_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_characteristic
CREATE TABLE IF NOT EXISTS `listing_characteristic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_characteristic_type_id` int(11) NOT NULL,
  `listing_characteristic_group_id` int(11) NOT NULL,
  `position` smallint(6) NOT NULL,
  `isfilter` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `IDX_97E210EC3A0F8087` (`listing_characteristic_type_id`),
  KEY `IDX_97E210ECE4714E36` (`listing_characteristic_group_id`),
  KEY `position_idx` (`position`),
  CONSTRAINT `FK_97E210EC3A0F8087` FOREIGN KEY (`listing_characteristic_type_id`) REFERENCES `listing_characteristic_type` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_97E210ECE4714E36` FOREIGN KEY (`listing_characteristic_group_id`) REFERENCES `listing_characteristic_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_characteristic : ~33 rows (environ)
/*!40000 ALTER TABLE `listing_characteristic` DISABLE KEYS */;
INSERT INTO `listing_characteristic` (`id`, `listing_characteristic_type_id`, `listing_characteristic_group_id`, `position`, `isfilter`) VALUES
	(5, 4, 3, 1, 0),
	(6, 4, 3, 2, 0),
	(9, 4, 3, 3, 0),
	(10, 4, 3, 4, 0),
	(11, 4, 3, 5, 0),
	(12, 4, 3, 6, 0),
	(13, 4, 3, 7, 0),
	(14, 4, 3, 8, 0),
	(15, 4, 4, 9, 0),
	(16, 4, 4, 10, 0),
	(17, 4, 4, 11, 0),
	(18, 4, 4, 12, 0),
	(19, 4, 5, 13, 0),
	(20, 4, 5, 14, 0),
	(21, 4, 5, 15, 0),
	(22, 4, 4, 16, 0),
	(23, 4, 4, 17, 0),
	(24, 4, 4, 18, 0),
	(25, 4, 4, 19, 0),
	(26, 6, 6, 20, 0),
	(27, 7, 6, 21, 0),
	(28, 4, 5, 22, 0),
	(29, 4, 5, 23, 0),
	(30, 8, 6, 24, 0),
	(31, 4, 3, 25, 0),
	(32, 9, 6, 26, 0),
	(34, 4, 7, 27, 0),
	(35, 4, 7, 28, 0),
	(36, 4, 7, 29, 0),
	(37, 4, 7, 30, 0),
	(38, 4, 7, 31, 0),
	(39, 4, 7, 32, 0),
	(40, 4, 7, 33, 0);
/*!40000 ALTER TABLE `listing_characteristic` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_characteristic_group
CREATE TABLE IF NOT EXISTS `listing_characteristic_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_62B4C3E4462CE4F5` (`position`),
  KEY `position_lcg_idx` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_characteristic_group : ~5 rows (environ)
/*!40000 ALTER TABLE `listing_characteristic_group` DISABLE KEYS */;
INSERT INTO `listing_characteristic_group` (`id`, `position`) VALUES
	(6, 1),
	(3, 2),
	(4, 3),
	(5, 5),
	(7, 6);
/*!40000 ALTER TABLE `listing_characteristic_group` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_characteristic_group_translation
CREATE TABLE IF NOT EXISTS `listing_characteristic_group_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_characteristic_group_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_6C8407162C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_6C8407162C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_characteristic_group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_characteristic_group_translation : ~11 rows (environ)
/*!40000 ALTER TABLE `listing_characteristic_group_translation` DISABLE KEYS */;
INSERT INTO `listing_characteristic_group_translation` (`id`, `translatable_id`, `name`, `locale`) VALUES
	(5, 3, 'Group_1', 'en'),
	(6, 3, 'Prestations', 'fr'),
	(7, 4, 'Group_2', 'en'),
	(8, 4, 'Equipements', 'fr'),
	(9, 5, 'Sécurité', 'fr'),
	(10, 6, 'Informations générales', 'fr'),
	(11, 7, 'Certifications', 'fr'),
	(21, 11, 'Group_1', 'en'),
	(22, 11, 'Groupe_1', 'fr'),
	(23, 12, 'Group_2', 'en'),
	(24, 12, 'Groupe_2', 'fr');
/*!40000 ALTER TABLE `listing_characteristic_group_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_characteristic_translation
CREATE TABLE IF NOT EXISTS `listing_characteristic_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_characteristic_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_945E8F882C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_945E8F882C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_characteristic` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_characteristic_translation : ~36 rows (environ)
/*!40000 ALTER TABLE `listing_characteristic_translation` DISABLE KEYS */;
INSERT INTO `listing_characteristic_translation` (`id`, `translatable_id`, `name`, `description`, `locale`) VALUES
	(9, 5, 'Characteristic_1', 'Characteristic_1 description', 'en'),
	(10, 5, 'Gestion palettes homogènes', NULL, 'fr'),
	(11, 6, 'Characteristic_2', 'Characteristic_2 description', 'en'),
	(12, 6, 'Gestion palettes hétérogènes', NULL, 'fr'),
	(17, 9, 'Picking colis', NULL, 'fr'),
	(18, 10, 'Picking piece', NULL, 'fr'),
	(19, 11, 'Co-packing', NULL, 'fr'),
	(20, 12, 'Messagerie', NULL, 'fr'),
	(21, 13, 'Palletisation', NULL, 'fr'),
	(22, 14, 'Tansport', NULL, 'fr'),
	(23, 15, 'Filmeuse', NULL, 'fr'),
	(24, 16, 'Chariot frontal', NULL, 'fr'),
	(25, 17, 'Chariot rétractable', NULL, 'fr'),
	(26, 18, 'Nacelle', NULL, 'fr'),
	(27, 19, 'Sprinklage', NULL, 'fr'),
	(28, 20, 'Vidéosurveillance', NULL, 'fr'),
	(29, 21, 'Gardiennage', NULL, 'fr'),
	(30, 22, 'Chariot à longues fourches', NULL, 'fr'),
	(31, 23, 'Chariot à pince', NULL, 'fr'),
	(32, 24, 'Transpalette', NULL, 'fr'),
	(33, 25, 'Transpalette électrique', NULL, 'fr'),
	(34, 26, 'Type d\'entrepôt', NULL, 'fr'),
	(35, 27, 'Classe d\'entrepôt', NULL, 'fr'),
	(36, 28, 'Alarme', NULL, 'fr'),
	(37, 29, 'Poste de garde', NULL, 'fr'),
	(38, 30, 'Surface', NULL, 'fr'),
	(39, 31, 'Crossdock', NULL, 'fr'),
	(40, 32, 'Jours d\'ouverture', NULL, 'fr'),
	(41, 21, 'Characteristic_1', 'Characteristic_1 description', 'en'),
	(42, 34, 'ISO 9001', NULL, 'fr'),
	(43, 35, 'ISO 14001', NULL, 'fr'),
	(44, 36, 'OHSAS 18001', NULL, 'fr'),
	(45, 37, 'ICPE 1510', NULL, 'fr'),
	(46, 38, 'ICPE 1530', NULL, 'fr'),
	(47, 39, 'ICPE 2662', NULL, 'fr'),
	(48, 40, 'ICPE 2663', NULL, 'fr');
/*!40000 ALTER TABLE `listing_characteristic_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_characteristic_type
CREATE TABLE IF NOT EXISTS `listing_characteristic_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_characteristic_type : ~9 rows (environ)
/*!40000 ALTER TABLE `listing_characteristic_type` DISABLE KEYS */;
INSERT INTO `listing_characteristic_type` (`id`, `name`) VALUES
	(4, 'Yes/No'),
	(5, 'Quantity'),
	(6, 'Type d\'entrepôt'),
	(7, 'Classes d\'entrepôts'),
	(8, 'Surface'),
	(9, 'Jours d\'ouverture'),
	(28, 'Yes/No'),
	(29, 'Quantity'),
	(30, 'Custom_1');
/*!40000 ALTER TABLE `listing_characteristic_type` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_characteristic_value
CREATE TABLE IF NOT EXISTS `listing_characteristic_value` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_characteristic_type_id` int(11) NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1203DF153A0F8087` (`listing_characteristic_type_id`),
  KEY `position_lcv_idx` (`position`),
  CONSTRAINT `FK_1203DF153A0F8087` FOREIGN KEY (`listing_characteristic_type_id`) REFERENCES `listing_characteristic_type` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_characteristic_value : ~126 rows (environ)
/*!40000 ALTER TABLE `listing_characteristic_value` DISABLE KEYS */;
INSERT INTO `listing_characteristic_value` (`id`, `listing_characteristic_type_id`, `position`) VALUES
	(8, 4, 1),
	(9, 4, 2),
	(10, 5, 1),
	(11, 5, 2),
	(12, 5, 3),
	(13, 6, 1),
	(14, 6, 2),
	(15, 6, 3),
	(16, 6, 4),
	(17, 6, 5),
	(18, 7, 1),
	(19, 7, 1),
	(20, 7, 1),
	(21, 8, 1),
	(22, 8, 2),
	(23, 8, 3),
	(24, 8, 4),
	(25, 8, 5),
	(26, 8, 6),
	(27, 8, 7),
	(28, 8, 8),
	(29, 8, 9),
	(30, 8, 10),
	(31, 8, 11),
	(32, 8, 12),
	(33, 8, 13),
	(34, 8, 14),
	(35, 8, 15),
	(36, 8, 16),
	(37, 8, 17),
	(38, 8, 18),
	(39, 8, 19),
	(40, 8, 20),
	(41, 8, 21),
	(42, 8, 22),
	(43, 8, 23),
	(44, 8, 24),
	(45, 8, 25),
	(46, 8, 26),
	(47, 8, 27),
	(48, 8, 28),
	(49, 8, 29),
	(50, 8, 30),
	(51, 8, 31),
	(52, 8, 32),
	(53, 8, 33),
	(54, 8, 34),
	(55, 8, 35),
	(56, 8, 36),
	(57, 8, 37),
	(58, 8, 38),
	(59, 8, 39),
	(60, 8, 40),
	(61, 8, 41),
	(62, 8, 42),
	(63, 8, 43),
	(64, 8, 44),
	(65, 8, 45),
	(66, 8, 46),
	(67, 8, 47),
	(68, 8, 48),
	(69, 8, 49),
	(70, 8, 50),
	(71, 8, 51),
	(72, 8, 52),
	(73, 8, 53),
	(74, 8, 54),
	(75, 8, 55),
	(76, 8, 56),
	(77, 8, 57),
	(78, 8, 58),
	(79, 8, 59),
	(80, 8, 60),
	(81, 8, 61),
	(82, 8, 62),
	(83, 8, 63),
	(84, 8, 64),
	(85, 8, 65),
	(86, 8, 66),
	(87, 8, 67),
	(88, 8, 68),
	(89, 8, 69),
	(90, 8, 70),
	(91, 8, 71),
	(92, 8, 72),
	(93, 8, 73),
	(94, 8, 74),
	(95, 8, 75),
	(96, 8, 76),
	(97, 8, 77),
	(98, 8, 78),
	(99, 8, 79),
	(100, 8, 80),
	(101, 8, 81),
	(102, 8, 82),
	(103, 8, 83),
	(104, 8, 84),
	(105, 8, 85),
	(106, 8, 86),
	(107, 8, 87),
	(108, 8, 88),
	(109, 8, 89),
	(110, 8, 90),
	(111, 8, 91),
	(112, 8, 92),
	(113, 8, 93),
	(114, 8, 94),
	(115, 8, 95),
	(116, 8, 96),
	(117, 8, 97),
	(118, 8, 98),
	(119, 8, 99),
	(120, 8, 100),
	(121, 8, 101),
	(122, 8, 102),
	(123, 8, 103),
	(124, 8, 104),
	(125, 8, 105),
	(126, 8, 106),
	(127, 8, 107),
	(128, 8, 108),
	(129, 8, 109),
	(130, 8, 110),
	(131, 9, 1),
	(132, 9, 2),
	(133, 9, 3);
/*!40000 ALTER TABLE `listing_characteristic_value` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_characteristic_value_translation
CREATE TABLE IF NOT EXISTS `listing_characteristic_value_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_characteristic_value_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_8BC9A0F42C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_8BC9A0F42C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing_characteristic_value` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_characteristic_value_translation : ~131 rows (environ)
/*!40000 ALTER TABLE `listing_characteristic_value_translation` DISABLE KEYS */;
INSERT INTO `listing_characteristic_value_translation` (`id`, `translatable_id`, `name`, `locale`) VALUES
	(15, 8, 'Yes', 'en'),
	(16, 8, 'Oui', 'fr'),
	(17, 9, 'No', 'en'),
	(18, 9, 'Non', 'fr'),
	(19, 10, '1', 'en'),
	(20, 10, '1', 'fr'),
	(21, 11, '2', 'en'),
	(22, 11, '2', 'fr'),
	(23, 12, '3', 'en'),
	(24, 12, '3', 'fr'),
	(25, 13, 'Logistique', 'fr'),
	(26, 14, 'Transporteur', 'fr'),
	(27, 15, 'Industriel', 'fr'),
	(28, 16, 'Distributeur', 'fr'),
	(29, 17, 'Frigorifique', 'fr'),
	(30, 18, 'A', 'fr'),
	(31, 19, 'B', 'fr'),
	(32, 20, 'C', 'fr'),
	(33, 21, '100 m²', 'fr'),
	(34, 22, '200 m²', 'fr'),
	(35, 23, '300 m²', 'fr'),
	(36, 24, '400 m²', 'fr'),
	(37, 25, '500 m²', 'fr'),
	(38, 26, '600 m²', 'fr'),
	(39, 27, '700 m²', 'fr'),
	(40, 28, '800 m²', 'fr'),
	(41, 29, '900 m²', 'fr'),
	(42, 30, '1 000 m²', 'fr'),
	(43, 31, '2 000 m²', 'fr'),
	(44, 32, '3 000 m²', 'fr'),
	(45, 33, '4 000 m²', 'fr'),
	(46, 34, '5 000 m²', 'fr'),
	(47, 35, '6 000 m²', 'fr'),
	(48, 36, '7 000 m²', 'fr'),
	(49, 37, '8 000 m²', 'fr'),
	(50, 38, '9 000 m²', 'fr'),
	(51, 39, '10 000 m²', 'fr'),
	(52, 40, '11 000 m²', 'fr'),
	(53, 41, '12 000 m²', 'fr'),
	(54, 42, '13 000 m²', 'fr'),
	(55, 43, '14 000 m²', 'fr'),
	(56, 44, '15 000 m²', 'fr'),
	(57, 45, '16 000 m²', 'fr'),
	(58, 46, '17 000 m²', 'fr'),
	(59, 47, '18 000 m²', 'fr'),
	(60, 48, '19 000 m²', 'fr'),
	(61, 49, '20 000 m²', 'fr'),
	(62, 50, '21 000 m²', 'fr'),
	(63, 51, '22 000 m²', 'fr'),
	(64, 52, '23 000 m²', 'fr'),
	(65, 53, '24 000 m²', 'fr'),
	(66, 54, '25 000 m²', 'fr'),
	(67, 55, '26 000 m²', 'fr'),
	(68, 56, '27 000 m²', 'fr'),
	(69, 57, '28 000 m²', 'fr'),
	(70, 58, '29 000 m²', 'fr'),
	(71, 59, '30 000 m²', 'fr'),
	(72, 60, '31 000 m²', 'fr'),
	(73, 61, '32 000 m²', 'fr'),
	(74, 62, '33 000 m²', 'fr'),
	(75, 63, '34 000 m²', 'fr'),
	(76, 64, '35 000 m²', 'fr'),
	(77, 65, '36 000 m²', 'fr'),
	(78, 66, '37 000 m²', 'fr'),
	(79, 67, '38 000 m²', 'fr'),
	(80, 68, '39 000 m²', 'fr'),
	(81, 69, '40 000 m²', 'fr'),
	(82, 70, '41 000 m²', 'fr'),
	(83, 71, '42 000 m²', 'fr'),
	(84, 72, '43 000 m²', 'fr'),
	(85, 73, '44 000 m²', 'fr'),
	(86, 74, '45 000 m²', 'fr'),
	(87, 75, '46 000 m²', 'fr'),
	(88, 76, '47 000 m²', 'fr'),
	(89, 77, '48 000 m²', 'fr'),
	(90, 78, '49 000 m²', 'fr'),
	(91, 79, '50 000 m²', 'fr'),
	(92, 80, '51 000 m²', 'fr'),
	(93, 81, '52 000 m²', 'fr'),
	(94, 82, '53 000 m²', 'fr'),
	(95, 83, '54 000 m²', 'fr'),
	(96, 84, '55 000 m²', 'fr'),
	(97, 85, '56 000 m²', 'fr'),
	(98, 86, '57 000 m²', 'fr'),
	(99, 87, '58 000 m²', 'fr'),
	(100, 88, '59 000 m²', 'fr'),
	(101, 89, '60 000 m²', 'fr'),
	(102, 90, '61 000 m²', 'fr'),
	(103, 91, '62 000 m²', 'fr'),
	(104, 92, '63 000 m²', 'fr'),
	(105, 93, '64 000 m²', 'fr'),
	(106, 94, '65 000 m²', 'fr'),
	(107, 95, '66 000 m²', 'fr'),
	(108, 96, '67 000 m²', 'fr'),
	(109, 97, '68 000 m²', 'fr'),
	(110, 98, '69 000 m²', 'fr'),
	(111, 99, '70 000 m²', 'fr'),
	(112, 100, '71 000 m²', 'fr'),
	(113, 101, '72 000 m²', 'fr'),
	(114, 102, '73 000 m²', 'fr'),
	(115, 103, '74 000 m²', 'fr'),
	(116, 104, '75 000 m²', 'fr'),
	(117, 105, '76 000 m²', 'fr'),
	(118, 106, '77 000 m²', 'fr'),
	(119, 107, '78 000 m²', 'fr'),
	(120, 108, '79 000 m²', 'fr'),
	(121, 109, '80 000 m²', 'fr'),
	(122, 110, '81 000 m²', 'fr'),
	(123, 111, '82 000 m²', 'fr'),
	(124, 112, '83 000 m²', 'fr'),
	(125, 113, '84 000 m²', 'fr'),
	(126, 114, '85 000 m²', 'fr'),
	(127, 115, '86 000 m²', 'fr'),
	(128, 116, '87 000 m²', 'fr'),
	(129, 117, '88 000 m²', 'fr'),
	(130, 118, '89 000 m²', 'fr'),
	(131, 119, '90 000 m²', 'fr'),
	(132, 120, '91 000 m²', 'fr'),
	(133, 121, '92 000 m²', 'fr'),
	(134, 122, '93 000 m²', 'fr'),
	(135, 123, '94 000 m²', 'fr'),
	(136, 124, '95 000 m²', 'fr'),
	(137, 125, '96 000 m²', 'fr'),
	(138, 126, '97 000 m²', 'fr'),
	(139, 127, '98 000 m²', 'fr'),
	(140, 128, '99 000 m²', 'fr'),
	(141, 129, '100 000 m²', 'fr'),
	(142, 130, '+ 100 000 m²', 'fr'),
	(143, 131, '5j/7', 'fr'),
	(144, 132, '6j/7', 'fr'),
	(145, 133, '7j/7', 'fr');
/*!40000 ALTER TABLE `listing_characteristic_value_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_discount
CREATE TABLE IF NOT EXISTS `listing_discount` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `discount` smallint(6) NOT NULL,
  `from_quantity` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `discount_unique` (`listing_id`,`from_quantity`),
  KEY `IDX_79CD674D4619D1A` (`listing_id`),
  KEY `discount_idx` (`discount`),
  KEY `from_quantity_idx` (`from_quantity`),
  CONSTRAINT `FK_79CD674D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_discount : ~0 rows (environ)
/*!40000 ALTER TABLE `listing_discount` DISABLE KEYS */;
/*!40000 ALTER TABLE `listing_discount` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_image
CREATE TABLE IF NOT EXISTS `listing_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_33D3DCD3D4619D1A` (`listing_id`),
  KEY `position_li_idx` (`position`),
  CONSTRAINT `FK_33D3DCD3D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_image : ~9 rows (environ)
/*!40000 ALTER TABLE `listing_image` DISABLE KEYS */;
INSERT INTO `listing_image` (`id`, `listing_id`, `name`, `position`) VALUES
	(13, 1636628131, 'default-listing.png', 1),
	(14, 1636628131, 'default-listing.png', 2),
	(15, 430013419, '91633576e797ecac2096f0bfbb75ebbb5aac6546.jpg', 1),
	(16, 107773222, 'ff7587b2df3f31a19042d68020a77e9bb2018aa3.jpg', 1),
	(17, 2063367781, 'ad9eb7ad61e3f0381dc3b2a1ea60962fe10a0471.jpg', 1),
	(18, 727435100, '72674ee158c05e1123fc1e486e1e377350253c67.jpg', 1),
	(19, 650204970, 'bf0f59d267270d8cb13ef51aa2aebee5ec369bba.jpg', 1),
	(20, 982545444, 'b14b3e922800ebf37e7e97b2da8ef3c7b01aaf76.jpg', 1),
	(21, 1991717083, 'b065a452c251f866eb02c555650c10e5684fe73e.jpg', 1),
	(22, 1476892739, '7029de89dbe00c7141fedb5fc4296b107775dff0.jpg', 1);
/*!40000 ALTER TABLE `listing_image` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_listing_category
CREATE TABLE IF NOT EXISTS `listing_listing_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `listing_category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_1AFD54EAD4619D1A` (`listing_id`),
  KEY `IDX_1AFD54EA455844B0` (`listing_category_id`),
  CONSTRAINT `FK_1AFD54EA455844B0` FOREIGN KEY (`listing_category_id`) REFERENCES `listing_category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_1AFD54EAD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_listing_category : ~8 rows (environ)
/*!40000 ALTER TABLE `listing_listing_category` DISABLE KEYS */;
INSERT INTO `listing_listing_category` (`id`, `listing_id`, `listing_category_id`) VALUES
	(6, 1636628131, 65),
	(7, 430013419, 69),
	(8, 107773222, 69),
	(9, 2063367781, 66),
	(10, 727435100, 65),
	(11, 650204970, 66),
	(12, 982545444, 65),
	(13, 1991717083, 65),
	(14, 1476892739, 65);
/*!40000 ALTER TABLE `listing_listing_category` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_listing_characteristic
CREATE TABLE IF NOT EXISTS `listing_listing_characteristic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) NOT NULL,
  `listing_characteristic_id` int(11) NOT NULL,
  `listing_characteristic_value_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2FD5B3B6D4619D1A` (`listing_id`),
  KEY `IDX_2FD5B3B6C27F7D66` (`listing_characteristic_id`),
  KEY `IDX_2FD5B3B6E3052CD3` (`listing_characteristic_value_id`),
  CONSTRAINT `FK_2FD5B3B6C27F7D66` FOREIGN KEY (`listing_characteristic_id`) REFERENCES `listing_characteristic` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FD5B3B6D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2FD5B3B6E3052CD3` FOREIGN KEY (`listing_characteristic_value_id`) REFERENCES `listing_characteristic_value` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_listing_characteristic : ~37 rows (environ)
/*!40000 ALTER TABLE `listing_listing_characteristic` DISABLE KEYS */;
INSERT INTO `listing_listing_characteristic` (`id`, `listing_id`, `listing_characteristic_id`, `listing_characteristic_value_id`) VALUES
	(21, 1636628131, 21, 36),
	(22, 1636628131, 22, 39),
	(23, 1636628131, 23, 41),
	(24, 1636628131, 24, 38),
	(25, 1476892739, 26, 15),
	(26, 1476892739, 27, 19),
	(27, 1476892739, 30, NULL),
	(28, 1476892739, 32, 131),
	(29, 1476892739, 5, 8),
	(30, 1476892739, 6, 9),
	(31, 1476892739, 9, 8),
	(32, 1476892739, 10, 8),
	(33, 1476892739, 11, NULL),
	(34, 1476892739, 12, NULL),
	(35, 1476892739, 13, 8),
	(36, 1476892739, 14, NULL),
	(37, 1476892739, 31, NULL),
	(38, 1476892739, 15, 8),
	(39, 1476892739, 16, NULL),
	(40, 1476892739, 17, NULL),
	(41, 1476892739, 18, NULL),
	(42, 1476892739, 22, 8),
	(43, 1476892739, 23, NULL),
	(44, 1476892739, 24, NULL),
	(45, 1476892739, 25, NULL),
	(46, 1476892739, 19, NULL),
	(47, 1476892739, 20, 8),
	(48, 1476892739, 21, NULL),
	(49, 1476892739, 28, NULL),
	(50, 1476892739, 29, NULL),
	(51, 1476892739, 34, 8),
	(52, 1476892739, 35, NULL),
	(53, 1476892739, 36, 9),
	(54, 1476892739, 37, NULL),
	(55, 1476892739, 38, NULL),
	(56, 1476892739, 39, NULL),
	(57, 1476892739, 40, 8);
/*!40000 ALTER TABLE `listing_listing_characteristic` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_location
CREATE TABLE IF NOT EXISTS `listing_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `coordinate_id` int(11) NOT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `route` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B8E2EBB1D4619D1A` (`listing_id`),
  KEY `IDX_B8E2EBB198BBE953` (`coordinate_id`),
  CONSTRAINT `FK_B8E2EBB198BBE953` FOREIGN KEY (`coordinate_id`) REFERENCES `geo_coordinate` (`id`),
  CONSTRAINT `FK_B8E2EBB1D4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_location : ~9 rows (environ)
/*!40000 ALTER TABLE `listing_location` DISABLE KEYS */;
INSERT INTO `listing_location` (`id`, `listing_id`, `coordinate_id`, `country`, `city`, `zip`, `route`, `street_number`) VALUES
	(6, 1636628131, 6, 'FR', 'Paris', '75002', 'rue de la Lune', '9'),
	(7, 430013419, 6, 'FR', 'Paris', '75002', 'Rue de la Lune', '9'),
	(8, 107773222, 7, 'FR', 'Paris', '75009', 'Boulevard de Clichy', '77'),
	(9, 2063367781, 7, 'FR', 'Paris', '75009', 'Boulevard de Clichy', '77'),
	(10, 727435100, 8, 'FR', 'Villeurbanne', '69100', 'Cours Tolstoï', '1'),
	(11, 650204970, 9, 'FR', 'Bordeaux', '33000', 'Rue Emile Zola', '12'),
	(12, 982545444, 10, 'FR', 'Limoges', '87000', 'Rue Jean-Paul Sartre', '12'),
	(13, 1991717083, 11, 'FR', 'Brest', '29200', 'Rue Jean Paul Sartre', '7'),
	(14, 1476892739, 12, 'FR', 'Brest', '29200', 'Rue César Franck', '7');
/*!40000 ALTER TABLE `listing_location` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. listing_translation
CREATE TABLE IF NOT EXISTS `listing_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rules` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `listing_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_E3779C3D2C2AC5D3` (`translatable_id`),
  KEY `slug_idx` (`slug`),
  CONSTRAINT `FK_E3779C3D2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.listing_translation : ~18 rows (environ)
/*!40000 ALTER TABLE `listing_translation` DISABLE KEYS */;
INSERT INTO `listing_translation` (`id`, `translatable_id`, `title`, `description`, `slug`, `locale`, `rules`) VALUES
	(11, 1636628131, 'Listing One', 'Listing One Description', 'listing-one-1636628131', 'en', NULL),
	(12, 1636628131, 'Annonce une', 'Description de l\'annonce une', 'annonce-une-1636628131', 'fr', NULL),
	(13, 430013419, 'Annonce 3', 'nice view', 'annonce-3-430013419', 'en', NULL),
	(14, 430013419, 'Annonce 2', 'description 2', 'annonce-2-430013419', 'fr', NULL),
	(15, 107773222, 'Annonce 3', 'ttt', 'annonce-3-107773222', 'en', NULL),
	(16, 107773222, 'Annonce 3', 'ttt', 'annonce-3-107773222', 'fr', NULL),
	(17, 2063367781, 'Dfdf', 'dfdf', 'dfdf-2063367781', 'en', NULL),
	(18, 2063367781, 'Ff', 'fdf', 'ff-2063367781', 'fr', NULL),
	(19, 727435100, 'D', 'd', 'd-727435100', 'en', NULL),
	(20, 727435100, 'Annonce', 'sds', 'annonce-727435100', 'fr', NULL),
	(21, 650204970, 'Annonce 3', 'sdsd', 'annonce-3-650204970', 'en', NULL),
	(22, 650204970, 'Annonce 3', 'sdsd', 'annonce-3-650204970', 'fr', NULL),
	(23, 982545444, 'Ds', 'ds', 'ds-982545444', 'en', NULL),
	(24, 982545444, 'Sd', 'sd', 'sd-982545444', 'fr', NULL),
	(25, 1991717083, 'Annonce 8', 's', 'annonce-8-1991717083', 'en', NULL),
	(26, 1991717083, 'Annonce 8', 's', 'annonce-8-1991717083', 'fr', NULL),
	(27, 1476892739, 'Qsdq', 'qdqsd', 'qsdq-1476892739', 'en', NULL),
	(28, 1476892739, 'Lyon stockage', 'sdqsds', 'lyon-stockage-1476892739', 'fr', NULL);
/*!40000 ALTER TABLE `listing_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. message
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B6BD307FE2904019` (`thread_id`),
  KEY `IDX_B6BD307FF624B39D` (`sender_id`),
  CONSTRAINT `FK_B6BD307FE2904019` FOREIGN KEY (`thread_id`) REFERENCES `message_thread` (`id`),
  CONSTRAINT `FK_B6BD307FF624B39D` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.message : ~0 rows (environ)
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. message_metadata
CREATE TABLE IF NOT EXISTS `message_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_id` int(11) DEFAULT NULL,
  `participant_id` int(11) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_4632F005537A1329` (`message_id`),
  KEY `IDX_4632F0059D1C3019` (`participant_id`),
  CONSTRAINT `FK_4632F005537A1329` FOREIGN KEY (`message_id`) REFERENCES `message` (`id`),
  CONSTRAINT `FK_4632F0059D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.message_metadata : ~0 rows (environ)
/*!40000 ALTER TABLE `message_metadata` DISABLE KEYS */;
/*!40000 ALTER TABLE `message_metadata` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. message_thread
CREATE TABLE IF NOT EXISTS `message_thread` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `listing_id` int(11) DEFAULT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isSpam` tinyint(1) NOT NULL,
  `createdBy_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_607D18C3301C60` (`booking_id`),
  KEY `IDX_607D18C3174800F` (`createdBy_id`),
  KEY `IDX_607D18CD4619D1A` (`listing_id`),
  CONSTRAINT `FK_607D18C3174800F` FOREIGN KEY (`createdBy_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_607D18C3301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_607D18CD4619D1A` FOREIGN KEY (`listing_id`) REFERENCES `listing` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.message_thread : ~0 rows (environ)
/*!40000 ALTER TABLE `message_thread` DISABLE KEYS */;
/*!40000 ALTER TABLE `message_thread` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. message_thread_metadata
CREATE TABLE IF NOT EXISTS `message_thread_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thread_id` int(11) DEFAULT NULL,
  `participant_id` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `last_participant_message_date` datetime DEFAULT NULL,
  `last_message_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_38FC293EE2904019` (`thread_id`),
  KEY `IDX_38FC293E9D1C3019` (`participant_id`),
  CONSTRAINT `FK_38FC293E9D1C3019` FOREIGN KEY (`participant_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_38FC293EE2904019` FOREIGN KEY (`thread_id`) REFERENCES `message_thread` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.message_thread_metadata : ~0 rows (environ)
/*!40000 ALTER TABLE `message_thread_metadata` DISABLE KEYS */;
/*!40000 ALTER TABLE `message_thread_metadata` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. page
CREATE TABLE IF NOT EXISTS `page` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `published` tinyint(1) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `published_idx` (`published`),
  KEY `created_at_p_idx` (`createdAt`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.page : ~6 rows (environ)
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` (`id`, `published`, `createdAt`, `updatedAt`) VALUES
	(31, 1, '2019-03-19 15:56:36', '2019-03-19 15:56:36'),
	(32, 1, '2019-03-19 15:56:36', '2019-03-19 15:56:36'),
	(33, 1, '2019-03-19 15:56:36', '2019-03-19 15:56:36'),
	(34, 1, '2019-03-19 15:56:36', '2019-03-19 15:56:36'),
	(35, 1, '2019-03-19 15:56:36', '2019-03-19 15:56:36'),
	(36, 1, '2019-03-19 15:56:36', '2019-03-19 15:56:36');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. page_translation
CREATE TABLE IF NOT EXISTS `page_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` bigint(20) DEFAULT NULL,
  `meta_title` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_A3D51B1D2C2AC5D3` (`translatable_id`),
  KEY `slug_pt_idx` (`slug`),
  CONSTRAINT `FK_A3D51B1D2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `page` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.page_translation : ~12 rows (environ)
/*!40000 ALTER TABLE `page_translation` DISABLE KEYS */;
INSERT INTO `page_translation` (`id`, `translatable_id`, `meta_title`, `meta_description`, `title`, `description`, `slug`, `locale`) VALUES
	(61, 31, 'Who we are?', 'in progress', 'Who we are?', '<p>We are Cocorico of course!</p>\n            <h3>What is it?</h3>\n            <p>Cocorico is an open source project dedicated to building a powerful (and free) solution for rental and service marketplaces.</p>\n            <h3>Who&rsquo;s paying for all of this?</h3>\n            <p><a href="http://www.sofracs.com" target="_blank" title="marketplace solution">SOFRACS</a>&nbsp;is. They are a Paris based web agency specialised in building collaborative marketplaces for the rental and service industry. Over the years they decided to share their work by funding the development of Cocorico.</p>\n            <h3>What did you use to build Cocorico?</h3>\n            <p>Cocorico is based on Symfony 2.</p>\n            <h3>Where can I get it?</h3>\n            <p>Here: <a target="_blank" href="https://github.com/Cocolabs-SAS/cocorico">https://github.com/Cocolabs-SAS/cocorico</a></p>\n            <h3>Do you have a mascot?</h3>\n            <p>Here&rsquo;s a video of our cute hen &ldquo;Cocotte&rdquo;: <a href="http://cocorico.rocks/">http://cocorico.rocks/</a></p>\n            ', 'who-we-are', 'en'),
	(62, 31, 'Qui sommes nous?', 'en cours', 'Qui sommes nous?', '<p>Nous sommes Cocorico bien s&ucirc;r !</p>\n            <h3>Qu&#39;est-ce que c&#39;est?</h3>\n            <p>Cocorico est un projet open source d&eacute;di&eacute; &agrave; la r&eacute;alisation d&#39;une solution puissante (et gratuite) pour les places de march&eacute; collaboratives (ou pas &agrave; vrai dire).</p>\n            <h3>Qui finance tout &ccedil;a ?</h3>\n            <p>La <a href="http://www.sofracs.com" title="création de marketplace">SOFRACS</a>. C&rsquo;est une agence web bas&eacute;e &agrave; Paris sp&eacute;cialis&eacute;e dans la r&eacute;alisation de places de march&eacute; collaboratives de location, de services, et de vente. Au fil des ans, ils ont d&eacute;cid&eacute; de partager leurs connaissances en finan&ccedil;ant le d&eacute;veloppement de Cocorico.</p>\n            <h3>Qu&rsquo;utilisez-vous sur Cocorico ?</h3>\n            <p>Cocorico utilise Symfony 2.</p>\n            <h3>O&ugrave; puis-je l&rsquo;obtenir?</h3>\n            <p>Ici : <a target="_blank" href="https://github.com/Cocolabs-SAS/cocorico">https://github.com/Cocolabs-SAS/cocorico</a></p>\n            <h3>Avez-vous une mascotte ?</h3>\n            <p>Voici une vid&eacute;o de &quot;Cocotte&quot;&nbsp;: <a href="http://cocorico.rocks/">http://cocorico.rocks/</a></p>', 'qui-sommes-nous', 'fr'),
	(63, 32, 'How it works?', 'in progress', 'How it works?', 'in progress', 'how-it-works', 'en'),
	(64, 32, 'Comment ca marche?', 'en cours', 'Comment ca marche?', 'en cours', 'comment-ca-marche', 'fr'),
	(65, 33, 'The team', 'in progress', 'The team', 'in progress', 'the-team', 'en'),
	(66, 33, 'L\'équipe', 'en cours', 'L\'équipe', 'en cours', 'lequipe', 'fr'),
	(67, 34, 'FAQ', 'in progress', 'FAQ', 'in progress', 'faq', 'en'),
	(68, 34, 'FAQ', 'en cours', 'FAQ', 'en cours', 'faq', 'fr'),
	(69, 35, 'Legal notices', 'in progress', 'Legal notices', 'in progress', 'legal-notices', 'en'),
	(70, 35, 'Mentions légales', 'en cours', 'Mentions légales', 'en cours', 'mentions-legales', 'fr'),
	(71, 36, 'Terms of use', 'in progress', 'Terms of use', 'in progress', 'terms-of-use', 'en'),
	(72, 36, 'Conditions générales d\'utilisation', 'en cours', 'Conditions générales d\'utilisation', 'en cours', 'conditions-generales-dutilisation', 'fr');
/*!40000 ALTER TABLE `page_translation` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. parameter
CREATE TABLE IF NOT EXISTS `parameter` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2A9791105E237E06` (`name`),
  KEY `value_idx` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.parameter : ~0 rows (environ)
/*!40000 ALTER TABLE `parameter` DISABLE KEYS */;
/*!40000 ALTER TABLE `parameter` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. parameter_audit
CREATE TABLE IF NOT EXISTS `parameter_audit` (
  `id` bigint(20) NOT NULL,
  `rev` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `revtype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`,`rev`),
  KEY `rev_18ff1bc70fa013efdfd97381695123b4_idx` (`rev`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.parameter_audit : ~8 rows (environ)
/*!40000 ALTER TABLE `parameter_audit` DISABLE KEYS */;
INSERT INTO `parameter_audit` (`id`, `rev`, `name`, `value`, `type`, `revtype`) VALUES
	(1, 1, 'cocorico.fee_as_asker', NULL, 'percent', 'INS'),
	(2, 1, 'cocorico.fee_as_offerer', NULL, 'percent', 'INS'),
	(3, 2, 'cocorico.fee_as_asker', NULL, 'percent', 'INS'),
	(4, 2, 'cocorico.fee_as_offerer', NULL, 'percent', 'INS'),
	(5, 3, 'cocorico.fee_as_asker', NULL, 'percent', 'INS'),
	(6, 3, 'cocorico.fee_as_offerer', NULL, 'percent', 'INS'),
	(7, 4, 'cocorico.fee_as_asker', NULL, 'percent', 'INS'),
	(8, 4, 'cocorico.fee_as_offerer', NULL, 'percent', 'INS');
/*!40000 ALTER TABLE `parameter_audit` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. review
CREATE TABLE IF NOT EXISTS `review` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `booking_id` int(11) NOT NULL,
  `review_by` int(11) NOT NULL,
  `review_to` int(11) NOT NULL,
  `rating` smallint(6) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_794381C63301C60` (`booking_id`),
  KEY `IDX_794381C6BEDC2389` (`review_by`),
  KEY `IDX_794381C65690230F` (`review_to`),
  KEY `created_at_r_idx` (`createdAt`),
  CONSTRAINT `FK_794381C63301C60` FOREIGN KEY (`booking_id`) REFERENCES `booking` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_794381C65690230F` FOREIGN KEY (`review_to`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_794381C6BEDC2389` FOREIGN KEY (`review_by`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.review : ~0 rows (environ)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. revisions
CREATE TABLE IF NOT EXISTS `revisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` datetime NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.revisions : ~4 rows (environ)
/*!40000 ALTER TABLE `revisions` DISABLE KEYS */;
INSERT INTO `revisions` (`id`, `timestamp`, `username`) VALUES
	(1, '2019-01-04 14:20:47', ''),
	(2, '2019-01-04 15:34:17', ''),
	(3, '2019-01-06 19:39:38', ''),
	(4, '2019-01-06 19:45:10', '');
/*!40000 ALTER TABLE `revisions` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `person_type` smallint(6) NOT NULL,
  `company_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_prefix` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `nationality` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_of_residence` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profession` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `iban` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bic` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_owner_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_owner_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `annual_income` decimal(10,2) DEFAULT NULL,
  `phone_verified` tinyint(1) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT NULL,
  `id_card_verified` tinyint(1) DEFAULT NULL,
  `nb_bookings_offerer` smallint(6) DEFAULT NULL,
  `nb_bookings_asker` smallint(6) DEFAULT NULL,
  `fee_as_asker` smallint(6) DEFAULT NULL,
  `fee_as_offerer` smallint(6) DEFAULT NULL,
  `average_rating_as_asker` smallint(6) DEFAULT NULL,
  `average_rating_as_offerer` smallint(6) DEFAULT NULL,
  `mother_tongue` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer_delay` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `time_zone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`),
  KEY `created_at_u_idx` (`createdAt`),
  KEY `slug_u_idx` (`slug`),
  KEY `enabled_idx` (`enabled`),
  KEY `email_idx` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.user : ~4 rows (environ)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `person_type`, `company_name`, `last_name`, `first_name`, `phone_prefix`, `phone`, `birthday`, `nationality`, `country_of_residence`, `profession`, `iban`, `bic`, `bank_owner_name`, `bank_owner_address`, `annual_income`, `phone_verified`, `email_verified`, `id_card_verified`, `nb_bookings_offerer`, `nb_bookings_asker`, `fee_as_asker`, `fee_as_offerer`, `average_rating_as_asker`, `average_rating_as_offerer`, `mother_tongue`, `answer_delay`, `slug`, `createdAt`, `updatedAt`, `time_zone`) VALUES
	(444390280, 'super-admin@cocorico.rocks', 'super-admin@cocorico.rocks', 'super-admin@cocorico.rocks', 'super-admin@cocorico.rocks', 1, '.G394G8nOQ8Dtias4qNQ4lS/Kt3FVNrgPORvxGQazHg', 'TIoX4TTqoPJCuimkmbwiDh1DjTKd6Z82+vXolYpFQBTDtxxsXX7w5C4fEsIHhKTx9m9n9BgG5/mpblwkZLYOVg==', '2019-03-26 15:38:51', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 1, NULL, 'super-admin', 'super-admin', '+33', NULL, '1978-07-01', 'FR', 'FR', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'super-admin-444390280', '2019-03-19 15:56:36', '2019-03-26 15:38:51', 'Europe/Paris'),
	(1178039886, 'offerer@cocorico.rocks', 'offerer@cocorico.rocks', 'offerer@cocorico.rocks', 'offerer@cocorico.rocks', 1, 'ugttpV0LwKckUrxuMpN/vv.FDCvD9QH5xIFEBUUG37M', 'M12uU5fmKWI9FjDOufeznSB7QVORZU3QH/kyl7IkCxkHgpF1oFpyZNXF6JjzTqEyrEFTibImxHTfPbkl8jdVbw==', '2019-04-01 07:27:49', NULL, NULL, 'a:0:{}', 1, NULL, 'OffererName', 'OffererFirstName', '+33', NULL, '1973-05-29', 'FR', 'FR', NULL, NULL, NULL, NULL, NULL, 1000.00, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'en', NULL, 'offererfirstname-1178039886', '2019-03-19 15:56:36', '2019-04-01 07:27:49', 'Europe/Paris'),
	(1231744749, 'asker@cocorico.rocks', 'asker@cocorico.rocks', 'asker@cocorico.rocks', 'asker@cocorico.rocks', 1, 'RCmUGIwp/yqrkoeFHYV8D9mSBAaLl3dgNKjE37dnTCQ', 'toiTu/Oot34Pcas7s9+2abjEc+eqxdGYKA9r3ZKwqFOmMMbTuXpQOT2qScmDESMC0P7Juq7Dn92H00po01ybzQ==', NULL, NULL, NULL, 'a:0:{}', 1, NULL, 'AskerName', 'AskerFirstName', '+33', NULL, '1975-08-27', 'FR', 'FR', NULL, NULL, NULL, NULL, NULL, 1000.00, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'en', NULL, 'askerfirstname', '2019-03-19 15:56:36', '2019-03-19 15:56:36', 'Europe/Paris'),
	(1529783250, 'disableuser@cocorico.rocks', 'disableuser@cocorico.rocks', 'disableuser@cocorico.rocks', 'disableuser@cocorico.rocks', 0, 'Mj9/eXiMi7yT2BNd4VMtRQssa732rKTWDaoPNI/Xf5c', 'pXyutwersAOPKntTqCrYpAlR2VWdNIJOQvl/o2oUVLtN1NzYF1P7xf2vUjXVDmT1KZRDg8J8J423f4NqF7rcQg==', NULL, NULL, NULL, 'a:0:{}', 1, NULL, 'DisableUserLastName', 'DisableUserFirstName', '+33', NULL, '1978-08-27', 'FR', 'FR', NULL, NULL, NULL, NULL, NULL, 1000.00, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'en', NULL, 'disableuserfirstname', '2019-03-19 15:56:36', '2019-03-19 15:56:36', 'Europe/Paris');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. user_address
CREATE TABLE IF NOT EXISTS `user_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` smallint(6) NOT NULL DEFAULT '1',
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5543718BA76ED395` (`user_id`),
  KEY `user_address_type_idx` (`type`),
  CONSTRAINT `FK_5543718BA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.user_address : ~0 rows (environ)
/*!40000 ALTER TABLE `user_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_address` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. user_facebook
CREATE TABLE IF NOT EXISTS `user_facebook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `facebook_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hometown` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hometown_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nb_friends` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8BF92CE0A76ED395` (`user_id`),
  KEY `facebook_id_idx` (`facebook_id`),
  CONSTRAINT `FK_8BF92CE0A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.user_facebook : ~0 rows (environ)
/*!40000 ALTER TABLE `user_facebook` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_facebook` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. user_group
CREATE TABLE IF NOT EXISTS `user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_8F02BF9DA76ED395` (`user_id`),
  KEY `IDX_8F02BF9DFE54D947` (`group_id`),
  CONSTRAINT `FK_8F02BF9DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_8F02BF9DFE54D947` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.user_group : ~0 rows (environ)
/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. user_image
CREATE TABLE IF NOT EXISTS `user_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_27FFFF07A76ED395` (`user_id`),
  KEY `position_u_idx` (`position`),
  CONSTRAINT `FK_27FFFF07A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.user_image : ~0 rows (environ)
/*!40000 ALTER TABLE `user_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_image` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. user_language
CREATE TABLE IF NOT EXISTS `user_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `code` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_345695B5A76ED395` (`user_id`),
  CONSTRAINT `FK_345695B5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.user_language : ~0 rows (environ)
/*!40000 ALTER TABLE `user_language` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_language` ENABLE KEYS */;

-- Listage de la structure de la table costocking_dev. user_translation
CREATE TABLE IF NOT EXISTS `user_translation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `translatable_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_translation_unique_translation` (`translatable_id`,`locale`),
  KEY `IDX_1D728CFA2C2AC5D3` (`translatable_id`),
  CONSTRAINT `FK_1D728CFA2C2AC5D3` FOREIGN KEY (`translatable_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Listage des données de la table costocking_dev.user_translation : ~0 rows (environ)
/*!40000 ALTER TABLE `user_translation` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_translation` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
