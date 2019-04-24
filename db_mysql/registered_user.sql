-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 04:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_guviintern`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `id` int(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `age` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`id`, `name`, `age`, `contact`, `email`, `password`) VALUES
(1, 'pondurai', '21', '9715797139', 'pdurai31@gmail.com', 'duraivijay'),
(2, 'abc', '212', '9715797139', 'pdur', '123'),
(3, 'ada', '21', '12', 'asassa', 'asaa'),
(4, 'sd', '212', 'ass', 'pdurai21@gmail.com', 'dere'),
(5, 'a121', '21', '9715797139', 'pdurai31@gmail.com', 'duraivijay'),
(6, 'a121', '21', '9715797139', 'pdurai31@gmail.com', 'duraivijay'),
(7, 'a121', '21', '9715797139', 'pdurai31@gmail.com', 'duraivijay'),
(8, 'err', '32', '9715797139', 'pdurai34@gmail.com', 'duraivijaww');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
