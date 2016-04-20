-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2016 at 01:30 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1-log
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u1267493`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `due_date` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `task_progress` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `task_name`, `task_description`, `due_date`, `create_date`, `task_progress`) VALUES
(103, 43, 'deadline due 25th april', 'need to complete', '2016-04-25', '2016-04-10 19:45:26', 'Not Started'),
(110, 43, 'task 1', 'eresdrfsf', '2016-04-12', '2016-04-11 14:03:10', 'Not Started'),
(113, 42, 'yuhug', 'tgtygygy', '2016-04-28', '2016-04-11 16:52:48', 'Not Started'),
(114, 42, 'h', 'bn', '2016-04-27', '2016-04-11 16:53:32', 'Not Started'),
(115, 42, 'h', 'bn', '2016-04-27', '2016-04-11 16:54:05', 'Not Started'),
(117, 42, 'd', 'du98uy9', '2016-04-21', '2016-04-11 16:59:33', 'Not Started'),
(121, 42, 'saffy', 'sdfsdfsdf', '2016-04-15', '2016-04-12 13:04:39', 'In Progress'),
(122, 42, 'amran', 'uuuuuuuuu', '2016-04-22', '2016-04-12 13:43:30', 'Not Started'),
(126, 42, 'pool', 'pool', '2016-04-16', '2016-04-12 13:50:12', 'Not Started'),
(129, 42, 'rahat', 'due all assignments', '2016-04-14', '2016-04-12 15:29:45', 'Not Started'),
(130, 42, 'hulkiiii', 'sdfsfsdiiiiiiiiiiiiiiiiiiiiiii', '2016-04-22', '2016-04-12 15:30:53', 'In Progress'),
(131, 42, 'uni', 'ffrsdfsdfsdfsd', '2016-04-17', '2016-04-16 14:12:29', 'Not Started');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `register_date`) VALUES
(42, 'saffy', 'saffy', 'saffy@hotmail.co.uk', 'saffy', 'd1f0c32c1b4c5becd5fad5108fbf26c4', '2016-04-10 17:05:50'),
(43, 'amran', 'amran', 'amran@hotmail.co.uk', 'amran', '9e90a72db01c901457185fa773c35032', '2016-04-10 19:44:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
