-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 05:01 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(11) NOT NULL,
  `jobPosition` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adminRegdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `jobPosition`, `Email`, `Password`, `adminRegdate`) VALUES
(1, '1', '1', 'celestial.jayvee@ue.edu.ph', '123', '2021-04-20 08:08:28'),


-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblUser` (
  `id` int(10) NOT NULL,
  `cellphnumber` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `lastName` varchar(50) DEFAULT NULL,
  `suffix` varchar(50) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `birthPlace` varchar(50) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `civilStatus` varchar(50) DEFAULT NULL,
  `birthDate` datetime DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `passReset` varchar(100) NOT NULL,
  `dateofRegistration` datetime NOT NULL DEFAULT current_timestamp(),

) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, , `cellphnumber`, `email`, `password`, `creationDate`, `lastName`, `suffix`, 
`firstName`, `middleName`, `birthPlace`, `gender`, `civilStatus`, `birthDate`, `address`, `passReset`, `dateofRegistration`, ) VALUES
(1, '09298164542', 'celestial.jayvee@ue.edu.ph', '123', '', 'celestial', '', 'jayvee', 'celemin', ''),

-- --------------------------------------------------------