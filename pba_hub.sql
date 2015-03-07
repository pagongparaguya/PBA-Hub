-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 01:18 PM
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
(2, 'Ato Agustin', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 300, 8, 8),
(3, 'Alex Compton', 65, 'October 9, 1950', 'United States', '2.jpg', 1, 1980, 190, 8, 8),
(4, 'Leo Isaac', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 211, 8, 8),
(5, 'Eric Gonzales', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 99, 8, 8),
(6, 'Manny Pacquiao', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 576, 8, 8),
(7, 'Norman Black', 65, 'October 9, 1950', 'United States', '2.jpg', 1, 1980, 123, 8, 8),
(8, 'Boyet Fernandez', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 321, 8, 8),
(9, 'Tim Cone', 65, 'October 9, 1950', 'United States', '2.jpg', 1, 1980, 211, 8, 8),
(10, 'Yeng Guiao', 65, 'October 9, 1950', 'Philippines', '2.jpg', 1, 1980, 900, 8, 8),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `coach_award_won`
--

INSERT INTO `coach_award_won` (`CAW_ID`, `COACH_ID`, `AWARD_NAME`, `YEAR_AWARDED`) VALUES
(1, 1, 'Coach Of The Year', 2014),
(2, 1, 'Coach of the Year', 2014),
(3, 2, 'Coach of the Year', 2010),
(4, 3, 'Coach of the Year', 2011),
(5, 3, 'Coach of the Year', 2012),
(6, 9, 'Coach of the Year', 2008),
(7, 9, 'Coach of the Year', 2009),
(8, 9, 'Coach of the Year', 2010),
(9, 7, 'Coach of the Year', 2007),
(10, 10, 'Coach of the Year', 2006),
(11, 10, 'Coach of the Year', 2002);

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
(12, 12, 'Jong Uichico/9.jpg', 'Jong Uichico/2.jpg', 'Jong Uichico/3.jpg', 'Jong Uichico/4.jpg', 'Jong Uichico/5.jpg', 'Jong Uichico/6.jpg', 'Jong Uichico/7.jpg', 'Jong Uichico/8.jpg', 'Jong Uichico/9.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `coach_championship_won`
--

INSERT INTO `coach_championship_won` (`CCW_ID`, `COACH_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(3, 9, 'All-Filipino Cup', 2012),
(4, 9, 'All-Filipino Cup', 2013),
(5, 3, 'All-Filipino Cup', 2011),
(6, 10, 'All-Filipino Cup', 2010),
(7, 9, 'Commissioner''s Cup', 2014),
(8, 9, 'Governors Cup', 2014),
(9, 10, 'Governors Cup', 2011),
(10, 10, 'Governors Cup', 2012);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`PLAYER_ID`, `PLAYER_AGE`, `PLAYER_FULLNAME`, `PLAYER_BDATE`, `PLAYER_PORTRAIT_PHOTO`, `PLAYER_STAT`, `PLAYER_YEARSTARTED`, `PLAYER_JERSEY_NO`, `PLAYER_POSITION`, `PLAYER_YEARS_PLAYED`, `PLAYER_HEIGHT`, `PLAYER_WEIGHT`, `PLAYER_PLAYOFF_APPEAR`, `PLAYER_FINALS_APPEAR`, `PLAYER_ALLSTAR_APPEAR`, `PLAYER_PPG`, `PLAYER_APG`, `PLAYER_RPG`, `PLAYER_BPG`, `PLAYER_SPG`, `PLAYER_TPG`, `PLAYER_FPG`, `PLAYER_FTP`, `PLAYER_FGP`, `PLAYER_TPP`) VALUES
(1, 33, 'Joachim Thoss', 'December 7,1981', '1.jpg', 1, 2004, 7, 'C', 11, '6''7', '93 kg', 10, 5, 10, 15.5, 3.2, 8.9, 2.1, 0.8, 2.5, 2.4, 69.8, 48.3, 16.1),
(2, 29, 'Joseph Casio', 'August 7,1986', '4.jpg', 1, 2011, 42, 'PG', 4, '5''10', '79 kg', 2, 0, 1, 12.1, 4.6, 3.3, 0.1, 0.8, 2, 2.1, 81.4, 40.1, 40.6),
(3, 37, 'Donaldo Hontiveros', 'June 1,1977', '2.jpg', 1, 1998, 25, 'SG', 17, '6''2', '82 kg', 12, 7, 12, 16.5, 4.3, 4.5, 0.8, 1.2, 2.6, 2.9, 85.1, 39.9, 42.1),
(4, 34, 'Cyrus Baguio', 'August 19,1980', '3.jpg', 1, 2003, 3, 'SF', 12, '6''2', '82 kg', 8, 2, 8, 11.2, 2.6, 3.2, 0.5, 0.9, 2.7, 1.8, 70.5, 45.7, 34.9),
(5, 33, 'Gabriel Espinas', 'January 3,1982', '9.jpg', 1, 2006, 27, 'SF', 9, '6''4', '91 kg', 5, 0, 1, 8.9, 1.5, 6.7, 1.6, 0.6, 1.9, 2.4, 65.9, 43.9, 36.8),
(6, 26, 'Solomon Alabi', 'March 21,1988', '10.jpg', 1, 2014, 32, 'C', 1, '7''1', '113 kg', 0, 0, 0, 8.5, 2.9, 9.2, 2.3, 0.8, 2.9, 3, 39.9, 45.8, 18.9),
(7, 31, 'J.C Intal', 'November 18,1983', '15.jpg', 1, 2007, 7, 'SF', 8, '6''4', '88 kg', 3, 0, 3, 6.5, 1.2, 3.2, 0.4, 0.5, 2.1, 1.9, 64.4, 35.4, 26.4),
(8, 35, 'Chico Lanete', 'August 1,1979', '19.jpg', 1, 2007, 26, 'PG', 8, '6''0', '82 kg', 4, 0, 0, 7.3, 4.5, 1.8, 0.2, 1.7, 2, 2.5, 70, 40, 37.5),
(9, 35, 'William Joel Wilson', 'January 30,1980', '22.jpg', 1, 2004, 28, 'PF', 11, '6''3', '91 kg', 5, 2, 0, 5.9, 1.1, 5.5, 1.6, 0.4, 2, 2.1, 56.5, 42.1, 35.9),
(10, 25, 'Justin Shaun Chua', 'July 13,1989', '23.jpg', 1, 2013, 18, 'PG', 2, '6''6', '111 kg', 1, 1, 0, 3.2, 0.3, 2.9, 1, 0.6, 1.1, 0.9, 60.9, 39.9, 33.9),
(11, 26, 'Gregory William Slaughter', 'May 19,1988', '38.jpg', 1, 2013, 20, 'C', 2, '7''0', '117 kg', 2, 1, 0, 14.8, 1.3, 9.9, 1.5, 0.2, 2.5, 2.2, 66.5, 52.1, 0),
(12, 28, 'Japeth Paul Aguilar', 'January 25,1987', '43.jpg', 1, 2009, 25, 'PF', 6, '6''9', '102 kg', 4, 2, 3, 9.2, 0.8, 5.9, 1.8, 0.3, 2.2, 2.2, 66, 46.1, 24.3),
(13, 35, 'Mark Anthony Caguioa', 'November 19,1979', '25.jpg', 1, 2001, 47, 'SG', 14, '6''1', '86 kg', 9, 4, 7, 16.7, 2.5, 5, 0.1, 0.8, 2.8, 2.4, 75.9, 43.8, 31.7),
(14, 25, 'James Patrick Forrester', 'September 3,1989', '14.jpg', 1, 2013, 1, 'SG', 2, '6''2', '86 kg', 0, 0, 0, 5.9, 2.2, 3, 1.1, 1.1, 2, 1.6, 74.4, 39.9, 39.7),
(15, 30, 'Leo Tenorio', 'July 9,1984', '6.jpg', 1, 2006, 5, 'PG', 14, '5''9', '70 kg', 9, 6, 3, 11.3, 4.4, 4, 0.1, 1.2, 2.3, 2.9, 79.8, 41.5, 31.9),
(16, 33, 'Jireh Ibanez', 'December 7,1981', '10.jpg', 1, 2004, 6, 'SF', 11, '6''7', '93 kg', 10, 5, 10, 15.5, 3.2, 8.9, 2.1, 0.8, 2.5, 2.4, 69.8, 48.3, 16.1),
(17, 29, 'Beau Belga', 'August 7,1986', '27.jpg', 1, 2011, 30, 'C', 4, '6''6', '79 kg', 2, 0, 1, 12.1, 4.6, 3.3, 0.1, 0.8, 2, 2.1, 81.4, 40.1, 40.6),
(18, 37, 'Ryan Arana', 'June 1,1977', '23.jpg', 1, 1998, 18, 'SG', 17, '6''2', '82 kg', 12, 7, 12, 16.5, 4.3, 4.5, 0.8, 1.2, 2.6, 2.9, 85.1, 39.9, 42.1),
(19, 34, 'Tyrone Tang', 'August 19,1980', '32.jpg', 1, 2003, 11, 'PG', 12, '6''2', '82 kg', 8, 2, 8, 11.2, 2.6, 3.2, 0.5, 0.9, 2.7, 1.8, 70.5, 45.7, 34.9),
(20, 33, 'Jervy Cruz', 'January 3,1982', '36.jpg', 1, 2006, 20, 'PF', 9, '6''4', '91 kg', 5, 0, 1, 8.9, 1.5, 6.7, 1.6, 0.6, 1.9, 2.4, 65.9, 43.9, 36.8),
(21, 26, 'Ronald Tubid', 'March 21,1988', '41.jpg', 1, 2014, 71, 'SG', 1, '7''1', '113 kg', 0, 0, 0, 8.5, 2.9, 9.2, 2.3, 0.8, 2.9, 3, 39.9, 45.8, 18.9),
(22, 31, 'Jay-R Reyes', 'November 18,1983', '11.jpg', 1, 2007, 22, 'C', 8, '6''4', '88 kg', 3, 0, 3, 6.5, 1.2, 3.2, 0.4, 0.5, 2.1, 1.9, 64.4, 35.4, 26.4),
(23, 35, 'Arwind Santos', 'August 1,1979', '19.jpg', 1, 2007, 29, 'F', 8, '6''0', '82 kg', 4, 0, 0, 7.3, 4.5, 1.8, 0.2, 1.7, 2, 2.5, 70, 40, 37.5),
(24, 35, 'Alex Cabagnot', 'January 30,1980', '25.jpg', 1, 2004, 5, 'PG', 11, '6''3', '91 kg', 5, 2, 0, 5.9, 1.1, 5.5, 1.6, 0.4, 2, 2.1, 56.5, 42.1, 35.9),
(25, 25, 'Nelbert Omolon', 'July 13,1989', '33.jpg', 1, 2013, 21, 'SF', 2, '6''6', '111 kg', 1, 1, 0, 3.2, 0.3, 2.9, 1, 0.6, 1.1, 0.9, 60.9, 39.9, 33.9),
(26, 26, 'Elmer Espiritu', 'May 19,1988', '42.jpg', 1, 2013, 23, 'SF', 2, '7''0', '117 kg', 2, 1, 0, 14.8, 1.3, 9.9, 1.5, 0.2, 2.5, 2.2, 66.5, 52.1, 0),
(27, 28, 'Jayson Castro', 'January 25,1987', '8.jpg', 1, 2009, 17, 'PG', 6, '6''9', '102 kg', 4, 2, 3, 9.2, 0.8, 5.9, 1.8, 0.3, 2.2, 2.2, 66, 46.1, 24.3),
(28, 35, 'Kelly Williams', 'November 19,1979', '15.jpg', 1, 2001, 21, 'PF', 14, '6''1', '86 kg', 9, 4, 7, 16.7, 2.5, 5, 0.1, 0.8, 2.8, 2.4, 75.9, 43.8, 31.7),
(29, 25, 'Jay Washington', 'September 3,1989', '13.jpg', 1, 2013, 2, 'C', 2, '6''2', '86 kg', 0, 0, 0, 5.9, 2.2, 3, 1.1, 1.1, 2, 1.6, 74.4, 39.9, 39.7),
(30, 30, 'Ryan Reyes', 'July 9,1984', '17.jpg', 1, 2006, 10, 'SG', 14, '5''9', '70 kg', 9, 6, 3, 11.3, 4.4, 4, 0.1, 1.2, 2.3, 2.9, 79.8, 41.5, 31.9),
(31, 33, 'Bryan Faundo', 'December 7,1981', '25.jpg', 1, 2004, 0, 'C', 11, '6''7', '93 kg', 10, 5, 10, 15.5, 3.2, 8.9, 2.1, 0.8, 2.5, 2.4, 69.8, 48.3, 16.1),
(32, 29, 'Jerick Canada', 'August 7,1986', '29.jpg', 1, 2011, 1, 'PG', 4, '6''6', '79 kg', 2, 0, 1, 12.1, 4.6, 3.3, 0.1, 0.8, 2, 2.1, 81.4, 40.1, 40.6),
(33, 37, 'Alex Nuyles', 'June 1,1977', '34.jpg', 1, 1998, 6, 'F', 17, '6''2', '82 kg', 12, 7, 12, 16.5, 4.3, 4.5, 0.8, 1.2, 2.6, 2.9, 85.1, 39.9, 42.1),
(34, 34, 'Sunday Salvacion', 'August 19,1980', '11.jpg', 1, 2003, 80, 'F', 12, '6''2', '82 kg', 8, 2, 8, 11.2, 2.6, 3.2, 0.5, 0.9, 2.7, 1.8, 70.5, 45.7, 34.9),
(35, 33, 'Larry Rodriguez', 'January 3,1982', '1.jpg', 1, 2006, 55, 'F', 9, '6''4', '91 kg', 5, 0, 1, 8.9, 1.5, 6.7, 1.6, 0.6, 1.9, 2.4, 65.9, 43.9, 36.8),
(36, 26, 'Dennis Miranda', 'March 21,1988', '2.jpg', 1, 2014, 2, 'G', 1, '7''1', '113 kg', 0, 0, 0, 8.5, 2.9, 9.2, 2.3, 0.8, 2.9, 3, 39.9, 45.8, 18.9),
(37, 31, 'Anthony Semerad', 'November 18,1983', '37.jpg', 1, 2007, 6, 'F', 8, '6''4', '88 kg', 3, 0, 3, 6.5, 1.2, 3.2, 0.4, 0.5, 2.1, 1.9, 64.4, 35.4, 26.4),
(38, 35, 'Yancy De Ocampo', 'August 1,1979', '22.jpg', 1, 2007, 95, 'C', 8, '6''0', '82 kg', 4, 0, 0, 7.3, 4.5, 1.8, 0.2, 1.7, 2, 2.5, 70, 40, 37.5),
(39, 35, 'Mark Isip', 'January 30,1980', '17.jpg', 1, 2004, 12, 'PF', 11, '6''3', '91 kg', 5, 2, 0, 5.9, 1.1, 5.5, 1.6, 0.4, 2, 2.1, 56.5, 42.1, 35.9),
(40, 25, 'Terrence Romeo', 'July 13,1989', '43.jpg', 1, 2013, 7, 'PG', 2, '6''6', '111 kg', 1, 1, 0, 3.2, 0.3, 2.9, 1, 0.6, 1.1, 0.9, 60.9, 39.9, 33.9),
(41, 26, 'LA Revilla', 'May 19,1988', '31.jpg', 1, 2013, 2, 'PG', 2, '7''0', '117 kg', 2, 1, 0, 14.8, 1.3, 9.9, 1.5, 0.2, 2.5, 2.2, 66.5, 52.1, 0),
(42, 28, 'Mark Yee', 'January 25,1987', '5.jpg', 1, 2009, 27, 'F', 6, '6''9', '102 kg', 4, 2, 3, 9.2, 0.8, 5.9, 1.8, 0.3, 2.2, 2.2, 66, 46.1, 24.3),
(43, 35, 'Rich Alvarez', 'November 19,1979', '2.jpg', 1, 2001, 21, 'PF', 14, '6''1', '86 kg', 9, 4, 7, 16.7, 2.5, 5, 0.1, 0.8, 2.8, 2.4, 75.9, 43.8, 31.7),
(44, 25, 'JR Buensuceso', 'September 3,1989', '16.jpg', 1, 2013, 24, 'G', 2, '6''2', '86 kg', 0, 0, 0, 5.9, 2.2, 3, 1.1, 1.1, 2, 1.6, 74.4, 39.9, 39.7),
(45, 30, 'Manny Pacquiao', 'July 9,1984', '21.jpg', 1, 2006, 17, 'PG', 14, '5''9', '70 kg', 9, 6, 3, 11.3, 4.4, 4, 0.1, 1.2, 2.3, 2.9, 79.8, 41.5, 31.9),
(46, 33, 'Gary David', 'December 7,1981', '29.jpg', 1, 2004, 28, 'G', 11, '6''7', '93 kg', 10, 5, 10, 15.5, 3.2, 8.9, 2.1, 0.8, 2.5, 2.4, 69.8, 48.3, 16.1),
(47, 29, 'John Ferriols', 'August 7,1986', '38.jpg', 1, 2011, 22, 'F', 4, '6''6', '79 kg', 2, 0, 1, 12.1, 4.6, 3.3, 0.1, 0.8, 2, 2.1, 81.4, 40.1, 40.6),
(48, 37, 'Reynel Hugnatan', 'June 1,1977', '42.jpg', 1, 1998, 21, 'PF', 17, '6''2', '82 kg', 12, 7, 12, 16.5, 4.3, 4.5, 0.8, 1.2, 2.6, 2.9, 85.1, 39.9, 42.1),
(49, 34, 'James Cena', 'August 19,1980', '1.jpg', 1, 2003, 15, 'C', 12, '6''2', '82 kg', 8, 2, 8, 11.2, 2.6, 3.2, 0.5, 0.9, 2.7, 1.8, 70.5, 45.7, 34.9),
(50, 33, 'Jai Reyes', 'January 3,1982', '3.jpg', 1, 2006, 5, 'PG', 9, '6''4', '91 kg', 5, 0, 1, 8.9, 1.5, 6.7, 1.6, 0.6, 1.9, 2.4, 65.9, 43.9, 36.8),
(51, 26, 'Mark Borboran', 'March 21,1988', '9.jpg', 1, 2014, 16, 'F', 1, '7''1', '113 kg', 0, 0, 0, 8.5, 2.9, 9.2, 2.3, 0.8, 2.9, 3, 39.9, 45.8, 18.9),
(52, 31, 'Mark Cardona', 'November 18,1983', '22.jpg', 1, 2007, 3, 'G', 8, '6''4', '88 kg', 3, 0, 3, 6.5, 1.2, 3.2, 0.4, 0.5, 2.1, 1.9, 64.4, 35.4, 26.4),
(53, 35, 'Enrico Villanueva', 'August 1,1979', '15.jpg', 1, 2007, 14, 'C', 8, '6''0', '82 kg', 4, 0, 0, 7.3, 4.5, 1.8, 0.2, 1.7, 2, 2.5, 70, 40, 37.5),
(54, 35, 'Jonas Villanueva', 'January 30,1980', '35.jpg', 1, 2004, 11, 'PG', 11, '6''3', '91 kg', 5, 2, 0, 5.9, 1.1, 5.5, 1.6, 0.4, 2, 2.1, 56.5, 42.1, 35.9),
(55, 25, 'Nino Canaleta', 'July 13,1989', '40.jpg', 1, 2013, 9, 'F', 2, '6''6', '111 kg', 1, 1, 0, 3.2, 0.3, 2.9, 1, 0.6, 1.1, 0.9, 60.9, 39.9, 33.9),
(56, 26, 'Peter June Simon', 'May 19,1988', '12.jpg', 1, 2013, 8, 'G', 2, '7''0', '117 kg', 2, 1, 0, 14.8, 1.3, 9.9, 1.5, 0.2, 2.5, 2.2, 66.5, 52.1, 0),
(57, 28, 'Mark Barroca', 'January 25,1987', '32.jpg', 1, 2009, 14, 'PG', 6, '6''9', '102 kg', 4, 2, 3, 9.2, 0.8, 5.9, 1.8, 0.3, 2.2, 2.2, 66, 46.1, 24.3),
(58, 35, 'Marc Pingris', 'November 19,1979', '19.jpg', 1, 2001, 15, 'PF', 14, '6''1', '86 kg', 9, 4, 7, 16.7, 2.5, 5, 0.1, 0.8, 2.8, 2.4, 75.9, 43.8, 31.7),
(59, 25, 'Yousef Taha', 'September 3,1989', '25.jpg', 1, 2013, 0, 'C', 2, '6''2', '86 kg', 0, 0, 0, 5.9, 2.2, 3, 1.1, 1.1, 2, 1.6, 74.4, 39.9, 39.7),
(60, 30, 'James Yap', 'July 9,1984', '7.jpg', 1, 2006, 18, 'SG', 14, '5''9', '70 kg', 9, 6, 3, 11.3, 4.4, 4, 0.1, 1.2, 2.3, 2.9, 79.8, 41.5, 31.9);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `player_carousel_image`
--

INSERT INTO `player_carousel_image` (`PCI_ID`, `PLAYER_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`, `IMAGE6`, `IMAGE7`, `IMAGE8`, `IMAGE9`) VALUES
(1, 1, 'Alaska/1/1.jpg', 'Alaska/1/2.jpg', 'Alaska/1/3.jpg', 'Alaska/1/4.jpg', 'Alaska/1/5.jpg', 'Alaska/1/6.jpg', 'Alaska/1/7.jpg', 'Alaska/1/8.jpg', 'Alaska/1/9.jpg'),
(2, 2, 'Alaska/1/1.jpg', 'Alaska/1/2.jpg', 'Alaska/1/3.jpg', 'Alaska/1/4.jpg', 'Alaska/1/5.jpg', 'Alaska/1/6.jpg', 'Alaska/1/7.jpg', 'Alaska/1/8.jpg', 'Alaska/1/9.jpg'),
(3, 3, 'Alaska/1/1.jpg', 'Alaska/1/2.jpg', 'Alaska/1/3.jpg', 'Alaska/1/4.jpg', 'Alaska/1/5.jpg', 'Alaska/1/6.jpg', 'Alaska/1/7.jpg', 'Alaska/1/8.jpg', 'Alaska/1/9.jpg'),
(4, 4, 'Alaska/2/1.jpg', 'Alaska/2/2.jpg', 'Alaska/2/3.jpg', 'Alaska/2/4.jpg', 'Alaska/2/5.jpg', 'Alaska/2/6.jpg', 'Alaska/2/7.jpg', 'Alaska/2/8.jpg', 'Alaska/2/9.jpg'),
(5, 5, 'Alaska/2/1.jpg', 'Alaska/2/2.jpg', 'Alaska/2/3.jpg', 'Alaska/2/4.jpg', 'Alaska/2/5.jpg', 'Alaska/2/6.jpg', 'Alaska/2/7.jpg', 'Alaska/2/8.jpg', 'Alaska/2/9.jpg'),
(6, 6, 'Alaska/2/1.jpg', 'Alaska/2/2.jpg', 'Alaska/2/3.jpg', 'Alaska/2/4.jpg', 'Alaska/2/5.jpg', 'Alaska/2/6.jpg', 'Alaska/2/7.jpg', 'Alaska/2/8.jpg', 'Alaska/2/9.jpg'),
(7, 7, 'Alaska/3/1.jpg', 'Alaska/3/2.jpg', 'Alaska/3/3.jpg', 'Alaska/3/4.jpg', 'Alaska/3/5.jpg', 'Alaska/3/6.jpg', 'Alaska/3/7.jpg', 'Alaska/3/8.jpg', 'Alaska/3/9.jpg'),
(8, 8, 'Alaska/3/1.jpg', 'Alaska/3/2.jpg', 'Alaska/3/3.jpg', 'Alaska/3/4.jpg', 'Alaska/3/5.jpg', 'Alaska/3/6.jpg', 'Alaska/3/7.jpg', 'Alaska/3/8.jpg', 'Alaska/3/9.jpg'),
(9, 9, 'Alaska/3/1.jpg', 'Alaska/3/2.jpg', 'Alaska/3/3.jpg', 'Alaska/3/4.jpg', 'Alaska/3/5.jpg', 'Alaska/3/6.jpg', 'Alaska/3/7.jpg', 'Alaska/3/8.jpg', 'Alaska/3/9.jpg'),
(10, 10, 'Alaska/4/1.jpg', 'Alaska/4/2.jpg', 'Alaska/4/3.jpg', 'Alaska/4/4.jpg', 'Alaska/4/5.jpg', 'Alaska/4/6.jpg', 'Alaska/4/7.jpg', 'Alaska/4/8.jpg', 'Alaska/4/9.jpg'),
(11, 11, 'Alaska/4/1.jpg', 'Alaska/4/2.jpg', 'Alaska/4/3.jpg', 'Alaska/4/4.jpg', 'Alaska/4/5.jpg', 'Alaska/4/6.jpg', 'Alaska/4/7.jpg', 'Alaska/4/8.jpg', 'Alaska/4/9.jpg'),
(12, 12, 'Alaska/4/1.jpg', 'Alaska/4/2.jpg', 'Alaska/4/3.jpg', 'Alaska/4/4.jpg', 'Alaska/4/5.jpg', 'Alaska/4/6.jpg', 'Alaska/4/7.jpg', 'Alaska/4/8.jpg', 'Alaska/4/9.jpg'),
(13, 13, 'Alaska/5/1.jpg', 'Alaska/5/2.jpg', 'Alaska/5/3.jpg', 'Alaska/5/4.jpg', 'Alaska/5/5.jpg', 'Alaska/5/6.jpg', 'Alaska/5/7.jpg', 'Alaska/5/8.jpg', 'Alaska/5/9.jpg'),
(14, 14, 'Alaska/5/1.jpg', 'Alaska/5/2.jpg', 'Alaska/5/3.jpg', 'Alaska/5/4.jpg', 'Alaska/5/5.jpg', 'Alaska/5/6.jpg', 'Alaska/5/7.jpg', 'Alaska/5/8.jpg', 'Alaska/5/9.jpg'),
(15, 15, 'Alaska/5/1.jpg', 'Alaska/5/2.jpg', 'Alaska/5/3.jpg', 'Alaska/5/4.jpg', 'Alaska/5/5.jpg', 'Alaska/5/6.jpg', 'Alaska/5/7.jpg', 'Alaska/5/8.jpg', 'Alaska/5/9.jpg'),
(16, 16, 'Barako Bulls/1/1.jpg', 'Barako Bulls/1/2.jpg', 'Barako Bulls/1/3.jpg', 'Barako Bulls/1/4.jpg', 'Barako Bulls/1/5.jpg', 'Barako Bulls/1/6.jpg', 'Barako Bulls/1/7.jpg', 'Barako Bulls/1/8.jpg', 'Barako Bulls/1/9.jpg'),
(17, 17, 'Barako Bulls/1/1.jpg', 'Barako Bulls/1/2.jpg', 'Barako Bulls/1/3.jpg', 'Barako Bulls/1/4.jpg', 'Barako Bulls/1/5.jpg', 'Barako Bulls/1/6.jpg', 'Barako Bulls/1/7.jpg', 'Barako Bulls/1/8.jpg', 'Barako Bulls/1/9.jpg'),
(18, 18, 'Barako Bulls/1/1.jpg', 'Barako Bulls/1/2.jpg', 'Barako Bulls/1/3.jpg', 'Barako Bulls/1/4.jpg', 'Barako Bulls/1/5.jpg', 'Barako Bulls/1/6.jpg', 'Barako Bulls/1/7.jpg', 'Barako Bulls/1/8.jpg', 'Barako Bulls/1/9.jpg'),
(19, 19, 'Barako Bulls/2/1.jpg', 'Barako Bulls/2/2.jpg', 'Barako Bulls/2/3.jpg', 'Barako Bulls/2/4.jpg', 'Barako Bulls/2/5.jpg', 'Barako Bulls/2/6.jpg', 'Barako Bulls/2/7.jpg', 'Barako Bulls/2/8.jpg', 'Barako Bulls/2/9.jpg'),
(20, 20, 'Barako Bulls/2/1.jpg', 'Barako Bulls/2/2.jpg', 'Barako Bulls/2/3.jpg', 'Barako Bulls/2/4.jpg', 'Barako Bulls/2/5.jpg', 'Barako Bulls/2/6.jpg', 'Barako Bulls/2/7.jpg', 'Barako Bulls/2/8.jpg', 'Barako Bulls/2/9.jpg'),
(21, 21, 'Barako Bulls/2/1.jpg', 'Barako Bulls/2/2.jpg', 'Barako Bulls/2/3.jpg', 'Barako Bulls/2/4.jpg', 'Barako Bulls/2/5.jpg', 'Barako Bulls/2/6.jpg', 'Barako Bulls/2/7.jpg', 'Barako Bulls/2/8.jpg', 'Barako Bulls/2/9.jpg'),
(22, 22, 'Barako Bulls/3/1.jpg', 'Barako Bulls/3/2.jpg', 'Barako Bulls/3/3.jpg', 'Barako Bulls/3/4.jpg', 'Barako Bulls/3/5.jpg', 'Barako Bulls/3/6.jpg', 'Barako Bulls/3/7.jpg', 'Barako Bulls/3/8.jpg', 'Barako Bulls/3/9.jpg'),
(23, 23, 'Barako Bulls/3/1.jpg', 'Barako Bulls/3/2.jpg', 'Barako Bulls/3/3.jpg', 'Barako Bulls/3/4.jpg', 'Barako Bulls/3/5.jpg', 'Barako Bulls/3/6.jpg', 'Barako Bulls/3/7.jpg', 'Barako Bulls/3/8.jpg', 'Barako Bulls/3/9.jpg'),
(24, 24, 'Barako Bulls/3/1.jpg', 'Barako Bulls/3/2.jpg', 'Barako Bulls/3/3.jpg', 'Barako Bulls/3/4.jpg', 'Barako Bulls/3/5.jpg', 'Barako Bulls/3/6.jpg', 'Barako Bulls/3/7.jpg', 'Barako Bulls/3/8.jpg', 'Barako Bulls/3/9.jpg'),
(25, 25, 'Barako Bulls/4/1.jpg', 'Barako Bulls/4/2.jpg', 'Barako Bulls/4/3.jpg', 'Barako Bulls/4/4.jpg', 'Barako Bulls/4/5.jpg', 'Barako Bulls/4/6.jpg', 'Barako Bulls/4/7.jpg', 'Barako Bulls/4/8.jpg', 'Barako Bulls/4/9.jpg'),
(26, 26, 'Barako Bulls/4/1.jpg', 'Barako Bulls/4/2.jpg', 'Barako Bulls/4/3.jpg', 'Barako Bulls/4/4.jpg', 'Barako Bulls/4/5.jpg', 'Barako Bulls/4/6.jpg', 'Barako Bulls/4/7.jpg', 'Barako Bulls/4/8.jpg', 'Barako Bulls/4/9.jpg'),
(27, 27, 'Barako Bulls/4/1.jpg', 'Barako Bulls/4/2.jpg', 'Barako Bulls/4/3.jpg', 'Barako Bulls/4/4.jpg', 'Barako Bulls/4/5.jpg', 'Barako Bulls/4/6.jpg', 'Barako Bulls/4/7.jpg', 'Barako Bulls/4/8.jpg', 'Barako Bulls/4/9.jpg'),
(28, 28, 'Barako Bulls/5/1.jpg', 'Barako Bulls/5/2.jpg', 'Barako Bulls/5/3.jpg', 'Barako Bulls/5/4.jpg', 'Barako Bulls/5/5.jpg', 'Barako Bulls/5/6.jpg', 'Barako Bulls/5/7.jpg', 'Barako Bulls/5/8.jpg', 'Barako Bulls/5/9.jpg'),
(29, 29, 'Barako Bulls/5/1.jpg', 'Barako Bulls/5/2.jpg', 'Barako Bulls/5/3.jpg', 'Barako Bulls/5/4.jpg', 'Barako Bulls/5/5.jpg', 'Barako Bulls/5/6.jpg', 'Barako Bulls/5/7.jpg', 'Barako Bulls/5/8.jpg', 'Barako Bulls/5/9.jpg'),
(30, 30, 'Barako Bulls/5/1.jpg', 'Barako Bulls/5/2.jpg', 'Barako Bulls/5/3.jpg', 'Barako Bulls/5/4.jpg', 'Barako Bulls/5/5.jpg', 'Barako Bulls/5/6.jpg', 'Barako Bulls/5/7.jpg', 'Barako Bulls/5/8.jpg', 'Barako Bulls/5/9.jpg'),
(31, 31, 'Blackwater/1/1.jpg', 'Blackwater/1/2.jpg', 'Blackwater/1/3.jpg', 'Blackwater/1/4.jpg', 'Blackwater/1/5.jpg', 'Blackwater/1/6.jpg', 'Blackwater/1/7.jpg', 'Blackwater/1/8.jpg', 'Blackwater/1/9.jpg'),
(32, 32, 'Blackwater/1/1.jpg', 'Blackwater/1/2.jpg', 'Blackwater/1/3.jpg', 'Blackwater/1/4.jpg', 'Blackwater/1/5.jpg', 'Blackwater/1/6.jpg', 'Blackwater/1/7.jpg', 'Blackwater/1/8.jpg', 'Blackwater/1/9.jpg'),
(33, 33, 'Blackwater/1/1.jpg', 'Blackwater/1/2.jpg', 'Blackwater/1/3.jpg', 'Blackwater/1/4.jpg', 'Blackwater/1/5.jpg', 'Blackwater/1/6.jpg', 'Blackwater/1/7.jpg', 'Blackwater/1/8.jpg', 'Blackwater/1/9.jpg'),
(34, 34, 'Blackwater/2/1.jpg', 'Blackwater/2/2.jpg', 'Blackwater/2/3.jpg', 'Blackwater/2/4.jpg', 'Blackwater/2/5.jpg', 'Blackwater/2/6.jpg', 'Blackwater/2/7.jpg', 'Blackwater/2/8.jpg', 'Blackwater/2/9.jpg'),
(35, 35, 'Blackwater/2/1.jpg', 'Blackwater/2/2.jpg', 'Blackwater/2/3.jpg', 'Blackwater/2/4.jpg', 'Blackwater/2/5.jpg', 'Blackwater/2/6.jpg', 'Blackwater/2/7.jpg', 'Blackwater/2/8.jpg', 'Blackwater/2/9.jpg'),
(36, 36, 'Blackwater/2/1.jpg', 'Blackwater/2/2.jpg', 'Blackwater/2/3.jpg', 'Blackwater/2/4.jpg', 'Blackwater/2/5.jpg', 'Blackwater/2/6.jpg', 'Blackwater/2/7.jpg', 'Blackwater/2/8.jpg', 'Blackwater/2/9.jpg'),
(37, 37, 'Blackwater/3/1.jpg', 'Blackwater/3/2.jpg', 'Blackwater/3/3.jpg', 'Blackwater/3/4.jpg', 'Blackwater/3/5.jpg', 'Blackwater/3/6.jpg', 'Blackwater/3/7.jpg', 'Blackwater/3/8.jpg', 'Blackwater/3/9.jpg'),
(38, 38, 'Blackwater/3/1.jpg', 'Blackwater/3/2.jpg', 'Blackwater/3/3.jpg', 'Blackwater/3/4.jpg', 'Blackwater/3/5.jpg', 'Blackwater/3/6.jpg', 'Blackwater/3/7.jpg', 'Blackwater/3/8.jpg', 'Blackwater/3/9.jpg'),
(39, 39, 'Blackwater/3/1.jpg', 'Blackwater/3/2.jpg', 'Blackwater/3/3.jpg', 'Blackwater/3/4.jpg', 'Blackwater/3/5.jpg', 'Blackwater/3/6.jpg', 'Blackwater/3/7.jpg', 'Blackwater/3/8.jpg', 'Blackwater/3/9.jpg'),
(40, 40, 'Blackwater/4/1.jpg', 'Blackwater/4/2.jpg', 'Blackwater/4/3.jpg', 'Blackwater/4/4.jpg', 'Blackwater/4/5.jpg', 'Blackwater/4/6.jpg', 'Blackwater/4/7.jpg', 'Blackwater/4/8.jpg', 'Blackwater/4/9.jpg'),
(41, 41, 'Blackwater/4/1.jpg', 'Blackwater/4/2.jpg', 'Blackwater/4/3.jpg', 'Blackwater/4/4.jpg', 'Blackwater/4/5.jpg', 'Blackwater/4/6.jpg', 'Blackwater/4/7.jpg', 'Blackwater/4/8.jpg', 'Blackwater/4/9.jpg'),
(42, 42, 'Blackwater/4/1.jpg', 'Blackwater/4/2.jpg', 'Blackwater/4/3.jpg', 'Blackwater/4/4.jpg', 'Blackwater/4/5.jpg', 'Blackwater/4/6.jpg', 'Blackwater/4/7.jpg', 'Blackwater/4/8.jpg', 'Blackwater/4/9.jpg'),
(43, 43, 'Blackwater/5/1.jpg', 'Blackwater/5/2.jpg', 'Blackwater/5/3.jpg', 'Blackwater/5/4.jpg', 'Blackwater/5/5.jpg', 'Blackwater/5/6.jpg', 'Blackwater/5/7.jpg', 'Blackwater/5/8.jpg', 'Blackwater/5/9.jpg'),
(44, 44, 'Blackwater/5/1.jpg', 'Blackwater/5/2.jpg', 'Blackwater/5/3.jpg', 'Blackwater/5/4.jpg', 'Blackwater/5/5.jpg', 'Blackwater/5/6.jpg', 'Blackwater/5/7.jpg', 'Blackwater/5/8.jpg', 'Blackwater/5/9.jpg'),
(45, 45, 'Blackwater/5/1.jpg', 'Blackwater/5/2.jpg', 'Blackwater/5/3.jpg', 'Blackwater/5/4.jpg', 'Blackwater/5/5.jpg', 'Blackwater/5/6.jpg', 'Blackwater/5/7.jpg', 'Blackwater/5/8.jpg', 'Blackwater/5/9.jpg'),
(46, 46, 'Ginebra/1/1.jpg', 'Ginebra/1/2.jpg', 'Ginebra/1/3.jpg', 'Ginebra/1/4.jpg', 'Ginebra/1/5.jpg', 'Ginebra/1/6.jpg', 'Ginebra/1/7.jpg', 'Ginebra/1/8.jpg', 'Ginebra/1/9.jpg'),
(47, 47, 'Ginebra/1/1.jpg', 'Ginebra/1/2.jpg', 'Ginebra/1/3.jpg', 'Ginebra/1/4.jpg', 'Ginebra/1/5.jpg', 'Ginebra/1/6.jpg', 'Ginebra/1/7.jpg', 'Ginebra/1/8.jpg', 'Ginebra/1/9.jpg'),
(48, 48, 'Ginebra/1/1.jpg', 'Ginebra/1/2.jpg', 'Ginebra/1/3.jpg', 'Ginebra/1/4.jpg', 'Ginebra/1/5.jpg', 'Ginebra/1/6.jpg', 'Ginebra/1/7.jpg', 'Ginebra/1/8.jpg', 'Ginebra/1/9.jpg'),
(49, 49, 'Ginebra/2/1.jpg', 'Ginebra/2/2.jpg', 'Ginebra/2/3.jpg', 'Ginebra/2/4.jpg', 'Ginebra/2/5.jpg', 'Ginebra/2/6.jpg', 'Ginebra/2/7.jpg', 'Ginebra/2/8.jpg', 'Ginebra/1/9.jpg'),
(50, 50, 'Ginebra/2/1.jpg', 'Ginebra/2/2.jpg', 'Ginebra/2/3.jpg', 'Ginebra/2/4.jpg', 'Ginebra/2/5.jpg', 'Ginebra/2/6.jpg', 'Ginebra/2/7.jpg', 'Ginebra/2/8.jpg', 'Ginebra/1/9.jpg'),
(51, 51, 'Ginebra/2/1.jpg', 'Ginebra/2/2.jpg', 'Ginebra/2/3.jpg', 'Ginebra/2/4.jpg', 'Ginebra/2/5.jpg', 'Ginebra/2/6.jpg', 'Ginebra/2/7.jpg', 'Ginebra/2/8.jpg', 'Ginebra/1/9.jpg'),
(52, 52, 'Ginebra/3/1.jpg', 'Ginebra/3/2.jpg', 'Ginebra/3/3.jpg', 'Ginebra/3/4.jpg', 'Ginebra/3/5.jpg', 'Ginebra/3/6.jpg', 'Ginebra/3/7.jpg', 'Ginebra/3/8.jpg', 'Ginebra/3/9.jpg'),
(53, 53, 'Ginebra/3/1.jpg', 'Ginebra/3/2.jpg', 'Ginebra/3/3.jpg', 'Ginebra/3/4.jpg', 'Ginebra/3/5.jpg', 'Ginebra/3/6.jpg', 'Ginebra/3/7.jpg', 'Ginebra/3/8.jpg', 'Ginebra/3/9.jpg'),
(54, 54, 'Ginebra/3/1.jpg', 'Ginebra/3/2.jpg', 'Ginebra/3/3.jpg', 'Ginebra/3/4.jpg', 'Ginebra/3/5.jpg', 'Ginebra/3/6.jpg', 'Ginebra/3/7.jpg', 'Ginebra/3/8.jpg', 'Ginebra/3/9.jpg'),
(55, 55, 'Ginebra/4/1.jpg', 'Ginebra/4/2.jpg', 'Ginebra/4/3.jpg', 'Ginebra/4/4.jpg', 'Ginebra/4/5.jpg', 'Ginebra/4/6.jpg', 'Ginebra/4/7.jpg', 'Ginebra/4/8.jpg', 'Ginebra/4/9.jpg'),
(56, 56, 'Ginebra/4/1.jpg', 'Ginebra/4/2.jpg', 'Ginebra/4/3.jpg', 'Ginebra/4/4.jpg', 'Ginebra/4/5.jpg', 'Ginebra/4/6.jpg', 'Ginebra/4/7.jpg', 'Ginebra/4/8.jpg', 'Ginebra/4/9.jpg'),
(57, 57, 'Ginebra/4/1.jpg', 'Ginebra/4/2.jpg', 'Ginebra/4/3.jpg', 'Ginebra/4/4.jpg', 'Ginebra/4/5.jpg', 'Ginebra/4/6.jpg', 'Ginebra/4/7.jpg', 'Ginebra/4/8.jpg', 'Ginebra/4/9.jpg'),
(58, 58, 'Ginebra/5/1.jpg', 'Ginebra/5/2.jpg', 'Ginebra/5/3.jpg', 'Ginebra/5/4.jpg', 'Ginebra/5/5.jpg', 'Ginebra/5/6.jpg', 'Ginebra/5/7.jpg', 'Ginebra/5/8.jpg', 'Ginebra/5/9.jpg'),
(59, 59, 'Ginebra/5/1.jpg', 'Ginebra/5/2.jpg', 'Ginebra/5/3.jpg', 'Ginebra/5/4.jpg', 'Ginebra/5/5.jpg', 'Ginebra/5/6.jpg', 'Ginebra/5/7.jpg', 'Ginebra/5/8.jpg', 'Ginebra/5/9.jpg'),
(60, 60, 'Ginebra/5/1.jpg', 'Ginebra/5/2.jpg', 'Ginebra/5/3.jpg', 'Ginebra/5/4.jpg', 'Ginebra/5/5.jpg', 'Ginebra/5/6.jpg', 'Ginebra/5/7.jpg', 'Ginebra/5/8.jpg', 'Ginebra/5/9.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `player_championship_won`
--

INSERT INTO `player_championship_won` (`PCW_ID`, `PLAYER_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(1, 1, 'Governors Cup', 2009),
(2, 1, 'Governors Cup', 2010),
(3, 1, 'Governors Cup', 2011),
(4, 2, 'Governors Cup', 2009),
(5, 3, 'Commissioner''s Cup', 2009),
(6, 4, 'Commissioner''s Cup', 2009),
(7, 3, 'Commissioner''s Cup', 2010),
(8, 4, 'Commissioner''s Cup', 2010),
(9, 60, 'Commissioner''s Cup', 2012),
(10, 60, 'Commissioner''s Cup', 2013),
(11, 60, 'Governors Cup', 2013),
(12, 60, 'Governors Cup', 2014);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PROD_ID`, `USER_ID`, `START_BID`, `PROD_NAME`, `PROD_CAT`, `PROD_DES`, `PROD_AGE_NAME`, `PROD_AGE_VAL`, `PROD_STAT`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 16, 1000, '1234', 'Jersey', '123412', 'Day', 1, 'On-going', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg'),
(2, 15, 1000, '1234', 'Jersey', 'hahaha', 'Day', 1, 'On-going', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg', 'http://localhost/PBA/assets/product_images/sample.jpg');

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
(12, 'Talk N Text Tropang Texters', 'talk n text.jpg', 1, 1990, 563, 542, 'The Talk ''N Text Tropang Texters are a professional basketball team currently owned by Smart Communications, a subsidiary of the Philippine Long Distance Telephone Company (PLDT), playing in the Philippine Basketball Association (PBA) since 1990.\nThe franchise began in 1990 when Pepsi-Cola Products Philippines, Inc. (PCPPI) acquired a PBA franchise. Under PCPPI, the franchise played under the names Pepsi and 7 Up. In 1996, the franchise came under the control of Pilipino Telephone Corporation (Piltel) and played under the name Mobiline. In 2001, the franchise was renamed Talk ''N Text after the operations of Piltel was absorbed by Smart Communications.', 65, 15);

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
(18, 12, 12, 'PRESENT', '2012');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

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
(27, 3, 15, 'PRESENT', '2012'),
(28, 4, 16, 'PRESENT', '2001'),
(29, 4, 17, 'PRESENT', '2010'),
(30, 4, 18, 'PRESENT', '2005'),
(31, 4, 19, 'PRESENT', '2006'),
(32, 4, 20, 'PRESENT', '1999'),
(33, 5, 21, 'PRESENT', '2009'),
(34, 5, 22, 'PRESENT', '2005'),
(35, 5, 23, 'PRESENT', '2001'),
(36, 5, 24, 'PRESENT', '2003'),
(37, 5, 25, 'PRESENT', '2010'),
(38, 6, 26, 'PRESENT', '2013'),
(39, 6, 27, 'PRESENT', '1995'),
(40, 6, 28, 'PRESENT', '1996'),
(41, 6, 29, 'PRESENT', '2006'),
(42, 6, 30, 'PRESENT', '2008'),
(43, 7, 31, 'PRESENT', '2009'),
(44, 7, 32, 'PRESENT', '2011'),
(45, 7, 33, 'PRESENT', '2012'),
(46, 7, 34, 'PRESENT', '2013'),
(47, 7, 35, 'PRESENT', '2000'),
(48, 8, 36, 'PRESENT', '2002'),
(49, 8, 37, 'PRESENT', '2003'),
(50, 8, 38, 'PRESENT', '2004'),
(51, 8, 39, 'PRESENT', '2005'),
(52, 8, 40, 'PRESENT', '2006'),
(53, 9, 41, 'PRESENT', '2007'),
(54, 9, 42, 'PRESENT', '2008'),
(55, 9, 43, 'PRESENT', '2009'),
(56, 9, 44, 'PRESENT', '2010'),
(57, 9, 45, 'PRESENT', '1997'),
(58, 10, 46, 'PRESENT', '2000'),
(59, 10, 47, 'PRESENT', '2001'),
(60, 10, 48, 'PRESENT', '2002'),
(61, 10, 49, 'PRESENT', '2004'),
(62, 10, 50, 'PRESENT', '2005'),
(63, 11, 51, 'PRESENT', '2003'),
(64, 11, 52, 'PRESENT', '2009'),
(65, 11, 53, 'PRESENT', '2009'),
(66, 11, 54, 'PRESENT', '2008'),
(67, 11, 55, 'PRESENT', '2005'),
(68, 12, 56, 'PRESENT', '2006'),
(69, 12, 57, 'PRESENT', '2003'),
(70, 12, 58, 'PRESENT', '2004'),
(71, 12, 59, 'PRESENT', '2000'),
(72, 12, 60, 'PRESENT', '2001'),
(73, 1, 10, 'NOTABLE', '2000'),
(74, 1, 45, 'NOTABLE', '2008'),
(75, 1, 49, 'NOTABLE', '2008'),
(76, 1, 33, 'NOTABLE', '2008'),
(77, 2, 54, 'NOTABLE', '2011'),
(78, 2, 59, 'NOTABLE', '2011'),
(79, 2, 11, 'NOTABLE', '2012'),
(80, 2, 3, 'NOTABLE', '2013'),
(81, 3, 15, 'NOTABLE', '1999'),
(82, 3, 24, 'NOTABLE', '2003'),
(83, 3, 41, 'NOTABLE', '2009'),
(84, 3, 47, 'NOTABLE', '2012'),
(85, 5, 4, 'NOTABLE', '2012'),
(86, 5, 10, 'NOTABLE', '2012'),
(87, 7, 11, 'NOTABLE', '2010'),
(88, 7, 16, 'NOTABLE', '2010'),
(89, 7, 22, 'NOTABLE', '2011'),
(90, 7, 29, 'NOTABLE', '2011'),
(91, 9, 15, 'NOTABLE', '1990'),
(92, 9, 22, 'NOTABLE', '1995'),
(93, 9, 31, 'NOTABLE', '1997'),
(94, 9, 34, 'NOTABLE', '1999'),
(95, 9, 40, 'NOTABLE', '2001'),
(96, 9, 43, 'NOTABLE', '2005'),
(97, 9, 56, 'NOTABLE', '2010'),
(98, 10, 16, 'NOTABLE', '2006'),
(99, 10, 23, 'NOTABLE', '2006'),
(100, 10, 25, 'NOTABLE', '2008'),
(101, 11, 3, 'NOTABLE', '1975'),
(102, 11, 9, 'NOTABLE', '1977'),
(103, 11, 15, 'NOTABLE', '1980'),
(104, 11, 21, 'NOTABLE', '1985'),
(105, 11, 29, 'NOTABLE', '1989'),
(106, 11, 31, 'NOTABLE', '1994'),
(107, 12, 49, 'NOTABLE', '2000'),
(108, 12, 52, 'NOTABLE', '2002'),
(109, 12, 56, 'NOTABLE', '2010'),
(110, 12, 57, 'NOTABLE', '2012');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `CONTACT_NUMBER`, `EMAIL_ADDRESS`, `ADDRESS`, `BIRTHDAY`, `SECRET_QUESTION`, `SECRET_ANSWER`, `USERNAME`, `PASSWORD`, `STATUS`, `ACCOUNT_TYPE`, `USER_IMAGE`) VALUES
(15, 'andres', 'paraguyas', '09059217526', 'sdfs@hi.com', 'Nasipit, Talamban', '2015-01-02', 'Hello', 'Hi', 'superman', '84d961568a65073a3bcf0eb216b2a576', 'Active', 'Admin', 'http://localhost/PBA/assets/user_images/superman.jpg'),
(16, 'King', 'Flakers', '09123123123', 'flakersking@gmail.com', 'Kamo kamo', '1997-12-31', 'Who is your favorite PBA player?', 'IDK', 'king', 'b1a30a650048a2a6e23e77e59123d878', 'fsVjFv', 'Normal', 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg'),
(17, 'Irvin', 'Abellanosa', '09221231231', 'i@yahoo', 'hello hello', '1994-12-31', 'Who is your favorite PBA player?', 'IDK', 'irvin', '6b5a0bcc9624f402d93ac5bc05213db2', '0', 'Admin', 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg'),
(18, 'Lilton', 'Gungob', '09123123123', 'iii@yahoo.com', 'asdsa', '1994-12-31', 'Who is your favorite PBA player?', 'KB', 'lilton', '1e424d87c6969c2fba6d6a7e124678f4', 'PJ7m80', 'Normal', 'http://localhost/PBA/assets/default_images/defaultuser12345.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
