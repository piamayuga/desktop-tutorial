-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 09:32 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` varchar(8) NOT NULL,
  `surName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `suffix` varchar(50) NOT NULL,
  `birthDate` date NOT NULL,
  `birthPlace` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `civilStatus` varchar(20) NOT NULL,
  `height` varchar(6) NOT NULL,
  `weight` varchar(6) NOT NULL,
  `bloodType` varchar(3) NOT NULL,
  `gsisID` varchar(11) NOT NULL,
  `pagibigID` varchar(12) NOT NULL,
  `philhealthID` varchar(12) NOT NULL,
  `sssID` varchar(18) NOT NULL,
  `tinID` varchar(18) NOT NULL,
  `employeeNo` varchar(8) NOT NULL,
  `telephone_number` varchar(13) NOT NULL,
  `cellphone_number` varchar(13) NOT NULL,
  `email_add` varchar(50) NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `immigrant` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `residential_house_number` varchar(15) NOT NULL,
  `residential_street` varchar(15) NOT NULL,
  `residential_subdivision` varchar(15) NOT NULL,
  `residential_barangay` varchar(20) NOT NULL,
  `residential_city` varchar(20) NOT NULL,
  `residential_province` varchar(20) NOT NULL,
  `residential_zip_code` varchar(4) NOT NULL,
  `permanent_house_number` varchar(15) NOT NULL,
  `permanent_street` varchar(15) NOT NULL,
  `permanent_subdivision` varchar(15) NOT NULL,
  `permanent_barangay` varchar(15) NOT NULL,
  `permanent_city` varchar(30) NOT NULL,
  `permanent_province` varchar(30) NOT NULL,
  `permanent_zip_code` varchar(4) NOT NULL,
  `spouse_surname` varchar(50) NOT NULL,
  `spouse_first_name` varchar(50) NOT NULL,
  `spouse_middle_name` varchar(50) NOT NULL,
  `spouse_suffix` varchar(10) NOT NULL,
  `spouse_occupation` varchar(50) NOT NULL,
  `spouse_business_name` varchar(75) NOT NULL,
  `spouse_business_address` varchar(100) NOT NULL,
  `spouse_telephone_number` varchar(13) NOT NULL,
  `father_surname` varchar(50) NOT NULL,
  `father_first_name` varchar(50) NOT NULL,
  `father_middle_name` varchar(50) NOT NULL,
  `father_suffix` varchar(10) NOT NULL,
  `mother_surname` varchar(50) NOT NULL,
  `mother_first_name` varchar(50) NOT NULL,
  `mother_middle_name` varchar(50) NOT NULL,
  `mother_suffix` varchar(10) NOT NULL,
  `name_child` varchar(100) NOT NULL,
  `child_birth_date` date NOT NULL,
  `elementary_school_name` varchar(75) NOT NULL,
  `elementary_basic_education` varchar(50) NOT NULL,
  `elementary_period_attendance_from` varchar(20) NOT NULL,
  `elementary_period_attendance_to` varchar(20) NOT NULL,
  `elementary_highest_level` varchar(15) NOT NULL,
  `elementary_year_graduated` varchar(10) NOT NULL,
  `elementary_scholarship` varchar(100) NOT NULL,
  `secondary_school_name` varchar(75) NOT NULL,
  `secondary_basic_education` varchar(30) NOT NULL,
  `secondary_period_attendance_from` varchar(20) NOT NULL,
  `secondary_period_attendance_to` varchar(20) NOT NULL,
  `secondary_highest_level` varchar(30) NOT NULL,
  `secondary_year_graduated` varchar(15) NOT NULL,
  `secondary_scholarship` varchar(100) NOT NULL,
  `vocational_school_name` varchar(75) NOT NULL,
  `vocational_basic_education` varchar(30) NOT NULL,
  `vocational_period_attendance_from` varchar(20) NOT NULL,
  `vocational_period_attendance_to` varchar(20) NOT NULL,
  `vocational_highest_level` varchar(30) NOT NULL,
  `vocational_year_graduated` varchar(15) NOT NULL,
  `vocational_scholarship` varchar(100) NOT NULL,
  `college_school_name` varchar(75) NOT NULL,
  `college_basic_education` varchar(30) NOT NULL,
  `college_period_attendance_from` varchar(30) NOT NULL,
  `college_period_attendance_to` varchar(30) NOT NULL,
  `college_highest_level` varchar(15) NOT NULL,
  `college_year_graduated` varchar(20) NOT NULL,
  `college_scholarship` varchar(100) NOT NULL,
  `graduate_school_name` varchar(75) NOT NULL,
  `graduate_basic_education` varchar(30) NOT NULL,
  `graduate_period_attendance_from` varchar(30) NOT NULL,
  `graduate_period_attendance_to` varchar(30) NOT NULL,
  `graduate_highest_level` varchar(15) NOT NULL,
  `graduate_year_graduated` varchar(30) NOT NULL,
  `graduate_scholarship` varchar(100) NOT NULL,
  `career_service` varchar(100) NOT NULL,
  `career_rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee2`
