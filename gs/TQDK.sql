-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 18 2019 г., 18:06
-- Версия сервера: 5.7.20
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
-- База данных: `TQDK`
--

-- --------------------------------------------------------

--
-- Структура таблицы `begineElmiT`
--

CREATE TABLE `begineElmiT` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `body` text NOT NULL,
  `done` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `begineElmiT`
--

INSERT INTO `begineElmiT` (`id`, `header`, `body`, `done`) VALUES
(1, 'научный заголовок', 'научный -------------', '1'),
(2, 'научный заголовок2', 'научный -------------2', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `begineKurs`
--

CREATE TABLE `begineKurs` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `body` text NOT NULL,
  `done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `begineKurs`
--

INSERT INTO `begineKurs` (`id`, `header`, `body`, `done`) VALUES
(2, 'новый заголовок', 'новое содержимое77777777999', 1),
(3, 'новый заголовок', 'новое содержимое77777', 0),
(4, 'новый заголовок9900', 'новое содержимое44555555', 0),
(5, 'новый заголовок', 'новое содержимое77777', 0),
(6, 'новый заголовок888', 'новое содержимое8888', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `begineLayhe`
--

CREATE TABLE `begineLayhe` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `body` text NOT NULL,
  `done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `begineLayhe`
--

INSERT INTO `begineLayhe` (`id`, `header`, `body`, `done`) VALUES
(1, 'новый заголовок1', 'вапаааааа', 1),
(2, 'новый', 'новый 1111', 0),
(3, 'новый88', 'новый 1111888', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `begineTelim`
--

CREATE TABLE `begineTelim` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `body` text NOT NULL,
  `done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `begineTelim`
--

INSERT INTO `begineTelim` (`id`, `header`, `body`, `done`) VALUES
(2, 'новый заголовок', 'новое содержимое', 0),
(3, 'новый заголовок1ы', 'здесь будет текст', 1),
(5, 'новый заголовок45', 'новое содержимое44', 1),
(8, 'новый заголовок9900', 'новое содержимое77777', 0),
(9, 'новый заголовок9900', 'новое содержимое77777', 0),
(10, 'новый заголовокл', 'содержимое', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `alt` text NOT NULL,
  `text_one` text NOT NULL,
  `text_two` text NOT NULL,
  `color_text` text NOT NULL,
  `background` text NOT NULL,
  `textOneSize` int(11) NOT NULL,
  `textTwoSize` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `images`, `alt`, `text_one`, `text_two`, `color_text`, `background`, `textOneSize`, `textTwoSize`) VALUES
(1, 'images/bg.png', 'content', 'здесь будет Ваш текст', 'второй текст', 'green', 'silver', 35, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `footerAds`
--

CREATE TABLE `footerAds` (
  `id` int(11) NOT NULL,
  `header` text NOT NULL,
  `body` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `footerAds`
--

INSERT INTO `footerAds` (`id`, `header`, `body`, `date`) VALUES
(1, 'new Ads', 'content Ads', '2019-05-15'),
(2, 'new ads m2', 'footerAddAds', '2019-05-11');

-- --------------------------------------------------------

--
-- Структура таблицы `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `galery`
--

INSERT INTO `galery` (`id`, `images`, `alt`) VALUES
(7, 'images/skype.png', 'kkk'),
(8, 'images/helps.jpg', 'yyy'),
(10, 'images/help.png', 'jjj'),
(12, 'images/skype.png', 'yyy');

-- --------------------------------------------------------

--
-- Структура таблицы `psihological_background`
--

CREATE TABLE `psihological_background` (
  `id` int(11) NOT NULL,
  `background` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `psihological_background`
--

INSERT INTO `psihological_background` (`id`, `background`) VALUES
(1, '#3c68e2');

-- --------------------------------------------------------

--
-- Структура таблицы `psihological_image`
--

CREATE TABLE `psihological_image` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `psihological_image`
--

INSERT INTO `psihological_image` (`id`, `images`, `alt`) VALUES
(1, 'images/bg.png', 'test');

-- --------------------------------------------------------

--
-- Структура таблицы `psihological_textOne`
--

CREATE TABLE `psihological_textOne` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `color` text NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `psihological_textOne`
--

INSERT INTO `psihological_textOne` (`id`, `text`, `color`, `size`) VALUES
(1, 'здесь будет Ваш текст', 'green', 35);

-- --------------------------------------------------------

--
-- Структура таблицы `psihological_textTwo`
--

CREATE TABLE `psihological_textTwo` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `color` text NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `psihological_textTwo`
--

INSERT INTO `psihological_textTwo` (`id`, `text`, `color`, `size`) VALUES
(1, 'второй текст', 'silver', 20);

-- --------------------------------------------------------

--
-- Структура таблицы `service_kurslar`
--

CREATE TABLE `service_kurslar` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service_kurslar`
--

INSERT INTO `service_kurslar` (`id`, `images`, `alt`) VALUES
(1, 'images/bg.png', '');

-- --------------------------------------------------------

--
-- Структура таблицы `service_layhe`
--

CREATE TABLE `service_layhe` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service_layhe`
--

INSERT INTO `service_layhe` (`id`, `images`, `alt`) VALUES
(1, 'images/bg.png', 'kurs');

-- --------------------------------------------------------

--
-- Структура таблицы `service_telimler`
--

CREATE TABLE `service_telimler` (
  `id` int(11) NOT NULL,
  `images` text NOT NULL,
  `alt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `service_telimler`
--

INSERT INTO `service_telimler` (`id`, `images`, `alt`) VALUES
(1, 'images/bg.png', '');

-- --------------------------------------------------------

--
-- Структура таблицы `userNews`
--

CREATE TABLE `userNews` (
  `id` int(11) NOT NULL,
  `headers` text NOT NULL,
  `body` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userNews`
--

INSERT INTO `userNews` (`id`, `headers`, `body`, `date`) VALUES
(1, 'новость 1', 'содержания новости ', '2019-05-17'),
(2, 'Новость 2', 'footerBodyHews', '2019-05-12');

-- --------------------------------------------------------

--
-- Структура таблицы `userTestPsi`
--

CREATE TABLE `userTestPsi` (
  `id` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `src` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `userTestPsi`
--

INSERT INTO `userTestPsi` (`id`, `width`, `height`, `src`, `content`) VALUES
(1, 300, 260, 'https://www.youtube.com/embed/qN4ooNx77u0', 'здесь будет текстздес\r\nздесь будет текстздес'),
(3, 300, 260, 'https://www.youtube.com/embed/nlcIKh6sBtc', 'userTestPsiAdduserTestPsiAdd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `begineElmiT`
--
ALTER TABLE `begineElmiT`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `begineKurs`
--
ALTER TABLE `begineKurs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `begineLayhe`
--
ALTER TABLE `begineLayhe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `begineTelim`
--
ALTER TABLE `begineTelim`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `footerAds`
--
ALTER TABLE `footerAds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userNews`
--
ALTER TABLE `userNews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `userTestPsi`
--
ALTER TABLE `userTestPsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `begineElmiT`
--
ALTER TABLE `begineElmiT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `begineKurs`
--
ALTER TABLE `begineKurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `begineLayhe`
--
ALTER TABLE `begineLayhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `begineTelim`
--
ALTER TABLE `begineTelim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `footerAds`
--
ALTER TABLE `footerAds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `userNews`
--
ALTER TABLE `userNews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `userTestPsi`
--
ALTER TABLE `userTestPsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
