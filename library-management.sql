-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 04:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext DEFAULT '',
  `author` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `inventory` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_language` int(11) DEFAULT NULL,
  `page` int(11) DEFAULT 0,
  `book_cover` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `id_publisher` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `author`, `price`, `inventory`, `id_category`, `id_language`, `page`, `book_cover`, `size`, `id_publisher`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nói Chuyện Là Bản Năng, Giữ Miệng Là Tu Dưỡng, Im Lặng Là Trí Tuệ', 'Nói Chuyện Là Bản Năng, Giữ Miệng Là Tu Dưỡng, Im Lặng Là Trí Tuệ', 'Trương Tiếu Hằng', 25000, 6, 15, 1, 450, 'Bìa mềm', '13x20,5cm', 4, '610c8238c19d5e532bbb5f1c5f54fb76.jpg.webp', '2024-02-07 19:04:50', '2024-02-08 15:14:40'),
(2, 'Nóng Giận Là Bản Năng , Tĩnh Lặng Là Bản Lĩnh', 'Nóng Giận Là Bản Năng , Tĩnh Lặng Là Bản Lĩnh', 'Tống Mặc', 10000, 3, 15, 1, 264, 'Bìa mềm', '13.5 x 20.5 cm', 4, 'd7fc1ff1662fc2344ae3c4348394df04.png.webp', '2024-02-07 23:36:11', '2024-02-07 23:38:59'),
(3, 'Sách Hiểu Về Trái Tim (Tái Bản 2019) - Minh Niệm', 'Sách Hiểu Về Trái Tim (Tái Bản 2019) - Minh Niệm', 'Minh Niệm', 20000, 9, 15, 1, 480, 'Bìa mềm', '13 x 20.5 cm', 3, '5f6de4fae185d50a8df9c932fe2c8d95.jpg.webp', '2024-02-07 23:50:46', '2024-02-08 15:14:40'),
(4, 'Điềm Tĩnh Và Nóng Giận', 'Điềm Tĩnh Và Nóng Giận', 'Tạ Quốc Kế', 5000, 9, 15, 1, 224, 'Bìa mềm', '14.5 x 20.5 cm', 4, '1c66e71d03aab7a73a7d029579343937.jpg.webp', '2024-02-08 14:32:20', '2024-02-08 14:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `book_languages`
--

CREATE TABLE `book_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_languages`
--

INSERT INTO `book_languages` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tiếng Việt', 'Tiếng Việt', '2024-02-07 19:58:52', '2024-02-07 20:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_details`
--

CREATE TABLE `borrow_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_book` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `borrow_details`
--

INSERT INTO `borrow_details` (`id`, `id_book`, `id_user`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 2, 1, '2024-02-07 22:55:13', '2024-02-08 03:52:15'),
(2, '3|1', 2, 2, '2024-02-08 00:24:42', '2024-02-08 15:14:40'),
(4, '1|2', 2, 1, '2024-02-08 00:26:28', '2024-02-08 02:54:47'),
(5, '1', 2, 2, '2024-02-08 15:07:10', '2024-02-08 15:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(13, 'Sách Tiểu Thuyết', 'Tiểu Thuyết v..v', '2024-02-07 08:00:49', '2024-02-07 08:00:49'),
(14, 'Sách Tin Học', 'Sách Tin Học', '2024-02-07 08:01:00', '2024-02-07 08:01:00'),
(15, 'Sách tư duy - Kĩ năng sống', 'yeah', '2024-02-07 19:00:06', '2024-02-07 19:00:06');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_07_052325_create_categories', 1),
(6, '2014_10_12_100000_create_password_resets_table', 2),
(7, '2024_02_07_141802_edit_users', 2),
(8, '2024_02_07_144232_edit_users', 3),
(9, '2024_02_07_145306_edit_users', 4),
(10, '2024_02_07_165744_create_book', 5),
(11, '2024_02_08_004919_edit_books', 6),
(12, '2024_02_08_010325_edit_books', 7),
(13, '2024_02_08_010436_edit_books', 8),
(14, '2024_02_08_010550_edit_books', 9),
(15, '2024_02_08_010848_tao_publisher', 10),
(16, '2024_02_08_020323_edit', 11),
(17, '2024_02_08_024412_create_table_language', 12),
(18, '2024_02_08_054444_create_borrow', 13),
(19, '2024_02_08_054856_update_borrow', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Nhà Xuất Bản Thanh Niên', 'Nhà Xuất Bản Thanh Niên', '2024-02-07 19:00:42', '2024-02-07 19:00:42'),
(4, 'Nhà Xuất Bản Giáo Dục', 'Nhà Xuất Bản Giáo Dục', '2024-02-07 19:27:51', '2024-02-07 19:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `country`, `gender`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(1, 'Trương Nguyễn Thanh Lâm', '0904403743', 'admin@gmail.com', 'Da Nang', 'nam', NULL, '$2y$12$KEoY4oOsIl19kUZ.U0HwK.pU4DsNFOdwaVM7gICE2ZAepkY1fqJcW', 'd4.jpg', NULL, '2024-02-07 07:01:16', '2024-02-07 20:58:25', 1),
(2, 'Nguyễn Văn A', '0904403742', 'nva@gmail.com', 'Vietnam', 'nam', NULL, '$2y$12$Qo9tYOP9zJjpW.97XJ22DuLfXohGrsMfYcu03JkrsQkkHARwdEntG', 'd5.jpg', NULL, '2024-02-07 08:14:37', '2024-02-07 21:29:31', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_languages`
--
ALTER TABLE `book_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_details`
--
ALTER TABLE `borrow_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_languages`
--
ALTER TABLE `book_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `borrow_details`
--
ALTER TABLE `borrow_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
