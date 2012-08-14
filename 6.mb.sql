-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Авг 11 2012 г., 17:44
-- Версия сервера: 5.5.25a
-- Версия PHP: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `6.mb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', '0c800f4444be6e3c0eaece64829409fc');

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_d` varchar(255) CHARACTER SET utf8 NOT NULL,
  `meta_k` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `title`, `tag`, `meta_d`, `meta_k`, `content`, `date`, `time`) VALUES
(7, 'Captcha', 'Captcha', 'Captcha', 'Captcha', 'Captcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha CaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptchaCaptcha', '2012-08-11', '17:12:09'),
(8, 'Download', 'Download', 'Download', 'Download', 'downloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownloaddownload', '2012-08-14', '17:36:40');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(1, '67567'),
(2, 'ghjkghjk'),
(3, 'ghjkghjk'),
(4, 'sdfgsdfg'),
(5, 'sdfgsdfg'),
(6, 'sdfgsdfg'),
(7, 'sdfgsdfgdg'),
(8, 'sdfgsdfg'),
(9, 'sdfgsdfg'),
(10, 'sdfgsdfg'),
(11, 'sdfgsdfg'),
(12, 'sdfgsdfg444444444444'),
(13, 'asdasd'),
(14, '123'),
(15, 'fsdfsdf'),
(16, '111zcxdd'),
(17, 'a222');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
