-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 01:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `isbn` int(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(50) NOT NULL,
  `publication` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`isbn`, `title`, `author`, `edition`, `publication`) VALUES
(333, 'gg', 'gtg', 'hh', 'bbb'),
(12345, 'dsdsd', 'dsds', 'dsds', 'dsd'),
(54545, 'god', 'JK Rowling', '1st Edition', 'DC Books'),
(56565, 'tt', 'pp', '1st Edition', 'dc'),
(123457, 'Harry Potter', 'JK Rowling', '1st Edition', 'DC Books'),
(345454, 'dd', 'ff', '1st Edition', 'DC Books'),
(565656, 'good', 'JK Rowling', '1st Edition', 'fdf'),
(3455464, 'rtr', 'rr', 'rr', 'rr'),
(3455465, '', '', '', ''),
(3455466, '', '', '', ''),
(3455467, '', '', '', ''),
(34554645, 'aadujeevitham', 'Beniyaman', '1st Edition', 'DC Books');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`isbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `isbn` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34554646;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
