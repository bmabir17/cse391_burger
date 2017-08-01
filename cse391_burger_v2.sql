-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 10:09 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse391_burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `A_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Username`, `Password`, `A_ID`) VALUES
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 1),
('somania', 'somanianurmahal@gmail.com', 'somania', '7815696ecbf1c96e6894b779456d330e', 2),
('Nasir', 'nasir@gmail.com', 'nasir', '7815696ecbf1c96e6894b779456d330e', 3),
('Nasir', 'nasir@gmail.com', 'nasir', '7815696ecbf1c96e6894b779456d330e', 4),
('billi', 'billu@gmail.com', 'billu', '7815696ecbf1c96e6894b779456d330e', 5),
('anik', 'anik@gmail.com', 'anik', '7815696ecbf1c96e6894b779456d330e', 6),
('anik', 'anik@gmail.com', 'anik', '7815696ecbf1c96e6894b779456d330e', 7),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 8),
('billi', 'billu@gmail.com', 'billu', '7815696ecbf1c96e6894b779456d330e', 9),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 10),
('somania', 'somanianurmahal@gmail.com', 'somania', '7815696ecbf1c96e6894b779456d330e', 11),
('somania', 'somanianurmahal@gmail.com', 'dina', '202cb962ac59075b964b07152d234b70', 12),
('somania', 'somanianurmahal@gmail.com', 'dina', '202cb962ac59075b964b07152d234b70', 13),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 14),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 15),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 16),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 17),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 18),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 19),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 20),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 21),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 22),
('Nasir', 'nasir@gmail.com', 'nasir', '7815696ecbf1c96e6894b779456d330e', 23),
('dina', 'somanianurmahal@gmail.com', 'dins', '1f262a60600e30c026663a7ccbed6bab', 24);

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `U_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`Name`, `Email`, `UserName`, `Password`, `U_ID`) VALUES
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 5),
('somania', 'somanianurmahal@gmail.com', 'somania', '7815696ecbf1c96e6894b779456d330e', 6),
('somania', 'somanianurmahal@gmail.com', 'dina', '202cb962ac59075b964b07152d234b70', 7),
('abir', 'bmabir17@outlook.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 8),
('Nasir', 'nasir@gmail.com', 'nasir', '7815696ecbf1c96e6894b779456d330e', 9),
('billi', 'billu@gmail.com', 'billu', '7815696ecbf1c96e6894b779456d330e', 10),
('anik', 'anik@gmail.com', 'anik', '7815696ecbf1c96e6894b779456d330e', 11),
('BM Abir', 'bmabir17@gmail.com', 'bmabir17', '7815696ecbf1c96e6894b779456d330e', 12),
('Nasib', 'nasib@gmail.com', 'nasib', '7815696ecbf1c96e6894b779456d330e', 13),
('dina', 'somanianurmahal@gmail.com', 'dins', '1f262a60600e30c026663a7ccbed6bab', 14);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `I_ID` int(11) NOT NULL,
  `O_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`I_ID`, `O_ID`) VALUES
(8, 18),
(8, 19),
(8, 20),
(8, 21),
(8, 22),
(8, 23),
(8, 24),
(9, 18),
(9, 19),
(9, 20),
(9, 21),
(9, 22),
(9, 23),
(9, 24);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Name` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `I_ID` int(11) NOT NULL,
  `image` mediumblob NOT NULL,
  `image_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Name`, `catagory`, `price`, `quantity`, `I_ID`, `image`, `image_dir`) VALUES
('ARTISAN-STYLE BAKERY ROLL', 'bun', '60', 15, 8, '', 'images/artisan.png'),
('SESAME AND POPPY SEED BUN', 'bun', '50', 10, 9, '', 'images/SESAME AND POPPY SEED BUN.png'),
('Classic Cheese 1', 'cheese', '12', 124, 13, '', 'images/classic.png'),
('NATURAL CHEDDAR', 'cheese', '123', 1234, 14, '', 'images/natural.png'),
('grainy mastard', 'sause', '25', 12, 15, '', 'images/grainy-mustard - Copy.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `total_price` varchar(255) NOT NULL,
  `O_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `o_state` tinyint(1) NOT NULL,
  `placement_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`total_price`, `O_ID`, `quantity`, `o_state`, `placement_time`) VALUES
('60', 6, 1, 0, '1501562625'),
('50', 7, 1, 0, '2017-08-01 10:48:13'),
('50', 8, 1, 0, '2017-08-01 10:52:38'),
('110', 9, 1, 0, '2017-08-01 11:01:29'),
('50', 10, 1, 0, '2017-08-01 12:52:11'),
('50', 11, 1, 0, '2017-08-01 12:54:07'),
('50', 12, 1, 0, '2017-08-01 12:57:29'),
('110', 13, 1, 0, '2017-08-01 12:58:48'),
('110', 14, 1, 0, '2017-08-01 13:00:01'),
('110', 15, 1, 0, '2017-08-01 13:01:09'),
('110', 16, 1, 0, '2017-08-01 13:01:39'),
('330', 17, 1, 0, '2017-08-01 13:01:55'),
('110', 18, 1, 0, '2017-08-01 13:05:35'),
('110', 19, 1, 0, '2017-08-01 13:48:48'),
('110', 20, 1, 0, '2017-08-01 13:50:56'),
('110', 21, 1, 0, '2017-08-01 13:56:31'),
('110', 22, 1, 0, '2017-08-01 14:00:25'),
('110', 23, 1, 0, '2017-08-01 14:01:59'),
('110', 24, 1, 0, '2017-08-01 14:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `uName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `S_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`uName`, `password`, `S_ID`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `O_ID` (`I_ID`,`O_ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`I_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`O_ID`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`S_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `A_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `U_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `I_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `O_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `S_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`I_ID`) REFERENCES `item` (`I_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
