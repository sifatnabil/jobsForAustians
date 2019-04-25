-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 03:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `jobContext` text NOT NULL,
  `jobRes` text NOT NULL,
  `eduReq` text NOT NULL,
  `addReq` text NOT NULL,
  `empStat` varchar(50) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `addBen` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `mapAdd` text,
  `instruction` text NOT NULL,
  `expireDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `companyName`, `jobContext`, `jobRes`, `eduReq`, `addReq`, `empStat`, `salary`, `experience`, `addBen`, `address`, `mapAdd`, `instruction`, `expireDate`) VALUES
(1, 'Nabil IT', 'Engineer', 'kisuna', 'passkorba', 'parba sob', 'full', '500000', '', '', 'gaital', 'ki korba eita diya', 'aram korba', '2018-08-15'),
(13, 'Multidimension Systems', 'Software Engineer', '- Collaborating with System Analyst to collect requirement\r\n- Estimating time for each task\r\n- Developing quality software based on SRS/Prototype and guideline of System Analyst \r\n- Run Unit Testing and ensure the quality of developed work\r\n- Sometime collaborating with our foreign client\r\n- Fixing bug reported by SQA, Team Lead, Client\r\n- Send daily task report in regular basis\r\n- Attend to daily scrum meeting at the morning', 'We don\'t care', 'Technical Skills (must be proficient):\r\nCodeIgniter, Laravel, JS, jQuery, MySQL and Bootstrap\r\n\r\nTechnical Skills (should be familiar):\r\nElectronJS, Android\r\n\r\nLanguage: Fluent in English\r\n\r\nInterpersonal Skills(must have):\r\n- Must be cooperative\r\n- Must be detail oriented\r\n- Must be passionate on work, can not be satisfied until a job is done\r\n- Capable to work under pressure\r\n- Willing to learn new technologies', 'Full Time', '25K - 30K', 'We don\'t care, but we care work/project experience\r\nProject: Must have several live projects\r\n(Student projects are not considerable)', 'Child and Elder care benefits.\r\nCompensation time.\r\nFamily-friendly benefits.\r\nFlex time.\r\nHealth insurance.\r\nJob resources.\r\nLife and disability insurance.\r\nPhased retirement.', 'Mirpur 11, Dhaka', '', 'Please click here https://goo.gl/forms/JrAkR8tW12OTGtY02 and fill this form\r\n\r\nNB: Recruitment will be done before 1st September', '2018-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider1` varchar(255) NOT NULL,
  `slider2` varchar(255) NOT NULL,
  `slider3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider1`, `slider2`, `slider3`) VALUES
(1, 'uploads/slider1.jpg', 'uploads/slider2.jpg', 'uploads/slider3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(23, 'geralt@rivia.com', 'e10adc3949ba59abbe56e057f20f883e'),
(24, 'sifatnabil@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(25, 'sifatnabil07@outlook.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `customcv` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `userid`, `firstName`, `lastName`, `dob`, `address`, `phone`, `cv`, `customcv`) VALUES
(10, 23, 'Geralt', 'Rivia', '1996-06-28', 'Gaital 934, Kishoreganj', 1627695155, '', NULL),
(11, 24, 'Sifat', 'Nabil', NULL, NULL, NULL, 'uploads/24.txt', 'uploads/24.txt'),
(12, 25, 'Sifat', 'Nabil', '1996-06-27', 'Niketon Bazar, Tajgaon Industrial Area, Tejgaon', 1627695155, '', 'uploads/25.txt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
