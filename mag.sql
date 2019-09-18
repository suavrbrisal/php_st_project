-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 16 2018 г., 00:05
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mag`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brends`
--

CREATE TABLE `brends` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `section` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brends`
--

INSERT INTO `brends` (`id`, `name`, `sort`, `status`, `section`) VALUES
(22, 'Ride', 1, 1, 1),
(23, 'Bataleon', 1, 1, 1),
(24, 'K2', 1, 1, 1),
(25, 'Drake', 1, 1, 1),
(26, 'Burton', 1, 1, 1),
(27, 'Flow', 1, 1, 1),
(28, 'SnowBoard Jones', 1, 1, 1),
(29, 'Ride', 1, 1, 2),
(30, 'Bataleon', 1, 1, 2),
(31, 'K2', 1, 1, 2),
(33, 'Burton', 1, 1, 2),
(34, 'Flow', 1, 1, 2),
(35, 'SnowBoard Jones', 1, 1, 2),
(36, 'Drake', 1, 1, 2),
(38, 'Ride', 1, 1, 3),
(39, 'Apple', 1, 1, 3),
(40, 'Asus', 1, 1, 3),
(41, '\r\nHuawei', 1, 1, 3),
(42, 'Nokia', 1, 1, 3),
(43, 'Sony', 1, 1, 3),
(44, 'Xiaomi', 1, 1, 3),
(45, 'HP', 1, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `section` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `section`, `sort`, `status`) VALUES
(29, 'Игры', 3, 1, 1),
(30, 'Планшеты', 3, 1, 1),
(31, 'Компьютеры', 3, 1, 1),
(32, 'Аксесуары', 3, 1, 1),
(33, 'Другое', 3, 1, 1),
(34, 'Принтеры', 3, 1, 1),
(35, 'Мониторы', 3, 1, 1),
(37, 'Телефоны', 5, 1, 1),
(38, 'Телевизоры', 5, 1, 1),
(39, 'Камеры', 5, 1, 1),
(40, 'Мази', 4, 1, 1),
(41, 'Таблетки', 4, 1, 1),
(42, 'Косметика', 4, 1, 1),
(43, 'Шампуни', 4, 1, 1),
(44, 'Гели', 4, 1, 1),
(45, 'Ноутбуки', 3, 1, 1),
(47, 'Сноуборды', 1, 1, 1),
(48, 'Крепления', 1, 1, 1),
(49, 'Ботинки', 1, 1, 1),
(50, 'Маски', 1, 1, 1),
(51, 'Защита', 1, 1, 1),
(52, 'Запчасти', 1, 1, 1),
(53, 'Запчасти', 2, 1, 1),
(54, 'Защита', 2, 1, 1),
(55, 'Маски', 2, 1, 1),
(56, 'Ботинки', 2, 1, 1),
(57, 'Крепления', 2, 1, 1),
(58, 'Сноуборды', 2, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `colorproducts`
--

CREATE TABLE `colorproducts` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `color` int(11) DEFAULT NULL,
  `description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `colorproducts`
--

