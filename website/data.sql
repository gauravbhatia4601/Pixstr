-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 12:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Gaurav', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cat_image`
--

CREATE TABLE `cat_image` (
  `path` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat_image`
--

INSERT INTO `cat_image` (`path`, `category`, `type`, `id`) VALUES
('https://source.unsplash.com/1600x900/?nature', 'Nature', '.jpeg', 1),
('https://source.unsplash.com/1600x900/?buildings', 'Buildings', '.jpeg', 2),
('https://source.unsplash.com/1600x900/?animals', 'Animals', '.jpg', 3),
('https://source.unsplash.com/1600x900/?street', 'Street', '.jpg', 4),
('https://source.unsplash.com/1600x900/?skyscapers', 'Skyscapers', '.jpg', 5),
('https://source.unsplash.com/1600x900/?ocean', 'Sea', '.jpeg', 6),
('https://source.unsplash.com/1600x900/?mountains', 'Mountains', '.jpg', 7),
('https://source.unsplash.com/1600x900/?fields', 'Fields', '.jpg', 8),
('https://source.unsplash.com/1600x900/?sports', 'Sports', '.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `path` varchar(500) NOT NULL,
  `category` varchar(20) NOT NULL,
  `dimension` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `category`, `dimension`, `size`) VALUES
(101, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1600*900', '400KB'),
(102, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1600*1200', '844KB'),
(103, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1200*630', '135KB'),
(104, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1680*1050', '146KB'),
(105, 'https://source.unsplash.com/1600x900/?mountians', 'Mountains', '1024*768', '236KB'),
(106, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '3840*2160', '4.04MB'),
(107, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1600*1000', '337KB'),
(108, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1024*768', '535KB'),
(109, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '3305*2206', '7.25MB'),
(110, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '5000*3333', '24.8MB'),
(111, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '2560*1600', '430 KB'),
(112, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1195', '181 KB'),
(113, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '346 KB'),
(114, 'https://source.unsplash.com/1600x900/?sports', 'Sports', '3500*2128', '895 KB'),
(115, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1600*800', '639 KB'),
(116, 'https://source.unsplash.com/1600x900/?street', 'Road', '1920*1200', '840 KB'),
(117, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '2560*1440', '1.62 MB'),
(118, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '1.29 MB'),
(119, 'https://source.unsplash.com/1600x900/?sports', 'Sports', '1024*683', '70.9 KB'),
(120, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '2560*1600', '1.53 MB'),
(121, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1200', '397 KB'),
(122, '../img/maxresdefault (2).jpg', 'Sea', '1920*1080', '455 KB'),
(123, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '552 KB'),
(124, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '376 KB'),
(125, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '541 KB'),
(126, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '332 KB'),
(127, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '505 KB'),
(128, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '563 KB'),
(129, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '423 KB'),
(130, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '222 KB'),
(131, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '296 KB'),
(132, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '716 KB'),
(133, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '590 KB'),
(134, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '703 KB'),
(135, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '590 KB'),
(136, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '347 KB'),
(137, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '619 KB'),
(138, 'https://source.unsplash.com/1600x900/?animals', 'Animals', '1920*1080', '295 KB'),
(141, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '934 KB'),
(142, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '713 KB'),
(143, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '628 KB'),
(144, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '681 KB'),
(145, 'https://source.unsplash.com/1600x900/?buildings', 'Bulidings', '1920*1080', '337 KB'),
(146, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '1.05 MB'),
(147, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '449 KB'),
(148, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '700 KB'),
(149, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '0.99 MB'),
(150, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '671 KB'),
(151, 'https://source.unsplash.com/1600x900/?buildings', 'Buildings', '1920*1080', '0.99 MB'),
(152, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '968 KB'),
(153, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '1.08 MB'),
(154, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '485 KB'),
(155, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '897 KB'),
(156, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '885 KB'),
(157, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '816 KB'),
(158, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080 ', '483 KB'),
(159, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '661 KB'),
(160, 'https://source.unsplash.com/1600x900/?buildings', 'Sports', '1920*1080', '904 KB'),
(161, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '466 KB'),
(162, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '1.07 MB'),
(163, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '563 KB'),
(164, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '946 KB'),
(165, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '748 KB'),
(166, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '474 KB'),
(167, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '593 KB'),
(168, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '791 KB'),
(169, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '943 KB'),
(170, 'https://source.unsplash.com/1600x900/?mountains', 'Mountains', '1920*1080', '570 KB'),
(171, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '836 KB'),
(172, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '585 KB'),
(173, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '431 KB'),
(174, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '800 KB'),
(175, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '491 KB'),
(176, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '497 KB'),
(177, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '688 KB'),
(178, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '444 KB'),
(179, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '377 KB'),
(180, 'https://source.unsplash.com/1600x900/?ocean', 'Sea', '1920*1080', '674 KB'),
(181, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '677 KB'),
(182, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '1.16 MB'),
(183, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '1.79 MB'),
(184, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '1.07 MB'),
(185, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '601 KB'),
(186, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '382 KB'),
(187, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '741 KB'),
(188, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '1.14 MB'),
(189, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '942 KB'),
(190, 'https://source.unsplash.com/1600x900/?nature', 'Nature', '1920*1080', '741 KB'),
(191, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '612 KB'),
(192, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '3840*2160', '5.45 MB'),
(193, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '358 KB'),
(194, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '836 KB'),
(195, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '1.35 MB'),
(196, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '229 KB'),
(197, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '688 KB'),
(198, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '444 KB'),
(199, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '1.04 MB'),
(200, 'https://source.unsplash.com/1600x900/?fields', 'Fields', '1920*1080', '776 KB');

-- --------------------------------------------------------

--
-- Table structure for table `signlogup`
--

CREATE TABLE `signlogup` (
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phoneno` bigint(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signlogup`
--

INSERT INTO `signlogup` (`username`, `password`, `gender`, `phoneno`, `email`) VALUES
('gaurav', '123456', 'Male', 789456123367, 'gaurav@gmail.com'),
('Ninder kaur', '000493', 'Female', 8975643132, 'ninder@gmail.com'),
('nishant', 'Nishantheer', 'Male', 7508058261, 'heernishant@gmail.co'),
('sujil', 'asdfgh', 'Male', 86565656565, 'sjjj@gmailo.com'),
('Sunil', 'sunil123', 'Male', 915632875, 'sunil@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_image`
--
ALTER TABLE `cat_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
