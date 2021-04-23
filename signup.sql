-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 05:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `image`, `content`, `date`) VALUES
(0, 'books', 'rajae', '09fd1fe5a366cc6f717a3412a626a496.jpg', 'test', '2021-04-23'),
(9, 'okey', 'rajae', '09fd1fe5a366cc6f717a3412a626a496.jpg', 'test', '2021-04-23'),
(10, 'vvvvvvvvvvvvv', 'hy', '09fd1fe5a366cc6f717a3412a626a496.jpg', 'llllllllllllllll', '2021-04-23'),
(12, 'yrtgf', 'fhyj', 'ed198a91fc02aa6f4bedab7e49c07537.jpg', 'dgt', '2021-04-23'),
(13, 'books', 'rajae', '09fd1fe5a366cc6f717a3412a626a496.jpg', 'hello', '2021-04-23'),
(14, 'testing', 'rajae', 'pexels-aleksandar-pasaric-325185 (1).jpg', 'test', '2021-04-23'),
(15, 'testing', 'rajae', 'pexels-aleksandar-pasaric-325185 (1).jpg', 'test', '2021-04-23'),
(16, 'test', 'tester', 'pexels-aleksandar-pasaric-325185.jpg', 'testing', '2021-04-23'),
(17, 'testing', 'tester', 'pexels-aleksandar-pasaric-325185.jpg', 'testing', '2021-04-23'),
(18, 'books test', 'testtttttt', '09fd1fe5a366cc6f717a3412a626a496.jpg', 'testttttt', '2021-04-23'),
(19, '', '', '', '', '2021-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `MDP` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Username`, `email`, `MDP`) VALUES
('brief', 'icareapp@gmail.com', '1234'),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('meme', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('again', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('brief', '', ''),
('rajae', '', ''),
('rajae', 'icareapplication@gmail.com', '1234'),
('rajae', 'icareapplication@gmail.com', 'Sandiomi@123'),
('rajae', 'icareapplication@gmail.com', 'Sandiomi@123'),
('rajae', '', ''),
('rajae', 'icareapplication@gmail.com', 'Sandiomi@123'),
('', '', ''),
('', '', ''),
('rajae', 'icareapplication@gmail.com', 'lili'),
('memememem', 'icareapplication2021@gmail.com', '1234567'),
('', '', ''),
('', '', ''),
('rajae', 'icareapplication@gmail.com', 'lili'),
('', '', ''),
('', '', ''),
('brief', 'BouAbdellaoui', '1234567'),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('rajae', 'icareapplication@gmail.com', '1234567'),
('rajae', 'icareapplication@gmail.com', '1234567'),
('rajae', 'icareapplication@gmail.com', ''),
('rajae', 'icareapplication@gmail.com', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('', '', ''),
('brief', 'icareapplication@gmail.com', '1234567'),
('brief', 'icareapplication2021@gmail.com', '1234567'),
('brief', 'icareapplication@gmail.com', '1234567'),
('rajae', 'BouAbdellaoui', '1234567'),
('aymane', 'me@ms.cc', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
