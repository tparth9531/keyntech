-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 12:12 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keyntech`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email_id` varchar(150) NOT NULL,
  `pwd` text NOT NULL,
  `dob` varchar(150) NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `add_1` varchar(255) NOT NULL,
  `add_2` varchar(255) NOT NULL,
  `city` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `country` varchar(150) NOT NULL,
  `reason` text NOT NULL,
  `pdf` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email_id`, `pwd`, `dob`, `mobile`, `add_1`, `add_2`, `city`, `state`, `country`, `reason`, `pdf`) VALUES
(1, 'xgfdff', 'xzvxvxvx@cxvxvx.com', 'kxvxvxv', '', 'xvxvxv', 'vxxvxv', 'xvxvx', 'xvxvx', 'xvxvx', 'xvxvx', 'xvxvx', ''),
(4, 'ryryr', 'xzvxetetevxvx@cxvxvx.com', '$2y$10$Xinx59T/7zHc5.6pGiJldu/C8bAUQYIxn.g7.InwDyK2unUrGwgk.', '', 'xvxvxv', 'vxxvxv', 'xvxvx', 'xvxvx', 'xvxvx', 'xvxvx', 'xvxvx', ''),
(5, 'cbcbcb', 'bcbcbcb@cnvnvn.com', '$2y$10$ofgDzJEkZTTUOMaLx4MhPesINKRHKRG7TIuBOOi1f/vh7wPA.PAHm', '', '9912345678', 'gdgdg', 'dgdgdg', 'dgdgd', 'dgdgd', 'dgdgd', 'dgdg', ''),
(6, 'jgjgff', 'fcncvnc@dgdg.com', '$2y$10$gtF2piEcD2esZ294P2Zdz.8EPU2o4Z5PZvu9bFz7iezs/hoNcVgV6', '', '991234567822', 'xvxvxv', 'zvzxv', 'xvzxv', 'xvzxv', 'xvzvx', 'xvxv', ''),
(7, 'dvd', 'ssczc@sfsf.com', '$2y$10$PEulyU9TumALXSBr7rRHG.IOtJGWiXzXu6GQXkdwRLSSctJpKdS62', '', 'cbcbc', 'vxxvxvx', 'vxvxvxv', 'xvxvxv', 'xvxvxv', 'xvxvxv', 'xvxv', ''),
(8, 'cchhbffh', 'sgggsssf@sfsf.com', '$2y$10$Sq1GESVsfmPyV6ywjpxxW.twtzlbyALSf6j7w1345Jsz0tw.LZQ8.', '06/23/2021', '991234567822', 'sfsfsf', 'sfsfsf', 'sfsfsf', 'sfsfsf', 'sfsf', 'sfsf', ''),
(9, 'xvszfzsf', 'p@p.com', '$2y$10$dPbH0xy.iDnsgHiL7dV8teeDeZU5CKzyLvbD/jv4U3uBvxw1orIeG', '06/29/2021', '9912345678', 'sgfzsg', 'xzvzxv', 'xvxzv', 'xvxv', 'xvxzv', 'xvxv', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
