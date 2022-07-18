-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 03:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasaheroesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Userinfo`
--

CREATE TABLE `Userinfo` (
  `UserName` text NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(128) NOT NULL,
  `UserId` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Userinfo`
--

INSERT INTO `Userinfo` (`UserName`, `phoneNumber`, `email`, `password`, `UserId`) VALUES
('Lou Angeline Objero', '123123123', 'louobs@gmail.com', '123123123', 269621),
('LLOYDDDIEE', '87987798', 'LLOYDADSA@GMAIL.COM', '123454', 620000),
('Hiroyuki SUzuki', '09587934564', 'hiro@gmail.com', 'hiro123', 696216),
('Gian Hiro', '988979877', 'gianhiro@gmail.com', 'gianhiro123', 808162),
('Cherise Pineda', '13213', 'CheriseP@gmail.com', 'cheriseP', 38621537);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Userinfo`
--
ALTER TABLE `Userinfo`
  ADD PRIMARY KEY (`UserId`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Userinfo`
--
ALTER TABLE `Userinfo`
  MODIFY `UserId` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3879026178;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