INSERT INTO `colorproducts` (`id`, `product`, `color`, `description`) VALUES
(1, 2, 4, 'Описание цвета'),
(2, 2, 5, 'Описание цвета'),
(3, 2, 6, 'Описание цвета'),
(4, 2, 8, 'Описание цвета'),
(5, 3, 4, 'Описание цвета'),
(6, 3, 5, 'Описание цвета'),
(7, 3, 6, 'Описание цвета'),
(8, 3, 8, 'Описание цвета'),
(9, 4, 4, 'Описание цвета'),
(10, 4, 5, 'Описание цвета'),
(11, 4, 6, 'Описание цвета'),
(12, 4, 8, 'Описание цвета'),
(13, 5, 4, 'Описание цвета'),
(14, 5, 5, 'Описание цвета'),
(15, 5, 6, 'Описание цвета'),
(16, 5, 8, 'Описание цвета'),
(17, 6, 5, 'Описание цвета'),
(18, 6, 6, 'Описание цвета'),
(19, 6, 4, 'Описание цвета'),
(20, 7, 4, 'Описание цвета'),
(21, 7, 5, 'Описание цвета'),
(22, 7, 6, 'Описание цвета'),
(23, 7, 8, 'Описание цвета'),
(24, 8, 4, 'Описание цвета'),
(25, 8, 5, 'Описание цвета'),
(26, 8, 6, 'Описание цвета'),
(27, 8, 8, 'Описание цвета'),
(28, 9, 4, 'Описание цвета'),
(29, 9, 5, 'Описание цвета'),
(30, 9, 6, 'Описание цвета'),
(31, 9, 8, 'Описание цвета'),
(32, 10, 4, 'Описание цвета'),
(33, 10, 5, 'Описание цвета'),
(34, 10, 6, 'Описание цвета'),
(35, 10, 8, 'Описание цвета'),
(36, 11, 4, 'Описание цвета'),
(37, 11, 5, 'Описание цвета'),
(38, 11, 6, 'Описание цвета'),
(39, 11, 8, 'Описание цвета'),
(40, 12, 4, 'Описание цвета'),
(41, 12, 5, 'Описание цвета'),
(42, 12, 6, 'Описание цвета'),
(43, 12, 8, 'Описание цвета'),
(44, 13, 4, 'Описание цвета'),
(45, 13, 5, 'Описание цвета'),
(46, 13, 6, 'Описание цвета'),
(47, 13, 8, 'Описание цвета'),
(48, 14, 4, 'Описание цвета'),
(49, 14, 5, 'Описание цвета'),
(50, 14, 6, 'Описание цвета'),
(51, 14, 8, 'Описание цвета'),
(52, 15, 4, 'Описание цвета'),
(53, 15, 5, 'Описание цвета'),
(54, 15, 6, 'Описание цвета'),
(55, 15, 8, 'Описание цвета'),
(56, 16, 4, 'Описание цвета'),
(57, 16, 5, 'Описание цвета'),
(58, 16, 6, 'Описание цвета'),
(59, 16, 8, 'Описание цвета'),
(60, 17, 4, 'Описание цвета'),
(61, 17, 6, 'Описание цвета'),
(62, 18, 5, 'Описание цвета'),
(63, 18, 6, 'Описание цвета'),
(64, 19, 4, 'Описание цвета'),
(65, 19, 6, 'Описание цвета'),
(66, 20, 4, 'Описание цвета'),
(67, 20, 6, 'Описание цвета'),
(68, 21, 4, 'Описание цвета'),
(69, 21, 6, 'Описание цвета'),
(70, 22, 4, 'Описание цвета'),
(71, 22, 6, 'Описание цвета'),
(72, 23, 4, 'Описание цвета'),
(73, 23, 6, 'Описание цвета'),
(74, 24, 4, 'Описание цвета'),
(75, 24, 6, 'Описание цвета'),
(76, 25, 4, 'Описание цвета'),
(77, 25, 6, 'Описание цвета'),
(78, 26, 5, 'Описание цвета'),
(79, 26, 6, 'Описание цвета'),
(80, 27, 4, 'Описание цвета'),
(81, 27, 6, 'Описание цвета'),
(82, 28, 4, 'Описание цвета'),
(83, 28, 6, 'Описание цвета'),
(84, 29, 4, 'Описание цвета'),
(85, 29, 6, 'Описание цвета'),
(86, 30, 4, 'Описание цвета'),
(87, 30, 6, 'Описание цвета'),
(88, 31, 4, 'Описание цвета'),
(89, 31, 6, 'Описание цвета'),
(90, 32, 4, 'Описание цвета'),
(91, 32, 5, 'Описание цвета'),
(92, 32, 6, 'Описание цвета'),
(93, 32, 8, 'Описание цвета'),
(94, 33, 4, 'Описание цвета'),
(95, 33, 5, 'Описание цвета'),
(96, 33, 6, 'Описание цвета'),
(97, 33, 8, 'Описание цвета'),
(98, 34, 4, 'Описание цвета'),
(99, 34, 5, 'Описание цвета'),
(100, 34, 6, 'Описание цвета'),
(101, 34, 8, 'Описание цвета'),
(102, 35, 4, 'Описание цвета'),
(103, 35, 5, 'Описание цвета'),
(104, 35, 6, 'Описание цвета'),
(105, 35, 8, 'Описание цвета'),
(106, 36, 5, 'Описание цвета'),
(107, 36, 6, 'Описание цвета'),
(108, 36, 4, 'Описание цвета'),
(109, 37, 4, 'Описание цвета'),
(110, 37, 5, 'Описание цвета'),
(111, 37, 6, 'Описание цвета'),
(112, 37, 8, 'Описание цвета'),
(113, 38, 4, 'Описание цвета'),
(114, 38, 5, 'Описание цвета'),
(115, 38, 6, 'Описание цвета'),
(116, 38, 8, 'Описание цвета'),
(117, 39, 4, 'Описание цвета'),
(118, 39, 5, 'Описание цвета'),
(119, 39, 6, 'Описание цвета'),
(120, 39, 8, 'Описание цвета'),
(121, 40, 4, 'Описание цвета'),
(122, 40, 5, 'Описание цвета');

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `red` tinyint(4) UNSIGNED NOT NULL,
  `green` tinyint(4) UNSIGNED NOT NULL,
  `blue` tinyint(4) UNSIGNED NOT NULL,
  `kod` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id`, `name`, `red`, `green`, `blue`, `kod`) VALUES
(1, 'Красный', 255, 0, 0, 'FF0000'),
(2, 'Зеленый', 0, 255, 0, '00FF00'),
(3, 'Синий', 0, 0, 255, '0000FF'),
(4, 'Черный', 0, 0, 0, '000000'),
(5, 'Белый', 240, 240, 240, 'f0f0f0'),
(6, 'Серый', 128, 128, 128, '808080'),
(7, 'Золотой', 255, 215, 0, 'FFD700'),
(8, 'Розовый', 255, 192, 203, 'FFC0CB'),
(9, 'Желтый', 255, 255, 0, 'FFFF00'),
(10, 'Оливковый', 85, 107, 47, '556B2F');

-- --------------------------------------------------------

--
-- Структура таблицы `fotoproducts`
--

CREATE TABLE `fotoproducts` (
  `id` int(11) NOT NULL,
  `products` int(11) NOT NULL,
  `colorproduct` int(11) DEFAULT NULL,
  `path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `fotoproducts`
