-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 10:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jo`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` text NOT NULL,
  `Name` text NOT NULL,
  `E-mail` text NOT NULL,
  `Tel` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `Name`, `E-mail`, `Tel`, `Password`) VALUES
('?mwb6iYkyT7t', 'defree', 'harolddefree15@gmail.com', '653476039', '827ccb0eea8a706c4c34a16891f84e7b'),
('2mATJqrNXM?r', 'defreeee', 'harolddefree15@gmail.com', '65777898', '81dc9bdb52d04dc20036dbd8313ed055'),
('obBx77hpK3Gq', 'feffef', 'harolddefree15@gmail.com', '23445555', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `ID` text NOT NULL,
  `iterm_name` text NOT NULL,
  `old_price` text NOT NULL,
  `new_price` text NOT NULL,
  `image` text NOT NULL,
  `user_name` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`ID`, `iterm_name`, `old_price`, `new_price`, `image`, `user_name`, `date`) VALUES
(' 7SsnlxDaq^rrECN', ' trach', '  6500', ' 7000', ' .image/Screenshot (4).png', ' defree', '2024-05-07'),
(' C@I?jaEE7èKcaF', ' man ', '  2333', ' 3489', ' .image/Screenshot (7).png', ' defree', '2024-05-07'),
(' MZRCj5ocvNmRxYU', ' harold', '  23566', ' 35666', ' .image/Screenshot (1).png', ' DEDDE', '2024-05-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD KEY `ID` (`ID`(768));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
