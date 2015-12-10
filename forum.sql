-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 10 dec 2015 kl 10:23
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
  `born` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `steamid` varchar(100) NOT NULL,
  `bio` varchar(1024) NOT NULL,
  `likes` int(128) NOT NULL,
  `signatur` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `usergroup`, `regdate`, `email`, `avatar`, `born`, `gender`, `steamid`, `bio`, `likes`, `signatur`) VALUES
(1, 'React', 'password', 1, '0000-00-00 00:00:00', 'tvreact@gmail.com', 'https://s-media-cache-ak0.pinimg.com/736x/1a/06/6f/1a066ffa655422d743529698ef6f4a8c.jpg', '0000-00-00', 'Male', 'STEAM_0:0:1324515', 'Jag är en pojke som gillar korv.', 3129, 'Jag älskar hästar.'),
(12, 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99', 0, '2015-12-08 10:01:23', '', 'https://s-media-cache-ak0.pinimg.com/736x/1a/06/6f/1a066ffa655422d743529698ef6f4a8c.jpg', '0000-00-00', 'Female', '', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
