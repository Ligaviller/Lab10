-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 27 2018 г., 19:50
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Workers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Workers`
--

CREATE TABLE IF NOT EXISTS `Workers` (
  `ID` int(5) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Function` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Workers`
--

INSERT INTO `Workers` (`ID`, `Name`, `Last_Name`, `Function`) VALUES
(1, 'Павел', 'Иванов', 'Инженер-проектировщик'),
(3, 'Александр', 'Пшонов', 'фуллстэк-пограмист'),
(8, 'Владилен', 'Замышляев', 'Бэк-энд макака'),
(14, 'Лёша', 'Алексей', 'Фронт-энд макака');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Workers`
--
ALTER TABLE `Workers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Workers`
--
ALTER TABLE `Workers`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
