-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 02:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcoo_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `adminID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee2tbl`
--

CREATE TABLE `employee2tbl` (
  `employeeID` varchar(8) NOT NULL,
  `spouse_surname` varchar(50) NOT NULL,
  `spouse_first_name` varchar(50) NOT NULL,
  `spouse_middle_name` varchar(50) NOT NULL,
  `spouse_suffix` varchar(5) NOT NULL,
  `spouse_occupation` varchar(50) NOT NULL,
  `spouse_business_name` varchar(100) NOT NULL,
  `spouse_business_address` varchar(100) NOT NULL,
  `spouse_telephone_number` varchar(15) NOT NULL,
  `father_surname` varchar(50) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_suffix` varchar(5) NOT NULL,
  `mother_surname` varchar(50) NOT NULL,
  `mother_first_name` varchar(50) NOT NULL,
  `mother_middle_name` varchar(50) NOT NULL,
  `mother_suffix` varchar(5) NOT NULL,
  `name_child` varchar(100) NOT NULL,
  `child_birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee3tbl`
--

CREATE TABLE `employee3tbl` (
  `employeeID` varchar(8) NOT NULL,
  `elementary_school_name` varchar(100) NOT NULL,
  `elementary_basic_education` varchar(30) NOT NULL,
  `elementary_period_attendance_from` varchar(20) NOT NULL,
  `elementary_period_attendance_to` varchar(20) NOT NULL,
  `elementary_highest_level` varchar(50) NOT NULL,
  `elementary_year_graduated` varchar(20) NOT NULL,
  `elementary_scholarship` varchar(100) NOT NULL,
  `secondary_school_name` varchar(100) NOT NULL,
  `secondary_basic_education` varchar(30) NOT NULL,
  `secondary_period_attendance_from` varchar(20) NOT NULL,
  `secondary_period_attendance_to` varchar(20) NOT NULL,
  `secondary_highest_level` varchar(50) NOT NULL,
  `secondary_year_graduated` varchar(20) NOT NULL,
  `secondary_scholarship` varchar(100) NOT NULL,
  `vocational_school_name` varchar(100) NOT NULL,
  `vocational_basic_education` varchar(30) NOT NULL,
  `vocational_period_attendance_from` varchar(20) NOT NULL,
  `vocational_period_attendance_to` varchar(20) NOT NULL,
  `vocational_highest_level` varchar(50) NOT NULL,
  `vocational_year_graduated` varchar(20) NOT NULL,
  `vocational_scholarship` varchar(100) NOT NULL,
  `college_school_name` varchar(100) NOT NULL,
  `college_basic_education` varchar(30) NOT NULL,
  `college_period_attendance_from` varchar(20) NOT NULL,
  `college_period_attendance_to` varchar(20) NOT NULL,
  `college_highest_level` varchar(50) NOT NULL,
  `college_year_graduated` varchar(20) NOT NULL,
  `college_scholarship` varchar(100) NOT NULL,
  `graduate_school_name` varchar(100) NOT NULL,
  `graduate_basic_education` varchar(30) NOT NULL,
  `graduate_period_attendance_from` varchar(20) NOT NULL,
  `graduate_period_attendance_to` varchar(20) NOT NULL,
  `graduate_highest_level` varchar(50) NOT NULL,
  `graduate_year_graduated` varchar(20) NOT NULL,
  `graduate_scholarship` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee4tbl`
--

CREATE TABLE `employee4tbl` (
  `employeeID` varchar(8) NOT NULL,
  `career_service` varchar(100) NOT NULL,
  `career_rating` varchar(20) NOT NULL,
  `career_examination_date` varchar(20) NOT NULL,
  `career_examination_place` varchar(100) NOT NULL,
  `career_number` varchar(20) NOT NULL,
  `career_validity_date` varchar(20) NOT NULL,
  `work_inclusive_dates_from` varchar(30) NOT NULL,
  `work_inclusive_dates_to` varchar(30) NOT NULL,
  `work_position_title` varchar(100) NOT NULL,
  `work_department` varchar(75) NOT NULL,
  `work_monthly_salary` varchar(15) NOT NULL,
  `work_salary` varchar(15) NOT NULL,
  `work_status_appointment` varchar(30) NOT NULL,
  `work_govt_service` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee5tbl`
--

CREATE TABLE `employee5tbl` (
  `employeeID` varchar(8) NOT NULL,
  `voluntary_organization_name` varchar(100) NOT NULL,
  `voluntary_organization_address` varchar(100) NOT NULL,
  `voluntary_inclusive_date_from` varchar(30) NOT NULL,
  `voluntary_inclusive_date_to` varchar(30) NOT NULL,
  `voluntary_number_hours` varchar(20) NOT NULL,
  `voluntary_position` varchar(100) NOT NULL,
  `training_program` varchar(100) NOT NULL,
  `training_inclusive_date_from` varchar(30) NOT NULL,
  `training_inclusive_date_to` varchar(30) NOT NULL,
  `training_number_hours` varchar(20) NOT NULL,
  `training_ld_type` varchar(100) NOT NULL,
  `training_conducted` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee6tbl`
--

CREATE TABLE `employee6tbl` (
  `employeeID` varchar(8) NOT NULL,
  `special_skills` varchar(100) NOT NULL,
  `recognition` varchar(100) NOT NULL,
  `membership_association` varchar(100) NOT NULL,
  `q1a` varchar(10) NOT NULL,
  `q1b` varchar(10) NOT NULL,
  `q2a` varchar(10) NOT NULL,
  `q2b` varchar(10) NOT NULL,
  `q3` varchar(10) NOT NULL,
  `q4` varchar(10) NOT NULL,
  `q5a` varchar(10) NOT NULL,
  `q5b` varchar(10) NOT NULL,
  `q6` varchar(10) NOT NULL,
  `q7a` varchar(10) NOT NULL,
  `q7b` varchar(10) NOT NULL,
  `q7c` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee7tbl`
--

CREATE TABLE `employee7tbl` (
  `employeeID` varchar(8) NOT NULL,
  `reference_name` varchar(100) NOT NULL,
  `reference_address` varchar(100) NOT NULL,
  `reference_contact_number` varchar(100) NOT NULL,
  `government_issued_id` varchar(100) NOT NULL,
  `id_license_passport_number` varchar(100) NOT NULL,
  `government_date_issuance` varchar(30) NOT NULL,
  `government_place_issuance` varchar(100) NOT NULL,
  `oath` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employeetbl`
--

CREATE TABLE `employeetbl` (
  `employeeID` varchar(8) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `suffix` varchar(4) NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(100) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `civil_status` varchar(15) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `bloodType` varchar(5) NOT NULL,
  `gsisID` varchar(20) NOT NULL,
  `pagibigID` varchar(20) NOT NULL,
  `philhealthID` varchar(20) NOT NULL,
  `sssID` varchar(20) NOT NULL,
  `tinID` varchar(20) NOT NULL,
  `employeeNo` varchar(8) NOT NULL,
  `telephone_number` varchar(15) NOT NULL,
  `cellphone_number` varchar(15) NOT NULL,
  `email_add` varchar(100) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `immigrant` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `residential_house_number` varchar(50) NOT NULL,
  `residential_street` varchar(50) NOT NULL,
  `residential_subdivision` varchar(50) NOT NULL,
  `residential_barangay` varchar(50) NOT NULL,
  `residential_city` varchar(50) NOT NULL,
  `residential_province` varchar(50) NOT NULL,
  `residential_zip_code` varchar(5) NOT NULL,
  `permanent_house_number` varchar(50) NOT NULL,
  `permanent_street` varchar(50) NOT NULL,
  `permanent_subdivision` varchar(50) NOT NULL,
  `permanent_barangay` varchar(50) NOT NULL,
  `permanent_city` varchar(50) NOT NULL,
  `permanent_province` varchar(50) NOT NULL,
  `permanent_zip_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hrtbl`
--

CREATE TABLE `hrtbl` (
  `hrID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `employee2tbl`
--
ALTER TABLE `employee2tbl`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employee3tbl`
--
ALTER TABLE `employee3tbl`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employee4tbl`
--
ALTER TABLE `employee4tbl`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employee5tbl`
--
ALTER TABLE `employee5tbl`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employeetbl`
--
ALTER TABLE `employeetbl`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `hrtbl`
--
ALTER TABLE `hrtbl`
  ADD PRIMARY KEY (`hrID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hrtbl`
--
ALTER TABLE `hrtbl`
  MODIFY `hrID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
