-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2014 at 04:30 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `musictime`
--
CREATE DATABASE IF NOT EXISTS `musictime` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `musictime`;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `song_name` varchar(50) NOT NULL,
  `album` varchar(25) NOT NULL,
  `artist` varchar(25) NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` text,
  `audio` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `song_name`, `album`, `artist`, `release_date`, `genre`, `image`, `description`, `audio`) VALUES
(1, 'Box of Rain', 'American Beauty', 'Grateful Dead', '1970-11-01', 'Psychedelia', 'something.jpg', 'Grateful Dead', 'something.wav');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'klgrimley', 'Kevin', 'Grimley', 'klgrimley@hotmail.com', '12345678', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
