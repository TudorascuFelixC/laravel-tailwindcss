
CREATE TABLE `vepost_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vepost_addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `displayname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controlstring` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00000000000000000000',
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `vepost_counter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '10',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `free_send_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `vepost_user` (`id`, `username`, `vepost_addr`, `password`, `displayname`, `controlstring`, `balance`, `vepost_counter`, `status`, `free_send_left`, `created_at`, `updated_at`) VALUES
(1, 'majid', '2334407987654321', 'bcefb50f5ddc3e7e1e841836e6c0c13dd5ac9fc678e7a191250eecddbed5e5fc51cd8dfb8eb06ddba5d0056be8490ce3c36664a8e19dbe23e9623aafabe52c7d', 'Majid Khan', '00000000000000000000', '0.00', '10', '0', NULL, '2023-06-14 13:18:44', '2023-06-14 13:18:44');
