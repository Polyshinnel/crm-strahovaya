-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 10 2021 г., 16:41
-- Версия сервера: 5.6.38
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
-- База данных: `crm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `deals`
--

CREATE TABLE `deals` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `date` datetime NOT NULL,
  `type` varchar(256) NOT NULL,
  `name_applicant` varchar(256) NOT NULL,
  `name_organization` varchar(256) NOT NULL,
  `id_stage` int(10) NOT NULL,
  `id_responsebility` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deals`
--

INSERT INTO `deals` (`id`, `name`, `date`, `type`, `name_applicant`, `name_organization`, `id_stage`, `id_responsebility`) VALUES
(1, 'У-21-99722', '2021-09-07 03:00:00', 'Независимая техническая экспертиза поврежденных ТС включая расчет УТС (В рамках ОСАГО)', 'Устименко Ангелина Юрьевна', 'АО«СОГАЗ»', 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `deals_description`
--

CREATE TABLE `deals_description` (
  `id` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `text` varchar(2560) NOT NULL,
  `deals_what` varchar(512) NOT NULL,
  `deals_id` int(10) NOT NULL,
  `author_id` int(10) NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `deals_description`
--

INSERT INTO `deals_description` (`id`, `type`, `text`, `deals_what`, `deals_id`, `author_id`, `date_add`) VALUES
(1, 1, 'Тестовый комментарий', ' ', 1, 1, '2021-09-08 12:06:00');

-- --------------------------------------------------------

--
-- Структура таблицы `stages`
--

CREATE TABLE `stages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stages`
--

INSERT INTO `stages` (`id`, `name`, `color`) VALUES
(1, 'Не разобрано', '#000'),
(2, 'Принял в работу', '#7FFF00'),
(3, 'Началось исполнение', '#32CD32'),
(4, 'Исполнитель', '#DC143C'),
(5, 'На проверке', '#FF4500'),
(6, 'На отправку', '#00BFFF'),
(7, 'Отправлено', '#FFD700');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `role` int(10) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `password`) VALUES
(1, 'Нестеров Андрей', 0, '123');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `deals_description`
--
ALTER TABLE `deals_description`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stages`
--
ALTER TABLE `stages`
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
-- AUTO_INCREMENT для таблицы `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `deals_description`
--
ALTER TABLE `deals_description`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `stages`
--
ALTER TABLE `stages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
