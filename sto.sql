-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 09 2020 г., 21:44
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sto`
--

-- --------------------------------------------------------

--
-- Структура таблицы `generation`
--

CREATE TABLE `generation` (
  `id` int(11) NOT NULL,
  `old_link` varchar(255) NOT NULL,
  `new_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `generation`
--

INSERT INTO `generation` (`id`, `old_link`, `new_link`) VALUES
(1, 'Hy', 'https://sto.local/2APu4Z9rJL2KLn'),
(2, 'http://sto.local/', 'https://sto.local/YF18I666iTy9mcH'),
(3, 'https://google.com', 'i4lx7fSou');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `generation`
--
ALTER TABLE `generation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `new_link` (`new_link`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `generation`
--
ALTER TABLE `generation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
