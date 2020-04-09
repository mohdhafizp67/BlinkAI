-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2020 at 09:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phonenumber`, `gender`, `status`) VALUES
(1, 'hafiz', 'mohdhafizp67@gmail.com', '123456789', 1234567890, 'male', ''),
(8, 'wan', 'wano0710@gmail.com', '12345', 13333578, 'male', 'user'),
(9, 'admin', '', 'admin', 0, '', 'admin'),
(12, 'kaka', 'kaka@gmail.com', '12345', 987654321, 'male', 'user'),
(13, 'waaha', 'waaha@gmail.com', '12345', 144235678, 'male', 'user'),
(14, 'akmal', 'akmal@gmail.com', '12345', 987654321, 'male', 'user'),
(16, 'ronaldo', 'ronaldomessi@laliga.com', '12345', 12345678, 'male', 'user'),
(17, 'ai', 'ai@gmail.com', '', 0, 'male', 'user'),
(18, 'aq', 'aq@gmail.com', '12345', 987654321, 'male', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
