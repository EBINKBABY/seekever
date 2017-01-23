-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 08:43 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seekever`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `descr`) VALUES
(2, 'history', 'ggggkjj'),
(3, 'à´¸à´¯à´¨àµà´¸àµ', 'à´¸à´µà´ªà´®à´ªà´°àµ†àµ'),
(4, 'à´šà´°à´¿à´¤àµà´°à´‚', 'à´•à´´à´¿à´žàµà´ž à´•à´¾à´²à´¤àµà´¤àµ†à´•àµà´•àµà´±à´¿à´šàµà´šàµà´³àµà´³ à´°àµ‡à´–à´ªàµà´ªàµ†à´Ÿàµà´¤àµà´¤à´²àµà´‚ à´…à´¤à´¿à´¨àµ†à´•àµà´•àµà´±à´¿à´šàµà´šàµà´³àµà´³ à´ªà´ à´¨à´µàµà´®à´¾à´£àµâ€Œ à´šà´°à´¿à´¤àµà´°à´‚'),
(5, 'english', 'vgood'),
(6, 'maths', 'jdafjaehf'),
(7, 'social', 'jksfsfsh'),
(8, 'mathsa', 'jiiuhuih'),
(9, 'gguyguyg', 'hioioihij');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` int(11) NOT NULL,
  `descr` text NOT NULL,
  `userid` int(11) NOT NULL,
  `upvote` int(11) NOT NULL,
  `downvote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `category`, `descr`, `userid`, `upvote`, `downvote`) VALUES
(1, 'man', 1, 'age of a human being?', 1, 1, 1),
(5, 'Blood', 0, 'Is blood is thicker than water?', 3, 0, 0),
(6, 'manb', 0, 'khgguyyu', 3, 0, 0),
(7, 'gguyg', 0, 'iuhiuhiuh', 3, 0, 0),
(8, 'Maths is difficult', 0, 'What is maths?', 3, 0, 0),
(9, 'ffefef', 0, 'gyywrsdtryer5t', 3, 0, 0),
(10, 'fhgaufa', 0, 'jhfwquitrewuiryiw', 3, 0, 0),
(11, 'dfwfw', 0, 'dwvfefae', 3, 0, 0),
(12, 'sfawetwa', 5, 'rt5eyaew5y', 3, 0, 0),
(13, 'wwww', 5, 'what is english?', 3, 0, 0),
(14, '', 0, '', 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `password2` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `password2`) VALUES
(2, 'ebin', 'ebinkbaby1995@gmail.com', '123456789', '123456789'),
(4, 'subin', 'subin@gmail.com', '1234', '1234'),
(5, 'bibin', 'bibin1@gmail.com', '12', '12'),
(6, 'ssss', 'ssss@gmail.com', '123', '123'),
(7, 'aaa', 'aaa@jhhf.com', '123', '123'),
(8, '', '', '', ''),
(9, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`) VALUES
(1, 'john', '1234', 0),
(2, 'ebin', '12345', 0),
(3, 'shobi', '1234', 1),
(4, 'amal', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
