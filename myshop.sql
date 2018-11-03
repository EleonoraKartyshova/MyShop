-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Ноя 03 2018 г., 20:41
-- Версия сервера: 5.7.24-0ubuntu0.16.04.1
-- Версия PHP: 7.0.32-0ubuntu0.16.04.1

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(35, 1, '2018-07-22 12:56:35', '2018-10-26 22:24:07'),
(36, 1, '2018-07-22 18:56:00', '2018-10-26 22:24:07'),
(37, 2, '2018-07-23 14:34:13', '2018-10-26 22:24:07'),
(38, 4, '2018-07-23 14:45:15', '2018-10-26 22:24:07'),
(39, 1, '2018-07-23 15:47:05', '2018-10-26 22:24:07'),
(40, 1, '2018-07-25 16:35:24', '2018-10-26 22:24:07'),
(41, 1, '2018-07-26 13:13:47', '2018-10-26 22:24:07'),
(42, 1, '2018-07-26 13:17:43', '2018-10-26 22:24:07'),
(43, 5, '2018-07-26 13:42:15', '2018-10-26 22:24:07'),
(44, 5, '2018-07-26 13:59:58', '2018-10-26 22:24:07'),
(45, 5, '2018-07-26 14:00:48', '2018-10-26 22:24:07'),
(46, 5, '2018-07-26 17:46:36', '2018-10-26 22:24:07'),
(47, 5, '2018-07-30 18:48:37', '2018-10-26 22:24:07'),
(48, 5, '2018-07-31 00:01:42', '2018-10-26 22:24:07'),
(49, 5, '2018-08-27 13:41:22', '2018-10-26 22:24:07'),
(50, 5, '2018-08-27 14:05:58', '2018-10-26 22:24:07'),
(51, 5, '2018-08-27 14:06:36', '2018-10-26 22:24:07'),
(52, 6, '2018-08-27 14:21:17', '2018-10-26 22:24:07'),
(53, 6, '2018-08-27 14:56:55', '2018-10-26 22:24:07'),
(54, 5, '2018-08-28 21:56:58', '2018-10-26 22:24:07'),
(55, 5, '2018-09-04 21:30:48', '2018-10-26 22:24:07'),
(56, 5, '2018-09-06 23:28:43', '2018-10-26 22:24:07'),
(57, 5, '2018-09-13 16:35:21', '2018-10-26 22:24:07'),
(58, 5, '2018-09-13 16:35:32', '2018-10-26 22:24:07'),
(59, 5, '2018-09-13 17:09:31', '2018-10-26 22:24:07'),
(60, 7, '2018-09-17 15:22:42', '2018-10-26 22:24:07'),
(61, 7, '2018-09-17 15:25:06', '2018-10-26 22:24:07'),
(62, 7, '2018-09-17 16:36:46', '2018-10-26 22:24:07'),
(63, 7, '2018-09-18 20:00:40', '2018-10-26 22:24:07'),
(64, 7, '2018-09-18 20:07:05', '2018-10-26 22:24:07'),
(65, 7, '2018-09-19 16:22:04', '2018-10-26 22:24:07'),
(66, 7, '2018-10-03 19:43:04', '2018-10-26 22:24:07'),
(67, 7, '2018-10-03 19:45:10', '2018-10-26 22:24:07'),
(68, 7, '2018-10-03 19:45:57', '2018-10-26 22:24:07'),
(69, 11, '2018-10-06 19:18:22', '2018-10-26 22:24:07'),
(70, 11, '2018-10-26 20:25:33', '2018-10-26 22:24:07'),
(71, 11, '2018-10-26 20:26:46', '2018-10-26 22:24:07'),
(72, 11, '2018-10-26 20:28:09', '2018-10-26 22:24:07'),
(73, 11, '2018-10-26 20:32:27', '2018-10-26 22:24:07'),
(74, 11, '2018-10-26 20:32:48', '2018-10-26 22:24:07'),
(75, 12, '2018-10-26 23:14:03', '2018-10-26 22:24:07');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(13, 35, 1, '2018-07-22 12:56:35', '2018-10-26 22:24:35'),
(14, 35, 3, '2018-07-22 12:56:35', '2018-10-26 22:24:35'),
(15, 35, 5, '2018-07-22 12:56:35', '2018-10-26 22:24:35'),
(16, 36, 2, '2018-07-22 18:56:01', '2018-10-26 22:24:35'),
(17, 37, 1, '2018-07-23 14:34:13', '2018-10-26 22:24:35'),
(18, 37, 6, '2018-07-23 14:34:14', '2018-10-26 22:24:35'),
(19, 38, 4, '2018-07-23 14:45:15', '2018-10-26 22:24:35'),
(20, 39, 6, '2018-07-23 15:47:05', '2018-10-26 22:24:35'),
(21, 40, 2, '2018-07-25 16:35:25', '2018-10-26 22:24:35'),
(22, 40, 3, '2018-07-25 16:35:25', '2018-10-26 22:24:35'),
(24, 42, 2, '2018-07-26 13:17:44', '2018-10-26 22:24:35'),
(25, 43, 1, '2018-07-26 13:42:16', '2018-10-26 22:24:35'),
(26, 43, 5, '2018-07-26 13:42:16', '2018-10-26 22:24:35'),
(27, 43, 3, '2018-07-26 13:42:16', '2018-10-26 22:24:35'),
(28, 44, 1, '2018-07-26 13:59:58', '2018-10-26 22:24:35'),
(29, 44, 5, '2018-07-26 13:59:58', '2018-10-26 22:24:35'),
(30, 45, 2, '2018-07-26 14:00:48', '2018-10-26 22:24:35'),
(31, 46, 6, '2018-07-26 17:46:36', '2018-10-26 22:24:35'),
(32, 47, 1, '2018-07-30 18:48:37', '2018-10-26 22:24:35'),
(33, 48, 1, '2018-07-31 00:01:43', '2018-10-26 22:24:35'),
(34, 48, 2, '2018-07-31 00:01:43', '2018-10-26 22:24:35'),
(35, 49, 2, '2018-08-27 13:41:22', '2018-10-26 22:24:35'),
(36, 50, 2, '2018-08-27 14:05:58', '2018-10-26 22:24:35'),
(37, 50, 6, '2018-08-27 14:05:59', '2018-10-26 22:24:35'),
(38, 51, 5, '2018-08-27 14:06:37', '2018-10-26 22:24:35'),
(39, 52, 4, '2018-08-27 14:21:17', '2018-10-26 22:24:35'),
(40, 53, 5, '2018-08-27 14:56:55', '2018-10-26 22:24:35'),
(41, 53, 1, '2018-08-28 21:10:55', '2018-10-26 22:24:35'),
(42, 54, 1, '2018-08-28 21:56:58', '2018-10-26 22:24:35'),
(43, 55, 2, '2018-09-04 21:30:49', '2018-10-26 22:24:35'),
(44, 55, 6, '2018-09-04 21:30:49', '2018-10-26 22:24:35'),
(45, 56, 2, '2018-09-06 23:28:43', '2018-10-26 22:24:35'),
(46, 56, 3, '2018-09-06 23:28:43', '2018-10-26 22:24:35'),
(47, 59, 5, '2018-09-13 17:09:31', '2018-10-26 22:24:35'),
(48, 60, 10, '2018-09-17 15:22:42', '2018-10-26 22:24:35'),
(49, 61, 20, '2018-09-17 15:25:06', '2018-10-26 22:24:35'),
(50, 62, 23, '2018-09-17 16:36:46', '2018-10-26 22:24:35'),
(51, 63, 14, '2018-09-18 20:00:40', '2018-10-26 22:24:35'),
(52, 64, 24, '2018-09-18 20:07:05', '2018-10-26 22:24:35'),
(53, 65, 24, '2018-09-19 16:22:04', '2018-10-26 22:24:35'),
(54, 66, 4, '2018-10-03 19:43:04', '2018-10-26 22:24:35'),
(55, 67, 4, '2018-10-03 19:45:10', '2018-10-26 22:24:35'),
(56, 68, 4, '2018-10-03 19:45:57', '2018-10-26 22:24:35'),
(57, 69, 2, '2018-10-06 19:18:22', '2018-10-26 22:24:35'),
(58, 69, 18, '2018-10-19 01:57:06', '2018-10-26 22:24:35'),
(59, 70, 1, '2018-10-26 20:25:33', '2018-10-26 22:24:35'),
(60, 71, 1, '2018-10-26 20:26:46', '2018-10-26 22:24:35'),
(61, 72, 1, '2018-10-26 20:28:09', '2018-10-26 22:24:35'),
(62, 73, 2, '2018-10-26 20:32:27', '2018-10-26 22:24:35'),
(63, 74, 2, '2018-10-26 20:32:48', '2018-10-26 22:24:35'),
(64, 75, 4, '2018-10-26 23:14:03', '2018-10-26 22:24:35'),
(65, 75, 1, '2018-10-26 23:14:03', '2018-10-26 22:24:35');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` varchar(15) NOT NULL,
  `title` varchar(45) NOT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quantity_in_stock` int(11) DEFAULT NULL,
  `quantity_sold` int(5) NOT NULL DEFAULT '0',
  `style` varchar(15) NOT NULL,
  `features` varchar(15) NOT NULL,
  `fabric_material` varchar(20) NOT NULL,
  `length` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `manufacturer_country` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category`, `title`, `picture`, `price`, `quantity_in_stock`, `quantity_sold`, `style`, `features`, `fabric_material`, `length`, `color`, `manufacturer_country`, `description`, `created_at`, `updated_at`) VALUES
(1, 'evening', 'Satin red white long dress', '/images/sherrihill-51816-redprint-2-1400x15001.jpg', 18000, 10, 2, 'fluffy', 'open back', 'satin', 'floor', 'white, red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:24:49', '2018-10-26 20:14:03'),
(2, 'cocktail', 'Short lace white pink dress', '/images/sherri-hill-nude-pink-50913-flower-embroidered-cocktail-dress-p1501-11268_zoom1.jpg', 20500, 5, 2, 'fluffy', 'open back', 'lace', 'short', 'white, pink', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-10-26 17:32:48'),
(3, 'wedding', 'Long white satin dress', '/images/sherrihill-51613-ivory-11.jpg', 14000, 8, 0, 'fluffy', 'open back', 'satin', 'floor', 'white', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(4, 'cocktail', 'Sequins lavender short dress', '/images/sherrihill_51363_pink_7.jpg', 17500, 3, 2, 'fluffy', 'open back', 'sequins', 'short', 'lavender, pink', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-10-26 20:14:03'),
(5, 'wedding', 'Open shoulders white dress', '/images/sherrihill-51633-ivory-21.jpg', 16000, 7, 0, 'fluffy', 'open shoulders', 'satin', 'floor', 'white', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(6, 'evening', 'Sapphire long satin dress', '/images/image1.jpg', 12000, 6, 0, 'fluffy', 'open back', 'satin', 'floor', 'sapphire, blue', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(7, 'cocktail', 'White short satin dress', '/images/sherri-hill-504951.jpg', 10000, 9, 0, 'fluffy', 'open back', 'satin', 'short', 'white', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(8, 'evening', 'Long red satin dress', '/images/sherrihill-51822-red-11.jpg', 11000, 4, 0, 'fluffy', 'open back', 'satin', 'floor', 'red', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(9, 'evening', 'Light pink long satin dress', '/images/sherri-hill-510361.jpg', 14000, 3, 0, 'fluffy', 'open back', 'satin', 'floor', 'light pink', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(10, 'evening', 'Blue floral long lace dress', '/images/sherrihill-51961-blueprint-11.jpg', 15000, 7, 0, 'fluffy', 'long sleeves', 'lace, satin', 'floor', 'blue floral', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(11, 'wedding', 'White long sleeves dress', '/images/sherri-hill-51853-long-sleeves-2-piece-prom-gown-011.jpg', 15000, 2, 0, 'fluffy', 'long sleeves', 'satin, lace', 'floor', 'white', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(12, 'evening', 'Tulle yellow long dress', '/images/sherri-hill-50864-prom-dress-151.jpg', 16000, 5, 0, 'fluffy', 'open shoulders', 'tulle', 'floor', 'yellow', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(13, 'evening', 'White floral satin long dress', '/images/51232-white-15_11.jpg', 17000, 3, 0, 'fluffy', 'open back', 'satin', 'floor', 'white floral', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(14, 'cocktail', 'Emerald short satin dress', '/images/52177___blackemerald___51.jpg', 12000, 5, 0, 'fluffy', 'open back', 'satin', 'short', 'emerald', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(15, 'cocktail', 'Ivory rhinestones short dress', '/images/sherrihill-51515-ivory-3.jpg', 13000, 6, 0, 'fluffy', 'open back', 'satin, rhinestones', 'short', 'ivory', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(16, 'evening', 'Nude gold satin long dress', '/images/51610_hr_5a18635cee5541.jpg', 17000, 8, 0, 'fluffy', 'open back', 'satin', 'floor', 'nude, gold', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(17, 'evening', 'Light blue lace long dress', '/images/sherrihill-51573-light-blue-1-Dress1.jpg', 13000, 10, 0, 'fluffy', 'open back', 'lace', 'floor', 'light blue', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(18, 'evening', 'Yellow satin long dress', '/images/51883_hr_5a18a31bb05161.jpg', 12000, 4, 1, 'fluffy', 'open back', 'satin', 'floor', 'yellow', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(19, 'cocktail', 'Lavender short satin dress', '/images/sherrihill-51823-lilac-41.jpg', 11000, 9, 0, 'fluffy', 'open shoulders', 'satin', 'short', 'lavender', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(20, 'wedding', 'White long satin lace dress', '/images/50842-white-11.jpg', 24000, 5, 0, 'fluffy', 'open shoulders', 'satin, lace', 'floor', 'white', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(21, 'cocktail', 'Gold beige lace short dress', '/images/sherrihill-51521-gold-9-Dress-818x10241.jpg', 18000, 7, 0, 'fluffy', 'open back', 'lace', 'short', 'beige, gold', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(22, 'evening', 'Lace nude gold long dress', '/images/sherrihill-51595-nudegold-11.jpg', 22000, 7, 0, 'fluffy', 'open shoulders', 'lace, satin', 'floor', 'nude, gold', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(23, 'evening', 'Chiffon pink floral long dress', '/images/sherri-hill-51214-prom-dress-031.jpg', 14000, 10, 0, 'fluffy', 'open back', 'chiffon, satin', 'floor', 'light pink floral', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(24, 'evening', 'Lace tulle blue long dress', '/images/51924_hr_5a1a327e2838b1.jpg', 15000, 5, 2, 'fluffy', 'open back', 'lace, tulle', 'floor', 'light blue', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-07-16 12:30:11', '2018-07-16 09:30:11'),
(27, 'evening', 'You can try to edit this product!', '/images/dress25.jpg', 19000, 8, 0, 'fluffy', 'open shoulders', 'tulle', 'floor', 'nude, turquose', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-10-26 23:42:11', '2018-10-26 20:42:11'),
(28, 'evening', 'You can try to edit this product!', '/images/dress25.jpg', 19000, 8, 0, 'fluffy', 'open shoulders', 'tulle', 'floor', 'nude, turquose', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-10-26 23:43:06', '2018-10-26 20:43:06'),
(29, 'evening', 'You can try to edit this product!', '/images/dress25.jpg', 19000, 8, 0, 'fluffy', 'open shoulders', 'tulle', 'floor', 'nude, turquose', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-10-26 23:43:20', '2018-10-26 20:43:20'),
(30, 'evening', 'You can try to edit this product!', '/images/dress25.jpg', 19000, 8, 0, 'fluffy', 'open shoulders', 'tulle', 'floor', 'nude, turquose', 'USA', 'In the chic dress SHERRI HILL 32359 white you will definitely become the queen of the ball, and the prince will enchant you in the dance! Lush satin skirt in the floor in combination with a lace bodice create a dream dress. The low-cut neckline complements the sufficiently open back of the dress. The top is manually trimmed with stones and rhinestones in tone. Decollete beautifully opens the collarbone, and, if necessary, will hide the broad shoulders of the girl. The cut off skirt emphasizes a narrow waist, and in imperceptible side pockets it is convenient to hide a lipstick or a compact. The evening dress of Sherri Hill looks gently and romantically, and the laconic cut serves as a good background for a bright floral print. The style of lush dress has long gained the status of classical, due to its versatility, and fashionable techniques and elements help to create an original modern reading. Large flowers, blossoming directly on the dress, give a lot of urgency, thanks to the trendy floral print. The dress-bustier completely reveals the shoulders and hands of the girl, accentuating attention to the velvet skin, and the absence of extra decor only emphasizes the refinement of the image. This outfit will make you feel like a real princess at a ball, thanks to an incredibly lush air skirt.', '2018-10-26 23:45:39', '2018-10-26 20:45:39');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `passw`, `phone_number`, `role`, `created_at`, `updated_at`) VALUES
(1, 'el@el', '1234', 639330120, 1, '2018-07-16 10:49:32', '2018-07-16 07:49:32'),
(2, 'us@us', '1234', 501234567, 0, '2018-07-16 10:51:16', '2018-07-16 07:51:16'),
(3, 'usr@usr', '1234', 639998877, 0, '2018-07-19 13:18:41', '2018-07-19 10:18:41'),
(4, 'cat@cat', '1234', 677777777, 0, '2018-07-22 20:47:20', '2018-07-22 17:47:20'),
(5, 'cat@com', '1234', 1234567, 0, '2018-07-26 13:31:15', '2018-07-26 10:31:15'),
(6, 'fox@com', '123', 123123123, 0, '2018-08-27 14:19:16', '2018-10-26 22:25:44'),
(7, 'catcat@com', '1234', 123123, 0, '2018-09-13 17:45:22', '2018-10-26 22:25:44'),
(8, 'catcatcat@com', '1234', 121212, 0, '2018-10-03 20:52:27', '2018-10-26 22:25:44'),
(9, 'catcatc@com', '1234', 123121212, 0, '2018-10-03 21:12:43', '2018-10-26 22:25:44'),
(10, 'cat@cat.cat', '1234', 123456, 0, '2018-10-04 00:14:46', '2018-10-26 22:25:44'),
(11, 'catcat@cat.ua', 'Elya1', 12345, 1, '2018-10-04 00:19:14', '2018-10-26 22:25:44'),
(12, 'admin@com.ua', 'Admin1', 12345, 1, '2018-10-26 23:06:53', '2018-10-26 22:25:44'),
(13, 'cat@com.ua', 'Elya1', 12345, 0, '2018-10-27 01:39:55', '2018-10-26 22:39:55');

-- --------------------------------------------------------

--
-- Структура таблицы `users_ip`
--

CREATE TABLE `users_ip` (
  `id` int(10) NOT NULL,
  `http_client_ip` varchar(50) DEFAULT NULL,
  `http_x_forwarded_for` varchar(50) DEFAULT NULL,
  `remote_addr` varchar(50) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_ip`
