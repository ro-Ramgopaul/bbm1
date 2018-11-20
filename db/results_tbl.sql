-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 12:45 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `results_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `results_tbl`
--

CREATE TABLE `results_tbl` (
  `price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ratio` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results_tbl`
--

INSERT INTO `results_tbl` (`price`, `ratio`, `value`, `name`) VALUES
('$8,400', '73.512', '61.75', 'Ben Simmons'),
('$8,600', '68.023', '58.5', 'Stephen Curry'),
('$9,000', '53.889', '48.5', 'Kevin Durant'),
('$6,300', '74.206', '46.75', 'Dennis Schroder'),
('$8,000', '55.625', '44.5', 'Paul George'),
('$8,800', '50.000', '44', 'Joel Embiid'),
('$5,800', '71.121', '41.25', 'Steven Adams'),
('$5,600', '72.768', '40.75', 'Jayson Tatum'),
('$4,200', '82.143', '34.5', 'Marcus Morris'),
('$3,600', '90.278', '32.5', 'Kevon Looney'),
('$7,300', '39.384', '28.75', 'Draymond Green'),
('$6,100', '41.803', '25.5', 'Al Horford'),
('$6,500', '38.077', '24.75', 'Gordon Hayward'),
('$4,500', '54.444', '24.5', 'Terry Rozier'),
('$3,000', '79.167', '23.75', 'Damian Jones'),
('$4,700', '45.745', '21.5', 'Robert Covington'),
('$7,600', '28.289', '21.5', 'Kyrie Irving'),
('$4,900', '42.857', '21', 'J.J. Redick'),
('$5,300', '39.151', '20.75', 'Jaylen Brown'),
('$4,300', '44.186', '19', 'Jerami Grant'),
('$5,900', '31.356', '18.5', 'Klay Thompson'),
('$3,900', '46.154', '18', 'Aron Baynes'),
('$3,600', '47.917', '17.25', 'Nerlens Noel'),
('$3,800', '45.395', '17.25', 'Patrick Patterson'),
('$4,400', '34.659', '15.25', 'Marcus Smart'),
('$5,500', '24.545', '13.5', 'Dario Saric'),
('$3,500', '36.429', '12.75', 'Shaun Livingston'),
('$5,000', '24.500', '12.25', 'Markelle Fultz'),
('$3,200', '35.938', '11.5', 'Alex Abrines'),
('$3,700', '27.703', '10.25', 'Raymond Felton'),
('$3,100', '33.065', '10.25', 'Amir Johnson'),
('$3,200', '30.469', '9.75', 'T.J. McConnell'),
('$3,100', '28.226', '8.75', 'Hamidou Diallo'),
('$4,000', '18.750', '7.5', 'Andre Iguodala'),
('$3,300', '18.182', '6', 'Terrance Ferguson'),
('$3,200', '17.969', '5.75', 'Quinn Cook'),
('$4,100', '10.976', '4.5', 'Jordan Bell'),
('$3,400', '9.559', '3.25', 'Jonas Jerebko'),
('$3,000', '10.833', '3.25', 'Brad Wanamaker'),
('$3,000', '7.500', '2.25', 'Landry Shamet'),
('$3,500', '3.571', '1.25', 'Daniel Theis'),
('$3,000', '4.167', '1.25', 'Semi Ojeleye'),
('$3,000', '0.000', '0', 'Furkan Korkmaz'),
('$3,000', '0.000', '0', 'Guerschon Yabusele'),
('$3,000', '0.000', '0', 'Alfonzo McKinnie'),
('$3,000', '0.000', '0', 'Jonah Bolden');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
