-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 07:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rad_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_nic` varchar(100) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_type` varchar(50) NOT NULL,
  `first_time_login` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_nic`, `admin_email`, `admin_password`, `admin_type`, `first_time_login`) VALUES
(1, 'Piyal Madushanka', '865212552V', 'piyal@mmail.com', '865212552V', 'ma', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gn_base_combinations_table`
--

CREATE TABLE `gn_base_combinations_table` (
  `gn_comb_id` int(4) NOT NULL,
  `base_comb_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gn_base_combinations_table`
--

INSERT INTO `gn_base_combinations_table` (`gn_comb_id`, `base_comb_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 3),
(4, 2),
(5, 2),
(6, 1),
(6, 2),
(7, 3),
(8, 3),
(9, 2),
(9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `gn_combinations_table`
--

CREATE TABLE `gn_combinations_table` (
  `gn_comb_id` int(4) NOT NULL,
  `gn_comb_name` varchar(100) NOT NULL,
  `gn_sub_1_id` int(4) NOT NULL,
  `gn_sub_2_id` int(4) NOT NULL,
  `gn_sub_3_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gn_combinations_table`
--

INSERT INTO `gn_combinations_table` (`gn_comb_id`, `gn_comb_name`, `gn_sub_1_id`, `gn_sub_2_id`, `gn_sub_3_id`) VALUES
(1, 'COMB: 1A', 1, 3, 4),
(2, 'COMB: 1B', 2, 3, 4),
(3, 'COMB: 1C', 1, 2, 3),
(4, 'COMB: 2A', 1, 4, 5),
(5, 'COMB: 2B', 2, 4, 5),
(6, 'COMB: 2C', 1, 2, 4),
(7, 'COMB: 3A', 1, 5, 3),
(8, 'COMB: 3B', 2, 5, 3),
(9, 'COMB: 3C', 1, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `gn_compulsory_modules_table`
--

CREATE TABLE `gn_compulsory_modules_table` (
  `gn_sub_id` int(4) NOT NULL,
  `module_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gn_compulsory_modules_table`
--

INSERT INTO `gn_compulsory_modules_table` (`gn_sub_id`, `module_id`) VALUES
(1, 35),
(1, 36),
(1, 40),
(2, 37),
(2, 38),
(2, 42),
(2, 43),
(2, 44),
(3, 1),
(4, 11),
(4, 12),
(5, 23),
(5, 28);

-- --------------------------------------------------------

--
-- Table structure for table `gn_subjects_table`
--

CREATE TABLE `gn_subjects_table` (
  `gn_sub_id` int(4) NOT NULL,
  `gn_sub_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gn_subjects_table`
--

INSERT INTO `gn_subjects_table` (`gn_sub_id`, `gn_sub_name`) VALUES
(1, 'MATH'),
(2, 'STAT'),
(3, 'CMIS'),
(4, 'ELTN'),
(5, 'IMGT');

-- --------------------------------------------------------

--
-- Table structure for table `gn_subsidairy_modules_table`
--

CREATE TABLE `gn_subsidairy_modules_table` (
  `gn_sub_id` int(4) NOT NULL,
  `module_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gn_subsidairy_modules_table`
--

INSERT INTO `gn_subsidairy_modules_table` (`gn_sub_id`, `module_id`) VALUES
(1, 39),
(2, 45),
(3, 2),
(3, 6),
(3, 7),
(4, 13),
(4, 14),
(4, 16),
(4, 18),
(4, 19),
(4, 22),
(5, 24),
(5, 29),
(5, 30),
(5, 31),
(5, 33);

-- --------------------------------------------------------

--
-- Table structure for table `jm_application_module_table`
--

CREATE TABLE `jm_application_module_table` (
  `app_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jm_application_module_table`
--

INSERT INTO `jm_application_module_table` (`app_id`, `module_id`) VALUES
(21, 3),
(21, 16),
(22, 37),
(22, 44),
(22, 45),
(21, 3),
(21, 16);

-- --------------------------------------------------------

--
-- Table structure for table `jm_application_table`
--

CREATE TABLE `jm_application_table` (
  `app_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `comb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jm_application_table`
--

INSERT INTO `jm_application_table` (`app_id`, `student_id`, `comb_id`) VALUES
(21, 5, 1),
(22, 37, 2),
(23, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jm_base_combinations_table`
--

CREATE TABLE `jm_base_combinations_table` (
  `jm_comb_id` int(4) NOT NULL,
  `base_comb_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jm_base_combinations_table`
--

INSERT INTO `jm_base_combinations_table` (`jm_comb_id`, `base_comb_id`) VALUES
(2, 1),
(2, 3),
(3, 3),
(4, 1),
(5, 1),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(8, 3),
(9, 3),
(10, 1),
(10, 3),
(11, 1),
(11, 2),
(12, 2),
(12, 3),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jm_combinations_table`
--

CREATE TABLE `jm_combinations_table` (
  `jm_comb_id` int(11) NOT NULL,
  `jm_comb_name` varchar(100) NOT NULL,
  `major_1_id` int(2) NOT NULL,
  `major_2_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jm_combinations_table`
--

INSERT INTO `jm_combinations_table` (`jm_comb_id`, `jm_comb_name`, `major_1_id`, `major_2_id`) VALUES
(1, 'COMB: 1A', 1, 4),
(2, 'COMB: 1B', 1, 8),
(3, 'COMB: 1C', 1, 6),
(4, 'COMB: 2A', 3, 2),
(5, 'COMB: 2B', 3, 8),
(6, 'COMB: 2C', 3, 6),
(7, 'COMB: 3A', 5, 4),
(8, 'COMB: 3B', 5, 8),
(9, 'COMB: 3C', 5, 2),
(10, 'COMB: 4A', 7, 2),
(11, 'COMB: 4B', 7, 4),
(12, 'COMB: 4C', 7, 6);

-- --------------------------------------------------------

--
-- Table structure for table `jm_compulsory_modules_table`
--

CREATE TABLE `jm_compulsory_modules_table` (
  `major_id` int(5) NOT NULL,
  `module_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jm_compulsory_modules_table`
--

INSERT INTO `jm_compulsory_modules_table` (`major_id`, `module_id`) VALUES
(1, 2),
(1, 6),
(1, 7),
(2, 1),
(2, 6),
(2, 7),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 16),
(3, 18),
(3, 19),
(3, 22),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 18),
(4, 19),
(5, 23),
(5, 24),
(5, 25),
(5, 28),
(6, 23),
(6, 24),
(6, 28),
(7, 35),
(7, 37),
(7, 38),
(7, 40),
(8, 35),
(8, 38),
(8, 40),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jm_majors_table`
--

CREATE TABLE `jm_majors_table` (
  `major_id` int(11) NOT NULL,
  `major_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jm_majors_table`
--

INSERT INTO `jm_majors_table` (`major_id`, `major_name`) VALUES
(1, 'Major 1: CMIS'),
(2, 'Major 2: CMIS'),
(3, 'Major 1: ELTN'),
(4, 'Major 2: ELTN'),
(5, 'Major 1: IMGT'),
(6, 'Major 2: IMGT'),
(7, 'Major 1: MMST'),
(8, 'Major 2: MMST');

-- --------------------------------------------------------

--
-- Table structure for table `jm_subsidairy_modules_table`
--

CREATE TABLE `jm_subsidairy_modules_table` (
  `major_id` int(4) NOT NULL,
  `module_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `jm_subsidairy_modules_table`
--

INSERT INTO `jm_subsidairy_modules_table` (`major_id`, `module_id`) VALUES
(1, 3),
(2, 2),
(2, 3),
(3, 21),
(4, 16),
(4, 21),
(5, 26),
(5, 33),
(6, 33),
(7, 34),
(7, 36),
(7, 39),
(7, 41),
(7, 42),
(7, 43),
(7, 44),
(7, 45),
(8, 34),
(8, 36),
(8, 37),
(8, 39),
(8, 42),
(8, 43),
(8, 44),
(8, 45);

-- --------------------------------------------------------

--
-- Table structure for table `modules_table`
--

CREATE TABLE `modules_table` (
  `module_id` int(11) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_credits` int(2) NOT NULL,
  `module_level` int(2) NOT NULL,
  `module_semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `modules_table`
--

INSERT INTO `modules_table` (`module_id`, `module_name`, `module_credits`, `module_level`, `module_semester`) VALUES
(1, 'CMIS 3114 - Data Communication & Comp. Networks', 4, 3, 1),
(2, 'CMIS 3122 - Rapid Application Development', 2, 3, 1),
(3, 'CMIS 3134 - Computer Architecture & Compiler Design', 4, 3, 1),
(4, 'CMIS 3142 - Computational Methods', 2, 3, 1),
(5, 'CMIS 3153 - Advanced Database Systems', 3, 3, 1),
(6, 'CMIS 3214 - Software Engineering', 4, 3, 2),
(7, 'CMIS 3224 - Web Designing and e-commerce', 4, 3, 2),
(8, 'CMIS 3234 - Computer Graphics and Visualization', 4, 3, 2),
(9, 'CMIS 3242 - Mobile and Ubiquitous Computing', 2, 3, 2),
(10, 'CMIS 3253 - Data Mining', 3, 3, 2),
(11, 'ELTN 3113 - Digital Electronics', 3, 3, 1),
(12, 'ELTN 3121 - Digital Electronics - Lab', 1, 3, 1),
(13, 'ELTN 3133 - Data Acquisition and Signal Processing', 3, 3, 1),
(14, 'ELTN 3141 - Data Acquisition and Signal Processing - Lab', 1, 3, 1),
(15, 'ELTN 3+53 - Applied Electronics Laboratory I', 3, 3, 1),
(16, 'ELTN 3212 - AC Theory', 2, 3, 2),
(17, 'ELTN 3222 - Scientific Writing', 2, 3, 2),
(18, 'ELTN 3233 - Microprocessor and Microcontroller Technology', 3, 3, 2),
(19, 'ELTN 3241 - Microprocessor and Microcontroller Technology - Lab', 1, 3, 2),
(20, 'ELTN 3252 - Electromagnetic Theory', 2, 3, 2),
(21, 'ELTN 3262 - Power Electronics', 2, 3, 2),
(22, 'ELTN 3272 - Optimization Techniques and Applications', 2, 3, 2),
(23, 'IMGT 3112 - Operations Management II', 2, 3, 1),
(24, 'IMGT 3122 - Organization Development', 2, 3, 1),
(25, 'IMGT 3+34 - Design & Development of Computer Based Project', 4, 3, 1),
(26, 'IMGT 3142 - Structured System Analysis & Design Methodologies and Management Information Systems', 2, 3, 1),
(27, 'IMGT 3153 - Environmental Management based on ISO 14001', 3, 3, 1),
(28, 'IMGT 3162 - Business & Industrial Law', 2, 3, 1),
(29, 'IMGT 3212 - Operations Research II', 2, 3, 2),
(30, 'IMGT 3222 - Management of Technology', 2, 3, 2),
(31, 'IMGT 3232 - International Business', 2, 3, 2),
(32, 'IMGT 3242 - Project Management', 2, 3, 2),
(33, 'IMGT 3252 - Industrial Technology', 2, 3, 2),
(34, 'MATH 3114 - Advanced Calculus', 4, 3, 1),
(35, 'MMOD 3113 - Mathematical Methods', 3, 3, 1),
(36, 'MMOD 3124 - Mathematical Models', 4, 3, 1),
(37, 'STAT 3112 - Statistical Inference II', 2, 3, 1),
(38, 'STAT 3124 - Time Series Analysis', 4, 3, 1),
(39, 'MATH 3214 - Discrete Mathematics', 4, 3, 2),
(40, 'MMOD 3214 - Numerical Methods', 4, 3, 2),
(41, 'MATH 3224 - Applied Number Theory', 4, 3, 2),
(42, 'STAT 3212 - Statistical Techniques', 2, 3, 2),
(43, 'STAT 3223 - Operations Research', 3, 3, 2),
(44, 'STAT 3232 - Data Analysis & Preparation of Statistical Reports', 2, 3, 2),
(45, 'STAT 3243 - Theory of Interest', 3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `selection_application_table`
--

CREATE TABLE `selection_application_table` (
  `student_index_number` int(20) NOT NULL,
  `sp_choice_1` varchar(5) NOT NULL,
  `sp_choice_2` varchar(5) NOT NULL,
  `sp_choice_3` varchar(5) NOT NULL,
  `jm_choice_1` varchar(5) NOT NULL,
  `jm_choice_2` varchar(5) NOT NULL,
  `jm_choice_3` varchar(5) NOT NULL,
  `gn_choice_1` varchar(5) NOT NULL,
  `gn_choice_2` varchar(5) NOT NULL,
  `gn_choice_3` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `selection_application_table`
--

INSERT INTO `selection_application_table` (`student_index_number`, `sp_choice_1`, `sp_choice_2`, `sp_choice_3`, `jm_choice_1`, `jm_choice_2`, `jm_choice_3`, `gn_choice_1`, `gn_choice_2`, `gn_choice_3`) VALUES
(192014, '', '', '', '22', '', '', '', '', ''),
(192153, '', '', '', '21', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `selection_form_table`
--

CREATE TABLE `selection_form_table` (
  `student_index_number` int(20) NOT NULL,
  `sp_choice_1` varchar(5) NOT NULL,
  `sp_choice_2` varchar(5) NOT NULL,
  `sp_choice_3` varchar(5) NOT NULL,
  `jm_choice_1` varchar(5) NOT NULL,
  `jm_choice_2` varchar(5) NOT NULL,
  `jm_choice_3` varchar(5) NOT NULL,
  `gn_choice_1` varchar(5) NOT NULL,
  `gn_choice_2` varchar(5) NOT NULL,
  `gn_choice_3` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `selection_form_table`
--

INSERT INTO `selection_form_table` (`student_index_number`, `sp_choice_1`, `sp_choice_2`, `sp_choice_3`, `jm_choice_1`, `jm_choice_2`, `jm_choice_3`, `gn_choice_1`, `gn_choice_2`, `gn_choice_3`) VALUES
(192001, '', '', '', '7', '', '', '6', '', ''),
(192014, '', '', '', '2', '3', '8', '3', '7', ''),
(192153, '', '', '', '1', '2', '4', '1', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(11) NOT NULL,
  `student_index_number` int(20) NOT NULL,
  `student_nic_number` varchar(100) NOT NULL,
  `student_initials_name` varchar(255) NOT NULL,
  `student_full_name` text NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `student_telephone_number` varchar(20) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_batch_id` int(4) NOT NULL,
  `student_base_comb` int(4) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_first_time_login` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_id`, `student_index_number`, `student_nic_number`, `student_initials_name`, `student_full_name`, `student_image`, `student_telephone_number`, `student_email`, `student_batch_id`, `student_base_comb`, `student_password`, `student_first_time_login`) VALUES
(5, 192153, '992420880v', 'Wijesundara W.M.D.I.', 'Wijesundara Mudiyanselage Dulakshan Isurujith Wijesundara', 'IMG-192153.png', '0717198680', 'dulakshanwije@gmail.com', 19, 1, '192153', 0),
(25, 192098, '992082046V', 'Perera S.D.Y.J.', 'Yasith Jayashan Perera', 'IMG-192098.png', '0711122336', 'yasith@mmmail.com', 19, 1, '192098', 0),
(28, 192116, '2.00E+11', 'Ravindika I.W.P.', 'Pubudu Ravindika', 'IMG-192116.png', '0711122335', 'pubudu@mmail.com', 19, 2, '123456', 0),
(29, 192001, '98662335V', 'HMP Abayarathne', 'Poorna Abeyrathne', 'IMG-192001.png', '0799585612', 'poorna@mmail.com', 19, 2, '456456', 0),
(30, 192002, '99336225V', 'RMNB Abeyrathna', '', '', '', '', 19, 3, '99336225V', 1),
(31, 192003, '98664775V', 'AATN Adikari', '', '', '', '', 19, 3, '98664775V', 1),
(32, 192006, '99556223V', 'WKK Asandika', '', '', '', '', 19, 3, '99556223V', 1),
(33, 192007, '97223365V', 'AACN Atapattu', '', '', '', '', 19, 3, '97223365V', 1),
(34, 192010, '2.00E+11', 'AHMG Bakmeedeniya', '', '', '', '', 19, 1, '2.00E+11', 1),
(35, 192071, '971412330V', 'Malinga H.V.R.', '', '', '', '', 19, 3, '971412330V', 1),
(36, 192999, '992426558V', 'Perera A.B.C', '', '', '', '', 19, 2, '992426558V', 1),
(37, 192014, '992420999V', 'Basnayake U.B.N.U.', 'Nisal Udara Basnayake', 'IMG-192014.png', '07171986680', 'nisal@mmail.com', 19, 3, '123456', 0),
(38, 192049, '982420999V', 'Randun T.R.', '', '', '', '', 19, 3, '982420999V', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test_admins`
--

CREATE TABLE `test_admins` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_admins`
--

INSERT INTO `test_admins` (`id`, `password`, `username`, `first_name`, `last_name`) VALUES
(1, '123456', 'admin', 'First', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `gn_base_combinations_table`
--
ALTER TABLE `gn_base_combinations_table`
  ADD KEY `gn_comb_id` (`gn_comb_id`);

--
-- Indexes for table `gn_combinations_table`
--
ALTER TABLE `gn_combinations_table`
  ADD PRIMARY KEY (`gn_comb_id`),
  ADD KEY `gn_sub_1_id` (`gn_sub_1_id`),
  ADD KEY `gn_sub_2_id` (`gn_sub_2_id`),
  ADD KEY `gn_sub_3_id` (`gn_sub_3_id`);

--
-- Indexes for table `gn_compulsory_modules_table`
--
ALTER TABLE `gn_compulsory_modules_table`
  ADD KEY `gn_sub_id` (`gn_sub_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `gn_subjects_table`
--
ALTER TABLE `gn_subjects_table`
  ADD PRIMARY KEY (`gn_sub_id`);

--
-- Indexes for table `gn_subsidairy_modules_table`
--
ALTER TABLE `gn_subsidairy_modules_table`
  ADD KEY `gn_sub_id` (`gn_sub_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `jm_application_module_table`
--
ALTER TABLE `jm_application_module_table`
  ADD KEY `app_id` (`app_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `jm_application_table`
--
ALTER TABLE `jm_application_table`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `comb_id` (`comb_id`);

--
-- Indexes for table `jm_base_combinations_table`
--
ALTER TABLE `jm_base_combinations_table`
  ADD KEY `jm_comb_id` (`jm_comb_id`);

--
-- Indexes for table `jm_combinations_table`
--
ALTER TABLE `jm_combinations_table`
  ADD PRIMARY KEY (`jm_comb_id`),
  ADD KEY `major_1_id` (`major_1_id`),
  ADD KEY `major_2_id` (`major_2_id`);

--
-- Indexes for table `jm_compulsory_modules_table`
--
ALTER TABLE `jm_compulsory_modules_table`
  ADD KEY `major_id` (`major_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `jm_majors_table`
--
ALTER TABLE `jm_majors_table`
  ADD PRIMARY KEY (`major_id`);

--
-- Indexes for table `jm_subsidairy_modules_table`
--
ALTER TABLE `jm_subsidairy_modules_table`
  ADD KEY `major_id` (`major_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `modules_table`
--
ALTER TABLE `modules_table`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `selection_application_table`
--
ALTER TABLE `selection_application_table`
  ADD UNIQUE KEY `student_index_number` (`student_index_number`);

--
-- Indexes for table `selection_form_table`
--
ALTER TABLE `selection_form_table`
  ADD UNIQUE KEY `student_index_number` (`student_index_number`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_index_number` (`student_index_number`);

--
-- Indexes for table `test_admins`
--
ALTER TABLE `test_admins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gn_combinations_table`
--
ALTER TABLE `gn_combinations_table`
  MODIFY `gn_comb_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gn_subjects_table`
--
ALTER TABLE `gn_subjects_table`
  MODIFY `gn_sub_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jm_application_table`
--
ALTER TABLE `jm_application_table`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `jm_combinations_table`
--
ALTER TABLE `jm_combinations_table`
  MODIFY `jm_comb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jm_majors_table`
--
ALTER TABLE `jm_majors_table`
  MODIFY `major_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `modules_table`
--
ALTER TABLE `modules_table`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `test_admins`
--
ALTER TABLE `test_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gn_base_combinations_table`
--
ALTER TABLE `gn_base_combinations_table`
  ADD CONSTRAINT `gn_base_combinations_table_ibfk_1` FOREIGN KEY (`gn_comb_id`) REFERENCES `gn_combinations_table` (`gn_comb_id`);

--
-- Constraints for table `gn_combinations_table`
--
ALTER TABLE `gn_combinations_table`
  ADD CONSTRAINT `gn_combinations_table_ibfk_1` FOREIGN KEY (`gn_sub_1_id`) REFERENCES `gn_subjects_table` (`gn_sub_id`),
  ADD CONSTRAINT `gn_combinations_table_ibfk_2` FOREIGN KEY (`gn_sub_2_id`) REFERENCES `gn_subjects_table` (`gn_sub_id`),
  ADD CONSTRAINT `gn_combinations_table_ibfk_3` FOREIGN KEY (`gn_sub_3_id`) REFERENCES `gn_subjects_table` (`gn_sub_id`);

--
-- Constraints for table `gn_compulsory_modules_table`
--
ALTER TABLE `gn_compulsory_modules_table`
  ADD CONSTRAINT `gn_compulsory_modules_table_ibfk_1` FOREIGN KEY (`gn_sub_id`) REFERENCES `gn_subjects_table` (`gn_sub_id`),
  ADD CONSTRAINT `gn_compulsory_modules_table_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules_table` (`module_id`);

--
-- Constraints for table `gn_subsidairy_modules_table`
--
ALTER TABLE `gn_subsidairy_modules_table`
  ADD CONSTRAINT `gn_subsidairy_modules_table_ibfk_1` FOREIGN KEY (`gn_sub_id`) REFERENCES `gn_subjects_table` (`gn_sub_id`),
  ADD CONSTRAINT `gn_subsidairy_modules_table_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules_table` (`module_id`);

--
-- Constraints for table `jm_application_module_table`
--
ALTER TABLE `jm_application_module_table`
  ADD CONSTRAINT `jm_application_module_table_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `jm_application_table` (`app_id`),
  ADD CONSTRAINT `jm_application_module_table_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules_table` (`module_id`);

--
-- Constraints for table `jm_application_table`
--
ALTER TABLE `jm_application_table`
  ADD CONSTRAINT `jm_application_table_ibfk_1` FOREIGN KEY (`comb_id`) REFERENCES `modules_table` (`module_id`),
  ADD CONSTRAINT `jm_application_table_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student_table` (`student_id`),
  ADD CONSTRAINT `jm_application_table_ibfk_3` FOREIGN KEY (`comb_id`) REFERENCES `jm_combinations_table` (`jm_comb_id`);

--
-- Constraints for table `jm_base_combinations_table`
--
ALTER TABLE `jm_base_combinations_table`
  ADD CONSTRAINT `jm_base_combinations_table_ibfk_1` FOREIGN KEY (`jm_comb_id`) REFERENCES `jm_combinations_table` (`jm_comb_id`);

--
-- Constraints for table `jm_combinations_table`
--
ALTER TABLE `jm_combinations_table`
  ADD CONSTRAINT `jm_combinations_table_ibfk_1` FOREIGN KEY (`major_1_id`) REFERENCES `jm_majors_table` (`major_id`),
  ADD CONSTRAINT `jm_combinations_table_ibfk_2` FOREIGN KEY (`major_2_id`) REFERENCES `jm_majors_table` (`major_id`);

--
-- Constraints for table `jm_compulsory_modules_table`
--
ALTER TABLE `jm_compulsory_modules_table`
  ADD CONSTRAINT `jm_compulsory_modules_table_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `jm_majors_table` (`major_id`),
  ADD CONSTRAINT `jm_compulsory_modules_table_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules_table` (`module_id`);

--
-- Constraints for table `jm_subsidairy_modules_table`
--
ALTER TABLE `jm_subsidairy_modules_table`
  ADD CONSTRAINT `jm_subsidairy_modules_table_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `jm_majors_table` (`major_id`),
  ADD CONSTRAINT `jm_subsidairy_modules_table_ibfk_2` FOREIGN KEY (`module_id`) REFERENCES `modules_table` (`module_id`);

--
-- Constraints for table `selection_application_table`
--
ALTER TABLE `selection_application_table`
  ADD CONSTRAINT `selection_application_table_ibfk_1` FOREIGN KEY (`student_index_number`) REFERENCES `student_table` (`student_index_number`);

--
-- Constraints for table `selection_form_table`
--
ALTER TABLE `selection_form_table`
  ADD CONSTRAINT `selection_form_table_ibfk_1` FOREIGN KEY (`student_index_number`) REFERENCES `student_table` (`student_index_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
