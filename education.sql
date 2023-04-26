-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 25 avr. 2023 à 17:36
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `education`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categorys`
--

INSERT INTO `categorys` (`id`, `parent_id`, `name`, `action`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Language', '1', '2023-01-14 13:35:41', '2023-01-14 13:35:41'),
(2, NULL, 'IT', '1', '2023-01-14 13:36:42', '2023-01-14 13:36:42'),
(3, 1, 'Français', '1', '2023-01-14 13:37:01', '2023-01-14 13:37:01'),
(4, 1, 'Anglais', '1', '2023-01-14 13:39:23', '2023-01-14 13:39:23'),
(5, 2, 'Development web ', '1', '2023-01-14 13:40:08', '2023-01-14 13:40:08'),
(6, 2, 'Développement mobile', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_teacher` int(11) DEFAULT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `number_class` int(11) NOT NULL,
  `course_duration` double(8,2) NOT NULL,
  `number_student` int(11) NOT NULL,
  `number_month` int(11) NOT NULL,
  `price` double(8,2) NOT NULL DEFAULT 1.00,
  `video_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageVideo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`id`, `title`, `description`, `id_teacher`, `id_category`, `number_class`, `course_duration`, `number_student`, `number_month`, `price`, `video_link`, `imageVideo`, `action`, `created_at`, `updated_at`) VALUES
(1, 'Pratique de l’oral', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt vero voluptas maiores excepturi iure natus dicta! Sint consequuntur cumque harum cum unde adipisci? Impedit deleniti explicabo dolor qui ipsa id!a', 2, 3, 12, 1.30, 10, 3, 300.00, 'https://youtu.be/3nx1hU2j9u0', 'img.png', '1', '2023-01-14 13:49:48', '2023-01-14 13:49:48'),
(2, 'Legal anglais', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt vero voluptas maiores excepturi iure natus dicta! Sint consequuntur cumque harum cum unde adipisci? Impedit deleniti explicabo dolor qui ipsa id!a', 2, 3, 30, 2.00, 10, 3, 1500.00, 'https://www.youtube.com/watch?v=3nx1hU2j9u0&t=50s&ab_channel=Clovon', 'Legal-English-classes-via-Skype-prices.jpg', '1', '2023-01-14 14:33:07', '2023-01-14 14:33:07'),
(3, 'php natif', 'natif veut dire pur.\r\nPar pur, je veux dire simplement en PHP d\'origine, sans bibliothèque supplémentaire.\r\n\r\nDonc ils veulent tout simplement dire qu\'utiliser PHP comme moteur de templates est bien plus rapide qu\'utiliser un script comme Smarty.', 2, 5, 10, 1.00, 15, 2, 150.00, '<iframe  class=\"iframe\" id=\"video\" src=\"https://www.youtube.com/embed/k9SmcO7b58I\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'perbedaan.png', '1', '2023-03-01 16:39:54', '2023-03-01 16:39:58'),
(4, 'Javascript', 'Go from no-code to an in-demand junior web developer, at a fraction of the cost of a bootcamp. Start with the front-end by learning HTML, CSS, and JavaScript. Then, master the back-end and APIs to round out your full-stack skills.', 2, 6, 12, 1.30, 10, 1, 150.00, 'https://youtu.be/PMbblDa5KWw', 'Automotive.jpg', '1', '2023-03-01 16:39:45', '2023-03-01 16:39:49');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2014_10_12_000000_create_users_table', 7),
(13, '2023_01_09_190833_create_categorys_table', 8),
(14, '2023_01_09_180232_create_formations_table', 9),
(15, '2023_01_09_190314_create_plan__table', 10),
(16, '2023_01_09_191216_create_reviews_prof_table', 11),
(17, '2023_01_09_194223_create_reviews_for_table', 12),
(18, '2023_03_15_111037_create_save_table', 13),
(19, '2023_03_15_121342_create_notifications_table', 14),
(22, '0000_00_00_000000_create_websockets_statistics_entries_table', 15);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('1108bcf6-d92c-4535-847e-20e5ef735231', 'App\\Notifications\\Saveformation', 'App\\Models\\User', 2, '{\"formation_id\":1}', NULL, '2023-03-15 13:15:08', '2023-03-15 13:15:08'),
('3c3c2347-df28-4f74-b5ea-b033ba720260', 'App\\Notifications\\Saveformation', 'App\\Models\\User', 2, '{\"formation_id\":1}', NULL, '2023-03-15 13:32:03', '2023-03-15 13:32:03'),
('3cad5e02-264f-46e0-bf99-cb93fed59205', 'App\\Notifications\\Saveformation', 'App\\Models\\User', 2, '{\"formation_id\":1}', NULL, '2023-03-15 13:27:14', '2023-03-15 13:27:14'),
('be9f383d-8d37-43c8-b646-3ab9aa37431c', 'App\\Notifications\\Saveformation', 'App\\Models\\User', 2, '{\"save_id\":16}', NULL, '2023-03-15 11:31:24', '2023-03-15 11:31:24'),
('c28fd2e1-6c1c-426b-b408-fbf1d1bcf9b5', 'App\\Notifications\\Saveformation', 'App\\Models\\User', 2, '{\"formation_id\":2}', NULL, '2023-03-15 12:57:06', '2023-03-15 12:57:06'),
('e8609200-3403-4f67-be58-13d5e76564d2', 'App\\Notifications\\Saveformation', 'App\\Models\\User', 2, '{\"formation_id\":1}', NULL, '2023-03-15 13:26:20', '2023-03-15 13:26:20');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('omarcoco60@gmail.com', '$2y$10$YdnOFwaLbSLHQC4U2KHFheXN/mXSL7DTbwCULaiouAqcykK9hL5Mq', '2023-03-13 13:15:32'),
('zouhirharabazann@gmail.com', '$2y$10$zLXOri8QOLSb8Duuzb8/7uUeuKWIVOrBaP.GsoOqta5BJgQGusvmu', '2023-03-13 16:43:02');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plan`
--

