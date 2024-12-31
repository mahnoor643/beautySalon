-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2024 at 10:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautysalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(11) NOT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phoneNo` bigint(20) DEFAULT NULL,
  `serviceID` int(11) DEFAULT NULL,
  `employeeID` int(11) DEFAULT NULL,
  `packageID` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `fullName`, `email`, `phoneNo`, `serviceID`, `employeeID`, `packageID`, `userID`, `Date`) VALUES
(1, 'Mahnoor', 'mahnoort643@gmail.com', 3127654556, 4, 3, NULL, 1, '29 Nov, 2024'),
(2, 'Humna', 'humna3da@gmail.com', 3128896770, 2, 2, NULL, 4, '30 Nov, 2024'),
(3, 'ushna', 'ushna123@gmail.com', 3001234567, 1, 1, NULL, 5, '2024-11-29');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactID` int(11) NOT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `msg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactID`, `fullName`, `email`, `msg`) VALUES
(1, 'Emma Watson', 'emma.watson@example.com', 'Can I book a facial appointment for next Friday?'),
(2, 'Michael Johnson', 'michael.j@example.com', 'Do you offer discounts for group bookings?'),
(3, 'Sophia Lee', 'sophia.lee@example.com', 'What are your working hours on weekends?'),
(4, 'James Anderson', 'james.anderson@example.com', 'I need a consultation for hair care. Please advise.');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `designation` text DEFAULT NULL,
  `serviceID` int(11) DEFAULT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `instaLink` varchar(250) DEFAULT NULL,
  `fbLink` varchar(250) DEFAULT NULL,
  `employeePic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `designation`, `serviceID`, `fullName`, `instaLink`, `fbLink`, `employeePic`) VALUES
(1, 'Hair Stylist', 3, 'Emma Johnson', 'https://www.instagram.com/itzz_mahnoorrr/', 'https://www.facebook.com/manoooooo.643', 'assets/Employees/Team-img1.png'),
(2, 'Nail Technician', 4, 'Sophia Williams', 'https://www.instagram.com/itzz_mahnoorrr/', 'https://www.facebook.com/manoooooo.643', 'assets/Employees/Team-img2.png'),
(3, 'Makeup Artist', 1, 'Olivia Brown', 'https://www.instagram.com/itzz_mahnoorrr/', 'https://www.facebook.com/manoooooo.643', 'assets/Employees/Team-img3.png'),
(4, 'Facial Specialist', 1, 'Mia Davis', 'https://www.instagram.com/itzz_mahnoorrr/', 'https://www.facebook.com/manoooooo.643', 'assets/Employees/Team-img4.png');

-- --------------------------------------------------------

--
-- Table structure for table `packagedeals`
--

CREATE TABLE `packagedeals` (
  `packageDealID` int(11) NOT NULL,
  `serviceIDFK` int(11) DEFAULT NULL,
  `packageID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packagedeals`
--

INSERT INTO `packagedeals` (`packageDealID`, `serviceIDFK`, `packageID`) VALUES
(1, 1, 1),
(2, 4, 1),
(3, 5, 1),
(4, 6, 1),
(5, 18, 1),
(6, 9, 1),
(7, 13, 1),
(8, 2, 2),
(9, 4, 2),
(10, 7, 2),
(11, 8, 2),
(12, 17, 2),
(13, 10, 2),
(14, 15, 2),
(15, 3, 3),
(16, 4, 3),
(17, 19, 3),
(18, 16, 3),
(19, 11, 3),
(20, 14, 3),
(21, 12, 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `packageID` int(11) NOT NULL,
  `packageName` varchar(250) DEFAULT NULL,
  `packagePrice` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`packageID`, `packageName`, `packagePrice`) VALUES
(1, 'DEAL 1', 200),
(2, 'DEAL 2', 250),
(3, 'DEAL 3', 300);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL,
  `review` text DEFAULT NULL,
  `reviewBy` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `serviceexpertise`
--

CREATE TABLE `serviceexpertise` (
  `serviceExpertiseID` int(11) NOT NULL,
  `serviceID` int(11) DEFAULT NULL,
  `serviceExperty` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceexpertise`
--

