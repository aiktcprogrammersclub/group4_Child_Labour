-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2014 at 05:14 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osp`
--
CREATE DATABASE IF NOT EXISTS `osp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `osp`;

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE IF NOT EXISTS `mycart` (
  `pid` int(30) NOT NULL,
  `uname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`pid`, `uname`) VALUES
(0, 'sachin@gmail.com'),
(0, 'sachin@gmail.com'),
(9, 'sachin@gmail.com'),
(8, '345@gmail.com'),
(18, '345@gmail.com'),
(8, 'Ranjana'),
(8, 'sachin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pbrand`
--

CREATE TABLE IF NOT EXISTS `pbrand` (
  `ptid` int(30) NOT NULL,
  `bid` int(30) NOT NULL,
  `bname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbrand`
--

INSERT INTO `pbrand` (`ptid`, `bid`, `bname`) VALUES
(1, 1, 'motorola'),
(1, 2, 'micromax'),
(1, 3, 'nokia'),
(1, 4, 'samsung'),
(1, 5, 'karbon'),
(2, 6, 'cannon'),
(2, 7, 'sony'),
(2, 8, 'lg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(30) NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `ptype` varchar(30) NOT NULL,
  `pbrand` varchar(30) NOT NULL,
  `pdes` varchar(30) NOT NULL,
  `pcost` varchar(30) NOT NULL,
  `ifile` varchar(30) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `ptype`, `pbrand`, `pdes`, `pcost`, `ifile`) VALUES
(6, 'nokia3310', '1', '3', 'model no:3340', '1200', '3310.jpg'),
(7, 'canvas hd', '1', '2', 'model no:8920', '12000', 'Canvas-HD-1.jpg'),
(8, 'karbon titanium', '1', '5', 'model no:4567', '15000', 'Karbonn-Titanium-S5-Plus1.jpg'),
(9, 'cannon purple', '2', '6', 'model no:3341', '1234', 'Chrysanthemum.jpg'),
(10, 'cyber shot', '2', '7', 'model no:3349', '24444', 'Desert.jpg'),
(11, 'Nokia 110', '1', '3', 'model no:3340', '1200', '130725-nokia-1100.jpg'),
(12, 'nokia bs', '1', '3', 'model no:3343', '3000', 'best_seller_nokia-.jpg'),
(13, 'Nicon 55', '2', '8', 'model no:3380', '30000', 'Hydrangeas.jpg'),
(14, 'cyber shot x', '2', '6', 'model no:4569', '6000', 'Jellyfish.jpg'),
(15, 'koal lg', '2', '8', 'model no:33491', '12453', 'Koala.jpg'),
(16, 'lig-lg', '2', '8', 'model no:33498', '50000', 'Lighthouse.jpg'),
(17, 'moto g', '1', '1', 'model no:334098', '8000', 'motog.jpg'),
(18, 'nokia 509', '1', '3', 'model no:334098', '10000', 'Nokia_520.jpg'),
(19, 'note 2', '1', '4', 'model no:334009', '30000', 'note2.jpg'),
(20, 'note 3', '1', '4', 'model no:334088', '400000', 'Note3.jpg'),
(21, 'pegu ', '2', '7', 'model no:334099', '150000', 'Penguins.jpg'),
(23, 'galaxy pro', '1', '4', 'model no:334055', '9000', 'samsung_galaxy_pro.jpg'),
(24, 'tuple', '2', '6', 'model no:334088', '50000', 'Tulips.jpg'),
(25, 'root', '2', '7', 'model no:45', '23000', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ptype`
--

CREATE TABLE IF NOT EXISTS `ptype` (
  `ptid` int(30) NOT NULL,
  `ptname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptype`
--

INSERT INTO `ptype` (`ptid`, `ptname`) VALUES
(1, 'mobile'),
(2, 'camera');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `uid` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `add` varchar(30) NOT NULL,
  `no` varchar(20) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`uid`, `name`, `email`, `add`, `no`, `pwd`) VALUES
(1, 'sachin', 'sachin@gmail.com', 'thane', '998712458', '1234'),
(2, 'diya', '345@gmail.com', 'dadar', '997651234', '345'),
(3, 'pravin', 'p123@gmail.com', 'Dahisarr', '9594769442', 'abc123'),
(4, 'pravin', 'p123@gmail.com', 'Dahisarr', '9594769442', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
