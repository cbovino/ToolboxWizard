-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 07:53 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `Progress`
--

CREATE TABLE IF NOT EXISTS `Progress` (
  `idProgress` int(11) NOT NULL,
  `videoID` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Username` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subjectID` int(5) DEFAULT NULL,
  `User_Username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Youtube_videoID` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Subjects_subjectid` int(11) NOT NULL,
  `Status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Incomplete'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Subjects`
--

CREATE TABLE IF NOT EXISTS `Subjects` (
  `subjectid` int(11) NOT NULL,
  `subject_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Subjects`
--

INSERT INTO `Subjects` (`subjectid`, `subject_name`) VALUES
(1, 'Business'),
(2, 'Physics & Sciences'),
(3, 'Software & Web'),
(4, 'Adobe'),
(5, 'Music Production'),
(6, 'Video & Photography'),
(7, 'Art & Design'),
(8, 'Engineering'),
(9, 'History');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Youtube`
--

CREATE TABLE IF NOT EXISTS `Youtube` (
  `videoID` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjectid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `Youtube`
--

INSERT INTO `Youtube` (`videoID`, `subjectid`) VALUES
('oneone', 1),
('onethree', 1),
('onetwo', 1),
('twoone', 2),
('twothree', 2),
('twotwo', 2),
('threeone', 3),
('threethree', 3),
('threetwo', 3),
('fourone', 4),
('fourthree', 4),
('fourtwo', 4),
('fiveone', 5),
('fivethree', 5),
('fivetwo', 5),
('sixone', 6),
('sixthree', 6),
('sixtwo', 6),
('sevenone', 7),
('seventhree', 7),
('seventwo', 7),
('eightone', 8),
('eightthree', 8),
('eighttwo', 8),
('nineone', 9),
('ninethree', 9),
('ninetwo', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Progress`
--
ALTER TABLE `Progress`
  ADD PRIMARY KEY (`idProgress`,`User_Username`,`Youtube_videoID`,`Subjects_subjectid`),
  ADD KEY `username_idx` (`Username`),
  ADD KEY `videoID_idx` (`videoID`),
  ADD KEY `subjectID_idx` (`subjectID`),
  ADD KEY `fk_Progress_User1_idx` (`User_Username`),
  ADD KEY `fk_Progress_Youtube1_idx` (`Youtube_videoID`),
  ADD KEY `fk_Progress_Subjects1_idx` (`Subjects_subjectid`);

--
-- Indexes for table `Subjects`
--
ALTER TABLE `Subjects`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `Youtube`
--
ALTER TABLE `Youtube`
  ADD PRIMARY KEY (`videoID`),
  ADD KEY `subjectID_idx` (`subjectid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Progress`
--
ALTER TABLE `Progress`
  MODIFY `idProgress` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Progress`
--
ALTER TABLE `Progress`
  ADD CONSTRAINT `fk_Progress_Subjects1` FOREIGN KEY (`Subjects_subjectid`) REFERENCES `Subjects` (`subjectid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Progress_User1` FOREIGN KEY (`User_Username`) REFERENCES `User` (`Username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Progress_Youtube1` FOREIGN KEY (`Youtube_videoID`) REFERENCES `Youtube` (`videoID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subjectID` FOREIGN KEY (`subjectID`) REFERENCES `subjects` (`subjectid`),
  ADD CONSTRAINT `username` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`),
  ADD CONSTRAINT `videoID` FOREIGN KEY (`videoID`) REFERENCES `youtube` (`videoID`);

--
-- Constraints for table `Youtube`
--
ALTER TABLE `Youtube`
  ADD CONSTRAINT `subid` FOREIGN KEY (`subjectid`) REFERENCES `subjects` (`subjectid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
