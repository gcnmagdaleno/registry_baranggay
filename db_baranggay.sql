-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 03:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_baranggay`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_householdheadprofile`
--

CREATE TABLE `tbl_householdheadprofile` (
  `HouseHoldNumber` int(11) NOT NULL,
  `HouseHoldHeadIDNumber` int(11) NOT NULL,
  `HouseHoldHeadPurok` varchar(20) NOT NULL,
  `HouseHoldHeadOccupation` varchar(40) NOT NULL,
  `HouseHoldHeadCivilStatus` varchar(8) NOT NULL,
  `HouseHoldHeadBirthdate` date NOT NULL,
  `HouseHoldHeadAge` int(11) NOT NULL,
  `HouseHoldHeadMonthsOld` int(11) NOT NULL,
  `HouseHoldHeadFullname` varchar(50) NOT NULL,
  `HouseHoldHeadMonthlyIncome` varchar(16) NOT NULL,
  `HouseHoldHeadYearsInTheBaranggay` int(11) NOT NULL,
  `HouseHoldHeadStatusOfResidency` varchar(12) NOT NULL,
  `HouseHoldHeadHighestEducationalAttainment` varchar(42) NOT NULL,
  `HouseHoldHeadCitizenship` varchar(20) NOT NULL,
  `HouseHoldHeadsSpouseIDNumber` int(11) NOT NULL,
  `HouseHoldHeadsSpouseNumberOfChildren` int(11) NOT NULL,
  `HouseHoldHeadsSpouseNumberOfBorders` int(11) NOT NULL,
  `HouseHoldHeadsSpouseFullname` varchar(50) NOT NULL,
  `HouseHoldHeadsSpouseOccupation` varchar(40) NOT NULL,
  `HouseHoldHeadsSpouseAge` int(11) NOT NULL,
  `HouseHoldHeadsSpouseEducation` varchar(42) NOT NULL,
  `HouseHoldHeadProfilePicture` varchar(1500) NOT NULL,
  `HouseHoldHeadsSpouseProfilePicture` varchar(1500) NOT NULL,
  `Baranggay` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_householdheadprofile`
--

INSERT INTO `tbl_householdheadprofile` (`HouseHoldNumber`, `HouseHoldHeadIDNumber`, `HouseHoldHeadPurok`, `HouseHoldHeadOccupation`, `HouseHoldHeadCivilStatus`, `HouseHoldHeadBirthdate`, `HouseHoldHeadAge`, `HouseHoldHeadMonthsOld`, `HouseHoldHeadFullname`, `HouseHoldHeadMonthlyIncome`, `HouseHoldHeadYearsInTheBaranggay`, `HouseHoldHeadStatusOfResidency`, `HouseHoldHeadHighestEducationalAttainment`, `HouseHoldHeadCitizenship`, `HouseHoldHeadsSpouseIDNumber`, `HouseHoldHeadsSpouseNumberOfChildren`, `HouseHoldHeadsSpouseNumberOfBorders`, `HouseHoldHeadsSpouseFullname`, `HouseHoldHeadsSpouseOccupation`, `HouseHoldHeadsSpouseAge`, `HouseHoldHeadsSpouseEducation`, `HouseHoldHeadProfilePicture`, `HouseHoldHeadsSpouseProfilePicture`, `Baranggay`) VALUES
(1, 9, '9', 'Accounting/Finance', 'Single', '1970-01-01', 49, 588, '9', 'Below 5,000', 9, 'House Owner', 'House Owner', 'Filipino Citizen', 9, 9, 9, '9', 'Accounting/Finance', 9, 'House Owner', 'images/uploads/1.png', '', 'East Rembo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Baranggay` varchar(30) NOT NULL,
  `DateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`Username`, `Password`, `Baranggay`, `DateAdded`) VALUES
('Jenny', '111', 'Pembo', '2019-10-05'),
('Alexa', '222', 'East Rembo', '2019-10-06'),
('Sydd', '333', 'West Rembo', '2019-10-07'),
('Purita', '444', 'Rizal', '2019-10-08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
