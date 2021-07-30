-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2021 at 11:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `Id` int(11) NOT NULL,
  `Complaint_type` varchar(255) NOT NULL,
  `Complaint_title` varchar(255) NOT NULL,
  `Complaint_description` varchar(255) NOT NULL,
  `Document_file` longblob NOT NULL,
  `Register_id` int(11) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`Id`, `Complaint_type`, `Complaint_title`, `Complaint_description`, `Document_file`, `Register_id`, `Position`, `Department`, `Status`) VALUES
(1, 'Cafeteria', 'Cafeteria', 'avvv', '', 4, 'Student', 'Information Technology', 1),
(2, 'Transport Service', 'Transport Service', 'gdfg', '', 27, 'Student', 'BBA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_evolution`
--

CREATE TABLE `student_evolution` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Course_No` varchar(255) NOT NULL,
  `Course_title` varchar(255) NOT NULL,
  `Teacher_Name` varchar(255) NOT NULL,
  `Year_of_Study` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_evolution`
--

INSERT INTO `student_evolution` (`Id`, `Name`, `Department`, `Course_No`, `Course_title`, `Teacher_Name`, `Year_of_Study`, `Semester`, `Status`) VALUES
(1, 'Saqlain', 'dsfsd', 'dsff', 'fsdf', 'sdfds', 'fsdf', 'fsdf', 0),
(2, 'Saqlain', 'dsad', 'dsad', 'dsa', 'dsad', 'dsa', 'sadsa', 0),
(3, 'Faizan Ali', 'dsfds', 'fsdf', 'fsd', 'sdfsd', 'fsd', 'fsd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

CREATE TABLE `suggestion` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Suggestion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_evolution`
--

CREATE TABLE `teacher_evolution` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Course_title` varchar(255) NOT NULL,
  `Name_of_Instructor` varchar(255) NOT NULL,
  `Semester` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_evolution`
--

INSERT INTO `teacher_evolution` (`Id`, `Name`, `Course_title`, `Name_of_Instructor`, `Semester`, `Department`, `Degree`, `Status`) VALUES
(1, 'Majid Hussain', 'sad', 'dsa', 'dsa', 'dsa', 'dsa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `Department`, `Position`, `Status`) VALUES
(6, 'Majid Hussain', 'majid@gmail.com', '123', 'Information Technology', 'Teacher', 1),
(8, 'admin', 'admin@bbsul.com', '123', '', '', 1),
(9, 'Dsadsa', 'dsad', 'dsa', 'Information Technology', 'Teacher', 0),
(10, 'Ss', 'ss', 's', '', '', 0),
(11, 'Rfg', 'gf', 'fgf', 'IT Equipment', 'Teacher', 0),
(12, 'Ss', 'SS', 'ss', 'Computer Science', 'Student', 0),
(13, 'Ss', 'SS', 'ss', 'Computer Science', 'Student', 0),
(14, 'Saqlain', 'saqlain@gmail.com', '111', 'Computer Science', 'Teacher', 0),
(15, 'Saqlain', 'saqlain@gmail.com', '555', 'Information Technology', 'Teacher', 0),
(16, 'Aa', 'saqlain@gmail.com', 'aa', 'Information Technology', 'Teacher', 1),
(17, 'Saqlain', 'saqlain@gmail.com', '1111', 'Information Technology', 'Teacher', 0),
(18, 'Saqlain', 'saqlain@gmail.com', 'aaa', 'Information Technology', 'Teacher', 1),
(19, 'Saqlain', 'saqlain@gmail.com', '11111', 'IT Equipment', 'Teacher', 0),
(20, 'Saqlain', 'saqlain@gmail.com', 'aaa', 'Computer Science', 'Teacher', 0),
(21, 'Saqlain', 'saqlain@gmail.com', '123', 'Information Technology', 'Teacher', 0),
(22, 'Looz', 'saqlain@gmail.com', '123', 'Information Technology', 'Teacher', 0),
(23, 'Sss', 'saqlain@gmail.com', '123', 'Information Technology', 'Teacher', 0),
(24, 'Konain', 'saqlain@gmail.com', '123', 'Information Technology', 'Teacher', 0),
(25, 'Mohib', 'mohib@gmail.com', '123', 'Information Technology', 'Teacher', 0),
(26, 'Saqlain', 'saqlain@gmail.com', '123', 'Information Technology', 'Teacher', 0),
(27, 'Saqlain', 'saqlain@gmail.com', '123', 'Information Technology', 'Teacher', 0),
(28, 'Lolz', 'loz@gmail.com', '321', 'Information Technology', 'Teacher', 0),
(29, 'Sss', 'ss@ss.com', '123456789', 'Information Technology', 'Teacher', 1),
(30, 'Faizan Ali', 'faizan@gmail.com', '123456789', 'Information Technology', 'Student', 1),
(31, 'AAA', 'aa@aa.com', '123456789', 'Information Technology', 'Teacher', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Register_id` (`Register_id`);

--
-- Indexes for table `student_evolution`
--
ALTER TABLE `student_evolution`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher_evolution`
--
ALTER TABLE `teacher_evolution`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_evolution`
--
ALTER TABLE `student_evolution`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_evolution`
--
ALTER TABLE `teacher_evolution`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
