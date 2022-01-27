-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 03:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talent_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `Name` char(50) NOT NULL,
  `Dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Name`, `Dep_id`) VALUES
(17, 'clothes', 8),
(18, 'accessories', 8),
(19, 'bags', 8),
(20, 'furnitures', 8),
(21, 'novel', 12),
(22, 'poet', 12),
(23, 'short stories', 12),
(24, 'books', 12),
(25, 'cartoon', 10),
(26, 'food', 9),
(27, 'wedding', 9),
(28, 'music', 10),
(29, 'articlevoice', 10),
(30, 'theNile', 9),
(31, 'oilpainting', 11);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(11) NOT NULL,
  `Comment_date` datetime NOT NULL,
  `Comment_content` varchar(1000) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `Name` char(50) NOT NULL,
  `image` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `Name`, `image`) VALUES
(8, 'handmade', '16429040581211146100.jpg'),
(9, 'photography', '16429040891868450957.jpg'),
(10, 'voiceover', '16429041021227553946.jpg'),
(11, 'painting', '1642904119165230917.jpg'),
(12, 'writing', '16429041271924411750.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `Id` int(11) NOT NULL,
  `Title` char(100) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Time` datetime NOT NULL,
  `t_work id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `Name`) VALUES
(1, 'Manager'),
(2, 'Admin'),
(3, 'talent');

-- --------------------------------------------------------

--
-- Table structure for table `talent_work`
--

CREATE TABLE `talent_work` (
  `id` int(11) NOT NULL,
  `Name` char(50) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Image` char(200) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `talent_work`
--

INSERT INTO `talent_work` (`id`, `Name`, `Content`, `Image`, `User_id`, `Cat_id`) VALUES
(48, 'skyscrapers', '1642868656384405571.pdf', '16428686561773395106.jpg', 20, 21),
(49, 'air', '16428686821670381794.png', '16428686822040069938.png', 16, 25),
(50, 'babycap', '16428979851332431114.jpg', '16428979851392164898.jpg', 16, 17),
(51, 'Adrinaline', '16429045001031965526.pdf', '1642904500491397114.jpg', 37, 21),
(52, 'Adrinaline', '16429045061041998883.pdf', '1642904506702501555.jpg', 37, 21),
(53, 'alomary', '16429048771967848417.jpg', '16429048771263461613.jpg', 20, 24),
(54, 'girls', '16429049881836286128.jpg', '16429049881878864893.jpg', 37, 31);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` char(50) NOT NULL,
  `Email` char(50) NOT NULL,
  `Password` char(20) NOT NULL,
  `Profile_Picture` char(100) NOT NULL,
  `Role_id` int(11) DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `Profile_Picture`, `Role_id`) VALUES
(16, 'eman', 'emanyousef335@gmail.com', '02df20745a70967861e3', '1642901314267580513.png', 3),
(20, 'aya', 'amyali1310@gmail.com', 'd8c4ecc461acade5b37f', '16429019961294893451.jpg', 2),
(24, 'hyam', 'hyam@123.com', 'd6eb1bc9dc067401c805', '1642868723913746329.jpg', 1),
(25, 'ola', 'ola@123.com', '27a62713e5d9ca488de6', '16428687421241196596.png', 3),
(37, 'nour', 'nour@gmial.com', 'f97e50bf17e9857dc273', '164289538994774160.png', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `Id` int(11) NOT NULL,
  `Phone` char(20) NOT NULL,
  `Whatsapp` char(20) NOT NULL,
  `Youtube` char(100) NOT NULL,
  `Instagram` char(100) NOT NULL,
  `Facebook` char(100) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`Id`, `Phone`, `Whatsapp`, `Youtube`, `Instagram`, `Facebook`, `User_id`) VALUES
(1, '01088888822', '01088888822', 'https://www.youtube.com/', 'https://www.instagram.com/', 'https://www.facebook.com/', 37),
(2, '01088999822', '01088899922', 'www.youtube.com/eman', 'www.instagram.com/eman', 'www.Facebook.com/eman', 16),
(3, '01088900822', '01088900822', 'www.youtube.com/aya', 'www.instagram.com/aya', 'www.facebook.com.com/aya', 20),
(4, '01066600822', '01066600822', 'www.youtube.com/ola', 'www.instagram.com/ola', 'www.facebook.com/ola', 25),
(5, '01066698822', '01066698822', 'www.youtube.com/hyam', 'www.instagram.com/hyam', 'www.facebook.com/hyam', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dep_id` (`Dep_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `t_work id` (`t_work id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talent_work`
--
ALTER TABLE `talent_work`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`,`Content`,`Image`) USING HASH,
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Dep_id` (`Cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Role_id` (`Role_id`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `talent_work`
--
ALTER TABLE `talent_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `cat_dep_rel` FOREIGN KEY (`Dep_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `post_com_rel` FOREIGN KEY (`post_id`) REFERENCES `post` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_work_rel` FOREIGN KEY (`t_work id`) REFERENCES `talent_work` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `talent_work`
--
ALTER TABLE `talent_work`
  ADD CONSTRAINT `cat_work_rel` FOREIGN KEY (`Cat_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `use_work_rel` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user_role_rel` FOREIGN KEY (`Role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD CONSTRAINT `user_con_rel` FOREIGN KEY (`User_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
