-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2015 at 11:03 AM
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
  `IMAGE6` varchar(150) NOT NULL,
  `IMAGE7` varchar(150) NOT NULL,
  `IMAGE8` varchar(150) NOT NULL,
  `IMAGE9` varchar(150) NOT NULL,
  PRIMARY KEY (`CCI_ID`),
  UNIQUE KEY `CCI` (`CCI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `coach_carousel_image`
--

INSERT INTO `coach_carousel_image` (`CCI_ID`, `COACH_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`, `IMAGE6`, `IMAGE7`, `IMAGE8`, `IMAGE9`) VALUES
(1, 1, 'Koy Banal/1.jpg', 'Koy Banal/2.jpg', 'Koy Banal/3.jpg', 'Koy Banal/4.jpg', 'Koy Banal/5.jpg', 'Koy Banal/6.jpg', 'Koy Banal/7.jpg', 'Koy Banal/8.jpg', 'Koy Banal/9.jpg'),
(2, 2, 'Ato Agustin/1.jpg', 'Ato Agustin/2.jpg', 'Ato Agustin/3.jpg', 'Ato Agustin/4.jpg', 'Ato Agustin/5.jpg', 'Ato Agustin/6.jpg', 'Ato Agustin/7.jpg', 'Ato Agustin/8.jpg', 'Ato Agustin/9.jpg'),
(3, 3, 'Alex Compton/1.jpg', 'Alex Compton/2.jpg', 'Alex Compton/3.jpg', 'Alex Compton/4.jpg', 'Alex Compton/5.jpg', 'Alex Compton/6.jpg', 'Alex Compton/7.jpg', 'Alex Compton/8.jpg', 'Alex Compton/9.jpg'),
(4, 4, 'Leo Isaac/1.jpg', 'Leo Isaac/2.jpg', 'Leo Isaac/3.jpg', 'Leo Isaac/4.jpg', 'Leo Isaac/5.jpg', 'Leo Isaac/6.jpg', 'Leo Isaac/7.jpg', 'Leo Isaac/8.jpg', 'Leo Isaac/9.jpg'),
(5, 5, 'Eric Gonzales/1.jpg', 'Eric Gonzales/2.jpg', 'Eric Gonzales/3.jpg', 'Eric Gonzales/4.jpg', 'Eric Gonzales/5.jpg', 'Eric Gonzales/6.jpg', 'Eric Gonzales/7.jpg', 'Eric Gonzales/8.jpg', 'Eric Gonzales/9.jpg'),
(6, 6, 'Manny Pacquiao/1.jpg', 'Manny Pacquiao/2.jpg', 'Manny Pacquiao/3.jpg', 'Manny Pacquiao/4.jpg', 'Manny Pacquiao/5.jpg', 'Manny Pacquiao/6.jpg', 'Manny Pacquiao/7.jpg', 'Manny Pacquiao/8.jpg', 'Manny Pacquiao/9.jpg'),
(7, 7, 'Norman Black/1.jpg', 'Norman Black/2.jpg', 'Norman Black/3.jpg', 'Norman Black/4.jpg', 'Norman Black/5.jpg', 'Norman Black/6.jpg', 'Norman Black/7.jpg', 'Norman Black/8.jpg', 'Norman Black/9.jpg'),
(8, 8, 'Boyet Fernandez/1.jpg', 'Boyet Fernandez/2.jpg', 'Boyet Fernandez/3.jpg', 'Boyet Fernandez/4.jpg', 'Boyet Fernandez/5.jpg', 'Boyet Fernandez/6.jpg', 'Boyet Fernandez/7.jpg', 'Boyet Fernandez/8.jpg', 'Boyet Fernandez/9.jpg'),
(9, 9, 'Tim Cone/1.jpg', 'Tim Cone/2.jpg', 'Tim Cone/3.jpg', 'Tim Cone/4.jpg', 'Tim Cone/5.jpg', 'Tim Cone/6.jpg', 'Tim Cone/7.jpg', 'Tim Cone/8.jpg', 'Tim Cone/9.jpg'),
(10, 10, 'Yeng Guiao/1.jpg', 'Yeng Guiao/2.jpg', 'Yeng Guiao/3.jpg', 'Yeng Guiao/4.jpg', 'Yeng Guiao/5.jpg', 'Yeng Guiao/6.jpg', 'Yeng Guiao/7.jpg', 'Yeng Guiao/8.jpg', 'Yeng Guiao/9.jpg'),
(11, 11, 'Leo Austria/1.jpg', 'Leo Austria/2.jpg', 'Leo Austria/3.jpg', 'Leo Austria/4.jpg', 'Leo Austria/5.jpg', 'Leo Austria/6.jpg', 'Leo Austria/7.jpg', 'Leo Austria/8.jpg', 'Leo Austria/9.jpg'),
(12, 12, 'Jong Uichico/1.jpg', 'Jong Uichico/2.jpg', 'Jong Uichico/3.jpg', 'Jong Uichico/4.jpg', 'Jong Uichico/5.jpg', 'Jong Uichico/6.jpg', 'Jong Uichico/7.jpg', 'Jong Uichico/8.jpg', 'Jong Uichico/9.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(7, 'superman', 'The product ''Selling reebok shoes'' you had a bid on has been deleted by the administrator.', '2015-01-24 20:04:18'),
(8, 'hihi', 'Your product ''AIR JORDAN'' has been deleted by the administrator.', '2015-02-14 02:04:07'),
(9, 'superman', 'The product ''AIR JORDAN'' you had a bid on has been deleted by the administrator.', '2015-02-14 02:04:08'),
(10, 'Sam1', 'The product ''AIR JORDAN'' you had a bid on has been deleted by the administrator.', '2015-02-14 02:04:08'),
(11, 'hihi', 'Your product ''1994 Basketball Jersey'' has been deleted by the administrator.', '2015-02-14 02:04:26'),
(12, 'Irvin', 'Your product ''Adidas Shoes '' has been deleted by the administrator.', '2015-02-14 02:04:29'),
(13, 'superman', 'Your product ''stolen shoes'' has been deleted by the administrator.', '2015-02-14 02:04:31'),
(14, 'superman', 'Your product ''hello'' has been deleted by the administrator.', '2015-02-14 02:04:37'),
(15, 'hihi', 'Your product ''1231231'' has been deleted by the administrator.', '2015-02-14 02:05:10');

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
(1, 33, 'Joachim Thoss', 'December 7,1981', '1.jpg', 1, 2004, 7, 'C', 11, '6''7', '93 kg', 10, 5, 10, 15.5, 3.2, 8.9, 2.1, 0.8, 2.5, 2.4, 69.8, 48.3, 16.1),
(2, 29, 'Joseph Casio', 'August 7,1986', '1.jpg', 1, 2011, 42, 'PG', 4, '5''10', '79 kg', 2, 0, 1, 12.1, 4.6, 3.3, 0.1, 0.8, 2, 2.1, 81.4, 40.1, 40.6),
(3, 37, 'Donaldo Hontiveros', 'June 1,1977', '1.jpg', 1, 1998, 25, 'SG', 17, '6''2', '82 kg', 12, 7, 12, 16.5, 4.3, 4.5, 0.8, 1.2, 2.6, 2.9, 85.1, 39.9, 42.1),
(4, 34, 'Cyrus Baguio', 'August 19,1980', '1.jpg', 1, 2003, 3, 'SF', 12, '6''2', '82 kg', 8, 2, 8, 11.2, 2.6, 3.2, 0.5, 0.9, 2.7, 1.8, 70.5, 45.7, 34.9),
(5, 33, 'Gabriel Espinas', 'January 3,1982', '1.jpg', 1, 2006, 27, 'SF', 9, '6''4', '91 kg', 5, 0, 1, 8.9, 1.5, 6.7, 1.6, 0.6, 1.9, 2.4, 65.9, 43.9, 36.8),
(6, 26, 'Solomon Alabi', 'March 21,1988', '1.jpg', 1, 2014, 32, 'C', 1, '7''1', '113 kg', 0, 0, 0, 8.5, 2.9, 9.2, 2.3, 0.8, 2.9, 3, 39.9, 45.8, 18.9),
(7, 31, 'J.C Intal', 'November 18,1983', '1.jpg', 1, 2007, 7, 'SF', 8, '6''4', '88 kg', 3, 0, 3, 6.5, 1.2, 3.2, 0.4, 0.5, 2.1, 1.9, 64.4, 35.4, 26.4),
(8, 35, 'Chico Lanete', 'August 1,1979', '1.jpg', 1, 2007, 26, 'PG', 8, '6''0', '82 kg', 4, 0, 0, 7.3, 4.5, 1.8, 0.2, 1.7, 2, 2.5, 70, 40, 37.5),
(9, 35, 'William Joel Wilson', 'January 30,1980', '1.jpg', 1, 2004, 28, 'PF', 11, '6''3', '91 kg', 5, 2, 0, 5.9, 1.1, 5.5, 1.6, 0.4, 2, 2.1, 56.5, 42.1, 35.9),
(10, 25, 'Justin Shaun Chua', 'July 13,1989', '1.jpg', 1, 2013, 18, 'PG', 2, '6''6', '111 kg', 1, 1, 0, 3.2, 0.3, 2.9, 1, 0.6, 1.1, 0.9, 60.9, 39.9, 33.9),
(11, 26, 'Gregory William Slaughter', 'May 19,1988', '1.jpg', 1, 2013, 20, 'C', 2, '7''0', '117 kg', 2, 1, 0, 14.8, 1.3, 9.9, 1.5, 0.2, 2.5, 2.2, 66.5, 52.1, 0),
(12, 28, 'Japeth Paul Aguilar', 'January 25,1987', '1.jpg', 1, 2009, 25, 'PF', 6, '6''9', '102 kg', 4, 2, 3, 9.2, 0.8, 5.9, 1.8, 0.3, 2.2, 2.2, 66, 46.1, 24.3),
(13, 35, 'Mark Anthony Caguioa', 'November 19,1979', '1.jpg', 1, 2001, 47, 'SG', 14, '6''1', '86 kg', 9, 4, 7, 16.7, 2.5, 5, 0.1, 0.8, 2.8, 2.4, 75.9, 43.8, 31.7),
(14, 25, 'James Patrick Forrester', 'September 3,1989', '1.jpg', 1, 2013, 1, 'SG', 2, '6''2', '86 kg', 0, 0, 0, 5.9, 2.2, 3, 1.1, 1.1, 2, 1.6, 74.4, 39.9, 39.7),
(15, 30, 'Leo Tenorio', 'July 9,1984', '1.jpg', 1, 2006, 5, 'PG', 14, '5''9', '70 kg', 9, 6, 3, 11.3, 4.4, 4, 0.1, 1.2, 2.3, 2.9, 79.8, 41.5, 31.9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `player_award_won`
--

INSERT INTO `player_award_won` (`PAW_ID`, `PLAYER_ID`, `AWARD_NAME`, `AWARD_YEAR`) VALUES
(1, 15, 'All-Rookie Team', 2007),
(2, 15, 'Finals MVP', 2012),
(3, 1, 'Sportsmanship Award', 2011),
(4, 1, 'Commissioner''s Cup Finals MVP', 2013),
(5, 3, 'Sportsmanship Award', 2005),
(6, 3, '3-Point Shootout Champion', 2007),
(7, 4, 'Slam Dunk Champion', 2004),
(8, 4, 'Most Improved Player', 2008),
(9, 11, 'Rookie Of The Year', 2013);

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
  `IMAGE6` varchar(150) NOT NULL,
  `IMAGE7` varchar(150) NOT NULL,
  `IMAGE8` varchar(150) NOT NULL,
  `IMAGE9` varchar(150) NOT NULL,
  PRIMARY KEY (`PCI_ID`),
  UNIQUE KEY `PCI_ID` (`PCI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `player_carousel_image`
--

INSERT INTO `player_carousel_image` (`PCI_ID`, `PLAYER_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`, `IMAGE6`, `IMAGE7`, `IMAGE8`, `IMAGE9`) VALUES
(1, 1, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(2, 2, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(3, 4, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(4, 5, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(5, 6, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(6, 7, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(7, 9, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(8, 10, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(9, 11, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(10, 12, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(11, 13, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(12, 14, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', ''),
(13, 15, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg', '', '', '', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PROD_ID`, `USER_ID`, `START_BID`, `PROD_NAME`, `PROD_CAT`, `PROD_DES`, `PROD_AGE_NAME`, `PROD_AGE_VAL`, `PROD_STAT`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(17, 4, 1, '1234', 'Jersey', '123', 'Day', 1, 'On-going', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `TEAM_HISTORY` varchar(1000) DEFAULT NULL,
  `TEAM_PLAYOFF_APPEAR` smallint(5) NOT NULL,
  `TEAM_FINALS_APPEAR` smallint(5) NOT NULL,
  PRIMARY KEY (`TEAM_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TEAM_ID`, `TEAM_NAME`, `TEAM_LOGO`, `TEAM_STAT`, `TEAM_YEARSTARTED`, `TEAM_CAREERWINS`, `TEAM_CAREERLOSSES`, `TEAM_HISTORY`, `TEAM_PLAYOFF_APPEAR`, `TEAM_FINALS_APPEAR`) VALUES
(1, 'Alaska Aces', 'alaska.jpg', 1, 1986, 848, 698, 'The Alaska Aces is a professional basketball team in the Philippine Basketball Association since 1986 under the ownership of the Alaska Milk Corporation and the owner of 14 PBA championships with the 2013 PBA Commissioner''s Cup as their latest. They are one of the most popular teams in the league and the Philippines.\nThe Aces won nine PBA championships in the 1990s, including a rare grand slam (winning three championships in one season) during the 1996 season, joining the Crispa Redmanizers (1976, 1983), San Miguel Beermen (1989), and the Purefoods Star Hotshots (2013-14) as one of only four franchises to achieve the feat.', 20, 28),
(2, 'Barako Bull Energy', 'barako.jpg', 1, 2002, 215, 300, 'The Barako Bull Energy is a Philippine Basketball Association team that began in 2002.\nBarako Bull is owned by Energy Food and Drinks Inc., a subsidiary of the Linaheim Corporate Services, owners of the defunct Laguna Lakers of the Metropolitan Basketball Association. The franchise bought the former Tanduay team after the 2001 season.\nFrom its first season until 2005, the team was dubbed as the FedEx Express before changing to Air21 Express. From the 2009 PBA Fiesta Conference until the 2009–10 PBA Philippine Cup, it became known as the Burger King Titans. However, when manager Mikee Romero decided to pull out of the team, they were reorganized and renamed the Burger King Whoppers before returning to their original name starting the 2010 PBA Fiesta Conference.', 10, 1),
(3, 'Barangay Ginebra San Miguel', 'ginebra.jpg', 1, 1979, 867, 907, 'The Barangay Ginebra San Miguel is a professional basketball team playing in the Philippine Basketball Association (PBA) since 1979. It is the most popular PBA team[1] and currently holds eight PBA titles. The team is owned by Ginebra San Miguel, Inc. (formerly, La Tondeña Distillers, Inc.), a subsidiary of the San Miguel Corporation (SMC). The team is one of three PBA ball clubs currently owned by the SMC group of companies, along with the Purefoods Star Hotshots and the San Miguel Beermen.', 20, 16),
(4, 'Blackwater Elite', 'blackwater.jpg', 1, 2014, 1, 10, 'Blackwater Elite is a professional basketball team owned by Ever Bilena Cosmetics, Inc. that is playing in the Philippine Basketball Association (PBA) beginning in the 2014-2015 season. The franchise began in the PBA Developmental League as one of its founding teams. The franchise transferred to the PBA after being accepted as an expansion team. The team is named after the Ever Bilena''s brand of men''s fragrances.', 0, 0),
(5, 'Globalport Batang Pier ', 'globalport.jpg', 1, 2012, 14, 57, 'The GlobalPort Batang Pier is a Philippine Basketball Association (PBA) team that first played in the 2012–13 PBA season. The team took over the franchise of the Powerade Tigers in 2012 after it was sold to Sultan 900 Capital, Inc. Besides GlobalPort, team owner Mikee Romero also co-owned the AirAsia Philippine Patriots of the ASEAN Basketball League.', 2, 0),
(6, 'Kia Sorento', 'kia.jpg', 1, 2014, 1, 11, 'The Kia Carnival are a professional basketball team that plays in the Philippine Basketball Association. The team was formed as an expansion team prior to the start of the 2014–15 PBA season. The team is owned by Columbian Autocar Corporation, the exclusive distributor of Kia automobiles in the Philippines.', 0, 0),
(7, 'Meralco Bolts', 'meralco.jpg', 1, 2010, 70, 89, 'The MERALCO Bolts are a professional basketball team playing in the Philippine Basketball Association. The franchise began in 2010 when the Manila Electric Company (MERALCO) acquired the PBA franchise of the Sta. Lucia Realtors. The team is one of three PBA teams under the control of businessman Manuel V. Pangilinan - the other teams being the Talk ''N Text Tropang Texters and the NLEX Road Warriors.', 9, 0),
(8, 'NLEX Road Warriors', 'nlex.jpg', 1, 2014, 1, 7, 'The NLEX Road Warriors are a professional basketball team owned by Manila North Tollways Corporation that is playing in the Philippine Basketball Association (PBA) beginning the 2014-2015 season.\nThe Road Warriors began in the PBA Developmental League (PBA D-League) as one its founding teams, winning a total of six championships. The franchise transferred to the PBA after the Manila North Tollways Corporation (a subsidiary of Metro Pacific Investments Corporation) acquired the PBA franchise of the Air21 Express in June 2014. It is one of three PBA teams currently under the control of businessman Manuel V. Pangilinan (the other teams are the Talk ''N Text Tropang Texters and the MERALCO Bolts).', 0, 0),
(9, 'Purefoods Star Hotshots', 'purefoods.jpg', 1, 1988, 753, 699, 'The Purefoods Star Hotshots is a professional basketball team currently playing in the Philippine Basketball Association since 1988. The team is owned by San Miguel Pure Foods Company, Inc. (formerly, Pure Foods Corporation), a subsidiary of San Miguel Corporation (SMC). The team is one of three PBA ball clubs currently owned by the SMC group of companies, along with Barangay Ginebra San Miguel and the San Miguel Beermen.\nThe franchise remains as one of the most popular teams in the PBA[1] and currently holds thirteen PBA titles. The player most identified with the Purefoods franchise was Alvin Patrimonio, who led the franchise (playing as Purefoods) to six championships in the 1990s and early 2000s, and was named Most Valuable Player four times. Patrimonio retired in 2004 to concentrate more on his duties as team manager for his team.', 70, 27),
(10, 'Rain or Shine Elasto Painters', 'rain or shine.jpg', 1, 2006, 137, 177, 'The Rain or Shine Elasto Painters are a professional basketball team in the Philippine Basketball Association owned by Asian Coatings Philippines, Inc. It debuted in the league in the 2006-07 PBA season after acquiring the franchise rights of the She', 11, 3),
(11, 'San Miguel Beermen', 'san miguel.jpg', 1, 1975, 1147, 919, 'The San Miguel Beermen are a professional basketball team playing in the Philippine Basketball Association (PBA). The franchise is owned by San Miguel Corporation (SMC) since 1975 and holds the most number of PBA titles (currently at 20).\nSan Miguel is one of three PBA ball clubs owned by the SMC group of companies, along with the Purefoods Star Hotshots and Barangay Ginebra San Miguel.\nIt is the remaining original franchise in the PBA (the team first played as Royal Tru-Orange in 1975).', 101, 31),
(12, 'Talk ''N Text Tropang Texters', 'talk n text.jpg', 1, 1990, 563, 542, 'The Talk ''N Text Tropang Texters are a professional basketball team currently owned by Smart Communications, a subsidiary of the Philippine Long Distance Telephone Company (PLDT), playing in the Philippine Basketball Association (PBA) since 1990.\nThe franchise began in 1990 when Pepsi-Cola Products Philippines, Inc. (PCPPI) acquired a PBA franchise. Under PCPPI, the franchise played under the names Pepsi and 7 Up. In 1996, the franchise came under the control of Pilipino Telephone Corporation (Piltel) and played under the name Mobiline. In 2001, the franchise was renamed Talk ''N Text after the operations of Piltel was absorbed by Smart Communications.', 65, 15);

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
  `IMAGE6` varchar(150) NOT NULL,
  `IMAGE7` varchar(150) NOT NULL,
  `IMAGE8` varchar(150) NOT NULL,
  `IMAGE9` varchar(150) NOT NULL,
  PRIMARY KEY (`TCI_ID`),
  UNIQUE KEY `TCI_ID` (`TCI_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `team_carousel_image`
--

INSERT INTO `team_carousel_image` (`TCI_ID`, `TEAM_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`, `IMAGE6`, `IMAGE7`, `IMAGE8`, `IMAGE9`) VALUES
(1, 1, 'Alaska/1.jpg', 'Alaska/2.jpg', 'Alaska/3.jpg', 'Alaska/4.jpg', 'Alaska/5.jpg', 'Alaska/6.jpg', 'Alaska/7.jpg', 'Alaska/8.jpg', 'Alaska/9.jpg'),
(2, 2, 'Barako Bulls/1.jpg', 'Barako Bulls/2.jpg', 'Barako Bulls/3.jpg', 'Barako Bulls/4.jpg', 'Barako Bulls/5.jpg', 'Barako Bulls/6.jpg', 'Barako Bulls/7.jpg', 'Barako Bulls/8.jpg', 'Barako Bulls/9.jpg'),
(3, 3, 'Ginebra/1.jpg', 'Ginebra/2.jpg', 'Ginebra/3.jpg', 'Ginebra/4.jpg', 'Ginebra/5.jpg', 'Ginebra/6.jpg', 'Ginebra/7.jpg', 'Ginebra/8.jpg', 'Ginebra/9.jpg'),
(4, 4, 'Blackwater/1.jpg', 'Blackwater/2.jpg', 'Blackwater/3.jpg', 'Blackwater/4.jpg', 'Blackwater/5.jpg', 'Blackwater/6.jpg', 'Blackwater/7.jpg', 'Blackwater/8.jpg', 'Blackwater/9.jpg'),
(5, 5, 'Globalport/1.jpg', 'Globalport/2.jpg', 'Globalport/3.jpg', 'Globalport/4.jpg', 'Globalport/5.jpg', 'Globalport/6.jpg', 'Globalport/7.jpg', 'Globalport/8.jpg', 'Globalport/9.jpg'),
(6, 6, 'Kia/1.jpg', 'Kia/2.jpg', 'Kia/3.jpg', 'Kia/4.jpg', 'Kia/5.jpg', 'Kia/6.jpg', 'Kia/7.jpg', 'Kia/8.jpg', 'Kia/9.jpg'),
(7, 7, 'Meralco/1.jpg', 'Meralco/2.jpg', 'Meralco/3.jpg', 'Meralco/4.jpg', 'Meralco/5.jpg', 'Meralco/6.jpg', 'Meralco/7.jpg', 'Meralco/8.jpg', 'Meralco/9.jpg'),
(8, 8, 'NLEX/1.jpg', 'NLEX/2.jpg', 'NLEX/3.jpg', 'NLEX/4.jpg', 'NLEX/5.jpg', 'NLEX/6.jpg', 'NLEX/7.jpg', 'NLEX/8.jpg', 'NLEX/9.jpg'),
(9, 9, 'Purefoods/1.jpg', 'Purefoods/2.jpg', 'Purefoods/3.jpg', 'Purefoods/4.jpg', 'Purefoods/5.jpg', 'Purefoods/6.jpg', 'Purefoods/7.jpg', 'Purefoods/8.jpg', 'Purefoods/9.jpg'),
(10, 10, 'Rain or Shine/1.jpg', 'Rain or Shine/2.jpg', 'Rain or Shine/3.jpg', 'Rain or Shine/4.jpg', 'Rain or Shine/5.jpg', 'Rain or Shine/6.jpg', 'Rain or Shine/7.jpg', 'Rain or Shine/8.jpg', 'Rain or Shine/9.jpg'),
(11, 11, 'San Miguel/1.jpg', 'San Miguel/2.jpg', 'San Miguel/3.jpg', 'San Miguel/4.jpg', 'San Miguel/5.jpg', 'San Miguel/6.jpg', 'San Miguel/7.jpg', 'San Miguel/8.jpg', 'San Miguel/9.jpg'),
(12, 12, 'Talk n Text/1.jpg', 'Talk n Text/2.jpg', 'Talk n Text/3.jpg', 'Talk n Text/4.jpg', 'Talk n Text/5.jpg', 'Talk n Text/6.jpg', 'Talk n Text/7.jpg', 'Talk n Text/8.jpg', 'Talk n Text/9.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `team_championship_won`
--

INSERT INTO `team_championship_won` (`TCW_ID`, `TEAM_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(1, 1, 'All-Filipino Cup', 1987),
(2, 1, 'Third Conference', 1990),
(3, 2, 'All-Filipino Cup', 1997),
(4, 2, 'Commissioner''s Cup', 1997),
(5, 9, 'All-Filipino Cup', 1988),
(6, 9, 'All-Filipino Cup', 1992),
(7, 10, 'Governors Cup', 2011),
(8, 11, 'Fiesta Conference', 2004),
(9, 11, 'Fiesta Conference', 2008),
(10, 12, 'Governors Cup', 1998),
(11, 12, 'Commissioner''s Cup', 2013),
(12, 3, 'Governors Cup', 2009),
(13, 3, 'All-Filipino Cup', 2012);

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
(1, 2, 1, 'PRESENT', '2014'),
(2, 3, 2, 'PRESENT', '2015'),
(3, 1, 3, 'PRESENT', '2014'),
(4, 4, 4, 'PRESENT', '2014'),
(5, 5, 5, 'PRESENT', '2014'),
(6, 6, 6, 'PRESENT', '2014'),
(7, 7, 7, 'PRESENT', '2014'),
(8, 12, 7, 'PAST', '2012-2014'),
(9, 11, 7, 'PAST', '1985-1996'),
(10, 2, 4, 'PAST', '2009-2010'),
(11, 8, 8, 'PRESENT', '2014'),
(12, 9, 1, 'PAST', '1989-2011'),
(13, 9, 9, 'PRESENT', '2011'),
(14, 10, 10, 'PRESENT', '2010'),
(15, 11, 11, 'PRESENT', '2014'),
(16, 11, 12, 'PAST', '1999-2006'),
(17, 3, 12, 'PAST', '2006-2012'),
(18, 12, 12, 'PRESENT', '2014');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `team_player_bridge`
--

INSERT INTO `team_player_bridge` (`TPB_ID`, `TEAM_ID`, `PLAYER_ID`, `TYPE`, `YEAR`) VALUES
(1, 1, 1, 'PRESENT', '2004'),
(2, 1, 2, 'PRESENT', '2012'),
(3, 11, 3, 'PAST', '2002-2011'),
(4, 1, 3, 'PRESENT', '2012'),
(5, 1, 4, 'PRESENT', '2010'),
(6, 1, 5, 'PRESENT', '2012'),
(7, 2, 6, 'PRESENT', '2014'),
(8, 2, 7, 'PRESENT', '2013'),
(9, 2, 8, 'PRESENT', '2014'),
(10, 11, 8, 'PAST', '2012-2014'),
(11, 7, 8, 'PAST', '2011-2012'),
(12, 2, 8, 'PAST', '2012'),
(13, 1, 9, 'PAST', '2004-2006'),
(14, 11, 9, 'PAST', '2006-2008'),
(15, 3, 9, 'PAST', '2008-2013'),
(16, 2, 9, 'PRESENT', '2013'),
(17, 5, 10, 'PAST', '2013-2014'),
(18, 11, 10, 'PAST', '2014-2015'),
(19, 2, 10, 'PRESENT', '2015'),
(20, 3, 11, 'PRESENT', '2013'),
(21, 12, 12, 'PAST', '2011-2012'),
(22, 5, 12, 'PAST', '2012-2013'),
(23, 3, 12, 'PRESENT', '2013'),
(24, 3, 13, 'PRESENT', '2001'),
(25, 3, 14, 'PRESENT', '2013'),
(26, 1, 15, 'PAST', '2008-2012'),
(27, 3, 15, 'PRESENT', '2012');

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
(10, 'Woohoo', 'weeehee', '12312312311', 'iii@yahoo.com', '12312 asoodaa', '2014-12-31', 'Who is your favorite PBA player?', '1234', '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'Active', 'Admin', 'http://localhost/PBA/assets/user_images/1234.png'),
(12, '12345', '1234', '12312312311', 'aishdias@yahoo.com', 'asdsa', '2013-12-31', 'Who is your favorite PBA team?', 'KB', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 'Durplu', 'Normal', 'http://localhost/PBA/assets/user_images/abcd.png'),
(13, 'Jacob', 'Abellanosa', '09123121231', 'asdasd@yahoo.com', '102 kaon kaon', '2012-12-31', 'Who is your favorite PBA team?', 'IDK', 'hello', 'hello', 'Active', 'Admin', 'http://localhost/PBA/assets/user_images/Irvin.jpg'),
(14, 'haha', 'haha', '01923123', 'asdf@haha.com', 'sdfsdf', '2015-01-01', 'Hello', 'HI', 'haha', 'haha', 'Active', 'Admin', 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg'),
(15, 'andres', 'paraguyas', '09059217526', 'sdfs@hi.com', 'Nasipit, Talamban', '2015-01-02', 'Hello', 'Hi', 'superman', '6068ea25d64976e6e0e44da9e29e0e41', 'Active', 'Admin', 'http://localhost/PBA/assets/user_images/superman.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
