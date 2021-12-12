-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 07:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission`
--

CREATE TABLE `tbl_admission` (
  `admission_id` int(255) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `or_number` varchar(255) CHARACTER SET latin7 COLLATE latin7_estonian_cs NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `stud_houseNo` int(255) NOT NULL,
  `stud_street` varchar(255) NOT NULL,
  `stud_barangay` varchar(255) NOT NULL,
  `stud_municipality` varchar(255) NOT NULL,
  `stud_province` varchar(255) NOT NULL,
  `stud_zipcode` varchar(255) NOT NULL,
  `stud_email` varchar(255) NOT NULL,
  `stud_contact` varchar(255) NOT NULL,
  `stud_dob` varchar(255) NOT NULL,
  `stud_pob` varchar(255) NOT NULL,
  `stud_religion` varchar(255) NOT NULL,
  `stud_citizenship` varchar(255) NOT NULL,
  `stud_gender` varchar(255) NOT NULL,
  `mth_name` varchar(255) NOT NULL,
  `mth_address` varchar(255) NOT NULL,
  `mth_occupation` varchar(255) NOT NULL,
  `mth_no` varchar(255) NOT NULL,
  `fth_name` varchar(255) NOT NULL,
  `fth_address` varchar(255) NOT NULL,
  `fth_occupation` varchar(255) NOT NULL,
  `fth_no` varchar(255) NOT NULL,
  `primary_Sname` varchar(255) NOT NULL,
  `primary_Saddress` varchar(255) NOT NULL,
  `primary_awards` varchar(255) NOT NULL,
  `secondary_Sname` varchar(255) NOT NULL,
  `secondary_Saddress` varchar(255) NOT NULL,
  `secondary_awards` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `course_id` int(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`course_id`, `course_code`, `course_desc`) VALUES
(71, 'bsit', 'Bachelor of Science in Information Technology'),
(72, 'BSBA', 'Bachelor of Science in Business Administration');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fee`
--

