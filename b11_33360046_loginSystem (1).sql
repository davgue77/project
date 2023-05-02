-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql113.byetcluster.com
-- Generation Time: May 02, 2023 at 06:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b11_33360046_loginSystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `photo` longblob NOT NULL,
  `address` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `major` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `email`, `phone`, `photo`, `address`, `occupation`, `age`, `major`, `gender`, `birthdate`) VALUES
(28, 'Luis Burgos', 'owluisburgos@gmail.com', '6602553', 0x6c7569732e706e67, '51 Princess Diana St', 'Student', 18, 'Computer Science', 'Male', '2004-10-08'),
(29, 'John Doe', 'johndoe@gmail.com', '911', 0x6a6f686e2e6a7067, '21 Wonderland Avenue', 'Student', 18, 'Computer Science', 'Male', '2005-04-13'),
(31, 'Alexis R Vega', 'arvega16@gmail.com', '666-6996', 0x616c657869732e706e67, '27 San Narciso Street', 'Student', 21, 'Computer Science', 'Male', '2002-01-09'),
(32, 'David Guerra', 'davgue77@cjc.edu.bz', '637-41', 0x6d616c6570726f66696c652e706e67, 'Juventus Street', 'Student', 18, 'Computer Science', 'Male', '2004-11-14'),
(33, 'Jane Doe', 'janedoe@gmail.com', '666', 0x746573742e6a7067, '32 Pineapple Street', 'Student', 17, 'Computer Science', 'Female', '2005-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `code` mediumint(50) DEFAULT NULL,
  `status` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `image`, `email`, `password`, `code`, `status`) VALUES
(17, 'David Guerra', 0x64656661756c745f696d6167652e706e67, 'davgue77@cjc.edu.bz', '$2y$10$rGkfZ/Sv5FQAjzdygtvsROk1Nxw9ABpZ4wkocxf5mxjUZt4Twa0CS', 0, 'verified'),
(18, 'Luis Burgos', 0x64656661756c745f696d6167652e706e67, 'luibur26@cjc.edu.bz', '$2y$10$2dVkRVnp8aXUtPozdYGwN.6LXGdZr3BR7KrVZ75ItNB5KhA2K2h2e', 0, 'verified'),
(19, 'bloopshoot', 0x64656661756c745f696d6167652e706e67, 'arvega16@gmail.com', '$2y$10$dh8SaUD8OjrVHSGgJGDcaOTUkR6A3sNmFAIrpwcXRbfMdC5taTk62', 0, 'verified'),
(22, 'David Guerra', 0x64656661756c742e706e67, 'davidguerra816@gmail.com', '$2y$10$agva3GjRvlu.L7EGyM2b9Oyfv3xg0Pp3cX0FgkBEw3eRqJLuwbtFq', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
