-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 05:43 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_skill`
--

CREATE TABLE `category_skill` (
  `id_category` int(2) NOT NULL,
  `name_category` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_skill`
--

INSERT INTO `category_skill` (`id_category`, `name_category`) VALUES
(1, 'Language'),
(2, 'Sport'),
(3, 'Art'),
(4, 'Books'),
(5, 'Computer Skill');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id_college` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id_college`, `name`) VALUES
(3, 'College of Science and Engineering'),
(4, 'College of Management'),
(5, 'College of Humanities and Social Sciences'),
(6, 'College of Indigenous Studies'),
(7, 'College of Marine Sciences'),
(8, 'Hua-Shih College of Education'),
(9, 'College of The Arts'),
(10, 'College of Environmental Studies'),
(11, 'Committe for General Educatiion');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_department` int(11) NOT NULL,
  `name_department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_college` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `name_department`, `id_college`) VALUES
(1, 'Department of applied mathematics', 3),
(2, 'Department of physics ', 3),
(3, 'Department of life science', 3),
(4, 'Department of chemistry', 3),
(5, 'Department of computer science and information engineering', 3),
(6, 'Department of materials science and engineering', 3),
(7, 'Department of electrical engineering', 3),
(8, 'Department of Opto-Electronic Engineering', 3),
(9, 'Department of Applied Science ', 3),
(10, 'Bacelor Program of Management Science and Finance(International Program)', 4),
(11, 'Executive Master Program of Business Administration', 4),
(12, 'Graduate Institute of Logistics Management', 4),
(13, 'Department of Business Administration', 4),
(14, 'Department of International Business', 4),
(15, 'Department of Accounting', 4),
(16, 'Department of Information Management', 4),
(17, 'Department of Finance', 4),
(18, 'Department of Tourism, Recreation and Leisure Studies', 4),
(19, 'Undergraduate program of Law', 5),
(20, 'Department of Conseling and Clinical Psychology', 5),
(21, 'Department of Sinophone Literatures', 5),
(22, 'Department of Chinese Language and Literature', 5),
(23, 'Department of English', 5),
(24, 'Department of Taiwan and Reional Studies', 5),
(25, 'Department of Sociology', 5),
(26, 'Institute of Financial and Economic Law', 5),
(27, 'Department of Public Administration', 5),
(28, 'Department of History', 5),
(29, 'Department of Economics', 5),
(30, 'Undergraduate Program of Indigenous Social Work', 6),
(31, 'Department of Ethnic Relations and Cultures', 6),
(32, 'Department of Indigenous Languages and Communication', 6),
(33, 'Department of Indigenous Affairs and Ethno-Development', 6),
(34, 'Graduate Institute of Marine Biology', 7),
(35, 'Department of Curriculum Design and Human Potentials ', 8),
(36, 'Department of Education Administration and Management', 8),
(37, 'Department of Special Education', 8),
(38, 'Department of Physical Education and Kinesiology', 8),
(39, 'Department of Early Childhood Eduation', 8),
(40, 'Affiliated Preschool', 8),
(41, 'Department of Music', 9),
(42, 'Department of Arts and Design', 9),
(43, 'Department of Arts and Creative Industries', 9),
(44, 'Master of Humanity and Environmental Science Program', 10),
(45, 'Department of Natural Resources and Environmental Studies\r\n', 10),
(46, 'General Education Center', 11),
(47, 'Arts Center', 11),
(48, 'Physical Education Center', 11),
(49, 'Language Center', 11),
(50, 'Chinese Language Center', 11);

-- --------------------------------------------------------

--
-- Table structure for table `msgs_user`
--

CREATE TABLE `msgs_user` (
  `id_msg` int(11) NOT NULL,
  `student_id1` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `student_id2` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateNtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `msgs_user`
--

INSERT INTO `msgs_user` (`id_msg`, `student_id1`, `student_id2`, `message`, `dateNtime`) VALUES
(1, '410221322', '410521722', 'Trying 1', '2018-09-19 10:19:47'),
(2, '410321352', '410521732', 'Trying ', '2018-09-19 10:19:47'),
(3, '410521722', '410221342', 'Trying2', '2018-09-19 10:19:47'),
(4, '410221322', '410221342', 'Trying 3', '2018-09-19 10:19:47'),
(5, '410321352', '410521732', 'Trying 5', '2018-09-19 10:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id_skill` int(100) NOT NULL,
  `id_category` int(2) NOT NULL,
  `name_skill` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id_skill`, `id_category`, `name_skill`) VALUES
(1, 1, 'English'),
(2, 1, 'Chinese'),
(3, 1, 'French'),
(4, 1, 'Japanese'),
(5, 1, 'German'),
(6, 2, 'Soccer'),
(7, 2, 'Basketball'),
(8, 2, 'Tennis'),
(9, 2, 'Baseball'),
(10, 2, 'Badminton'),
(11, 3, 'Singing'),
(12, 3, 'Drawing'),
(13, 3, 'Oil Painting'),
(14, 4, 'Calculus Several Variables'),
(15, 4, 'Physics Fundamentals'),
(16, 4, 'Linear Algebra 2nd Edition'),
(17, 5, 'JavaScript'),
(18, 5, 'C#'),
(19, 5, 'C++'),
(20, 5, 'Matlab');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `phoneNumber` int(18) NOT NULL,
  `aboutMe` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `availableTime` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `id_department` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`name`, `student_id`, `password`, `email`, `phoneNumber`, `aboutMe`, `status`, `availableTime`, `photo`, `id_department`) VALUES
('John Thomson', '410221322', '123', 'JohnThomson@gmail.com', 971156087, 'Major in MBA', 0, 'everyday 5pm to 10pm', '####', 47),
('Patric Leee', '410221342', '123', 'mymail@gmail.com', 123, 'this is about me', 0, 'everyday 4pm to 11pm', '####', 28),
('Michel Lewis', '410321352', '123', 'MicheLewis@gmail.com', 972256087, 'Major in CSE', 0, 'everyday 3pm to 6pm', '####', 9),
('Mary Bright', '410521722', '1234', 'MaryBright@gmail.com', 973356087, 'Major in CSE', 0, 'everyday 5pm to 8pm', '####', 20),
('Sam Ortiz', '410521732', '1234', 'Sam Ortiz@gmail.com', 975556087, 'Major in Litterature', 0, 'everyday 5pm to 9pm', '####', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_learnt_skills`
--