--

CREATE TABLE `employee2` (
  `employeeID` varchar(8) NOT NULL,
  `career_examination_date` date NOT NULL,
  `career_examination_place` varchar(100) NOT NULL,
  `career_number` varchar(20) NOT NULL,
  `career_validity_date` date NOT NULL,
  `work_inclusive_dates_from` varchar(50) NOT NULL,
  `work_inclusive_dates_to` varchar(50) NOT NULL,
  `work_position_title` varchar(100) NOT NULL,
  `work_department` varchar(50) NOT NULL,
  `work_monthly_salary` varchar(20) NOT NULL,
  `work_salary` varchar(20) NOT NULL,
  `work_status_appointment` varchar(20) NOT NULL,
  `work_govt_service` varchar(50) NOT NULL,
  `voluntary_organization_name` varchar(100) NOT NULL,
  `voluntary_organization_address` varchar(100) NOT NULL,
  `voluntary_inclusive_date_from` varchar(50) NOT NULL,
  `voluntary_inclusive_date_to` varchar(50) NOT NULL,
  `voluntary_number_hours` varchar(20) NOT NULL,
  `voluntary_position` varchar(100) NOT NULL,
  `training_program` varchar(100) NOT NULL,
  `training_inclusive_date_from` varchar(50) NOT NULL,
  `training_inclusive_date_to` varchar(50) NOT NULL,
  `training_number_hours` varchar(20) NOT NULL,
  `training_ld_type` varchar(50) NOT NULL,
  `training_conducted` varchar(100) NOT NULL,
  `special_skills` varchar(100) NOT NULL,
  `recognition` varchar(100) NOT NULL,
  `membership_association` varchar(100) NOT NULL,
  `q1a` varchar(4) NOT NULL,
  `q1b` varchar(4) NOT NULL,
  `q2a` varchar(4) NOT NULL,
  `q2b` varchar(4) NOT NULL,
  `q3` varchar(4) NOT NULL,
  `q4` varchar(4) NOT NULL,
  `q5a` varchar(4) NOT NULL,
  `q5b` varchar(4) NOT NULL,
  `q6` varchar(4) NOT NULL,
  `q7a` varchar(4) NOT NULL,
  `q7b` varchar(4) NOT NULL,
  `q7c` varchar(4) NOT NULL,
  `reference_name` varchar(100) NOT NULL,
  `reference_address` varchar(100) NOT NULL,
  `reference_contact_number` varchar(13) NOT NULL,
  `government_issued_id` varchar(50) NOT NULL,
  `id_license_passport_number` varchar(30) NOT NULL,
  `government_date_issuance` date NOT NULL,
  `government_place_issuance` varchar(100) NOT NULL,
  `oath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hr`
--

CREATE TABLE `hr` (
  `hrID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `employee2`
--
ALTER TABLE `employee2`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`hrID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hr`
--
ALTER TABLE `hr`
  MODIFY `hrID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
