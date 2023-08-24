
CREATE TABLE `periods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricefactor` int(11) DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `periods` (`id`, `name`, `standard`, `pricefactor`, `unit`, `created_at`, `updated_at`) VALUES
(1, 'Monthly', 'month', 1, 'month', '2023-06-14 13:18:08', '2023-06-14 13:18:08'),
(2, 'Yearly', 'year', 11, 'year', '2023-06-14 13:18:08', '2023-06-14 13:18:08');