CREATE TABLE `user_learnt_skills` (
  `id_user_learnt_skills` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  `student_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

CREATE TABLE `user_skills` (
  `id_userskill` int(11) NOT NULL,
  `student_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `id_skill` int(11) NOT NULL,
  `skill_status` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_skills`
--

INSERT INTO `user_skills` (`id_userskill`, `student_id`, `id_skill`, `skill_status`) VALUES
(1, '410221322', 1, 'offers'),
(2, '410321352', 11, 'offers'),
(3, '410521722', 18, 'offers'),
(4, '410221342', 11, 'interested'),
(5, '410521732', 9, 'offers'),
(8, '410221342', 9, 'interested'),
(9, '410321352', 1, 'interested'),
(10, '410221322', 12, 'offers'),
(11, '410221342', 18, 'interested'),
(12, '410221342', 8, 'interested');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_skill`
--
ALTER TABLE `category_skill`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id_college`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`),
  ADD KEY `id_college` (`id_college`);

--
-- Indexes for table `msgs_user`
--
ALTER TABLE `msgs_user`
  ADD PRIMARY KEY (`id_msg`),
  ADD KEY `student_id1` (`student_id1`),
  ADD KEY `student_id2` (`student_id2`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id_skill`,`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `user_learnt_skills`
--
ALTER TABLE `user_learnt_skills`
  ADD PRIMARY KEY (`id_skill`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD PRIMARY KEY (`id_userskill`,`id_skill`,`student_id`),
  ADD UNIQUE KEY `student_id_2` (`student_id`,`id_skill`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_skill`
--
ALTER TABLE `category_skill`
  MODIFY `id_category` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id_college` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_department` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `msgs_user`
--
ALTER TABLE `msgs_user`
  MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id_skill` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_skills`
--
ALTER TABLE `user_skills`
  MODIFY `id_userskill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`id_college`) REFERENCES `college` (`id_college`);

--
-- Constraints for table `msgs_user`
--
ALTER TABLE `msgs_user`
  ADD CONSTRAINT `msgs_user_ibfk_1` FOREIGN KEY (`student_id1`) REFERENCES `user_data` (`student_id`),
  ADD CONSTRAINT `msgs_user_ibfk_2` FOREIGN KEY (`student_id1`) REFERENCES `user_data` (`student_id`),
  ADD CONSTRAINT `msgs_user_ibfk_3` FOREIGN KEY (`student_id2`) REFERENCES `user_data` (`student_id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category_skill` (`id_category`);

--
-- Constraints for table `user_data`
--
ALTER TABLE `user_data`
  ADD CONSTRAINT `user_data_ibfk_1` FOREIGN KEY (`id_department`) REFERENCES `department` (`id_department`);

--
-- Constraints for table `user_learnt_skills`
--
ALTER TABLE `user_learnt_skills`
  ADD CONSTRAINT `user_learnt_skills_ibfk_1` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`),
  ADD CONSTRAINT `user_learnt_skills_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `user_data` (`student_id`);

--
-- Constraints for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD CONSTRAINT `user_skills_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `user_data` (`student_id`),
  ADD CONSTRAINT `user_skills_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `user_data` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
