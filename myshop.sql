-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июл 26 2018 г., 14:05
-- Версия сервера: 5.7.22-0ubuntu0.16.04.1
-- Версия PHP: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `myshop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(35, 1, '2018-07-22 12:56:35', NULL),
(36, 1, '2018-07-22 18:56:00', NULL),
(37, 2, '2018-07-23 14:34:13', NULL),
(38, 4, '2018-07-23 14:45:15', NULL),
(39, 1, '2018-07-23 15:47:05', NULL),
(40, 1, '2018-07-25 16:35:24', NULL),
(41, 1, '2018-07-26 13:13:47', NULL),
(42, 1, '2018-07-26 13:17:43', NULL),
(43, 5, '2018-07-26 13:42:15', NULL),
(44, 5, '2018-07-26 13:59:58', NULL),
(45, 5, '2018-07-26 14:00:48', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(13, 35, 1, '2018-07-22 12:56:35', NULL),
(14, 35, 3, '2018-07-22 12:56:35', NULL),
(15, 35, 5, '2018-07-22 12:56:35', NULL),
(16, 36, 2, '2018-07-22 18:56:01', NULL),
(17, 37, 1, '2018-07-23 14:34:13', NULL),
(18, 37, 6, '2018-07-23 14:34:14', NULL),
(19, 38, 4, '2018-07-23 14:45:15', NULL),
(20, 39, 6, '2018-07-23 15:47:05', NULL),
(21, 40, 2, '2018-07-25 16:35:25', NULL),
(22, 40, 3, '2018-07-25 16:35:25', NULL),
(24, 42, 2, '2018-07-26 13:17:44', NULL),
(25, 43, 1, '2018-07-26 13:42:16', NULL),
(26, 43, 5, '2018-07-26 13:42:16', NULL),
(27, 43, 3, '2018-07-26 13:42:16', NULL),
(28, 44, 1, '2018-07-26 13:59:58', NULL),
(29, 44, 5, '2018-07-26 13:59:58', NULL),
(30, 45, 2, '2018-07-26 14:00:48', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity_in_stock` int(11) DEFAULT NULL,
  `style` varchar(15) NOT NULL,
  `features` varchar(15) NOT NULL,
  `fabric_material` varchar(15) NOT NULL,
  `length` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `manufacturer_country` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `picture`, `price`, `quantity_in_stock`, `style`, `features`, `fabric_material`, `length`, `color`, `manufacturer_country`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', '/images/sherrihill-51816-redprint-2-1400x1500.jpg', 18000, 10, 'fluffy', 'open back', 'satin', 'floor', 'white, red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:24:49', '2018-07-16 12:24:49'),
(2, 'Product 2', '/images/sherrihill-51816-redprint-2-1400x1500.jpg', 20500, 5, 'fluffy', 'open back', 'satin', 'floor', 'white, red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 12:30:11'),
(3, 'Product 3', '/images/sherrihill-51816-redprint-2-1400x1500.jpg', 14000, 8, 'fluffy', 'open back', 'satin', 'floor', 'white, red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 12:30:11'),
(4, 'Product 4', '/images/sherrihill-51816-redprint-2-1400x1500.jpg', 17500, 3, 'fluffy', 'open back', 'satin', 'floor', 'white, red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 12:30:11'),
(5, 'Product 5', '/images/sherrihill-51816-redprint-2-1400x1500.jpg', 16000, 7, 'fluffy', 'open back', 'satin', 'floor', 'white, red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 12:30:11'),
(6, 'Product 6', '/images/sherrihill-51816-redprint-2-1400x1500.jpg', 12000, 6, 'fluffy', 'open back', 'satin', 'floor', 'white, red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 12:30:11');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `passw` varchar(15) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `role` int(11) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `passw`, `phone_number`, `role`, `created_at`, `updated_at`) VALUES
(1, 'el@el', '1234', 639330120, 1, '2018-07-16 10:49:32', '2018-07-16 10:49:32'),
(2, 'us@us', '1234', 501234567, 0, '2018-07-16 10:51:16', '2018-07-16 10:51:16'),
(3, 'usr@usr', '1234', 639998877, 0, '2018-07-19 13:18:41', '2018-07-19 13:18:41'),
(4, 'cat@cat', '1234', 677777777, 0, '2018-07-22 20:47:20', '2018-07-22 20:47:20'),
(5, 'cat@com', '1234', 1234567, 0, '2018-07-26 13:31:15', '2018-07-26 13:31:15');

-- --------------------------------------------------------

--
-- Структура таблицы `users_products_reviews`
--

CREATE TABLE `users_products_reviews` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text_review` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users_products_reviews`
--

INSERT INTO `users_products_reviews` (`id`, `product_id`, `user_id`, `text_review`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'This dress is awesome!', '2018-07-20 15:37:15', '2018-07-20 15:37:15'),
(2, 2, 1, 'I like it, very good material!', '2018-07-20 15:38:39', '2018-07-20 15:38:39'),
(3, 3, 2, 'Quality is good', '2018-07-20 15:39:31', '2018-07-20 15:39:31'),
(4, 4, 3, 'It is amazing!', '2018-07-20 15:40:04', '2018-07-20 15:40:04'),
(5, 5, 3, 'Super!))', '2018-07-20 15:40:55', '2018-07-20 15:40:55'),
(6, 6, 2, 'The dress really sits well.', '2018-07-20 15:42:02', '2018-07-20 15:42:02'),
(7, 1, 3, 'Good quality, very comfortable dress.', '2018-07-20 15:43:28', '2018-07-20 15:43:28'),
(8, 3, 1, 'Great, thanks!', '2018-07-22 14:03:19', '2018-07-22 14:03:19'),
(9, 3, 1, 'Great, thanks!', '2018-07-22 14:03:36', '2018-07-22 14:03:36'),
(11, 4, 1, 'Cool', '2018-07-22 14:11:03', '2018-07-22 14:11:03'),
(14, 3, 1, 'beautiful', '2018-07-22 14:25:49', '2018-07-22 14:25:49'),
(22, 2, 1, 'nice', '2018-07-22 14:45:35', '2018-07-22 14:45:35'),
(29, 2, 1, 'super', '2018-07-22 18:54:11', '2018-07-22 18:54:11'),
(30, 1, 4, 'I like it)', '2018-07-22 20:51:02', '2018-07-22 20:51:02'),
(31, 2, 4, 'So beautifull', '2018-07-23 14:47:38', '2018-07-23 14:47:38'),
(32, 1, 2, 'Fantastic!', '2018-07-23 15:54:36', '2018-07-23 15:54:36'),
(33, 1, 1, 'cute', '2018-07-25 16:36:27', '2018-07-25 16:36:27'),
(34, 1, 1, 'nice', '2018-07-26 01:54:10', '2018-07-26 01:54:10');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_users_id_fk` (`user_id`);

--
-- Индексы таблицы `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_products_orders_id_fk` (`order_id`),
  ADD KEY `orders_products_products_id_fk` (`product_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_products_reviews`
--
ALTER TABLE `users_products_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_products_reviews_products_id_fk` (`product_id`),
  ADD KEY `users_products_reviews_users_id_fk` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users_products_reviews`
--
ALTER TABLE `users_products_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `orders_products`
--
ALTER TABLE `orders_products`
  ADD CONSTRAINT `orders_products_orders_id_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orders_products_products_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `users_products_reviews`
--
ALTER TABLE `users_products_reviews`
  ADD CONSTRAINT `users_products_reviews_products_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `users_products_reviews_users_id_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
