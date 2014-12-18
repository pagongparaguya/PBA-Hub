-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2014 at 11:05 AM
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
  `COACH_TEAMDURATION` varchar(20) NOT NULL,
  `COACH_PORTRAIT_PHOTO` varchar(20) NOT NULL,
  `COACH_STAT` tinyint(1) NOT NULL,
  `COACH_YEARSTARTED` smallint(4) NOT NULL,
  `COACH_CAREERWINS` smallint(5) NOT NULL,
  `COACH_PLAYOFF_APPEAR` smallint(5) NOT NULL,
  `COACH_FINALS_APPEAR` smallint(5) NOT NULL,
  PRIMARY KEY (`COACH_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`COACH_ID`, `COACH_FULLNAME`, `COACH_AGE`, `COACH_BDATE`, `COACH_BIRTHPLACE`, `COACH_TEAMDURATION`, `COACH_PORTRAIT_PHOTO`, `COACH_STAT`, `COACH_YEARSTARTED`, `COACH_CAREERWINS`, `COACH_PLAYOFF_APPEAR`, `COACH_FINALS_APPEAR`) VALUES
(1, 'Jason Kidd', 39, 'September 9,1975', 'New Jersey', '2014-PRESENT', '1.jpg', 1, 2014, 50, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `coach_award_won`
--

CREATE TABLE IF NOT EXISTS `coach_award_won` (
  `COACH_ID` int(6) NOT NULL,
  `AWARD_NAME` varchar(50) NOT NULL,
  `YEAR_AWARDED` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_award_won`
--

INSERT INTO `coach_award_won` (`COACH_ID`, `AWARD_NAME`, `YEAR_AWARDED`) VALUES
(1, 'Coach Of The Year', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `coach_carousel_image`
--

CREATE TABLE IF NOT EXISTS `coach_carousel_image` (
  `COACH_ID` int(6) NOT NULL,
  `IMAGE1` varchar(150) NOT NULL,
  `IMAGE2` varchar(150) NOT NULL,
  `IMAGE3` varchar(150) NOT NULL,
  `IMAGE4` varchar(150) NOT NULL,
  `IMAGE5` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_carousel_image`
--

INSERT INTO `coach_carousel_image` (`COACH_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coach_championship_won`
--

CREATE TABLE IF NOT EXISTS `coach_championship_won` (
  `COACH_ID` int(6) NOT NULL,
  `LEAGUE_NAME` varchar(50) NOT NULL,
  `YEAR_WON` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach_championship_won`
--

INSERT INTO `coach_championship_won` (`COACH_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(0, 'NBA', 2014),
(1, 'NBA', 2014);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE IF NOT EXISTS `player` (
  `PLAYER_ID` int(6) NOT NULL AUTO_INCREMENT,
  `PLAYER_AGE` smallint(2) NOT NULL,
  `PLAYER_FULLNAME` varchar(50) NOT NULL,
  `PLAYER_BDATE` varchar(30) NOT NULL,
  `PLAYER_TEAMTIME` varchar(20) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`PLAYER_ID`, `PLAYER_AGE`, `PLAYER_FULLNAME`, `PLAYER_BDATE`, `PLAYER_TEAMTIME`, `PLAYER_PORTRAIT_PHOTO`, `PLAYER_STAT`, `PLAYER_YEARSTARTED`, `PLAYER_JERSEY_NO`, `PLAYER_POSITION`, `PLAYER_YEARS_PLAYED`, `PLAYER_HEIGHT`, `PLAYER_WEIGHT`, `PLAYER_PLAYOFF_APPEAR`, `PLAYER_FINALS_APPEAR`, `PLAYER_ALLSTAR_APPEAR`, `PLAYER_PPG`, `PLAYER_APG`, `PLAYER_RPG`, `PLAYER_BPG`, `PLAYER_SPG`, `PLAYER_TPG`, `PLAYER_FPG`, `PLAYER_FTP`, `PLAYER_FGP`, `PLAYER_TPP`) VALUES
(1, 36, 'Kobe Bryant', 'August 31, 1976', '1996-PRESENT', '1.jpg', 1, 1996, 24, 'SG', 18, '6''6', '96 kg', 11, 8, 16, 30, 5.5, 3.9, 0.8, 2.2, 3.4, 3.2, 11.5, 45.9, 39.9),
(2, 32, 'Lebron James', 'December 9, 1985', '2010-PRESENT', '2.jpg', 1, 2003, 6, 'SF', 11, '6''8', '110 kg', 9, 6, 10, 23.4, 5.5, 6.7, 2.2, 2.1, 3.5, 3.7, 77.8, 45.8, 39.9);

-- --------------------------------------------------------

--
-- Table structure for table `player_award_won`
--

CREATE TABLE IF NOT EXISTS `player_award_won` (
  `PLAYER_ID` int(6) NOT NULL,
  `AWARD_NAME` varchar(50) NOT NULL,
  `AWARD_YEAR` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_award_won`
--

INSERT INTO `player_award_won` (`PLAYER_ID`, `AWARD_NAME`, `AWARD_YEAR`) VALUES
(1, 'MVP', 2008),
(1, 'MVP', 2010),
(2, 'MVP', 2012),
(2, 'MVP', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `player_carousel_image`
--

CREATE TABLE IF NOT EXISTS `player_carousel_image` (
  `PLAYER_ID` int(6) NOT NULL,
  `IMAGE1` varchar(150) NOT NULL,
  `IMAGE2` varchar(150) NOT NULL,
  `IMAGE3` varchar(150) NOT NULL,
  `IMAGE4` varchar(150) NOT NULL,
  `IMAGE5` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_carousel_image`
--

INSERT INTO `player_carousel_image` (`PLAYER_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(2, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `player_championship_won`
--

CREATE TABLE IF NOT EXISTS `player_championship_won` (
  `PLAYER_ID` int(6) NOT NULL,
  `LEAGUE_NAME` varchar(50) NOT NULL,
  `YEAR_WON` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_championship_won`
--

INSERT INTO `player_championship_won` (`PLAYER_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(1, 'NBA', 2011),
(1, 'NBA', 2012);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `TEAM_ID` int(6) NOT NULL AUTO_INCREMENT,
  `TEAM_NAME` varchar(20) NOT NULL,
  `TEAM_LOGO` varchar(20) NOT NULL,
  `TEAM_STAT` tinyint(1) NOT NULL,
  `TEAM_YEARSTARTED` smallint(4) NOT NULL,
  `TEAM_CAREERWINS` smallint(5) NOT NULL,
  `TEAM_CAREERLOSSES` smallint(5) NOT NULL,
  `TEAM_HISTORY` varchar(250) NOT NULL,
  `TEAM_PLAYOFF_APPEAR` smallint(5) NOT NULL,
  `TEAM_FINALS_APPEAR` smallint(5) NOT NULL,
  PRIMARY KEY (`TEAM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TEAM_ID`, `TEAM_NAME`, `TEAM_LOGO`, `TEAM_STAT`, `TEAM_YEARSTARTED`, `TEAM_CAREERWINS`, `TEAM_CAREERLOSSES`, `TEAM_HISTORY`, `TEAM_PLAYOFF_APPEAR`, `TEAM_FINALS_APPEAR`) VALUES
(1, 'Alaska Aces', '1.png', 1, 1986, 599, 230, 'The Alaska Aces is a team from PBA. Which is Kobe''s team and you know he is better than Kevin Durant and the whole OKC. Alaska Aces is the team with 599 wins and 230 losses.', 20, 10),
(2, 'Barako Bulls', '2.png', 1, 2002, 199, 98, 'Barako Bulls is a energy drink that might bring you to the best nightmare you ever had.', 13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `team_carousel_image`
--

CREATE TABLE IF NOT EXISTS `team_carousel_image` (
  `TEAM_ID` int(6) NOT NULL,
  `IMAGE1` varchar(150) NOT NULL,
  `IMAGE2` varchar(150) NOT NULL,
  `IMAGE3` varchar(150) NOT NULL,
  `IMAGE4` varchar(150) NOT NULL,
  `IMAGE5` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_carousel_image`
--

INSERT INTO `team_carousel_image` (`TEAM_ID`, `IMAGE1`, `IMAGE2`, `IMAGE3`, `IMAGE4`, `IMAGE5`) VALUES
(1, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg'),
(2, 'Alaska.jpg', 'Rain or Shine.jpg', 'San Mig.jpg', 'San Miguel.jpg', 'Talk N Text.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team_championship_won`
--

CREATE TABLE IF NOT EXISTS `team_championship_won` (
  `TEAM_ID` int(11) NOT NULL,
  `LEAGUE_NAME` varchar(50) NOT NULL,
  `YEAR_WON` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_championship_won`
--

INSERT INTO `team_championship_won` (`TEAM_ID`, `LEAGUE_NAME`, `YEAR_WON`) VALUES
(1, 'NBA', 2009),
(1, 'NBA', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `team_coach_bridge`
--

CREATE TABLE IF NOT EXISTS `team_coach_bridge` (
  `TEAM_ID` int(6) NOT NULL,
  `COACH_ID` int(6) NOT NULL,
  `TYPE` varchar(150) NOT NULL,
  `YEAR` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_coach_bridge`
--

INSERT INTO `team_coach_bridge` (`TEAM_ID`, `COACH_ID`, `TYPE`, `YEAR`) VALUES
(1, 1, 'PRESENT', 2010),
(2, 1, 'PAST', 1980);

-- --------------------------------------------------------

--
-- Table structure for table `team_player_bridge`
--

CREATE TABLE IF NOT EXISTS `team_player_bridge` (
  `TEAM_ID` int(6) NOT NULL,
  `PLAYER_ID` int(6) NOT NULL,
  `TYPE` varchar(150) NOT NULL,
  `YEAR` smallint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_player_bridge`
--

INSERT INTO `team_player_bridge` (`TEAM_ID`, `PLAYER_ID`, `TYPE`, `YEAR`) VALUES
(1, 1, 'PRESENT', 1996),
(2, 2, 'PAST', 2009),
(1, 2, 'PRESENT', 2010),
(2, 1, 'PAST', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `USER_IMAGE` varchar(100) NOT NULL DEFAULT 'http://localhost/PBA/assets/user_images/default123.jpg',
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `USERNAME` (`USERNAME`),
  UNIQUE KEY `EMAIL_ADDRESS` (`EMAIL_ADDRESS`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `CONTACT_NUMBER`, `EMAIL_ADDRESS`, `ADDRESS`, `BIRTHDAY`, `SECRET_QUESTION`, `SECRET_ANSWER`, `USERNAME`, `PASSWORD`, `STATUS`, `ACCOUNT_TYPE`, `USER_IMAGE`) VALUES
(1, '3', '3', '3', '', '3', '2014-11-13', 'Who is your favorite PBA team?', 'IDK', '1', '1', 'Active', 'Normal', 'http://localhost/PBA/assets/user_images/default123.jpg'),
(2, 'Irvin', 'Abellanosa', '123', 'asda@yahoo.com', '1', '2014-12-30', 'Who is your favorite PBA player?', 'a', 'hi', '49f68a5c8493ec2c0bf489821c21fc3b', 'Active', 'Normal', 'http://localhost/PBA/assets/user_images/default123.jpg'),
(4, 'Kobe', 'Bryant', '09228456886', 'now_imo@yahoo.com', 'ab@yahoo.com', '2010-12-31', 'Who is your favorite PBA player?', 'KB', '123', '202cb962ac59075b964b07152d234b70', 'Active', 'Normal', 'http://localhost/PBA/assets/user_images/123.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
