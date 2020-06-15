-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 15 2020 г., 10:10
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `useremail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `edited` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `username`, `useremail`, `text`, `status`, `edited`) VALUES
(1, 'fd', 'dfw@fdvs.ti', 'ffffffffffff', 0, 0),
(2, 'fd', 'dfw@fdvs.ti', 'ffffffffffffkihjkkkkkkkkkkkkkkkkkkkkkkjkjkjkjkjkjkjkj', 0, 0),
(3, 'fdfewf', 'dfw@fdvs.ti', 'ffffffffffffkihjkkkkkkkkkkkkkkkkkkkkkkjkjkjkjkjkjkjkj', 0, 0),
(4, 'fdfewf', 'dfw@fdvs.ti', 'ffffffffffffkihjkkkkkkkkkefe', 0, 0),
(5, 'fdfsdf', 'dffffw@fdvs.ti', 'dfvvvvvvvedf', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `hash`, `ip`) VALUES
(1, 'yashka', '12345', 'dZamjNY', '127.0.0.1'),
(2, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', 'dZamjNY', '127.0.0.1'),
(3, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(4, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(5, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(6, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(7, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(8, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(9, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(10, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(11, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(12, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(13, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(14, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(15, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(16, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(17, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(18, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(19, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL),
(20, 'yashka1', 'c64be1bdd5440a33281f7d147dd0e6e5', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