CREATE TABLE `plan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_formations` bigint(20) UNSIGNED NOT NULL,
  `arrangement_plan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `plan`
--

INSERT INTO `plan` (`id`, `title`, `id_formations`, `arrangement_plan`, `created_at`, `updated_at`) VALUES
(1, 'Introduction Php', 3, 1, '2023-03-09 12:07:21', '2023-03-09 12:07:21');

-- --------------------------------------------------------

--
-- Structure de la table `reviews_for`
--

CREATE TABLE `reviews_for` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id_formations` bigint(20) UNSIGNED NOT NULL,
  `action` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reviews_for`
--

INSERT INTO `reviews_for` (`id`, `content`, `rating`, `user_id`, `id_formations`, `action`, `created_at`, `updated_at`) VALUES
(1, 'bravo nice', 4.50, 1, 1, 1, '2023-01-14 14:14:32', '2023-01-14 14:14:32'),
(2, 'nice formation', 4.30, 1, 1, 1, '2023-01-14 14:56:40', '2023-01-14 14:56:40'),
(3, 'bravo', 5.00, 1, 3, 1, '2023-03-09 17:35:50', '2023-03-09 17:35:54');

-- --------------------------------------------------------

--
-- Structure de la table `reviews_prof`
--

CREATE TABLE `reviews_prof` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `id_prof` bigint(20) UNSIGNED NOT NULL,
  `action` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reviews_prof`
--

INSERT INTO `reviews_prof` (`id`, `content`, `rating`, `user_id`, `id_prof`, `action`, `created_at`, `updated_at`) VALUES
(1, 'nice prof', 4.20, 1, 2, 1, '2023-03-01 18:04:53', '2023-03-01 18:04:53');

-- --------------------------------------------------------

--
-- Structure de la table `save`
--

