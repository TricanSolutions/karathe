-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2015 at 12:57 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xyz`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `image` varchar(255) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `country` char(50) NOT NULL,
  `dob` date NOT NULL,
  `regDate` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `mobile` (`mobile`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `mobile`, `gender`, `image`, `hobbies`, `country`, `dob`, `regDate`) VALUES
(1, 'raj', 'raj@gmail.com', 'raj', 'new delhi', 8888888888, 'm', 'Chrysanthemum.jpg', 'cricke,singing', 'india', '1901-02-02', '2015-03-20 12:46:04'),
(2, 'ravi', 'ravi@gmai.com', 'ddd', 'noida', 7777777777, 'm', 'Desert.jpg', 'cricke,singing', 'pakistan', '1901-02-03', '2015-03-20 12:48:42'),
(3, 'shilpi', 'shilpi@gmail.com', 'shilip', 'noia', 888888, 'f', 'Hydrangeas.jpg', 'cricke', 'pakistan', '1916-08-17', '2015-03-20 12:49:15'),
(4, 'abhi', 'abhi@gmail.com', 'abhi', 'kkkkkkkk', 0, 'm', 'Jellyfish.jpg', 'cricke,singing', 'china', '1901-03-02', '2015-03-20 12:49:38'),
(5, 'soni', 'soni@gmail.com', 'soni', 'kkkkkkk', 6666666666, 'f', 'Koala.jpg', 'cricke', 'china', '1902-02-03', '2015-03-20 12:50:00'),
(6, 'aaajay', 'ajay@gmail.com', 'ajay', 'ddddddd', 709870808, 'm', 'Koala.jpg', 'cricke,singing', 'india', '1902-03-03', '2015-03-20 12:50:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
