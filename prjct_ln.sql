-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 06:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prjct_ln`
--

-- --------------------------------------------------------

--
-- Table structure for table `prjct_ln_data`
--

CREATE TABLE `prjct_ln_data` (
  `ID` int(11) NOT NULL,
  `Username` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Branch` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prjct_ln_data`
--

INSERT INTO `prjct_ln_data` (`ID`, `Username`, `Name`, `Email`, `Password`, `Branch`) VALUES
(1, 1111111, 'Aishwarya Singh', 'theaishwaryasingh@gmail.com', '1111111', 'EE'),
(2, 2222222, 'Aishwarya Singh', 'theaishwaryasingh@gmail.comhjh', '2222222', 'EE'),
(3, 3333333, 'c', 'theaishwaryasingh@gmail.comhjg', '3333333', 'EE'),
(4, 4444444, 'd', 'theaishwaryasingh@gmail.comhjy', '4444444', 'EE'),
(5, 4684844, 'h', 'theaishwaryasingh@gmail.comghv', '5555555', 'EE'),
(6, 8888888, 'Aishwarya Singh', 'theaishwaryasingh@gmail.comjb', '88888888', 'EE'),
(12, 0, '', '', '', 'EE'),
(13, 0, '', '', '', 'EE'),
(14, 0, '', '', '', 'EE'),
(15, 0, '', '', '', 'EE');

-- --------------------------------------------------------

--
-- Table structure for table `user_`
--

CREATE TABLE `user_` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_45451`
--

CREATE TABLE `user_45451` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_1111111`
--

CREATE TABLE `user_1111111` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_1111111`
--

INSERT INTO `user_1111111` (`ID`, `User`, `Message`, `Personality`, `Compatibility`, `Cleanliness`, `Education`, `Studies`, `Language`, `Cognizance`, `Humorous`, `Conclusion`) VALUES
(1, 2222222, 'Wanna send in some suggestions? Worry not for your identity, it shall be anonymous. You could include your Name or CRN to let them know who you are.\r\n	', 20, 100, 20, 100, 20, 20, 100, 20, 20),
(2, 3333333, 'Wanna send in some suggestions? Worry not for your identity, it shall be anonymous. You could include your Name or CRN to let them know who you are.\r\n	', 100, 100, 20, 1, 1, 20, 20, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user_2222222`
--

CREATE TABLE `user_2222222` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_2222222`
--

INSERT INTO `user_2222222` (`ID`, `User`, `Message`, `Personality`, `Compatibility`, `Cleanliness`, `Education`, `Studies`, `Language`, `Cognizance`, `Humorous`, `Conclusion`) VALUES
(1, 1111111, 'Wanna send in some suggestions? Worry not for your identity, it shall be anonymous. You could include your Name or CRN to let them know who you are.\r\n	', 100, 100, 100, 100, 20, 20, 20, 20, 20),
(2, 3333333, 'Wanna send in some suggestions? Worry not for your identity, it shall be anonymous. You could include your Name or CRN to let them know who you are.\r\n	', 20, 20, 20, 20, 58, 70, 20, 20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_3333333`
--

CREATE TABLE `user_3333333` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_3333333`
--

INSERT INTO `user_3333333` (`ID`, `User`, `Message`, `Personality`, `Compatibility`, `Cleanliness`, `Education`, `Studies`, `Language`, `Cognizance`, `Humorous`, `Conclusion`) VALUES
(1, 2222222, 'Wanna send in some suggestions? Worry not for your identity, it shall be anonymous. You could include your Name or CRN to let them know who you are.\r\n	', 100, 35, 100, 20, 100, 100, 20, 100, 20),
(2, 1111111, 'Wanna send in some suggestions? Worry not for your identity, it shall be anonymous. You could include your Name or CRN to let them know who you are.\r\n	', 20, 100, 20, 1, 100, 36, 1, 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `user_4444444`
--

CREATE TABLE `user_4444444` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_4444444`
--

INSERT INTO `user_4444444` (`ID`, `User`, `Message`, `Personality`, `Compatibility`, `Cleanliness`, `Education`, `Studies`, `Language`, `Cognizance`, `Humorous`, `Conclusion`) VALUES
(1, 2222222, 'Wanna send in some suggestions? Worry not for your identity, it shall be anonymous. You could include your Name or CRN to let them know who you are.\r\n	', 100, 20, 100, 20, 100, 100, 20, 20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user_4684844`
--

CREATE TABLE `user_4684844` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_8888888`
--

CREATE TABLE `user_8888888` (
  `ID` int(11) NOT NULL,
  `User` int(11) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Personality` int(11) DEFAULT NULL,
  `Compatibility` int(11) DEFAULT NULL,
  `Cleanliness` int(11) DEFAULT NULL,
  `Education` int(11) DEFAULT NULL,
  `Studies` int(11) DEFAULT NULL,
  `Language` int(11) DEFAULT NULL,
  `Cognizance` int(11) DEFAULT NULL,
  `Humorous` int(11) DEFAULT NULL,
  `Conclusion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prjct_ln_data`
--
ALTER TABLE `prjct_ln_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_`
--
ALTER TABLE `user_`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_45451`
--
ALTER TABLE `user_45451`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_1111111`
--
ALTER TABLE `user_1111111`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_2222222`
--
ALTER TABLE `user_2222222`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_3333333`
--
ALTER TABLE `user_3333333`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_4444444`
--
ALTER TABLE `user_4444444`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_4684844`
--
ALTER TABLE `user_4684844`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_8888888`
--
ALTER TABLE `user_8888888`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prjct_ln_data`
--
ALTER TABLE `prjct_ln_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_`
--
ALTER TABLE `user_`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_45451`
--
ALTER TABLE `user_45451`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_1111111`
--
ALTER TABLE `user_1111111`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_2222222`
--
ALTER TABLE `user_2222222`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_3333333`
--
ALTER TABLE `user_3333333`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_4444444`
--
ALTER TABLE `user_4444444`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_4684844`
--
ALTER TABLE `user_4684844`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_8888888`
--
ALTER TABLE `user_8888888`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
