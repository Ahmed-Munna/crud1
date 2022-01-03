-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 10:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud1`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `gender`, `country`) VALUES
(5, 'Ahmed munna', 'admin@gmail.com', '125HHHkfkf@#', 'male', 'maldip'),
(7, 'munna', 'admin@gmail.com', '125HHHkfkf@#', 'male', 'bangladesh'),
(8, 'Dabu', 'admin@gmail.com', '125HHHkfkf@#', 'male', 'bangladesh'),
(9, 'Atik', 'admin@gmail.com', '125HHHkfkf@#', 'male', 'china'),
(10, 'LABONI AKTER', 'admin@gmail.com', '125HHHkfkf@#', 'female', 'china'),
(11, 'Rimi', 'admin@gmail.com', '125HHHkfkf@#', 'female', 'china'),
(12, 'Ahmed munna', 'admin@gmail.com', '125HHHkfkf@#', 'male', 'bangladesh'),
(13, 'Pranto', 'admin@gmail.com', '125HHHkfkf@#', 'female', 'china');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
