-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2019 at 06:52 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.2.18-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batch137_142`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `gender`, `city`, `avatar`) VALUES
(7, 'canh', '96fddc1d238e5b8a9a5fa1e2dd3bd296', 'female', 'danang', '5d08df6e9e872_girlxinh.jpg'),
(10, 'admin', 'f4e80f7212cfab35170f2a0b8e6de38a', 'male', 'quangtri', 'default.png'),
(11, 'john', '15de21c670ae7c3f6f3f1f37029303c9', 'female', 'quangtri', '5d0b885933bb4_kaka.jpg'),
(12, 'admin2', 'bcbe3365e6ac95ea2c0343a2395834dd', 'male', 'quangtri', '5d0b89ff2dcda_hahaa2.jpg'),
(13, 'admin5', '78af5f4b34026371672fdb4390267c19', 'female', 'quangtri', '5d0b8b1e4a4bb_oke.jpg');

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