--

INSERT INTO `users_ip` (`id`, `http_client_ip`, `http_x_forwarded_for`, `remote_addr`, `country`, `created_at`, `updated_at`) VALUES
(18, '', '', '127.0.0.1', 'null', '2018-11-01 22:49:42', '2018-11-01 20:49:42'),
(19, '', '', '127.0.0.1', 'null', '2018-11-03 16:19:22', '2018-11-03 14:19:22'),
(20, '', '', '127.0.0.1', 'null', '2018-11-03 16:21:23', '2018-11-03 14:21:23'),
(21, '', '', '127.0.0.1', 'null', '2018-11-03 16:22:09', '2018-11-03 14:22:09'),
(22, '', '', '127.0.0.1', 'null', '2018-11-03 16:22:17', '2018-11-03 14:22:17'),
(23, '', '', '127.0.0.1', 'null', '2018-11-03 16:22:24', '2018-11-03 14:22:24'),
(24, '', '', '127.0.0.1', '', '2018-11-03 16:23:48', '2018-11-03 14:23:48'),
(25, '', '', '127.0.0.1', '', '2018-11-03 16:23:57', '2018-11-03 14:23:57'),
(26, '', '', '127.0.0.1', 'null', '2018-11-03 16:24:33', '2018-11-03 14:24:33'),
(27, '', '', '127.0.0.1', 'null', '2018-11-03 16:26:38', '2018-11-03 14:26:38'),
(28, '', '', '127.0.0.1', 'null', '2018-11-03 16:27:19', '2018-11-03 14:27:19'),
(29, '', '', '127.0.0.1', 'null', '2018-11-03 16:28:11', '2018-11-03 14:28:11'),
(30, '', '', '127.0.0.1', 'null', '2018-11-03 16:28:17', '2018-11-03 14:28:17'),
(31, '', '', '127.0.0.1', 'null', '2018-11-03 16:30:54', '2018-11-03 14:30:54'),
(32, '', '', '127.0.0.1', 'null', '2018-11-03 16:31:04', '2018-11-03 14:31:04'),
(33, '', '', '127.0.0.1', 'null', '2018-11-03 16:31:15', '2018-11-03 14:31:15'),
(34, '', '', '127.0.0.1', 'null', '2018-11-03 16:31:16', '2018-11-03 14:31:16'),
(35, '', '', '127.0.0.1', 'null', '2018-11-03 16:31:24', '2018-11-03 14:31:24'),
(36, '', '', '127.0.0.1', 'null', '2018-11-03 16:39:07', '2018-11-03 14:39:07'),
(37, '', '', '127.0.0.1', 'null', '2018-11-03 16:39:10', '2018-11-03 14:39:10'),
(38, '', '', '127.0.0.1', 'null', '2018-11-03 16:39:19', '2018-11-03 14:39:19'),
(39, '', '', '127.0.0.1', 'null', '2018-11-03 16:39:35', '2018-11-03 14:39:35'),
(40, '', '', '127.0.0.1', 'null', '2018-11-03 16:39:36', '2018-11-03 14:39:36'),
(41, '', '', '127.0.0.1', 'null', '2018-11-03 16:39:42', '2018-11-03 14:39:42'),
(42, '', '', '127.0.0.1', 'null', '2018-11-03 16:50:44', '2018-11-03 14:50:44'),
(43, '', '', '127.0.0.1', 'null', '2018-11-03 16:50:51', '2018-11-03 14:50:51'),
(44, '', '', '127.0.0.1', 'null', '2018-11-03 16:50:52', '2018-11-03 14:50:52'),
(45, '', '', '127.0.0.1', 'null', '2018-11-03 16:51:35', '2018-11-03 14:51:35'),
(46, '', '', '127.0.0.1', 'null', '2018-11-03 16:55:00', '2018-11-03 14:55:00'),
(47, '', '', '127.0.0.1', 'null', '2018-11-03 16:55:01', '2018-11-03 14:55:01'),
(48, '', '', '127.0.0.1', 'null', '2018-11-03 16:55:35', '2018-11-03 14:55:35'),
(49, '', '', '127.0.0.1', 'null', '2018-11-03 16:55:41', '2018-11-03 14:55:41'),
(50, '', '', '127.0.0.1', 'null', '2018-11-03 16:56:22', '2018-11-03 14:56:22'),
(51, '', '', '127.0.0.1', 'null', '2018-11-03 16:56:25', '2018-11-03 14:56:25'),
(52, '', '', '127.0.0.1', 'null', '2018-11-03 16:56:29', '2018-11-03 14:56:29'),
(53, '', '', '127.0.0.1', 'null', '2018-11-03 16:56:31', '2018-11-03 14:56:31'),
(54, '', '', '127.0.0.1', 'null', '2018-11-03 16:56:37', '2018-11-03 14:56:37'),
(55, '', '', '127.0.0.1', 'null', '2018-11-03 16:57:19', '2018-11-03 14:57:19'),
(56, '', '', '127.0.0.1', 'null', '2018-11-03 16:58:14', '2018-11-03 14:58:14'),
(57, '', '', '127.0.0.1', 'null', '2018-11-03 16:58:16', '2018-11-03 14:58:16'),
(58, '', '', '127.0.0.1', 'null', '2018-11-03 16:58:27', '2018-11-03 14:58:27'),
(59, '', '', '127.0.0.1', 'null', '2018-11-03 16:58:33', '2018-11-03 14:58:33'),
(60, '', '', '127.0.0.1', 'null', '2018-11-03 16:58:47', '2018-11-03 14:58:47'),
(61, '', '', '127.0.0.1', 'null', '2018-11-03 17:00:39', '2018-11-03 15:00:39'),
(62, '', '', '127.0.0.1', 'null', '2018-11-03 17:00:51', '2018-11-03 15:00:51'),
(63, '', '', '127.0.0.1', 'null', '2018-11-03 17:01:25', '2018-11-03 15:01:25'),
(64, '', '', '127.0.0.1', 'null', '2018-11-03 17:06:54', '2018-11-03 15:06:54'),
(65, '', '', '127.0.0.1', 'null', '2018-11-03 17:07:45', '2018-11-03 15:07:45'),
(66, '', '', '127.0.0.1', 'null', '2018-11-03 17:09:24', '2018-11-03 15:09:24'),
(67, '', '', '127.0.0.1', 'null', '2018-11-03 17:09:43', '2018-11-03 15:09:43'),
(68, '', '', '127.0.0.1', 'null', '2018-11-03 17:09:52', '2018-11-03 15:09:52'),
(69, '', '', '127.0.0.1', 'null', '2018-11-03 17:09:52', '2018-11-03 15:09:52'),
(70, '', '', '127.0.0.1', 'null', '2018-11-03 17:15:14', '2018-11-03 15:15:14'),
(71, '', '', '127.0.0.1', 'null', '2018-11-03 17:15:15', '2018-11-03 15:15:15'),
(72, '', '', '127.0.0.1', 'null', '2018-11-03 17:15:17', '2018-11-03 15:15:17'),
(73, '', '', '127.0.0.1', 'null', '2018-11-03 17:15:22', '2018-11-03 15:15:22'),
(74, '', '', '127.0.0.1', 'null', '2018-11-03 17:15:26', '2018-11-03 15:15:26'),
(75, '', '', '127.0.0.1', 'null', '2018-11-03 17:15:27', '2018-11-03 15:15:27'),
(76, '', '', '127.0.0.1', 'null', '2018-11-03 17:23:22', '2018-11-03 15:23:22'),
(77, '', '', '127.0.0.1', 'null', '2018-11-03 17:23:23', '2018-11-03 15:23:23'),
(78, '', '', '127.0.0.1', 'null', '2018-11-03 17:23:26', '2018-11-03 15:23:26'),
(79, '', '', '127.0.0.1', 'null', '2018-11-03 17:23:40', '2018-11-03 15:23:40'),
(80, '', '', '127.0.0.1', 'null', '2018-11-03 17:23:51', '2018-11-03 15:23:51'),
(81, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:03', '2018-11-03 15:24:03'),
(82, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:09', '2018-11-03 15:24:09'),
(83, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:15', '2018-11-03 15:24:15'),
(84, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:22', '2018-11-03 15:24:22'),
(85, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:26', '2018-11-03 15:24:26'),
(86, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:33', '2018-11-03 15:24:33'),
(87, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:38', '2018-11-03 15:24:38'),
(88, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:46', '2018-11-03 15:24:46'),
(89, '', '', '127.0.0.1', 'null', '2018-11-03 17:24:56', '2018-11-03 15:24:56'),
(90, '', '', '127.0.0.1', 'null', '2018-11-03 17:25:01', '2018-11-03 15:25:01'),
(91, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:16', '2018-11-03 15:26:16'),
(92, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:17', '2018-11-03 15:26:17'),
(93, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:34', '2018-11-03 15:26:34'),
(94, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:35', '2018-11-03 15:26:35'),
(95, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:39', '2018-11-03 15:26:39'),
(96, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:40', '2018-11-03 15:26:40'),
(97, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:47', '2018-11-03 15:26:47'),
(98, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:48', '2018-11-03 15:26:48'),
(99, '', '', '127.0.0.1', 'null', '2018-11-03 17:26:57', '2018-11-03 15:26:57'),
(100, '', '', '127.0.0.1', 'null', '2018-11-03 17:27:14', '2018-11-03 15:27:14'),
(101, '', '', '127.0.0.1', 'null', '2018-11-03 17:27:15', '2018-11-03 15:27:15'),
(102, '', '', '127.0.0.1', 'null', '2018-11-03 17:39:25', '2018-11-03 15:39:25'),
(103, '', '', '127.0.0.1', 'null', '2018-11-03 17:39:26', '2018-11-03 15:39:26'),
(104, '', '', '127.0.0.1', 'null', '2018-11-03 17:39:36', '2018-11-03 15:39:36'),
(105, '', '', '127.0.0.1', 'null', '2018-11-03 17:45:02', '2018-11-03 15:45:02'),
(106, '', '', '127.0.0.1', 'null', '2018-11-03 17:53:03', '2018-11-03 15:53:03'),
(107, '', '', '127.0.0.1', 'null', '2018-11-03 17:53:08', '2018-11-03 15:53:08'),
(108, '', '', '127.0.0.1', 'null', '2018-11-03 18:00:43', '2018-11-03 16:00:43'),
(109, '', '', '127.0.0.1', 'null', '2018-11-03 18:00:45', '2018-11-03 16:00:45'),
(110, '', '', '127.0.0.1', 'null', '2018-11-03 18:03:29', '2018-11-03 16:03:29'),
(111, '', '', '127.0.0.1', 'null', '2018-11-03 18:03:35', '2018-11-03 16:03:35'),
(112, '', '', '127.0.0.1', 'null', '2018-11-03 18:03:39', '2018-11-03 16:03:39'),
(113, '', '', '127.0.0.1', 'null', '2018-11-03 18:03:43', '2018-11-03 16:03:43'),
(114, '', '', '127.0.0.1', 'null', '2018-11-03 18:07:20', '2018-11-03 16:07:20'),
(115, '', '', '127.0.0.1', 'null', '2018-11-03 18:09:41', '2018-11-03 16:09:41'),
(116, '', '', '127.0.0.1', 'null', '2018-11-03 18:09:48', '2018-11-03 16:09:48'),
(117, '', '', '127.0.0.1', 'null', '2018-11-03 18:09:54', '2018-11-03 16:09:54'),
(118, '', '', '127.0.0.1', 'null', '2018-11-03 18:10:04', '2018-11-03 16:10:04'),
(119, '', '', '127.0.0.1', 'null', '2018-11-03 18:10:22', '2018-11-03 16:10:22'),
(120, '', '', '127.0.0.1', 'null', '2018-11-03 18:10:35', '2018-11-03 16:10:35'),
(121, '', '', '127.0.0.1', 'null', '2018-11-03 18:12:17', '2018-11-03 16:12:17'),
(122, '', '', '127.0.0.1', 'null', '2018-11-03 18:12:53', '2018-11-03 16:12:53'),
(123, '', '', '127.0.0.1', 'null', '2018-11-03 18:13:13', '2018-11-03 16:13:13'),
(124, '', '', '127.0.0.1', 'null', '2018-11-03 18:16:40', '2018-11-03 16:16:40'),
(125, '', '', '127.0.0.1', 'null', '2018-11-03 18:16:59', '2018-11-03 16:16:59'),
(126, '', '', '127.0.0.1', 'null', '2018-11-03 18:17:05', '2018-11-03 16:17:05'),
(127, '', '', '127.0.0.1', 'null', '2018-11-03 18:17:08', '2018-11-03 16:17:08'),
(128, '', '', '127.0.0.1', 'null', '2018-11-03 18:17:11', '2018-11-03 16:17:11'),
(129, '', '', '127.0.0.1', 'null', '2018-11-03 18:17:16', '2018-11-03 16:17:16'),
(130, '', '', '127.0.0.1', 'null', '2018-11-03 18:17:25', '2018-11-03 16:17:25'),
(131, '', '', '127.0.0.1', 'null', '2018-11-03 18:17:27', '2018-11-03 16:17:27'),
(132, '', '', '127.0.0.1', 'null', '2018-11-03 18:17:33', '2018-11-03 16:17:33'),
(133, '', '', '127.0.0.1', 'null', '2018-11-03 18:19:14', '2018-11-03 16:19:14'),
(134, '', '', '127.0.0.1', 'null', '2018-11-03 18:20:27', '2018-11-03 16:20:27'),
(135, '', '', '127.0.0.1', 'null', '2018-11-03 18:20:31', '2018-11-03 16:20:31'),
(136, '', '', '127.0.0.1', 'null', '2018-11-03 18:20:39', '2018-11-03 16:20:39'),
(137, '', '', '127.0.0.1', 'null', '2018-11-03 18:26:39', '2018-11-03 16:26:39'),
(138, '', '', '127.0.0.1', 'null', '2018-11-03 18:26:47', '2018-11-03 16:26:47'),
(139, '', '', '127.0.0.1', 'null', '2018-11-03 18:26:55', '2018-11-03 16:26:55'),
(140, '', '', '127.0.0.1', 'null', '2018-11-03 18:26:59', '2018-11-03 16:26:59'),
(141, '', '', '127.0.0.1', 'null', '2018-11-03 18:27:01', '2018-11-03 16:27:01'),
(142, '', '', '127.0.0.1', 'null', '2018-11-03 18:27:07', '2018-11-03 16:27:07'),
(143, '', '', '127.0.0.1', 'null', '2018-11-03 18:27:14', '2018-11-03 16:27:14'),
(144, '', '', '127.0.0.1', 'null', '2018-11-03 18:27:16', '2018-11-03 16:27:16'),
(145, '', '', '127.0.0.1', 'null', '2018-11-03 18:27:19', '2018-11-03 16:27:19'),
(146, '', '', '127.0.0.1', 'null', '2018-11-03 18:33:52', '2018-11-03 16:33:52'),
(147, '', '', '127.0.0.1', 'null', '2018-11-03 18:34:02', '2018-11-03 16:34:02'),
(148, '', '', '127.0.0.1', 'null', '2018-11-03 18:39:16', '2018-11-03 16:39:16'),
(149, '', '', '127.0.0.1', 'null', '2018-11-03 18:39:46', '2018-11-03 16:39:46'),
(150, '', '', '127.0.0.1', 'null', '2018-11-03 18:39:50', '2018-11-03 16:39:50'),
(151, '', '', '127.0.0.1', 'null', '2018-11-03 18:39:55', '2018-11-03 16:39:55'),
(152, '', '', '127.0.0.1', 'null', '2018-11-03 18:39:56', '2018-11-03 16:39:56'),
(153, '', '', '127.0.0.1', 'null', '2018-11-03 18:39:58', '2018-11-03 16:39:58'),
(154, '', '', '127.0.0.1', 'null', '2018-11-03 18:40:02', '2018-11-03 16:40:02'),
(155, '', '', '127.0.0.1', 'null', '2018-11-03 18:40:06', '2018-11-03 16:40:06'),
(156, '', '', '127.0.0.1', 'null', '2018-11-03 18:40:10', '2018-11-03 16:40:10'),
(157, '', '', '127.0.0.1', 'null', '2018-11-03 18:40:13', '2018-11-03 16:40:13'),
(158, '', '', '127.0.0.1', 'null', '2018-11-03 18:40:19', '2018-11-03 16:40:19'),
(159, '', '', '127.0.0.1', 'null', '2018-11-03 18:40:27', '2018-11-03 16:40:27'),
(160, '', '', '127.0.0.1', 'null', '2018-11-03 18:41:37', '2018-11-03 16:41:37'),
(161, '', '', '127.0.0.1', 'null', '2018-11-03 18:41:48', '2018-11-03 16:41:48'),
(162, '', '', '127.0.0.1', 'null', '2018-11-03 18:42:32', '2018-11-03 16:42:32'),
(163, '', '', '127.0.0.1', 'null', '2018-11-03 18:44:13', '2018-11-03 16:44:13'),
(164, '', '', '127.0.0.1', 'null', '2018-11-03 18:45:41', '2018-11-03 16:45:41'),
(165, '', '', '127.0.0.1', 'null', '2018-11-03 18:45:58', '2018-11-03 16:45:58'),
(166, '', '', '127.0.0.1', 'null', '2018-11-03 18:54:11', '2018-11-03 16:54:11'),
(167, '', '', '127.0.0.1', 'null', '2018-11-03 18:54:14', '2018-11-03 16:54:14'),
(168, '', '', '127.0.0.1', 'null', '2018-11-03 18:54:18', '2018-11-03 16:54:18'),
(169, '', '', '127.0.0.1', 'null', '2018-11-03 18:55:05', '2018-11-03 16:55:05'),
(170, '', '', '127.0.0.1', 'null', '2018-11-03 18:55:06', '2018-11-03 16:55:06'),
(171, '', '', '127.0.0.1', 'null', '2018-11-03 18:59:08', '2018-11-03 16:59:08'),
(172, '', '', '127.0.0.1', 'null', '2018-11-03 18:59:15', '2018-11-03 16:59:15'),
(173, '', '', '127.0.0.1', 'null', '2018-11-03 18:59:33', '2018-11-03 16:59:33'),
(174, '', '', '127.0.0.1', 'null', '2018-11-03 18:59:43', '2018-11-03 16:59:43'),
(175, '', '', '127.0.0.1', 'null', '2018-11-03 18:59:49', '2018-11-03 16:59:49'),
(176, '', '', '127.0.0.1', 'null', '2018-11-03 18:59:59', '2018-11-03 16:59:59'),
(177, '', '', '127.0.0.1', 'null', '2018-11-03 19:00:13', '2018-11-03 17:00:13'),
(178, '', '', '127.0.0.1', 'null', '2018-11-03 19:00:19', '2018-11-03 17:00:19'),
(179, '', '', '127.0.0.1', 'null', '2018-11-03 19:00:25', '2018-11-03 17:00:25');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_products_reviews`
--

INSERT INTO `users_products_reviews` (`id`, `product_id`, `user_id`, `text_review`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'This dress is awesome!', '2018-07-20 15:37:15', '2018-07-20 12:37:15'),
(2, 2, 1, 'I like it, very good material!', '2018-07-20 15:38:39', '2018-07-20 12:38:39'),
(3, 3, 2, 'Quality is good', '2018-07-20 15:39:31', '2018-07-20 12:39:31'),
(4, 4, 3, 'It is amazing!', '2018-07-20 15:40:04', '2018-07-20 12:40:04'),
(5, 5, 3, 'Super!))', '2018-07-20 15:40:55', '2018-07-20 12:40:55'),
(6, 6, 2, 'The dress really sits well.', '2018-07-20 15:42:02', '2018-07-20 12:42:02'),
(7, 1, 3, 'Good quality, very comfortable dress.', '2018-07-20 15:43:28', '2018-07-20 12:43:28'),
(8, 3, 1, 'Great, thanks!', '2018-07-22 14:03:19', '2018-07-22 11:03:19'),
(9, 3, 1, 'Great, thanks!', '2018-07-22 14:03:36', '2018-07-22 11:03:36'),
(11, 4, 1, 'Cool', '2018-07-22 14:11:03', '2018-07-22 11:11:03'),
(14, 3, 1, 'beautiful', '2018-07-22 14:25:49', '2018-07-22 11:25:49'),
(22, 2, 1, 'nice', '2018-07-22 14:45:35', '2018-07-22 11:45:35'),
(29, 2, 1, 'super', '2018-07-22 18:54:11', '2018-07-22 15:54:11'),
(30, 1, 4, 'I like it)', '2018-07-22 20:51:02', '2018-07-22 17:51:02'),
(31, 2, 4, 'So beautifull', '2018-07-23 14:47:38', '2018-07-23 11:47:38'),
(32, 1, 2, 'Fantastic!', '2018-07-23 15:54:36', '2018-07-23 12:54:36'),
(33, 1, 1, 'cute', '2018-07-25 16:36:27', '2018-07-25 13:36:27'),
(34, 1, 1, 'nice', '2018-07-26 01:54:10', '2018-07-25 22:54:10'),
(35, 6, 5, 'Beautiful', '2018-07-26 17:48:20', '2018-10-26 22:27:11'),
(36, 1, 5, 'super', '2018-07-30 18:48:09', '2018-10-26 22:27:11'),
(37, 2, 5, 'nice', '2018-08-27 13:55:11', '2018-10-26 22:27:11'),
(38, 2, 5, 'ok)', '2018-09-06 23:30:10', '2018-10-26 22:27:11'),
(39, 2, 7, '30679841f9d5ba81f775f1f152326ed1', '2018-09-13 18:25:01', '2018-10-26 22:27:11'),
(40, 2, 7, 'good', '2018-09-13 18:26:26', '2018-10-26 22:27:11'),
(41, 24, 7, 'ok', '2018-10-03 23:33:07', '2018-10-26 22:27:11'),
(42, 6, 11, 'Nice! ', '2018-10-04 01:04:00', '2018-10-26 22:27:11'),
(43, 2, 12, 'ok', '2018-10-27 00:21:49', '2018-10-26 22:27:11');

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
ALTER TABLE `products` ADD FULLTEXT KEY `color` (`color`);
ALTER TABLE `products` ADD FULLTEXT KEY `category` (`category`,`title`,`style`,`features`,`fabric_material`,`length`,`description`);
ALTER TABLE `products` ADD FULLTEXT KEY `title` (`title`);
ALTER TABLE `products` ADD FULLTEXT KEY `title_2` (`title`);
ALTER TABLE `products` ADD FULLTEXT KEY `title_3` (`title`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_ip`
--
ALTER TABLE `users_ip`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT для таблицы `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `users_ip`
--
ALTER TABLE `users_ip`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT для таблицы `users_products_reviews`
--
ALTER TABLE `users_products_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
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
