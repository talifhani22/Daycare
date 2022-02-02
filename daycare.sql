-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 01, 2022 at 11:41 AM
-- Server version: 5.1.30
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `daycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `d_payments`
--

CREATE TABLE IF NOT EXISTS `d_payments` (
  `pay_id` int(5) NOT NULL AUTO_INCREMENT,
  `name_on_card` varchar(100) NOT NULL,
  `credit_card_number` varchar(30) NOT NULL,
  `exp_month` int(30) NOT NULL,
  `exp_year` int(5) NOT NULL,
  `cvv` int(3) NOT NULL,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `d_payments`
--


-- --------------------------------------------------------

--
-- Table structure for table `d_user`
--

CREATE TABLE IF NOT EXISTS `d_user` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `suburb` varchar(50) NOT NULL,
  `cellNo` char(10) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `confirm_passwd` varchar(50) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `d_user`
--

INSERT INTO `d_user` (`user_id`, `fname`, `lname`, `email`, `adress`, `suburb`, `cellNo`, `passwd`, `confirm_passwd`) VALUES
(1, 'Masindi', 'NEMAKONDE', 'Ca2.konde@gmail.com', '12 pierneef avenue', 'eMalahleni', '0793460529', 'asi', 'asi'),
(2, 'Masindi', 'NEMAKONDE', 'Ca2.konde@gmail.com', '12 pierneef avenue', 'eMalahleni', '0793460529', 'tali', 'tali'),
(3, '', '', 'Ca2.konde@gmail.com', '', '', '', 'asi', ''),
(4, '', '', 'Ca2.konde@gmail.com', '', '', '', 'asi', ''),
(5, '', '', 'Ca2.konde@gmail.com', '', '', '', 'asi', ''),
(6, '', '', 'Ca2.konde@gmail.com', '', '', '', 'asi', ''),
(7, '', '', 'Ca2.konde@gmail.com', '', '', '', 'asi', ''),
(8, 'Masindi', 'NEMAKONDE', 'Ca2.konde@gmail.com', '12 pierneef avenue', 'eMalahleni', '0793460529', 'asi', 'asi'),
(9, 'Masindi', 'NEMAKONDE', 'Ca2.konde@gmail.com', '12 pierneef avenue', 'eMalahleni', '0793460529', 'asi', 'asi'),
(10, 'Masindi', 'NEMAKONDE', 'Ca2.konde@gmail.com', '12 pierneef avenue', 'eMalahleni', '0793460529', 'asi', 'asi');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE IF NOT EXISTS `reserve` (
  `service_id` int(50) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `service_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
