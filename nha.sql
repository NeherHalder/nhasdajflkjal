-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table nha.applications
CREATE TABLE IF NOT EXISTS `applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_bn` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_dob` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `father_husband_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(17) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_add` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_number` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mob_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disignation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_scale` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basic_salery` double DEFAULT 0,
  `meyadkal` timestamp NULL DEFAULT NULL,
  `joining_date` timestamp NULL DEFAULT NULL,
  `buisness_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_income` double DEFAULT 0,
  `tin_no` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_receipt_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_date` timestamp NULL DEFAULT NULL,
  `pay_order_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_order_date` timestamp NULL DEFAULT NULL,
  `starling_des` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flate_size` double(8,2) NOT NULL DEFAULT 0.00,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holofnama_date` timestamp NULL DEFAULT NULL,
  `app_bank_account_no` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.applications: ~3 rows (approximately)
/*!40000 ALTER TABLE `applications` DISABLE KEYS */;
INSERT INTO `applications` (`id`, `name_bn`, `name_en`, `relation`, `app_dob`, `father_husband_name`, `mother_name`, `nid`, `present_add`, `permanent_add`, `tel_number`, `mob_number`, `office_name`, `disignation`, `pay_scale`, `basic_salery`, `meyadkal`, `joining_date`, `buisness_type`, `other_income`, `tin_no`, `app_receipt_no`, `receipt_date`, `pay_order_no`, `bank_name`, `bank_branch`, `pay_order_date`, `starling_des`, `flate_size`, `job_type`, `holofnama_date`, `app_bank_account_no`, `app_bank_name`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'হাসান মোল্লা ', 'HASSAN MOLLA', 'Father', '2017-10-04 08:59:19', 'Mr. Monirul Molla', 'Jayeda Began', '19504405612365478', 'Mogbazar, Dhaka', 'Mogbazar, Dhaka', NULL, '01714569851', 'Hasasn Meals Ltd', '', '', 0, '2017-09-12 00:00:00', '2017-09-12 00:00:00', 'asdfasdf', 13132, '451254124512', '1000', '2017-09-04 00:00:00', '454600', 'Basic Bank', 'Motijheel', '2017-09-13 17:45:42', 'dsfgsdfg', 800.00, '', '2017-09-17 15:18:05', '', '', 1, '2017-09-13 17:45:42', '2017-10-04 08:59:19'),
	(10, 'রাছেল তালুকদার', 'RASEL TALUKDAR', 'Father', '2017-10-04 08:59:18', 'Md. Mahabub Talukdar', 'Setera Begam', '19834212125461245', 'Dhanmondi, Dhaka', 'Jhalokathi, Barisal', NULL, '01715652125', 'Rasel Meals Ltd', NULL, NULL, NULL, '2017-09-17 15:31:52', '2017-09-17 15:31:52', 'Limited', NULL, '124578455609', NULL, '2017-09-17 15:31:52', '12451', 'Dautch Bangla Bank', 'Banani', '2017-09-16 00:00:00', NULL, 1500.00, NULL, NULL, NULL, NULL, 1, '2017-09-17 15:31:52', '2017-10-04 08:59:18'),
	(11, 'শিরীন শারমিন', 'SERIN SARMIN', 'Husband', '2017-09-19 15:03:37', 'Rafikul Islam', 'Nurunnasa Akhter', '19894501235456789', 'Banani, Dhaka', 'Chittagong, Bangladesh', NULL, '01912356412', 'Sirin Sarmin Ltd.', NULL, NULL, NULL, '2017-09-19 14:56:59', '2017-09-19 14:56:59', NULL, NULL, '152345124575', NULL, '2017-09-19 14:56:59', NULL, NULL, NULL, '2017-09-19 14:56:59', NULL, 1500.00, 'প্রকৌশলী', NULL, NULL, NULL, 0, '2017-09-19 14:56:59', '2017-09-19 14:56:59');
/*!40000 ALTER TABLE `applications` ENABLE KEYS */;

-- Dumping structure for table nha.flat_sizes
CREATE TABLE IF NOT EXISTS `flat_sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `size` double(8,2) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.flat_sizes: ~0 rows (approximately)
/*!40000 ALTER TABLE `flat_sizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `flat_sizes` ENABLE KEYS */;

