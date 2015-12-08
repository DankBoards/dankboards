-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 08 dec 2015 kl 11:01
-- Serverversion: 5.6.16
-- PHP-version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `forum`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `inlagg`
--

CREATE TABLE IF NOT EXISTS `inlagg` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `rubrik` varchar(128) CHARACTER SET latin1 NOT NULL,
  `userid` int(25) NOT NULL,
  `content` varchar(512) CHARACTER SET latin1 NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_swedish_ci AUTO_INCREMENT=27 ;

--
-- Dumpning av Data i tabell `inlagg`
--

INSERT INTO `inlagg` (`id`, `rubrik`, `userid`, `content`, `date`) VALUES
(22, 'Potatis', 1, 'Cheeseburgare med ost!', '1899-11-30 00:00:01'),
(23, 'Potatis', 1, 'Cheeseburgare oster!', '0000-00-00 00:00:00'),
(24, 'Potatis', 1, 'Cheeseburgare oster!', '0000-00-00 00:00:00'),
(25, 'test', 12, 'test', '2015-12-08 10:07:38'),
(26, 'Kollar om inlÃ¤gg funkar!', 12, 'Hejsan testar bara detta, ska se om datum och tid stÃ¤mmer samt lÃ¤gger upp rÃ¤tt saker till databaser.\r\n\r\n#1', '2015-12-08 10:09:31');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usergroup` int(25) NOT NULL,
  `regdate` datetime NOT NULL,
  `email` varchar(30) NOT NULL,
  `avatar` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usergroup`, `regdate`, `email`, `avatar`) VALUES
(1, 'React', 'password', 1, '0000-00-00 00:00:00', 'tvreact@gmail.com', 'https://s-media-cache-ak0.pinimg.com/736x/1a/06/6f/1a066ffa655422d743529698ef6f4a8c.jpg'),
(12, 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '2015-12-08 10:01:23', '', 'https://s-media-cache-ak0.pinimg.com/736x/1a/06/6f/1a066ffa655422d743529698ef6f4a8c.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
