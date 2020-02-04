-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2020 at 11:09 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `donatetheblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `blood_group` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact_no` varchar(16) NOT NULL,
  `save_life_date` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `blood_group`, `gender`, `email`, `city`, `dob`, `contact_no`, `save_life_date`, `password`) VALUES
(1, 'Sarjid Islam Habil', 'B+', 'Male', 'sarjid777@gmail.com', 'Poonch', '1969-02-03', '01722260010', '20-04-2017', '670b14728ad9902aecba32e22fa4f6bd'),
(3, 'Sarjid Islam', 'A+', 'Male', 'jishan222@gmail.com', 'Bhimber', '1985-12-20', '01849500045', '0', '96e79218965eb72c92a549dd5a330112'),
(4, 'Jishan Mahmud', 'O+', 'Fe-male', 'kobi22@gmail.com', 'Bhimber', '02-02-1968', '01776620827', '0', '670b14728ad9902aecba32e22fa4f6bd'),
(5, 'NIl Soumik', 'AB-', 'Male', 'nil888@gmail.com', 'Mirpur', '15-03-1978', '01849500456', '0', '670b14728ad9902aecba32e22fa4f6bd'),
(6, 'A S Opu', 'AB+', 'Male', 'opu333@gmail.com', 'Neelum', '06-05-1972', '01776620822', '0', '670b14728ad9902aecba32e22fa4f6bd'),
(7, 'kakai', 'A-', 'Male', 'kakai666@gmail.com', 'Jafarabad', '10-02-1979', '01776620820', '0', '670b14728ad9902aecba32e22fa4f6bd'),
(8, 'ALi Ahmed', 'B+', 'Male', 'jin444@gmail.com', 'Kalat', '13-01-1981', '01776620821', '0', 'fd41e12d031c2ed6cf888638e66be4de'),
(9, 'LIza', 'O+', 'Fe-male', 'liza1@gmail.com', 'Bagh', '16-03-1981', '01776620826', '0', '0be5a963f6fbd5b997a1acb573ba2ddc'),
(10, 'Habil Mia', 'O+', 'Male', 'habil@gmail.com', 'Gaibandha', '05-06-2000', '01789711003', '0', '061b9b670136283461fc1215b15d50f6'),
(11, 'lingkon', 'B-', 'Male', 'lingkon@gmail.com', 'Dhaka', '17-10-2000', '01776620811', '0', '5b1b68a9abf4d2cd155c81a9225fd158'),
(12, 'lingkon', 'B-', 'Male', 'jishan22255@gmail.com', 'Dhaka', '17-10-2000', '01776620811', '0', 'f379eaf3c831b04de153469d1bec345e'),
(13, 'lingkon', 'B-', 'Male', 'jishan22222222@gmail.com', 'Dhaka', '17-10-2000', '01776620811', '0', 'dc0fa7df3d07904a09288bd2d2bb5f40'),
(14, 'miraj', 'AB-', 'Male', 'miraj555@gmail.com', 'Gazipur', '16-12-2000', '01776620866', '0', '96e79218965eb72c92a549dd5a330112'),
(15, 'Sarjid Islam ', 'O+', 'Male', 'habil111@gmail.com', 'Gopalganj', '18-12-1999', '01722260000', '20-04-2017', '670b14728ad9902aecba32e22fa4f6bd'),
(16, 'Hafiz', 'B+', 'Male', 'hafiz222@gmail.com', 'Rajbari', '07-03-1979', '01722260010', '0', '96e79218965eb72c92a549dd5a330112'),
(17, 'Kamal Uddin', 'B-', 'Female', 'kamal@gmail.com', 'Rangpur', '10-03-2000', '01776620800', '0', '96e79218965eb72c92a549dd5a330112'),
(18, 'lingkon Islam', 'O+', 'Male', 'lingkon222@gmail.com', 'Gaibandha', '08-05-2001', '01776620826', '0', '96e79218965eb72c92a549dd5a330112'),
(19, 'Nahid Islam', 'O-', 'Male', 'nahid555@gmail.com', 'Mymensingh', '17-10-1987', '01776620826', '0', '670b14728ad9902aecba32e22fa4f6bd'),
(20, 'Abdullah', 'A+', 'Male', 'abdullah111@gmail.com', 'Kalat', '19-12-1973', '01722230010', '0', '5b1b68a9abf4d2cd155c81a9225fd158'),
(21, 'Shakil Khan', 'B+', 'Male', 'shakil@gmail.com', 'Dera Bugti', '14-08-1999', '01849500045', '0', '96e79218965eb72c92a549dd5a330112'),
(22, 'Bipul Kumar', 'A-', 'Male', 'bipul@gmail.com', 'Gwadar', '04-03-1960', '01776620826', '0', '96e79218965eb72c92a549dd5a330112'),
(23, 'sarjid islam habil', 'A-', 'Male', 'jjjj@gmail.com', 'Sherpur', '13-08-1967', '01776620826', '0', '73882ab1fa529d7273da0db6b49cc4f3'),
(24, 'rubel', 'B-', 'Male', 'sarjid@gmail.com', 'Rangpur', '06-04-1959', '01776620826', '0', 'e3ceb5881a0a1fdaad01296d7554868d'),
(25, 'rubel', 'A+', 'Male', 'sarjids@gmail.com', 'Sherpur', '18-11-1972', '01776620826', '0', '29c3eea3f305d6b823f562ac4be35217'),
(26, 'Habibur', 'A+', 'Male', 'habibur@gmail.com', 'Rajbari', '14-06-1982', '01722290010', '0', '670b14728ad9902aecba32e22fa4f6bd'),
(27, 'soumik', 'A+', 'Male', 'soumik@gmail.com', 'Gaibandha', '15-02-1979', '01776620826', '0', '670b14728ad9902aecba32e22fa4f6bd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
