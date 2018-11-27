-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2018 at 08:14 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `id` int(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `rent` varchar(250) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`id`, `image`, `name`, `rent`, `details`) VALUES
(1, 'IMG_5661.JPG', 'Apartment rent in Badda', '125000', 'Bed-4, Bath-3, drawing & Dining servant room facilities, car parking, it is a better place apartment and very silent area for residential facilities'),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_space`
--

CREATE TABLE `commercial_space` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `rent` varchar(25) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commercial_space`
--

INSERT INTO `commercial_space` (`id`, `image`, `name`, `rent`, `details`) VALUES
(2, 'IMG_5665.JPG', 'space rent in gulshan', '250000', 'It is a commercial space for office and it would be positive for building up business with near hospital and police station,Bank, daily life leading marketing facilities ,cafÃ© house, standard restaurant ');

-- --------------------------------------------------------

--
-- Table structure for table `furnished_aprt`
--

CREATE TABLE `furnished_aprt` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `rent` varchar(250) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furnished_aprt`
--

INSERT INTO `furnished_aprt` (`id`, `img`, `name`, `rent`, `details`) VALUES
(1, 'IMG_5662.JPG', 'Furnished Flat Rent In Banani', '85000', 'Bed-4, Bath-3, drawing & Dining servant room facilities, car parking, it is a better place apartment and very silent area for residential facilities');

-- --------------------------------------------------------

--
-- Table structure for table `office-space`
--

CREATE TABLE `office-space` (
  `id` int(25) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `rent` int(25) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office-space`
--

INSERT INTO `office-space` (`id`, `image`, `name`, `rent`, `details`) VALUES
(1, 'office/1.jpg', 'office space rent in uttara', 250000, 'It is a commercial space for office and it would be positive for building up business with near hospital and police station,Bank, daily life leading marketing facilities ,caf? house, standard restaurant.');

-- --------------------------------------------------------

--
-- Table structure for table `office_space`
--

CREATE TABLE `office_space` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `rent` varchar(250) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office_space`
--

INSERT INTO `office_space` (`id`, `image`, `name`, `rent`, `details`) VALUES
(1, 'IMG_5672.JPG', 'office space rent in uttara', '95000', 'It is a commercial space for office and it would be positive for building up business with near hospital and police station,Bank, daily life leading marketing facilities ,cafÃ© house, standard restaurant'),
(2, 'IMG_5668.JPG', 'A office space rent in uttara', '250000', 'It is a commercial space for office and it would be positive for building up business with near hospital and police station,Bank, daily life leading marketing facilities ,cafÃ© house, standard restaurant ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commercial_space`
--
ALTER TABLE `commercial_space`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_space`
--
ALTER TABLE `office_space`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `commercial_space`
--
ALTER TABLE `commercial_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `office_space`
--
ALTER TABLE `office_space`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
