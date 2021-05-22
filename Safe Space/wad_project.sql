-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2021 at 04:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `email_id` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`email_id`, `name`, `size`, `downloads`, `extension`, `Time`) VALUES
('deepikrish24@gmail.com', '20MX108_Unix_CA test 2.pdf', 1003416, 1, '', '2021-03-09 08:49:49'),
('deepikrish24@gmail.com', 'Process_intro.pptx', 1409862, 0, '', '2021-03-09 08:50:12'),
('bhuvi@gmail.com', 'k7 key.docx', 309391, 0, '', '2021-03-09 08:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `email_id` varchar(30) NOT NULL,
  `imagename` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `extension` varchar(5) NOT NULL,
  `Title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`email_id`, `imagename`, `time`, `extension`, `Title`) VALUES
('deepikrish24@gmail.com', 'IMG_20170712_171755.jpg', '2021-03-09 04:18:32', 'jpg', 'Baby'),
('deepikrish24@gmail.com', 'Screenshot_2017-07-20-19-33-47-941_com.google.android.googlequicksearchbox.png', '2021-03-09 04:18:56', 'png', 'Doll'),
('bhuvi@gmail.com', 'FB_IMG_1505136055708.jpg', '2021-03-09 04:27:55', 'jpg', 'first');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `email_id` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` text NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`email_id`, `title`, `content`, `time`) VALUES
('deepikrish24@gmail.com', 'About Me', 'My name is Deepika.I did my UG in PSG College of Technology in the stream of Computer science.Currently persuing my masters at PSG College of Technology', '2021-03-09 04:24:29'),
('deepikrish24@gmail.com', 'First', 'This is my first notes.\r\nHello Everyone.', '2021-03-09 04:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`First_Name`, `Last_Name`, `Email`, `Password`) VALUES
('Bhuvaneswari', 'M', 'bhuvi@gmail.com', 'bhuvaneswari'),
('Deepika', 'Krishnamoorthi', 'deepikrish24@gmail.com', 'deepika24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
