-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 22 2023 г., 13:59
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rustam`
--

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `fakulty_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `direction`
--

INSERT INTO `direction` (`id`, `name`, `fakulty_id`) VALUES
(1, 'fewfc', 1),
(2, 'dewde', 2),
(3, 'dedew', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `fakulty`
--

CREATE TABLE `fakulty` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `fakulty`
--

INSERT INTO `fakulty` (`id`, `name`) VALUES
(1, 'dewcew'),
(2, 'fewf'),
(3, 'dewfc'),
(4, 'wef'),
(5, 'dewfc'),
(6, 'fewfc');

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `fakulty_id` int NOT NULL,
  `direction_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `fakulty_id`, `direction_id`) VALUES
(3, 'refre', 1, 1),
(4, 'erfe', 2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `code` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `code`) VALUES
(1, 'Obloqulov', 'obloqulov@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fakulty`
--
ALTER TABLE `fakulty`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
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
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `fakulty`
--
ALTER TABLE `fakulty`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
