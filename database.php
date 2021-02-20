<?php
-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 03:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `number` int(20) NOT NULL,
  `name` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `gender`, `email`, `password`, `number`, `name`) VALUES
(1, 'muniyappan', 'kxnakl/', 'male', 'chandarmtsb0007@gmail.com', '', 12345, 'banu chandar'),
(1, 'muniyappan', 'kldwqd/lkd', 'm', 'chandardev007@gmail.com', 'kdwmqk/l', 111, ''),
(1, 'llndlq.kc', 'kxnakl/', 'f', 'xldqldjqwklqwql', 'm,naskndakldnqkl', 111, ''),
(442424, 'banu', 'chandar', '', '', '', 0, ''),
(442424, 'banu ', 'chandar', 'male', 'tester@gmail.com', '12345', 12345, 'banu chandar'),
(0, 'hello', 'hello', 'o', 'hello@gmail.com', '12345', 1234, ''),
(0, 'hello', 'hello', 'o', 'hello@gmail.com', '12345', 1234, ''),
(0, 'ME', 'DDW', 'o', 'optimus@example.com', '12345', 12345, ''),
(0, 'optimus ', 'prime', 'm', 'prime@gmail.com', '12345', 6666, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