INSERT INTO `serviceexpertise` (`serviceExpertiseID`, `serviceID`, `serviceExperty`) VALUES
(1, 1, 'Dermacos Facial'),
(2, 1, 'Whitening Facial'),
(3, 1, 'Gold Facial'),
(4, 2, 'Face Bleach'),
(5, 2, 'Neck Bleach'),
(6, 2, 'Hand Bleach'),
(7, 2, 'Arm Bleach'),
(8, 2, 'Leg Bleach'),
(9, 3, 'Professional Hair Cut'),
(10, 3, 'Deep Conditioning Hair Treatment'),
(11, 3, 'Hair Protein Treatment'),
(12, 3, 'Hair Styling'),
(13, 4, 'Quick Manicure'),
(14, 4, 'Classic Manicure'),
(15, 4, 'Quick Pedicure'),
(16, 5, 'Half Arm Wax'),
(17, 5, 'Black Head Removal (Face)'),
(18, 5, 'Black Head Removal (Back)'),
(19, 6, 'Neck & Shoulder Massage');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceID` int(11) NOT NULL,
  `serviceTitle` varchar(250) DEFAULT NULL,
  `serviceDescription` text DEFAULT NULL,
  `serviceImg` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceID`, `serviceTitle`, `serviceDescription`, `serviceImg`) VALUES
(1, 'FACIALS', 'Facials are designed to cleanse, nourish, and rejuvenate the skin, enhancing its natural glow and texture. They are tailored to target specific skin concerns like dullness, aging, or pigmentation.', 'assets/media/service/facials.png'),
(2, 'BLEACH', '  Bleaching treatments help to lighten and brighten the skin by evening out the tone and minimizing the appearance of dark spots or pigmentation. They give a fresh, radiant look to different areas of the body.', 'assets/media/service/bleach.png'),
(3, 'HAIR SERVICES', 'Hair services focus on enhancing the health and style of your hair, ranging from cutting and treatments to styling. These services ensure a refreshed and polished look while promoting hair care.', 'assets/media/service/hair.png'),
(4, 'MANICURE', 'Manicure and pedicure services focus on the care and grooming of hands and feet, leaving them neat, smooth, and nourished. They also include relaxing treatments to enhance overall appearance.', 'assets/media/service/manicure.png'),
(5, 'WAXING & REMOVAL', 'Waxing and removal services are aimed at effectively removing unwanted hair and clearing skin impurities. These treatments leave the skin smooth, soft, and refreshed.', 'assets/media/service/waxing.png'),
(6, 'MASSAGE', 'Massage services provide relaxation and relief from stress while promoting blood circulation and muscle relaxation. They help rejuvenate the body and mind.', 'assets/media/service/massage.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fullName` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phoneNo` bigint(20) DEFAULT NULL,
  `role` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fullName`, `email`, `phoneNo`, `role`) VALUES
(1, 'Mahnoor', 'mahnoort643@gmail.com', 3127654556, 'Client'),
(3, 'Mahnoor', 'asma@gmail.com', 3128859970, 'Client'),
(4, 'Humna', 'humna3da@gmail.com', 3128896770, 'Client'),
(5, 'ushna', 'ushna123@gmail.com', 3001234567, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`),
  ADD KEY `serviceID` (`serviceID`),
  ADD KEY `employeeID` (`employeeID`),
  ADD KEY `packageID` (`packageID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `packagedeals`
--
ALTER TABLE `packagedeals`
  ADD PRIMARY KEY (`packageDealID`),
  ADD KEY `serviceIDFK` (`serviceIDFK`),
  ADD KEY `packageID` (`packageID`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`packageID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`);

--
-- Indexes for table `serviceexpertise`
--
ALTER TABLE `serviceexpertise`
  ADD PRIMARY KEY (`serviceExpertiseID`),
  ADD KEY `serviceID` (`serviceID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packagedeals`
--
ALTER TABLE `packagedeals`
  MODIFY `packageDealID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `packageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `serviceexpertise`
--
ALTER TABLE `serviceexpertise`
  MODIFY `serviceExpertiseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`employeeID`) REFERENCES `employee` (`employeeID`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`packageID`) REFERENCES `packages` (`packageID`),
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `packagedeals`
--
ALTER TABLE `packagedeals`
  ADD CONSTRAINT `packagedeals_ibfk_1` FOREIGN KEY (`serviceIDFK`) REFERENCES `serviceexpertise` (`serviceExpertiseID`),
  ADD CONSTRAINT `packagedeals_ibfk_2` FOREIGN KEY (`packageID`) REFERENCES `packages` (`packageID`);

--
-- Constraints for table `serviceexpertise`
--
ALTER TABLE `serviceexpertise`
  ADD CONSTRAINT `serviceexpertise_ibfk_1` FOREIGN KEY (`serviceID`) REFERENCES `services` (`serviceID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
