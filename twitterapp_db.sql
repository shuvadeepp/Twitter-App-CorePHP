-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 11:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitterapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `twitterapptable`
--

CREATE TABLE `twitterapptable` (
  `id` int(11) NOT NULL,
  `intTwitterId` int(11) DEFAULT NULL,
  `intTwitterId_str` int(11) DEFAULT NULL,
  `vchTwitterName` varchar(45) DEFAULT NULL,
  `vchScreenName` varchar(45) DEFAULT NULL,
  `vchLocation` varchar(45) DEFAULT NULL,
  `vchFollowers_count` varchar(45) DEFAULT NULL,
  `vchFriends_count` varchar(45) DEFAULT NULL,
  `vchFavourites_count` varchar(45) DEFAULT NULL,
  `intTwitterVerified` int(11) DEFAULT NULL,
  `twitterProfile_image_url` varchar(145) DEFAULT NULL,
  `twiterProfile_banner_url` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `twitterapptable`
--

INSERT INTO `twitterapptable` (`id`, `intTwitterId`, `intTwitterId_str`, `vchTwitterName`, `vchScreenName`, `vchLocation`, `vchFollowers_count`, `vchFriends_count`, `vchFavourites_count`, `intTwitterVerified`, `twitterProfile_image_url`, `twiterProfile_banner_url`) VALUES
(1, 2147483647, 2147483647, 'shuvadeep', 'shuvadeep2', 'Kolkata, India', '18', '101', '137', 0, 'http://pbs.twimg.com/profile_images/1364676541028868096/bizfm1Ke_normal.jpg', 'https://pbs.twimg.com/profile_banners/4824307551/1587228575');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `twitterapptable`
--
ALTER TABLE `twitterapptable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `twitterapptable`
--
ALTER TABLE `twitterapptable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
