-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 07:29 PM
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
-- Table structure for table `2018_2019`
--

CREATE TABLE `2018_2019` (
  `st_id` int(11) NOT NULL,
  `st_index` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `2018_2019`
--

INSERT INTO `2018_2019` (`st_id`, `st_index`, `st_name`, `st_com`) VALUES
(1, 192001, 'Wijesundara', 1),
(2, 192002, 'Dilshan', 2),
(3, 192003, 'Bandra', 3),
(4, 192004, 'Jaye', 3),
(5, 192005, 'Herath', 3),
(6, 192006, 'Silva', 2),
(7, 192007, 'Basnayake', 1),
(8, 192008, 'Perera', 2),
(9, 192009, 'Nimal', 1),
(10, 192010, 'Kamal', 2),
(11, 192011, 'Bimsara', 1),
(12, 192012, 'Banuka', 3),
(13, 192013, 'Lila', 2),
(14, 192014, 'Mali', 3),
(15, 192001, 'Wijesundara', 1),
(16, 192002, 'Dilshan', 2),
(17, 192003, 'Bandra', 3),
(18, 192004, 'Jaye', 3),
(19, 192005, 'Herath', 3),
(20, 192006, 'Silva', 2),
(21, 192007, 'Basnayake', 1),
(22, 192008, 'Perera', 2),
(23, 192009, 'Nimal', 1),
(24, 192010, 'Kamal', 2),
(25, 192011, 'Bimsara', 1),
(26, 192012, 'Banuka', 3),
(27, 192013, 'Lila', 2),
(28, 192014, 'Mali', 3);

-- --------------------------------------------------------

--
-- Table structure for table `2019_2020`
--

CREATE TABLE `2019_2020` (
  `st_id` int(11) NOT NULL,
  `st_index` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `2019_2020`
--

INSERT INTO `2019_2020` (`st_id`, `st_index`, `st_name`, `st_com`) VALUES
(1, 192001, 'Wijesundara', 1),
(2, 192002, 'Dilshan', 2),
(3, 192003, 'Bandra', 3),
(4, 192004, 'Jaye', 3),
(5, 192005, 'Herath', 3),
(6, 192006, 'Silva', 2),
(7, 192007, 'Basnayake', 1),
(8, 192008, 'Perera', 2),
(9, 192009, 'Nimal', 1),
(10, 192010, 'Kamal', 2),
(11, 192011, 'Bimsara', 1),
(12, 192012, 'Banuka', 3),
(13, 192013, 'Lila', 2),
(14, 192014, 'Mali', 3);

-- --------------------------------------------------------

--
-- Table structure for table `2020_2021`
--

CREATE TABLE `2020_2021` (
  `st_id` int(11) NOT NULL,
  `st_index` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `2020_2021`
--

INSERT INTO `2020_2021` (`st_id`, `st_index`, `st_name`, `st_com`) VALUES
(1, 192001, 'Wijesundara', 1),
(2, 192002, 'Dilshan', 2),
(3, 192003, 'Bandra', 3),
(4, 192004, 'Jaye', 3),
(5, 192005, 'Herath', 3),
(6, 192006, 'Silva', 2),
(7, 192007, 'Basnayake', 1),
(8, 192008, 'Perera', 2),
(9, 192009, 'Nimal', 1),
(10, 192010, 'Kamal', 2),
(11, 192011, 'Bimsara', 1),
(12, 192012, 'Banuka', 3),
(13, 192013, 'Lila', 2),
(14, 192014, 'Mali', 3);

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
-- Table structure for table `selection_form_table`
--

CREATE TABLE `selection_form_table` (
  `student_id` int(11) NOT NULL,
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

INSERT INTO `selection_form_table` (`student_id`, `sp_choice_1`, `sp_choice_2`, `sp_choice_3`, `jm_choice_1`, `jm_choice_2`, `jm_choice_3`, `gn_choice_1`, `gn_choice_2`, `gn_choice_3`) VALUES
(192153, '', '', '', '2', '11', '', '', '', '');

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
(4, 192116, '200002600334', 'Ravindika I.W.P', '', '', '', '', 19, 1, '200002600334', 1),
(5, 192153, '992420880v', 'Wijesundara W.M.D.I.', 'Wijesundara Mudiyanselage Dulakshan Isurujith Wijesundara', 'IMG-192153.jpg', '0717198680', 'dulakshanwije@gmail.com', 19, 1, '192153', 0);

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

-- --------------------------------------------------------

--
-- Table structure for table `test_students_tables`
--

CREATE TABLE `test_students_tables` (
  `table_id` int(11) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `table_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_students_tables`
--

INSERT INTO `test_students_tables` (`table_id`, `table_name`, `table_count`) VALUES
(1, '2018_2019', 0),
(2, '2019_2020', 0),
(3, '2020_2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test_users`
--

CREATE TABLE `test_users` (
  `id` int(11) NOT NULL,
  `index_number` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `test_users`
--

INSERT INTO `test_users` (`id`, `index_number`, `first_name`, `last_name`, `password`) VALUES
(1, 192153, 'Dulakshan', 'Wijesundara', '123456'),
(2, 192116, 'Pubudu', 'Ravindika', '654321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2018_2019`
--
ALTER TABLE `2018_2019`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `2019_2020`
--
ALTER TABLE `2019_2020`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `2020_2021`
--
ALTER TABLE `2020_2021`
  ADD PRIMARY KEY (`st_id`);

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
-- Indexes for table `selection_form_table`
--
ALTER TABLE `selection_form_table`
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `test_admins`
--
ALTER TABLE `test_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_students_tables`
--
ALTER TABLE `test_students_tables`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `test_users`
--
ALTER TABLE `test_users`
  ADD PRIMARY KEY (`id`,`index_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2018_2019`
--
ALTER TABLE `2018_2019`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `2019_2020`
--
ALTER TABLE `2019_2020`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `2020_2021`
--
ALTER TABLE `2020_2021`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test_admins`
--
ALTER TABLE `test_admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test_students_tables`
--
ALTER TABLE `test_students_tables`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `test_users`
--
ALTER TABLE `test_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
