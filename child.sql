-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 12:00 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `child`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pwd`) VALUES
(1, 'root', '123');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `name`, `email`, `subject`, `message`) VALUES
(9, 'monica', 'monicakoli', 'labour work', 'there is a contractor named Rahul Jain who is making small kids work in construction site at Uran.'),
(8, 'pooja', 'kpooja550@', 'child labour', 'In my locality there are 4 child labourers working in garage.'),
(10, 'pooja', 'kpooja550@', 'child labour', 'abdc');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `amount` int(20) NOT NULL,
  `cause` varchar(40) NOT NULL,
  `ngo` varchar(40) NOT NULL,
  `card` varchar(30) NOT NULL,
  `cno` int(30) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  `cvv` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `amount`, `cause`, `ngo`, `card`, `cno`, `month`, `year`, `cvv`, `name`) VALUES
(1, 1000, 'Education', 'M.Venkatarangaiya Foundation', 'Master Card', 2, 'des', 2015, 2345, 'monica'),
(2, 3000, 'Education', 'PCVC (Pratham Council for Vulnerable Chi', 'Master Card', 2, 'feb', 2015, 5643, 'sainath'),
(3, 2000, 'Education', 'Prayas, New Delhi', 'Master Card', 5, 'mar', 2015, 1234, 'pranali'),
(4, 3000, 'Education', 'M.Venkatarangaiya Foundation', 'Visa', 3, 'mar', 2016, 3456, 'dipali'),
(5, 500, 'Education', 'AVANI', 'Visa', 1, 'nov', 2015, 1234, 'PARAS'),
(6, 500, 'Education', 'PCVC (Pratham Council for Vulnerable Chi', 'Visa', 5, 'nov', 2015, 5678, 'deepa'),
(7, 3000, 'Elderly', 'AVANI', 'Master Card', 2, 'nov', 2016, 1256, 'john'),
(8, 3000, 'Elderly', 'AVANI', 'Master Card', 2, 'nov', 2016, 2345, 'geeta'),
(9, 3000, 'Elderly', 'AVANI', 'Master Card', 2, 'nov', 2016, 2345, 'geeta'),
(10, 1000, '', 'M.Venkatarangaiya Foundation', '', 0, '', 0, 0, ''),
(11, 1000, '', 'M.Venkatarangaiya Foundation', '', 0, '', 0, 0, ''),
(12, 3000, 'Employment', 'Prayas, New Delhi', 'Master Card', 6, 'may', 2016, 0, ''),
(13, 6000, 'Children', 'AVANI', 'Master Card', 0, 'apr', 2017, 1111, 'xxxxxxxxxxxxxxxxxxxx'),
(14, 6000, 'Children', 'AVANI', 'Master Card', 0, 'apr', 2017, 1111, 'xxxxxxxxxxxxxxxxxxxx'),
(15, 10000, 'Education', 'M.Venkatarangaiya Foundation', 'Visa', 0, 'jan', 2017, 1111, 'ttttttttttttttt'),
(16, 10000, 'Education', 'M.Venkatarangaiya Foundation', 'Visa', 0, 'jan', 2017, 0, 'ttttttttttttttt'),
(17, 8000, 'Education', 'M.Venkatarangaiya Foundation', 'Visa', 4444, 'jan', 2015, 4444, 'rockstar'),
(18, 8000, 'Education', 'M.Venkatarangaiya Foundation', 'Visa', 4444, 'jan', 2015, 4444, 'rockstar');

-- --------------------------------------------------------

--
-- Table structure for table `q1`
--

CREATE TABLE IF NOT EXISTS `q1` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `q1`
--

INSERT INTO `q1` (`id`, `uname`, `comment`) VALUES
(23, 'saipatil80@yahoo.in', 'I think poverty is key cause o'),
(24, 'saipatil80@yahoo.in', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `q2`
--

CREATE TABLE IF NOT EXISTS `q2` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `q2`
--

INSERT INTO `q2` (`id`, `uname`, `comment`) VALUES
(3, 'saipatil80@yahoo.in', 'If basic education is provided'),
(4, 'saipatil80@yahoo.in', 'to ban child labour, tackle po');

-- --------------------------------------------------------

--
-- Table structure for table `q3`
--

CREATE TABLE IF NOT EXISTS `q3` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `q4`
--

CREATE TABLE IF NOT EXISTS `q4` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `q4`
--

INSERT INTO `q4` (`id`, `uname`, `comment`) VALUES
(4, 'saipatil80@yahoo.in', 'To handle this awareness must'),
(5, 'saipatil80@yahoo.in', 'Every individual should take a');

-- --------------------------------------------------------

--
-- Table structure for table `q11`
--

CREATE TABLE IF NOT EXISTS `q11` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `q11`
--

INSERT INTO `q11` (`id`, `uname`, `comment`) VALUES
(22, 'Anonymous', 'by providing employeement to p'),
(23, 'saipatil80@yahoo.in', 'I think poverty is key cause o'),
(24, 'saipatil80@yahoo.in', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `q22`
--

CREATE TABLE IF NOT EXISTS `q22` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `q22`
--

INSERT INTO `q22` (`id`, `uname`, `comment`) VALUES
(3, 'saipatil80@yahoo.in', 'If basic education is provided'),
(4, 'saipatil80@yahoo.in', 'to ban child labour, tackle po'),
(5, 'Anonymous', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `q33`
--

CREATE TABLE IF NOT EXISTS `q33` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `q33`
--

INSERT INTO `q33` (`id`, `uname`, `comment`) VALUES
(5, 'saipatil80@yahoo.in', 'firstly there should be equali'),
(6, 'saipatil80@yahoo.in', 'In certain cases hungger leads'),
(7, 'Anonymous', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `q44`
--

CREATE TABLE IF NOT EXISTS `q44` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `q44`
--

INSERT INTO `q44` (`id`, `uname`, `comment`) VALUES
(4, 'saipatil80@yahoo.in', 'To handle this awareness must '),
(5, 'saipatil80@yahoo.in', 'Every individual should take a'),
(6, 'Anonymous', 'pqr');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `cno` int(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `upas` varchar(20) NOT NULL,
  `cpas` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `fname`, `lname`, `cno`, `city`, `state`, `pincode`, `upas`, `cpas`) VALUES
(5, 'kpooja550@gmail.com', 'pooja', 'kale', 2147483647, 'nerul', 'Maharashtra', 400706, 'psk', 'psk'),
(4, 'saipatil80@yahoo.in', 'sainath', 'patil', 982126, 'kharghar', 'Lakshadweep', 4120, 'holi', 'hoil');

-- --------------------------------------------------------

--
-- Table structure for table `sug`
--

CREATE TABLE IF NOT EXISTS `sug` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `sug`
--

INSERT INTO `sug` (`sid`, `name`, `email`, `subject`, `message`) VALUES
(8, 'pranali', 'pranalikharbhari77@g', 'stop child labour', 'to erradicate child labour goverment should plan f'),
(9, 'paras', 'paras@gmail.com', 'awareness', 'people should report if they found something going');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