CREATE TABLE `save` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `formation_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `save`
--

INSERT INTO `save` (`id`, `formation_id`, `user_id`, `created_at`, `updated_at`) VALUES
(80, 1, 1, '2023-03-17 14:46:46', '2023-03-17 14:46:46'),
(95, 2, 2, '2023-03-17 15:25:10', '2023-03-17 15:25:10'),
(96, 1, 2, '2023-03-17 15:25:16', '2023-03-17 15:25:16');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type_user` enum('1','2','5') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `function` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `type_user`, `description`, `function`, `num_phone`, `address`, `country`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zouhir harabazan', 'man.png', 'zouhirharabazann@gmail.com', '2023-03-28 14:08:08', '5', 'admin', 'admin', '0633021991', NULL, 'Sale', '$2y$10$dhqKC3WHnAID4hhErLq1Qu32CDg98OrSx43AFf0D7FAyyKKslqPga', '3Sc1q57oYgOo75QsaJQSzU0VLSQpwstIzS3F0G0KvVgllQkSQGBXlU6lVQUk', '2023-01-14 13:41:51', '2023-03-13 16:39:27'),
(2, 'Houssam el hajji', 'zouhir.png', 'houssamelhajji@gmail.com', '2023-01-14 13:47:14', '1', 'Hello everyone, my name is Houssam el hajji, and I am an English teacher. I am passionate about language and literature, and I love helping students improve their communication skills. I have been teaching for 5 years and have experience working with stud', 'English teacher', '0622154477', NULL, NULL, '$2y$10$dhqKC3WHnAID4hhErLq1Qu32CDg98OrSx43AFf0D7FAyyKKslqPga', 'y7zLFGm9Do1yrMfbOfl6JRREJYJt3igZYOBBihVuuP48SLoV5yqGidAyWS7z', '2023-01-14 13:47:14', '2023-01-14 13:47:14'),
(3, 'hourri marwane', 'man.png', 'hourrimarwane@gmail.com', '2023-01-14 14:30:51', '2', 'test description', 'teacher IT', '06554477888', NULL, 'sale', '$2y$10$dhqKC3WHnAID4hhErLq1Qu32CDg98OrSx43AFf0D7FAyyKKslqPga', NULL, '2023-01-14 14:30:51', '2023-01-14 14:30:51'),
(4, 'Oussama harabazan', NULL, 'oussamaharabazan.pro@gmail.com', NULL, '1', NULL, NULL, NULL, NULL, NULL, '$2y$10$NbjRocvqPB8zxeegenCmNetMoO9VKfQUp/cdL3GV4HEZmvBQPE9WS', NULL, '2023-03-12 14:45:08', '2023-03-12 14:45:08'),
(6, 'Oussama harabazan', NULL, 'omarcoco60@gmail.com', '2023-03-13 12:40:18', '1', NULL, NULL, NULL, NULL, NULL, '$2y$10$84R88Vo9oZzuFQp5EenP6OaEEHIYOApqlf66WWoMmb.fEqAaP/LTu', NULL, '2023-03-13 12:38:57', '2023-03-13 12:40:18'),
(7, 'houssam el hajji', NULL, 'houssam2001edogawa@gmail.com', NULL, '1', NULL, NULL, NULL, NULL, NULL, '$2y$10$M24YHzwBRuC7tlQXw7M5m.H8tNfpSU0.lrIfWBm0l6Lq1cXkZWIOm', 'ea86oDfvwuEZIisoplqxVcVjTPolchWEbd4SgQrlslsYID8oLsT5YJF2YdTY', '2023-03-13 16:52:41', '2023-03-13 16:52:41');

-- --------------------------------------------------------

--
-- Structure de la table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formations_id_category_foreign` (`id_category`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_id_formations_foreign` (`id_formations`);

--
-- Index pour la table `reviews_for`
--
ALTER TABLE `reviews_for`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_for_user_id_foreign` (`user_id`),
  ADD KEY `reviews_for_id_formations_foreign` (`id_formations`);

--
-- Index pour la table `reviews_prof`
--
ALTER TABLE `reviews_prof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_prof_user_id_foreign` (`user_id`),
  ADD KEY `reviews_prof_id_prof_foreign` (`id_prof`);

--
-- Index pour la table `save`
--
ALTER TABLE `save`
  ADD PRIMARY KEY (`id`),
  ADD KEY `save_user_id_foreign` (`user_id`),
  ADD KEY `save_formation_id_foreign` (`formation_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `reviews_for`
--
ALTER TABLE `reviews_for`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reviews_prof`
--
ALTER TABLE `reviews_prof`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `save`
--
ALTER TABLE `save`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categorys` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `plan`
--
ALTER TABLE `plan`
  ADD CONSTRAINT `plan_id_formations_foreign` FOREIGN KEY (`id_formations`) REFERENCES `formations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reviews_for`
--
ALTER TABLE `reviews_for`
  ADD CONSTRAINT `reviews_for_id_formations_foreign` FOREIGN KEY (`id_formations`) REFERENCES `formations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_for_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reviews_prof`
--
ALTER TABLE `reviews_prof`
  ADD CONSTRAINT `reviews_prof_id_prof_foreign` FOREIGN KEY (`id_prof`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_prof_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `save`
--
ALTER TABLE `save`
  ADD CONSTRAINT `save_formation_id_foreign` FOREIGN KEY (`formation_id`) REFERENCES `formations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `save_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
