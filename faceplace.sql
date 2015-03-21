-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2015 at 11:40 PM
-- Server version: 5.5.40-MariaDB-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faceplac_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `poster` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `username` (`user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user`, `poster`, `comment`, `time`) VALUES
(1, 'hercules', 'hercules', 'Gonna go fight some evil!', '2015-02-12 03:41:41'),
(2, 'hercules', 'hades', 'Hey I just saw a goose harassing a girl, was that your dad again?\r\nHADES BURN!', '2015-02-12 03:41:41'),
(3, 'hercules', 'hercules', 'I''m free!!', '2015-02-12 03:41:41'),
(5, 'hercules', 'hercules', 'these sandles are giving me blisters...', '2015-02-12 03:41:41'),
(6, 'hades', 'hercules', 'quit being a jerk, candle head', '2015-02-12 03:41:41'),
(7, 'apollo', 'hera', 'neeeeeerd', '2015-02-12 04:23:05'),
(8, 'zeus', 'hera', 'i found one of my old sandles, perhaps you could turn into a ferret and impregnate that too', '2015-02-12 04:24:27'),
(9, 'zeus', 'hades', 'Why don''t you ever visit me anymore, too busy harassing peasant girls?', '2015-02-13 12:32:22'),
(10, 'hades', 'hades', 'this guy just came in, you wouldn''t believe what he used a pineapple for, oh my zeus!', '2015-02-13 13:17:56'),
(11, 'hera', 'hades', 'i just saw zeus running around as a goose again, you should check that out', '2015-02-17 04:42:34'),
(12, 'apollo', 'apollo', 'anyone stub their toe? bit by a snake? anything?', '2015-02-17 05:48:59'),
(13, 'agememnon', 'agememnon', 'you take one hot slave, and suddenly everyone''s pissed off', '2015-02-17 06:01:54'),
(14, 'athena', 'athena', 'feel a headache coming on, nobody better jet out of my head', '2015-02-17 06:10:07'),
(15, 'ares', 'ares', 'ares!!\r\n', '2015-02-17 06:13:47'),
(16, 'Mariah', 'Mariah', 'I''m thinking about pizza ', '2015-02-17 06:19:50'),
(17, 'Mariah', 'hades', 'i made pizza once, it was burnt before it went in the oven', '2015-02-17 06:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(2083) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://i.imgur.com/9oEQO8i.png',
  `profile` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `image`, `profile`) VALUES
(1, 'hercules', 'L.rd.XMf70PX6', 'http://i.imgur.com/TFAL1X4.jpg', 'just the average hero'),
(2, 'hades', 'mly35LoTqeJJs', 'http://i.imgur.com/MbLr1HC.jpg', 'see you later, in hell, where you''re going, you''re going to hell, see you later there'),
(3, 'apollo', 'bf2USV66hYQuo', 'http://i.imgur.com/Co8qvii.jpg', 'i''m apollo! remember me??'),
(4, 'zeus', 'urD9AyCj.c91g', 'http://i.imgur.com/iPIbSB0.jpg', 'always looking to party'),
(5, 'hera', 'KyXVksdARLZNE', 'http://i.imgur.com/bQjTc9D.jpg', 'tell me if zeus is up to something again'),
(6, 'athena', 'r90IdiKUXk/Rc', 'http://i.imgur.com/bQjTc9D.jpg', 'goddess of ass-kicking and name-taking'),
(7, 'agememnon', '$1$YTVykPTW$6shvpRMfSNpKWi/cBBcLL.', 'http://i.imgur.com/UtFP59h.jpg', NULL),
(8, 'paris', '$2y$14$aJZlemk24.ATqcnz9ITOuO6wwrVVVIaFrBFTFpozWmRhiKvaPwpgO', 'http://i.imgur.com/9oEQO8i.png', NULL),
(10, 'ares', '$2y$14$chgdXfTJoF0VjUbeX10l5eluckyFNWYEikTJFvDG6iCna471bS2Q2', 'http://i.imgur.com/9oEQO8i.png', NULL),
(11, 'Mariah', '$2y$14$vwpCfv8TqQl.Q6pTG7ZRW.50ZfdLQrcCGoSk3PdjIZdR4/Q5lXh4W', 'http://th05.deviantart.net/fs70/PRE/i/2012/152/9/a/marceline_rocks__by_aeroire-d51uzzm.png', 'I am a robot. BEEP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
