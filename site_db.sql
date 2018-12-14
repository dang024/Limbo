-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 05:41 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `founditems_t`
--

CREATE TABLE `founditems_t` (
  `ItemID` int(11) NOT NULL,
  `ItemName` text NOT NULL,
  `DateFound` date NOT NULL,
  `BuildingFound` text NOT NULL,
  `findersName` varchar(80) NOT NULL,
  `findersEmail` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `founditems_t`
--

INSERT INTO `founditems_t` (`ItemID`, `ItemName`, `DateFound`, `BuildingFound`, `findersName`, `findersEmail`) VALUES
(1, 'Sunglasses', '2018-10-28', 'Leo Hall', 'Tori Spychalski', 'victoria.spychalski1@marist.edu'),
(2, 'Blue Backpack', '2018-11-02', 'Dyson', 'Maria Molloy', 'maria.molloy1@marist.edu'),
(3, 'MacBook Pro', '2018-11-05', 'Hancock', 'Danny Simpson', 'daniel.simpson1@marist.edu');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  `name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `create_date`, `update_date`, `name`) VALUES
(1, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Byrne House'),
(2, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Cannavino Library'),
(3, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Champagnat Hall'),
(4, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Chapel'),
(5, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Cornell Boathouse'),
(6, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Donnelly Hall'),
(7, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Dyson Center'),
(8, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Fern Tor'),
(9, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Fontaine Hall'),
(10, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Foy Townhouses'),
(11, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Lower Fulton Street Townhouses'),
(12, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Upper Fulton Street Townhouses'),
(13, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Greystone Hall'),
(14, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Hancock Center'),
(15, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Kieran Gatehouse'),
(16, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Kirk House'),
(17, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Leo Hall'),
(18, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Longview Park'),
(19, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Lowell Thomas'),
(20, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Lower Townhouses'),
(21, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Marian Hall'),
(22, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Marist Boathouse'),
(23, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'McCann Center'),
(24, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Mid-Rise Hall'),
(25, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'North Campus Housing Complex'),
(26, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'St. Ann\'s Hermitage'),
(27, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'St. Peter\'s'),
(28, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Science and Allied Health Building'),
(29, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Sheahan Hall'),
(30, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Steel Plant Studios and Gallery'),
(31, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Student Center/Music Building'),
(32, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Lower West Ceder Townhouses'),
(33, '2018-12-14 05:50:19', '2018-12-14 05:50:19', 'Upper West Ceder Townhouses');

-- --------------------------------------------------------

--
-- Table structure for table `lostitems_t`
--

CREATE TABLE `lostitems_t` (
  `ItemID` int(11) NOT NULL,
  `ItemName` text NOT NULL,
  `DateLost` date NOT NULL,
  `BuildingLost` text NOT NULL,
  `ownersName` varchar(80) NOT NULL,
  `ownersEmail` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lostitems_t`
--

INSERT INTO `lostitems_t` (`ItemID`, `ItemName`, `DateLost`, `BuildingLost`, `ownersName`, `ownersEmail`) VALUES
(1, 'Marist Water Bottle', '2018-10-21', 'Hancock', 'Tori Spychalski', 'victoria.spychalski1@marist.edu'),
(2, 'Apple Watch', '2018-10-29', 'McCann', 'Danny Simpson', 'daniel.simpson1@marist.edu'),
(3, 'Blue Backpack', '2018-11-01', 'Dyson', 'Maria Molloy', 'maria.molloy1@marist.edu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `userName` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `admin_email` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `userName`, `password`, `first_name`, `last_name`, `admin_email`) VALUES
(1, 'admin', 'gaze11e', 'Admin', 'User', 'admin@user.com'),
(2, 'ferris', 'password', 'Ferris', 'Bueller', 'ferris@bueller.com'),
(3, 'totallytori', 'bananas', 'Tori', 'Spychalski', 'torispychalski@gmail.com'),
(4, 'mariamang0', 'ilovemangos', 'Maria', 'Molloy', 'mariamango3@gmail.com'),
(5, 'dango24', 'thisisnotasecurepassword', 'Daniel', 'Simpson', 'daniel.simpson1@marist.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `founditems_t`
--
ALTER TABLE `founditems_t`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lostitems_t`
--
ALTER TABLE `lostitems_t`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `founditems_t`
--
ALTER TABLE `founditems_t`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `lostitems_t`
--
ALTER TABLE `lostitems_t`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
