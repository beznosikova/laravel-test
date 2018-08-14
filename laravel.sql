-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2018 г., 13:06
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `slug`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'films', 'Фильмы', 'Фильмы\r\nФильмы\r\nФильмы', '2018-08-09 08:34:51', '2018-08-09 08:34:51'),
(2, 'songs', 'Песни', 'Песни\r\nПесни\r\nПесни', '2018-08-09 08:35:09', '2018-08-09 08:53:38');

-- --------------------------------------------------------

--
-- Структура таблицы `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `message`, `email`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'werwerwer', '54645', '56456@eee', '2018-08-13 17:28:45', '2018-08-13 17:28:45', 'eterter'),
(2, 'wewe', 'werwerwer wer wer wer', 'werwe@qweqwe', '2018-08-14 03:30:27', '2018-08-14 03:30:27', 'erwer'),
(3, 'e', 'w', 'werwe@qweqwe.kkk', '2018-08-14 04:03:45', '2018-08-14 04:03:45', '(067)5555555'),
(4, 'Test', 'tetst', 'test@admin.com', '2018-08-14 04:30:55', '2018-08-14 04:30:55', '(067)5555555'),
(5, 'admin', 'sfwerwer', 'admin@mvc.com', '2018-08-14 05:48:34', '2018-08-14 05:48:34', '(067)5555555'),
(6, 'admin', 'werwer werwer', 'admin@mvc.com', '2018-08-14 06:20:30', '2018-08-14 06:20:30', '(067)5555555'),
(7, 'admin', 'werwer werwer', 'admin@mvc.com', '2018-08-14 06:21:07', '2018-08-14 06:21:07', '(067)5555555'),
(8, 'admin', 'werwer werwer', 'admin@mvc.com', '2018-08-14 06:22:42', '2018-08-14 06:22:42', '(067)5555555'),
(9, 'admin', 'werwer werwer', 'admin@mvc.com', '2018-08-14 06:23:58', '2018-08-14 06:23:58', '(067)5555555'),
(10, 'admin', 'werwerwer wer wer', 'admin@mvc.com', '2018-08-14 06:30:11', '2018-08-14 06:30:11', '(067)5555555'),
(11, 'admin', 'werwerwer wer wer', 'admin@mvc.com', '2018-08-14 06:33:13', '2018-08-14 06:33:13', '(067)5555555'),
(12, 'admin', 'werwerwer wer wer', 'admin@mvc.com', '2018-08-14 06:34:25', '2018-08-14 06:34:25', '(067)5555555'),
(13, 'admin', 'werwerwer wer wer', 'admin@mvc.com', '2018-08-14 06:54:48', '2018-08-14 06:54:48', '(067)5555555'),
(14, 'admin', 'wewer', 'admin@mvc.com', '2018-08-14 07:00:39', '2018-08-14 07:00:39', '(067)5555555');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_04_200950_create_posts_table', 1),
(4, '2018_08_04_201712_create_categories_table', 1),
(5, '2018_08_08_202828_create_roles_table', 1),
(6, '2018_08_08_203227_create_role_user_table', 1),
(7, '2018_08_13_173012_create_contact_forms_table', 2),
(8, '2018_08_13_183744_add_phone_to_contact_forms_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `body`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '123', 'Ты думал, что Бог молчит', 'Дарина Кочанжи', 2, '2018-08-09 08:56:58', '2018-08-09 08:56:58');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'A Admin User', '2018-08-08 18:07:46', '2018-08-08 18:07:46'),
(2, 'manager', 'A Manager User', '2018-08-08 18:07:46', '2018-08-08 18:07:46');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 2, 4, NULL, NULL),
(5, 1, 3, NULL, NULL),
(6, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Name', 'admin@example.com', '$2y$10$4a2yFtWrsFFIhfY/pmORl.HZuBOh5uojdsyvvN0OuT7ze0CX9g8.G', NULL, '2018-08-08 18:07:46', '2018-08-08 18:07:46'),
(2, 'Manager Name', 'manager@example.com', '$2y$10$QJgVeJlu04f6z/oskmRlzeqcIBxCOFXEKrmUvtrzZfyJVsVBAz4O2', NULL, '2018-08-08 18:07:46', '2018-08-08 18:07:46'),
(3, 'admin', 'admin@mvc.com', '$2y$10$mhx06s.M1COks1Z/1c15D.RN.iJ2GwXgWfK3SzEYSZCUXbqX9RndS', 'JvbDl7wjZOBoEae7WUcKjGW7i5TSNBhWL8qIsQZCFMGSV6pe0jSXXXCuN3zH', '2018-08-09 05:16:29', '2018-08-09 05:16:29'),
(5, 'test', 'test@admin.com', '$2y$10$keygfmtjXMzWZCj0BjVtY.UouritW3Ka/Jl3fE1.03UrSngwggAJi', 'NS7BDTuwaCNSEsiGfjAn0oqevHr2GMLBjw9jR2RVN1D0H4ULYQfwmzcAq7j8', '2018-08-13 10:22:43', '2018-08-13 10:22:43');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
