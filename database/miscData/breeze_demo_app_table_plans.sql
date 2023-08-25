
CREATE TABLE `plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`options`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `plans` (`id`, `type`, `name`, `code`, `price`, `icon`, `slug`, `stripe_plan`, `description`, `message`, `options`, `created_at`, `updated_at`) VALUES
(1, 'Personal', 'Personal Starter', 'PAG-00000', '10.99', '/icon-arcade.svg', 'pay-as-you-go', '', 'Best option for personal use & for your next project.', 'Best option for personal use & for your next project.', '[\"Max Size 50MB\", \"Single File Send\", \"Normal Delivery\", \"Register Delivery(extra charge)\", \"Special Delivery(extra charge)\"]', '2023-06-14 13:18:06', '2023-06-14 13:18:06'),
(2, 'Personal', 'Personal Basic', 'PMB-00001', '12.99', '/icon-arcade.svg', 'personal-basic', '', 'Best option for personal use & for your next project.', 'Best option for personal use & for your next project.', '[\"Max Size 50MB\", \"Single File Send\", \"Normal Delivery\", \"Register Delivery(extra charge)\", \"Special Delivery(extra charge)\"]', '2023-06-14 13:18:06', '2023-06-14 13:18:06'),
(3, 'Personal', 'Personal Premium', 'PMP-00002', '15.90', '/icon-arcade.svg', 'personal-premium', '', 'Best option for personal use & for your next project.', 'Best option for personal use & for your next project.', '[\"Max Size 50MB\", \"Single File Send\", \"Normal Delivery\", \"Register Delivery(extra charge)\", \"Special Delivery(extra charge)\"]', '2023-06-14 13:18:06', '2023-06-14 13:18:06'),
(4, 'Business', 'Business Starter', 'BAG-00003', '15.99', '/icon-arcade.svg', 'business-starter', '', 'Best option for personal use & for your next project.', 'Best option for personal use & for your next project.', '[\"Max Size 50MB\", \"Single File Send\", \"Normal Delivery\", \"Register Delivery(extra charge)\", \"Special Delivery(extra charge)\"]', '2023-06-14 13:18:06', '2023-06-14 13:18:06'),
(5, 'Business', 'Business Basic', 'BMB-00004', '20.99', '/icon-arcade.svg', 'business-basic', '', 'Best option for personal use & for your next project.', 'Best option for personal use & for your next project.', '[\"Max Size 50MB\", \"Single File Send\", \"Normal Delivery\", \"Register Delivery(extra charge)\", \"Special Delivery(extra charge)\"]', '2023-06-14 13:18:06', '2023-06-14 13:18:06'),
(6, 'Business', 'Business Premium', 'BMP-00005', '25.99', '/icon-arcade.svg', 'business-premium', '', 'Best option for personal use & for your next project.', 'Best option for personal use & for your next project.', '[\"Max Size 50MB\", \"Single File Send\", \"Normal Delivery\", \"Register Delivery(extra charge)\", \"Special Delivery(extra charge)\"]', '2023-06-14 13:18:06', '2023-06-14 13:18:06');
