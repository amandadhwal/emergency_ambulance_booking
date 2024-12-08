-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2024 at 11:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eahpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8989898980, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-01-10 08:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblambulance`
--

CREATE TABLE `tblambulance` (
  `ID` int(11) NOT NULL,
  `AmbulanceType` varchar(250) DEFAULT NULL,
  `AmbRegNum` varchar(250) DEFAULT NULL,
  `DriverName` varchar(250) DEFAULT NULL,
  `DriverContactNumber` bigint(20) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulance`
--

INSERT INTO `tblambulance` (`ID`, `AmbulanceType`, `AmbRegNum`, `DriverName`, `DriverContactNumber`, `CreationDate`, `Status`, `UpdationDate`) VALUES
(1, '1', 'DL14RT5678', 'Pratap', 4567891237, '2024-10-13 06:00:22', 'Pickup', '2024-10-21 08:51:24'),
(2, '2', 'DL15RT5678', 'Alok', 7894563219, '2024-10-13 06:02:06', 'On the way', '2024-10-21 08:51:34'),
(3, '1', 'DL14RT5678', 'Ramesh', 2567891231, '2024-10-13 06:00:22', 'Pickup', '2024-10-21 08:51:38'),
(4, '2', 'UP15RT5612', 'Advik', 6894563219, '2024-10-15 06:02:06', NULL, '2024-10-21 08:51:46'),
(10, '1', 'UP31RT5678', 'Bhushan', 7345936402, '2024-10-19 15:25:02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblambulancehiring`
--

CREATE TABLE `tblambulancehiring` (
  `ID` int(11) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `PatientName` varchar(250) DEFAULT NULL,
  `RelativeName` varchar(250) DEFAULT NULL,
  `RelativeConNum` bigint(11) DEFAULT NULL,
  `HiringDate` varchar(250) DEFAULT NULL,
  `HiringTime` varchar(250) DEFAULT NULL,
  `AmbulanceType` int(5) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` mediumtext DEFAULT NULL,
  `State` mediumtext DEFAULT NULL,
  `Message` longtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `AmbulanceRegNo` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblambulancehiring`
--

INSERT INTO `tblambulancehiring` (`ID`, `BookingNumber`, `PatientName`, `RelativeName`, `RelativeConNum`, `HiringDate`, `HiringTime`, `AmbulanceType`, `Address`, `City`, `State`, `Message`, `BookingDate`, `Remark`, `Status`, `AmbulanceRegNo`, `UpdationDate`) VALUES
(3, 901408998, 'Jenin George', 'Aman', 9876543210, '2024-10-16', '15:33', 1, 'P-816 Kanvya Nagar Geetanjali Apt', 'Lucknow', 'UP', 'Arrange BLS ambulance with gynoclogist', '2024-10-16 05:28:30', 'Patient Pick form given address', 'Pickup', 'DL14RT5678', '2024-10-21 08:19:33'),
(4, 603153853, 'Amit', 'Ravi Kumar', 1425362514, '2024-10-16', '23:04', 1, 'A 123 XYZ Society ', 'Ghaziabad', 'UP', 'NA', '2024-10-16 17:33:26', 'Patient reached at hospital', 'Reached', 'DL15RT5678', '2024-10-21 08:19:42'),
(5, 369344538, 'Lokesh', 'Abha Chaudhary', 1234569874, '2024-10-17', '10:15', 3, 'Hn 18/1 Xyz Apartment Mayur Vihar', 'New Delhi', 'Delhi', 'Please be on time', '2024-10-17 01:44:03', 'Reached hospital\r\n', 'Reached', 'DL15RT5678', '2024-10-21 08:19:52'),
(6, 185258573, 'Priya', 'Pragya', 4561237896, '2024-10-19', '14:08', 3, 'H-908,  HPT Apartment', 'Ghaziabad', 'UP', 'Need Nurse with ambulance', '2024-10-19 14:36:45', 'on the way', 'On the way', 'DL15RT5678', '2024-10-21 08:20:01'),
(7, 138998818, 'Anshu', 'Aman Dadhwal', 3276481963, '2024-10-13', '10:30', 2, 'LPU', 'Jalandhar', 'Punjab', 'None', '2024-10-13 11:58:18', 'ambulance assigned', 'Assigned', 'UP31RT5678', '2024-10-21 08:13:24'),
(8, 649702918, 'Pragya', 'Rohan', 2341526784, '2024-10-19', '11:00', 2, 'LPU', 'Jalandhar', 'Punjab', 'Send one nurse with ambulance', '2024-10-19 17:29:16', 'Patient reached to the hospital', 'Reached', 'DL15RT5678', '2024-10-19 05:34:34'),
(9, 191666850, 'Aman Dadhwal', 'Ishan', 7364284937, '2024-10-17', '01:29', 1, '144, New Charni Road, Below Dharamsi Hall', 'Mumbai', 'Maharashtra', 'Please be on time', '2024-10-21 08:02:58', 'Patient reached Hospital', 'Reached', 'DL15RT5678', '2024-10-21 08:14:08'),
(10, 738260413, 'Abhinav', 'Ishan', 2352647549, '2024-10-21', '14:24', 3, 'Modern Valley, Karar', 'Chandigarh', 'Chandigarh', '', '2024-10-21 08:55:01', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About us', '<div style=\"text-align: center;\"><b>Emergency Ambulance Hiring Portal</b></div><div style=\"text-align: left;\">We prioritize the well-being of our patients above all else. Thats why we offer top-notch ambulance services to ensure swift and secure medical transportation whenever the need arises. Our dedicated team of skilled paramedics and drivers is equipped with state-of-the-art ambulances, ready to respond to emergencies 24/7.<br></div><div style=\"text-align: left;\"><br></div>', NULL, NULL, '2024-03-05 05:00:17'),
(2, 'contactus', 'Contact Us', '#890 KFG Apartment, Gauri Kunj, Delhi-India.', 'test@gmail.com', 7894561236, '2024-03-05 05:06:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbltrackinghistory`
--

CREATE TABLE `tbltrackinghistory` (
  `ID` int(10) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `AmbulanceRegNum` varchar(250) DEFAULT NULL,
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbltrackinghistory`
--

INSERT INTO `tbltrackinghistory` (`ID`, `BookingNumber`, `AmbulanceRegNum`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 292564626, 'DL15RT5678', 'Assigned', 'Assigned', '2024-03-04 07:05:11'),
(2, 292564626, 'DL15RT5678', 'On the way', 'On the way', '2024-03-04 07:41:03'),
(3, 292564626, 'DL15RT5678', 'Ambulance Pick the patient', 'Pickup', '2024-03-04 08:03:00'),
(4, 292564626, 'DL15RT5678', 'Patient reached Hospital', 'Reached', '2024-03-04 12:34:02'),
(5, 193862343, 'DL15RT5678', 'Ambulance Has been assigned', 'Assigned', '2024-03-05 05:25:18'),
(6, 193862343, 'DL15RT5678', 'Ambulance is on the way reached soon', 'On the way', '2024-03-05 05:33:02'),
(7, 193862343, 'DL15RT5678', 'Patient has been picked', 'Pickup', '2024-03-05 05:33:20'),
(8, 193862343, 'DL15RT5678', 'Patient reached to the hospital', 'Reached', '2024-03-05 05:34:34'),
(9, 901408998, 'DL14RT5678', 'Assigned Ambulance', 'Assigned', '2024-03-05 06:51:45'),
(10, 901408998, 'DL14RT5678', 'On The way', 'On the way', '2024-03-05 06:56:50'),
(11, 603153853, 'DL15RT5678', 'Ambulance Assigned', 'Assigned', '2024-03-14 01:20:22'),
(12, 603153853, 'DL15RT5678', 'Ambulance is on the way to pick the pateint', 'On the way', '2024-03-14 01:20:49'),
(13, 603153853, 'DL15RT5678', 'Patient is picked up and w heading to the hospital', 'Pickup', '2024-03-14 01:28:53'),
(15, 603153853, 'DL15RT5678', 'Patient reached at hospital', 'Reached', '2024-03-14 01:38:15'),
(16, 369344538, 'DL15RT5678', 'Ambulance Assigned ', 'Assigned', '2024-03-14 01:45:04'),
(17, 369344538, 'DL15RT5678', 'Ambulance is on the way to pick the patient', 'On the way', '2024-03-14 01:45:41'),
(18, 369344538, 'DL15RT5678', 'Patient is picked up heading to destination', 'Pickup', '2024-03-14 01:46:07'),
(19, 369344538, 'DL15RT5678', 'Reached hospital\r\n', 'Reached', '2024-03-14 01:46:26'),
(20, 185258573, 'DL15RT5678', 'ambulance assigned', 'Assigned', '2024-03-14 14:39:45'),
(21, 901408998, 'DL14RT5678', 'Patient Pick form given address', 'Pickup', '2024-03-14 14:51:24'),
(22, 138998818, 'UP31RT5678', 'ambulance assigned', 'Assigned', '2024-10-13 12:00:05'),
(23, 185258573, 'DL15RT5678', 'on the way', 'On the way', '2024-10-13 12:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblambulance`
--
ALTER TABLE `tblambulance`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AmbRegNum` (`AmbRegNum`);

--
-- Indexes for table `tblambulancehiring`
--
ALTER TABLE `tblambulancehiring`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ablunaceid` (`AmbulanceRegNo`),
  ADD KEY `BookingNumber` (`BookingNumber`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltrackinghistory`
--
ALTER TABLE `tbltrackinghistory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `abid` (`AmbulanceRegNum`),
  ADD KEY `bid` (`BookingNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblambulance`
--
ALTER TABLE `tblambulance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblambulancehiring`
--
ALTER TABLE `tblambulancehiring`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltrackinghistory`
--
ALTER TABLE `tbltrackinghistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
