-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 12:11 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `FirstName` varchar(15) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`FirstName`, `LastName`, `ID`, `Password`) VALUES
('sunil', 'yadu', '16018c04058', 'yadu');

-- --------------------------------------------------------

--
-- Table structure for table `cellmember`
--

CREATE TABLE `cellmember` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cellmember`
--

INSERT INTO `cellmember` (`FirstName`, `LastName`, `ID`, `Password`, `Mobile`) VALUES
('mayank', 'nagar', '12345', 'yadu', '7089095476');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `complain` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`complain`) VALUES
(' write here wekcinn');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facultyragistration`
--

CREATE TABLE `facultyragistration` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyragistration`
--

INSERT INTO `facultyragistration` (`FirstName`, `LastName`, `Email`, `Password`, `Mobile`, `Complain`) VALUES
('sunil', 'yadu', 'yaduboyzz@gmail.com', 'yadu', '7089095476', 'faculty complain');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `RollNo` varchar(20) NOT NULL,
  `Feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`RollNo`, `Feedback`) VALUES
('', ' write here dsajlh'),
('12345', ' write here');

-- --------------------------------------------------------

--
-- Table structure for table `studentcomments`
--

CREATE TABLE `studentcomments` (
  `userid` varchar(20) NOT NULL,
  `ID` int(20) NOT NULL,
  `complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentcomments`
--

INSERT INTO `studentcomments` (`userid`, `ID`, `complain`) VALUES
('12345', 6, ' please solve my problem'),
('123456', 7, 'student complaint'),
('123456', 8, ' write here'),
('123456', 9, ' write here');

-- --------------------------------------------------------

--
-- Table structure for table `studentragistration1`
--

CREATE TABLE `studentragistration1` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `RollNo` int(20) NOT NULL,
  `Branch` varchar(20) DEFAULT NULL,
  `Semester` varchar(10) DEFAULT NULL,
  `Password` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentragistration1`
--

INSERT INTO `studentragistration1` (`FirstName`, `LastName`, `RollNo`, `Branch`, `Semester`, `Password`, `Email`, `Mobile`, `reg_date`, `Complain`) VALUES
('sunil', 'yadu', 123456, 'cs', 'sixth', 'yadu', 'yaduboyzz@gmail.com', '7089095476', '2019-05-04 03:25:02', 'please solve my complain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cellmember`
--
ALTER TABLE `cellmember`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `facultyragistration`
--
ALTER TABLE `facultyragistration`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`RollNo`);

--
-- Indexes for table `studentcomments`
--
ALTER TABLE `studentcomments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentragistration1`
--
ALTER TABLE `studentragistration1`
  ADD PRIMARY KEY (`RollNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentcomments`
--
ALTER TABLE `studentcomments`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