-- Dumping structure for table nha.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2017_08_24_082413_create_projects_table', 1),
	(4, '2017_08_24_084259_create_flat_sizes_table', 1),
	(5, '2017_08_24_092240_create_roles_table', 1),
	(6, '2017_08_25_021300_create_sessions_table', 1),
	(7, '2017_08_26_125910_create_notifications_table', 1),
	(8, '2017_09_13_152944_create_applications_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table nha.notifications
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` int(10) unsigned NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_id_notifiable_type_index` (`notifiable_id`,`notifiable_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.notifications: ~0 rows (approximately)
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;

-- Dumping structure for table nha.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table nha.projects
CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `capacity` int(11) NOT NULL,
  `starting_date` timestamp NULL DEFAULT NULL,
  `ending_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.projects: ~0 rows (approximately)
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` (`id`, `title`, `desc`, `location`, `status`, `capacity`, `starting_date`, `ending_date`, `created_at`, `updated_at`) VALUES
	(1, 'Project1', 'sdfasdfasfda', 'MIrpur', 1, 123, '2017-09-17 00:00:00', '2017-09-30 00:00:00', '2017-09-17 13:07:34', '2017-10-04 09:06:49');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;

-- Dumping structure for table nha.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_title_unique` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.roles: ~5 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`, `tag`, `created_at`, `updated_at`) VALUES
	(1, 'Cum neque.', 'Mollitia molestiae quod.', '2017-09-11 12:24:47', '2017-09-11 12:24:47'),
	(2, 'Atque ipsa voluptates.', 'Aut numquam esse.', '2017-09-11 12:24:48', '2017-09-11 12:24:48'),
	(3, 'Blanditiis commodi.', 'Nihil eos ut.', '2017-09-11 12:24:48', '2017-09-11 12:24:48'),
	(4, 'Blanditiis consequatur quis.', 'Omnis labore.', '2017-09-11 12:24:48', '2017-09-11 12:24:48'),
	(5, 'Saepe aut modi.', 'Qui omnis sunt.', '2017-09-11 12:24:48', '2017-09-11 12:24:48');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table nha.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.sessions: ~0 rows (approximately)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Dumping structure for table nha.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `role_id` int(10) unsigned NOT NULL,
  `profile_pic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_phone_unique` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nha.users: ~20 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `phone`, `password`, `status`, `role_id`, `profile_pic`, `designation`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Winston Wuckert', '017842551961', '$2y$10$CSPgR01Cziil0W3p9Aa.bO/Tf9ig8xaGTlQCW/B5iiGHyb9wYJmTe', 1, 1, NULL, 'Commodi dolorem consequatur.', '0ygmtr19mV', '2017-09-11 12:24:48', '2017-09-11 12:24:48'),
	(2, 'Devonte Robel', '01784255196', '$2y$10$4YHKYi85RUctWCEVbymFyOC26DwVimVf0EZaIFG7r8GLk9GhP4PPi', 1, 1, NULL, 'Consequatur quisquam eum.', 'jRZAUd8OAmNIqIFNh72wQiqGekvbcmDdeWKyf41GKpxLpxwspXgGWcQUniV9', '2017-09-11 12:24:48', '2017-09-11 12:24:48'),
	(3, 'Fredy Orn', '872.378.3446 x0743', '$2y$10$FGfcCTrLP3/BSpmM6WccYux1C8ashZM1GAfeXmnf8I3RVhkQi.DmO', 1, 1, NULL, 'Non autem est aut.', '2sXYaFnIjh', '2017-09-11 12:24:48', '2017-09-11 12:24:48'),
	(4, 'Vergie Schimmel MD', '721.355.5219 x662', '$2y$10$jkS5strOBCh94kQIF9LMxOwyVFv5YNWrK7bCvNvzMup1U84OrMl3K', 1, 1, NULL, 'Explicabo voluptatem sint doloribus.', '2TMsWEFxdo', '2017-09-11 12:24:48', '2017-09-11 12:24:48'),
	(5, 'Test', '01712010101', '$2y$10$/qt8UXnFejDc9ACBK6kJ.eHOyt4neCyHYoEbUYGfHae.dDexYB.Ki', 1, 2, NULL, 'Sed sapiente asperiores est.', '6l58qpgxdFR61bpIUreYAnZDgWidDSFd0lKgRzmBbh7Jgg8jsiEJN0IGSstx', '2017-09-11 12:24:49', '2017-09-13 13:24:52'),
	(6, 'Prof. Breanne Abbott Jr.', '414-868-8574 x41539', '$2y$10$g45.xXJ5whhZTR4UzakyhuXYWj3vJspzW.6cxsQBVmLgi4BDP.dAq', 1, 2, NULL, 'At dolor sint unde.', '3HCWjxLgjy', '2017-09-11 12:24:49', '2017-09-11 12:24:49'),
	(7, 'Ms. Shanna Koch', '668.476.7843 x95298', '$2y$10$X/lTBJptZZLohZW1D/m7..CcO9PucWDCNkr4aSTXU6uCf2JObq32O', 1, 2, NULL, 'Numquam perferendis similique.', 'qyf95vrB6R', '2017-09-11 12:24:49', '2017-09-11 12:24:49'),
	(8, 'Oceane Johnson', '(762) 232-3654', '$2y$10$2FbEq82qTFwkx.kfHzDvmuBcCrWZpwqCemodZDCaAfeYYxSwxODce', 1, 2, NULL, 'Cumque facilis aut.', 'c7diUgxSQf', '2017-09-11 12:24:49', '2017-09-11 12:24:49'),
	(9, 'Vernon Miller Sr.', '+15767761763', '$2y$10$24FDUADUYCcOyMrE/wQXh.sSeW0JAoloqbsLTQCQvzO0C3sa/9R/e', 1, 3, NULL, 'Ex excepturi iure.', 'jUtaAhZIyD', '2017-09-11 12:24:49', '2017-09-11 12:24:49'),
	(10, 'Kaden Torphy', '203.395.3763', '$2y$10$jaOUfGmtEMj.VC7/fIIDHOZaj7wngb0Fv/KS9SqECow.Sj.pBvHvO', 1, 3, NULL, 'Sapiente ullam consectetur.', '8t9H387e6S', '2017-09-11 12:24:49', '2017-09-11 12:24:49'),
	(11, 'Mr. Remington Koelpin', '930-219-5825 x9056', '$2y$10$Cg1UaqIh5kMHGoIkBdi68eqJlxajDV8tgaEo91uKX70XZS/Bi4Jbq', 1, 3, NULL, 'In nihil exercitationem similique.', 'RZ3Q1V674u', '2017-09-11 12:24:49', '2017-09-11 12:24:49'),
	(12, 'Donavon Ward', '1-969-218-1288', '$2y$10$P3NZA7t4qR2tvmXD6Z0DNe1W3I2u4b3C0yQwZsd.lOOvNiBtMJHPG', 1, 3, NULL, 'Quaerat doloribus accusamus maiores.', 'BT5yTDe10u', '2017-09-11 12:24:49', '2017-09-11 12:24:49'),
	(13, 'Anabel McClure', '12345678912', '$2y$10$CVPDYXIWUuikrHAOJxto1.hcXBPVXzeuomaY0CaxeCljLq2izwCq2', 1, 4, NULL, 'Vel eaque in sit.', 'N1RfFCTZdq', '2017-09-11 12:24:50', '2017-09-17 12:35:10'),
	(14, 'Mrs. Brooke Dicki DVM', '+1-725-434-3968', '$2y$10$GAslfA0gEF0PCWdfALC2LuBBTTRTr9Te1uQ1wVIib2.Ek1El1o//u', 1, 4, NULL, 'Et ex laborum nam voluptas.', 'NLSGWfp7Yq', '2017-09-11 12:24:50', '2017-09-11 12:24:50'),
	(15, 'Mrs. Otha Wilderman Jr.', '(229) 967-3655', '$2y$10$W59A55XRWv0kBf7nfvXMrOeFusILwAZr54itkxE7zsZrJphABlNMi', 1, 4, NULL, 'Nostrum corporis quia culpa.', 't0zYl3ykNZ', '2017-09-11 12:24:50', '2017-09-11 12:24:50'),
	(16, 'Leonardo Senger', '1-398-706-9465 x33065', '$2y$10$Lln7uWZJlANWSQeOAfUxnuab0OT5Mo37duewL06lIhTDPbCHr0Nwe', 1, 4, NULL, 'Sit quia.', 'T6dqac9ujY', '2017-09-11 12:24:50', '2017-09-11 12:24:50'),
	(17, 'Rozella Herzog', '(381) 712-5879', '$2y$10$i.PifonbLKTlkOo.Eep/QebbwMbXu0BL3LbQpQvzviozTn4536iAS', 1, 5, NULL, 'Repudiandae eligendi est neque.', 'fCpmYuvcmR', '2017-09-11 12:24:50', '2017-09-11 12:24:50'),
	(18, 'Gardner Abernathy III', '803.579.2801', '$2y$10$7g1MloaNkDoB9y5/uobsFOcyua56SFDu.y5s1LVEMaZhgFlymgisO', 1, 5, NULL, 'Quos maxime est.', 'jHvQ6ymtjp', '2017-09-11 12:24:50', '2017-09-11 12:24:50'),
	(19, 'Mrs. Madaline Grady PhD', '+1 (660) 751-7047', '$2y$10$HjNl7KN1dLQy53thtK48Aeg4i3a9fi.aXktWFD8BzsYyO4tNnl8RS', 1, 5, NULL, 'Delectus ullam impedit corporis.', 'cusSjO0C7x', '2017-09-11 12:24:50', '2017-09-11 12:24:50'),
	(20, 'Dr. Israel Krajcik', '835-373-3630 x12464', '$2y$10$ktc1ege3ejSEfl1zLy.PP.SoziwKC7REA46iNOYgGrwr5uyz6/DJu', 1, 5, NULL, 'Quia consequuntur ea odio.', 'X5PMHtGU0z', '2017-09-11 12:24:50', '2017-09-11 12:24:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
