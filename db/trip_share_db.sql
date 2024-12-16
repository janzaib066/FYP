-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 23, 2023 at 05:44 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trip_share_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@tripshare.com', '123', '2023-06-20 11:51:43', '2023-06-20 19:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `trip_id` int NOT NULL,
  `car_id` int NOT NULL,
  `driver_id` int NOT NULL,
  `passenger_id` int NOT NULL,
  `departure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fair` decimal(18,2) NOT NULL,
  `departure_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bags_per_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_date` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `trip_id`, `car_id`, `driver_id`, `passenger_id`, `departure`, `destination`, `fair`, `departure_date`, `departure_time`, `bags_per_person`, `booking_date`, `status`, `created_at`, `updated_at`) VALUES
(9, 1, 8, 2, 1, 'Nangi Mirpur Azad Kashmir', 'Lahore', 2000.00, '2023-06-25', '08:00', '1', '2023-06-20', 'Complete', '2023-06-20 13:40:01', '2023-06-20 14:11:17'),
(10, 3, 5, 2, 1, 'Nangi Mirpur Azad Kashmir', 'Kotli Azad Kashmir', 1000.00, '2023-06-29', '08:30', '1', '2023-06-20', 'In Progress', '2023-06-20 13:40:04', '2023-06-20 14:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `user_id`, `name`, `model`, `make`, `color`, `car_number`, `picture`, `vehicle_type`, `body_type`, `engine_capacity`, `created_at`, `updated_at`) VALUES
(4, 2, 'Corolla', '2022', 'Toyota', 'White', 'ABS-2312', 'http://trip-share.test/images/cars/1687079809.jpeg', 'Car', 'Sedan', '1000 - 2000', '2023-06-18 16:16:49', '2023-06-19 14:53:26'),
(5, 2, 'Civic', '2023', 'Honda', 'Black', 'TER-1232', 'http://trip-share.test/images/cars/1687078636.jpg', 'Car', 'Sedan', '1000 - 2000', '2023-06-18 16:16:49', '2023-06-19 12:27:49'),
(8, 2, 'Sonata', 'Hyundai', '2023', 'White', 'LED-0911', 'http://trip-share.test/images/cars/1687089010.jpg', 'Car', 'Sedan', '1000 - 2000', '2023-06-18 18:50:10', '2023-06-19 12:28:03'),
(9, 2, 'Jeep Renegade', '2019', 'Toyota', 'Yellow', 'UER-2122', 'http://trip-share.test/images/cars/1687152580.jpg', 'Prestige', 'SUV', '2000 - 4000', '2023-06-19 12:29:40', '2023-06-19 12:29:40'),
(10, 2, 'Ford Raptor', '2018', 'Ford', 'Silver', 'PER-2121', 'http://trip-share.test/images/cars/1687152638.jpg', 'Prestige', 'Pickup Truck', '2000 - 4000', '2023-06-19 12:30:38', '2023-06-19 12:30:38'),
(11, 2, 'Hyundai Staria', '2022', 'Hyundai', 'White', 'HES-1233', 'http://trip-share.test/images/cars/1687152691.jpg', 'Van', 'Minivan', '1000 - 2000', '2023-06-19 12:31:32', '2023-06-19 12:31:32'),
(12, 2, 'Toyota Rav 4', '2023', 'Toyota', 'Gun Matelic', 'PES-1232', 'http://trip-share.test/images/cars/1687152866.jpg', 'Prestige', 'SUV', '2000 - 4000', '2023-06-19 12:34:26', '2023-06-19 12:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `car_galleries`
--

CREATE TABLE `car_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `car_id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_galleries`
--

INSERT INTO `car_galleries` (`id`, `car_id`, `image`, `created_at`, `updated_at`) VALUES
(2, 8, 'http://trip-share.test/images/cars/gallery/maxresdefault.jpg', '2023-06-18 18:50:22', '2023-06-18 18:50:22'),
(9, 9, 'http://trip-share.test/images/cars/gallery/jeep-renegade.jpg', '2023-06-19 12:29:40', '2023-06-19 12:29:40'),
(10, 10, 'http://trip-share.test/images/cars/gallery/ford-raptor.jpg', '2023-06-19 12:30:38', '2023-06-19 12:30:38'),
(11, 11, 'http://trip-share.test/images/cars/gallery/hyundai-staria.jpg', '2023-06-19 12:31:32', '2023-06-19 12:31:32'),
(12, 12, 'http://trip-share.test/images/cars/gallery/toyota-rav.jpg', '2023-06-19 12:34:26', '2023-06-19 12:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_queries`
--

CREATE TABLE `contact_queries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_queries`
--

INSERT INTO `contact_queries` (`id`, `name`, `email`, `subject`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'test name', 'test@gmail.com', 'test subject', '03412304551', 'asdfasdfda', '2023-06-20 14:48:22', '2023-06-20 14:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'How do I get started with a Trip?', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2023-06-20 07:19:03', '2023-06-20 07:19:03'),
(2, 'What is difference for each plan?', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2023-06-20 07:19:03', '2023-06-20 07:19:03'),
(3, 'What kind of Trips do I need?', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', '2023-06-20 07:19:03', '2023-06-20 18:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint UNSIGNED NOT NULL,
  `trip_id` int NOT NULL,
  `driver_id` int NOT NULL,
  `passenger_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `trip_id`, `driver_id`, `passenger_id`, `created_at`, `updated_at`) VALUES
(5, 3, 2, 1, '2023-06-20 13:29:21', '2023-06-20 13:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `driver_id` int NOT NULL DEFAULT '0',
  `passenger_id` int NOT NULL DEFAULT '0',
  `transmitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `driver_id`, `passenger_id`, `transmitter`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Passenger', 'Hi', 'Seen', '2023-06-19 16:40:46', '2023-06-20 14:30:19'),
(2, 2, 1, 'Driver', 'Yes', 'Seen', '2023-06-19 16:40:46', '2023-06-20 14:11:52'),
(3, 2, 1, 'Passenger', 'hi', 'Seen', '2023-06-19 16:49:29', '2023-06-20 14:30:19'),
(4, 2, 1, 'Passenger', 'hi', 'Seen', '2023-06-19 16:50:08', '2023-06-20 14:30:19'),
(5, 2, 1, 'Passenger', 'are you there?', 'Seen', '2023-06-19 16:50:12', '2023-06-20 14:30:19'),
(6, 2, 1, 'Driver', 'How i can help you?', 'Seen', '2023-06-19 16:40:46', '2023-06-20 14:11:52'),
(7, 2, 1, 'Passenger', 'i have a booking with you', 'Seen', '2023-06-19 16:52:36', '2023-06-20 14:30:19'),
(8, 2, 1, 'Driver', 'yes', 'Seen', '2023-06-19 17:23:18', '2023-06-20 14:11:52'),
(9, 2, 1, 'Driver', 'jgj', 'Seen', '2023-06-19 17:32:01', '2023-06-20 14:11:52'),
(10, 2, 1, 'Passenger', 'hi', 'Seen', '2023-06-19 18:41:18', '2023-06-20 14:30:19'),
(11, 1, 2, 'Passenger', 'hi', 'Delivered', '2023-06-20 14:11:29', '2023-06-20 14:11:29'),
(12, 1, 2, 'Passenger', 'how are you?', 'Delivered', '2023-06-20 14:11:34', '2023-06-20 14:11:34'),
(13, 1, 2, 'Passenger', 'hey', 'Delivered', '2023-06-20 14:12:49', '2023-06-20 14:12:49'),
(14, 2, 1, 'Driver', 'how are you?', 'Delivered', '2023-06-20 14:14:21', '2023-06-20 14:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_17_111626_create_cars_table', 2),
(6, '2023_06_18_092155_create_trips_table', 3),
(7, '2023_06_18_114159_create_car_galleries_table', 4),
(8, '2023_06_19_080829_create_bookings_table', 5),
(9, '2023_06_19_092231_create_messages_table', 6),
(10, '2023_06_19_114805_create_favorites_table', 7),
(11, '2023_06_20_071710_create_faqs_table', 8),
(12, '2023_06_20_074044_create_contact_queries_table', 9),
(13, '2023_06_20_113750_create_admins_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `car_id` int NOT NULL,
  `departure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seats` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fair_per_seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bags_per_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `user_id`, `car_id`, `departure`, `destination`, `seats`, `fair_per_seat`, `departure_date`, `departure_time`, `bags_per_person`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 'Nangi Mirpur Azad Kashmir', 'Lahore', '4', '2000', '2023-06-25', '08:00', '1', '2023-06-18 17:02:19', '2023-06-19 14:53:43'),
(3, 2, 5, 'Nangi Mirpur Azad Kashmir', 'Kotli Azad Kashmir', '3', '1000', '2023-06-29', '08:30', '1', '2023-06-18 17:03:45', '2023-06-18 17:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'http://trip-share.test/images/dummy.jfif',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone_number`, `profile_picture`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Umer Naseer', 'umernaseer110@gmail.com', NULL, '$2y$10$Gw6Tv8Sk7A.fPKWYaTtDvebupLD9T9PJXSrx7WH80t8S9oX7u4zl2', '03415304550', 'http://trip-share.test/images/dummy.jfif', NULL, 'Passenger', '2023-06-16 16:51:00', '2023-06-16 16:51:00'),
(2, 'Umer Rajput', 'umer@mailinator.com', NULL, '$2y$10$gqkzwD3fMB0.2nuGUcb4xu1bv4ngeHzkkJGQHT4ntMKLy77M2kiqO', '03415304550', 'http://trip-share.test/images/user/1686999222.jpg', NULL, 'Driver', '2023-06-17 17:19:59', '2023-06-17 17:53:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_galleries`
--
ALTER TABLE `car_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_queries`
--
ALTER TABLE `contact_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `trips`
--
ALTER TABLE `trips`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car_galleries`
--
ALTER TABLE `car_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_queries`
--
ALTER TABLE `contact_queries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
