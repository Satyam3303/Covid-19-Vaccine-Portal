-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 17, 2022 at 06:06 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corona`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `ID_Code` varchar(15) NOT NULL,
  `Passcode` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`ID_Code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`First_name`, `Last_name`, `ID_Code`, `Passcode`) VALUES
('Aditya', 'Sahoo', '3011', '3435');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `First_name` varchar(15) NOT NULL,
  `Last_name` varchar(15) NOT NULL,
  `Preferred_Date` date NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Time_Slot` varchar(20) NOT NULL,
  `Phone_No` bigint(15) NOT NULL,
  `Indian_State` varchar(20) NOT NULL,
  `Covid_Affected` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Pin_Code` varchar(20) NOT NULL,
  PRIMARY KEY (`Phone_No`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First_name`, `Last_name`, `Preferred_Date`, `Date_of_Birth`, `Time_Slot`, `Phone_No`, `Indian_State`, `Covid_Affected`, `Email`, `Gender`, `Pin_Code`) VALUES
('Sribananda', 'panda', '2022-04-20', '2022-04-11', '9am-12pm', 7847090062, 'Odisha', 'yes', 'sribananda02@gmail.com', 'Male', '1234'),
('Shivam', 'Satyam', '2022-04-20', '2002-03-02', '1pm-3pm', 918092769351, 'Chhattisgarh', 'yes', 'shivamsatyam209@gmail.com', 'Female', '1234'),
('Adi', 'Sahoo', '2022-04-20', '2022-04-06', '9am-12pm', 1234568, 'Gujarat', 'yes', 'awd@example.com', 'Male', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