CREATE TABLE `tbl_fee` (
  `fee_id` int(255) NOT NULL,
  `fee_name` varchar(255) NOT NULL,
  `fee_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fee`
--

INSERT INTO `tbl_fee` (`fee_id`, `fee_name`, `fee_price`) VALUES
(10, 'book', 10),
(11, '3 units', 3000),
(12, '4 units', 3300),
(13, 'Miscellaneous fee', 1500),
(14, 'computer laboratory', 550),
(15, 'uniform', 550),
(16, 'other school fee', 550);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `room_id` int(11) NOT NULL,
  `room_number` varchar(255) NOT NULL,
  `room_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`room_id`, `room_number`, `room_desc`) VALUES
(64, 'B.E', 'Basic Education Building'),
(65, 'NH', 'North Hall');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id_schedule` int(255) NOT NULL,
  `admission_id` int(255) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `academic_year` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `course` varchar(50) NOT NULL,
  `mode_payment` varchar(50) NOT NULL,
  `subject_code1` varchar(255) NOT NULL,
  `subject_code2` varchar(255) NOT NULL,
  `subject_code3` varchar(255) NOT NULL,
  `subject_code4` varchar(255) NOT NULL,
  `subject_code5` varchar(255) NOT NULL,
  `subject_code6` varchar(255) NOT NULL,
  `subject_code7` varchar(255) NOT NULL,
  `subject_code8` varchar(255) NOT NULL,
  `subject_code9` varchar(255) NOT NULL,
  `subject_code10` varchar(255) NOT NULL,
  `subject_desc1` varchar(255) NOT NULL,
  `subject_desc2` varchar(255) NOT NULL,
  `subject_desc3` varchar(255) NOT NULL,
  `subject_desc4` varchar(255) NOT NULL,
  `subject_desc5` varchar(255) NOT NULL,
  `subject_desc6` varchar(255) NOT NULL,
  `subject_desc7` varchar(255) NOT NULL,
  `subject_desc8` varchar(255) NOT NULL,
  `subject_desc9` varchar(255) NOT NULL,
  `subject_desc10` varchar(255) NOT NULL,
  `unit1` varchar(255) NOT NULL,
  `unit2` varchar(255) NOT NULL,
  `unit3` varchar(255) NOT NULL,
  `unit4` varchar(255) NOT NULL,
  `unit5` varchar(255) NOT NULL,
  `unit6` varchar(255) NOT NULL,
  `unit7` varchar(255) NOT NULL,
  `unit8` varchar(255) NOT NULL,
  `unit9` varchar(255) NOT NULL,
  `unit10` varchar(255) NOT NULL,
  `day1` varchar(255) NOT NULL,
  `day2` varchar(255) NOT NULL,
  `day3` varchar(255) NOT NULL,
  `day4` varchar(255) NOT NULL,
  `day5` varchar(255) NOT NULL,
  `day6` varchar(255) NOT NULL,
  `day7` varchar(255) NOT NULL,
  `day8` varchar(255) NOT NULL,
  `day9` varchar(255) NOT NULL,
  `day10` varchar(255) NOT NULL,
  `room1` varchar(15) NOT NULL,
  `room2` varchar(15) NOT NULL,
  `room3` varchar(15) NOT NULL,
  `room4` varchar(15) NOT NULL,
  `room5` varchar(15) NOT NULL,
  `room6` varchar(15) NOT NULL,
  `room7` varchar(15) NOT NULL,
  `room8` varchar(15) NOT NULL,
  `room9` varchar(15) NOT NULL,
  `room10` varchar(15) NOT NULL,
  `time1` varchar(255) NOT NULL,
  `time2` varchar(255) NOT NULL,
  `time3` varchar(255) NOT NULL,
  `time4` varchar(255) NOT NULL,
  `time5` varchar(255) NOT NULL,
  `time6` varchar(255) NOT NULL,
  `time7` varchar(25) NOT NULL,
  `time8` varchar(255) NOT NULL,
  `time9` varchar(255) NOT NULL,
  `time10` varchar(255) NOT NULL,
  `section1` varchar(255) NOT NULL,
  `section2` varchar(255) NOT NULL,
  `section3` varchar(255) NOT NULL,
  `section4` varchar(255) NOT NULL,
  `section5` varchar(255) NOT NULL,
  `section6` varchar(255) NOT NULL,
  `section7` varchar(255) NOT NULL,
  `section8` varchar(255) NOT NULL,
  `section9` varchar(255) NOT NULL,
  `section10` varchar(255) NOT NULL,
  `tuition` varchar(25) NOT NULL,
  `book` varchar(25) NOT NULL,
  `uniform` varchar(25) NOT NULL,
  `computer_laboratory` varchar(25) NOT NULL,
  `miscellaneous` varchar(25) NOT NULL,
  `other_fee` varchar(25) NOT NULL,
  `total_tuition` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subject_id` int(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `subject_desc` varchar(255) NOT NULL,
  `units` int(40) NOT NULL,
  `course` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time_from` varchar(255) NOT NULL,
  `time_to` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subject_id`, `subject_code`, `subject_desc`, `units`, `course`, `room`, `day`, `time_from`, `time_to`, `section`, `semester`) VALUES
(33, 'sub1', 'subject1', 3, 'Bachelor of Science in Information Technology', 'Basic Education Building', 'M/W', '8:00AM', '9:00AM', '2bsit-02', '1st semester'),
(34, 'sub2', 'subject2', 4, 'Bachelor of Science in Information Technology', 'Basic Education Building', 'T/Th', '8:00AM', '9:00AM', '2bsit-02', '1st semester');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `or_number` varchar(255) CHARACTER SET latin7 COLLATE latin7_estonian_cs NOT NULL,
  `academic` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middle` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`or_number`, `academic`, `year`, `firstname`, `lastname`, `middle`, `semester`) VALUES
('123', '2019-2020', '1st year', 'james', 'Serrano', 'R', '1st semester'),
('1234', '2019-2020', '1st year', 'a', 'a', 'a', '1st semester'),
('12345', '2019-2020', 'aa', 'a', 'a', 'a', '1st semester');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  ADD PRIMARY KEY (`fee_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `tbl_schedule_ibfk_1` (`admission_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`or_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admission`
--
ALTER TABLE `tbl_admission`
  MODIFY `admission_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_fee`
--
ALTER TABLE `tbl_fee`
  MODIFY `fee_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id_schedule` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subject_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD CONSTRAINT `tbl_schedule_ibfk_1` FOREIGN KEY (`admission_id`) REFERENCES `tbl_admission` (`admission_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
