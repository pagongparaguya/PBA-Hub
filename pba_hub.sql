-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2015 at 05:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pba_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE IF NOT EXISTS `coach` (
  `COACH_ID` int(6) NOT NULL AUTO_INCREMENT,
  `COACH_FULLNAME` varchar(50) NOT NULL,
  `COACH_AGE` smallint(2) NOT NULL,
  `COACH_BDATE` varchar(30) NOT NULL,
  `COACH_BIRTHPLACE` varchar(30) NOT NULL,
  `COACH_PORTRAIT_PHOTO` varchar(20) NOT NULL,
  `COACH_STAT` tinyint(1) NOT NULL,
  `COACH_YEARSTARTED` smallint(4) NOT NULL,
  `COACH_CAREERWINS` smallint(5) NOT NULL,
  `COACH_PLAYOFF_APPEAR` smallint(5) NOT NULL,
  `COACH_FINALS_APPEAR` smallint(5) NOT NULL,
  PRIMARY KEY (`COACH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`COACH_ID`, `COACH_FULLNAME`, `COACH_AGE`, `COACH_BDATE`, `COACH_BIRTHPLACE`, `COACH_PORTRAIT_PHOTO`, `COACH_STAT`, `COACH_YEARSTARTED`, `COACH_CAREERWINS`, `COACH_PLAYOFF_APPEAR`, `COACH_FINALS_APPEAR`) VALUES
(1, 'Koy Banal', 39, 'September 9,1975', 'Philippines', '1.jpg', 1, 2014, 50, 0, 0),
(2, 'Ato Agustin', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 1100, 8, 8),
(3, 'Alex Compton', 65, 'October 9, 1950', 'United States', '2.jpg', 1, 1980, 1100, 8, 8),
(4, 'Leo Isaac', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 1100, 8, 8),
(5, 'Eric Gonzales', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 1100, 8, 8),
(6, 'Manny Pacquiao', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 1100, 8, 8),
(7, 'Norman Black', 65, 'October 9, 1950', 'United States', '2.jpg', 1, 1980, 1100, 8, 8),
(8, 'Boyet Fernandez', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 1100, 8, 8),
(9, 'Tim Cone', 65, 'October 9, 1950', 'United States', '2.jpg', 1, 1980, 1100, 8, 8),
(10, 'Yeng Guiao', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 1100, 8, 8),
(11, 'Leo Austria', 39, 'September 9,1975', 'Philippines', '1.jpg', 1, 2014, 50, 0, 0),
(12, 'Jong Uichico', 39, 'September 9,1975', 'Philippines', '1.jpg', 1, 2014, 50, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coach_award_won`
--

CREATE TABLE IF NOT EXISTS `coach_award_won` (
  `CAW_ID` int(6) NOT NULL AUTO_INCREMENT,
  `COACH_ID` int(6) NOT NULL,
  `AWARD_NAME` varchar(50) NOT NULL,
  `YEAR_AWARDED` int(4) NOT NULL,
  PRIMARY KEY (`CAW_ID`),
  UNIQUE KEY `CAW_ID` (`CAW_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coach_award_won`
--

INSERT INTO `coach_award_won` (`CAW_ID`, `COACH_ID`, `AWARD_NAME`, `YEAR_AWARDED`) VALUES
(1, 1, 'Coach Of The Year', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `coach_carousel_image`
--

CREATE TABLE IF NOT EXISTS `coach_carousel_image` (
  `CCI_ID` int(6) NOT NULL AUTO_INCREMENT,
  `COACH_ID` int(6) NOT NULL,
  `IMAGE1` varchar(150) NOT NULL,
  `IMAGE2` varchar(150) NOT NULL,
  `IMAGE3` varchar(150) NOT NULL,
  `IMAGE4` varchar(150) NOT NULL,
  `IMAGE5` varchar(150) NOT NULL,
  PRIMARY KEY (`CCI_ID`),
  UNIQUE KEY `CCI` (`CCI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `coach_carousel_image`
--

INSERT INTO `coach_carousel_image` (`CCI_ID`, `COACH_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 1, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(2, 2, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(3, 3, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(4, 4, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(5, 5, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(6, 6, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(7, 7, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(8, 8, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(9, 9, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(10, 10, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(11, 11, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(12, 12, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coach_championship_won`
--

CREATE TABLE IF NOT EXISTS `coach_championship_won` (
  `CCW_ID` int(6) NOT NULL AUTO_INCREMENT,
  `COACH_ID` int(6) NOT NULL,
  `LEAGUE_NAME` varchar(50) NOT NULL,
  `YEAR_WON` int(4) NOT NULL,
  PRIMARY KEY (`CCW_ID`),
  UNIQUE KEY `CCW_ID` (`CCW_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `coach_championship_won`
--

INSERT INTO `coach_championship_won` (`CCW_ID`, `COACH_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(2, 1, 'NBA', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `NOTI_ID` int(6) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(20) NOT NULL,
  `MESSAGE` varchar(150) NOT NULL,
  `TIMESTAMP` datetime NOT NULL,
  PRIMARY KEY (`NOTI_ID`),
  UNIQUE KEY `NOTI_ID` (`NOTI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`NOTI_ID`, `USERNAME`, `MESSAGE`, `TIMESTAMP`) VALUES
(1, 'hihi', 'Your product ''Selling nike shoes barato lang'' has been deleted by the administrator.', '2015-01-24 17:28:03'),
(2, 'Irvin', 'Your product ''Adidas Shoes '' has successfully been auctioned and the winner is superman with the # of 234234.', '2015-01-24 19:58:59'),
(3, 'superman', 'The product ''Adidas Shoes '' auction finished and you won, please contact Irvin with the # of 09123121231.', '2015-01-24 19:58:59'),
(4, 'Sam1', 'The product ''Adidas Shoes '' auction finished but your bid is not the highest.', '2015-01-24 19:58:59'),
(5, 'hihi', 'Your product ''Selling reebok shoes'' has been deleted by the administrator.', '2015-01-24 20:04:18'),
(6, 'Irvin', 'The product ''Selling reebok shoes'' you had a bid on has been deleted by the administrator.', '2015-01-24 20:04:18'),
(7, 'superman', 'The product ''Selling reebok shoes'' you had a bid on has been deleted by the administrator.', '2015-01-24 20:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `PLAYER_ID` int(6) NOT NULL AUTO_INCREMENT,
  `PLAYER_AGE` smallint(2) NOT NULL,
  `PLAYER_FULLNAME` varchar(50) NOT NULL,
  `PLAYER_BDATE` varchar(30) NOT NULL,
  `PLAYER_PORTRAIT_PHOTO` varchar(20) NOT NULL,
  `PLAYER_STAT` tinyint(1) NOT NULL,
  `PLAYER_YEARSTARTED` smallint(4) NOT NULL,
  `PLAYER_JERSEY_NO` smallint(2) NOT NULL,
  `PLAYER_POSITION` varchar(10) NOT NULL,
  `PLAYER_YEARS_PLAYED` smallint(4) NOT NULL,
  `PLAYER_HEIGHT` varchar(10) NOT NULL,
  `PLAYER_WEIGHT` varchar(10) NOT NULL,
  `PLAYER_PLAYOFF_APPEAR` smallint(5) NOT NULL,
  `PLAYER_FINALS_APPEAR` smallint(5) NOT NULL,
  `PLAYER_ALLSTAR_APPEAR` smallint(5) NOT NULL,
  `PLAYER_PPG` float NOT NULL,
  `PLAYER_APG` float NOT NULL,
  `PLAYER_RPG` float NOT NULL,
  `PLAYER_BPG` float NOT NULL,
  `PLAYER_SPG` float NOT NULL,
  `PLAYER_TPG` float NOT NULL,
  `PLAYER_FPG` float NOT NULL,
  `PLAYER_FTP` float NOT NULL,
  `PLAYER_FGP` float NOT NULL,
  `PLAYER_TPP` float NOT NULL,
  PRIMARY KEY (`PLAYER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`PLAYER_ID`, `PLAYER_AGE`, `PLAYER_FULLNAME`, `PLAYER_BDATE`, `PLAYER_PORTRAIT_PHOTO`, `PLAYER_STAT`, `PLAYER_YEARSTARTED`, `PLAYER_JERSEY_NO`, `PLAYER_POSITION`, `PLAYER_YEARS_PLAYED`, `PLAYER_HEIGHT`, `PLAYER_WEIGHT`, `PLAYER_PLAYOFF_APPEAR`, `PLAYER_FINALS_APPEAR`, `PLAYER_ALLSTAR_APPEAR`, `PLAYER_PPG`, `PLAYER_APG`, `PLAYER_RPG`, `PLAYER_BPG`, `PLAYER_SPG`, `PLAYER_TPG`, `PLAYER_FPG`, `PLAYER_FTP`, `PLAYER_FGP`, `PLAYER_TPP`) VALUES
(1, 36, 'Calvin Abueva', 'August 31, 1976', '1.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(2, 32, 'Junmar Fajardo', 'December 9, 1985', '2.jpg', 1, 2003, 6, 'SF', 11, '6''8', '110 kg', 9, 6, 10, 23.4, 5.5, 6.7, 2.2, 2.1, 3.5, 3.7, 77.8, 45.8, 39.9),
(4, 36, 'Rome Adler Dela Rosa', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(5, 36, 'Christopher Guerrero Banchero', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(6, 36, 'Christopher Exciminiano', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(7, 36, 'Erik Menk', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(9, 36, 'Vic Manuel', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(10, 36, 'Joseph Evans Casio', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(11, 36, 'Tony Dela Cruz', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(12, 36, 'Rafael Joey Jazul', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(13, 36, 'Gabriel Espinas', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(14, 36, 'Paolo Bugia', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(15, 36, 'Donaldo Hontiveros', 'August 31, 1976', '3.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9);

-- --------------------------------------------------------

--
-- Table structure for table `player_award_won`
--

CREATE TABLE IF NOT EXISTS `player_award_won` (
  `PAW_ID` int(6) NOT NULL AUTO_INCREMENT,
  `PLAYER_ID` int(6) NOT NULL,
  `AWARD_NAME` varchar(50) NOT NULL,
  `AWARD_YEAR` int(4) NOT NULL,
  PRIMARY KEY (`PAW_ID`),
  UNIQUE KEY `PAW_ID` (`PAW_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `player_award_won`
--

INSERT INTO `player_award_won` (`PAW_ID`, `PLAYER_ID`, `AWARD_NAME`, `AWARD_YEAR`) VALUES
(1, 1, 'MVP', 2008),
(2, 1, 'MVP', 2010),
(3, 2, 'MVP', 2012),
(4, 2, 'MVP', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `player_carousel_image`
--

CREATE TABLE IF NOT EXISTS `player_carousel_image` (
  `PCI_ID` int(6) NOT NULL AUTO_INCREMENT,
  `PLAYER_ID` int(6) NOT NULL,
  `IMAGE1` varchar(150) NOT NULL,
  `IMAGE2` varchar(150) NOT NULL,
  `IMAGE3` varchar(150) NOT NULL,
  `IMAGE4` varchar(150) NOT NULL,
  `IMAGE5` varchar(150) NOT NULL,
  PRIMARY KEY (`PCI_ID`),
  UNIQUE KEY `PCI_ID` (`PCI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `player_carousel_image`
--

INSERT INTO `player_carousel_image` (`PCI_ID`, `PLAYER_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 1, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(2, 2, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(3, 4, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(4, 5, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(5, 6, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(6, 7, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(7, 9, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(8, 10, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(9, 11, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(10, 12, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(11, 13, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(12, 14, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(13, 15, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `player_championship_won`
--

CREATE TABLE IF NOT EXISTS `player_championship_won` (
  `PCW_ID` int(6) NOT NULL AUTO_INCREMENT,
  `PLAYER_ID` int(6) NOT NULL,
  `LEAGUE_NAME` varchar(50) NOT NULL,
  `YEAR_WON` int(4) NOT NULL,
  PRIMARY KEY (`PCW_ID`),
  UNIQUE KEY `PCW_ID` (`PCW_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `player_championship_won`
--

INSERT INTO `player_championship_won` (`PCW_ID`, `PLAYER_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(1, 1, 'NBA', 2011),
(2, 1, 'NBA', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `PROD_ID` int(6) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(6) NOT NULL,
  `START_BID` double NOT NULL,
  `PROD_NAME` varchar(40) NOT NULL,
  `PROD_CAT` varchar(11) NOT NULL,
  `PROD_DES` varchar(200) NOT NULL,
  `PROD_AGE_NAME` varchar(10) NOT NULL,
  `PROD_AGE_VAL` smallint(5) NOT NULL,
  `PROD_STAT` varchar(10) NOT NULL DEFAULT 'Pending',
  `IMAGE1` varchar(100) NOT NULL DEFAULT 'http://localhost/PBA/assets/product_images/sample.jpg',
  `IMAGE2` varchar(100) NOT NULL DEFAULT 'http://localhost/PBA/assets/product_images/sample.jpg',
  `IMAGE3` varchar(100) NOT NULL DEFAULT 'http://localhost/PBA/assets/product_images/sample.jpg',
  `IMAGE4` varchar(100) NOT NULL DEFAULT 'http://localhost/PBA/assets/product_images/sample.jpg',
  `IMAGE5` varchar(100) NOT NULL DEFAULT 'http://localhost/PBA/assets/product_images/sample.jpg',
  PRIMARY KEY (`PROD_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PROD_ID`, `USER_ID`, `START_BID`, `PROD_NAME`, `PROD_CAT`, `PROD_DES`, `PROD_AGE_NAME`, `PROD_AGE_VAL`, `PROD_STAT`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 4, 1000, 'AIR JORDAN', 'Shoes', 'Very nice comfortable shoes!', 'Day', 12, 'On-going', 'http://localhost/PBA/assets/product_images/LONG_HORN_STEER.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg'),
(2, 4, 20000, '1994 Basketball Jersey', 'Jersey', 'Very old jersey!', 'Year', 20, 'On-going', 'http://localhost/PBA/assets/product_images/Pagong!.png', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg'),
(7, 5, 100, 'Adidas Shoes ', 'Jersey', 'Nice shoes ni!', 'Day', 12, 'Closed', 'http://localhost/PBA/assets/product_images/Koala.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg'),
(10, 15, 1, 'stolen shoes', 'Jersey', 'kinawat gani', 'Day', 1, 'Pending', 'http://localhost/PBA/assets/product_images/ab_exercise.jpg', 'http://localhost/PBA/assets/product_images/5_years_before.jpg', 'http://localhost/PBA/assets/product_images/5_years_from_now.jpg', 'http://localhost/PBA/assets/product_images/BE_CREATIVE.jpg', 'http://localhost/PBA/assets/product_images/padulong_chapel.jpg'),
(11, 15, 200, 'hello', 'Shoes', 'haha', 'Week', 15, 'On-going', 'http://localhost/PBA/assets/product_images/eyes.jpg', 'http://localhost/PBA/assets/product_images/fiesta.jpg', 'http://localhost/PBA/assets/product_images/huawei.jpg', 'http://localhost/PBA/assets/product_images/padulong_chapel1.jpg', 'http://localhost/PBA/assets/product_images/tuslob-buwa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_bid`
--

CREATE TABLE IF NOT EXISTS `product_bid` (
  `BID_ID` int(6) NOT NULL AUTO_INCREMENT,
  `PROD_ID` int(6) NOT NULL,
  `USER_ID` int(6) NOT NULL,
  `BID_AMT` double NOT NULL,
  `DATE_TIME_ADDED` datetime NOT NULL,
  PRIMARY KEY (`BID_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product_bid`
--

INSERT INTO `product_bid` (`BID_ID`, `PROD_ID`, `USER_ID`, `BID_AMT`, `DATE_TIME_ADDED`) VALUES
(9, 7, 7, 100, '2015-01-24 19:53:13'),
(11, 7, 15, 201, '2015-01-24 19:54:54'),
(12, 7, 15, 300, '2015-01-24 19:57:03'),
(13, 7, 15, 400, '2015-01-24 19:57:12'),
(14, 7, 15, 600, '2015-01-24 19:57:20'),
(15, 1, 15, 2000, '2015-02-07 16:32:42'),
(16, 1, 7, 3000, '2015-02-07 16:33:06'),
(17, 1, 15, 4000, '2015-02-07 16:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `TEAM_ID` int(6) NOT NULL,
  `TEAM_NAME` varchar(30) NOT NULL,
  `TEAM_LOGO` varchar(20) NOT NULL,
  `TEAM_STAT` tinyint(1) NOT NULL,
  `TEAM_YEARSTARTED` smallint(4) NOT NULL,
  `TEAM_CAREERWINS` smallint(5) NOT NULL,
  `TEAM_CAREERLOSSES` smallint(5) NOT NULL,
  `TEAM_HISTORY` varchar(250) NOT NULL,
  `TEAM_PLAYOFF_APPEAR` smallint(5) NOT NULL,
  `TEAM_FINALS_APPEAR` smallint(5) NOT NULL,
  PRIMARY KEY (`TEAM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TEAM_ID`, `TEAM_NAME`, `TEAM_LOGO`, `TEAM_STAT`, `TEAM_YEARSTARTED`, `TEAM_CAREERWINS`, `TEAM_CAREERLOSSES`, `TEAM_HISTORY`, `TEAM_PLAYOFF_APPEAR`, `TEAM_FINALS_APPEAR`) VALUES
(1, 'Alaska Aces', 'alaska.jpg', 1, 1986, 599, 230, 'The Alaska Aces is a team from PBA. Which is Kobe''s team and you know he is better than Kevin Durant and the whole OKC. Alaska Aces is the team with 599 wins and 230 losses.', 20, 10),
(2, 'Barako Bull Energy', 'barako.jpg', 1, 2002, 199, 98, 'Barako Bulls is a energy drink that might bring you to the best nightmare you ever had.', 13, 8),
(3, 'Barangay Ginebra San Miguel', 'ginebra.jpg', 1, 1986, 599, 230, 'Ginebra San Miguel', 20, 10),
(4, 'Blackwater Elite', 'blackwater.jpg', 1, 1986, 599, 230, 'Blackwater Elite', 20, 10),
(5, 'Globalport Batang Pier ', 'globalport.jpg', 1, 1986, 599, 230, 'Globalport Batang Pier', 20, 10),
(6, 'Kia Sorento', 'kia.jpg', 1, 2002, 199, 98, 'Kia Sorento Basketball', 13, 8),
(7, 'Meralco Bolts', 'meralco.jpg', 1, 1986, 599, 230, 'Meralco Bolts', 20, 10),
(8, 'NLEX Road Warriors', 'nlex.jpg', 1, 1986, 599, 230, 'NLEX Road Warriors', 20, 10),
(9, 'Purefoods Star Hotshots', 'purefoods.jpg', 1, 1986, 599, 230, 'Purefoods Star Hotshots', 20, 10),
(10, 'Rain or Shine Elasto Painters', 'rain or shine.jpg', 1, 1986, 599, 230, 'Rain or Shine Elasto Painters', 20, 10),
(11, 'San Miguel Beermen', 'san miguel.jpg', 1, 1986, 599, 230, 'San Miguel Beermen', 20, 10),
(12, 'Talk ''N Text Tropang Texters', 'talk n text.jpg', 1, 1986, 599, 230, 'Talk ''N Text Tropang Texters', 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `team_carousel_image`
--

CREATE TABLE IF NOT EXISTS `team_carousel_image` (
  `TCI_ID` int(6) NOT NULL AUTO_INCREMENT,
  `TEAM_ID` int(6) NOT NULL,
  `IMAGE1` varchar(150) NOT NULL,
  `IMAGE2` varchar(150) NOT NULL,
  `IMAGE3` varchar(150) NOT NULL,
  `IMAGE4` varchar(150) NOT NULL,
  `IMAGE5` varchar(150) NOT NULL,
  PRIMARY KEY (`TCI_ID`),
  UNIQUE KEY `TCI_ID` (`TCI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `team_carousel_image`
--

INSERT INTO `team_carousel_image` (`TCI_ID`, `TEAM_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 1, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(2, 2, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(3, 3, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(4, 4, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(5, 7, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(6, 8, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(7, 9, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(8, 10, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(9, 11, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(10, 12, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(11, 13, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(12, 14, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_championship_won`
--

CREATE TABLE IF NOT EXISTS `team_championship_won` (
  `TCW_ID` int(6) NOT NULL AUTO_INCREMENT,
  `TEAM_ID` int(11) NOT NULL,
  `LEAGUE_NAME` varchar(50) NOT NULL,
  `YEAR_WON` int(4) NOT NULL,
  PRIMARY KEY (`TCW_ID`),
  UNIQUE KEY `TCW_ID` (`TCW_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team_championship_won`
--

INSERT INTO `team_championship_won` (`TCW_ID`, `TEAM_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(1, 1, 'NBA', 2009),
(2, 1, 'NBA', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `team_coach_bridge`
--

CREATE TABLE IF NOT EXISTS `team_coach_bridge` (
  `TCB_ID` int(6) NOT NULL AUTO_INCREMENT,
  `TEAM_ID` int(6) NOT NULL,
  `COACH_ID` int(6) NOT NULL,
  `TYPE` varchar(150) NOT NULL,
  `YEAR` varchar(9) NOT NULL,
  PRIMARY KEY (`TCB_ID`),
  UNIQUE KEY `TCB_ID` (`TCB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `team_coach_bridge`
--

INSERT INTO `team_coach_bridge` (`TCB_ID`, `TEAM_ID`, `COACH_ID`, `TYPE`, `YEAR`) VALUES
(1, 3, 2, 'PRESENT', '1994'),
(2, 4, 4, 'PRESENT', '2014'),
(3, 7, 5, 'PRESENT', '2013'),
(4, 8, 6, 'PRESENT', '2014'),
(5, 9, 7, 'PRESENT', '2012'),
(6, 10, 8, 'PRESENT', '2014'),
(7, 11, 9, 'PRESENT', '2000'),
(8, 12, 10, 'PRESENT', '2008'),
(9, 2, 1, 'PRESENT', '1994'),
(10, 2, 3, 'PAST', '1993-1995'),
(11, 3, 3, 'PAST', '1995-1997'),
(12, 4, 3, 'PAST', '1997-2000'),
(13, 1, 3, 'PRESENT', '2001'),
(14, 7, 3, 'PAST', '1990-1991'),
(15, 8, 3, 'PAST', '1888-1889'),
(16, 9, 3, 'PAST', '1890-1895'),
(17, 5, 11, 'PRESENT', '2013'),
(18, 6, 12, 'PRESENT', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `team_player_bridge`
--

CREATE TABLE IF NOT EXISTS `team_player_bridge` (
  `TPB_ID` int(6) NOT NULL AUTO_INCREMENT,
  `TEAM_ID` int(6) NOT NULL,
  `PLAYER_ID` int(6) NOT NULL,
  `TYPE` varchar(150) NOT NULL,
  `YEAR` varchar(9) NOT NULL,
  PRIMARY KEY (`TPB_ID`),
  UNIQUE KEY `TPB_ID` (`TPB_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `team_player_bridge`
--

INSERT INTO `team_player_bridge` (`TPB_ID`, `TEAM_ID`, `PLAYER_ID`, `TYPE`, `YEAR`) VALUES
(1, 1, 1, 'PRESENT', '1996'),
(2, 2, 1, 'PAST', '1800-1900'),
(3, 1, 2, 'PRESENT', '2010'),
(4, 2, 2, 'PAST', '2003-2009'),
(5, 1, 4, 'PRESENT', '1994'),
(6, 1, 5, 'PRESENT', '1994'),
(7, 1, 6, 'PRESENT', '1994'),
(8, 1, 7, 'PRESENT', '1994'),
(9, 1, 8, 'PRESENT', '1994'),
(10, 1, 9, 'PRESENT', '1994'),
(11, 1, 0, '', ''),
(12, 1, 10, 'PRESENT', '1994'),
(13, 1, 11, 'PRESENT', '1994'),
(14, 1, 12, 'PRESENT', '1994'),
(15, 1, 13, 'PRESENT', '1994'),
(16, 1, 14, 'PRESENT', '1994'),
(17, 1, 15, 'PRESENT', '1994'),
(18, 3, 1, 'PAST', '1885-1888'),
(19, 4, 1, 'PAST', '1888-1890'),
(20, 7, 1, 'PAST', '1895-1897'),
(21, 8, 1, 'PAST', '1793-1795'),
(22, 9, 1, 'PAST', '1795-1798');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USER_ID` int(6) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(40) NOT NULL,
  `LAST_NAME` varchar(30) NOT NULL,
  `CONTACT_NUMBER` varchar(11) NOT NULL,
  `EMAIL_ADDRESS` varchar(50) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `SECRET_QUESTION` varchar(50) NOT NULL,
  `SECRET_ANSWER` varchar(20) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `STATUS` varchar(10) DEFAULT 'Inactive',
  `ACCOUNT_TYPE` varchar(10) NOT NULL DEFAULT 'Normal',
  `USER_IMAGE` varchar(100) NOT NULL DEFAULT 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg',
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `USERNAME` (`USERNAME`),
  UNIQUE KEY `EMAIL_ADDRESS` (`EMAIL_ADDRESS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `CONTACT_NUMBER`, `EMAIL_ADDRESS`, `ADDRESS`, `BIRTHDAY`, `SECRET_QUESTION`, `SECRET_ANSWER`, `USERNAME`, `PASSWORD`, `STATUS`, `ACCOUNT_TYPE`, `USER_IMAGE`) VALUES
(4, 'Abcdef', 'Defe123', '09123123222', 'tae@yahoo.com', 'asdsa', '2014-12-30', 'Who is your favorite PBA player?', 'KB', 'hihi', 'e9f5713dec55d727bb35392cec6190ce', 'Active', 'Admin', 'http://localhost/PBA/assets/user_images/hihi.jpg'),
(5, 'lILTONG', 'Abellanosa', '09123121231', 'asda@yahoo.com', '102 kaon kaon', '2012-12-31', 'Who is your favorite PBA team?', 'IDK', 'Irvin', '4e4d6c332b6fe62a63afe56171fd3725', 'Active', 'Normal', 'http://localhost/PBA/assets/user_images/Irvin.jpg'),
(7, 'Samsam', 'Abellanosa', '02321312312', 'asda1@yahoo.com', '12312 12asda ', '2014-07-02', 'Who is your favorite PBA player?', 'KB', 'Sam1', '490bd89bcdc4e9f01d1a33899736f7a3', 'Active', 'Admin', 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg'),
(9, 'Kobe', 'Bryant', '09121123121', 'mictest12345678910@gmail.com', '102 kamuning', '2014-12-31', 'Who is your favorite PBA coach?', '12@', 'irvin1', 'c225a8f46e8453d72875fa6231f52cad', 'Active', 'Normal', 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg'),
(10, 'Woohoo', 'weeehee', '12312312311', 'iii@yahoo.com', '12312 asoodaa', '2014-12-31', 'Who is your favorite PBA player?', '1234', '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'Active', 'Normal', 'http://localhost/PBA/assets/user_images/1234.png'),
(12, '12345', '1234', '12312312311', 'aishdias@yahoo.com', 'asdsa', '2013-12-31', 'Who is your favorite PBA team?', 'KB', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 'Durplu', 'Normal', 'http://localhost/PBA/assets/user_images/abcd.png'),
(13, 'Jacob', 'Abellanosa', '09123121231', 'asdasd@yahoo.com', '102 kaon kaon', '2012-12-31', 'Who is your favorite PBA team?', 'IDK', 'hello', 'hello', 'Active', 'Admin', 'http://localhost/PBA/assets/user_images/Irvin.jpg'),
(14, 'haha', 'haha', '01923123', 'asdf@haha.com', 'sdfsdf', '2015-01-01', 'Hello', 'HI', 'haha', 'haha', 'Active', 'Admin', 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg'),
(15, 'andres', 'paraguyas', '09059217526', 'sdfs@hi.com', 'Nasipit, Talamban', '2015-01-02', 'Hello', 'Hi', 'superman', '6068ea25d64976e6e0e44da9e29e0e41', 'Active', 'Admin', 'http://localhost/PBA/assets/user_images/superman.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