--

INSERT INTO `fotoproducts` (`id`, `products`, `colorproduct`, `path`) VALUES
(220, 59, NULL, '470000059_01.jpg'),
(221, 60, NULL, '470000060_01.jpg'),
(222, 61, NULL, '470000061_01.jpg'),
(223, 62, NULL, '470000062_01.jpg'),
(224, 63, NULL, '470000063_01.jpg'),
(225, 63, NULL, '470000063_02.jpg'),
(226, 64, NULL, '470000064_01.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `opis` varchar(6500) DEFAULT NULL,
  `brend` int(11) NOT NULL,
  `isnew` tinyint(1) NOT NULL DEFAULT '0',
  `category` int(11) NOT NULL,
  `issize` tinyint(1) NOT NULL DEFAULT '0',
  `price` decimal(15,2) NOT NULL,
  `discount` tinyint(100) NOT NULL,
  `iscolor` tinyint(1) NOT NULL DEFAULT '0',
  `isbest` tinyint(1) NOT NULL DEFAULT '0',
  `uniquecode` varchar(32) NOT NULL,
  `smalldiscription` varchar(150) DEFAULT NULL,
  `discription` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `fullname`, `opis`, `brend`, `isnew`, `category`, `issize`, `price`, `discount`, `iscolor`, `isbest`, `uniquecode`, `smalldiscription`, `discription`) VALUES
