-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 12:33 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obalgadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`username`, `password`) VALUES
('admin', 'admin@nysc_obalgaPH1900');

-- --------------------------------------------------------

--
-- Table structure for table `cds_tbl`
--

CREATE TABLE `cds_tbl` (
  `Id` int(11) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `statecode` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `cds` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cds_tbl`
--

INSERT INTO `cds_tbl` (`Id`, `surname`, `firstname`, `lastname`, `statecode`, `email`, `phonenumber`, `cds`) VALUES
(6, 'Adenuga', 'Adebambo', 'Oluwafemi', 'RV/17A/4164', 'adenugaadebambo41@gmail.com', '08137492316', 'ict'),
(7, 'Aninye', 'Juliet', 'Onyinye', 'RV/17B/2400', 'aninyejulie@yahoo.com', '09014578961', 'rivgreen');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `statecode` varchar(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `option` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `firstname`, `lastname`, `statecode`, `email`, `password`, `option`) VALUES
(1, 'Adebambo', 'Adenuga', 'RV/17A/4164', 'adenugaadebambo41@gmail.com', 'oluwagbenga1993', 'male'),
(2, 'Adewale', 'Olakunle', 'RV/17B/1644', 'adewalekunle@gmail.com', '12345', 'female'),
(4, 'Adewale', 'Sonuga', 'RV/17A/1993', 'adewale@gmail.com', '12345', 'male'),
(6, 'Fakoyede', 'Peter', 'RV/18A/2115', 'fakoyedepeterdayo@gmail.com', '12345', 'male'),
(9, 'Aninye', 'Juliet', 'RV/17B/2400', 'aninyejulie@yahoo.com', '12345', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `callup` varchar(250) NOT NULL,
  `statecode` varchar(100) NOT NULL,
  `phonenumber` varchar(15) NOT NULL,
  `date_of_reg` date NOT NULL,
  `course` varchar(250) NOT NULL,
  `qualification` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bank` varchar(250) NOT NULL,
  `acctnum` varchar(20) NOT NULL,
  `state` varchar(15) NOT NULL,
  `institution` varchar(250) NOT NULL,
  `ppa` varchar(250) NOT NULL,
  `imglink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `surname`, `firstname`, `lastname`, `callup`, `statecode`, `phonenumber`, `date_of_reg`, `course`, `qualification`, `gender`, `bank`, `acctnum`, `state`, `institution`, `ppa`, `imglink`) VALUES
(4, 'Adenuga', 'Adebambo', 'Oluwafemi', 'NYSC/UAA/2017/847569', '', '08137492316', '2017-08-16', 'Computer Science', 'bsc', 'male', 'GTB', '0112748464', 'ogun', 'FUNAAB', 'Ground Tech Nigeria Limited', 'uploads/edit.jpeg'),
(5, 'Adenuga', 'Ifeoluwa', 'Esther', 'NYSC/UAA/2017/847568', '', '08137492316', '2019-12-15', 'Environmental Science and Resource Management', 'bsc', 'female', 'First Bank', '1424755412', 'imo', 'NOUN', 'Groundtech Nig. LTD', 'uploads/haircut.jpeg'),
(6, 'Adenuga', 'Oluwafemi', 'Adebambo', 'NYSC/UAA/2017/014567', '', '08137492316', '2017-08-16', 'Mathematics', 'bsc', 'male', 'GTB', '0112748464', 'ogun', 'OAU', 'MTN Nigeria', 'uploads/haircut2.jpeg'),
(7, 'Adenuga', 'Adebambo', 'Oluwafemi', 'NYSC/UAA/2017/123456', '', '08137492316', '2017-08-16', 'Computer Science', 'bsc', 'male', 'GTB', '0112748464', 'ogun', 'OAU', 'MTN Nigeria', 'uploads/do it3.png'),
(8, 'Aninye', 'Juliet', 'Onyinye', 'NYSC/UAA/2017/081374', 'RV/17B/2400', '09014578961', '2017-11-22', 'English', 'bedu', 'female', 'First Bank', '0701478945', 'enugu', 'IMSU', 'State Secondary School', 'uploads/excavate.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cds_tbl`
--
ALTER TABLE `cds_tbl`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cds_tbl`
--
ALTER TABLE `cds_tbl`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
