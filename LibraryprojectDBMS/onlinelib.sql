-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 03:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinelib`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `ISBN` bigint(40) NOT NULL,
  `bookname` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`ISBN`, `bookname`, `author`) VALUES
(9780141441146, 'Jane Eyre', 'Charlotte Bronte'),
(9780143106159, 'ABC Physics', 'Lev Okun'),
(9780198804970, 'The Jungle Book', 'Rudyard Kipling'),
(9781561453153, 'The Story of My life', 'Helen Keller');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `eno` bigint(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `batch` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `book` varchar(500) NOT NULL,
  `issuedate` date NOT NULL DEFAULT current_timestamp(),
  `returndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`eno`, `name`, `batch`, `email`, `book`, `issuedate`, `returndate`) VALUES
(9920103181, 'Ayush Makhloga', 'F7', '9920103181@mail.jiit.ac.in', 'Jane Eyre', '2021-12-10', '2021-12-17'),
(9920103190, 'Sarvagya Agrawal', 'F7', '9920103190@mail.jiit.ac.in', 'ABC Physics', '2021-12-10', '2021-12-17'),
(9920103198, 'Ankit Sharma', 'F7', '9920103198@mail.jiit.ac.in', 'The Jungle Book', '2021-12-01', '2021-12-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`eno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
