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
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `passengerId` int(11) NOT NULL,
  `origin` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `bookingDate` date NOT NULL,
  `passengercount` int(9) NOT NULL,
  `amount` int(12) NOT NULL,
  `serialNo` int(10) NOT NULL,
  `fare` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`passengerId`, `origin`, `destination`, `bookingDate`, `passengercount`, `amount`, `serialNo`, `fare`) VALUES
(269621, 'baguio', 'cubao', '2022-03-25', 1, 1000, 56217, 0),
(620000, 'ilocos', 'cubao', '2022-03-02', 1, 10, 146217, 0),
(620000, 'ilocos', 'cubao', '2022-03-02', 1, 10, 556217, 0),
(269621, 'cubao', 'batangas', '2022-03-14', 1, 1000, 562187, 260),
(696216, 'cubao', 'batangas', '2022-03-24', 1, 2500, 646217, 0),
(620000, 'baguio', 'cubao', '2022-02-28', 1, 1000, 806217, 0),
(620000, 'baguio', 'cubao', '2022-02-28', 1, 1000, 1656217, 0),
(269621, 'cubao', 'batangas', '2022-03-14', 1, 1000, 2766218, 260),
(38621537, 'zambales', 'cubao', '2022-03-01', 1, 1, 2796217, 0),
(38621537, 'batangas', 'cubao', '2022-03-01', 1, 500, 3396217, 0),
(269621, 'cubao', 'zambales', '2022-03-24', 1, 1000, 4046217, 0),
(269621, 'pampanga', 'cubao', '2022-03-15', 1, 1, 4366217, 0),
(269621, 'baguio', 'cubao', '2022-03-22', 1, 1, 4796218, 550),
(38621537, 'batangas', 'cubao', '2022-03-01', 1, 500, 4956217, 0),
(269621, 'ilocos', 'cubao', '2022-03-26', 11, 100, 5196217, 0),
(696216, 'cubao', 'bulacan', '2022-03-24', 2, 1000, 5862187, 260),
(269621, 'ilocos', 'cubao', '2022-03-26', 11, 100, 6606217, 0),
(696216, 'baguio', 'cubao', '2021-06-24', 1, 1000, 7046217, 0),
(269621, 'cubao', 'ilocos', '2022-03-08', 3, 2000, 7062187, 260),
(38621537, 'bulacan', 'cubao', '2021-02-21', 1, 1000, 7246216, 0),
(94621, 'cubao', 'baguio', '2022-02-25', 1, 1000, 7262177, 0),
(269621, 'baguio', 'cubao', '2021-02-22', 2011, 1000, 7516217, 0),
(620000, 'cubao', 'batangas', '2021-06-28', 1, 1000, 7746216, 0),
(620000, 'cubao', 'batangas', '2022-02-24', 1, 1000, 7896216, 0),
(94621, 'cubao', 'batangas', '2022-02-28', 1, 1, 7962178, 0),
(94621, 'cubao', 'batangas', '2022-03-24', 1, 100, 8162178, 0),
(94621, 'cubao', 'baguio', '2022-03-05', 1, 100, 8262178, 0),
(94621, 'cubao', 'batangas', '2022-03-25', 1, 100, 8376217, 0),
(94621, 'baguio', 'cubao', '2021-02-24', 1, 1000, 9862166, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`serialNo`),
  ADD UNIQUE KEY `serialNo` (`serialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `serialNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9862167;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
