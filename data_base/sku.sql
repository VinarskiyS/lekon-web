-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 08 2025 г., 18:56
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lekon_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sku`
--

CREATE TABLE `sku` (
  `num` int UNSIGNED NOT NULL,
  `group_id` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `article` varchar(6) NOT NULL,
  `color` varchar(18) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `atribut` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `sku`
--

INSERT INTO `sku` (`num`, `group_id`, `name`, `article`, `color`, `atribut`) VALUES
(12, 'pencil', 'vector', '00000', 'black', 'HB / D 2.8 мм'),
(103, 'marker-n', 'standart-4', '011104', 'red', '4 mm'),
(106, 'marker-n', 'standart-4', '011304', 'yellow', '4 mm'),
(108, 'marker-n', 'standart-4', '011314', 'gold', '4 mm'),
(105, 'marker-n', 'standart-4', '011404', 'green', '4 mm'),
(104, 'marker-n', 'standart-4', '011604', 'blue', '4 mm'),
(202, 'marker-n', 'standart-2', '011802', 'black', '2 mm'),
(102, 'marker-n', 'standart-4', '011804', 'black', '4 mm'),
(201, 'marker-n', 'standart-2', '011902', 'white', '2 mm'),
(101, 'marker-n', 'standart-4', '011904', 'white', '4 mm'),
(107, 'marker-n', 'standart-4', '011914', 'silver', '4 mm'),
(42, 'marker-p', 'refresh', '012012', 'red', '4 mm'),
(43, 'marker-p', 'refresh', '012063', 'blue', '4 mm'),
(41, 'marker-p', 'refresh', '012083', 'black', '4 mm'),
(40, 'marker-p', 'logistic', '012183', 'black', '3 mm'),
(62, 'marker-p', 'duo', '012211', 'red', '3 mm'),
(63, 'marker-p', 'duo', '012261', 'blue', '3 mm'),
(61, 'marker-p', 'duo', '012281', 'black', '3 mm'),
(80, 'marker-p', 'extra-white', '012393', 'white', '3 mm'),
(32, 'marker-p', 'econom', '012413', 'red', '3 mm'),
(33, 'marker-p', 'econom', '012463', 'blue', '3 mm'),
(31, 'marker-p', 'econom', '012483', 'black', '3 mm'),
(53, 'marker-p', 'pika', '012511', 'red', '1 mm'),
(54, 'marker-p', 'pika', '012561', 'blue', '1 mm'),
(52, 'marker-p', 'pika', '012581', 'black', '1 mm'),
(51, 'marker-p', 'pika', '012591', 'white', '4 mm'),
(93, 'marker-n', 'econom', '013814', 'red', '3 mm'),
(94, 'marker-n', 'econom', '013864', 'blue', '3 mm'),
(92, 'marker-n', 'econom', '013884', 'black', '3 mm'),
(91, 'marker-n', 'econom', '013894', 'white', '3 mm'),
(10, 'pencil', 'profi', '014016', 'orange_p', 'HB / 3x6 мм'),
(11, 'pencil', 'contur', '014101', 'black', 'HB / D 2.8 мм'),
(1, 'pencil', 'oval', '014112', 'orange_p', 'HB / 2.6x4 мм'),
(2, 'pencil', 'oval', '014113', 'yellow_p', 'HB / 2.6x4 мм'),
(3, 'pencil', 'oval', '014114', 'green_p', 'HB / 2.6x4 мм'),
(24, 'lead', 'lead', '014311', 'red', 'H'),
(25, 'lead', 'lead', '014312', 'red', '2B'),
(26, 'lead', 'lead', '014313', 'red', 'HB'),
(27, 'lead', 'lead', '014331', 'yellow', 'H'),
(28, 'lead', 'lead', '014332', 'yellow', '2B'),
(21, 'lead', 'lead', '014391', 'black', 'H'),
(22, 'lead', 'lead', '014392', 'black', '2B'),
(23, 'lead', 'lead', '014393', 'black', 'HB'),
(303, 'marker-n', 'profi', '018104', 'red', '4 mm'),
(304, 'marker-n', 'profi', '018604', 'blue', '4 mm'),
(302, 'marker-n', 'profi', '018804', 'black', '4 mm'),
(301, 'marker-n', 'profi', '018904', 'white', '4 mm');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `sku`
--
ALTER TABLE `sku`
  ADD UNIQUE KEY `article` (`article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