(59, 'Ride', 'Ride Agenda', 'Самая популярная доска от Ride теперь стала еще круче. Эта доска идеальна для начинающих райдеров и любителей парка, так как имеет дружелюбную геометрию Twin Rocker. При такой демократичной цене добавим только одно… Дайте две!', 22, 1, 47, 1, '25545.00', 45, 1, 1, '000000000000000000000000000059', NULL, NULL),
(60, 'Ride', 'Ride Alter EGO', 'Самый технологичный сноуборд этого десятилетия! Знакомься - Alter Ego! Эта доска имеет два лица. Первое - безбашенное, способное воплотить в жизнь любой трюк и покорить любой Big Air, второе - фрирайдное, позволяющее тебе испытать новые впечатления от пухляка. Благодаря технологии SplitTail, ты можешь легким движением руки расцепить хвост доски и превратить его в два независимых \"пера\". Теперь совсем необязательно выбирать между фристайлом и фрирайдом, достаточно выбрать Alter Ego и наслаждаться всем сразу!', 22, 1, 47, 1, '42380.00', 45, 1, 1, '000000000000000000000000000060', 'Еще одна классная доска', NULL),
(61, 'Boss', 'Bataleon BOSS', 'Топовая модель для агрессивнового парка и фристайла стала ещё лучше. У доски новая форма. Фирменная база Triple Base Technology в третьем поколении обладает улучшенной динамикой за счет технологии SIDEKICK. Эта модель сочетает в себе лучшие свойства: от стритовой геометрии и мощнейшего щелчка парковых досок до управляемости снарядов из жанра All Mountain.', 23, 1, 47, 1, '43083.00', 45, 1, 0, '000000000000000000000000000061', 'Еще одна классная доска', NULL),
(62, 'Bright Lite', 'K2 BRIGHT LITE', 'Для девушек, желающих освоить гору целиком, а не её отдельные раскатанные участки. Для девушек, которые не понаслышке знают, что такое приключение. Для девушек, которые уверены в себе и знают, что им нужно..', 24, 1, 47, 1, '29185.00', 0, 1, 0, '000000000000000000000000000062', 'Еще одна классная доска', NULL),
(63, 'Cameltoe', 'Bataleon Cameltoe', 'ДВерблюжьи лапки обычно обитают на пляжах и в студиях йоги. Однако, любимое место этой верблюжьей лапки - это самые глубокие, крутые и заснеженные горы. Её форма, вдохновлённая сёрфингом, мощно всплывает из пухляка, а древесина из бука дает четкий контроль, позволяя катать безбашенный хакинг на высокой скорости. Это самая универсальная доска для пухляка в мире. ', 23, 1, 47, 1, '32859.00', 45, 1, 1, '000000000000000000000000000063', 'Еще одна классная доска', NULL),
(64, 'Charm', 'Drake CHARM', 'Мягкая и всегда послушная модель обеспечит вам входной билет в мир сноубординга. В этом поможет и её обратный прогиб Rocker, который ускорит процесс превращения новичка в любителя или \"профи\", никоим образом не умаляя кайфа от катания.', 25, 1, 47, 1, '20475.00', 45, 1, 1, '000000000000000000000000000064', 'Еще одна классная доска', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `productsize`
--

CREATE TABLE `productsize` (
  `id` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `discription` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `productsize`
--

INSERT INTO `productsize` (`id`, `product`, `size`, `discription`) VALUES
(3, 2, 7, 'Описание'),
(4, 3, 8, 'Описание'),
(5, 4, 9, 'Описание'),
(6, 5, 10, 'Описание'),
(7, 6, 11, 'Описание'),
(8, 7, 16, 'Описание'),
(9, 8, 13, 'Описание'),
(10, 9, 10, 'Описание'),
(11, 10, 10, 'Описание'),
(12, 11, 13, 'Описание'),
(13, 12, 9, 'Описание'),
(14, 13, 10, 'Описание'),
(15, 14, 13, 'Описание'),
(16, 15, 14, 'Описание'),
(17, 16, 15, 'Описание'),
(33, 17, 17, 'Описание'),
(34, 18, 20, 'Описание'),
(35, 19, 21, 'Описание'),
(36, 20, 18, 'Описание'),
(37, 21, 18, 'Описание'),
(38, 22, 19, 'Описание'),
(39, 23, 20, 'Описание'),
(40, 24, 22, 'Описание'),
(41, 25, 21, 'Описание'),
(42, 26, 22, 'Описание'),
(43, 27, 22, 'Описание'),
(44, 28, 17, 'Описание'),
(45, 29, 19, 'Описание'),
(46, 30, 18, 'Описание'),
(47, 31, 18, 'Описание'),
(48, 32, 25, 'Описание'),
(49, 33, 25, 'Описание'),
(50, 34, 24, 'Описание'),
(51, 35, 24, 'Описание'),
(52, 36, 23, 'Описание'),
(53, 37, 23, 'Описание'),
(54, 38, 25, 'Описание'),
(55, 39, 25, 'Описание'),
(56, 40, 24, 'Описание'),
(57, 41, 24, 'Описание'),
(58, 42, 23, 'Описание'),
(59, 43, 23, 'Описание'),
(60, 44, 24, 'Описание'),
(61, 45, 25, 'Описание'),
(62, 46, 1, 'Описание'),
(63, 46, 5, 'Описание'),
(64, 47, 2, 'Описание'),
(65, 47, 6, 'Описание'),
(66, 48, 3, 'Описание'),
(67, 48, 4, 'Описание'),
(68, 49, 5, 'Описание'),
(69, 49, 6, 'Описание'),
(70, 50, 1, 'Описание'),
(71, 50, 4, 'Описание'),
(72, 51, 3, 'Описание'),
(73, 51, 5, 'Описание'),
(74, 52, 3, 'Описание'),
(75, 52, 2, 'Описание'),
(76, 53, 2, 'Описание'),
(77, 53, 4, 'Описание'),
(78, 54, 1, 'Описание'),
(79, 54, 5, 'Описание'),
(80, 55, 3, 'Описание'),
(81, 55, 4, 'Описание'),
(82, 56, 6, 'Описание'),
(83, 56, 5, 'Описание'),
(84, 57, 4, 'Описание'),
(85, 57, 5, 'Описание'),
(86, 58, 6, 'Описание'),
(87, 58, 1, 'Описание'),
(88, 61, 2, 'Описание'),
(89, 61, 4, 'Описание'),
(90, 62, 30, 'Описание'),
(91, 63, 31, 'Описание'),
(92, 64, 32, 'Описание'),
(93, 65, 29, 'Описание'),
(94, 66, 26, 'Описание'),
(95, 67, 28, 'Описание'),
(96, 68, 30, 'Описание'),
(97, 69, 29, 'Описание'),
(98, 70, 27, 'Описание'),
(99, 71, 28, 'Описание'),
(100, 72, 27, 'Описание'),
(101, 73, 33, 'Описание'),
(102, 74, 32, 'Описание'),
(103, 75, 31, 'Описание'),
(104, 70, 26, 'Описание');

-- --------------------------------------------------------

--
-- Структура таблицы `remainder`
--

CREATE TABLE `remainder` (
  `id` int(11) NOT NULL,
  `colorproduct` int(11) NOT NULL,
  `productsize` int(11) NOT NULL,
  `value` decimal(10,0) NOT NULL,
  `product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `sections`
--

INSERT INTO `sections` (`id`, `name`, `sort`, `status`) VALUES
(1, 'Мужское', 1, 1),
(2, 'Женское', 2, 1),
(3, 'Детское', 3, 1),
(4, '', 4, 1),
(5, '', 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, 'S'),
(2, 'XS'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(7, '5.4\"'),
(8, '5.5\"'),
(9, '5.7\"'),
(10, '6.2\"'),
(11, '4.8\"'),
(12, '5.6\"'),
(13, '5.3\"'),
(14, '6.0\"'),
(15, '6.7\"'),
(16, '6.5\"'),
(17, '370x452x278'),
(18, '318x425x278'),
(19, '358x452x283'),
(20, '360x452x278'),
(21, '358x523x278'),
(22, '256x536x365'),
(23, '35х49х17'),
(24, '38х50х20'),
(25, '20х20х20'),
(26, '15\"'),
(27, '16\"'),
(28, '17\"'),
(29, '18\"'),
(30, '14\"'),
(31, '13\"'),
(32, '12\"'),
(33, '19\"');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `idzakaz` int(11) NOT NULL,
  `col` int(100) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `summa` decimal(50,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'tatyana09.2010@mail.ru', '8e2bc27946c9103859f830ce9cff7e9a');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `fio` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `adres` varchar(100) NOT NULL,
  `telefon` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brends`
--
ALTER TABLE `brends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`section`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `section` (`section`);

--
-- Индексы таблицы `colorproducts`
--
ALTER TABLE `colorproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `color` (`color`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kod` (`kod`);

--
-- Индексы таблицы `fotoproducts`
--
ALTER TABLE `fotoproducts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products` (`products`),
  ADD KEY `colorproduct` (`colorproduct`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`uniquecode`),
  ADD KEY `name` (`name`),
  ADD KEY `category` (`category`),
  ADD KEY `brend` (`brend`);

--
-- Индексы таблицы `productsize`
--
ALTER TABLE `productsize`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product` (`product`),
  ADD KEY `size` (`size`);

--
-- Индексы таблицы `remainder`
--
ALTER TABLE `remainder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `colorproduct` (`colorproduct`),
  ADD KEY `productsize` (`productsize`),
  ADD KEY `product` (`product`);

--
-- Индексы таблицы `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `idzakaz` (`idzakaz`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brends`
--
ALTER TABLE `brends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT для таблицы `colorproducts`
--
ALTER TABLE `colorproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `fotoproducts`
--
ALTER TABLE `fotoproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT для таблицы `productsize`
--
ALTER TABLE `productsize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT для таблицы `remainder`
--
ALTER TABLE `remainder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `brends`
--
ALTER TABLE `brends`
  ADD CONSTRAINT `brends_ibfk_1` FOREIGN KEY (`section`) REFERENCES `sections` (`id`);

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`section`) REFERENCES `sections` (`id`);

--
-- Ограничения внешнего ключа таблицы `fotoproducts`
--
ALTER TABLE `fotoproducts`
  ADD CONSTRAINT `fotoproducts_ibfk_1` FOREIGN KEY (`products`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fotoproducts_ibfk_2` FOREIGN KEY (`colorproduct`) REFERENCES `colors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
