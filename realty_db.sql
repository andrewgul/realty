-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 19 2020 г., 23:58
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `realty_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `realty`
--

CREATE TABLE `realty` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` varchar(1000) NOT NULL,
  `addr` varchar(255) NOT NULL,
  `coord` varchar(255) NOT NULL,
  `ph1` varchar(255) DEFAULT NULL,
  `ph2` varchar(255) DEFAULT NULL,
  `ph3` varchar(255) DEFAULT NULL,
  `kids` tinyint(1) DEFAULT NULL,
  `pets` tinyint(1) DEFAULT NULL,
  `refr` tinyint(1) DEFAULT NULL,
  `tv` tinyint(1) DEFAULT NULL,
  `balc` tinyint(1) DEFAULT NULL,
  `wash` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `realty`
--

INSERT INTO `realty` (`id`, `title`, `descr`, `addr`, `coord`, `ph1`, `ph2`, `ph3`, `kids`, `pets`, `refr`, `tv`, `balc`, `wash`) VALUES
(1, 'Уютный домик у озера', 'Домик находится у озера, вокруг очень красивая природа. Предназначен для летнего проживания.', 'Тверская область, деревня Иваново', '57.767971, 34.908426', '../photos/dokmik_u_ozera_1.jpeg', '../photos/domik_u_ozera_2.jpg', '', 1, 1, 1, 1, 0, 0),
(2, 'Квартира на Невском', 'Квартира находится в старинном доме на Невском проспекте. Очень просторная. До Московского вокзала 5 минут пешком.', 'г. Санкт-Петербург, Невский проспект, дом 17', '59.939095, 30.315868', '../photos/piter.jpg', '', '', 1, 0, 1, 0, 1, 1),
(3, 'Сдам комнату у м. Щелковская', 'Комната в коммунальной квартире. Соседи очень культурные. До метро 15 минут пешком (также ходит автобус). Рассмотрю все предложения! ', 'Щелковское шоссе, дом 101', '55.810081, 37.795717', '', '', '', 0, 0, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', '12345');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `realty`
--
ALTER TABLE `realty`
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
-- AUTO_INCREMENT для таблицы `realty`
--
ALTER TABLE `realty`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
