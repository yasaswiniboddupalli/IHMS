-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 08:19 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'yashu', 'yashu@gmail.com', '12345'),
(2, 'yashu1', 'yashu1@gmail.com', '12345'),
(3, 'lasya', 'lasyasriboddupalli@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'yashaswini', 'yasaswini1205@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'yashu', 'yashu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'yashu', 'yashu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'yashu', 'yashu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'mallika', 'mallika@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'mallika', 'mallikagelli@gmail.com', 'f6329b3c6160b75b80b04588eebd838b'),
(10, 'mama', 'mama@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(13, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(14, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(15, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, '', '', 'd41d8cd98f00b204e9800998ecf8427e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
