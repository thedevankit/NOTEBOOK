-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 04:22 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `storybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `sender` varchar(250) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `ip` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender`, `msg`, `date`, `ip`) VALUES
(1, 'fdghn', 'sdfghjkl', '0000-00-00 00:00:00.000000', ''),
(2, 'xdrty', 'er6', '0000-00-00 00:00:00.000000', ''),
(3, 'ankit', 'hiiii', '0000-00-00 00:00:00.000000', ''),
(4, 'ritz', 'hiiii', '0000-00-00 00:00:00.000000', ''),
(5, 'ankit', 'wehere is my books', '0000-00-00 00:00:00.000000', ''),
(6, 'ritz', 'check it in your bag', '0000-00-00 00:00:00.000000', ''),
(7, 'ritz ', 'where are you', '0000-00-00 00:00:00.000000', ''),
(8, 'ankit', 'at cbs', '0000-00-00 00:00:00.000000', ''),
(9, 'alpesh', 'Hiii', '0000-00-00 00:00:00.000000', ''),
(10, 'Sonje', 'hii Alpesh', '0000-00-00 00:00:00.000000', ''),
(11, 'Alpesh Vasani', 'hii Rhit', '0000-00-00 00:00:00.000000', ''),
(12, 'qqqq', 'qqq', '0000-00-00 00:00:00.000000', ''),
(13, 'q', 'q', '0000-00-00 00:00:00.000000', ''),
(14, 'aq', 'q', '0000-00-00 00:00:00.000000', ''),
(15, 'a', 'a', '0000-00-00 00:00:00.000000', ''),
(16, 'archana', 'hiiii', '0000-00-00 00:00:00.000000', ''),
(17, 'ankit', 'hiiii', '0000-00-00 00:00:00.000000', ''),
(18, 'archana', 'wassup all', '0000-00-00 00:00:00.000000', ''),
(19, 'ankit', 'nothing ', '0000-00-00 00:00:00.000000', ''),
(20, 'ankit', 'nothing ', '0000-00-00 00:00:00.000000', ''),
(21, 'archana', 'check it in your bag', '0000-00-00 00:00:00.000000', ''),
(22, 'charu', 'hiii baby', '0000-00-00 00:00:00.000000', ''),
(23, 'charu', 'hiii baby', '0000-00-00 00:00:00.000000', ''),
(24, 'ritesh D', 'bol baby', '0000-00-00 00:00:00.000000', ''),
(25, 'charu', 'kaay chalay raje', '0000-00-00 00:00:00.000000', ''),
(26, 'ritesh D', 'kahi nahi majet , tumcha saanga mastani shahiba', '0000-00-00 00:00:00.000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE IF NOT EXISTS `stories` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `topic` varchar(100) NOT NULL,
  `feeling` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `story` varchar(1500) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `likes` int(20) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `writer` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `topic`, `feeling`, `title`, `story`, `ip`, `datetime`, `likes`, `photos`, `writer`) VALUES
(77, 'My Story', 'Happy', 'todays meet up at college road', 'erhjkdefghjkf tfgvm tyu k8yv,cfvbn  y v', '127.0.0.1', '2017-09-25 12:26:13', 0, 'intro-marketing.jpg', 'kalyani'),
(80, 'Computer and Technology', 'studying', 'dbms note by ankit singh', 'its a data base related book useful for dsy and 3rd year students.', '127.0.0.1', '2017-09-27 17:15:53', 0, 'Presentation1.pdf', 'ankit singh'),
(81, 'Other', 'studying', 'My story', 'hii this is CEO of Grazzrs corp', '127.0.0.1', '2017-09-28 07:13:24', 0, 'khushboo image classifier.txt', 'tikaram'),
(82, 'Computer and Technology', 'studying', 'sdl notes', 'now notes by ', '127.0.0.1', '2017-09-28 07:22:51', 0, 'Presentation1.pdf', 'ankit singh'),
(83, 'Computer and Technology', 'studying', 'cn pract', 'alol pract of cn', '127.0.0.1', '2017-09-28 10:10:00', 0, 'Presentation1.pdf', 'ankit singh'),
(84, 'IT', 'Book', 'computer network', 'chapter 1 to 3 notes , for practical AND theory papers.', '127.0.0.1', '2017-10-04 17:27:47', 0, 'Presentation1.pdf', 'ankit singh'),
(85, 'Computer', 'Book', 'SDL', 'NOTES BY RITU', '127.0.0.1', '2017-10-09 12:20:26', 0, 'compressed_rashankard2.pdf', 'RITU'),
(86, 'IT', 'Book', 'computer network v', '435789pi', '127.0.0.1', '2017-10-14 09:15:20', 0, 'compressed_rashankard2.pdf', 'ankit singh'),
(87, 'Computer', 'Book', 'My story', 'zfs fg h', '127.0.0.1', '2017-10-14 09:16:20', 0, 'compressed_rashankard2.pdf', 'ankit singh'),
(74, 'Books and Magazines', 'sad', 'hello welcome to gescoe', 'wel come to gescoer sd', '127.0.0.1', '2017-09-24 12:58:05', 0, 'cog.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `about` varchar(240) NOT NULL,
  `password` varchar(40) NOT NULL,
  `regdate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `ipaddress` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `about`, `password`, `regdate`, `ipaddress`) VALUES
(2, 'ankit singh', 'ankit1@gmail.com', 'asdaada mn m m m.', '827ccb0eea8a706c4c34a16891f84e7b', '2017-09-27 15:18:30.000000', '127.0.0.1'),
(5, 'ankit singh', 'ankit@gmail.com', 'student of gescoe.', '827ccb0eea8a706c4c34a16891f84e7b', '2017-09-28 07:20:17.000000', '127.0.0.1'),
(4, 'tikaram', 'yoyoa@gmail.com', 'hiiiiiiii', '3b6beb51e76816e632a40d440eab0097', '2017-09-28 07:12:21.000000', '127.0.0.1'),
(6, 'admin', 'admin@gmail.com', 'i m admin of this tool.', '827ccb0eea8a706c4c34a16891f84e7b', '2017-09-28 09:38:42.000000', '127.0.0.1'),
(7, 'tejal', 'atejaln@gmail.com', 'student of gescoe', 'ea44bdda02f318b1e22c358c238cb4b3', '2017-09-28 10:07:10.000000', '127.0.0.1'),
(8, 'RITU', 'RITU@ABC.COM', 'STUDENT', '202cb962ac59075b964b07152d234b70', '2017-10-09 12:03:38.000000', '127.0.0.1'),
(9, 'vishal gadge', 'vish@gmail.com', 'student of gescoe', '81dc9bdb52d04dc20036dbd8313ed055', '2017-10-11 05:41:33.000000', '127.0.0.1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
